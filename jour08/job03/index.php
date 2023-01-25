<!-- Reprenez votre fichier index.php. Toujours sans utiliser de fichier css, ajouter des
classes tailwind à votre footer afin de le rendre coloré et aligné.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        container: {
      center: true,
        }
        extend: {
        
        }
      }
    }
  </script>
</head>
<body>
  <header class="container mx-auto">
  <nav class="
relative
w-full
flex flex-row
items-center
justify-between
py-4
bg-gray-100
text-blue-500
shadow-lg
navbar navbar-expand-lg navbar-light
">
<ul class="navbar-nav flex flex-row pl-0 list-style-none items-center justify-between mr-auto">
<li class="nav-item px-2"><a href="index.php">Accueil</a></li>
<li class="nav-item pr-2"><a href="index.php">Inscription</a></li>
<li class="nav-item pr-2"><a href="index.php">Connexion</a></li>
<li class="nav-item pr-2"><a href="index.php">Rechercher</a></li>
      </ul>
    </nav>
  </header>

  <section>
    <form>
      <label>Civilité :</label>
      <input type="radio" name="genre" value="Monsieur"> Monsieur
      <input type="radio" name="genre" value="Madame"> Madame
      <br>
      <label>Prénom :</label>
      <input type="text" name="prenom">
      <br>
      <label>Nom :</label>
      <input type="text" name="nom">
      <br>
      <label>Adresse :</label>
      <input type="text" name="addresse">
      <br>
      <label>Email :</label>
      <input type="email" name="email">
      <br>
      <label>Mot de passe :</label>
      <input type="password" name="pass">
      <br>
      <label>Confirmation de mot de passe :</label>
      <input type="password" name="passwordConf">
      <br>
      <label>Passions :</label>
      <input type="checkbox" name="passions" value="informatique"> Informatique
      <input type="checkbox" name="passions" value="voyages"> Voyages
      <input type="checkbox" name="passions" value="sport"> Sport
      <input type="checkbox" name="passions" value="lecture"> Lecture
      <br>
      <input type="submit" value="CreeCompte">
    </form>
  </section>

  <footer  class="text-center text-white justify-center pt-9" style="background-color:#654;">
  <div class="flex flex-col justify-center items-center pt-5">
    
    <ul class="flex justify-around gap-4  mb-9">
      <li><a href="index.php">Accueil</a></li>
      <li><a href="index.php">Inscription</a></li>
      <li><a href="index.php">Connexion</a></li>
      <li><a href="index.php">Rechercher</a></li>
    </ul>
    
</div>
  </footer>

</body>
</html>