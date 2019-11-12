console.log("BOUYAKA??")

function send() {
    event.preventDefault();
    let donnees = {
        nom: $("#nom").val(),
        editeur: $("#email").val(),
        prix: $("#objet").val(),
        description: $("#message").val(),
    }
    console.log(donnees);
}