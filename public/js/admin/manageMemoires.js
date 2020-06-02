/**
 * AJOUTER MEMOIRE BDD POUR ADMINISTRATEUR 
*/

function add() {
    event.preventDefault();
    let post_titre = $("#titre").val();
    let post_resumer = $("#resumer").val();
    let post_description = $("#description").val();
    let post_auteur = $("#auteur").val();
    let post_image = $("#image").val();
    let post_video = $("#video").val();
    let post_categorie = $("#id_categorie").val();
    let post_type = $("#id_type").val();
    let post_status = $("#id_status").val();

    let table = {
        titre: post_titre,
        resumer: post_resumer,
        description: post_description,
        auteur: post_auteur,
        image: post_image,
        video: post_video,
        id_categorie: post_categorie,
        id_type: post_type,
        id_status: post_status
    }

    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    // /* AJOUTER UNE MEMOIRE SUR LA BDD POUR ADMINISTRATEUR */
    $.ajax({
        method: "post",
        url: "/api/admin/dashboard/add",
        data: table,
        dataType: "json",
    })
        .done(function (data) {
            $('#addMemoireModal').modal('hide');
            console.log(data);
        })
        .fail(function (status) {
        })
}

/**
 * AJOUTER UNE CATEGORIE SUR LA BDD POUR ADMINISTRATEUR 
 * */
function categoriesBdd() {
    event.preventDefault();
    let post_nom = $("#nom").val();
    let post_color = $("#couleur").val();
    let post_img = $("#image_categorie").val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "post",
        url: "/api/admin/dashboard/addCategorie",
        data: {
            nom: post_nom,
            couleur: post_color,
            image: post_img
        },
        dataType: "json",
    })
        .done(function (data) {
            $('#addCategorieModal').modal('hide');
            console.log(data);
        })
        .fail(function (status) {
            console.log('error');
        })
}

/**
 * AJOUTER UN TYPE SUR LA BDD POUR ADMINISTRATEUR 
 * */

function typesBdd() {
    event.preventDefault();
    let post_type = $("#type").val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "post",
        url: "/api/admin/dashboard/addType",
        data: {
            type: post_type,
        },
        dataType: "json",
    })
        .done(function (data) {
            $('#addTypeModal').modal('hide');
        })

        .fail(function (status) {
        })

}

/**
 * Permet de supprimer une mémoire en fonction de l'id
 * @param {*} id 
 */
function deleteMemoire(id) {
    event.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "DELETE", //method transfert
        url: "/api/admin/dashboard/" + id,
        dataType: "json",
    }).done(function (data) {
        if (data.status === 'ok') {
            undisplayMemoire(id);
        } else if (data.status === 'nok') {
            alert("La mémoire (" + id + ") n'a pas pu être supprimer.")
        }
    });
}

function undisplayMemoire(id) {
    $('#memoire_' + id).fadeOut().remove();
}

function displayDatas(datas) {
    console.log(datas)
    $.each(datas, function (index, data) {  // Appel la fonction affichage à chaque ligne
        addData(data);
    })

}

/**
 * Ajoute la mémoire dans le tableau (create HTML)
 * @param {*} data 
 */
function addData(data) {

    $("#affichagevoulu").append(
        "<tr id='memoire_" + data.id + "' class='memoire'>" +
        "<th scope='col'>" + data.titre + "</th>" +
        "<th scope='col'>" + data.resumer + "</th>" +
        "<th scope='col'>" + data.description + "</th>" +
        "<th scope='col'>" + data.auteur + "</th>" +
        "<th scope='col'>" + data.category.nom + "</th>" +
        "<th scope='col'>" + data.media.type.type + "</th>" +
        "<th scope='col'>" + data.media.image + "</th>" +
        "<th scope='col'>" + data.media.video + "</th>" +
        "<th>" + "</th>" +
        "<th><button type='submit' class='btn btn-danger' onclick='deleteMemoire(" + data.id + ")'>Supprimer</button></th>" +
        "<th scope='col'><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal' onclick='updateMemoire({{$memoire->id}})'>Editer</button></th>" +
        "</tr>"
    );

}



