CREATE DATABASE animal_shelter;

USE animal_shelter;

CREATE TABLE pets (
pet_id INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(20),
species ENUM("Dog","Cat") NOT NULL,
breed VARCHAR(20) NOT NULL,
sex ENUM("M","F"),
primary_color VARCHAR(150),
date_of_birth DATE,
date_of_death DATE,
intake_date DATETIME NOT NULL
);

INSERT INTO pets 
(pet_id, name, species, breed, sex, primary_color, date_of_birth, date_of_death, intake_date)
VALUES
(NULL, "Rhonda", "Cat", "Domestic Shorthair", "F", "Gray", '2014-09-01', NULL, '2017-08-15 12:00:00'),
(NULL, "Rosie", "Cat", "Domestic Shorthair", "F", "Black", '2018-03-08', NULL, '2018-03-21 12:00:00')
;

SELECT * FROM pets;


DROP TABLE pets; 