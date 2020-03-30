$(document).ready(() => {
  if (!document.location.href.includes('event-forms')){
    return
  }
  var buttons = document.querySelectorAll('.create-form-parameters .btn');
  for (var i = 0; i < buttons.length; i++) buttons[i].onclick = removeRow;
  var suc_buttons = document.querySelectorAll('.create-form-parameters .btn-success');
  suc_buttons[suc_buttons.length - 1].onclick = addRow;



  $('.create-form-parameters [name=additional_file\\[value\\]]').click(function() {
    $('.create-form-parameters .add-file').css('display',this.value === '1' ? 'block' : 'none')
  });

  $('.create-form-parameters [name=additional_field\\[value\\]]').click(function() {
    $('.create-form-parameters .add-field').css('display',this.value === '1' ? 'block' : 'none')
  });

  $('.create-form-parameters [name=additional_field\\[type\\]]').change(function() {
    console.log(this.value)
    if (this.value === 'Checkboxes' || this.value === 'Radio') {
      $('.create-form-parameters .add-field-options').css('display', 'block')
    } else {
      $('.create-form-parameters .add-field-options').css('display', 'none')
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

