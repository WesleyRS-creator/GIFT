-- Insertion de données dans la table CADEAU_STATE_EVENT
INSERT INTO CADEAU_STATE (NOM_STATE) VALUES
('En attente'),
('Approuvé'),
('Rejeté');

-- Insertion de données dans la table CADEAU_USER
INSERT INTO CADEAU_USER (NAME, PASSWORD, ADMIN) VALUES
('Admin', 'admin', TRUE),
('Client', 'client', FALSE),
('Charlie', 'mypassword', FALSE),
('Diana', 'adminpass', TRUE),
('Eve', 'testpass', FALSE);

-- Insertion de données dans la table CADEAU_CATEGORIE
INSERT INTO CADEAU_CATEGORIE (NOM_CATEGORIE) VALUES
('garçon'),
('fille'),
('neutre');

-- Insertion de données dans la table CADEAU_CADEAU
INSERT INTO CADEAU_CADEAU (NOM_CADEAU, PRIX_CADEAU, SOLD) VALUES
('Voiture téléguidée', 25, FALSE),
('Tablette électronique', 200, FALSE),
('Roman fantasy', 15, FALSE),
('Montre élégante', 75, FALSE),
('Cafetière moderne', 50, FALSE);

-- Insertion de données dans la table CADEAU_CATEGORIE_CADEAU
INSERT INTO CADEAU_CATEGORIE_CADEAU (ID_CATEGORIE, ID_CADEAU) VALUES
(1, 1), -- Voiture téléguidée dans Jouets
(3, 2),  -- Tablette électronique dans Électronique (vendu)
(2, 3), -- Roman fantasy dans Livres
(1, 4), -- Montre élégante dans Mode
(2, 4),
(3, 5);  -- Cafetière moderne dans Maison (vendu)
