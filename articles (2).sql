-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 08:39 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `article`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL,
  `alias` varchar(25) DEFAULT NULL,
  `img` varchar(500) NOT NULL,
  `meta_key` varchar(50) DEFAULT NULL,
  `meta_desc` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `text`, `alias`, `img`, `meta_key`, `meta_desc`, `created_at`, `updated_at`) VALUES
(3, 'Brazil', '285 lei', '100% SPECIALTY ARABICA\r\nFRESHLY ROASTED\r\n', 'alias3', 'https://tucanocoffee.com/wp-content/uploads/2016/07/brasil-FOR-SITE-413x584-164x230.png', 'meta_key3', 'meta_desc3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Costa Rica (brewing)', '152 lei', '100% SPECIALTY ARABICA\r\nFRESHLY ROASTED\r\n', 'alias4', 'https://tucanocoffee.com/wp-content/uploads/2016/07/costarica-FOR-SITE-413x584-164x230.png', 'meta_key4', 'meta_desc4', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'Ethiopia (brewing)', '300 lei', '100% SPECIALTY ARABICA\r\nFRESHLY ROASTED\r\n', 'alias1', 'https://tucanocoffee.com/wp-content/uploads/2017/06/ethiopia-espresso-FOR-SITE-413x584-164x230.png', 'meta_key1', 'meta_desc1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Kenya', '250 lei', '100% SPECIALTY ARABICA\r\nFRESHLY ROASTED\r\n', 'alias2', 'https://tucanocoffee.com/wp-content/uploads/2016/07/kenia-FOR-SITE-413x584-164x230.png', 'meta_key2', 'meta_desc2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Tucano Decaf', '268 lei', '100% SPECIALTY ARABICA\r\nFRESHLY ROASTED\r\n', 'alias6', 'https://tucanocoffee.com/wp-content/uploads/2016/07/decaf-FOR-SITE-413x584-164x230.png', 'meta_key6', 'meta_desc6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Tucano Espresso Mix', '550 lei', '100% SPECIALTY ARABICA\r\nFRESHLY ROASTED\r\n', 'alias5', 'https://tucanocoffee.com/wp-content/uploads/2016/07/mix-FOR-SITE-413x584-164x230.png', 'meta_key5', 'meta_desc5', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
