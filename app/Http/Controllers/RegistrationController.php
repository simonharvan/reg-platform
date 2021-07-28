<?php

namespace App\Http\Controllers;

use App\Exports\RegistrationsExport;
use App\Models\Country;
use App\Models\Event;
use App\Models\EventForm;
use App\Models\EventText;
use App\Models\Registration;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class RegistrationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $group_id = Session::get('group_id', 0);
        if ($group_id < 2) {
            return Redirect::route('registration.create');
        }

        $registrations = Registration::where('event_id', '=', Session::get('event_id'))->orderBy('created_at', 'DESC')->get();
        $event_form = EventForm::where('event_id', '=', Session::get('event_id'))->first();

        return View::make('registration.index')
            ->with('registrations', $registrations)
            ->with('event_form', $event_form);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $group_id = Session::get('group_id', 0);
        if ($group_id == 0) {
            return Redirect::to('/');
        }
        $group_id = Session::get('group_id', 0);
        $country_list = Country::pluck('name', 'name');

        $event_text = EventText::where('event_id', '=', Session::get('event_id'))->where('language_code', '=', App::getLocale())->first();

        $event_form = EventForm::where('event_id', '=', Session::get('event_id'))->first();
        if (is_null($event_form)){

            return View::make('registration.form', [
                'event_text' => $event_text,
                'group_id' => $group_id,
                'country_list' => $country_list
            ]);
        }
        return View::make('registration.custom-form', [
            'event_form' => $event_form,
            'event_text' => $event_text,
            'group_id' => $group_id,
            'country_list' => $country_list
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $event = Event::find(Session::get('event_id'));


        $input = $request::all();

        $rules = Registration::$rules;


        foreach ($input as $key => $value) {
	        if (!empty($value) && is_array($value)) {
	        	$input[$key] = implode(', ', $value);
	        }
        }

        $v = Validator::make($input, $rules);

        if ($v->passes()) {
	        $event_form = EventForm::where('event_id', '=', Session::get('event_id'))->first();

            // $input = array_filter($input, 'strlen');
            $registration = new Registration;
            $registration->fill($input);
            $registration->event_id = Session::get('event_id', 0);
            $registration->group_id = Session::get('group_id', 0);
            $registration->save();

            if ($request::hasFile('passport_copy')) {
                $registration->passport_copy = $this->uploadImage(Session::get('event_id', 0), 'passport_copy');
                $registration->save();
            }
            if ($request::hasFile('visa_copy')) {
                $registration->visa_copy = $this->uploadImage(Session::get('event_id', 0),'visa_copy');
                $registration->save();
            }

            if ($request::hasFile('additional_file')) {
                $registration->additional_file = $this->uploadImage(Session::get('event_id', 0),'additional_file');
                $registration->save();
            }

            $event_text = EventText::where('event_id', '=', Session::get('event_id'))->where('language_code', '=', App::getLocale())->first();


            Mail::send('emails.confirmation', [
                'registration' => $request::except('_token'),
                'event_form' => json_decode($event_form->form),
                'event_text' => $event_text,
            ], function ($message) use ($registration, $event, $event_text) {
                $message->from('reg-platform@nookom.eu', 'Registration Platform');
                $message->to($registration->email)->cc($event->email_cc)->replyTo($event->email_reply_to);
                $message->subject($event_text->email_subject);
            });


            return Redirect::to('thankyou')->with('registration_id', $registration->id);
        }

        return Redirect::back()->withInput()->withErrors($v);
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $group_id = Session::get('group_id', 0);
        if ($group_id < 2) {
            return Redirect::route('registration.create');
        }
        $event_form = EventForm::where('event_id', '=', Session::get('event_id'))->first();
        $registration = Registration::find($id);

        return View::make('registration.show')
            ->with('registration', $registration)
            ->with('event_form', $event_form);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        $group_id = Session::get('group_id', 0);

        if ($group_id != 3) {
            return Redirect::route('registration.create');
        }

        $registration = Registration::find($id);

        if (is_null($registration)) {
            return Redirect::route('registration.index');
        }

        $country_list = Country::pluck('name', 'name');

        $event_form = EventForm::where('event_id', '=', Session::get('event_id'))->first();

        $event_text = EventText::where('event_id', '=', Session::get('event_id'))->where('language_code', '=', App::getLocale())->first();


        if (is_null($event_form)){
            return View::make('registration.form', array(
	            'event_text' => $event_text,
                'event_form' => $event_form,
                'group_id' => $registration->group_id,
                'country_list' => $country_list
            ))->with('registration', $registration);
        }

        return View::make('registration.custom-form', array(
	        'event_text' => $event_text,
            'event_form' => $event_form,
            'group_id' => $registration->group_id,
            'country_list' => $country_list
        ))->with('registration', $registration);



    }


    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id)
    {

        $input = Request::all();
        $registration = Registration::find($id);

        $rules = Registration::$rules;
        $v = Validator::make($input, $rules);

        if ($v->passes()) {
            $input = Request::except('_method');
            $registration->fill($input);
            $registration->save();

            if (Request::hasFile('passport_copy')) {
                $registration->passport_copy = $this->uploadImage(Session::get('event_id', 0),'passport_copy');
                $registration->save();
            }
            if (Request::hasFile('visa_copy')) {
                $registration->visa_copy = $this->uploadImage(Session::get('event_id', 0),'visa_copy');
                $registration->save();
            }

            if (Request::hasFile('additional_file')) {
                $registration->additional_file = $this->uploadImage(Session::get('event_id', 0),'additional_file');
                $registration->save();
            }

            Session::flash('message', 'Registration was updated');

            return Redirect::route('registration.index');
        }

        return Redirect::back()->withErrors($v);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {

        if (!isset($id) || $id === 'undefined') {
            return abort(404);
        }
        Registration::where('id', '=', $id)->delete();
        return response('Success', 200);
    }

    public function downloadExcel()
    {
        return Excel::download(new RegistrationsExport(Session::get('event_id')), 'registrations.xlsx');
    }

    public function downloadImage($id, $file)
    {
        if (Session::get('group_id', 0) < 2) {
            return abort(404);
        }

        $registration = Registration::find($id);

        if (empty($registration)) {
            return abort(404);
        }

        $pathToFile = base_path() . '/storage/app/public/event_' . $registration->event_id . '/' . $registration->$file;
        if (!file_exists($pathToFile)) {
            return abort(404);
        }

        return Response::download($pathToFile);
    }

    private function uploadImage($event_id, $field_name)
    {
        $file = Request::file($field_name);
        $filename = Str::random(15) . '.' . $file->getClientOriginalExtension();
        $filename = Str::lower($filename);
        $path = 'public/event_' . $event_id . '/';
        if(!Storage::exists($path)){
            Storage::makeDirectory($path);
        }

        if (Storage::put($path . $filename, file_get_contents($file))) {
            return $filename;
        }
        return $filename;
    }


}
