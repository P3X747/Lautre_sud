/* Boissons Fraîches : */
INSERT INTO Element_carte (libelle, type, prix, image)
VALUES ("Eau cristalline (50Cl)","Boisson",1, "images/restaurant/Boisson/eau_cristalline_50CL.jpg");

INSERT INTO Element_carte (libelle, type, prix, image)
VALUES ("Perrier canette (33Cl)","Boisson", 1.50, "images/restaurant/Boisson/perrier_canette_33Cl.jpg");

INSERT INTO Element_carte (libelle, type, prix, image)
VALUES ("San pellegrinon (50Cl)","Boisson", 2, "images/restaurant/Boisson/san_pellegrinon_50Cl.jpg");

INSERT INTO Element_carte (libelle, type, prix, image)
VALUES ("Jus Gilbert","Boisson",1.50, "images/restaurant/Boisson/jus_gilbert.jpg");

INSERT INTO Element_carte (libelle, type, prix, image)
VALUES ("Sodas","Boisson",1.50, "images/restaurant/Boisson/sodas.jpeg");

/* Boissons Chaudes : (uniquement sur pace)*/
INSERT INTO Element_carte (libelle, description, type, prix, image)
VALUES ("Thé à la menthe : Le verre","Légèrement sucré, notre thé est préparé à la demande et de façon traditionnelle, avec du thé vert nature en graines et de la menthe verte fraîche.", "Boisson", 2,"images/restaurant/Boisson/the_menthe.jpg");

INSERT INTO Element_carte (libelle, type, prix, image)
VALUES ("Thé vert au jasmin", "Boisson", 2, "images/restaurant/Boisson/the_vert_jasmin.jpg");

INSERT INTO Element_carte (libelle, type, prix, image)
VALUES ("Thé vert au miel", "Boisson", 2, "images/restaurant/Boisson/the_vert_miel.jpg");

INSERT INTO Element_carte (libelle, type, prix, image)
VALUES ("Café Espresso Malongo", "Boisson", 1.50, "images/restaurant/Boisson/cafe_espresso_malongo.jpg");



SELECT * FROM Element_carte;
