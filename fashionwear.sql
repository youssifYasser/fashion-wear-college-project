-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 07:23 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashionwear`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` varchar(1) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `hr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `Address`, `hr_id`) VALUES
('1', 'Nasr City', 1),
('2', 'Eldokky', 2),
('3', 'Elmaady', 3),
('4', 'Heliopolis', 4),
('5', 'Giza', 5);

-- --------------------------------------------------------

--
-- Table structure for table `branch_has_model`
--

CREATE TABLE `branch_has_model` (
  `branch_id` varchar(1) NOT NULL,
  `model_idmodel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branch_has_model`
--

INSERT INTO `branch_has_model` (`branch_id`, `model_idmodel`) VALUES
('1', 1),
('1', 2),
('1', 3),
('1', 4),
('1', 5),
('1', 6),
('1', 8),
('1', 10),
('1', 11),
('1', 12),
('1', 13),
('1', 14),
('1', 16),
('1', 17),
('1', 19),
('1', 20),
('1', 21),
('1', 22),
('1', 23),
('1', 24),
('1', 25),
('1', 26),
('1', 28),
('1', 30),
('1', 31),
('1', 32),
('1', 33),
('1', 34),
('1', 36),
('1', 37),
('1', 39),
('1', 40),
('2', 1),
('2', 2),
('2', 4),
('2', 5),
('2', 7),
('2', 8),
('2', 9),
('2', 11),
('2', 13),
('2', 14),
('2', 15),
('2', 16),
('2', 17),
('2', 18),
('2', 19),
('2', 20),
('2', 21),
('2', 22),
('2', 24),
('2', 25),
('2', 27),
('2', 28),
('2', 29),
('2', 31),
('2', 33),
('2', 34),
('2', 35),
('2', 36),
('2', 37),
('2', 38),
('2', 39),
('2', 40),
('3', 1),
('3', 2),
('3', 3),
('3', 4),
('3', 5),
('3', 6),
('3', 7),
('3', 8),
('3', 9),
('3', 10),
('3', 11),
('3', 12),
('3', 13),
('3', 14),
('3', 15),
('3', 16),
('3', 17),
('3', 18),
('3', 19),
('3', 20),
('3', 21),
('3', 22),
('3', 23),
('3', 24),
('3', 25),
('3', 26),
('3', 27),
('3', 28),
('3', 29),
('3', 30),
('3', 31),
('3', 32),
('3', 33),
('3', 34),
('3', 35),
('3', 36),
('3', 37),
('3', 38),
('3', 39),
('3', 40),
('4', 1),
('4', 2),
('4', 3),
('4', 6),
('4', 7),
('4', 8),
('4', 9),
('4', 10),
('4', 11),
('4', 12),
('4', 13),
('4', 17),
('4', 18),
('4', 19),
('4', 20),
('4', 21),
('4', 22),
('4', 23),
('4', 26),
('4', 27),
('4', 28),
('4', 29),
('4', 30),
('4', 31),
('4', 32),
('4', 33),
('4', 37),
('4', 38),
('4', 39),
('4', 40),
('5', 1),
('5', 2),
('5', 3),
('5', 4),
('5', 5),
('5', 6),
('5', 7),
('5', 8),
('5', 9),
('5', 10),
('5', 11),
('5', 12),
('5', 13),
('5', 14),
('5', 17),
('5', 18),
('5', 19),
('5', 20),
('5', 21),
('5', 22),
('5', 23),
('5', 24),
('5', 25),
('5', 26),
('5', 27),
('5', 28),
('5', 29),
('5', 30),
('5', 31),
('5', 32),
('5', 33),
('5', 34),
('5', 37),
('5', 38),
('5', 39),
('5', 40);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `colorID` varchar(11) DEFAULT NULL,
  `color` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`colorID`, `color`) VALUES
('1', 'black'),
('2', 'orange'),
('3', 'red'),
('4', 'rose'),
('5', 'white');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `Address` varchar(80) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='										';

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `phone`, `Address`, `email`, `pass`) VALUES
(1, 'ahmed', 'mohamed', '1124689504', 'nasr city', 'ahmed51@gamil.com', 'ahmed51'),
(2, 'mohamed', 'metwaly', '1565406490', 'giza', 'mohamed52@gmail.com', 'mohamed52'),
(3, 'yasser', 'ahmed', '1235989205', 'roxy', 'yasser53@gmail.com', 'yasser53'),
(4, 'ahmed', 'omar', '1065980820', 'manyal', 'ahmed54@gmail.com', 'ahmed54'),
(5, 'tamer', 'tarck', '1287088996', 'gesr el suez', 'tamer55@gmail.com', 'tamer55'),
(6, 'wael', 'ramy', '1239456056', 'zaytoun', 'wael56@gamil.com', 'wael56'),
(7, 'yara', 'ramy', '1139592065', 'abbaseya', 'yara57@gmail.com', 'yara57'),
(8, 'youssef', 'yasser', '1550936668', 'ramsis', 'youssef1999@gmail.com', 'youssef1999'),
(11, 'youssef', 'akram', '1259784162', 'heliopolis', 'akram99@gmail.com', 'akram99'),
(14, 'abd el rahman', 'yasser', '01215978461', 'el marg', 'abdo88@gmail.com', 'abdo88'),
(39, 'amr ', 'tarek', '01132564789', 'El-Maadi', 'amr67@hotmail.com', 'amr67');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `branchID` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='	';

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `Name`, `Address`, `phone`, `branchID`) VALUES
(7, 'rem', 'nasr city', '1578964056', '1'),
(8, 'twfik', 'giza', '1189751058', '1'),
(9, 'yasser', 'giza', '1256487631', '1'),
(10, 'ramy', 'giza', '1254989289', '1'),
(11, 'yehia', 'giza', '1167983681', '1'),
(12, 'eslam', 'nasr city', '1578242204', '2'),
(13, 'nancy', 'elmaady', '1123549834', '2'),
(14, 'yara', 'eldoky', '1256785138', '2'),
(15, 'tamer', 'nasr city', '1589233180', '2'),
(16, 'yassmin', 'giza', '1235798720', '2'),
(17, 'omar', 'eldoky', '1233981068', '2'),
(18, 'hany', 'giza', '1235987206', '2'),
(19, 'tyssir', 'nasr city', '1123879519', '3'),
(20, 'eman', 'eldoky', '1549539320', '3'),
(21, 'mostafa', 'nasr city', '1563268208', '3'),
(22, 'ahmed', 'nasr city', '1265487506', '3'),
(23, 'rania', 'elmaady', '1279823216', '3'),
(24, 'youssef', 'nasr city', '1239872306', '3'),
(25, 'karim', 'abasia', '1265497920', '3'),
(26, 'karima', 'ramsis', '1234596298', '3'),
(27, 'yassin', 'elzyton', '1568205490', '3'),
(28, 'heba', 'giza', '1268952060', '4'),
(29, 'fatma', 'nasr city', '1264135506', '4'),
(30, 'tara', 'giza', '1146840654', '4'),
(31, 'emad', 'elzyton', '1238792391', '4'),
(32, 'yara', 'elzyton', '1298756060', '4'),
(33, 'esraa', 'nasr city', '1257930650', '4'),
(34, 'mahmoud', 'giza', '1235752056', '4'),
(35, 'osman', 'elmaady', '1576035653', '4'),
(36, 'osama', 'nasr city', '1237863059', '4'),
(37, 'bassem', 'ramsis', '1199208606', '4'),
(38, 'basma', 'abasia', '1289620994', '4'),
(39, 'raouf', 'ramsis', '1267906540', '4'),
(40, 'gehan', 'nasr city', '1249209406', '4'),
(41, 'sally', 'abasia', '1587306426', '5'),
(42, 'essam', 'ramsis', '1025447064', '5'),
(43, 'rehab', 'giza', '1238906220', '5'),
(44, 'sosan', 'nasr city', '1237890652', '5'),
(45, 'rawan', 'elzyton', '1257906090', '5'),
(46, 'toaa', 'elzyton', '1049897960', '5'),
(47, 'foaad', 'elshrouq', '1148933195', '5'),
(48, 'essam', 'elzyton', '1165306503', '5'),
(49, 'rania', 'elshrouq', '1238959353', '5'),
(50, 'tara', 'nasr city', '1268723906', '5'),
(53, 'abd el rahman', 'manyal', '01550936668', '3'),
(62, 'ahmed', 'triumph', '03687945612', '4'),
(64, 'abdo', 'nasr city', '01236547895', '1'),
(67, 'youssef', 'andalus', '01205803794', '4');

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

CREATE TABLE `hr` (
  `id` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hr`
--

INSERT INTO `hr` (`id`, `Name`, `email`, `pass`) VALUES
(1, 'Ahmed', 'ahmed15@gmail.com', '123'),
(2, 'Mohamed', 'mohamed10@gmail.com', '456'),
(3, 'Youssef', 'youssef99@gmail.com', '789'),
(4, 'Yasser', 'yasser88@gmail.com', '147'),
(5, 'Yara', 'yara33@gmail.com', '258');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `idmodel` int(11) NOT NULL,
  `Name` varchar(60) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`idmodel`, `Name`, `price`) VALUES
(1, 'Banana Republic', 50),
(2, 'Cinq A Sept', 70),
(3, 'Aday', 100),
(4, 'Ann Taylor', 80),
(5, 'Cuyana', 60),
(6, 'Universal Standard', 95),
(7, 'StyleSaint', 60),
(8, 'Ticker', 75),
(9, 'Mango', 150),
(10, 'Zara', 92),
(11, 'Ralph Lauren', 120),
(12, 'Nike', 65),
(13, 'Hugo Boss', 75),
(14, 'Tommy Hilfiger', 120),
(15, 'Levi Strauss & Co.', 66),
(16, 'Burberry', 80),
(17, 'Gucci', 86),
(18, 'Adidas', 56),
(19, 'Lacoste', 77),
(20, 'Diesel', 95),
(21, 'Joah Love', 90),
(22, 'Gymboree', 101),
(23, 'Joules', 56),
(24, 'Young & Free Apparel', 130),
(25, 'Pink Chicken', 190),
(26, 'Baby Noomie', 140),
(27, 'Appaman', 120),
(28, 'Lilly & Sid', 81),
(29, 'Everbloom Studio', 92),
(30, 'Miki Miette', 152);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_info`
--

CREATE TABLE `model_has_info` (
  `model_idmodel` int(11) NOT NULL,
  `color_color` varchar(15) NOT NULL,
  `size_size` varchar(3) NOT NULL,
  `quantity_quantity` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `model_has_info`
--

INSERT INTO `model_has_info` (`model_idmodel`, `color_color`, `size_size`, `quantity_quantity`) VALUES
(1, 'black', 'lg', '2'),
(1, 'black', 'md', '5'),
(1, 'black', 'sm', '5'),
(1, 'black', 'xl', '1'),
(1, 'orange', 'lg', '2'),
(1, 'orange', 'md', '4'),
(1, 'orange', 'sm', '5'),
(1, 'orange', 'xl', '0'),
(1, 'red', 'lg', '8'),
(1, 'red', 'md', '3'),
(1, 'red', 'sm', '1'),
(1, 'red', 'xl', '0'),
(1, 'rose', 'lg', '4'),
(1, 'rose', 'md', '9'),
(1, 'rose', 'sm', '7'),
(1, 'rose', 'xl', '3'),
(1, 'white', 'lg', '2'),
(1, 'white', 'md', '6'),
(1, 'white', 'sm', '8'),
(1, 'white', 'xl', '9'),
(2, 'black', 'lg', '3'),
(2, 'black', 'md', '2'),
(2, 'black', 'sm', '5'),
(2, 'black', 'xl', '1'),
(2, 'red', 'lg', '8'),
(2, 'red', 'md', '3'),
(2, 'red', 'sm', '1'),
(2, 'red', 'xl', '0'),
(2, 'rose', 'lg', '4'),
(2, 'rose', 'md', '9'),
(2, 'rose', 'sm', '7'),
(2, 'rose', 'xl', '3'),
(2, 'white', 'lg', '2'),
(2, 'white', 'md', '6'),
(2, 'white', 'sm', '8'),
(2, 'white', 'xl', '9'),
(3, 'black', 'lg', '3'),
(3, 'black', 'md', '5'),
(3, 'black', 'sm', '5'),
(3, 'black', 'xl', '1'),
(3, 'orange', 'lg', '2'),
(3, 'orange', 'md', '4'),
(3, 'orange', 'sm', '5'),
(3, 'orange', 'xl', '0'),
(3, 'red', 'xl', '0'),
(3, 'rose', 'lg', '4'),
(3, 'rose', 'md', '9'),
(3, 'rose', 'sm', '7'),
(3, 'rose', 'xl', '3'),
(3, 'white', 'lg', '2'),
(3, 'white', 'md', '6'),
(3, 'white', 'sm', '8'),
(3, 'white', 'xl', '9'),
(4, 'black', 'lg', '3'),
(4, 'black', 'md', '5'),
(4, 'black', 'sm', '5'),
(4, 'black', 'xl', '1'),
(4, 'red', 'lg', '8'),
(4, 'red', 'md', '3'),
(4, 'red', 'sm', '1'),
(4, 'red', 'xl', '0'),
(4, 'rose', 'lg', '4'),
(4, 'rose', 'md', '9'),
(4, 'rose', 'sm', '7'),
(4, 'rose', 'xl', '3'),
(4, 'white', 'lg', '2'),
(4, 'white', 'md', '6'),
(4, 'white', 'sm', '8'),
(4, 'white', 'xl', '9'),
(5, 'black', 'lg', '3'),
(5, 'black', 'md', '5'),
(5, 'black', 'sm', '5'),
(5, 'black', 'xl', '1'),
(5, 'orange', 'lg', '2'),
(5, 'orange', 'md', '4'),
(5, 'orange', 'sm', '5'),
(5, 'orange', 'xl', '0'),
(5, 'red', 'lg', '8'),
(5, 'red', 'md', '3'),
(5, 'red', 'sm', '1'),
(5, 'red', 'xl', '0'),
(5, 'rose', 'lg', '4'),
(5, 'rose', 'md', '9'),
(5, 'rose', 'sm', '7'),
(5, 'rose', 'xl', '3'),
(5, 'white', 'lg', '2'),
(5, 'white', 'md', '6'),
(5, 'white', 'sm', '8'),
(5, 'white', 'xl', '9'),
(6, 'black', 'lg', '3'),
(6, 'black', 'md', '5'),
(6, 'black', 'sm', '5'),
(6, 'black', 'xl', '1'),
(6, 'orange', 'lg', '2'),
(6, 'orange', 'md', '4'),
(6, 'orange', 'sm', '5'),
(6, 'orange', 'xl', '0'),
(6, 'red', 'lg', '8'),
(6, 'red', 'md', '3'),
(6, 'red', 'sm', '1'),
(6, 'red', 'xl', '0'),
(6, 'rose', 'lg', '4'),
(6, 'rose', 'md', '9'),
(6, 'rose', 'sm', '7'),
(6, 'rose', 'xl', '3'),
(6, 'white', 'lg', '2'),
(6, 'white', 'md', '6'),
(6, 'white', 'sm', '8'),
(6, 'white', 'xl', '9'),
(7, 'black', 'lg', '3'),
(7, 'black', 'md', '5'),
(7, 'black', 'sm', '5'),
(7, 'black', 'xl', '1'),
(7, 'orange', 'lg', '2'),
(7, 'orange', 'md', '4'),
(7, 'orange', 'sm', '5'),
(7, 'orange', 'xl', '0'),
(7, 'red', 'lg', '8'),
(7, 'red', 'md', '3'),
(7, 'red', 'sm', '1'),
(7, 'red', 'xl', '0'),
(7, 'white', 'lg', '2'),
(7, 'white', 'md', '6'),
(7, 'white', 'sm', '8'),
(7, 'white', 'xl', '9'),
(8, 'black', 'lg', '3'),
(8, 'black', 'md', '5'),
(8, 'black', 'sm', '5'),
(8, 'black', 'xl', '1'),
(8, 'orange', 'lg', '2'),
(8, 'orange', 'md', '4'),
(8, 'orange', 'sm', '5'),
(8, 'orange', 'xl', '0'),
(8, 'red', 'lg', '8'),
(8, 'red', 'md', '3'),
(8, 'red', 'sm', '1'),
(8, 'red', 'xl', '0'),
(8, 'rose', 'lg', '4'),
(8, 'rose', 'md', '9'),
(8, 'rose', 'sm', '7'),
(8, 'rose', 'xl', '3'),
(8, 'white', 'lg', '2'),
(8, 'white', 'md', '6'),
(8, 'white', 'sm', '8'),
(8, 'white', 'xl', '9'),
(9, 'black', 'lg', '3'),
(9, 'black', 'md', '5'),
(9, 'black', 'sm', '5'),
(9, 'black', 'xl', '1'),
(9, 'orange', 'lg', '2'),
(9, 'orange', 'md', '4'),
(9, 'orange', 'sm', '5'),
(9, 'orange', 'xl', '0'),
(9, 'red', 'lg', '8'),
(9, 'red', 'md', '3'),
(9, 'red', 'sm', '1'),
(9, 'red', 'xl', '0'),
(9, 'rose', 'lg', '4'),
(9, 'rose', 'md', '9'),
(9, 'rose', 'sm', '7'),
(9, 'rose', 'xl', '3'),
(9, 'white', 'lg', '2'),
(9, 'white', 'md', '6'),
(9, 'white', 'sm', '8'),
(9, 'white', 'xl', '9'),
(10, 'black', 'lg', '3'),
(10, 'black', 'md', '5'),
(10, 'black', 'sm', '5'),
(10, 'black', 'xl', '1'),
(10, 'orange', 'lg', '2'),
(10, 'orange', 'md', '4'),
(10, 'orange', 'sm', '5'),
(10, 'orange', 'xl', '0'),
(10, 'red', 'lg', '8'),
(10, 'red', 'md', '3'),
(10, 'red', 'sm', '1'),
(10, 'red', 'xl', '0'),
(10, 'rose', 'lg', '4'),
(10, 'rose', 'md', '9'),
(10, 'rose', 'sm', '7'),
(10, 'rose', 'xl', '3'),
(10, 'white', 'lg', '2'),
(10, 'white', 'md', '6'),
(10, 'white', 'sm', '8'),
(10, 'white', 'xl', '9'),
(11, 'black', 'lg', '2'),
(11, 'black', 'md', '5'),
(11, 'black', 'sm', '5'),
(11, 'black', 'xl', '1'),
(11, 'orange', 'lg', '2'),
(11, 'orange', 'md', '4'),
(11, 'orange', 'sm', '5'),
(11, 'orange', 'xl', '0'),
(11, 'red', 'lg', '8'),
(11, 'red', 'md', '3'),
(11, 'red', 'sm', '1'),
(11, 'red', 'xl', '0'),
(11, 'rose', 'lg', '4'),
(11, 'rose', 'md', '9'),
(11, 'rose', 'sm', '7'),
(11, 'rose', 'xl', '3'),
(12, 'black', 'lg', '3'),
(12, 'black', 'md', '5'),
(12, 'black', 'sm', '5'),
(12, 'black', 'xl', '1'),
(12, 'orange', 'lg', '2'),
(12, 'orange', 'md', '4'),
(12, 'orange', 'sm', '5'),
(12, 'orange', 'xl', '0'),
(12, 'red', 'lg', '8'),
(12, 'red', 'md', '3'),
(12, 'red', 'sm', '1'),
(12, 'red', 'xl', '0'),
(12, 'rose', 'lg', '4'),
(12, 'rose', 'md', '9'),
(12, 'rose', 'sm', '7'),
(12, 'rose', 'xl', '3'),
(12, 'white', 'lg', '2'),
(12, 'white', 'md', '6'),
(12, 'white', 'sm', '8'),
(12, 'white', 'xl', '9'),
(13, 'black', 'lg', '3'),
(13, 'black', 'md', '5'),
(13, 'black', 'sm', '5'),
(13, 'black', 'xl', '1'),
(13, 'orange', 'lg', '2'),
(13, 'orange', 'md', '4'),
(13, 'orange', 'sm', '5'),
(13, 'orange', 'xl', '0'),
(13, 'red', 'lg', '8'),
(13, 'red', 'md', '3'),
(13, 'red', 'sm', '1'),
(13, 'red', 'xl', '0'),
(13, 'rose', 'lg', '4'),
(13, 'rose', 'md', '9'),
(13, 'rose', 'sm', '7'),
(13, 'rose', 'xl', '3'),
(13, 'white', 'lg', '2'),
(13, 'white', 'md', '6'),
(13, 'white', 'sm', '8'),
(13, 'white', 'xl', '9'),
(14, 'black', 'lg', '3'),
(14, 'black', 'md', '5'),
(14, 'black', 'sm', '5'),
(14, 'black', 'xl', '1'),
(14, 'orange', 'lg', '2'),
(14, 'orange', 'md', '4'),
(14, 'orange', 'sm', '5'),
(14, 'orange', 'xl', '0'),
(14, 'red', 'lg', '8'),
(14, 'red', 'md', '3'),
(14, 'red', 'sm', '1'),
(14, 'red', 'xl', '0'),
(14, 'rose', 'lg', '4'),
(14, 'rose', 'md', '9'),
(14, 'rose', 'sm', '7'),
(14, 'rose', 'xl', '3'),
(14, 'white', 'lg', '2'),
(14, 'white', 'md', '6'),
(14, 'white', 'sm', '8'),
(14, 'white', 'xl', '9'),
(15, 'black', 'lg', '3'),
(15, 'black', 'md', '5'),
(15, 'black', 'sm', '5'),
(15, 'black', 'xl', '1'),
(15, 'orange', 'lg', '2'),
(15, 'orange', 'md', '4'),
(15, 'orange', 'sm', '5'),
(15, 'orange', 'xl', '0'),
(15, 'red', 'lg', '8'),
(15, 'red', 'md', '3'),
(15, 'red', 'sm', '1'),
(15, 'red', 'xl', '0'),
(15, 'rose', 'lg', '4'),
(15, 'rose', 'md', '9'),
(15, 'rose', 'sm', '7'),
(15, 'rose', 'xl', '3'),
(15, 'white', 'lg', '2'),
(15, 'white', 'md', '6'),
(15, 'white', 'sm', '8'),
(15, 'white', 'xl', '9'),
(16, 'black', 'lg', '3'),
(16, 'black', 'md', '5'),
(16, 'black', 'sm', '5'),
(16, 'black', 'xl', '1'),
(16, 'orange', 'lg', '2'),
(16, 'orange', 'md', '4'),
(16, 'orange', 'sm', '5'),
(16, 'orange', 'xl', '0'),
(16, 'red', 'lg', '8'),
(16, 'red', 'md', '3'),
(16, 'red', 'sm', '1'),
(16, 'red', 'xl', '0'),
(16, 'rose', 'lg', '4'),
(16, 'rose', 'md', '9'),
(16, 'rose', 'sm', '7'),
(16, 'rose', 'xl', '3'),
(16, 'white', 'lg', '2'),
(16, 'white', 'md', '6'),
(16, 'white', 'sm', '8'),
(16, 'white', 'xl', '9'),
(17, 'orange', 'lg', '2'),
(17, 'orange', 'md', '4'),
(17, 'orange', 'sm', '5'),
(17, 'orange', 'xl', '0'),
(17, 'red', 'lg', '8'),
(17, 'red', 'md', '3'),
(17, 'red', 'sm', '1'),
(17, 'red', 'xl', '0'),
(17, 'rose', 'lg', '4'),
(17, 'rose', 'md', '9'),
(17, 'rose', 'sm', '7'),
(17, 'rose', 'xl', '3'),
(17, 'white', 'lg', '2'),
(17, 'white', 'md', '6'),
(17, 'white', 'sm', '8'),
(17, 'white', 'xl', '9'),
(18, 'black', 'lg', '3'),
(18, 'black', 'md', '5'),
(18, 'black', 'sm', '5'),
(18, 'black', 'xl', '1'),
(18, 'orange', 'lg', '2'),
(18, 'orange', 'md', '4'),
(18, 'orange', 'sm', '5'),
(18, 'orange', 'xl', '0'),
(18, 'red', 'lg', '8'),
(18, 'red', 'md', '3'),
(18, 'red', 'sm', '1'),
(18, 'red', 'xl', '0'),
(18, 'rose', 'lg', '4'),
(18, 'rose', 'md', '9'),
(18, 'rose', 'sm', '7'),
(18, 'rose', 'xl', '3'),
(18, 'white', 'lg', '2'),
(18, 'white', 'md', '6'),
(18, 'white', 'sm', '8'),
(18, 'white', 'xl', '9'),
(19, 'black', 'lg', '3'),
(19, 'black', 'md', '5'),
(19, 'black', 'sm', '5'),
(19, 'black', 'xl', '1'),
(19, 'orange', 'lg', '2'),
(19, 'orange', 'md', '4'),
(19, 'orange', 'sm', '5'),
(19, 'orange', 'xl', '0'),
(19, 'red', 'lg', '8'),
(19, 'red', 'md', '3'),
(19, 'red', 'sm', '1'),
(19, 'red', 'xl', '0'),
(19, 'rose', 'lg', '4'),
(19, 'rose', 'md', '9'),
(19, 'rose', 'sm', '7'),
(19, 'rose', 'xl', '3'),
(19, 'white', 'lg', '2'),
(19, 'white', 'md', '6'),
(19, 'white', 'sm', '8'),
(19, 'white', 'xl', '9'),
(20, 'black', 'lg', '3'),
(20, 'black', 'md', '5'),
(20, 'black', 'sm', '5'),
(20, 'black', 'xl', '1'),
(20, 'orange', 'lg', '2'),
(20, 'orange', 'md', '4'),
(20, 'orange', 'sm', '5'),
(20, 'orange', 'xl', '0'),
(20, 'red', 'lg', '8'),
(20, 'red', 'md', '3'),
(20, 'red', 'sm', '1'),
(20, 'red', 'xl', '0'),
(20, 'rose', 'lg', '4'),
(20, 'rose', 'md', '9'),
(20, 'rose', 'sm', '7'),
(20, 'rose', 'xl', '3'),
(20, 'white', 'lg', '2'),
(20, 'white', 'md', '6'),
(20, 'white', 'sm', '8'),
(20, 'white', 'xl', '9'),
(21, 'black', 'lg', '3'),
(21, 'black', 'md', '5'),
(21, 'black', 'sm', '5'),
(21, 'black', 'xl', '1'),
(21, 'orange', 'lg', '2'),
(21, 'orange', 'md', '4'),
(21, 'orange', 'sm', '5'),
(21, 'orange', 'xl', '0'),
(21, 'red', 'lg', '8'),
(21, 'red', 'md', '3'),
(21, 'red', 'sm', '1'),
(21, 'red', 'xl', '0'),
(21, 'rose', 'lg', '4'),
(21, 'rose', 'md', '9'),
(21, 'rose', 'sm', '7'),
(21, 'rose', 'xl', '3'),
(21, 'white', 'lg', '2'),
(21, 'white', 'md', '6'),
(21, 'white', 'sm', '8'),
(21, 'white', 'xl', '9'),
(22, 'black', 'lg', '3'),
(22, 'black', 'md', '5'),
(22, 'black', 'sm', '5'),
(22, 'black', 'xl', '1'),
(22, 'orange', 'lg', '2'),
(22, 'orange', 'md', '4'),
(22, 'orange', 'sm', '5'),
(22, 'orange', 'xl', '0'),
(22, 'red', 'lg', '8'),
(22, 'red', 'md', '3'),
(22, 'red', 'sm', '1'),
(22, 'red', 'xl', '0'),
(22, 'rose', 'lg', '4'),
(22, 'rose', 'md', '9'),
(22, 'rose', 'sm', '7'),
(22, 'rose', 'xl', '3'),
(22, 'white', 'lg', '2'),
(22, 'white', 'md', '6'),
(22, 'white', 'sm', '8'),
(22, 'white', 'xl', '9'),
(23, 'black', 'lg', '3'),
(23, 'black', 'md', '5'),
(23, 'black', 'sm', '5'),
(23, 'black', 'xl', '1'),
(23, 'orange', 'lg', '2'),
(23, 'orange', 'md', '4'),
(23, 'orange', 'sm', '5'),
(23, 'orange', 'xl', '0'),
(23, 'red', 'lg', '8'),
(23, 'red', 'md', '3'),
(23, 'red', 'sm', '1'),
(23, 'red', 'xl', '0'),
(23, 'rose', 'lg', '4'),
(23, 'rose', 'md', '9'),
(23, 'rose', 'sm', '7'),
(23, 'rose', 'xl', '3'),
(23, 'white', 'lg', '2'),
(23, 'white', 'md', '6'),
(23, 'white', 'sm', '8'),
(23, 'white', 'xl', '9'),
(24, 'black', 'lg', '3'),
(24, 'black', 'md', '5'),
(24, 'black', 'sm', '5'),
(24, 'black', 'xl', '1'),
(24, 'orange', 'lg', '2'),
(24, 'orange', 'md', '4'),
(24, 'orange', 'sm', '5'),
(24, 'orange', 'xl', '0'),
(24, 'red', 'lg', '8'),
(24, 'red', 'md', '3'),
(24, 'red', 'sm', '1'),
(24, 'red', 'xl', '0'),
(24, 'rose', 'lg', '4'),
(24, 'rose', 'md', '9'),
(24, 'rose', 'sm', '7'),
(24, 'rose', 'xl', '3'),
(24, 'white', 'lg', '2'),
(24, 'white', 'md', '6'),
(24, 'white', 'sm', '8'),
(24, 'white', 'xl', '9'),
(25, 'black', 'lg', '3'),
(25, 'black', 'md', '5'),
(25, 'black', 'sm', '5'),
(25, 'black', 'xl', '1'),
(25, 'orange', 'lg', '2'),
(25, 'orange', 'md', '4'),
(25, 'orange', 'sm', '5'),
(25, 'orange', 'xl', '0'),
(25, 'red', 'lg', '8'),
(25, 'red', 'md', '3'),
(25, 'red', 'sm', '1'),
(25, 'red', 'xl', '0'),
(25, 'rose', 'lg', '4'),
(25, 'rose', 'md', '9'),
(25, 'rose', 'sm', '7'),
(25, 'rose', 'xl', '3'),
(25, 'white', 'lg', '2'),
(25, 'white', 'md', '6'),
(25, 'white', 'sm', '8'),
(25, 'white', 'xl', '9'),
(26, 'black', 'lg', '3'),
(26, 'black', 'md', '5'),
(26, 'black', 'sm', '5'),
(26, 'black', 'xl', '1'),
(26, 'orange', 'lg', '2'),
(26, 'orange', 'md', '4'),
(26, 'orange', 'sm', '5'),
(26, 'orange', 'xl', '0'),
(26, 'red', 'lg', '8'),
(26, 'red', 'md', '3'),
(26, 'red', 'sm', '1'),
(26, 'red', 'xl', '0'),
(26, 'rose', 'lg', '4'),
(26, 'rose', 'md', '9'),
(26, 'rose', 'sm', '7'),
(26, 'rose', 'xl', '3'),
(26, 'white', 'lg', '2'),
(26, 'white', 'md', '6'),
(26, 'white', 'sm', '8'),
(26, 'white', 'xl', '9'),
(27, 'black', 'lg', '3'),
(27, 'black', 'md', '5'),
(27, 'black', 'sm', '5'),
(27, 'black', 'xl', '1'),
(27, 'orange', 'lg', '2'),
(27, 'orange', 'md', '4'),
(27, 'orange', 'sm', '5'),
(27, 'orange', 'xl', '0'),
(27, 'red', 'lg', '8'),
(27, 'red', 'md', '3'),
(27, 'red', 'sm', '1'),
(27, 'red', 'xl', '0'),
(27, 'rose', 'lg', '4'),
(27, 'rose', 'md', '9'),
(27, 'rose', 'sm', '7'),
(27, 'rose', 'xl', '3'),
(27, 'white', 'lg', '2'),
(27, 'white', 'md', '6'),
(27, 'white', 'sm', '8'),
(27, 'white', 'xl', '9'),
(28, 'black', 'lg', '3'),
(28, 'black', 'md', '5'),
(28, 'black', 'sm', '5'),
(28, 'black', 'xl', '1'),
(28, 'orange', 'lg', '2'),
(28, 'orange', 'md', '4'),
(28, 'orange', 'sm', '5'),
(28, 'orange', 'xl', '0'),
(28, 'red', 'lg', '8'),
(28, 'red', 'md', '3'),
(28, 'red', 'sm', '1'),
(28, 'red', 'xl', '0'),
(28, 'rose', 'lg', '4'),
(28, 'rose', 'md', '9'),
(28, 'rose', 'sm', '7'),
(28, 'rose', 'xl', '3'),
(28, 'white', 'lg', '2'),
(28, 'white', 'md', '6'),
(28, 'white', 'sm', '8'),
(28, 'white', 'xl', '9'),
(29, 'black', 'lg', '3'),
(29, 'black', 'md', '5'),
(29, 'black', 'sm', '5'),
(29, 'black', 'xl', '1'),
(29, 'orange', 'lg', '2'),
(29, 'orange', 'md', '4'),
(29, 'orange', 'sm', '5'),
(29, 'orange', 'xl', '0'),
(29, 'red', 'lg', '8'),
(29, 'red', 'md', '3'),
(29, 'red', 'sm', '1'),
(29, 'red', 'xl', '0'),
(29, 'rose', 'lg', '4'),
(29, 'rose', 'md', '9'),
(29, 'rose', 'sm', '7'),
(29, 'rose', 'xl', '3'),
(29, 'white', 'lg', '2'),
(29, 'white', 'md', '6'),
(29, 'white', 'sm', '8'),
(29, 'white', 'xl', '9'),
(30, 'black', 'lg', '3'),
(30, 'black', 'md', '5'),
(30, 'black', 'sm', '5'),
(30, 'black', 'xl', '1'),
(30, 'red', 'lg', '8'),
(30, 'red', 'md', '3'),
(30, 'red', 'sm', '1'),
(30, 'red', 'xl', '0'),
(30, 'rose', 'lg', '4'),
(30, 'rose', 'md', '9'),
(30, 'rose', 'sm', '7'),
(30, 'rose', 'xl', '3'),
(30, 'white', 'lg', '2'),
(30, 'white', 'md', '6'),
(30, 'white', 'sm', '8'),
(30, 'white', 'xl', '9');

-- --------------------------------------------------------

--
-- Table structure for table `quantity`
--

CREATE TABLE `quantity` (
  `quantity` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `sizeID` varchar(11) DEFAULT NULL,
  `size` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`sizeID`, `size`) VALUES
('1', 'lg'),
('2', 'md'),
('3', 'sm'),
('4', 'xl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_has_model`
--
ALTER TABLE `branch_has_model`
  ADD PRIMARY KEY (`branch_id`,`model_idmodel`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr`
--
ALTER TABLE `hr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`idmodel`);

--
-- Indexes for table `model_has_info`
--
ALTER TABLE `model_has_info`
  ADD PRIMARY KEY (`model_idmodel`,`color_color`,`size_size`,`quantity_quantity`);

--
-- Indexes for table `quantity`
--
ALTER TABLE `quantity`
  ADD PRIMARY KEY (`quantity`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
