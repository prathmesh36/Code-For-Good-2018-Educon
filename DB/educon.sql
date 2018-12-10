-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2018 at 05:02 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educon`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `aid` int(20) NOT NULL,
  `id` int(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `institute` varchar(50) NOT NULL,
  `typeedu` varchar(50) NOT NULL,
  `result` float NOT NULL,
  `income` float NOT NULL,
  `year` int(11) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `did` int(11) NOT NULL,
  `corestatus` varchar(10) NOT NULL,
  `incomescore` varchar(10) NOT NULL,
  `acadscore` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`aid`, `id`, `Status`, `institute`, `typeedu`, `result`, `income`, `year`, `occupation`, `did`, `corestatus`, `incomescore`, `acadscore`) VALUES
(1, 1, '1', 'Ruia', '12th', 89, 10000, 2014, 'Farmer', 1, '3', '100', '456'),
(4, 408, '3', 'DJ Sanghvi', 'Medical', 55, 10000, 2017, 'Farmer', 395, '3', '103', '107'),
(5, 393, '2', 'SPIT', 'Engineering', 70, 15000, 2017, 'Worker', 407, '1', '100', '50'),
(15, 1, '1', 'DJ Sanghvi', 'Grad 3rd year', 87, 6000, 2017, '', 0, '3', '', ''),
(16, 1, '1', 'DJ Sanghvi', 'Grad 4th year', 87, 6000, 2017, '', 0, '3', '', ''),
(17, 1, '1', 'DJ Sanghvi', 'Grad 3rd year', 87, 6000, 2017, '', 0, '3', '', ''),
(18, 446, '1', 'DJ Sanghvi', 'Grad 3rd year', 0, 50000, 2017, '', 0, '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `password` varchar(40) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `doj` datetime NOT NULL,
  `contact` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(40) NOT NULL,
  `aadharno` varchar(40) NOT NULL,
  `institute` varchar(40) NOT NULL,
  `typeedu` varchar(20) NOT NULL,
  `result` varchar(40) NOT NULL,
  `income` varchar(20) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `sibling` varchar(10) NOT NULL,
  `follow` longtext NOT NULL,
  `lastvisit` datetime NOT NULL,
  `lastlog` datetime NOT NULL,
  `view` bigint(20) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `type` int(11) NOT NULL,
  `previousgrants` varchar(50) NOT NULL,
  `pemail` varchar(40) NOT NULL,
  `amountneed` varchar(40) NOT NULL,
  `donation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `password`, `firstname`, `surname`, `email`, `gender`, `dob`, `doj`, `contact`, `fname`, `mname`, `aadharno`, `institute`, `typeedu`, `result`, `income`, `occupation`, `sibling`, `follow`, `lastvisit`, `lastlog`, `view`, `ip`, `type`, `previousgrants`, `pemail`, `amountneed`, `donation`) VALUES
(391, '20008274adb638c2dd334d672bca3949', 'Mahesh', 'Shinde', 'shinde1924@gmail.com', 'male', '1993-11-24', '2014-12-21 08:50:17', '9787369020', 'Needy Dad', 'Needy Mom', '', '', '', '', '', '', '', '', '2014-12-21 09:04:05', '2014-12-21 08:50:44', 0, '', 1, '', 'needydad@gmail.com', '1000000', ''),
(392, 'b130351e88ac11982a5f3406fec4a439', 'Jay', 'Borse', 'jayborse77@gmail.com', 'female', '1998-07-12', '2014-12-21 10:30:19', '9787369020', 'Needy Dad', 'Needy Mom', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 1, '', 'needydad@gmail.com', '1000000', ''),
(393, 'b130351e88ac11982a5f3406fec4a439', 'Jay', 'Borse', 'jayborse555@gmail.com', 'female', '1998-07-12', '2014-12-21 10:31:44', '9787369020', 'Needy Dad', 'Needy Mom', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2014-12-21 10:32:14', 0, '', 1, '', 'needydad@gmail.com', '1000000', ''),
(394, '55bab4dbbc130cafc7a71cca90b66c21', 'Ninad ', 'Kamble', 'www.ninadkamble16@gmail.com', 'male', '1998-06-29', '2014-12-21 06:04:04', '9787369020', 'Needy Dad', 'Needy Mom', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2014-12-21 06:05:08', 0, '', 1, '', 'needydad@gmail.com', '1000000', ''),
(395, '098f6bcd4621d373cade4e832627b4f6', 'Donor', 'Person', 'donor2@gmail.com', 'male', '1995-01-01', '2014-12-22 03:22:26', '9787369020', 'Needy Dad', 'Needy Mom', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2014-12-22 03:22:46', 0, '', 3, '', 'needydad@gmail.com', '1000000', ''),
(405, '098f6bcd4621d373cade4e832627b4f6', 'Core', 'Committee', 'corecomm@gpmnetwork.co.in', 'male', '1985-01-01', '2014-12-26 06:58:11', '9787369020', 'Needy Dad', 'Needy Mom', '', '', '', '', '', '', '', '', '2015-06-01 09:27:23', '2015-06-01 09:51:54', 0, '127.0.0.1', 4, '', 'needydad@gmail.com', '1000000', ''),
(407, '098f6bcd4621d373cade4e832627b4f6', 'Donor', 'Person', 'donar@gmail.com', 'male', '1985-01-01', '2015-06-01 09:35:44', '9787369020', 'Needy Dad', 'Needy Mom', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2018-07-22 09:41:13', 0, 'abc', 3, '', 'needydad@gmail.com', '1000000', ''),
(408, '098f6bcd4621d373cade4e832627b4f6', 'Test', 'User', 'johnsmith@live.com', 'male', '1985-01-01', '2015-06-08 02:21:59', '9787369020', 'Needy Dad', 'Needy Mom', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '.127.0.0.1.', 1, '', 'needydad@gmail.com', '1000000', ''),
(439, '098f6bcd4621d373cade4e832627b4f6', 'Akshay', 'Jain', 'akshayd@gmail.com', 'male', '1985-01-01', '2018-02-11 11:13:38', '9787369020', 'Needy Dad', 'Needy Mom', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2018-02-11 04:46:36', 0, 'abc', 2, '', 'needydad@gmail.com', '1000000', ''),
(440, '098f6bcd4621d373cade4e832627b4f6', 'Scrutiny', 'Team 2', 'scrut2@gmail.com', 'male', '1985-01-01', '2018-02-11 12:25:13', '9787369020', 'Needy Dad', 'Needy Mom', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '.::1.', 2, '', 'needydad@gmail.com', '1000000', ''),
(441, '098f6bcd4621d373cade4e832627b4f6', 'Scrutiny', 'Team ', 'scrut@gmail.com', 'male', '1985-01-01', '2018-02-11 12:25:58', '9787369020', 'Needy Dad', 'Needy Mom', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2018-07-22 12:05:54', 0, 'abc', 2, '', 'needydad@gmail.com', '1000000', ''),
(442, '098f6bcd4621d373cade4e832627b4f6', 'Varun', 'Shah', 'varund@gmail.com', 'male', '1997-02-10', '2018-02-11 02:23:49', '9787369020', 'Needy Dad', 'Needy Mom', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2018-02-11 02:25:28', 0, 'abc', 1, '', 'needydad@gmail.com', '1000000', ''),
(443, '098f6bcd4621d373cade4e832627b4f6', 'Needy', 'Student', 'needy@gmail.com', 'male', '1985-01-01', '2018-07-21 08:11:08', '9787369020', 'Needy Dad', 'Needy Mom', '6798402139129230', '', '', '88', '5000', '', '', '', '0000-00-00 00:00:00', '2018-07-21 08:59:24', 0, 'abc', 1, '', 'needydad@gmail.com', '1000000', ''),
(444, '098f6bcd4621d373cade4e832627b4f6', 'Needy ', 'Student 2', 'needy2@gmail.com', 'male', '1985-01-01', '2018-07-22 02:02:35', '134267', 'John', 'Katy', '23682321821', 'DJ Sanghvi', '12th', '65', '7895', '', '', '', '0000-00-00 00:00:00', '2018-07-22 02:03:07', 0, 'abc', 1, '', 'katy@gmail.com', '1000000', ''),
(445, '098f6bcd4621d373cade4e832627b4f6', 'Donor', 'Person', 'donar3@gmail.com', 'male', '1985-01-01', '2018-07-22 05:11:52', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '.127.0.0.1.', 1, '', '', '', ''),
(446, '827ccb0eea8a706c4c34a16891f84e7b', 'John', 'Smith', 'johnsmith', 'male', '1985-01-01', '2018-07-22 11:08:47', '8452974028', 'john', 'katy', '567890028', 'DJ Sanghvi', 'Grad 3rd year', 'gtggg', '50000', '', '', '', '0000-00-00 00:00:00', '2018-07-22 11:09:34', 0, 'abc', 1, '', 'katy@gmail.com', '100000', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `sen_id` int(11) NOT NULL,
  `rec_id` int(11) NOT NULL,
  `mess` longtext NOT NULL,
  `fname_sen` varchar(40) NOT NULL,
  `sname_sen` varchar(40) NOT NULL,
  `date` datetime NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `sen_id`, `rec_id`, `mess`, `fname_sen`, `sname_sen`, `date`, `time`) VALUES
(42, 1, 2, 'hello', 'Prathamesh', 'Mhapsekar', '2014-07-26 23:37:14', 1406398034),
(43, 2, 1, 'hello how are you?', 'Mandar', 'Mhapsekar', '2014-07-26 23:44:10', 1406398450),
(45, 1, 2, 'bye', 'Prathamesh', 'Mhapsekar', '2014-07-26 23:55:58', 1406399158),
(46, 2, 1, 'bye', 'Mandar', 'Mhapsekar', '2014-07-27 00:00:11', 1406399411),
(52, 1, 7, 'No queries', 'Prathamesh', 'Mhapsekar', '2014-07-28 22:49:41', 1406567981),
(54, 1, 2, 'Hey Dake', 'Prathamesh', 'Mhapsekar', '2014-07-31 17:55:03', 1406809503),
(55, 1, 11, 'hey dake\r\n', 'Prathamesh', 'Mhapsekar', '2014-07-31 17:55:16', 1406809516),
(56, 1, 2, 'Hello Mandar testing the Notification', 'Prathamesh', 'Mhapsekar', '2014-08-05 23:46:36', 1407262596),
(57, 1, 2, 'Testing Again', 'Prathamesh', 'Mhapsekar', '2014-08-05 23:57:15', 1407263235),
(58, 2, 1, 'has the Test Complete', 'Mandar', 'Mhapsekar', '2014-08-06 00:06:44', 1407263804),
(59, 1, 2, 'Hello\r\n', 'Prathamesh', 'Mhapsekar', '2014-08-06 00:14:48', 1407264288),
(60, 17, 1, 'hello', 'Santosh', 'Yadav', '2014-08-06 14:33:54', 1407315834),
(61, 1, 22, 'hello pratish', 'Prathamesh', 'Mhapsekar', '2014-08-06 18:18:29', 1407329309),
(62, 1, 34, 'hello\r\n', 'Prathamesh', 'Mhapsekar', '2014-08-06 18:39:23', 1407330563),
(63, 35, 22, 'Hi follow me', 'Vinay', 'Mobharkar', '2014-08-06 19:01:35', 1407331895),
(66, 27, 1, 'Hii', 'Lalchand', 'Gaund', '2014-08-08 15:24:43', 1407491683),
(67, 27, 7, 'pmp hii..\r\n', 'Lalchand', 'Gaund', '2014-08-09 15:34:26', 1407578666),
(68, 81, 80, 'Hi', 'Sarthak', 'Dadhakar', '2014-08-12 10:34:56', 1407819896),
(69, 80, 81, 'bye\r\n', 'Saurabh', 'Patil', '2014-08-12 10:36:05', 1407819965),
(70, 11, 2, 'hi', 'Onkar ', 'Dake', '2014-08-31 11:34:22', 1409465062),
(71, 1, 7, 'Great site', 'Prathamesh', 'Mhapsekar', '2014-09-06 23:58:10', 1410028090),
(72, 7, 184, 'Please Enter your Real Name', 'GPM', 'Network', '2014-09-08 20:30:44', 1410188444),
(73, 7, 184, 'Reply ur Real Name', 'GPM', 'Network', '2014-09-08 20:30:58', 1410188458),
(74, 76, 21, 'hi\r\n', 'Omkar', 'Yadav', '2014-09-14 10:29:40', 1410670780),
(75, 18, 85, 'hii', 'Vishakha', 'Sutar', '2014-09-27 18:24:49', 1411822489),
(76, 17, 1, 'hello', 'Santosh', 'Yadav', '2014-10-17 15:11:28', 1413538888),
(77, 76, 248, 'hiii\r\n', 'Omkar', 'Yadav', '2014-11-21 17:16:57', 1416570417),
(81, 1, 2, 'should come on the right side and font color black', 'Prathamesh', 'Mhapsekar', '2015-05-20 21:19:37', 1432136977),
(82, 1, 2, 'Hello Mandar Mhapsekar', 'Prathamesh', 'Mhapsekar', '2015-05-21 11:47:15', 1432189035),
(83, 1, 2, 'Mandar !', 'Prathamesh', 'Mhapsekar', '2015-05-21 12:58:28', 1432193308),
(84, 1, 2, 'Hello', 'Prathamesh', 'Mhapsekar', '2015-05-21 13:04:02', 1432193642),
(85, 1, 2, 'Hellow', 'Prathamesh', 'Mhapsekar', '2015-05-21 13:06:18', 1432193778),
(86, 404, 1, 'Hello testing the time of messages', 'Test', 'User', '2015-05-21 19:06:24', 1432215384),
(87, 404, 1, 'Hello', 'Test', 'User', '2015-05-21 19:07:51', 1432215471),
(88, 1, 404, 'Hello', 'Prathamesh', 'Mhapsekar', '2015-05-21 19:09:12', 1432215552),
(89, 1, 11, 'Hii bro', 'Prathamesh', 'Mhapsekar', '2015-05-21 19:10:10', 1432215610),
(90, 404, 2, 'Hello', 'Test', 'User', '2015-05-21 21:20:56', 1432223456),
(91, 404, 2, 'Hii, i am Mr. Test User', 'Test', 'User', '2015-05-21 21:21:54', 1432223514),
(118, 1, 2, 'x', 'Prathamesh', 'Mhapsekar', '2015-05-21 22:57:13', 1432229233),
(119, 1, 7, 'y', 'Prathamesh', 'Mhapsekar', '2015-05-21 22:59:14', 1432229354),
(136, 404, 1, 'hello Prathmesh, i Am test User No 5', 'Test', 'User', '2015-05-22 15:13:28', 1432287808),
(137, 404, 1, 'hey Man reply', 'Test', 'User', '2015-05-22 15:13:49', 1432287829),
(138, 1, 27, 'hii', 'Prathamesh', 'Mhapsekar', '2015-05-22 19:38:18', 1432303698),
(139, 1, 5, 'Hii', 'Prathamesh', 'Mhapsekar', '2015-05-22 19:38:38', 1432303718),
(140, 1, 2, 'Hello', 'Prathamesh', 'Mhapsekar', '2015-05-23 17:34:49', 1432382689),
(141, 1, 2, 'Online system', 'Prathamesh', 'Mhapsekar', '2015-05-23 17:35:19', 1432382719),
(142, 404, 1, 'Hellow', 'Test', 'User', '2015-05-28 12:50:52', 1432797652),
(143, 1, 404, 'Hii', 'Prathamesh', 'Mhapsekar', '2015-05-28 12:51:11', 1432797671),
(144, 1, 11, 'Hii\r\nor onkar dake', 'Prathamesh', 'Mhapsekar', '2015-05-28 12:54:02', 1432797842),
(145, 404, 1, 'Hii', 'Test', 'User', '2015-05-28 13:42:32', 1432800752),
(146, 404, 1, 'Hii', 'Test', 'User', '2015-05-31 12:28:10', 1433055490),
(147, 1, 404, 'hii', 'Prathamesh', 'Mhapsekar', '2015-05-31 12:38:33', 1433056113),
(148, 404, 1, 'bye', 'Test', 'User', '2015-05-31 12:39:52', 1433056192),
(149, 1, 404, 'ok bye', 'Prathamesh', 'Mhapsekar', '2015-05-31 12:40:26', 1433056226),
(150, 404, 1, 'hii', 'Test', 'User', '2015-05-31 13:25:49', 1433058949),
(151, 404, 1, 'hii', 'Test', 'User', '2015-05-31 14:01:39', 1433061099),
(152, 1, 404, 'bye', 'Prathamesh', 'Mhapsekar', '2015-05-31 14:06:27', 1433061387),
(153, 404, 1, 'hii', 'Test', 'User', '2015-05-31 14:08:32', 1433061512),
(154, 1, 404, 'hii\r\n', 'Prathamesh', 'Mhapsekar', '2015-05-31 14:09:56', 1433061596),
(155, 404, 1, 'hii', 'Test', 'User', '2015-05-31 14:15:57', 1433061957),
(156, 1, 404, 'hii', 'Prathamesh', 'Mhapsekar', '2015-05-31 14:21:50', 1433062310),
(157, 404, 1, 'testing Iframe Automatic Loading', 'Test', 'User', '2015-05-31 19:19:49', 1433080189),
(158, 1, 404, 'hii', 'Prathamesh', 'Mhapsekar', '2015-05-31 19:23:15', 1433080395),
(159, 404, 1, 'bye', 'Test', 'User', '2015-05-31 20:18:31', 1433083711),
(160, 1, 404, 'hii', 'Prathamesh', 'Mhapsekar', '2015-05-31 20:18:50', 1433083730),
(161, 1, 404, 'hii', 'Prathamesh', 'Mhapsekar', '2015-05-31 20:23:55', 1433084035),
(162, 1, 404, 'hii', 'Prathamesh', 'Mhapsekar', '2015-05-31 20:35:32', 1433084732),
(163, 404, 1, 'hii', 'Test', 'User', '2015-05-31 20:35:59', 1433084759),
(164, 1, 404, 'bye', 'Prathamesh', 'Mhapsekar', '2015-05-31 20:36:37', 1433084797),
(165, 1, 404, 'hii', 'Prathamesh', 'Mhapsekar', '2015-06-01 22:14:44', 1433177084),
(166, 1, 405, 'hii\r\n', 'Prathamesh', 'Mhapsekar', '2015-06-01 22:15:01', 1433177101),
(167, 405, 1, 'hii', 'Test', 'User', '2015-06-01 22:15:30', 1433177130),
(168, 1, 405, 'hii\r\n', 'Prathamesh', 'Mhapsekar', '2015-06-01 22:16:37', 1433177197),
(169, 405, 1, 'hii', 'Test', 'User', '2015-06-01 22:18:56', 1433177336),
(170, 1, 405, 'hii', 'Prathamesh', 'Mhapsekar', '2015-06-01 22:19:18', 1433177358),
(171, 405, 1, 'bye', 'Test', 'User', '2015-06-01 22:35:27', 1433178327),
(172, 1, 405, 'hii', 'Prathamesh', 'Mhapsekar', '2015-06-05 20:32:25', 1433516545),
(173, 1, 2, 'hii', 'Prathamesh', 'Mhapsekar', '2015-06-16 21:38:06', 1434470886),
(174, 1, 2, 'hii', 'Prathamesh', 'Mhapsekar', '2015-06-16 21:38:18', 1434470898),
(175, 1, 2, 'hii', 'Prathamesh', 'Mhapsekar', '2015-06-16 21:38:21', 1434470901),
(176, 1, 2, 'hii', 'Prathamesh', 'Mhapsekar', '2015-06-16 21:38:23', 1434470903),
(177, 1, 2, 'hii', 'Prathamesh', 'Mhapsekar', '2015-06-16 21:38:24', 1434470904),
(178, 1, 2, 'hii', 'Prathamesh', 'Mhapsekar', '2015-06-16 21:38:25', 1434470905),
(179, 1, 2, 'hii', 'Prathamesh', 'Mhapsekar', '2015-06-16 21:38:26', 1434470906),
(180, 1, 2, 'hii', 'Prathamesh', 'Mhapsekar', '2015-06-16 21:38:28', 1434470908),
(181, 1, 2, 'hii', 'Prathamesh', 'Mhapsekar', '2015-06-16 21:38:29', 1434470909),
(182, 1, 2, 'hii', 'Prathamesh', 'Mhapsekar', '2015-06-16 21:38:30', 1434470910),
(183, 1, 2, 'hii', 'Prathamesh', 'Mhapsekar', '2015-06-16 21:38:31', 1434470911),
(184, 1, 2, 'hii', 'Prathamesh', 'Mhapsekar', '2015-06-16 21:38:33', 1434470913),
(185, 1, 2, 'hi', 'Prathamesh', 'Mhapsekar', '2015-06-16 21:39:28', 1434470968),
(186, 404, 1, 'hiii', 'Test', 'User', '2015-06-16 21:43:16', 1434471196),
(187, 1, 404, 'hii bro test user', 'Prathamesh', 'Mhapsekar', '2015-06-16 21:43:43', 1434471223),
(188, 1, 404, 'hiii how are you bor test user NO 5', 'Prathamesh', 'Mhapsekar', '2015-06-16 21:46:32', 1434471392),
(189, 1, 404, 'hi \r\n', 'Prathamesh', 'Mhapsekar', '2015-06-16 21:58:08', 1434472088),
(190, 2, 1, 'hii', 'Mandar', 'Mhapsekar', '2015-06-16 22:14:50', 1434473090),
(191, 2, 1, 'why so many hiii''s\r\n', 'Mandar', 'Mhapsekar', '2015-06-16 22:14:59', 1434473099),
(192, 1, 2, 'hii', 'Prathamesh', 'Mhapsekar', '2017-01-16 18:56:23', 1484573183),
(193, 1, 17, 'hello\r\n', 'Prathamesh', 'Mhapsekar', '2017-01-16 18:56:55', 1484573215),
(195, 1, 2, 'hii', 'Prathamesh', 'Mhapsekar', '2017-04-20 14:01:49', 1492677109),
(196, 5, 1, 'HII', 'Prof. John', 'Smith', '2017-09-09 11:51:30', 1504938090),
(208, 1, 34, 'i need help', 'Prathmesh', 'Mhapsekar', '2017-09-10 20:38:58', 1505056138),
(209, 1, 34, 'urgently', 'Prathmesh', 'Mhapsekar', '2017-09-10 20:39:08', 1505056148),
(210, 1, 34, 'i neeed help', 'Prathmesh', 'Mhapsekar', '2017-09-10 20:46:10', 1505056570),
(211, 1, 34, 'its very urgent', 'Prathmesh', 'Mhapsekar', '2017-09-10 20:46:21', 1505056581),
(215, 1, 34, 'hiii', 'Prathamesh', 'Mhapsekar', '2017-09-13 10:01:02', 1505277062),
(216, 1, 34, 'hii', 'Prathamesh', 'Mhapsekar', '2017-09-13 10:01:14', 1505277074),
(217, 5, 1, 'his', 'Prof. John', 'Smith', '2017-09-13 17:06:27', 1505302587),
(218, 34, 1, 'his', 'Online', 'Counsellor', '2017-09-13 17:25:10', 1505303710),
(219, 1, 2, 'hii', 'Prathamesh', 'Mhapsekar', '2017-09-13 17:29:03', 1505303943),
(220, 34, 1, 'his', 'Online', 'Counsellor', '2017-09-13 17:56:29', 1505305589),
(222, 1, 265, 'hiii', 'Prathamesh', 'Mhapsekar', '2017-09-13 23:24:30', 1505325270),
(223, 1, 129, 'hii?', 'Prathamesh', 'Mhapsekar', '2017-09-13 23:27:02', 1505325422),
(224, 1, 129, 'hii', 'Prathamesh', 'Mhapsekar', '2017-09-13 23:28:23', 1505325503),
(225, 1, 22, 'hii', 'Prathamesh', 'Mhapsekar', '2017-09-13 23:28:44', 1505325524),
(226, 34, 1, 'his\r\n', 'Online', 'Counsellor', '2017-09-13 23:37:22', 1505326042),
(227, 34, 1, 'his', 'Online', 'Counsellor', '2017-09-13 23:40:01', 1505326201),
(228, 1, 24, 'Hey !', 'Prathamesh', 'Mhapsekar', '2017-09-13 23:41:18', 1505326278),
(229, 2, 1, 'hii', 'Mandar', 'Mhapsekar', '2017-09-13 23:53:21', 1505327001),
(230, 1, 2, 'hii', 'Prathamesh', 'Mhapsekar', '2017-09-13 23:53:46', 1505327026),
(231, 2, 1, 'bye\r\n', 'Mandar', 'Mhapsekar', '2017-09-13 23:54:12', 1505327052),
(232, 5, 1, 'hii', 'Prof. John', 'Smith', '2017-09-13 23:54:53', 1505327093),
(233, 1, 34, 'hii no 2', 'Prathamesh', 'Mhapsekar', '2017-09-14 00:01:21', 1505327481),
(234, 1, 9, 'hiii how are you?', 'Prathamesh', 'Mhapsekar', '2017-09-14 07:21:49', 1505353909),
(235, 1, 24, 'hii', 'Prathamesh', 'Mhapsekar', '2017-09-15 11:59:48', 1505456988),
(236, 5, 2, 'Hello Mandar ', 'Prof. John', 'Smith', '2017-09-16 20:57:40', 1505575660),
(237, 5, 2, 'hey again', 'Prof. John', 'Smith', '2017-09-16 20:57:54', 1505575674),
(238, 1, 9, 'Hii', 'Prathamesh', 'Mhapsekar', '2017-09-16 21:02:49', 1505575969),
(239, 1, 2, 'hi\r\n', 'Prathamesh', 'Mhapsekar', '2017-09-17 11:23:21', 1505627601),
(240, 2, 1, 'Hi', 'Mandar', 'Mhapsekar', '2017-09-17 11:23:44', 1505627624),
(241, 1, 2, 'Hello Prathmesh How ARE YOU', 'Prathamesh', 'Mhapsekar', '2017-09-17 11:44:21', 1505628861),
(242, 2, 1, 'Hii', 'Mandar', 'Mhapsekar', '2017-09-17 11:44:44', 1505628884),
(243, 2, 1, 'Hii', 'Mandar', 'Mhapsekar', '2017-09-17 11:44:44', 1505628884),
(244, 2, 34, 'Good Morning Sir', 'Mandar', 'Mhapsekar', '2017-09-18 20:04:26', 1505745266),
(245, 2, 34, 'HI\r\n', 'Mandar', 'Mhapsekar', '2017-09-18 20:05:01', 1505745301),
(246, 2, 34, 'Hi', 'Mandar', 'Mhapsekar', '2017-09-18 20:05:11', 1505745311),
(247, 34, 2, 'Sir can u help me?', 'Online', 'Counsellor', '2017-09-18 20:05:21', 1505745321),
(248, 34, 2, 'Nice csir', 'Online', 'Counsellor', '2017-09-18 20:05:48', 1505745348),
(249, 2, 34, 'Kya abhi Online counseller hok bhi madat mag raha hai', 'Mandar', 'Mhapsekar', '2017-09-18 20:05:55', 1505745355),
(250, 34, 11, 'hiii', 'Online', 'Counsellor', '2017-09-18 20:06:13', 1505745373),
(251, 1, 34, 'sir i need help', 'Prathamesh', 'Mhapsekar', '2017-09-19 10:10:48', 1505796048),
(252, 1, 5, 'i have some doubt', 'Prathamesh', 'Mhapsekar', '2017-09-19 10:50:51', 1505798451),
(253, 5, 1, 'hi\r\n', 'Prof. John', 'Smith', '2017-10-14 10:28:11', 1507957091);

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online`
--

INSERT INTO `online` (`id`, `firstname`, `surname`, `time`) VALUES
(1, 'Admin', 'Guy', '2018-11-07 21:30:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `id` (`aid`),
  ADD UNIQUE KEY `Did` (`aid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `aid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=447;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
