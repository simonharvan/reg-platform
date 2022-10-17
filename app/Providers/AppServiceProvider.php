<?php

namespace App\Providers;

use App\Actions\CopyEventAction;
use App\FormFields\CreateFormField;
use App\Models\CodeText;
use App\Models\Event;
use App\Models\EventLink;
use App\Models\EventMenuItem;
use App\Models\EventPage;
use App\Models\EventText;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;

class AppServiceProvider extends ServiceProvider {
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
        Voyager::addFormField( CreateFormField::class );
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		Voyager::addAction( CopyEventAction::class );
	}
}
