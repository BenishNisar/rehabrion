-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2025 at 02:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qadeerandzaheer`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `paragraph` varchar(600) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `paragraph`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'Safeguard Your IP. Strengthen', 'Aziz & Ismail advises on trademarks, patents, designs, and copyrights—helping businesses protect what they create in Pakistan and beyond.', 'uploads/banners/1756370595_the-law-firms.jpg', '2025-08-26 13:21:11', '2025-08-28 18:08:16'),
(2, 'Trademark Registration Made Simple', 'From clearance searches and filing to oppositions and renewals—we handle the process end-to-end with clear timelines and fees.', 'uploads/banners/1756370604_aziz-and-co.jpg', '2025-08-26 13:23:47', '2025-08-28 15:48:01'),
(3, 'Practical Legal Counsel for Innovators', 'Responsive, business-minded attorneys delivering fast turnarounds, strong enforcement, and global portfolio management.', 'uploads/banners/1756370610_aziz-and-co.jpg', '2025-08-26 13:24:06', '2025-08-28 15:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `short_description` varchar(900) NOT NULL,
  `content` longtext NOT NULL,
  `featured_image` varchar(600) NOT NULL,
  `author` varchar(599) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `meta_title` varchar(500) NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `short_description`, `content`, `featured_image`, `author`, `date`, `created_at`, `updated_at`, `category_id`, `slug`, `meta_title`, `meta_description`) VALUES
(13, 'test', 'test', '<h2 style=\"margin: 20px 0px 10px; font-weight: 600; line-height: 24px; color: rgb(34, 34, 34); font-size: 32px; font-family: Poppins; letter-spacing: 0.06px;\" class=\"\"></h2><h1 class=\"\"><span style=\"font-family: &quot;Arial Black&quot;;\">Introduction</span></h1><span style=\"font-size: 18px;\">﻿work</span><br>', 'Dashboard_assets/1745931021_About us.jpg', 'test', '2025-04-29', '2025-04-29 19:50:21', '2025-04-29 19:58:04', 2, 'test', 'test', 'test'),
(14, 'test', 'test', '<p>test</p>', 'Dashboard_assets/1756557033_clientss.png', 'test', '2025-08-30', '2025-08-30 19:30:33', '2025-08-30 19:30:33', 3, 'test-1', 'test', 'test'),
(15, 'test', 'test', '<p>test</p>', 'Dashboard_assets/1756557075_lawyerss.png', 'test', '2025-08-30', '2025-08-30 19:31:15', '2025-08-30 19:31:15', 3, 'test-2', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(800) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `updated_at`, `created_at`) VALUES
(2, 'articles', '2025-04-03 15:53:56', '2025-04-03 15:53:56'),
(3, 'Sales Tax', '2025-08-26 15:08:10', '2025-08-26 15:08:10'),
(4, 'Income Tax', '2025-08-26 15:08:19', '2025-08-26 15:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `category_download`
--

CREATE TABLE `category_download` (
  `download_id` bigint(11) UNSIGNED NOT NULL,
  `category_id` bigint(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_download`
--

INSERT INTO `category_download` (`download_id`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 4, '2025-08-26 08:39:50', '2025-08-26 08:39:50'),
(2, 3, '2025-08-26 08:39:50', '2025-08-26 08:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(800) NOT NULL,
  `email` varchar(900) NOT NULL,
  `country` varchar(900) NOT NULL,
  `phone` varchar(900) NOT NULL,
  `message` varchar(900) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `country`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'demo', 'demo@gmail.com', 'Pakistan', '0358568595', 'hello world', '2025-04-03 07:03:28', '2025-04-03 07:03:28'),
(2, 'Benish', 'benishnisar@gmail.com', 'Pakistan', '0364575678', 'good services', '2025-04-03 14:25:54', '2025-04-03 14:25:54'),
(3, 'Benish', 'benishnisar@gmail.com', 'Pakistan', '0364575678', 'good services', '2025-04-03 14:29:32', '2025-04-03 14:29:32'),
(4, 'testing', 'testing@gmail.com', 'Pakistan', '03428410999', 'work', '2025-04-10 13:19:00', '2025-04-10 13:19:00'),
(5, 'noor', 'fatimazoha@gmail.com', 'Pakistan', '03566667791', 'work', '2025-04-10 13:24:56', '2025-04-10 13:24:56'),
(6, 'noor', 'noor@gmail.com', 'Pakistan', '03566667791', 'test', '2025-04-10 13:28:45', '2025-04-10 13:28:45'),
(7, 'Stewart Houston', 'syxu@mailinator.com', 'Quis architecto est', '+1 (143) 653-2706', 'Voluptatibus praesen', '2025-04-10 13:36:00', '2025-04-10 13:36:00'),
(8, 'Wesley Vazquez', 'byfuhe@mailinator.com', 'Porro recusandae In', '+1 (625) 125-1851', 'Ea non eum odio corp', '2025-04-10 13:36:07', '2025-04-10 13:36:07'),
(9, 'Emi Mcdowell', 'nynagaciho@mailinator.com', 'Quia quaerat do ut a', '+1 (602) 773-9278', 'Est reprehenderit si', '2025-04-10 13:36:19', '2025-04-10 13:36:19'),
(10, 'Workigng', 'benishnisar56@gmail.com', 'Pakistan', '03428410999', 'wok', '2025-04-10 13:37:04', '2025-04-10 13:37:04'),
(11, 'noor', 'benishnisar56@gmail.com', 'Pakistan', '03566667791', 'hello', '2025-04-10 13:54:04', '2025-04-10 13:54:04'),
(12, 'Ray Hutchinson', 'lijyg@mailinator.com', 'Rerum est ab omnis i', '+1 (221) 469-9941', 'Vero sed laborum sit', '2025-04-10 13:59:05', '2025-04-10 13:59:05'),
(13, 'Ray Hutchinson', 'lijyg@mailinator.com', 'Rerum est ab omnis i', '+1 (221) 469-9941', 'Vero sed laborum sit', '2025-04-10 13:59:09', '2025-04-10 13:59:09'),
(14, 'Quyn Barrett', 'vaxiq@mailinator.com', 'Esse autem voluptat', '+1 (417) 911-2582', 'Enim ut veritatis ve', '2025-04-10 14:01:33', '2025-04-10 14:01:33'),
(15, 'Quyn Barrett', 'vaxiq@mailinator.com', 'Esse autem voluptat', '+1 (417) 911-2582', 'Enim ut veritatis ve', '2025-04-10 14:01:38', '2025-04-10 14:01:38'),
(16, 'Quyn Barrett', 'vaxiq@mailinator.com', 'Esse autem voluptat', '+1 (417) 911-2582', 'Enim ut veritatis ve', '2025-04-10 14:01:43', '2025-04-10 14:01:43'),
(17, 'Quyn Barrett', 'vaxiq@mailinator.com', 'Esse autem voluptat', '+1 (417) 911-2582', 'Enim ut veritatis ve', '2025-04-10 14:01:48', '2025-04-10 14:01:48'),
(18, 'work', 'benishnisar56@gmail.com', 'Pakistan', '03478356751', 'work', '2025-04-10 14:08:17', '2025-04-10 14:08:17'),
(19, 'work', 'benishnisar56@gmail.com', 'Pakistan', '03478356751', 'work', '2025-04-10 14:08:22', '2025-04-10 14:08:22'),
(20, 'work', 'benishnisar56@gmail.com', 'Pakistan', '03478356751', 'work', '2025-04-10 14:08:27', '2025-04-10 14:08:27'),
(21, 'work', 'benishnisar56@gmail.com', 'Pakistan', '03478356751', 'work', '2025-04-10 14:08:31', '2025-04-10 14:08:31'),
(22, 'work', 'benishnisar56@gmail.com', 'Pakistan', '03478356751', 'work', '2025-04-10 14:08:35', '2025-04-10 14:08:35'),
(23, 'work', 'work@gmail.com', 'Pakistan', '03566667791', 'woyj', '2025-04-10 14:09:15', '2025-04-10 14:09:15'),
(24, 'work', 'work@gmail.com', 'Pakistan', '03566667791', 'woyj', '2025-04-10 14:09:20', '2025-04-10 14:09:20'),
(25, 'Joan Strong', 'mocu@mailinator.com', 'Laudantium praesent', '+1 (211) 487-1983', 'Deserunt saepe iure', '2025-04-10 14:09:29', '2025-04-10 14:09:29'),
(26, 'Joan Strong', 'mocu@mailinator.com', 'Laudantium praesent', '+1 (211) 487-1983', 'Deserunt saepe iure', '2025-04-10 14:09:34', '2025-04-10 14:09:34'),
(27, 'Gretchen Green', 'caxysecu@mailinator.com', 'Qui perferendis non', '+1 (426) 708-5139', 'Magni lorem voluptat', '2025-04-10 14:09:53', '2025-04-10 14:09:53'),
(28, 'Gretchen Green', 'caxysecu@mailinator.com', 'Qui perferendis non', '+1 (426) 708-5139', 'Magni lorem voluptat', '2025-04-10 14:09:59', '2025-04-10 14:09:59'),
(29, 'Gretchen Green', 'caxysecu@mailinator.com', 'Qui perferendis non', '+1 (426) 708-5139', 'Magni lorem voluptat', '2025-04-10 14:10:04', '2025-04-10 14:10:04'),
(30, 'Jarrod Conley', 'tesypyl@mailinator.com', 'Non in corporis cons', '+1 (525) 214-6389', 'Consectetur eiusmod', '2025-04-10 14:10:08', '2025-04-10 14:10:08'),
(31, 'Jarrod Conley', 'tesypyl@mailinator.com', 'Non in corporis cons', '+1 (525) 214-6389', 'Consectetur eiusmod', '2025-04-10 14:10:13', '2025-04-10 14:10:13'),
(32, 'Yardley Hancock', 'komy@mailinator.com', 'Dolorem dolorem ab a', '+1 (318) 846-3906', 'Dignissimos quisquam', '2025-04-10 14:10:34', '2025-04-10 14:10:34'),
(33, 'Mira Johnston', 'xepydonyz@mailinator.com', 'Placeat distinctio', '+1 (908) 395-4364', 'Illum ipsum rem acc', '2025-04-10 14:10:50', '2025-04-10 14:10:50'),
(34, 'Dorian Church', 'qazu@mailinator.com', 'Ullamco quibusdam in', '+1 (164) 561-8377', 'Eos consequatur est', '2025-04-10 14:11:02', '2025-04-10 14:11:02'),
(35, 'Dorian Church', 'qazu@mailinator.com', 'Ullamco quibusdam in', '+1 (164) 561-8377', 'Eos consequatur est', '2025-04-10 14:11:07', '2025-04-10 14:11:07'),
(36, 'Xavier Weiss', 'felaju@mailinator.com', 'Animi nobis autem r', '+1 (933) 804-6759', 'Aut exercitationem e', '2025-04-10 14:11:29', '2025-04-10 14:11:29'),
(37, 'Xavier Weiss', 'felaju@mailinator.com', 'Animi nobis autem r', '+1 (933) 804-6759', 'Aut exercitationem e', '2025-04-10 14:11:34', '2025-04-10 14:11:34'),
(38, 'Xavier Weiss', 'felaju@mailinator.com', 'Animi nobis autem r', '+1 (933) 804-6759', 'Aut exercitationem e', '2025-04-10 14:11:39', '2025-04-10 14:11:39'),
(39, 'Xavier Weiss', 'felaju@mailinator.com', 'Animi nobis autem r', '+1 (933) 804-6759', 'Aut exercitationem e', '2025-04-10 14:11:43', '2025-04-10 14:11:43'),
(40, 'Xavier Weiss', 'felaju@mailinator.com', 'Animi nobis autem r', '+1 (933) 804-6759', 'Aut exercitationem e', '2025-04-10 14:11:47', '2025-04-10 14:11:47'),
(41, 'Xavier Weiss', 'felaju@mailinator.com', 'Animi nobis autem r', '+1 (933) 804-6759', 'Aut exercitationem e', '2025-04-10 14:11:51', '2025-04-10 14:11:51'),
(42, 'benish', 'benishnisar56@gmail.com', 'Afganistan', '03566667791', 'work', '2025-04-10 14:15:29', '2025-04-10 14:15:29'),
(43, 'benish', 'benishnisar56@gmail.com', 'Afganistan', '03566667791', 'work', '2025-04-10 14:15:38', '2025-04-10 14:15:38'),
(44, 'benish', 'benishnisar56@gmail.com', 'Afganistan', '03566667791', 'work', '2025-04-10 14:15:43', '2025-04-10 14:15:43'),
(45, 'Benish', 'benishnisar56@gmail.com', 'Pakistan', '03428410999', 'wr', '2025-04-10 14:16:04', '2025-04-10 14:16:04'),
(46, 'check', 'benishnisar56@gmail.com', 'Pakistan', '03566667791', 'work', '2025-04-10 14:22:23', '2025-04-10 14:22:23'),
(47, 'Nero Camacho', 'qalolyc@mailinator.com', 'Quaerat corrupti no', '+1 (882) 344-6442', 'Ut ut magnam accusan', '2025-04-10 15:39:18', '2025-04-10 15:39:18'),
(48, 'Nero Camacho', 'qalolyc@mailinator.com', 'Quaerat corrupti no', '+1 (882) 344-6442', 'Ut ut magnam accusan', '2025-04-10 15:39:24', '2025-04-10 15:39:24'),
(49, 'office', 'officework.weboctane@gmail.com', 'pakistan', '03000339752', 'hello', '2025-04-22 17:24:54', '2025-04-22 17:24:54'),
(50, 'office', 'officework.weboctane@gmail.com', 'pakistan', '03000339752', 'hello', '2025-04-22 17:25:05', '2025-04-22 17:25:05'),
(51, 'work', 'benishk800@gmail.com', 'Pakistan', '03000339752', 'good', '2025-04-22 17:52:12', '2025-04-22 17:52:12'),
(52, 'benish', 'benishnisarkhan56@gmail.com', 'Pakistan', '03000339752', 'good', '2025-04-22 17:53:11', '2025-04-22 17:53:11'),
(53, 'benish', 'officework.weboctane@gmail.com', 'Pakistan', '03160109634', 'work', '2025-04-22 18:18:08', '2025-04-22 18:18:08'),
(54, 'benish', 'benishk800@gmail.com', 'Pakistan', '03160109634', 'good', '2025-04-22 18:28:43', '2025-04-22 18:28:43'),
(55, 'test order', 'zubiaahsan925@gmail.com', 'Pakistan', '03160109634', 'good', '2025-04-22 18:35:17', '2025-04-22 18:35:17'),
(56, 'benish', 'benishk800@gmail.com', 'Pakistan', '03160109634', 'good services', '2025-04-22 18:35:55', '2025-04-22 18:35:55'),
(57, 'office', 'officework.weboctane@gmail.com', 'Pakistan', '03566667791', 'work', '2025-04-23 20:04:32', '2025-04-23 20:04:32'),
(58, 'office', 'officework.weboctane@gmail.com', 'Pakistan', '03566667791', 'work', '2025-04-23 20:04:50', '2025-04-23 20:04:50'),
(59, 'office', 'officework.weboctane@gmail.com', 'Pakistan', '03566667791', 'work', '2025-04-23 20:04:56', '2025-04-23 20:04:56'),
(60, 'noor', 'benishk800@gmail.com', 'Pakistan', '03566667791', 'good', '2025-04-23 22:17:22', '2025-04-23 22:17:22'),
(61, 'noor', 'benishk800@gmail.com', 'Pakistan', '03566667791', 'good', '2025-04-23 22:32:20', '2025-04-23 22:32:20'),
(62, 'noor', 'benish@gmail.com', 'Pakistan', '03428410999', 'good', '2025-04-23 22:33:14', '2025-04-23 22:33:14'),
(63, 'noor', 'benish@gmail.com', 'Pakistan', '03428410999', 'good', '2025-04-23 22:33:35', '2025-04-23 22:33:35'),
(64, 'noor', 'benish@gmail.com', 'Pakistan', '03428410999', 'good', '2025-04-23 22:33:57', '2025-04-23 22:33:57'),
(65, 'noor', 'benish@gmail.com', 'Pakistan', '03428410999', 'good', '2025-04-23 22:34:18', '2025-04-23 22:34:18'),
(66, 'noor', 'benish@gmail.com', 'Pakistan', '03428410999', 'good', '2025-04-23 22:34:40', '2025-04-23 22:34:40'),
(67, 'noor', 'benish@gmail.com', 'Pakistan', '03428410999', 'good', '2025-04-23 22:35:01', '2025-04-23 22:35:01'),
(68, 'noor', 'benish@gmail.com', 'Pakistan', '03428410999', 'good', '2025-04-23 22:35:22', '2025-04-23 22:35:22'),
(69, 'noor', 'benish@gmail.com', 'Pakistan', '03428410999', 'good', '2025-04-23 22:35:44', '2025-04-23 22:35:44'),
(70, 'noor', 'benish@gmail.com', 'Pakistan', '03428410999', 'good', '2025-04-23 22:36:07', '2025-04-23 22:36:07'),
(71, 'noor', 'benish@gmail.com', 'Pakistan', '03428410999', 'good', '2025-04-23 22:36:29', '2025-04-23 22:36:29'),
(72, 'muhammad', 'muhammad@gmail.com', 'Pakistan', '03160109634', 'hello', '2025-04-23 22:38:58', '2025-04-23 22:38:58'),
(73, 'muhammad', 'muhammad@gmail.com', 'Pakistan', '03160109634', 'hello', '2025-04-23 22:39:20', '2025-04-23 22:39:20'),
(74, 'muhammad', 'muhammad@gmail.com', 'Pakistan', '03160109634', 'hello', '2025-04-23 22:39:42', '2025-04-23 22:39:42'),
(75, 'muhammad', 'muhammad@gmail.com', 'Pakistan', '03160109634', 'hello', '2025-04-23 22:40:05', '2025-04-23 22:40:05'),
(76, 'muhammad', 'muhammad@gmail.com', 'Pakistan', '03160109634', 'hello', '2025-04-23 22:40:27', '2025-04-23 22:40:27'),
(77, 'muhammad', 'muhammad@gmail.com', 'Pakistan', '03160109634', 'hello', '2025-04-23 22:40:50', '2025-04-23 22:40:50'),
(78, 'muhammad', 'muhammad@gmail.com', 'Pakistan', '03160109634', 'hello', '2025-04-23 22:41:12', '2025-04-23 22:41:12'),
(79, 'muhammad', 'muhammad@gmail.com', 'Pakistan', '03160109634', 'hello', '2025-04-23 22:41:33', '2025-04-23 22:41:33'),
(80, 'muhammad', 'muhammad@gmail.com', 'Pakistan', '03160109634', 'hello', '2025-04-23 22:41:55', '2025-04-23 22:41:55'),
(81, 'muhammad', 'muhammad@gmail.com', 'Pakistan', '03160109634', 'hello', '2025-04-23 22:42:18', '2025-04-23 22:42:18'),
(82, 'noor', 'benishnisar56@gmail.com', 'Pakistan', '03566667791', 'hello', '2025-04-23 22:43:05', '2025-04-23 22:43:05'),
(83, 'noor', 'benishnisar56@gmail.com', 'Pakistan', '03566667791', 'hello', '2025-04-23 22:43:27', '2025-04-23 22:43:27'),
(84, 'noor', 'benishnisar56@gmail.com', 'Pakistan', '03566667791', 'hello', '2025-04-23 22:43:49', '2025-04-23 22:43:49'),
(85, 'Vielka Ramsey', 'lehihy@mailinator.com', 'Obcaecati harum quia', '+1 (658) 961-4828', 'Molestias doloribus', '2025-04-23 22:44:47', '2025-04-23 22:44:47'),
(86, 'Vielka Ramsey', 'lehihy@mailinator.com', 'Obcaecati harum quia', '+1 (658) 961-4828', 'Molestias doloribus', '2025-04-23 22:45:09', '2025-04-23 22:45:09'),
(87, 'Vielka Ramsey', 'lehihy@mailinator.com', 'Obcaecati harum quia', '+1 (658) 961-4828', 'Molestias doloribus', '2025-04-23 22:45:31', '2025-04-23 22:45:31'),
(88, 'Vielka Ramsey', 'lehihy@mailinator.com', 'Obcaecati harum quia', '+1 (658) 961-4828', 'Molestias doloribus', '2025-04-23 22:45:53', '2025-04-23 22:45:53'),
(89, 'Vielka Ramsey', 'lehihy@mailinator.com', 'Obcaecati harum quia', '+1 (658) 961-4828', 'Molestias doloribus', '2025-04-23 22:46:15', '2025-04-23 22:46:15'),
(90, 'benish', 'benishk800@gmail.com', 'Pakistan', '03160109634', 'hello', '2025-04-23 22:50:08', '2025-04-23 22:50:08'),
(91, 'benish', 'benishk800@gmail.com', 'Pakistan', '03160109634', 'hello', '2025-04-23 22:50:30', '2025-04-23 22:50:30'),
(92, 'benish', 'benishk800@gmail.com', 'Pakistan', '03160109634', 'hello', '2025-04-23 22:50:52', '2025-04-23 22:50:52'),
(93, 'benish', 'benishk800@gmail.com', 'Pakistan', '03160109634', 'hello', '2025-04-23 22:51:14', '2025-04-23 22:51:14'),
(94, 'muhammad', 'muhammad@gmail.com', 'Pakistan', '03160109634', 'Allah', '2025-04-23 23:00:33', '2025-04-23 23:00:33'),
(95, 'muhammad', 'muhammad@gmail.com', 'Pakistan', '03160109634', 'Allah', '2025-04-23 23:00:39', '2025-04-23 23:00:39'),
(96, 'noor', 'noor@gmail.com', 'Pakistan', '03566667791', 'good', '2025-04-23 23:16:24', '2025-04-23 23:16:24'),
(97, 'anaya', 'benishnisar56@gmail.com', 'Pakistan', '03566667791', 'work', '2025-04-23 23:24:29', '2025-04-23 23:24:29'),
(98, 'Muhammad', 'muhammadqadeer@gmail.com', 'Pakistan', '0347584948', 'hello', '2025-08-27 13:14:11', '2025-08-27 13:14:11'),
(99, 'Muhammad', 'muhammadqadeer@gmail.com', 'Pakistan', '0347584948', 'hello', '2025-08-27 13:14:21', '2025-08-27 13:14:21'),
(100, 'Muhammad', 'muhammad@gmail.com', 'Pakistan', '0347584948', 'hello', '2025-08-27 13:19:22', '2025-08-27 13:19:22'),
(101, 'Muhammad', 'muhammad@gmail.com', 'Pakistan', '0347584948', 'hello', '2025-08-27 13:19:27', '2025-08-27 13:19:27'),
(102, 'Muhammad', 'muhammad@gmail.com', 'Pakistan', '0347584948', 'work', '2025-08-27 13:19:47', '2025-08-27 13:19:47'),
(103, 'Muhammad', 'muhammad@gmail.com', 'Pakistan', '0347584948', 'work', '2025-08-27 13:19:50', '2025-08-27 13:19:50'),
(104, 'Muhammad', 'muhammad@gmail.com', 'Pakistan', '0347584948', 'hello', '2025-08-27 13:24:05', '2025-08-27 13:24:05'),
(105, 'Muhammad', 'muhammad@gmail.com', 'Pakistan', '0347584948', 'hello', '2025-08-27 13:24:09', '2025-08-27 13:24:09'),
(106, 'benish', 'benish@gmail.com', 'Pakistan', '0347584948', 'good', '2025-08-27 13:29:49', '2025-08-27 13:29:49'),
(107, 'benish', 'benish@gmail.com', 'Pakistan', '0347584948', 'good', '2025-08-27 13:29:53', '2025-08-27 13:29:53'),
(108, 'test', 'test@gmail.com', 'Pakistan', '0347584948', 'hello', '2025-08-27 13:37:51', '2025-08-27 13:37:51'),
(109, 'test', 'test@gmail.com', 'Pakistan', '0347584948', 'hello', '2025-08-27 13:37:56', '2025-08-27 13:37:56'),
(110, 'test', 'test@gmail.com', 'Pakistan', '03000339752', 'good', '2025-08-27 13:49:46', '2025-08-27 13:49:46'),
(111, 'test', 'test@gmail.com', 'Pakistan', '03000339752', 'good', '2025-08-27 13:49:52', '2025-08-27 13:49:52'),
(112, 'test', 'test@gmail.com', 'Pakistan', '0348798949', 'hlo', '2025-08-27 14:58:31', '2025-08-27 14:58:31'),
(113, 'test', 'test@gmail.com', 'Pakistan', '0348798949', 'hlo', '2025-08-27 14:58:36', '2025-08-27 14:58:36'),
(114, 'test', 'test@gmail.com', 'Pakistan', '0347584948', 'test', '2025-08-27 15:03:11', '2025-08-27 15:03:11'),
(115, 'test', 'test@gmail.com', 'Pakistan', '0347584948', 'test', '2025-08-27 15:03:17', '2025-08-27 15:03:17'),
(116, 'test', 'test@gmail.com', 'Pakistan', '0347584948', 'ssa', '2025-08-27 15:32:45', '2025-08-27 15:32:45'),
(117, 'hina', 'hina@gmail.com', 'Pakistan', '0347584948', 'hello', '2025-08-27 15:45:39', '2025-08-27 15:45:39'),
(118, 'test', 'test@gmail.com', 'Pakistan', '0347584948', 'test', '2025-08-27 15:46:30', '2025-08-27 15:46:30'),
(119, 'test', 'zubiaahsan925@gmail.com', 'Pakistan', '03160109634', 'test', '2025-08-27 15:52:26', '2025-08-27 15:52:26'),
(120, 'test order', 'zubiaahsan925@gmail.com', 'Pakistan', '03160109634', 'good', '2025-08-27 15:58:03', '2025-08-27 15:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `contact_settings`
--

CREATE TABLE `contact_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `phones` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`phones`)),
  `emails` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`emails`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_settings`
--

INSERT INTO `contact_settings` (`id`, `note`, `address`, `phones`, `emails`, `created_at`, `updated_at`) VALUES
(1, '+92', '305, Frere Business Centre, Frere Road, Adjacent Akhbar Market, Saddar, Karachi-75350 (Pakistan)', '[\"0092-21-2772944, 2772945, 2721357, 2721359, 2750546, 2750547\"]', '[\"azizismail@cyber.net.pk\",\"info@azizismail.com\"]', '2025-08-27 20:18:29', '2025-08-27 20:32:15');

-- --------------------------------------------------------

--
-- Table structure for table `corporate`
--

CREATE TABLE `corporate` (
  `id` int(11) NOT NULL,
  `corporate_id` int(11) NOT NULL,
  `block_type` enum('heading','paragraph','list','image') NOT NULL,
  `content` text NOT NULL,
  `image` varchar(800) DEFAULT NULL,
  `sort_order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `corporate`
--

INSERT INTO `corporate` (`id`, `corporate_id`, `block_type`, `content`, `image`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 1, 'heading', 'empowerings', 'uploads/corporate/1743333556_tARMa60ui8.jpg', 39, '2025-03-30 18:19:16', '2025-03-30 18:19:16'),
(2, 1, 'heading', 'empowerings', 'uploads/corporate/1743333618_Qi4gnTT4ok.jpg', 39, '2025-03-30 18:20:18', '2025-03-30 18:20:18'),
(3, 1, 'list', 'Velit placeat iusto', NULL, 1, '2025-03-30 18:24:51', '2025-03-30 18:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `year_label` varchar(20) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `original_name` varchar(255) DEFAULT NULL,
  `mime_type` varchar(100) DEFAULT NULL,
  `size_bytes` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `title`, `year_label`, `file_path`, `original_name`, `mime_type`, `size_bytes`, `created_at`, `updated_at`) VALUES
(1, 'law firm', 'Year 2007-08', 'downloads/1756196880_law_firm.doc', 'st0708 (1).doc', 'application/msword', 55808, '2025-08-26 15:28:00', '2025-08-26 15:28:00'),
(2, 'law firm', 'Year 2007-08', 'downloads/1756197590_law_firm.doc', 'st0708 (1).doc', 'application/msword', 55808, '2025-08-26 15:39:50', '2025-08-26 15:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `inner_banners`
--

CREATE TABLE `inner_banners` (
  `id` int(11) NOT NULL,
  `name` varchar(900) NOT NULL,
  `image` varchar(900) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inner_banners`
--

INSERT INTO `inner_banners` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Business_Sectors', 'inner_banners/1756553809_business-sectorsaa.jpg', '2025-08-27 18:01:17', '2025-08-30 19:56:19'),
(2, 'administration', 'inner_banners/1756553818_administration.jpg', '2025-08-27 18:31:15', '2025-08-30 18:36:58'),
(3, 'softwares', 'inner_banners/1756553831_softwares.jpg', '2025-08-27 18:51:11', '2025-08-30 18:37:11'),
(4, 'clients', 'inner_banners/1756553849_clients.jpg', '2025-08-27 19:03:42', '2025-08-30 18:37:29'),
(5, 'downloads', 'inner_banners/1756553861_downloads.jpg', '2025-08-27 19:03:56', '2025-08-30 18:37:41'),
(6, 'jobs & careers', 'inner_banners/1756553875_jobs-careers.jpg', '2025-08-27 19:04:18', '2025-08-30 18:37:55'),
(7, 'about', 'inner_banners/1756553887_about.jpg', '2025-08-27 19:18:04', '2025-08-30 18:38:07'),
(8, 'contact', 'inner_banners/1756553901_contact.jpg', '2025-08-27 19:21:54', '2025-08-30 18:38:21'),
(9, 'services', 'inner_banners/1756553910_services.jpg', '2025-08-29 12:44:19', '2025-08-30 18:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(900) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` longtext DEFAULT NULL,
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(566) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `description`, `sort_order`, `is_active`, `created_at`, `updated_at`, `image`) VALUES
(1, 'income taxs', 'income-taxs', '<h2 class=\"\"><span style=\"font-family: Arial;\">INCOME TAX (Law and Procedures)</span></h2><ol><li><font face=\"Arial\"><span style=\"font-size: 14px;\">REGISTRATION</span></font></li><li><font face=\"Arial\"><span style=\"font-size: 14px;\">FILLING OF ANNUAL RETURNS</span></font></li><li><font face=\"Arial\"><span style=\"font-size: 14px;\">FILLING OF STATUTORY MONTHLY & ANNUAL STATEMENTS.</span></font></li><li><font face=\"Arial\"><span style=\"font-size: 14px;\">FINALIZATION OF ASSESSMENT</span></font></li><li><font face=\"Arial\"><span style=\"font-size: 14px;\">UNDERTAKING REPRESENTATION</span></font></li><li><font face=\"Arial\"><span style=\"font-size: 14px;\">AUDIT</span></font></li><li><font face=\"Arial\"><span style=\"font-size: 14px;\">APPEALS</span></font></li><li><font face=\"Arial\"><span style=\"font-size: 14px;\">OBJECTIONS</span></font></li><li><font face=\"Arial\"><span style=\"font-size: 14px;\">REFUNDS</span></font></li><li><font face=\"Arial\"><span style=\"font-size: 14px;\">OBTAINING TAX EXEMPTIONS & CONCESSIONS</span></font></li><li><font face=\"Arial\"><span style=\"font-size: 14px;\">COMPLIANCE OF STATUTORY NOTICES / LETTERS</span></font></li><li></li><li><font face=\"Arial\"><span style=\"font-size: 14px;\">PAREPARATION OF RELATED DEEDS & DOCUMENTS</span></font></li></ol>', 1, 1, '2025-08-26 19:06:29', '2025-08-30 18:32:47', 'uploads/services/income-taxs-1756553567.jpg'),
(2, 'Sale Tax (Law and Procedures)', 'sale-tax-law-and-procedures', '<h3 class=\"\">SALES TAX (Law and Procedures)</h3><ol><li>REGISTRATION</li><li>FILLING OF RETURNS</li><li>FILLING OF STATUTORY STATEMENTS.</li><li>UNDERTAKING REPRESENTATION</li><li>AUDIT</li><li>APPEALS</li><li>OBJECTIONS</li><li>REFUNDS</li><li>OBTAINING TAX EXEMPTIONS & CONCESSIONS</li><li>COMPLIANCE OF STATUTORY NOTICES / LETTERS</li><li>DE-REGISTRATION</li></ol>', 2, 1, '2025-08-26 20:34:10', '2025-08-30 18:34:01', 'uploads/services/sale-tax-law-and-procedures-1756553641.jpg'),
(3, 'Assitance In Book Keeping', 'assitance-in-book-keeping', '<h3 class=\"\">ASSISTANCE IN BOOK KEEPING</h3><ol><li>PURCHASE REGISTERS</li><li>SALES REGISTERS</li><li>STOCK REGISTERS</li><li>CASH BOOK</li><li>LEDGERS</li><li>INCOME STATEMENT</li><li>BALANCE SHEET</li><li>COSTING REPORTS ETC</li></ol>', 3, 1, '2025-08-29 13:15:19', '2025-08-30 18:34:15', 'uploads/services/assitance-in-book-keeping-1756553655.jpg'),
(4, 'Company Law (Law and Procedures)', 'company-law-law-and-procedures', '<h3 class=\"\">Company Law (Law and Procedures)</h3><ol><li>REGISTRATION</li><li>FILLING OF ANNUAL STATUTORY RETURNS.</li><li>UNDERTAKING REPRESENTATION</li><li>AUDIT</li><li>OBJECTIONS</li><li>COMPLIANCE OF STATUTORY NOTICES / LETTERS</li></ol>', 4, 1, '2025-08-29 13:17:29', '2025-08-30 18:34:26', 'uploads/services/company-law-law-and-procedures-1756553666.jpg'),
(5, 'Trademark Law and Procedures', 'trademark-law-and-procedures', '<h3 class=\"\">Trademark Law and Procedures</h3><ol><li>REGISTRATION</li><li>APPEALS</li><li>OBJECTIONS</li><li>COMPLIANCE OF STATUTORY NOTICES / LETTERS</li></ol>', 5, 1, '2025-08-29 13:20:56', '2025-08-30 18:34:41', 'uploads/services/trademark-law-and-procedures-1756553681.jpg'),
(6, 'Copyrights Law and Procedures', 'copyrights-law-and-procedures', '<h3 class=\"\">Copyrights Law and Procedures</h3><ol><li>REGISTRATION</li><li>APPEALS</li><li>OBJECTIONS</li><li>COMPLIANCE OF STATUTORY NOTICES / LETTERS</li></ol>', 6, 1, '2025-08-29 13:23:20', '2025-08-30 18:34:52', 'uploads/services/copyrights-law-and-procedures-1756553692.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(800) NOT NULL,
  `lastname` varchar(800) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `country` varchar(500) NOT NULL,
  `zip_code` varchar(500) NOT NULL,
  `role_id` int(11) NOT NULL,
  `organization` varchar(500) NOT NULL,
  `profile_img` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `gender`, `city`, `country`, `zip_code`, `role_id`, `organization`, `profile_img`, `created_at`, `updated_at`) VALUES
(2, 'weboctanes', 'octanes', 'weboctane@gmail.com', '$2y$10$ZZBRgu2N2iiQvIscTR4E3uTQlEO/JGqfbQ3kPU9w6DLJoRpQ8KNo2', 'male', 'karachi', 'Pakistan', '75005', 1, 'weboctane@gmail.com', 'assets/profile_images/1744011663_web.png', '2025-04-03 06:24:10', '2025-04-07 14:41:03'),
(3, 'aziz ismail', 'aziz', 'azizismail@gmail.com', '$2y$10$z6/kLWJLK5MRw8CRIex5ZeMSWLVPkZhjH.bHcw3oOAojD9TeFqW8O', 'male', 'karachi', 'Pakistan', '75505', 1, 'aziz', 'assets/profile_images/1756449306_team2.jpg', '2025-04-03 18:30:17', '2025-08-29 18:37:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_settings`
--
ALTER TABLE `contact_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate`
--
ALTER TABLE `corporate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `downloads_year_label_index` (`year_label`);

--
-- Indexes for table `inner_banners`
--
ALTER TABLE `inner_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`),
  ADD KEY `idx_services_active_sort` (`is_active`,`sort_order`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `contact_settings`
--
ALTER TABLE `contact_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `corporate`
--
ALTER TABLE `corporate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inner_banners`
--
ALTER TABLE `inner_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
