-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2021 at 10:34 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdotablier2`
--

-- --------------------------------------------------------

--
-- Table structure for table `recettes`
--

CREATE TABLE `recettes` (
  `id` int(11) NOT NULL,
  `NomRecette` varchar(255) NOT NULL,
  `biographie` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `difficulte` enum('Tres facile','Facile','moyenne','difficile','tres difficile') NOT NULL,
  `cout` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `temps` varchar(50) NOT NULL,
  `temps1` varchar(50) NOT NULL,
  `temps2` varchar(50) NOT NULL,
  `temps3` varchar(50) NOT NULL,
  `temps4` varchar(50) NOT NULL,
  `temps5` varchar(50) NOT NULL,
  `NBPersonne` enum('Personne','Piece','Portion','Biscuit') NOT NULL,
  `etape1` varchar(255) NOT NULL,
  `etape2` varchar(255) NOT NULL,
  `etape3` varchar(255) NOT NULL,
  `etape4` varchar(255) NOT NULL,
  `etape5` varchar(255) NOT NULL,
  `etape6` varchar(255) NOT NULL,
  `etape7` varchar(255) NOT NULL,
  `etape8` varchar(255) NOT NULL,
  `conseil` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recettes`
--

INSERT INTO `recettes` (`id`, `NomRecette`, `biographie`, `photo`, `difficulte`, `cout`, `pays`, `temps`, `temps1`, `temps2`, `temps3`, `temps4`, `temps5`, `NBPersonne`, `etape1`, `etape2`, `etape3`, `etape4`, `etape5`, `etape6`, `etape7`, `etape8`, `conseil`, `message`) VALUES
(3, 'Tarte de pomme', 'tarte de pomme', '15 (1).jpg', 'Facile', 'Budget-moyen', 'Europe', '3', '3', '2', '2', '2', '2', 'Portion', 'budget', 'achat', 'je', 'tu', 'il', 'nous', 'vous', 'ils', 'ok', 'merci'),
(4, 'Poulet DG', 'Le poulet directeur gÃ©nÃ©ral, un des plats les plus emblÃ©matiques du Cameroun !', '4.jpg', 'Facile', 'Budget-moyen', 'Afrique', '2', '3', '2', '2', '2', '2', 'Portion', 'Plonger le poulet dans de lâ€™eau ', 'bouillante salÃ©e avec l\'oignon', 'une carotte, une branche de cÃ©leri, ', 'Egoutter les morceaux et les sÃ©cher', 'Dans une poÃªle antiadhÃ©sive', 'chauffer de l\'huile neutre Ã  feu moyen', 'faire frire le poulet. RÃ©server.', 'Peler et couper les bananes plantain en rondelles dâ€™environ', 'C\'est un ragoÃ»t de poulet (frit)', ' C\'est une recette simple');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recettes`
--
ALTER TABLE `recettes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recettes`
--
ALTER TABLE `recettes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
