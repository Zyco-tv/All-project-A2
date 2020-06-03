//ETAPE 2 
var nombre = [1, 2, 3, 4];
var marque = ["nike", "addidas", "supreme", "viton"];
var all = [1, "paul", 3, "jacque"];
var tableau = [nombre, marque, all];
console.log(nombre);
console.log(marque);
console.log(all);
console.log(tableau);
//ETAPE 3
console.log(nombre.length);
console.log(marque.length);
console.log(all.length);
console.log(tableau.length);
console.log(marque[marque.length -3]);
console.log(marque[marque.length -2]);
nombre[0] = "7";
console.log(nombre);
console.log(nombre.concat(marque))
//ETAPE 4
console.log(marque.toString());
console.log(nombre.includes(2));
console.log(tableau.indexOf("bonjours"));
console.log(tableau.indexOf(5));
console.log(marque.join('-'));
console.log(marque.pop());
marque.push('viton');
console.log(marque);
var firstElement = marque.shift();
console.log(firstElement);
marque.unshift("nike");
console.log(marque)
var reversed = marque.reverse(); 
console.log('reversed: ', reversed);
var tab = ["nike", 4, 7, 10, "Bonjours"];
console.log(tab.slice(2));
console.log(tab.slice(1, 4));
