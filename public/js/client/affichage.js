// Affichage médiathéque media recent 
function lastMemoires() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    url: "/api/memoires/lastMemoires",
    method: "GET",
    dataType: "json"
  }).done(function (all) {
    affichageLast(all);
  });
}

// lastMemoires();


function getDatas() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    url: "/api/mediatheque",
    method: "GET",
    dataType: "json"
  }).done(function (datas) {
      console.log(datas);
    // affichageLast(datas);
    // affichageCategories(datas);
  });
}

getDatas();

/**
 * 
 * @param {*} datas 
 */

function affichageLast(datas) {

  $("#recent-1").attr('src', datas.lastPhotos[0].media.image);
  $("#recent-2").attr('src', datas.lastPhotos[1].media.image);
  $("#recent-3").attr('src', datas.lastPhotos[2].media.image);
  
}

function affichageCategories(datas) {

    console.log(datas.categories[0].nom + " " + datas.categories[1].nom);
    $('.dernieres_catagories').append(datas.categories[0].nom + " " + datas.categories[1].nom);
}

function affichageMemoire() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: "/memoires/affichage",
        method: "POST",
        dataType: "json",

    })
        .done(function (datas) {
            let categories = datas[2];
            //parcours l array datas [$memoire, $media, $categories] et pour chaque elment fait qqch
            //il creer des tableau data
            $.each(datas, function (index, data) {  // Appel la fonction affichage à chaque ligne

                //$("#affichagevoulu").append("<tr><th scope='row'>"+data.id+"</th><td>"+data.titre+"</td><td>"+data.resumer+"</td><td>"+data.description+"</td><td>"+data.auteur+"</td><td>"+data.id_categorie+"</td><td>"+data.id_mediatype+"</td><td>"+data.image+"</td><td>"+data.video+"</td><td>"+data.status+"</td></tr>");
                // pour chaque tableau creer ici 3 il fait qqch
                //il cree des data
                $.each(data, function (index, data) {

                    // on a besoin 
                    // console.log(data.id_categorie);
                    //    console.log(categorie[0].nom);
                    console.log(categorie[data.id_categorie].nom);
                    $("#affichagevoulu").append("<tr><th scope='row'>" + data.id +
                        "</th><td>" + data.titre +
                        "</td><td>" + data.resumer +
                        "</td><td>" + data.description +
                        "</td><td>" + data.auteur +
                        "</td><td>" + categorie[data.id_categorie].nom +
                        "</td><td>" + data.id_mediatype +
                        "</td><td>" + data.image +
                        "</td><td>" + data.video +
                        "</td><td>" + data.status +
                        "</td></tr>");
                })

            })
        })
}


function determineMedia(arg) {
  var tab = [video, photo, article];
  arg -= 1;
  arg = tab[arg];
  return arg;
} // affichageMemoire();


function image(all) {

    $("#recent-1").attr('src', all[2].image);
    $("#recent-2").attr('src', all[1].image);
    $("#recent-3").attr('src', all[0].image);
    $("#link-1").attr('href', '/description/' + all[2].id);
    $("#link-2").attr('href', '/description/' + all[1].id);
    $("#link-3").attr('href', '/description/' + all[0].id);
}
// Fin affichage médiathéque media recent 



// fonction affichage memoire

function getMemoires() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "POST",
        url: "/memoires/add",
    })
        .done(function (datas) {
            $.each(datas, function (index, data) {  // Appel la fonction affichage à chaque ligne
                afficheMemoires(data);
            })

        })
        .fail(function (status) {
        })
}
// getMemoires();

function afficheMemoires(data) {
    $(".afficheArticles").append("<div class='carte col-md-3'><img src='" + data.image + "' alt='Avatar' style='width:90%'><div class='contain'><h4><b>" + data.titre + "</b></h4><p>" + data.resumer + "</p></div></div>");
}

// Affichage Article recent 
function recupMemoires() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    url: "/memoires/recup",
    method: "POST",
    dataType: "json"
  }).done(function (all) {
    $("#recentArticle-1").attr('src', all[2].image);
    $("#recentArticle-2").attr('src', all[1].image);
    $("#recentArticle-3").attr('src', all[0].image);
    $("#lien1").attr('href', '/description/' + all[2].id);
    $("#lien2").attr('href', '/description/' + all[1].id);
    $("#lien3").attr('href', '/description/' + all[0].id);
  });
} // recupMemoires();
//fonction affichage image 


function getImage() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "POST",
        url: "/photo/add",
    })
        .done(function (datas) {
            $.each(datas, function (index, data) {  // Appel la fonction affichage à chaque ligne
                afficheImage(data)
            })
        })
        .fail(function (status) {
        })
}

// getImage();




function afficheImage(data) {
    $(".afficheImage").append('<div class="carte col-md-3"><img src="' + data.image + '" alt="Avatar" style="width:90%"><div class="contain"><h4><b>"' + data.titre + '"</b></h4><p>"' + data.resumer + '"</p><input class="bouton" type="button" id="myBtn' + data.id + '" value="plus d\'info"/></div></div>');
    $("#modal").append('<div id="myModal' + data.id + '" style="display:none" class="modal"><div class="modal-content"><span class="close">&times;</span><p class="text-center">' + data.description + '</p></div></div>');

    let bouton = $("#myBtn" + data.id);
    let close = $(".close");
    let modal = $("#myModal" + data.id);

    close.click(function () {
        modal.css('display', 'none');
    })
    bouton.click(function () {
        modal.css('display', 'block');
    });

}

//Affichage toute video
function liste() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: "/mediatheque/liste",
        method: "POST",
        dataType: "json"
    }).done(function (listes) {
        $.each(listes, function (index, liste) {
            index = index + 1;

            $(".all").append("<div class='block col-md-3 '> <p class='titre-video'>" + liste.titre + "</p> <a href='/description/" + liste.id + "'><img src='" + liste.image + "' alt=''></a><p class='description-video'>" + liste.description + "</p></div>");

        })
        /* $.each(liste[1], function(index, listes){
            $("#video-liste").appendTo("<div class='div1'> <img src='https://via.placeholder.com/250' alt=''></div>")
      console.log("oui"+ listes[1])
      })   */


    })
}
// liste();

// Function affichage video 

function getVideo() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "POST",
        url: "/video/ajout",
    })
        .done(function (datas) {
            $.each(datas, function (index, data) {  // Appel la fonction affichage à chaque ligne
                affichage(data);
            })
        })
        .fail(function (status) {
        })
}
// getVideo();
function affichage(data) {
    $(".complet").append("<div class='col-md-3'><p>" + data.titre + "</p><p>" + data.resumer + "</p><p>" + data.description + "</p><p> " + "<a href=/description/" + data.id + "><img id='id" + data.id + "' src='" + data.image + "' /></p>" + data.id + "</div></a>");

}


