/*INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
VALUES ('Cardinal','Tom B. Erichsen','Skagen 21','Stavanger','4006','Norway');*/


/*
Tables concernant l'Entreprise
Entreprise
*/
INSERT INTO Entreprise (libelle)
VALUES ("L'autre Sud");
SELECT * FROM Entreprise;

/*
Mail
*/
INSERT INTO Mail (valeur, entreprise)
VALUES ("contact@lautresud.com","L'autre Sud");
INSERT INTO Mail (valeur, entreprise)
VALUES ("lautresud@gmail.com","L'autre Sud");

SELECT * FROM Mail;

/*
Adresse
*/

INSERT INTO Adresse (valeur, entreprise)
VALUES ("L'autre Sud, 26 rue des Etuves 34000 Montpellier","L'autre Sud");
SELECT * FROM Adresse;


/*
Telephone
*/
INSERT INTO Telephone (numero, entreprise)
VALUES ("06 99 77 95 89","L'autre Sud");
INSERT INTO Telephone (numero, entreprise)
VALUES ("04 67 56 23 94","L'autre Sud");
SELECT * FROM Telephone;

source 02_Insertion_Epicerie.sql;
source 02_Insertion_Patisserie.sql;
source 02_Insertion_Restaurant.sql;
