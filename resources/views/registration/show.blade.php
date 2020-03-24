@extends('layouts.platform')


@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Detail of registration</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <table class="table">


        <tr>
            <td>id</td>
            <td>{{$registration->id}}</td>
        </tr>
        <tr>
            <td>event_name</td>
            <td>{{$registration->event->name}}</td>
        </tr>
        <tr>
            <td>group_name</td>
            <td>{{$registration->group->name}}</td>
        </tr>
        <tr>
            <td>prefix</td>
            <td>{{$registration->prefix}}</td>
        </tr>
        <tr>
            <td>first_name</td>
            <td>{{$registration->first_name}}</td>
        </tr>
        <tr>
            <td>last_name</td>
            <td>{{$registration->last_name}}</td>
        </tr>
        <tr>
            <td>organization</td>
            <td>{{$registration->organization}}</td>
        </tr>
        <tr>
            <td>position</td>
            <td>{{$registration->position}}</td>
        </tr>
        <tr>
            <td>address</td>
            <td>{{$registration->address}}</td>
        </tr>
        <tr>
            <td>city</td>
            <td>{{$registration->city}}</td>
        </tr>
        <tr>
            <td>postal_code</td>
            <td>{{$registration->postal_code}}</td>
        </tr>
        <tr>
            <td>country</td>
            <td>{{$registration->country}}</td>
        </tr>
        <tr>
            <td>email</td>
            <td>{{$registration->email}}</td>
        </tr>
        <tr>
            <td>assistant_email</td>
            <td>{{$registration->assistant_email}}</td>
        </tr>
        <tr>
            <td>cc_assistant_email</td>
            <td>{{$registration->cc_assistant_email}}</td>
        </tr>
        <tr>
            <td>phone</td>
            <td>{{$registration->phone}}</td>
        </tr>
        <tr>
            <td>mobile_phone</td>
            <td>{{$registration->mobile_phone}}</td>
        </tr>
        <tr>
            <td>fax</td>
            <td>{{$registration->fax}}</td>
        </tr>
        <tr>
            <td>passport_number</td>
            <td>{{$registration->passport_number}}</td>
        </tr>
        <tr>
            <td>passport_issued_by</td>
            <td>{{$registration->passport_issued_by}}</td>
        </tr>
        <tr>
            <td>passport_date_of_issue</td>
            <td>{{$registration->passport_date_of_issue}}</td>
        </tr>
        <tr>
            <td>passport_date_of_expiry</td>
            <td>{{$registration->passport_date_of_expiry}}</td>
        </tr>
        <tr>
            <td>passport_copy</td>
            <td>
                @if ($registration->passport_copy)
                    <a href="{{ URL::to('registration/' . $registration->id . '/download/passport_copy') }}"
                       target="_blank">download</a>
                @endif
            </td>
        </tr>
        <tr>
            <td>visa_copy</td>
            <td>
                @if ($registration->visa_copy)
                    <a href="{{ URL::to('registration/' . $registration->id . '/download/visa_copy') }}"
                       target="_blank">download</a>
                @endif
            </td>
        </tr>
        <tr>
            <td>photo</td>
            <td>
                @if ($registration->photo)
                    <a href="{{ URL::to('registration/' . $registration->id . '/download/photo') }}" target="_blank"><img height="50" src="{{ URL::to('registration/' . $registration->id . '/download/photo') }}"></a>
                @endif
            </td>
        </tr>
        <tr>
            <td>additional_file</td>
            <td>
                @if ($registration->additional_file)
                    <a href="{{ URL::to('registration/' . $registration->id . '/download/additional_file') }}"
                       target="_blank">download</a>
                @endif
            </td>
        </tr>
        <tr>
            <td>birthdate</td>
            <td>{{$registration->birthdate}}</td>
        </tr>
        <tr>
            <td>nationality</td>
            <td>{{$registration->nationality}}</td>
        </tr>
        <tr>
            <td>is_visa_required</td>
            <td>{{$registration->is_visa_required}}</td>
        </tr>
        <tr>
            <td>local_embassy</td>
            <td>{{$registration->local_embassy}}</td>
        </tr>
        <tr>
            <td>departure_city</td>
            <td>{{$registration->departure_city}}</td>
        </tr>
        <tr>
            <td>departure_date</td>
            <td>{{$registration->departure_date}}</td>
        </tr>
        <tr>
            <td>return_date</td>
            <td>{{$registration->return_date}}</td>
        </tr>
        <tr>
            <td>needs_accomodation</td>
            <td>{{$registration->needs_accomodation}}</td>
        </tr>
        <tr>
            <td>guest_names</td>
            <td>{{$registration->guest_names}}</td>
        </tr>
        <tr>
            <td>room_type</td>
            <td>{{$registration->room_type}}</td>
        </tr>
        <tr>
            <td>room_arrival</td>
            <td>{{$registration->room_arrival}}</td>
        </tr>
        <tr>
            <td>room_departure</td>
            <td>{{$registration->room_departure}}</td>
        </tr>
        <tr>
            <td>room_additional_number_night</td>
            <td>{{$registration->room_additional_number_night}}</td>
        </tr>
        <tr>
            <td>dietary_requirements</td>
            <td>{{$registration->dietary_requirements}}</td>
        </tr>
        <tr>
            <td>interpretation</td>
            <td>{{$registration->interpretation}}</td>
        </tr>
        <tr>
            <td>disabilities</td>
            <td>{{$registration->disabilities}}</td>
        </tr>
        <tr>
            <td>attending_dates</td>
            <td>{{$registration->attending_dates}}</td>
        </tr>
        <tr>
            <td>remarks</td>
            <td>{{$registration->remark}}</td>
        </tr>
        <tr>
            <td>additional_info</td>
            <td>{{$registration->additional_info}}</td>
        </tr>
        <tr>
            <td>additional_info_2</td>
            <td>{{$registration->additional_info_2}}</td>
        </tr>


    </table>

    <p>&nbsp;</p>

@stop