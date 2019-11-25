/**
 * zone de verification regex
 * @param {*} arg arg est l'élément this que vous trouverez dans le formulaire.
 */
function regExp(arg) {
    champ = $("#" + arg.id); //recuper l'input dans le formulaire (nom, titre, description, etc / sauf mail et lien)(recuper l'ID)
    let regex = /^[\w|[\\-_ ](?![\\-_ ])|[\\u00C0\\u00C1\\u00C2\\u00C3\\u00C4\\u00C5\\u00C6\\u00C7\\u00C8\\u00C9\\u00CA\\u00CB\\u00CC\\u00CD\\u00CE\\u00CF\\u00D0\\u00D1\\u00D2\\u00D3\\u00D4\\u00D5\\u00D6\\u00D8\\u00D9\\u00DA\\u00DB\\u00DC\\u00DD\\u00DF\\u00E0\\u00E1\\u00E2\\u00E3\\u00E4\\u00E5\\u00E6\\u00E7\\u00E8\\u00E9\\u00EA\\u00EB\\u00EC\\u00ED\\u00EE\\u00EF\\u00F0\\u00F1\\u00F2\\u00F3\\u00F4\\u00F5\\u00F6\\u00F9\\u00FA\\u00FB\\u00FC\\u00FD\\u00FF\\u0153]]+$/;
    if (regex.test(champ.val())) {
        champ.css("border", "2px green solid");
        $verif = true;
    }
    else {
        champ.css("border", "2px red solid");
        $verif = false;
    }
}
function regExpEmail(arg) { // regex pour les mails
    champ = $("#" + arg.id);
    let regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,5}$/;
    if (regex.test(champ.val())) {
        champ.css("border", "2px green solid");
        $verifEmail = true;
    }
    else {
        champ.css("border", "2px red solid");
        $verifEmail = false;
    }
}
function regExpLien(arg) { // regex pour les videos youtube
    champ = $("#" + arg.id);
    let regexLong = /^http(s):\/\/(www\.)?youtube\.com\/watch\?v=([\w-]+).*$/;
    let regexCourt = /^http(s):\/\/youtu\.be\/([\w-]+)$/;
    if (regexLong.test(champ.val())) {
        champ.css("border", "2px green solid");
        $verifLien = true;
    } else if (regexCourt.test(champ.val())) {
        champ.css("border", "2px green solid");
        $verifLien = true;
    } else {
        champ.css("border", "2px red solid");
        $verifLien = false;
    }
}
function regExpTitre(arg) { // regex pour titre 
    champ = $("#" + arg.id);
    let regex = /^[a-zA-Z0-9\s]{2,50}$/;
    if (regex.test(champ.val())) {
        champ.css("border", "2px green solid");
        $verifLien = true;
    } else {
        champ.css("border", "2px red solid");
        $verifLien = false;
    }
}
function regExpResumer(arg) { // regex pour resumer
    champ = $("#" + arg.id);
    let regex = /^[a-zA-Z0-9\s]{2,255}$/;
    if (regex.test(champ.val())) {
        champ.css("border", "2px green solid");
        $verifLien = true;
    } else {
        champ.css("border", "2px red solid");
        $verifLien = false;
    }
}

function regExpDescription(arg) { // regex pour description
    champ = $("#" + arg.id);
    let regex = /^[a-zA-Z0-9\s]{2,255}$/;
    if (regex.test(champ.val())) {
        champ.css("border", "2px green solid");
        $verifLien = true;
    } else {
        champ.css("border", "2px red solid");
        $verifLien = false;
    }
}

