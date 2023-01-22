// Par défaut, votre index.php n’a pas de contenu.
// Lorsqu’un utilisateur effectue un code konami, la page devient stylisée, aux couleurs de
// La Plateforme_.

var konamiCode = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'b', 'a'];
var input = [];

document.addEventListener('keydown', function (e) {
    input.push(e.key);
    if (input.length > 10) {
        input.shift();
        console.log(input);

    }
    if (input.join(',') === konamiCode.join(',')) {
        document.body.style.backgroundColor = 'blue';
        document.body.style.color = 'white';
        var h1 = document.createElement("h1");
        var text = document.createTextNode("LA PLATEFORME");
        h1.appendChild(text);
        document.body.appendChild(h1);
    }
});