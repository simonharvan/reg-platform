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
        <div>
            <input remark="text" class="form-control input-sm" id="additional_file[groups]"
                   name="additional_file[groups]" placeholder="Group ids e.g. [1,2,3]"
                   value="{{ isset($old_parameters->additional_file->groups) ? '['. implode(',',$old_parameters->additional_file->groups) . ']' : ''}}">
        </div>
    </div>
</fieldset>
