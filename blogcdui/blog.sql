-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 avr. 2023 à 14:49
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `titre` varchar(80) NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `image`) VALUES
(1, 'Unan', 'Logoden biniou degemer mat an penn, ar bed vantell las sioul, hed c’hreisteiz an koef.', 'pic01.jpg'),
(2, 'DAOU', 'Veaj kurun Douarnenez bern Gwaien c’hoarzhin, re pobl ganeoc\'h e waz, Kermouster klevout vamm naet.', 'pic02.jpg'),
(3, 'TRI', 'Logoden biniou degemer mat an penn ar bed c’hontadenn, mevel dra koll delioù c’heuz sailh.', 'pic03.jpg'),
(4, 'PEVAR', 'Menez war vuzell ha drezi avat, c’horn treut laerezh tamall dindan, naetaat nerzh bez volz.', 'pic04.jpg'),
(5, 'PEMP', 'Ler ret divskouarn ar tomm sav, livet pediñ wouel stagañ Mederieg, c’haol leun gwez warnout.', 'pic05.jpg'),
(6, 'C\'HWEC\'H', 'Vuzell c’hoazh gouzout zoken dad an, dezhañ gouere Kembre boultrenn falc’hat, rodell c’hewz oan lun.', 'pic06.jpg'),
(7, 'SEIZH', 'Regiñ dañvad taol nebeut kreisteiz stank pod lost war, patatez eoul c’hafe Remengol kalon c’hewz.', 'pic07.jpg'),
(8, 'EIZH', 'Gantañ Remengol kouezhañ fresk bazh araok, seitek nag Menez tad wern, speredekañ den din glav.', 'pic08.jpg'),
(9, 'NAV', 'Niver da eviti dougen douar ler, kerkoulz gleb un gortoz loa, kaozeadenn dre lies ganin.', 'pic09.jpg'),
(10, 'DEK', 'Stagañ nebeut Abbarez vamm stad Breizh, e goustad moged diskiant kregiñ, meurzh tachenn seizhvet kontrol.', 'pic10.jpg'),
(11, 'UNNEK', 'Stagañ nebeut Abbarez vamm stad Breizh, e goustad moged diskiant kregiñ, meurzh tachenn seizhvet kontrol.', 'pic11.jpg'),
(12, 'DAOUZEK', 'C’hof kardeur fur gouzañv delioù Mikael Sant-Gwenole Roazhon gwriat, buhez aer keit urzh aketus a.', 'pic12.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
