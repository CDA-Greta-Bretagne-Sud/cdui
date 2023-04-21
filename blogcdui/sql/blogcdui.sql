-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 20 avr. 2023 à 16:27
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blogcdui`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `id_categorie` int(50) NOT NULL,
  `titre` varchar(80) NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(40) NOT NULL,
  `icone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `id_categorie`, `titre`, `contenu`, `image`, `icone`) VALUES
(1, 1, 'Unan', 'Logoden biniou degemer mat an penn, ar bed vantell las sioul, hed c’hreisteiz an koef.', 'pic01.jpg', 'fa-solid fa-heart'),
(2, 3, 'DAOU', 'Veaj kurun Douarnenez bern Gwaien c’hoarzhin, re pobl ganeoc\'h e waz, Kermouster klevout vamm naet.', 'pic02.jpg', 'fa-regular fa-heart'),
(3, 2, 'TRI', 'Logoden biniou degemer mat an penn ar bed c’hontadenn, mevel dra koll delioù c’heuz sailh.', 'pic03.jpg', 'fa-solid fa-heart'),
(4, 1, 'PEVAR', 'Menez war vuzell ha drezi avat, c’horn treut laerezh tamall dindan, naetaat nerzh bez volz.', 'pic04.jpg', 'fa-regular fa-heart'),
(5, 3, 'PEMP', 'Ler ret divskouarn ar tomm sav, livet pediñ wouel stagañ Mederieg, c’haol leun gwez warnout.', 'pic05.jpg', 'fa-solid fa-heart'),
(6, 2, 'C\'HWEC\'H', 'Vuzell c’hoazh gouzout zoken dad an, dezhañ gouere Kembre boultrenn falc’hat, rodell c’hewz oan lun.', 'pic06.jpg', 'fa-regular fa-heart'),
(7, 2, 'SEIZH', 'Regiñ dañvad taol nebeut kreisteiz stank pod lost war, patatez eoul c’hafe Remengol kalon c’hewz.', 'pic07.jpg', 'fa-solid fa-heart'),
(8, 1, 'EIZH', 'Gantañ Remengol kouezhañ fresk bazh araok, seitek nag Menez tad wern, speredekañ den din glav.', 'pic08.jpg', 'fa-regular fa-heart'),
(9, 1, 'NAV', 'Niver da eviti dougen douar ler, kerkoulz gleb un gortoz loa, kaozeadenn dre lies ganin.', 'pic09.jpg', 'fa-solid fa-heart'),
(10, 2, 'DEK', 'Stagañ nebeut Abbarez vamm stad Breizh, e goustad moged diskiant kregiñ, meurzh tachenn seizhvet kontrol.', 'pic10.jpg', 'fa-regular fa-heart'),
(11, 3, 'UNNEK', 'Stagañ nebeut Abbarez vamm stad Breizh, e goustad moged diskiant kregiñ, meurzh tachenn seizhvet kontrol.', 'pic11.jpg', 'fa-solid fa-heart'),
(12, 2, 'DAOUZEK', 'C’hof kardeur fur gouzañv delioù Mikael Sant-Gwenole Roazhon gwriat, buhez aer keit urzh aketus a.', 'pic12.jpg', 'fa-regular fa-heart');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categorie` int(10) NOT NULL,
  `libelle` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `libelle`) VALUES
(1, 'News'),
(2, 'Tutoriels'),
(3, 'Informations');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `pwd`, `email`) VALUES
(1, 'toto', 'f7e79ca8eb0b31ee4d5d6c181416667ffee528ed', 'toto@free.fr');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categorie` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
