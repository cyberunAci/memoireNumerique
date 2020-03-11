function formulaire() {
    let nom = $("#nom").val();
    let mdp = $("#password").val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#donnee").append(nom);
    $.ajax({
        method: "get",
        url: "/admin/login",
        data: {
            name: nom,
            password: mdp
        },
        dataType: "json",

    }).done(function (data) {
        console.log(data.success.token);

    }).fail(function () {
        event.preventDefault();

        alert('Veuillez entrer des informations valides');
    })
}