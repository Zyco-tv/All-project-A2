# Exercices sur les sélecteurs

Le but de cet exercice est de **gérer** la selection des éléments HTML que l'on veut styliser. Il existe en effet de **nombreuses** manières de selectionner un élément HTML

## Rappel sur les possibilités de selection

- Nom d'une balise
- L'attribut `id` d'un élément HTML (#id {})
- L'attribut `class` d'éléments HTML (.class {})
- Le selecteur universel `*`
- Le **groupement** de sélecteur (element, element,... {})
- Les **descendants** d'un élément (element1 element2 {})
- Les descendants **direct** d'un élément(element1 > element2 {})
- Les éléments *"frère"* **direct** d'un autre élément (element1 + element2 {})
- Les éléments *"frere"* d'un autre élément (element1 ~ element2 {})
- Par l'attribut d'élements HTML :
    - [attribute]
    - [attribute=value]
    - [attribut~=value]
    - [attribute^=value]
    - [attribute$=value]
- Pseudo classes (element:pseudoClasse {})

## Exercice 

Dans cet exercice, nous allons travailler sur un exemple d'arbre généalogique. Le but sera d'appliquer des styles sur les personnes en utilisant différentes manières de sélectionner celles-ci.

On utilisera **GIT** pour le versionning, chaque élèves devra rendre son travail sur **GITHUB** (Voir [Etape 1](#etape-1)).

> IMPORTANT: IL EST INTERDIT DE MODIFIER LE FICHIER HTML.
> SEULE LES CLASSES `trolls`, `boy`et `girl` sont utilisables.

### Etape 1

- **Cloner** le repot Github: [Repository Sélecteurs CSS](https://github.com/EdenSchoolFrance/Lyon-selecteur-css)
- **Créer** une branche sous la forme: NOM_PRENOM
- **Basculer** sur la branche nouvellement crée
- Pour **chaque étapes** de l'exercice, **committer** votre travail (**obligatoire**) et pusher le sur **GITHUB** (**optionel**)

### Etape 2 

Changer la police d'écriture des enfants de **Matthieu**:
- taille: 30px
- mettre en gras

### Etape 3

Mettre une couleur de fond rouge à tout les enfants d'arthur (**UNIQUEMENT SES ENFANTS**).

Changer leur taille de police d'écriture à 20px.

### ETAPE 4

Mettre la police 'Chilanka' à toute la famille de Francis, sauf lui. 

Faire de même pour les garçon d'Arthur.

### Etape 5

Mettre une couleur de fond **jaune** à toutes les personnes qui n'ont pas d'enfants.

Changer la couleur de texte en blanc pour ces personnes.

### Etape 6

Souligner tout les prénom masculin des petits enfants de Benjamin.

### Etape 7

Appliquer un fond bleu au premier et dernier enfant de Francis.

### Etape 8

Mettre en gras tout les fils/filles uniques, et changer

### Etape 9

Mettre en italique toutes les personnes qui ont **plus** de 2 enfants.

### Etape 10 

Mettre un fond vert clair aux enfants "pair" de Sacha et vert foncé pour les enfants impair.

### Etape 11

Après un accident, les petits frères d'Andéa sont mort... Barrer ces personnes.



