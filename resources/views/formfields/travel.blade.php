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
