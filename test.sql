-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Ven 11 Avril 2014 à 23:44
-- Version du serveur :  5.5.36
-- Version de PHP :  5.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `victoire` int(11) NOT NULL,
  `defaite` int(11) NOT NULL,
  `cote` int(11) NOT NULL DEFAULT '1500',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `account`
--

INSERT INTO `account` (`id`, `login`, `password`, `victoire`, `defaite`, `cote`) VALUES
(1, 'root', '0000', 0, 0, 1500);

-- --------------------------------------------------------

--
-- Structure de la table `chat_history`
--

CREATE TABLE IF NOT EXISTS `chat_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login` varchar(15) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Contenu de la table `chat_history`
--

INSERT INTO `chat_history` (`id`, `time`, `login`, `message`) VALUES
(42, '2014-04-12 06:07:38', 'root', 'test'),
(43, '2014-04-12 06:14:07', 'root', 'testtroll'),
(44, '2014-04-12 06:14:46', 'root', 'sadasdasasada'),
(45, '2014-04-12 06:15:05', 'root', 'Bonjour je m''appelle jean pierreet je suis greviste'),
(46, '2014-04-12 06:17:45', 'root', 'TrollolololPokemon'),
(47, '2014-04-12 06:18:39', 'root', 'TrollolololPokemon'),
(48, '2014-04-12 06:19:30', 'root', 'trolllyolo'),
(49, '2014-04-12 06:22:02', 'root', 'trollyolo'),
(50, '2014-04-12 06:22:36', 'root', 'trollyolo'),
(51, '2014-04-12 06:25:22', 'root', 'trollyolo'),
(52, '2014-04-12 06:25:41', 'root', ''),
(53, '2014-04-12 06:25:48', 'root', 'yolopoke'),
(54, '2014-04-12 06:26:00', 'root', ''),
(55, '2014-04-12 06:26:08', 'root', 'trolltoll'),
(56, '2014-04-12 06:26:55', 'root', 'efgfdgdgfd'),
(57, '2014-04-12 06:27:07', 'root', 'efgfdgdgfd'),
(58, '2014-04-12 06:27:20', 'root', 'efgfdgdgfd'),
(59, '2014-04-12 06:28:44', 'root', 'salut bien ou bien?'),
(60, '2014-04-12 06:29:10', 'root', 'root'),
(61, '2014-04-12 06:30:15', 'root', 'poke'),
(62, '2014-04-12 06:32:06', 'root', 'root'),
(63, '2014-04-12 06:32:09', 'root', 'root');

-- --------------------------------------------------------

--
-- Structure de la table `membre_co`
--

CREATE TABLE IF NOT EXISTS `membre_co` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=235 ;

--
-- Contenu de la table `membre_co`
--

INSERT INTO `membre_co` (`id`, `login`) VALUES
(234, 'root');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
