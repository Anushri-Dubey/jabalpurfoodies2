-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2017 at 11:32 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jabalpurfoodies`
--

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `images` longtext NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `menu` longtext NOT NULL,
  `speciality` enum('Chinese','Punjabi','Breakfast','Snacks','Dinner','Lunch') NOT NULL,
  `pick` enum('0','1') NOT NULL,
  `locality` varchar(100) NOT NULL,
  `cost_for_2` int(11) NOT NULL,
  `published` enum('0','1') NOT NULL,
  `typeofrestro` enum('veg','non-veg') NOT NULL,
  `rating` float(10,3) NOT NULL,
  `restro` enum('5-star','3-star','pub','bar','cafe') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `description`, `images`, `address`, `contact_no`, `lat`, `lng`, `menu`, `speciality`, `pick`, `locality`, `cost_for_2`, `published`, `typeofrestro`, `rating`, `restro`) VALUES
(1, 'downtown', 'great restaurant fixed rate best taste great selfie area for taking photos ', 'http://localhost/jabalpurfoodies/frontend/img/i3.jpg,\r\nhttp://localhost/jabalpurfoodies/frontend/img/i6.jpg', '24 lic vijaynagar', '9425466873', 23.191, 79.9053, '', 'Chinese', '1', 'vijaynagar', 550, '0', 'veg', 4.300, '5-star'),
(2, 'greenland', 'have higher rating among all restautrant', 'http://localhost/jabalpurfoodies/frontend/img/i6.jpg', 'gol bazar jabalpur', '9993216911', 3.245, 48.908, '', '', '1', 'golbazar', 250, '1', 'veg', 3.300, '3-star'),
(3, 'simran hotel', 'costly but best restaurant you can get great variety food as well as hygnic too', 'http://localhost/jabalpurfoodies/frontend/img/i2.jpg', 'Mahaveer nagar jabalpur', '9993345678', 39.245, 40.908, '', 'Dinner', '1', 'mahaveer nagar', 950, '1', 'non-veg', 2.300, '3-star'),
(4, 'radhika ', 'used for event mostly great service at minimum cost ', 'http://localhost/jabalpurfoodies/frontend/img/i7.jpg', 'vijaynagar jabalpur', '9993346473', 13.245, 8.908, '', 'Punjabi', '0', 'vijaynagar', 1150, '1', 'non-veg', 3.500, '3-star'),
(5, 'Indian Coffee House', 'best place hygnic serving and its a family restaurant at affordable cost', 'http://localhost/jabalpurfoodies/frontend/img/i1.jpg', '234 near raisen road vijaynagar jabalpur', '9993346473', 213.245, 88.908, '', 'Chinese', '0', 'vijaynagar', 1550, '1', 'veg', 4.100, '3-star'),
(6, 'starbucks', 'great place best coffee server quit costly but best', 'http://localhost/jabalpurfoodies/frontend/img/strbk2.jpg', 'civil lines jabalpur', '9993456711', 153.245, 84.908, '', 'Dinner', '0', 'golbazar', 950, '1', 'non-veg', 4.900, 'cafe'),
(7, 'priyanka dabha', 'worst taste ever any body have gone through', 'http://localhost/jabalpurfoodies/frontend/img/i6.jpg', 'civil lines jabalpur', '9993456711', 500.245, 84.908, '', 'Punjabi', '0', 'golbazar', 650, '1', 'non-veg', 2.900, 'pub'),
(8, 'jasmine', 'as beautiful as jasmine flower\r\naffordable cost and great taste', 'http://localhost/jabalpurfoodies/frontend/img/i4.jpg', 'gol ganpathiraju jabalpur', '99345555911', 13.2465, 98.908, '', 'Snacks', '0', 'sarafa bazar', 399, '1', 'non-veg', 3.600, '3-star'),
(9, 'Dominos', 'best pizza servers and great service motive is to make customer happy', 'http://localhost/jabalpurfoodies/frontend/img/dominos.jpg', 'gol bazar jabalpur', '993478921', 63.2465, 92.9028, '', '', '0', 'labour chowk', 599, '1', 'non-veg', 3.900, '3-star');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `comment`, `likes`, `dislikes`, `user_id`, `restaurant_id`, `rating`) VALUES
(1, 'dear anushri dubey what up !!!! ', 0, 0, 0, 0, 0),
(2, 'rear pic of him or her give great amusement my god give us great soul', 0, 0, 0, 0, 0),
(11, '', 1, 0, 0, 0, 0),
(12, 'vusyd,mx za,mx', 0, 0, 0, 1, 0),
(13, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 1, 1, 0, 1, 0),
(16, 'ooking for the best whatsapp status to make someone smile, feel loved and express your thoughts and feelings? here you can find just the best Whatsapp Status quotes that will be the best way for you to express', 0, 1, 0, 4, 0),
(17, 'Humility is attentive patience.\r\nGenius is eternal patience.\r\n\r\nOur patience will achieve more than our force.\r\n\r\nHumility is attentive patience.\r\n\r\nWise to resolve, and patient to perform.\r\n\r\nIâ€™m patient.\r\n\r\nPositive anything is better than negative nothing.', 2, 1, 0, 1, 0),
(18, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex', 2, 0, 0, 5, 0),
(19, 'The science of today is the technology of tomorrow.\r\n\r\nI have not failed. Iâ€™ve just found 10,000 ways that wonâ€™t work.\r\n\r\nIf you have a garden and a library, you have everything you need.\r\n\r\nJoy is the simplest form of gratitude.\r\n\r\nNo duty is more urgent than that of returning thanks.\r\n\r\nEducation is the most powerful weapon which you can use to change the world.', 3, 1, 0, 4, 0),
(20, 'I knew it gonna be there\r\n', 0, 0, 0, 4, 0),
(21, 'let is it working or not if then great achievement ever \r\n', 0, 0, 0, 4, 0),
(23, 'neha is great girl\r\n', 0, 2, 0, 1, 0),
(24, 'let see is delete working or not', 0, 0, 0, 1, 0),
(25, 'dear what happen now', 0, 0, 0, 4, 0),
(26, 'dear let see who have already done with it', 0, 0, 0, 1, 0),
(27, 'We have enjoyed in simran hotel a allot ', 0, 0, 0, 3, 0),
(28, ',kxhksd ,zewklr lkdjwj', 0, 0, 0, 4, 0),
(29, 'great experience', 1, 1, 0, 1, 0),
(30, 'festf', 0, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` enum('admin','normal') NOT NULL,
  `profile_pic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
