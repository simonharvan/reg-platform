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
