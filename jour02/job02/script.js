// Job 02
// Créez une balise <button> ayant comme id “button”.
// Lorsque l’on clique dessus, un <article> contenant le texte suivant est ajouté au contenu
// de la page : “L'important n'est pas la chute, mais l'atterrissage.”
// Si on clique à nouveau sur ce bouton, l’article disparaît.
// L’apparition / Disparition doivent être gérées dans une fonction nommée “showhide()”.


function showhide() {
    let article = document.getElementById('article');
    if (article.style.display === 'none') {
        article.style.display = 'block';
    } else {
        article.style.display = 'none';
    }
}  

    document.getElementById("button").addEventListener("click", showhide);
    
    let article = document.createElement("article");
    let text = document.createTextNode("L'important n'est pas la chute, mais l'atterrissage.");
    article.appendChild(text);
    article.style.display = "none";
    article.setAttribute("id","article");
    document.body.appendChild(article);



