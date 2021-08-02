@extends('layouts.platform')


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
                            $label = $item->label;
                        } else {
                            $label = trans('registration.'. $key);
                        }
                    @endphp
                    @if(isset($item->type))
                        @if ($item->type === 'text')
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
                                        $options[$optionValue] = [
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
                                        $options[$optionValue] = [
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
                <p>{{ isset($event_text->travel_data_note) ? trans($event_text->travel_data_note) : '' }}</p>
            </div>
            <div class="panel-body">

                @foreach($travel as $key => $item)
                    @php
                        if (isset($item->label) && !empty($item->label)) {
                            $label = $item->label;
                        } else {
                            $label = trans('registration.'. $key);
                        }
                    @endphp
                    @if(isset($item->type))
                        @if ($item->type === 'text')
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
                                        $options[$optionValue] = [
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
                                        $options[$optionValue] = [
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
                            $label = $item->label;
                        } else {
                            $label = trans('registration.'. $key);
                        }
                    @endphp
                    @if(isset($item->type))
                        @if ($item->type === 'text')
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
                            {!! Former::number($key)->label($label) !!}
                        @elseif($item->type === 'checkboxes')
                            @php
                                $options = [];
                                if (isset($item->options)) {
                                    foreach($item->options as $optionKey => $optionValue) {
                                        $options[$optionValue] = [
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
                                        $options[$optionValue] = [
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
                            $label = $item->label;
                        } else {
                            $label = trans('registration.'. $key);
                        }
                    @endphp
                    @if(isset($item->type))
                        @if ($item->type === 'text')
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
                                        $options[$optionValue] = [
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
                                        $options[$optionValue] = [
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
    @endif


    {!! $event_text->registration_note  !!}
    <!-- /.panel -->

    {!! Former::actions(Form::submit(__('app.save'), array('class'=>'btn btn-primary')) ) !!}


    {!! Former::close() !!}
    <p>&nbsp;</p>

@stop
