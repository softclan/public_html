-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 12:09 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oprextra`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `PostID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Title` varchar(80) NOT NULL,
  `TitleSlug` varchar(255) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `FirstTag` varchar(30) NOT NULL,
  `SecondTag` varchar(30) DEFAULT NULL,
  `ThirdTag` varchar(30) DEFAULT NULL,
  `Content` text NOT NULL,
  `Visible` tinyint(1) NOT NULL DEFAULT '1',
  `DeletePost` tinyint(1) NOT NULL DEFAULT '0',
  `EntryDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`PostID`, `UserID`, `Title`, `TitleSlug`, `Category`, `FirstTag`, `SecondTag`, `ThirdTag`, `Content`, `Visible`, `DeletePost`, `EntryDate`) VALUES
(1, 1, 'Enyimba Through to CAF Champions League Final', 'enyimba-through-to-caf-champions-league-final', 'Headline', 'Sports', '', '', '<p>Two time CAF champions League Winners, Enyimba, Made it to there Fifth Final in Three years<p>\r\n<h1> Magical Right? </h1>', 1, 0, '2018-10-02 18:09:11'),
(2, 1, 'Hartland Through to CAF Champions League Final', 'hartland-through-to-caf-champions-league-final', 'Headline', 'Sports', '', '', '<p>Two time CAF champions League Winners, Enyimba, Made it to there Fifth Final in Three years<p>\r\n<h1> Magical Right? </h1>', 1, 0, '2018-10-02 18:09:38'),
(3, 1, 'Chelsea Through to CAF Champions League Final', 'chelsea-through-to-caf-champions-league-final', 'Headline', 'Sports', '', '', '<p>Two time CAF champions League Winners, Enyimba, Made it to there Fifth Final in Three years<p>\r\n<h1> Magical Right? </h1>', 1, 0, '2018-10-02 18:09:57'),
(4, 1, 'Real Madrid Through to CAF Champions League Final', 'real-madrid-through-to-caf-champions-league-final', 'Headline', 'Sports', '', '', '<p>Two time CAF champions League Winners, Enyimba, Made it to there Fifth Final in Three years<p>\r\n<h1> Magical Right? </h1>', 1, 0, '2018-10-02 18:10:16'),
(5, 1, 'Man United Through to CAF Champions League Final', 'man-united-through-to-caf-champions-league-final', 'Headline', 'Sports', '', '', '<p>Two time CAF champions League Winners, Enyimba, Made it to there Fifth Final in Three years<p>\r\n<h1> Magical Right? </h1>', 1, 0, '2018-10-02 18:10:33'),
(6, 1, 'Barcelona Through to CAF Champions League Final', 'barcelona-through-to-caf-champions-league-final', 'Headline', 'Sports', '', '', '<p>Two time CAF champions League Winners, Enyimba, Made it to there Fifth Final in Three years<p>\r\n<h1> Magical Right? </h1>', 1, 0, '2018-10-02 18:10:56'),
(7, 1, 'Juventus Through to CAF Champions League Final', 'juventus-through-to-caf-champions-league-final', 'Headline', 'Sports', '', '', '<p>Two time CAF champions League Winners, Enyimba, Made it to there Fifth Final in Three years<p>\r\n<h1> Magical Right? </h1>', 1, 0, '2018-10-02 18:11:23'),
(8, 1, 'AS Roma Through to CAF Champions League Final', 'as-roma-through-to-caf-champions-league-final', 'Headline', 'Sports', '', '', '<p>Two time CAF champions League Winners, Enyimba, Made it to there Fifth Final in Three years<p>\r\n<h1> Magical Right? </h1>', 1, 0, '2018-10-02 18:11:45'),
(9, 1, 'Napoli Through to CAF Champions League Final', 'napoli-through-to-caf-champions-league-final', 'Headline', 'Sports', '', '', '<p>Two time CAF champions League Winners, Enyimba, Made it to there Fifth Final in Three years<p>\r\n<h1> Magical Right? </h1>', 1, 0, '2018-10-02 18:12:06'),
(10, 1, 'Wolves Through to CAF Champions League Final', 'wolves-through-to-caf-champions-league-final', 'Headline', 'Sports', '', '', '<p>Two time CAF champions League Winners, Enyimba, Made it to there Fifth Final in Three years<p>\r\n<h1> Magical Right? </h1>', 1, 0, '2018-10-02 18:12:27'),
(11, 1, 'Leeds Through to CAF Champions League Final', 'leeds-through-to-caf-champions-league-final', 'Headline', 'Sports', '', '', '<p>Two time CAF champions League Winners, Enyimba, Made it to there Fifth Final in Three years<p>\r\n<h1> Magical Right? </h1>', 1, 0, '2018-10-02 18:12:43'),
(12, 1, 'Sevila Through to CAF Champions League Final', 'sevila-through-to-caf-champions-league-final', 'Headline', 'Sports', '', '', '<p>Two time CAF champions League Winners, Enyimba, Made it to there Fifth Final in Three years<p>\r\n<h1> Magical Right? </h1>', 1, 0, '2018-10-02 18:13:00'),
(13, 1, 'Valencia Through to CAF Champions League Final', 'valencia-through-to-caf-champions-league-final', 'Headline', 'Sports', '', '', '<p>Two time CAF champions League Winners, Enyimba, Made it to there Fifth Final in Three years<p>\r\n<h1> Magical Right? </h1>', 1, 0, '2018-10-02 18:13:17'),
(14, 1, 'Atletico Through to CAF Champions League Final', 'atletico-through-to-caf-champions-league-final', 'Headline', 'Sports', '', '', '<p>Two time CAF champions League Winners, Enyimba, Made it to there Fifth Final in Three years<p>\r\n<h1> Magical Right? </h1>', 1, 0, '2018-10-02 18:13:32'),
(15, 1, 'Everton Through to CAF Champions League Final', 'everton-through-to-caf-champions-league-final', 'Headline', 'Sports', '', '', '<p>Two time CAF champions League Winners, Enyimba, Made it to there Fifth Final in Three years<p>\r\n<h1> Magical Right? </h1>', 1, 0, '2018-10-02 18:13:45'),
(16, 1, 'Man City Through to CAF Champions League Final', 'man-city-through-to-caf-champions-league-final', 'Headline', 'Sports', '', '', '<p>Two time CAF champions League Winners, Enyimba, Made it to there Fifth Final in Three years<p>\r\n<h1> Magical Right? </h1>', 1, 0, '2018-10-02 18:14:07'),
(17, 1, 'PSG City Through to CAF Champions League Final', 'psg-city-through-to-caf-champions-league-final', 'Headline', 'Sports', '', '', '<p>Two time CAF champions League Winners, Enyimba, Made it to there Fifth Final in Three years<p>\r\n<h1> Magical Right? </h1>', 1, 0, '2018-10-02 18:14:35'),
(18, 1, 'Bayern Munich City Through to CAF Champions League Final', 'bayern-munich-city-through-to-caf-champions-league-final', 'Headline', 'Sports', '', '', '<p>Two time CAF champions League Winners, Enyimba, Made it to there Fifth Final in Three years<p>\r\n<h1> Magical Right? </h1>', 1, 0, '2018-10-02 18:14:58'),
(19, 1, 'QPR  Through to CAF Champions League Final', 'qpr-through-to-caf-champions-league-final', 'Headline', 'Sports', '', '', '<p>Two time CAF champions League Winners, Enyimba, Made it to there Fifth Final in Three years<p>\r\n<h1> Magical Right? </h1>', 1, 0, '2018-10-02 18:15:17'),
(20, 1, 'Liverpool  Through to CAF Champions League Final', 'liverpool-through-to-caf-champions-league-final', 'Headline', 'Sports', '', '', '<p>Two time CAF champions League Winners, Enyimba, Made it to there Fifth Final in Three years<p>\r\n<h1> Magical Right? </h1>', 1, 0, '2018-10-02 18:15:39'),
(21, 1, 'Ambode floors opponents in APC Primary', 'ambode-floors-opponents-in-apc-primary', 'Featured', 'Politics', '', '', '<h1>Govenor Ambode floored his oppents in todays primaries </h1>\r\n<p>This is according to news from the news Agency of Nigeria</p>', 0, 0, '2018-10-02 18:22:41'),
(22, 1, 'Rochas floors opponents in APC Primary', 'rochas-floors-opponents-in-apc-primary', 'Featured', 'Politics', '', '', '<h1>Govenor Ambode floored his oppents in todays primaries </h1>\r\n<p>This is according to news from the news Agency of Nigeria</p>', 1, 0, '2018-10-02 18:23:06'),
(23, 1, 'Apga floors opponents in APC Primary', 'apga-floors-opponents-in-apc-primary', 'Featured', 'Politics', '', '', '<h1>Govenor Ambode floored his oppents in todays primaries </h1>\r\n<p>This is according to news from the news Agency of Nigeria</p>', 1, 0, '2018-10-02 18:23:20'),
(24, 1, 'APC floors opponents in APC Primary', 'apc-floors-opponents-in-apc-primary', 'Featured', 'Politics', '', '', '<h1>Govenor Ambode floored his oppents in todays primaries </h1>\r\n<p>This is according to news from the news Agency of Nigeria</p>', 1, 0, '2018-10-02 18:23:29'),
(25, 1, 'PDP floors opponents in APC Primary', 'pdp-floors-opponents-in-apc-primary', 'Featured', 'Politics', '', '', '<h1>Govenor Ambode floored his oppents in todays primaries </h1>\r\n<p>This is according to news from the news Agency of Nigeria</p>', 1, 0, '2018-10-02 18:23:44'),
(26, 1, 'Sambo floors opponents in APC Primary', 'sambo-floors-opponents-in-apc-primary', 'Featured', 'Politics', '', '', '<h1>Govenor Ambode floored his oppents in todays primaries </h1>\r\n<p>This is according to news from the news Agency of Nigeria</p>', 1, 0, '2018-10-02 18:24:00'),
(27, 1, 'Goodluck floors opponents in APC Primary', 'goodluck-floors-opponents-in-apc-primary', 'Featured', 'Politics', '', '', '<h1>Govenor Ambode floored his oppents in todays primaries </h1>\r\n<p>This is according to news from the news Agency of Nigeria</p>', 1, 0, '2018-10-02 18:24:17'),
(28, 1, 'Jackson floors opponents in APC Primary', 'jackson-floors-opponents-in-apc-primary', 'Featured', 'Politics', '', '', '<h1>Govenor Ambode floored his oppents in todays primaries </h1>\r\n<p>This is according to news from the news Agency of Nigeria</p>', 1, 0, '2018-10-02 18:24:33'),
(29, 1, 'Emeka floors opponents in APC Primary', 'emeka-floors-opponents-in-apc-primary', 'Featured', 'Politics', '', '', '<h1>Govenor Ambode floored his oppents in todays primaries </h1>\r\n<p>This is according to news from the news Agency of Nigeria</p>', 1, 0, '2018-10-02 18:24:48'),
(30, 1, 'Ebere floors opponents in APC Primary', 'ebere-floors-opponents-in-apc-primary', 'Featured', 'Politics', '', '', '<h1>Govenor Ambode floored his oppents in todays primaries </h1>\r\n<p>This is according to news from the news Agency of Nigeria</p>', 1, 0, '2018-10-02 18:25:02'),
(31, 1, 'Okon floors opponents in APC Primary', 'okon-floors-opponents-in-apc-primary', 'Featured', 'Politics', '', '', '<h1>Govenor Ambode floored his oppents in todays primaries </h1>\r\n<p>This is according to news from the news Agency of Nigeria</p>', 1, 0, '2018-10-02 18:25:16'),
(32, 1, 'Adamu floors opponents in APC Primary', 'adamu-floors-opponents-in-apc-primary', 'Featured', 'Politics', '', '', '<h1>Govenor Ambode floored his oppents in todays primaries </h1>\r\n<p>This is according to news from the news Agency of Nigeria</p>', 1, 0, '2018-10-02 18:25:29'),
(33, 1, 'Prince floors opponents in APC Primary', 'prince-floors-opponents-in-apc-primary', 'Featured', 'Politics', '', '', '<h1>Govenor Ambode floored his oppents in todays primaries </h1>\r\n<p>This is according to news from the news Agency of Nigeria</p>', 1, 0, '2018-10-02 18:25:49'),
(34, 1, 'Harley floors opponents in APC Primary', 'harley-floors-opponents-in-apc-primary', 'Featured', 'Politics', '', '', '<h1>Govenor Ambode floored his oppents in todays primaries </h1>\r\n<p>This is according to news from the news Agency of Nigeria</p>', 1, 0, '2018-10-02 18:26:06'),
(35, 1, 'Tommy floors opponents in APC Primary', 'tommy-floors-opponents-in-apc-primary', 'Featured', 'Politics', '', '', '<h1>Govenor Ambode floored his oppents in todays primaries </h1>\r\n<p>This is according to news from the news Agency of Nigeria</p>', 1, 0, '2018-10-02 18:26:21'),
(36, 1, 'Ghost floors opponents in APC Primary', 'ghost-floors-opponents-in-apc-primary', 'Featured', 'Politics', '', '', '<h1>Govenor Ambode floored his oppents in todays primaries </h1>\r\n<p>This is according to news from the news Agency of Nigeria</p>', 1, 0, '2018-10-02 18:26:37'),
(37, 1, 'John floors opponents in APC Primary', 'john-floors-opponents-in-apc-primary', 'Featured', 'Politics', '', '', '<h1>Govenor Ambode floored his oppents in todays primaries </h1>\r\n<p>This is according to news from the news Agency of Nigeria</p>', 1, 0, '2018-10-02 18:26:51'),
(38, 1, 'James floors opponents in APC Primary', 'james-floors-opponents-in-apc-primary', 'Featured', 'Politics', '', '', '<h1>Govenor Ambode floored his oppents in todays primaries </h1>\r\n<p>This is according to news from the news Agency of Nigeria</p>', 1, 0, '2018-10-02 18:27:06'),
(39, 1, 'Tinibu floors opponents in APC Primary', 'tinibu-floors-opponents-in-apc-primary', 'Featured', 'Politics', '', '', '<h1>Govenor Ambode floored his oppents in todays primaries </h1>\r\n<p>This is according to news from the news Agency of Nigeria</p>', 1, 0, '2018-10-02 18:27:35'),
(40, 1, 'Okon floors opponents in APC Primary', 'okon-floors-opponents-in-apc-primary-1', 'Featured', 'Politics', '', '', '<h1>Govenor Ambode floored his oppents in todays primaries </h1>\r\n<p>This is according to news from the news Agency of Nigeria</p>', 1, 0, '2018-10-02 18:27:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserEmail` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `DisplayName` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `AccountNumber` int(20) DEFAULT NULL,
  `BankName` varchar(125) DEFAULT NULL,
  `VerificationStatus` tinyint(1) DEFAULT '0',
  `BlockStatus` tinyint(1) DEFAULT '0',
  `ActivationStatus` tinyint(1) DEFAULT '0',
  `EntryDate` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserEmail`, `Password`, `DisplayName`, `Name`, `AccountNumber`, `BankName`, `VerificationStatus`, `BlockStatus`, `ActivationStatus`, `EntryDate`) VALUES
(1, 'onyemenamndu@gmail.com', 'password', 'prondubuisi', NULL, NULL, NULL, 0, 0, 0, '2018-09-26 15:48:27'),
(2, 'oprextra@gmail.com', 'blackman', 'prondubuisi', 'Onyemenam Ndubuisi', 2147483647, '', 0, 0, 0, '2018-10-08 16:18:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`PostID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `Category` (`Category`),
  ADD KEY `TitleSlug` (`TitleSlug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `PostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `FK_PostUser` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
