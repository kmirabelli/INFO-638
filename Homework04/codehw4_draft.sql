-- QUERIES

-- 1.	What is the name of the oldest item in the museum's collection? 

SELECT artifact_name, MIN(year_created) FROM artifacts;


-- 2.	How much total money was donated to the museum in 2014?

SELECT SUM(donation_amount) AS `Total Money Donated in 2014` FROM donations
WHERE donation_date BETWEEN '2014-01-01' AND '2014-12-31';

-- 3.	How many items does the museum currently have of each type?

SELECT type.type_desc AS 'Type', COUNT(artifacts.artifact_id) AS 'Count'
FROM type
INNER JOIN artifacts ON type.type_id=artifacts.type_id
GROUP BY type_desc
ORDER BY 'Count' DESC;


-- DATABASE CREATION

CREATE DATABASE museum_collection;

USE museum_collection;	

CREATE TABLE type (
type_id INT PRIMARY KEY AUTO_INCREMENT,
type_desc VARCHAR(40) NOT NULL
);

INSERT INTO type 
(type_id, type_desc)
VALUES
(NULL, "Ceramics"),
(NULL, "Drawing"),
(NULL, "Glass"),
(NULL, "Installation"),
(NULL, "Painting"),
(NULL, "Photography"),
(NULL, "Sculpture"),
(NULL, "Textile")
;

SELECT * FROM type;

CREATE TABLE location (
location_id INT PRIMARY KEY AUTO_INCREMENT,
floor INT NOT NULL,
room INT NOT NULL
);

INSERT INTO location 
(location_id, floor, room)
VALUES
(NULL, 1, 101),
(NULL, 1, 102),
(NULL, 1, 103),
(NULL, 1, 104),
(NULL, 1, 105),
(NULL, 1, 106),
(NULL, 2, 201),
(NULL, 2, 202),
(NULL, 2, 203),
(NULL, 2, 204),
(NULL, 2, 205),
(NULL, 2, 206),
(NULL, 3, 301),
(NULL, 3, 302),
(NULL, 3, 303),
(NULL, 3, 304),
(NULL, 3, 305),
(NULL, 3, 306)
;

SELECT * FROM location;

CREATE TABLE donors (
donor_id INT PRIMARY KEY AUTO_INCREMENT,
fname VARCHAR(40) NOT NULL,
lname VARCHAR(40) NOT NULL,
street_1 VARCHAR(40) NOT NULL,
street_2 VARCHAR(40),
city VARCHAR(40) NOT NULL,
state VARCHAR(2) NOT NULL,
zip INT(5) NOT NULL,
phone VARCHAR(10),
email VARCHAR(100)
);

INSERT INTO donors 
(donor_id, fname, lname, street_1, street_2, city, state, zip, phone, email)
VALUES
(NULL, "Jane", "Smith", "123 Main St", NULL, "New York", "NY", 10104, "5551284321", "jane.smith@gmail.com"),
(NULL, "George", "Johnson", "222 Cherry Lane", NULL, "New York", "NY", 11214, "5551244322", "george.johnson@gmail.com"),
(NULL, "Richard", "Taylor", "422 Maple Rd", NULL, "New York", "NY", 10111, "5551254323", "richard.taylor@gmail.com")
;

SELECT * FROM donors;

CREATE TABLE artifacts (
artifact_id INT PRIMARY KEY AUTO_INCREMENT,
artifact_name VARCHAR(200) NOT NULL,
type_id INT NOT NULL, 
creator VARCHAR(100),
year_created INT(4), 
location_id INT NOT NULL,
FOREIGN KEY (type_id) REFERENCES type (type_id),
FOREIGN KEY (location_id) REFERENCES location (location_id)
);

INSERT INTO artifacts
(artifact_id, artifact_name, type_id, creator, year_created, location_id)
VALUES
(NULL, "Artifact Test 1", 1, "Sam Stone", 2005, 3),
(NULL, "Artifact Test 2", 3, "Jesse Gonzalez", 1999, 5),
(NULL, "Artifact Test 3", 4, "Ralph Cohen", 2014, 7)
;

SELECT * FROM artifacts;

CREATE TABLE donations (
donation_id INT PRIMARY KEY AUTO_INCREMENT,
donor_id INT NOT NULL,
artifact_id INT,
donation_amount INT,
donation_date DATE NOT NULL,
FOREIGN KEY (donor_id) REFERENCES donors (donor_id),
FOREIGN KEY (artifact_id) REFERENCES artifacts (artifact_id)
);

INSERT INTO donations
(donation_id, donor_id, artifact_id, donation_amount, donation_date)
VALUES
(NULL, 1, 1, NULL, "2020-01-01"),
(NULL, 2, 2, NULL, "2019-11-15"),
(NULL, 3, 3, NULL, "2018-10-18"),
(NULL, 1, NULL, 500, "2014-01-01"),
(NULL, 2, NULL, 600, "2014-07-01"),
(NULL, 3, NULL, 700, "2015-08-10"),
(NULL, 1, NULL, 300, "2016-04-22")
;

SELECT * FROM donations;

