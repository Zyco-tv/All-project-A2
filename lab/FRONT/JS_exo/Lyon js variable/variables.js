//ETAPE 2
var number1 = 5;
var number2 = 10;
var number3 = 15;

let nom = "Litaudon";
let Prenom = "Tom";

var manger = true;
var dormir = false;

console.log(number1);
console.log(number2);
console.log(number3);
console.log(nom);
console.log(Prenom);
console.log(manger);
console.log(dormir);
// ETAPE 3
console.log(number1 + number2);
console.log(number1 - number2);
console.log(number1 / number2 );
console.log(number1 % number2);
console.log(number1 ** number2);
console.log(number1 ++);
console.log(number2 --);
number1 += number2;
console.log(number1);
number1 -= number2;
console.log(number1);
number1 *= number2;
console.log(number1);
number1 /= number2;
console.log(number1);
number1 %= number2;
console.log(number1);
//ETAPE 4
console.log(nom.length);
console.log(Prenom.length);
var test3 = nom + Prenom;
console.log(test3);
var bonjours = "Bonjour comment allez-vous ? Je vais bien merci.";
console.log(bonjours.indexOf("comment"));
console.log(bonjours.charAt(12));
console.log(bonjours.includes("aller"));
console.log(bonjours.toUpperCase("Bonjour comment allez-vous ? Je vais bien merci."));
console.log(bonjours.substring(5, 25));
console.log(bonjours.substring(bonjours.indexOf("comment"),bonjours.indexOf("comment")+18));
console.log(bonjours.replace("bien", "mal"));
console.log(nom.concat(","+ Prenom+ ","+ bonjours));

//END