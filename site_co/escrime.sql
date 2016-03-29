-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 29 Mars 2016 à 17:05
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

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
-- Structure de la table `entrainement_tbl`
--

CREATE TABLE IF NOT EXISTS `entrainement_tbl` (
`id_entrainement` int(3) NOT NULL,
  `day_entrainement` text NOT NULL,
  `hour_debut_entrainement` time(6) NOT NULL,
  `hour_fin_entrainement` time(6) NOT NULL,
  `niveau_entrainement` varchar(255) NOT NULL,
  `armes_entrainement` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `entrainement_tbl`
--

INSERT INTO `entrainement_tbl` (`id_entrainement`, `day_entrainement`, `hour_debut_entrainement`, `hour_fin_entrainement`, `niveau_entrainement`, `armes_entrainement`) VALUES
(1, 'LUNDI', '17:30:00.000000', '18:30:00.000000', 'Enfants Débutants', 'fleuret'),
(2, 'MERCREDI', '17:30:00.000000', '18:30:00.000000', 'Enfants Débutants', 'fleuret'),
(3, 'JEUDI', '17:30:00.000000', '18:30:00.000000', 'Enfants Débutants', 'fleuret'),
(4, 'LUNDI', '18:15:00.000000', '19:30:00.000000', 'Moyens', 'fleuret'),
(5, 'MERCREDI', '18:15:00.000000', '19:30:00.000000', 'Moyens', 'fleuret'),
(6, 'JEUDI', '18:15:00.000000', '19:30:00.000000', 'Moyens', 'fleuret'),
(7, 'JEUDI', '18:30:00.000000', '20:00:00.000000', 'Grands et confirmés', 'fleuret'),
(8, 'LUNDI', '18:30:00.000000', '20:00:00.000000', 'Grands et confirmés', 'fleuret'),
(9, 'MERCREDI', '18:30:00.000000', '20:00:00.000000', 'Grands et confirmés', 'fleuret'),
(10, 'JEUDI', '20:00:00.000000', '21:30:00.000000', 'Adultes', 'épée');

-- --------------------------------------------------------

--
-- Structure de la table `grade_tbl`
--

CREATE TABLE IF NOT EXISTS `grade_tbl` (
`id_grade` int(11) NOT NULL,
  `type_grade` varchar(255) NOT NULL,
  `details_grade` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `manifestation_tbl`
--

CREATE TABLE IF NOT EXISTS `manifestation_tbl` (
`id_manifestation` int(10) NOT NULL,
  `id_manifestation_photos` int(10) NOT NULL,
  `date_manifestation` date NOT NULL,
  `type_manifestation` varchar(255) NOT NULL,
  `detail_manifestation` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `messagerie_tbl`
--

CREATE TABLE IF NOT EXISTS `messagerie_tbl` (
`id_message` int(10) NOT NULL,
  `id_users` int(10) NOT NULL,
  `date_message` date NOT NULL,
  `detail_message` varchar(500) NOT NULL,
  `reponse_message` varchar(500) NOT NULL,
  `titre_message` varchar(255) NOT NULL,
  `ref_message` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `photos_tbl`
--

CREATE TABLE IF NOT EXISTS `photos_tbl` (
`id_photos` int(10) NOT NULL,
  `url_photots` varchar(255) NOT NULL,
  `date_photos` date NOT NULL,
  `id_manifestation_photos` int(10) NOT NULL,
  `id_rubrique_photos` int(10) NOT NULL,
  `details_photos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rubrique_tbl`
--

CREATE TABLE IF NOT EXISTS `rubrique_tbl` (
`id_rubrique` int(10) NOT NULL,
  `id_rubrique_photos` int(10) NOT NULL,
  `date_rubrique` date NOT NULL,
  `detail_rubrique` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users_tbl`
--

CREATE TABLE IF NOT EXISTS `users_tbl` (
`id_users` int(3) NOT NULL,
  `users_sexe` int(1) NOT NULL,
  `users_lastname` varchar(255) NOT NULL,
  `users_firstname` varchar(255) NOT NULL,
  `users_mdp` varchar(10) NOT NULL,
  `users_email` varchar(255) NOT NULL,
  `users_licence` varchar(255) NOT NULL,
  `users_grade` int(10) NOT NULL,
  `users_photo_profil` varchar(255) NOT NULL,
  `users_profil` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users_tbl`
--

INSERT INTO `users_tbl` (`id_users`, `users_sexe`, `users_lastname`, `users_firstname`, `users_mdp`, `users_email`, `users_licence`, `users_grade`, `users_photo_profil`, `users_profil`) VALUES
(1, 1, 'elghandri', 'khaled', '1234', 'khaled59@hotmail.fr', '', 1, '', 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `entrainement_tbl`
--
ALTER TABLE `entrainement_tbl`
 ADD PRIMARY KEY (`id_entrainement`);

--
-- Index pour la table `grade_tbl`
--
ALTER TABLE `grade_tbl`
 ADD PRIMARY KEY (`id_grade`);

--
-- Index pour la table `manifestation_tbl`
--
ALTER TABLE `manifestation_tbl`
 ADD PRIMARY KEY (`id_manifestation`);

--
-- Index pour la table `messagerie_tbl`
--
ALTER TABLE `messagerie_tbl`
 ADD PRIMARY KEY (`id_message`);

--
-- Index pour la table `photos_tbl`
--
ALTER TABLE `photos_tbl`
 ADD PRIMARY KEY (`id_photos`);

--
-- Index pour la table `rubrique_tbl`
--
ALTER TABLE `rubrique_tbl`
 ADD PRIMARY KEY (`id_rubrique`);

--
-- Index pour la table `users_tbl`
--
ALTER TABLE `users_tbl`
 ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `entrainement_tbl`
--
ALTER TABLE `entrainement_tbl`
MODIFY `id_entrainement` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `grade_tbl`
--
ALTER TABLE `grade_tbl`
MODIFY `id_grade` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `manifestation_tbl`
--
ALTER TABLE `manifestation_tbl`
MODIFY `id_manifestation` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `messagerie_tbl`
--
ALTER TABLE `messagerie_tbl`
MODIFY `id_message` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `photos_tbl`
--
ALTER TABLE `photos_tbl`
MODIFY `id_photos` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `rubrique_tbl`
--
ALTER TABLE `rubrique_tbl`
MODIFY `id_rubrique` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users_tbl`
--
ALTER TABLE `users_tbl`
MODIFY `id_users` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
