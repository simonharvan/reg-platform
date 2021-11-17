@php
    if($dataTypeContent->{$row->field}){
        $old_parameters = json_decode($dataTypeContent->{$row->field});
    }
    $end_id = 0;
    $end_id_2 = 0;
    $end_id_3 = 0;
    $end_id_4 = 0;
    $end_id_5 = 0;
    $end_id_6 = 0;
    $end_id_7 = 0;
    $end_id_8 = 0;
    $end_id_9 = 0;
    $end_id_10 = 0;
@endphp


<div class="create-form-parameters">
    {{--  PREFIX  --}}

    <section id="personal">
        <p>Personal section</p>
        <small>Fields in this section will appear in Personal tab.</small>
        <hr>

        <fieldset>
            <div class="grid-row heading">
                <span>Name of the field</span>

                <span>Show</span>
                <span>Required</span>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Email<br><small>Field email is mandatory for registration.</small></span>

                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="email[value]" id="email" value="1"
                                   checked>
                            Yes
                        </label>
                    </div>
                </div>

                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="email[required]" id="email" value="1"
                                   checked>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Prefix</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="prefix[value]" id="prefix"
                                   value="0" @if(!isset($old_parameters->prefix->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="prefix[value]" id="prefix"
                                   value="1" @if(isset($old_parameters->prefix->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>

                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="prefix[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->prefix->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="prefix[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->prefix->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">First name</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="first_name[value]" id="first_name"
                                   value="0"
                            @if(!isset($old_parameters->first_name->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="first_name[value]" id="first_name"
                                   value="1"
                            @if(isset($old_parameters->first_name->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="first_name[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->first_name->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="first_name[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->first_name->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Last name</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="last_name[value]" id="last_name"
                                   value="0"
                            @if(!isset($old_parameters->last_name->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="last_name[value]" id="last_name"
                                   value="1"
                            @if(isset($old_parameters->last_name->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="last_name[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->last_name->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="last_name[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->last_name->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Organization</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="organization[value]" id="organization"
                                   value="0"
                            @if(!isset($old_parameters->organization->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="organization[value]" id="organization"
                                   value="1"
                            @if(isset($old_parameters->organization->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="organization[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->organization->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="organization[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->organization->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Position</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="position[value]" id="position" value="0"
                            @if(!isset($old_parameters->position->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="position[value]" id="position" value="1"
                            @if(isset($old_parameters->position->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="position[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->position->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="position[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->position->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Address</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="address[value]" id="address" value="0"
                            @if(!isset($old_parameters->address->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="address[value]" id="address" value="1"
                            @if(isset($old_parameters->address->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="address[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->address->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="address[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->address->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Address 2</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="address2[value]" id="address2" value="0"
                            @if(!isset($old_parameters->address2->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="address2[value]" id="address2" value="1"
                            @if(isset($old_parameters->address2->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="address2[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->address2->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="address2[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->address2->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">City</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="city[value]" id="city" value="0"
                            @if(!isset($old_parameters->city->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="city[value]" id="city" value="1"
                            @if(isset($old_parameters->city->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="city[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->city->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="city[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->city->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Postal code</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="postal_code[value]" id="postal_code"
                                   value="0"
                            @if(!isset($old_parameters->postal_code->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="postal_code[value]" id="postal_code"
                                   value="1"
                            @if(isset($old_parameters->postal_code->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="postal_code[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->postal_code->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="postal_code[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->postal_code->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Country</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="country[value]" id="country" value="0"
                            @if(!isset($old_parameters->country->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="country[value]" id="country" value="1"
                            @if(isset($old_parameters->country->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="country[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->country->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="country[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->country->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Nationality</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="nationality[value]" id="nationality"
                                   value="0"
                            @if(!isset($old_parameters->nationality->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="nationality[value]" id="nationality"
                                   value="1"
                            @if(isset($old_parameters->nationality->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="nationality[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->nationality->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="nationality[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->nationality->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Assistant email</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="assistant_email[value]"
                                   id="assistant_email"
                                   value="0"
                            @if(!isset($old_parameters->assistant_email->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="assistant_email[value]"
                                   id="assistant_email"
                            @if(isset($old_parameters->assistant_email->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>

                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="assistant_email[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->prefix->assistant_email)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="assistant_email[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->assistant_email->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">CC Assistant email</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="cc_assistant_email[value]"
                                   id="cc_assistant_email" value="0"
                            @if(!isset($old_parameters->cc_assistant_email->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="cc_assistant_email[value]"
                                   id="cc_assistant_email" value="1"
                            @if(isset($old_parameters->cc_assistant_email->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>

                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="cc_assistant_email[required]"
                                   cc_assistant_email="prefix"
                                   value="0" @if(empty($old_parameters->prefix->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="cc_assistant_email[required]"
                                   cc_assistant_email="prefix"
                                   value="1" @if(!empty($old_parameters->prefix->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Phone</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="phone[value]" id="phone" value="0"
                            @if(!isset($old_parameters->phone->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="phone[value]" id="phone" value="1"
                            @if(isset($old_parameters->phone->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>

                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="phone[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->phone->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="phone[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->phone->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Mobile phone</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="mobile_phone[value]" id="mobile_phone"
                                   value="0"
                            @if(!isset($old_parameters->mobile_phone->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="mobile_phone[value]" id="mobile_phone"
                                   value="1"
                            @if(isset($old_parameters->mobile_phone->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>

                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="mobile_phone[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->mobile_phone->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="mobile_phone[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->mobile_phone->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Fax</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="fax[value]" id="fax" value="0"
                            @if(!isset($old_parameters->fax->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="fax[value]" id="fax" value="1"
                            @if(isset($old_parameters->fax->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>

                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="fax[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->fax->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="fax[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->fax->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>


    </section>

    <section id="travel">
        <p>Travel section</p>
        <small>Fields in this section will appear in Travel tab</small>
        <hr>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Is visa required<br><small>(question, whether are required)</small></span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="is_visa_required[value]"
                                   id="is_visa_required"
                                   value="0" @if(!isset($old_parameters->is_visa_required->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="is_visa_required[value]"
                                   id="is_visa_required"
                                   value="1" @if(isset($old_parameters->is_visa_required->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="is_visa_required[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->is_visa_required->validation)) {{'checked'}} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="is_visa_required[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->is_visa_required->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Visa copy<br><small>image/pdf file</small></span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="visa_copy[value]" id="visa_copy"
                                   value="0"
                            @if(!isset($old_parameters->visa_copy->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="visa_copy[value]" id="visa_copy"
                                   value="1" @if(isset($old_parameters->visa_copy->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="visa_copy[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->visa_copy->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="visa_copy[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->visa_copy->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Passport copy<br><small>image/pdf file</small></span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_copy[value]" id="passport_copy"
                                   value="0" @if(!isset($old_parameters->passport_copy->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_copy[value]" id="passport_copy"
                                   value="1" @if(isset($old_parameters->passport_copy->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_copy[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->passport_copy->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_copy[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->passport_copy->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Passport number</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_number[value]"
                                   id="passport_number"
                                   value="0" @if(!isset($old_parameters->passport_number->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_number[value]"
                                   id="passport_number"
                                   value="1" @if(isset($old_parameters->passport_number->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_number[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->passport_number->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_number[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->passport_number->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Passport issued by</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_issued_by[value]"
                                   id="passport_issued_by"
                                   value="0" @if(!isset($old_parameters->passport_issued_by->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_issued_by[value]"
                                   id="passport_issued_by"
                                   value="1" @if(isset($old_parameters->passport_issued_by->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_issued_by[required]"
                                   value="0" @if(empty($old_parameters->passport_issued_by->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_issued_by[required]"
                                   value="1" @if(!empty($old_parameters->passport_issued_by->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Passport date of issued</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_date_of_issue[value]"
                                   id="passport_date_of_issue"
                                   value="0" @if(!isset($old_parameters->passport_date_of_issue->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_date_of_issue[value]"
                                   id="passport_date_of_issue"
                                   value="1" @if(isset($old_parameters->passport_date_of_issue->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_date_of_issue[required]"
                                   value="0" @if(empty($old_parameters->passport_date_of_issue->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_date_of_issue[required]"
                                   value="1" @if(!empty($old_parameters->passport_date_of_issue->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Passport date of expiry</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_date_of_expiry[value]"
                                   id="passport_date_of_expiry"
                                   value="0" @if(!isset($old_parameters->passport_date_of_expiry->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_date_of_expiry[value]"
                                   id="passport_date_of_expiry"
                                   value="1" @if(isset($old_parameters->passport_date_of_expiry->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_date_of_expiry[required]"
                                   value="0" @if(empty($old_parameters->passport_date_of_expiry->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_date_of_expiry[required]"
                                   value="1" @if(!empty($old_parameters->passport_date_of_expiry->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Date of birth</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="birthdate[value]" id="birthdate"
                                   value="0"
                            @if(!isset($old_parameters->birthdate->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="birthdate[value]" id="birthdate"
                                   value="1" @if(isset($old_parameters->birthdate->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="birthdate[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->birthdate->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="birthdate[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->birthdate->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Local embassy</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="local_embassy[value]" id="local_embassy"
                                   value="0" @if(!isset($old_parameters->local_embassy->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="local_embassy[value]" id="local_embassy"
                                   value="1" @if(isset($old_parameters->local_embassy->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="local_embassy[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->local_embassy->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="local_embassy[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->local_embassy->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Departure city</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="departure_city[value]"
                                   id="departure_city"
                                   value="0" @if(!isset($old_parameters->departure_city->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="departure_city[value]"
                                   id="departure_city"
                                   value="1" @if(isset($old_parameters->departure_city->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="departure_city[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->departure_city->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="departure_city[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->departure_city->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Departure date</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="departure_date[value]"
                                   id="departure_date"
                                   value="0" @if(!isset($old_parameters->departure_date->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="departure_date[value]"
                                   id="departure_date"
                                   value="1" @if(isset($old_parameters->departure_date->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="departure_date[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->departure_date->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="departure_date[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->departure_date->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Return date</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="return_date[value]" id="return_date"
                                   value="0"
                            @if(!isset($old_parameters->return_date->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="return_date[value]" id="return_date"
                                   value="1" @if(isset($old_parameters->return_date->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="return_date[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->return_date->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="return_date[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->return_date->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
    </section>

    <section id="accomodation">
        <p>Accommodation section</p>
        <small>Fields in this section will appear in <strong>accomodation</strong> tab</small>
        <hr>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Do you need accomodation?<br><small>(question, whether is required)</small></span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="needs_accomodation[value]"
                                   id="needs_accomodation"
                                   value="0" @if(!isset($old_parameters->needs_accomodation->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="needs_accomodation[value]"
                                   id="needs_accomodation"
                                   value="1" @if(isset($old_parameters->needs_accomodation->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="needs_accomodation[required]"
                                   value="0" @if(empty($old_parameters->needs_accomodation->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="needs_accomodation[required]"
                                   value="1" @if(!empty($old_parameters->needs_accomodation->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Guest names</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="guest_names[value]" id="guest_names"
                                   value="0"
                            @if(!isset($old_parameters->guest_names->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="guest_names[value]" id="guest_names"
                                   value="1" @if(isset($old_parameters->guest_names->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="guest_names[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->guest_names->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="guest_names[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->guest_names->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Room type<br><small>(Standard Single, Double twin beds, Double queen size bed, Executive Room)</small></span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_type[value]" id="room_type"
                                   value="0"
                            @if(!isset($old_parameters->room_type->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_type[value]" id="room_type"
                                   value="1" @if(isset($old_parameters->room_type->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_type[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->room_type->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_type[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->room_type->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Room arrival</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_arrival[value]" id="room_arrival"
                                   value="0"
                            @if(!isset($old_parameters->room_arrival->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_arrival[value]" id="room_arrival"
                                   value="1" @if(isset($old_parameters->room_arrival->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_arrival[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->room_arrival->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_arrival[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->room_arrival->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Room departure</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_departure[value]"
                                   id="room_departure"
                                   value="0" @if(!isset($old_parameters->room_departure->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_departure[value]"
                                   id="room_departure"
                                   value="1" @if(isset($old_parameters->room_departure->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_departure[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->room_departure->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_departure[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->room_departure->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Room additional number night<br><small>To add note to this field add <i>event text</i> - <strong>room additional number night help</strong></small></span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_additional_number_night[value]"
                                   id="room_additional_number_night"
                                   value="0" @if(!isset($old_parameters->room_additional_number_night->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_additional_number_night[value]"
                                   id="room_additional_number_night"
                                   value="1" @if(isset($old_parameters->room_additional_number_night->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_additional_number_night[required]"
                                   value="0" @if(empty($old_parameters->room_additional_number_night->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_additional_number_night[required]"
                                   value="1" @if(!empty($old_parameters->room_additional_number_night->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
    </section>

    <section id="additional">
        <p>Additonal section</p>
        <small>Fields in this section will appear in <strong>additional info</strong> tab</small>
        <hr>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Dietary requirements</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="dietary_requirements[value]"
                                   id="dietary_requirements"
                                   value="0" @if(!isset($old_parameters->dietary_requirements->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="dietary_requirements[value]"
                                   id="dietary_requirements"
                                   value="1" @if(isset($old_parameters->dietary_requirements->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="dietary_requirements[required]"
                                   value="0" @if(empty($old_parameters->dietary_requirements->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="dietary_requirements[required]"
                                   value="1" @if(!empty($old_parameters->dietary_requirements->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Interpretation<br><small>(translator)</small></span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="interpretation[value]"
                                   id="interpretation"
                                   value="0" @if(!isset($old_parameters->interpretation->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="interpretation[value]"
                                   id="interpretation"
                                   value="1" @if(isset($old_parameters->interpretation->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="interpretation[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->interpretation->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="interpretation[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->interpretation->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Disabilities</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="disabilities[value]" id="disabilities"
                                   value="0"
                            @if(!isset($old_parameters->disabilities->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="disabilities[value]" id="disabilities"
                                   value="1" @if(isset($old_parameters->disabilities->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="disabilities[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->disabilities->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="disabilities[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->disabilities->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Remark</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="remark[value]" id="remark"
                                   value="0" @if(!isset($old_parameters->remark->value)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="remark[value]" id="remark"
                                   value="1" @if(isset($old_parameters->remark->value)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="remark[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->remark->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="remark[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->remark->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
    </section>

    <section id="extra">
        <p>Extra</p>
        <small>Add fields that you can put in any section</small>
        <hr>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">File</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_file[value]"
                                   id="additional_file"
                                   value="0" @if(!isset($old_parameters->additional_file)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_file[value]"
                                   id="additional_file"
                                   value="1" @if(isset($old_parameters->additional_file)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div class="add-file" @if(!isset($old_parameters->additional_file)) {{ 'style=display:none;' }} @endif>
                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Label</span>
                            <input type="text" class="form-control input-sm" id="additional_file_label"
                                   name="additional_file[label]" placeholder="File field label"
                                   value="{{ isset($old_parameters->additional_file) ? $old_parameters->additional_file->label : '' }}">
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Section</span>
                            <select class="form-control input-sm" name="additional_file[section]"
                                    id="additional_file_section">
                                <option @if(isset($old_parameters->additional_file) && $old_parameters->additional_file->section === 'Personal') {{ 'selected' }} @endif>
                                    Personal
                                </option>
                                <option @if(isset($old_parameters->additional_file) && $old_parameters->additional_file->section === 'Travel') {{ 'selected' }} @endif>
                                    Travel
                                </option>
                                <option @if(isset($old_parameters->additional_file) && $old_parameters->additional_file->section === 'Accomodation') {{ 'selected' }} @endif>
                                    Accomodation
                                </option>
                                <option @if(isset($old_parameters->additional_file) && $old_parameters->additional_file->section === 'Additional') {{ 'selected' }} @endif>
                                    Additional
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="col-form-label required-label">Required</span>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_file[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->additional_file->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_file[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->additional_file->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Field</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field[value]"
                                   id="additional_field"
                                   value="0" @if(!isset($old_parameters->additional_field)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field[value]"
                                   id="additional_field"
                                   value="1" @if(isset($old_parameters->additional_field)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div class="add-field" @if(!isset($old_parameters->additional_field)) {{ 'style=display:none;' }} @endif>
                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Label</span>
                            <input type="text" class="form-control input-sm" id="additional_field_label"
                                   name="additional_field[label]" placeholder="Field label"
                                   value="{{ isset($old_parameters->additional_field) ? $old_parameters->additional_field->label : ''}}">
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Section</span>
                            <select class="form-control input-sm" name="additional_field[section]"
                                    id="additional_field_section">
                                <option @if(isset($old_parameters->additional_field) && $old_parameters->additional_field->section === 'Personal') {{ 'selected' }} @endif>
                                    Personal
                                </option>
                                <option @if(isset($old_parameters->additional_field) && $old_parameters->additional_field->section === 'Travel') {{ 'selected' }} @endif>
                                    Travel
                                </option>
                                <option @if(isset($old_parameters->additional_field) && $old_parameters->additional_field->section === 'Accomodation') {{ 'selected' }} @endif>
                                    Accomodation
                                </option>
                                <option @if(isset($old_parameters->additional_field) && $old_parameters->additional_field->section === 'Additional') {{ 'selected' }} @endif>
                                    Additional
                                </option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Type</span>
                            <select class="form-control input-sm" name="additional_field[type]"
                                    id="additional_field_type">
                                <option @if(isset($old_parameters->additional_field) && $old_parameters->additional_field->type === 'text') {{ 'selected' }} @endif>
                                    Text
                                </option>
                                <option @if(isset($old_parameters->additional_field) && $old_parameters->additional_field->type === 'text-area') {{ 'selected' }} @endif>
                                    Text area
                                </option>
                                <option @if(isset($old_parameters->additional_field) && $old_parameters->additional_field->type === 'date') {{ 'selected' }} @endif>
                                    Date
                                </option>
                                <option @if(isset($old_parameters->additional_field) && $old_parameters->additional_field->type === 'number') {{ 'selected' }} @endif>
                                    Number
                                </option>
                                <option @if(isset($old_parameters->additional_field) && $old_parameters->additional_field->type === 'checkboxes') {{ 'selected' }} @endif>
                                    Checkboxes
                                </option>
                                <option @if(isset($old_parameters->additional_field) && $old_parameters->additional_field->type === 'radio') {{ 'selected' }} @endif>
                                    Radio
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="add-field-options" @if(!isset($old_parameters->additional_field) || ($old_parameters->additional_field->type !== 'checkboxes' && $old_parameters->additional_field->type !== 'radio')) {{ 'style=display:none;' }} @endif>
                        @if (isset($old_parameters->additional_field->options))
                            @foreach($old_parameters->additional_field->options as $option)
                                <div class="form-group row add-field-option" row-id="{{ $end_id }}">
                                    <div class="col-sm-10" style="margin-bottom:0;">
                                        <input type="text" class="form-control input-sm" id="additional_field_option"
                                               name="additional_field[options][{{ $end_id }}]" placeholder="Option"
                                               value="{{ $option }}">
                                    </div>
                                    <div style="margin-bottom:0;">
                                        <button type="button" class="btn btn-sm" style="margin-top:0px;"><i
                                                    class="voyager-trash"></i></button>
                                    </div>
                                </div>
                                @php
                                    $end_id = $loop->index + 1;
                                @endphp
                            @endforeach
                        @endif
                        <div class="form-group row add-field-option" row-id="{{ $end_id }}">
                            <div class="col-sm-10" style="margin-bottom:0;">
                                <input type="text" class="form-control input-sm" id="additional_field_option"
                                       name="additional_field[options][{{ $end_id }}]" placeholder="Option"
                                       value="">
                            </div>
                            <div style="margin-bottom:0;">
                                <button type="button" class="btn btn-success btn-sm" style="margin-top:0px;"><i
                                            class="voyager-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="col-form-label required-label">Required</span>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->additional_field->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->additional_field->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Field 2</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_2[value]"
                                   id="additional_field_2"
                                   value="0" @if(!isset($old_parameters->additional_field_2)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_2[value]"
                                   id="additional_field_2"
                                   value="1" @if(isset($old_parameters->additional_field_2)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div class="add-field-2" @if(!isset($old_parameters->additional_field_2)) {{ 'style=display:none;' }} @endif>
                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Label</span>
                            <input type="text" class="form-control input-sm" id="additional_field_2_label"
                                   name="additional_field_2[label]" placeholder="Field label"
                                   value="{{ isset($old_parameters->additional_field_2) ? $old_parameters->additional_field_2->label : ''}}">
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Section</span>
                            <select class="form-control input-sm" name="additional_field_2[section]"
                                    id="additional_field_2_section">
                                <option @if(isset($old_parameters->additional_field_2) && $old_parameters->additional_field_2->section === 'Personal') {{ 'selected' }} @endif>
                                    Personal
                                </option>
                                <option @if(isset($old_parameters->additional_field_2) && $old_parameters->additional_field_2->section === 'Travel') {{ 'selected' }} @endif>
                                    Travel
                                </option>
                                <option @if(isset($old_parameters->additional_field_2) && $old_parameters->additional_field_2->section === 'Accomodation') {{ 'selected' }} @endif>
                                    Accomodation
                                </option>
                                <option @if(isset($old_parameters->additional_field_2) && $old_parameters->additional_field_2->section === 'Additional') {{ 'selected' }} @endif>
                                    Additional
                                </option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Type</span>
                            <select class="form-control input-sm" name="additional_field_2[type]"
                                    id="additional_field_2_type">
                                <option @if(isset($old_parameters->additional_field_2) && $old_parameters->additional_field_2->type === 'text') {{ 'selected' }} @endif>
                                    Text
                                </option>
                                <option @if(isset($old_parameters->additional_field_2) && $old_parameters->additional_field_2->type === 'text-area') {{ 'selected' }} @endif>
                                    Text area
                                </option>
                                <option @if(isset($old_parameters->additional_field_2) && $old_parameters->additional_field_2->type === 'date') {{ 'selected' }} @endif>
                                    Date
                                </option>
                                <option @if(isset($old_parameters->additional_field_2) && $old_parameters->additional_field_2->type === 'number') {{ 'selected' }} @endif>
                                    Number
                                </option>
                                <option @if(isset($old_parameters->additional_field_2) && $old_parameters->additional_field_2->type === 'checkboxes') {{ 'selected' }} @endif>
                                    Checkboxes
                                </option>
                                <option @if(isset($old_parameters->additional_field_2) && $old_parameters->additional_field_2->type === 'radio') {{ 'selected' }} @endif>
                                    Radio
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="add-field-2-options" @if(!isset($old_parameters->additional_field_2) || ($old_parameters->additional_field_2->type !== 'checkboxes' && $old_parameters->additional_field_2->type !== 'radio')) {{ 'style=display:none;' }} @endif>
                        @if (isset($old_parameters->additional_field_2->options))
                            @foreach($old_parameters->additional_field_2->options as $option)
                                <div class="form-group row add-field-2-option" row-id="{{ $end_id_2 }}">
                                    <div class="col-sm-10" style="margin-bottom:0;">
                                        <input type="text" class="form-control input-sm" id="additional_field_option"
                                               name="additional_field_2[options][{{ $end_id_2 }}]" placeholder="Option"
                                               value="{{ $option }}">
                                    </div>
                                    <div style="margin-bottom:0;">
                                        <button type="button" class="btn btn-sm" style="margin-top:0px;"><i
                                                    class="voyager-trash"></i></button>
                                    </div>
                                </div>
                                @php
                                    $end_id_2 = $loop->index + 1;
                                @endphp
                            @endforeach
                        @endif
                        <div class="form-group row add-field-2-option" row-id="{{ $end_id_2 }}">
                            <div class="col-sm-10" style="margin-bottom:0;">
                                <input type="text" class="form-control input-sm" id="additional_field_option"
                                       name="additional_field_2[options][{{ $end_id_2 }}]" placeholder="Option"
                                       value="">
                            </div>
                            <div style="margin-bottom:0;">
                                <button type="button" class="btn btn-success btn-sm" style="margin-top:0px;"><i
                                            class="voyager-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="col-form-label required-label">Required</span>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_2[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->additional_field_2->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_2[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->additional_field_2->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Field 3</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_3[value]"
                                   id="additional_field_3"
                                   value="0" @if(!isset($old_parameters->additional_field_3)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_3[value]"
                                   id="additional_field_3"
                                   value="1" @if(isset($old_parameters->additional_field_3)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div class="add-field-3" @if(!isset($old_parameters->additional_field_3)) {{ 'style=display:none;' }} @endif>
                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Label</span>
                            <input type="text" class="form-control input-sm" id="additional_field_3_label"
                                   name="additional_field_3[label]" placeholder="Field label"
                                   value="{{ isset($old_parameters->additional_field_3) ? $old_parameters->additional_field_3->label : ''}}">
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Section</span>
                            <select class="form-control input-sm" name="additional_field_3[section]"
                                    id="additional_field_3_section">
                                <option @if(isset($old_parameters->additional_field_3) && $old_parameters->additional_field_3->section === 'Personal') {{ 'selected' }} @endif>
                                    Personal
                                </option>
                                <option @if(isset($old_parameters->additional_field_3) && $old_parameters->additional_field_3->section === 'Travel') {{ 'selected' }} @endif>
                                    Travel
                                </option>
                                <option @if(isset($old_parameters->additional_field_3) && $old_parameters->additional_field_3->section === 'Accomodation') {{ 'selected' }} @endif>
                                    Accomodation
                                </option>
                                <option @if(isset($old_parameters->additional_field_3) && $old_parameters->additional_field_3->section === 'Additional') {{ 'selected' }} @endif>
                                    Additional
                                </option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Type</span>
                            <select class="form-control input-sm" name="additional_field_3[type]"
                                    id="additional_field_3_type">
                                <option @if(isset($old_parameters->additional_field_3) && $old_parameters->additional_field_3->type === 'text') {{ 'selected' }} @endif>
                                    Text
                                </option>
                                <option @if(isset($old_parameters->additional_field_3) && $old_parameters->additional_field_3->type === 'text-area') {{ 'selected' }} @endif>
                                    Text area
                                </option>
                                <option @if(isset($old_parameters->additional_field_3) && $old_parameters->additional_field_3->type === 'date') {{ 'selected' }} @endif>
                                    Date
                                </option>
                                <option @if(isset($old_parameters->additional_field_3) && $old_parameters->additional_field_3->type === 'number') {{ 'selected' }} @endif>
                                    Number
                                </option>
                                <option @if(isset($old_parameters->additional_field_3) && $old_parameters->additional_field_3->type === 'checkboxes') {{ 'selected' }} @endif>
                                    Checkboxes
                                </option>
                                <option @if(isset($old_parameters->additional_field_3) && $old_parameters->additional_field_3->type === 'radio') {{ 'selected' }} @endif>
                                    Radio
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="add-field-3-options" @if(!isset($old_parameters->additional_field_3) || ($old_parameters->additional_field_3->type !== 'checkboxes' && $old_parameters->additional_field_3->type !== 'radio')) {{ 'style=display:none;' }} @endif>
                        @if (isset($old_parameters->additional_field_3->options))
                            @foreach($old_parameters->additional_field_3->options as $option)
                                <div class="form-group row add-field-3-option" row-id="{{ $end_id_3 }}">
                                    <div class="col-sm-10" style="margin-bottom:0;">
                                        <input type="text" class="form-control input-sm" id="additional_field_option"
                                               name="additional_field_3[options][{{ $end_id_3 }}]" placeholder="Option"
                                               value="{{ $option }}">
                                    </div>
                                    <div style="margin-bottom:0;">
                                        <button type="button" class="btn btn-sm" style="margin-top:0px;"><i
                                                    class="voyager-trash"></i></button>
                                    </div>
                                </div>
                                @php
                                    $end_id_3 = $loop->index + 1;
                                @endphp
                            @endforeach
                        @endif
                        <div class="form-group row add-field-3-option" row-id="{{ $end_id_3 }}">
                            <div class="col-sm-10" style="margin-bottom:0;">
                                <input type="text" class="form-control input-sm" id="additional_field_option"
                                       name="additional_field_3[options][{{ $end_id_3 }}]" placeholder="Option"
                                       value="">
                            </div>
                            <div style="margin-bottom:0;">
                                <button type="button" class="btn btn-success btn-sm" style="margin-top:0px;"><i
                                            class="voyager-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="col-form-label required-label">Required</span>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_3[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->additional_field_3->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_3[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->additional_field_3->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Field 4</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_4[value]"
                                   id="additional_field_4"
                                   value="0" @if(!isset($old_parameters->additional_field_4)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_4[value]"
                                   id="additional_field_4"
                                   value="1" @if(isset($old_parameters->additional_field_4)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div class="add-field-4" @if(!isset($old_parameters->additional_field_4)) {{ 'style=display:none;' }} @endif>
                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Label</span>
                            <input type="text" class="form-control input-sm" id="additional_field_4_label"
                                   name="additional_field_4[label]" placeholder="Field label"
                                   value="{{ isset($old_parameters->additional_field_4) ? $old_parameters->additional_field_4->label : ''}}">
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Section</span>
                            <select class="form-control input-sm" name="additional_field_4[section]"
                                    id="additional_field_4_section">
                                <option @if(isset($old_parameters->additional_field_4) && $old_parameters->additional_field_4->section === 'Personal') {{ 'selected' }} @endif>
                                    Personal
                                </option>
                                <option @if(isset($old_parameters->additional_field_4) && $old_parameters->additional_field_4->section === 'Travel') {{ 'selected' }} @endif>
                                    Travel
                                </option>
                                <option @if(isset($old_parameters->additional_field_4) && $old_parameters->additional_field_4->section === 'Accomodation') {{ 'selected' }} @endif>
                                    Accomodation
                                </option>
                                <option @if(isset($old_parameters->additional_field_4) && $old_parameters->additional_field_4->section === 'Additional') {{ 'selected' }} @endif>
                                    Additional
                                </option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Type</span>
                            <select class="form-control input-sm" name="additional_field_4[type]"
                                    id="additional_field_4_type">
                                <option @if(isset($old_parameters->additional_field_4) && $old_parameters->additional_field_4->type === 'text') {{ 'selected' }} @endif>
                                    Text
                                </option>
                                <option @if(isset($old_parameters->additional_field_4) && $old_parameters->additional_field_4->type === 'text-area') {{ 'selected' }} @endif>
                                    Text area
                                </option>
                                <option @if(isset($old_parameters->additional_field_4) && $old_parameters->additional_field_4->type === 'date') {{ 'selected' }} @endif>
                                    Date
                                </option>
                                <option @if(isset($old_parameters->additional_field_4) && $old_parameters->additional_field_4->type === 'number') {{ 'selected' }} @endif>
                                    Number
                                </option>
                                <option @if(isset($old_parameters->additional_field_4) && $old_parameters->additional_field_4->type === 'checkboxes') {{ 'selected' }} @endif>
                                    Checkboxes
                                </option>
                                <option @if(isset($old_parameters->additional_field_4) && $old_parameters->additional_field_4->type === 'radio') {{ 'selected' }} @endif>
                                    Radio
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="add-field-4-options" @if(!isset($old_parameters->additional_field_4) || ($old_parameters->additional_field_4->type !== 'checkboxes' && $old_parameters->additional_field_4->type !== 'radio')) {{ 'style=display:none;' }} @endif>
                        @if (isset($old_parameters->additional_field_4->options))
                            @foreach($old_parameters->additional_field_4->options as $option)
                                <div class="form-group row add-field-4-option" row-id="{{ $end_id_4 }}">
                                    <div class="col-sm-10" style="margin-bottom:0;">
                                        <input type="text" class="form-control input-sm" id="additional_field_option"
                                               name="additional_field_4[options][{{ $end_id_4 }}]" placeholder="Option"
                                               value="{{ $option }}">
                                    </div>
                                    <div style="margin-bottom:0;">
                                        <button type="button" class="btn btn-sm" style="margin-top:0px;"><i
                                                    class="voyager-trash"></i></button>
                                    </div>
                                </div>
                                @php
                                    $end_id_4 = $loop->index + 1;
                                @endphp
                            @endforeach
                        @endif
                        <div class="form-group row add-field-4-option" row-id="{{ $end_id_4 }}">
                            <div class="col-sm-10" style="margin-bottom:0;">
                                <input type="text" class="form-control input-sm" id="additional_field_option"
                                       name="additional_field_4[options][{{ $end_id_4 }}]" placeholder="Option"
                                       value="">
                            </div>
                            <div style="margin-bottom:0;">
                                <button type="button" class="btn btn-success btn-sm" style="margin-top:0px;"><i
                                            class="voyager-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="col-form-label required-label">Required</span>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_4[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->additional_field_4->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_4[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->additional_field_4->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Field 5</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_5[value]"
                                   id="additional_field_5"
                                   value="0" @if(!isset($old_parameters->additional_field_5)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_5[value]"
                                   id="additional_field_5"
                                   value="1" @if(isset($old_parameters->additional_field_5)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div class="add-field-5" @if(!isset($old_parameters->additional_field_5)) {{ 'style=display:none;' }} @endif>
                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Label</span>
                            <input type="text" class="form-control input-sm" id="additional_field_5_label"
                                   name="additional_field_5[label]" placeholder="Field label"
                                   value="{{ isset($old_parameters->additional_field_5) ? $old_parameters->additional_field_5->label : ''}}">
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Section</span>
                            <select class="form-control input-sm" name="additional_field_5[section]"
                                    id="additional_field_5_section">
                                <option @if(isset($old_parameters->additional_field_5) && $old_parameters->additional_field_5->section === 'Personal') {{ 'selected' }} @endif>
                                    Personal
                                </option>
                                <option @if(isset($old_parameters->additional_field_5) && $old_parameters->additional_field_5->section === 'Travel') {{ 'selected' }} @endif>
                                    Travel
                                </option>
                                <option @if(isset($old_parameters->additional_field_5) && $old_parameters->additional_field_5->section === 'Accomodation') {{ 'selected' }} @endif>
                                    Accomodation
                                </option>
                                <option @if(isset($old_parameters->additional_field_5) && $old_parameters->additional_field_5->section === 'Additional') {{ 'selected' }} @endif>
                                    Additional
                                </option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Type</span>
                            <select class="form-control input-sm" name="additional_field_5[type]"
                                    id="additional_field_5_type">
                                <option @if(isset($old_parameters->additional_field_5) && $old_parameters->additional_field_5->type === 'text') {{ 'selected' }} @endif>
                                    Text
                                </option>
                                <option @if(isset($old_parameters->additional_field_5) && $old_parameters->additional_field_5->type === 'text-area') {{ 'selected' }} @endif>
                                    Text area
                                </option>
                                <option @if(isset($old_parameters->additional_field_5) && $old_parameters->additional_field_5->type === 'date') {{ 'selected' }} @endif>
                                    Date
                                </option>
                                <option @if(isset($old_parameters->additional_field_5) && $old_parameters->additional_field_5->type === 'number') {{ 'selected' }} @endif>
                                    Number
                                </option>
                                <option @if(isset($old_parameters->additional_field_5) && $old_parameters->additional_field_5->type === 'checkboxes') {{ 'selected' }} @endif>
                                    Checkboxes
                                </option>
                                <option @if(isset($old_parameters->additional_field_5) && $old_parameters->additional_field_5->type === 'radio') {{ 'selected' }} @endif>
                                    Radio
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="add-field-4-options" @if(!isset($old_parameters->additional_field_5) || ($old_parameters->additional_field_5->type !== 'checkboxes' && $old_parameters->additional_field_5->type !== 'radio')) {{ 'style=display:none;' }} @endif>
                        @if (isset($old_parameters->additional_field_5->options))
                            @foreach($old_parameters->additional_field_5->options as $option)
                                <div class="form-group row add-field-5-option" row-id="{{ $end_id_5 }}">
                                    <div class="col-sm-10" style="margin-bottom:0;">
                                        <input type="text" class="form-control input-sm" id="additional_field_option"
                                               name="additional_field_5[options][{{ $end_id_5 }}]" placeholder="Option"
                                               value="{{ $option }}">
                                    </div>
                                    <div style="margin-bottom:0;">
                                        <button type="button" class="btn btn-sm" style="margin-top:0px;"><i
                                                    class="voyager-trash"></i></button>
                                    </div>
                                </div>
                                @php
                                    $end_id_5 = $loop->index + 1;
                                @endphp
                            @endforeach
                        @endif
                        <div class="form-group row add-field-5-option" row-id="{{ $end_id_5 }}">
                            <div class="col-sm-10" style="margin-bottom:0;">
                                <input type="text" class="form-control input-sm" id="additional_field_option"
                                       name="additional_field_5[options][{{ $end_id_5 }}]" placeholder="Option"
                                       value="">
                            </div>
                            <div style="margin-bottom:0;">
                                <button type="button" class="btn btn-success btn-sm" style="margin-top:0px;"><i
                                            class="voyager-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="col-form-label required-label">Required</span>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_5[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->additional_field_5->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_5[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->additional_field_5->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Field 6</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_6[value]"
                                   id="additional_field_6"
                                   value="0" @if(!isset($old_parameters->additional_field_6)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_6[value]"
                                   id="additional_field_6"
                                   value="1" @if(isset($old_parameters->additional_field_6)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div class="add-field-6" @if(!isset($old_parameters->additional_field_6)) {{ 'style=display:none;' }} @endif>
                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Label</span>
                            <input type="text" class="form-control input-sm" id="additional_field_6_label"
                                   name="additional_field_6[label]" placeholder="Field label"
                                   value="{{ isset($old_parameters->additional_field_6) ? $old_parameters->additional_field_6->label : ''}}">
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Section</span>
                            <select class="form-control input-sm" name="additional_field_6[section]"
                                    id="additional_field_6_section">
                                <option @if(isset($old_parameters->additional_field_6) && $old_parameters->additional_field_6->section === 'Personal') {{ 'selected' }} @endif>
                                    Personal
                                </option>
                                <option @if(isset($old_parameters->additional_field_6) && $old_parameters->additional_field_6->section === 'Travel') {{ 'selected' }} @endif>
                                    Travel
                                </option>
                                <option @if(isset($old_parameters->additional_field_6) && $old_parameters->additional_field_6->section === 'Accomodation') {{ 'selected' }} @endif>
                                    Accomodation
                                </option>
                                <option @if(isset($old_parameters->additional_field_6) && $old_parameters->additional_field_6->section === 'Additional') {{ 'selected' }} @endif>
                                    Additional
                                </option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Type</span>
                            <select class="form-control input-sm" name="additional_field_6[type]"
                                    id="additional_field_6_type">
                                <option @if(isset($old_parameters->additional_field_6) && $old_parameters->additional_field_6->type === 'text') {{ 'selected' }} @endif>
                                    Text
                                </option>
                                <option @if(isset($old_parameters->additional_field_6) && $old_parameters->additional_field_6->type === 'text-area') {{ 'selected' }} @endif>
                                    Text area
                                </option>
                                <option @if(isset($old_parameters->additional_field_6) && $old_parameters->additional_field_6->type === 'date') {{ 'selected' }} @endif>
                                    Date
                                </option>
                                <option @if(isset($old_parameters->additional_field_6) && $old_parameters->additional_field_6->type === 'number') {{ 'selected' }} @endif>
                                    Number
                                </option>
                                <option @if(isset($old_parameters->additional_field_6) && $old_parameters->additional_field_6->type === 'checkboxes') {{ 'selected' }} @endif>
                                    Checkboxes
                                </option>
                                <option @if(isset($old_parameters->additional_field_6) && $old_parameters->additional_field_6->type === 'radio') {{ 'selected' }} @endif>
                                    Radio
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="add-field-6-options" @if(!isset($old_parameters->additional_field_6) || ($old_parameters->additional_field_6->type !== 'checkboxes' && $old_parameters->additional_field_6->type !== 'radio')) {{ 'style=display:none;' }} @endif>
                        @if (isset($old_parameters->additional_field_6->options))
                            @foreach($old_parameters->additional_field_6->options as $option)
                                <div class="form-group row add-field-6-option" row-id="{{ $end_id_6 }}">
                                    <div class="col-sm-10" style="margin-bottom:0;">
                                        <input type="text" class="form-control input-sm" id="additional_field_option"
                                               name="additional_field_6[options][{{ $end_id_6 }}]" placeholder="Option"
                                               value="{{ $option }}">
                                    </div>
                                    <div style="margin-bottom:0;">
                                        <button type="button" class="btn btn-sm" style="margin-top:0px;"><i
                                                    class="voyager-trash"></i></button>
                                    </div>
                                </div>
                                @php
                                    $end_id_6 = $loop->index + 1;
                                @endphp
                            @endforeach
                        @endif
                        <div class="form-group row add-field-6-option" row-id="{{ $end_id_6 }}">
                            <div class="col-sm-10" style="margin-bottom:0;">
                                <input type="text" class="form-control input-sm" id="additional_field_option"
                                       name="additional_field_6[options][{{ $end_id_6 }}]" placeholder="Option"
                                       value="">
                            </div>
                            <div style="margin-bottom:0;">
                                <button type="button" class="btn btn-success btn-sm" style="margin-top:0px;"><i
                                            class="voyager-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="col-form-label required-label">Required</span>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_6[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->additional_field_6->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_6[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->additional_field_6->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Field 7</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_7[value]"
                                   id="additional_field_7"
                                   value="0" @if(!isset($old_parameters->additional_field_7)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_7[value]"
                                   id="additional_field_7"
                                   value="1" @if(isset($old_parameters->additional_field_7)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div class="add-field-7" @if(!isset($old_parameters->additional_field_7)) {{ 'style=display:none;' }} @endif>
                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Label</span>
                            <input type="text" class="form-control input-sm" id="additional_field_7_label"
                                   name="additional_field_7[label]" placeholder="Field label"
                                   value="{{ isset($old_parameters->additional_field_7) ? $old_parameters->additional_field_7->label : ''}}">
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Section</span>
                            <select class="form-control input-sm" name="additional_field_7[section]"
                                    id="additional_field_7_section">
                                <option @if(isset($old_parameters->additional_field_7) && $old_parameters->additional_field_7->section === 'Personal') {{ 'selected' }} @endif>
                                    Personal
                                </option>
                                <option @if(isset($old_parameters->additional_field_7) && $old_parameters->additional_field_7->section === 'Travel') {{ 'selected' }} @endif>
                                    Travel
                                </option>
                                <option @if(isset($old_parameters->additional_field_7) && $old_parameters->additional_field_7->section === 'Accomodation') {{ 'selected' }} @endif>
                                    Accomodation
                                </option>
                                <option @if(isset($old_parameters->additional_field_7) && $old_parameters->additional_field_7->section === 'Additional') {{ 'selected' }} @endif>
                                    Additional
                                </option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Type</span>
                            <select class="form-control input-sm" name="additional_field_7[type]"
                                    id="additional_field_7_type">
                                <option @if(isset($old_parameters->additional_field_7) && $old_parameters->additional_field_7->type === 'text') {{ 'selected' }} @endif>
                                    Text
                                </option>
                                <option @if(isset($old_parameters->additional_field_7) && $old_parameters->additional_field_7->type === 'text-area') {{ 'selected' }} @endif>
                                    Text area
                                </option>
                                <option @if(isset($old_parameters->additional_field_7) && $old_parameters->additional_field_7->type === 'date') {{ 'selected' }} @endif>
                                    Date
                                </option>
                                <option @if(isset($old_parameters->additional_field_7) && $old_parameters->additional_field_7->type === 'number') {{ 'selected' }} @endif>
                                    Number
                                </option>
                                <option @if(isset($old_parameters->additional_field_7) && $old_parameters->additional_field_7->type === 'checkboxes') {{ 'selected' }} @endif>
                                    Checkboxes
                                </option>
                                <option @if(isset($old_parameters->additional_field_7) && $old_parameters->additional_field_7->type === 'radio') {{ 'selected' }} @endif>
                                    Radio
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="add-field-7-options" @if(!isset($old_parameters->additional_field_7) || ($old_parameters->additional_field_7->type !== 'checkboxes' && $old_parameters->additional_field_7->type !== 'radio')) {{ 'style=display:none;' }} @endif>
                        @if (isset($old_parameters->additional_field_7->options))
                            @foreach($old_parameters->additional_field_7->options as $option)
                                <div class="form-group row add-field-7-option" row-id="{{ $end_id_7 }}">
                                    <div class="col-sm-10" style="margin-bottom:0;">
                                        <input type="text" class="form-control input-sm" id="additional_field_option"
                                               name="additional_field_7[options][{{ $end_id_7 }}]" placeholder="Option"
                                               value="{{ $option }}">
                                    </div>
                                    <div style="margin-bottom:0;">
                                        <button type="button" class="btn btn-sm" style="margin-top:0px;"><i
                                                    class="voyager-trash"></i></button>
                                    </div>
                                </div>
                                @php
                                    $end_id_7 = $loop->index + 1;
                                @endphp
                            @endforeach
                        @endif
                        <div class="form-group row add-field-7-option" row-id="{{ $end_id_7 }}">
                            <div class="col-sm-10" style="margin-bottom:0;">
                                <input type="text" class="form-control input-sm" id="additional_field_option"
                                       name="additional_field_7[options][{{ $end_id_7 }}]" placeholder="Option"
                                       value="">
                            </div>
                            <div style="margin-bottom:0;">
                                <button type="button" class="btn btn-success btn-sm" style="margin-top:0px;"><i
                                            class="voyager-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="col-form-label required-label">Required</span>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_7[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->additional_field_7->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_7[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->additional_field_7->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Field 8</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_8[value]"
                                   id="additional_field_8"
                                   value="0" @if(!isset($old_parameters->additional_field_8)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_8[value]"
                                   id="additional_field_8"
                                   value="1" @if(isset($old_parameters->additional_field_8)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div class="add-field-8" @if(!isset($old_parameters->additional_field_8)) {{ 'style=display:none;' }} @endif>
                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Label</span>
                            <input type="text" class="form-control input-sm" id="additional_field_8_label"
                                   name="additional_field_8[label]" placeholder="Field label"
                                   value="{{ isset($old_parameters->additional_field_8) ? $old_parameters->additional_field_8->label : ''}}">
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Section</span>
                            <select class="form-control input-sm" name="additional_field_8[section]"
                                    id="additional_field_8_section">
                                <option @if(isset($old_parameters->additional_field_8) && $old_parameters->additional_field_8->section === 'Personal') {{ 'selected' }} @endif>
                                    Personal
                                </option>
                                <option @if(isset($old_parameters->additional_field_8) && $old_parameters->additional_field_8->section === 'Travel') {{ 'selected' }} @endif>
                                    Travel
                                </option>
                                <option @if(isset($old_parameters->additional_field_8) && $old_parameters->additional_field_8->section === 'Accomodation') {{ 'selected' }} @endif>
                                    Accomodation
                                </option>
                                <option @if(isset($old_parameters->additional_field_8) && $old_parameters->additional_field_8->section === 'Additional') {{ 'selected' }} @endif>
                                    Additional
                                </option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Type</span>
                            <select class="form-control input-sm" name="additional_field_8[type]"
                                    id="additional_field_8_type">
                                <option @if(isset($old_parameters->additional_field_8) && $old_parameters->additional_field_8->type === 'text') {{ 'selected' }} @endif>
                                    Text
                                </option>
                                <option @if(isset($old_parameters->additional_field_8) && $old_parameters->additional_field_8->type === 'text-area') {{ 'selected' }} @endif>
                                    Text area
                                </option>
                                <option @if(isset($old_parameters->additional_field_8) && $old_parameters->additional_field_8->type === 'date') {{ 'selected' }} @endif>
                                    Date
                                </option>
                                <option @if(isset($old_parameters->additional_field_8) && $old_parameters->additional_field_8->type === 'number') {{ 'selected' }} @endif>
                                    Number
                                </option>
                                <option @if(isset($old_parameters->additional_field_8) && $old_parameters->additional_field_8->type === 'checkboxes') {{ 'selected' }} @endif>
                                    Checkboxes
                                </option>
                                <option @if(isset($old_parameters->additional_field_8) && $old_parameters->additional_field_8->type === 'radio') {{ 'selected' }} @endif>
                                    Radio
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="add-field-8-options" @if(!isset($old_parameters->additional_field_8) || ($old_parameters->additional_field_8->type !== 'checkboxes' && $old_parameters->additional_field_8->type !== 'radio')) {{ 'style=display:none;' }} @endif>
                        @if (isset($old_parameters->additional_field_8->options))
                            @foreach($old_parameters->additional_field_8->options as $option)
                                <div class="form-group row add-field-8-option" row-id="{{ $end_id_8 }}">
                                    <div class="col-sm-10" style="margin-bottom:0;">
                                        <input type="text" class="form-control input-sm" id="additional_field_option"
                                               name="additional_field_8[options][{{ $end_id_8 }}]" placeholder="Option"
                                               value="{{ $option }}">
                                    </div>
                                    <div style="margin-bottom:0;">
                                        <button type="button" class="btn btn-sm" style="margin-top:0px;"><i
                                                    class="voyager-trash"></i></button>
                                    </div>
                                </div>
                                @php
                                    $end_id_8 = $loop->index + 1;
                                @endphp
                            @endforeach
                        @endif
                        <div class="form-group row add-field-8-option" row-id="{{ $end_id_8 }}">
                            <div class="col-sm-10" style="margin-bottom:0;">
                                <input type="text" class="form-control input-sm" id="additional_field_option"
                                       name="additional_field_8[options][{{ $end_id_8 }}]" placeholder="Option"
                                       value="">
                            </div>
                            <div style="margin-bottom:0;">
                                <button type="button" class="btn btn-success btn-sm" style="margin-top:0px;"><i
                                            class="voyager-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="col-form-label required-label">Required</span>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_8[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->additional_field_8->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_8[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->additional_field_8->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Field 9</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_9[value]"
                                   id="additional_field_9"
                                   value="0" @if(!isset($old_parameters->additional_field_9)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_9[value]"
                                   id="additional_field_9"
                                   value="1" @if(isset($old_parameters->additional_field_9)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div class="add-field-9" @if(!isset($old_parameters->additional_field_9)) {{ 'style=display:none;' }} @endif>
                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Label</span>
                            <input type="text" class="form-control input-sm" id="additional_field_9_label"
                                   name="additional_field_9[label]" placeholder="Field label"
                                   value="{{ isset($old_parameters->additional_field_9) ? $old_parameters->additional_field_9->label : ''}}">
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Section</span>
                            <select class="form-control input-sm" name="additional_field_9[section]"
                                    id="additional_field_9_section">
                                <option @if(isset($old_parameters->additional_field_9) && $old_parameters->additional_field_9->section === 'Personal') {{ 'selected' }} @endif>
                                    Personal
                                </option>
                                <option @if(isset($old_parameters->additional_field_9) && $old_parameters->additional_field_9->section === 'Travel') {{ 'selected' }} @endif>
                                    Travel
                                </option>
                                <option @if(isset($old_parameters->additional_field_9) && $old_parameters->additional_field_9->section === 'Accomodation') {{ 'selected' }} @endif>
                                    Accomodation
                                </option>
                                <option @if(isset($old_parameters->additional_field_9) && $old_parameters->additional_field_9->section === 'Additional') {{ 'selected' }} @endif>
                                    Additional
                                </option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Type</span>
                            <select class="form-control input-sm" name="additional_field_9[type]"
                                    id="additional_field_9_type">
                                <option @if(isset($old_parameters->additional_field_9) && $old_parameters->additional_field_9->type === 'text') {{ 'selected' }} @endif>
                                    Text
                                </option>
                                <option @if(isset($old_parameters->additional_field_9) && $old_parameters->additional_field_9->type === 'text-area') {{ 'selected' }} @endif>
                                    Text area
                                </option>
                                <option @if(isset($old_parameters->additional_field_9) && $old_parameters->additional_field_9->type === 'date') {{ 'selected' }} @endif>
                                    Date
                                </option>
                                <option @if(isset($old_parameters->additional_field_9) && $old_parameters->additional_field_9->type === 'number') {{ 'selected' }} @endif>
                                    Number
                                </option>
                                <option @if(isset($old_parameters->additional_field_9) && $old_parameters->additional_field_9->type === 'checkboxes') {{ 'selected' }} @endif>
                                    Checkboxes
                                </option>
                                <option @if(isset($old_parameters->additional_field_9) && $old_parameters->additional_field_9->type === 'radio') {{ 'selected' }} @endif>
                                    Radio
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="add-field-9-options" @if(!isset($old_parameters->additional_field_9) || ($old_parameters->additional_field_9->type !== 'checkboxes' && $old_parameters->additional_field_9->type !== 'radio')) {{ 'style=display:none;' }} @endif>
                        @if (isset($old_parameters->additional_field_9->options))
                            @foreach($old_parameters->additional_field_9->options as $option)
                                <div class="form-group row add-field-9-option" row-id="{{ $end_id_9 }}">
                                    <div class="col-sm-10" style="margin-bottom:0;">
                                        <input type="text" class="form-control input-sm" id="additional_field_option"
                                               name="additional_field_9[options][{{ $end_id_9 }}]" placeholder="Option"
                                               value="{{ $option }}">
                                    </div>
                                    <div style="margin-bottom:0;">
                                        <button type="button" class="btn btn-sm" style="margin-top:0px;"><i
                                                    class="voyager-trash"></i></button>
                                    </div>
                                </div>
                                @php
                                    $end_id_9 = $loop->index + 1;
                                @endphp
                            @endforeach
                        @endif
                        <div class="form-group row add-field-9-option" row-id="{{ $end_id_9 }}">
                            <div class="col-sm-10" style="margin-bottom:0;">
                                <input type="text" class="form-control input-sm" id="additional_field_option"
                                       name="additional_field_9[options][{{ $end_id_9 }}]" placeholder="Option"
                                       value="">
                            </div>
                            <div style="margin-bottom:0;">
                                <button type="button" class="btn btn-success btn-sm" style="margin-top:0px;"><i
                                            class="voyager-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="col-form-label required-label">Required</span>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_9[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->additional_field_9->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_9[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->additional_field_9->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Field 10</span>
                <div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_10[value]"
                                   id="additional_field_10"
                                   value="0" @if(!isset($old_parameters->additional_field_10)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_10[value]"
                                   id="additional_field_10"
                                   value="1" @if(isset($old_parameters->additional_field_10)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
                <div class="add-field-10" @if(!isset($old_parameters->additional_field_10)) {{ 'style=display:none;' }} @endif>
                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Label</span>
                            <input type="text" class="form-control input-sm" id="additional_field_10_label"
                                   name="additional_field_10[label]" placeholder="Field label"
                                   value="{{ isset($old_parameters->additional_field_10) ? $old_parameters->additional_field_10->label : ''}}">
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Section</span>
                            <select class="form-control input-sm" name="additional_field_10[section]"
                                    id="additional_field_10_section">
                                <option @if(isset($old_parameters->additional_field_10) && $old_parameters->additional_field_10->section === 'Personal') {{ 'selected' }} @endif>
                                    Personal
                                </option>
                                <option @if(isset($old_parameters->additional_field_10) && $old_parameters->additional_field_10->section === 'Travel') {{ 'selected' }} @endif>
                                    Travel
                                </option>
                                <option @if(isset($old_parameters->additional_field_10) && $old_parameters->additional_field_10->section === 'Accomodation') {{ 'selected' }} @endif>
                                    Accomodation
                                </option>
                                <option @if(isset($old_parameters->additional_field_10) && $old_parameters->additional_field_10->section === 'Additional') {{ 'selected' }} @endif>
                                    Additional
                                </option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Type</span>
                            <select class="form-control input-sm" name="additional_field_10[type]"
                                    id="additional_field_10_type">
                                <option @if(isset($old_parameters->additional_field_10) && $old_parameters->additional_field_10->type === 'text') {{ 'selected' }} @endif>
                                    Text
                                </option>
                                <option @if(isset($old_parameters->additional_field_10) && $old_parameters->additional_field_10->type === 'text-area') {{ 'selected' }} @endif>
                                    Text area
                                </option>
                                <option @if(isset($old_parameters->additional_field_10) && $old_parameters->additional_field_10->type === 'date') {{ 'selected' }} @endif>
                                    Date
                                </option>
                                <option @if(isset($old_parameters->additional_field_10) && $old_parameters->additional_field_10->type === 'number') {{ 'selected' }} @endif>
                                    Number
                                </option>
                                <option @if(isset($old_parameters->additional_field_10) && $old_parameters->additional_field_10->type === 'checkboxes') {{ 'selected' }} @endif>
                                    Checkboxes
                                </option>
                                <option @if(isset($old_parameters->additional_field_10) && $old_parameters->additional_field_10->type === 'radio') {{ 'selected' }} @endif>
                                    Radio
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="add-field-10-options" @if(!isset($old_parameters->additional_field_10) || ($old_parameters->additional_field_10->type !== 'checkboxes' && $old_parameters->additional_field_10->type !== 'radio')) {{ 'style=display:none;' }} @endif>
                        @if (isset($old_parameters->additional_field_10->options))
                            @foreach($old_parameters->additional_field_10->options as $option)
                                <div class="form-group row add-field-10-option" row-id="{{ $end_id_10 }}">
                                    <div class="col-sm-10" style="margin-bottom:0;">
                                        <input type="text" class="form-control input-sm" id="additional_field_option"
                                               name="additional_field_10[options][{{ $end_id_10 }}]" placeholder="Option"
                                               value="{{ $option }}">
                                    </div>
                                    <div style="margin-bottom:0;">
                                        <button type="button" class="btn btn-sm" style="margin-top:0px;"><i
                                                    class="voyager-trash"></i></button>
                                    </div>
                                </div>
                                @php
                                    $end_id_10 = $loop->index + 1;
                                @endphp
                            @endforeach
                        @endif
                        <div class="form-group row add-field-10-option" row-id="{{ $end_id_10 }}">
                            <div class="col-sm-10" style="margin-bottom:0;">
                                <input type="text" class="form-control input-sm" id="additional_field_option"
                                       name="additional_field_10[options][{{ $end_id_10 }}]" placeholder="Option"
                                       value="">
                            </div>
                            <div style="margin-bottom:0;">
                                <button type="button" class="btn btn-success btn-sm" style="margin-top:0px;"><i
                                            class="voyager-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="col-form-label required-label">Required</span>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_10[required]" id="prefix"
                                   value="0" @if(empty($old_parameters->additional_field_10->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field_10[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->additional_field_10->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
    </section>
</div>
