//Supprimer une memoire
function supprimerMemoire() {
<<<<<<< HEAD
  $.ajax({
    url: "/memoire/supprimer",
    method: "GET",
    data: {
      id: id
    },
    dataType: "json"
  }).done(function (data) {
    console.log(data);
  });
}

/***/ }),

/***/ 6:
/*!********************************************!*\
  !*** multi ./resources/js/admin/remove.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/cyberun-4/Bureau/PROJET/projetLaravel/memoireNumerique/resources/js/admin/remove.js */"./resources/js/admin/remove.js");


/***/ })

/******/ });
=======
    $.ajax({
        url: "/memoire/supprimer",
        method: "GET",
        data: { 
            id : id
        },
        dataType: "json"
    }).done(function (data) {
       console.log(data);
    })
}
>>>>>>> b0775abb6ce777f10fec508187eebdae2953286e
