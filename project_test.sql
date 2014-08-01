-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 01 Août 2014 à 04:23
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `project_test`
--
CREATE DATABASE IF NOT EXISTS `project_test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project_test`;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `class` varchar(128) NOT NULL,
  `comment` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `photo_id`, `class`, `comment`, `created`, `modified`) VALUES
(8, 4, 13, 'hihi', 'haha', '2014-07-09 04:10:26', '2014-07-13 09:22:13'),
(10, 4, 18, 'hihihi', 'abc new', '2014-07-09 05:31:08', '2014-07-13 09:22:20'),
(11, 4, 19, 'sorry', 'fjasjfas', '2014-07-09 05:34:10', '2014-07-13 09:22:29'),
(13, 3, 8, '', 'hahahahahahahaah', '2014-07-09 07:14:26', '2014-07-09 07:14:26'),
(14, 3, 9, '', 'hihihihihhihi\r\n', '2014-07-09 07:20:20', '2014-07-09 07:20:20'),
(15, 3, 0, '', 'nice photo', '2014-07-26 07:57:04', '2014-07-26 07:57:04'),
(16, 3, 0, '', 'too bad', '2014-07-26 08:06:57', '2014-07-26 08:06:57'),
(17, 3, 0, '', 'very nice', '2014-07-26 08:32:17', '2014-07-26 08:32:17'),
(18, 3, 0, '', 'hihihih new', '2014-07-26 08:46:20', '2014-07-26 08:46:20'),
(19, 3, 0, '', 'nice photo', '2014-07-26 08:50:39', '2014-07-26 08:50:39'),
(20, 3, 0, '', 'sao khong dc', '2014-07-26 08:52:12', '2014-07-26 08:52:12'),
(21, 3, 9, '', 'nice photo new', '2014-07-26 08:57:34', '2014-07-26 08:57:34'),
(22, 3, 8, '', 'hihihihi anh kha la dep nobita', '2014-07-26 10:19:15', '2014-07-26 10:19:15'),
(23, 3, 9, '', 'heheeheheh', '2014-07-26 10:20:19', '2014-07-26 10:20:19'),
(24, 6, 8, '', 'hihihi', '2014-07-26 10:27:05', '2014-07-26 10:27:05'),
(25, 3, 8, '', 'WTF', '2014-07-26 10:29:26', '2014-07-26 10:29:26'),
(26, 3, 8, '', 'sao lai the', '2014-07-26 10:31:58', '2014-07-26 10:31:58'),
(27, 3, 9, '', 'vi sao lai the ', '2014-07-26 10:34:40', '2014-07-26 10:34:40'),
(28, 3, 21, '', 'the first', '2014-07-26 10:35:01', '2014-07-26 10:35:01'),
(29, 6, 22, '', 'hello hihih', '2014-07-27 01:18:43', '2014-07-27 01:18:43'),
(30, 6, 29, '', 'fdsffa', '2014-07-28 06:18:41', '2014-07-28 06:18:41'),
(31, 6, 29, '', 'fdsffa', '2014-07-28 06:18:42', '2014-07-28 06:18:42'),
(32, 6, 47, '', 'asdasdsadsadsd', '2014-07-28 06:59:30', '2014-07-28 06:59:30'),
(33, 6, 46, '', 'azxadsas', '2014-07-28 07:02:47', '2014-07-28 07:02:47'),
(34, 6, 41, '', 'adad', '2014-07-28 07:06:10', '2014-07-28 07:06:10'),
(35, 6, 60, '', 'hjgjmb\r\n', '2014-07-28 09:20:40', '2014-07-28 09:20:40'),
(36, 6, 41, '', 'dads', '2014-07-28 14:01:43', '2014-07-28 14:01:43'),
(37, 6, 61, '', 'gthjd', '2014-07-28 14:31:03', '2014-07-28 14:31:03'),
(38, 6, 59, '', 'oihy', '2014-07-28 15:52:30', '2014-07-28 15:52:30'),
(39, 6, 62, '', 'fhhgf', '2014-07-29 01:59:17', '2014-07-29 01:59:17'),
(40, 6, 61, '', 'sad', '2014-07-29 02:03:09', '2014-07-29 02:03:09'),
(41, 6, 61, '', 'zxxcxzcx', '2014-07-29 13:38:29', '2014-07-29 13:38:29'),
(42, 6, 74, '', 'sdads', '2014-07-29 13:42:55', '2014-07-29 13:42:55'),
(43, 6, 69, '', 'sfsaff', '2014-07-29 13:46:37', '2014-07-29 13:46:37'),
(44, 6, 58, '', 'dfgdgdsgd', '2014-07-30 01:40:49', '2014-07-30 01:40:49'),
(45, 6, 46, '', 'dfdsf\r\n', '2014-07-30 02:38:16', '2014-07-30 02:38:16'),
(46, 6, 57, '', 'fdsfsf', '2014-07-30 02:39:31', '2014-07-30 02:39:31'),
(47, 6, 47, '', 'asfdsfs', '2014-07-30 02:40:12', '2014-07-30 02:40:12'),
(48, 6, 57, '', 'sdfsf', '2014-07-30 02:40:33', '2014-07-30 02:40:33'),
(49, 6, 73, '', 'kaslfhaslf\r\n', '2014-07-30 04:09:33', '2014-07-30 04:09:33'),
(50, 6, 73, '', 'safasfs', '2014-07-30 04:09:37', '2014-07-30 04:09:37'),
(52, 6, 46, '', 'rtyuio', '2014-07-30 04:36:35', '2014-07-30 04:36:35'),
(53, 6, 46, '', 'dk;lglkfnkladsjf afkasjfklasjfjf, sakfjasklfjasfja aifjsklafklasjfasn sfhalsfalkflaksfsa', '2014-07-30 06:45:48', '2014-07-30 06:45:48'),
(54, 6, 81, '', 'Äáº¹p vÃ£i ', '2014-07-30 07:06:03', '2014-07-30 07:06:03'),
(55, 6, 91, '', 'CÅ©ng Ä‘Æ°á»£c :3\r\n', '2014-07-30 08:06:15', '2014-07-30 08:06:15'),
(56, 6, 77, '', 'aaaa', '2014-07-30 09:39:12', '2014-07-30 09:39:12');

-- --------------------------------------------------------

--
-- Structure de la table `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `galleries`
--

INSERT INTO `galleries` (`id`, `name`) VALUES
(1, 'landscape'),
(2, 'animals');

-- --------------------------------------------------------

--
-- Structure de la table `groups`
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
-- Structure de la table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `img_file` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `camera` varchar(128) NOT NULL,
  `lens` varchar(128) NOT NULL,
  `focal_length` varchar(128) NOT NULL,
  `shutter_speed` varchar(128) NOT NULL,
  `aperture` varchar(128) NOT NULL,
  `iso` varchar(128) NOT NULL,
  `taken` varchar(128) NOT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `gallery_id` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

--
-- Contenu de la table `photos`
--

INSERT INTO `photos` (`id`, `title`, `img_file`, `description`, `camera`, `lens`, `focal_length`, `shutter_speed`, `aperture`, `iso`, `taken`, `latitude`, `longitude`, `created`, `modified`, `user_id`, `gallery_id`) VALUES
(75, 'Bien Dong', '20111022_1140018998.jpg', 'Viet Nam', 'D500', 'EX-Z110', '3.85', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 16.07816055843956, 108.29829707109377, '2014-07-30 06:59:45', '2014-07-30 06:59:45', 6, 1),
(76, 'Bien Dong', 'Beach_Sunset_Beach_Sunset_at_Point_Chevalier_Beach_Auckland.jpg', 'Viet Nam trong toi', 'D500', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 20.598818537893496, 106.96236572265627, '2014-07-30 07:01:07', '2014-07-30 07:01:07', 6, 1),
(77, 'Bien Dong', 'green_nature_558.jpg', 'Viet Nam', 'D500', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.109637104989396, 105.37239447187494, '2014-07-30 07:02:03', '2014-07-30 07:02:03', 6, 1),
(78, 'Bien Dong', 'nature_landscape_wallpaper_2.jpg', 'Viet Nam', '', '', '', '', '', '', '', 21.033333, 105.85000000000002, '2014-07-30 07:02:47', '2014-07-30 07:02:47', 6, 1),
(79, 'Bien Dong', 'nature_desktop_wallpaper_avantzone.jpg', 'Viet Nam', 'D500', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 19.733343281200977, 105.90504705986325, '2014-07-30 07:03:47', '2014-07-30 07:03:47', 6, 1),
(80, 'Bien Dong', 'nature_hd_background_25.jpg', 'Viet Nam', 'D500', 'EX-Z110', '3.85', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 16.056873222589513, 108.42562448750004, '2014-07-30 07:04:42', '2014-07-30 07:04:42', 6, 1),
(81, 'Cao NguyÃªn', 'nature_hd_wallpapers_blue_sky.jpg', 'Viet Nam', 'D500', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 20.9220823, 104.75209389999998, '2014-07-30 07:05:46', '2014-07-30 07:05:46', 6, 1),
(82, 'Bá» biá»ƒn', 'nature_hd_wallpapers_forest_and_water.jpg', 'Viet Nam', 'D500', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 20.46178760366867, 106.61673416718747, '2014-07-30 07:07:06', '2014-07-30 07:07:06', 6, 1),
(83, 'BÃ£i cá»', 'nature_hd_wallpapers_grass.jpg', 'Viet Nam', 'D500', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.03878051250066, 105.83455047607424, '2014-07-30 07:07:58', '2014-07-30 07:07:58', 6, 1),
(84, 'Con Ä‘Æ°á»ng tÆ¡ lá»¥a', 'nature_hd_wallpapers_road.jpg', 'Viet Nam', 'D500', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.02884666368382, 105.84133110046389, '2014-07-30 07:08:53', '2014-07-30 07:08:53', 6, 1),
(85, 'BÃ¬nh minh', 'nature_hd_wallpapers_sun_and_clouds.jpg', 'Viet Nam', 'D500', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.331271546741938, 103.90863563593757, '2014-07-30 07:10:41', '2014-07-30 07:10:41', 6, 1),
(86, 'Bá» sÃ´ng', 'nature_hd_wallpapers_super_hd.jpg', 'Viet nam', 'D500', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.01843143375731, 105.81549606323244, '2014-07-30 07:11:50', '2014-07-30 07:11:50', 6, 1),
(87, 'BÃ£i biá»ƒn', 'nature_hd_wallpapers_water.jpg', 'Viet nam', 'D500', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 20.78108837005145, 106.81319198608401, '2014-07-30 07:12:38', '2014-07-30 07:12:38', 6, 1),
(88, 'Äá»“ng báº±ng', 'Nature_Wallpaper_HD.jpg', 'VN', 'D500', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.030328771870586, 105.84437808990481, '2014-07-30 07:15:01', '2014-07-30 07:15:01', 6, 1),
(89, 'BÃ£i biá»ƒn', 'Nature_wallpapers_for_desktop_1.jpg', 'vn', 'D500', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 16.061665193735433, 108.25641169511721, '2014-07-30 07:15:39', '2014-07-30 07:15:39', 6, 1),
(90, 'Suá»‘i', 'nature_wallpapers_in_hd.jpg', 'Vn', 'D500', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.033333, 105.85000000000002, '2014-07-30 07:16:26', '2014-07-30 07:16:26', 6, 1),
(91, 'Cao NguyÃªn', 'Summer_nature_fields_wallpapers_galaxy.jpg', 'Vn', 'D500', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.036176946817587, 105.84527931213381, '2014-07-30 07:16:58', '2014-07-30 07:16:58', 6, 1),
(92, 'Suá»‘i', 'waterfall_nature_wallpaper.jpg', 'Vn', 'D500', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.030288715086368, 105.84450683593752, '2014-07-30 07:17:25', '2014-07-30 07:17:25', 6, 1),
(93, 'Bá» suá»‘i', 'nature_wallpapers_in_hd-0.jpg', 'vn', 'Nikon', 'EX-Z110', 'Normal', '1232', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.02888672085563, 105.85038623809817, '2014-07-30 07:36:40', '2014-07-30 07:36:40', 6, 1),
(94, 'SÃ´ng quÃª', 'pure_nature_2_wallpaper_1366x768.jpg', 'Vn', 'Nikon', 'EX-Z110', '3.85', '12.32', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.0271642527456, 105.82073173522951, '2014-07-30 07:37:39', '2014-07-30 07:37:39', 6, 1),
(95, 'SÃ´ng quÃª', 'river_27_wallpaper_1366x768.jpg', 'Vn', 'D500', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.01903233218491, 105.84699592590334, '2014-07-30 07:38:27', '2014-07-30 07:38:27', 6, 1),
(96, 'SÃ´ng quÃª', 'river_28_wallpaper_1024x576.jpg', 'Vm', 'D500', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.034013949955494, 105.84557971954348, '2014-07-30 07:39:09', '2014-07-30 07:39:09', 6, 1),
(97, 'Sweet home', 'river_bend_wallpaper_1366x768.jpg', 'Vn', 'Apple', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.033613391535035, 105.84630928039553, '2014-07-30 07:40:20', '2014-07-30 07:40:20', 6, 1),
(98, 'HoÃ ng hÃ´n', 'river_sunset_2_wallpaper_1366x768.jpg', 'Vn', 'CASIO COMPUTER', 'EX-Z110', '3.85', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.027885288330282, 105.84004364013674, '2014-07-30 07:40:59', '2014-07-30 07:40:59', 6, 1),
(99, 'Suá»‘i', 'roseau_river_muskoka_region_ontario_wallpaper_1366x768.jpg', 'vn', 'Apple', 'iPhone 5', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.03060916905865, 105.85326156616213, '2014-07-30 07:41:29', '2014-07-30 07:41:29', 6, 1),
(100, 'Cáº§u ThÄƒng Long', 'seventeen_arch_bridge_wallpaper_1366x768.jpg', 'Vn', 'D500', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.0990057, 105.78651100000002, '2014-07-30 07:44:34', '2014-07-30 07:44:34', 6, 1),
(101, 'Suá»‘i', 'stream_6_wallpaper_1366x768.jpg', 'Vn', 'Nikon', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.029207177842594, 105.84738216400149, '2014-07-30 07:45:04', '2014-07-30 07:45:04', 6, 1),
(102, 'Cao NguyÃªn', 'Summer_nature_fields_wallpapers_galaxy-0.jpg', 'aa', 'Apple', 'EX-Z110', 'Normal', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.032291541107465, 105.84360561370852, '2014-07-30 07:45:31', '2014-07-30 07:45:31', 6, 1),
(103, 'Bien Dong', 'white_tree_wallpaper_1366x768.jpg', 'sf', 'D500', 'EX-Z110', '3.85', '3.3242976835879743', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.03269210308142, 105.84871253967287, '2014-07-30 08:27:00', '2014-07-30 08:27:00', 6, 1),
(104, 'Bien Dong', 'nature_hd_wallpapers_blue_sky-0.jpg', 'dda', 'dada', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 15.877049410342012, 101.00009410058601, '2014-07-30 10:20:53', '2014-07-30 10:20:53', 6, 1),
(105, 'HoÃ ng hÃ´n', 'wide_river_wallpaper_1280x720.jpg', 'Vn', 'D500', 'iPhone 5', '', '12.32', '2.970853573907009', '800', '2014:06:24 13:40:39', 21.033333, 105.85000000000002, '2014-08-01 04:12:19', '2014-08-01 04:12:19', 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(64) NOT NULL,
  `avata` varchar(255) NOT NULL,
  `cover` varchar(128) NOT NULL,
  `roles` enum('admin','regular') NOT NULL DEFAULT 'regular',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `username`, `password`, `gender`, `avata`, `cover`, `roles`, `created`, `modified`) VALUES
(3, 'pandora1@gmail.com', 'Admintrator', 'admin', '51a612430009eceebbe93d6edd460ec115704a93', 'male', 'images_5.jpg', '', 'admin', '2014-07-06 04:35:06', '2014-07-26 02:59:30'),
(6, 'hello1@yahoo.com', 'Huudo', 'trung2', '51a612430009eceebbe93d6edd460ec115704a93', 'female', 'Copy_of_151964-0.jpg', 'wallpaper_264364_Dizorb_dot_com.jpg', 'regular', '2014-07-07 07:10:28', '2014-07-30 10:23:05'),
(7, 'hellovietnam93@yahoo.com', 'trung4', 'trung4', '51a612430009eceebbe93d6edd460ec115704a93', 'male', 'medium_7ca81754f156485eb7f92956977b774f_400.jpg', '', 'regular', '2014-07-07 07:28:52', '2014-07-21 09:56:32'),
(8, 'pandapro2@yahoo.com', 'trung5', 'trung5', '51a612430009eceebbe93d6edd460ec115704a93', 'male', 'medium_4eabb2dca0b940679b2352a2ad017d0a_650.jpg', '', 'regular', '2014-07-07 08:30:23', '2014-07-21 09:56:41'),
(9, 'pandapro7@gmail.com', 'trung7', 'trung7', '51a612430009eceebbe93d6edd460ec115704a93', 'male', 'medium_1d6a055576da4c2297eb5caa8bd1ef8e_400.jpg', '', 'regular', '2014-07-09 02:30:47', '2014-07-21 09:56:49'),
(10, 'pandapro8@yahoo.com', 'trung8', 'trung8', '51a612430009eceebbe93d6edd460ec115704a93', 'female', 'medium_7813bc78ec5d4b8cb7ade772659a190e_650.jpg', '', 'regular', '2014-07-09 02:32:22', '2014-07-21 09:56:57'),
(11, 'pandpro123@yahoo.com', 'trung123456', 'trung123456', '51a612430009eceebbe93d6edd460ec115704a93', 'male', 'medium_87d37dbddc00423e8b6f4bc2f6361226_400.jpg', '', 'regular', '2014-07-16 09:51:52', '2014-07-21 09:57:05'),
(13, 'pandapro12@gmail.com', 'trung', 'trung', '51a612430009eceebbe93d6edd460ec115704a93', 'male', 'c0b95409c55582500afc58ab9699c49b.jpg', '', 'regular', '2014-07-21 09:48:36', '2014-07-21 09:58:19'),
(14, 'giant@yahoo.com', '', 'trung22', '51a612430009eceebbe93d6edd460ec115704a93', '0', '', '', 'regular', '2014-07-25 11:02:00', '2014-07-25 11:02:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
