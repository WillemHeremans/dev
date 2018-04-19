-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 09 mars 2018 à 16:11
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

--     Write pseudo-SQL statements to create database tables to store the products of a basic webshop. Each product has a name, a price, a creation date and may belong to several categories. Categories have a name and a flag to indicate whether the category is private or public.

--    Imagine that these tables are populated with 10000 products and 300 categories, with products being assigned a random set of public and private categories. Write a SQL query to find the list of products that belong to more than 5 public categories.

    How would you populate the tables with test data (thousands of products with random values and categories)

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `MyReview`
--

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

CREATE TABLE `profils` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `pref_1` varchar(255) DEFAULT NULL,
  `pref_2` varchar(255) DEFAULT NULL,
  `pref_3` varchar(255) DEFAULT NULL,
  `pref_4` varchar(255) DEFAULT NULL,
  `pref_5` varchar(255) DEFAULT NULL,
  `lieu_1` varchar(255) DEFAULT NULL,
  `lieu_2` varchar(255) DEFAULT NULL,
  `lieu_3` varchar(255) DEFAULT NULL,
  `lieu_4` varchar(255) DEFAULT NULL,
  `lieu_5` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `oauth_provider` enum('','facebook','google','twitter') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `profils`
--

INSERT INTO `profils` (`id`, `pseudo`, `age`, `pref_1`, `pref_2`, `pref_3`, `pref_4`, `pref_5`, `lieu_1`, `lieu_2`, `lieu_3`, `lieu_4`, `lieu_5`, `avatar`, `gender`, `oauth_provider`, `oauth_uid`) VALUES
(2, 'Bibi', '26-35 ans', 'Le service', 'Type de cuisine', 'L\'ambiance', 'La rapidité', 'Éco-responsable', 'Cuisine du monde', 'Brasserie', 'Gastronomique', 'Fast food', 'BIO', 'default.png', 'male', '', ''),
(3, 'Matherbs', '26-35 ans', 'Le service', 'Type de cuisine', 'L\'ambiance', 'Éco-responsable', 'La rapidité', 'Brasserie', 'Cuisine du monde', 'Fast food', 'BIO', 'Gastronomique', 'garcon.png', 'male', '', ''),
(4, 'michael89', '26-35 ans', 'Type de cuisine', 'L\'ambiance', 'Le service', 'La rapidité', 'Éco-responsable', 'Fast food', 'Cuisine du monde', 'Brasserie', 'BIO', 'Gastronomique', 'garcon.png', 'male', '', ''),
(5, 'Toto', '26-35 ans', 'Type de cuisine', 'Le service', 'L\'ambiance', 'La rapidité', 'Éco-responsable', 'Cuisine du monde', 'Brasserie', 'Gastronomique', 'Fast food', 'BIO', 'default.png', 'male', '', ''),
(6, 'fla', '26-35 ans', 'Éco-responsable', 'L\'ambiance', 'Type de cuisine', 'Le service', 'La rapidité', 'Gastronomique', 'Cuisine du monde', 'Brasserie', 'Fast food', 'BIO', 'woman.png', 'female', '', ''),
(7, 'lolo', '26-35 ans', 'Éco-responsable', 'Le service', 'La rapidité', 'L\'ambiance', 'Type de cuisine', 'BIO', 'Gastronomique', 'Cuisine du monde', 'Brasserie', 'Fast food', 'woman.png', 'female', '', ''),
(8, 'bobo', '+35 ans', 'Type de cuisine', 'L\'ambiance', 'Le service', 'Éco-responsable', 'La rapidité', 'Gastronomique', 'Cuisine du monde', 'Brasserie', 'BIO', 'Fast food', 'woman-pro.png', 'female', '', ''),
(9, 'Quentin', '26-35 ans', 'Type de cuisine', 'Le service', 'L\'ambiance', 'La rapidité', 'Éco-responsable', 'Brasserie', 'Cuisine du monde', 'Fast food', 'Gastronomique', 'BIO', 'default.png', 'male', '', ''),
(10, 'Amokachi', '+35 ans', 'Éco-responsable', 'L\'ambiance', 'Type de cuisine', 'Le service', 'La rapidité', 'BIO', 'Fast food', 'Cuisine du monde', 'Gastronomique', 'Brasserie', 'woman-pro.png', 'female', '', ''),
(11, 'BaM89', '26-35 ans', 'L\'ambiance', 'Type de cuisine', 'Éco-responsable', 'Le service', 'La rapidité', 'BIO', 'Cuisine du monde', 'Brasserie', 'Gastronomique', 'Fast food', 'garcon.png', 'male', '', ''),
(12, 'Andri89', '26-35 ans', 'Type de cuisine', 'Le service', 'La rapidité', 'Éco-responsable', 'L\'ambiance', 'BIO', 'Cuisine du monde', 'Gastronomique', 'Brasserie', 'Fast food', 'default.png', 'male', '', ''),
(13, 'ello', '-18 ans', 'La rapidité', 'Le service', 'L\'ambiance', 'Éco-responsable', 'Type de cuisine', 'Fast food', 'BIO', 'Cuisine du monde', 'Gastronomique', 'Brasserie', 'woman.png', 'female', '', ''),
(14, 'Lilo', '26-35 ans', 'Type de cuisine', 'L\'ambiance', 'Le service', 'Éco-responsable', 'La rapidité', 'Cuisine du monde', 'Gastronomique', 'BIO', 'Brasserie', 'Fast food', 'woman.png', 'female', '', ''),
(15, 'Rivebise', '26-35 ans', 'Type de cuisine', 'L\'ambiance', 'Le service', 'La rapidité', 'Éco-responsable', 'Cuisine du monde', 'Brasserie', 'Fast food', 'BIO', 'Gastronomique', 'woman-pro.png', 'female', '', ''),
(16, 'MTC', '26-35 ans', 'Type de cuisine', 'Le service', 'L\'ambiance', 'Éco-responsable', 'La rapidité', 'Brasserie', 'Gastronomique', 'Fast food', 'Cuisine du monde', 'BIO', 'default.png', 'male', '', ''),
(17, 'Elisa', '18-25 ans', 'L\'ambiance', 'Le service', 'La rapidité', 'Éco-responsable', 'Type de cuisine', 'Fast food', 'BIO', 'Brasserie', 'Gastronomique', 'Cuisine du monde', 'woman.png', 'female', '', ''),
(18, 'Bramzer', '26-35 ans', 'L\'ambiance', 'Type de cuisine', 'La rapidité', 'Le service', 'Éco-responsable', 'Cuisine du monde', 'Gastronomique', 'Fast food', 'Brasserie', 'BIO', 'default.png', 'male', '', ''),
(19, 'Deba', '26-35 ans', 'L\'ambiance', 'Le service', 'La rapidité', 'Type de cuisine', 'Éco-responsable', 'Gastronomique', 'Fast food', 'Brasserie', 'BIO', 'Cuisine du monde', 'garcon.png', 'male', '', ''),
(20, 'Daniel', '+35 ans', 'Le service', 'L\'ambiance', 'Type de cuisine', 'La rapidité', 'Éco-responsable', 'Gastronomique', 'Brasserie', 'BIO', 'Cuisine du monde', 'Fast food', 'garcon.png', 'male', '', ''),
(21, 'ghjt', '26-35 ans', 'L\'ambiance', 'Type de cuisine', 'Le service', 'Éco-responsable', 'La rapidité', 'Brasserie', 'Gastronomique', 'Cuisine du monde', 'BIO', 'Fast food', 'woman.png', 'female', '', ''),
(22, 'Ratatouille', '18-25 ans', 'L\'ambiance', 'Type de cuisine', 'Éco-responsable', 'La rapidité', 'Le service', 'Brasserie', 'Cuisine du monde', 'BIO', 'Fast food', 'Gastronomique', 'woman-pro.png', 'female', '', ''),
(27, 'authOut', '+35 ans', 'Le service', 'Responsable', 'Ambiance', 'La rapidité', 'Type de cuisine', 'Gastronomique', 'BIO', 'Brasserie', 'Cuisine du monde', 'Fast food', 'default.png', 'male', '', ''),
(28, 'Didim', '18-25 ans', 'L\'ambiance', 'Le service', 'Responsable', 'La rapidité', 'Type de cuisine', 'Cuisine du monde', 'Brasserie', 'BIO', 'Fast food', 'Gastronomique', 'garcon.png', 'male', '', ''),
(29, 'odo', '26-35 ans', 'L\'ambiance', 'Le service', 'Responsable', 'La rapidité', 'Type de cuisine', 'Cuisine du monde', 'Brasserie', 'BIO', 'Fast food', 'Gastronomique', 'woman.png', 'female', '', ''),
(30, 'pomo', '18-25 ans', 'L\'ambiance', 'Le service', 'Responsable', 'La rapidité', 'Type de cuisine', 'Cuisine du monde', 'Brasserie', 'BIO', 'Fast food', 'Gastronomique', 'woman.png', 'female', '', ''),
(31, 'Dadam', '18-25 ans', 'L\'ambiance', 'Le service', 'Responsable', 'La rapidité', 'Type de cuisine', 'Cuisine du monde', 'Brasserie', 'BIO', 'Fast food', 'Gastronomique', 'woman-pro.png', 'female', '', ''),
(32, 'apt', '18-25 ans', 'La rapidité', 'Le service', 'Responsable', 'Ambiance', 'Type de cuisine', 'Cuisine du monde', 'Fast food', 'BIO', 'Gastronomique', 'Brasserie', 'default.png', 'male', '', ''),
(33, 'jojo', '+35 ans', 'Le service', 'La rapidité', 'Type de cuisine', 'Ambiance', 'Responsable', 'Gastronomique', 'Brasserie', 'Cuisine du monde', 'BIO', 'Fast food', 'garcon.png', 'male', '', ''),
(34, 'qopo', '26-35 ans', 'Éco-responsable', 'Le service', 'La rapidité', 'Type de cuisine', 'L\'ambiance', 'BIO', 'Cuisine du monde', 'Brasserie', 'Fast food', 'Gastronomique', 'woman.png', 'female', '', ''),
(35, 'momo', '26-35 ans', 'Le service', 'L\'ambiance', 'Éco-responsable', 'La rapidité', 'Type de cuisine', 'Cuisine du monde', 'Brasserie', 'BIO', 'Gastronomique', 'Fast food', 'garcon.png', 'male', '', ''),
(36, 'Victor', '26-35 ans', 'Type de cuisine', 'La rapidité', 'Éco-responsable', 'Le service', 'L\'ambiance', 'Gastronomique', 'Fast food', 'BIO', 'Brasserie', 'Cuisine du monde', 'default.png', 'male', '', ''),
(37, 'mike89', '26-35 ans', 'L\'ambiance', 'Type de cuisine', 'La rapidité', 'Le service', 'Éco-responsable', 'Fast food', 'Brasserie', 'Cuisine du monde', 'BIO', 'Gastronomique', 'default.png', 'male', '', ''),
(38, 'koko', '26-35 ans', 'Type de cuisine', 'Le service', 'La rapidité', 'L\'ambiance', 'Éco-responsable', 'Cuisine du monde', 'Brasserie', 'Gastronomique', 'Fast food', 'BIO', 'woman.png', 'female', '', ''),
(39, 'User', '+35 ans', 'Éco-responsable', 'L\'ambiance', 'Le service', 'La rapidité', 'Type de cuisine', 'Cuisine du monde', 'Brasserie', 'Fast food', 'BIO', 'Gastronomique', 'default.png', 'male', '', ''),
(41, 'testavatar', '26-35 ans', 'L\'ambiance', 'Le service', 'Éco-responsable', 'La rapidité', 'Type de cuisine', 'Fast food', 'Cuisine du monde', 'BIO', 'Brasserie', 'Gastronomique', 'default.png', 'male', '', ''),
(42, 'MonAvatar', '26-35 ans', 'Le service', 'Éco-responsable', 'La rapidité', 'Type de cuisine', 'L\'ambiance', 'Cuisine du monde', 'Brasserie', 'BIO', 'Gastronomique', 'Fast food', 'garcon.png', 'male', '', ''),
(43, 'lala', '26-35 ans', 'Éco-responsable', 'L\'ambiance', 'Le service', 'La rapidité', 'Type de cuisine', 'BIO', 'Cuisine du monde', 'Gastronomique', 'Fast food', 'Brasserie', 'woman.png', 'female', '', ''),
(44, 'nana', '18-25 ans', 'L\'ambiance', 'Le service', 'Éco-responsable', 'La rapidité', 'Type de cuisine', 'Cuisine du monde', 'Brasserie', 'BIO', 'Fast food', 'Gastronomique', 'woman-pro.png', 'female', '', ''),
(45, 'idm', '26-35 ans', 'Le service', 'L\'ambiance', 'Éco-responsable', 'La rapidité', 'Type de cuisine', 'Fast food', 'Brasserie', 'BIO', 'Cuisine du monde', 'Gastronomique', 'garcon.png', 'male', '', ''),
(46, 'madem', '-18 ans', 'La rapidité', 'Le service', 'Éco-responsable', 'Type de cuisine', 'L\'ambiance', 'BIO', 'Fast food', 'Cuisine du monde', 'Brasserie', 'Gastronomique', 'woman.png', 'female', '', ''),
(47, 'diem', '+35 ans', 'Type de cuisine', 'Le service', 'La rapidité', 'Éco-responsable', 'L\'ambiance', 'Brasserie', 'Gastronomique', 'BIO', 'Cuisine du monde', 'Fast food', 'default.png', 'male', '', ''),
(48, 'midi', '18-25 ans', 'Le service', 'Éco-responsable', 'La rapidité', 'Type de cuisine', 'L\'ambiance', 'Cuisine du monde', 'BIO', 'Brasserie', 'Fast food', 'Gastronomique', 'default.png', 'male', '', ''),
(49, 'adem', '+35 ans', 'Le service', 'Éco-responsable', 'La rapidité', 'Type de cuisine', 'L\'ambiance', 'Cuisine du monde', 'BIO', 'Fast food', 'Gastronomique', 'Brasserie', 'default.png', 'male', '', ''),
(50, 'edme', '-18 ans', 'L\'ambiance', 'Type de cuisine', 'Éco-responsable', 'La rapidité', 'Le service', 'Cuisine du monde', 'BIO', 'Brasserie', 'Gastronomique', 'Fast food', 'woman-pro.png', 'female', '', ''),
(51, 'domo', '+35 ans', 'La rapidité', 'Le service', 'Type de cuisine', 'Éco-responsable', 'L\'ambiance', 'Brasserie', 'Fast food', 'Cuisine du monde', 'Gastronomique', 'BIO', 'woman-pro.png', 'female', '', ''),
(52, 'soda', '26-35 ans', 'La rapidité', 'L\'ambiance', 'Le service', 'Éco-responsable', 'Type de cuisine', 'Brasserie', 'Cuisine du monde', 'Fast food', 'Gastronomique', 'BIO', 'default.png', 'male', '', ''),
(53, 'handsome_boy', '26-35 ans', 'Éco-responsable', 'La rapidité', 'L\'ambiance', 'Le service', 'Type de cuisine', 'BIO', 'Gastronomique', 'Brasserie', 'Cuisine du monde', 'Fast food', 'garcon.png', 'male', '', ''),
(54, 'deux mot', '-18 ans', 'La rapidité', 'Éco-responsable', 'Type de cuisine', 'L\'ambiance', 'Le service', 'BIO', 'Fast food', 'Brasserie', 'Cuisine du monde', 'Gastronomique', 'default.png', 'male', '', ''),
(55, 'enamore', '+35 ans', 'L\'ambiance', 'Éco-responsable', 'Le service', 'La rapidité', 'Type de cuisine', 'Gastronomique', 'Brasserie', 'BIO', 'Cuisine du monde', 'Fast food', 'woman-pro.png', 'female', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
