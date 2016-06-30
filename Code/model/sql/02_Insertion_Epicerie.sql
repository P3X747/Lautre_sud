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
("Cafetière Orientale N°9","8 Tasses",5,"images/epicerie/venise_cafetiere_orientale.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Cheveux d'anges","500g",2,"images/epicerie/cheveux_ange.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Pate à Filo","500g",2,"images/epicerie/pate_filo.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Bulgur","1000g",3,"images/epicerie/bulgur.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Fleur d'oranger","300mL",3.50,"images/epicerie/fleur_oranger.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Eau de rose","300mL",3.50,"images/epicerie/eau_de_rose.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Halva Amande","400g",4,"images/epicerie/halva_amande.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Confitures Figues","450g",3,"images/epicerie/confiture_figue.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Pâte d'abricot","500g",3,"images/epicerie/pate_abricot.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Pruneaux","500g",2.9,"images/epicerie/pruneaux.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Thé vert Jasmin","120g",4.8,"images/epicerie/the_vert_jasmin.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Thé vert filaments","200g",4,"images/epicerie/the_vert_filaments.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Thé vert grains fins ","250g",4,"images/epicerie/the_vert_grains_fins.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Thé vert grains","125g",3.5,"images/epicerie/the_vert_grains_extra.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Thym","850g",8,"images/epicerie/thym.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Thym","450g",5,"images/epicerie/thym.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Thym d'Alep","200g",3,"images/epicerie/thym_alep.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Mahlab","50g",2,"images/epicerie/mahleb.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Poivre doux","100g",2,"images/epicerie/poivre_doux.JPG")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Fèves & Pois chiches","400g",1.5,"images/epicerie/feves_et_pois_chiches.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Fèves","400g",1.5,"images/epicerie/feve.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Tahina (crème de sésame)","450g",3,"images/epicerie/tahina.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Tahina (crème de sésame)","900g",4.5,"images/epicerie/tahina.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Houmous","825g",3.6,"images/epicerie/houmous.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Houmous","380g",18,"images/epicerie/houmous.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Caviar d'aubergine","370g",1.9,"images/epicerie/caviar_aubergines.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Feuilles de vigne au riz","450g",3,"images/epicerie/feuilles_de_vigne.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Olives vertes","40g",3.3,"images/epicerie/olives_vertes.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Cornichons en saumure","",3.8,"images/epicerie/cornichons_en_saumure.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Falafel ","200g (x2)",4.9,"images/epicerie/falafel.jpg")
;
INSERT INTO Article
(libelle ,description,prix,image)
VALUES
("Bzourat (mix de fruits secs)","450g",12,"images/epicerie/bzourat.jpg")
;

SELECT * FROM Article;
