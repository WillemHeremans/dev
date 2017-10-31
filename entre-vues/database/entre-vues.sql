-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 24 oct. 2017 à 09:30
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `entre-vues`
--

-- --------------------------------------------------------

--
-- Structure de la table `pdfs`
--

CREATE TABLE `pdfs` (
  `pdf_ID` int(11) NOT NULL,
  `pdf_titre` varchar(255) NOT NULL,
  `pdf_resume` varchar(255) NOT NULL,
  `pdf_description` text NOT NULL,
  `pdf_langue` varchar(100) NOT NULL,
  `pdf_poids` varchar(10) NOT NULL,
  `pdf_url_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pdfs`
--

INSERT INTO `pdfs` (`pdf_ID`, `pdf_titre`, `pdf_resume`, `pdf_description`, `pdf_langue`, `pdf_poids`, `pdf_url_pdf`) VALUES
(1, 'Affiche Aerospace', 'Ad est nulla nominavi, eam an facer invidunt indoctum. Commodo tractatos ut has, an mollis torquatos eum. Oratio nostrud adversarium mei ea, an pro ponderum maluisset repudiandae. In ius sanctus graecis ceteros.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti magnam voluptatibus, qui quod earum officia. Porro libero eveniet impedit laudantium. Provident, amet architecto. Ullam dicta excepturi necessitatibus recusandae sint nesciunt.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Est ducimus velit, consectetur eum distinctio consequuntur, earum, beatae at debitis laboriosam et quo, quibusdam maxime dignissimos optio repellendus error molestias alias. \r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti magnam voluptatibus, qui quod earum officia. Porro libero eveniet impedit laudantium. Provident, amet architecto. Ullam dicta excepturi necessitatibus recusandae sint nesciunt.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Est ducimus velit, consectetur eum distinctio consequuntur, earum, beatae at debitis laboriosam et quo, quibusdam maxime dignissimos optio repellendus error molestias alias. ', 'Anglais', '1.63', 'http://www.wallonia.be/sites/default/files/BAT-_AFFICHE_AEROSPACE.pdf'),
(2, '10 bonnes raisons d\'investir en Wallonie', 'Lorem ipsum dolor sit amet, ne sale adolescens sea, nam dolorem alienum ei. Summo nulla dissentiunt ei ius, per te eirmod invidunt, in latine erroribus vel.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ducimus velit, consectetur eum distinctio consequuntur, earum, beatae at debitis laboriosam et quo, quibusdam maxime dignissimos optio repellendus error molestias alias. ', 'Français', '4.2', 'http://www.wallonia.be/sites/default/files/AWEX_triptyque_10_bonnes_raisons_2014.pdf'),
(3, '10 buenas razones para investir en Valonia', 'Lorem ipsum dolor sit amet, vel convenire persequeris concludaturque te. Pri at legendos temporibus. Ei brute voluptua eam, ea sit molestiae evertitur. Esse aeterno his te, scripta insolens mnesarchum no eos.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate ', 'Espagnol', '5.3', 'http://www.wallonia.be/sites/default/files/AWEX_triptyque_10_buenas_razones_2014.pdf'),
(4, '10 gute gründe um in der Wallonischen ', 'Lorem ipsum dolor sit amet, est quem doctus et. Solum euripidis accommodare sea eu. Ad pri clita offendit, ipsum munere putent eam te. Sea maluisset reprehendunt ad, cu veniam numquam vim. Est ea iudico iriure, eam eu causae repudiandae.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate ', 'Espagnol', '4.2', 'http://www.wallonia.be/sites/default/files/AWEX_triptyque_10_GUTE_GRUNDE.pdf'),
(5, '10 gute gründe um in der Wallonischen Region zu investieren', 'Duis at dignissim arcu. Fusce et interdum est, nec sodales quam. Nunc est lorem, sagittis at nunc vel, faucibus varius libero. Donec ac placerat. ', 'Lorem', 'Allemand', '4.1', 'http://www.wallonia.be/sites/default/files/AWEX_triptyque_10_GUTE_GRUNDE.pdf'),
(6, 'Carte touristique de la Wallonie FR-DE-NL-EN', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget laoreet nisl, ac iaculis purus. Nulla fermentum ornare velit. Curabitur faucibus lacus ultrices massa venenatis porttitor.', '', 'Anglais', '7', 'http://www.wallonia.be/sites/default/files/Carte_Touristique_Wallonie2014_FR_NL_EN_DE.pdf'),
(7, '10 gute gründe um in der Wallonischen Region zu investieren', 'Duis at dignissim arcu. Fusce et interdum est, nec sodales quam. Nunc est lorem, sagittis at nunc vel, faucibus varius libero. Donec ac placerat. ', 'Lorem', 'Allemand', '4.1', 'http://www.wallonia.be/sites/default/files/AWEX_triptyque_10_GUTE_GRUNDE.pdf'),
(8, 'Carte touristique de la Wallonie FR-DE-NL-EN', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget laoreet nisl, ac iaculis purus. Nulla fermentum ornare velit. Curabitur faucibus lacus ultrices massa venenatis porttitor.', '', 'Anglais', '7', 'http://www.wallonia.be/sites/default/files/Carte_Touristique_Wallonie2014_FR_NL_EN_DE.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `photo_ID` int(11) NOT NULL,
  `photo_title` varchar(255) NOT NULL,
  `photo_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `photo_url` varchar(255) NOT NULL,
  `photo_download` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `photos`
--

INSERT INTO `photos` (`photo_ID`, `photo_title`, `photo_date`, `photo_url`, `photo_download`) VALUES
(1, 'Salon bio', '2017-10-23 14:44:13', '7.jpg', '15'),
(2, 'Business', '2017-10-23 11:50:48', '2.jpeg', '7'),
(3, 'Salon de l\'agriculture', '2017-10-23 13:00:42', '3.jpeg', '2'),
(4, 'Conférence', '2017-10-23 13:00:02', '4.jpeg', '8'),
(5, 'Colloque International', '2017-10-23 14:52:23', '7.jpg', '24'),
(6, 'Conférence ONG', '2017-10-23 14:53:03', '8.jpeg', '4');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pdfs`
--
ALTER TABLE `pdfs`
  ADD PRIMARY KEY (`pdf_ID`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pdfs`
--
ALTER TABLE `pdfs`
  MODIFY `pdf_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
