function send() {
    event.preventDefault();

    let donnees = {
        nom: $("#nom").val(),
        email: $("#email").val(),
        objet: $("#objet").val(),
        message: $("#message").val(),
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
            $("#errorFormulaire").append('Les champs sont obligatoire ! code d\'erreur ' + status.status + '.');
        })

}
function regExp(arg) {    
    champ = $("#" + arg.id );
    let regex = /^[a-zA-Z0-9._-]+$/;
    
    if (regex.test(champ.val())) {
        champ.css("border", "2px green solid");
    }
    else {
        champ.css("border", "2px red solid");
    }
}
function regExpEmail() {
    champ = $("#email");
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



