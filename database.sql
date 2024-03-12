-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 20 juin 2023 à 16:24
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `php_intermediaire_tatiana`
--
CREATE DATABASE IF NOT EXISTS `php_intermediaire_tatiana` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `php_intermediaire_tatiana`;

-- --------------------------------------------------------

--
-- Structure de la table `advert`
--

CREATE TABLE `advert` (
  `id_advert` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(155) NOT NULL,
  `description` varchar(255) NOT NULL,
  `postal_code` int(5) NOT NULL,
  `city` varchar(100) NOT NULL,
  `type` enum('vente','location') NOT NULL,
  `price` float NOT NULL,
  `reservation_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `advert`
--

INSERT INTO `advert` (`id_advert`, `image`, `title`, `description`, `postal_code`, `city`, `type`, `price`, `reservation_message`) VALUES
(1, 'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1980&q=80', 'Appartement a Paris', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate veniam corporis ratione veritatis exercitationem blanditiis ea illo, saepe soluta sequi a mollitia odio, facere perferendis velit assumenda iure. Tempora dolores nesciunt voluptat', 75000, 'Paris', 'location', 700.5, ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate veniam corporis ratione veritatis exercitationem blanditiis ea illo, saepe soluta sequi a mollitia odio, facere perferendis velit assumenda iure. Tempora dolores nesciunt voluptat'),
(2, 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', 'Appartement proche de la Tour eiffel', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate veniam corporis ratione veritatis exercitationem blanditiis ea illo, saepe soluta sequi a mollitia odio, facere perferendis velit assumenda iure. Tempora dolores nesciunt voluptat', 75000, 'Paris', 'vente', 10000, 'ttttttttttttttttttttttttttttttttttttttttttttttttttttt'),
(3, 'https://images.unsplash.com/photo-1628592102751-ba83b0314276?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1397&q=80', 'Appartement a Marseille ', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate veniam corporis ratione veritatis exercitationem blanditiis ea illo, saepe soluta sequi a mollitia odio, facere perferendis velit assumenda iure. Tempora dolores nesciunt voluptat', 13000, 'Marseille', 'location', 600, ''),
(4, 'https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', 'Appartement a louer de 5 pièce', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate veniam corporis ratione veritatis exercitationem blanditiis ea illo, saepe soluta sequi a mollitia odio, facere perferendis velit assumenda iure. ', 69000, 'Lyon', 'location', 903.5, ''),
(5, 'https://images.unsplash.com/photo-1484154218962-a197022b5858?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1174&q=80', 'Appartement de 3 pièces acheter a Lyon', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate veniam corporis ratione veritatis exercitationem blanditiis ea illo, saepe soluta sequi a mollitia odio, facere perferendis velit assumenda iure.', 69000, 'Lyon', 'vente', 10000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate veniam corporis ratione veritatis exercitationem blanditiis ea illo, saepe soluta sequi a mollitia odio, facere perferendis velit assumenda iure.'),
(6, 'https://images.unsplash.com/photo-1612320648993-61c1cd604b71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1172&q=80', 'Maison a vendre de 4 pièces a Paris', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate veniam corporis ratione veritatis exercitationem blanditiis ea illo, saepe soluta sequi a mollitia odio, facere perferendis velit assumenda iure.', 75000, 'Paris', 'vente', 12000, ''),
(7, 'https://images.unsplash.com/photo-1630699375895-fe5996d163ee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', 'Maison de 6 pièce a Evry', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate veniam corporis ratione veritatis exercitationem blanditiis ea illo, saepe soluta sequi a mollitia odio, facere perferendis velit assumenda iure.', 91000, 'Evry', 'vente', 15000, ''),
(8, 'https://images.unsplash.com/photo-1612320648993-61c1cd604b71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1172&q=80', 'Maison de 5 pièce a Corbeil-Essonnes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate veniam corporis ratione veritatis exercitationem blanditiis ea illo, saepe soluta sequi a mollitia odio, facere perferendis velit assumenda iure.', 91100, 'Corbeil-Essonnes', 'location', 900.43, ''),
(9, 'https://images.unsplash.com/photo-1630699376289-b62375a35505?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80', 'Appartement de 3 pièces a Evry', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate veniam corporis ratione veritatis exercitationem blanditiis ea illo, saepe soluta sequi a mollitia odio, facere perferendis velit assumenda iure.', 91000, 'Evry', 'location', 700, ''),
(10, 'https://images.unsplash.com/photo-1574362848149-11496d93a7c7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1084&q=80', 'Appartement de 3 pièce au dernier étage a Lisses', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate veniam corporis ratione veritatis exercitationem blanditiis ea illo, saepe soluta sequi a mollitia odio, facere perferendis velit assumenda iure.', 91090, 'Lisses', 'location', 750, ''),
(11, 'https://images.unsplash.com/photo-1502672023488-70e25813eb80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1064&q=80', 'Appartement au 3eme étages de 2 pièces a Evry', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate veniam corporis ratione veritatis exercitationem blanditiis ea illo, saepe soluta sequi a mollitia odio, facere perferendis velit assumenda iure.', 91000, 'Evry', 'location', 503.45, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate veniam corporis ratione veritatis exercitationem blanditiis ea illo, saepe soluta sequi a mollitia odio, facere perferendis velit assumenda iure.'),
(12, 'https://images.unsplash.com/photo-1539922631499-09155cc609a4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', 'Maison a vendre a Paris ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate veniam corporis ratione veritatis exercitationem blanditiis ea illo, saepe soluta sequi a mollitia odio, facere perferendis velit assumenda iure.', 75000, 'Paris', 'vente', 15000, ''),
(13, 'https://images.unsplash.com/photo-1529408686214-b48b8532f72c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', 'Appartement de 3 pièces à Marseille au dernier étage', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate veniam corporis ratione veritatis exercitationem blanditiis ea illo, saepe soluta sequi a mollitia odio, facere perferendis velit assumenda iure.', 13000, 'Marseille', 'location', 500, ''),
(14, 'https://images.unsplash.com/photo-1619989652700-9984844cb0ea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80', 'Maison de 3 pièce a vendre a Lisses', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate veniam corporis ratione veritatis exercitationem blanditiis ea illo, saepe soluta sequi a mollitia odio, facere perferendis velit assumenda iure.', 91090, 'Lisses', 'vente', 10000, ''),
(15, 'https://images.unsplash.com/photo-1560448075-cbc16bb4af8e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', 'Maison de 4 pièces a Corbeil-Essonnes ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate veniam corporis ratione veritatis exercitationem blanditiis ea illo, saepe soluta sequi a mollitia odio, facere perferendis velit assumenda iure.', 91100, 'Corbeil-Essonnes', 'location', 1000, ''),
(16, 'https://images.unsplash.com/photo-1501876725168-00c445821c9e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', 'Appartement de 2 pièces a louer a Lyon', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate veniam corporis ratione veritatis exercitationem blanditiis ea illo, saepe soluta sequi a mollitia odio, facere perferendis velit assumenda iure.', 69000, 'Lyon', 'location', 600.5, ''),
(17, 'https://images.unsplash.com/photo-1560448204-61dc36dc98c8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', 'Maison de 5 pièces à acheter a Lisses', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate veniam corporis ratione veritatis exercitationem blanditiis ea illo, saepe soluta sequi a mollitia odio, facere perferendis velit assumenda iure.', 91090, 'Lisses', 'vente', 12000, ''),
(18, 'https://images.unsplash.com/photo-1630699144641-72fa7a6b8aa1?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80', 'Appartement de 3 piece à Marseille', 'Appartement de 3 piece &agrave; Marseille situer en plein coeur de la ville.', 13000, 'Marseille', 'location', 700, ''),
(19, 'https://images.unsplash.com/photo-1539922631499-09155cc609a4?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80', 'Vente d\'un appartement de 3 pieces a Corbeil-Essonnes', 'Vente d&#039;un appartement de 3 pieces a Corbeil-Essonnes a coter des magasin', 91100, 'Corbeil-Essonnes', 'vente', 12000, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`id_advert`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `advert`
--
ALTER TABLE `advert`
  MODIFY `id_advert` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
