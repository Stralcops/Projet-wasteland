-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 06 jan. 2019 à 17:03
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wasteland`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_mob`
--

DROP TABLE IF EXISTS `t_mob`;
CREATE TABLE IF NOT EXISTS `t_mob` (
  `mob_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_mob` varchar(60) NOT NULL,
  `hp_mob` int(11) NOT NULL,
  `chp_mob` int(11) NOT NULL,
  `psy_mob` int(11) NOT NULL,
  `cpsy_mob` int(11) NOT NULL,
  PRIMARY KEY (`mob_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_mob`
--

INSERT INTO `t_mob` (`mob_id`, `nom_mob`, `hp_mob`, `chp_mob`, `psy_mob`, `cpsy_mob`) VALUES
(13, 'decapode ', 12, 0, 0, 0),
(14, 'decapode ', 12, 0, 0, 0),
(12, 'decapode ', 12, 0, 0, 0),
(11, 'decapode ', 12, 0, 0, 0),
(15, 'decapode ', 12, 0, 0, 0),
(16, 'decapode ', 12, 0, 0, 0),
(17, 'decapode ', 12, 0, 0, 0),
(18, 'decapode ', 12, 0, 0, 0),
(23, 'Loup', 35, 0, 12, 0);

-- --------------------------------------------------------

--
-- Structure de la table `t_pj`
--

DROP TABLE IF EXISTS `t_pj`;
CREATE TABLE IF NOT EXISTS `t_pj` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `joueur_user` varchar(60) NOT NULL,
  `nom_user` varchar(60) NOT NULL,
  `hp_user` int(11) NOT NULL,
  `chp_user` int(11) NOT NULL,
  `psy_user` int(11) NOT NULL,
  `cpsy_user` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_pj`
--

INSERT INTO `t_pj` (`user_id`, `joueur_user`, `nom_user`, `hp_user`, `chp_user`, `psy_user`, `cpsy_user`) VALUES
(24, 'Pierre', 'Raphaël', 21, 0, 0, 0),
(23, 'Nicolas', 'Alwyn', 29, 0, 0, 0),
(22, 'Matthieu', 'Xac\'thu', 36, 0, 0, 0),
(21, 'Jean', 'Maewen', 26, 0, 0, 0),
(25, 'Gwendo', 'Loopix', 35, 0, 0, 0),
(20, 'Arthur', 'Arthur', 24, 0, 0, 0),
(26, 'Hervé', 'Duros', 35, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `t_resume`
--

DROP TABLE IF EXISTS `t_resume`;
CREATE TABLE IF NOT EXISTS `t_resume` (
  `resume_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_resume` varchar(60) NOT NULL,
  `text_resume` text NOT NULL,
  `date_resume` timestamp NOT NULL,
  PRIMARY KEY (`resume_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_resume`
--

INSERT INTO `t_resume` (`resume_id`, `nom_resume`, `text_resume`, `date_resume`) VALUES
(1, 'L\'hiver approche', 'Alors que l\'hiver approche, les PJ se sont vus embarqué dans une mission consistant à  abattre un mega compromettant la survie des villageois. En arrivant sur les lieux du MEGA, les Pjs se sont retrouvés face à un chalutier de l\'hier, ils sont donc rentrés pour trouver des traces d\'éventuels survivants...', '2018-12-19 23:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
