<?php

namespace App\Exports;

use App\Models\EventForm;
use App\Models\Registration;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;


class RegistrationsExport implements FromArray, WithHeadings {

	private $id;
	private $registrations;
	private $keys;

	public function __construct( $id ) {
		$this->id   = $id;
		$tmp        = Registration::where( 'event_id', '=', $this->id )->with( 'group' );
		$event_form = EventForm::where( 'event_id', '=', $this->id )->first();
		if ( isset( $event_form ) && isset( $event_form->form ) ) {
			$event_form = json_decode( $event_form->form );
		}
		$registrations = $tmp->get()->toArray();

		$first = $tmp->first();
		$helperCheckboxes = [];
		if ( isset( $first ) ) {
			if ( isset( $event_form ) ) {
				$checkboxesAddedKeys = [];
				foreach ( get_object_vars( $event_form ) as $key => $form_item ) {
					if ( $form_item->type === 'checkboxes' ) {
						foreach ( $form_item->options as $option ) {
							$helperCheckboxes[$option] = $key;
							$checkboxesAddedKeys[] = strip_tags( $option );
						}
					} else {
						$checkboxesAddedKeys[] = $key;
					}
				}

				$filteredAndLabelKeys = array_merge( [ 'group' ],
					array_map( function ( $item ) use ( $event_form ) {
						if ( isset( $event_form->$item ) && isset( $event_form->$item->label ) ) {
							return $event_form->$item->label;
						}

						return $item;
					}, $checkboxesAddedKeys )
				);


				$this->keys = array_combine(
					array_merge( [ 'group' ],$checkboxesAddedKeys),
					$filteredAndLabelKeys
				);
			} else {
				$this->keys = array_merge( array_keys( $first->toArray() ), [ 'group' ] );
			}
		} else {
			$this->keys = [];
		}

		if ( isset( $event_form ) ) {
			$this->registrations = array_map( function ( $item ) use ( $event_form ) {
				$array = array_filter( $item, function ( $property ) use ( $event_form, $item ) {
					return isset( $event_form->$property );
				}, ARRAY_FILTER_USE_KEY );


				return array_merge( [
					'group' => $item['group']['name']
				], array_map( function ( $property ) {
					return strip_tags( $property );
				}, $array ) );
			}, $registrations );
		} else {
			$this->registrations = $registrations;
		}

		$this->registrations = array_map( function ( $item ) use ($helperCheckboxes){
			$registration = [];
			foreach ( $this->keys as $key => $value ) {
				if (isset($helperCheckboxes[$key])) {
					if (in_array($key, explode(', ',$item[$helperCheckboxes[$key]]))) {
						$registration[] = '✓';
					} else {
						$registration[] = '';
					}
				} else {
					$registration[] = $item[ $key ];
				}

			}

			return $registration;
		}, $this->registrations );
	}


	/**
	 * @return array
	 */
	public function headings(): array {
		return $this->keys;
	}

	/**
	 * @return array
	 */
	public function array(): array {
		return $this->registrations;
	}
}
