// job 05
// Créez un fichier style.css. Définissez la taille minimale de votre body à 4096px.
// Ajoutez un <footer> qui prend toute la largeur de votre page en position : fixed en bas
// de votre fenêtre.
// De la même façon qu’une barre de chargement, la couleur du footer doit évoluer en
// fonction du pourcentage de scrolling.

let footer = document.querySelector("footer");
let maxHeight = document.body.scrollHeight - window.innerHeight;

document.addEventListener("scroll", function() {
    let percentage = (window.pageYOffset / maxHeight) * 100;
    footer.style.background = `linear-gradient(to right, green ${percentage}%, transparent ${percentage}%`;
});


// window.onload= ()=>{
//     window.addEventListener("scroll",()=>

// }