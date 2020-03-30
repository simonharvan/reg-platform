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

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Email<br><small>Field email is mandatory for registration.</small></span>

                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="email" id="email" value="1"
                            @if(!isset($old_parameters->organization)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Prefix</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="prefix" id="prefix"
                                   value="0" @if(!isset($old_parameters->prefix)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="prefix" id="prefix"
                                   value="1" @if(isset($old_parameters->prefix)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">First name</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="first_name" id="first_name" value="0"
                            @if(!isset($old_parameters->first_name)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="first_name" id="first_name" value="1"
                            @if(isset($old_parameters->first_name)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Last name</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="last_name" id="last_name" value="0"
                            @if(!isset($old_parameters->last_name)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="last_name" id="last_name" value="1"
                            @if(isset($old_parameters->last_name)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Organization</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="organization" id="organization" value="0"
                            @if(!isset($old_parameters->organization)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="organization" id="organization"
                                   value="1"
                            @if(isset($old_parameters->organization)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Position</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="position" id="position" value="0"
                            @if(!isset($old_parameters->position)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="position" id="position" value="1"
                            @if(isset($old_parameters->position)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Address</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="address" id="address" value="0"
                            @if(!isset($old_parameters->address)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="address" id="address" value="1"
                            @if(isset($old_parameters->address)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Address 2</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="address2" id="address2" value="0"
                            @if(!isset($old_parameters->address2)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="address2" id="address2" value="1"
                            @if(isset($old_parameters->address2)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">City</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="city" id="city" value="0"
                            @if(!isset($old_parameters->city)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="city" id="city" value="1"
                            @if(isset($old_parameters->city)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Postal code</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="postal_code" id="postal_code" value="0"
                            @if(!isset($old_parameters->postal_code)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="postal_code" id="postal_code" value="1"
                            @if(isset($old_parameters->postal_code)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Country</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="country" id="country" value="0"
                            @if(!isset($old_parameters->country)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="country" id="country" value="1"
                            @if(isset($old_parameters->country)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Nationality</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="nationality" id="nationality" value="0"
                            @if(!isset($old_parameters->nationality)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="nationality" id="nationality" value="1"
                            @if(isset($old_parameters->nationality)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Assistant email</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="assistant_email" id="assistant_email"
                                   value="0"
                            @if(!isset($old_parameters->assistant_email)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="assistant_email" id="assistant_email"
                            @if(isset($old_parameters->assistant_email)) {{ 'checked' }} @endif>
                            Yes
                        </label>

                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">CC Assistant email</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="cc_assistant_email"
                                   id="cc_assistant_email" value="0"
                            @if(!isset($old_parameters->cc_assistant_email)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="cc_assistant_email"
                                   id="cc_assistant_email" value="1"
                            @if(isset($old_parameters->cc_assistant_email)) {{ 'checked' }} @endif>
                            Yes
                        </label>

                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Phone</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="phone" id="phone" value="0"
                            @if(!isset($old_parameters->phone)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="phone" id="phone" value="1"
                            @if(isset($old_parameters->phone)) {{ 'checked' }} @endif>
                            Yes
                        </label>

                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Mobile phone</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="mobile_phone" id="mobile_phone" value="0"
                            @if(!isset($old_parameters->mobile_phone)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="mobile_phone" id="mobile_phone"
                                   value="1"
                            @if(isset($old_parameters->mobile_phone)) {{ 'checked' }} @endif>
                            Yes
                        </label>

                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Fax</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="fax" id="fax" value="0"
                            @if(!isset($old_parameters->fax)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="fax" id="fax" value="1"
                            @if(isset($old_parameters->fax)) {{ 'checked' }} @endif>
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
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Is visa required<br><small>(question, whether are required)</small></span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="is_visa_required" id="is_visa_required"
                                   value="0" @if(!isset($old_parameters->is_visa_required)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="is_visa_required" id="is_visa_required"
                                   value="1" @if(isset($old_parameters->is_visa_required)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Visa copy<br><small>image/pdf file</small></span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="visa_copy" id="visa_copy" value="0"
                            @if(!isset($old_parameters->organization)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="visa_copy" id="visa_copy"
                                   value="1" @if(isset($old_parameters->visa_copy)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Passport copy<br><small>image/pdf file</small></span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_copy" id="passport_copy"
                                   value="0" @if(!isset($old_parameters->passport_copy)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_copy" id="passport_copy"
                                   value="1" @if(isset($old_parameters->passport_copy)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Passport number</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_number" id="passport_number"
                                   value="0" @if(!isset($old_parameters->passport_number)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_number" id="passport_number"
                                   value="1" @if(isset($old_parameters->passport_number)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Passport issued by</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_issued_by"
                                   id="passport_issued_by"
                                   value="0" @if(!isset($old_parameters->organization)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_issued_by"
                                   id="passport_issued_by"
                                   value="1" @if(isset($old_parameters->passport_issued_by)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Passport date of issued</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_date_of_issue"
                                   id="passport_date_of_issue"
                                   value="0" @if(!isset($old_parameters->organization)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_date_of_issue"
                                   id="passport_date_of_issue"
                                   value="1" @if(isset($old_parameters->passport_date_of_issue)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Passport date of expiry</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_date_of_expiry"
                                   id="passport_date_of_expiry"
                                   value="0" @if(!isset($old_parameters->organization)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="passport_date_of_expiry"
                                   id="passport_date_of_expiry"
                                   value="1" @if(isset($old_parameters->passport_date_of_expiry)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Date of birth</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="birthdate" id="birthdate" value="0"
                            @if(!isset($old_parameters->organization)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="birthdate" id="birthdate"
                                   value="1" @if(isset($old_parameters->birthdate)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Local embassy</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="local_embassy" id="local_embassy"
                                   value="0" @if(!isset($old_parameters->local_embassy)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="local_embassy" id="local_embassy"
                                   value="1" @if(isset($old_parameters->local_embassy)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Departure city</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="departure_city" id="departure_city"
                                   value="0" @if(!isset($old_parameters->departure_city)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="departure_city" id="departure_city"
                                   value="1" @if(isset($old_parameters->departure_city)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Departure date</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="departure_date" id="departure_date"
                                   value="0" @if(!isset($old_parameters->departure_date)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="departure_date" id="departure_date"
                                   value="1" @if(isset($old_parameters->departure_date)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Return date</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="return_date" id="return_date" value="0"
                            @if(!isset($old_parameters->organization)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="return_date" id="return_date"
                                   value="1" @if(isset($old_parameters->return_date)) {{ 'checked' }} @endif>
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
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Do you need accomodation?<br><small>(question, whether is required)</small></span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="needs_accomodation"
                                   id="needs_accomodation"
                                   value="0" @if(!isset($old_parameters->organization)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="needs_accomodation"
                                   id="needs_accomodation"
                                   value="1" @if(isset($old_parameters->needs_accomodation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Guest names</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="guest_names" id="guest_names" value="0"
                            @if(!isset($old_parameters->organization)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="guest_names" id="guest_names"
                                   value="1" @if(isset($old_parameters->guest_names)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Room type<br><small>(Standard Single, Double twin beds, Double queen size bed, Executive Room)</small></span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_type" id="room_type" value="0"
                            @if(!isset($old_parameters->organization)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_type" id="room_type"
                                   value="1" @if(isset($old_parameters->room_type)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Room arrival</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_arrival" id="room_arrival" value="0"
                            @if(!isset($old_parameters->organization)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_arrival" id="room_arrival"
                                   value="1" @if(isset($old_parameters->room_arrival)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Room departure</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_departure" id="room_departure"
                                   value="0" @if(!isset($old_parameters->room_departure)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_departure" id="room_departure"
                                   value="1" @if(isset($old_parameters->room_departure)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Room additional number night<br><small>To add note to this field add <i>event text</i> - <strong>room additional number night help</strong></small></span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_additional_number_night"
                                   id="room_additional_number_night"
                                   value="0" @if(!isset($old_parameters->organization)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="room_additional_number_night"
                                   id="room_additional_number_night"
                                   value="1" @if(isset($old_parameters->room_additional_number_night)) {{ 'checked' }} @endif>
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
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Dietary requirements</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="dietary_requirements"
                                   id="dietary_requirements"
                                   value="0" @if(!isset($old_parameters->organization)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="dietary_requirements"
                                   id="dietary_requirements"
                                   value="1" @if(isset($old_parameters->dietary_requirements)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Interpretation<br><small>(translator)</small></span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="interpretation" id="interpretation"
                                   value="0" @if(!isset($old_parameters->interpretation)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="interpretation" id="interpretation"
                                   value="1" @if(isset($old_parameters->interpretation)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Disabilities</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="disabilities" id="disabilities" value="0"
                            @if(!isset($old_parameters->organization)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="disabilities" id="disabilities"
                                   value="1" @if(isset($old_parameters->disabilities)) {{ 'checked' }} @endif>
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Remark</span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="remark" id="remark"
                                   value="0" @if(!isset($old_parameters->organization)) {{ 'checked' }} @endif>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="remark" id="remark"
                                   value="1" @if(isset($old_parameters->remark)) {{ 'checked' }} @endif>
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
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">File</span>
                <div class="col-sm-2">
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
                <div class="add-file" @if(!isset($old_parameters->additional_file)) {{ 'style="display: none"' }} @endif>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="text" class="form-control input-sm" id="additional_file_label"
                                   name="additional_file[label]" placeholder="File field label"
                                   value="{{ $old_parameters->additional_file->label }}">
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="form-group">
                            <select class="form-control input-sm" name="additional_file[section]"
                                    id="additional_file_section">
                                <option @if($old_parameters->additional_file->section === 'Personal') {{ 'selected' }} @endif>
                                    Personal
                                </option>
                                <option @if($old_parameters->additional_file->section === 'Travel') {{ 'selected' }} @endif>
                                    Travel
                                </option>
                                <option @if($old_parameters->additional_file->section === 'Accomodation') {{ 'selected' }} @endif>
                                    Accomodation
                                </option>
                                <option @if($old_parameters->additional_file->section === 'Additional') {{ 'selected' }} @endif>
                                    Additional
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Field</span>
                <div class="col-sm-2">
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
                <div class="add-field" @if(!isset($old_parameters->additional_field)) {{ 'style="display: none"' }} @endif>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="text" class="form-control input-sm" id="additional_field_label"
                                   name="additional_field[label]" placeholder="Field label"
                                   value="{{ $old_parameters->additional_field->label }}">
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="form-group">
                            <select class="form-control input-sm" name="additional_field[section]"
                                    id="additional_field_section">
                                <option @if($old_parameters->additional_field->section === 'Personal') {{ 'selected' }} @endif>
                                    Personal
                                </option>
                                <option @if($old_parameters->additional_field->section === 'Travel') {{ 'selected' }} @endif>
                                    Travel
                                </option>
                                <option @if($old_parameters->additional_field->section === 'Accomodation') {{ 'selected' }} @endif>
                                    Accomodation
                                </option>
                                <option @if($old_parameters->additional_field->section === 'Additional') {{ 'selected' }} @endif>
                                    Additional
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="form-group">
                            <select class="form-control input-sm" name="additional_field[type]"
                                    id="additional_field_type">
                                <option @if($old_parameters->additional_field->type === 'text') {{ 'selected' }} @endif>
                                    Text
                                </option>
                                <option @if($old_parameters->additional_field->type === 'text-area') {{ 'selected' }} @endif>
                                    Text area
                                </option>
                                <option @if($old_parameters->additional_field->type === 'date') {{ 'selected' }} @endif>
                                    Date
                                </option>
                                <option @if($old_parameters->additional_field->type === 'number') {{ 'selected' }} @endif>
                                    Number
                                </option>
                                <option @if($old_parameters->additional_field->type === 'checkboxes') {{ 'selected' }} @endif>
                                    Checkboxes
                                </option>
                                <option @if($old_parameters->additional_field->type === 'radio') {{ 'selected' }} @endif>
                                    Radio
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-10 col-sm-offset-4 add-field-options" @if($old_parameters->additional_field->type !== 'checkboxes' && $old_parameters->additional_field->type !== 'radio') {{ 'style="display: none"' }} @endif>
                        @if (isset($old_parameters->additional_field->options))
                            @foreach($old_parameters->additional_field->options as $option)
                                <div class="form-group row" row-id="{{ $end_id }}">
                                    <div class="col-sm-6" style="margin-bottom:0;">
                                        <input type="text" class="form-control input-sm" id="additional_field_option"
                                               name="additional_field[options][{{ $end_id }}]" placeholder="Option"
                                               value="{{ $option }}">
                                    </div>
                                    <div class="col-sm-2" style="margin-bottom:0;">
                                        <button type="button" class="btn btn-sm" style="margin-top:0px;"><i
                                                    class="voyager-trash"></i></button>
                                    </div>
                                </div>
                                @php
                                    $end_id = $loop->index + 1;
                                @endphp
                            @endforeach
                        @endif
                        <div class="form-group row" row-id="{{ $end_id }}">
                            <div class="col-sm-6" style="margin-bottom:0;">
                                <input type="text" class="form-control input-sm" id="additional_field_option"
                                       name="additional_field[options][{{ $end_id }}]" placeholder="Option"
                                       value="">
                            </div>
                            <div class="col-sm-2" style="margin-bottom:0;">
                                <button type="button" class="btn btn-success btn-sm" style="margin-top:0px;"><i
                                            class="voyager-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </section>
</div>