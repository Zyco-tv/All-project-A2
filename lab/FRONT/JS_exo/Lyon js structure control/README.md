# Exercice sur les structures de contrôles en JavaScript

**Prérequis**: Comprehension des if, else, for, while en JavaScript.

**Objectif**: Savoir utiliser les structures de contrôle.

## Etape 1

- **Cloner** le repot Github: [Lyon-js-structure-control](https://github.com/EdenSchoolFrance/Lyon-js-structure-control)
- **Créer** une branche sous la forme: NOM_PRENOM
- **Basculer** sur la branche nouvellement crée
- Pour **chaque étapes** de l'exercice, **committer** votre travail (**obligatoire**) et pusher le sur **GITHUB** (**optionel**)

## Etape 2: Les instructions conditionnelles

>rappel: Les instructions conditionnelles sont utilisées pour éffectuer differentes actions selon différentes conditions

>[Documentation MDN](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Instructions/if...else)
>[Documentation w3school](https://www.w3schools.com/js/js_if_else.asp)
>[Documentation OpenClassrooms](https://openclassrooms.com/fr/courses/2984401-apprenez-a-coder-avec-javascript/3043921-ajoutez-des-conditions)

- Déclarer une variable `prenom` avec son prénom et une variable `age` avec son âge.
- Afficher la phrase: "`prenom` est majeur/mineur" en éffectuant une condition.
- Créer une variable `nombre` et tester si le nombre est pair ou impair
- Avec ce même nombre, Afficher "Fizz" si le nombre est divisible par 3, "Buzz" si il est divisible par 5, "FizzBuzz" si il est divisible par 3 **et** par 5, "rien du tout" sinon.

## Etape 3: L'instruction `switch`

> [Documentation MDN](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Instructions/switch)
> [Documentation w3school](https://www.w3schools.com/js/js_switch.asp)

- Créer une variable `jour` avec le jour que son choix.
- Utiliser l'instruction `switch` pour afficher:
    - "Trop la flemme" si le jour est lundi.
    - "Cool, j'ai sport" si le jour est mardi.
    - "Pas école!" si le jour est mercredi.
    - "Bientôt le week-end" si le jour est jeudi.
    - "Tout est permis" si le jour est vendredi.
    - "C'est le week-end" dans les autres cas.

- Changer la valeur de `jour`et re-tester plusieurs fois.

## Etape 4: La boucle `for`

> [Documentation w3school](https://www.w3schools.com/js/js_loop_for.asp)
> [Documentation MDN](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Instructions/for)

- Afficher 15 fois la phrase "Je ne parle pas pendant le quart d'heure lecture".
- Afficher les nombres de 9 à 0.
- Afficher les nombres pair de 1 à 100.

## Etape 5: Parcourir un tableau ou une chaine de caractères, la boucle `for ... in``

> [Documentation MDN](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Instructions/for...of)
> [Documentation w3school](https://www.w3schools.com/jsref/jsref_forof.asp)

- Créer une phrase avec au moins 4 mot.
- Créer un tableau avec au moins 6 élements.
- Créer un tableau contenant 4 tableaux avec au moins 5 élements chacun.
- Afficher chacune des lettres de la phrase.
- Afficher chacun des élements du premier tableau.
- Afficher Tout les élements du dernier tableau.

## Etape 6: La boucle `while``

> [Documentation w3school](https://www.w3schools.com/js/js_loop_while.asp)
> [Documentation MDN](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Instructions/while)

- Afficher les nombres de 1 à 20
- Afficher les nombres de 1 à n tant que le nombre n'est pas divisible par 3 **et** par 6

## Etape 7: Bonus, Création d'un petit jeu!

Le but du jeu est de génerer un nombre aléatoire entre 1 et 100 puis de demander à l'utilisateur de le deviner, jusqu'à ce qu'il trouve.

Une fois le nombres trouver, l'utisateur aura la possiblité de recommencer à jouer ou simplement quitter le jeu.

