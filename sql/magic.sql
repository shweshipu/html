-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2018 at 01:29 PM
-- Server version: 10.1.26-MariaDB-0+deb9u1
-- PHP Version: 7.0.27-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stream`
--

-- --------------------------------------------------------

--
-- Table structure for table `magic`
--

CREATE TABLE `magic` (
  `id` int(16) NOT NULL,
  `name` varchar(64) NOT NULL,
  `mana_cost` varchar(20) NOT NULL,
  `rarity` varchar(1) NOT NULL,
  `card_set` varchar(32) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `magic`
--

INSERT INTO `magic` (`id`, `name`, `mana_cost`, `rarity`, `card_set`, `price`) VALUES
(1, 'ornithopter', '0', 'C', 'idk', 4000),
(2, 'Raging Goblin', 'R', 'C', 'M?', 1000),
(3, 'a card', 'a', 'a', 'a', 0),
(4, 'ornithopter', '0', 'C', 'idk', 4000),
(5, 'Raging Goblin', 'R', 'C', 'M?', 1000),
(6, 'a card', 'a', 'a', 'a', 0),
(7, 'curl http://gatherer.wizards.com/Pages/Card/Details.aspx?multive', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `magic`
--
ALTER TABLE `magic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `magic`
--
ALTER TABLE `magic`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
