-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2016 at 12:02 AM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Men', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Women', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Kids and Babies', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Beauty', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Sale', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'House Furnishing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Kitchenware', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Furniture', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `counts`
--

CREATE TABLE IF NOT EXISTS `counts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `prod_id` int(10) unsigned NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `counts_prod_id_foreign` (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `counts`
--

INSERT INTO `counts` (`id`, `prod_id`, `count`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 4, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 6, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 7, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prod_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `images_prod_id_foreign` (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `url`, `prod_id`, `created_at`, `updated_at`) VALUES
(1, 'nike_dart_1.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'nike_dart_2.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'nike_dart_3.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'nike_dart_4.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'nike_dart_5.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'knight_ace_1.jpeg', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'knight_ace_2.jpeg', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'knight_ace_3.jpeg', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'knight_ace_4.jpeg', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'knight_ace_5.jpeg', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'pure_miami_1.jpeg', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'pure_miami_2.jpeg', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'pure_miami_3.jpeg', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'pure_miami_4.jpeg', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'sayitloud_1.jpeg', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'sayitloud_2.jpeg', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'arrow_casual_1.jpeg', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'arrow_casual_2.jpeg', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'arrow_casual_3.jpeg', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'arrow_casual_4.jpeg', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'arrow_casual_5.jpeg', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'arrow_casual_6.jpeg', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'levis_1.jpeg', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'levis_2.jpeg', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'levis_3.jpeg', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'levis_4.jpeg', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'levis_5.jpeg', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'yross_1.jpeg', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'yross_2.jpeg', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'yross_3.jpeg', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_21_161439_create_categories_table', 1),
('2016_03_21_161632_create_sub_categories_table', 1),
('2016_03_21_184219_create_sub_subs_table', 1),
('2016_03_21_184233_create_products_table', 1),
('2016_03_21_184241_create_images_table', 1),
('2016_03_31_093435_create_counts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sale` int(11) DEFAULT NULL,
  `sub_cat_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `products_sub_cat_id_foreign` (`sub_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `sale`, `sub_cat_id`, `created_at`, `updated_at`) VALUES
(1, 'Nike Dart', 2000, 'good shoes', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Knight Ace', 2500, 'nice boots', 0, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Pure Miami Fashion', 500, 'slippers', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'SayItLoud', 750, 'T-shirt', 25, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Arrow Casual Shirt', 800, 'Casual', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Levi''s jeans', 3000, 'jeans', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Yross self design', 450, 't shirt', 10, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `sub_categories_cat_id_foreign` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 'Clothes', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Shoes', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Bags', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_subs`
--

CREATE TABLE IF NOT EXISTS `sub_subs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `sub_subs_cat_id_foreign` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sub_subs`
--

INSERT INTO `sub_subs` (`id`, `name`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 'Slippers', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Boots', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'casual shoes', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'T-shirts', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Shirts', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Jeans', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `counts`
--
ALTER TABLE `counts`
  ADD CONSTRAINT `counts_prod_id_foreign` FOREIGN KEY (`prod_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_prod_id_foreign` FOREIGN KEY (`prod_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_sub_cat_id_foreign` FOREIGN KEY (`sub_cat_id`) REFERENCES `sub_subs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_subs`
--
ALTER TABLE `sub_subs`
  ADD CONSTRAINT `sub_subs_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
