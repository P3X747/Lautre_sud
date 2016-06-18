/* Boissons Fraîches : */
INSERT INTO Element_carte (libelle, type, prix, image)
VALUES ("Eau cristalline (50Cl)","entrée",1, " Eau cristalline (50Cl)");

INSERT INTO Element_carte (libelle, type, prix, image)
VALUES ("Perrier canette (33Cl)","entrée", 1.50, "Perrier canette (33Cl)");

INSERT INTO Element_carte (libelle, type, prix, image)
VALUES ("San pellegrinon (50Cl)","entrée", 2, "San pellegrinon (50Cl)");

INSERT INTO Element_carte (libelle, type, prix, image)
VALUES ("Jus Gilbert","entrée",1.50, "Jus Gilbert");

INSERT INTO Element_carte (libelle, type, prix, image)
VALUES ("Sodas","entrée",1.50, "Sodas");

/* Boissons Chaudes : (uniquement sur pace)*/
INSERT INTO Element_carte (libelle, description, type, prix)
VALUES ("Thé à la menthe : Le verre","Légèrement sucré, notre thé est préparé à la demande et de façon traditionnelle, avec du thé vert nature en graines et de la menthe verte fraîche.", "Boisson", 2,"Thé à la menthe");

INSERT INTO Element_carte (libelle, type, prix, image)
VALUES ("Thé vert au jasmin", "Boisson", 2, "Thé vert au jasmin");

INSERT INTO Element_carte (libelle, type, prix, image)
VALUES ("Thé vert au miel", "Boisson", 2, "Thé vert au miel");

INSERT INTO Element_carte (libelle, type, prix, image)
VALUES ("Café Espresso Malongo", "Boisson", 1.50, "Café Espresso Malongo");



SELECT * FROM Element_carte;
