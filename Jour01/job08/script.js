// Job 08
// Créez une fonction “sommenombrespremiers” qui prend en paramètres deux variables.
// Si ces deux variables sont des prime numbers, alors la fonction retourne leur
// somme. Sinon, la fonction retourne false.

function sommenombrespremiers(nbr1, nbr2) {
    n1=true;
    n2=true;
    
        for(var i = 2; i < nbr1; i++)
          if(nbr1%i === 0) {
            n1=false;
          }
          for(var i = 2; i < nbr2; i++)
          if(nbr2%i === 0) {
            n2=false;
          }
          if(n1==true &&n2==true) {
            
            return nbr1+nbr2;
     
      }
      else {
        return false;
      }
}
      
    
    

    console.log(sommenombrespremiers(3, 5));
