/*
Gamme

INSERT INTO Gamme
VALUES
SELECT * FROM Gamme;

/*
Article

gamme varchar(255),
libelle varchar(255),
description varchar(255),
prix float(53),
image varchar(255),
CONSTRAINT pk_Article PRIMARY KEY (libelle),
CONSTRAINT fk_Gamme FOREIGN KEY (gamme)
REFERENCES Gamme(libelle)

*/

INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Cafetière Orientale N°9","8 Tasses",5,"images/restaurant/Boisson/eau_cristalline_50CL.jpg")
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Cheveux d'anges","500g",2)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Pate à Filo","500g",2)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Bulgur","1000g",3)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Fleur d'oranger","300mL",3.50)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Eau de rose","300mL",3.50)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Halva Amande","400g",4)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Confitures Figues","450g",3)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Pâte d'abricot","500g",3)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Pruneaux","500g",2.9)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Thé vert Jasmin","120g",4.8)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Thé vert filaments","200g",4)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Thé vert grains fins ","250g",4)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Thé vert grains","125g",3.5)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Thym","850g",8)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Thym","450g",5)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Thym d'Alep","200g",3)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Mahlab","50g",2)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Poivre doux","100g",2)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Fèves & Pois chiches","400g",1.5)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Fèves","400g",1.5)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Tahina (crème de sésame)","450g",3)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Tahina (crème de sésame)","900g",4.5)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Houmous","825g",3.6)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Houmous","380g",18)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Caviar d'aubergine","370g",1.9)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Feuilles de vigne au riz","450g",3)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Olives vertes","40g",3.3)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Cornichons en saumure","",3.8)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Falafel ","200g (x2)",4.9)
;
INSERT INTO Article
(libelle ,description,prix)
VALUES
("Bzourat (mix de fruits secs)","450g",12)
;

SELECT * FROM Article;
