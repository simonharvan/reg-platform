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
        $order_additional = 10000;
        $inputs = $request->except(['_token', 'event_id', '_method']);

        foreach ($inputs as $key => $value) {
            if ($key === 'additional_file' || strpos($key, 'additional_field') !== false) {
                if (!$value['value']) {
                    continue;
                }
                $new_parameters[$key] = $value;
                unset($new_parameters[$key]['required']);
                $new_parameters[$key]['order'] = $order_additional;
                $order_additional++;
                if ($key === 'additional_file') {
                    $new_parameters[$key]['type'] = 'file';
                    $new_parameters[$key]['options'] = [
                        'mime' => 'image/*, application/pdf'
                    ];
                    $new_parameters[$key]['validation'] = 'required|file|mimes:jpeg,jpg,png,JPG,bmp,png,pdf,PDF';
                }
                if (strpos($key, 'additional_field') !== false) {
                    $new_parameters[$key]['validation'] = 'required';
                }

                if (isset($new_parameters[$key]['type'])) {
                    $new_parameters[$key]['type'] = Str::slug($new_parameters[$key]['type']);
                }

                if (isset($new_parameters[$key]['groups'])) {
                    $new_parameters[$key]['groups'] = json_decode($new_parameters[$key]['groups']);
                }
                if (isset($value['options'])) {
                    $new_parameters[$key]['options'] = array_filter($value['options']);
                }


                if (!$value['required']) {
                    $new_parameters[$key]['validation'] = '';
                }

                continue;
            }
            if (strpos($key, 'additional_notes') !== false) {
                if (strpos($key, 'additional_notes_##') !== false) {
                    continue;
                }
                $new_parameters[$key] = $value;
                $new_parameters[$key]['type'] = 'note';
                continue;
            }

            if ($value['value'] == 1) {
                $new_parameters[$key] = $this->form_defaults[$key];
                if (!empty($value['groups'])) {
                    $new_parameters[$key]['groups'] = json_decode($value['groups']);
                }
                if (!$value['required']) {
                    $new_parameters[$key]['validation'] = '';
                }
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
            'order' => 10,
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
            'order' => 20,
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'last_name' => [
            'order' => 30,
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'organization' => [
            'order' => 40,
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'position' => [
            'order' => 50,
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'address' => [
            'order' => 60,
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'address2' => [
            'order' => 70,
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'city' => [
            'order' => 80,
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'postal_code' => [
            'order' => 90,
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'country' => [
            'order' => 100,
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'nationality' => [
            'order' => 110,
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'email' => [
            'order' => 120,
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required|email'
        ],
        'assistant_email' => [
            'order' => 130,
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required|email'
        ],
        'cc_assistant_email' => [
            'order' => 140,
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required|email'
        ],
        'phone' => [
            'order' => 150,
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'mobile_phone' => [
            'order' => 160,
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'fax' => [
            'order' => 170,
            'value' => 1,
            'section' => 'Personal',
            'type' => 'text',
            'validation' => 'required'
        ],
        'is_visa_required' => [
            'order' => 180,
            'value' => 1,
            'section' => 'Travel',
            'type' => 'radio',
            'validation' => 'required',
            'options' => [
                'yes',
                'no'
            ]
        ],
        'is_visa_obtained' => [
            'order' => 190,
            'value' => 1,
            'section' => 'Travel',
            'type' => 'radio',
            'validation' => 'required',
            'options' => [
                'yes',
                'no'
            ]
        ],
        'visa_copy' => [
            'order' => 200,
            'value' => 1,
            'section' => 'Travel',
            'type' => 'file',
            'validation' => 'required|file|mimes:jpeg,jpg,png,JPG,bmp,png,pdf,PDF',
            'options' => [
                'mime' => 'image/*, application/pdf'
            ]
        ],
        'passport_copy' => [
            'order' => 210,
            'value' => 1,
            'section' => 'Travel',
            'type' => 'file',
            'validation' => 'required|file|mimes:jpeg,jpg,png,JPG,bmp,png,pdf,PDF',
            'options' => [
                'mime' => 'image/*, application/pdf'
            ]
        ],
        'passport_number' => [
            'order' => 220,
            'value' => 1,
            'section' => 'Travel',
            'type' => 'text',
            'validation' => 'required'
        ],
        'passport_issued_by' => [
            'order' => 230,
            'value' => 1,
            'section' => 'Travel',
            'type' => 'text',
            'validation' => 'required'
        ],
        'passport_date_of_issue' => [
            'order' => 240,
            'value' => 1,
            'section' => 'Travel',
            'type' => 'date',
            'validation' => 'required|date'
        ],
        'passport_date_of_expiry' => [
            'order' => 250,
            'value' => 1,
            'section' => 'Travel',
            'type' => 'date',
            'validation' => 'required|date'
        ],
        'birthdate' => [
            'order' => 260,
            'value' => 1,
            'section' => 'Travel',
            'type' => 'required|date',
            'validation' => 'required'
        ],
        'local_embassy' => [
            'order' => 270,
            'value' => 1,
            'section' => 'Travel',
            'type' => 'text',
            'validation' => 'required'
        ],
        'departure_city' => [
            'order' => 280,
            'value' => 1,
            'section' => 'Travel',
            'type' => 'text',
            'validation' => 'required'
        ],
        'departure_date' => [
            'order' => 290,
            'value' => 1,
            'section' => 'Travel',
            'type' => 'date',
            'validation' => 'required'
        ],
        'return_date' => [
            'order' => 300,
            'value' => 1,
            'section' => 'Travel',
            'type' => 'date',
            'validation' => 'required|date'
        ],
        'needs_accomodation' => [
            'order' => 310,
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
            'order' => 320,
            'value' => 1,
            'section' => 'Accomodation',
            'type' => 'text',
            'validation' => 'required'
        ],
        'room_type' => [
            'order' => 330,
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
            'order' => 340,
            'value' => 1,
            'section' => 'Accomodation',
            'type' => 'date',
            'validation' => 'required|date'
        ],
        'room_departure' => [
            'order' => 350,
            'value' => 1,
            'section' => 'Accomodation',
            'type' => 'date',
            'validation' => 'required'
        ],
        'room_additional_number_night' => [
            'order' => 360,
            'value' => 1,
            'section' => 'Accomodation',
            'type' => 'number',
            'validation' => 'required'
        ],
        'dietary_requirements' => [
            'order' => 370,
            'value' => 1,
            'section' => 'Additional',
            'type' => 'text-area',
            'validation' => 'required'
        ],
        'interpretation' => [
            'order' => 380,
            'value' => 1,
            'section' => 'Additional',
            'type' => 'text',
            'validation' => 'required',
        ],
        'disabilities' => [
            'order' => 390,
            'value' => 1,
            'section' => 'Additional',
            'type' => 'text-area',
            'validation' => 'required'
        ],
        'remark' => [
            'order' => 400,
            'value' => 1,
            'section' => 'Additional',
            'type' => 'text-area',
            'validation' => 'required'
        ]

    ];

}
