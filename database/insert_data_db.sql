/* CHOIX DE LA BASE DE DONNÉES*/
USE touche_pas_klaxon;

/* INSERTION DES DONNÉES*/

-- Données de la table AGENCES
INSERT INTO touche_pas_klaxon.agences (nom_agence) VALUES 
('Paris'),
('Lyon'),
('Marseille'),
('Toulouse'),
('Nice'),
('Nantes'),
('Strasbourg'),
('Montpellier'),
('Bordeaux'),
('Lille'),
('Rennes'),
('Reims');

-- Données de la table USERS
INSERT INTO touche_pas_klaxon.users (nom_user, prenom_user, phone, email, mdp) VALUES 
('Martin','Alexandre','0612345678','alexandre.martin@email.fr','mdp123'),
('Dubois','Sophie','0698765432','sophie.dubois@email.fr','mdp123'),
('Bernard','Julien','0622446688','julien.bernard@email.fr','mdp123'),
('Moreau','Camille','0611223344','camille.moreau@email.fr','mdp123'),
('Lefèvre','Lucie','0777889900','lucie.lefevre@email.fr','mdp123'),
('Leroy','Thomas','0655443322','thomas.leroy@email.fr','mdp123'),
('Roux','Chloé','0633221199','chloe.roux@email.fr','mdp123'),
('Petit','Maxime','0766778899','maxime.petit@email.fr','mdp123'),
('Garnier','Laura','0688776655','laura.garnier@email.fr','mdp123'),
('Dupuis','Antoine','0744556677','antoine.dupuis@email.fr','mdp123'),
('Lefebvre','Emma','0699887766','emma.lefebvre@email.fr','mdp123'),
('Fontaine','Louis','0655667788','louis.fontaine@email.fr','mdp123'),
('Chevalier','Clara','0788990011','clara.chevalier@email.fr','mdp123'),
('Robin','Nicolas','0644332211','nicolas.robin@email.fr','mdp123'),
('Gauthier','Marine','0677889922','marine.gauthier@email.fr','mdp123'),
('Fournier','Pierre','0722334455','pierre.fournier@email.fr','mdp123'),
('Girard','Sarah','0688665544','sarah.girard@email.fr','mdp123'),
('Lambert','Hugo','0611223366','hugo.lambert@email.fr','mdp123'),
('Masson','Julie','0733445566','julie.masson@email.fr','mdp123'),
('Henry','Arthur','0666554433','arthur.henry@email.fr','mdp123');