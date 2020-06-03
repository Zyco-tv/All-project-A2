/*
 * Author: mthdht
 * 
 * Student: Tom Litaudon
 * 
 */

//EXO 1
function somme(n) {
   var nul = 0;
   for (let i = 0; i <= n; i++) {
       nul += i;
   }
   return nul;
}
console.log(somme(8));
//EXO 2
function operation(n, operator) {
    var nule = 1;
    for (let i = 2; i <= n; i++) {
        if(operator == 'addition'){
        nule += i;
        }
        if(operator == 'soutraction'){
            nule -= i;
            }
            if(operator == 'divison'){
                nule /= i;
                }
                if(operator == 'multiplication'){
                    nule *= i;
                    }
    }
    return nule;
 }
 console.log(operation(3, 'addition'));
 //EXO 3

function toUpperCase(str) {
    if(typeof str != 'string'){
            return "erreur";
    }


    var textmin = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    var textmaj = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    var result = "";

    for (let i = 0; i < str.length; i++) {
         if(textmin.includes(str[i])){
            result += textmaj[textmin.indexOf(str[i])]
        }
        else {
          result += str[i]
        }
        
    }
    
    return result;
 }
 console.log(toUpperCase(456))

 //EXO 4
 
 function diviseur(n) {
    if (typeof n !== "number" ) {
        return "Error";
    } 
    var tab = [];
    for (let i = 0; i <= n; i++) {
        if (n%i==0) {
            tab.push(i);
        }
    }
    return tab; 
}
console.log(diviseur(6));
