@extends('layouts.platform')


@section('content')


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Registrated Users</h1>
            @if (Session::has('message'))
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                    </button>{{ Session::get('message') }}</div>
            @endif
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ App\Models\Event::find(Session::get('event_id'))->name }}
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th></th>
                                <th>id</th>
                                <th>group</th>
                                <th>name of delegation</th>
                                <th>category</th>
                                <th>prefix</th>
                                <th>first_name</th>
                                <th>last_name</th>
                                <th>organization</th>
                                <th>position</th>
                                <th>address</th>
                                <th>city</th>
                                <th>postal_code</th>
                                <th>country</th>
                                <th>email</th>
                                <th>assistant_email</th>
                                <th>cc_assistant_email</th>
                                <th>phone</th>
                                <th>mobile_phone</th>
                                <th>fax</th>
                                <th>attending_dates</th>
{{--                                <th>passport_number</th>--}}
{{--                                <th>passport_issued_by</th>--}}
{{--                                <th>passport_date_of_issue</th>--}}
{{--                                <th>passport_date_of_expiry</th>--}}
{{--                                <th>birthdate</th>--}}
{{--                                <th>nationality</th>--}}
{{--                                <th>is_visa_required</th>--}}
{{--                                <th>visa_copy</th>--}}
{{--                                <th>local_embassy</th>--}}
{{--                                <th>departure_city</th>--}}
{{--                                <th>departure_date</th>--}}
{{--                                <th>return_date</th>--}}
{{--                                <th>needs_accomodation</th>--}}
{{--                                <th>guest_names</th>--}}
{{--                                <th>room_type</th>--}}
{{--                                <th>room_arrival</th>--}}
{{--                                <th>room_departure</th>--}}
{{--                                <th>room_additional_number_night</th>--}}
{{--                                <th>dietary_requirements</th>--}}
{{--                                <th>interpretation</th>--}}
{{--                                <th>disabilities</th>--}}
{{--                                <th>remark</th>--}}
                                <th>additional_info</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($registrations as $registration)
                                <tr class="odd gradeX">
                                    <td>
                                        <a href="{{ URL::action('RegistrationController@show', array($registration->id)) }}"
                                           class="btn btn-info btn-circle" data-following="false"><i
                                                    class="fa fa-search"></i></a>
                                        <a href="{{ URL::action('RegistrationController@edit', array($registration->id)) }}"
                                           class="btn btn-info btn-circle" data-following="false"><i
                                                    class="fa fa-edit"></i></a>
                                        {{--<a href="{{ asset('assets/invitation_letter_somalia.pdf')  }}"--}}
                                           {{--class="btn btn-info btn-circle" data-following="false" target="_blank">PDF</a>--}}
                                        {{--<a href="{{ URL::action('RegistrationController@downloadBadge', array($registration->id)) }}"--}}
                                           {{--class="btn btn-info btn-circle" data-following="false"><i class="fas fa-id-badge" aria-hidden="true"></i></a>--}}
                                    </td>
                                    <td>{{ $registration->id}}</td>
                                    <td>{{ $registration->group->name}}</td>
                                    <td>{{ $registration->delegation_name}}</td>
                                    <td>{{ $registration->category}}</td>
                                    <td>{{ $registration->prefix}}</td>
                                    <td>{{ $registration->first_name}}</td>
                                    <td>{{ $registration->last_name}}</td>
                                    <td>{{ $registration->organization}}</td>
                                    <td>{{ $registration->position}}</td>
                                    <td>{{ $registration->address}}</td>
                                    <td>{{ $registration->city}}</td>
                                    <td>{{ $registration->postal_code}}</td>
                                    <td>{{ $registration->country}}</td>
                                    <td>{{ $registration->email}}</td>
                                    <td>{{ $registration->assistant_email}}</td>
                                    <td>{{ $registration->cc_assistant_email}}</td>
                                    <td>{{ $registration->phone}}</td>
                                    <td>{{ $registration->mobile_phone}}</td>
                                    <td>{{ $registration->fax}}</td>
                                    <td>{{ $registration->attending_dates}}</td>
{{--                                    <td>{{ $registration->passport_number}}</td>--}}
{{--                                    <td>{{ $registration->passport_issued_by}}</td>--}}
{{--                                    <td>{{ $registration->passport_date_of_issue}}</td>--}}
{{--                                    <td>{{ $registration->passport_date_of_expiry}}</td>--}}
{{--                                    <td>{{ $registration->birthdate}}</td>--}}
{{--                                    <td>{{ $registration->nationality}}</td>--}}
{{--                                    <td>{{ $registration->is_visa_required}}</td>--}}
{{--                                    <td><a href="/registration/{{$registration->id}}/download/visa_copy">{{ $registration->visa_copy}}</a></td>--}}
{{--                                    <td>{{ $registration->local_embassy}}</td>--}}
{{--                                    <td>{{ $registration->departure_city}}</td>--}}
{{--                                    <td>{{ $registration->departure_date}}</td>--}}
{{--                                    <td>{{ $registration->return_date}}</td>--}}
{{--                                    <td>{{ $registration->needs_accomodation}}</td>--}}
{{--                                    <td>{{ $registration->guest_names}}</td>--}}
{{--                                    <td>{{ $registration->room_type}}</td>--}}
{{--                                    <td>{{ $registration->room_arrival}}</td>--}}
{{--                                    <td>{{ $registration->room_departure}}</td>--}}
{{--                                    <td>{{ $registration->room_additional_number_night}}</td>--}}
{{--                                    <td>{{ $registration->dietary_requirements}}</td>--}}
{{--                                    <td>{{ $registration->interpretation}}</td>--}}
{{--                                    <td>{{ $registration->disabilities}}</td>--}}
{{--                                    <td>{{ $registration->remark}}</td>--}}
                                    <td>{{ $registration->additional_info}}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <div class="well">
                        <a class="btn btn-default btn-lg btn-block" target="_blank"
                           href="{{ URL::to('registration/downloadExcel') }}">Download Excel File</a>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@stop


@section('javascript')

    <script type="text/javascript">
        $(document).ready(function () {

            $('#dataTables-example').dataTable({
                "order": [[1, "desc"]]
            });

        });
    </script>

@stop
