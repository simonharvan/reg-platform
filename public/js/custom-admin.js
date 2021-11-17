/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/custom-admin.js":
/*!**************************************!*\
  !*** ./resources/js/custom-admin.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  if (!document.location.href.includes('event-forms')) {
    return;
  }

  var buttons = document.querySelectorAll('.create-form-parameters .btn');

  for (var i = 0; i < buttons.length; i++) {
    buttons[i].onclick = removeRow;
  }

  var suc_buttons = document.querySelectorAll('.create-form-parameters .btn-success');

  for (var i = 0; i < suc_buttons.length; i++) {
    suc_buttons[i].onclick = addRow;
  }

  $('.create-form-parameters [name=additional_file\\[value\\]]').click(function () {
    $('.create-form-parameters .add-file').css('display', this.value === '1' ? 'block' : 'none');
  });
  $('.create-form-parameters [name=additional_field\\[value\\]]').click(function () {
    $('.create-form-parameters .add-field').css('display', this.value === '1' ? 'block' : 'none');
  });
  $('.create-form-parameters [name=additional_field\\[type\\]]').change(function () {
    if (this.value === 'Checkboxes' || this.value === 'Radio') {
      $('.create-form-parameters .add-field-options').css('display', 'block');
    } else {
      $('.create-form-parameters .add-field-options').css('display', 'none');
    }
  });
  $('.create-form-parameters [name=additional_field_2\\[value\\]]').click(function () {
    $('.create-form-parameters .add-field-2').css('display', this.value === '1' ? 'block' : 'none');
  });
  $('.create-form-parameters [name=additional_field_2\\[type\\]]').change(function () {
    console.log(this.value);

    if (this.value === 'Checkboxes' || this.value === 'Radio') {
      $('.create-form-parameters .add-field-2-options').css('display', 'block');
    } else {
      $('.create-form-parameters .add-field-2-options').css('display', 'none');
    }
  });
  $('.create-form-parameters [name=additional_field_3\\[value\\]]').click(function () {
    $('.create-form-parameters .add-field-3').css('display', this.value === '1' ? 'block' : 'none');
  });
  $('.create-form-parameters [name=additional_field_3\\[type\\]]').change(function () {
    if (this.value === 'Checkboxes' || this.value === 'Radio') {
      $('.create-form-parameters .add-field-3-options').css('display', 'block');
    } else {
      $('.create-form-parameters .add-field-3-options').css('display', 'none');
    }
  });
  $('.create-form-parameters [name=additional_field_4\\[value\\]]').click(function () {
    $('.create-form-parameters .add-field-4').css('display', this.value === '1' ? 'block' : 'none');
  });
  $('.create-form-parameters [name=additional_field_4\\[type\\]]').change(function () {
    if (this.value === 'Checkboxes' || this.value === 'Radio') {
      $('.create-form-parameters .add-field-4-options').css('display', 'block');
    } else {
      $('.create-form-parameters .add-field-4-options').css('display', 'none');
    }
  });
  $('.create-form-parameters [name=additional_field_5\\[value\\]]').click(function () {
    $('.create-form-parameters .add-field-5').css('display', this.value === '1' ? 'block' : 'none');
  });
  $('.create-form-parameters [name=additional_field_5\\[type\\]]').change(function () {
    if (this.value === 'Checkboxes' || this.value === 'Radio') {
      $('.create-form-parameters .add-field-5-options').css('display', 'block');
    } else {
      $('.create-form-parameters .add-field-5-options').css('display', 'none');
    }
  });
  $('.create-form-parameters [name=additional_field_6\\[value\\]]').click(function () {
    $('.create-form-parameters .add-field-6').css('display', this.value === '1' ? 'block' : 'none');
  });
  $('.create-form-parameters [name=additional_field_6\\[type\\]]').change(function () {
    if (this.value === 'Checkboxes' || this.value === 'Radio') {
      $('.create-form-parameters .add-field-6-options').css('display', 'block');
    } else {
      $('.create-form-parameters .add-field-6-options').css('display', 'none');
    }
  });
  $('.create-form-parameters [name=additional_field_7\\[value\\]]').click(function () {
    $('.create-form-parameters .add-field-7').css('display', this.value === '1' ? 'block' : 'none');
  });
  $('.create-form-parameters [name=additional_field_7\\[type\\]]').change(function () {
    if (this.value === 'Checkboxes' || this.value === 'Radio') {
      $('.create-form-parameters .add-field-7-options').css('display', 'block');
    } else {
      $('.create-form-parameters .add-field-7-options').css('display', 'none');
    }
  });
  $('.create-form-parameters [name=additional_field_8\\[value\\]]').click(function () {
    $('.create-form-parameters .add-field-8').css('display', this.value === '1' ? 'block' : 'none');
  });
  $('.create-form-parameters [name=additional_field_8\\[type\\]]').change(function () {
    if (this.value === 'Checkboxes' || this.value === 'Radio') {
      $('.create-form-parameters .add-field-8-options').css('display', 'block');
    } else {
      $('.create-form-parameters .add-field-8-options').css('display', 'none');
    }
  });
  $('.create-form-parameters [name=additional_field_9\\[value\\]]').click(function () {
    $('.create-form-parameters .add-field-9').css('display', this.value === '1' ? 'block' : 'none');
  });
  $('.create-form-parameters [name=additional_field_9\\[type\\]]').change(function () {
    if (this.value === 'Checkboxes' || this.value === 'Radio') {
      $('.create-form-parameters .add-field-9-options').css('display', 'block');
    } else {
      $('.create-form-parameters .add-field-9-options').css('display', 'none');
    }
  });
  $('.create-form-parameters [name=additional_field_10\\[value\\]]').click(function () {
    $('.create-form-parameters .add-field-10').css('display', this.value === '1' ? 'block' : 'none');
  });
  $('.create-form-parameters [name=additional_field_10\\[type\\]]').change(function () {
    if (this.value === 'Checkboxes' || this.value === 'Radio') {
      $('.create-form-parameters .add-field-10-options').css('display', 'block');
    } else {
      $('.create-form-parameters .add-field-10-options').css('display', 'none');
    }
  });
});

function editNameCount(el) {
  var str = el.getAttribute('name');
  var old_id = parseInt(el.parentNode.parentNode.getAttribute('row-id'));
  new_str = str.substring(0, str.indexOf('[') + 10) + (old_id + 1) + ']';
  return new_str;
}

function addRow() {
  var new_row = this.parentNode.parentNode.cloneNode(true);
  new_row.querySelector('#additional_field_option').setAttribute('name', editNameCount(new_row.querySelector('#additional_field_option')));
  new_row.querySelector('#additional_field_option').value = '';
  new_row.setAttribute('row-id', parseInt(this.parentNode.parentNode.getAttribute('row-id')) + 1);
  this.classList.remove('btn-success');
  this.innerHTML = '<i class="voyager-trash"></i>';
  new_row.querySelector('.btn-success').onclick = this.onclick;
  this.onclick = removeRow;
  this.parentNode.parentNode.parentNode.appendChild(new_row);
}

;

function removeRow() {
  this.parentNode.parentNode.remove();
}

/***/ }),

/***/ 1:
/*!********************************************!*\
  !*** multi ./resources/js/custom-admin.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/simonharvan/Documents/Development/Web/reg/resources/js/custom-admin.js */"./resources/js/custom-admin.js");


/***/ })

/******/ });