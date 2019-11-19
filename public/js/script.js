// pour verification (en attente de trouver mieux)
$verif = "";
$verifEmail = "";
$verifLien = "";
/**
 * Envoie les informations du formulaire "contact"
 */
function sendContact() {
    event.preventDefault();
    if ($verif && $verifEmail) {
        let donnees = {
            nom: $("#nomContact").val(),
            email: $("#emailContact").val(),
            objet: $("#objetContact").val(),
            message: $("#messageContact").val(),
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "POST",
            url: "/contact/message",
            data: donnees,
            dataType: "json"
        })
            .done(function (data) {
                console.log(data);
                $("#errorFormulaire").empty();
                $("#errorFormulaire").removeClass("errorFormulaire");
                $("#errorFormulaire").append('<p>Votre Message a bien été envoyée !</p>');
                $("#errorFormulaire").addClass("bonFormulaire");
            })
            .fail(function (status) {
                $("#errorFormulaireContact").append('Les champs sont obligatoire ! code d\'erreur ' + status.status + '.');
            })
    } else {
        $("#errorFormulaire").append('<p>Les champs ne sont pas valide !</p>');
        $("#errorFormulaire").addClass("errorFormulaire");
    }
}
/**
 * Envoie les informations du formulaire "je participe"
 */
function sendJeParticipe() {
    event.preventDefault();
    if ($verifLien && $verif && $verifEmail) {
        let donnees = {
            nom: $("#nomJeParticipe").val(),
            email: $("#emailJeParticipe").val(),
            titreVideo: $("#titreVideoJeParticipe").val(),
            descriptionVideo: $("#descriptionVideoJeParticipe").val(),
            lienVideo: $("#lienVideoJeParticipe").val(),
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "POST",
            url: "/jeparticipe/message",
            data: donnees,
            dataType: "json"
        })
            .done(function (data) {
                console.log(data);
                $("#errorFormulaire").empty();
                $("#errorFormulaire").removeClass("errorFormulaire");
                $("#errorFormulaire").append('<p>Votre Message a bien été envoyée !</p>');
                $("#errorFormulaire").addClass("bonFormulaire");
            })
            .fail(function (status) {
                $("#errorFormulaireJeParticipe").append('Code d\'erreur ' + status.status + '.');
            })
    } else {
        $("#errorFormulaire").empty();
        $("#errorFormulaire").append('<p>Attention! Les champs ne sont pas valide !</p>');
        $("#errorFormulaire").addClass("errorFormulaire");
    }
}
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
/*             console.log(status);
 */        })
}
getVideo();
function affichage(data) {
    $(".complet").append("<div class='col-md-3'><p>" + data.titre + "</p><p>" + data.resumer + "</p><p>" + data.description + "</p><p> " + "<a href=/description/" + data.id + "><img id='id" + data.id + "' src='" + data.image + "' /></p>" + data.id + "</div></a>");
}
/* 
fctclick(id){
}
 */

/* AJOUTER MEDIA BDD POUR ADMINISTRATEUR */
function mediaBdd() {
    event.preventDefault();
    let post_type = $("#type").val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "POST",
        url: "/media/ajoutMedia",
        data: {
            type: post_type,
        },
        dataType: "json",
    })
        .done(function (data) {
            console.log(data);
        })
        .fail(function (status) {
            console.log(status);
        })

}


/* AJOUTER MEDIA BDD POUR ADMINISTRATEUR */
function categorieBdd() {
    event.preventDefault();
    let post_nom = $("#nom").val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "POST",
        url: "/categorie/ajoutCategorie",
        data: {
            nom: post_nom,
        },
        dataType: "json",
    })
        .done(function (data) {
            console.log(data);
        })
        .fail(function (status) {
            console.log(status);
        })

}

function getListMedia() {

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: "get", //method transfert
        url: "/media/allMedia",
        dataType: "json",
    }).done(function (datas) {
        $.each(datas, function (index, data) {  // Appel la fonction affichage à chaque ligne
            $("#id_mediatype").append("<option value=" + data.id + ">" + data.type + "</option>");
        })

    });
}

getListMedia();

function getListCategorie() {

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: "get", //method transfert
       
        url: "/categorie/allCategorie",
        dataType: "json",
    }).done(function (datas) {

        $.each(datas, function (index, data) {  // Appel la fonction affichage à chaque ligne
            $("#id_categorie").append("<option value="+data.id+">"+data.nom+"</option>");
        })
       
    });
}

getListCategorie();


/* AJOUTER MEMOIRE BDD POUR ADMINISTRATEUR */
function memoireBdd() {
    event.preventDefault();
    let post_titre = $("#titre").val();
    let post_resumer = $("#resumer").val();
    let post_description = $("#description").val();
    let post_categorie = $("#id_categorie").val();
    let post_mediatype = $("#id_mediatype").val();
    let post_auteur = $("#auteur").val();
    let post_image = $("#image").val();
    let post_video = $("#video").val();
    let post_status = $("#status").val();

    let table = {
        titre: post_titre,
        resumer: post_resumer,
        description: post_description,
        id_categorie: post_categorie,
        id_mediatype: post_mediatype,
        auteur: post_auteur,
        image: post_image,
        video: post_video,
        status: post_status
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "POST",
        url: "/memoire/ajout",
        data: table,
        dataType: "json",
    })
        .done(function (data) {
            console.log(data);
        })
        .fail(function (status) {
            console.log(status);
        })
}

// Affichage médiathéque media recent 
function recup() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: "/mediatheque/recup",
        method: "POST",
        dataType: "json"
    }).done(function (all) {
        $("#recent-1").attr('src', all[2].image);
        $("#recent-2").attr('src', all[1].image);
        $("#recent-3").attr('src', all[0].image);
    })
}
recup();

function image(all){
   
    $("#recent-1").attr('src',all[2].image);
    $("#recent-2").attr('src',all[1].image);
    $("#recent-3").attr('src',all[0].image);
    $("#link-1").attr('href', '/description/'+all[2].id);
    $("#link-2").attr('href', '/description/'+all[1].id);
    $("#link-3").attr('href', '/description/'+all[0].id);
}
// Fin affichage médiathéque media recent 

//Affichage toute video
function liste(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url:"/mediatheque/liste",
        method:"POST",
        dataType:"json"
    }).done(function(listes){
        $.each(listes, function(index, liste){
            index = index +1;

            console.log(index);
            console.log(liste);
            $(".all").append("<div class='block col-md-3'> <img src='"+liste.image+"' alt=''</div>");

        })
  /* $.each(liste[1], function(index, listes){
      $("#video-liste").appendTo("<div class='div1'> <img src='https://via.placeholder.com/250' alt=''></div>")
console.log("oui"+ listes[1])
})   */


    })
}
liste();

//Fin affichage toute video


// ZONE DES REGEX //
/**
 * zone de verification regex
 * @param {*} arg arg est l'élément this que vous trouverez dans le formulaire.
 */
function regExp(arg) {
    champ = $("#" + arg.id); //recuper l'input dans le formulaire (nom, titre, description, etc / sauf mail et lien)(recuper l'ID)
    let regex = /^[\w|[\\-_ ](?![\\-_ ])|[\\u00C0\\u00C1\\u00C2\\u00C3\\u00C4\\u00C5\\u00C6\\u00C7\\u00C8\\u00C9\\u00CA\\u00CB\\u00CC\\u00CD\\u00CE\\u00CF\\u00D0\\u00D1\\u00D2\\u00D3\\u00D4\\u00D5\\u00D6\\u00D8\\u00D9\\u00DA\\u00DB\\u00DC\\u00DD\\u00DF\\u00E0\\u00E1\\u00E2\\u00E3\\u00E4\\u00E5\\u00E6\\u00E7\\u00E8\\u00E9\\u00EA\\u00EB\\u00EC\\u00ED\\u00EE\\u00EF\\u00F0\\u00F1\\u00F2\\u00F3\\u00F4\\u00F5\\u00F6\\u00F9\\u00FA\\u00FB\\u00FC\\u00FD\\u00FF\\u0153]]+$/;
    if (regex.test(champ.val())) {
        champ.css("border", "2px green solid");
        $verif = true;
    }
    else {
        champ.css("border", "2px red solid");
        $verif = false;
    }
}
function regExpEmail(arg) { // regex pour les mails
    champ = $("#" + arg.id);
    let regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,5}$/;
    if (regex.test(champ.val())) {
        champ.css("border", "2px green solid");
        $verifEmail = true;
    }
    else {
        champ.css("border", "2px red solid");
        $verifEmail = false;
    }
}
function regExpLien(arg) { // regex pour les videos youtube
    champ = $("#" + arg.id);
    let regexLong = /^http(s):\/\/(www\.)?youtube\.com\/watch\?v=([\w-]+).*$/;
    let regexCourt = /^http(s):\/\/youtu\.be\/([\w-]+)$/;
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
function regExpTitre(arg) { // regex pour titre 
    champ = $("#" + arg.id);
    let regex = /^[a-zA-Z0-9\s]{2,50}$/;
    if (regex.test(champ.val())) {
        champ.css("border", "2px green solid");
        $verifLien = true;
    } else {
        champ.css("border", "2px red solid");
        $verifLien = false;
    }
}
function regExpResumer(arg) { // regex pour resumer
    champ = $("#" + arg.id);
    let regex = /^[a-zA-Z0-9\s]{2,255}$/;
    if (regex.test(champ.val())) {
        champ.css("border", "2px green solid");
        $verifLien = true;
    } else {
        champ.css("border", "2px red solid");
        $verifLien = false;
    }
}

function regExpDescription(arg) { // regex pour description
    champ = $("#" + arg.id);
    let regex = /^[a-zA-Z0-9\s]{2,255}$/;
    if (regex.test(champ.val())) {
        champ.css("border", "2px green solid");
        $verifLien = true;
    } else {
        champ.css("border", "2px red solid");
        $verifLien = false;
    }
}

//fonction affichage image 

function getImage() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "POST",
        url: "/image/add",
    })
        .done(function (datas) {
            $.each(datas, function (index, data) {  // Appel la fonction affichage à chaque ligne
                afficheImage(data)
            })
        })
        .fail(function (status) {
/*             console.log(status);
 */        })
}

getImage();

function afficheImage(data) {
    $(".afficheImage").append("<div class='carte'><img src=" + data.image + " alt='Avatar' style='width:100%'><div class='contain'><h4><b>" + data.titre + "</b></h4><p>" + data.resumer + "</p></div></div>");
}

//fonction affichage article

function getArticle() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "POST",
        url: "/article/add",
    })
        .done(function (datas) {
            $.each(datas, function (index, data) {  // Appel la fonction affichage à chaque ligne
                afficheArticles(data);
            })

        })
        .fail(function (status) {
/*             console.log(status);
 */        })
}
getArticle();

function afficheArticles(data) {
    $(".afficheArticles").append('<div class="col-md-3"><img src="' + data.auteur + '"></div>');
}

// Affichage Article recent 
function recupArticle() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: "/article/recup",
        method: "POST",
        dataType: "json"
    }).done(function (all) {
        console.log(all[0].id);
        console.log(all[1].id);
        console.log(all[2].id);
        $("#recentArticle-1").attr('src', all[2].auteur);

        $("#recentArticle-2").attr('src', all[1].auteur);

        $("#recentArticle-3").attr('src', all[0].auteur);
        $("#lien1").attr('href', '/description/' + all[2].id);
        $("#lien2").attr('href', '/description/' + all[1].id);
        $("#lien3").attr('href', '/description/' + all[0].id);
    })
}
recupArticle();

// barre de recherche //
$("#affichageRecherche").click(function () { // change les elements
    $("#activeRecherche").toggleClass("activeRecherche");
    $("#activeRecherche").toggleClass("desactiveRecherche");
    $("#imgLoupe").toggleClass("desactiverLoupe");
});
$("#barreRecherche").keypress(function (event) { // pour enlever la touche entre (retour à la ligne) et lancer la recherche
    if (event.which == 13) {
        event.preventDefault();
        lancerRecherche();
    }
});
$("#btnRecherche").click(function (event) { //lance la recherche quand on click sur la loupe
    event.preventDefault();
    lancerRecherche();
});
function lancerRecherche() { //lance la recherche
    event.preventDefault();
    let recherche = $("#barreRecherche").val();
    console.log("recherche :" + recherche);
    console.log("recherche en cour ...");
}