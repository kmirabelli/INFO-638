-- QUERIES

-- Show a list of recipe names with a thumbnail image for each.

SELECT title, image_path FROM recipes 
ORDER BY title asc;

-- Show the list of recipe names with a thumbnail image that the user has marked as favorites.  

SELECT title, image_path FROM favorites 
NATURAL JOIN recipes
ORDER BY title asc;

-- Show recipe title, image, diet category, servings, cook time, estimate cost, ingredients, and instructions.

SELECT title, image_path, diet_name, servings, cook_time, estimated_cost, ingredient_amt, ingredient_desc, instructions 
FROM recipes 
NATURAL JOIN diets
NATURAL JOIN ingredients
NATURAL JOIN ing_to_recipe
GROUP BY ingredient_desc
;

-- Show recipe title, image, and scheduled/planned date.

SELECT title, image_path, sched_date 
FROM schedule NATURAL JOIN recipes;

-- Show user’s first name, last name, email, and diet type.

SELECT email, fname, lname, diet_name 
FROM users NATURAL JOIN diets;


-- DATABASE CREATION

CREATE DATABASE kmirabel;

USE kmirabel;  

-- Create diet table

CREATE TABLE diets (
diet_id INT PRIMARY KEY AUTO_INCREMENT,
diet_name VARCHAR(40) NOT NULL
);

-- Data for diet table

INSERT INTO diets 
(diet_id, diet_name)
VALUES
(NULL, "Vegan"),
(NULL, "Vegetarian"),
(NULL, "Pescetarian"),
(NULL, "Omnivore")
;

-- Create recipes table

CREATE TABLE recipes (
recipe_id INT PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(100) NOT NULL, 
image_path VARCHAR(255) NOT NULL, 
diet_id INT, 
servings INT, 
cook_time VARCHAR(40),
estimated_cost DECIMAL(5,2),
instructions TEXT,
FOREIGN KEY (diet_id) REFERENCES diets (diet_id)
);


-- Data for recipes table

INSERT INTO recipes 
(recipe_id, title, image_path, diet_id, servings, cook_time, estimated_cost, instructions)
VALUES
(NULL, "Pasta al Limone", "images/pasta_al_limone.jpg", 2, 4, "30 minutes", 10.00, "<p>Test</p><p>Test</p>"),
(NULL, "Salt and Pepper Fish", "images/salt_pepper_fish.jpg", 2, 4, "30 minutes", 10.00, "<p>Test</p><p>Test</p>"),
(NULL, "Grilled Chicken Sandwich", "images/grilled_chicken_sandwich.jpg", 2, 4, "30 minutes", 10.00, "<p>Test</p><p>Test</p>"),
(NULL, "French Onion Beef Noodle Soup", "images/french_onion_beef_soup.jpg", 2, 6, "30 minutes", 10.00, "<p>Test</p><p>Test</p>"),
(NULL, "Celery, Green Bean, and Tofu Salad with Chile Crisp", "images/celery_green_bean_and_tofu_salad.jpg", 2, 4, "30 minutes", 10.00, "<p>Test</p><p>Test</p>"),
(NULL, "Vegetarian Ramen", "images/vegetarian_ramen.jpg", 2, 4, "30 minutes", 10.00, "<p>Test</p><p>Test</p>")
;

-- Create ingredients table

CREATE TABLE ingredients (
ingredient_id INT PRIMARY KEY AUTO_INCREMENT,
ingredient_desc VARCHAR(300) NOT NULL
);

-- Data for ingredients table

INSERT INTO ingredients 
(ingredient_id, ingredient_desc)
VALUES
(NULL, "lemon"),
(NULL, "spaghetti"),
(NULL, "Kosher salt"),
(NULL, "heavy cream"),
(NULL, "unsalted butter"),
(NULL, "finely grated Parmesan"),
(NULL, "freshly ground black pepper")
;

-- Create ing_to_recipe table

CREATE TABLE ing_to_recipe (
ing_recipe_id INT PRIMARY KEY AUTO_INCREMENT,
ingredient_id INT NOT NULL,
ingredient_amt VARCHAR(40),
recipe_id INT NOT NULL,
FOREIGN KEY (ingredient_id) REFERENCES ingredients (ingredient_id),
FOREIGN KEY (recipe_id) REFERENCES recipes (recipe_id)
);

-- Data for ing_to_recipe table

INSERT INTO ing_to_recipe 
(ing_recipe_id, ingredient_id, ingredient_amt, recipe_id)
VALUES
(NULL, 1, "1", 1),
(NULL, 2, "12 oz.", 1),
(NULL, 3, NULL, 1),
(NULL, 4, "3/4 cup", 1),
(NULL, 5, "6 Tbsp.", 1),
(NULL, 6, "3 oz.", 1),
(NULL, 7, NULL, 1)
;

-- Create user table

CREATE TABLE users (
user_id INT PRIMARY KEY AUTO_INCREMENT,
email VARCHAR(120)NOT NULL,
password VARCHAR(40) NOT NULL,
fname VARCHAR(40) NOT NULL,
lname VARCHAR(40) NOT NULL,
diet_id INT,
FOREIGN KEY (diet_id) REFERENCES diets (diet_id)
);

-- Data for user table

INSERT INTO users 
(user_id, email, password, fname, lname, diet_id)
VALUES
(NULL, "kmirabel@gmail.com", "test1", "Katelyn1", "Mirabelli1", 1),
(NULL, "kmirabel@pratt.edu", "test2", "Katelyn2", "Mirabelli2", 2)
;

-- Create favorites table

CREATE TABLE favorites (
fave_id INT PRIMARY KEY AUTO_INCREMENT,
user_id INT,
recipe_id INT,
FOREIGN KEY (user_id) REFERENCES users (user_id),
FOREIGN KEY (recipe_id) REFERENCES recipes (recipe_id)
);

-- Data for favorites table

INSERT INTO favorites 
(fave_id, user_id, recipe_id)
VALUES
(NULL, 1, 1)
;

-- Create schedule table

CREATE TABLE schedule (
schedule_id INT PRIMARY KEY AUTO_INCREMENT,
user_id INT,
sched_date DATE,
recipe_id INT,
FOREIGN KEY (user_id) REFERENCES users (user_id),
FOREIGN KEY (recipe_id) REFERENCES recipes (recipe_id)
);

-- Data for schedule table

INSERT INTO schedule 
(schedule_id, user_id, sched_date, recipe_id)
VALUES
(NULL, 1, "2020-04-20", 1)
;
