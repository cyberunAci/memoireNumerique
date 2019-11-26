/* AJOUTER MEDIA BDD POUR ADMINISTRATEUR */
function mediaBdd() {
    event.preventDefault();
    let post_type = $("#type").val();
    $.ajax({
        method: "GET",
        url: "/api/memoires/type/add",
        data: {
            type: post_type,
        },
        dataType: "json",
    })
        .done(function (data) {
        })
        .fail(function (status) {
        })

}

/* AJOUTER MEDIA BDD POUR ADMINISTRATEUR */
function categorieBdd() {
    event.preventDefault();
    let post_nom = $("#nom").val();
    $.ajax({
        method: "GET",
        url: "/api/memoires/categorie/add",
        data: {
            nom: post_nom,
        },
        dataType: "json",
    })
        .done(function (data) {
        })
        .fail(function (status) {
        })

}

function getListMedia() {

    $.ajax({
        method: "GET", //method transfert
        url: "/mediatheque/type/{id}",
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
        method: "get", //method transfert
       
        url: "/mediatheque/categorie/{id}",
        dataType: "json",
    }).done(function (datas) {

        $.each(datas, function (index, data) {  // Appel la fonction affichage à chaque ligne
            $("#id_categorie").append("<option value="+ data.id +">"+ data.nom +"</option>");
        })
       
    });
}

getListCategorie();


/* AJOUTER MEMOIRE BDD POUR ADMINISTRATEUR */
function add() {
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
        method: "GET",
        url: "/memoires/add",
        data: table,
        dataType: "json",
    })
        .done(function (data) {
        })
        .fail(function (status) {
        })
}
