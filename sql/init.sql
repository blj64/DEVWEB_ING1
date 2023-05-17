-- DROP DATABASE IF EXISTS RockHub;
CREATE DATABASE IF NOT EXISTS RockHub;
USE RockHub;
DROP TABLE IF EXISTS products;

CREATE TABLE IF NOT EXISTS users(
    login VARCHAR(255) PRIMARY KEY NOT NULL,
    mdp VARCHAR(255),
    nom VARCHAR(255)
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


-- INSERT INTO users (login, mdp, nom) VALUES ('test', '0cc175b9c0f1b6a831c399e269772661', 'TestUser');
-- mdp=a

