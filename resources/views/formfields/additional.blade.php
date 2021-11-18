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
