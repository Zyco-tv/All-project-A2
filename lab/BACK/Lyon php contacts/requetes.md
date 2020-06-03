# Code des requêtes SQL

## Création base de donnée
 CREATE DATABASE evaluation;
## Création de la TABLE contact

CREATE TABLE contact(
     id INT  NOT NULL AUTO AUTO_INCREMENT,
     nom VARCHAR(255) NOT NULL,
     subjet VARCHAR(50) NOT NULL, 
     message text NOT NULL, 
     date_creation TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
     PRIMARY KEY (id)
     );