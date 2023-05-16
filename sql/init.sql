DROP DATABASE IF EXISTS RockHub;
CREATE DATABASE RockHub;
USE RockHub;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS products;

CREATE TABLE users (
    login VARCHAR(255) PRIMARY KEY NOT NULL,
    mdp VARCHAR(255),
    nom VARCHAR(255),
    genre VARCHAR(12) NOT NULL CHECK (genre IN('Homme', 'Femme', 'Non précise')),
    dateNaissance DATE,
    email VARCHAR(255)
);

CREATE TABLE products(
    name VARCHAR(255),
    complement VARCHAR(255),
    stock INT,
    prix FLOAT,
    cover VARCHAR(255),
    id VARCHAR(50),
    categorie VARCHAR(10) NOT NULL CHECK (categorie IN('songs','playlists','merch'))
);

INSERT INTO users (login, mdp, nom, genre, dateNaissance, email) 
VALUES ('a', '0cc175b9c0f1b6a831c399e269772661', 'Test', 'Homme', NULL, 'test@gmail.com');


INSERT INTO users (login, mdp, nom, genre, dateNaissance, email) 
VALUES ('b', '92eb5ffee6ae2fec3ad71c777531578f', 'Test', 'Homme', NULL, 'testb@gmail.com');