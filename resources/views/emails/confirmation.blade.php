<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style type="text/css">
        table {
            border-collapse: collapse;
        }

        td {
            border-bottom: 1px solid #ccc;
        }

        img {
            display: block;
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
@php
    $prefix = isset($registration['prefix']) ? $registration['prefix'] . '. ': '';
    $fist_name = isset($registration['first_name']) ? $registration['first_name'] . ' ' : '';
    $last_name = isset($registration['last_name']) ? $registration['last_name'] : '';

    $name =  $prefix . $fist_name . $last_name;
@endphp
<p>{!! makeReplacements($event_text->email_confirmation_text, ['name' => $name]) !!}</p>

<p>{!! $event_text->email_please_review !!}</p>

<p>{!! $event_text->email_signature  !!}</p>

<table>
    <tr>
        <th colspan="2">{{ $event_text->email_egistration_details }}</th>
    </tr>

    @foreach ($registration as $label => $value)
        @if (is_array($value))
            @if(isset($event_form->$label->label))
                <tr>
                    <td width="200">{{$event_form->$label->label}}</td>
                    <td>{!! implode(' <br> ', $value) !!}</td>
                </tr>
            @else
                <tr>
                    <td width="200">{{ trans('registration.'. $label) }}</td>
                    <td>{!! implode('<br> ', $value)  !!}</td>
                </tr>
            @endif
        @else
            @if(isset($event_form->$label->label))
                <tr>
                    <td width="200">{{$event_form->$label->label}}</td>
                    <td>{{ $value }}</td>
                </tr>
            @else
                <tr>
                    <td width="200">{{ trans('registration.'. $label) }}</td>
                    <td>{{ $value }}</td>
                </tr>
            @endif
        @endif
    @endforeach


</table>
</body>
</html>
