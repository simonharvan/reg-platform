@extends('layouts.platform')


@section('content')

    @php

        if (!empty($event_form->form)) {
            $form = json_decode($event_form->form);
            $array = get_object_vars($form);
            uasort($array, 'sortForm');
            $list = array_keys($array);
        } else {
            $list = array_keys($registration->toArray());
        }
    @endphp
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Detail of registration</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <table class="table">
        @foreach($list as $key)
            <tr>
                <td>
                    @if (isset($form) && isset($form->$key->label))
                        {{-- This is to check whether the label is suppose to be translated. It is if the first character is `.` --}}
                        {{ substr($form->$key->label, 0, 1) == '.' ? trans('registration'. $form->$key->label) : ucwords(str_replace('_', ' ', $form->$key->label)) }}
                    @else
                        {{ ucwords(str_replace('_', ' ', $key)) }}
                    @endif
                </td>
                <td>
                    @if (isset($form) && $form->$key->type === 'file' && !empty($key)))
                        <a href="{{ URL::to('registration/' . $registration->id . '/download/' . $key) }}"
                           target="_blank"><img
                                src="{{ URL::to('registration/' . $registration->id . '/download/' . $key) }}"
                                height=150"></a>

                    @else
                        {{ $registration->$key }}
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
@stop
