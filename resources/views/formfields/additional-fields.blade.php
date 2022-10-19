@php
    $end_id = [];
@endphp
@for ($i = 0; $i <= 20; $i++)
    @php
        $end_id[$i] = 0;
        $additional_field = 'additional_field_'.$i;
    @endphp

    <fieldset class="form-group">
        <div class="grid-row">
            <span class="col-form-label pt-0">Field {{$i}}</span>
            <div>
                <div class="radio-inline">
                    <label>
                        <input class="form-check-input" type="radio" name="additional_field_{{$i}}[value]"
                               id="additional_field_{{$i}}"
                               value="0" @if(!isset($old_parameters->$additional_field)) {{ 'checked' }} @endif>
                        No
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input class="form-check-input" type="radio" name="additional_field_{{$i}}[value]"
                               id="additional_field_{{$i}}"
                               value="1" @if(isset($old_parameters->$additional_field)) {{ 'checked' }} @endif>
                        Yes
                    </label>
                </div>
            </div>
            <div class="add-field-{{$i}}" @if(!isset($old_parameters->$additional_field)) {{ 'style=display:none;' }} @endif>
                <div>
                    <div class="form-group">
                        <span class="col-form-label pt-0">Label</span>
                        <input type="text" class="form-control input-sm" id="additional_field_{{$i}}_label"
                               name="additional_field_{{$i}}[label]" placeholder="Field label"
                               value="{{ isset($old_parameters->$additional_field) ? $old_parameters->$additional_field->label : ''}}">
                    </div>
                </div>

                <div>
                    <div class="form-group">
                        <span class="col-form-label pt-0">Section</span>
                        <select class="form-control input-sm" name="additional_field_{{$i}}[section]"
                                id="additional_field_{{$i}}_section">
                            <option @if(isset($old_parameters->$additional_field) && $old_parameters->$additional_field->section === 'Personal') {{ 'selected' }} @endif>
                                Personal
                            </option>
                            <option @if(isset($old_parameters->$additional_field) && $old_parameters->$additional_field->section === 'Travel') {{ 'selected' }} @endif>
                                Travel
                            </option>
                            <option @if(isset($old_parameters->$additional_field) && $old_parameters->$additional_field->section === 'Accomodation') {{ 'selected' }} @endif>
                                Accomodation
                            </option>
                            <option @if(isset($old_parameters->$additional_field) && $old_parameters->$additional_field->section === 'Additional') {{ 'selected' }} @endif>
                                Additional
                            </option>
                        </select>
                    </div>
                </div>

                <div>
                    <div class="form-group">
                        <span class="col-form-label pt-0">Type</span>
                        <select class="form-control input-sm" name="additional_field_{{$i}}[type]"
                                id="additional_field_{{$i}}_type">
                            <option @if(isset($old_parameters->$additional_field) && $old_parameters->$additional_field->type === 'text') {{ 'selected' }} @endif>
                                Text
                            </option>
                            <option @if(isset($old_parameters->$additional_field) && $old_parameters->$additional_field->type === 'text-area') {{ 'selected' }} @endif>
                                Text area
                            </option>
                            <option @if(isset($old_parameters->$additional_field) && $old_parameters->$additional_field->type === 'date') {{ 'selected' }} @endif>
                                Date
                            </option>
                            <option @if(isset($old_parameters->$additional_field) && $old_parameters->$additional_field->type === 'number') {{ 'selected' }} @endif>
                                Number
                            </option>
                            <option @if(isset($old_parameters->$additional_field) && $old_parameters->$additional_field->type === 'checkboxes') {{ 'selected' }} @endif>
                                Checkboxes
                            </option>
                            <option @if(isset($old_parameters->$additional_field) && $old_parameters->$additional_field->type === 'radio') {{ 'selected' }} @endif>
                                Radio
                            </option>
                        </select>
                    </div>
                </div>

                <div class="add-field-{{$i}}-options" @if(!isset($old_parameters->$additional_field) || ($old_parameters->$additional_field->type !== 'checkboxes' && $old_parameters->$additional_field->type !== 'radio')) {{ 'style=display:none;' }} @endif>
                    @if (isset($old_parameters->$additional_field->options))
                        @foreach($old_parameters->$additional_field->options as $option)
                            <div class="form-group row add-field-{{$i}}-option" row-id="{{ $end_id[$i] }}">
                                <div class="col-sm-10" style="margin-bottom:0;">
                                    <input type="text" class="form-control input-sm" id="additional_field_option"
                                           name="additional_field_{{$i}}[options][{{ $end_id[$i] }}]" placeholder="Option"
                                           value="{{ $option }}">
                                </div>
                                <div style="margin-bottom:0;">
                                    <button type="button" class="btn remove-option btn-sm" style="margin-top:0px;"><i
                                                class="voyager-trash"></i></button>
                                </div>
                            </div>
                            @php
                                $end_id[$i] = $loop->index + 1;
                            @endphp
                        @endforeach
                    @endif
                    <div class="form-group row add-field-{{$i}}-option" row-id="{{ $end_id[$i] }}">
                        <div class="col-sm-10" style="margin-bottom:0;">
                            <input type="text" class="form-control input-sm" id="additional_field_option"
                                   name="additional_field_{{$i}}[options][{{ $end_id[$i] }}]" placeholder="Option"
                                   value="">
                        </div>
                        <div style="margin-bottom:0;">
                            <button type="button" class="btn btn-success add-option btn-sm" style="margin-top:0px;"><i
                                        class="voyager-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <span class="col-form-label required-label">Required</span>
                <div class="radio-inline">
                    <label>
                        <input class="form-check-input" type="radio" name="additional_field_{{$i}}[required]" id="prefix"
                               value="0" @if(empty($old_parameters->$additional_field->validation)) {{ 'checked' }} @endif>
                        No
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input class="form-check-input" type="radio" name="additional_field_{{$i}}[required]" id="prefix"
                               value="1" @if(!empty($old_parameters->$additional_field->validation)) {{ 'checked' }} @endif>
                        Yes
                    </label>
                </div>
            </div>

            <div>
                <input remark="text" class="form-control input-sm" id="additional_field_{{$i}}[groups]"
                       name="additional_field_{{$i}}[groups]" placeholder="Group ids e.g. [1,2,3]"
                       value="{{ isset($old_parameters->$additional_field->groups) ? '['. implode(',',$old_parameters->$additional_field->groups) . ']' : ''}}">
            </div>

            <div>
                <input remark="text" class="form-control input-sm" id="additional_field_{{$i}}[order]"
                       name="additional_field_{{$i}}[order]" placeholder="Order e.g. 0, 10, 1000"
                       value="{{ isset($old_parameters->$additional_field->order) ? $old_parameters->$additional_field->order : ''}}">
            </div>
        </div>
    </fieldset>
@endfor
