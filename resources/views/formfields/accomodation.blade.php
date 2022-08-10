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
        <div>
            <input type="text" class="form-control input-sm" id="needs_accomodation[groups]"
                   name="needs_accomodation[groups]" placeholder="Group ids e.g. [1,2,3]"
                   value="{{ isset($old_parameters->needs_accomodation->groups) ? '['. implode(',',$old_parameters->needs_accomodation->groups) . ']' : ''}}">
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
        <div>
            <input type="text" class="form-control input-sm" id="guest_names[groups]"
                   name="guest_names[groups]" placeholder="Group ids e.g. [1,2,3]"
                   value="{{ isset($old_parameters->guest_names->groups) ? '['. implode(',',$old_parameters->guest_names->groups) . ']' : ''}}">
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
        <div>
            <input type="text" class="form-control input-sm" id="room_type[groups]"
                   name="room_type[groups]" placeholder="Group ids e.g. [1,2,3]"
                   value="{{ isset($old_parameters->room_type->groups) ? '['. implode(',',$old_parameters->room_type->groups) . ']' : ''}}">
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
        <div>
            <input type="text" class="form-control input-sm" id="room_arrival[groups]"
                   name="room_arrival[groups]" placeholder="Group ids e.g. [1,2,3]"
                   value="{{ isset($old_parameters->room_arrival->groups) ? '['. implode(',',$old_parameters->room_arrival->groups) . ']' : ''}}">
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
        <div>
            <input type="text" class="form-control input-sm" id="room_departure[groups]"
                   name="room_departure[groups]" placeholder="Group ids e.g. [1,2,3]"
                   value="{{ isset($old_parameters->room_departure->groups) ? '['. implode(',',$old_parameters->room_departure->groups) . ']' : ''}}">
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
        <div>
            <input type="text" class="form-control input-sm" id="room_additional_number_night[groups]"
                   name="room_additional_number_night[groups]" placeholder="Group ids e.g. [1,2,3]"
                   value="{{ isset($old_parameters->room_additional_number_night->groups) ? '['. implode(',',$old_parameters->room_additional_number_night->groups) . ']' : ''}}">
        </div>
    </div>
</fieldset>
