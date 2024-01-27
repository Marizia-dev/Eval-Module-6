-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 27 jan. 2024 à 13:03
-- Version du serveur :  8.0.35-0ubuntu0.20.04.1
-- Version de PHP : 8.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `module6`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cv` text,
  `dt_naissance` date DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT '0',
  `dt_mis_a_jour` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `prenom`, `nom`, `email`, `cv`, `dt_naissance`, `isAdmin`) VALUES
(6, 'Donald ', 'Knuth', 'donalt.knuth@exemple.fr', 'Est un des pionniers de l\'informatique moderne, inventeur du langage C et codéveloppeur de Unix.', '1941-09-09', 0),
(9, 'Tim', ' Berners-Lee', 'tim.berners-lee@exemple.fr', 'Est un physicien et informaticien britannique, principal inventeur du World Wide Web (WWW, le Web) alors qu\'il travaillait à l\'Organisation européenne pour la recherche nucléaire (CERN) au tournant des années 1990. Depuis 1994, il préside le World Wide Web Consortium (W3C), organisme qu\'il a fondé. En juillet 2004, il est fait chevalier par la reine Élisabeth II. Il est lauréat du prix Turing 20161.', '1955-06-08', 0),
(10, 'Larry', 'Page', 'larry.page@exemple.fr', 'Est un milliardaire et informaticien américain. Il est avec Sergey Brin le cofondateur de l\'entreprise Google.', '1973-03-26', 0),
(14, 'George ', 'Boole', 'george.boole@exemple.fr', 'Est le créateur de la logique moderne, fondée sur une structure algébrique et sémantique, que l\'on appelle algèbre de Boole en son honneur.', '1864-12-08', 0),
(16, 'Edgar Frank ', 'Codd', 'edgar.frank.codd@exemple.fr', 'Est un informaticien britannique. Il est considéré comme l\'inventeur du modèle relationnel des SGBDR.', '1923-08-23', 0),
(18, 'Alan', 'Turing', 'alan.turing@exemple.fr', 'Est un mathématicien et cryptologue britannique, auteur de travaux qui fondent scientifiquement l\'informatique. Il est aussi un des pionniers de l\'Intelligence artificielle.', '1912-06-23', 0),
(20, 'Grace ', 'Hopper', 'grace.hopper@exemple.fr', 'Elle est la conceptrice du premier compilateur en 1951 (A-0 System) et du langage Cobol en 1959.', '1906-12-09', 0),
(24, 'Douglas Carl ', 'Engelbar', 'douglas.carl.engelbar@exmple.fr', 'Est célèbre pour avoir inventé la souris, pour ses travaux sur le développement de l\'interface homme-machine et pour avoir développé le système hypertexte, les réseaux informatiques et les premières interfaces graphiques (GUI).', '1925-01-30', 0),
(25, 'James ', 'Gosling', 'james.gosling@exmple.fr', 'Est un informaticien canadien. Il est surtout connu comme le concepteur du langage de programmation Java.', '1955-05-19', 0),
(27, 'Ada ', 'Lovelace', 'ada.lovelace@exemple.fr', 'Rajout', '1815-12-10', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
