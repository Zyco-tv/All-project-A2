var prenom = "Tom";
var age = "17";
var nombre = "20";
var jour = "vendredi"

if(age < 18){
    console.log(prenom + ""+ " est mineure");
} 
else {
    console.log(prenom + "" +" est majeure")
    }

if(nombre %2 == 0){
    console.log("True")
}
else {
    console.log("False")
}

if(nombre %5 ==0  && nombre %3 == 0) {
    console.log("FIzzBuzz")
}
else if(nombre %3 == 0){
    console.log("FIZZ")
}
else if(nombre %5 == 0) {
    console.log("BUZZ")
}
else{
    console.log("rien du tout")
}

//ETAPE 3

switch (jour) {
    case "lundi":
   console.log("Trop la flemme")
   break
    case "mardi":
        console.log("Cool,j'ai sport")
        break
    case "mercredi":
        console.log("Pas école")
        break
    case "jeudi":
        console.log("bientot le week-end")
        break
    case "vendredi":
        console.log("Tout est permis")
        break
    case "samedi":
        console.log("C'est le week-end")
        break
    case "dimanche":
        console.log("C'est le week-end")
        break
  }

  //ETApE 4 
  for (i = 0; i < 15; i++) {
    console.log("Je ne parle pas pendant le quart d'heure lecture")
  }

var nb = "";
for (var i = 0; i < 10; i++) {
  nb = nb + i;
}
console.log(nb);

var nbre = 0;
   for(i=1; i<100; i=i+2)
   {
     nbre = i;
     console.log(nbre)
   }
//ETAPE 5 

var phrase = "Je suis tom"
var table = [1, "paul", 3, "bouteille", 9]
// // // // // // //
var table2 = ["ordinateur", "truc", 6, "sac", "hub"]
var table3 = ["clavier", "bidule", 7, "trousse", "maison"]
var table4= ["souris", "trash", 8, "crayon", "canape"]
var table5 = ["tapis", "pull", 2, "papier", "lit"]
var table6 = [table2, table3, table4, table5]
// // // // // // // 

for(let x of phrase)
   {
     console.log(x)
   }



