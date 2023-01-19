<!--Dans cet exercice, 6 images s’assemblent pour former un arc-en-ciel, il vous faudra les
mélanger puis les remettre en ordre.

Le but de ce job sera dans un premier temps de créer une balise <button>. Cette balise
servira à mélanger l’ensemble des images de l’arc-en-ciel.
Par la suite, vous devrez faire en sorte qu’il soit possible de remettre les images dans le
bon ordre, en utilisant un ou plusieurs conteneurs.
Une fois que les 6 images sont ordonnées, un message s’affiche en dessous :
Si l'arc-en-ciel est bien reconstitué, le message “Vous avez gagné” s’affiche en vert.
Sinon, le message “Vous avez perdu” s’affiche en rouge.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
       
</head>
<body>
   <header>
   </header>

   <div id="images-container" style="display:flex">
  <div id="arc1" class="image rainbow"><img src="arc1.png"></div>
  <div id="arc2" class="image rainbow" ><img src="arc2.png"></div>
  <div id="arc3" class="image rainbow" ><img src="arc3.png"></div>
  <div id="arc4" class="image rainbow" ><img src="arc4.png"></div>
  <div id="arc5" class="image rainbow" ><img src="arc5.png"></div>
  <div id="arc6" class="image rainbow"><img src="arc6.png"></div>
</div>
<div id="display-container"style="display:flex"></div>
<button id="shuffle">Mélanger</button>
<div id="message"></div>



 
  <footer></footer>
<script src="script2.js"></script>
   
</body>
</html>