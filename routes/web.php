<?php

use App\Models\Code;
use App\Models\CodeText;
use App\Models\Event;
use App\Models\EventPage;
use App\Models\EventText;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get( '/', function ( Request $request ) {
//	$code = $request->query( 'code', '' );

	if ( ! empty( $code ) ) {
		$codeModel = Code::where( 'password', '=', $code )->first();
		if ( isset( $codeModel ) && ! empty( $codeModel ) && strcmp( $codeModel->password, $code ) == 0 ) {
			Session::put( 'code_id', $codeModel->id );
			Session::put( 'group_id', $codeModel->group->id );
			Session::put( 'event_id', $codeModel->event->id );
			Session::put( 'event_name', $codeModel->event->name );

			return Redirect::to( 'welcome-page' );
		}
	}

	if ( Session::has( 'code_id' ) ) {

		return Redirect::to( 'welcome-page' );
	}

	return View::make( 'login' );
} );

Route::post( '/', function ( Request $request ) {

	$password_input = $request->request->get( 'password' );
	$code           = Code::where( 'password', '=', $password_input )->first();

	if ( empty( $code ) ) {
		$error_message = __( 'validation.password' );
	} else {
		//zaloguj uzivatela
		Session::put( 'code_id', $code->id );
		Session::put( 'group_id', $code->group->id );
		Session::put( 'event_id', $code->event->id );
		Session::put( 'event_name', $code->event->name );

		return Redirect::to( 'welcome-page' );
	}

	return View::make( 'login', array( 'error_message' => [ $error_message ] ) );
} );


Route::get( 'logout', function () {

    $event = Event::where('id', '=', Session::get('event_id', 1))->first();
    Session::flush();
    if (!empty($event->redirect_url)) {
        return Redirect::to($event->redirect_url);
    }
	return Redirect::to( '/' );
} );

Route::get( 'language/{lang}', function ( $lang ) {
	Session::put( 'lang', $lang );
	App::setLocale( $lang );

	return Redirect::back();
} );


Route::get( 'welcome-page', function () {
	$code_text = CodeText::where( 'code_id', '=', Session::get( 'code_id' ) )->where( 'language_code', '=', App::getLocale() )->first();

    if (!isset($code_text)) {
        $code_text = CodeText::where('code_id', '=', Session::get('code_id'))->first();
        if (!isset($code_text)) {
            return Redirect::to('/registration/create');
        }

        Session::put('lang', $code_text->language_code);
        App::setLocale($code_text->language_code);
    }
    return View::make('welcome-page', array('welcome_text' => $code_text->instructions));
} );

Route::get( 'event-page/{id}', function ( $id ) {
	$event_page = EventPage::where( 'id', '=', $id )
	                       ->where( 'event_id', '=', Session::get( 'event_id' ) )
	                       ->first();
	if ( isset( $event_page ) ) {
		return View::make( 'event-page', array( 'event_page' => $event_page ) );
	} else {
		return Redirect::to( '/' );
	}
} );

Route::get( 'statistics', function () {
	$registrations = Registration::where( 'event_id', '=', Session::get( 'event_id' ) );

	return View::make( 'statistics', array( 'registrations' => $registrations ) );
} );

Route::get( 'thankyou', function () {

	$event_id   = Session::get( 'event_id' );
    $event = Event::where( 'id', '=', $event_id )->first();
	$event_text = EventText::where( 'event_id', '=', $event_id )->where( 'language_code', '=', App::getLocale() )->first();

	return View::make( 'thankyou', [
		'event_id'   => $event_id,
        'event' => $event,
		'event_text' => $event_text,
	] );
} );
Route::get( 'registration/{id}/download/{file}', 'RegistrationController@downloadImage' );
Route::get( 'registration/downloadExcel', 'RegistrationController@downloadExcel' );
Route::resource( 'registration', 'RegistrationController' );


Route::group( [ 'prefix' => 'admin' ], function () {
	Voyager::routes();
	Route::get('event/copy','EventController@copy')->name('event.copy');
} );
