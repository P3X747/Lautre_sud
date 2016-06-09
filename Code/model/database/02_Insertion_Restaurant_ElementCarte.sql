/*
Element_carte

INSERT INTO Element_carte
VALUES
SELECT * FROM Element_carte;
*/

INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Couscous","Végétarien",8);

INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Couscous","Agneau, veau, poulet, merguez",10);

INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Couscous","Royal (Trois viandes au choix)",11);

INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Tajine","Poulet, carottes et olives vertes",11);

INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Tajine","Agneau et prunneaux",9);

INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Lasagne libanaise (Kafta bel sayniyé):","Viande hachée de boeuf, aubergines, pomme de terre et tomate disposés en couches horizontales, cuits au four et accompagnés de riz à la vermicelle ou de la semoule.",9);

INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Aubergines farcies (Cheikh el mehché):","Aubergines grillées au four et farcies de viandes finement hachées de boeuf et sauce tomate le tout accompagné de riz à la vermicelle.",9);

SELECT * FROM Element_carte;

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

/* Boissons, éléments rajoutés à vérifier */
/* Boissons Fraîches : */
INSERT INTO Element_carte (libelle, prix)
VALUES ("Eau cristalline (50Cl)",1);

INSERT INTO Element_carte (libelle, prix)
VALUES ("Eau gazeuse : Perrier canette (33Cl)",1.50);

INSERT INTO Element_carte (libelle, prix)
VALUES ("San pellegrinon (50Cl)",2);

INSERT INTO Element_carte (libelle, prix)
VALUES ("Jus Gilbert",1.50);

INSERT INTO Element_carte (libelle, prix)
VALUES ("Sodas",1.50);

/* Boissons Chaudes : (uniquement sur pace)*/
INSERT INTO Element_carte (libelle, description, prix)
VALUES ("Thé à la menthe : Le verre","Légèrement sucré, notre thé est préparé à la demande et de façon traditionnelle, avec du thé vert nature en graines et de la menthe verte fraîche.",2);

INSERT INTO Element_carte (libelle, prix)
VALUES ("Thé vert au jasmin",2);

INSERT INTO Element_carte (libelle, prix)
VALUES ("Thé vert au miel",2);

INSERT INTO Element_carte (libelle, prix)
VALUES ("Café Espresso Malongo",1;50);
