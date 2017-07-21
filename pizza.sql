-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2017 at 06:20 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE `customerinfo` (
  `userid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`userid`, `name`, `address`, `phone`) VALUES
('594c961440c4b', 'simham', '478 jack ave', '7433897289'),
('594c95d4cfc92', 'pj', '415 praneeth st', '58454484515'),
('594c95bc12891', 'praneeth', 'jackson ave ', '4533435642'),
('594c95a2c1e4e', 'rushi', 'lee summit', '7744558758'),
('594c957ed13c2', 'jack', '409 JACKSON ST APT B', '6602383701'),
('594c91cbbf34d', 'Naga praneeth ', 'warrensburg missouri', '99639544'),
('594c9252c0a8d', 'praneeth ', 'kanasas city', 'dunnala'),
('594c928ba35bf', 'ravi', '1558 jackson ave washington', '79774488774'),
('594c939831259', 'naga', 'lee summit\r\n', '88785454545'),
('594c944e87c96', 'sai', '411 jackson st apt a', '78784879955'),
('594c94746a9c1', 'kranthi', '418 park avenue washington', '577784587'),
('594c949936757', 'tarun', '1119 harrison ave', '8744578554'),
('594c94c222e58', 'navya', '478 hello ave california', '5887744558'),
('594c94e13f612', 'kumar', 'california', '9878425458'),
('594c94fae6d9c', 'john', '444 jacon avenue', '78754411'),
('594c951c43427', 'kiran', '85 apt a jackson st', '8477485896'),
('594c963c94a5b', 'johnny', '585  jack ave', '8745874457'),
('594c9653469ed', 'praneeth', '8774 jackson st', '89745458525'),
('594c9671b306d', 'dunnala', '185 franklin st apt B', '78748558745'),
('594c9694a5909', 'praneeth', '444 praneeth st', '7845847854');

-- --------------------------------------------------------

--
-- Table structure for table `pizzaorder`
--

CREATE TABLE `pizzaorder` (
  `orderId` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `cost` int(10) NOT NULL,
  `state` varchar(255) NOT NULL,
  `created` varchar(255) NOT NULL,
  `cooked` varchar(255) NOT NULL,
  `delivered` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizzaorder`
--

INSERT INTO `pizzaorder` (`orderId`, `userId`, `cost`, `state`, `created`, `cooked`, `delivered`) VALUES
('5949d2a9327cf', '5949d2a9327bc', 86, '3', '2017-06-21 07:28:01', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594b4c5574231', '594b4c557422d', 56, '3', '2017-06-21 23:49:25', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594b4c58d214e', '594b4c58d214b', 56, '3', '2017-06-21 23:49:28', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594b4c5a4e84e', '594b4c5a4e84b', 56, '3', '2017-06-21 23:49:30', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594b4c5a74b8c', '594b4c5a74b8a', 56, '3', '2017-06-21 23:49:30', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594b4c5aa1f30', '594b4c5aa1f2d', 56, '3', '2017-06-21 23:49:30', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594b4c5c78f36', '594b4c5c78f33', 56, '3', '2017-06-21 23:49:32', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594b4c611fdce', '594b4c611fdcc', 56, '3', '2017-06-21 23:49:37', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594b4c614674b', '594b4c6146748', 56, '3', '2017-06-21 23:49:37', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594b4c616a569', '594b4c616a566', 56, '3', '2017-06-21 23:49:37', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594b4c6199497', '594b4c6199494', 56, '3', '2017-06-21 23:49:37', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594c8dacc8843', '594c8dacc883b', 56, '3', '2017-06-22 22:40:29', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594c91cbbf351', '594c91cbbf34d', 0, '3', '2017-06-22 22:58:03', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594c9252c0a90', '594c9252c0a8d', 0, '3', '2017-06-22 23:00:18', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594c928ba35c2', '594c928ba35bf', 0, '3', '2017-06-22 23:01:15', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594c93983125c', '594c939831259', 0, '3', '2017-06-22 23:05:44', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594c944e87c9a', '594c944e87c96', 0, '3', '2017-06-22 23:08:46', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594c94746a9c6', '594c94746a9c1', 0, '3', '2017-06-22 23:09:24', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594c94993675d', '594c949936757', 0, '3', '2017-06-22 23:10:01', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594c94c222e5c', '594c94c222e58', 0, '3', '2017-06-22 23:10:42', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594c94e13f617', '594c94e13f612', 0, '3', '2017-06-22 23:11:13', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594c94fae6da0', '594c94fae6d9c', 0, '3', '2017-06-22 23:11:38', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594c951c4342a', '594c951c43427', 0, '3', '2017-06-22 23:12:12', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594c957ed13c6', '594c957ed13c2', 0, '3', '2017-06-22 23:13:50', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594c95a2c1e51', '594c95a2c1e4e', 0, '3', '2017-06-22 23:14:26', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594c95bc12894', '594c95bc12891', 0, '3', '2017-06-22 23:14:52', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594c95d4cfc95', '594c95d4cfc92', 0, '3', '2017-06-22 23:15:16', '2017-06-22 23:15:39', '2017-06-22 23:19:15'),
('594c961440c4f', '594c961440c4b', 0, '3', '2017-06-22 23:16:20', '', '2017-06-22 23:19:15'),
('594c963c94a5e', '594c963c94a5b', 0, '3', '2017-06-22 23:17:00', '', '2017-06-22 23:19:15'),
('594c9653469f1', '594c9653469ed', 0, '3', '2017-06-22 23:17:23', '', '2017-06-22 23:19:15'),
('594c9671b3071', '594c9671b306d', 0, '3', '2017-06-22 23:17:53', '', '2017-06-22 23:19:15'),
('594c9694a590c', '594c9694a5909', 0, '3', '2017-06-22 23:18:28', '', '2017-06-22 23:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `pizzaorderinfo`
--

CREATE TABLE `pizzaorderinfo` (
  `id` varchar(255) NOT NULL,
  `orderId` varchar(255) NOT NULL,
  `sauce` varchar(255) NOT NULL,
  `cheese` varchar(255) NOT NULL,
  `toppings` varchar(255) NOT NULL,
  `countOfToppings` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizzaorderinfo`
--

INSERT INTO `pizzaorderinfo` (`id`, `orderId`, `sauce`, `cheese`, `toppings`, `countOfToppings`) VALUES
('5949d2a9327d9', '5949d2a9327cf', 'Ranch', 'Normal Cheese', '<br>Chicken<br>Bacon', 2),
('594b4c5574232', '594b4c5574231', '1', '1', '<br>Chicken<br>Bacon', 2),
('594b4c58d214e', '594b4c58d214e', '1', '1', '<br>Chicken<br>Bacon', 2),
('594b4c5a4e84f', '594b4c5a4e84e', '1', '1', '<br>Chicken<br>Bacon', 2),
('594b4c5a74b8d', '594b4c5a74b8c', '1', '1', '<br>Chicken<br>Bacon', 2),
('594b4c5aa1f31', '594b4c5aa1f30', '1', '1', '<br>Chicken<br>Bacon', 2),
('594b4c5c78f36', '594b4c5c78f36', '1', '1', '<br>Chicken<br>Bacon', 2),
('594b4c611fdcf', '594b4c611fdce', '1', '1', '<br>Chicken<br>Bacon', 2),
('594b4c614674c', '594b4c614674b', '1', '1', '<br>Chicken<br>Bacon', 2),
('594b4c616a56a', '594b4c616a569', '1', '1', '<br>Chicken<br>Bacon', 2),
('594b4c6199498', '594b4c6199497', '1', '1', '<br>Chicken<br>Bacon', 2),
('594c8dacc8844', '594c8dacc8843', '1', '1', '<br>Chicken<br>Bacon', 2),
('594c91cbbf352', '594c91cbbf351', '1', '1', '<br>Chicken<br>Bacon<br>Cheddar Cheese', 3),
('594c9252c0a91', '594c9252c0a90', '3', '1', '<br>Chicken<br>Banana Peppers<br>Green Peppers', 3),
('594c928ba35c3', '594c928ba35c2', '3', '1', '<br>Banana Peppers<br>Onions', 2),
('594c93983125e', '594c93983125c', '1', '1', '<br>Chicken<br>Cheddar Cheese<br>Banana Peppers<br>Green Peppers', 4),
('594c944e87c9c', '594c944e87c9a', '1', '1', '<br>Bacon<br>Cheddar Cheese', 2),
('594c94746a9c7', '594c94746a9c6', '2', '1', '<br>Cheddar Cheese<br>Green Peppers', 2),
('594c94993675e', '594c94993675d', '1', '1', '<br>Cheddar Cheese<br>Green Peppers', 2),
('594c94c222e5d', '594c94c222e5c', '1', '3', '<br>Chicken<br>Banana Peppers', 2),
('594c94e13f618', '594c94e13f617', '3', '4', '<br>Chicken<br>Cheddar Cheese', 2),
('594c94fae6da1', '594c94fae6da0', '1', '1', '<br>Bacon<br>Green Peppers', 2),
('594c951c4342c', '594c951c4342a', '1', '1', '<br>Banana Peppers<br>Green Peppers', 2),
('594c957ed13c7', '594c957ed13c6', '1', '1', '<br>Chicken<br>Cheddar Cheese<br>Onions', 3),
('594c95a2c1e53', '594c95a2c1e51', '1', '1', '<br>Chicken<br>Banana Peppers<br>Green Peppers', 3),
('594c95bc12895', '594c95bc12894', '1', '1', '<br>Cheddar Cheese<br>Green Peppers', 2),
('594c95d4cfc96', '594c95d4cfc95', '1', '1', '<br>Cheddar Cheese<br>Onions', 2),
('594c961440c50', '594c961440c4f', '1', '1', '<br>Banana Peppers<br>Onions', 2),
('594c963c94a5f', '594c963c94a5e', '1', '1', '<br>Cheddar Cheese<br>Green Peppers', 2),
('594c9653469f3', '594c9653469f1', '1', '1', '<br>Cheddar Cheese<br>Green Peppers', 2),
('594c9671b3072', '594c9671b3071', '1', '1', '<br>Chicken<br>Bacon<br>Cheddar Cheese<br>Banana Peppers<br>Green Peppers<br>Onions', 6),
('594c9694a590c', '594c9694a590c', '1', '3', '<br>Chicken<br>Bacon<br>Cheddar Cheese<br>Banana Peppers<br>Green Peppers<br>Onions', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `pizzaorder`
--
ALTER TABLE `pizzaorder`
  ADD PRIMARY KEY (`orderId`),
  ADD UNIQUE KEY `orderId` (`orderId`);

--
-- Indexes for table `pizzaorderinfo`
--
ALTER TABLE `pizzaorderinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
