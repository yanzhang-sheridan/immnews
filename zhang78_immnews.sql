-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 18, 2020 at 04:01 PM
-- Server version: 10.3.22-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zhang78_immnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `articleId` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `imgFile` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastModified` datetime NOT NULL DEFAULT current_timestamp(),
  `isFeatured` tinyint(1) NOT NULL,
  `dateWritten` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`articleId`, `title`, `author`, `category`, `link`, `imgFile`, `content`, `lastModified`, `isFeatured`, `dateWritten`) VALUES
(7, 'testingarticleyan', 'wc3456ccccc', 'C', 'https://www.w3schools.com/html/html_form_input_typ', './images/bgimg1.png', ' dddddddddggggg ccccc 	yyyy																															', '2019-10-29 20:14:01', 0, '2019-10-23'),
(13, 'testingarticleuser', 'wc34yan', 'T', 'https://www.w3schools.com/html/html_form_input_typ', './images/cupid2.png', ' yyyyyyy xxxxccccc ', '2019-10-29 18:54:11', 0, '2019-10-24'),
(35, 'about do not delete', 'yanzhang', 'A', 'https://www.w3schools.com/html/html_form_input_typ', './images/err2.jpg', 'wwqewerwerwerwerwerwerw							\r\n							', '2019-11-14 16:34:38', 1, '0000-00-00'),
(36, 'final paper', 'wc34yan', 'C', 'https://www.w3schools.com/html/html_form_input_typ', './images/bgimg3.png', '	testing for sheridan final edit															', '0000-00-00 00:00:00', 1, '0000-00-00'),
(37, 'testingserversssssssssssss', 'wc34yan', 'C', 'https://www.w3schools.com/html/html_form_input_typ', './images/cupid.png', ' ffffffffcccccccccccccccccccccccccc ', '2019-10-29 18:46:03', 0, '2019-10-08'),
(38, 'testingserver2', 'wc3', 'T', 'https://www.w3schools.com/html/html_form_input_typ', './images/cupid2.png', ' eeeee ', '2019-10-29 18:21:39', 0, '2019-10-01'),
(40, 'testingserver23', 'wc3', 'C', 'https://www.w3schools.com/html/html_form_input_typ', './images/cupid2.png', '	ttttttttt							', '2019-10-29 18:23:26', 0, '2019-10-04');

-- --------------------------------------------------------

--
-- Stand-in structure for view `articlewithlike`
-- (See below for the actual view)
--
CREATE TABLE `articlewithlike` (
`numLikes` bigint(21)
,`articleId` int(11)
,`title` varchar(50)
,`author` varchar(50)
,`category` varchar(1)
,`link` varchar(50)
,`imgFile` varchar(50)
,`content` varchar(5000)
,`lastModified` datetime
,`isFeatured` tinyint(1)
,`dateWritten` date
);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactId` int(11) NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `category` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `role` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DateAdded` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactId`, `firstname`, `lastname`, `email`, `phone`, `category`, `role`, `comments`, `DateAdded`) VALUES
(7, 'yan', 'zhang', 'zhang78@sheridancollege.ca', '4168371343', 'T', 'C', 'ttt', '0000-00-00'),
(8, 'yan2', 'zhang', 'zhang78@sheridancollege.ca', '4168371343', 'C', 'A', 'ttt2', '0000-00-00'),
(9, 'XIANG2', 'zhang', 'lyanzhang@yahoo.com', '4168371343', 'T', 'C', 'rrrrrr', '0000-00-00'),
(10, 'XIANG2', 'zhang', 'lyanzhang@yahoo.com', '4168371343', 'T', 'C', 'rrrrrr', '0000-00-00'),
(11, 'XIANG', 'zhang', 'zhang78@sheridancollege.ca', '4168371343', 'T', 'W', 'KKK', '0000-00-00'),
(12, 'XIANG', 'zhang', 'zhang78@sheridancollege.ca', '4168371343', 'T', 'W', 'KKK', '2019-10-23'),
(13, 'XIANG3', 'zhang', 'zhang78@sheridancollege.ca', '4168371343', 'C', 'W', 'EEE', '2019-10-23'),
(14, 'XIANG4', 'zhang', 'zhang78@sheridancollege.ca', '4168371343', 'C', 'W', 'EEE', '2019-10-23'),
(15, 'XIANG', 'zhang', 'zhang78@sheridancollege.ca', '4168371343', 'T', 'A', 'dddd', '2019-10-24'),
(16, 'testing', 'zhang', 'zhang78@sheridancollege.ca', '', 'I', 'W', 'eeeeeee', '2019-10-24'),
(17, 'XIANG', 'zhang', 'zhangyy@sheridancollege.ca', '416-837-1343', 'T', 'C', 'testing', '2019-10-27'),
(18, 'XIANG123456', 'zhang', 'zhang78@sheridancollege.ca', '', 'T', 'W', 'ttrrrr', '2019-10-28'),
(19, 'yy', 'zhang', 'zhang78@sheridancollege.ca', '416-837-1343', 'C', 'W', 'yyyyy', '2019-10-29'),
(20, 'Wasim', 'Singh', 'wasim@wasimsingh.com', '647-278-4183', 'I', 'A', 'sdadas asdasda sasd asd asda asd asd', '2019-11-14'),
(21, 'XIANG', 'zhang', 'W', '', 'I', 'W', '', '2019-12-03'),
(22, 'XIANG', 'zhang', 'W', 'reew', 'I', 'W', 'reew', '2019-12-03'),
(23, 'XIANG', 'zhang', 'W', 'testing', 'I', 'W', 'testing', '2019-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `invcategory`
--

CREATE TABLE `invcategory` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invlike`
--

CREATE TABLE `invlike` (
  `likeId` int(11) NOT NULL,
  `likeness` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invtype`
--

CREATE TABLE `invtype` (
  `typeId` int(11) NOT NULL,
  `typename` varchar(16) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `invtype`
--

INSERT INTO `invtype` (`typeId`, `typename`) VALUES
(1, 'member'),
(8, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `userId` int(11) DEFAULT NULL,
  `likeId` int(1) DEFAULT NULL,
  `articleId` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `category` varchar(1) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL,
  `imgFile` varchar(50) DEFAULT NULL,
  `content` varchar(5000) DEFAULT NULL,
  `lastModified` datetime DEFAULT NULL,
  `isFeatured` tinyint(1) DEFAULT NULL,
  `dateWritten` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `totallike`
-- (See below for the actual view)
--
CREATE TABLE `totallike` (
`articleID` int(11)
,`numLikes` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(127) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `typeId` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `username`, `password`, `email`, `typeId`) VALUES
(8, 'yan', '1234', 'zhang78@sheridancollege.ca', 1),
(9, 'yanzhang', '123456', 'zhang78@sheridancollege.ca', 0),
(10, 'guruedit', '', 'lyanzhang@yahoo.com', 1),
(11, 'testupdate', '', 'zhangyy@sheridancollege.ca', 1),
(12, 'uuuuu', '123456', 'yyyyy', 1),
(13, 'tim', '123456', '123456tedt', 1),
(14, 'yanuuuu', '123456', 'lyanzhang@yahoo.com', 1),
(15, 'testing', '123456', 'testing@yahoo.com', 1),
(16, 'tesingyan', '123456', 'lyanzhang@yahoo.com', 1),
(17, 'yansheridan', '124456', 'lyanzhang@yahoo.com', 1),
(18, 'yantesting2', '123456', 'lyanzhang@yahoo.com', 1),
(19, 'yantesting3', '123456', 'lyanzhang@yahoo.com', 1),
(20, 'lyanzhan', '123456', '123456tedt', 1),
(21, 'qwerwer', 'werwer', 'zhang78@sheridancollege.ca', 1),
(22, 'testng4', '123456', 'lyanzhang@yahoo.com', 1),
(23, 'zhang78', 'Dundun', '1111', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userarticle`
--

CREATE TABLE `userarticle` (
  `userId` int(11) NOT NULL,
  `articleId` int(11) NOT NULL,
  `likeId` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userarticle`
--

INSERT INTO `userarticle` (`userId`, `articleId`, `likeId`) VALUES
(8, 7, 1),
(8, 13, 0),
(13, 13, 1),
(8, 35, 0),
(9, 35, 1),
(10, 35, 0),
(11, 35, 0),
(12, 35, 0),
(13, 35, 1),
(8, 36, 0),
(9, 36, 0),
(10, 36, 0),
(11, 36, 0),
(12, 36, 0),
(13, 36, 0),
(14, 36, 0),
(15, 36, 0),
(16, 36, 0),
(19, 7, 0),
(8, 37, 0),
(9, 37, 0),
(10, 37, 0),
(11, 37, 0),
(12, 37, 0),
(13, 37, 0),
(14, 37, 0),
(15, 37, 0),
(16, 37, 0),
(17, 37, 0),
(18, 37, 0),
(19, 37, 0),
(8, 7, 1),
(8, 7, 1),
(8, 7, 1);

-- --------------------------------------------------------

--
-- Structure for view `articlewithlike`
--
DROP TABLE IF EXISTS `articlewithlike`;

CREATE ALGORITHM=UNDEFINED DEFINER=`zhang78`@`localhost` SQL SECURITY DEFINER VIEW `articlewithlike`  AS  select `totallike`.`numLikes` AS `numLikes`,`article`.`articleId` AS `articleId`,`article`.`title` AS `title`,`article`.`author` AS `author`,`article`.`category` AS `category`,`article`.`link` AS `link`,`article`.`imgFile` AS `imgFile`,`article`.`content` AS `content`,`article`.`lastModified` AS `lastModified`,`article`.`isFeatured` AS `isFeatured`,`article`.`dateWritten` AS `dateWritten` from (`article` left join `totallike` on(`article`.`articleId` = `totallike`.`articleID`)) ;

-- --------------------------------------------------------

--
-- Structure for view `totallike`
--
DROP TABLE IF EXISTS `totallike`;

CREATE ALGORITHM=UNDEFINED DEFINER=`zhang78`@`localhost` SQL SECURITY DEFINER VIEW `totallike`  AS  select `userarticle`.`articleId` AS `articleID`,count(`userarticle`.`likeId`) AS `numLikes` from `userarticle` where `userarticle`.`likeId` = 1 group by `userarticle`.`articleId` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`articleId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactId`);

--
-- Indexes for table `invtype`
--
ALTER TABLE `invtype`
  ADD PRIMARY KEY (`typeId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `articleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `invtype`
--
ALTER TABLE `invtype`
  MODIFY `typeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
