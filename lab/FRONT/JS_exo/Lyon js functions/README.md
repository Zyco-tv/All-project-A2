# Exercice sur les fonctions

**Prérequis**: Variables, structures de contrôle

**Objectif**: Savoir créer et utiliser des fonctions

## Etape 1

- **Cloner** le repot Github: [Lyon-js-functions](https://github.com/EdenSchoolFrance/Lyon-js-functions.git)
- **Créer** une branche sous la forme: NOM_PRENOM
- **Basculer** sur la branche nouvellement crée
- Pour **chaque étapes** de l'exercice, **committer** votre travail (**obligatoire**) et pusher le sur **GITHUB** (**optionel**)

## Etape 2

**Rappel** sur les fonctions:

- [Documentation w3school](https://www.w3schools.com/js/js_functions.asp)
- [Documentation MDN](https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide/Fonctions)

### Syntax: 

```js
function name(param1, param2,...) {
    // code à executer
}

name(argument1, argument2,...)
```

**Exemple**: 

```js
/*
 * Fonctions qui concatène deux chaines de caractères passées en paramètres
 *
 * Retourne un message d'erreur si le type des paramètres n'est pas 'string'
 */
function concatString(string1, string2) {
    // teste le type des paramètres
    if (typeof string1 == 'string' && typeof string2 == 'string') {
        // si ok on retourne la concatènation
        return string1 + string2;
    }
    // sinon on retourne un message d'erreur
    return 'Error: Uniquement des chaines de caractères en paramètre'
}

concatString("bonjour", ", comment vas-tu?") 
=> retourne "bonjour, comment vas-tu?"

concatString("bonjour", ["ok", 4]) 
=> retourne "Error: Uniquement des chaines de caractères en paramètre"
```


## Etape 3

Exercice d'entrainement: Niveau Facile!

### Exercice 1

Ecrire une fonction `stringToNumber` qui prend une chaine de caractères représentant un nombre et la convertit en nombre.

> Indice, voir [parseInt()](https://www.w3schools.com/jsref/jsref_parseint.asp)

Exemple: 
```js
stringToNumber("1234") // retourne 1234
```

### Exercice 2

Ecrire une fonction `countingSheep` qui compte les moutons présent dans le pré.

Cette fonction prend un tableau sous la forme:

```js 
["present", "absent", "present", "present", "absent"]
```
 comme paramètre et retourne le nombre de mouton présent dans le pré.

 Exemple:

 ```js
 countingSheep(["absent", "present", "present"]) // retourne 2
 ```

### Exercice 3

Ecrire une function `isFactor` qui prend 2 paramètres `base`et `factor`et qui verifie que `base` et divisible par `factor` (retourne vrai ou faux)

> ATTENTION: verifier que les paramètres sont correctes (paramètres sont des nombres ou chaine de caractères représentant un nombre, et que `base` est plus grand que `factor`).

Exemple: 

```js
isFactor(10, 2) // retourne 'Vrai'
isFactor(9,2) // retourne 'Faux'
isFactor(4,7) // retourne 'Erreur: Le nombre "base" doit être plus grand que "factor"
isFactor(10, "ok") // retoune 'Erreur: Paramètres incorrectes, seul des nombres sont autorisés!'
isFactor(12, "4") // retourne 'Vrai'
```

### Exercice 4

Ecrire une fonction `arrayGeneration` qui prend un nombre `n` en paramètre et retourne un tableau avec `n` élément de 1 à `n`.

> ATTENTION: Faire les vérification des paramètres

Exemple:

```js
arrayGeneration(10) // retounre [1,2,3,4,5,6,7,8,9,10]
arrayGeneration("4") // retoune [1,2,3,4]
arrayGeneration('ok') // retourne "Erreur: paramètre invalide"
```
### Exercice 5

Ecrire une fonction `thirdAngle` qui prend en paramètre 2 angles d'un triangle et qui retourne le troisème angle

> ATTENTION: Faire les vérification des paramètres

Exemple:

```js
thirdAngle(90, 60) // retourne 30
thirdAngle(65, 43) // retourne 72
```

## Etape 4

Exercice d'entrainement: Niveau difficile

### Exercice 1

Ecrire une fonction `evenNumber` qui prend un nombre `n` en paramètre et retourne le `n`ème nombre pair.

> ATTENTION: Faire la vérification du paramètre

Exemple:

```js
evenNumber(1) // retourne 0
evenNumber(2) // retourne 2
evenNumber(5) // retourne 8
evenNumber(100) // retourne 198
```

### Exercice 2

Réecriture des methodes existantes:

#### String

- Méthode `repeat()`: [Documentation](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String/repeat)
- Méthode `charAt()`: [Documentation](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String/charAt)
- Méthode `concat()`: [Documentation](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String/concat)
- Méthode `includes()`: [Documentation](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String/includes)
- Méthode `slice()`: [Documentation](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String/slice)
- Méthode `substring()`: [Documentation](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String/substring)

#### Array

- Méthode `pop()`: [Documentation](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/pop)
- Méthode `push()`: [Documentation](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/push)
- Méthode `reverse()`: [Documentation](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/reverse)
- Méthode `shift()`: [Documentation](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/shift)
- Méthode `slice()`: [Documentation](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/slice)


### Exercice BONUS

Liste d'exercice bonus si les précédants sont finis: CODEWARS

- [Seats in Theater](https://www.codewars.com/kata/588417e576933b0ec9000045)

