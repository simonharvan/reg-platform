$(document).ready(() => {
    if (!document.location.href.includes('event-forms')) {
        return
    }

    var buttons = document.querySelectorAll('.create-form-parameters .remove-option');
    for (var i = 0; i < buttons.length; i++)
        buttons[i].onclick = removeRow;

    var suc_buttons = document.querySelectorAll('.create-form-parameters .add-option');
    for (var i = 0; i < suc_buttons.length; i++)
        suc_buttons[i].onclick = addRow;

    $('.create-form-parameters .add-note').click(function () {
        var new_row = $('#note-field')[0].cloneNode(true);
        var notes = $('.notes')[0]
        new_row.style.display = 'block';
        new_row.querySelector('#notes_text').value = '';
        new_row.querySelector('#notes_order').value = '10000';
        var nextId = parseInt(notes.getAttribute('row-id')) + 1
        var textName = getNewName(new_row.querySelector('#notes_text').getAttribute('name'), nextId)
        var orderName = getNewName(new_row.querySelector('#notes_order').getAttribute('name'), nextId)
        var sectionName = getNewName(new_row.querySelector('#notes_section').getAttribute('name'), nextId)
        new_row.querySelector('#notes_text').setAttribute('name', textName);
        new_row.querySelector('#notes_order').setAttribute('name', orderName);
        new_row.querySelector('#notes_section').setAttribute('name', sectionName);
        notes.setAttribute('row-id', nextId)
        new_row.querySelector('.remove-note').onclick = removeRow;
        notes.appendChild(new_row);
    });

    var removeNotesButtons = document.querySelectorAll('.create-form-parameters .remove-note');
    for (var i = 0; i < removeNotesButtons.length; i++)
        removeNotesButtons[i].onclick = removeRow;


    $('.create-form-parameters [name=additional_file\\[value\\]]').click(function () {
        $('.create-form-parameters .add-file').css('display', this.value === '1' ? 'block' : 'none')
    });

    for (let i = 0; i < 10; i++) {
        $('.create-form-parameters [name=additional_field_' + i + '\\[value\\]]').click(function () {
            $('.create-form-parameters .add-field-' + i).css('display', this.value === '1' ? 'block' : 'none')
        });

        $('.create-form-parameters [name=additional_field_' + i + '\\[type\\]]').change(function () {
            if (this.value === 'Checkboxes' || this.value === 'Radio') {
                $('.create-form-parameters .add-field-' + i + '-options').css('display', 'block')
            } else {
                $('.create-form-parameters .add-field-' + i + '-options').css('display', 'none')
            }
        });
    }


});

function editNameCount(el) {
    var str = el.getAttribute('name');
    var old_id = parseInt(el.parentNode.parentNode.getAttribute('row-id'));

    new_str = str.substring(0, str.indexOf('[') + 10)
        + (old_id + 1)
        + ']';
    return (new_str);
}

function getNewName(text, nextId) {
    return text.replace("##", nextId);
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


