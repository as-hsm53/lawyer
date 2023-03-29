-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 12:55 PM
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
-- Database: `eproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'hussainkhozema110@gmail.com', 'Hussain123426', '2022-11-07 04:32:45', '2022-11-07 04:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) NOT NULL,
  `lawyerId` bigint(20) NOT NULL,
  `bookDate` date NOT NULL,
  `bookTimeStart` time NOT NULL,
  `bookTimeEnd` time NOT NULL,
  `cityId` bigint(20) NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Deactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `userId`, `lawyerId`, `bookDate`, `bookTimeStart`, `bookTimeEnd`, `cityId`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-11-09', '07:00:00', '08:00:00', 3, 'I\'d really appreciate if you could guide me to make proper financial and business related decisions by the law, with tax reduction and other legal prospects', 'Approved', '2022-11-17 06:28:00', '2022-11-21 08:08:36'),
(2, 2, 2, '2022-11-21', '13:00:00', '16:00:00', 17, 'I\'m having issues with a contract i have received and would appreciate the help of an expert lawyer i this manner, I\'d greatly appreciate any and all recommendations from you.', 'Approved', '2022-11-17 02:49:43', '2022-11-18 00:29:22'),
(3, 2, 5, '2022-11-30', '15:00:00', '18:00:00', 1, 'Please Help Me Build My Business In term With The Laws Of the country', 'Approved', '2022-11-17 07:07:16', '2022-11-21 10:11:20'),
(4, 1, 7, '2022-12-29', '11:00:00', '12:00:00', 3, 'I need To hire A personal lawyer to help me with my personal life matters and, extensive legal actions', 'Scheduled', '2022-11-21 08:05:50', '2022-11-21 08:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city`, `state`) VALUES
(1, 'Karachi', 'Sindh'),
(2, 'Lahore', 'Punjab'),
(3, 'Faisalabad', 'Punjab'),
(4, 'Rawalpindi', 'Punjab'),
(5, 'Gujranwala', 'Punjab'),
(6, 'Peshawar', 'Khyber Pakhtunkhwa'),
(7, 'Multan', 'Punjab'),
(8, 'Saidu Sharif', 'Khyber Pakhtunkhwa'),
(9, 'Hyderabad City', 'Sindh'),
(10, 'Islamabad', 'Khyber Pakhtunkhwa'),
(11, 'Quetta', 'Balochistan'),
(12, 'Bahawalpur', 'Punjab'),
(13, 'Sargodha', 'Punjab'),
(14, 'Sialkot City', 'Punjab'),
(15, 'Sukkur', 'Sindh'),
(16, 'Larkana', 'Sindh'),
(17, 'Chiniot', 'Punjab'),
(18, 'Shekhupura', 'Punjab'),
(19, 'Jhang City', 'Punjab'),
(20, 'Dera Ghazi Khan', 'Punjab'),
(21, 'Gujrat', 'Punjab'),
(22, 'Rahimyar Khan', 'Punjab'),
(23, 'Kasur', 'Punjab'),
(24, 'Mardan', 'Khyber Pakhtunkhwa'),
(25, 'Nawabshah', 'Sindh'),
(26, 'Sahiwal', 'Punjab'),
(27, 'Mirpur Khas', 'Sindh'),
(28, 'Okara', 'Punjab'),
(29, 'Mandi Burewala', 'Punjab'),
(30, 'Jacobabad', 'Sindh'),
(31, 'Saddiqabad', 'Punjab'),
(32, 'Kohat', 'Khyber Pakhtunkhwa'),
(33, 'Muridke', 'Punjab'),
(34, 'Muzaffargarh', 'Punjab'),
(35, 'Khanpur', 'Punjab'),
(36, 'Gojra', 'Punjab'),
(37, 'Mandi Bahauddin', 'Punjab'),
(38, 'Abbottabad', 'Khyber Pakhtunkhwa'),
(39, 'Turbat', 'Balochistan'),
(40, 'Dadu', 'Sindh'),
(41, 'Khairpur Mir?s', 'Sindh'),
(42, 'Bahawalnagar', 'Punjab'),
(43, 'Khuzdar', 'Balochistan'),
(44, 'Pakpattan', 'Punjab'),
(45, 'Zafarwal', 'Punjab'),
(46, 'Tando Allahyar', 'Sindh'),
(47, 'Jaranwala', 'Punjab'),
(48, 'Ahmadpur East', 'Punjab'),
(49, 'Vihari', 'Punjab'),
(50, 'New Mirpur', 'Khyber Pakhtunkhwa'),
(51, 'Kamalia', 'Punjab'),
(52, 'Kot Addu', 'Punjab'),
(53, 'Nowshera', 'Khyber Pakhtunkhwa'),
(54, 'Swabi', 'Khyber Pakhtunkhwa'),
(55, 'Khushab', 'Punjab'),
(56, 'Dera Ismail Khan', 'Khyber Pakhtunkhwa'),
(57, 'Chaman', 'Balochistan'),
(58, 'Charsadda', 'Khyber Pakhtunkhwa'),
(59, 'Kandhkot', 'Sindh'),
(60, 'Chishtian', 'Punjab'),
(61, 'Hasilpur', 'Punjab'),
(62, 'Attock Khurd', 'Punjab'),
(63, 'Kambar', 'Sindh'),
(64, 'Arifwala', 'Punjab'),
(65, 'Muzaffarabad', 'Khyber Pakhtunkhwa'),
(66, 'Mianwali', 'Punjab'),
(67, 'Jalalpur Jattan', 'Punjab'),
(68, 'Bhakkar', 'Punjab'),
(69, 'Zhob', 'Balochistan'),
(70, 'Dipalpur', 'Punjab'),
(71, 'Kharian', 'Punjab'),
(72, 'Mian Channun', 'Punjab'),
(73, 'Bhalwal', 'Punjab'),
(74, 'Jamshoro', 'Sindh'),
(75, 'Pattoki', 'Punjab'),
(76, 'Harunabad', 'Punjab'),
(77, 'Kahror Pakka', 'Punjab'),
(78, 'Toba Tek Singh', 'Punjab'),
(79, 'Samundri', 'Punjab'),
(80, 'Shakargarh', 'Punjab'),
(81, 'Sambrial', 'Punjab'),
(82, 'Shujaabad', 'Punjab'),
(83, 'Hujra Shah Muqim', 'Punjab'),
(84, 'Kabirwala', 'Punjab'),
(85, 'Mansehra', 'Khyber Pakhtunkhwa'),
(86, 'Lala Musa', 'Punjab'),
(87, 'Chunian', 'Punjab'),
(88, 'Nankana Sahib', 'Punjab'),
(89, 'Bannu', 'Khyber Pakhtunkhwa'),
(90, 'Pasrur', 'Punjab'),
(91, 'Timargara', 'Khyber Pakhtunkhwa'),
(92, 'Parachinar', 'Khyber Pakhtunkhwa'),
(93, 'Chenab Nagar', 'Punjab'),
(94, 'Abdul Hakim', 'Punjab'),
(95, 'Gwadar', 'Balochistan'),
(96, 'Hassan Abdal', 'Punjab'),
(97, 'Tank', 'Khyber Pakhtunkhwa'),
(98, 'Hangu', 'Khyber Pakhtunkhwa'),
(99, 'Risalpur Cantonment', 'Khyber Pakhtunkhwa'),
(100, 'Karak', 'Khyber Pakhtunkhwa'),
(101, 'Kundian', 'Punjab'),
(102, 'Umarkot', 'Sindh'),
(103, 'Chitral', 'Khyber Pakhtunkhwa'),
(104, 'Dainyor', 'Khyber Pakhtunkhwa'),
(105, 'Kulachi', 'Khyber Pakhtunkhwa'),
(106, 'Kalat', 'Balochistan'),
(107, 'Kotli', 'Khyber Pakhtunkhwa'),
(108, 'Murree', 'Punjab'),
(109, 'Mithi', 'Sindh'),
(110, 'Mian Sahib', 'Sindh'),
(111, 'Gilgit', 'Khyber Pakhtunkhwa'),
(112, 'Gilwala', 'Punjab');

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Deactive',
  `cityId` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`id`, `firstName`, `lastName`, `email`, `password`, `qualification`, `description`, `address`, `image`, `status`, `cityId`, `created_at`, `updated_at`) VALUES
(1, 'Muhammed', 'Ali', 'Muhammed.ali@gmail.com', 'MuhammedAli', 'Business', 'I\'ve Been Practising Businss law for The Past 15 Years.', 'Garden', '1668498312.png', 'Active', 1, '2022-10-28 01:37:44', '2022-11-17 23:49:21'),
(2, 'Hussain', 'Khozema', 'hussain2109d@gmail.com', 'Hussain123426', 'Civil', 'I have an experience in civil, for nearly a decade, and can easily assist you with whatever questions you may have about it.', 'Garden', '1668411486.png', 'Active', 17, '2022-10-29 07:02:12', '2022-11-14 02:38:06'),
(3, 'batool', 'khozema', 'signoraperfetta@gmail.com', 'batul123', 'Family', 'i like sports, love to read ,am a very competitive person.', 'sadar', '1668411559.png', 'Active', 10, '2022-10-29 12:34:02', '2022-11-14 02:39:19'),
(4, 'hussain', 'khozema', 'hussain2002maimoon@gmail.com', 'Hussain123426', 'Civil', 'testing testing', 'saddar', '1668411614.png', 'Active', 13, '2022-11-04 05:58:12', '2022-11-14 02:40:14'),
(5, 'Hassan', 'Muraad', 'Hassan2109f@aptechgdn.net', 'Bewafa124', 'Business', 'Gamer, Youtuber, And Best At  Business Law', 'Garden', '1668411706.png', 'Active', 1, '2022-11-06 23:28:42', '2022-11-21 10:29:48'),
(6, 'Kabeer', 'Ahmed', 'kabeer2109d@aptechgdn.net', 'kabeer123', 'Civil', 'I have Immense Knowledge on civil law, and will be able to easily  assist you in all legal activities regarding civil law', 'Garden', '1668411744.png', 'Active', 1, '2022-11-10 02:30:43', '2022-11-14 02:42:24'),
(7, 'Ummehani', 'Yousuf', 'insiya2109d@aptechgdn.net', 'Hussain123426', 'Personal', 'I Specialize in Personal law, which shouldn\'t be confused with family law. this law practice solely specializes in ones personal life, and circumstances regarding it..', 'saddar', '1668592898.png', 'Active', 3, '2022-11-16 04:54:47', '2022-11-16 06:46:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_10_26_094752_create_cities_table', 1),
(8, '2022_10_26_094856_create_lawyers_table', 2),
(9, '2022_11_06_152057_add_image_to_lawyers_table', 3),
(10, '2022_11_06_155726_add_image_and_status_to_lawyers_table', 4),
(11, '2022_11_07_043059_create_admins_table', 5),
(12, '2022_11_14_061249_create_users_table', 6),
(13, '2022_11_14_111219_create_bookings_table', 6),
(14, '2022_11_17_061455_bookings', 7),
(15, '2022_11_17_074505_add_status_to_bookings_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cityId` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`, `address`, `cityId`, `created_at`, `updated_at`) VALUES
(1, 'Hussain', 'Khozema', 'hussain2002maimoon@gmail.com', 'Hussain123426', 'saddar', 1, '2022-11-15 01:08:23', '2022-11-15 01:08:23'),
(2, 'Hussain', 'Khozema', 'hussain2109d@aptechgdn.net', 'Hussain123426', 'saddar', 1, '2022-11-15 01:11:14', '2022-11-15 01:11:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
