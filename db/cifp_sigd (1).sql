-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : dim. 26 nov. 2023 à 22:18
-- Version du serveur : 5.7.39
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cifp_sigd`
--

-- --------------------------------------------------------

--
-- Structure de la table `cvs`
--

CREATE TABLE `cvs` (
  `cv_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `education` text,
  `experience` text,
  `skills` text,
  `languages` varchar(100) DEFAULT NULL,
  `certifications` text,
  `hobbies` text,
  `path` varchar(255) DEFAULT NULL,
  `id_employee` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cvs`
--

INSERT INTO `cvs` (`cv_id`, `user_id`, `education`, `experience`, `skills`, `languages`, `certifications`, `hobbies`, `path`, `id_employee`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dossier/kzwt5if2yQVqNxrglTpz631PLIjd51yVWsOCDRVL.png', 1, '2023-11-26 16:08:09', '2023-11-26 16:08:09'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dossier/8sqZTvVlsQpM2wAUsXq9JPDp7pddyo8s2lkivVzJ.pdf', 2, '2023-11-26 22:11:49', '2023-11-26 22:11:49'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dossier/vB1vRZPqp08Hdxc6KgR5oN3HV4eNftpd8AuVF1ek.pdf', 3, '2023-11-26 22:14:50', '2023-11-26 22:14:50');

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `employee_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `hire_date` date DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id_service` int(11) DEFAULT NULL,
  `id_cv` int(11) DEFAULT NULL,
  `matricule` varchar(50) DEFAULT NULL,
  `grade` varchar(100) DEFAULT NULL,
  `corps` varchar(50) DEFAULT NULL,
  `sexe` varchar(10) DEFAULT NULL,
  `service` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`employee_id`, `first_name`, `last_name`, `position`, `department`, `hire_date`, `salary`, `email`, `id_service`, `id_cv`, `matricule`, `grade`, `corps`, `sexe`, `service`, `created_at`, `updated_at`) VALUES
(1, 'sdfsd', 'dfsdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdfs', 'sdfsd', 'sdfsd', 'M', 'CIFP', '2023-11-26 16:08:09', '2023-11-26 16:08:09'),
(2, 'Aly', 'Kane', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9870099', 'Informatique', 'Ingénieure', 'M', 'ACCT', '2023-11-26 22:11:49', '2023-11-26 22:11:49'),
(3, 'Seydou', 'Sylla', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9870091', 'Informatique', 'Ingénieure', 'M', 'ACCT', '2023-11-26 22:14:50', '2023-11-26 22:14:50');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(100) DEFAULT NULL,
  `description` text,
  `price` decimal(10,2) DEFAULT NULL,
  `availability` tinyint(1) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `registration_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`cv_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`employee_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `cv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `employes`
--
ALTER TABLE `employes`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cvs`
--
ALTER TABLE `cvs`
  ADD CONSTRAINT `cvs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
