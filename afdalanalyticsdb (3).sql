-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2021 at 02:30 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afdalanalyticsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otp` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `mobile`, `password`, `profile_picture`, `otp`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vikash Rai', 'vikash27hbk@gmail.com', NULL, '+917745870914', '123456', '1631018267.jpg', '9231', NULL, NULL, '2021-11-22 00:08:45'),
(2, 'seid', 'tairovikj.seid@gmail.com', NULL, '+916202063545', '123456', '1631018267.jpg', '1012', NULL, NULL, '2021-09-08 16:06:32'),
(3, 'joe', 'yswessi@gmail.com', NULL, '+916202063545', '123456', '1631018267.jpg', '3133', NULL, NULL, '2021-09-18 11:01:01'),
(4, 'abhinav', 'abhinavkansal001@gmail.com', NULL, '+916202063545', '123456', '1631018267.jpg', '9095', NULL, NULL, '2021-09-08 16:09:25'),
(5, 'Ravi Kant', 'ravisharmak13@gmail.com', NULL, NULL, '123456', NULL, '2568', NULL, NULL, '2021-09-08 17:49:57');

-- --------------------------------------------------------

--
-- Table structure for table `currency_rates`
--

CREATE TABLE `currency_rates` (
  `id` int(11) NOT NULL,
  `currency_name` varchar(100) NOT NULL,
  `current_value` varchar(20) NOT NULL,
  `base_currency` varchar(50) DEFAULT 'US Dollars',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currency_rates`
--

INSERT INTO `currency_rates` (`id`, `currency_name`, `current_value`, `base_currency`, `created_at`, `updated_at`) VALUES
(1, 'United Arab Emirates Dirham', '3.67', 'US Dollars', '2021-09-13 10:12:55', '2021-09-13 10:12:55'),
(2, 'Bahraini Dinar', '0.37', 'US Dollars', '2021-09-13 10:12:55', '2021-09-13 10:12:55'),
(3, 'Omani Rial', '0.38', 'US Dollars', '2021-09-13 10:14:59', '2021-09-13 10:14:59'),
(4, 'Qatari Riyal', '3.69', 'US Dollars', '2021-09-13 10:14:59', '2021-09-13 10:14:59'),
(5, 'Saudi Riyal', '3.75', 'US Dollars', '2021-09-13 10:15:57', '2021-09-13 10:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `customer_supports`
--

CREATE TABLE `customer_supports` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `ticket_id` varchar(100) NOT NULL,
  `ticket_title` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `ticket_message` text NOT NULL,
  `resolved` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_supports`
--

INSERT INTO `customer_supports` (`id`, `user_id`, `category`, `ticket_id`, `ticket_title`, `date`, `time`, `ticket_message`, `resolved`, `created_at`, `updated_at`) VALUES
(1, 'DH626EN602', 'Login Issue', 'KE724NM', 'Can not sign in on my account after changing email address', '25-06-2021', '14:53', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                              ', 1, '2021-09-13 14:27:59', '2021-09-13 15:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `customer_support_answers`
--

CREATE TABLE `customer_support_answers` (
  `id` int(11) NOT NULL,
  `customer_support_id` int(11) NOT NULL,
  `reply` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_support_answers`
--

INSERT INTO `customer_support_answers` (`id`, `customer_support_id`, `reply`, `created_at`, `updated_at`) VALUES
(1, 1, 'sdgsbgdsbetahbetbeat', '2021-09-13 14:57:36', '2021-09-13 14:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hostnames`
--

CREATE TABLE `hostnames` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fqdn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `force_https` tinyint(1) NOT NULL DEFAULT 0,
  `under_maintenance_since` timestamp NULL DEFAULT NULL,
  `website_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `knowledge_base`
--

CREATE TABLE `knowledge_base` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `knowledge_base`
--

INSERT INTO `knowledge_base` (`id`, `title`, `image`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'aamm', '1637141580.png', '1', 'nxnxnxn', NULL, '2021-11-17 04:03:00'),
(2, 'Abiuue', '1637141568.png', NULL, 'ananna', '2021-11-16 23:58:41', '2021-11-17 04:02:48'),
(3, 'nsnsn d', 'No Image', NULL, 'mdmxxb', '2021-11-17 01:20:00', '2021-11-17 03:49:11'),
(6, 'New', '/var/www/html/superadmin/images/knowlage-images', NULL, 'snsns', '2021-11-17 02:17:10', '2021-11-17 02:17:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_feeds`
--

CREATE TABLE `news_feeds` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `publish` int(11) NOT NULL,
  `delete_status` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_feeds`
--

INSERT INTO `news_feeds` (`id`, `title`, `image`, `description`, `publish`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'Demo title', '1631533516.jpeg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', 1, 0, '2021-09-13 13:16:38', '2021-09-13 11:45:16'),
(2, 'testing', '1631538883.jpg', '<p>testing description&nbsp;</p>', 0, 0, '2021-09-13 13:16:11', '2021-09-13 13:16:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_gateways`
--

CREATE TABLE `payment_gateways` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `api_signature` varchar(255) NOT NULL,
  `currency` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '1 Active 0 Inactive',
  `type` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_gateways`
--

INSERT INTO `payment_gateways` (`id`, `username`, `password`, `api_signature`, `currency`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1, 'crm-joe', 'joe-crm@123', 'testapisignature', 'USD', 1, 'stripe', '2021-09-06 07:33:49', '2021-09-09 14:34:18'),
(2, 'demo', 'sdgawgwe', 'dskjfvewhjFV78538', 'USD', 1, 'paypal', '2021-09-06 07:39:30', '2021-09-09 14:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `smtp_settings`
--

CREATE TABLE `smtp_settings` (
  `id` int(11) NOT NULL,
  `smtp_server_host` varchar(100) NOT NULL,
  `smtp_port_number` varchar(100) NOT NULL,
  `smtp_username` varchar(100) NOT NULL,
  `smtp_password` varchar(100) NOT NULL,
  `email_encryption_type` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smtp_settings`
--

INSERT INTO `smtp_settings` (`id`, `smtp_server_host`, `smtp_port_number`, `smtp_username`, `smtp_password`, `email_encryption_type`, `created_at`, `updated_at`) VALUES
(2, 'smtp.google.com', '465', 'test_user', 'test_pass', 'TLS', '2021-09-06 07:02:54', '2021-09-09 12:26:41');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_plans`
--

CREATE TABLE `subscription_plans` (
  `id` int(11) NOT NULL,
  `package_name` varchar(255) DEFAULT NULL,
  `package_amount` varchar(255) DEFAULT NULL,
  `package_duration` varchar(255) DEFAULT NULL,
  `package_short_description` text DEFAULT NULL,
  `package_long_description` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '1 Active 0 Inactive',
  `deleted` int(11) DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription_plans`
--

INSERT INTO `subscription_plans` (`id`, `package_name`, `package_amount`, `package_duration`, `package_short_description`, `package_long_description`, `status`, `deleted`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Trial', '0', '14', 'Trail Package', 'Trail Package', 1, 0, NULL, '2021-09-05 18:08:56', '2021-11-15 10:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `database_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `short_token` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_token` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_subscriptions`
--

CREATE TABLE `user_subscriptions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  `plan_amount` varchar(255) NOT NULL,
  `plan_duration` varchar(255) NOT NULL,
  `expiry_date` varchar(255) NOT NULL,
  `is_trial` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_subscriptions`
--

INSERT INTO `user_subscriptions` (`id`, `user_id`, `plan_name`, `plan_amount`, `plan_duration`, `expiry_date`, `is_trial`, `created_at`, `updated_at`) VALUES
(1, 28, 'Trial', '0', '14', '2021-11-29 11:05:06', 1, '2021-11-15 05:35:06', '2021-11-15 11:05:06'),
(2, 29, 'Trial', '0', '14', '2021-11-29 16:12:40', 1, '2021-11-15 10:42:40', '2021-11-15 16:12:40'),
(3, 30, 'Trial', '0', '14', '2021-12-03 07:49:46', 1, '2021-11-19 02:19:46', '2021-11-19 07:49:46'),
(4, 31, 'Trial', '0', '14', '2021-12-06 12:08:21', 1, '2021-11-22 06:38:21', '2021-11-22 12:08:21'),
(5, 32, 'Trial', '0', '14', '2021-12-06 13:11:19', 1, '2021-11-22 07:41:19', '2021-11-22 13:11:19'),
(6, 33, 'Trial', '0', '14', '2021-12-06 13:23:00', 1, '2021-11-22 07:53:00', '2021-11-22 13:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `managed_by_database_connection` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'References the database connection key in your database.php'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `website_settings`
--

CREATE TABLE `website_settings` (
  `id` int(11) NOT NULL,
  `website_logo` varchar(255) DEFAULT NULL,
  `copyright_content` text DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `address_google_link` varchar(500) DEFAULT NULL,
  `contact_details` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website_settings`
--

INSERT INTO `website_settings` (`id`, `website_logo`, `copyright_content`, `address`, `address_google_link`, `contact_details`, `created_at`, `updated_at`) VALUES
(1, '1631201299.jpg', 'Test Data', 'Test Address', 'Test Google Address Link', '<p>Test Contact Details</p>', '2021-09-09 15:10:27', '2021-09-09 15:28:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency_rates`
--
ALTER TABLE `currency_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_supports`
--
ALTER TABLE `customer_supports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_support_answers`
--
ALTER TABLE `customer_support_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hostnames`
--
ALTER TABLE `hostnames`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hostnames_fqdn_unique` (`fqdn`),
  ADD KEY `hostnames_website_id_foreign` (`website_id`);

--
-- Indexes for table `knowledge_base`
--
ALTER TABLE `knowledge_base`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_feeds`
--
ALTER TABLE `news_feeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `smtp_settings`
--
ALTER TABLE `smtp_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_settings`
--
ALTER TABLE `website_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `currency_rates`
--
ALTER TABLE `currency_rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_supports`
--
ALTER TABLE `customer_supports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_support_answers`
--
ALTER TABLE `customer_support_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostnames`
--
ALTER TABLE `hostnames`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `knowledge_base`
--
ALTER TABLE `knowledge_base`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news_feeds`
--
ALTER TABLE `news_feeds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
