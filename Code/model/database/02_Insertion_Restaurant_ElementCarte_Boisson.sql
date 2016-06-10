/*
Element_carte

INSERT INTO Element_carte
VALUES
SELECT * FROM Element_carte;
*/

/* Boissons Fraîches : */
INSERT INTO Element_carte (libelle, type, prix)
VALUES ("Eau cristalline (50Cl)","entrée",1);

INSERT INTO Element_carte (libelle, type, prix)
VALUES ("Eau gazeuse : Perrier canette (33Cl)","entrée", 1.50);

INSERT INTO Element_carte (libelle, type, prix)
VALUES ("San pellegrinon (50Cl)","entrée", 2);

INSERT INTO Element_carte (libelle, type, prix)
VALUES ("Jus Gilbert","entrée",1.50);

INSERT INTO Element_carte (libelle, type, prix)
VALUES ("Sodas","entrée",1.50);

/* Boissons Chaudes : (uniquement sur pace)*/
INSERT INTO Element_carte (libelle, description, type, prix)
VALUES ("Thé à la menthe : Le verre","Légèrement sucré, notre thé est préparé à la demande et de façon traditionnelle, avec du thé vert nature en graines et de la menthe verte fraîche.","entrée",2);

INSERT INTO Element_carte (libelle, type, prix)
VALUES ("Thé vert au jasmin","entrée",2);

INSERT INTO Element_carte (libelle, type, prix)
VALUES ("Thé vert au miel","entrée",2);

INSERT INTO Element_carte (libelle, type, prix)
VALUES ("Café Espresso Malongo","entrée",1.50);

SELECT * FROM Element_carte;
