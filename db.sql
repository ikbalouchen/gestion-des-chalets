CREATE DATABASE chalets ;
-- 
CREATE TABLE clients(
numclient int PRIMARY KEY,
nomclient varchar(40),
prenomclient varchar(40),
codepostalclient int);
-- 
CREATE TABLE reservation(
numreservation int PRIMARY KEY,
numclient int,
numchalet int,
Date_debut date,
Date_fin date,
CONSTRAINT fk1 FOREIGN KEY (numclient) REFERENCES clients (numclient),
CONSTRAINT fk2 FOREIGN KEY (numchalet) REFERENCES chalets (numchalet));
-- 
CREATE TABLE chalets(
numchalet int PRIMARY KEY,
numcategorie int,
CONSTRAINT fk FOREIGN KEY (numcategorie)REFERENCES categories(numcategorie));
-- 
CREATE TABLE categorie(
numcategorie int PRIMARY KEY,
prix_jour int)

    
