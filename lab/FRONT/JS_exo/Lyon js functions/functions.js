/* 
 * Author: mthdht
 *
 * Student: Tom_Litaudon
 */

 //ETAPE 3 
 //EXO 1
 function stringToNumber() {
    var a = parseInt("1234") ;
    return a
    
  }
  console.log(stringToNumber());
  //EXO 2
  function countingSheep(tab) {
    var nb = 0;
    for (elem of tab ){
        if (elem == 'present'){
            nb ++;
        }
    }
    return nb;
  }
  console.log(countingSheep(["absent", "present", "present"]));
  //EXO 3
  