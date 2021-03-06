-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 11:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_items`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(30) NOT NULL,
  `description_category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name_category`, `description_category`) VALUES
(1, 'consumables', 'Consumables are objects which, when ingested or consumed by a character, provide various effects. These items can be accessed through the \"Aid\" section of a players Pip-Boy menu.'),
(2, 'weapons', 'Contains all weapons in our DB'),
(3, 'armors', 'In Fallout 4, the wardrobe system allows the Sole Survivor to make up their own outfit from a variety of clothing and armor.');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id_item` int(50) NOT NULL,
  `name_item` varchar(50) NOT NULL,
  `description_item` varchar(300) NOT NULL,
  `weight_item` float NOT NULL,
  `id_category` int(50) NOT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id_item`, `name_item`, `description_item`, `weight_item`, `id_category`, `image`) VALUES
(3, 'Mascot head', 'The mascot head is a unique hat that can be worn with face apparel. It has a hole in one side, allowing the wearer\'s face to still be seen.', 1, 3, ''),
(5, 'Deathclaw omelette', 'A tasty wasteland omelette.', 0.1, 1, ''),
(6, 'Salisbury Steak', 'Saddle Up Salisbury Steaks are found in branded split-tone boxes that heal 30 Hit Points and add 9 rads upon consumption.', 0.5, 1, ''),
(7, 'Vault 111 jumpsuit', 'A total of three Vault 111 jumpsuits can be acquired', 1.2, 3, ''),
(8, 'The Problem Solver', 'A unique handmade rifle with the Furious Legendary effect which causes the damage of each round to increase with each consecutive hit.', 21.6, 2, ''),
(9, 'Flamer', 'The flamer in the Commonwealth differs notably from the versions in the Capital Wasteland and Mojave Desert.', 16.1, 2, ''),
(10, 'Survivor\'s Special', 'The Survivor\'s Special is a unique laser gun that bears the Bloodied effect which deals more damage the lower one\'s health is.', 4.8, 2, ''),
(11, 'Thirst Zapper', 'The Thirst Zapper is a water shooting weapon, in the shape of a Nuka-Cola bottle. This weapon is needed for shorting out Colter\'s power armor.', 2, 2, ''),
(12, 'Tesla rifle', 'Bearing the unique Lightning legendary effect, it fires an electrical discharge that arcs between targets and uses fusion cells as ammunition.', 8.1, 2, ''),
(13, 'Baseball grenade', 'Baseball grenades are hollowed out baseballs filled with oil and fertilizer, which act as an improvised explosive mix.', 1, 2, ''),
(14, 'Blood pack', 'The bloodpack is an IV bag of blood.', 0.1, 1, ''),
(15, 'Ice cold Nuka-Cherry', 'Ice cold Nuka-Cherry shares the same look as other bottles of Nuka-Cola but adds bright red color and a cherry flavoring.', 1, 1, ''),
(16, 'Nuka-Cola Victory', 'A variant of Nuka-Cola with an orange glow and a yellow-orange color, Nuka-Cola Victory is similar to the variant found in the Mojave Wasteland.', 1, 1, ''),
(17, 'Vault 81 cure', 'The Vault 81 cure is the only cure for the mole rat disease contracted after being bitten by a Vault 81 lab mole rat.', 0.3, 1, ''),
(18, 'Chinese stealth armor', 'The Chinese stealth armor is a piece of armor in the Fallout 4 Creation Club content \"Chinese Stealth Armor.\"', 24, 3, ''),
(19, 'Gas mask', 'A simple gas mask that covers the entire face. It is held on to the wearer by adjustable straps.', 3, 3, ''),
(49, 'Nuka-Cola', 'The best tasting cola you can find, in a Nuke shaped glass bottle.', 1, 1, 'public/619ea80311a69.png'),
(52, 'Fat Man', 'Fat Man is a Heavy Gun in Fallout 4. You need the Gun Nut and Science! Perk to improve this weapon.', 30.7, 2, 'public/619eae91e5561.png'),
(53, 'Power Armor', 'Power Armor is Armor in Fallout 4 that is an energized suit. It requires great Strength in order to be able to use and needs a Fusion Core to power it.', 102, 3, 'public/619eaf50efbf1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `fk_id_category` (`id_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id_item` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `fk_id_category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
