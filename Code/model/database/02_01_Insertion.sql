/*INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
VALUES ('Cardinal','Tom B. Erichsen','Skagen 21','Stavanger','4006','Norway');*/


/*
Tables concernant l'Entreprise
Entreprise
*/
INSERT INTO Entreprise (libelle)
VALUES ('L\'autre Sud');
SELECT * FROM Entreprise;

/*
Mail
*/
INSERT INTO Mail (valeur, entreprise)
VALUES ('contact@lautresud.com','L\'autre Sud');
INSERT INTO Mail (valeur, entreprise)
VALUES ('lautresud@gmail.com','L\'autre Sud');

SELECT * FROM Mail;

/*
Adresse
*/

INSERT INTO Adresse (valeur, entreprise)
VALUES ('L\'autre Sud, 26 rue des Etuves 34000 Montpellier','L\'autre Sud');
SELECT * FROM Adresse;


/*
Telephone
*/
INSERT INTO Telephone (numero, entreprise)
VALUES ('06 99 77 95 89','L\'autre Sud');
INSERT INTO Telephone (numero, entreprise)
VALUES ('04 67 56 23 94','L\'autre Sud');
SELECT * FROM Telephone;


/*
Formule
*/
INSERT INTO Formule
VALUES
SELECT * FROM Formule;

/*
Type
*/
INSERT INTO Type
VALUES
SELECT * FROM Type;

/*
Ligne_formule
*/
INSERT INTO Ligne_formule
VALUES
SELECT * FROM Ligne_formule;

/*
Element_carte
*/
INSERT INTO Element_carte
VALUES
SELECT * FROM Element_carte;

/*
Categorie
*/
INSERT INTO Catégorie
VALUES
SELECT * FROM Categorie;

/*
Patisserie
*/
INSERT INTO Patisserie
VALUES
SELECT * FROM Patisserie;

/*
Gamme
*/
INSERT INTO Gamme
VALUES
SELECT * FROM Gamme;

/*
Article
*/
INSERT INTO Article
VALUES
SELECT * FROM Article;
