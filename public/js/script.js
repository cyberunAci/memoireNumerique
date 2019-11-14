/**
 * Envoie les informations du formulaire "contact"
 */
function sendContact() {
    event.preventDefault();

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

}

/**
 * Envoie les informations du formulaire "je participe"
 */

function sendJeParticipe() {
    event.preventDefault();

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
            $("#errorFormulaireJeParticipe").append('Les champs sont obligatoire ! code d\'erreur ' + status.status + '.');
        })

}

/**
 * zone de verification regex
 * @param {*} arg arg est l'élément this que vous trouverez dans le formulaire.
 */

function regExp(arg) {    
    champ = $("#" + arg.id ); //recuper l'input dans le formulaire
    let regex = /^[\w|[\\-_ ](?![\\-_ ])|[\\u00C0\\u00C1\\u00C2\\u00C3\\u00C4\\u00C5\\u00C6\\u00C7\\u00C8\\u00C9\\u00CA\\u00CB\\u00CC\\u00CD\\u00CE\\u00CF\\u00D0\\u00D1\\u00D2\\u00D3\\u00D4\\u00D5\\u00D6\\u00D8\\u00D9\\u00DA\\u00DB\\u00DC\\u00DD\\u00DF\\u00E0\\u00E1\\u00E2\\u00E3\\u00E4\\u00E5\\u00E6\\u00E7\\u00E8\\u00E9\\u00EA\\u00EB\\u00EC\\u00ED\\u00EE\\u00EF\\u00F0\\u00F1\\u00F2\\u00F3\\u00F4\\u00F5\\u00F6\\u00F9\\u00FA\\u00FB\\u00FC\\u00FD\\u00FF\\u0153]]+$/;
    
    if (regex.test(champ.val())) {
        champ.css("border", "2px green solid");
    }
    else {
        champ.css("border", "2px red solid");
    }
}
function regExpEmail(arg) {
    champ = $("#" + arg.id);
    let regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,5}$/;

    if (regex.test(champ.val())) {
        champ.css("border", "2px green solid");
    }
    else {
        champ.css("border", "2px red solid");
    }
}



function sendVideo() {
    event.preventDefault();

  

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        method: "POST",
        url: "/video/add",
      
    })
        .done(function (data) {
            console.log(data);
            console.log(data[0]);
            console.log(data[0].titre);
            affichage(data);
        })
        .fail(function (status) {
            console.log(status);
        })

}

function affichage(data) {

    $(".complet").append("<p>" + data[0].titre  + "<br>" + data[0].resumer  + "<br>" + data[0].description + "<br> <img src='" + data[0].image + "' /></p>"  + "<iframe width='560' height='315' src='" + data[0].video + "' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>");
}

function recup(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method:"POST",
        url: "/mediatheque/recup",
    }).done(function(){
        console.log("ok");
        affichage(data);
    })
}

recup();