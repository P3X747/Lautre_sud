/*
Element_carte

INSERT INTO Element_carte
VALUES
SELECT * FROM Element_carte;
*/

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
VALUES ("Café Espresso Malongo",1.50);

SELECT * FROM Element_carte;
