-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 01:07 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsdrc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `activationcode` varchar(255) NOT NULL,
  `forgetpasswordcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `role_id`, `name`, `password`, `activationcode`, `forgetpasswordcode`, `email`, `active`) VALUES
(2, 1, 'admin', '4297f44b13955235245b2497399d7a93', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 'grthayalan18@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_career`
--

CREATE TABLE `tbl_career` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `relegion` varchar(255) NOT NULL,
  `community` varchar(255) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `blood` varchar(50) NOT NULL,
  `education` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `conatct_1` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_career`
--

INSERT INTO `tbl_career` (`uid`, `name`, `fname`, `mname`, `sex`, `dob`, `relegion`, `community`, `marital_status`, `blood`, `education`, `occupation`, `conatct_1`, `email`, `address`, `district`, `state`, `country`, `pincode`) VALUES
(1, 'asdfasdf', 'asds', 'asdfasdf', 'male', '2018-12-21', 'not-specified', 'not-specified', 'single', 'asdsadf', 'asdsadf', 'asdfasdfas', 2147483647, 'sparkzeon@gmail.com', '234,ASD,Asdasd,ASDA', 'asdfasdfsadf', 'Tamilnadu', 'sdfgdsfg', 232234);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `img_id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`img_id`, `path`, `date`) VALUES
(4, 'thayalan.jpg', '2018-12-18 07:22:46'),
(7, 'martin.jpg', '2018-12-18 10:01:45'),
(8, '16826124_692493007597120_563496180958745492_o.jpg', '2018-12-18 10:01:52'),
(9, '16826124_692493007597120_563496180958745492_o.jpg', '2018-12-18 10:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave_message`
--

CREATE TABLE `tbl_leave_message` (
  `mid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leave_message`
--

INSERT INTO `tbl_leave_message` (`mid`, `name`, `email`, `subject`, `message`, `date`) VALUES
(1, 'sdfsadf', 'asdfsdf@gmail.com', 'asdfasdf', 'asdfasdfsdf', '2018-12-18 06:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsfeed`
--

CREATE TABLE `tbl_newsfeed` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_newsfeed`
--

INSERT INTO `tbl_newsfeed` (`id`, `title`, `path`, `createdAt`) VALUES
(4, 'testing website newsfeed', 'CS6513_CG_Lab_Manual_Procedure_Only.pdf', '2018-12-18 07:44:42'),
(5, 'test 2', 'CS6513_CG_Lab_Manual_Procedure_Only.pdf', '2018-12-18 09:04:03'),
(6, 'asdfsdfasdf', 'IMG_20181029_140107.jpg', '2018-12-18 11:39:15'),
(7, 'asdfsdfsadf', 'thayalan2.jpg', '2018-12-18 11:39:22'),
(8, 'asdfsdfsadf', 'mgr.csv', '2018-12-18 11:39:36'),
(9, 'testing website newsfeed', 'ThayalanGR-Resume.pdf', '2018-12-18 11:39:54'),
(10, 'testing website newsfeed', 'ThayalanGR-Resume.pdf', '2018-12-18 11:39:58'),
(11, 'testing website newsfeed', 'ThayalanGR-Resume.pdf', '2018-12-18 11:40:14'),
(12, 'testing website newsfeed', 'ThayalanGR-Resume.pdf', '2018-12-18 11:40:18'),
(13, 'testing website newsfeed', 'ThayalanGR-Resume.pdf', '2018-12-18 11:40:21'),
(14, 'testing website newsfeed', 'ThayalanGR-Resume.pdf', '2018-12-18 11:40:24'),
(15, 'testing website newsfeed', 'ThayalanGR-Resume.pdf', '2018-12-18 11:40:27'),
(16, 'testing website newsfeed', 'ThayalanGR-Resume.pdf', '2018-12-18 11:40:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `tbl_career`
--
ALTER TABLE `tbl_career`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `tbl_leave_message`
--
ALTER TABLE `tbl_leave_message`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `tbl_newsfeed`
--
ALTER TABLE `tbl_newsfeed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_career`
--
ALTER TABLE `tbl_career`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_leave_message`
--
ALTER TABLE `tbl_leave_message`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_newsfeed`
--
ALTER TABLE `tbl_newsfeed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
