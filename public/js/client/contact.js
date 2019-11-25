
/**
 * Envoie les informations du formulaire "contact"
 */
function sendContact() {
    event.preventDefault();
    if ($verif && $verifEmail) {
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
                $("#errorFormulaire").empty();
                $("#errorFormulaire").removeClass("errorFormulaire");
                $("#errorFormulaire").append('<p>Votre Message a bien été envoyée !</p>');
                $("#errorFormulaire").addClass("bonFormulaire");
            })
            .fail(function (status) {
                $("#errorFormulaireContact").append('Les champs sont obligatoire ! code d\'erreur ' + status.status + '.');
            })
    } else {
        $("#errorFormulaire").append('<p>Les champs ne sont pas valide !</p>');
        $("#errorFormulaire").addClass("errorFormulaire");
    }
}
/**
 * Envoie les informations du formulaire "je participe"
 */
function sendJeParticipe() {
    event.preventDefault();
    if ($verifLien && $verif && $verifEmail) {
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
                $("#errorFormulaire").empty();
                $("#errorFormulaire").removeClass("errorFormulaire");
                $("#errorFormulaire").append('<p>Votre Message a bien été envoyée !</p>');
                $("#errorFormulaire").addClass("bonFormulaire");
            })
            .fail(function (status) {
                $("#errorFormulaireJeParticipe").append('Code d\'erreur ' + status.status + '.');
            })
    } else {
        $("#errorFormulaire").empty();
        $("#errorFormulaire").append('<p>Attention! Les champs ne sont pas valide !</p>');
        $("#errorFormulaire").addClass("errorFormulaire");
    }
}

/**
 * Envoie les informations du formulaire "je participe"
 */
function sendJeParticipe() {
    event.preventDefault();
    if ($verifLien && $verif && $verifEmail) {
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
                $("#errorFormulaire").empty();
                $("#errorFormulaire").removeClass("errorFormulaire");
                $("#errorFormulaire").append('<p>Votre Message a bien été envoyée !</p>');
                $("#errorFormulaire").addClass("bonFormulaire");
            })
            .fail(function (status) {
                $("#errorFormulaireJeParticipe").append('Code d\'erreur ' + status.status + '.');
            })
    } else {
        $("#errorFormulaire").empty();
        $("#errorFormulaire").append('<p>Attention! Les champs ne sont pas valide !</p>');
        $("#errorFormulaire").addClass("errorFormulaire");
    }
}