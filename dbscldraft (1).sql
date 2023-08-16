-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 07:28 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbscldraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicationsecon`
--

CREATE TABLE `applicationsecon` (
  `id` int(8) NOT NULL,
  `first_nm` varchar(20) NOT NULL,
  `last_nm` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(100) NOT NULL,
  `parent_nm` varchar(30) NOT NULL,
  `parent_occu` varchar(25) NOT NULL,
  `parent_nic` varchar(12) NOT NULL,
  `grade` int(2) NOT NULL,
  `apply` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(150) NOT NULL,
  `image` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `description`, `image`, `status`) VALUES
(46, 'Anonymous', 'Anonymous', 'sunglasses-brown-case-grey-surface.jpg', 1),
(49, 'Gamming', 'Gamming', '1422-1558362620.jpg', 1),
(51, 'Gamming', 'Gamming', 'wallpaperflare.com_wallpaper.jpg', 1),
(55, 'Illusrtaion', 'Graphics ', '7up.jpg', 1),
(56, 'Illusrtaion', 'Graphics ', 'AD.jpg', 1),
(57, 'Illusrtaion', 'Graphics ', 'AD-z.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `guardians`
--

CREATE TABLE `guardians` (
  `id` int(8) NOT NULL,
  `index_no` int(8) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `father_nic` varchar(12) NOT NULL,
  `father_occu` varchar(25) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `mother_nic` varchar(12) NOT NULL,
  `mother_occu` varchar(25) NOT NULL,
  `parents_con_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guardians`
--

INSERT INTO `guardians` (`id`, `index_no`, `father_name`, `father_nic`, `father_occu`, `mother_name`, `mother_nic`, `mother_occu`, `parents_con_no`) VALUES
(24, 22, 'stephen', '1234567888', 'khggfg', 'kala', '159543457899', 'yuyrete', '0756002896'),
(25, 1, 'deventham', '09876343245', 'gtyjuioo', 'khggf', '43568900-0-', 'vbgjhjyukiuk', '0769749965'),
(26, 4, 'mohamed', '2368-754534', 'gbhgnj', 'ghjggdcd', '233588098767', 'urryyghng', '0753245678'),
(27, 3, 'gfhkjkjl', '5687909--423', 'nghjk,hyy', 'fdhjkklkl', '344690905345', 'htyjuyujuyk', '0786632232'),
(28, 17, 'insiman', '344568094566', 'tuyiuoii', 'insiman', '899005436456', 'fhujyiiuoo', '0987654433'),
(29, 8, 'mohamad', '23456789267', 'techer', 'mohamad', '097324568845', 'techer', '0987654332'),
(30, 9, 'tharshan', '9873452317', 'laber', 'tharshan', '2345178930', 'houes wife', '0986532566'),
(31, 340000, 'thamya', '0987653456', 'techer', 'thamya', '23456788902', 'techer', '2445707542'),
(32, 23, 'asfara', '0985643217', 'laber', 'asfara', '9854321678', 'houswife', '5999889989'),
(33, 24, 'jack', '314644684654', 'Plumber', 'Rose', '748465484456', 'Artist', '6546845484'),
(34, 12123, 'Cassim', '199512123455', 'Driver', 'Bariya', '199787987564', 'Teacher', '0775794208');

-- --------------------------------------------------------

--
-- Table structure for table `index_page`
--

CREATE TABLE `index_page` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `index_page`
--

INSERT INTO `index_page` (`id`, `title`, `description`, `image`, `status`) VALUES
(3, 'Image Slider', 'ntg', 'IMG_E0686.JPG', 1),
(4, 'Image Slider', 'ntg', 'IMG_E0694.JPG', 1),
(5, 'Image Slider', 'ntg', 'IMG_E0701.JPG', 1),
(6, 'Image Slider', 'ntg', 'IMG_E0703.JPG', 1),
(7, 'The School Profile', 'cc', 'sclimg copy.PNG', 1),
(8, 'About Our School', 'à®®à®Ÿà¯à®Ÿà®•à¯à®•à®³à®ªà¯à®ªà¯ à®®à®¾à®µà®Ÿà¯à®Ÿà®¤à¯à®¤à®¿à®²à¯ à®®à¯à®¸à¯à®²à®¿à®®à¯à®•à®³à¯ à®ªà¯†à®°à¯à®®à®³à®µà®¿à®²à¯ à®šà¯†à®±à®¿à®¨à¯à®¤à¯ à®µà®¾à®´à¯à®®à¯ à®•à®¾à®¤à¯à®¤à®¾à®©à¯à®•à¯à®Ÿà®¿ à®ªà®¿à®°à®¤à¯‡à®š à®šà¯†à®¯à®²à®¾à®³à®°à¯ à®ªà®¿à®°à®¿à®µà®¿à®²à¯ à®ªà®´à¯ˆà®¯ à®•à®²à¯à®®à¯à®©à¯ˆ à®µà¯€à®¤à®¿ à®•à®¾à®¤à¯à®¤à®¾à®©à¯à®•à¯à®Ÿà®¿ 2à®®à¯ à®•à¯à®±à®¿à®šà¯à®šà®¿à®¯à®¿à®²à¯ à®¹à®¿à®´à¯à®±à®¿à®¯à¯à®¯à®¾ à®¤à¯ˆà®•à¯à®•à®¾à®ªà¯ à®ªà®³à¯à®³à®¿à®µà®¾à®¯à®²à¯à®•à¯à®•à¯ à®…à®°à¯à®•à®¿à®²à¯ à®…à®®à¯ˆà®¨à¯à®¤à¯à®³à¯à®³ à®®à®¿à®•à®ªà¯ à®ªà®´à¯ˆà®®à¯ˆ à®µà®¾à®¯à¯à®¨à¯à®¤ à®•à®Ÿà¯à®Ÿà®¿à®Ÿà®™à¯à®•à®³à¯à®Ÿà®©à¯ à®•à®¾à®Ÿà¯à®šà®¿ à®¤à®°à¯à®µà®¤à¯‡ à®®à®Ÿà¯/à®®à®®/à®¹à®¿à®´à¯à®±à®¿à®¯à¯à®¯à®¾ à®µà®¿à®¤à¯à®¤à®¿à®¯à®¾à®²à®¯à®®à¯ à®†à®•à¯à®®à¯.\r\n\r\nà®ªà®´à®®à¯à®ªà¯†à®°à¯à®®à¯ à®µà®°à®²à®¾à®±à¯à®±à¯ˆ à®•à¯Šà®£à¯à®Ÿ à®¤à®©à®¿à®ªà¯à®ªà¯†à®°à¯à®®à¯ à®®à¯à®¸à¯à®²à®¿à®®à¯ à®•à®¿à®°à®¾à®®à®®à®¾à®•à®¿à®¯ à®•à®¾à®¤à¯à®¤à®¾à®©à¯à®•à¯à®Ÿà®¿ à®¨à®•à®°à®¤à¯à®¤à®¿à®©à¯ à®ªà®´à¯ˆà®¯ à®•à®²à¯à®®à¯à®©à¯ˆ à®µà¯€à®¤à®¿à®¯à®¿à®²à¯ à®…à®®à¯ˆà®¨à¯à®¤à¯à®³à¯à®³ à®‡à®ªà¯à®ªà®¾à®Ÿà®šà®¾à®²à¯ˆ 1947à®®à¯ à®†à®£à¯à®Ÿà¯, à®®à®¾à®°à¯à®šà¯ 20à®®à¯ à®¤à®¿à®•à®¤à®¿ à®‡à®ªà¯à®ªà®¿à®°à®¤à¯‡à®š à®¨à®²à®©à¯ à®µà®¿à®°à¯à®®à¯à®ªà®¿à®•à®³à®¿à®©à¯ à®®à¯à®¯à®±à¯à®šà®¿à®¯à®¿à®©à®¾à®²à¯ à®®à®°à¯à®¹à¯à®®à¯ à®šà¯‡à®°à¯ à®°à®¾à®¸à®¿à®•à¯ à®ªà®°à¯€à®Ÿà¯ à®…à®µà®°à¯à®•à®³à®¿à®©à®¾à®²à¯ à®†à®°à®®à¯à®ªà®¿à®¤à¯à®¤à¯ à®µà¯ˆà®•à¯à®•à®ªà¯à®ªà®Ÿà¯à®Ÿà®¤à¯.\r\n\r\nà®ªà®¿à®°à®¤à¯‡à®š à®¨à®²à®®à¯ à®µà®¿à®°à¯à®®à¯à®ªà®¿à®¯à®¾à®²à¯ à®®à®¹à®°à¯‚à®ªà¯ à®¯à¯‚à®šà¯à®ªà¯ à®¹à®¾à®œà®¿à®¯à®¾à®°à¯ à®…à®µà®°à¯à®•à®³à®¿à®©à®¾à®²à¯ à®…à®©à¯à®ªà®³à®¿à®ªà¯à®ªà¯ à®šà¯†à®¯à¯à®¯à®ªà¯à®ªà®Ÿà¯à®Ÿ à®•à®¾à®£à®¿à®¯à®¿à®²à¯ à®¤à®±à¯à®•à®¾à®²à®¿à®•à®®à®¾à®• à®’à®°à¯à®µà®°à¯ˆ à®…à®¤à®¿à®ªà®°à®¾à®• à®•à¯Šà®£à¯à®Ÿà¯ à®ªà®¿à®Ÿà®¿à®•à¯à®•à®ªà¯à®ªà®Ÿà¯à®Ÿà¯ à®ªà®¾à®Ÿà®šà®¾à®²à¯ˆ à®†à®°à®®à¯à®ªà®¤à¯à®¤à®¿à®²à¯ à®šà¯†à®²à¯à®²à®¿à®¯ à®…à®°à®šà®¿à®©à®°à¯ à®®à¯à®¸à¯à®²à®¿à®®à¯ à®•à®²à®µà®©à¯ à®ªà®¾à®Ÿà®šà®¾à®²à¯ˆ à®Žà®©à¯à®± à®ªà¯†à®¯à®°à®¿à®²à¯ à®†à®°à®®à¯à®ªà®¿à®•à¯à®•à®ªà¯à®ªà®Ÿà¯à®Ÿà¯ à®ªà®¿à®©à¯à®©à®°à¯ à®®à®Ÿ/à®®à®®/à®¹à®¿à®´à¯à®±à®¿à®¯à¯à®¯à®¾ à®µà®¿à®¤à¯à®¯à®¾à®²à®¯à®®à¯ à®Žà®© à®ªà¯†à®¯à®°à¯ à®®à®¾à®±à¯à®±à®ªà¯à®ªà®Ÿà¯à®Ÿà¯ à®‡à®©à¯à®©à¯à®®à¯ à®…à®¤à¯‡ à®ªà¯†à®¯à®°à¯ à®•à¯Šà®£à¯à®Ÿà¯ à®‡à®¯à®™à¯à®•à®¿ à®µà®°à¯à®•à®¿à®©à¯à®±à®¤à¯.', '239953775_1040633940026850_3382121545456257399_n.jpg', 1),
(9, 'About Our Principal', 'à®®à®Ÿà¯à®Ÿà®•à¯à®•à®³à®ªà¯à®ªà¯ à®®à®¾à®µà®Ÿà¯à®Ÿà®¤à¯à®¤à®¿à®²à¯ à®®à¯à®¸à¯à®²à®¿à®®à¯à®•à®³à¯ à®ªà¯†à®°à¯à®®à®³à®µà®¿à®²à¯ à®šà¯†à®±à®¿à®¨à¯à®¤à¯ à®µà®¾à®´à¯à®®à¯ à®•à®¾à®¤à¯à®¤à®¾à®©à¯à®•à¯à®Ÿà®¿ à®ªà®¿à®°à®¤à¯‡à®š à®šà¯†à®¯à®²à®¾à®³à®°à¯ à®ªà®¿à®°à®¿à®µà®¿à®²à¯ à®ªà®´à¯ˆà®¯ à®•à®²à¯à®®à¯à®©à¯ˆ à®µà¯€à®¤à®¿ à®•à®¾à®¤à¯à®¤à®¾à®©à¯à®•à¯à®Ÿà®¿ 2à®®à¯ à®•à¯à®±à®¿à®šà¯à®šà®¿à®¯à®¿à®²à¯ à®¹à®¿à®´à¯à®±à®¿à®¯à¯à®¯à®¾ à®¤à¯ˆà®•à¯à®•à®¾à®ªà¯ à®ªà®³à¯à®³à®¿à®µà®¾à®¯à®²à¯à®•à¯à®•à¯ à®…à®°à¯à®•à®¿à®²à¯ à®…à®®à¯ˆà®¨à¯à®¤à¯à®³à¯à®³ à®®à®¿à®•à®ªà¯ à®ªà®´à¯ˆà®®à¯ˆ à®µà®¾à®¯à¯à®¨à¯à®¤ à®•à®Ÿà¯à®Ÿà®¿à®Ÿà®™à¯à®•à®³à¯à®Ÿà®©à¯ à®•à®¾à®Ÿà¯à®šà®¿ à®¤à®°à¯à®µà®¤à¯‡ à®®à®Ÿà¯/à®®à®®/à®¹à®¿à®´à¯à®±à®¿à®¯à¯à®¯à®¾ à®µà®¿à®¤à¯à®¤à®¿à®¯à®¾à®²à®¯à®®à¯ à®†à®•à¯à®®à¯.\r\n\r\nà®ªà®´à®®à¯à®ªà¯†à®°à¯à®®à¯ à®µà®°à®²à®¾à®±à¯à®±à¯ˆ à®•à¯Šà®£à¯à®Ÿ à®¤à®©à®¿à®ªà¯à®ªà¯†à®°à¯à®®à¯ à®®à¯à®¸à¯à®²à®¿à®®à¯ à®•à®¿à®°à®¾à®®à®®à®¾à®•à®¿à®¯ à®•à®¾à®¤à¯à®¤à®¾à®©à¯à®•à¯à®Ÿà®¿ à®¨à®•à®°à®¤à¯à®¤à®¿à®©à¯ à®ªà®´à¯ˆà®¯ à®•à®²à¯à®®à¯à®©à¯ˆ à®µà¯€à®¤à®¿à®¯à®¿à®²à¯ à®…à®®à¯ˆà®¨à¯à®¤à¯à®³à¯à®³ à®‡à®ªà¯à®ªà®¾à®Ÿà®šà®¾à®²à¯ˆ 1947à®®à¯ à®†à®£à¯à®Ÿà¯, à®®à®¾à®°à¯à®šà¯ 20à®®à¯ à®¤à®¿à®•à®¤à®¿ à®‡à®ªà¯à®ªà®¿à®°à®¤à¯‡à®š à®¨à®²à®©à¯ à®µà®¿à®°à¯à®®à¯à®ªà®¿à®•à®³à®¿à®©à¯ à®®à¯à®¯à®±à¯à®šà®¿à®¯à®¿à®©à®¾à®²à¯ à®®à®°à¯à®¹à¯à®®à¯ à®šà¯‡à®°à¯ à®°à®¾à®¸à®¿à®•à¯ à®ªà®°à¯€à®Ÿà¯ à®…à®µà®°à¯à®•à®³à®¿à®©à®¾à®²à¯ à®†à®°à®®à¯à®ªà®¿à®¤à¯à®¤à¯ à®µà¯ˆà®•à¯à®•à®ªà¯à®ªà®Ÿà¯à®Ÿà®¤à¯.\r\n\r\nà®ªà®¿à®°à®¤à¯‡à®š à®¨à®²à®®à¯ à®µà®¿à®°à¯à®®à¯à®ªà®¿à®¯à®¾à®²à¯ à®®à®¹à®°à¯‚à®ªà¯ à®¯à¯‚à®šà¯à®ªà¯ à®¹à®¾à®œà®¿à®¯à®¾à®°à¯ à®…à®µà®°à¯à®•à®³à®¿à®©à®¾à®²à¯ à®…à®©à¯à®ªà®³à®¿à®ªà¯à®ªà¯ à®šà¯†à®¯à¯à®¯à®ªà¯à®ªà®Ÿà¯à®Ÿ à®•à®¾à®£à®¿à®¯à®¿à®²à¯ à®¤à®±à¯à®•à®¾à®²à®¿à®•à®®à®¾à®• à®’à®°à¯à®µà®°à¯ˆ à®…à®¤à®¿à®ªà®°à®¾à®• à®•à¯Šà®£à¯à®Ÿà¯ à®ªà®¿à®Ÿà®¿à®•à¯à®•à®ªà¯à®ªà®Ÿà¯à®Ÿà¯ à®ªà®¾à®Ÿà®šà®¾à®²à¯ˆ à®†à®°à®®à¯à®ªà®¤à¯à®¤à®¿à®²à¯ à®šà¯†à®²à¯à®²à®¿à®¯ à®…à®°à®šà®¿à®©à®°à¯ à®®à¯à®¸à¯à®²à®¿à®®à¯ à®•à®²à®µà®©à¯ à®ªà®¾à®Ÿà®šà®¾à®²à¯ˆ à®Žà®©à¯à®± à®ªà¯†à®¯à®°à®¿à®²à¯ à®†à®°à®®à¯à®ªà®¿à®•à¯à®•à®ªà¯à®ªà®Ÿà¯à®Ÿà¯ à®ªà®¿à®©à¯à®©à®°à¯ à®®à®Ÿ/à®®à®®/à®¹à®¿à®´à¯à®±à®¿à®¯à¯à®¯à®¾ à®µà®¿à®¤à¯à®¯à®¾à®²à®¯à®®à¯ à®Žà®© à®ªà¯†à®¯à®°à¯ à®®à®¾à®±à¯à®±à®ªà¯à®ªà®Ÿà¯à®Ÿà¯ à®‡à®©à¯à®©à¯à®®à¯ à®…à®¤à¯‡ à®ªà¯†à®¯à®°à¯ à®•à¯Šà®£à¯à®Ÿà¯ à®‡à®¯à®™à¯à®•à®¿ à®µà®°à¯à®•à®¿à®©à¯à®±à®¤à¯.', 'WhatsApp Image 2023-01-03 at 15.49.39.jpeg', 1),
(10, 'How to Works It', 'à®®à®Ÿà¯à®Ÿà®•à¯à®•à®³à®ªà¯à®ªà¯ à®®à®¾à®µà®Ÿà¯à®Ÿà®¤à¯à®¤à®¿à®²à¯ à®®à¯à®¸à¯à®²à®¿à®®à¯à®•à®³à¯ à®ªà¯†à®°à¯à®®à®³à®µà®¿à®²à¯ à®šà¯†à®±à®¿à®¨à¯à®¤à¯ à®µà®¾à®´à¯à®®à¯ à®•à®¾à®¤à¯à®¤à®¾à®©à¯à®•à¯à®Ÿà®¿ à®ªà®¿à®°à®¤à¯‡à®š à®šà¯†à®¯à®²à®¾à®³à®°à¯ à®ªà®¿à®°à®¿à®µà®¿à®²à¯ à®ªà®´à¯ˆà®¯ à®•à®²à¯à®®à¯à®©à¯ˆ à®µà¯€à®¤à®¿ à®•à®¾à®¤à¯à®¤à®¾à®©à¯à®•à¯à®Ÿà®¿ 2à®®à¯ à®•à¯à®±à®¿à®šà¯à®šà®¿à®¯à®¿à®²à¯ à®¹à®¿à®´à¯à®±à®¿à®¯à¯à®¯à®¾ à®¤à¯ˆà®•à¯à®•à®¾à®ªà¯ à®ªà®³à¯à®³à®¿à®µà®¾à®¯à®²à¯à®•à¯à®•à¯ à®…à®°à¯à®•à®¿à®²à¯ à®…à®®à¯ˆà®¨à¯à®¤à¯à®³à¯à®³ à®®à®¿à®•à®ªà¯ à®ªà®´à¯ˆà®®à¯ˆ à®µà®¾à®¯à¯à®¨à¯à®¤ à®•à®Ÿà¯à®Ÿà®¿à®Ÿà®™à¯à®•à®³à¯à®Ÿà®©à¯ à®•à®¾à®Ÿà¯à®šà®¿ à®¤à®°à¯à®µà®¤à¯‡ à®®à®Ÿà¯/à®®à®®/à®¹à®¿à®´à¯à®±à®¿à®¯à¯à®¯à®¾ à®µà®¿à®¤à¯à®¤à®¿à®¯à®¾à®²à®¯à®®à¯ à®†à®•à¯à®®à¯.\r\n\r\nà®ªà®´à®®à¯à®ªà¯†à®°à¯à®®à¯ à®µà®°à®²à®¾à®±à¯à®±à¯ˆ à®•à¯Šà®£à¯à®Ÿ à®¤à®©à®¿à®ªà¯à®ªà¯†à®°à¯à®®à¯ à®®à¯à®¸à¯à®²à®¿à®®à¯ à®•à®¿à®°à®¾à®®à®®à®¾à®•à®¿à®¯ à®•à®¾à®¤à¯à®¤à®¾à®©à¯à®•à¯à®Ÿà®¿ à®¨à®•à®°à®¤à¯à®¤à®¿à®©à¯ à®ªà®´à¯ˆà®¯ à®•à®²à¯à®®à¯à®©à¯ˆ à®µà¯€à®¤à®¿à®¯à®¿à®²à¯ à®…à®®à¯ˆà®¨à¯à®¤à¯à®³à¯à®³ à®‡à®ªà¯à®ªà®¾à®Ÿà®šà®¾à®²à¯ˆ 1947à®®à¯ à®†à®£à¯à®Ÿà¯, à®®à®¾à®°à¯à®šà¯ 20à®®à¯ à®¤à®¿à®•à®¤à®¿ à®‡à®ªà¯à®ªà®¿à®°à®¤à¯‡à®š à®¨à®²à®©à¯ à®µà®¿à®°à¯à®®à¯à®ªà®¿à®•à®³à®¿à®©à¯ à®®à¯à®¯à®±à¯à®šà®¿à®¯à®¿à®©à®¾à®²à¯ à®®à®°à¯à®¹à¯à®®à¯ à®šà¯‡à®°à¯ à®°à®¾à®¸à®¿à®•à¯ à®ªà®°à¯€à®Ÿà¯ à®…à®µà®°à¯à®•à®³à®¿à®©à®¾à®²à¯ à®†à®°à®®à¯à®ªà®¿à®¤à¯à®¤à¯ à®µà¯ˆà®•à¯à®•à®ªà¯à®ªà®Ÿà¯à®Ÿà®¤à¯.\r\n\r\nà®ªà®¿à®°à®¤à¯‡à®š à®¨à®²à®®à¯ à®µà®¿à®°à¯à®®à¯à®ªà®¿à®¯à®¾à®²à¯ à®®à®¹à®°à¯‚à®ªà¯ à®¯à¯‚à®šà¯à®ªà¯ à®¹à®¾à®œà®¿à®¯à®¾à®°à¯ à®…à®µà®°à¯à®•à®³à®¿à®©à®¾à®²à¯ à®…à®©à¯à®ªà®³à®¿à®ªà¯à®ªà¯ à®šà¯†à®¯à¯à®¯à®ªà¯à®ªà®Ÿà¯à®Ÿ à®•à®¾à®£à®¿à®¯à®¿à®²à¯ à®¤à®±à¯à®•à®¾à®²à®¿à®•à®®à®¾à®• à®’à®°à¯à®µà®°à¯ˆ à®…à®¤à®¿à®ªà®°à®¾à®• à®•à¯Šà®£à¯à®Ÿà¯ à®ªà®¿à®Ÿà®¿à®•à¯à®•à®ªà¯à®ªà®Ÿà¯à®Ÿà¯ à®ªà®¾à®Ÿà®šà®¾à®²à¯ˆ à®†à®°à®®à¯à®ªà®¤à¯à®¤à®¿à®²à¯ à®šà¯†à®²à¯à®²à®¿à®¯ à®…à®°à®šà®¿à®©à®°à¯ à®®à¯à®¸à¯à®²à®¿à®®à¯ à®•à®²à®µà®©à¯ à®ªà®¾à®Ÿà®šà®¾à®²à¯ˆ à®Žà®©à¯à®± à®ªà¯†à®¯à®°à®¿à®²à¯ à®†à®°à®®à¯à®ªà®¿à®•à¯à®•à®ªà¯à®ªà®Ÿà¯à®Ÿà¯ à®ªà®¿à®©à¯à®©à®°à¯ à®®à®Ÿ/à®®à®®/à®¹à®¿à®´à¯à®±à®¿à®¯à¯à®¯à®¾ à®µà®¿à®¤à¯à®¯à®¾à®²à®¯à®®à¯ à®Žà®© à®ªà¯†à®¯à®°à¯ à®®à®¾à®±à¯à®±à®ªà¯à®ªà®Ÿà¯à®Ÿà¯ à®‡à®©à¯à®©à¯à®®à¯ à®…à®¤à¯‡ à®ªà¯†à®¯à®°à¯ à®•à¯Šà®£à¯à®Ÿà¯ à®‡à®¯à®™à¯à®•à®¿ à®µà®°à¯à®•à®¿à®©à¯à®±à®¤à¯.', 'Logo size 1.jpg', 1),
(11, 'Why You Need to Choose Our School', 'sFS', 'communication n.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `PhoneNumber` varchar(13) NOT NULL,
  `Message` text NOT NULL,
  `read_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `FullName`, `Email`, `PhoneNumber`, `Message`, `read_status`) VALUES
(84, 'Abdullah', 'Afmglobaltech@gmail.com', '758866770', 'I\'m Abdullah ', 1),
(85, 'Insi Kutty ', 'rminsimam@gmail.com', '0757070', 'Hiiii', 1),
(90, 'Rihnis Ahamed', 'sitharihnis@gmail.com', '0754303288', 'Hi Sitha Rihnis Whats Your Name', 1);

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `id` int(11) NOT NULL,
  `by_upload` text NOT NULL,
  `subject` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `file` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`id`, `by_upload`, `subject`, `description`, `file`, `status`) VALUES
(11, 'afm', 'DBMS', 'DBMS', 'Private Network.pdf', 1),
(12, 'staffuser', 'network', 'network', 'Network Class Notes 5_IP Address.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `usertype` varchar(12) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `index_or_staff` varchar(5) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `image` text NOT NULL,
  `u_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resend`
--

CREATE TABLE `resend` (
  `id` int(11) NOT NULL,
  `ind` varchar(11) NOT NULL,
  `mail` text NOT NULL,
  `pin` int(6) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resend`
--

INSERT INTO `resend` (`id`, `ind`, `mail`, `pin`, `created_time`) VALUES
(36, '78965', 'abc@sample', 189183, '2023-04-26 08:52:35'),
(37, '12578', 'afmglobaltech@gmail.com', 394013, '2023-05-23 04:50:05');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `Index_no` int(6) NOT NULL,
  `Exam_index` int(20) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `year` text NOT NULL,
  `Tamil` varchar(2) NOT NULL,
  `English` varchar(2) NOT NULL,
  `Mathematics` varchar(2) NOT NULL,
  `Science` varchar(2) NOT NULL,
  `History` varchar(2) NOT NULL,
  `Islam` varchar(2) NOT NULL,
  `first` varchar(40) NOT NULL,
  `first_re` varchar(2) NOT NULL,
  `second` varchar(40) NOT NULL,
  `sec_re` varchar(2) NOT NULL,
  `third` varchar(40) NOT NULL,
  `third_re` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `Index_no`, `Exam_index`, `NIC`, `year`, `Tamil`, `English`, `Mathematics`, `Science`, `History`, `Islam`, `first`, `first_re`, `second`, `sec_re`, `third`, `third_re`) VALUES
(6, 12123, 2121654, '200021902930', '2016-12', 'C', 'S', 'S', 'S', 'C', 'A', 'Health Science', 'B', 'Civic', 'C', 'Tamil Lit', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

CREATE TABLE `schedule_list` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(6, 'Presentation', 'About Our Web Programming ', '2023-02-03 09:30:00', '2023-02-03 10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(5) NOT NULL,
  `staff_no` int(5) NOT NULL,
  `first_nm` varchar(20) NOT NULL,
  `last_nm` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `mail` varchar(35) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `appoinment_date` date NOT NULL,
  `staff_cate` varchar(15) NOT NULL,
  `date_of_join` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staff_no`, `first_nm`, `last_nm`, `address`, `nic`, `mail`, `contact_no`, `appoinment_date`, `staff_cate`, `date_of_join`) VALUES
(35, 12124, 'MJ', 'Abdullah', 'Maruthamunai Akbar Road', '12123003365', 'sirajdheebaana@gmail.com', '0776161794', '2023-02-23', 'Accadamic Staff', '2023-02-15'),
(36, 45666, 'Staff ', 'User', 'cCZXCVZxvvc', '555555555555', 'VTA@GMAIL.COM', '075445442', '2023-04-12', 'Accadamic Staff', '2023-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(8) NOT NULL,
  `index_no` int(8) NOT NULL,
  `first_nm` varchar(20) NOT NULL,
  `last_nm` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `birtherificate_no` varchar(10) NOT NULL,
  `emrg_con_no` varchar(10) NOT NULL,
  `doj` date NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `index_no`, `first_nm`, `last_nm`, `dob`, `address`, `birtherificate_no`, `emrg_con_no`, `doj`, `gender`) VALUES
(33, 22, 'keerthana', 'stephen', '2001-03-20', '335/21. kanager road .navatkuhda baaticalo', '1234', '0652053637', '2007-02-12', 'Female'),
(34, 1, 'gobi', 'deventham', '1998-11-01', 'batticaloa', '654', '0765432902', '2001-04-02', 'Male'),
(35, 4, 'afry ', 'mohamad', '2000-06-15', 'new katankudy batticalo', '345', '0786543223', '2006-09-04', 'Male'),
(36, 3, 'vaishnavi', 'uyytre', '1988-09-21', 'kalady baatticalo', '098', '0653487654', '2000-09-08', 'Female'),
(37, 17, 'insiman', 'mohamad', '1988-05-31', 'kattankudy', '35768', '2377698089', '1888-09-08', 'Male'),
(38, 8, 'althaf', 'mohamad', '1987-10-09', '43 kattankudy batticalao', '123', '0945344687', '1999-04-23', 'Male'),
(39, 9, 'tharshan', 'tharshan', '0000-00-00', 'kallady baaticalao', '234576', '0987654433', '2001-09-04', 'Male'),
(40, 340000, 'thamya', 'thamya', '1987-12-31', '32,kalady batticalo', '0987', '0987345678', '2003-08-31', 'Female'),
(41, 23, 'asfara', 'asfara', '1988-11-28', 'baaticalo', '9876', '0987654326', '2023-03-01', 'Female'),
(42, 24, 'Laal', 'Ji', '2023-02-07', 'Kurukkalmadam', '2548', '6484135458', '2023-01-29', 'Male'),
(43, 12123, 'Rihnis', 'Ahamed', '2023-02-23', '220 al-hambra Road Maruthamunai', '200021', '0754303288', '2023-02-13', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `index_or_staff` varchar(5) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `image` text NOT NULL,
  `u_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `First_Name`, `Last_Name`, `dob`, `Gender`, `email`, `phone`, `username`, `password`, `usertype`, `created_time`, `index_or_staff`, `NIC`, `image`, `u_status`) VALUES
(32, 'MJ', 'Abdullah', '2001-12-20', 'Male', 'afmglobaltech1@gmail.com', '0750406666', 'afm', '71mS2mw6FA25Fg==', 'ADMIN', '2022-12-27 12:41:06', '12123', '200000000000', 'sunglasses-brown-case-grey-surface.jpg', 1),
(62, 'Abdullah ', 'Abdullah ', '2001-12-20', 'Male', 'abdullah@gmail.com', '0750709889', 'abdullah12', '71mS2mw6FA25Fg==', 'ADMINN', '2023-01-31 09:18:04', 'abd12', '200123578955', '61a7-lgdOOL._SX679_.jpg', 1),
(64, 'User ', 'Staff', '2023-04-14', 'Male', 'shvsh@bgh', '0123333333', 'userstaff', 'vgrEnDRjQ1KwHQ==', 'Development Officer', '2023-04-26 14:36:08', '01485', '200147852414', 'male.png', 1),
(66, 'abdullah', 'abdullah', '0000-00-00', 'Male', 'afmglobaltech@gmail.com', '0751234567', 'afm_ab', 'vgrEnDRjQ1KwHQ==', 'Student', '2023-05-23 10:23:07', '12578', '200135502708', 'male.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE `verification` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `usertype` varchar(12) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `index_or_staff` varchar(5) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `image` text NOT NULL,
  `pin` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verification`
--

INSERT INTO `verification` (`ID`, `First_Name`, `Last_Name`, `DOB`, `Gender`, `email`, `phone`, `username`, `password`, `usertype`, `created_time`, `index_or_staff`, `NIC`, `image`, `pin`) VALUES
(84, 'abdullah', 'abdullah', '05/05/2005', 'Male', 'afmglobaltech@gmail.com', '0751234567', 'afm_ab', 'vgrEnDRjQ1KwHQ==', 'Student', '2023-05-23 10:20:05', '12578', '200135502708', 'male.png', 394013);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicationsecon`
--
ALTER TABLE `applicationsecon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guardians`
--
ALTER TABLE `guardians`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stindex` (`index_no`);

--
-- Indexes for table `index_page`
--
ALTER TABLE `index_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `indexorstaff` (`index_or_staff`),
  ADD UNIQUE KEY `unic` (`NIC`);

--
-- Indexes for table `resend`
--
ALTER TABLE `resend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sclindex` (`Index_no`),
  ADD UNIQUE KEY `exam_index` (`Exam_index`),
  ADD UNIQUE KEY `nic` (`NIC`);

--
-- Indexes for table `schedule_list`
--
ALTER TABLE `schedule_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staffid` (`staff_no`),
  ADD UNIQUE KEY `nic` (`nic`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stindex` (`index_no`),
  ADD UNIQUE KEY `certificate_no` (`birtherificate_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `indexorstaff` (`index_or_staff`),
  ADD UNIQUE KEY `unic` (`NIC`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `verification`
--
ALTER TABLE `verification`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `indexorstaff` (`index_or_staff`),
  ADD UNIQUE KEY `unic` (`NIC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicationsecon`
--
ALTER TABLE `applicationsecon`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `index_page`
--
ALTER TABLE `index_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `papers`
--
ALTER TABLE `papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `resend`
--
ALTER TABLE `resend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedule_list`
--
ALTER TABLE `schedule_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `verification`
--
ALTER TABLE `verification`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `autodelete` ON SCHEDULE EVERY 10 SECOND STARTS '2022-12-01 18:32:30' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM verification WHERE created_time<(now()-INTERVAL 3 minute)$$

CREATE DEFINER=`root`@`locathost` EVENT `autodeleteresend` ON SCHEDULE EVERY 30 SECOND STARTS '2023-01-03 12:13:09' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM resend WHERE created_time<(now()-INTERVAL 5 minute)$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
