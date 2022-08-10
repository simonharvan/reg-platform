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
                    <input class="form-check-input" type="radio" name="is_visa_required[required]" id="is_visa_required"
                           value="0" @if(empty($old_parameters->is_visa_required->validation)) {{'checked'}} @endif>
                    No
                </label>
            </div>
            <div class="radio-inline">
                <label>
                    <input class="form-check-input" type="radio" name="is_visa_required[required]" id="is_visa_required"
                           value="1" @if(!empty($old_parameters->is_visa_required->validation)) {{ 'checked' }} @endif>
                    Yes
                </label>
            </div>
        </div>
        <div>
            <input type="text" class="form-control input-sm" id="is_visa_required[groups]"
                   name="is_visa_required[groups]" placeholder="Group ids e.g. [1,2,3]"
                   value="{{ isset($old_parameters->is_visa_required->groups) ? '['. implode(',',$old_parameters->is_visa_required->groups) . ']' : ''}}">
        </div>
    </div>
</fieldset>
<fieldset class="form-group">
    <div class="grid-row">
        <span class="col-form-label pt-0">Is visa obtained</span>
        <div>
            <div class="radio-inline">
                <label>
                    <input class="form-check-input" type="radio" name="is_visa_obtained[value]"
                           id="is_visa_obtained"
                           value="0" @if(!isset($old_parameters->is_visa_obtained->value)) {{ 'checked' }} @endif>
                    No
                </label>
            </div>
            <div class="radio-inline">
                <label>
                    <input class="form-check-input" type="radio" name="is_visa_obtained[value]"
                           id="is_visa_obtained"
                           value="1" @if(isset($old_parameters->is_visa_obtained->value)) {{ 'checked' }} @endif>
                    Yes
                </label>
            </div>
        </div>
        <div>
            <div class="radio-inline">
                <label>
                    <input class="form-check-input" type="radio" name="is_visa_obtained[required]" id="is_visa_obtained"
                           value="0" @if(empty($old_parameters->is_visa_obtained->validation)) {{'checked'}} @endif>
                    No
                </label>
            </div>
            <div class="radio-inline">
                <label>
                    <input class="form-check-input" type="radio" name="is_visa_obtained[required]" id="is_visa_obtained"
                           value="1" @if(!empty($old_parameters->is_visa_obtained->validation)) {{ 'checked' }} @endif>
                    Yes
                </label>
            </div>
        </div>
        <div>
            <input type="text" class="form-control input-sm" id="is_visa_obtained[groups]"
                   name="is_visa_obtained[groups]" placeholder="Group ids e.g. [1,2,3]"
                   value="{{ isset($old_parameters->is_visa_obtained->groups) ? '['. implode(',',$old_parameters->is_visa_obtained->groups) . ']' : ''}}">
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
        <div>
            <input type="text" class="form-control input-sm" id="visa_copy[groups]"
                   name="visa_copy[groups]" placeholder="Group ids e.g. [1,2,3]"
                   value="{{ isset($old_parameters->visa_copy->groups) ? '['. implode(',',$old_parameters->visa_copy->groups) . ']' : ''}}">
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
        <div>
            <input type="text" class="form-control input-sm" id="passport_copy[groups]"
                   name="passport_copy[groups]" placeholder="Group ids e.g. [1,2,3]"
                   value="{{ isset($old_parameters->passport_copy->groups) ? '['. implode(',',$old_parameters->passport_copy->groups) . ']' : ''}}">
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
        <div>
            <input type="text" class="form-control input-sm" id="passport_number[groups]"
                   name="passport_number[groups]" placeholder="Group ids e.g. [1,2,3]"
                   value="{{ isset($old_parameters->passport_number->groups) ? '['. implode(',',$old_parameters->passport_number->groups) . ']' : ''}}">
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
        <div>
            <input type="text" class="form-control input-sm" id="passport_issued_by[groups]"
                   name="passport_issued_by[groups]" placeholder="Group ids e.g. [1,2,3]"
                   value="{{ isset($old_parameters->passport_issued_by->groups) ? '['. implode(',',$old_parameters->passport_issued_by->groups) . ']' : ''}}">
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
        <div>
            <input type="text" class="form-control input-sm" id="passport_date_of_issue[groups]"
                   name="passport_date_of_issue[groups]" placeholder="Group ids e.g. [1,2,3]"
                   value="{{ isset($old_parameters->passport_date_of_issue->groups) ? '['. implode(',',$old_parameters->passport_date_of_issue->groups) . ']' : ''}}">
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
        <div>
            <input type="text" class="form-control input-sm" id="passport_date_of_expiry[groups]"
                   name="passport_date_of_expiry[groups]" placeholder="Group ids e.g. [1,2,3]"
                   value="{{ isset($old_parameters->passport_date_of_expiry->groups) ? '['. implode(',',$old_parameters->passport_date_of_expiry->groups) . ']' : ''}}">
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
        <div>
            <input type="text" class="form-control input-sm" id="birthdate[groups]"
                   name="birthdate[groups]" placeholder="Group ids e.g. [1,2,3]"
                   value="{{ isset($old_parameters->birthdate->groups) ? '['. implode(',',$old_parameters->birthdate->groups) . ']' : ''}}">
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
        <div>
            <input type="text" class="form-control input-sm" id="local_embassy[groups]"
                   name="local_embassy[groups]" placeholder="Group ids e.g. [1,2,3]"
                   value="{{ isset($old_parameters->local_embassy->groups) ? '['. implode(',',$old_parameters->local_embassy->groups) . ']' : ''}}">
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
        <div>
            <input type="text" class="form-control input-sm" id="departure_city[groups]"
                   name="departure_city[groups]" placeholder="Group ids e.g. [1,2,3]"
                   value="{{ isset($old_parameters->departure_city->groups) ? '['. implode(',',$old_parameters->departure_city->groups) . ']' : ''}}">
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
        <div>
            <input type="text" class="form-control input-sm" id="departure_date[groups]"
                   name="departure_date[groups]" placeholder="Group ids e.g. [1,2,3]"
                   value="{{ isset($old_parameters->departure_date->groups) ? '['. implode(',',$old_parameters->departure_date->groups) . ']' : ''}}">
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
        <div>
            <input type="text" class="form-control input-sm" id="return_date[groups]"
                   name="return_date[groups]" placeholder="Group ids e.g. [1,2,3]"
                   value="{{ isset($old_parameters->return_date->groups) ? '['. implode(',',$old_parameters->return_date->groups) . ']' : ''}}">
        </div>
    </div>
</fieldset>
