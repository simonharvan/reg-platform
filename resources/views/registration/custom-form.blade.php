@extends('layouts.platform')


@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{trans('app.registerNow')}}</h1>
            <p>{{trans('app.fields')}} (<span
                        class="required">*</span>) {{trans('app.areRequired')}}</p>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </div>
    @endif

    @if(isset($registration))
        {!!
          Former::open_for_files('registration')
          ->route('registration.update', $registration->id)
          ->class('form-bordered form-horizontal')
          ->id('registration')
          ->rules(App\Models\Registration::$rules)
          ->populate($registration)
         !!}
    @else
        {!!
          Former::open_for_files('registration')
          ->route('registration.store')
          ->class('form-bordered form-horizontal')
          ->id('registration')
          ->rules(App\Models\Registration::$rules)
        !!}
    @endif
    @php
        $form = json_decode($event_form->form);
        $personal = array_filter(get_object_vars($form), function($v, $k) {
            return $v->section === 'Personal';
        }, ARRAY_FILTER_USE_BOTH);
        $travel = array_filter(get_object_vars($form), function($v, $k) {
            return $v->section === 'Travel';
        }, ARRAY_FILTER_USE_BOTH);
        $accomodation = array_filter(get_object_vars($form), function($v, $k) {
            return $v->section === 'Accomodation';
        }, ARRAY_FILTER_USE_BOTH);
        $additional = array_filter(get_object_vars($form), function($v, $k) {
            return $v->section === 'Additional';
        }, ARRAY_FILTER_USE_BOTH);


    @endphp
    @if (count($personal) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>{{ trans('app.personal') }}</h5>
            </div>
            <div class="panel-body">
                @foreach($personal as $key => $item)
                    @php
                        if ($key === 'additional_file' || $key === 'additional_field'){
                            $label = $item->label;
                        } else {
                            $label = $key;
                        }
                    @endphp
                    @if(isset($item->type))
                        @if ($item->type === 'text')
                            {!! Former::text($key)->required()->label($label) !!}
                        @elseif($item->type === 'text-area')
                            {!! Former::textarea($key)->required()->label($label) !!}
                        @elseif($item->type === 'date')
                            {!! Former::date($key)->required()->label($label) !!}
                        @elseif($item->type === 'number')
                            {!! Former::number($key)->required()->label($label) !!}
                        @elseif($item->type === 'checkboxes')
                            @php
                                $options = [];
                                if (isset($item->options)) {
                                    foreach($item->options as $optionKey => $optionValue) {
                                        $options[$optionValue] = [
                                            'name' => $key,
                                            'value' => $optionValue
                                        ];
                                    }
                                }
                            @endphp
                            {!! Former::checkbox($key)->checkboxes($options)->required()->label($label)  !!}
                        @elseif($item->type === 'radio')
                            @php
                                $options = [];
                                if (isset($item->options)) {
                                    foreach($item->options as $optionKey => $optionValue) {
                                        $options[$optionValue] = [
                                            'name' => $key,
                                            'value' => $optionValue
                                        ];
                                    }
                                }
                            @endphp
                            {!! Former::radios($key)->radios($options)->inline()->required()->label($label)  !!}
                        @elseif($item->type === 'file')
                            {!! Former::file($key)->accept('image/*, application/pdf')->required()->label($label) !!}
                        @endif
                    @endif
                @endforeach
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    @endif

    {{-- only sponsored --}}
    @if (Session::get('group_id', 0)==2)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>{{ trans('app.travel') }}</h5>
                <p>{{ trans($event_text->travel_data_note) }}</p>
            </div>
            <div class="panel-body">

                {!! Former::text('passport_number')->required() !!}
                {!! Former::text('passport_issued_by')->required() !!}
                {!! Former::date('passport_date_of_issue')->required() !!}
                {!! Former::date('passport_date_of_expiry')->required() !!}
                {!! Former::file('passport_copy')->accept('image/*, application/pdf') !!}
                {!! Former::file('visa_copy')->accept('image/*, application/pdf') !!}
                {!! Former::date('birthdate')->required() !!}
                {!! Former::text('nationality')->required() !!}

                {!!
                Former::radios('is_visa_required')
                  ->radios(array(
                    'Yes *' => array('name' => 'is_visa_required', 'value' => 'Yes'),
                    'No' => array('name' => 'is_visa_required', 'value' => 'No'),
                  ))->inline()->required()->help('*If YES: Consular department:')

                !!}
                {!! Former::text('local_embassy') !!}

                {!! Former::text('departure_city')->required() !!}
                {!! Former::date('departure_date')->required() !!}
                {!! Former::date('return_date')->required() !!}

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->


        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>{{ trans('app.accommodation') }}</h5>
            </div>
            <div class="panel-body">

                {!!
                Former::radios('needs_accomodation')
                  ->radios(array(
                    'Yes' => array('name' => 'needs_accomodation', 'value' => 'Yes'),
                    'No' => array('name' => 'needs_accomodation', 'value' => 'No'),
                  ))->inline()->required()

                !!}

                {!! Former::text('guest_names') !!}
                {!!
                  Former::select('room_type')->options(array(
                    trans('validation.attributes.Standard Single'),
                    trans('validation.attributes.Double twin beds') ,
                    trans('validation.attributes.Double queen size bed'),
                    trans('validation.attributes.Executive Room'),
                ))
                 !!}
                {!! Former::date('room_arrival') !!}
                {!! Former::date('room_departure') !!}
                @if (Session::get('group_id', 0)==2)
                    {!! Former::select('room_additional_number_night')
                        ->options(array(0,1,2,3))
                        ->help( $event_text->room_additional_number_night_help ) !!}
                @endif

                @if (Session::get('group_id', 0)!=2)
                    {{-- <p>
                        <strong>{{ $event_text->hotel_nonsponsored }}</strong>
                    </p> --}}
                @endif

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->


    @endif
    {{-- /only sponsored --}}


    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>{{ trans('app.additional') }}</h5>
        </div>
        <div class="panel-body">

            {{--
            Former::radios('interpretation')
              ->radios(array(
                'Not needed' => array('name' => 'interpretation', 'value' => 'Not needed'),
                'EN' => array('name' => 'interpretation', 'value' => 'EN'),
                'FR' => array('name' => 'interpretation', 'value' => 'FR'),
                'ES' => array('name' => 'interpretation', 'value' => 'ES'),
              ))->inline()->required()
            --}}

            {{--            {!! Former::text('dietary_requirements') !!}--}}
            {!! Former::text('disabilities') !!}
            {!! Former::textarea('remark') !!}
            @if (Session::get('event_id', 0)==11)
                {!! Former::radios('attending_dates[]')->radios([
                        'Panel 2 – Numérisation pour le développement' => ['name' => 'attending_dates[]', 'value' => 'Panel 2 – Numérisation pour le développement'],
                        'Panel 3 – Énergies renouvelables et connectivité' => ['name' => 'attending_dates[]', 'value' => 'Panel 3 – Énergies renouvelables et connectivité'],
                        'Panel 4 – Financement des TPME (très petites et moyennes entreprises)' => ['name' => 'attending_dates[]', 'value' => 'Panel 4 – Financement des TPME (très petites et moyennes entreprises)']
                    ])
                !!}
            @endif
        </div>


        <!-- /.panel-body -->
    </div>
    @if (Session::get('event_id', 0)==17)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>B2B Meeting session – from 14:00 to 16:00</h5>
            </div>
            <div class="panel-body">
                {!! Former::radios('additional_info[]')->radios([
                        'No, I would not like to participate in the B2B session' => ['name' => 'additional_info[]', 'value' => 'B2B ETHIOPIA NO'],
                        'Yes, I would like to participate and meet (maximum 3 choices please):' => ['name' => 'additional_info[]', 'value' => 'B2B ETHIOPIA YES'],
                    ])
                !!}

                {!! Former::checkbox('I would like to meet (maximum 3 choices please):')->checkboxes([
                        'AFD' => ['name' => 'additional_info_2[]', 'value' => 'AFD'],
                        'AfDB' => ['name' => 'additional_info_2[]', 'value' => 'AfDB'],
                        'CDP' => ['name' => 'additional_info_2[]', 'value' => 'CDP'],
                        'EIB' => ['name' => 'additional_info_2[]', 'value' => 'EIB'],
                        'FMO' => ['name' => 'additional_info_2[]', 'value' => 'FMO'],
                        'IFC' => ['name' => 'additional_info_2[]', 'value' => 'IFC'],
                        'KFW' => ['name' => 'additional_info_2[]', 'value' => 'KFW']

                    ]) 
                !!}
            </div>


            <!-- /.panel-body -->
        </div>
    @endif
    @if (Session::get('event_id', 0)==19)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>Rencontres B2B – from 14:00 to 15:30</h5>
            </div>
            <div class="panel-body">
                {!! Former::radios('Participation aux rencontres B2B')->radios([
                        'Non, je ne désire pas y participer' => ['name' => 'additional_info[]', 'value' => 'B2B DAKAR NO'],
                        'Oui, je souhaite y participer et choisis de rencontrer' => ['name' => 'additional_info[]', 'value' => 'B2B DAKAR YES'],
                    ])
                !!}

                {!! Former::checkbox('Merci de choisir au maximum 3 des IFIs suivants:')->checkboxes([
                'AECID' => ['name' => 'additional_info_2[]', 'value' => 'AECID'],
                        'AFD' => ['name' => 'additional_info_2[]', 'value' => 'AFD'],
                        'AfDB' => ['name' => 'additional_info_2[]', 'value' => 'AfDB'],
                        'CDP' => ['name' => 'additional_info_2[]', 'value' => 'CDP'],
                        'EDFI' => ['name' => 'additional_info_2[]', 'value' => 'EDFI'],
                        'EIB' => ['name' => 'additional_info_2[]', 'value' => 'EIB'],
                        'KFW' => ['name' => 'additional_info_2[]', 'value' => 'KFW'], 
                        'IFC' => ['name' => 'additional_info_2[]', 'value' => 'IFC'],
                       
                        'WB' => ['name' => 'additional_info_2[]', 'value' => 'WB']
                        

                    ]) 
 
                !!}
            </div>


            <!-- /.panel-body -->
        </div>
    @endif

    @if (Session::get('event_id', 0)==13)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>ELECTRIFI side session attendance</h5>
            </div>
            <div class="panel-body">
                {!! Former::radios('additional_info[]')->radios([
                        'Yes, I would like to attend ELECTRIFI "Meet the advisors" session. <a href="/assets/Meet-the-Advisors-Registration-Form.docx">Please fill this form and send it us.</a>' => ['name' => 'additional_info[]', 'value' => 'ELECTRIFI YES'],
                        'No, thank you' => ['name' => 'additional_info[]', 'value' => 'ELECTRIFI NO']
                    ])
                !!}
            </div>


            <!-- /.panel-body -->
        </div>
    @endif



    <!-- /.panel -->

    {!! Former::actions(Form::submit(__('app.save'), array('class'=>'btn btn-primary')) ) !!}


    {!! Former::close() !!}
    <p>&nbsp;</p>

@stop