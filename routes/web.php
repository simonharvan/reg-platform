<?php

use App\Models\Code;
use App\Models\CodeText;
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


Route::get('/', function () {
    if (Session::has('code_id')) {
        return Redirect::to('registration/create');
    }

    return View::make('login');
});

Route::post('/', function (Request $request) {
//    dd($request);
    $password_input = $request->request->get('password');
    $code = Code::where('password', '=', $password_input)->first();

    if (empty($code)) {
        $error_message = __('validation.password');
    } else {
        //zaloguj uzivatela
        Session::put('code_id', $code->id);
        Session::put('group_id', $code->group->id);
        Session::put('event_id', $code->event->id);
        Session::put('event_name', $code->event->name);

        return Redirect::to('welcome-page');
    }

    return View::make('login', array('error_message' => [$error_message]));
});



Route::get('logout', function () {
    Session::flush();

    return Redirect::to('/');
});

Route::get('language/{lang}', function ($lang) {
    Session::put('lang', $lang);
    App::setLocale($lang);

    return Redirect::back();
});


Route::get('welcome-page', function () {
    $code_text = CodeText::where('code_id', '=', Session::get('code_id'))->where('language_code', '=', App::getLocale())->first();

    return View::make('welcome-page', array('welcome_text' => $code_text->instructions));
});

Route::get('statistics', function () {
    $registrations = Registration::where('event_id', '=', Session::get('event_id'));

    return View::make('statistics', array('registrations' => $registrations));
});

Route::get('thankyou', function () {

    $event_id = Session::get('event_id', 0);
    $event_text = EventText::where('event_id', '=', Session::get('event_id'))->where('language_code', '=', App::getLocale())->first();

    return View::make('thankyou', [
        'event_id' => $event_id,
        'event_text' => $event_text,
    ]);
});
Route::get( 'registration/downloadExcel', 'RegistrationController@downloadExcel' );
Route::resource('registration', 'RegistrationController');
