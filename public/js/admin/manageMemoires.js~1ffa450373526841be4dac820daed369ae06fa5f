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
/******/ 	return __webpack_require__(__webpack_require__.s = 5);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/admin/manageMemoires.js":
/*!**********************************************!*\
  !*** ./resources/js/admin/manageMemoires.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// /* AJOUTER CATEGORIE BDD POUR ADMINISTRATEUR */
function categorieBdd() {
  event.preventDefault();
  var post_nom = $("#nom").val();
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    method: "post",
    url: "/api/memoires/categorie/add",
    data: {
      nom: post_nom
    },
    dataType: "json"
  }).done(function (data) {}).fail(function (status) {});
} // /* AJOUTER TYPE BDD POUR ADMINISTRATEUR */


function typeBdd() {
  event.preventDefault();
  var post_type = $("#type").val();
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    method: "POST",
    url: "/api/memoires/type/add",
    data: {
      type: post_type
    },
    dataType: "json"
  }).done(function (data) {}).fail(function (status) {});
} // function getListMedia() {
//     $.ajax({
//         method: "GET", //method transfert
//         url: "/mediatheque/type/{id}",
//         dataType: "json",
//     }).done(function (datas) {
//         $.each(datas, function (index, data) {  // Appel la fonction affichage à chaque ligne
//             $("#id_mediatype").append("<option value=" + data.id + ">" + data.type + "</option>");
//         })
//     });
// }
// getListMedia();
// function getListCategorie() {
//     $.ajax({
//         method: "get", //method transfert
//         url: "/mediatheque/categorie/{id}",
//         dataType: "json",
//     }).done(function (datas) {
//         $.each(datas, function (index, data) {  // Appel la fonction affichage à chaque ligne
//             $("#id_categorie").append("<option value="+ data.id +">"+ data.nom +"</option>");
//         })
//     });
// }
// getListCategorie();
// /* AJOUTER MEMOIRE BDD POUR ADMINISTRATEUR */
// function add() {
//     event.preventDefault();
//     let post_titre = $("#titre").val();
//     let post_resumer = $("#resumer").val();
//     let post_description = $("#description").val();
//     let post_categorie = $("#id_categorie").val();
//     let post_mediatype = $("#id_mediatype").val();
//     let post_auteur = $("#auteur").val();
//     let post_image = $("#image").val();
//     let post_video = $("#video").val();
//     let post_status = $("#status").val();
//     let table = {
//         titre: post_titre,
//         resumer: post_resumer,
//         description: post_description,
//         id_categorie: post_categorie,
//         id_mediatype: post_mediatype,
//         auteur: post_auteur,
//         image: post_image,
//         video: post_video,
//         status: post_status
//     }
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     $.ajax({
//         method: "GET",
//         url: "/memoires/add",
//         data: table,
//         dataType: "json",
//     })
//         .done(function (data) {
//         })
//         .fail(function (status) {
//         })
// }

/***/ }),

/***/ 5:
/*!****************************************************!*\
  !*** multi ./resources/js/admin/manageMemoires.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/cyberun-8/Bureau/projetLaravel/memoireNumerique/resources/js/admin/manageMemoires.js */"./resources/js/admin/manageMemoires.js");


/***/ })

/******/ });