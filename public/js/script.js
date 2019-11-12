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



