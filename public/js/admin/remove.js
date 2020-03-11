//Supprimer une memoire
function supprimerMemoire() {
    $.ajax({
        url: "/memoire/supprimer",
        method: "GET",
        data: { 
            id : id
        },
        dataType: "json"
    }).done(function (data) {
       console.log(data);
    })
}
