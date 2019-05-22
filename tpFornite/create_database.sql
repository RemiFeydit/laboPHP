CREATE DATABASE IF NOT EXISTS tpFortnite;

use tpFortnite;

CREATE TABLE spawns
(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(500) NOT NULL,
);


CREATE TABLE users
(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	login VARCHAR(50) NOT NULL,
	password VARCHAR(50) NOT NULL,
);

INSERT INTO spawns (name, image) VALUES ('Loot Lake', 'loot_lake.jpg');
INSERT INTO spawns (name, image) VALUES ('Anarchy Acres', 'arnarchy_acres.jpg');
INSERT INTO spawns (name, image) VALUES ('Pleasant Park', 'pleasant_park.jpg');
INSERT INTO spawns (name, image) VALUES ('Tilted Towers', 'tilted_towers.jpg');
INSERT INTO spawns (name, image) VALUES ('Lazy Links', 'lazy_links.jpg');

INSERT INTO users (user, password) VALUES ('remi', '123456789');
