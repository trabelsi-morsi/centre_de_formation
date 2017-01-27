-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 20 Janvier 2017 à 12:11
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `centreformation`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(25) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `login`, `pass`) VALUES
(3, 'morsi', '847401aa96efc1aa3bb046ab463f68fc'),
(4, 'yessine', '43461ba9ca1ea5ff0cd3e445df92c777'),
(5, 's', 'fez');

-- --------------------------------------------------------

--
-- Structure de la table `calendrier`
--

CREATE TABLE IF NOT EXISTS `calendrier` (
  `id_cal` int(11) NOT NULL AUTO_INCREMENT,
  `datee` date NOT NULL,
  `heuredeb` time NOT NULL,
  PRIMARY KEY (`id_cal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `calendrier_groupe`
--

CREATE TABLE IF NOT EXISTS `calendrier_groupe` (
  `id_cg` int(11) NOT NULL AUTO_INCREMENT,
  `id_grp` int(11) NOT NULL,
  `id_cal` int(11) NOT NULL,
  `id_salle` int(11) NOT NULL,
  PRIMARY KEY (`id_cg`),
  UNIQUE KEY `id_cal` (`id_cal`),
  KEY `id_grp` (`id_grp`,`id_cal`,`id_salle`),
  KEY `id_salle` (`id_salle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `diplome`
--

CREATE TABLE IF NOT EXISTS `diplome` (
  `id_dip` int(11) NOT NULL AUTO_INCREMENT,
  `score` int(11) NOT NULL,
  `mention` varchar(100) NOT NULL,
  `datee` date NOT NULL,
  `id_ins` int(11) NOT NULL,
  PRIMARY KEY (`id_dip`),
  KEY `id_ins` (`id_ins`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `diplome`
--

INSERT INTO `diplome` (`id_dip`, `score`, `mention`, `datee`, `id_ins`) VALUES
(8, 50, 'bhbh', '2012-02-20', 9),
(9, 40, 'r', '0000-00-00', 9);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `id_etd` int(11) NOT NULL AUTO_INCREMENT,
  `cin` int(8) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `date_naiss` date NOT NULL,
  `photo` varchar(500) NOT NULL,
  PRIMARY KEY (`id_etd`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id_etd`, `cin`, `nom`, `prenom`, `tel`, `mail`, `date_naiss`, `photo`) VALUES
(13, 11031234, 'miledi', 'mohamed', '22945175', 'medmiledi@gmail.com', '2008-01-20', ''),
(17, 7777777, 'miledi3', 'mohamed', '22945175', 'medmiledi@gmail.com', '2012-01-20', 'Graduate-male-icon.png'),
(18, 7777777, 'miledi888', 'mohamed', '22945175', 'medmiledi@gmail.com', '2012-02-20', 'Graduate-male-icon.png'),
(19, 7777777, 'miledi', 'mohamed', '22945175', 'medmiledi@gmail.com', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Structure de la table `formateur`
--

CREATE TABLE IF NOT EXISTS `formateur` (
  `id_formateur` int(11) NOT NULL AUTO_INCREMENT,
  `cin` int(8) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `date_naiss` date NOT NULL,
  `photo` varchar(500) NOT NULL,
  `fraisheure` int(10) NOT NULL,
  `id_type` int(11) NOT NULL,
  PRIMARY KEY (`id_formateur`),
  KEY `id_type` (`id_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `formateur`
--

INSERT INTO `formateur` (`id_formateur`, `cin`, `nom`, `prenom`, `tel`, `mail`, `date_naiss`, `photo`, `fraisheure`, `id_type`) VALUES
(2, 11111111, 'miledi', 'mohamed', '22945175', 'medmiledi@gmail.com', '2012-01-20', '', 50, 1);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id_formation` int(11) NOT NULL AUTO_INCREMENT,
  `des_form` varchar(100) NOT NULL,
  `id_type` int(11) NOT NULL,
  PRIMARY KEY (`id_formation`),
  KEY `id_type` (`id_type`),
  KEY `id_type_2` (`id_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `des_form`, `id_type`) VALUES
(1, 'Android', 1),
(2, 'Php', 1),
(3, 'HTML5 & CSS3', 1);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE IF NOT EXISTS `groupe` (
  `id_grp` int(11) NOT NULL AUTO_INCREMENT,
  `des_grp` varchar(100) NOT NULL,
  `nbreheure` int(11) NOT NULL,
  `prixheure` int(11) NOT NULL,
  `fraisformateur` int(11) NOT NULL,
  `id_formation` int(11) NOT NULL,
  `id_formateur` int(11) NOT NULL,
  PRIMARY KEY (`id_grp`),
  KEY `id_formation` (`id_formation`),
  KEY `id_formateur` (`id_formateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `groupe`
--

INSERT INTO `groupe` (`id_grp`, `des_grp`, `nbreheure`, `prixheure`, `fraisformateur`, `id_formation`, `id_formateur`) VALUES
(4, 'html', 22, 16, 20, 1, 2),
(5, 'asp .NET', 25, 10, 20, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
  `id_ins` int(11) NOT NULL AUTO_INCREMENT,
  `id_grp` int(11) NOT NULL,
  `id_etd` int(11) NOT NULL,
  `prixfinal` int(11) NOT NULL,
  `remise` int(11) NOT NULL,
  PRIMARY KEY (`id_ins`),
  KEY `id_grp` (`id_grp`,`id_etd`),
  KEY `id_etd` (`id_etd`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`id_ins`, `id_grp`, `id_etd`, `prixfinal`, `remise`) VALUES
(9, 4, 13, 50, 0);

-- --------------------------------------------------------

--
-- Structure de la table `paiement_formateur`
--

CREATE TABLE IF NOT EXISTS `paiement_formateur` (
  `id_pai` int(11) NOT NULL AUTO_INCREMENT,
  `montant` int(11) NOT NULL,
  `datee` date NOT NULL,
  `id_grp` int(11) NOT NULL,
  PRIMARY KEY (`id_pai`),
  KEY `id_grp` (`id_grp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `reglement_etudiant`
--

CREATE TABLE IF NOT EXISTS `reglement_etudiant` (
  `id_regl` int(11) NOT NULL AUTO_INCREMENT,
  `montant` int(11) NOT NULL,
  `datee` date NOT NULL,
  `id_ins` int(11) NOT NULL,
  PRIMARY KEY (`id_regl`),
  KEY `id_ins` (`id_ins`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE IF NOT EXISTS `salle` (
  `id_salle` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`id_salle`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `salle`
--

INSERT INTO `salle` (`id_salle`, `nom`) VALUES
(2, 'sdfghj');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `des_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id_type`, `des_type`) VALUES
(1, 'Informatique'),
(2, 'Langue');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `calendrier_groupe`
--
ALTER TABLE `calendrier_groupe`
  ADD CONSTRAINT `calendrier_groupe_ibfk_1` FOREIGN KEY (`id_grp`) REFERENCES `groupe` (`id_grp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calendrier_groupe_ibfk_2` FOREIGN KEY (`id_cal`) REFERENCES `calendrier` (`id_cal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calendrier_groupe_ibfk_3` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id_salle`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `diplome`
--
ALTER TABLE `diplome`
  ADD CONSTRAINT `diplome_ibfk_1` FOREIGN KEY (`id_ins`) REFERENCES `inscription` (`id_ins`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `formateur`
--
ALTER TABLE `formateur`
  ADD CONSTRAINT `formateur_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `formation_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD CONSTRAINT `groupe_ibfk_1` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id_formation`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `groupe_ibfk_2` FOREIGN KEY (`id_formateur`) REFERENCES `formateur` (`id_formateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `inscription_ibfk_1` FOREIGN KEY (`id_grp`) REFERENCES `groupe` (`id_grp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscription_ibfk_2` FOREIGN KEY (`id_etd`) REFERENCES `etudiant` (`id_etd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `paiement_formateur`
--
ALTER TABLE `paiement_formateur`
  ADD CONSTRAINT `paiement_formateur_ibfk_1` FOREIGN KEY (`id_grp`) REFERENCES `groupe` (`id_grp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reglement_etudiant`
--
ALTER TABLE `reglement_etudiant`
  ADD CONSTRAINT `reglement_etudiant_ibfk_1` FOREIGN KEY (`id_ins`) REFERENCES `inscription` (`id_ins`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
