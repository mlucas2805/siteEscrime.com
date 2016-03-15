-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 11 Mars 2016 à 09:15
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `escrime`
--

-- --------------------------------------------------------

--
-- Structure de la table `grade_tbl`
--

CREATE TABLE IF NOT EXISTS `grade_tbl` (
  `id_grade` int(11) NOT NULL AUTO_INCREMENT,
  `type_grade` varchar(255) NOT NULL,
  `details_grade` varchar(500) NOT NULL,
  PRIMARY KEY (`id_grade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `manifestation_tbl`
--

CREATE TABLE IF NOT EXISTS `manifestation_tbl` (
  `id_manifestation` int(10) NOT NULL AUTO_INCREMENT,
  `id_manifestation_photos` int(10) NOT NULL,
  `date_manifestation` date NOT NULL,
  `type_manifestation` varchar(255) NOT NULL,
  `detail_manifestation` varchar(500) NOT NULL,
  PRIMARY KEY (`id_manifestation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `messagerie_tbl`
--

CREATE TABLE IF NOT EXISTS `messagerie_tbl` (
  `id_message` int(10) NOT NULL AUTO_INCREMENT,
  `id_users` int(10) NOT NULL,
  `date_message` date NOT NULL,
  `detail_message` varchar(500) NOT NULL,
  `reponse_message` varchar(500) NOT NULL,
  `titre_message` varchar(255) NOT NULL,
  `ref_message` int(10) NOT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `photos_tbl`
--

CREATE TABLE IF NOT EXISTS `photos_tbl` (
  `id_photos` int(10) NOT NULL AUTO_INCREMENT,
  `url_photots` varchar(255) NOT NULL,
  `date_photos` date NOT NULL,
  `id_manifestation_photos` int(10) NOT NULL,
  `id_rubrique_photos` int(10) NOT NULL,
  `details_photos` varchar(255) NOT NULL,
  PRIMARY KEY (`id_photos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rubrique_tbl`
--

CREATE TABLE IF NOT EXISTS `rubrique_tbl` (
  `id_rubrique` int(10) NOT NULL AUTO_INCREMENT,
  `id_rubrique_photos` int(10) NOT NULL,
  `date_rubrique` date NOT NULL,
  `detail_rubrique` varchar(500) NOT NULL,
  PRIMARY KEY (`id_rubrique`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users_tbl`
--

CREATE TABLE IF NOT EXISTS `users_tbl` (
  `id_users` int(3) NOT NULL AUTO_INCREMENT,
  `users_sexe` int(1) NOT NULL,
  `users_lastname` varchar(255) NOT NULL,
  `users_firstname` varchar(255) NOT NULL,
  `users_mdp` varchar(10) NOT NULL,
  `users_email` varchar(255) NOT NULL,
  `users_licence` varchar(255) NOT NULL,
  `users_grade` int(10) NOT NULL,
  `users_photo_profil` varchar(255) NOT NULL,
  `users_profil` int(2) NOT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users_tbl`
--

INSERT INTO `users_tbl` (`id_users`, `users_sexe`, `users_lastname`, `users_firstname`, `users_mdp`, `users_email`, `users_licence`, `users_grade`, `users_photo_profil`, `users_profil`) VALUES
(1, 1, 'elghandri', 'khaled', '1234', 'khaled59@hotmail.fr', '', 1, '', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
