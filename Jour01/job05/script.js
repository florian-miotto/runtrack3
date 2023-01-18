// job 05
// Créez une fonction “afficherjourssemaines”. Cette fonction ne prend pas de paramètre.
// Créez un tableau de strings “jourssemaines” qui contient l’ensemble des jours de la
// semaine, du Lundi au Dimanche. Ensuite à l’aide d’une boucle for (for!)Affichez un par
// un ces jours.

function afficherjourssemaines() {
    var jourssemaines = ["Lundi", "Dimanche", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
    for (var i = 0; i < jourssemaines.length; i++) {
        console.log(jourssemaines[i]);
    }
   
}

 afficherjourssemaines();