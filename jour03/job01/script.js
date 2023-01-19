// Job 01

// Créez une balise <button> et sélectionnez-la dans votre code JavaScript.
// En cliquant sur le bouton, vous devrez faire apparaître le texte sur votre page HTML :
// “Les logiciels et les cathédrales, c'est un peu la même chose - d'abord on les construit,
// ensuite on prie.”
// Ensuite créez un bouton qui servira à cacher tout l’élément html.


$("#texto").hide();

$(document).ready(function(){
  $("#hide").click(function(){
    $("#texto").hide();
  });
  $("#btn").click(function(){
    $("#texto").show();
  });
});
