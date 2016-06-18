/*
Element_carte

INSERT INTO Element_carte
VALUES
SELECT * FROM Element_cart, "Entree"e;
*/

/* Entrées */
INSERT INTO Element_carte (libelle, description, prix, type, image)
VALUES ("Taboulé libanais","Persil, tomate, oignon, bulgur, citron, huile d'olive.",4.50, "Entree", "images/restaurant/Entree/taboule.jpg");

INSERT INTO Element_carte (libelle, description, prix, type, image)
VALUES ("Moussaka libanaise","Aubergine, tomate, ail, huile d'olive.",4.50, "Entree");

INSERT INTO Element_carte (libelle, description, prix, type, image)
VALUES ("Houmous","Purée de pois chiche, crème de sésame, citron.",4.50, "Entree");

INSERT INTO Element_carte (libelle, description, prix, type, image)
VALUES ("Caviar d'aubergine","Purée de pois chiche, crème de sésame, citron.",4.50, "Entree");

INSERT INTO Element_carte (libelle, prix, type, image)
VALUES ("Epinard",1.50, "Entree");

/* Les chaussons : 1€50 */
INSERT INTO Element_carte (libelle, prix, type, image)
VALUES ("Fromage",1.50, "Entree");

INSERT INTO Element_carte (libelle, description, prix, type, image)
VALUES ("Viande","Viande de boeuf",1.50, "Entree");

INSERT INTO Element_carte (libelle, description, prix, type, image)
VALUES ("Kébbé","Blé concassé farci à la viande",1.50, "Entree");

INSERT INTO Element_carte (libelle, description, prix, type, image)
VALUES ("Falafel","Boulette de fèves et pois chiche",1.50, "Entree");

/* Feuilles de vigne : */
INSERT INTO Element_carte (libelle, description, prix, type, image)
VALUES ("Feuille de vigne","farcie au riz",0.50, "Entree");

/* Les brick et les pains */
INSERT INTO Element_carte (libelle, description, prix, type, image)
VALUES ("Brick","(au choix: Boeuf, Poulet, Thon ou Légumes)",4.50, "Entree");

INSERT INTO Element_carte (libelle, description, prix, type, image)
VALUES ("Msemmen","(Crêpe de semoule)",2, "Entree");

INSERT INTO Element_carte (libelle, description, prix, type, image)
VALUES ("Msemmen garni","(au choix: Légumes ou Boeuf)",4.50, "Entree");

INSERT INTO Element_carte (libelle, prix, type, image)
VALUES ("Pain semoule",2, "Entree");

INSERT INTO Element_carte (libelle, description, prix, type, image)
VALUES ("Pain libanais","(un sachet = 5 galettes)",1.50, "Entree");

/* Plats du jour : 9€ (+1 couscous) */
INSERT INTO Element_carte (libelle, description, prix, type, image)
VALUES ("Plat du jour","Couscous, tajine et autres plats orientaux",9, "Entree");

SELECT * FROM Element_carte;
