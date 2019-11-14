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
            })
            .fail(function (status) {
                $("#errorFormulaireContact").append('Les champs sont obligatoire ! code d\'erreur ' + status.status + '.');
            })
    } else {
        $("#errorFormulaireContact").append('Les champs ne sont pas valide !');
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
            })
            .fail(function (status) {
                $("#errorFormulaireJeParticipe").append('Code d\'erreur ' + status.status + '.');
            })
    } else {
        $("#errorFormulaireJeParticipe").append('Les champs ne sont pas valide !');
    }
}
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


function getVideo() {



    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "POST",
        url: "/video/add",
    })
        .done(function (datas) {
            $.each(datas, function (index, data) {  // Appel la fonction affichage à chaque ligne
                console.log(data);
                affichage(data);
            })
        })
        .fail(function (status) {
            console.log(status);
        })
}

getVideo()

function affichage(data) {
    $(".complet").append("<div class='col-md-3'><p>" + data.titre + "</p><p>" + data.resumer + "</p><p>" + data.description + "</p><p> " + "<a href=/description/"+data.id+"><img id='id" + data.id + "' src='" + data.image + "' /></p>" +  data.id + "</div>" + "</a>");
}

/* 
fctclick(id){
    
}
 */

function insertBdd(){

    event.preventDefault();

    let post_titre = $("#titre").val();
    let post_resumer = $("#resumer").val();
    let post_description = $("#description").val();
    let post_image = $("#image").val();
    let post_video = $("#video").val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        method: "POST",
        url: "/forminsert/ajout",
        data: { 
            titre: post_titre,
            resumer: post_resumer,
            description: post_description,
            image: post_image,
            video: post_video
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
