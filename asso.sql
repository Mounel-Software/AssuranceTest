-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 13 juil. 2020 à 03:35
-- Version du serveur :  5.7.26
-- Version de PHP :  5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `asso`
--

-- --------------------------------------------------------

--
-- Structure de la table `tclient`
--

DROP TABLE IF EXISTS `tclient`;
CREATE TABLE IF NOT EXISTS `tclient` (
  `IDC` int(11) NOT NULL AUTO_INCREMENT,
  `Prenom` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Sexe` varchar(255) NOT NULL,
  `DateNaissance` varchar(255) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Telephone` bigint(30) NOT NULL,
  `Codepostal` varchar(255) NOT NULL,
  `Adresse` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Tpermis` varchar(255) NOT NULL,
  `NumPermis` varchar(255) NOT NULL,
  `Nexperience` int(10) NOT NULL,
  `Prevoque` varchar(255) NOT NULL,
  `Pcontravention` varchar(255) NOT NULL,
  `kilometrage` bigint(30) NOT NULL,
  `Marque` varchar(255) NOT NULL,
  `Model` varchar(255) NOT NULL,
  PRIMARY KEY (`IDC`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tclient`
--

INSERT INTO `tclient` (`IDC`, `Prenom`, `Nom`, `Sexe`, `DateNaissance`, `Province`, `Ville`, `Telephone`, `Codepostal`, `Adresse`, `Email`, `Password`, `Tpermis`, `NumPermis`, `Nexperience`, `Prevoque`, `Pcontravention`, `kilometrage`, `Marque`, `Model`) VALUES
(1, 'Alassane', 'boukoum', '', '', 'Quebéc', 'Montreal', 4389325309, 'H4V2V3', '5140 Avenue Randall\r\n11', 'alboukoum@gmail.com', 'test', 'Permanent', '145879', 10, 'Non', 'Non', 200000, 'Honda', 'CR-V'),
(11, 'mounel', 'dff', '', '', 'Quebéc', '', 45325878965, '', '				    				      ', 'alboukoum@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'Probatoir', '', 5, '', '', 100000, '', ''),
(10, 'Alassane2', 'boukoum', '', '', 'Quebéc', 'Montreal', 4389325309, 'H4V2V3', '5140 Avenue Randall\r\n11', 'alboukoum@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'Permanent', '', 10, '', '', 100000, '', ''),
(9, 'alassane27', 'Daff2', '0', '2001-01-31', 'Quebéc', 'Montreal', 5149723178, 'h2n1w4', '				    				    				    				    				    				    				    				    				    				    				    				    				    				    				    		9175 rue meunier		  \r\n				      				      				      				      				      				      				      				      				      				      				      				      				      				      				      				      ', 'alboukoum@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'Probatoir', '145879', 18, 'Non', 'Oui', 1000000, 'Toyota', 'CR-V');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
