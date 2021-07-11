$(document).ready(() => {
    if (!document.location.href.includes('event-forms')) {
        return
    }
    var buttons = document.querySelectorAll('.create-form-parameters .btn');
    for (var i = 0; i < buttons.length; i++)
        buttons[i].onclick = removeRow;

    var suc_buttons = document.querySelectorAll('.create-form-parameters .btn-success');
    for (var i = 0; i < suc_buttons.length; i++)
        suc_buttons[i].onclick = addRow;


    $('.create-form-parameters [name=additional_file\\[value\\]]').click(function () {
        $('.create-form-parameters .add-file').css('display', this.value === '1' ? 'block' : 'none')
    });

    $('.create-form-parameters [name=additional_field\\[value\\]]').click(function () {
        $('.create-form-parameters .add-field').css('display', this.value === '1' ? 'block' : 'none')
    });

    $('.create-form-parameters [name=additional_field\\[type\\]]').change(function () {
        if (this.value === 'Checkboxes' || this.value === 'Radio') {
            $('.create-form-parameters .add-field-options').css('display', 'block')
        } else {
            $('.create-form-parameters .add-field-options').css('display', 'none')
        }
    });

    $('.create-form-parameters [name=additional_field_2\\[value\\]]').click(function () {
        $('.create-form-parameters .add-field-2').css('display', this.value === '1' ? 'block' : 'none')
    });

    $('.create-form-parameters [name=additional_field_2\\[type\\]]').change(function () {
        console.log(this.value)
        if (this.value === 'Checkboxes' || this.value === 'Radio') {
            $('.create-form-parameters .add-field-2-options').css('display', 'block')
        } else {
            $('.create-form-parameters .add-field-2-options').css('display', 'none')
        }
    });

    $('.create-form-parameters [name=additional_field_3\\[value\\]]').click(function () {
        $('.create-form-parameters .add-field-3').css('display', this.value === '1' ? 'block' : 'none')
    });

    $('.create-form-parameters [name=additional_field_3\\[type\\]]').change(function () {
        if (this.value === 'Checkboxes' || this.value === 'Radio') {
            $('.create-form-parameters .add-field-3-options').css('display', 'block')
        } else {
            $('.create-form-parameters .add-field-3-options').css('display', 'none')
        }
    });

    $('.create-form-parameters [name=additional_field_4\\[value\\]]').click(function () {
        $('.create-form-parameters .add-field-4').css('display', this.value === '1' ? 'block' : 'none')
    });

    $('.create-form-parameters [name=additional_field_4\\[type\\]]').change(function () {
        if (this.value === 'Checkboxes' || this.value === 'Radio') {
            $('.create-form-parameters .add-field-4-options').css('display', 'block')
        } else {
            $('.create-form-parameters .add-field-4-options').css('display', 'none')
        }
    });

});

function editNameCount(el) {
    var str = el.getAttribute('name');
    var old_id = parseInt(el.parentNode.parentNode.getAttribute('row-id'));

    new_str = str.substring(0, str.indexOf('[') + 10)
        + (old_id + 1)
        + ']';
    return (new_str);
}

function addRow() {
    var new_row = this.parentNode.parentNode.cloneNode(true);

    new_row.querySelector('#additional_field_option').setAttribute('name', editNameCount(new_row.querySelector('#additional_field_option')));
    new_row.querySelector('#additional_field_option').value = '';
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

