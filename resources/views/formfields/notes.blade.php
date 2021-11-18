@php
    $notes = array_filter(get_object_vars($old_parameters), function($v, $k) {
            return $v->type === 'note';
        }, ARRAY_FILTER_USE_BOTH);
@endphp
<div class="notes" row-id="{{count($notes) + 100}}">
    <fieldset class="form-group" id="note-field" style="display: none;">
        <div class="grid-row">
            <span class="col-form-label pt-0">Note</span>
            <div>
                <div>
                    <div class="form-group">
                        <span class="col-form-label pt-0">Text</span>
                        <input type="text" class="form-control input-sm" id="notes_text"
                               name="additional_notes_##[text]" placeholder="Note text"
                               value="">
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <span class="col-form-label pt-0">Order</span>
                        <input type="text" class="form-control input-sm" id="notes_order"
                               name="additional_notes_##[order]" placeholder="Note order"
                               value="">
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <span class="col-form-label pt-0">Section</span>
                        <select class="form-control input-sm" name="additional_notes_##[section]"
                                id="notes_section">
                            <option>
                                Personal
                            </option>
                            <option>
                                Travel
                            </option>
                            <option>
                                Accomodation
                            </option>
                            <option>
                                Additional
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <div>
                <button type="button" class="btn btn-sm remove-note" style="margin-top:0px;"><i
                            class="voyager-trash"></i></button>
            </div>
        </div>
    </fieldset>
    @foreach($notes as $note)
        <fieldset class="form-group">
            <div class="grid-row">
                <span class="col-form-label pt-0">Note {{$loop->index}}</span>
                <div>
                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Text</span>
                            <input type="text" class="form-control input-sm" id="notes_text"
                                   name="additional_notes_{{$loop->index}}[text]" placeholder="Note text"
                                   value="{{ isset($note) ? $note->text : ''}}">
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Order</span>
                            <input type="text" class="form-control input-sm" id="notes_order"
                                   name="additional_notes_{{$loop->index}}[order]" placeholder="Note order"
                                   value="{{ isset($note) ? $note->order : ''}}">
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <span class="col-form-label pt-0">Section</span>
                            <select class="form-control input-sm" name="additional_notes_{{$loop->index}}[section]"
                                    id="notes_{{$loop->index}}_section">
                                <option @if(isset($note) && $note->section === 'Personal') {{ 'selected' }} @endif>
                                    Personal
                                </option>
                                <option @if(isset($note) && $note->section === 'Travel') {{ 'selected' }} @endif>
                                    Travel
                                </option>
                                <option @if(isset($note) && $note->section === 'Accomodation') {{ 'selected' }} @endif>
                                    Accomodation
                                </option>
                                <option @if(isset($note) && $note->section === 'Additional') {{ 'selected' }} @endif>
                                    Additional
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <button type="button" class="btn btn-sm remove-note" style="margin-top:0px;"><i
                                class="voyager-trash"></i></button>
                </div>
            </div>
        </fieldset>
    @endforeach
</div>
<div style="margin-bottom:0;">
    <button type="button" class="btn btn-success add-note btn-sm" style="margin-top:0px;"><i
                class="voyager-plus"></i></button>
</div>
