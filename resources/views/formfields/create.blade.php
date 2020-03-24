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
        <small>Fields in this section will apear in Personal tab.</small>
        <hr>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Email<br><small>Field email is mandatory for registration.</small></span>

                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="email" id="email" value="1"
                                   checked>
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
                            <input class="form-check-input" type="radio" name="prefix" id="prefix" value="0" checked>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="prefix" id="prefix" value="1">
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
                                   checked>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="first_name" id="first_name" value="1">
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
                                   checked>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="last_name" id="last_name" value="1">
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
                                   checked>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="organization" id="organization"
                                   value="1">
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
                                   checked>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="position" id="position" value="1">
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
                            <input class="form-check-input" type="radio" name="address" id="address" value="0" checked>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="address" id="address" value="1">
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
                                   checked>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="address2" id="address2" value="1">
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
                            <input class="form-check-input" type="radio" name="city" id="city" value="0" checked>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="city" id="city" value="1">
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
                                   checked>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="postal_code" id="postal_code" value="1">
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
                            <input class="form-check-input" type="radio" name="country" id="country" value="0" checked>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="country" id="country" value="1">
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
                                   checked>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="nationality" id="nationality" value="1">
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
                            <input class="form-check-input" type="radio" name="assistant_email" id="assistant_email" value="0"
                                   checked>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="assistant_email" id="assistant_email" value="1">
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
                            <input class="form-check-input" type="radio" name="cc_assistant_email" id="cc_assistant_email" value="0"
                                   checked>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="cc_assistant_email" id="cc_assistant_email" value="1">
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
                                   checked>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="phone" id="phone" value="1">
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
                                   checked>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="mobile_phone" id="mobile_phone" value="1">
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
                                   checked>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="fax" id="fax" value="1">
                            Yes
                        </label>

                    </div>
                </div>
            </div>
        </fieldset>


    </section>


    <section id="personal">
        <p>Travel section</p>
        <small>Fields in this section will apear in Travel tab</small>
        <hr>

        <fieldset class="form-group">
            <div class="row">
                <span class="col-form-label col-sm-2 pt-0">Is visa required<br><small>(question, whether are required)</small></span>
                <div class="col-sm-2">
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="is_visa_required" id="is_visa_required" value="0" checked>
                            No
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input class="form-check-input" type="radio" name="is_visa_required" id="is_visa_required" value="1">
                            Yes
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

    </section>
</div>


<script>
const form = {}

function editNameCount(el) {
  var str = el.getAttribute('name');
  var old_id = parseInt(el.parentNode.parentNode.getAttribute('row-id'));
  new_str = str.substring(0, str.indexOf('[') + 1)
    + (old_id + 1)
    + str.substring(str.indexOf(']'), str.length);
  return (new_str);
}

function addRow() {
  var new_row = this.parentNode.parentNode.cloneNode(true);

  new_row.querySelector('#key').setAttribute('name', editNameCount(new_row.querySelector('#key')));
  new_row.querySelector('#key').value = '';
  new_row.querySelector('#value').setAttribute('name', editNameCount(new_row.querySelector('#value')));
  new_row.querySelector('#value').value = '';
  new_row.setAttribute('row-id', parseInt(this.parentNode.parentNode.getAttribute('row-id')) + 1)

  this.classList.remove('btn-success');
  this.innerHTML = '<i class="voyager-trash"></i>';
  new_row.querySelector('.btn-success').onclick = this.onclick;
  this.onclick = removeRow;
  this.parentNode.parentNode.parentNode.appendChild(new_row);
};

function removeRow() {
  this.parentNode.parentNode.remove();
}

var buttons = document.querySelectorAll('.custom-parameters .btn');
for (var i = 0; i < buttons.length; i++) buttons[i].onclick = removeRow;
var suc_buttons = document.querySelectorAll('.custom-parameters .btn-success');
suc_buttons[suc_buttons.length - 1].onclick = addRow;

</script>
