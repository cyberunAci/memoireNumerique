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
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/client/regex.js":
/*!**************************************!*\
  !*** ./resources/js/client/regex.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/**
 * zone de verification regex
 * @param {*} arg arg est l'élément this que vous trouverez dans le formulaire.
 */
function regExp(arg) {
  champ = $("#" + arg.id); //recuper l'input dans le formulaire (nom, titre, description, etc / sauf mail et lien)(recuper l'ID)

  var regex = /^[\w|[\\-_ ](?![\\-_ ])|[\\u00C0\\u00C1\\u00C2\\u00C3\\u00C4\\u00C5\\u00C6\\u00C7\\u00C8\\u00C9\\u00CA\\u00CB\\u00CC\\u00CD\\u00CE\\u00CF\\u00D0\\u00D1\\u00D2\\u00D3\\u00D4\\u00D5\\u00D6\\u00D8\\u00D9\\u00DA\\u00DB\\u00DC\\u00DD\\u00DF\\u00E0\\u00E1\\u00E2\\u00E3\\u00E4\\u00E5\\u00E6\\u00E7\\u00E8\\u00E9\\u00EA\\u00EB\\u00EC\\u00ED\\u00EE\\u00EF\\u00F0\\u00F1\\u00F2\\u00F3\\u00F4\\u00F5\\u00F6\\u00F9\\u00FA\\u00FB\\u00FC\\u00FD\\u00FF\\u0153]]+$/;

  if (regex.test(champ.val())) {
    champ.css("border", "2px green solid");
    $verif = true;
  } else {
    champ.css("border", "2px red solid");
    $verif = false;
  }
}

function regExpEmail(arg) {
  // regex pour les mails
  champ = $("#" + arg.id);
  var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,5}$/;

  if (regex.test(champ.val())) {
    champ.css("border", "2px green solid");
    $verifEmail = true;
  } else {
    champ.css("border", "2px red solid");
    $verifEmail = false;
  }
}

function regExpLien(arg) {
  // regex pour les videos youtube
  champ = $("#" + arg.id);
  var regexLong = /^http(s):\/\/(www\.)?youtube\.com\/watch\?v=([\w-]+).*$/;
  var regexCourt = /^http(s):\/\/youtu\.be\/([\w-]+)$/;

  if (regexLong.test(champ.val())) {
    champ.css("border", "2px green solid");
    $verifLien = true;
  } else if (regexCourt.test(champ.val())) {
    champ.css("border", "2px green solid");
    $verifLien = true;
  } else {
    champ.css("border", "2px red solid");
    $verifLien = false;
  }
}

function regExpTitre(arg) {
  // regex pour titre 
  champ = $("#" + arg.id);
  var regex = /^[a-zA-Z0-9\s]{2,50}$/;

  if (regex.test(champ.val())) {
    champ.css("border", "2px green solid");
    $verifLien = true;
  } else {
    champ.css("border", "2px red solid");
    $verifLien = false;
  }
}

function regExpResumer(arg) {
  // regex pour resumer
  champ = $("#" + arg.id);
  var regex = /^[a-zA-Z0-9\s]{2,255}$/;

  if (regex.test(champ.val())) {
    champ.css("border", "2px green solid");
    $verifLien = true;
  } else {
    champ.css("border", "2px red solid");
    $verifLien = false;
  }
}

function regExpDescription(arg) {
  // regex pour description
  champ = $("#" + arg.id);
  var regex = /^[a-zA-Z0-9\s]{2,255}$/;

  if (regex.test(champ.val())) {
    champ.css("border", "2px green solid");
    $verifLien = true;
  } else {
    champ.css("border", "2px red solid");
    $verifLien = false;
  }
}

/***/ }),

/***/ 4:
/*!********************************************!*\
  !*** multi ./resources/js/client/regex.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/cyberun-4/Bureau/PROJET/projetLaravel/memoireNumerique/resources/js/client/regex.js */"./resources/js/client/regex.js");


/***/ })

/******/ });