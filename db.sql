-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 10:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `firstName`, `lastName`, `created_at`, `updated_at`) VALUES
(1, 'Barry', 'Kovacek', '2021-04-05 11:54:32', '2021-04-05 11:54:32'),
(2, 'Dustin', 'Thompson', '2021-04-05 11:54:32', '2021-04-05 11:54:32'),
(3, 'Beth', 'Price', '2021-04-05 11:54:33', '2021-04-05 11:54:33'),
(4, 'Cade', 'Fay', '2021-04-05 11:54:33', '2021-04-05 11:54:33'),
(5, 'Jany', 'Collins', '2021-04-05 11:54:33', '2021-04-05 11:54:33'),
(6, 'Myles', 'Welch', '2021-04-05 11:54:34', '2021-04-05 11:54:34'),
(7, 'Werner', 'Feil', '2021-04-05 11:54:34', '2021-04-05 11:54:34'),
(8, 'Aric', 'Frami', '2021-04-05 11:54:34', '2021-04-05 11:54:34'),
(9, 'Hubert', 'O\'Reilly', '2021-04-05 11:54:34', '2021-04-05 11:54:34'),
(10, 'Concepcion', 'Medhurst', '2021-04-05 11:54:34', '2021-04-05 11:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL,
  `publisher_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author_id`, `genre_id`, `publisher_id`, `created_at`, `updated_at`) VALUES
(1, 'Dolorem mollitia similique deleniti accusantium.', 1, 1, 1, '2021-04-05 11:54:34', '2021-04-05 11:54:34'),
(2, 'Voluptatem dolores libero voluptatum expedita.', 2, 2, 2, '2021-04-05 11:54:34', '2021-04-05 11:54:34'),
(3, 'Quisquam explicabo vel aut.', 3, 3, 3, '2021-04-05 11:54:35', '2021-04-05 11:54:35'),
(4, 'Aliquid fuga nostrum incidunt.', 4, 4, 4, '2021-04-05 11:54:35', '2021-04-05 11:54:35'),
(5, 'Eum voluptatibus ut.', 5, 5, 5, '2021-04-05 11:54:35', '2021-04-05 11:54:35'),
(6, 'Aut aliquid omnis id accusantium.', 6, 6, 6, '2021-04-05 11:54:35', '2021-04-05 11:54:35'),
(7, 'Aliquam et aut ut fugiat.', 7, 7, 7, '2021-04-05 11:54:36', '2021-04-05 11:54:36'),
(8, 'Accusantium et amet.', 8, 8, 8, '2021-04-05 11:54:36', '2021-04-05 11:54:36'),
(9, 'Dicta aliquam non eaque culpa.', 9, 9, 9, '2021-04-05 11:54:36', '2021-04-05 11:54:36'),
(10, 'Sit distinctio omnis debitis.', 10, 10, 10, '2021-04-05 11:54:36', '2021-04-05 11:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `book_reader`
--

CREATE TABLE `book_reader` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `reader_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_reader`
--

INSERT INTO `book_reader` (`id`, `book_id`, `reader_id`, `created_at`, `updated_at`) VALUES
(1, 1, 11, NULL, NULL),
(2, 1, 12, NULL, NULL),
(3, 1, 13, NULL, NULL),
(4, 1, 14, NULL, NULL),
(5, 2, 15, NULL, NULL),
(6, 2, 16, NULL, NULL),
(7, 2, 17, NULL, NULL),
(8, 2, 18, NULL, NULL),
(9, 3, 19, NULL, NULL),
(10, 3, 20, NULL, NULL),
(11, 3, 21, NULL, NULL),
(12, 3, 22, NULL, NULL),
(13, 4, 23, NULL, NULL),
(14, 4, 24, NULL, NULL),
(15, 4, 25, NULL, NULL),
(16, 4, 26, NULL, NULL),
(17, 5, 27, NULL, NULL),
(18, 5, 28, NULL, NULL),
(19, 5, 29, NULL, NULL),
(20, 5, 30, NULL, NULL),
(21, 6, 31, NULL, NULL),
(22, 6, 32, NULL, NULL),
(23, 6, 33, NULL, NULL),
(24, 6, 34, NULL, NULL),
(25, 7, 35, NULL, NULL),
(26, 7, 36, NULL, NULL),
(27, 7, 37, NULL, NULL),
(28, 7, 38, NULL, NULL),
(29, 8, 39, NULL, NULL),
(30, 8, 40, NULL, NULL),
(31, 8, 41, NULL, NULL),
(32, 8, 42, NULL, NULL),
(33, 9, 43, NULL, NULL),
(34, 9, 44, NULL, NULL),
(35, 9, 45, NULL, NULL),
(36, 9, 46, NULL, NULL),
(37, 10, 47, NULL, NULL),
(38, 10, 48, NULL, NULL),
(39, 10, 49, NULL, NULL),
(41, 10, 50, '2021-04-07 07:21:04', '2021-04-07 07:21:04');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'enim', '2021-04-05 11:54:32', '2021-04-05 11:54:32'),
(2, 'iusto', '2021-04-05 11:54:33', '2021-04-05 11:54:33'),
(3, 'atque', '2021-04-05 11:54:33', '2021-04-05 11:54:33'),
(4, 'ratione', '2021-04-05 11:54:33', '2021-04-05 11:54:33'),
(5, 'est', '2021-04-05 11:54:33', '2021-04-05 11:54:33'),
(6, 'beatae', '2021-04-05 11:54:34', '2021-04-05 11:54:34'),
(7, 'aut', '2021-04-05 11:54:34', '2021-04-05 11:54:34'),
(8, 'maiores', '2021-04-05 11:54:34', '2021-04-05 11:54:34'),
(9, 'et', '2021-04-05 11:54:34', '2021-04-05 11:54:34'),
(10, 'velit', '2021-04-05 11:54:34', '2021-04-05 11:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Gerhold, Pollich and Weimann', 'Abbott Plain', '2021-04-05 11:54:32', '2021-04-05 11:54:32'),
(2, 'Conn, Collier and Maggio', 'Hettinger Knoll', '2021-04-05 11:54:33', '2021-04-05 11:54:33'),
(3, 'Keeling-Heaney', 'Laron Streets', '2021-04-05 11:54:33', '2021-04-05 11:54:33'),
(4, 'Bartell PLC', 'Tyreek Underpass', '2021-04-05 11:54:33', '2021-04-05 11:54:33'),
(5, 'Moen and Sons', 'Wilkinson Streets', '2021-04-05 11:54:34', '2021-04-05 11:54:34'),
(6, 'Stamm, Nikolaus and Reichert', 'Herman Summit', '2021-04-05 11:54:34', '2021-04-05 11:54:34'),
(7, 'Schaefer LLC', 'Crona View', '2021-04-05 11:54:34', '2021-04-05 11:54:34'),
(8, 'Mayer Group', 'Tyreek Prairie', '2021-04-05 11:54:34', '2021-04-05 11:54:34'),
(9, 'Cormier-Rogahn', 'Lavonne Radial', '2021-04-05 11:54:34', '2021-04-05 11:54:34'),
(10, 'Schoen PLC', 'Nitzsche Gardens', '2021-04-05 11:54:34', '2021-04-05 11:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `readers`
--

CREATE TABLE `readers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UCN` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `readers`
--

INSERT INTO `readers` (`id`, `firstName`, `lastName`, `address`, `UCN`, `work`, `created_at`, `updated_at`) VALUES
(1, 'Zita', 'Abshire', 'Abshire Well', '6050760907', 'Milling Machine Operator', '2021-04-05 11:54:32', '2021-04-05 11:54:32'),
(2, 'Meredith', 'Gerlach', 'O\'Kon Parkway', '9101458374', 'Stock Clerk', '2021-04-05 11:54:32', '2021-04-05 11:54:32'),
(3, 'Jed', 'Lesch', 'Gutkowski Walk', '9549753014', 'Refrigeration Mechanic', '2021-04-05 11:54:32', '2021-04-05 11:54:32'),
(4, 'Darrin', 'Pagac', 'Kautzer Run', '7735195452', 'Freight Agent', '2021-04-05 11:54:32', '2021-04-05 11:54:32'),
(5, 'Gilda', 'Hahn', 'Veum Ford', '8037410439', 'Occupational Therapist Aide', '2021-04-05 11:54:32', '2021-04-05 11:54:32'),
(6, 'Santina', 'Turcotte', 'Kristopher Crest', '8702261012', 'Grips', '2021-04-05 11:54:32', '2021-04-05 11:54:32'),
(7, 'Stuart', 'O\'Conner', 'Block Course', '8193893501', 'Construction Equipment Operator', '2021-04-05 11:54:32', '2021-04-05 11:54:32'),
(8, 'Scotty', 'Hauck', 'Darien Haven', '7375858108', 'Talent Acquisition Manager', '2021-04-05 11:54:32', '2021-04-05 11:54:32'),
(9, 'Darwin', 'Prohaska', 'Nettie Via', '1523635225', 'Textile Worker', '2021-04-05 11:54:32', '2021-04-05 11:54:32'),
(10, 'Werner', 'Borer', 'Floy Tunnel', '6543391623', 'Archeologist', '2021-04-05 11:54:32', '2021-04-05 11:54:32'),
(11, 'Laila', 'Howe', 'Robbie Spur', '8852651828', 'Civil Engineering Technician', '2021-04-05 11:54:34', '2021-04-05 11:54:34'),
(12, 'Kiel', 'Bergstrom', 'Osbaldo Court', '4409831658', 'Oil Service Unit Operator', '2021-04-05 11:54:34', '2021-04-05 11:54:34'),
(13, 'Marjolaine', 'Renner', 'Lemke View', '7666246466', 'Sales Person', '2021-04-05 11:54:34', '2021-04-05 11:54:34'),
(14, 'Scot', 'Feil', 'Jess Mountains', '8368282117', 'Geography Teacher', '2021-04-05 11:54:34', '2021-04-05 11:54:34'),
(15, 'Edison', 'Hermann', 'Rutherford Well', '7849585649', 'Extruding Machine Operator', '2021-04-05 11:54:35', '2021-04-05 11:54:35'),
(16, 'Gabrielle', 'Kirlin', 'Chadrick Light', '7866953892', 'Board Of Directors', '2021-04-05 11:54:35', '2021-04-05 11:54:35'),
(17, 'Yolanda', 'Ritchie', 'Jayme Tunnel', '8871317213', 'Conservation Scientist', '2021-04-05 11:54:35', '2021-04-05 11:54:35'),
(18, 'Toby', 'Dietrich', 'Stanton Green', '1452870881', 'Motorboat Mechanic', '2021-04-05 11:54:35', '2021-04-05 11:54:35'),
(19, 'Jorge', 'Torphy', 'Kuhn Square', '2410931360', 'Poultry Cutter', '2021-04-05 11:54:35', '2021-04-05 11:54:35'),
(20, 'Keshaun', 'Fay', 'Alia Islands', '5314836325', 'Rail Car Repairer', '2021-04-05 11:54:35', '2021-04-05 11:54:35'),
(21, 'Laurie', 'Ziemann', 'Bernadine Lodge', '8894441177', 'Hoist and Winch Operator', '2021-04-05 11:54:35', '2021-04-05 11:54:35'),
(22, 'Sid', 'Ullrich', 'Goldner Harbors', '7811090636', 'Aircraft Launch Specialist', '2021-04-05 11:54:35', '2021-04-05 11:54:35'),
(23, 'Bradly', 'Hansen', 'Parker Ways', '5161511280', 'Precision Printing Worker', '2021-04-05 11:54:35', '2021-04-05 11:54:35'),
(24, 'Muriel', 'Robel', 'Osinski Heights', '8733683436', 'Veterinary Assistant OR Laboratory Animal Caretaker', '2021-04-05 11:54:35', '2021-04-05 11:54:35'),
(25, 'Ramon', 'Swaniawski', 'Heidenreich Skyway', '1378489255', 'School Social Worker', '2021-04-05 11:54:35', '2021-04-05 11:54:35'),
(26, 'Eloisa', 'Nader', 'Wolf View', '3438847005', 'Occupational Therapist', '2021-04-05 11:54:35', '2021-04-05 11:54:35'),
(27, 'Yasmeen', 'Emmerich', 'Kub Bridge', '6675874983', 'Rail Yard Engineer', '2021-04-05 11:54:35', '2021-04-05 11:54:35'),
(28, 'Alexandro', 'Ferry', 'Baylee Harbors', '3441076016', 'Industrial Engineer', '2021-04-05 11:54:35', '2021-04-05 11:54:35'),
(29, 'Clarabelle', 'Wiegand', 'Pagac Fork', '3172809838', 'Landscape Artist', '2021-04-05 11:54:35', '2021-04-05 11:54:35'),
(30, 'Virginie', 'Flatley', 'Keshawn Squares', '1062022927', 'Dental Assistant', '2021-04-05 11:54:35', '2021-04-05 11:54:35'),
(31, 'Winona', 'Torphy', 'Christiana Island', '6397271413', 'Architect', '2021-04-05 11:54:36', '2021-04-05 11:54:36'),
(32, 'Oma', 'Lindgren', 'Christiansen Throughway', '2175389992', 'Agricultural Crop Farm Manager', '2021-04-05 11:54:36', '2021-04-05 11:54:36'),
(33, 'Bernita', 'Ward', 'Lemke Gateway', '6711135711', 'Healthcare Support Worker', '2021-04-05 11:54:36', '2021-04-05 11:54:36'),
(34, 'Gracie', 'Lemke', 'Ebert Underpass', '5767653546', 'Welfare Eligibility Clerk', '2021-04-05 11:54:36', '2021-04-05 11:54:36'),
(35, 'Wilfrid', 'Friesen', 'Bernier Via', '1531689715', 'Sketch Artist', '2021-04-05 11:54:36', '2021-04-05 11:54:36'),
(36, 'Fletcher', 'Moore', 'Jaskolski Pine', '2176676636', 'Industrial Production Manager', '2021-04-05 11:54:36', '2021-04-05 11:54:36'),
(37, 'Quinten', 'Goldner', 'Michale Drive', '3403880199', 'Computer Programmer', '2021-04-05 11:54:36', '2021-04-05 11:54:36'),
(38, 'Norberto', 'Herzog', 'Maud Springs', '8339145951', 'Advertising Sales Agent', '2021-04-05 11:54:36', '2021-04-05 11:54:36'),
(39, 'Elenora', 'Lind', 'Shanahan Passage', '6235124851', 'General Farmworker', '2021-04-05 11:54:36', '2021-04-05 11:54:36'),
(40, 'Ralph', 'Smith', 'Bettye Spur', '5086288801', 'Painter and Illustrator', '2021-04-05 11:54:36', '2021-04-05 11:54:36'),
(41, 'Jayne', 'Kunze', 'Victor Crossing', '8876172068', 'Broadcast News Analyst', '2021-04-05 11:54:36', '2021-04-05 11:54:36'),
(42, 'Trent', 'Cartwright', 'Hyatt Junctions', '6806593903', 'Financial Manager', '2021-04-05 11:54:36', '2021-04-05 11:54:36'),
(43, 'Jillian', 'Rempel', 'Pagac Forges', '7618012429', 'Educational Psychologist', '2021-04-05 11:54:36', '2021-04-05 11:54:36'),
(44, 'Kelvin', 'D\'Amore', 'Osinski Ramp', '6424388192', 'Mathematical Science Teacher', '2021-04-05 11:54:36', '2021-04-05 11:54:36'),
(45, 'Aubrey', 'Hilpert', 'Reichel Loaf', '9643507278', 'Parking Lot Attendant', '2021-04-05 11:54:36', '2021-04-05 11:54:36'),
(46, 'Alycia', 'Littel', 'Deshaun Port', '9872640493', 'Forestry Conservation Science Teacher', '2021-04-05 11:54:36', '2021-04-05 11:54:36'),
(47, 'Mozelle', 'Hills', 'Wyman Tunnel', '8459072284', 'Materials Scientist', '2021-04-05 11:54:36', '2021-04-05 11:54:36'),
(48, 'Michaela', 'Gibson', 'Felipa Parks', '6007318579', 'Business Operations Specialist', '2021-04-05 11:54:37', '2021-04-05 11:54:37'),
(49, 'Deborah', 'Nolan', 'Vance Crossing', '2116805834', 'Cartographer', '2021-04-05 11:54:37', '2021-04-05 11:54:37'),
(50, 'Beatrice', 'Volkman', 'Allan Summit', '9097297228', 'Nonfarm Animal Caretaker', '2021-04-05 11:54:37', '2021-04-05 11:54:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_author_id_foreign` (`author_id`),
  ADD KEY `books_genre_id_foreign` (`genre_id`),
  ADD KEY `books_publisher_id_foreign` (`publisher_id`);

--
-- Indexes for table `book_reader`
--
ALTER TABLE `book_reader`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_reader_book_id_foreign` (`book_id`),
  ADD KEY `book_reader_reader_id_foreign` (`reader_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `readers`
--
ALTER TABLE `readers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `book_reader`
--
ALTER TABLE `book_reader`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `readers`
--
ALTER TABLE `readers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `books_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `books_publisher_id_foreign` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `book_reader`
--
ALTER TABLE `book_reader`
  ADD CONSTRAINT `book_reader_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_reader_reader_id_foreign` FOREIGN KEY (`reader_id`) REFERENCES `readers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
