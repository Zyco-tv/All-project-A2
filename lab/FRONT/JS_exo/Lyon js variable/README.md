# Exercice sur les variables en JavaScript

**Prérequis**: Comprehension des variables en JavaScript.

**Objectif**: Savoir créer et manipuler les variables.

## Etape 1

- **Cloner** le repot Github: [Lyon-js-variables](https://github.com/EdenSchoolFrance/Lyon-js-variables.git)
- **Créer** une branche sous la forme: NOM_PRENOM
- **Basculer** sur la branche nouvellement crée
- Pour **chaque étapes** de l'exercice, **committer** votre travail (**obligatoire**) et pusher le sur **GITHUB** (**optionel**)

## Etape 2

Création de plusieurs variables: [Rappel variables](https://www.w3schools.com/js/js_variables.asp)

- 3 variables de type `number` dont une avec partie décimale (`float`).
- 2 variables de type `string`
- 2 variables de type `boolean`

afficher chacune de ces variables 

> Pour l'affichage, utiliser `console.log($variable)` et l'outil de débogage de votre editeur
> Exemple pour `visual studio`: ^ fn F5

## Etape 3

Manipulation de variables de type `number`: 

### Opérateurs arithmétiques: [Rappel opérateurs arithmétiques](https://www.w3schools.com/js/js_operators.asp)

- Afficher l'addition, soustraction, multiplication, division, puissance, modulo de deux variables de type `number`.
    > Le modulo est le reste de la division entière entre deux nombres
    > Exemple: `9 modulo 4 = 1` -> combien de fois a-t-on 4 dans 9 ? 2 fois (2x4 = 8), il reste donc 1
    > Exemple 2: `11 modulo 3 = 2` -> combien de fois a-t-on 3 dans 11 ? 3 fois (3x3 = 9), il reste 2
- Incrémenter la 1ère variable de type `number`et l'afficher.
- Décrémenter la 2ème variable de type `number`et l'afficher.

### Opérateurs d'assignement: [Rappel opérateurs d'assignements](https://www.w3schools.com/js/js_assignment.asp)

- Modifier la première variable de type `number` en lui ajoutant la 2nd variables de type `number`, et afficher la variable modifié.
- Modifier la première variable de type `number` en lui retirant la 2nd variables de type `number`, et afficher la variable modifié.
    > Note: la 1ère variable a du revenir à son état d'origine (addition puis soustraction par le même nombre)
- Modifier la première variable de type `number` en lui multipliant la 2nd variables de type `number`, et afficher la variable modifié.
- Modifier la première variable de type `number` en lui divisant la 2nd variables de type `number`, et afficher la variable modifié.
    > Note: la 1ère variable a du revenir à son état d'origine (multiplication puis division par le même nombre)
- Modifier la première variable de type `number` en lui attribuant le modulo des deux variables de type `number`, et afficher la variable modifié.

- Aller plus loin avec les Objets natifs des nombres Javascript: (**facultatif**)
    - [Documentation `Number` MDN](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Number)
    - [Documentation `Math` MDN](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Math)

## Etape 4

Manipulation de variables de type `string`

- Afficher la longueur des 2 variables de type `string`
- Créer une troisième variable de type `string` qui est la concaténation des deux premières.
- Créer une variable avec le texte: "Bonjour comment allez-vous ? Je vais bien merci."
    > Note: On va utiliser cette variable pour le reste de l'exercice, et utiliser les méthodes de l'objet `string`.
    - Afficher la position du mot 'comment'. [Documentation méthode `indexOf()`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String/indexOf)
    - Afficher le 12ème caractère. [Documentation méthode `charAt()`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String/charAt)
    - Afficher `true`ou `false` si la chaine de caractère contient le mot 'allez'. [Documentation méthode `includes()`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String/includes)
    - Afficher la chaine de caractère en majuscule. [Documentation méthode `toUpperCase()`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String/toUpperCase)
    - Afficher les caractères 5 à 25 de la chaine de caractère. [Documentation méthode `substring()`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String/substring)
    - Afficher les 18 premiers caractères en partant du mot 'comment'. 
        > Indice: combinaison des méthodes `substring` et `indexOf`
    - Afficher la chaine de caractère en remplacant 'bien' par 'mal'. [Documentation méthode `replace()`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String/replace)
    - Afficher la concaténation des trois chaines de caractères, séparées par une virgule. [Documentation méthode `concat()`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/concat)