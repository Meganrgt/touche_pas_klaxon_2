/* CREATION DE LA BASE DE DONNÉES*/
DROP DATABASE IF EXISTS touche_pas_klaxon;
CREATE DATABASE IF NOT EXISTS touche_pas_klaxon DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE touche_pas_klaxon;

/* CREATION DE L'ADMIN DE LA BASE DE DONNÉES*/

-- Création du user
CREATE USER adminklaxon@'localhost' IDENTIFIED BY 'admin@123*';

-- Création des accès
GRANT ALL PRIVILEGES ON touche_pas_klaxon.* TO 'adminklaxon'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;


/* CREATION DES TABLES*/

-- TABLE AGENCES
DROP TABLE IF EXISTS agences;
CREATE TABLE IF NOT EXISTS agences (
    id_agence INT NOT NULL UNIQUE AUTO_INCREMENT,
    nom_agence VARCHAR(50) NOT NULL UNIQUE,
    PRIMARY KEY(id_agence)
);

-- TABLE USERS
DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
    id_user INT NOT NULL UNIQUE AUTO_INCREMENT,
    nom_user VARCHAR(255) NOT NULL,
    prenom_user VARCHAR(255) NOT NULL,
    phone VARCHAR (10) NOT NULL, 
    email VARCHAR(255) NOT NULL UNIQUE,
    mdp VARCHAR(255) NOT NULL,
    PRIMARY KEY(id_user)
);

-- TABLE TRAJETS
DROP TABLE IF EXISTS trajets;
CREATE TABLE IF NOT EXISTS trajets (
    id_trajet INT NOT NULL UNIQUE AUTO_INCREMENT,
    agence_depart INT NOT NULL,
    agence_arrivee INT NOT NULL,
    id_user INT NOT NULL,
    date_start DATETIME NOT NULL,
    date_end DATETIME NOT NULL,  
    places TINYINT unsigned NOT NULL,
    places_dispo TINYINT unsigned NOT NULL,
    PRIMARY KEY(id_trajet),
    CONSTRAINT trajet_fk1 FOREIGN KEY(id_user) REFERENCES users(id_user),
    CONSTRAINT trajet_fk2 FOREIGN KEY(agence_depart) REFERENCES agences(id_agence),
    CONSTRAINT trajet_fk3 FOREIGN KEY(agence_arrivee) REFERENCES agences(id_agence)
);