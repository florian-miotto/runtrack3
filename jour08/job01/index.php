<!-- Créez un fichier index.php contenant les balises html de base (doctype, html, head,
body). Dans votre body, créez un header avec une navigation et un footer contenant une
liste de quatre liens (Accueil, Inscription, Connexion et Rechercher). Ils doivent tous
pointer vers votre page index.php.

Ajoutez une section avec un formulaire de création de compte contenant :
● Des inputs radios pour la civilité
● Des inputs de type text pour prénom, nom et adresse
● Des inputs de type email pour l’adresse email
● Des inputs de type password pour le password et sa validation
● Des checkbox pour choisir ses passions (informatique, voyages, sport, lecture)
● Un bouton pour valider le formulaire -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="index.php">Inscription</a></li>
        <li><a href="index.php">Connexion</a></li>
        <li><a href="index.php">Rechercher</a></li>
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

  <footer>
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <li><a href="index.php">Inscription</a></li>
      <li><a href="index.php">Connexion</a></li>
      <li><a href="index.php">Rechercher</a></li>
    </ul>
  </footer>

</body>
</html>