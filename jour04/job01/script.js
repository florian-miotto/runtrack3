
// Job 01

// Créez un <button> ayant comme id “button”. Créez un fichier expression.txt contenant
// votre expression favorite.
// Lorsqu’un utilisateur clique sur le bouton, à l’aide de Fetch, récupérez le contenu du
// fichier expression.txt, placez le dans un paragraphe <p> et insérez le dans le corps de
// votre page.

const button = document.getElementById("button");
button.addEventListener("click", () => {
    fetch("expression.txt")
        .then((response) => response.text())
        .then((text) => {
            const p = document.createElement("p");
            p.textContent = text;
            document.body.appendChild(p);
        })

})
// getText("fetch_info.txt");

// async function getText(file) {
//   let x = await fetch(file);
//   let y = await x.text();
//   document.getElementById("demo").innerHTML = y;
// }