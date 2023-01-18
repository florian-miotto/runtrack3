// Job 07
// Créez une fonction “jourtravaille” qui prend en paramètre une date au format Date. Si la
// date correspond à un jour férié de l’année 2020, la fonction affiche “Le $jour $mois
// $année est un jour férié”. Si elle correspond à un samedi ou un dimanche, alors le
// message affiché est “Non, $jour $mois $année est un week-end”, sinon afficher “Oui,
// $jour $mois $année est un jour travaillé”.
// $jour correspond au numéro du jour, $mois au mois et $année à l’année. Les jours fériés
// sont : 
// /Mercredi 1er janvier : Jour de l’An
// Lundi 13 avril : Pâques
// Vendredi 1er mai : Fête du Travail
// Vendredi 8 mai : Victoire des Alliés en 1945
// Jeudi 21 mai : Ascension
// Lundi 1er juin : Pentecôte
// Mardi 14 juillet : Fête nationale
// Samedi 15 août : Assomption
// Dimanche 1er novembre : Toussaint
// Mercredi 11 novembre : Armistice 1918
// Vendredi 25 décembre : Noël
function jourTravaille(date) {
    const vacances = ["1-1","4-13","5-1","5-8","5-21","6-1","7-14","8-15","11-1","11-11","12-25"];
    const jour = date.getDate();
    const mois = date.getMonth() + 1;
    const annee = date.getFullYear();

   
    if (annee !== 2020) {
      return "La date doit être en 2020.";
    }

    const laDate = `${mois}-${jour}`;
    if (vacances.includes(laDate)) {
      return `Le ${jour} ${mois} ${annee} est un jour férié.`;
    }
    if (date.getDay() === 0 || date.getDay() === 6) {
      return `Non, ${jour} ${mois} ${annee} est un week-end.`;
    }

    return `Oui, ${jour} ${mois} ${annee} est un jour travaillé.`;
  }



  const testDate = new Date(2020, 11, 26); 
console.log(jourTravaille(testDate));  



