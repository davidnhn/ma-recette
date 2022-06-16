-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 16 juin 2022 à 21:23
-- Version du serveur : 5.7.36
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `marecette`
--
CREATE DATABASE marecette;

-- --------------------------------------------------------

--
-- Structure de la table `util`
--

DROP TABLE IF EXISTS `util`;
CREATE TABLE IF NOT EXISTS `util` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `util`
--

INSERT INTO `util` (`id`, `prenom`, `nom`, `email`, `pseudo`, `mdp`) VALUES
(1, 'jojo', 'bernard', 'jojo@bernard.fr', 'jojo31', '$2y$10$F0QjOHBVdyOX5nzCtACC6uzSbROYyEAHtJfVpTIuwWdITPgpSa/jC'),
(2, 'coco', 'kiki', 'coco@coco.fr', 'mimi', '$2y$10$eQl21qgON3HC68nk6Ys3dekOCBl73cbPJoGxONsRyy8AQGpGl6BIC'),
(12, 'simon', 'roberto', 'aaaaaaa@ddddddddd.fr', 'Davitche', '$2y$10$1CpofGNjWP6n4oacWDgQLOUNjP6PIjt9Mq9LhVCMIGqT/WVW53U0C'),
(34, 'mama', 'licorne', 'licorne@adrar.fr', 'licorne', '$2y$10$6s9aspYvy/vvzTlE188GX.KxKZhdZT8/ZroC9.g7zwcVSw1VHubJ6'),
(35, 'mama', 'licorne', 'licorne@adrar.fr', 'licorne', '$2y$10$GNtfAnhDbToZCO4CMo4DO.uuEGTQjmsPXLM9uNZHuZ7Xyj/jPN0Ka'),
(36, 'david', 'nhn', 'david@david.fr', 'dvd', '$2y$10$cDKWZngmRXAbfQtGNmyYKeEWrTu/TX2XWwACzZIjZ5OaaZpu66xya'),
(37, 'annaelle', 'nah', 'nana@nana.fr', 'nana', '$2y$10$vLhA1McI1e733nsZe3s7yeA0ppApyjJYQJlF6RSHoptCg1iNy4H.K'),
(38, 'simon', 'nhn', 'simon@nhn.fr', 'simon', '$2y$10$Q1c5wPNlfHbV7u/.8aToOepzfb/9qEdwRT7D.zTEMZb.XZdq9QnS6'),
(39, 'david', 'nhn', 'ddd@ddd.com', 'david', '$2y$10$WPhKFkG/AAlyZ1Mzlo1.5OwK9E.BNOexgGq.aE1bhfb/p3wiwO6dm'),
(40, 'adrar', 'adrar', 'adrar@adrar.fr', 'adrar', '$2y$10$eWTSSC6ceNDlb7CUPRnMpejEa7AVVWmpkoaVmy8pFPeFt3rXZeE06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
