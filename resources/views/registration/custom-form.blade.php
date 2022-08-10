@extends('layouts.platform')
<?php
?>

@section('content')

    <div class="row">
        <div class="col-lg-12">
            {!! $event_text->registration_top_note !!}
            <h1 class="page-header">{{trans('app.registerNow')}}</h1>
            <p>{{trans('app.fields')}} (<span
                    class="required">*</span>) {{trans('app.areRequired')}}</p>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
        </div>
    @endif

    @php
        $form = json_decode($event_form->form);
        $rules = array_map(function ($v) {
            if (isset($v->validation) || (isset($registration->id) && $v->type === 'file')) {
                return $v->validation;
            }
            return '';
        }, get_object_vars($form));

    @endphp

    @if(isset($registration))
        {!!
          Former::open_for_files('registration')
          ->route('registration.update', $registration->id)
          ->class('form-bordered form-horizontal')
          ->id('registration')
          ->rules($rules)
          ->populate($registration)
         !!}
    @else
        {!!
          Former::open_for_files('registration')
          ->route('registration.store')
          ->class('form-bordered form-horizontal')
          ->id('registration')
          ->rules($rules)
        !!}
    @endif
    @php

        use Illuminate\Support\Facades\Session;

        $group = Session::get('group_id', 1);

        $personal = array_filter(get_object_vars($form), function($v, $k) use ($group) {
            if (isset($v->groups) && !in_array($group, $v->groups)) {
                return false;
            }
            return $v->section === 'Personal';
        }, ARRAY_FILTER_USE_BOTH);
        $travel = array_filter(get_object_vars($form), function($v, $k) use ($group) {
            if (isset($v->groups) && !in_array($group, $v->groups)) {
                return false;
            }
            return $v->section === 'Travel';
        }, ARRAY_FILTER_USE_BOTH);
        $accomodation = array_filter(get_object_vars($form), function($v, $k) use ($group) {
            if (isset($v->groups) && !in_array($group, $v->groups)) {
                return false;
            }
            return $v->section === 'Accomodation';
        }, ARRAY_FILTER_USE_BOTH);
        $additional = array_filter(get_object_vars($form), function($v, $k) use ($group) {
            if (isset($v->groups) && !in_array($group, $v->groups)) {
                return false;
            }
            return $v->section === 'Additional';
        }, ARRAY_FILTER_USE_BOTH);

        uasort($personal, 'sortForm');
        uasort($travel, 'sortForm');
        uasort($accomodation, 'sortForm');
        uasort($additional, 'sortForm');
    @endphp

    @if (count($personal) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>{{ trans('app.personal') }}</h5>
            </div>
            <div class="panel-body">
                @foreach($personal as $key => $item)

                    @php
                        if (isset($item->label) && !empty($item->label)) {
                            if (Lang::has('registration.'. strtolower($item->label))) {
                                $label = trans('registration.'. $item->label);
                            } else {
                                $label = $item->label;
                            }
                        } else {
                            $label = trans('registration.'. $key);
                        }
                    @endphp
                    @if(isset($item->type))
                        @if ($item->type === 'note')
                            <p>{!! $item->text !!}</p>
                        @elseif ($item->type === 'text')
                            {!! Former::text($key)->label($label) !!}
                        @elseif($item->type === 'text-area')
                            {!! Former::textarea($key)->label($label) !!}
                        @elseif($item->type === 'date')
                            {!! Former::date($key)->label($label) !!}
                        @elseif($item->type === 'number')
                            {!! Former::number($key)->label($label) !!}
                        @elseif($item->type === 'checkboxes')
                            @php
                                $options = [];
                                if (isset($item->options)) {
                                    foreach($item->options as $optionKey => $optionValue) {
                                        $labelOption = $optionValue;
                                        if (Lang::has('registration.'. strtolower($optionValue))) {
                                            $labelOption = trans('registration.' . strtolower($optionValue));
                                        }
                                        $options[$labelOption] = [
                                            'name' => $key . '[]',
                                            'value' => $optionValue
                                        ];
                                    }
                                }
                            @endphp
                            {!! Former::checkbox($key . '[]')->checkboxes($options)->label($label)  !!}
                        @elseif($item->type === 'radio')
                            @php
                                $options = [];
                                if (isset($item->options)) {
                                    foreach($item->options as $optionKey => $optionValue) {
                                        $labelOption = $optionValue;
                                        if (Lang::has('registration.'. strtolower($optionValue))) {
                                            $labelOption = trans('registration.' . strtolower($optionValue));
                                        }
                                        $options[$labelOption] = [
                                            'name' => $key,
                                            'value' => $optionValue
                                        ];
                                    }
                                }
                            @endphp
                            {!! Former::radios($key)->radios($options)->inline()->label($label)  !!}
                        @elseif($item->type === 'file')
                            {!! Former::file($key)->accept($item->options->mime)->label($label) !!}
                        @endif
                    @endif
                @endforeach
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    @endif


    @if (count($travel) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>{{ trans('app.travel') }}</h5>
                <p>{!! $event_text->travel_data_note !!}</p>
            </div>
            <div class="panel-body">

                @foreach($travel as $key => $item)
                    @php
                        if (isset($item->grooup) && $ite)
                        if (isset($item->label) && !empty($item->label)) {
                            if (Lang::has('registration.'. strtolower($item->label))) {
                                $label = trans('registration.'. $item->label);
                            } else {
                                $label = $item->label;
                            }
                        } else {
                            $label = trans('registration.'. $key);
                        }
                    @endphp
                    @if(isset($item->type))
                        @if ($item->type === 'note')
                            <p>{!! $item->text !!}</p>
                        @elseif ($item->type === 'text')
                            {!! Former::text($key)->label($label) !!}
                        @elseif($item->type === 'text-area')
                            {!! Former::textarea($key)->label($label) !!}
                        @elseif($item->type === 'date')
                            {!! Former::date($key)->label($label) !!}
                        @elseif($item->type === 'number')
                            {!! Former::number($key)->label($label) !!}
                        @elseif($item->type === 'checkboxes')
                            @php
                                $options = [];
                                if (isset($item->options)) {
                                    foreach($item->options as $optionKey => $optionValue) {
                                        $labelOption = $optionValue;
                                        if (Lang::has('registration.'. strtolower($optionValue))) {
                                            $labelOption = trans('registration.' . strtolower($optionValue));
                                        }
                                        $options[$labelOption] = [
                                            'name' => $key . '[]',
                                            'value' => $optionValue
                                        ];
                                    }
                                }
                            @endphp
                            {!! Former::checkbox($key)->checkboxes($options)->label($label)  !!}
                        @elseif($item->type === 'radio')
                            @php
                                $options = [];
                                if (isset($item->options)) {
                                    foreach($item->options as $optionKey => $optionValue) {
                                        $labelOption = $optionValue;
                                        if (Lang::has('registration.'. strtolower($optionValue))) {
                                            $labelOption = trans('registration.' . strtolower($optionValue));
                                        }
                                        $options[$labelOption] = [
                                            'name' => $key,
                                            'value' => $optionValue
                                        ];
                                    }
                                }
                            @endphp
                            {!! Former::radios($key)->radios($options)->inline()->label($label)  !!}
                        @elseif($item->type === 'file')
                            {!! Former::file($key)->accept($item->options->mime)->label($label) !!}
                        @endif
                    @endif
                @endforeach
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    @endif

    @if (count($accomodation) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>{{ trans('app.accommodation') }}</h5>
            </div>
            <div class="panel-body">

                @foreach($accomodation as $key => $item)
                    @php
                        if (isset($item->label) && !empty($item->label)) {
                            if (Lang::has('registration.'. strtolower($item->label))) {
                                $label = trans('registration.'. $item->label);
                            } else {
                                $label = $item->label;
                            }
                        } else {
                            $label = trans('registration.'. $key);
                        }
                    @endphp
                    @if(isset($item->type))
                        @if ($item->type === 'note')
                            <p>{!! $item->text !!}</p>
                        @elseif ($item->type === 'text')
                            @if($key === 'room_additional_number_night')
                                {!! Former::text($key)->label($label)->help($event_text->room_additional_number_night_help) !!}
                            @else
                                {!! Former::text($key)->label($label) !!}
                            @endif
                        @elseif($item->type === 'text-area')
                            {!! Former::textarea($key)->label($label) !!}
                        @elseif($item->type === 'date')
                            {!! Former::date($key)->label($label) !!}
                        @elseif($item->type === 'number')
                            @if($key === 'room_additional_number_night')
                                {!! Former::number($key)->label($label)->help($event_text->room_additional_number_night_help) !!}
                            @else
                                {!! Former::number($key)->label($label) !!}
                            @endif
                        @elseif($item->type === 'checkboxes')
                            @php
                                $options = [];
                                if (isset($item->options)) {
                                    foreach($item->options as $optionKey => $optionValue) {
                                        $labelOption = $optionValue;
                                        if (Lang::has('registration.'. strtolower($optionValue))) {
                                            $labelOption = trans('registration.' . strtolower($optionValue));
                                        }
                                        $options[$labelOption] = [
                                            'name' => $key . '[]',
                                            'value' => $optionValue
                                        ];
                                    }
                                }
                            @endphp
                            {!! Former::checkbox($key)->checkboxes($options)->label($label)  !!}
                        @elseif($item->type === 'radio')
                            @php
                                $options = [];
                                if (isset($item->options)) {
                                    foreach($item->options as $optionKey => $optionValue) {
                                        $labelOption = $optionValue;
                                        if (Lang::has('registration.'. strtolower($optionValue))) {
                                            $labelOption = trans('registration.' . strtolower($optionValue));
                                        }
                                        $options[$labelOption] = [
                                            'name' => $key,
                                            'value' => $optionValue
                                        ];
                                    }
                                }
                            @endphp
                            {!! Former::radios($key)->radios($options)->inline()->label($label)  !!}
                        @elseif($item->type === 'file')
                            {!! Former::file($key)->accept($item->options->mime)->label($label) !!}
                        @endif
                    @endif
                @endforeach
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    @endif


    @if (count($additional) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>{{ trans('app.additional') }}</h5>
            </div>
            <div class="panel-body">


                @foreach($additional as $key => $item)
                    @php
                        if (isset($item->label) && !empty($item->label)) {
                            if (Lang::has('registration.'. strtolower($item->label))) {
                                $label = trans('registration.'. $item->label);
                            } else {
                                $label = $item->label;
                            }
                        } else {
                            $label = trans('registration.'. $key);
                        }
                    @endphp
                    @if(isset($item->type))
                        @if ($item->type === 'note')
                            <p>{!! $item->text !!}</p>
                        @elseif ($item->type === 'text')
                            {!! Former::text($key)->label($label) !!}
                        @elseif($item->type === 'text-area')
                            {!! Former::textarea($key)->label($label) !!}
                        @elseif($item->type === 'date')
                            {!! Former::date($key)->label($label) !!}
                        @elseif($item->type === 'number')
                            {!! Former::number($key)->label($label) !!}
                        @elseif($item->type === 'checkboxes')
                            @php

                                $options = [];
                                if (isset($item->options)) {
                                    foreach($item->options as $optionKey => $optionValue) {
                                        $labelOption = $optionValue;
                                        if (Lang::has('registration.'. strtolower($optionValue))) {
                                            $labelOption = trans('registration.' . strtolower($optionValue));
                                        }
                                        $options[$labelOption] = [
                                            'name' => $key . '[]',
                                            'value' => $optionValue
                                        ];
                                    }
                                }
                            @endphp
                            {!! Former::checkbox($key)->checkboxes($options)->label($label)  !!}
                        @elseif($item->type === 'radio')
                            @php
                                $options = [];
                                if (isset($item->options)) {
                                    foreach($item->options as $optionKey => $optionValue) {
                                        $labelOption = $optionValue;
                                        if (Lang::has('registration.'. strtolower($optionValue))) {
                                            $labelOption = trans('registration.' . strtolower($optionValue));
                                        }
                                        $options[$labelOption] = [
                                            'name' => $key,
                                            'value' => $optionValue
                                        ];
                                    }
                                }
                            @endphp
                            {!! Former::radios($key)->radios($options)->label($label)  !!}
                        @elseif($item->type === 'file')
                            {!! Former::file($key)->accept($item->options->mime)->label($label) !!}
                        @endif
                    @endif
                @endforeach
            </div>


            <!-- /.panel-body -->
        </div>
    @endif

    @if (isset($event_text->registration_note) && !empty($event_text->registration_note))
        {!! Former::radio("terms_and_conditions")->radios(['yes' => ['name' => 'Yes','value' => 'agree_terms_and_conditions']])->label(__('app.agreeTermsAndConditions'))->required()  !!}

        <!-- Modal -->
        <div class="modal fade" id="termsAndConditions" data-backdrop="static" data-keyboard="false" tabindex="-1"
             aria-labelledby="termsAndConditionsLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="termsAndConditionsLabel">{{__('app.termsAndConditions')}}</h5>
                    </div>
                    <div class="modal-body">
                        {!! $event_text->registration_note  !!}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">{{__('app.close')}}</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- /.panel -->

    {!! Former::actions(Form::submit(__('app.save'), array('class'=>'btn btn-primary')) ) !!}


    {!! Former::close() !!}
    <p>&nbsp;</p>

@stop
