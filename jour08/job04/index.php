<!-- Reprenez votre fichier index.php. Toujours sans utiliser de fichier css, ajouter des
classes tailwind à votre formulaire afin que son design soit moderne. Ajoutez
également des icônes à chacun de vos inputs.
N’hésitez pas à mettre des ombres, jouer sur les bords de vos inputs, mais aussi sur les
opacités, les codes couleurs, etc.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body>
  <header class=" bg-yellow-600 w-full md:w-auto">
  <nav class="
 flex flex-row
items-center
justify-between
py-4
text-white
shadow-lg 
"
>
<ul class=" flex flex-row pl-2 list-style-none items-center justify-between  font-bold ">
<li class="nav-item px-2 "><a href="index.php">Accueil</a></li>
<li class="nav-item pr-2"><a href="index.php">Inscription</a></li>
<li class="nav-item pr-2"><a href="index.php">Connexion</a></li>
<li class="nav-item pr-2"><a href="index.php">Rechercher</a></li>
      </ul>
    </nav>
  </header>



  <section class="flex  justify-center items-center">
  <div class="  rounded-lg shadow-md bg-gray-200 p-4 my-auto">
    <form class="">
    <div class="form-group mb-28 mt-2 ">
      <label class="form-label inline-block mb-2 text-gray-700">Civilité :</label>
      <input type="radio" name="genre" value="Monsieur"> Monsieur
      <input type="radio" name="genre" value="Madame"> Madame
      <br>

 <!-- Prénom -------------------------------------------->     
 <label class="relative text-gray-400 focus-within:text-gray-600 block">

 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="pointer-events-none w-8 h-8 absolute top-1/2 transform -translate-y-1/2 left-3">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
</svg>


<input type="text" name="prenom" id="prenom" placeholder="prenom" 
class="form-input border border-gray-900 py-3 px-4 bg-white 
placeholder-gray-400 text-gray-500 appearance-none w-full block pl-14 focus:outline-none ">
</label>

<!-- nom -------------------------------------------->
<label class="relative text-gray-400 focus-within:text-gray-600 block">

<svg xmlns="http://www.w3.org/2000/svg" 
fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
stroke="currentColor" class="pointer-events-none w-8 h-8 absolute top-1/2 transform -translate-y-1/2 left-3">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
</svg>

      
      <input type="text" name="Nom"class="form-input border border-gray-900 py-3 px-4 bg-white 
placeholder-gray-400 text-gray-500 appearance-none w-full block pl-14 focus:outline-none"
        id="Nom" placeholder="Nom">
        </label>
      <br>

<!-- adresse -------------------------------------------->
<label class="relative text-gray-400 focus-within:text-gray-600 block">

      <svg xmlns="http://www.w3.org/2000/svg" 
      fill="none" viewBox="5 0 15 25" stroke-width="1.5" stroke="currentColor" 
      class="pointer-events-none w-8 h-8 absolute top-1/2 transform -translate-y-1/2 left-3">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
</svg>
      
      <input type="text" name="addresse"class="form-input border border-gray-900 py-3 px-4 bg-white 
placeholder-gray-400 text-gray-500 appearance-none w-full block pl-14 focus:outline-none"
        id="adresse"
       placeholder="adresse">
        </label>
      <br>
      
<!-- email --------------------------->
      <label class="relative text-gray-400 focus-within:text-gray-600 block">

<svg xmlns="http://www.w3.org/2000/svg" 
class="pointer-events-none w-8 h-8 absolute top-1/2 transform -translate-y-1/2 left-3" viewBox="0 0 20 20" fill="currentColor">
  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
</svg>

<input type="email" name="email" id="email" placeholder="Email" 
class="form-input border border-gray-900 py-3 px-4 bg-white 
placeholder-gray-400 text-gray-500 appearance-none w-full block pl-14 focus:outline-none">
</label>

      <br>
      <label class="form-label inline-block mb-2 text-gray-700">Mot de passe :</label>
      <input type="password" name="pass">
      <br>
      <label class="form-label inline-block mb-2 text-gray-700">Confirmation de mot de passe :</label>
      <input type="password" name="passwordConf">
      <br>
      <label class="form-label inline-block mb-2 text-gray-700">Passions :</label><br>
      <input type="checkbox" name="passions" value="informatique"> Informatique
      <input type="checkbox" name="passions" value="voyages"> Voyages
      <input type="checkbox" name="passions" value="sport"> Sport
      <input type="checkbox" name="passions" value="lecture" class="py-2"> Lecture
      <br>
      <input type="submit" value="Créer un compte" class="bg-yellow-800 text-white rounded my-3 p-2">
    </div>
    </form>
    </div>
  </section>
  
          
            
            
           
  <footer  class="text-center text-white justify-center pt-9 bg-yellow-600 fixed
             inset-x-0
             bottom-0">

  <div class="flex flex-col justify-center items-center pt-5 ">
    
    <ul class="flex justify-around gap-4    h-16">
      <li><a href="index.php">Accueil</a></li>
      <li><a href="index.php">Inscription</a></li>
      <li><a href="index.php">Connexion</a></li>
      <li><a href="index.php">Rechercher</a></li>
    </ul>
    
</div>
  </footer>

</body>
</html>