console.log("BOUYAKA??")

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





