# Exercice sur les tableaux en JavaScript

**Prérequis**: Comprehension des tableaux en JavaScript.

**Objectif**: Savoir créer et manipuler les tableaux.

## Etape 1

- **Cloner** le repot Github: [Lyon-js-tableaux](https://github.com/EdenSchoolFrance/Lyon-js-tableaux)
- **Créer** une branche sous la forme: NOM_PRENOM
- **Basculer** sur la branche nouvellement crée
- Pour **chaque étapes** de l'exercice, **committer** votre travail (**obligatoire**) et pusher le sur **GITHUB** (**optionel**)

## Etape 2

Création de plusieurs tableaux: [Rappel tableaux MDN](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array), [Rappel tableaux w3school](https://www.w3schools.com/js/js_arrays.asp)

- 1 tableau avec des nombres. (au moins 4 élements)
- 1 tableau avec des chaines de caractères. (au moins 4 élements)
- 1 tableau avec des nombres et des chaines de caractères. (au moins 4 élements)
- 1 tableau qui contient les trois premiers tableaux.

Afficher chacune de ces variables 

> Pour l'affichage, utiliser `console.log(variable)` ou `console.table(variable`) et l'outil de débogage de votre editeur
> Exemple pour `visual studio`: ^ fn F5

## Etape 3

Manipulation simple des tableaux:

- Afficher la longueur des 4 tableaux. [Documentation propriété `length`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/length)
- Afficher le deuxième et l'avant dernier element d'un tableau.
    > Utiliser les accesseurs de tableaux avec un index. Ex: tab[n] affiche l'element `n` de `tab`.

    > Indice: pour afficher l'avant dernier élement, utilisé la propriété `length`
- Changer les valeurs des 2ème élements du premier tableau et l'afficher.
- Fusionner deux tableau.[Documentation méthode `concat`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/concat)

## Etape 4

Manipulation avancée des tableaux:

> pour la suite de l'exercice, utiliser le tableau suivant: let tab = [1, 4, 7, 10, "bonjour"]

- Afficher les tableaux sous forme de chaine de caractères. [Documentation méthode `toString()`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/toString)
- Afficher `true` ou `false` si le premier tableau contient le nombre 4, et le nombre 8. [Documentation méthode `includes()`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/includes)
- Afficher l'index de l'élement "bonjour", et l'élement 5. [Documentation méthode `indexOf()`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/indexOf)
- Afficher une chaine de caractère concaténant tout les élements du tableau, séparé par un '-'. [Documentation méthode `join()`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/join)
- Retirer le dernier élement du tableau, afficher le tableau et l'élement retiré. [Documentation méthode `pop()`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/pop)
- Ajouter l'élement précédement retiré au tableau, afficher le tableau. [Documentation méthode `push()`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/push)
    > Note: le tableau doit avoir retrouvé son état initial
- Retirer le premier élement du tableau, afficher le tableau et l'élement retiré. [Documentation méthode `shift()`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/shift)
- Ajouter l'élement précédement retiré au début du tableau. [Documentation méthode `unshift()`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/unshift)
    > Note: le tableau doit avoir retrouvé son état initial
- Afficher le tableau inversé. [Documentation méthode `reverse`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/reverse)
- Afficher une partie du tableau à partir de l'indice 2. [Documentation méthode `slice()`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/slice)
    > Résultat attendu: [7, 10, "bonjour"]
- Afficher une partie du tableau, de l'indice 1 à 3 (inclus)
    > Résultat attendu: [4, 7, 10]
- Retirer 2 élements  à partir de l'indice 1, afficher le tableau

## Etape 5

Aller plus loin avec les méthodes `array`: 

- Méthode `every` [Documentation MDN](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/every)
- Méthode `filter` [Documentation MDN](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/filter)
- Méthode `find` [Documentation MDN](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/find)
- Méthode `forEach` [Documentation MDN](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/forEach)
- Méthode `map` [Documentation MDN](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/map)
- Méthode `reduce` [Documentation MDN](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/reduce)
- Méthode `sort` [Documentation MDN](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/sort)


*[MDN]: Mozilla Devloper Network