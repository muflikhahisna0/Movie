-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 10 Jan 2021 pada 01.28
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `film`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `listfilm`
--

DROP TABLE IF EXISTS `listfilm`;
CREATE TABLE IF NOT EXISTS `listfilm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `sutradara` varchar(255) NOT NULL,
  `synopsis` varchar(1000) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `listfilm`
--

INSERT INTO `listfilm` (`id`, `slug`, `judul`, `sutradara`, `synopsis`, `cover`, `created_at`, `updated_at`) VALUES
(6, 'Captain-America', 'Captain America', 'Joseph Eggleston Johnston ', 'Predominantly set during World War II, Steve Rogers is a sickly man from Brooklyn who\'s transformed into super-soldier Captain America to aid in the war effort. Rogers must stop the Red Skull â€“ Adolf Hitler\'s ruthless head of weaponry, and the leader of an organization that intends to use a mysterious device of untold powers for world domination.', 'captain-america.jpg', NULL, NULL),
(2, 'jurassic-world', 'Jurassic World ', 'Colin Trevorrow', 'Six months after the demise of the Jurassic World theme park on Isla Nublar, a group of mercenaries are sent to Isla Nublar to recover the bones of the Indominus rex from the Jurassic World lagoon for the creation of a new genetically modified hybrid: the Indoraptor.', 'jurasic.png', NULL, '2020-11-07 07:49:17'),
(3, 'spiderman', 'Spider-Man: Homecoming', 'Stan Lee, Steve Ditko and Kaare Andrews', 'pider-Man meets some of his greatest foes including Green Goblin, Kingpin, and Dr. Octopus, and rediscovers his own identity in the process.', 'spiderman.jpg', NULL, NULL),
(4, 'Father of the Bride is a 1991 American comedy film starring Steve Martin, Diane Keaton, Kimberly Williams (in her film debut), George Newbern, Martin Short, B. D. Wong, and Kieran Culkin.', 'The Incredible Hulk', 'Ang Lee and Louis Leterrier', 'Just when George Banks has recovered from his daughter\'s wedding, he receives the news that she\'s pregnant ... and that George\'s wife, Nina, is expecting too. He was planning on selling their home, but that\'s a plan that -- like George -- will have to change with the arrival of both a grandchild and a kid of his own.', 'hulk.jpg', NULL, NULL),
(5, 'Sabrina is a 1995 American romantic comedy-drama film adapted by Barbara Benedek and David Rayfiel. It is a remake of the 1954 Billy Wilder film Sabrina, which in turn was based upon the 1953 play Sabrina Fair.', 'Avengers: Endgame', ' Joe Russo and Anthony Russo', 'An ugly duckling having undergone a remarkable change, still harbors feelings for her crush: a carefree playboy, but not before his business-focused brother has something to say about it.', 'c.jpg', NULL, NULL),
(7, 'The-Last-Airbender', 'The Last Airbender', 'Manoj Nelliyatu Shyamalan ', 'he story follows the adventures of Aang, a young successor to a long line of Avatars, who must put his childhood ways aside and stop the Fire Nation from enslaving the Water, Earth and Air nations.', 'avatar.jpg', NULL, NULL),
(8, 'transformerssssss', 'Transformerssssss', 'Michael Benjamin Bay', 'As humanity picks up the pieces, following the conclusion of ', 'transformer.jpg', NULL, '2021-01-04 19:28:34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
