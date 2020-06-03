# Création du jeu MASTERMIND en react

**Prérequis**: Base JavaScript, react

**Objectif**: Mettre à profit ses connaissances du JS et REACT


## Etape 1

- creer une app react [Site react](https://create-react-app.dev/docs/getting-started)

    > Note: cette commande initialise déjà un repository GIT

- Ajouter la *remote* vers le repot **GITHUB** [Lyon-js-mastermind](https://github.com/EdenSchoolFrance/Lyon-js-mastermind)
- Créer une branche **YOUR_NAME** et basculer dessus
- Committer pour chaque changement important et pousser sa branche

## Etape 2

Création de la base HTML et CSS

> ATTENTION, **uniquement** du **CSS** et de l'**HTML**

### Une barre de navigation

- Un logo.

> Pour de l'inspiration, voir le site [Canva](https://www.canva.com/)

- un lien vers les scores
- un lien vers les règle du jeu
- Autres liens si besoin

### Plateau 

Le plateau de jeu comporte 10 lignes, chacune d'entre elles ont 2 colonnes:

- Une colonne avec 4 cases pour les couleurs d'une proposition
- Une colonne avec 4 cases pour le résultat lors d'une tentative

### Tableau d'action

Le tableau d'action regroupe toute les actions possible du jeu:

- Affiche le nom du joueur
- Une pallette de couleur (6 couleurs)
- Un bouton pour soumettre une proposition
- Un bouton pour revenir en arrière (Undo)

### Scores

Les scores s'afficherons à l'aide d'un modal lorsque la parti est terminé ou que l'utilisateur clique sur le lien "Scores".

## Etape 3

Passer le code html en composants React, pour l'instant la page restera statique, aucun comportement n'est possible.

Exemple de hierarchie de composants: 

- App
- Navbar
    - NavItem * 2
- GameSet
    - Attempt * 10
        - Combination
            - color * 4
        - Result
            - color * 4
- Action
    - Combination
        - color * 4
    - ActionButton * 2
- Modal

## Etape 4

Passer d'une version statique avec aucune intéractivité à une version dynamique en utilisant les **props** et **states**

Ce que l'on veut: 

- Afficher une couleur dans la bonne case et la bonne ligne 

    > Création d'une combinaison 

- Pouvoir effectuer un retour en arrière lors de la création d'une combinaison

    > Agir sur la combinaison

- Pouvoir soummetre une proposition

    > Comparer la solution avec la proposition

- Afficher le résultat d'une proposition
- Afficher les scores quand la parti est terminé