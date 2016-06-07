/*
Formule
CREATE TABLE Formule
(
  libelle varchar(255),
  description varchar(255),
  prix float(53),
  image varchar(255),
  CONSTRAINT pk_Formule PRIMARY KEY (libelle)
);
*/

INSERT INTO Formule
(libelle,description,prix)
VALUES ("Plateaux repas 1","3 entrées + 2 feuilles de vigne + 1 chausson",9.5)
;
INSERT INTO Formule
(libelle,description,prix)
VALUES ("Plateaux repas 2","3 entrées + 2 feuilles de vigne + 3 chaussons",12)
;
INSERT INTO Formule
(libelle,description,prix)
VALUES ("Plateaux repas 3","3 entrées + 2 feuilles de vigne + 1 pain garni ou une brick",14)
;

INSERT INTO Formule
(libelle,description,prix)
VALUES ("Formules repas 1","plat + dessert (+1€ couscous)",11)
;
INSERT INTO Formule
(libelle,description,prix)
VALUES ("Formules repas 2","entrée + plat (+1€ couscous)",12)
;
INSERT INTO Formule
(libelle,description,prix)
VALUES ("Formules repas 3","entrée + plat + dessert (+1€ couscous)",15)
;

INSERT INTO Formule
(libelle,description,prix)
VALUES ("100% Végétarien 1","3 entrées + 2 feuilles de vigne",9)
;
INSERT INTO Formule
(libelle,description,prix)
VALUES ("100% Végétarien 2","3 entrées + 2 falafels + 2 feuilles de vigne",10.5)
;
INSERT INTO Formule
(libelle,description,prix)
VALUES ("100% Végétarien 3","3 entrées + 1 falafel + 1 chausson épinard + 1 chausson fromage + 2 feuilles de vigne",12)
;


SELECT * FROM Formule;

/*
Ligne_formule
CREATE TABLE Ligne_formule
(
  formule varchar(255),
  type varchar(255),
  quantite int(5),
  description varchar(255),
  CONSTRAINT pk_Ligne_formule PRIMARY KEY (formule, type, quantite),
  CONSTRAINT fk_Formule_Ligne_formule FOREIGN KEY (formule)
  REFERENCES Formule(libelle),
  CONSTRAINT fk_Type_Ligne_formule FOREIGN KEY (type)
  REFERENCES Type(libelle)
);


INSERT INTO Ligne_formule
VALUES
SELECT * FROM Ligne_formule;

*/
