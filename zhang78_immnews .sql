-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-10-28 21:53:30
-- 服务器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `zhang78_immnews`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
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
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`articleId`, `title`, `author`, `category`, `link`, `imgFile`, `content`, `lastModified`, `isFeatured`, `dateWritten`) VALUES
(7, 'testingarticleyan', 'wc3456ccccc', 'T', 'https://www.w3schools.com/html/html_form_input_typ', './images/', '			dddddddddggggg	ccccc																																				', '0000-00-00 00:00:00', 1, '2019-10-16'),
(13, 'testingarticleuser', 'wc3', 'T', 'https://www.w3schools.com/html/html_form_input_typ', './images/ac_logo.svg', '	yyyyyyy															', '0000-00-00 00:00:00', 1, '0000-00-00'),
(35, 'about do not delete', 'yanzhang', 'A', 'https://www.w3schools.com/html/html_form_input_typ', './images/err2.jpg', ' IMM News Network was built in Oct 2020, it is the best source for people who already or going to have an Interactive Multimedia careers. IMM News Network aims to include the most advanced articles and news on IM industry, technolory, careers trends.	cccccccccc							\r\n															\r\n							', '2019-10-28 16:35:15', 1, '0000-00-00'),
(36, 'final paper', 'wc34yan', 'C', 'https://www.w3schools.com/html/html_form_input_typ', './images/bgimg3.png', '	testing for sheridan final edit															', '0000-00-00 00:00:00', 1, '0000-00-00'),
(37, 'testingserver', 'wc34yan', 'C', 'https://www.w3schools.com/html/html_form_input_typ', './images/', '	ffffffff																																															', '0000-00-00 00:00:00', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- 替换视图以便查看 `articlewithlike`
-- （参见下面的实际视图）
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
-- 表的结构 `contact`
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
-- 转存表中的数据 `contact`
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
(17, 'XIANG', 'zhang', 'zhangyy@sheridancollege.ca', '416-837-1343', 'T', 'C', 'testing', '2019-10-27');

-- --------------------------------------------------------

--
-- 表的结构 `invcategory`
--

CREATE TABLE `invcategory` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `invlike`
--

CREATE TABLE `invlike` (
  `likeId` int(11) NOT NULL,
  `likeness` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `invtype`
--

CREATE TABLE `invtype` (
  `typeId` int(11) NOT NULL,
  `typename` varchar(16) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `invtype`
--

INSERT INTO `invtype` (`typeId`, `typename`) VALUES
(0, 'admin'),
(1, 'member');

-- --------------------------------------------------------

--
-- 替换视图以便查看 `testing`
-- （参见下面的实际视图）
--
CREATE TABLE `testing` (
`userId` int(11)
,`likeId` int(1)
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
-- 替换视图以便查看 `totallike`
-- （参见下面的实际视图）
--
CREATE TABLE `totallike` (
`articleID` int(11)
,`numLikes` bigint(21)
);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `username` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(127) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `typeId` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user`
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
(19, 'yantesting3', '123456', 'lyanzhang@yahoo.com', 1);

-- --------------------------------------------------------

--
-- 表的结构 `userarticle`
--

CREATE TABLE `userarticle` (
  `userId` int(11) NOT NULL,
  `articleId` int(11) NOT NULL,
  `likeId` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `userarticle`
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
(19, 37, 0);

-- --------------------------------------------------------

--
-- 视图结构 `articlewithlike`
--
DROP TABLE IF EXISTS `articlewithlike`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `articlewithlike`  AS  select `totallike`.`numLikes` AS `numLikes`,`article`.`articleId` AS `articleId`,`article`.`title` AS `title`,`article`.`author` AS `author`,`article`.`category` AS `category`,`article`.`link` AS `link`,`article`.`imgFile` AS `imgFile`,`article`.`content` AS `content`,`article`.`lastModified` AS `lastModified`,`article`.`isFeatured` AS `isFeatured`,`article`.`dateWritten` AS `dateWritten` from (`article` left join `totallike` on(`article`.`articleId` = `totallike`.`articleID`)) ;

-- --------------------------------------------------------

--
-- 视图结构 `testing`
--
DROP TABLE IF EXISTS `testing`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `testing`  AS  select `b`.`userId` AS `userId`,`b`.`likeId` AS `likeId`,`a`.`articleId` AS `articleId`,`a`.`title` AS `title`,`a`.`author` AS `author`,`a`.`category` AS `category`,`a`.`link` AS `link`,`a`.`imgFile` AS `imgFile`,`a`.`content` AS `content`,`a`.`lastModified` AS `lastModified`,`a`.`isFeatured` AS `isFeatured`,`a`.`dateWritten` AS `dateWritten` from (`article` `a` left join (select `userarticle`.`userId` AS `userId`,`userarticle`.`articleId` AS `articleId`,`userarticle`.`likeId` AS `likeId` from `userarticle` where `userarticle`.`userId` = 9) `b` on(`a`.`articleId` = `b`.`articleId`)) ;

-- --------------------------------------------------------

--
-- 视图结构 `totallike`
--
DROP TABLE IF EXISTS `totallike`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `totallike`  AS  select `userarticle`.`articleId` AS `articleID`,count(`userarticle`.`likeId`) AS `numLikes` from `userarticle` where `userarticle`.`likeId` = 1 group by `userarticle`.`articleId` ;

--
-- 转储表的索引
--

--
-- 表的索引 `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`articleId`);

--
-- 表的索引 `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactId`);

--
-- 表的索引 `invtype`
--
ALTER TABLE `invtype`
  ADD PRIMARY KEY (`typeId`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `article`
--
ALTER TABLE `article`
  MODIFY `articleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- 使用表AUTO_INCREMENT `contact`
--
ALTER TABLE `contact`
  MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用表AUTO_INCREMENT `invtype`
--
ALTER TABLE `invtype`
  MODIFY `typeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
