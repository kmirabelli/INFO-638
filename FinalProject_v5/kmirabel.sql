-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2020 at 05:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kmirabel`
--

-- --------------------------------------------------------

--
-- Table structure for table `diets`
--

CREATE TABLE `diets` (
  `diet_id` int(11) NOT NULL,
  `diet_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diets`
--

INSERT INTO `diets` (`diet_id`, `diet_name`) VALUES
(1, 'Vegan'),
(2, 'Vegetarian'),
(3, 'Pescetarian'),
(4, 'Omnivore');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `fave_id` int(11) NOT NULL,
  `id` int(10) UNSIGNED DEFAULT NULL,
  `recipe_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`fave_id`, `id`, `recipe_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `ingredient_id` int(11) NOT NULL,
  `ingredient_desc` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`ingredient_id`, `ingredient_desc`) VALUES
(1, 'lemon'),
(2, 'spaghetti'),
(3, 'Kosher salt'),
(4, 'heavy cream'),
(5, 'unsalted butter'),
(6, 'finely grated Parmesan'),
(7, 'freshly ground black pepper'),
(8, 'short-grain sushi rice'),
(9, 'scallions, dark green parts and white parts separated'),
(10, 'finely grated peeled ginger (from about one 1” piece)'),
(11, 'neutral oil, divided'),
(12, 'skinless, boneless cod, cut into 2” pieces'),
(13, 'unseasoned rice vinegar'),
(14, 'sugar'),
(15, 'Kosher salt, freshly ground pepper'),
(16, 'unsalted butter, cut into pieces'),
(17, 'Dijon mustard'),
(18, 'Worcestershire sauce'),
(19, 'garlic cloves, finely grated'),
(20, 'fresh lemon juice'),
(21, 'freshly ground black pepper, plus more'),
(22, 'extra-virgin olive oil, plus more for grill'),
(23, 'mayonnaise'),
(24, 'chopped cornichons (about 9)'),
(25, 'Kosher salt'),
(26, 'skinless, boneless chicken thighs (about 1½ lb. total)'),
(27, 'brioche buns, split'),
(28, 'fennel bulb, thinly sliced crosswise, fronds reserved'),
(29, 'basil leaves'),
(30, 'crushed red pepper flakes (optional)'),
(31, 'Little Gem lettuce'),
(32, 'tomato, sliced ¼ inch thick'),
(33, 'vegetable oil'),
(34, 'English-style bone-in beef short ribs, cut into 2 inch segments'),
(35, 'Kosher salt'),
(36, 'scallions, white and dark green parts separated'),
(37, 'garlic cloves'),
(38, 'ginger, scrubbed, thinly sliced'),
(39, 'star anise pods'),
(40, 'cinnamon sticks'),
(41, 'whole cloves'),
(42, 'black peppercorns'),
(43, 'coriander seeds'),
(44, 'dry white wine'),
(45, 'low-sodium soy sauce'),
(46, 'unsalted butter'),
(47, 'onions (about 10 medium), thinly sliced'),
(48, 'unseasoned rice vinegar'),
(49, 'ramen noodles'),
(50, 'celery stalks, trimmed, thinly sliced on a steep diagonal into 2 inch pieces, plus leaves for serving'),
(51, 'green beans, trimmed, sliced on a steep diagonal into bite-size pieces'),
(52, 'firm tofu, preferably braised, sliced into thin batons'),
(53, 'unsalted, roasted peanuts'),
(54, 'fresh lime juice'),
(55, 'Chile Crisp, plus more for serving'),
(56, 'Flaky sea salt'),
(57, 'garlic cloves, thinly sliced'),
(58, 'vegetable oil'),
(59, 'black or white sesame seeds'),
(60, 'gochugaru (coarse Korean red pepper powder) or 1½ tsp. crushed red pepper flakes'),
(61, 'Kosher salt'),
(62, 'scallions'),
(63, 'ginger, peeled, thinly sliced'),
(64, 'tomato paste'),
(65, 'dried shiitake mushrooms'),
(66, 'piece dried kombu'),
(67, 'unsalted butter, cut into pieces'),
(68, 'low-sodium soy sauce'),
(69, 'baby bok choy (about 12 oz. total), quartered lengthwise'),
(70, 'fresh ramen noodles'),
(71, 'Jammy eggs, toasted nori sheets, and/or cilantro (for serving; optional)');

-- --------------------------------------------------------

--
-- Table structure for table `ing_to_recipe`
--

CREATE TABLE `ing_to_recipe` (
  `ing_recipe_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL,
  `ingredient_amt` varchar(40) DEFAULT NULL,
  `recipe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ing_to_recipe`
--

INSERT INTO `ing_to_recipe` (`ing_recipe_id`, `ingredient_id`, `ingredient_amt`, `recipe_id`) VALUES
(1, 1, '1', 1),
(2, 2, '12 oz.', 1),
(3, 3, NULL, 1),
(4, 4, '3/4 cup', 1),
(5, 5, '6 Tbsp.', 1),
(6, 6, '3 oz.', 1),
(7, 7, NULL, 1),
(8, 8, '1 cup', 2),
(9, 9, '8', 2),
(10, 9, '1 Tbsp.', 2),
(11, 10, '3 Tbsp.', 2),
(12, 11, '1½ lb.', 2),
(13, 12, '1 Tbsp.', 2),
(14, 13, '1 tsp.', 2),
(15, 14, NULL, 2),
(16, 15, '2 Tbsp.', 2),
(17, 16, '1 Tbsp.', 3),
(18, 17, '2 tsp.', 3),
(19, 18, '2', 3),
(20, 19, '2 Tbsp. plus 2 tsp.', 3),
(21, 20, '2 tsp.', 3),
(22, 21, '⅓ cup plus 2 tsp.', 3),
(23, 22, '6 Tbsp.', 3),
(24, 23, '¼ cup', 3),
(25, 24, NULL, 3),
(26, 25, '4 large or 6 small', 3),
(27, 26, '4', 3),
(28, 27, '1 medium', 3),
(29, 28, '1 cup', 3),
(30, 29, '¼ tsp.', 3),
(31, 30, '1 small head', 3),
(32, 31, '1 medium', 3),
(33, 32, '2 Tbsp.', 4),
(34, 33, NULL, 4),
(35, 34, NULL, 4),
(36, 35, '6', 4),
(37, 36, '8', 4),
(38, 37, '1 4 inch piece', 4),
(39, 38, '6', 4),
(40, 39, '2 3 inch', 4),
(41, 40, '8', 4),
(42, 41, '2 tsp.', 4),
(43, 42, '2 tsp.', 4),
(44, 43, '1 cup', 4),
(45, 44, '½ cup (or more)', 4),
(46, 45, '3 Tbsp.', 4),
(47, 46, '5 lb.', 4),
(48, 47, '2 Tbsp.', 4),
(49, 48, '30 oz. fresh or 18 oz. dried', 4),
(50, 49, '4', 5),
(51, 50, '2 cups', 5),
(52, 51, '½ 8-oz. block', 5),
(53, 52, '¼ cup', 5),
(54, 53, '2 Tbsp.', 5),
(55, 54, '2 Tbsp.', 5),
(56, 55, NULL, 5),
(57, 56, '4', 6),
(58, 57, '¼ cup plus 2 Tbsp.', 6),
(59, 58, '1 Tbsp.', 6),
(60, 59, '1 Tbsp.', 6),
(61, 60, NULL, 6),
(62, 61, '4', 6),
(63, 62, '1 2 inch piece', 6),
(64, 63, '2 Tbsp.', 6),
(65, 64, '8', 6),
(66, 65, '1 4x3 inch', 6),
(67, 66, '3 Tbsp.', 6),
(68, 67, '1 Tbsp.', 6),
(69, 68, '4', 6),
(70, 69, '4 5-oz. packages', 6),
(71, 70, NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `recipe_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `diet_id` int(11) DEFAULT NULL,
  `servings` int(11) DEFAULT NULL,
  `cook_time` varchar(40) DEFAULT NULL,
  `estimated_cost` decimal(5,2) DEFAULT NULL,
  `instructions` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`recipe_id`, `title`, `image_path`, `diet_id`, `servings`, `cook_time`, `estimated_cost`, `instructions`) VALUES
(1, 'Pasta al Limone', 'images/pasta_al_limone.jpg', 2, 4, '30 minutes', '10.00', '<p>Using a vegetable peeler, remove two 2\"-long strips of lemon zest. Thinly slice each strip lengthwise into thin strands; set aside for serving. Finely grate remaining zest into a large pot (like a Dutch oven). Cut lemon in half and squeeze out enough juice to yield 2 Tbsp. into a small bowl; set aside.</p>\r\n\r\n<p>Cook pasta in another large pot of boiling heavily salted water, stirring occasionally, until very al dente (pasta will finish cooking in the sauce).</p>\r\n\r\n<p>Meanwhile, add cream to pot with lemon zest and cook over medium heat, whisking often, until liquid is just beginning to simmer, about 2 minutes. Reduce heat to medium-low. Whisk in butter 1 Tbsp. at a time until melted and sauce is creamy and emulsified. Remove from heat.</p>\r\n\r\n<p>Just before pasta is al dente, scoop out 1½ cups pasta cooking liquid. Add ¾ cup pasta cooking liquid to cream sauce and return to medium heat. Using tongs, transfer spaghetti to pot with sauce (it’s okay if a little water comes along with it). Cook, tossing often and adding Parmesan little by little, until cheese is melted and sauce is creamy, about 3 minutes. If sauce looks tight, add 1–2 Tbsp. pasta cooking liquid. (Cream sauces tighten up very quickly as they cool, so it’s better to lean on the saucier side of things.) Stir in reserved lemon juice; season with more salt, if needed.</p>\r\n\r\n<p>Divide pasta among bowls. Season with pepper, then top with reserved lemon zest strips.</p>'),
(2, 'Salt and Pepper Fish', 'images/salt_pepper_fish.jpg', 2, 4, '30 minutes', '10.00', '<p>Rinse rice in several changes of cold water in a medium bowl until water runs clear. Drain well, then transfer to a small saucepan. Pour in 1¼ cups cold water and bring to a boil over medium-high heat. Give rice a stir so grains don’t stick to the bottom. Cover pot and reduce heat to lowest setting. Cook, undisturbed, until water is evaporated and rice is tender, 18–20 minutes. Remove from heat and let sit, still covered, 10 minutes.</p>\r\n\r\n<p>Meanwhile, thinly slice dark green scallion parts into rounds. Thinly slice white parts on a steep diagonal. Keep separated.</p>\r\n\r\n<p>Mix ginger and 2 Tbsp. oil in a medium bowl. Add cod; season with salt and plenty of pepper (about 2 tsp.). Toss to coat.</p>\r\n\r\n<p>Heat remaining 1 Tbsp. oil in a large nonstick skillet over medium-high. Add cod and cook, undisturbed, until golden underneath, about 2 minutes. Turn fish pieces, then scatter white scallion parts over. Cook, shaking the pan a bit, until fish is cooked through and some scallions are caramelized and some are just slightly softened, about 2 minutes more. Remove from heat.</p>\r\n\r\n<p>Stir vinegar and sugar in a small bowl until sugar dissolves. Stir into rice. Add butter and sliced scallion greens; gently stir until butter melts. Season with salt.</p>\r\n\r\n<p>Transfer rice to a platter and top with fish; pour any pan juices over.</p>\r\n'),
(3, 'Grilled Chicken Sandwich', 'images/grilled_chicken_sandwich.jpg', 2, 4, '30 minutes', '10.00', '<p>Whisk mustard, Worcestershire, garlic, 2 Tbsp. lemon juice, and 2 tsp. black pepper in a medium bowl. Whisking constantly, stream in ⅓ cup oil until emulsified. Transfer half of marinade to a small bowl, then whisk in mayonnaise and cornichons (this will be the special sauce). Season mayo dressing with salt; set aside.</p>\r\n\r\n<p>Season chicken thighs with salt and add to medium bowl with remaining marinade. Toss to coat. Let sit at room temperature, tossing occasionally, at least 30 minutes, or chill up to 4 hours.</p>\r\n\r\n<p>Prepare a grill for medium-high heat. Lightly oil grate. Grill chicken, turning once halfway through, until well charred and cooked through, 8–10 minutes. Transfer to a platter and let rest 5 minutes. If you have 6 chicken thighs, cut 2 of them in half and use 1½ thighs per sandwich.</p>\r\n\r\n<p>Grill buns cut side down until lightly charred, about 30 seconds. Transfer to platter with chicken.</p>\r\n\r\n<p>While chicken rests, coarsely chop fennel fronds. Toss fronds, sliced fennel, basil, red pepper flakes (if using), and remaining 2 tsp. oil and 2 tsp. lemon juice in a medium bowl; season with salt and black pepper.</p>\r\n\r\n<p>Spread reserved mayonnaise dressing on cut sides of each bun. Arrange 1–2 lettuce leaves and sliced tomato on bottom halves. Top each with chicken, then arrange fennel salad over. Close sandwiches with top buns.</p>\r\n'),
(4, 'French Onion Beef Noodle Soup', 'images/french_onion_beef_soup.jpg', 2, 6, '30 minutes', '10.00', '<p>Heat oil in a large Dutch oven or other heavy pot over medium-high. Season short ribs with salt and, working in batches, cook, turning occasionally, until well browned on all sides, 12–14 minutes. Transfer to a platter as you go. Carefully pour off fat left behind in pot until there is just enough to cover bottom of pot; discard.</p>\r\n\r\n<p>Return pot to medium heat. Cook whole white scallion parts, garlic, and ginger, stirring occasionally, until they are starting to brown, about 4 minutes. Add star anise, cinnamon, cloves, peppercorns, and coriander seeds and cook, stirring often, until fragrant and oil is sizzling, about 1 minute. Add wine, scraping up any browned bits from bottom of pot with a wooden spoon. Simmer until almost completely evaporated, about 3 minutes. Return beef to pot and add soy sauce and 12 cups water. Bring to a boil, then reduce heat and cover partially with a lid. Simmer until meat is not quite falling off the bone, about 1½ hours.</p>\r\n\r\n<p>Meanwhile, heat butter in another large pot or Dutch oven over medium-high until foaming subsides. Add onions, season with salt, and cook, stirring often, until they begin to take on some color, about 15 minutes. (If they don’t fit in your pot, add as much as you can, cover, and steam 5 minutes. Stir in remaining onions and continue cooking.) Reduce heat to medium-low and cook, stirring occasionally, until onions are deep golden and softened but not mushy, 30–45 minutes.</p>\r\n\r\n<p>Using tongs, remove beef from broth and let cool until you can handle. Tear meat into bite-size pieces, discarding any bone and excess fat as you go. Strain broth through a fine-mesh sieve into a large bowl; discard solids.</p>\r\n\r\n<p>Add meat and broth to pot with onions. Bring to a boil, reduce heat to low, and simmer until liquid is reduced a bit and flavors have melded, about 30 minutes. Add vinegar; taste and add more vinegar and/or soy sauce if needed.</p>\r\n\r\nThinly slice remaining scallion greens. Cook noodles according to package directions. Divide among bowls. Ladle soup over noodles, making sure each bowl gets some meat and plenty of onions. Top with scallion greens and serve.\r\n'),
(5, 'Celery, Green Bean, and Tofu Salad with Chile Crisp', 'images/celery_green_bean_and_tofu_salad.jpg', 2, 4, '30 minutes', '10.00', '<p>Toss celery, green beans, tofu, peanuts, lime juice, and 2 Tbsp. Chile Crisp in a medium bowl to combine. Top with more Chile Crisp as desired, celery leaves, and sea salt.</p>'),
(6, 'Vegetarian Ramen', 'images/vegetarian_ramen.jpg', 2, 4, '30 minutes', '10.00', '<p>Cook garlic and ¼ cup oil in a medium pot over medium heat, stirring often, until garlic is beginning to turn golden, about 3 minutes. Stir in sesame seeds and cook, stirring occasionally, until garlic is golden brown and crisp, about 1 minute. Transfer mixture to a small bowl and stir in gochugaru; season with salt. Set garlic oil aside. Wipe out pot and set aside.</p>\r\n\r\n<p>Trim dark green parts from scallions and thinly slice; set aside for serving. Coarsely chop white and pale green parts. Heat remaining 2 Tbsp oil in reserved pot over medium-high. Cook chopped scallions and ginger, stirring often, until scallions are charred in spots, about 4 minutes. Add tomato paste and cook, stirring occasionally, until it begins to stick to the bottom of pot and darkens slightly, about 2 minutes. Add mushrooms and kombu, then stir in 5 cups cold water. Bring to a boil, then remove from heat and let sit until mushrooms soften, about 10 minutes. Remove and discard kombu.</p>\r\n\r\n<p>Using a slotted spoon, transfer solids to a blender. Add a ladleful or 2 of broth to blender and purée until smooth. Stir purée back into broth in pot and bring to a simmer over medium heat. Add butter a piece at a time, whisking to combine after each addition before adding more. Stir in soy sauce; season with salt. Reduce heat to low and keep warm until ready to serve.</p>\r\n\r\n<p>Meanwhile, bring a large pot of water to a boil. Add bok choy and cook until bright green and tender, about 2 minutes. Using a slotted spoon, transfer bok choy to a plate. Return water to a boil and cook noodles according to package directions. Drain and divide among bowls.</p>\r\n\r\n<p>To serve, ladle broth over noodles, then top with bok choy and reserved garlic oil. Top with eggs, nori, and cilantro if desired.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `id` int(10) UNSIGNED DEFAULT NULL,
  `sched_date` date DEFAULT NULL,
  `recipe_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `id`, `sched_date`, `recipe_id`) VALUES
(1, 1, '2020-04-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(32) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `diet_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`, `diet_id`) VALUES
(1, 'Katelyn1', 'Mirabelli1', 'katelynmirabelli', 'test1', 1),
(2, 'Katelyn2', 'Mirabelli2', 'kmirabel', 'test2', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diets`
--
ALTER TABLE `diets`
  ADD PRIMARY KEY (`diet_id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`fave_id`),
  ADD KEY `id` (`id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`ingredient_id`);

--
-- Indexes for table `ing_to_recipe`
--
ALTER TABLE `ing_to_recipe`
  ADD PRIMARY KEY (`ing_recipe_id`),
  ADD KEY `ingredient_id` (`ingredient_id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipe_id`),
  ADD KEY `diet_id` (`diet_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `id` (`id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `diet_id` (`diet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diets`
--
ALTER TABLE `diets`
  MODIFY `diet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `fave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `ingredient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `ing_to_recipe`
--
ALTER TABLE `ing_to_recipe`
  MODIFY `ing_recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`recipe_id`);

--
-- Constraints for table `ing_to_recipe`
--
ALTER TABLE `ing_to_recipe`
  ADD CONSTRAINT `ing_to_recipe_ibfk_1` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`ingredient_id`),
  ADD CONSTRAINT `ing_to_recipe_ibfk_2` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`recipe_id`);

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_ibfk_1` FOREIGN KEY (`diet_id`) REFERENCES `diets` (`diet_id`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`recipe_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`diet_id`) REFERENCES `diets` (`diet_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
