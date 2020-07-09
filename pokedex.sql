-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 19, 2020 at 12:17 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokedex`
--

-- --------------------------------------------------------

--
-- Table structure for table `pokemon`
--

CREATE TABLE `pokemon` (
  `nom` varchar(25) NOT NULL,
  `PV` int(3) NOT NULL,
  `attaque` int(3) NOT NULL,
  `defense` int(3) NOT NULL,
  `vitesse` int(2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pokemon`
--

INSERT INTO `pokemon` (`nom`, `PV`, `attaque`, `defense`, `vitesse`, `image`) VALUES
('', 50, 10, 25, 6, 'logo.png'),
('singarayar', 50, 10, 25, 6, 'logo.png'),
('pikachuuuuuu', 50, 10, 5, 6, 'pikachu.png'),
('pikachuuuuuu', 50, 10, 5, 6, 'pikachu.png'),
('pikachuuuuuu', 50, 10, 5, 6, 'pikachu.png'),
('selim', 30, 10, 5, 8, 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Verifpassword` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`, `Verifpassword`, `email`) VALUES
(2, 'jeffrey95', '$2y$10$Nn0Sm4DH5qacrMxjYlAxzur9B5drmLJTLl1q7ez8.9YVY9PlSxHVG', '123456789', 'jeffreysingarayar@gmail.com'),
(3, 'eugène75', '$2y$10$dYlToSGurK7VkGgztY0wO.MM6iZGd.a7Pq1IA65MStj75wX6gnK/W', '123456789', 'eugenadoussi@gmail.com'),
(4, 'jeffrey95', '$2y$10$ELSlRCM/dWpdfSMxLjOPH.3Am6SPrkhiZNFJjTy.3sakOOtPKG2US', '123456789', 'jeffreysingarayar@gmail.com'),
(5, 'jeffrey95', '$2y$10$ZmqyAsK47D4mzkvux.KLVecIT5PyDXYIeQtQcBeElIeijJbMbaSQ.', '123456789', 'jeffreysingarayar@gmail.com'),
(6, 'jeffrey95', '$2y$10$PmvWg9bQiKbVQrLpQcbOUezuOhm5CFxr7y1JL8UiYAscC1jEjC4Uq', '123456789', 'jeffreysingarayar@gmail.com'),
(7, 'maxime755', '$2y$10$nctZ18TLlx.6XiSm5k0xFOTZoRqMBtZrEp8ZioI3sUkz6aEKzCKUe', '123456789', 'maxime@gmail.com'),
(8, 'jeffrey95', '$2y$10$aYPO3Z6wSoezQbflmiLt/.PNQ8UdW1EitnDCPxWV9LVy30IyC6voG', '123456789', 'jeffreysingarayar@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
