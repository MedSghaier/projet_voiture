-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 23 oct. 2018 à 02:48
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `disponibilite`
--

DROP TABLE IF EXISTS `disponibilite`;
CREATE TABLE IF NOT EXISTS `disponibilite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_v` int(11) DEFAULT NULL,
  `date_d` date NOT NULL,
  `date_f` date NOT NULL,
  `dispo` int(11) NOT NULL,
  `nom_loc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_v` (`id_v`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `disponibilite`
--

INSERT INTO `disponibilite` (`id`, `id_v`, `date_d`, `date_f`, `dispo`, `nom_loc`) VALUES
(1, 10, '2017-01-18', '2017-01-19', 1, 'chy'),
(2, 10, '2018-10-02', '2018-10-05', 1, 'Client'),
(3, 10, '2018-10-23', '2018-10-25', 1, 'Client');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `avatar` text,
  `connecte` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `login`, `mdp`, `mail`, `type`, `avatar`, `connecte`) VALUES
(2, 'Méaoui', 'Yassine', 'yassine', 'ab4f63f9ac65152575886860dde480a1', 'yassine@gmail.com', 'Admin', 'uploads/users/654853-user-men-2-512.png', '1'),
(3, 'Client', 'Client', 'client', 'ab4f63f9ac65152575886860dde480a1', 'client@gmail.com', 'Client', 'uploads/users/_318-9118.jpg', '0');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(255) DEFAULT NULL,
  `marque` varchar(255) DEFAULT NULL,
  `puissance` int(255) DEFAULT NULL,
  `nbr_place` int(255) DEFAULT NULL,
  `type_boite` varchar(255) DEFAULT NULL,
  `prix` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `avatar` text,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`id`, `matricule`, `marque`, `puissance`, `nbr_place`, `type_boite`, `prix`, `date`, `avatar`, `type`) VALUES
(1, '177tu724', 'toyota', 77, 5, 'mauelle', '160', '2017-01-14 18:24:42', 'uploads/voitures/toyota.jpg', 0),
(2, '144tu4485', 'golf6', 7, 5, 'mauelle', '160', '2017-01-14 18:26:51', 'uploads/voitures/golf.jpg', 0),
(3, '180tu7778', 'symbole', 5, 5, 'mauelle', '60', '2017-01-14 18:30:02', 'uploads/voitures/IMG_6-prixspecs.jpg', 0),
(4, '155tu1558', 'Bipper', 6, 5, 'auto', '160', '2017-01-14 18:33:34', 'uploads/voitures/S7-modele--peugeot-bipper.jpg', 0),
(5, '134tu5799', 'peugeot 208', 5, 5, 'mauelle', '50', '2017-01-14 18:35:59', 'uploads/voitures/PEUGEOT-208-AV-AVANT-750x410.jpg', 0),
(6, '155tu5558', 'peugeot 308', 6, 5, 'mauelle', '70', '2017-01-14 18:37:07', 'uploads/voitures/V3DImage.jpg', 0),
(7, '180tu 2257', 'kia rio', 5, 5, 'manuelle', '60', '2017-01-15 16:57:00', 'uploads/voitures/91.jpg', 0),
(8, '192tu881', 'kia cerato', 9, 5, 'auto', '90', '2017-01-15 17:00:24', 'uploads/voitures/Cerato800x320px_1.png', 0),
(10, '192tu1113', 'fiat punto', 5, 5, 'manuelle', '60', '2017-01-16 01:44:44', 'uploads/voitures/S7-modele--fiat-grande-punto.jpg', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
