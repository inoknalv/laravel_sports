-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2018 at 11:42 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.26-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$p/t4qVGbU7i/mrM19X0NleJZ796Mk9xLhX2yBo2wM0U7W6cKqAwf2', 'RR06I9ofCD1n3N3dlX9tTv8cvx4Ybc7ghH6JQvtPXv910SqpBzcRUuNpQsJ2', '2017-12-07 11:46:38', '2017-12-07 11:46:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_07_112039_create_admins_table', 2),
(4, '2017_12_07_132021_create_players_table', 3),
(5, '2017_12_07_134338_create_teams_table', 3),
(6, '2017_12_07_141145_create_coaches_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(10) UNSIGNED NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goals` int(11) DEFAULT NULL,
  `assists` int(11) DEFAULT NULL,
  `yellow_cards` int(11) DEFAULT NULL,
  `red_cards` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `lastname`, `firstname`, `age`, `country`, `position`, `team_id`, `number`, `description`, `photo`, `goals`, `assists`, `yellow_cards`, `red_cards`, `created_at`, `updated_at`) VALUES
(7, 'Mbappé', 'Kylian', 18, 'France', 'forward', 4, 29, 'Mbappé has been described as a "huge football talent" who "has similarities to Thierry Henry" by Arsène Wenger.', '291512758640.jpg', NULL, NULL, NULL, NULL, '2017-12-08 17:44:00', '2017-12-08 17:44:00'),
(8, 'JR', 'Neymar', 25, 'Brazil', 'forward', 4, 10, 'Neymar\'s dribbling skills, tricks and playmaking ability are reminiscent of compatriot Ronaldinho. His main traits are his creativity, vision, passing, finishing, dribbling, feints and technique, being described as both "electric" and "explosive"', '101512984521.jpg', NULL, NULL, NULL, NULL, '2017-12-11 08:28:41', '2017-12-11 08:28:41'),
(9, 'Cavani', 'Edinson', 30, 'Uruguay', 'forward', 4, 9, 'Likes to come in the inside of the peetch, Very goot at free kicks.', '91512984945.jpg', NULL, NULL, NULL, NULL, '2017-12-11 08:35:45', '2017-12-11 08:35:45'),
(10, 'Draxler', 'Julian', 24, 'Germany', 'midfielder', 4, 23, 'Julian Draxler is a very good midfielder with great skills and a good attitude in front of the goalkeeper.  Always calm and composed.', '231512992519.jpg', NULL, NULL, NULL, NULL, '2017-12-11 10:41:59', '2017-12-11 10:41:59'),
(11, 'Pastore', 'Javier', 28, 'Argentina', 'midfielder', 4, 27, 'Muy buen jugador che !!', '271512992619.jpg', NULL, NULL, NULL, NULL, '2017-12-11 10:43:39', '2017-12-11 10:43:39'),
(12, 'Rabiot', 'Adrien', 22, 'France', 'midfielder', 4, 25, 'Young player that comes from the psg school of football. He was first selected by Laurent Blanc and since, he has been growing non stop to be one of the best midfielder in Europe. Sometimes he is a goat though', '251512992831.jpg', NULL, NULL, NULL, NULL, '2017-12-11 10:47:11', '2017-12-11 10:47:11'),
(13, 'Di Maria', 'Angel', 29, 'Argentina', 'midfielder', 4, 11, 'Great midfielder directly from Argentina. He has play for the real madrid and manchester united so clearly he is a beast ! probably better than Ozil', '111512992939.jpg', NULL, NULL, NULL, NULL, '2017-12-11 10:48:59', '2017-12-11 10:48:59'),
(14, 'Verratti', 'Marco', 25, 'Italia', 'midfielder', 4, 6, 'The little dwarf from Italy is the best midfielder in the world !! after Iniesta', '61512993705.jpg', NULL, NULL, NULL, NULL, '2017-12-11 11:01:45', '2017-12-11 11:01:45'),
(15, 'Alves', 'Dani', 34, 'Brazil', 'defender', 4, 32, 'Great left defender DO BRAZIL CARRALHO', '321512994193.jpg', NULL, NULL, NULL, NULL, '2017-12-11 11:09:53', '2017-12-11 11:09:53'),
(16, 'Kurzawa', 'Leyvin', 25, 'France', 'defender', 4, 20, 'Le petit layvin est un joueur arrogant et pourtant il n\'est pas si bon que ça.', '201512994357.jpg', NULL, NULL, NULL, NULL, '2017-12-11 11:12:37', '2017-12-11 11:12:37'),
(17, 'Marquinhos', 'Marco', 23, 'Brazil', 'defender', 4, 5, 'Very good defender', '51512994547.jpg', NULL, NULL, NULL, NULL, '2017-12-11 11:15:47', '2017-12-11 11:15:47'),
(18, 'Silva', 'Thiago', 33, 'Brazil', 'defender', 4, 2, 'Has played for the Milan AC when they were one of the best club in the world. Nuff said', '21512994629.jpg', NULL, NULL, NULL, NULL, '2017-12-11 11:17:09', '2017-12-11 11:17:09'),
(19, 'Areola', 'Alphonse', 24, 'France', 'goalkeeper', 4, 1, 'Has win the world cup of -20 yers old', '11512994779.jpg', NULL, NULL, NULL, NULL, '2017-12-11 11:19:39', '2017-12-11 11:19:39'),
(20, 'Fekir', 'Nabil', 24, 'France', 'forward', 1, 18, 'A very good striker with a great future surely', '181512995347.jpg', NULL, NULL, NULL, NULL, '2017-12-11 11:29:07', '2017-12-11 11:29:07'),
(21, 'Depay', 'Memphis', 23, 'Holland', 'forward', 1, 11, 'Great guy this Memphis', '111512995702.jpg', NULL, NULL, NULL, NULL, '2017-12-11 11:35:03', '2017-12-11 11:35:03'),
(22, 'Ino', 'Knalv', 21, 'France', 'forward', 1, 88, 'the best player of his generation and beyond', '881513187504.jpg', NULL, NULL, NULL, NULL, '2017-12-13 16:51:44', '2017-12-13 16:51:44');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trigram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h_wins` int(11) DEFAULT NULL,
  `h_draws` int(11) DEFAULT NULL,
  `h_loss` int(11) DEFAULT NULL,
  `a_wins` int(11) DEFAULT NULL,
  `a_draws` int(11) DEFAULT NULL,
  `a_loss` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `trigram`, `crest`, `h_wins`, `h_draws`, `h_loss`, `a_wins`, `a_draws`, `a_loss`, `created_at`, `updated_at`) VALUES
(1, 'Olympique Lyonnais', 'OL', 'OL1512735102.png', 4, 3, 1, 6, 2, 1, '2017-12-08 11:11:42', '2017-12-08 11:11:42'),
(4, 'Paris-Saint-Germain Football Club', 'PSG', 'PSG1512744882.png', 9, 0, 0, 5, 2, 1, '2017-12-08 13:54:42', '2017-12-08 13:54:42'),
(5, 'Toulouse F.C.', 'TFC', 'TFC1512746346.png', 4, 2, 2, 1, 2, 6, '2017-12-08 14:19:06', '2017-12-08 14:19:06'),
(7, 'Football Club de Metz', 'FCM', 'FCM1512750892.png', 0, 1, 8, 1, 1, 6, '2017-12-08 15:34:52', '2017-12-08 15:34:52'),
(8, 'AS Saint-Etienne', 'ASE', 'ASE1512751038.png', 3, 4, 2, 2, 1, 5, '2017-12-08 15:37:18', '2017-12-08 15:37:18'),
(9, 'Amiens SCF', 'ASC', 'ASC1512816699.png', 4, 1, 3, 2, 2, 5, '2017-12-09 09:51:39', '2017-12-09 09:51:39'),
(10, 'Angers SCO', 'SCO', 'SCO1512816765.png', 0, 4, 4, 2, 5, 2, '2017-12-09 09:52:45', '2017-12-09 09:52:45'),
(11, 'FC Girondins de Bordeaux', 'FCB', 'FCB1512816839.png', 4, 2, 2, 1, 3, 5, '2017-12-09 09:53:59', '2017-12-09 09:53:59'),
(12, 'Stade Malherbe de Caen', 'SMC', 'SMC1512816900.png', 5, 1, 3, 2, 1, 5, '2017-12-09 09:55:00', '2017-12-09 09:55:00'),
(13, 'Dijon Football Côte d\'Or', 'DFC', 'DFC1512816967.png', 5, 1, 3, 1, 2, 5, '2017-12-09 09:56:07', '2017-12-09 09:56:07'),
(14, 'En Avant Guingamp', 'EAG', 'EAG1512817031.png', 4, 4, 1, 2, 0, 6, '2017-12-09 09:57:11', '2017-12-09 09:57:11'),
(15, 'Lille LOSC', 'LOS', 'LOS1512817071.png', 3, 2, 3, 2, 1, 6, '2017-12-09 09:57:51', '2017-12-09 09:57:51'),
(16, 'Olympique de Marseille', 'OM', 'OM1512817148.png', 5, 2, 1, 5, 3, 1, '2017-12-09 09:59:08', '2017-12-09 09:59:08'),
(17, 'AS Monaco Football Club', 'ASM', 'ASM1512817217.png', 7, 1, 1, 4, 1, 3, '2017-12-09 10:00:17', '2017-12-09 10:00:17'),
(18, 'Montpellier-Herault Sport Club', 'MHS', 'MHS1512817266.png', 3, 4, 2, 2, 4, 2, '2017-12-09 10:01:06', '2017-12-09 10:01:06'),
(19, 'FC Nantes', 'FCN', 'FCN1512817448.png', 5, 1, 2, 3, 2, 4, '2017-12-09 10:04:08', '2017-12-09 10:04:08'),
(20, 'OGC Nice Côte d\'Azur', 'OGC', 'OGC1512817493.png', 4, 1, 4, 3, 1, 4, '2017-12-09 10:04:53', '2017-12-09 10:04:53'),
(21, 'Stade Rennais Football Club', 'SR', 'SR1512817569.png', 4, 1, 3, 3, 3, 3, '2017-12-09 10:06:09', '2017-12-09 10:06:09'),
(22, 'Racing Club de Strasbourg', 'RCS', 'RCS1512817617.png', 3, 3, 2, 2, 3, 4, '2017-12-09 10:06:57', '2017-12-09 10:06:57'),
(23, 'ESTAC Troyes', 'EST', 'EST1512817655.png', 3, 2, 4, 2, 1, 5, '2017-12-09 10:07:35', '2017-12-09 10:07:35'),
(24, 'FC Visiteurs', 'FCV', 'FCV1513187626.png', NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-13 16:53:46', '2017-12-13 16:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ino', 'ino@gmail.com', '$2y$10$x0FOZK1poL2gYrpmrM1Y4uc23hi2zbTa3kj9CxNr/.lbTWCcwrqN6', 'NWMeI91Az3JDGTUg59yW2DszQcb8N9vW0jkHMjZxKGMdcFrNAb4diVy0Aiv6', '2017-12-07 08:31:48', '2017-12-07 08:31:48'),
(2, 'george', 'george@best.com', '$2y$10$4xi44N9FnKAneam10rOEWuNlWxksxp2d7Me7qr3RyKeJSmUc4y52y', 'UlaNf6n78CXfEoLWoo0gLewzuAkSuzkYNak15uJpzHOGeWnvyX3xuhFDe1TL', '2017-12-07 10:15:58', '2017-12-07 10:15:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
