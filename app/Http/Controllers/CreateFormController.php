<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;


class CreateFormController extends VoyagerBaseController
{
    function encodeJSON(Request $request)
    {
        $new_parameters = array();

        $inputs = $request->except(['_token', 'event_id', '_method']);
        foreach ($inputs as $key => $value) {
            if ($key === 'additional_file' || $key === 'additional_field') {
                if (!$value->value) {
                    continue;
                }
                $new_parameters[$key] = $value;
                if ($key === 'additional_file') {
                    $new_parameters[$key]['type'] = 'file';
                }

                if (isset($new_parameters[$key]['type'])) {
                    $new_parameters[$key]['type'] = Str::slug($new_parameters[$key]['type']);
                }
                if (isset($value['options'])) {
                    $new_parameters[$key]['options'] = array_filter($value['options']);
                }

                continue;
            }

            if ($value) {
                $new_parameters[$key] = $this->form_defaults[$key];
            }
        }

        return json_encode($new_parameters);
    }

    public function update(Request $request, $id)
    {
        if ($request->request->get('event_id') == null) {
            return redirect()->back()->with([
                'message' => __('validation.error_storing') . " event form.",
                'alert-type' => 'error',
            ]);
        }

        $request->merge(
            ["form" => $this->encodeJSON($request)]
        );
        VoyagerBaseController::update($request, $id);
        return redirect($request->path());

    }

    public function store(Request $request)
    {

        if ($request->request->get('event_id') == null) {
            return redirect()->back()->with([
                'message' => __('validation.error_storing') . " event form.",
                'alert-type' => 'error',
            ]);
        }

        $request->merge(
            ["form" => $this->encodeJSON($request)]
        );
        VoyagerBaseController::store($request);
        return redirect($request->path());
    }

    private $form_defaults = [

        'prefix' => [
            'value' => 1,
            'section' => 'Personal',
            'type' => 'radio',
            'validation' => 'required',
            'options' => [
                'Mr',
                'Mrs',
                'Ms',
            ]
        ],
        'first_name' => [
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'last_name' => [
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'organization' => [
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'position' => [
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'address' => [
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'address2' => [
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'city' => [
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'postal_code' => [
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'country' => [
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'nationality' => [
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'email' => [
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'assistant_email' => [
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'cc_assistant_email' => [
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'phone' => [
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'mobile_phone' => [
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'fax' => [
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'value' => 1,


        'is_visa_required' => [
            'section' => 'Travel',
            'type' => 'radio',
            'validation' => 'required',
            'options' => [
                'yes',
                'no'
            ]
        ],
        'visa_copy' => [
            'value' => 1,
            'section' => 'Travel',
            'type' => 'file',
            'validation' => 'required',
            'options' => [
                'mime' => 'image/*, application/pdf'
            ]
        ],
        'passport_copy' => [
            'value' => 1,
            'section' => 'Travel',
            'type' => 'file',
            'validation' => 'required',
            'options' => [
                'mime' => 'image/*, application/pdf'
            ]
        ],
        'passport_number' => [
            'value' => 1,
            'section' => 'Travel',
            'type' => 'text',
            'validation' => 'required'
        ],
        'passport_issued_by' => [
            'value' => 1,
            'section' => 'Travel',
            'type' => 'text',
            'validation' => 'required'
        ],
        'passport_date_of_issue' => [
            'value' => 1,
            'section' => 'Travel',
            'type' => 'date',
            'validation' => 'required'
        ],
        'passport_date_of_expiry' => [
            'value' => 1,
            'section' => 'Travel',
            'type' => 'date',
            'validation' => 'required'
        ],
        'birthdate' => [
            'value' => 1,
            'section' => 'Travel',
            'type' => 'date',
            'validation' => 'required'
        ],
        'local_embassy' => [
            'value' => 1,
            'section' => 'Travel',
            'type' => 'text',
            'validation' => 'required'
        ],
        'departure_city' => [
            'value' => 1,
            'section' => 'Travel',
            'type' => 'text',
            'validation' => 'required'
        ],
        'departure_date' => [
            'value' => 1,
            'section' => 'Travel',
            'type' => 'date',
            'validation' => 'required'
        ],
        'return_date' => [
            'value' => 1,
            'section' => 'Travel',
            'type' => 'date',
            'validation' => 'required'
        ],
        'needs_accomodation' => [
            'value' => 1,
            'section' => 'Accomodation',
            'type' => 'radio',
            'validation' => 'required',
            'options' => [
                'yes',
                'no'
            ]
        ],
        'guest_names' => [
            'value' => 1,
            'section' => 'Accomodation',
            'type' => 'text',
            'validation' => 'required'
        ],
        'room_type' => [
            'value' => 1,
            'section' => 'Accomodation',
            'type' => 'select',
            'validation' => 'required',
            'options' => [
                'Standard Single',
                'Double twin beds',
                'Double queen size bed',
                'Executive Room'
            ]
        ],
        'room_arrival' => [
            'value' => 1,
            'section' => 'Accomodation',
            'type' => 'date',
            'validation' => 'required'
        ],
        'room_departure' => [
            'value' => 1,
            'section' => 'Accomodation',
            'type' => 'date',
            'validation' => 'required'
        ],
        'room_additional_number_night' => [
            'value' => 1,
            'section' => 'Accomodation',
            'type' => 'number',
            'validation' => 'required'
        ],
        'dietary_requirements' => [
            'value' => 1,
            'section' => 'Additional',
            'type' => 'text-area',
            'validation' => 'required'
        ],
        'interpretation' => [
            'value' => 1,
            'section' => 'Additional',
            'type' => 'text',
            'validation' => 'required',
        ],
        'disabilities' => [
            'value' => 1,
            'section' => 'Additional',
            'type' => 'text-area',
            'validation' => 'required'
        ],
        'remark' => [
            'value' => 1,
            'section' => 'Additional',
            'type' => 'text-area',
            'validation' => 'required'
        ]

    ];

}
