-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2016 at 10:40 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `usr_id` int(100) NOT NULL,
  `usr_name` varchar(100) NOT NULL,
  `usr_pass` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `usr_id`, `usr_name`, `usr_pass`, `position`) VALUES
(1, 1, 'nagaraj', 'nagarajj', 'Full stack Developer & cyber squad');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(250) NOT NULL,
  `itemid` int(200) NOT NULL,
  `table` varchar(100) NOT NULL,
  `cust_id` int(232) NOT NULL,
  `sch_start` varchar(11111) NOT NULL,
  `sch_end` varchar(11111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `itemid`, `table`, `cust_id`, `sch_start`, `sch_end`) VALUES
(1, 1, 'fproduct', 1, '2016-08-06', '2016-08-08'),
(2, 2, 'fproduct', 1, '06,08,2016,01,20,pm', '08,08,2016,01,20,pm'),
(3, 2, 'recproduct', 2, '06,08,2016,01,20,pm', '08,08,2016,01,20,pm');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brandid` int(250) NOT NULL,
  `brand` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brandid`, `brand`) VALUES
(1, 'samsung'),
(2, 'nokia'),
(3, 'motorola'),
(4, 'nike');

-- --------------------------------------------------------

--
-- Table structure for table `cancelpro`
--

CREATE TABLE `cancelpro` (
  `id` int(100) NOT NULL,
  `itemid` int(100) NOT NULL,
  `table` varchar(200) NOT NULL,
  `cust_id` int(100) NOT NULL,
  `sno` int(100) NOT NULL,
  `date` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancelpro`
--

INSERT INTO `cancelpro` (`id`, `itemid`, `table`, `cust_id`, `sno`, `date`) VALUES
(1, 1, 'test', 1, 0, ''),
(2, 3, 'items', 3, 0, ''),
(3, 6, 'recproduct', 4, 0, ''),
(4, 2, 'fproduct', 5, 0, ''),
(5, 7, 'offrproduct', 15, 0, ''),
(6, 7, 'offrproduct', 15, 0, ''),
(7, 7, 'offrproduct', 15, 0, ''),
(8, 7, 'fproduct', 42, 0, ''),
(9, 7, 'fproduct', 42, 0, ''),
(10, 6, 'recproduct', 4, 0, ''),
(11, 7, 'fproduct', 42, 0, ''),
(12, 2, 'fproduct', 11, 0, ''),
(13, 2, 'fproduct', 11, 0, ''),
(14, 2, 'fproduct', 12, 0, ''),
(15, 2, 'fproduct', 12, 0, ''),
(16, 7, 'offrproduct', 14, 0, ''),
(17, 7, 'offrproduct', 14, 0, ''),
(18, 2, 'fproduct', 5, 0, ''),
(19, 7, 'offrproduct', 14, 0, ''),
(20, 7, 'offrproduct', 14, 0, ''),
(21, 7, 'recproduct', 22, 0, ''),
(22, 7, 'offrproduct', 14, 0, ''),
(23, 7, 'offrproduct', 14, 0, ''),
(24, 3, 'offrproduct', 13, 0, ''),
(25, 7, 'offrproduct', 15, 0, ''),
(26, 7, 'offrproduct', 16, 0, ''),
(27, 4, 'fproduct', 1, 17, ''),
(28, 7, 'fproduct', 1, 44, ''),
(29, 8, 'recproduct', 1, 39, ''),
(30, 1, 'fproduct', 1, 21, '17-08-2016,01:40pm'),
(31, 7, 'recproduct', 1, 23, '17-08-2016,01:46pm'),
(32, 3, 'offrproduct', 1, 19, '23-08-2016,07:23am'),
(33, 2, 'fproduct', 18, 56, '24-08-2016,10:16am'),
(34, 6, 'offrproduct', 18, 57, '24-08-2016,10:16am'),
(35, 2, 'fproduct', 18, 58, '24-08-2016,10:20am'),
(36, 3, 'fproduct', 18, 91, '24-08-2016,10:32am'),
(37, 2, 'fproduct', 18, 59, '24-08-2016,10:50am'),
(38, 2, 'fproduct', 18, 61, '24-08-2016,10:55am'),
(39, 2, 'fproduct', 18, 64, '24-08-2016,10:57am'),
(40, 2, 'fproduct', 18, 60, '24-08-2016,11:04am'),
(41, 2, 'fproduct', 18, 63, '24-08-2016,11:13am'),
(42, 7, 'offrproduct', 18, 72, '24-08-2016,11:13am'),
(43, 2, 'fproduct', 18, 68, '24-08-2016,11:14am'),
(44, 6, 'fproduct', 18, 90, '24-08-2016,11:17am'),
(45, 2, 'fproduct', 18, 65, '24-08-2016,11:18am'),
(46, 2, 'fproduct', 18, 65, '24-08-2016,11:19am'),
(47, 2, 'fproduct', 18, 65, '24-08-2016,11:19am'),
(48, 7, 'offrproduct', 1, 24, '31-08-2016,01:56pm'),
(49, 4, 'offrproduct', 1, 55, '31-08-2016,01:56pm'),
(50, 4, 'offrproduct', 1, 55, '31-08-2016,01:58pm'),
(51, 4, 'offrproduct', 1, 55, '31-08-2016,01:58pm'),
(52, 4, 'offrproduct', 1, 55, '31-08-2016,02:03pm'),
(53, 4, 'offrproduct', 1, 55, '31-08-2016,02:03pm'),
(54, 4, 'offrproduct', 1, 55, '31-08-2016,02:03pm'),
(55, 4, 'offrproduct', 1, 55, '31-08-2016,02:03pm'),
(56, 7, 'offrproduct', 1, 25, '31-08-2016,02:03pm'),
(57, 7, 'offrproduct', 1, 24, '31-08-2016,02:04pm'),
(58, 7, 'offrproduct', 1, 26, '31-08-2016,02:04pm'),
(59, 1, 'offrproduct', 1, 28, '01-09-2016,01:09pm'),
(60, 2, 'recproduct', 1, 130, '02-09-2016,09:56am');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `cust_id` int(100) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `items` int(110) NOT NULL DEFAULT '0',
  `itemid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `cust_id`, `cat_name`, `items`, `itemid`) VALUES
(1, 1, 'mobile', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` int(250) NOT NULL,
  `cust_type` varchar(100) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `subcat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `cust_type`, `cname`, `subcat`) VALUES
(1, 'men', 'shoes', 'casual shoes'),
(2, 'men', 'clothing', 'trousers and pants'),
(3, 'men', 'clothing', 'shirts'),
(4, 'men', 'clothing', 'tshirts'),
(5, 'men', 'clothing', 'suits and blazers'),
(6, 'men', 'clothing', 'ethic wear'),
(7, 'men', 'clothing', 'jeans'),
(8, 'men', 'clothing', 'sport wear'),
(9, 'men', 'shoes', 'formal shoes'),
(10, 'men', 'shoes', 'sports shoes'),
(11, 'men', 'shoes', 'slippers'),
(12, 'men', 'shoes', 'sandals'),
(13, 'men', 'shoes', 'boots'),
(14, 'men', 'shoes', 'sneakers'),
(15, 'men', 'accessories', 'wallets'),
(16, 'men', 'accessories', 'sunglasses and eyeglasses'),
(17, 'men', 'accessories', 'groom accessories'),
(18, 'men', 'accessories', 'hand kercheif'),
(19, 'men', 'lingeria and innerwear', 'vests'),
(20, 'men', 'lingeria and innerwear', 'innerwear'),
(21, 'men', 'designer wear', 'designer ernic wear'),
(22, 'men', 'designer wear', 'designer sherwani suit'),
(23, 'men', 'designer wear', 'designer suits and blazers'),
(24, 'men', 'designer wear', 'designer sherwani'),
(25, 'women', 'clothing', 'salwar suits'),
(26, 'women', 'clothing', 'kurka kurthis'),
(27, 'women', 'clothing', 'sarees'),
(28, 'women', 'clothing', 'tops'),
(29, 'women', 'clothing', 'jeans and pants'),
(30, 'women', 'clothing', 'sports and skirts'),
(31, 'women', 'clothing', 'shirts'),
(32, 'women', 'clothing', 'sports wear'),
(33, 'women', 'clothing', 'blouses'),
(34, 'women', 'shoes', 'slippers'),
(35, 'women', 'shoes', 'sandals'),
(36, 'women', 'shoes', 'bellies'),
(37, 'women', 'shoes', 'causal shoes'),
(38, 'women', 'shoes', 'flats'),
(39, 'women', 'shoes', 'low heels'),
(40, 'women', 'shoes', 'high heels'),
(41, 'women', 'shoes', 'boots'),
(42, 'women', 'shoes', 'high heels'),
(43, 'women', 'shoes', 'flats'),
(44, 'women', 'shoes', 'sports shoes '),
(45, 'women', 'accessories', 'hand bag'),
(46, 'women', 'accessories', 'wallet'),
(47, 'women', 'accessories', 'sunglasses and eyeglasses'),
(48, 'women', 'lingeria and innerwear', 'panties'),
(49, 'women', 'lingeria and innerwear', 'bras'),
(50, 'women', 'lingeria and innerwear', 'innerwear'),
(51, 'women', 'lingeria and innerwear', 'shapwear'),
(52, 'women', 'lingeria and innerwear', 'nightwear'),
(53, 'women', 'designer wear', 'designer dresses'),
(54, 'women', 'designer wear', 'designer kerka kurthis'),
(55, 'women', 'designer wear', 'designer lehenge cholis'),
(56, 'women', 'designer wear', 'designer top'),
(57, 'women', 'designer wear', 'designer gowm'),
(58, 'women', 'designer wear', 'designer sarees'),
(59, 'kid', 'boy', 'boy clothing'),
(60, 'kid', 'boy', 'shoes'),
(61, 'kid', 'boy', 'accessories'),
(62, 'kid', 'girl', 'clothing'),
(63, 'kid', 'girl', 'shoes'),
(64, 'kid', 'girl', 'accessories'),
(65, 'men', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(100) NOT NULL,
  `cust_id` int(100) NOT NULL,
  `storeid` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `sent` varchar(9600) NOT NULL,
  `recived` varchar(9600) NOT NULL,
  `msg_status` varchar(1000) NOT NULL DEFAULT 'not seen',
  `sender_cust` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `cust_id`, `storeid`, `status`, `sent`, `recived`, `msg_status`, `sender_cust`) VALUES
(1, 2, 0, 'online', 'hi', '11212asdef', 'seen', 0),
(2, 0, 0, 'offline', 'hi', 'ojjkhhhnagaaaaaaaaaaaaaaaaaaaaaa0922', 'seen', 0),
(3, 0, 0, 'offline', 'tester', 'testing the side of store chat', 'seen', 0),
(4, 0, 0, 'offline', 'naga', '', 'seen', 0),
(5, 0, 0, 'offline', 'naga', '', 'seen', 0),
(6, 0, 0, 'offline', 'fsafdf', '', 'seen', 0),
(7, 0, 0, 'offline', '', '', 'seen', 0),
(8, 0, 0, 'offline', '', '', 'seen', 0),
(9, 0, 0, 'offline', '', '', 'seen', 0),
(10, 0, 0, 'offline', 'hi', '', 'seen', 0),
(11, 0, 0, 'offline', 'hi', '', 'seen', 0),
(12, 0, 0, 'offline', 'hi', '', 'seen', 0),
(13, 0, 0, 'offline', 'hi', '', 'seen', 0),
(14, 0, 0, 'offline', 'HI', '', 'seen', 0),
(15, 0, 0, 'offline', '', '', 'seen', 0),
(16, 0, 0, 'offline', 'hii', '', 'seen', 0),
(17, 0, 0, 'offline', 'sathyayyyy', '', 'seen', 0),
(18, 0, 0, 'offline', 'hi  machi', '', 'seen', 0),
(19, 0, 0, 'offline', 'hi  machi', '', 'seen', 0),
(20, 0, 0, 'offline', 'sthya', '', 'seen', 0),
(21, 0, 0, 'offline', 'sthya', '', 'seen', 0),
(22, 0, 0, 'offline', 'sthya', '', 'seen', 0),
(23, 18, 0, 'online', 'hi  machi', 'testingvtestingtestingtestingtestingtestingtestingtestingtestingtestingtesting', 'seen', 0),
(24, 18, 0, 'online', 'hi  machi', 'nagarajsjkjdljfajjfjjklajsdfj;jsdjfajkljdfj;jjsdfajdjfl', 'seen', 0),
(25, 0, 0, 'offline', 'hi da', 'sathya', 'seen', 0),
(26, 0, 0, 'offline', 'hi da', '', 'seen', 0),
(27, 0, 0, 'offline', 'hi da', '', 'seen', 0),
(28, 0, 0, 'offline', 'hi da', '', 'seen', 0),
(29, 0, 0, 'offline', 'hi da', '', 'seen', 0),
(30, 0, 0, 'offline', 'hi da', '', 'seen', 0),
(31, 0, 0, 'offline', 'nagarajhsjfhjkhdfahljfhdlfhaslhdfhadfhashdhahdfahshdlhfdh', '', 'seen', 0),
(32, 0, 0, 'offline', 'nagarajhsjfhjkhdfahljfhdlfhaslhdfhadfhashdhahdfahshdlhfdh', '', 'seen', 0),
(33, 0, 0, 'offline', 'nagarajhsjfhjkhdfahljfhdlfhaslhdfhadfhashdhahdfahshdlhfdh', '', 'seen', 0),
(34, 0, 0, 'offline', 'nagarajhsjfhjkhdfahljfhdlfhaslhdfhadfhashdhahdfahshdlhfdh', '', 'seen', 0),
(35, 0, 0, 'offline', 'nagarajhsjfhjkhdfahljfhdlfhaslhdfhadfhashdhahdfahshdlhfdh', '', 'seen', 0),
(36, 0, 0, 'offline', 'nagraj', '', 'seen', 0),
(37, 0, 0, 'offline', 'nagraj', '', 'seen', 0),
(38, 0, 0, 'offline', 'nagraj', '', 'seen', 0),
(39, 0, 0, 'offline', 'nagraj', '', 'seen', 0),
(40, 0, 0, 'offline', 'teste by nagaraj', '', 'seen', 0),
(41, 0, 0, 'offline', '', '', 'seen', 0),
(42, 0, 0, 'offline', 'sa', '', 'seen', 0),
(43, 0, 0, 'offline', 'sa', '', 'seen', 0),
(44, 0, 0, 'offline', 'i am tester', '', 'seen', 0),
(45, 0, 0, 'offline', 'i am tester', '', 'seen', 0),
(46, 0, 0, 'offline', 'sdf', '', 'seen', 0),
(47, 0, 0, 'offline', 'sdf', '', 'seen', 0),
(48, 0, 0, 'offline', 'sdf', '', 'seen', 0),
(49, 0, 0, 'offline', 'sdf', '', 'seen', 0),
(50, 0, 0, 'offline', 'hi ma', '', 'seen', 0),
(51, 0, 0, 'offline', 'hi ma', '', 'seen', 0),
(52, 0, 0, 'offline', 'hi ma', '', 'seen', 0),
(53, 0, 0, 'offline', 'hi', '', 'seen', 0),
(54, 0, 0, 'offline', 'rahul', '', 'seen', 0),
(55, 0, 0, 'offline', '', '', 'seen', 0),
(56, 0, 0, 'offline', 'hello', '', 'seen', 0),
(57, 0, 0, 'offline', '', '', 'seen', 0),
(58, 0, 0, 'offline', '', '', 'seen', 0),
(59, 0, 0, 'offline', '', '', 'seen', 0),
(60, 0, 0, 'offline', '', '', 'seen', 0),
(61, 0, 0, 'offline', '', '', 'seen', 0),
(62, 0, 0, 'offline', 'hello', '', 'seen', 0),
(63, 0, 0, 'offline', 'hello sir how are you', '', 'seen', 0),
(64, 0, 0, 'offline', 'hello sir how are you', '', 'seen', 0),
(65, 0, 0, 'offline', 'hello sir how are you', '', 'seen', 0),
(66, 0, 0, 'offline', 'hello sir how are you', '', 'seen', 0),
(67, 1, 0, 'offline', 'chat with customers', '', 'seen', 0),
(68, 1, 0, 'offline', '', '', 'seen', 0),
(69, 1, 0, 'offline', 'hi i am nagaraj how are youuuuuuuuuuuuuuuuuuuuuuu', '', 'seen', 0),
(70, 1, 0, 'offline', 'jjfsfgjsgg ', '', 'seen', 0),
(71, 1, 0, 'offline', 'mamslkjdljfj;j;lfdja;l ', '', 'seen', 0),
(72, 1, 0, 'offline', 'nklkjadsfjajfd', '', 'seen', 0),
(73, 1, 0, 'offline', 'kjjjkjljasjfdj;', '', 'seen', 0),
(74, 1, 0, 'offline', 'jjlkjlkjfajsdjf', '', 'seen', 0),
(75, 1, 0, 'offline', 'mlkjjlkjagagf', '', 'seen', 0),
(76, 1, 0, 'offline', 'mlkjjlkjagagf', '', 'seen', 0),
(77, 1, 0, 'offline', 'mlkjjlkjagagf', '', 'seen', 0),
(78, 1, 0, 'offline', 'mlkjjlkjagagf', '', 'seen', 0),
(79, 1, 0, 'offline', 'mlkjjlkjagagf', '', 'seen', 0),
(80, 1, 0, 'offline', 'mlkjjlkjagagf', '', 'seen', 0),
(81, 1, 0, 'offline', 'mlkjjlkjagagf', '', 'seen', 0),
(82, 1, 0, 'offline', 'mlkjjlkjagagf', '', 'seen', 0),
(83, 1, 0, 'offline', 'mlkjjlkjagagf', '', 'seen', 0),
(84, 1, 0, 'offline', 'mlkjjlkjagagf', '', 'seen', 0),
(85, 1, 0, 'offline', 'mlkjjlkjagagf', '', 'seen', 0),
(86, 1, 0, 'offline', 'mlkjjlkjagagf', '', 'seen', 0),
(87, 1, 0, 'offline', 'mlkjjlkjagagf', '', 'seen', 0),
(88, 1, 0, 'offline', 'mlkjjlkjagagf', '', 'seen', 0),
(89, 1, 0, 'offline', 'mlkjjlkjagagf', '', 'seen', 0),
(90, 1, 0, 'offline', 'mlkjjlkjagagf', '', 'seen', 0),
(91, 1, 0, 'offline', 'mlkjjlkjagagf', '', 'seen', 0),
(92, 1, 0, 'offline', 'mlkjjlkjagagf', '', 'seen', 0),
(93, 1, 0, 'offline', 'hi nagaraj', '', 'seen', 0),
(94, 1, 0, 'offline', 'hi nagaraj', '', 'seen', 0),
(95, 1, 0, 'offline', 'i am tester', '', 'seen', 0),
(96, 1, 0, 'offline', '', '', 'seen', 0),
(97, 1, 0, 'offline', '', '', 'seen', 0),
(98, 1, 0, 'offline', '', '', 'seen', 0),
(99, 0, 0, 'offline', 'intergrating ttest', '', 'seen', 0),
(100, 0, 0, 'offline', 'hello', '', 'seen', 0),
(101, 0, 0, 'offline', 'hello', '', 'seen', 0),
(102, 1, 0, 'offline', 'k', '', 'seen', 0),
(103, 0, 2, 'offline', '', 'k', 'seen', 0),
(104, 1, 0, 'offline', 'k intergrating test', '', 'seen', 0),
(105, 0, 2, 'offline', '', 'k intergrating test', 'seen', 0),
(106, 1, 0, 'offline', 'k intergrating test2', '', 'seen', 0),
(107, 1, 2, 'offline', '', 'k intergrating test2', 'seen', 0),
(108, 17, 0, 'online', 'testin hack', '', 'seen', 0),
(109, 0, 2, 'offline', '', 'testin hack', 'seen', 0),
(110, 17, 0, 'online', 'teste by nagaraj', '', 'seen', 0),
(111, 0, 2, 'offline', '', 'teste by nagaraj', 'seen', 0),
(112, 17, 0, 'online', 'i am tester', '', 'seen', 0),
(113, 0, 2, 'offline', '', 'i am tester', 'seen', 0),
(114, 17, 0, 'online', 'i am tester', '', 'seen', 0),
(115, 0, 2, 'offline', '', 'i am tester', 'seen', 0),
(116, 17, 0, 'online', 'i am tester', '', 'seen', 0),
(117, 0, 2, 'offline', '', 'i am tester', 'seen', 0),
(118, 17, 0, 'online', 'i am tester', '', 'seen', 0),
(119, 0, 2, 'offline', '', 'i am tester', 'seen', 0),
(120, 17, 0, 'online', 'i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester ', '', 'seen', 0),
(121, 0, 2, 'offline', '', 'i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester ', 'seen', 0),
(122, 17, 1, 'online', 'i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester ', '', 'seen', 1),
(123, 0, 2, 'offline', '', 'i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester i am tester ', 'seen', 0),
(124, 18, 0, 'online', 'jshhch', '', 'seen', 0),
(125, 0, 2, 'offline', '', 'jshhch', 'seen', 0),
(126, 18, 1, 'online', 'hello sir how are you', '', 'seen', 0),
(127, 0, 2, 'offline', '', 'hello sir how are you', 'seen', 0),
(128, 18, 0, 'online', 'Hi', '', 'seen', 0),
(129, 0, 6, 'offline', '', 'Hi', 'seen', 0),
(130, 1, 0, 'offline', '12345678910sent by1tester', '', 'seen', 0),
(131, 0, 2, 'offline', '', '12345678910sent by1tester', 'seen', 0),
(132, 1, 0, 'offline', 'set', '', 'seen', 0),
(133, 0, 2, 'offline', '', 'setsent by1tester', 'seen', 0),
(134, 1, 0, 'offline', '2122', '', 'seen', 0),
(135, 0, 2, 'offline', '', '2122   sent by1tester', 'seen', 0),
(136, 1, 0, 'offline', '2122', '', 'seen', 0),
(137, 0, 2, 'offline', '', '2122   sent byid1nametester', 'seen', 0),
(138, 1, 0, 'offline', '2122', '', 'seen', 0),
(139, 0, 2, 'offline', '', '2122   sent by  id  :1  name  :tester', 'seen', 0),
(140, 0, 0, 'offline', '', 'sathy', 'seen', 0),
(141, 1, 0, 'offline', '', 'sathy', 'seen', 0),
(142, 1, 0, 'offline', 'last test', '', 'seen', 0),
(143, 0, 2, 'offline', '', 'last test   sent by  id  :1  name  :tester', 'seen', 1),
(144, 1, 0, 'offline', 'hi i am nagaraj', '', 'seen', 0),
(145, 1, 0, 'offline', '', '', 'seen', 0),
(146, 0, 0, 'offline', '', '   sent by  id  :1  name  :tester', 'not seen', 1),
(147, 1, 0, 'offline', '', '', 'seen', 0),
(148, 0, 0, 'offline', '', '   sent by  id  :1  name  :tester', 'not seen', 1),
(149, 1, 0, 'offline', 'pongadang', '', 'seen', 0),
(150, 0, 0, 'offline', '', 'pongadang   sent by  id  :1  name  :tester', 'not seen', 1),
(151, 1, 0, 'offline', 'i am tester', '', 'seen', 0),
(152, 0, 0, 'offline', '', 'i am tester   sent by  id  :1  name  :tester', 'not seen', 1),
(153, 1, 0, 'offline', 'i am tester1231212313213', '', 'seen', 0),
(154, 0, 0, 'offline', '', 'i am tester1231212313213   sent by  id  :1  name  :tester', 'not seen', 1),
(155, 1, 0, 'offline', 's', '', 'seen', 0),
(156, 0, 0, 'offline', '', 's   sent by  id  :1  name  :tester', 'not seen', 1),
(157, 1, 0, 'offline', 's', '', 'seen', 0),
(158, 0, 0, 'offline', '', 's   sent by  id  :1  name  :tester', 'not seen', 1),
(159, 1, 0, 'offline', '', '', 'seen', 0),
(160, 0, 0, 'offline', '', '   sent by  id  :1  name  :tester', 'not seen', 1),
(161, 1, 1, 'offline', '', '', 'seen', 0),
(162, 0, 1, 'online', '', '   sent by  id  :1  name  :tester', 'seen', 1),
(163, 1, 0, 'offline', '', '', 'seen', 0),
(164, 0, 1, 'online', '', '   sent by  id  :1  name  :tester', 'seen', 1),
(165, 1, 0, 'offline', 'podanggggggggggg', '', 'seen', 0),
(166, 0, 0, 'offline', '', 'podanggggggggggg   sent by  id  :1  name  :tester', 'not seen', 1),
(167, 1, 0, 'offline', 'podanggggggggggg', '', 'seen', 0),
(168, 0, 0, 'offline', '', 'podanggggggggggg   sent by  id  :1  name  :tester', 'not seen', 1),
(169, 1, 0, 'offline', 'seri da', '', 'seen', 0),
(170, 0, 0, 'offline', '', 'seri da   sent by  id  :1  name  :tester', 'not seen', 1),
(171, 1, 0, 'offline', '', '', 'seen', 0),
(172, 0, 0, 'offline', '', '   sent by  id  :1  name  :tester', 'not seen', 1),
(173, 1, 0, 'offline', 'hi  machi', '', 'seen', 0),
(174, 0, 5, 'offline', '', 'hi  machi   sent by  id  :1  name  :tester', 'not seen', 1),
(175, 1, 0, 'offline', 'enna da', '', 'seen', 0),
(176, 0, 0, 'offline', '', 'enna da   sent by  id  :1  name  :tester', 'not seen', 1),
(177, 1, 0, 'offline', 'enna da', '', 'seen', 0),
(178, 0, 0, 'offline', '', 'enna da   sent by  id  :1  name  :tester', 'not seen', 1),
(179, 1, 0, 'offline', 'customer sending msg ok', '', 'seen', 0),
(180, 0, 5, 'offline', '', 'customer sending msg ok   sent by  id  :1  name  :tester', 'not seen', 1),
(181, 1, 0, 'offline', 'ok its working', '', 'seen', 0),
(182, 0, 0, 'offline', '', 'ok its working   sent by  id  :1  name  :tester', 'not seen', 1),
(183, 1, 0, 'offline', 'ok its working', '', 'seen', 0),
(184, 0, 0, 'offline', '', 'ok its working   sent by  id  :1  name  :tester', 'not seen', 1),
(185, 1, 0, 'offline', 'requesting customer', '', 'seen', 0),
(186, 0, 0, 'offline', '', 'requesting customer   sent by  id  :1  name  :tester', 'not seen', 1),
(187, 1, 0, 'offline', '', '', 'seen', 0),
(188, 0, 0, 'offline', '', '   sent by  id  :1  name  :tester', 'not seen', 1),
(189, 1, 0, 'offline', 'send', '', 'seen', 0),
(190, 0, 0, 'offline', '', 'send   sent by  id  :1  name  :tester', 'not seen', 1),
(191, 1, 0, 'offline', 'ahaaaaaaaaaaaaaaaaaaaa', '', 'seen', 0),
(192, 0, 3, 'offline', '', 'ahaaaaaaaaaaaaaaaaaaaa   sent by  id  :1  name  :tester', 'not seen', 1),
(193, 1, 0, 'offline', 'hi i am from testing side', '', 'seen', 0),
(194, 0, 5, 'offline', '', 'hi i am from testing side   sent by  id  :1  name  :tester', 'not seen', 1),
(195, 1, 0, 'offline', 'adding', '', 'seen', 0),
(196, 0, 1, 'online', '', 'adding   sent by  id  :1  name  :tester', 'seen', 1),
(197, 1, 0, 'offline', 'sathya', '', 'seen', 0),
(198, 0, 1, 'online', '', 'sathya   sent by  id  :1  name  :tester', 'seen', 1),
(199, 1, 0, 'offline', 'i am sathya', '', 'seen', 0),
(200, 0, 1, 'online', '', 'i am sathya   sent by  id  :1  name  :tester', 'seen', 1),
(201, 1, 0, 'offline', 'sathya', '', 'seen', 0),
(202, 0, 0, '', '', 'sathya   sent by  id  :1  name  :tester', 'not seen', 1),
(203, 1, 0, 'offline', 'tew', '', 'seen', 0),
(204, 0, 1, 'online', '', 'tew   sent by  id  :1  name  :tester', 'seen', 1),
(205, 1, 0, 'offline', 'ji', '', 'seen', 0),
(206, 0, 1, 'online', '', 'ji   sent by  id  :1  name  :tester', 'seen', 1),
(207, 1, 0, 'offline', 'ji', '', 'seen', 0),
(208, 0, 1, 'online', '', 'ji   sent by  id  :1  name  :tester', 'seen', 1),
(209, 1, 0, 'offline', 'l', '', 'seen', 0),
(210, 0, 1, 'online', '', 'l   sent by  id  :1  name  :tester', 'seen', 1),
(211, 1, 0, 'offline', 'hi  machi', '', 'seen', 0),
(212, 0, 1, 'online', '', 'hi  machi   sent by  id  :1  name  :tester', 'seen', 1),
(213, 1, 0, 'offline', '', '', 'seen', 0),
(214, 0, 1, 'online', '', '   sent by  id  :1  name  :tester', 'seen', 1),
(215, 1, 0, 'offline', 'hi da', '', 'seen', 0),
(216, 0, 1, 'online', '', 'hi da   sent by  id  :1  name  :tester', 'seen', 1),
(217, 1, 0, 'offline', 'hi da i am nagaraj', '', 'seen', 0),
(218, 0, 1, 'online', '', 'hi da i am nagaraj   sent by  id  :1  name  :tester', 'seen', 1),
(219, 1, 0, 'offline', 'podannnfffffffffffffffffff', '', 'seen', 0),
(220, 0, 1, 'online', '', 'podannnfffffffffffffffffff   sent by  id  :1  name  :tester', 'seen', 1),
(221, 1, 0, 'offline', 'podannnfffffffffffffffffff', '', 'seen', 0),
(222, 0, 1, 'online', '', 'podannnfffffffffffffffffff   sent by  id  :1  name  :tester', 'seen', 1),
(223, 0, 1, 'online', 'hi  machi', '', 'seen', 0),
(224, 1, 0, 'offline', '', 'hi  machi   sent by  id  :1  name  :tester', 'seen', 1),
(225, 0, 1, 'online', 'podsjjnjdfhkjshdfj', '', 'seen', 0),
(226, 1, 0, 'offline', '', 'podsjjnjdfhkjshdfj   sent by  id  :1  name  :tester', 'seen', 1),
(227, 0, 1, 'online', 'ok', '', 'seen', 0),
(228, 1, 0, 'offline', '', 'ok   sent by', 'seen', 0),
(229, 0, 1, 'online', 'hi  machi', '', 'seen', 0),
(230, 1, 0, 'offline', '', 'hi  machi   sent by', 'seen', 0),
(231, 0, 1, 'online', 'sdffaf', '', 'seen', 0),
(232, 1, 0, 'offline', '', 'sdffaf   sent by', 'seen', 0),
(233, 0, 1, 'online', 'sdfafafd', '', 'seen', 0),
(234, 1, 0, 'offline', '', 'sdfafafd   sent by', 'seen', 0),
(235, 0, 1, 'online', '234243', '', 'seen', 0),
(236, 1, 0, 'offline', '', '234243   sent by', 'seen', 0),
(237, 0, 1, 'online', 'nnsadfkj', '', 'seen', 0),
(238, 1, 0, 'offline', '', 'nnsadfkj   sent by', 'seen', 0),
(239, 0, 1, 'online', 's4', '', 'seen', 0),
(240, 1, 0, 'offline', '', 's4   sent by', 'seen', 0),
(241, 0, 1, 'online', 'SATHYA', '', 'seen', 0),
(242, 1, 0, 'offline', '', 'SATHYA   sent by', 'seen', 0),
(243, 0, 1, 'online', 'podang', '', 'seen', 0),
(244, 1, 0, 'offline', '', 'podang   sent by', 'seen', 0),
(245, 0, 1, 'online', 'sdas', '', 'seen', 0),
(246, 1, 0, 'offline', '', 'sdas   sent by', 'seen', 0),
(247, 18, 0, '', 'Hi can you please send me the price rate', '', 'seen', 0),
(248, 0, 2, '', '', 'Hi can you please send me the price rate   sent by  id  :18  name  :SumanJha', 'not seen', 18),
(249, 18, 0, '', 'Hi', '', 'seen', 0),
(250, 0, 6, '', '', 'Hi   sent by  id  :18  name  :SumanJha', 'not seen', 18),
(251, 18, 0, '', 'Hi', '', 'seen', 0),
(252, 0, 1, 'online', '', 'Hi   sent by  id  :18  name  :SumanJha', 'seen', 18),
(253, 18, 0, '', 'Hay', '', 'seen', 0),
(254, 0, 1, 'online', '', 'Hay   sent by  id  :18  name  :SumanJha', 'seen', 18),
(255, 0, 1, 'online', 'oihjihjkhhuhi', '', 'seen', 0),
(256, 1, 0, 'offline', '', 'oihjihjkhhuhi   sent by', 'seen', 0),
(257, 0, 1, 'online', 'joiujiohiuoyhuioyhoiuh', '', 'seen', 0),
(258, 1, 0, 'offline', '', 'joiujiohiuoyhuioyhoiuh   sent by', 'seen', 0),
(259, 0, 1, 'online', 'jkhkjhkjhjkhkjhkjhkhkjhkjhjkhkjhkjhk', '', 'seen', 0),
(260, 1, 0, 'offline', '', 'jkhkjhkjhjkhkjhkjhkhkjhkjhjkhkjhkjhk   sent by', 'seen', 0),
(261, 0, 1, 'online', 'sdfd', '', 'seen', 0),
(262, 1, 0, 'offline', '', 'sdfd   sent by', 'seen', 0),
(263, 0, 1, 'online', 'sdfd', '', 'seen', 0),
(264, 1, 0, 'offline', '', 'sdfd   sent by', 'seen', 0),
(265, 0, 1, 'online', 'sssssssss', '', 'seen', 0),
(266, 1, 0, 'offline', '', 'sssssssss   sent by', 'seen', 0),
(267, 0, 1, 'online', 'hello', '', 'seen', 0),
(268, 1, 0, 'offline', '', 'hello   sent by', 'seen', 0),
(269, 0, 1, 'online', 'hrllo', '', 'seen', 0),
(270, 1, 0, 'offline', '', 'hrllo   sent by', 'seen', 0),
(271, 0, 1, 'online', 'adding', '', 'seen', 0),
(272, 1, 0, 'offline', '', 'adding   sent by', 'seen', 0),
(273, 0, 1, 'online', 'jijifjdsifj', '', 'seen', 0),
(274, 1, 0, 'offline', '', 'jijifjdsifj   sent by', 'seen', 0),
(275, 0, 1, 'online', '  ksjlskadfk', '', 'seen', 0),
(276, 1, 0, 'offline', '', '  ksjlskadfk   sent by', 'seen', 0),
(277, 0, 1, 'online', 'njnsjkfgjk', '', 'seen', 0),
(278, 1, 0, 'offline', '', 'njnsjkfgjk   sent by', 'seen', 0),
(279, 0, 1, 'online', 'njjjjjjjjjjjjjjjjjj', '', 'seen', 0),
(280, 1, 0, 'offline', '', 'njjjjjjjjjjjjjjjjjj   sent by', 'seen', 0),
(281, 1, 0, 'offline', 'hid ', '', 'seen', 0),
(282, 0, 2, '', '', 'hid    sent by  id  :1  name  :tester', 'not seen', 1),
(283, 0, 1, 'online', 'hi', '', 'seen', 0),
(284, 1, 0, 'offline', '', 'hi   sent byAllen Solly', 'seen', 0),
(285, 1, 0, 'offline', 'hello', '', 'seen', 0),
(286, 0, 1, 'online', '', 'hello   sent by  id  :1  name  :tester', 'seen', 1),
(287, 1, 0, 'offline', 'hello', '', 'seen', 0),
(288, 0, 4, '', '', 'hello   sent by  id  :1  name  :tester', 'not seen', 1),
(289, 1, 0, 'offline', 'hi  machi', '', 'seen', 0),
(290, 0, 2, '', '', 'hi  machi   sent by  id  :1  name  :tester', 'not seen', 1),
(291, 1, 0, 'offline', 'hi  machi', '', 'seen', 0),
(292, 0, 2, '', '', 'hi  machi   sent by  id  :1  name  :tester', 'not seen', 1),
(293, 1, 0, 'offline', 'hi  machi', '', 'seen', 0),
(294, 0, 2, '', '', 'hi  machi   sent by  id  :1  name  :tester', 'not seen', 1),
(295, 1, 0, 'offline', 'hi  machi', '', 'seen', 0),
(296, 0, 2, '', '', 'hi  machi   sent by  id  :1  name  :tester', 'not seen', 1),
(297, 0, 1, 'online', 'dasd', '', 'seen', 0),
(298, 1, 0, 'offline', '', 'dasd   sent byAllen Solly', 'seen', 0),
(299, 0, 1, 'online', 'sdfd', '', 'seen', 0),
(300, 1, 0, 'offline', '', 'sdfd   sent byAllen Solly', 'seen', 0),
(301, 0, 1, '', 'sathya', '', 'not seen', 0),
(302, 1, 0, 'offline', '', 'sathya   sent byAllen Solly', 'seen', 0),
(303, 0, 1, '', 'tesyt', '', 'not seen', 0),
(304, 1, 0, 'offline', '', 'tesyt   sent byAllen Solly', 'seen', 0);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `colorid` int(200) NOT NULL,
  `color` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`colorid`, `color`) VALUES
(1, 'black'),
(2, 'white'),
(3, 'red'),
(4, 'green'),
(5, 'blue'),
(6, 'grey'),
(7, 'lavender'),
(8, 'orange'),
(9, 'yellow'),
(10, 'brown');

-- --------------------------------------------------------

--
-- Table structure for table `creditholder`
--

CREATE TABLE `creditholder` (
  `id` int(250) NOT NULL,
  `cust_id` int(200) NOT NULL,
  `crname` varchar(200) NOT NULL,
  `crnum` varchar(200) NOT NULL,
  `cmont` int(250) NOT NULL,
  `cyear` int(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creditholder`
--

INSERT INTO `creditholder` (`id`, `cust_id`, `crname`, `crnum`, `cmont`, `cyear`) VALUES
(1, 1, 'tester', '', 9, 2006),
(2, 2, 'sathya', '123 32323 232', 6, 2009),
(3, 3, 'Tanya Agrwal', '1111223232', 4, 2008),
(7, 5, 'nj', '123 9742 3434 434', 5, 2007),
(8, 9, '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `delvamtdata`
--

CREATE TABLE `delvamtdata` (
  `id` int(11) NOT NULL,
  `table` varchar(250) NOT NULL,
  `itemid` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `mobno` varchar(20) NOT NULL,
  `msg` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `mail`, `mobno`, `msg`) VALUES
(1, 'sathya', 'shakthipav@gmail.com', '8098827964', 'testing'),
(2, '', '', '', ''),
(3, 'sathya', '', '8098827964', 'soo cute!!!!!!'),
(4, 'sathya', 'lamphaxer@outlook.com', '8098827964', 'soo cute!!!!!!'),
(5, 'sathya', 'lamphaxer@outlook.com', '8098827964', 'soo cute!!!!!!'),
(6, 'sathya', 'lamphaxer@outlook.com', '8098827964', 'soo cute!!!!!!'),
(7, 'sathya', 'lamphaxer@outlook.com', '8098827964', 'soo cute!!!!!!'),
(8, 'sathya', 'lamphaxer@outlook.com', '8098827964', 'soo cute!!!!!!'),
(9, '', '', '', '&lt;script&gt;alert(&quot;hello world&quot;);&lt;/script&gt;\r\n\r\n'),
(10, '', '', '', '&lt;script&gt;alert(&quot;hello world&quot;);&lt;/script&gt;\r\n\r\n'),
(11, '', '', '', '&lt;script&gt;alert(&quot;hello world&quot;);&lt;/script&gt;\r\n\r\n'),
(12, '', '', '', ' Enter your Feedback :-)'),
(13, '', '', '', ' Enter your Feedback :-)'),
(14, '', '', '', ' Enter your Feedback :-)'),
(15, '', '', '', ' Enter your Feedback :-)'),
(16, '', '', '', ' Enter your Feedback :-)'),
(17, '', '', '', ' Enter your Feedback :-)'),
(18, '', '', '', ' Enter your Feedback :-)'),
(19, '', '', '', ' Enter your Feedback :-)'),
(20, '', '', '', ' Enter your Feedback :-)'),
(21, '', '', '', ' Enter your Feedback :-)'),
(22, '', '', '', ' Enter your Feedback :-)');

-- --------------------------------------------------------

--
-- Table structure for table `fproduct`
--

CREATE TABLE `fproduct` (
  `itemid` int(250) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` int(250) NOT NULL,
  `offers` int(100) NOT NULL,
  `delamnt` int(100) NOT NULL,
  `color` varchar(200) NOT NULL,
  `size` int(200) NOT NULL,
  `available` int(250) NOT NULL,
  `storeid` int(11) NOT NULL,
  `storename` varchar(1000) NOT NULL,
  `details` varchar(10000) NOT NULL,
  `brand` int(100) NOT NULL,
  `cust_type` varchar(1000) NOT NULL,
  `cname` varchar(1000) NOT NULL,
  `subcat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fproduct`
--

INSERT INTO `fproduct` (`itemid`, `image`, `name`, `price`, `offers`, `delamnt`, `color`, `size`, `available`, `storeid`, `storename`, `details`, `brand`, `cust_type`, `cname`, `subcat`) VALUES
(1, 'photos/61EHrm0yVVL._UL1500_.jpg', 'Shirt', 1345, 10, 0, '1', 1, 23, 6, 'MARKS & SPENCER', '', 1, '', '', ''),
(2, 'photos/41jFbXdqy1L._AC_UL260_SR200,260_.jpg', 'mobile', 122, 10, 0, '2', 2, 1, 2, 'allen solly at skywalk', '', 2, '', '', ''),
(3, 'photos/41KqCYda7qL._UX466_.jpg', 'mobile', 2344, 10, 0, '3', 2, 2, 2, 'allen solly at skywalk', '', 3, '', '', ''),
(4, 'photos/41q5rGyb6-L.jpg', 'Shoue', 344, 10, 0, '4', 3, 34, 1, 'allen solly at skywalk', '', 4, '', '', ''),
(5, 'photos/41s4myPLysL._UX425_.jpg', 'Shuit', 65656, 10, 0, '5', 5, 34, 1, 'allen solly at skywalk', '', 5, '', '', ''),
(6, 'photos/41S7w6I8oML._AC_UL260_SR200,260_.jpg', 'shirt', 3444, 10, 0, '6', 4, 334, 3, 'allen solly at skywalk', '', 6, '', '', ''),
(7, 'photos/51h0X5vuoBL._AC_UL260_SR200,260_.jpg', 'Shoue', 343434, 10, 0, '7', 6, 2, 2, 'allen solly at skywalk', '', 7, '', '', ''),
(8, 'photos/71n9mzOLftL._UL1500_.jpg', 'pant', 3452, 10, 0, '8', 5, 34, 3, 'navigator', '', 8, '', '', ''),
(9, 'uploads/25-ways-for-stay-at-home-moms-to-make-money.png', '', 1212, 12, 0, '2', 1, 4, 2, ' ARIHANT', 'sds', 2, 'men', 'shirt', 't-shirt'),
(10, 'uploads/Cute-Small-Girl-Waiting-for-Someone-Wallpaper.jpg', '', 1212, 12, 0, '2', 1, 4, 2, ' ARIHANT', 'sds', 2, 'men', 'shirt', 't-shirt'),
(11, 'uploads/Cute-Small-Girl-Waiting-for-Someone-Wallpaper.jpg', '', 1212, 12, 12, '2', 1, 4, 2, ' ARIHANT', 'sds', 2, 'men', 'shirt', 't-shirt'),
(12, 'uploads/', '', 0, 0, 0, 'Select Color', 0, 0, 0, '', '', 0, 'Choose customer type', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemid` int(20) NOT NULL,
  `image` varchar(250) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `cname` varchar(1000) NOT NULL,
  `subcat` varchar(1000) NOT NULL,
  `cust_type` varchar(1000) NOT NULL,
  `price` int(255) NOT NULL,
  `delamnt` int(100) NOT NULL,
  `details` varchar(20000) NOT NULL,
  `model` varchar(1000) NOT NULL,
  `brand` int(100) NOT NULL,
  `color` int(100) NOT NULL,
  `size` int(250) NOT NULL,
  `storename` varchar(100) NOT NULL,
  `storeid` int(250) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `offers` int(200) NOT NULL,
  `available` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemid`, `image`, `name`, `cname`, `subcat`, `cust_type`, `price`, `delamnt`, `details`, `model`, `brand`, `color`, `size`, `storename`, `storeid`, `description`, `offers`, `available`) VALUES
(1, 'photos/prodimg.jpg', '', '', '', '', 100, 0, 'testing', 'galaxy', 1, 1, 1, 'allen solly', 1, 'nice mobile', 10, 10),
(2, 'uploads/paperbag_yellow.png', '', '', '', '', 2000, 0, 'sathya', 'shirt', 2, 2, 2, 'allen solly', 2, 'smartone', 10, 10),
(3, 'uploads/sathya.jpg', '', '', '', '', 6470, 0, 'developer', 't-shirt', 3, 3, 3, 'allen solly', 3, 'good', 10, 10),
(4, 'uploads/', '', '', '', '', 0, 0, '', '', 4, 4, 5, 'allen solly', 0, '', 10, 10),
(5, 'uploads/41s4myPLysL._UX425_.jpg', '', '', '', '', 2323, 0, 'saty', '', 5, 5, 6, 'allen solly', 3, '', 10, 10),
(6, 'uploads/41s4myPLysL._UX425_.jpg', '', '', '', '', 2323, 0, 'saty', '', 6, 6, 2, 'allen solly', 3, '', 10, 10),
(7, 'uploads/Designer dresses 1.jpg', '', '', '', '', 4975, 0, 'High class designer Dresses', '', 7, 7, 3, 'allen solly', 1, '', 10, 10),
(8, 'uploads/Designer dresses 2.jpg', '', '', '', '', 4975, 0, 'High class designer Dresses', '', 8, 8, 4, 'allen solly', 1, '', 10, 10),
(9, 'uploads/Karachi cotton 1.jpg', '', '', '', '', 3999, 0, 'Karachi Cotton', '', 8, 9, 5, 'allen solly', 2, '', 10, 10),
(10, 'uploads/', '', '', '', '', 3999, 0, 'Karachi Cotton', '', 10, 10, 6, 'allen solly', 2, '', 10, 10),
(11, 'testing', '', '', '', '', 324, 0, 'test', 'test', 0, 1, 30, 'test', 1, 'test', 10, 10),
(12, 'uploads/Chiffon saree with satin borders... Excellent fabric quality... Running blouse 2.j', '', '', '', '', 999, 0, 'Chiffon saree with satin borders... Excellent fabric quality... Running blouse ', '', 0, 0, 30, 'allen solly', 3, '', 10, 10),
(13, 'uploads/61HPXYwVJcL._UL1500_.jpg', '', '', '', '', 2121, 0, 'developer', 't-shirt', 0, 0, 30, 'allen solly', 4, '', 10, 10),
(14, 'uploads/Kathiawari work on pure resham zari  2.jpg', '', '', '', '', 499, 0, 'Kathiwari saree', 'Sarees', 0, 0, 30, 'allen solly', 3, '', 10, 10),
(15, 'uploads/Karachi cotton 2.jpg', '', '', '', '', 1299, 0, 'Karachi Cotton', 'Sarees', 0, 0, 30, 'allen solly', 2, '', 10, 10),
(16, 'uploads/Pure Georgette satin brush print design 1.jpg', '', '', '', '', 675, 0, 'Pure Georgette satin brush print design ', '', 0, 0, 30, 'allen solly', 4, '', 10, 10),
(17, 'uploads/Chiffon saree with satin borders... Excellent fabric quality... Running blouse 2.j', '', '', '', '', 876, 0, 'Chiffon saree with satin borders... Excellent fabric quality... Running blouse 2', 'Sarees', 0, 0, 30, 'allen solly', 4, '', 10, 10),
(18, 'uploads/Chiffon saree with satin borders... Excellent fabric quality... Running blouse 2.jpg', '', '', '', '', 789, 0, 'Chiffon saree with satin borders... Excellent fabric quality... Running blouse 2', 'Sarees', 0, 0, 30, 'allen solly', 4, '', 10, 10),
(19, 'uploads/61EHrm0yVVL._UL1500_.jpg', '', 'shoes', 'sports shoes', 'women', 100000, 0, '', 'Sarees', 0, 0, 30, 'allen solly', 0, '', 10, 10),
(20, 'uploads/', '', '', '', 'Choose customer type', 0, 0, '', '', 0, 0, 0, '', 0, '', 0, 0),
(21, 'uploads/', '', '', '', 'Choose customer type', 0, 0, '', '', 0, 0, 0, '', 112, '', 0, 0),
(22, 'uploads/billl.jpg', '', 'shirt', 't-shirt', 'men', 122, 0, 'super', 't-shirt', 2, 2, 3, ' ARIHANT', 2, '', 12, 12),
(23, 'uploads/', '', '', '', 'Choose customer type', 0, 0, '', '', 0, 0, 0, '', 0, '', 0, 0),
(24, 'uploads/', '', '', '', 'Choose customer type', 0, 0, '', '', 0, 0, 0, '', 0, '', 0, 0),
(25, 'uploads/', '', '', '', 'Choose customer type', 0, 0, '', '', 0, 0, 0, '', 0, '', 0, 0),
(26, 'uploads/Cute-Small-Girl-Waiting-for-Someone-Wallpaper.jpg', '', 'we', 'sd', 'men', 1212, 0, '2df', '21', 1, 1, 3, ' LOUIS PHILIPPE', 1, '', 45, 12),
(27, 'uploads/cart.png', '', '', '', 'Choose customer type', 0, 0, '', '', 0, 0, 0, '', 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jackvisit`
--

CREATE TABLE `jackvisit` (
  `id` int(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jackvisit`
--

INSERT INTO `jackvisit` (`id`, `ip`, `date`) VALUES
(1, '::1', '30-08-2016,11:13am'),
(2, '::1', '30-08-2016,11:14am'),
(3, '::1', '30-08-2016,11:14am'),
(4, '::1', '30-08-2016,11:14am'),
(5, '::1', '30-08-2016,11:14am'),
(6, '::1', '30-08-2016,11:16am'),
(7, '::1', '30-08-2016,11:25am'),
(8, '::1', '30-08-2016,11:25am'),
(9, '::1', '30-08-2016,11:41am'),
(10, '::1', '30-08-2016,11:41am'),
(11, '::1', '30-08-2016,11:44am'),
(12, '::1', '30-08-2016,11:49am'),
(13, '::1', '30-08-2016,11:50am'),
(14, '::1', '31-08-2016,07:06am'),
(15, '::1', '31-08-2016,09:01am'),
(16, '::1', '31-08-2016,01:40pm'),
(17, '::1', '01-09-2016,10:53am'),
(18, '::1', '01-09-2016,10:54am'),
(19, '::1', '01-09-2016,10:55am'),
(20, '::1', '01-09-2016,10:55am'),
(21, '::1', '01-09-2016,10:57am'),
(22, '::1', '01-09-2016,11:08am'),
(23, '::1', '01-09-2016,12:39pm'),
(24, '::1', '01-09-2016,12:47pm'),
(25, '::1', '01-09-2016,12:48pm'),
(26, '::1', '01-09-2016,12:50pm'),
(27, '::1', '01-09-2016,12:50pm'),
(28, '::1', '01-09-2016,12:50pm'),
(29, '::1', '01-09-2016,12:50pm'),
(30, '::1', '01-09-2016,12:52pm'),
(31, '::1', '01-09-2016,12:57pm'),
(32, '::1', '01-09-2016,12:57pm'),
(33, '::1', '01-09-2016,12:57pm'),
(34, '::1', '01-09-2016,12:57pm'),
(35, '::1', '01-09-2016,12:57pm'),
(36, '::1', '01-09-2016,12:57pm'),
(37, '::1', '01-09-2016,12:57pm'),
(38, '::1', '01-09-2016,01:00pm'),
(39, '::1', '01-09-2016,01:01pm'),
(40, '::1', '02-09-2016,08:51am'),
(41, '::1', '02-09-2016,08:52am'),
(42, '::1', '02-09-2016,08:52am'),
(43, '::1', '02-09-2016,10:00am'),
(44, '::1', '02-09-2016,10:00am'),
(45, '::1', '02-09-2016,10:00am'),
(46, '::1', '02-09-2016,10:00am'),
(47, '::1', '02-09-2016,10:00am'),
(48, '::1', '02-09-2016,10:02am'),
(49, '::1', '02-09-2016,10:05am');

-- --------------------------------------------------------

--
-- Table structure for table `offrproduct`
--

CREATE TABLE `offrproduct` (
  `itemid` int(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` int(250) NOT NULL,
  `delamnt` int(100) NOT NULL,
  `color` int(200) NOT NULL,
  `size` int(200) NOT NULL,
  `available` int(11) NOT NULL,
  `storeid` int(11) NOT NULL,
  `storename` varchar(1000) NOT NULL,
  `type` varchar(100) NOT NULL,
  `offers` int(100) NOT NULL,
  `details` varchar(10000) NOT NULL,
  `brand` int(100) NOT NULL,
  `cust_type` varchar(1000) NOT NULL,
  `cname` varchar(1000) NOT NULL,
  `subcat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offrproduct`
--

INSERT INTO `offrproduct` (`itemid`, `image`, `name`, `price`, `delamnt`, `color`, `size`, `available`, `storeid`, `storename`, `type`, `offers`, `details`, `brand`, `cust_type`, `cname`, `subcat`) VALUES
(1, 'photos/41jFbXdqy1L._AC_UL260_SR200,260_.jpg', 'mobile', 1000, 0, 1, 1, 5, 1, 'allen solly', 'men', 10, '', 1, '', '', ''),
(2, 'photos/41KqCYda7qL._UX466_.jpg', 'car', 178, 0, 2, 1, 12, 0, 'allen solly', 'women', 10, '', 4, '', '', ''),
(3, 'photos/41q5rGyb6-L.jpg', 'Shoue', 1234, 0, 3, 10, 13, 4, 'allen solly', 'kid', 10, '', 3, '', '', ''),
(4, 'photos/41s4myPLysL._UX425_.jpg', 'Shuit', 3444, 0, 4, 10, 122, 4, 'allen solly', 'all', 10, '', 4, '', '', ''),
(5, 'photos/41S7w6I8oML._AC_UL260_SR200,260_.jpg', 'mobile', 234, 0, 5, 10, 45, 6, 'allen solly', 'men', 10, '', 5, '', '', ''),
(6, 'photos/51h0X5vuoBL._AC_UL260_SR200,260_.jpg', 'pen', 34, 0, 6, 10, 34, 5, 'allen solly', 'women', 10, '', 6, '', '', ''),
(7, 'photos/71pNZa16LWL._UL1500_.jpg', 'mobile', 100000, 0, 7, 10, 767, 4, 'MARKS & SPENCER', 'women', 10, '', 7, '', '', ''),
(8, 'photos/612N2oIlyDL._UL1500_.jpg', 'shirt', 900, 0, 8, 10, 9, 3, 'adidas', 'kid', 10, '', 8, '', '', ''),
(9, 'uploads/', '', 0, 0, 0, 0, 0, 0, '', '', 0, '', 0, 'Choose customer type', '', ''),
(10, 'uploads/cart.png', '', 0, 0, 0, 0, 0, 0, '', '', 0, '', 0, 'Choose customer type', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(250) NOT NULL,
  `itemid` int(250) NOT NULL,
  `table` varchar(1000) NOT NULL,
  `quantity` int(250) NOT NULL,
  `size` varchar(1000) NOT NULL,
  `cust_id` int(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `amount` int(200) NOT NULL,
  `paymethod` varchar(1000) NOT NULL,
  `ordate` varchar(100) NOT NULL,
  `deldate` varchar(100) NOT NULL,
  `candate` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `itemid`, `table`, `quantity`, `size`, `cust_id`, `status`, `amount`, `paymethod`, `ordate`, `deldate`, `candate`, `address`) VALUES
(29, 1, 'offrproduct', 1, '', 1, 'placed order', 500, 'Cash on Delivery', '17-08-2016,10:18am', '', '', 'test test 600095'),
(30, 2, 'fproduct', 1, '', 1, 'placed order', 0, 'Cash on Delivery', '17-08-2016,10:20am', '', '', 'test test 600095'),
(31, 2, 'fproduct', 1, '', 1, 'placed order', 61, 'Cash on Delivery', '17-08-2016,10:21am', '', '', 'test test 600095'),
(32, 2, 'fproduct', 1, '', 1, 'placed order', 61, 'Cash on Delivery', '17-08-2016,10:26am', '', '', 'test test 600095'),
(33, 2, 'fproduct', 1, '', 1, 'placed order', 0, 'Cash on Delivery', '17-08-2016,10:27am', '', '', 'test test 600095'),
(34, 2, 'fproduct', 1, '', 1, 'placed order', 122, 'Cash on Delivery', '17-08-2016,10:30am', '', '', 'test test 600095'),
(35, 19, 'items', 2, '', 1, 'placed order', 100000, 'Cash on Delivery', '17-08-2016,10:33am', '', '', 'test test 600095'),
(36, 19, 'items', 1, '', 1, 'placed order', 50000, 'Cash on Delivery', '17-08-2016,10:37am', '', '', 'test test 600095'),
(37, 19, 'items', 10, '', 1, 'placed order', 500000, 'Cash on Delivery', '17-08-2016,10:39am', '', '', 'test test 600095'),
(38, 8, 'fproduct', 1, '', 1, 'placed order', 345, 'Cash on Delivery', '17-08-2016,10:41am', '', '', 'test test 600095'),
(40, 2, 'fproduct', 1, '', 1, 'placed order', 61, 'Cash on Delivery', '17-08-2016,11:04am', '', '', 'test test 600095'),
(41, 7, 'fproduct', 1, '', 1, 'placed order', 343434, 'Cash on Delivery', '17-08-2016,11:11am', '', '', 'test test 600095'),
(43, 7, 'fproduct', 1, '', 1, 'placed order', 343434, 'Cash on Delivery', '17-08-2016,11:20am', '', '', 'test test 600095'),
(45, 7, 'fproduct', 1, '', 1, 'placed order', 343434, 'Cash on Delivery', '17-08-2016,11:21am', '', '', 'test test 600095'),
(46, 7, 'fproduct', 1, '', 1, 'placed order', 343434, 'Cash on Delivery', '17-08-2016,11:22am', '', '', 'test test 600095'),
(47, 7, 'fproduct', 1, '', 1, 'placed order', 343434, 'Cash on Delivery', '17-08-2016,11:36am', '', '', 'test test 600095'),
(48, 3, 'fproduct', 1, '', 1, 'placed order', 2344, 'Cash on Delivery', '17-08-2016,01:37pm', '', '', 'test test 600095'),
(49, 5, 'fproduct', 1, '', 1, 'placed order', 65656, 'Cash on Delivery', '17-08-2016,01:45pm', '', '', 'test test 600095'),
(50, 19, 'items', 1, '', 1, 'placed order', 100000, 'Cash on Delivery', '17-08-2016,01:47pm', '', '', 'test test 600095'),
(51, 3, 'fproduct', 1, '', 1, 'placed order', 2344, 'Cash on Delivery', '17-08-2016,01:51pm', '', '', 'test test 600095'),
(52, 3, 'recproduct', 3, '', 9, 'placed order', 16296, 'Cash on Delivery', '18-08-2016,12:12pm', '', '', 'shopwalkin street shopwalkin 323434'),
(53, 1, 'recproduct', 1, '', 9, 'placed order', 1234, 'Credit Card', '18-08-2016,12:15pm', '', '', 'shopwalkin street shopwalkin 323434'),
(54, 6, 'fproduct', 1, '', 1, 'placed order', 3444, 'Cash on Delivery', '23-08-2016,07:25am', '', '', 'test test 600095'),
(62, 2, 'fproduct', 1, '', 18, 'placed order', 122, 'Cash on Delivery', '24-08-2016,09:22am', '', '', 'MMDA Colony Chennai 600095'),
(66, 2, 'fproduct', 1, '', 18, 'placed order', 122, 'Cash on Delivery', '24-08-2016,09:35am', '', '', 'MMDA Colony Chennai 600095'),
(67, 2, 'fproduct', 1, '', 18, 'placed order', 122, 'Cash on Delivery', '24-08-2016,09:37am', '', '', 'MMDA Colony Chennai 600095'),
(69, 2, 'fproduct', 1, '', 18, 'placed order', 122, 'Cash on Delivery', '24-08-2016,09:40am', '', '', 'MMDA Colony Chennai 600095'),
(70, 2, 'fproduct', 1, '', 18, 'placed order', 122, 'Cash on Delivery', '24-08-2016,09:41am', '', '', 'MMDA Colony Chennai 600095'),
(71, 2, 'fproduct', 1, '', 18, 'placed order', 122, 'Cash on Delivery', '24-08-2016,09:43am', '', '', 'MMDA Colony Chennai 600095'),
(73, 6, 'fproduct', 1, '', 18, 'placed order', 3444, 'Cash on Delivery', '24-08-2016,09:48am', '', '', 'MMDA Colony Chennai 600095'),
(74, 6, 'fproduct', 1, '', 18, 'placed order', 3444, 'Cash on Delivery', '24-08-2016,09:49am', '', '', 'MMDA Colony Chennai 600095'),
(75, 6, 'fproduct', 1, '', 18, 'placed order', 3444, 'Cash on Delivery', '24-08-2016,09:50am', '', '', 'MMDA Colony Chennai 600095'),
(76, 6, 'fproduct', 1, '', 18, 'placed order', 3444, 'Cash on Delivery', '24-08-2016,09:51am', '', '', 'MMDA Colony Chennai 600095'),
(77, 6, 'fproduct', 1, '', 18, 'placed order', 3444, 'Cash on Delivery', '24-08-2016,09:52am', '', '', 'MMDA Colony Chennai 600095'),
(78, 6, 'fproduct', 1, '', 18, 'placed order', 3444, 'Cash on Delivery', '24-08-2016,09:52am', '', '', 'MMDA Colony Chennai 600095'),
(79, 6, 'fproduct', 1, '', 18, 'placed order', 3444, 'Cash on Delivery', '24-08-2016,09:53am', '', '', 'MMDA Colony Chennai 600095'),
(80, 6, 'fproduct', 1, '', 18, 'placed order', 3444, 'Cash on Delivery', '24-08-2016,09:54am', '', '', 'MMDA Colony Chennai 600095'),
(81, 6, 'fproduct', 1, '', 18, 'placed order', 3444, 'Cash on Delivery', '24-08-2016,09:55am', '', '', 'MMDA Colony Chennai 600095'),
(82, 6, 'fproduct', 1, '', 18, 'placed order', 3444, 'Cash on Delivery', '24-08-2016,09:56am', '', '', 'MMDA Colony Chennai 600095'),
(83, 6, 'fproduct', 1, '', 18, 'placed order', 3444, 'Cash on Delivery', '24-08-2016,09:57am', '', '', 'MMDA Colony Chennai 600095'),
(84, 6, 'fproduct', 1, '', 18, 'placed order', 3444, 'Cash on Delivery', '24-08-2016,09:58am', '', '', 'MMDA Colony Chennai 600095'),
(85, 6, 'fproduct', 1, '', 18, 'placed order', 3444, 'Cash on Delivery', '24-08-2016,09:58am', '', '', 'MMDA Colony Chennai 600095'),
(86, 6, 'fproduct', 1, '', 18, 'placed order', 3444, 'Cash on Delivery', '24-08-2016,09:59am', '', '', 'MMDA Colony Chennai 600095'),
(87, 6, 'fproduct', 1, '', 18, 'placed order', 3444, 'Cash on Delivery', '24-08-2016,10:00am', '', '', 'MMDA Colony Chennai 600095'),
(88, 6, 'fproduct', 1, '', 18, 'placed order', 3444, 'Cash on Delivery', '24-08-2016,10:01am', '', '', 'MMDA Colony Chennai 600095'),
(89, 6, 'fproduct', 1, '', 18, 'placed order', 3444, 'Cash on Delivery', '24-08-2016,10:01am', '', '', 'MMDA Colony Chennai 600095'),
(92, 8, 'slides', 1, '', 18, 'placed order', 3000, 'Cash on Delivery', '24-08-2016,11:33am', '', '', 'MMDA Colony Chennai 600095'),
(93, 8, 'offrproduct', 1, '', 18, 'placed order', 900, 'Cash on Delivery', '24-08-2016,11:54am', '', '', 'MMDA Colony Chennai 600095'),
(94, 2, 'recproduct', 1, '', 18, 'placed order', 5432, 'Cash on Delivery', '24-08-2016,11:57am', '', '', 'MMDA Colony Chennai 600095'),
(95, 2, 'recproduct', 2, '', 18, 'placed order', 9778, 'Cash on Delivery', '24-08-2016,12:10pm', '', '', 'MMDA Colony Chennai 600095'),
(96, 3, 'offrproduct', 1, '', 18, 'placed order', 1111, 'Cash on Delivery', '24-08-2016,12:13pm', '', '', 'MMDA Colony Chennai 600095'),
(97, 2, 'fproduct', 2, '', 18, 'placed order', 220, 'Cash on Delivery', '24-08-2016,12:53pm', '', '', 'MMDA Colony Chennai 600095'),
(98, 2, 'recproduct', 1, '', 18, 'placed order', 4889, 'Cash on Delivery', '25-08-2016,09:18am', '', '', 'MMDA Colony Chennai 600095'),
(99, 8, 'slides', 1, '', 18, 'placed order', 1500, 'Cash on Delivery', '25-08-2016,10:53am', '', '', 'MMDA Colony Chennai 600095'),
(100, 7, 'offrproduct', 1, '', 18, 'placed order', 90000, 'Cash on Delivery', '25-08-2016,11:54am', '', '', 'MMDA Colony Chennai 600095'),
(101, 1, 'fproduct', 1, '', 18, 'placed order', 1211, 'Cash on Delivery', '26-08-2016,11:50am', '', '', 'MMDA Colony Chennai 600095'),
(102, 9, 'fproduct', 1, '', 1, 'placed order', 1067, 'Cash on Delivery', '31-08-2016,06:59am', '', '', 'test test 600095'),
(103, 10, 'slides', 1, '', 1, 'placed order', 0, 'Cash on Delivery', '31-08-2016,07:03am', '', '', 'test test 600095'),
(104, 1, 'slides', 1, '', 1, 'placed order', 500, 'Cash on Delivery', '31-08-2016,07:04am', '', '', 'test test 600095'),
(105, 10, 'slides', 1, '', 1, 'placed order', 0, 'Cash on Delivery', '31-08-2016,01:36pm', '', '', 'test test 600095'),
(106, 6, 'offrproduct', 1, 'm', 1, 'placed order', 31, 'Cash on Delivery', '31-08-2016,01:53pm', '', '', 'test test 600095'),
(107, 9, 'fproduct', 1, 'xl', 1, 'placed order', 1067, 'Cash on Delivery', '01-09-2016,07:15am', '', '', 'test test 600095'),
(108, 6, 'offrproduct', 1, 'xxl', 1, 'placed order', 31, 'Cash on Delivery', '01-09-2016,09:32am', '', '', 'test test 600095'),
(109, 6, 'offrproduct', 1, 'xxl', 1, 'placed order', 31, 'Cash on Delivery', '01-09-2016,09:38am', '', '', 'test test 600095'),
(110, 6, 'offrproduct', 1, 'xxl', 1, 'placed order', 31, 'Cash on Delivery', '01-09-2016,09:41am', '', '', 'test test 600095'),
(111, 6, 'offrproduct', 1, 'xxl', 1, 'placed order', 31, 'Cash on Delivery', '01-09-2016,09:41am', '', '', 'test test 600095'),
(112, 6, 'offrproduct', 1, 'xxl', 1, 'placed order', 31, 'Cash on Delivery', '01-09-2016,09:42am', '', '', 'test test 600095'),
(113, 6, 'offrproduct', 1, 'xxl', 1, 'placed order', 31, 'Cash on Delivery', '01-09-2016,09:47am', '', '', 'test test 600095'),
(114, 6, 'offrproduct', 1, 'xxl', 1, 'placed order', 31, 'Cash on Delivery', '01-09-2016,09:48am', '', '', 'test test 600095'),
(115, 6, 'offrproduct', 1, 'xxl', 1, 'placed order', 31, 'Cash on Delivery', '01-09-2016,09:49am', '', '', 'test test 600095'),
(116, 6, 'offrproduct', 1, 'xxl', 1, 'placed order', 31, 'Cash on Delivery', '01-09-2016,09:49am', '', '', 'test test 600095'),
(117, 6, 'offrproduct', 1, 'xxl', 1, 'placed order', 31, 'Cash on Delivery', '01-09-2016,09:49am', '', '', 'test test 600095'),
(118, 6, 'offrproduct', 1, 'xxl', 1, 'placed order', 31, 'Cash on Delivery', '01-09-2016,09:50am', '', '', 'test test 600095'),
(119, 6, 'offrproduct', 1, 'xxl', 1, 'placed order', 31, 'Cash on Delivery', '01-09-2016,09:51am', '', '', 'test test 600095'),
(120, 6, 'offrproduct', 1, 'xxl', 1, 'placed order', 31, 'Cash on Delivery', '01-09-2016,09:52am', '', '', 'test test 600095'),
(121, 6, 'offrproduct', 1, 'xxl', 1, 'placed order', 31, 'Cash on Delivery', '01-09-2016,09:52am', '', '', 'test test 600095'),
(122, 6, 'offrproduct', 1, 'xxl', 1, 'placed order', 31, 'Cash on Delivery', '01-09-2016,09:53am', '', '', 'test test 600095'),
(123, 6, 'offrproduct', 1, 'xxl', 1, 'placed order', 31, 'Cash on Delivery', '01-09-2016,09:53am', '', '', 'test test 600095'),
(124, 10, 'slides', 1, 'm', 1, 'placed order', 0, 'Cash on Delivery', '01-09-2016,09:54am', '', '', 'test test 600095'),
(125, 8, 'slides', 2, 'l', 1, 'placed order', 3000, 'Cash on Delivery', '01-09-2016,09:55am', '', '', 'test test 600095'),
(126, 8, 'slides', 2, 'l', 1, 'placed order', 3000, 'Cash on Delivery', '01-09-2016,09:56am', '', '', 'test test 600095'),
(127, 8, 'slides', 2, 'l', 1, 'placed order', 3000, 'Cash on Delivery', '01-09-2016,09:56am', '', '', 'test test 600095'),
(128, 8, 'slides', 2, 'l', 1, 'placed order', 3000, 'Cash on Delivery', '01-09-2016,09:57am', '', '', 'test test 600095'),
(129, 8, 'slides', 2, 'l', 1, 'placed order', 3000, 'Cash on Delivery', '01-09-2016,10:15am', '', '', 'test test 600095'),
(131, 8, 'recproduct', 1, 'Select Size', 1, 'placed order', 70909, 'Cash on Delivery', '02-09-2016,08:45am', '', '', 'test test 600095'),
(132, 8, 'recproduct', 1, 'm', 1, 'placed order', 70909, 'Cash on Delivery', '02-09-2016,08:45am', '', '', 'test test 600095'),
(133, 2, 'fproduct', 1, 'Select Size', 1, 'placed order', 110, 'Cash on Delivery', '02-09-2016,09:39am', '', '', 'test test 600095'),
(134, 2, 'fproduct', 1, 'Select Size', 1, 'placed order', 110, 'Cash on Delivery', '02-09-2016,09:55am', '', '', 'test test 600095');

-- --------------------------------------------------------

--
-- Table structure for table `promodata`
--

CREATE TABLE `promodata` (
  `id` int(250) NOT NULL,
  `promoid` varchar(2000) NOT NULL,
  `offers` int(200) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promodata`
--

INSERT INTO `promodata` (`id`, `promoid`, `offers`, `status`) VALUES
(1, 'naga123', 50, 'not valid'),
(2, 'naga231', 10, 'not valid');

-- --------------------------------------------------------

--
-- Table structure for table `promousers`
--

CREATE TABLE `promousers` (
  `id` int(250) NOT NULL,
  `promoid` varchar(1000) NOT NULL,
  `cust_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promousers`
--

INSERT INTO `promousers` (`id`, `promoid`, `cust_id`) VALUES
(1, 'naga123', 1),
(2, 'naga231', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recproduct`
--

CREATE TABLE `recproduct` (
  `itemid` int(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` int(250) NOT NULL,
  `offers` int(100) NOT NULL,
  `delamnt` int(100) NOT NULL,
  `color` int(200) NOT NULL,
  `size` int(200) NOT NULL,
  `available` int(100) NOT NULL,
  `storeid` int(11) NOT NULL,
  `storename` varchar(11) NOT NULL,
  `type` varchar(11) NOT NULL,
  `details` varchar(10000) NOT NULL,
  `brand` int(110) NOT NULL,
  `cust_type` varchar(1000) NOT NULL,
  `cname` varchar(1000) NOT NULL,
  `subcat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recproduct`
--

INSERT INTO `recproduct` (`itemid`, `image`, `name`, `price`, `offers`, `delamnt`, `color`, `size`, `available`, `storeid`, `storename`, `type`, `details`, `brand`, `cust_type`, `cname`, `subcat`) VALUES
(1, 'photos/51HojQuunnL._AC_UL260_SR200,260_.jpg', 'Shoue', 1234, 10, 0, 1, 1, 12, 1, 'allen solly', 'men', '', 1, '', '', ''),
(2, 'photos/61EHrm0yVVL._UL1500_.jpg', 'mobile', 5432, 10, 0, 2, 2, 12, 2, 'allen solly', 'women', '', 1, '', '', ''),
(3, 'photos/41jFbXdqy1L._AC_UL260_SR200,260_.jpg', 'car', 5432, 10, 0, 3, 3, 34, 2, 'allen solly', 'kid', '', 2, '', '', ''),
(4, 'photos/41KqCYda7qL._UX466_.jpg', 'watch', 2344, 10, 0, 4, 4, 21, 3, 'allen solly', 'women', '', 2, '', '', ''),
(5, 'photos/41q5rGyb6-L.jpg', 'car', 2344, 10, 0, 5, 5, 34, 4, 'allen solly', 'men', '', 3, '', '', ''),
(6, 'photos/41s4myPLysL._UX425_.jpg', 'watch', 23444, 10, 0, 6, 6, 23, 5, 'allen solly', 'women', '', 4, '', '', ''),
(7, 'photos/61HPXYwVJcL._UL1500_.jpg', 'shirt', 7000, 10, 0, 7, 7, 11, 6, 'ARIHANT', 'kid', '', 5, '', '', ''),
(8, 'photos/71ndlj8oxrL._UL1500_.jpg', 'pant', 78788, 10, 0, 8, 8, 989, 5, 'SOCH', 'women', '', 6, '', '', ''),
(9, 'uploads/03_640x478_05.jpg', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 'Choose customer type', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `size` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `size`) VALUES
(1, 's'),
(3, 'm'),
(4, 'l'),
(5, 'xl'),
(6, 'xxl');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `itemid` int(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(250) NOT NULL,
  `color` int(100) NOT NULL,
  `size` int(100) NOT NULL,
  `brand` int(100) NOT NULL,
  `available` int(250) NOT NULL,
  `storeid` int(100) NOT NULL,
  `storename` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `details` varchar(10000) NOT NULL,
  `offers` int(100) NOT NULL,
  `delamnt` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`itemid`, `image`, `name`, `price`, `color`, `size`, `brand`, `available`, `storeid`, `storename`, `type`, `details`, `offers`, `delamnt`) VALUES
(1, 'photos/prodimg.jpg', 'mobile', 1000, 1, 1, 1, 0, 1, 'LOUIS PHILIPPE', 'all', 'nice mobile', 50, 0),
(2, 'photos/prodimg.jpg', 'mobile', 1000, 1, 2, 2, 0, 2, 'ARIHANT', 'all', 'trsansparent', 65, 0),
(3, 'photos/', '', 0, 2, 3, 2, 0, 0, 'allen solly', '', '', 65, 0),
(4, 'photos/', '', 0, 3, 4, 3, 0, 0, 'allen solly', '', '', 65, 0),
(5, 'photos/', '', 0, 3, 5, 4, 0, 0, 'allen solly', '', '', 65, 0),
(6, 'photos/joomla_black.png', 'joomla', 4000, 4, 1, 5, 0, 3, 'NAVIGATOR', 'all', 'best e-comm web hosting', 35, 0),
(7, 'photos/joomla_black.png', '', 0, 5, 2, 3, 0, 0, 'allen solly', '', '', 65, 0),
(8, 'photos/osmbanner2.png', 'oscommerce', 3000, 6, 3, 2, 0, 4, 'apache', 'all', 'best e-comm web hosting', 50, 0),
(9, 'photos/BARGAIN (1).jpg', '', 0, 0, 0, 0, 0, 0, '', '', '', 56, 0),
(10, 'photos/DISCOVER THE FASHION.jpg', '', 0, 0, 0, 0, 0, 0, '', '', '', 23, 0),
(11, 'photos/', '', 0, 0, 0, 0, 0, 0, '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(11) NOT NULL,
  `strid` int(255) NOT NULL,
  `strname` varchar(1100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `mail` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `straddr` varchar(1100) NOT NULL,
  `lat` varchar(250) NOT NULL,
  `lang` varchar(250) NOT NULL,
  `ownername` varchar(9600) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `strid`, `strname`, `status`, `mail`, `password`, `straddr`, `lat`, `lang`, `ownername`, `description`) VALUES
(1, 1, 'Allen Solly', 'offline', 'sathya@gmail.com', 'sathya', 'shop #102 First Floor,Ampa Skywalk,Aminjikarai ,chennai- 6000029', '13.0735155', '80.219146', 'allen solly', 'is one of the best branded store in chennai. They offer various men,women,kids fashion and apperals.'),
(2, 2, 'LOUIS PHILIPPE', '', '', '', 'shop #25,Ampa Skywalk,Aminjikarai ,chennai- 6000029', '13.0735155', '80.219146', 'allen solly', 'is one of the best branded store in chennai. They offer various men,women,kids fashion and apperals.'),
(3, 3, 'ARIHANT', '', '', '', 'NO 18 CEMETRY ROAD ,WANNARPET,chennai- 6000021', '13.0753014', '80.282823', 'ARIHANT', 'is one of the best branded store in chennai. They offer various men,women,kids fashion and apperals.'),
(4, 4, 'NAVIGATOR', '', '', '', 'SHOP #NO 101 CEMETRY ROAD AMINJIKARAI,CHENNAI- 6000029', '13.0735155', '80.219146', 'NAVIGATOR', 'is one of the best branded store in chennai. They offer various men,women,kids fashion and apperals.'),
(5, 5, 'ADIDAS', '', '', '', 'SHOP #NO 1 CEMETRY ROAD AMINJIKARAI,CHENNAI- 6000029', '13.0735155', '80.219146', 'ADIDAS', 'is one of the best branded store in chennai. They offer various men,women,kids fashion and apperals.'),
(6, 6, 'SOCH', '', '', '', 'SHOP #NO 230 CEMETRY ROAD AMINJIKARAI,CHENNAI- 6000029', '13.0735155', '80.219146', 'SOCH', 'is one of the best branded store in chennai. They offer various men,women,kids fashion and apperals.'),
(7, 7, 'MARKS & SPENCER', '', '', '', 'SHOP #NO 23 CEMETRY ROAD AMINJIKARAI,CHENNAI- 6000029', '13.0735155', '80.219146', 'BASKAR.B', 'is one of the best branded store in chennai. They offer various men,women,kids fashion and apperals.');

-- --------------------------------------------------------

--
-- Table structure for table `subscribtion`
--

CREATE TABLE `subscribtion` (
  `id` int(100) NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribtion`
--

INSERT INTO `subscribtion` (`id`, `mail`) VALUES
(8, ''),
(7, 'hello@shopwalkin.com'),
(11, 'jhasuman36@gmail.com'),
(2, 'lamphaxer@yahoo.com'),
(3, 'lamphaxer@yahoo.com1'),
(4, 'nagaraj@shopwalkin.com'),
(6, 'sf'),
(1, 'shakthipav@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brands`
--

CREATE TABLE `tbl_brands` (
  `id` int(11) NOT NULL,
  `brand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brands`
--

INSERT INTO `tbl_brands` (`id`, `brand`) VALUES
(1, 'Adidas'),
(2, 'Nike'),
(3, 'Puma'),
(4, 'Reebok'),
(5, 'Peter England'),
(6, 'Duke');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `email`, `mobile`, `password`, `address`, `status`) VALUES
(1, 'tester', 'test@testing.com', 123456789, 'test', 'test test 600095', 'online'),
(9, 'Suman Kumars', 'suman@shopwalkin.com', 0, 'shopwalkin.com', 'shopwalkin street shopwalkin 323434', ''),
(10, '<SCRIPT>alert("hellor");</script>', '', 0, 'hack', '', ''),
(11, 'nagarajtest', 'shakthipav@gmail.comm', 2147483647, '', '', ''),
(13, 'priyansathya', 'priya@gmail.com', 2147483647, 'sathya.com', '', ''),
(17, 'sathyaas', 'root@fa.com', 0, 'sathya', '', ''),
(18, 'SumanJha', 'jhasuman36@gmail.com', 2147483647, 'ganeshjha', 'MMDA Colony Chennai 600095', 'online');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(100) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date` varchar(1001) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `date`) VALUES
(1, '12', ''),
(2, '::1', '30-08-2016,10:50am'),
(3, '::1', '30-08-2016,11:08am'),
(4, '::1', '30-08-2016,11:08am'),
(5, '::1', '30-08-2016,11:08am'),
(6, '::1', '30-08-2016,11:08am'),
(7, '::1', '30-08-2016,11:10am'),
(8, '::1', '30-08-2016,11:14am'),
(9, '172.168.5.11', '30-08-2016,11:44am'),
(10, '::1', '30-08-2016,11:50am'),
(11, '::1', '30-08-2016,11:51am'),
(12, '::1', '30-08-2016,12:06pm'),
(13, '::1', '30-08-2016,12:06pm'),
(14, '::1', '30-08-2016,12:06pm'),
(15, '::1', '30-08-2016,12:10pm'),
(16, '::1', '30-08-2016,01:03pm'),
(17, '::1', '31-08-2016,06:56am'),
(18, '::1', '31-08-2016,06:57am'),
(19, '::1', '31-08-2016,06:57am'),
(20, '::1', '31-08-2016,06:58am'),
(21, '::1', '31-08-2016,06:58am'),
(22, '::1', '31-08-2016,06:58am'),
(23, '::1', '31-08-2016,06:59am'),
(24, '::1', '31-08-2016,06:59am'),
(25, '::1', '31-08-2016,06:59am'),
(26, '::1', '31-08-2016,06:59am'),
(27, '::1', '31-08-2016,07:00am'),
(28, '::1', '31-08-2016,07:00am'),
(29, '::1', '31-08-2016,07:00am'),
(30, '::1', '31-08-2016,07:00am'),
(31, '::1', '31-08-2016,07:01am'),
(32, '::1', '31-08-2016,07:01am'),
(33, '::1', '31-08-2016,07:01am'),
(34, '::1', '31-08-2016,07:01am'),
(35, '::1', '31-08-2016,07:02am'),
(36, '::1', '31-08-2016,07:02am'),
(37, '::1', '31-08-2016,07:02am'),
(38, '::1', '31-08-2016,07:03am'),
(39, '::1', '31-08-2016,07:03am'),
(40, '::1', '31-08-2016,07:03am'),
(41, '::1', '31-08-2016,07:03am'),
(42, '::1', '31-08-2016,07:04am'),
(43, '::1', '31-08-2016,07:07am'),
(44, '::1', '31-08-2016,07:09am'),
(45, '::1', '31-08-2016,07:38am'),
(46, '::1', '31-08-2016,07:41am'),
(47, '::1', '31-08-2016,08:22am'),
(48, '::1', '31-08-2016,09:14am'),
(49, '::1', '31-08-2016,09:20am'),
(50, '::1', '31-08-2016,09:20am'),
(51, '::1', '31-08-2016,09:21am'),
(52, '::1', '31-08-2016,09:23am'),
(53, '::1', '31-08-2016,09:24am'),
(54, '::1', '31-08-2016,09:26am'),
(55, '::1', '31-08-2016,09:27am'),
(56, '::1', '31-08-2016,09:28am'),
(57, '::1', '31-08-2016,09:29am'),
(58, '::1', '31-08-2016,09:29am'),
(59, '::1', '31-08-2016,09:29am'),
(60, '::1', '31-08-2016,09:33am'),
(61, '::1', '31-08-2016,09:33am'),
(62, '::1', '31-08-2016,09:33am'),
(63, '::1', '31-08-2016,09:33am'),
(64, '::1', '31-08-2016,09:33am'),
(65, '::1', '31-08-2016,09:34am'),
(66, '::1', '31-08-2016,09:34am'),
(67, '::1', '31-08-2016,09:35am'),
(68, '::1', '31-08-2016,09:35am'),
(69, '::1', '31-08-2016,09:36am'),
(70, '::1', '31-08-2016,09:36am'),
(71, '::1', '31-08-2016,09:37am'),
(72, '::1', '31-08-2016,09:37am'),
(73, '::1', '31-08-2016,09:37am'),
(74, '::1', '31-08-2016,09:38am'),
(75, '::1', '31-08-2016,09:38am'),
(76, '::1', '31-08-2016,09:38am'),
(77, '::1', '31-08-2016,09:38am'),
(78, '::1', '31-08-2016,09:39am'),
(79, '::1', '31-08-2016,09:40am'),
(80, '::1', '31-08-2016,09:40am'),
(81, '::1', '31-08-2016,09:40am'),
(82, '::1', '31-08-2016,09:40am'),
(83, '::1', '31-08-2016,09:40am'),
(84, '::1', '31-08-2016,09:40am'),
(85, '::1', '31-08-2016,09:42am'),
(86, '::1', '31-08-2016,09:42am'),
(87, '::1', '31-08-2016,09:42am'),
(88, '::1', '31-08-2016,09:42am'),
(89, '::1', '31-08-2016,09:42am'),
(90, '::1', '31-08-2016,09:42am'),
(91, '::1', '31-08-2016,09:44am'),
(92, '::1', '31-08-2016,09:45am'),
(93, '::1', '31-08-2016,09:47am'),
(94, '::1', '31-08-2016,09:47am'),
(95, '::1', '31-08-2016,09:47am'),
(96, '::1', '31-08-2016,09:48am'),
(97, '::1', '31-08-2016,09:49am'),
(98, '::1', '31-08-2016,09:50am'),
(99, '::1', '31-08-2016,09:51am'),
(100, '::1', '31-08-2016,09:52am'),
(101, '::1', '31-08-2016,09:52am'),
(102, '::1', '31-08-2016,09:52am'),
(103, '::1', '31-08-2016,09:53am'),
(104, '::1', '31-08-2016,09:53am'),
(105, '::1', '31-08-2016,09:53am'),
(106, '::1', '31-08-2016,09:54am'),
(107, '::1', '31-08-2016,09:56am'),
(108, '::1', '31-08-2016,09:57am'),
(109, '::1', '31-08-2016,09:58am'),
(110, '::1', '31-08-2016,09:58am'),
(111, '::1', '31-08-2016,09:58am'),
(112, '::1', '31-08-2016,09:59am'),
(113, '::1', '31-08-2016,09:59am'),
(114, '::1', '31-08-2016,10:00am'),
(115, '::1', '31-08-2016,10:00am'),
(116, '::1', '31-08-2016,10:00am'),
(117, '::1', '31-08-2016,10:00am'),
(118, '::1', '31-08-2016,10:00am'),
(119, '::1', '31-08-2016,10:02am'),
(120, '::1', '31-08-2016,10:02am'),
(121, '::1', '31-08-2016,10:21am'),
(122, '::1', '31-08-2016,10:21am'),
(123, '::1', '31-08-2016,10:21am'),
(124, '::1', '31-08-2016,10:21am'),
(125, '::1', '31-08-2016,10:22am'),
(126, '::1', '31-08-2016,10:22am'),
(127, '::1', '31-08-2016,10:27am'),
(128, '::1', '31-08-2016,10:27am'),
(129, '::1', '31-08-2016,10:27am'),
(130, '::1', '31-08-2016,10:27am'),
(131, '::1', '31-08-2016,10:33am'),
(132, '::1', '31-08-2016,10:33am'),
(133, '::1', '31-08-2016,10:33am'),
(134, '::1', '31-08-2016,10:33am'),
(135, '::1', '31-08-2016,10:34am'),
(136, '::1', '31-08-2016,10:34am'),
(137, '::1', '31-08-2016,10:34am'),
(138, '::1', '31-08-2016,10:35am'),
(139, '::1', '31-08-2016,10:35am'),
(140, '::1', '31-08-2016,10:35am'),
(141, '::1', '31-08-2016,10:35am'),
(142, '::1', '31-08-2016,10:35am'),
(143, '::1', '31-08-2016,10:35am'),
(144, '::1', '31-08-2016,10:36am'),
(145, '::1', '31-08-2016,10:36am'),
(146, '::1', '31-08-2016,10:36am'),
(147, '::1', '31-08-2016,10:36am'),
(148, '::1', '31-08-2016,10:36am'),
(149, '::1', '31-08-2016,10:37am'),
(150, '::1', '31-08-2016,10:37am'),
(151, '::1', '31-08-2016,10:37am'),
(152, '::1', '31-08-2016,10:42am'),
(153, '::1', '31-08-2016,10:43am'),
(154, '::1', '31-08-2016,10:47am'),
(155, '::1', '31-08-2016,10:47am'),
(156, '::1', '31-08-2016,10:48am'),
(157, '::1', '31-08-2016,10:48am'),
(158, '::1', '31-08-2016,10:48am'),
(159, '::1', '31-08-2016,10:49am'),
(160, '::1', '31-08-2016,10:50am'),
(161, '::1', '31-08-2016,10:52am'),
(162, '::1', '31-08-2016,10:53am'),
(163, '::1', '31-08-2016,10:53am'),
(164, '::1', '31-08-2016,10:54am'),
(165, '::1', '31-08-2016,10:55am'),
(166, '::1', '31-08-2016,10:56am'),
(167, '::1', '31-08-2016,10:56am'),
(168, '::1', '31-08-2016,10:58am'),
(169, '::1', '31-08-2016,11:01am'),
(170, '::1', '31-08-2016,11:02am'),
(171, '::1', '31-08-2016,11:02am'),
(172, '::1', '31-08-2016,11:02am'),
(173, '::1', '31-08-2016,11:02am'),
(174, '::1', '31-08-2016,11:03am'),
(175, '::1', '31-08-2016,11:03am'),
(176, '::1', '31-08-2016,11:03am'),
(177, '::1', '31-08-2016,11:03am'),
(178, '::1', '31-08-2016,11:05am'),
(179, '::1', '31-08-2016,11:09am'),
(180, '::1', '31-08-2016,11:10am'),
(181, '::1', '31-08-2016,11:13am'),
(182, '::1', '31-08-2016,11:14am'),
(183, '::1', '31-08-2016,11:15am'),
(184, '::1', '31-08-2016,11:15am'),
(185, '::1', '31-08-2016,11:17am'),
(186, '::1', '31-08-2016,11:17am'),
(187, '::1', '31-08-2016,11:17am'),
(188, '::1', '31-08-2016,11:18am'),
(189, '::1', '31-08-2016,11:18am'),
(190, '::1', '31-08-2016,11:20am'),
(191, '::1', '31-08-2016,11:21am'),
(192, '::1', '31-08-2016,11:21am'),
(193, '::1', '31-08-2016,11:21am'),
(194, '::1', '31-08-2016,11:21am'),
(195, '::1', '31-08-2016,11:22am'),
(196, '::1', '31-08-2016,11:22am'),
(197, '::1', '31-08-2016,11:22am'),
(198, '::1', '31-08-2016,11:22am'),
(199, '::1', '31-08-2016,11:23am'),
(200, '::1', '31-08-2016,11:23am'),
(201, '::1', '31-08-2016,11:23am'),
(202, '::1', '31-08-2016,11:24am'),
(203, '::1', '31-08-2016,11:24am'),
(204, '::1', '31-08-2016,11:29am'),
(205, '::1', '31-08-2016,11:29am'),
(206, '::1', '31-08-2016,11:30am'),
(207, '::1', '31-08-2016,11:31am'),
(208, '::1', '31-08-2016,11:31am'),
(209, '::1', '31-08-2016,11:33am'),
(210, '::1', '31-08-2016,11:35am'),
(211, '::1', '31-08-2016,11:35am'),
(212, '::1', '31-08-2016,11:36am'),
(213, '::1', '31-08-2016,11:37am'),
(214, '::1', '31-08-2016,11:39am'),
(215, '::1', '31-08-2016,11:40am'),
(216, '::1', '31-08-2016,11:41am'),
(217, '::1', '31-08-2016,11:41am'),
(218, '::1', '31-08-2016,11:41am'),
(219, '::1', '31-08-2016,11:43am'),
(220, '::1', '31-08-2016,11:46am'),
(221, '::1', '31-08-2016,11:48am'),
(222, '::1', '31-08-2016,11:48am'),
(223, '::1', '31-08-2016,11:59am'),
(224, '::1', '31-08-2016,11:59am'),
(225, '::1', '31-08-2016,12:00pm'),
(226, '::1', '31-08-2016,12:00pm'),
(227, '::1', '31-08-2016,12:00pm'),
(228, '::1', '31-08-2016,12:01pm'),
(229, '::1', '31-08-2016,12:01pm'),
(230, '::1', '31-08-2016,12:01pm'),
(231, '::1', '31-08-2016,12:01pm'),
(232, '::1', '31-08-2016,12:01pm'),
(233, '::1', '31-08-2016,12:02pm'),
(234, '::1', '31-08-2016,12:02pm'),
(235, '::1', '31-08-2016,12:02pm'),
(236, '::1', '31-08-2016,12:02pm'),
(237, '::1', '31-08-2016,12:03pm'),
(238, '::1', '31-08-2016,12:09pm'),
(239, '::1', '31-08-2016,12:09pm'),
(240, '::1', '31-08-2016,12:10pm'),
(241, '::1', '31-08-2016,12:11pm'),
(242, '::1', '31-08-2016,12:11pm'),
(243, '::1', '31-08-2016,12:11pm'),
(244, '::1', '31-08-2016,12:12pm'),
(245, '::1', '31-08-2016,12:12pm'),
(246, '::1', '31-08-2016,12:12pm'),
(247, '::1', '31-08-2016,12:15pm'),
(248, '::1', '31-08-2016,12:15pm'),
(249, '::1', '31-08-2016,12:15pm'),
(250, '::1', '31-08-2016,12:15pm'),
(251, '::1', '31-08-2016,12:15pm'),
(252, '::1', '31-08-2016,12:15pm'),
(253, '::1', '31-08-2016,12:16pm'),
(254, '::1', '31-08-2016,12:16pm'),
(255, '::1', '31-08-2016,12:17pm'),
(256, '::1', '31-08-2016,12:17pm'),
(257, '::1', '31-08-2016,12:24pm'),
(258, '::1', '31-08-2016,12:24pm'),
(259, '::1', '31-08-2016,12:24pm'),
(260, '::1', '31-08-2016,12:26pm'),
(261, '::1', '31-08-2016,12:26pm'),
(262, '::1', '31-08-2016,12:26pm'),
(263, '::1', '31-08-2016,12:26pm'),
(264, '::1', '31-08-2016,12:27pm'),
(265, '::1', '31-08-2016,12:27pm'),
(266, '::1', '31-08-2016,12:38pm'),
(267, '::1', '31-08-2016,12:39pm'),
(268, '::1', '31-08-2016,12:39pm'),
(269, '::1', '31-08-2016,12:40pm'),
(270, '::1', '31-08-2016,12:40pm'),
(271, '::1', '31-08-2016,12:42pm'),
(272, '::1', '31-08-2016,12:43pm'),
(273, '::1', '31-08-2016,12:44pm'),
(274, '::1', '31-08-2016,12:44pm'),
(275, '::1', '31-08-2016,12:47pm'),
(276, '::1', '31-08-2016,12:47pm'),
(277, '::1', '31-08-2016,12:48pm'),
(278, '::1', '31-08-2016,12:48pm'),
(279, '::1', '31-08-2016,12:49pm'),
(280, '::1', '31-08-2016,12:49pm'),
(281, '::1', '31-08-2016,12:49pm'),
(282, '::1', '31-08-2016,12:49pm'),
(283, '::1', '31-08-2016,12:49pm'),
(284, '::1', '31-08-2016,12:49pm'),
(285, '::1', '31-08-2016,12:56pm'),
(286, '::1', '31-08-2016,01:03pm'),
(287, '::1', '31-08-2016,01:04pm'),
(288, '::1', '31-08-2016,01:04pm'),
(289, '::1', '31-08-2016,01:04pm'),
(290, '::1', '31-08-2016,01:04pm'),
(291, '::1', '31-08-2016,01:04pm'),
(292, '::1', '31-08-2016,01:05pm'),
(293, '::1', '31-08-2016,01:05pm'),
(294, '::1', '31-08-2016,01:06pm'),
(295, '::1', '31-08-2016,01:09pm'),
(296, '::1', '31-08-2016,01:09pm'),
(297, '::1', '31-08-2016,01:11pm'),
(298, '::1', '31-08-2016,01:11pm'),
(299, '::1', '31-08-2016,01:11pm'),
(300, '::1', '31-08-2016,01:12pm'),
(301, '::1', '31-08-2016,01:13pm'),
(302, '::1', '31-08-2016,01:13pm'),
(303, '::1', '31-08-2016,01:14pm'),
(304, '::1', '31-08-2016,01:14pm'),
(305, '::1', '31-08-2016,01:17pm'),
(306, '::1', '31-08-2016,01:17pm'),
(307, '::1', '31-08-2016,01:17pm'),
(308, '::1', '31-08-2016,01:19pm'),
(309, '::1', '31-08-2016,01:19pm'),
(310, '::1', '31-08-2016,01:21pm'),
(311, '::1', '31-08-2016,01:21pm'),
(312, '::1', '31-08-2016,01:22pm'),
(313, '::1', '31-08-2016,01:22pm'),
(314, '::1', '31-08-2016,01:22pm'),
(315, '::1', '31-08-2016,01:23pm'),
(316, '::1', '31-08-2016,01:23pm'),
(317, '::1', '31-08-2016,01:23pm'),
(318, '::1', '31-08-2016,01:24pm'),
(319, '::1', '31-08-2016,01:25pm'),
(320, '::1', '31-08-2016,01:25pm'),
(321, '::1', '31-08-2016,01:26pm'),
(322, '::1', '31-08-2016,01:27pm'),
(323, '::1', '31-08-2016,01:27pm'),
(324, '::1', '31-08-2016,01:29pm'),
(325, '::1', '31-08-2016,01:29pm'),
(326, '::1', '31-08-2016,01:29pm'),
(327, '::1', '31-08-2016,01:30pm'),
(328, '::1', '31-08-2016,01:31pm'),
(329, '::1', '31-08-2016,01:31pm'),
(330, '::1', '31-08-2016,01:32pm'),
(331, '::1', '31-08-2016,01:32pm'),
(332, '::1', '31-08-2016,01:32pm'),
(333, '::1', '31-08-2016,01:35pm'),
(334, '::1', '31-08-2016,01:35pm'),
(335, '::1', '31-08-2016,01:35pm'),
(336, '::1', '31-08-2016,01:35pm'),
(337, '::1', '31-08-2016,01:36pm'),
(338, '::1', '31-08-2016,01:37pm'),
(339, '::1', '31-08-2016,01:38pm'),
(340, '::1', '31-08-2016,01:38pm'),
(341, '::1', '31-08-2016,01:39pm'),
(342, '::1', '31-08-2016,01:39pm'),
(343, '::1', '31-08-2016,01:40pm'),
(344, '::1', '31-08-2016,01:43pm'),
(345, '::1', '31-08-2016,01:43pm'),
(346, '::1', '31-08-2016,01:43pm'),
(347, '::1', '31-08-2016,01:47pm'),
(348, '::1', '31-08-2016,01:53pm'),
(349, '::1', '31-08-2016,02:05pm'),
(350, '::1', '31-08-2016,02:05pm'),
(351, '127.0.0.1', '01-09-2016,06:26am'),
(352, '127.0.0.1', '01-09-2016,06:27am'),
(353, '127.0.0.1', '01-09-2016,06:30am'),
(354, '::1', '01-09-2016,07:11am'),
(355, '::1', '01-09-2016,07:12am'),
(356, '::1', '01-09-2016,07:12am'),
(357, '::1', '01-09-2016,07:13am'),
(358, '::1', '01-09-2016,07:13am'),
(359, '::1', '01-09-2016,07:13am'),
(360, '::1', '01-09-2016,07:13am'),
(361, '::1', '01-09-2016,07:14am'),
(362, '::1', '01-09-2016,07:14am'),
(363, '::1', '01-09-2016,07:16am'),
(364, '::1', '01-09-2016,07:17am'),
(365, '::1', '01-09-2016,07:22am'),
(366, '::1', '01-09-2016,07:24am'),
(367, '::1', '01-09-2016,07:24am'),
(368, '::1', '01-09-2016,07:31am'),
(369, '::1', '01-09-2016,07:32am'),
(370, '::1', '01-09-2016,07:33am'),
(371, '::1', '01-09-2016,07:34am'),
(372, '::1', '01-09-2016,07:36am'),
(373, '::1', '01-09-2016,08:01am'),
(374, '::1', '01-09-2016,08:01am'),
(375, '::1', '01-09-2016,08:05am'),
(376, '::1', '01-09-2016,08:06am'),
(377, '::1', '01-09-2016,08:09am'),
(378, '::1', '01-09-2016,08:29am'),
(379, '::1', '01-09-2016,08:30am'),
(380, '::1', '01-09-2016,08:30am'),
(381, '::1', '01-09-2016,08:31am'),
(382, '::1', '01-09-2016,08:36am'),
(383, '::1', '01-09-2016,08:36am'),
(384, '::1', '01-09-2016,08:49am'),
(385, '::1', '01-09-2016,08:49am'),
(386, '::1', '01-09-2016,08:49am'),
(387, '::1', '01-09-2016,08:50am'),
(388, '::1', '01-09-2016,08:50am'),
(389, '::1', '01-09-2016,09:10am'),
(390, '::1', '01-09-2016,09:18am'),
(391, '::1', '01-09-2016,09:22am'),
(392, '::1', '01-09-2016,09:25am'),
(393, '::1', '01-09-2016,09:25am'),
(394, '::1', '01-09-2016,09:25am'),
(395, '::1', '01-09-2016,09:31am'),
(396, '::1', '01-09-2016,09:31am'),
(397, '::1', '01-09-2016,09:53am'),
(398, '::1', '01-09-2016,09:54am'),
(399, '::1', '01-09-2016,09:54am'),
(400, '::1', '01-09-2016,09:54am'),
(401, '::1', '01-09-2016,09:54am'),
(402, '::1', '01-09-2016,09:54am'),
(403, '::1', '01-09-2016,09:55am'),
(404, '::1', '01-09-2016,09:55am'),
(405, '::1', '01-09-2016,10:19am'),
(406, '::1', '01-09-2016,10:25am'),
(407, '::1', '01-09-2016,10:26am'),
(408, '::1', '01-09-2016,10:26am'),
(409, '::1', '01-09-2016,10:59am'),
(410, '::1', '01-09-2016,12:38pm'),
(411, '::1', '01-09-2016,12:38pm'),
(412, '::1', '01-09-2016,12:39pm'),
(413, '::1', '01-09-2016,01:02pm'),
(414, '::1', '01-09-2016,01:04pm'),
(415, '::1', '01-09-2016,01:07pm'),
(416, '::1', '01-09-2016,01:08pm'),
(417, '::1', '01-09-2016,01:08pm'),
(418, '::1', '01-09-2016,01:08pm'),
(419, '::1', '01-09-2016,01:08pm'),
(420, '::1', '01-09-2016,01:08pm'),
(421, '::1', '01-09-2016,01:08pm'),
(422, '::1', '01-09-2016,01:08pm'),
(423, '::1', '01-09-2016,01:09pm'),
(424, '::1', '01-09-2016,01:09pm'),
(425, '::1', '01-09-2016,01:10pm'),
(426, '::1', '01-09-2016,01:10pm'),
(427, '::1', '01-09-2016,01:16pm'),
(428, '::1', '01-09-2016,01:16pm'),
(429, '::1', '01-09-2016,01:17pm'),
(430, '::1', '01-09-2016,01:17pm'),
(431, '::1', '01-09-2016,01:17pm'),
(432, '::1', '01-09-2016,01:19pm'),
(433, '::1', '01-09-2016,01:20pm'),
(434, '::1', '01-09-2016,01:20pm'),
(435, '::1', '01-09-2016,01:20pm'),
(436, '::1', '01-09-2016,01:21pm'),
(437, '::1', '01-09-2016,01:24pm'),
(438, '::1', '01-09-2016,01:24pm'),
(439, '::1', '01-09-2016,01:24pm'),
(440, '::1', '01-09-2016,01:24pm'),
(441, '::1', '01-09-2016,01:24pm'),
(442, '::1', '01-09-2016,01:33pm'),
(443, '::1', '01-09-2016,01:33pm'),
(444, '::1', '01-09-2016,01:36pm'),
(445, '::1', '01-09-2016,01:37pm'),
(446, '::1', '01-09-2016,01:38pm'),
(447, '::1', '01-09-2016,01:38pm'),
(448, '::1', '01-09-2016,01:40pm'),
(449, '::1', '01-09-2016,01:40pm'),
(450, '::1', '01-09-2016,01:40pm'),
(451, '::1', '01-09-2016,01:41pm'),
(452, '::1', '01-09-2016,01:42pm'),
(453, '::1', '01-09-2016,01:44pm'),
(454, '::1', '01-09-2016,01:44pm'),
(455, '::1', '01-09-2016,01:44pm'),
(456, '::1', '01-09-2016,01:45pm'),
(457, '::1', '01-09-2016,01:49pm'),
(458, '::1', '01-09-2016,01:49pm'),
(459, '::1', '01-09-2016,01:51pm'),
(460, '::1', '01-09-2016,01:51pm'),
(461, '::1', '01-09-2016,01:51pm'),
(462, '::1', '01-09-2016,01:55pm'),
(463, '::1', '02-09-2016,06:37am'),
(464, '::1', '02-09-2016,06:38am'),
(465, '::1', '02-09-2016,06:38am'),
(466, '::1', '02-09-2016,06:39am'),
(467, '::1', '02-09-2016,06:39am'),
(468, '::1', '02-09-2016,06:39am'),
(469, '::1', '02-09-2016,07:23am'),
(470, '::1', '02-09-2016,07:23am'),
(471, '::1', '02-09-2016,07:23am'),
(472, '::1', '02-09-2016,07:23am'),
(473, '::1', '02-09-2016,07:23am'),
(474, '::1', '02-09-2016,07:23am'),
(475, '::1', '02-09-2016,07:24am'),
(476, '::1', '02-09-2016,07:43am'),
(477, '::1', '02-09-2016,07:43am'),
(478, '::1', '02-09-2016,07:43am'),
(479, '::1', '02-09-2016,07:44am'),
(480, '::1', '02-09-2016,07:55am'),
(481, '::1', '02-09-2016,08:06am'),
(482, '::1', '02-09-2016,08:06am'),
(483, '::1', '02-09-2016,08:08am'),
(484, '::1', '02-09-2016,08:12am'),
(485, '::1', '02-09-2016,08:12am'),
(486, '::1', '02-09-2016,08:14am'),
(487, '::1', '02-09-2016,08:15am'),
(488, '::1', '02-09-2016,08:18am'),
(489, '::1', '02-09-2016,08:18am'),
(490, '::1', '02-09-2016,08:18am'),
(491, '::1', '02-09-2016,08:19am'),
(492, '::1', '02-09-2016,08:19am'),
(493, '::1', '02-09-2016,08:19am'),
(494, '::1', '02-09-2016,08:22am'),
(495, '::1', '02-09-2016,08:23am'),
(496, '::1', '02-09-2016,08:23am'),
(497, '::1', '02-09-2016,08:26am'),
(498, '::1', '02-09-2016,08:26am'),
(499, '::1', '02-09-2016,08:26am'),
(500, '::1', '02-09-2016,08:26am'),
(501, '::1', '02-09-2016,08:26am'),
(502, '::1', '02-09-2016,08:27am'),
(503, '::1', '02-09-2016,08:27am'),
(504, '::1', '02-09-2016,08:27am'),
(505, '::1', '02-09-2016,08:27am'),
(506, '::1', '02-09-2016,08:28am'),
(507, '::1', '02-09-2016,08:28am'),
(508, '::1', '02-09-2016,08:28am'),
(509, '::1', '02-09-2016,08:28am'),
(510, '::1', '02-09-2016,08:31am'),
(511, '::1', '02-09-2016,08:33am'),
(512, '::1', '02-09-2016,08:34am'),
(513, '::1', '02-09-2016,08:34am'),
(514, '::1', '02-09-2016,08:34am'),
(515, '::1', '02-09-2016,08:39am'),
(516, '::1', '02-09-2016,08:42am'),
(517, '::1', '02-09-2016,08:45am'),
(518, '::1', '02-09-2016,08:46am'),
(519, '::1', '02-09-2016,08:46am'),
(520, '::1', '02-09-2016,08:46am'),
(521, '::1', '02-09-2016,08:49am'),
(522, '::1', '02-09-2016,09:03am'),
(523, '::1', '02-09-2016,09:03am'),
(524, '::1', '02-09-2016,09:03am'),
(525, '::1', '02-09-2016,09:03am'),
(526, '::1', '02-09-2016,09:04am'),
(527, '::1', '02-09-2016,09:06am'),
(528, '::1', '02-09-2016,09:07am'),
(529, '::1', '02-09-2016,09:08am'),
(530, '::1', '02-09-2016,09:12am'),
(531, '::1', '02-09-2016,09:12am'),
(532, '::1', '02-09-2016,09:14am'),
(533, '::1', '02-09-2016,09:14am'),
(534, '::1', '02-09-2016,09:15am'),
(535, '::1', '02-09-2016,09:19am'),
(536, '::1', '02-09-2016,09:35am'),
(537, '::1', '02-09-2016,09:41am'),
(538, '::1', '02-09-2016,09:42am'),
(539, '::1', '02-09-2016,09:42am'),
(540, '::1', '02-09-2016,09:42am'),
(541, '::1', '02-09-2016,09:42am'),
(542, '::1', '02-09-2016,09:49am'),
(543, '::1', '02-09-2016,09:49am'),
(544, '::1', '02-09-2016,09:49am'),
(545, '::1', '02-09-2016,09:49am'),
(546, '::1', '02-09-2016,09:50am'),
(547, '::1', '02-09-2016,09:51am'),
(548, '::1', '02-09-2016,09:53am'),
(549, '::1', '02-09-2016,09:54am'),
(550, '::1', '02-09-2016,09:54am'),
(551, '::1', '02-09-2016,09:54am'),
(552, '::1', '02-09-2016,09:54am'),
(553, '::1', '02-09-2016,09:56am'),
(554, '::1', '02-09-2016,09:57am'),
(555, '::1', '02-09-2016,09:57am'),
(556, '::1', '02-09-2016,09:57am'),
(557, '::1', '02-09-2016,09:57am'),
(558, '::1', '02-09-2016,09:58am'),
(559, '::1', '02-09-2016,10:02am'),
(560, '::1', '02-09-2016,10:02am'),
(561, '::1', '02-09-2016,10:02am'),
(562, '::1', '02-09-2016,10:03am'),
(563, '::1', '02-09-2016,10:07am'),
(564, '::1', '02-09-2016,10:08am'),
(565, '::1', '02-09-2016,10:08am'),
(566, '::1', '02-09-2016,10:08am'),
(567, '::1', '02-09-2016,10:08am'),
(568, '::1', '02-09-2016,10:08am'),
(569, '::1', '02-09-2016,10:10am'),
(570, '::1', '02-09-2016,10:10am'),
(571, '::1', '02-09-2016,10:14am'),
(572, '::1', '02-09-2016,10:21am'),
(573, '::1', '02-09-2016,10:24am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usr_id` (`usr_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brandid`);

--
-- Indexes for table `cancelpro`
--
ALTER TABLE `cancelpro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `item` (`itemid`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`colorid`);

--
-- Indexes for table `creditholder`
--
ALTER TABLE `creditholder`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `cust_id` (`cust_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fproduct`
--
ALTER TABLE `fproduct`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `jackvisit`
--
ALTER TABLE `jackvisit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offrproduct`
--
ALTER TABLE `offrproduct`
  ADD UNIQUE KEY `itemid` (`itemid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promodata`
--
ALTER TABLE `promodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promousers`
--
ALTER TABLE `promousers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recproduct`
--
ALTER TABLE `recproduct`
  ADD UNIQUE KEY `itemid` (`itemid`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribtion`
--
ALTER TABLE `subscribtion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Indexes for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brandid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cancelpro`
--
ALTER TABLE `cancelpro`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;
--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `colorid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `creditholder`
--
ALTER TABLE `creditholder`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `fproduct`
--
ALTER TABLE `fproduct`
  MODIFY `itemid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `jackvisit`
--
ALTER TABLE `jackvisit`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `offrproduct`
--
ALTER TABLE `offrproduct`
  MODIFY `itemid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `promodata`
--
ALTER TABLE `promodata`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `promousers`
--
ALTER TABLE `promousers`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `recproduct`
--
ALTER TABLE `recproduct`
  MODIFY `itemid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `itemid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `subscribtion`
--
ALTER TABLE `subscribtion`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=574;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
