<!-- Prenez ce logo de La Plateforme_ et réalisez un jeu du taquin :
Le taquin est composé de 8 carreaux qui glissent dans une grille prévue pour 9.
Il consiste à remettre dans l'ordre les 8 carreaux à partir d'une configuration initiale. Le
plateau de jeu est initialisé de façon aléatoire.
Lorsqu’un carreau est cliqué, il se déplace dans la case vide adjacente (si il y en a une).
Lorsque l’image est correctement recomposée, le message “Vous avez gagné” s’affiche
en vert et bloque la partie.
Un bouton “Recommencer” apparaît et permet de relancer une partie. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<h1>Jeu de Taquin</h1>
  <div id="gameboard">
    <div id="tile1" class="tile"><img src="images/logo_01.jpg" alt="Logo 1"></div>
    <div id="tile2" class="tile"><img src="images/logo_02.jpg" alt="Logo 2"></div>
    <div id="tile3" class="tile"><img src="images/logo_03.jpg" alt="Logo 3"></div>
    <div id="tile4" class="tile"><img src="images/logo_04.jpg" alt="Logo 4"></div>
    <div id="tile5" class="tile"><img src="images/logo_05.jpg" alt="Logo 5"></div>
    <div id="tile6" class="tile"><img src="images/logo_06.jpg" alt="Logo 6"></div>
    <div id="tile7" class="tile"><img src="images/logo_07.jpg" alt="Logo 7"></div>
    <div id="tile8" class="tile"><img src="images/logo_08.jpg" alt="Logo 8"></div>
    <div id="tile9" class="tile"></div>
  </div>
  <div id="message"></div>
  <button id="reset">Recommencer</button>





<script src="script.js"></script>
</body>
</html>