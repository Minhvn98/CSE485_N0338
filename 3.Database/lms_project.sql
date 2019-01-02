-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 02, 2019 at 03:48 PM
-- Server version: 5.6.25
-- PHP Version: 5.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `email`, `password`) VALUES
('Admin', 'minhvn62@wru.vn', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `code_example`
--

CREATE TABLE IF NOT EXISTS `code_example` (
  `id_code_example` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `title_code_example` varchar(300) NOT NULL,
  `date_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `link_dowload` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `code_example`
--

INSERT INTO `code_example` (`id_code_example`, `id_course`, `title_code_example`, `date_upload`, `link_dowload`) VALUES
(1, 1, 'Slide 01 - Install PHP XAMPP LAMP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(2, 1, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(3, 1, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(4, 1, 'Slide 03 - Working with FORM in PHP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(5, 1, 'Slide 04 - Regular Expressions File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(6, 2, 'Slide 01 - Install PHP XAMPP LAMP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(7, 2, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(8, 2, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(9, 2, 'Slide 03 - Working with FORM in PHP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(10, 2, 'Slide 04 - Regular Expressions File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(11, 3, 'Slide 01 - Install PHP XAMPP LAMP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(12, 3, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(13, 3, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(14, 3, 'Slide 03 - Working with FORM in PHP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(15, 3, 'Slide 04 - Regular Expressions File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(16, 4, 'Slide 01 - Install PHP XAMPP LAMP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(17, 4, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(18, 4, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(19, 4, 'Slide 03 - Working with FORM in PHP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(20, 4, 'Slide 04 - Regular Expressions File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id_course` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `image` text,
  `date_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id_course`, `title`, `image`, `date_upload`) VALUES
(1, '[CSE282] Nhập môn Lập trình KHDL', 'http://www.hoccongnghethongtin.com/pluginfile.php/367/course/overviewfiles/CSE282.png', '2018-12-20 13:49:30'),
(2, '[CSE489] Mạng máy tính', 'http://www.hoccongnghethongtin.com/pluginfile.php/513/course/overviewfiles/CSE489.jpg', '2018-12-20 13:49:30'),
(3, '[CSE391] Nền tảng phát triển Web', 'http://www.hoccongnghethongtin.com/pluginfile.php/26/course/overviewfiles/391.2.jpg', '2018-12-20 13:49:30'),
(4, '[KTZ003] Machine Learning\r\n', 'http://www.hoccongnghethongtin.com/pluginfile.php/497/course/overviewfiles/introduction-to-machine-learning_social.png', '2018-12-20 13:49:30');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `id_documents` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `title_documents` varchar(300) NOT NULL,
  `date_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `link_dowload` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id_documents`, `id_course`, `title_documents`, `date_upload`, `link_dowload`) VALUES
(1, 1, 'Slide 01 - Install PHP XAMPP LAMP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(2, 1, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(3, 1, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(4, 1, 'Slide 03 - Working with FORM in PHP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(5, 1, 'Slide 04 - Regular Expressions File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(6, 2, 'Slide 01 - Install PHP XAMPP LAMP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(7, 2, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(8, 2, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(9, 2, 'Slide 03 - Working with FORM in PHP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(10, 2, 'Slide 04 - Regular Expressions File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(11, 3, 'Slide 01 - Install PHP XAMPP LAMP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(12, 3, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(13, 3, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(14, 3, 'Slide 03 - Working with FORM in PHP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(15, 3, 'Slide 04 - Regular Expressions File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(16, 4, 'Slide 01 - Install PHP XAMPP LAMP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(17, 4, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(18, 4, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(19, 4, 'Slide 03 - Working with FORM in PHP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(20, 4, 'Slide 04 - Regular Expressions File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE IF NOT EXISTS `lesson` (
  `id_lesson` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `title_lesson` varchar(300) NOT NULL,
  `date_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `link_dowload` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`id_lesson`, `id_course`, `title_lesson`, `date_upload`, `link_dowload`) VALUES
(1, 1, 'Slide 01 - Install PHP XAMPP LAMP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(2, 1, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(3, 1, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(4, 1, 'Slide 03 - Working with FORM in PHP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(5, 1, 'Slide 04 - Regular Expressions File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(6, 2, 'Slide 01 - Install PHP XAMPP LAMP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(7, 2, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(8, 2, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(9, 2, 'Slide 03 - Working with FORM in PHP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(10, 2, 'Slide 04 - Regular Expressions File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(11, 3, 'Slide 01 - Install PHP XAMPP LAMP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(12, 3, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(13, 3, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(14, 3, 'Slide 03 - Working with FORM in PHP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(15, 3, 'Slide 04 - Regular Expressions File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(16, 4, 'Slide 01 - Install PHP XAMPP LAMP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(17, 4, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(18, 4, 'Slide 02 - PHP Syntax File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(19, 4, 'Slide 03 - Working with FORM in PHP File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz'),
(20, 4, 'Slide 04 - Regular Expressions File', '2018-12-20 13:49:30', 'https://drive.google.com/drive/folders/10dRZv7DfdMkkcbi_l3-bJcIYTXiJJtsz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_name`);

--
-- Indexes for table `code_example`
--
ALTER TABLE `code_example`
  ADD PRIMARY KEY (`id_code_example`),
  ADD KEY `id_course` (`id_course`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id_documents`),
  ADD KEY `id_course` (`id_course`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id_lesson`),
  ADD KEY `id_course` (`id_course`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `code_example`
--
ALTER TABLE `code_example`
  MODIFY `id_code_example` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id_documents` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id_lesson` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
