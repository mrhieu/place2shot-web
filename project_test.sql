-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2014 at 06:50 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_test`
--
CREATE DATABASE IF NOT EXISTS `project_test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project_test`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `comment` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `photo_id`, `name`, `comment`, `created`, `modified`) VALUES
(8, 4, 13, 'hihi', 'haha', '2014-07-09 04:10:26', '2014-07-13 09:22:13'),
(10, 4, 18, 'hihihi', 'abc new', '2014-07-09 05:31:08', '2014-07-13 09:22:20'),
(11, 4, 19, 'sorry', 'fjasjfas', '2014-07-09 05:34:10', '2014-07-13 09:22:29'),
(13, 3, 8, '', 'hahahahahahahaah', '2014-07-09 07:14:26', '2014-07-09 07:14:26'),
(14, 3, 9, '', 'hihihihihhihi\r\n', '2014-07-09 07:20:20', '2014-07-09 07:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`) VALUES
(1, 'landscape'),
(2, 'animals');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `active` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `img_file` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `img_file`, `description`, `created`, `modified`, `user_id`, `gallery_id`) VALUES
(36, 'anh1', '.jpg', 'anh1', '2014-07-22 05:07:59', '2014-07-22 05:07:59', 6, 1),
(37, 'anh2', '3d_landscape_41_1920x1200.jpg', 'anh2', '2014-07-22 05:08:14', '2014-07-22 05:08:14', 6, 1),
(39, 'anh3 ', '512.jpg', 'anh3', '2014-07-22 05:08:45', '2014-07-22 05:08:45', 6, 1),
(40, 'anh4', '1920x1080_motocross_hd_wallpapers.jpg', 'anh4', '2014-07-22 05:08:59', '2014-07-22 05:08:59', 6, 1),
(41, 'anh5', '2013_land_rover_range_rover_4_1920x1200.jpg', 'anh5', '2014-07-22 05:09:12', '2014-07-22 05:09:12', 6, 1),
(42, 'anh6', '11398_Rose_3.jpg', 'anh6', '2014-07-22 05:09:27', '2014-07-22 05:09:27', 6, 1),
(43, 'anh7', '151348.jpg', 'anh7', '2014-07-22 05:09:52', '2014-07-22 05:09:52', 6, 1),
(44, 'anh8', '153694.jpg', 'anh8', '2014-07-22 05:10:04', '2014-07-22 05:10:04', 6, 1),
(45, 'anh9', '154447_1.jpg', 'anh9', '2014-07-22 05:10:34', '2014-07-22 05:10:34', 6, 1),
(47, 'Anh10', 'chinese_model_hd_wallpaper.jpg', 'anh10', '2014-07-22 06:42:48', '2014-07-22 06:42:48', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(64) NOT NULL,
  `avata` varchar(255) NOT NULL,
  `roles` enum('admin','regular') NOT NULL DEFAULT 'regular',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `username`, `password`, `gender`, `avata`, `roles`, `created`, `modified`) VALUES
(3, 'pandpro@yahoo.com', 'Admintrator', 'admin', '51a612430009eceebbe93d6edd460ec115704a93', 'male', 'images_5.jpg', 'admin', '2014-07-06 04:35:06', '2014-07-21 03:05:37'),
(6, 'hello1@yahoo.com', 'trung2', 'trung2', '51a612430009eceebbe93d6edd460ec115704a93', 'male', 'audrina_patridge_1600x1200.jpg', 'regular', '2014-07-07 07:10:28', '2014-07-22 06:46:22'),
(7, 'hellovietnam93@yahoo.com', 'trung4', 'trung4', '51a612430009eceebbe93d6edd460ec115704a93', 'male', 'medium_7ca81754f156485eb7f92956977b774f_400.jpg', 'regular', '2014-07-07 07:28:52', '2014-07-21 02:46:38'),
(8, 'pandapro2@yahoo.com', 'trung5', 'trung5', '51a612430009eceebbe93d6edd460ec115704a93', 'male', 'medium_4eabb2dca0b940679b2352a2ad017d0a_650.jpg', 'regular', '2014-07-07 08:30:23', '2014-07-21 02:52:22'),
(9, 'pandapro7@gmail.com', 'trung7', 'trung7', '51a612430009eceebbe93d6edd460ec115704a93', 'male', 'medium_1d6a055576da4c2297eb5caa8bd1ef8e_400.jpg', 'regular', '2014-07-09 02:30:47', '2014-07-21 03:03:05'),
(10, 'pandapro8@yahoo.com', 'trung8', 'trung8', '51a612430009eceebbe93d6edd460ec115704a93', 'female', 'medium_7813bc78ec5d4b8cb7ade772659a190e_650.jpg', 'regular', '2014-07-09 02:32:22', '2014-07-21 03:04:48'),
(11, 'pandpro123@yahoo.com', 'trung123456', 'trung123456', '51a612430009eceebbe93d6edd460ec115704a93', 'male', 'medium_87d37dbddc00423e8b6f4bc2f6361226_400.jpg', 'regular', '2014-07-16 09:51:52', '2014-07-21 03:03:30'),
(12, 'huudt.3012@gmail.com', '', 'huudo', '51a612430009eceebbe93d6edd460ec115704a93', '', '', 'regular', '2014-07-22 06:46:57', '2014-07-22 06:46:57');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
