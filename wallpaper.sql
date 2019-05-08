-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 08 Mai 2019 à 08:42
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wallpaper`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `Id_Admin` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`Id_Admin`, `Name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `Id_Categorie` int(11) NOT NULL,
  `Categorie` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`Id_Categorie`, `Categorie`) VALUES
(1, 'Games'),
(2, 'Nature'),
(3, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `download`
--

CREATE TABLE `download` (
  `Id_Client` int(11) DEFAULT NULL,
  `Number_download` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `resolution`
--

CREATE TABLE `resolution` (
  `Id_Resolution` int(11) NOT NULL,
  `Height` int(11) DEFAULT NULL,
  `Width` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `resolution`
--

INSERT INTO `resolution` (`Id_Resolution`, `Height`, `Width`) VALUES
(1, 2880, 1800),
(2, 3840, 2160),
(3, 1920, 1080),
(4, 1920, 1200),
(5, 55, 55);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Id_Client` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Lastname` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `wallpaper`
--

CREATE TABLE `wallpaper` (
  `Id_img` int(11) NOT NULL,
  `Titre` varchar(250) DEFAULT NULL,
  `Id_Resolution` int(11) DEFAULT NULL,
  `Id_Categorie` int(11) DEFAULT NULL,
  `Tags` varchar(500) DEFAULT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `wallpaper`
--

INSERT INTO `wallpaper` (`Id_img`, `Titre`, `Id_Resolution`, `Id_Categorie`, `Tags`, `Image`) VALUES
(1, 'Black Ops 3', 1, 1, 'GamesGuerreBlackOpsCallofDuty', 'blackOPS.jpg'),
(2, 'Black Ops 3 Call of duty', 2, 1, 'GamesGuerreBlackOpsCallofDuty', 'blackOPS2.jpg'),
(3, 'Black Ops 3 ', 3, 1, 'callofduty', 'blackOPS3.jpg'),
(4, 'dark souls fall', 3, 1, 'darksoul', 'darkSoul.jpg'),
(5, 'dark soulsbleu', 3, 1, 'darksoul', 'darksoul1.jpg'),
(6, 'dark soulsblue2', 4, 1, 'darksoul', 'darksoul4.jpg'),
(7, 'dark soulsgris', 3, 1, 'darksoul', 'darksoul3.jpg'),
(8, 'dark soulsred', 4, 1, 'darcksoul', 'darksoul2.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_Admin`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`Id_Categorie`);

--
-- Index pour la table `download`
--
ALTER TABLE `download`
  ADD KEY `Id_Client` (`Id_Client`);

--
-- Index pour la table `resolution`
--
ALTER TABLE `resolution`
  ADD PRIMARY KEY (`Id_Resolution`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_Client`);

--
-- Index pour la table `wallpaper`
--
ALTER TABLE `wallpaper`
  ADD PRIMARY KEY (`Id_img`),
  ADD KEY `Id_Resolution` (`Id_Resolution`),
  ADD KEY `Id_Categorie` (`Id_Categorie`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `download`
--
ALTER TABLE `download`
  ADD CONSTRAINT `download_ibfk_1` FOREIGN KEY (`Id_Client`) REFERENCES `user` (`Id_Client`);

--
-- Contraintes pour la table `wallpaper`
--
ALTER TABLE `wallpaper`
  ADD CONSTRAINT `wallpaper_ibfk_1` FOREIGN KEY (`Id_Resolution`) REFERENCES `resolution` (`Id_Resolution`),
  ADD CONSTRAINT `wallpaper_ibfk_2` FOREIGN KEY (`Id_Categorie`) REFERENCES `categorie` (`Id_Categorie`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
