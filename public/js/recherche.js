// barre de recherche //
$("#affichageRecherche").click(function () { // change les elements
    $("#activeRecherche").toggleClass("activeRecherche");
    $("#activeRecherche").toggleClass("desactiveRecherche");
    $("#imgLoupe").toggleClass("desactiverLoupe");
});
$("#barreRecherche").keypress(function (event) { // pour enlever la touche entre (retour à la ligne) et lancer la recherche
    if (event.which == 13) {
        lancerRecherche();
    }
});
$("#btnRecherche").click(function (event) { //lance la recherche quand on click sur la loupe
    lancerRecherche();
});
function lancerRecherche() { //lance la recherche
    let recherche = $("#barreRecherche").val();
    console.log("recherche :" + recherche);
    console.log("recherche en cour ...");
}