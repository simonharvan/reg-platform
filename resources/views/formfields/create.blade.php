@php
    if($dataTypeContent->{$row->field}){
        $old_parameters = json_decode($dataTypeContent->{$row->field});
    }
    $end_id = 0;
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
                                   value="0" @if(empty($old_parameters->additional_file->validation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="additional_field[required]" id="prefix"
                                   value="1" @if(!empty($old_parameters->additional_file->validation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
    </section>
</div>