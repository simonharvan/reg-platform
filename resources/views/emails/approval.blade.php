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
<p>{!! makeReplacements($event_text->approval_email, [
    'name' => $name,
    'approval_url' => "<a href=". $approval_url .">" . trans('app.clickHereToFinish') . "</a>"
]) !!}</p>


</table>
</body>
</html>
