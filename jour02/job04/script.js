// Job 04
// Créez un <textarea> dont l’id est “keylogger”.
// Chaque fois que l’utilisateur tape une lettre sur son clavier (a-z), celle-ci est ajoutée
// dans le textarea (même si le focus en cours n’est pas le textarea).
// Si le focus en cours est dans le textarea, la lettre doit être ajoutée deux fois.

document.addEventListener("keypress", function(event) {

    var keylogger = document.getElementById("keylogger");
    if (document.activeElement === keylogger) {
        keylogger.value += event.key + event.key;//the event.key permet d'avoir  la  value de la touche utilisée (ici*2). 
    } else {
        keylogger.value += event.key;
    }
});