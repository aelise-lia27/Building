-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 08 août 2025 à 14:23
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `building`
--
  CREATE DATABASE IF NOT EXISTS building;
USE building;
-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `project_type` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `sent_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `project_type`, `description`, `sent_at`) VALUES
(1, 'mede', '555555555555', 'kossi@gmail.com', 'charpente-couverture', 'kjdfscxjksdmxcskdjcm,xksdm,ksd,', '2025-07-31 14:53:24'),
(2, 'mede', '555555555555', 'kossi@gmail.com', 'charpente-couverture', 'kjdfscxjksdmxcskdjcm,xksdm,ksd,', '2025-07-31 14:53:24'),
(3, 'mede', '555555555555', 'kossi@gmail.com', 'charpente-couverture', 'kjdfscxjksdmxcskdjcm,xksdm,ksd,', '2025-07-31 14:53:36'),
(4, 'mede', '555555555555', 'kossi@gmail.com', 'charpente-couverture', 'kjdfscxjksdmxcskdjcm,xksdm,ksd,', '2025-07-31 15:13:05'),
(5, 'mede', '555555555555', 'kossi@gmail.com', 'charpente-couverture', 'kjdfscxjksdmxcskdjcm,xksdm,ksd,', '2025-07-31 15:13:15'),
(6, 'mede', '555555555555', 'kossi@gmail.com', 'plomberie', 'jsdkjsdkjsdjksdjdsjsdkmksdjkmdsjsmdnjdskj', '2025-07-31 21:10:33'),
(7, 'mede', '555555555555', 'kossi@gmail.com', 'plomberie', 'jsdkjsdkjsdjksdjdsjsdkmksdjkmdsjsmdnjdskj', '2025-07-31 21:10:47'),
(8, 'mede', '555555555555', 'kossi@gmail.com', 'plomberie', 'jsdkjsdkjsdjksdjdsjsdkmksdjkmdsjsmdnjdskj', '2025-07-31 21:10:52'),
(9, 'mede', '555555555555', 'kossi@gmail.com', 'plomberie', 'jsdkjsdkjsdjksdjdsjsdkmksdjkmdsjsmdnjdskj', '2025-07-31 21:10:59'),
(10, 'mede', '555555555555', 'kossi@gmail.com', 'plomberie', 'jsdkjsdkjsdjksdjdsjsdkmksdjkmdsjsmdnjdskj', '2025-07-31 21:11:30'),
(11, 'mede', '555555555555', 'kossi@gmail.com', 'plomberie', 'jsdkjsdkjsdjksdjdsjsdkmksdjkmdsjsmdnjdskj', '2025-07-31 21:12:31'),
(12, 'mede', '555555555555', 'kossi@gmail.com', 'plomberie', 'jsdkjsdkjsdjksdjdsjsdkmksdjkmdsjsmdnjdskj', '2025-07-31 21:12:46'),
(13, 'mede', '555555555555', 'kossi@gmail.com', 'terrassement', 'sdikjsm,dkjskdm,wjsdkmwjsdkm', '2025-07-31 21:13:12'),
(14, 'mede', '555555555555', 'kossi@gmail.com', 'terrassement', 'sdikjsm,dkjskdm,wjsdkmwjsdkm', '2025-07-31 21:13:25'),
(15, 'mede', '555555555555', 'kossi@gmail.com', 'terrassement', 'sdikjsm,dkjskdm,wjsdkmwjsdkm', '2025-07-31 21:13:35'),
(16, 'mede', '555555555555', 'kossi@gmail.com', 'terrassement', 'sdikjsm,dkjskdm,wjsdkmwjsdkm', '2025-07-31 21:22:34'),
(17, 'mede', '555555555555', 'kossi@gmail.com', 'terrassement', 'sdikjsm,dkjskdm,wjsdkmwjsdkm', '2025-07-31 21:22:44'),
(18, 'mede', '555555555555', 'kossi@gmail.com', 'terrassement', 'sdikjsm,dkjskdm,wjsdkmwjsdkm', '2025-07-31 21:22:56');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `sent_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `publications`
--

CREATE TABLE `publications` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_publication` datetime DEFAULT current_timestamp(),
  `date_modification` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `allowed` tinyint(1) DEFAULT 0,
  `poster` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `note` tinyint(4) DEFAULT NULL CHECK (`note` between 1 and 5),
  `id_users` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `publications`
--

INSERT INTO `publications` (`id`, `comment`, `date_publication`, `date_modification`, `allowed`, `poster`, `email`, `note`, `id_users`) VALUES
(1, 'sjndnjdfkjnsdlkjdnsakjnfskjfnakjankjnkjankajnfkjnkaj', '2025-07-05 17:59:05', '2025-07-05 17:59:05', 0, 'Jonh G', 'kossi@gmail.com', 2, 12),
(2, 'sjndnjdfkjnsdlkjdnsakjnfskjfnakjankjnkjankajnfkjnkaj', '2025-07-05 17:59:06', '2025-07-05 17:59:06', 0, 'Jonh G', 'kossi@gmail.com', 2, 12),
(3, 'sjndnjdfkjnsdlkjdnsakjnfskjfnakjankjnkjankajnfkjnkaj', '2025-07-05 17:59:07', '2025-07-05 17:59:07', 0, 'Jonh G', 'kossi@gmail.com', 2, 12),
(4, 'Je suis fiere de votre equipe building', '2025-07-31 12:34:01', '2025-07-31 12:34:01', 0, 'mede', 'mathieu.nebra@exemple.com', 5, 9),
(5, 'Je suis fiere de votre equipe building', '2025-07-31 12:34:01', '2025-07-31 12:34:01', 0, 'mede', 'mathieu.nebra@exemple.com', 5, 9),
(6, 'Je suis fiere de votre equipe building', '2025-07-31 12:34:02', '2025-07-31 12:34:02', 0, 'mede', 'mathieu.nebra@exemple.com', 5, 9),
(7, 'Je suis fiere de votre equipe building', '2025-07-31 12:34:06', '2025-07-31 12:34:06', 0, 'mede', 'mathieu.nebra@exemple.com', 5, 9),
(8, 'Je suis fiere de votre equipe building', '2025-07-31 12:34:07', '2025-07-31 12:34:07', 0, 'mede', 'mathieu.nebra@exemple.com', 5, 9),
(9, 'kl;lkjlkl;lkjjjhjouhjjkkhjkjk', '2025-07-31 12:37:10', '2025-07-31 12:37:10', 0, 'hjnds', 'mathieu.nebra@exemple.com', 4, 9),
(10, 'kl;lkjlkl;lkjjjhjouhjjkkhjkjk', '2025-07-31 12:37:11', '2025-07-31 12:37:11', 0, 'hjnds', 'mathieu.nebra@exemple.com', 4, 9),
(11, 'kl;lkjlkl;lkjjjhjouhjjkkhjkjk', '2025-07-31 12:37:12', '2025-07-31 12:37:12', 0, 'hjnds', 'mathieu.nebra@exemple.com', 4, 9),
(12, 'kl;lkjlkl;lkjjjhjouhjjkkhjkjk', '2025-07-31 12:38:32', '2025-07-31 12:38:32', 0, 'hjnds', 'mathieu.nebra@exemple.com', 4, 9),
(13, 'kl;lkjlkl;lkjjjhjouhjjkkhjkjk', '2025-07-31 12:38:35', '2025-07-31 12:38:35', 0, 'hjnds', 'mathieu.nebra@exemple.com', 4, 9),
(14, 'Merveilleuse Equipe, prestatioons parfaite vous etes les meilleurs', '2025-07-31 21:08:55', '2025-07-31 21:08:55', 0, 'mede', 'admin@gmail.com', 4, 9),
(15, 'Merveilleuse Equipe, prestatioons parfaite vous etes les meilleurs', '2025-07-31 21:09:03', '2025-07-31 21:09:03', 0, 'mede', 'admin@gmail.com', 4, 9),
(16, 'Merveilleuse Equipe, prestatioons parfaite vous etes les meilleurs', '2025-07-31 21:09:15', '2025-07-31 21:09:15', 0, 'mede', 'admin@gmail.com', 4, 9),
(17, 'Merveilleuse Equipe, prestatioons parfaite vous etes les meilleurs', '2025-07-31 21:09:28', '2025-07-31 21:09:28', 0, 'mede', 'admin@gmail.com', 4, 9);

-- --------------------------------------------------------

--
-- Structure de la table `remember_tokens`
--

CREATE TABLE `remember_tokens` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token_hash` varchar(255) NOT NULL,
  `expires_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` enum('maison_chere','maison_reduite','equipement') NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `badge` varchar(100) DEFAULT NULL,
  `badge_color` varchar(20) DEFAULT NULL,
  `date_pub` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `type`, `price`, `image`, `badge`, `badge_color`, `date_pub`) VALUES
(2, 'kdjlksd', 'fdghhjmhjhgfgfdsfghgjhjjkhjtrtretrytyuuyuuyttr', 'maison_chere', 8686598.00, '1753301405_RiseUp-removebg-preview.png', 'fghjhjghgfdgfghhj', '#ff0000', '2025-07-23 20:10:05'),
(3, 'kdjlksd', 'fdghhjmhjhgfgfdsfghgjhjjkhjtrtretrytyuuyuuyttr', 'maison_chere', 8686598.00, '1753301406_RiseUp-removebg-preview.png', 'fghjhjghgfdgfghhj', '#ff0000', '2025-07-23 20:10:06'),
(4, 'Villa chambres vue plage', 'villa situer a palm brkdhdsnfdsnsdn shjvjsjhjsd skdnknsvs', 'maison_chere', 1200000.00, '1753953715_viceCOde.PNG', NULL, '#ff0000', '2025-07-31 09:21:55'),
(5, 'Villa en bord de mer', 'Nichée au cœur d’un paysage marin exceptionnel, cette villa en bord de mer vous invite à vivre une expérience unique entre luxe, confort et nature. Offrant une vue panoramique imprenable sur l’océan, elle bénéficie d’un accès direct à la plage, idéal pour des levers de soleil inoubliables et des soirées bercées par le bruit des vagues.', 'maison_reduite', 13000000.00, '1753995786_m1.jpg', 'Premium', '#ff0000', '2025-07-31 21:03:06'),
(6, 'Villa en bord de mer', 'Nichée au cœur d’un paysage marin exceptionnel, cette villa en bord de mer vous invite à vivre une expérience unique entre luxe, confort et nature. Offrant une vue panoramique imprenable sur l’océan, elle bénéficie d’un accès direct à la plage, idéal pour des levers de soleil inoubliables et des soirées bercées par le bruit des vagues.', 'maison_reduite', 13000000.00, '1753995803_m1.jpg', 'Premium', '#ff0000', '2025-07-31 21:03:23'),
(7, 'Villa en bord de mer', 'Nichée au cœur d’un paysage marin exceptionnel, cette villa en bord de mer vous invite à vivre une expérience unique entre luxe, confort et nature. Offrant une vue panoramique imprenable sur l’océan, elle bénéficie d’un accès direct à la plage, idéal pour des levers de soleil inoubliables et des soirées bercées par le bruit des vagues.', 'maison_reduite', 13000000.00, '1753995807_m1.jpg', 'Premium', '#ff0000', '2025-07-31 21:03:27'),
(8, 'Villa en bord de mer', 'Nichée au cœur d’un paysage marin exceptionnel, cette villa en bord de mer vous invite à vivre une expérience unique entre luxe, confort et nature. Offrant une vue panoramique imprenable sur l’océan, elle bénéficie d’un accès direct à la plage, idéal pour des levers de soleil inoubliables et des soirées bercées par le bruit des vagues.', 'maison_reduite', 13000000.00, '1753995815_m1.jpg', 'Premium', '#ff0000', '2025-07-31 21:03:35'),
(9, 'Villa en bord de mer', 'Nichée au cœur d’un paysage marin exceptionnel, cette villa en bord de mer vous invite à vivre une expérience unique entre luxe, confort et nature. Offrant une vue panoramique imprenable sur l’océan, elle bénéficie d’un accès direct à la plage, idéal pour des levers de soleil inoubliables et des soirées bercées par le bruit des vagues.', 'maison_reduite', 13000000.00, '1753995815_m1.jpg', 'Premium', '#ff0000', '2025-07-31 21:03:35'),
(10, 'Villa en bord de mer', 'Nichée au cœur d’un paysage marin exceptionnel, cette villa en bord de mer vous invite à vivre une expérience unique entre luxe, confort et nature. Offrant une vue panoramique imprenable sur l’océan, elle bénéficie d’un accès direct à la plage, idéal pour des levers de soleil inoubliables et des soirées bercées par le bruit des vagues.', 'maison_reduite', 13000000.00, '1753995816_m1.jpg', 'Premium', '#ff0000', '2025-07-31 21:03:36'),
(11, 'Villa en bord de mer', 'Nichée au cœur d’un paysage marin exceptionnel, cette villa en bord de mer vous invite à vivre une expérience unique entre luxe, confort et nature. Offrant une vue panoramique imprenable sur l’océan, elle bénéficie d’un accès direct à la plage, idéal pour des levers de soleil inoubliables et des soirées bercées par le bruit des vagues.', 'maison_reduite', 13000000.00, '1753995820_m1.jpg', 'Premium', '#ff0000', '2025-07-31 21:03:40'),
(12, 'Villa en bord de mer', 'Nichée au cœur d’un paysage marin exceptionnel, cette villa en bord de mer vous invite à vivre une expérience unique entre luxe, confort et nature. Offrant une vue panoramique imprenable sur l’océan, elle bénéficie d’un accès direct à la plage, idéal pour des levers de soleil inoubliables et des soirées bercées par le bruit des vagues.', 'maison_reduite', 13000000.00, '1753995837_m1.jpg', 'Premium', '#ff0000', '2025-07-31 21:03:57'),
(13, 'Villa en bord de mer', 'Nichée au cœur d’un paysage marin exceptionnel, cette villa en bord de mer vous invite à vivre une expérience unique entre luxe, confort et nature. Offrant une vue panoramique imprenable sur l’océan, elle bénéficie d’un accès direct à la plage, idéal pour des levers de soleil inoubliables et des soirées bercées par le bruit des vagues.', 'maison_reduite', 13000000.00, '1753995842_m1.jpg', 'Premium', '#ff0000', '2025-07-31 21:04:02'),
(14, 'Villa en bord de mer', 'Nichée au cœur d’un paysage marin exceptionnel, cette villa en bord de mer vous invite à vivre une expérience unique entre luxe, confort et nature. Offrant une vue panoramique imprenable sur l’océan, elle bénéficie d’un accès direct à la plage, idéal pour des levers de soleil inoubliables et des soirées bercées par le bruit des vagues.', 'maison_reduite', 13000000.00, '1753995849_m1.jpg', 'Premium', '#ff0000', '2025-07-31 21:04:09'),
(15, 'Villa en bord de mer', 'Nichée au cœur d’un paysage marin exceptionnel, cette villa en bord de mer vous invite à vivre une expérience unique entre luxe, confort et nature. Offrant une vue panoramique imprenable sur l’océan, elle bénéficie d’un accès direct à la plage, idéal pour des levers de soleil inoubliables et des soirées bercées par le bruit des vagues.', 'maison_reduite', 13000000.00, '1753995850_m1.jpg', 'Premium', '#ff0000', '2025-07-31 21:04:10'),
(16, 'Villa en bord de mer', 'Nichée au cœur d’un paysage marin exceptionnel, cette villa en bord de mer vous invite à vivre une expérience unique entre luxe, confort et nature. Offrant une vue panoramique imprenable sur l’océan, elle bénéficie d’un accès direct à la plage, idéal pour des levers de soleil inoubliables et des soirées bercées par le bruit des vagues.', 'maison_reduite', 13000000.00, '1753995851_m1.jpg', 'Premium', '#ff0000', '2025-07-31 21:04:11'),
(17, 'Villa en bord de mer', 'Nichée au cœur d’un paysage marin exceptionnel, cette villa en bord de mer vous invite à vivre une expérience unique entre luxe, confort et nature. Offrant une vue panoramique imprenable sur l’océan, elle bénéficie d’un accès direct à la plage, idéal pour des levers de soleil inoubliables et des soirées bercées par le bruit des vagues.', 'maison_reduite', 13000000.00, '1753995854_m1.jpg', 'Premium', '#ff0000', '2025-07-31 21:04:14'),
(18, 'Villa en bord de mer', 'Nichée au cœur d’un paysage marin exceptionnel, cette villa en bord de mer vous invite à vivre une expérience unique entre luxe, confort et nature. Offrant une vue panoramique imprenable sur l’océan, elle bénéficie d’un accès direct à la plage, idéal pour des levers de soleil inoubliables et des soirées bercées par le bruit des vagues.', 'maison_reduite', 13000000.00, '1753995863_m1.jpg', 'Premium', '#ff0000', '2025-07-31 21:04:23'),
(19, 'Villa en bord de mer', 'Nichée au cœur d’un paysage marin exceptionnel, cette villa en bord de mer vous invite à vivre une expérience unique entre luxe, confort et nature. Offrant une vue panoramique imprenable sur l’océan, elle bénéficie d’un accès direct à la plage, idéal pour des levers de soleil inoubliables et des soirées bercées par le bruit des vagues.', 'maison_reduite', 13000000.00, '1753995866_m1.jpg', 'Premium', '#ff0000', '2025-07-31 21:04:26'),
(20, 'Villa en bord de mer', 'Nichée au cœur d’un paysage marin exceptionnel, cette villa en bord de mer vous invite à vivre une expérience unique entre luxe, confort et nature. Offrant une vue panoramique imprenable sur l’océan, elle bénéficie d’un accès direct à la plage, idéal pour des levers de soleil inoubliables et des soirées bercées par le bruit des vagues.', 'maison_reduite', 13000000.00, '1753995868_m1.jpg', 'Premium', '#ff0000', '2025-07-31 21:04:28');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `terms` tinyint(1) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phone`, `password`, `role`, `terms`, `created_at`) VALUES
(1, 'Tom', 'peters', 'laurene.castor@exemple.com', '90009022', '$2y$10$cPikgtE0J4RfghdPDMCeauL8mQRo/Acw7Ej69wWGgH9Re0SH/F.qG', '', 0, '2025-06-22 17:07:56'),
(2, 'Tom', 'peters', 'laue.castor@exemple.com', '90009022', '$2y$10$BBsckfrsLIZgcj.NCnUO5.EGAQbo2CTIokxPzjUvmJmq3caH4ZWDS', '', 0, '2025-06-22 17:10:36'),
(3, 'Tom', 'peters', 'lauhjhje.castor@exemple.com', '90009022', '$2y$10$yzm32Z6P49uXYo1u4zOZrOUe4Cvu72GtXOhldM37a2OjV1CKpeBx6', '', 0, '2025-06-22 17:12:02'),
(4, 'Tom', 'peters', 'kosidj@mail.com', '90009022', '$2y$10$CXu7J1VjawrM2BWDQo600OGJuejgs9lObTallwsWFGsIE27qm4F2m', '', 0, '2025-06-22 17:32:32'),
(5, 'Tom', 'peters', 'mickael.andrieu@exemple.com', '90009022', '$2y$10$/pXepyOF/RL9T.dADw88WO3GJ39MGWZqBzXmdLMaJ2VlcLS8aYT.K', '', 0, '2025-06-22 17:47:15'),
(6, 'Tom', 'elise', 'sdhdshj@gmail.com', '90009022', '$2y$10$W/6/4LFFHmh5ips0zlyrheC.Oo0wzr0.K50USqFOHVp8CyXPgEsXG', '', 0, '2025-06-23 12:17:33'),
(7, 'Tom', 'elise', 'mathiu.nebra@exemple.com', '90009022', '$2y$10$pbTarUNsmD6S4PTaRkQ7uuZAMLuuU.VvBopw4Uj5hq4lpMa5mPtgm', '', 0, '2025-06-23 14:44:43'),
(8, 'john', 'jo', 'john@mail.com', '90000000', '$2y$10$l9JNRWI9UEGeHGTxaiYUMOwYjigWrz.pWVYXJMk8ri6qKHYbyzEr.', '', 0, '2025-06-27 13:06:23'),
(9, 'Jean', 'Admin', 'admin@site.com', '+22890000000', '$2y$10$3oWM1LPuom0XLYeUCEP2V.D9TUaPPAS63gGQFh3AMlf4edYc6x4WC', 'admin', 0, '2025-06-27 13:25:10'),
(10, 'Agbanan', 'elise', 'kossi@gmfdfail.com', '90009022', '$2y$10$QQPGiE2mtJqv8m47J067bOWshDAVGWWv3jeyFlme2YV4Wu/BrGHzC', 'user', 0, '2025-06-27 16:16:38'),
(11, 'paul', 'marue', 'paul@site.com', '90120722', '$2y$10$YLNS6M7IRorkCvjzxUBGxuXzkuYZdwtQ8sPVRvI8WFdXl7dH2AMu2', 'user', 0, '2025-06-27 16:28:22'),
(12, NULL, NULL, 'kossi@gmail.com', NULL, NULL, 'user', 0, '2025-07-05 15:35:14'),
(22, 'Agbanan', 'peters', 'koidj@mail.com', '90009022', '$2y$10$qfqCQ8FvWxAVzkgcsX7wmO76EnQQ06WEhQpVa6Ri3Yr2NJ6Huy44G', 'user', 0, '2025-07-07 11:29:54'),
(23, 'john', 'jo', 'jon@mail.com', '90000000', '$2y$10$6C1UaShn3Q0FEl/akR90Je1vk8mvtNHLREtnX4nAT9aq1IDiwBDKy', 'user', 0, '2025-07-18 13:04:45'),
(24, 'Agbanan', 'peters', 'dhdshj@gmail.com', '90009022', '$2y$10$Xth26rFLMulpUJ3geMOKcuI/ZvmMV2xHihuhViXAun1yuyInHfRWq', 'user', 0, '2025-07-22 17:57:59'),
(25, 'Agbanan', 'peters', 'kidj@mail.com', '555555555555', '$2y$10$QPIwaqZrboubZRrq9Lm91OyBfjwJpkCa4o.yfqM3y.O3yIGMRbZXW', 'user', 0, '2025-07-31 19:24:32'),
(26, 'Agbanan', 'peters', 'fddfkjsjk@mail.com', '555555555555', '$2y$10$SwrDi5C88/RDPyc1XqG8Q.s8gOz6JlKhJU5F6CXB0pbbISXqwK0Va', 'user', 0, '2025-07-31 19:24:42'),
(27, 'Agbanan', 'ELISE', 'mathdflkdsfieu.nebra@exemple.com', '555555555555', '$2y$10$.biab3qeJpkUrzktvUMDpebhv0NGaMq9KIeqAJyx03H10UEnYaEX2', 'user', 0, '2025-07-31 19:25:21'),
(28, 'Agbanan', 'peters', 'kjooosidj@mail.com', '555555555555', '$2y$10$CN8ZUps3WdU6EWbaGg8IFO7hRrgTMLcEDHvUQV49Sm.kkc.05Pfs6', 'user', 0, '2025-07-31 19:59:54'),
(29, 'Agbanan', 'peters', 'kjooloklosidj@mail.com', '555555555555', '$2y$10$2K09gUDdVxejAMkITS1Un.D.cE5Vf84wCZWkwnc3EJPgXXyaa2DKS', 'user', 0, '2025-07-31 20:00:05'),
(30, 'Agbanan', 'peters', 'kodddssi@gmail.com', '90009022', '$2y$10$z2VuWFxRzWYLmOMydI5Jze5kNIJFAQlmVp8dLr02N0z9/j76o4iM.', 'user', 0, '2025-07-31 20:02:25'),
(31, 'Agbanan', 'elise', 'sksjsdjkdskjjksdsk@gmail.com', '555555555555', '$2y$10$gIxF1sw7o42VMEAfpbW5qe8OutIa1nOz/ZHkSgmFyUKxkbT1RXr0G', 'user', 0, '2025-07-31 20:19:21');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`);

--
-- Index pour la table `remember_tokens`
--
ALTER TABLE `remember_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `remember_tokens`
--
ALTER TABLE `remember_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `publications`
--
ALTER TABLE `publications`
  ADD CONSTRAINT `publications_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `remember_tokens`
--
ALTER TABLE `remember_tokens`
  ADD CONSTRAINT `remember_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
