-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 14 Mai 2014 à 13:54
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `gaming`
--
CREATE DATABASE IF NOT EXISTS `gaming` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gaming`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_name` varchar(255) NOT NULL,
  `article_desc` varchar(255) NOT NULL,
  `article` longtext NOT NULL,
  `video` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `article_name`, `article_desc`, `article`, `video`, `created_at`, `updated_at`) VALUES
(1, 'izi', 'izilubibi', 'Nouveau  avec un gameplay super trop genial ', '', '2014-05-11 13:45:41', '2014-05-11 13:45:41'),
(2, 'News game', 'urluberlu', 'super swagg', '', '2014-05-11 13:53:26', '2014-05-11 13:53:26'),
(3, 'mister', 'mister', 'Hispster swagg', '', '2014-05-12 06:52:21', '2014-05-12 06:52:21'),
(4, 'News game', 'nouveau jeux trop en forme sa mere', 'iziluberlu', '', '2014-05-12 06:53:38', '2014-05-12 06:53:38'),
(5, 'posay', 'salut c''est Skype', 'un article de teste', '', '2014-05-12 09:50:04', '2014-05-12 09:50:04');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(2, 'mister', '$2y$10$IGmKRD4fSG3wuFLkHUAVKOAn.wQMK8Ml4z9b.y6JH7cSsv6qtkUvC', '2014-05-11 06:45:24', '2014-05-11 06:45:24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
