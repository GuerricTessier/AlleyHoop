-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 19 Juillet 2016 à 06:05
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `alleyhoop`
--

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NomEquipe` varchar(100) NOT NULL,
  `VilleEquipe` varchar(100) DEFAULT NULL,
  `IdUsers` int(11) DEFAULT NULL,
  `DateCreationEquipe` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `equipe`
--

INSERT INTO `equipe` (`Id`, `NomEquipe`, `VilleEquipe`, `IdUsers`, `DateCreationEquipe`) VALUES
(1, 'Test', 'Test', 1, '2016-06-25'),
(2, 'azerty', 'azerty', NULL, NULL),
(3, 'hattde votre équipe', 'hatt', NULL, NULL),
(4, 'Patator', 'Patator', NULL, NULL),
(5, 'LOULOU', 'LOULOU', 15, NULL),
(6, 'GR', 'GR', 17, NULL),
(7, 'Gloups', 'Gloups', 18, NULL),
(8, 'TOTO', 'TOTO', 19, NULL),
(9, 'TOTO', 'TOTO', 19, NULL),
(10, 'Coeur', 'Coeur', 21, NULL),
(11, 'Coeur', 'Coeur', 21, NULL),
(12, 'Coeur', 'Coeur', 21, NULL),
(13, 'Poufpouf', 'Poufpouf', 24, NULL),
(14, 'Brexit', 'Brexit', 25, NULL),
(15, 'Frexit', 'Frexit', 26, NULL),
(16, 'SpainXite', 'SpainXite', 27, NULL),
(17, 'Gudo', 'Gudo', 28, NULL),
(18, 'OMG', 'OMG', 29, NULL),
(19, 'Pluie', 'Pluie', 30, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `equipefinance`
--

DROP TABLE IF EXISTS `equipefinance`;
CREATE TABLE IF NOT EXISTS `equipefinance` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Solde` int(11) NOT NULL,
  `IdEquipe` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `equipefinance`
--

INSERT INTO `equipefinance` (`Id`, `Solde`, `IdEquipe`) VALUES
(1, 1000000, 1),
(2, 1000000, 19);

-- --------------------------------------------------------

--
-- Structure de la table `equipefinancehistorique`
--

DROP TABLE IF EXISTS `equipefinancehistorique`;
CREATE TABLE IF NOT EXISTS `equipefinancehistorique` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `IdEquipeFinance` int(11) DEFAULT NULL,
  `TypeTransaction` varchar(100) DEFAULT NULL,
  `SigneTransaction` int(11) NOT NULL,
  `MontantTransaction` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `joueurs`
--

DROP TABLE IF EXISTS `joueurs`;
CREATE TABLE IF NOT EXISTS `joueurs` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NomJoueur` varchar(100) NOT NULL,
  `IdEquipe` int(11) DEFAULT NULL,
  `PhotoJoueur` varchar(250) DEFAULT NULL,
  `NationaliteJoueur` varchar(100) NOT NULL,
  `DateNaissance` date DEFAULT NULL,
  `Taille` int(11) NOT NULL,
  `Forme` int(11) NOT NULL,
  `Experience` int(11) NOT NULL,
  `Temperament` int(11) NOT NULL,
  `Vitesse` int(11) NOT NULL,
  `Dribble` int(11) NOT NULL,
  `Passe` int(11) NOT NULL,
  `Shoot` int(11) NOT NULL,
  `Dunk` int(11) NOT NULL,
  `Defense` int(11) NOT NULL,
  `Actif` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `joueurs`
--

INSERT INTO `joueurs` (`Id`, `NomJoueur`, `IdEquipe`, `PhotoJoueur`, `NationaliteJoueur`, `DateNaissance`, `Taille`, `Forme`, `Experience`, `Temperament`, `Vitesse`, `Dribble`, `Passe`, `Shoot`, `Dunk`, `Defense`, `Actif`) VALUES
(1, 'Loic Gobert', NULL, NULL, 'Anglaise', NULL, 205, 30, 94, 4, 76, 61, 77, 85, 78, 49, 1),
(2, 'Loic Le Bron', NULL, NULL, 'Américaine', NULL, 181, 91, 32, 5, 28, 46, 13, 53, 37, 80, 1),
(3, 'Tony Mayer', NULL, NULL, 'Allemande', NULL, 175, 36, 75, 5, 73, 71, 44, 82, 99, 2, 1),
(4, 'Yannick Le Bron', NULL, NULL, 'Anglaise', NULL, 210, 20, 70, 1, 86, 45, 12, 64, 33, 91, 1),
(5, 'Prigent Fournier', NULL, NULL, 'Espagnole', NULL, 190, 27, 13, 3, 34, 43, 77, 8, 49, 79, 1),
(6, 'Vincent Fournier', NULL, NULL, 'Américaine', NULL, 203, 83, 96, 2, 42, 93, 16, 32, 14, 4, 1),
(7, 'Pierre Mayer', NULL, NULL, 'Allemande', NULL, 201, 22, 38, 2, 14, 100, 70, 4, 83, 8, 1),
(8, 'Jean Mayer', NULL, NULL, 'Allemande', NULL, 198, 60, 53, 5, 49, 39, 64, 4, 77, 35, 1),
(9, 'Jean Mayer', NULL, NULL, 'Américaine', NULL, 204, 46, 34, 1, 67, 60, 22, 98, 23, 2, 1),
(10, 'Loic Jordan', NULL, NULL, 'Américaine', NULL, 199, 90, 56, 2, 7, 39, 14, 9, 14, 60, 1),
(11, 'Vincent Leroy', NULL, NULL, 'Américaine', NULL, 197, 45, 68, 4, 8, 13, 71, 65, 3, 95, 1),
(12, 'Yannick Fournier', NULL, NULL, 'Française', NULL, 197, 45, 68, 2, 37, 36, 21, 35, 92, 91, 1),
(13, 'Jean Jordan', NULL, NULL, 'Anglaise', NULL, 209, 63, 64, 4, 83, 97, 60, 1, 38, 17, 1),
(14, 'Tony Leroy', NULL, NULL, 'Allemande', NULL, 200, 8, 73, 2, 58, 31, 14, 5, 22, 47, 1),
(15, 'Prigent Lee', NULL, NULL, 'Espagnole', NULL, 180, 15, 85, 2, 50, 70, 19, 100, 6, 72, 1),
(16, 'Jean Lauvergne', NULL, NULL, 'Allemande', NULL, 191, 46, 51, 4, 60, 59, 67, 52, 38, 32, 1),
(17, 'Yannick Leroy', NULL, NULL, 'Anglaise', NULL, 175, 63, 100, 2, 52, 88, 37, 26, 17, 9, 1),
(18, 'Jean Lee', NULL, NULL, 'Espagnole', NULL, 183, 85, 55, 4, 79, 65, 76, 92, 72, 11, 1),
(19, 'Jean Le Bron', NULL, NULL, 'Anglaise', NULL, 186, 91, 62, 1, 89, 79, 37, 92, 90, 100, 1),
(20, 'Vincent Tessier', NULL, NULL, 'Allemande', NULL, 183, 86, 85, 1, 76, 79, 36, 2, 25, 81, 1),
(21, 'Pierre Lee', NULL, NULL, 'Allemande', NULL, 201, 80, 87, 3, 97, 18, 51, 32, 30, 12, 1),
(22, 'Henri Leroy', NULL, NULL, 'Française', NULL, 177, 17, 62, 1, 5, 89, 10, 92, 48, 49, 1),
(23, 'Loic Fournier', NULL, NULL, 'Américaine', NULL, 195, 83, 22, 1, 20, 1, 96, 76, 1, 86, 1),
(24, 'Tony Lee', NULL, NULL, 'Française', NULL, 196, 35, 5, 5, 95, 19, 12, 83, 12, 8, 1),
(25, 'Evan Jordan', NULL, NULL, 'Allemande', NULL, 187, 99, 23, 2, 89, 21, 48, 28, 100, 10, 1),
(26, 'Pierre Leroy', NULL, NULL, 'Anglaise', NULL, 196, 52, 3, 5, 19, 100, 76, 77, 85, 8, 1),
(27, 'Yannick Gobert', NULL, NULL, 'Française', NULL, 205, 49, 34, 4, 91, 45, 18, 37, 35, 91, 1),
(28, 'Evan Leroy', NULL, NULL, 'Espagnole', NULL, 196, 16, 95, 2, 76, 49, 31, 40, 8, 35, 1),
(29, 'Loic Jordan', NULL, NULL, 'Espagnole', NULL, 195, 53, 56, 3, 50, 82, 25, 74, 99, 37, 1),
(30, 'Evan Leroy', NULL, NULL, 'Américaine', NULL, 197, 85, 38, 3, 57, 44, 81, 69, 67, 84, 1),
(31, 'Dimitry Mayer', NULL, NULL, 'Allemande', NULL, 198, 100, 23, 4, 99, 69, 75, 8, 41, 24, 1),
(32, 'Tony Lauvergne', NULL, NULL, 'Française', NULL, 206, 1, 89, 3, 29, 93, 76, 72, 72, 35, 1),
(33, 'Pierre Lauvergne', NULL, NULL, 'Allemande', NULL, 196, 27, 81, 1, 53, 35, 30, 79, 48, 78, 1),
(34, 'Pierre Lauvergne', NULL, NULL, 'Américaine', NULL, 193, 64, 76, 2, 3, 18, 87, 40, 29, 26, 1),
(35, 'Loic Mayer', NULL, NULL, 'Espagnole', NULL, 209, 94, 59, 3, 90, 84, 89, 75, 15, 44, 1),
(36, 'Vincent Gobert', NULL, NULL, 'Américaine', NULL, 191, 11, 72, 3, 13, 22, 82, 25, 15, 29, 1),
(37, 'Dimitry Lee', NULL, NULL, 'Espagnole', NULL, 180, 56, 46, 4, 19, 65, 58, 3, 20, 67, 1),
(38, 'Vincent Gobert', NULL, NULL, 'Anglaise', NULL, 178, 86, 75, 1, 90, 70, 1, 11, 54, 29, 1),
(39, 'Vincent Le Bron', NULL, NULL, 'Allemande', NULL, 182, 41, 64, 4, 61, 49, 31, 71, 3, 61, 1),
(40, 'Yannick Fournier', NULL, NULL, 'Anglaise', NULL, 210, 19, 79, 5, 37, 58, 32, 95, 94, 90, 1),
(41, 'Evan Lauvergne', NULL, NULL, 'Anglaise', NULL, 192, 24, 47, 1, 20, 5, 58, 55, 36, 89, 1),
(42, 'Yannick Fournier', NULL, NULL, 'Allemande', NULL, 201, 98, 47, 5, 4, 95, 84, 55, 78, 40, 1),
(43, 'Evan Leroy', NULL, NULL, 'Anglaise', NULL, 189, 100, 11, 5, 59, 73, 24, 81, 3, 34, 1),
(44, 'Henri Leroy', NULL, NULL, 'Américaine', NULL, 195, 46, 93, 3, 61, 72, 63, 30, 20, 39, 1),
(45, 'Loic Gobert', NULL, NULL, 'Anglaise', NULL, 185, 64, 31, 2, 77, 40, 25, 94, 69, 78, 1),
(46, 'Pierre Mayer', NULL, NULL, 'Américaine', NULL, 183, 96, 50, 4, 78, 41, 45, 93, 84, 56, 1),
(47, 'Evan Leroy', NULL, NULL, 'Américaine', NULL, 210, 81, 20, 5, 82, 15, 40, 39, 61, 73, 1),
(48, 'Evan Jordan', NULL, NULL, 'Anglaise', NULL, 201, 64, 49, 5, 95, 87, 57, 27, 53, 47, 1),
(49, 'Dimitry Mayer', NULL, NULL, 'Américaine', NULL, 202, 63, 96, 2, 64, 5, 7, 30, 39, 18, 1),
(50, 'Prigent Gobert', NULL, NULL, 'Allemande', NULL, 210, 27, 93, 3, 98, 6, 44, 97, 7, 25, 1),
(51, 'Yannick Lee', NULL, NULL, 'Espagnole', NULL, 208, 43, 65, 1, 75, 86, 100, 29, 74, 36, 1),
(52, 'Vincent Le Bron', NULL, NULL, 'Anglaise', NULL, 198, 96, 31, 1, 96, 75, 49, 32, 1, 38, 1),
(53, 'Loic Tessier', NULL, NULL, 'Allemande', NULL, 199, 53, 88, 4, 1, 83, 1, 21, 20, 44, 1),
(54, 'Evan Fournier', NULL, NULL, 'Anglaise', NULL, 204, 89, 36, 1, 97, 34, 89, 90, 32, 43, 1),
(55, 'Jean Leroy', NULL, NULL, 'Allemande', NULL, 201, 96, 66, 1, 36, 44, 76, 87, 90, 33, 1),
(56, 'Vincent Lee', NULL, NULL, 'Anglaise', NULL, 206, 12, 75, 3, 76, 57, 24, 42, 23, 82, 1),
(57, 'Henri Le Bron', NULL, NULL, 'Allemande', NULL, 182, 20, 5, 2, 60, 10, 52, 79, 32, 40, 1),
(58, 'Pierre Lee', NULL, NULL, 'Américaine', NULL, 177, 28, 88, 4, 60, 25, 40, 42, 92, 56, 1),
(59, 'Pierre Leroy', NULL, NULL, 'Anglaise', NULL, 186, 98, 96, 2, 11, 98, 90, 96, 4, 24, 1),
(60, 'Loic Jordan', NULL, NULL, 'Espagnole', NULL, 192, 35, 63, 1, 93, 5, 16, 4, 30, 1, 1),
(61, 'Henri Lauvergne', NULL, NULL, 'Espagnole', NULL, 178, 98, 92, 1, 64, 69, 60, 60, 48, 41, 1),
(62, 'Pierre Mayer', NULL, NULL, 'Allemande', NULL, 196, 41, 9, 5, 21, 23, 6, 76, 73, 62, 1),
(63, 'Evan Jordan', NULL, NULL, 'Française', NULL, 181, 60, 77, 5, 99, 8, 15, 91, 65, 18, 1),
(64, 'Tony Lee', NULL, NULL, 'Américaine', NULL, 178, 37, 31, 2, 57, 41, 10, 16, 80, 69, 1),
(65, 'Pierre Fournier', NULL, NULL, 'Anglaise', NULL, 194, 70, 46, 5, 83, 96, 69, 77, 89, 30, 1),
(66, 'Evan Jordan', NULL, NULL, 'Anglaise', NULL, 200, 75, 7, 1, 65, 27, 48, 64, 8, 8, 1),
(67, 'Jean Jordan', NULL, NULL, 'Anglaise', NULL, 184, 40, 80, 5, 44, 84, 71, 56, 68, 74, 1),
(68, 'Tony Gobert', NULL, NULL, 'Anglaise', NULL, 204, 40, 62, 2, 27, 37, 39, 23, 84, 5, 1),
(69, 'Dimitry Gobert', NULL, NULL, 'Espagnole', NULL, 185, 73, 16, 4, 41, 74, 77, 86, 29, 43, 1),
(70, 'Jean Tessier', NULL, NULL, 'Américaine', NULL, 184, 27, 43, 1, 25, 83, 73, 28, 82, 91, 1),
(71, 'Jean Le Bron', NULL, NULL, 'Allemande', NULL, 177, 48, 27, 1, 45, 85, 30, 25, 61, 2, 1),
(72, 'Evan Mayer', NULL, NULL, 'Espagnole', NULL, 182, 15, 92, 1, 12, 15, 88, 23, 99, 83, 1),
(73, 'Tony Lauvergne', NULL, NULL, 'Anglaise', NULL, 193, 89, 97, 5, 9, 37, 31, 99, 87, 64, 1),
(74, 'Loic Mayer', NULL, NULL, 'Espagnole', NULL, 198, 43, 26, 5, 88, 89, 42, 38, 29, 57, 1),
(75, 'Pierre Lauvergne', NULL, NULL, 'Américaine', NULL, 195, 43, 91, 1, 48, 20, 16, 83, 40, 61, 1),
(76, 'Pierre Gobert', NULL, NULL, 'Allemande', NULL, 188, 84, 5, 1, 72, 47, 92, 63, 36, 24, 1),
(77, 'Tony Le Bron', NULL, NULL, 'Anglaise', NULL, 210, 53, 36, 5, 9, 71, 28, 74, 37, 26, 1),
(78, 'Yannick Lee', NULL, NULL, 'Française', NULL, 198, 21, 14, 2, 85, 90, 64, 19, 34, 3, 1),
(79, 'Dimitry Gobert', NULL, NULL, 'Française', NULL, 182, 35, 93, 3, 50, 48, 98, 65, 53, 60, 1),
(80, 'Jean Leroy', NULL, NULL, 'Américaine', NULL, 208, 20, 34, 4, 17, 54, 35, 39, 55, 99, 1),
(81, 'Evan Jordan', NULL, NULL, 'Espagnole', NULL, 207, 50, 31, 1, 13, 9, 15, 21, 99, 15, 1),
(82, 'Yannick Fournier', NULL, NULL, 'Américaine', NULL, 197, 7, 18, 3, 3, 84, 99, 40, 30, 76, 1),
(83, 'Dimitry Jordan', NULL, NULL, 'Allemande', NULL, 208, 83, 4, 5, 98, 80, 1, 54, 96, 60, 1),
(84, 'Pierre Leroy', NULL, NULL, 'Anglaise', NULL, 208, 43, 65, 4, 5, 8, 50, 99, 63, 32, 1),
(85, 'Pierre Gobert', NULL, NULL, 'Allemande', NULL, 210, 14, 27, 4, 42, 36, 88, 98, 47, 64, 1),
(86, 'Pierre Gobert', NULL, NULL, 'Anglaise', NULL, 191, 98, 97, 2, 76, 17, 55, 25, 3, 74, 1),
(87, 'Vincent Fournier', NULL, NULL, 'Américaine', NULL, 184, 96, 48, 5, 89, 74, 94, 85, 16, 68, 1),
(88, 'Evan Gobert', NULL, NULL, 'Française', NULL, 175, 27, 32, 3, 45, 32, 24, 39, 22, 93, 1),
(89, 'Dimitry Jordan', NULL, NULL, 'Française', NULL, 190, 29, 23, 1, 68, 86, 95, 16, 1, 59, 1),
(90, 'Dimitry Lauvergne', NULL, NULL, 'Américaine', NULL, 190, 42, 60, 4, 87, 87, 92, 44, 87, 42, 1),
(91, 'Pierre Le Bron', NULL, NULL, 'Allemande', NULL, 180, 34, 95, 5, 69, 39, 100, 42, 10, 45, 1),
(92, 'Loic Fournier', NULL, NULL, 'Allemande', NULL, 183, 92, 19, 3, 98, 98, 89, 6, 40, 5, 1),
(93, 'Evan Leroy', NULL, NULL, 'Espagnole', NULL, 210, 30, 65, 4, 14, 44, 31, 34, 35, 33, 1),
(94, 'Loic Gobert', NULL, NULL, 'Allemande', NULL, 190, 35, 67, 4, 72, 40, 19, 21, 66, 78, 1),
(95, 'Dimitry Tessier', NULL, NULL, 'Américaine', NULL, 177, 7, 68, 5, 36, 35, 92, 60, 25, 100, 1),
(96, 'Jean Mayer', NULL, NULL, 'Allemande', NULL, 182, 11, 60, 4, 73, 26, 31, 97, 76, 40, 1),
(97, 'Evan Fournier', NULL, NULL, 'Française', NULL, 205, 1, 49, 4, 51, 44, 45, 61, 68, 71, 1),
(98, 'Jean Mayer', NULL, NULL, 'Américaine', NULL, 203, 23, 26, 3, 14, 74, 97, 26, 75, 29, 1),
(99, 'Tony Leroy', NULL, NULL, 'Française', NULL, 209, 73, 38, 1, 36, 72, 90, 24, 58, 92, 1),
(100, 'Prigent Le Bron', NULL, NULL, 'Américaine', NULL, 176, 6, 40, 2, 29, 89, 84, 59, 40, 18, 1),
(101, 'Henri Tessier', NULL, NULL, 'Anglaise', NULL, 202, 77, 23, 3, 2, 70, 33, 57, 75, 7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `joueursnationalite`
--

DROP TABLE IF EXISTS `joueursnationalite`;
CREATE TABLE IF NOT EXISTS `joueursnationalite` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nationalite` varchar(25) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `joueursnationalite`
--

INSERT INTO `joueursnationalite` (`Id`, `Nationalite`) VALUES
(1, 'Française'),
(2, 'Américaine'),
(3, 'Anglaise'),
(4, 'Espagnole'),
(5, 'Allemande');

-- --------------------------------------------------------

--
-- Structure de la table `joueursnom`
--

DROP TABLE IF EXISTS `joueursnom`;
CREATE TABLE IF NOT EXISTS `joueursnom` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(25) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `joueursnom`
--

INSERT INTO `joueursnom` (`Id`, `Nom`) VALUES
(1, 'Tessier'),
(2, 'Fournier'),
(3, 'Jordan'),
(4, 'Fournier'),
(5, 'Lauvergne'),
(6, 'Le Bron'),
(7, 'Gobert'),
(8, 'Lee'),
(9, 'Mayer'),
(10, 'Leroy');

-- --------------------------------------------------------

--
-- Structure de la table `joueursprenom`
--

DROP TABLE IF EXISTS `joueursprenom`;
CREATE TABLE IF NOT EXISTS `joueursprenom` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Prenom` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `joueursprenom`
--

INSERT INTO `joueursprenom` (`Id`, `Prenom`) VALUES
(1, 'Pierre'),
(2, 'Jean'),
(3, 'Henri'),
(4, 'Prigent'),
(5, 'Dimitry'),
(6, 'Loic'),
(7, 'Vincent'),
(8, 'Tony'),
(9, 'Yannick'),
(10, 'Evan');

-- --------------------------------------------------------

--
-- Structure de la table `transferts`
--

DROP TABLE IF EXISTS `transferts`;
CREATE TABLE IF NOT EXISTS `transferts` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `IdJoueurs` int(11) NOT NULL,
  `DateAchat` date NOT NULL,
  `Montant` int(11) NOT NULL,
  `IdEquipeVend` int(11) NOT NULL,
  `IdEquipeAchat` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Pseudo` varchar(25) NOT NULL,
  `MotDePasse` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`Id`, `Pseudo`, `MotDePasse`) VALUES
(1, 'Grick', 'f0ll1e'),
(2, 'Gaelle', 'Gaelle'),
(3, 'Guerric', 'Test'),
(8, 'QQ', 'QQ'),
(7, 'QQ', 'QQ'),
(9, 'QQ', 'QQ'),
(10, 'RR', 'RR'),
(11, 'VV', 'VV'),
(12, 'FF', 'FF'),
(13, 'hatt', 'hatt'),
(14, 'Patator', 'Patator'),
(15, 'LOULOU', 'LOULOU'),
(16, 'LOULOU', 'LOULOU'),
(17, 'GR', 'GR'),
(18, 'Gloups', 'Gloups'),
(19, 'TOTO', 'TOTO'),
(20, 'TOTO', 'TOTO'),
(21, 'Coeur', 'Coeur'),
(22, 'Coeur', 'Coeur'),
(23, 'Coeur', 'Coeur'),
(24, 'Poufpouf', 'Poufpouf'),
(25, 'Brexit', 'Brexit'),
(26, 'Frexit', 'Frexit'),
(27, 'SpainXite', 'SpainXite'),
(28, 'Gudo', 'Gudo'),
(29, 'OMG', 'OMG'),
(30, 'Pluie', 'Pluie');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
