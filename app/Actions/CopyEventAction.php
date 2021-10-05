<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class CopyEventAction extends AbstractAction {
	public function getTitle() {
		// Action title which display in button based on current status
		return 'Copy';
	}

	public function getIcon() {
		// Action icon which display in left of button based on current status
		return 'voyager-documentation';
	}

	public function getAttributes() {
		// Action button class
		return [
			'class' => 'btn btn-sm btn-primary',
		];
	}

	public function shouldActionDisplayOnDataType() {
		// show or hide the action button, in this case will show for posts model
		return $this->dataType->slug == 'events';
	}

	public function getDefaultRoute() {
		// URL for action button when click
		return route( 'event.copy', array( "id" => $this->data->{$this->data->getKeyName()} ) );
	}
}
