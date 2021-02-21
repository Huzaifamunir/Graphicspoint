-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 06:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin'),
(2, 'zeeshan', 'zeeshan@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `product_id` varchar(11) DEFAULT NULL,
  `user_id` varchar(11) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `comments` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `product_id`, `user_id`, `user_name`, `comments`) VALUES
(1, NULL, NULL, NULL, 'sadas'),
(2, NULL, '', NULL, 'sadsa'),
(3, NULL, '7', NULL, 'asas'),
(4, NULL, '7', 'Huzaifa', 'dsdasd'),
(5, '36', '7', 'Huzaifa', 'asdasd'),
(6, '36', '7', 'Huzaifa', 'asdasd'),
(7, '36', '7', 'Huzaifa', 'asdasd'),
(8, '36', '7', 'Huzaifa', 'asasas'),
(9, '34', '7', 'Huzaifa', 'as'),
(10, '34', '7', 'Huzaifa', 'qq'),
(11, '34', '7', 'Huzaifa', 'assas'),
(12, '34', '7', 'Huzaifa', 'assas'),
(13, '50', '7', 'Huzaifa', 'a'),
(14, '50', '7', 'Huzaifa', 'b'),
(15, '45', '7', 'Huzaifa', 'as'),
(16, '45', '7', 'Huzaifa', 'dsad'),
(17, '51', '7', 'Huzaifa', 'as'),
(18, '44', '7', 'Huzaifa', 'asa'),
(19, '44', '7', 'Huzaifa', 'ds'),
(20, '44', '7', 'Huzaifa', 'ds'),
(21, '44', '7', 'Huzaifa', 'ads'),
(22, '48', '7', 'Huzaifa', 'as'),
(23, '48', '7', 'Huzaifa', 'sdsd'),
(24, '48', '7', 'Huzaifa', 'sdsd'),
(25, '48', '7', 'Huzaifa', 'sdsd'),
(26, '48', '7', 'Huzaifa', 'das'),
(27, '48', '7', 'Huzaifa', 'das'),
(28, '51', '7', 'Huzaifa', 'asdas'),
(29, '51', '8', 'usama', 'asass'),
(30, '51', '8', 'usama', 'asassfddfsdf'),
(31, '51', '8', 'usama', 'asassfddfsdfdsafdsfads'),
(32, '48', '7', 'Huzaifa', 'rt6yui'),
(33, '48', '7', 'Huzaifa', 'edsx'),
(34, '48', '7', 'Huzaifa', 'edsx'),
(35, '48', '8', 'usama', 'w'),
(36, '48', '8', 'usama', 'w'),
(37, '48', '8', 'usama', 'w'),
(38, '48', '8', 'usama', 'fesda'),
(39, '7', '7', 'Huzaifa', 'dsafsjdkfasdf'),
(40, '7', '7', 'Huzaifa', 'dsafsjdkfasdf'),
(41, '7', '7', 'Huzaifa', 'dsafsjdkfasdf'),
(42, '7', '12', 'zeeshan', 'nice design'),
(43, '7', '7', 'Huzaifa', 'fds');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `msg`) VALUES
(3, 'dsfasd', 'khuzaifamunir123@gmail.com', 'sasds'),
(7, 'huzaifa', 'ibi@gmail.com', 'dsads');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `userid` varchar(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `dimension` varchar(100) NOT NULL,
  `extension` varchar(50) NOT NULL,
  `license` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `vector` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `userid`, `category`, `productname`, `description`, `dimension`, `extension`, `license`, `image`, `vector`) VALUES
(43, '', 'b', 'av', 'fgdhfgh', 'few', 'psd', 'fdfsd', '1608454166.Screenshot_2020-10-13 AdminLTE 3 Fixed Sidebar.png', '1608454166.Screenshot_2020-10-13 AdminLTE 3 Fixed Sidebar.png'),
(44, '7', 'a', 'a', 'dsad', 'das', 'ai', 'bbbb', '1608454210.index.jpeg', '1608454210.index.png'),
(45, '', 'a', 'a', 'sadas', 'a', 'xd', 'sd', '1608398834.Scan2.jpg', '1608398834.index.png'),
(48, '7', 'dsaf', 'adsf', 'sdaf', 'asdf', 'ai', 'asdf', '1608693998.11.jpeg', '1608693998.11.jpeg'),
(50, '7', 'bjg', 'jgvhq', 'kh.kq', '465', 'psd', 'jyvjv', '1608704532.UsamaMunir.jpg', '1608704532.pages.txt'),
(51, '7', 'vdfsf', 'fsd', 'dfs', 'few', 'photos', 'few', '1608705299.UsamaMunir.jpg', '1608705299.UsamaMunir.jpg'),
(52, '7', 'vdfsf', 'fsd', 'dfs', 'few', 'xd', 'few', '1608705431.UsamaMunir.jpg', '1608705431.UsamaMunir.jpg'),
(53, '7', 'fsd', 'fsd', 'fwe', '3', 'xd', '432', '1608706333.nayatel.PNG', '1608706333.CV.pdf'),
(54, '7', 'a', 'a', 'sadas', 'a', 'ai', 'sd', '1608398834.Scan2.jpg', '1608398834.index.png'),
(55, '7', 'a', 'a', 'dsad', 'das', 'ai', 'bbbb', '1608454210.index.jpeg', '1608454210.index.png'),
(56, '', 'a', 'a', 'dsad', 'das', 'ai', 'bbbb', '1608454210.index.jpeg', '1608454210.index.png'),
(57, '', 'a', 'a', 'sadas', 'a', 'ai', 'sd', '1608398834.Scan2.jpg', '1608398834.index.png'),
(60, '', 'b', 'av', 'fgdhfgh', 'few', 'psd', 'fdfsd', '1608454166.Screenshot_2020-10-13 AdminLTE 3 Fixed Sidebar.png', '1608454166.Screenshot_2020-10-13 AdminLTE 3 Fixed Sidebar.png'),
(61, '', 'a', 'a', 'sadas', 'a', 'psd', 'sd', '1608398834.Scan2.jpg', '1608398834.index.png'),
(62, '', 'b', 'av', 'fgdhfgh', 'few', 'psd', 'fdfsd', '1608454166.Screenshot_2020-10-13 AdminLTE 3 Fixed Sidebar.png', '1608454166.Screenshot_2020-10-13 AdminLTE 3 Fixed Sidebar.png'),
(63, '7', 'bjg', 'jgvhq', 'kh.kq', '465', 'psd', 'jyvjv', '1608704532.UsamaMunir.jpg', '1608704532.pages.txt'),
(70, '', 'a', 'a', 'sadas', 'a', 'xd', 'sd', '1608398834.Scan2.jpg', '1608398834.index.png'),
(71, '7', 'vdfsf', 'fsd', 'dfs', 'few', 'xd', 'few', '1608705431.UsamaMunir.jpg', '1608705431.UsamaMunir.jpg'),
(72, '7', 'fsd', 'fsd', 'fwe', '3', 'xd', '432', '1608706333.nayatel.PNG', '1608706333.CV.pdf'),
(73, '', 'b', 'av', 'fgdhfgh', 'few', 'psd', 'fdfsd', '1608454166.Screenshot_2020-10-13 AdminLTE 3 Fixed Sidebar.png', '1608454166.Screenshot_2020-10-13 AdminLTE 3 Fixed Sidebar.png'),
(74, '', 'a', 'a', 'sadas', 'a', 'psd', 'sd', '1608398834.Scan2.jpg', '1608398834.index.png'),
(75, '', 'b', 'av', 'fgdhfgh', 'few', 'psd', 'fdfsd', '1608454166.Screenshot_2020-10-13 AdminLTE 3 Fixed Sidebar.png', '1608454166.Screenshot_2020-10-13 AdminLTE 3 Fixed Sidebar.png'),
(76, '7', 'bjg', 'jgvhq', 'kh.kq', '465', 'psd', 'jyvjv', '1608704532.UsamaMunir.jpg', '1608704532.pages.txt'),
(77, '', 'b', 'av', 'fgdhfgh', 'few', 'psd', 'fdfsd', '1608454166.Screenshot_2020-10-13 AdminLTE 3 Fixed Sidebar.png', '1608454166.Screenshot_2020-10-13 AdminLTE 3 Fixed Sidebar.png'),
(78, '', 'a', 'a', 'sadas', 'a', 'psd', 'sd', '1608398834.Scan2.jpg', '1608398834.index.png'),
(79, '', 'b', 'av', 'fgdhfgh', 'few', 'psd', 'fdfsd', '1608454166.Screenshot_2020-10-13 AdminLTE 3 Fixed Sidebar.png', '1608454166.Screenshot_2020-10-13 AdminLTE 3 Fixed Sidebar.png'),
(80, '7', 'bjg', 'jgvhq', 'kh.kq', '465', 'psd', 'jyvjv', '1608704532.UsamaMunir.jpg', '1608704532.pages.txt'),
(81, '', 'b', 'av', 'fgdhfgh', 'few', 'xd', 'fdfsd', '1608454166.Screenshot_2020-10-13 AdminLTE 3 Fixed Sidebar.png', '1608454166.Screenshot_2020-10-13 AdminLTE 3 Fixed Sidebar.png'),
(82, '', 'b', 'av', 'fgdhfgh', 'few', 'xd', 'fdfsd', '1608454166.Screenshot_2020-10-13 AdminLTE 3 Fixed Sidebar.png', '1608454166.Screenshot_2020-10-13 AdminLTE 3 Fixed Sidebar.png'),
(83, '', 'a', 'a', 'sadas', 'a', 'xd', 'sd', '1608398834.Scan2.jpg', '1608398834.index.png'),
(84, '7', 'vdfsf', 'fsd', 'dfs', 'few', 'xd', 'few', '1608705431.UsamaMunir.jpg', '1608705431.UsamaMunir.jpg'),
(85, '7', 'fsd', 'fsd', 'fwe', '3', 'xd', '432', '1608706333.nayatel.PNG', '1608706333.CV.pdf'),
(86, '', 'a', 'a', 'sadas', 'a', 'xd', 'sd', '1608398834.Scan2.jpg', '1608398834.index.png'),
(87, '7', 'vdfsf', 'fsd', 'dfs', 'few', 'xd', 'few', '1608705431.UsamaMunir.jpg', '1608705431.UsamaMunir.jpg'),
(88, '7', 'fsd', 'fsd', 'fwe', '3', 'xd', '432', '1608706333.nayatel.PNG', '1608706333.CV.pdf'),
(89, '7', 'fds', 'dfs', 'dvs', 'dfs', 'fds', 'dsf', '1609227999.Codify-01.png', '1609227999.Codify-01.png'),
(90, '7', 'fds', 'dfs', 'dvs', 'dfs', 'fds', 'dsf', '1609228116.Codify-01.png', '1609228116.Codify-01.png'),
(91, '7', 'fds', 'few', '3rwerwer', 'rew', 'erw', 'rew', '1609228159.Codify1-01.png', '1609228159.Codify-01.png'),
(92, '7', 'eeeee', 'eeeeee', 'eeeeeee', 'eeeee', 'eeeee', 'eeeee', '1609303827.Capture.PNG', '1609303827.fill+pause+icon-1320184953022604687.png'),
(93, '7', 'rrrr', 'rrrrrr', 'rrrrrr', 'rrrrrr', 'rrrrrrr', 'rrrrrr', '1609303899.Capture.PNG', '1609303899.fill+pause+icon-1320184953022604687.png'),
(94, '7', 'www', 'www', 'ww', 'ww', 'ww', 'ww', '1609304486.fill+pause+icon-1320184953022604687.png', '1609304486.Capture.PNG'),
(95, '7', 'www', 'www', 'ww', 'ww', 'ww', 'ww', '1609304588_Capture.PNG', '1609304588_fill+pause+icon-1320184953022604687.png'),
(96, '7', 'www', 'www', 'ww', 'ww', 'ww', 'ww', '1609304723_Capture.PNG', '1609304723_fill+pause+icon-1320184953022604687.png'),
(97, '7', 'www', 'www', 'ww', 'ww', 'ww', 'ww', '1609304789_Capture.PNG', '1609304789_fill+pause+icon-1320184953022604687.png'),
(98, '7', 'www', 'www', 'ww', 'ww', 'ww', 'ww', '1609304833_Capture.PNG', '1609304833_fill+pause+icon-1320184953022604687.png'),
(99, '7', 'www', 'www', 'ww', 'ww', 'ww', 'ww', '1609304846_Capture.PNG', '1609304846_fill+pause+icon-1320184953022604687.png'),
(100, '7', 'www', 'www', 'ww', 'ww', 'ww', 'ww', '1609305014_Capture.PNG', '1609305014_fill+pause+icon-1320184953022604687.png'),
(101, '7', 'www', 'www', 'ww', 'ww', 'ww', 'ww', '1609305038_Capture.PNG', '1609305038_fill+pause+icon-1320184953022604687.png'),
(102, '7', 'www', 'www', 'ww', 'ww', 'ww', 'ww', '1609305078_Capture.PNG', '1609305078_fill+pause+icon-1320184953022604687.png'),
(103, '7', 'www', 'www', 'ww', 'ww', 'ww', 'ww', '1609305110_Capture.PNG', '1609305110_fill_pause_icon-1320184953022604687.png'),
(104, '7', 'e3e3e3', 'www', 'ww', 'ww', 'ww', 'ww', '1609305624_Capture.PNG', '1609305624_fill_pause_icon-1320184953022604687.png'),
(105, '7', 'e3e3e3', 'www', 'ww', 'ww', 'ww', 'ww', '1609305930_Capture.PNG', '1609305930_fill_pause_icon-1320184953022604687.png'),
(106, '7', 'e3e3e3', 'www', 'ww', 'ww', 'ww', 'ww', '1609306150_Capture.PNG', '1609306150_CV.pdf'),
(107, '7', 'dsfaf', 'fds', 'fsd', 'fds', 'psd', 'fsd', '1609323207_Capture.PNG', '1609323207_CV.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `expertise` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `descriptions` varchar(500) DEFAULT NULL,
  `fb` varchar(100) DEFAULT NULL,
  `ins` varchar(100) DEFAULT NULL,
  `tw` varchar(100) DEFAULT NULL,
  `pic` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `password`, `phone`, `dob`, `expertise`, `city`, `descriptions`, `fb`, `ins`, `tw`, `pic`) VALUES
(7, 'Huzaifa', 'khuzaifamunir123@gmail.com', 'abc12345', '0313', '2020-12-23', 'laravel', 'da', 'dad', 'dfa', 'dsa', 'dsaf', '1608694052_crop.jpg'),
(11, 'fsedfsd', 'usama_1s@hotmail.com', 'fefdsfds', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'zeeshan', 'zeshanraza1996@gmail.com', 'abc12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tempsignup`
--

CREATE TABLE `tempsignup` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `actpassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempsignup`
--

INSERT INTO `tempsignup` (`id`, `name`, `email`, `password`, `actpassword`) VALUES
(4, 'usama', 'usamamunir1s@gmail.com', 'fdsfsdfs', 'yAOx7r8L9QXEDlM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempsignup`
--
ALTER TABLE `tempsignup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tempsignup`
--
ALTER TABLE `tempsignup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
