-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 09:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(80) NOT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `niveau` int(11) NOT NULL DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `mdp`, `prenom`, `nom`, `niveau`) VALUES
(12, 'Abdou', 'abdou', 'Abdou', '', 10),
(14, 'Gérard', '', 'Gérard', '', 10),
(16, 'abonne', '$2y$10$zw1LGd/UW5bGGolVJqh7J.uoiwTsBudWyhdzSIIyjZ9eCtSlmJ3mC', 'test', 'abonne', 10),
(17, 'admin', '$2y$10$yh.f1sAXhu8iFKPpqGADQexmGBhgW0xmRyr.1MZCEXV1ht2q53IyO', '', '', 50),
(18, 'mon psedo', 'unMDP', 'arti', 'marti', 10),
(19, 'mitra', '$2y$10$8iOZubQdTufBKU6yh3oEx.TF6k4GoObGjJtAlAElWs4dGVdwVGEeS', 'mitra', 'IZADI', 10),
(20, 'admin2', '$2y$10$GUDDjrWYEKTkKd9CAnVw1e1TtwZF6dtEFMcLDmYRMqgVwV6cyC.dG', 'Mitra', 'Izadi', 10),
(21, 'mauve21', '$2y$10$SoVU8Z2EQp.O1HVEnomFC.b5nDLYmONXbXo5mnQXceKiujMjSWZre', 'salut', 'Izadi', 10),
(22, 'admin23', '$2y$10$qil5pnfthyWPxARgH5YvAef2v57ruOrY6Z9hgQwsKDovgu917i.va', 'admin', 'moi', 10),
(23, 'mauve21mm', '$2y$10$qPDZUHzrsIauDEFlWfCW3Or9ltAqqKYGZRC7LkXTTGWxH/BhpWELW', 'ggggrezer', 'ADMIN', 10),
(24, 'admin12345', '$2y$10$f0F1ituYys9WNGkmHWV3gO2DACWWFWBxJiseGXqZEtcz.mywCTo3S', 'ggggrezer', 'Izadi', 10),
(25, 'salima', '$2y$10$k8elkZJ/kjSixXZzOz.KOenRROGjHOAN7I/RB20A.rddgxy.me4a6', 'salut', 'ADMIN', 10),
(26, 'mauve21mmkk', '$2y$10$P8SGWHm0LvabCnZdZXvWDOIP9OIkZlGXmLbcvRqfM4uDhfMyhE5E2', 'salut', 'MITRA IZADI', 10),
(27, 'admin2rtuo', '$2y$10$vMKbbugj1pRPSfUkBB57wO8BcSQda0XlnR/T5XaocHtQoctIu56xm', 'ggggrezer', 'ADMIN', 10),
(28, 'admingggjjj', '$2y$10$NnlAXcNgG5k3QrSAOk2O.eLqDVVU76piHo95vacXZZJQFqYO6fgfK', 'ADMIN', 'Izadi', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
