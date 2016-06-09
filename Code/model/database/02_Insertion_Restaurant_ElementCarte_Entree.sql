/*
Element_carte

INSERT INTO Element_carte
VALUES
SELECT * FROM Element_carte;
*/

/* Entrées */
INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Taboulé libanais","Persil, tomate, oignon, bulgur, citron, huile d'olive.",4.50);

INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Moussaka libanaise","Aubergine, tomate, ail, huile d'olive.",4.50);

INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Houmous","Purée de pois chiche, crème de sésame, citron.",4.50);

INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Caviar d'aubergine","Purée de pois chiche, crème de sésame, citron.",4.50);

INSERT INTO Element_carte (libelle, prix)
VALUES ("Epinard",1.50);

/* Les chaussons : 1€50 */
INSERT INTO Element_carte (libelle, prix)
VALUES ("Fromage",1.50);

INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Viande","Viande de boeuf",1.50);

INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Kébbé","Blé concassé farci à la viande",1.50);

INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Falafel","Boulette de fèves et pois chiche",1.50);

/* Feuilles de vigne : */
INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Feuille de vigne","farcie au riz",0.50);

/* Les brick et les pains */
INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Brick","(au choix: Boeuf, Poulet, Thon ou Légumes)",4.50);

INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Msemmen","(Crêpe de semoule)",2);

INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Msemmen garni","(au choix: Légumes ou Boeuf)",4.50);

INSERT INTO Element_carte (libelle, prix)
VALUES ("Pain semoule",2);

INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Pain libanais","(un sachet = 5 galettes)",1.50);

/* Plats du jour : 9€ (+1 couscous) */
INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Plat du jour","Couscous, tajine et autres plats orientaux",9);

SELECT * FROM Element_carte;
