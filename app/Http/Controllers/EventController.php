<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;


class EventController extends VoyagerBaseController {
	public function copy() {
		$event = Event::where( 'id', request( "id" ) )->first();


		DB::transaction( function () use ( $event ) {
			$copiedEvent = $event->replicate();
			$copiedEvent->push();

			foreach ( $event->languageEvents()->get() as $languageEvents ) {
				$newLanguage = $languageEvents->replicate()->fill( [ 'event_id' => $copiedEvent->id ] );
				$newLanguage->push();
			}

			foreach ( $event->texts()->get() as $value ) {
				$newValue = $value->replicate()->fill( [ 'event_id' => $copiedEvent->id ] );
				$newValue->push();
			}

			foreach ( $event->menuItems()->get() as $value ) {
				$newValue = $value->replicate()->fill( [ 'event_id' => $copiedEvent->id ] );
				$newValue->push();
			}

			foreach ( $event->eventForms()->get() as $value ) {
				$newValue = $value->replicate()->fill( [ 'event_id' => $copiedEvent->id ] );
				$newValue->push();
			}

			foreach ( $event->codes()->get() as $value ) {
				$newValue = $value->replicate()->fill( [
					'event_id' => $copiedEvent->id,
					'password' => $value->password . '_new'
				] );
				$newValue->push();

				foreach ($value->texts()->get() as $text) {
					$newText = $text->replicate()->fill([
						'code_id' => $newValue->id
					]);
					$newText->push();
				}
			}
		} );

		return redirect( route( 'voyager.events.index' ) );
	}
}
