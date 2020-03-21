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
<p>{!! makeReplacements($event_text->email_confirmation_text, ['name' => $registration['prefix'].'. '.$registration['first_name'].' '.$registration['last_name']]) !!}</p>

<p>Please review your registration details hereunder and contact us if any changes are required.</p>

<p>Do not hesitate to contact us if you have any questions.</p>


<p>{!! $event_text->email_signature  !!}</p>

<table>
    <tr>
        <th colspan="2">{{ $event_text->email_egistration_details }}</th>
    </tr>

    @foreach ($registration as $label=>$value)
        @if (is_array($value))
            <tr>
                <td width="200">{{ ucwords(str_replace('_', ' ', $label)) }} :</td>
                <td>{{ implode('<br>',$value) }}</td>
            </tr>
        @else
            @if($label == 'assistant_email')
                <tr>
                    <td width="200">Second email :</td>
                    <td>{{ $value }}</td>
                </tr>
            @elseif ($label == 'is_visa_required')
                <tr>
                    <td width="200">Do you need assistance with the visa application? :</td>
                    <td>{{ $value  }}</td>
                </tr>
            @elseif ($label == 'disabilities')
                <tr>
                    <td width="200">Specific needs :</td>
                    <td>{{ $value }}</td>
                </tr>
            @elseif ($label == 'remark')
                <tr>
                    <td width="200">Other particular requirements and comments :</td>
                    <td>{{ $value }}</td>
                </tr>
            @elseif ($label == 'dietary_requirements')
                <tr>
                    <td width="200">Dietary requirements :</td>
                    <td>{{ $value }}</td>
                </tr>
            @elseif ($label == 'additional_info')
                <tr>
                    <td width="200">Car ID :</td>
                    <td>{{ $value }}</td>
                </tr>
            @else
                <tr>
                    <td width="200">{{ ucwords(str_replace('_', ' ', $label)) }} :</td>
                    <td>{{ $value }}</td>
                </tr>
            @endif
        @endif
    @endforeach


</table>
</body>
</html>