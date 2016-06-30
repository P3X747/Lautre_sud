--
DROP DATABASE IF EXISTS db_lautre_sud;
CREATE DATABASE db_lautre_sud;
use db_lautre_sud;
-- Tables concernant l'Entreprise
CREATE TABLE Entreprise
(
  libelle varchar(255),
  description varchar(255),
  CONSTRAINT pk_Entreprise PRIMARY KEY (libelle)
);
select "Entreprise";
DESC Entreprise;

CREATE TABLE Mail
(
  entreprise varchar(255),
  libelle varchar(255),
  valeur varchar(255),
  CONSTRAINT pk_Mail PRIMARY KEY (valeur),
  CONSTRAINT fk_Entreprise_Mail FOREIGN KEY (entreprise)
  REFERENCES Entreprise(libelle)
);
select "Mail";
DESC Mail;

CREATE TABLE Adresse
(
  entreprise varchar(255),
  libelle varchar(255),
  valeur varchar(255),
  CONSTRAINT pk_Adresse PRIMARY KEY (valeur),
  CONSTRAINT fk_Entreprise_Adresse FOREIGN KEY (entreprise)
  REFERENCES Entreprise(libelle)
);
select "Adresse";
DESC Adresse;

CREATE TABLE Telephone
(
  entreprise varchar(255),
  libelle varchar(255),
  numero varchar(255),
  type varchar(255),
  CONSTRAINT pk_Telephone PRIMARY KEY (numero),
  CONSTRAINT fk_Entreprise_Telephone FOREIGN KEY (entreprise)
  REFERENCES Entreprise(libelle)
);
select "Telephone";
DESC Telephone;
-- Tables concernant le restaurant

CREATE TABLE Type
(
  libelle varchar(255),
  description varchar(255),
  image varchar(255),
  CONSTRAINT pk_Type PRIMARY KEY (libelle)
);
select "Type";
DESC Type;

CREATE TABLE Element_carte
(
  type varchar(255),
  libelle varchar(255),
  description varchar(255) DEFAULT '--',
  prix float(53),
  image varchar(255),
  CONSTRAINT pk_Element_carte PRIMARY KEY (libelle, description),
  CONSTRAINT fk_Type_Element_carte FOREIGN KEY (type)
  REFERENCES Type(libelle)
);
select "Element_carte";
DESC Element_carte;

CREATE TABLE Formule
(
  libelle varchar(255),
  description varchar(255),
  prix float(53),
  image varchar(255),
  CONSTRAINT pk_Formule PRIMARY KEY (libelle)

);
select "Formule";
DESC Formule;

CREATE TABLE Ligne_formule
(
  formule varchar(255),
  type varchar(255),
  quantite int(5),
  description varchar(255),
  CONSTRAINT pk_Ligne_formule PRIMARY KEY (formule, type, quantite),
  CONSTRAINT fk_Formule_Ligne_formule FOREIGN KEY (formule)
  REFERENCES Formule(libelle)
/* CONSTRAINT fk_Type_Ligne_formule FOREIGN KEY (type)
  REFERENCES Type(libelle)
*/
);
select "Ligne_formule";
DESC Ligne_formule;


-- Tables concernant la patisserie
CREATE TABLE Categorie
(
  libelle varchar(255),
  description varchar(255),
  image varchar(255),
  CONSTRAINT pk_Categorie PRIMARY KEY (libelle)
);
select "Categorie";
DESC Categorie;

CREATE TABLE Patisserie
(
  categorie varchar(255),
  libelle varchar(255),
  description varchar(255),
  prix float(53),
  image varchar(255),
  CONSTRAINT pk_Patisserie PRIMARY KEY (libelle),
  CONSTRAINT fk_Categorie FOREIGN KEY (categorie)
  REFERENCES Categorie(libelle)
);
select "Patisserie";
DESC Patisserie;
-- Tables concernant l'epicerie
CREATE TABLE Gamme
(
  libelle varchar(255),
  description varchar(255),
  image varchar(255),
  CONSTRAINT pk_Gamme PRIMARY KEY (libelle)
);
select "Gamme";
DESC Gamme;

CREATE TABLE Article
(
  gamme varchar(255),
  libelle varchar(255),
  description varchar(255),
  prix float(53),
  image varchar(255),
  CONSTRAINT pk_Article PRIMARY KEY (libelle,description),
  CONSTRAINT fk_Gamme FOREIGN KEY (gamme)
  REFERENCES Gamme(libelle)
);
select "Article";
DESC Article;

--
show Tables;
