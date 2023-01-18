// Job 09
// Créez une fonction “tri” qui prend en paramètres un tableau de nombres nommé
// “numbers” et une variable “order” qui contient “asc” ou “desc”. A l’aide de la fonction
// sort() d’un algorithme développé par vos soins, cette fonction doit trier le tableau dans
// l’ordre ascendant ou décroissant, selon le paramètre passé, puis retourner le tableau.
function tri(numbers, order) {
    
  if (order === "asc") {
    return numbers.sort((a, b) => a - b);
  } else(order === "desc") 
  {
    return numbers.sort((a, b) => b - a);
  }
}
numbers=[54,12,32,11,5,12];
console.log(tri(numbers,"desc")); 
