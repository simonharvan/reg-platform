<?php

namespace App\Http\Controllers;

use App\Exports\RegistrationsExport;
use App\Models\Country;
use App\Models\Event;
use App\Models\EventText;
use App\Models\Registration;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
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

        return View::make('registration.index')->with('registrations', $registrations);
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

        return View::make('registration.form', [
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
//		$rules['email'] = 'email|required|unique:registrations,email,NULL,id,event_id,' . Session::get( 'event_id' );
        if (!empty($input['additional_info']) && is_array($input['additional_info'])) {
            $input['additional_info'] = implode(", ", $input['additional_info']);
        }

        if (!empty($input['additional_info_2']) && is_array($input['additional_info_2'])) {
            $input['additional_info_2'] = implode(", ", $input['additional_info_2']);
        }

        if (!empty($input['additional_info_3']) && is_array($input['additional_info_3'])) {
            $input['additional_info_3'] = implode(", ", $input['additional_info_3']);
        }
        $v = Validator::make($input, $rules);

        if ($v->passes()) {

            // $input = array_filter($input, 'strlen');
            $registration = new Registration;
            $registration->fill($input);
            $registration->event_id = Session::get('event_id', 0);
            $registration->group_id = Session::get('group_id', 0);
            $registration->save();

            if ($request::hasFile('passport_copy')) {
                $registration->passport_copy = $this->uploadImage('passport_copy');
                $registration->save();
            }
            if ($request::hasFile('visa_copy')) {
                $registration->visa_copy = $this->uploadImage('visa_copy');
                $registration->save();
            }

            if ($request::hasFile('photo')) {
                $registration->photo = $this->uploadImage('photo');
                $registration->save();
            }

            if ($request::hasFile('additional_file')) {
                $registration->photo = $this->uploadImage('additional_file');
                $registration->save();
            }

            $event_text = EventText::where('event_id', '=', Session::get('event_id'))->where('language_code', '=', App::getLocale())->first();

            Mail::send('emails.confirmation', [
                'registration' => $request::except('_token'),
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

        $registration = Registration::find($id);

        return View::make('registration.show')->with('registration', $registration);
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

        // return View::make('registration.form_'.Session::get('event_id'))->with('registration', $registration);

        $country_list = Country::pluck('name', 'name');

        return View::make('registration.form', array(
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
                $registration->passport_copy = $this->uploadImage('passport_copy');
                $registration->save();
            }
            if (Request::hasFile('visa_copy')) {
                $registration->visa_copy = $this->uploadImage('visa_copy');
                $registration->save();
            }
            if (Request::hasFile('photo')) {
                $registration->photo = $this->uploadImage('photo');
                $registration->save();
            }
            if (Request::hasFile('additional_file')) {
                $registration->photo = $this->uploadImage('additional_file');
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
        //
    }

    public function downloadExcel()
    {

        return Excel::download(new RegistrationsExport(Session::get('event_id')), 'registrations.xlsx');
//        dd('something');
//        $registrations = Registration::where('event_id', '=', Session::get('event_id'))->with('group')->get();
//        $reg_export = array();
//
//        foreach ($registrations as $key => $registration) {
//
//
//            $room_type = 'Standard single';
//            if ($registration->room_type == 1) {
//                $room_type = 'Double twin beds';
//            } elseif ($registration->room_type == 2) {
//                $room_type = 'Double queen size bed';
//            } elseif ($registration->room_type == 3) {
//                $room_type = 'Executive Room';
//            }
//            $reg_export[] = array(
//                'id' => $registration->id,
//                'prefix' => $registration->prefix,
//                'first_name' => $registration->first_name,
//                'last_name' => $registration->last_name,
//                'organization' => $registration->organization,
//                'position' => $registration->position,
//                'address' => $registration->address,
//                'city' => $registration->city,
//                'postal_code' => $registration->postal_code,
//                'country' => $registration->country,
//                'nationality' => $registration->nationality,
//                'email' => $registration->email,
//                'assistant_email' => $registration->assistant_email,
//                'cc_assistant_email' => $registration->cc_assistant_email,
//                'phone' => $registration->phone,
//                'mobile_phone' => $registration->mobile_phone,
//				'fax'                => $registration->fax,
//                'attending_dates' => $registration->attending_dates,
//                '25_may_participation' => $registration->additional_info,
//                '26_may_participation' => $registration->additional_info_2,
//                '27_may_participation' => $registration->additional_info_3,
//				'passport_number'              => $registration->passport_number,
//				'passport_issued_by'           => $registration->passport_issued_by,
//				'passport_date_of_issue'       => $registration->passport_date_of_issue,
//				'passport_date_of_expiry'      => $registration->passport_date_of_expiry,
//				'birthdate'                    => $registration->birthdate,

//				'disabilities'       => $registration->disabilities,
//				'remark'             => $registration->remark,
//
//
//
//
//				'is_visa_required'             => $registration->is_visa_required,
//				'copy_of_passport_uploaded'    => ( $registration->passport_copy ) ? 'yes' : 'no',
//				'copy_of_visa_uploaded'        => ( $registration->visa_copy ) ? 'yes' : 'no',
//				'photo_uploaded'               => ( $registration->photo ) ? 'yes' : 'no',
//				'photo_name'                   => $registration->photo,
//				'additional_file'              => ( $registration->additional_file ) ? 'yes' : 'no',
//				'local_embassy'                => $registration->local_embassy,
//				'departure_city'               => $registration->departure_city,
//				'preferred_departure_date'     => $registration->departure_date,
//				'preferred_return_date'        => $registration->return_date,
//				'needs_accomodation'           => $registration->needs_accomodation,
//				'guest_names'                  => $registration->guest_names,
//				'room_type'                    => $room_type,
//				'room_arrival'                 => $registration->room_arrival,
//				'room_departure'               => $registration->room_departure,
                // 'room_additional_number_night' => $registration->room_additional_number_night,
//				'dietary_requirements'         => $registration->dietary_requirements,
//				'interpretation'               => $registration->interpretation,
//				'group_name'                   => $registration->group->name,
//				'category'                     => $registration->category,
//				'delegation_name'              => $registration->delegation_name,
//				'travel_remarks_or_requests'   => '',
//				'registration_status'          => '',
//				'proposed_role'                => '',
//				'insurance_needed'             => '',
//				'flight_proposed'              => '',
//				'flight_approved'              => '',
//				'flight_sent'                  => '',
//				'itinerary'                    => '',
//				'airlines'                     => '',
//				'departure_from_residence'     => '',
//				'airport_arrival'              => '',
//				'flight_nr_in'                 => '',
//				'arrival_date'                 => '',
//				'time_inairport_departure'     => '',
//				'flight_nr_out'                => '',
//				'departure_date'               => '',
//				'time_out'                     => '',
//				'arrival_to_residence'         => '',
//				'needs_local_transportation'   => '',
//				'nights_paid_by_the_ec'        => '',
//				'total_nights'                 => '',
//				'room_comments'                => '',
//				'amount_of_per_diem'           => '',
//				'nr_of_per_diems'              => '',
//				'total_amount_of_per_diems'    => '',
//				'notes'                        => '',
//            );
//        }
        // dd($reg_export);


//        Excel::create('registrations', function ($excel) use ($reg_export) {
//            $excel->sheet('registrations', function ($sheet) use ($reg_export) {
//                // $sheet->fromModel(Registration::where('event_id' , '=' , Session::get('event_id'))->with('group')->get());
//                $sheet->fromArray($reg_export);
//            });
//        })->download('xls');

    }

    public function downloadPdf($id)
    {

        $group_id = Session::get('group_id', 0);
        if ($group_id == 0 && strlen($id) != 10) {
            return Redirect::to('/');
        }

        if (strlen($id) == 10) {
            $hashids = new Hashids\Hashids('', 10);
            $id = implode("", $hashids->decode($id));
        }

        $registration = Registration::findOrFail($id);
        $template_path = base_path() . '/assets/template/visa_invitation_letter.html';
        $template = file_get_contents($template_path);

        $template_with_content = makeReplacements($template, [
            'created_at' => formatDate($registration->created_at),
            'first_name' => $registration->first_name,
            'surname' => $registration->last_name,
            'organization' => $registration->organization,
            'photo' => $registration->address . ', ' .
                $registration->city . ', ' .
                $registration->postal_code . ', ' .
                $registration->country,
            'passport_number' => $registration->passport_number,
            'birthdate' => $registration->birthdate,
        ]);

        // dd($template_with_content);

        $pdf = PDF::loadHTML($template_with_content);

        // return $pdf->stream();
        return $pdf->download('visa_invitation_letter.pdf');
    }

    public function downloadBadge($id)
    {
        $group_id = Session::get('group_id', 0);
        if ($group_id == 0 && strlen($id) != 10) {
            return Redirect::to('/');
        }

        if (strlen($id) == 10) {
            $hashids = new Hashids\Hashids('', 10);
            $id = implode("", $hashids->decode($id));
        }

        $registration = Registration::findOrFail($id);
        $template_path = base_path() . '/assets/template/badge_somalia.html';
        $template = file_get_contents($template_path);
        $template_with_content = makeReplacements($template, [
            'created_at' => formatDate($registration->created_at),
            'first_name' => $registration->first_name,
            'last_name' => $registration->last_name,
            'organization' => $registration->organization,
            'photo' => base_path() . '/assets/p/' . $registration->photo,
        ]);


//		dd($template_with_content);

        $pdf = PDF::loadHTML($template_with_content);

        // return $pdf->stream();
        return $pdf->download('badge_' . $registration->last_name . '.pdf');
    }

    private function uploadImage($field_name)
    {
        $error_messages = array();
        $file = Input::file($field_name);
        $full = true;
        $filename = str_random(15) . '.' . $file->getClientOriginalExtension();
        $filename = strtolower($filename);
        $fullpath = base_path() . '/assets/p/';
        $upload = $file->move($fullpath, $filename);
        // $uploaded_image = Image::make($file->getRealPath());
        // $uploaded_image->save($fullpath . $filename);
        return $filename;
    }


}
