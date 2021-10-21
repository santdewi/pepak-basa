-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 02:10 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pepak_basa`
--

-- --------------------------------------------------------

--
-- Table structure for table `aksaras`
--

CREATE TABLE `aksaras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `material_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contoh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aksaras`
--

INSERT INTO `aksaras` (`id`, `material_id`, `name`, `slug`, `materi`, `contoh`, `message`, `created_at`, `updated_at`) VALUES
(4, 5, 'Aksara jawa', 'aksara-jawa', 'aksara-materi/y08ndVuruC7A66DrTC76zV7GxbZQXVzcRq9rNdbq.png', 'aksara-contoh/NFTdEJckKtL6ITTmlczXgJiYuHg3RyL8aXxh9ze4.png', 'Aksara jawa atau biasa dikenal dengan hanacaraka. Aksara ini merupakan aksara asli dari Jawa.', '2021-10-18 00:33:47', '2021-10-19 03:26:32'),
(6, 5, 'Aksara angka', 'aksara-angka', 'aksara-materi/PcyHiMxv9jdHqSHJ8T3BbuHEiB8bV3eCPSIKSbvr.png', 'aksara-contoh/jNiE5qYhlRWTMeoEg530nPrGFzS8nsbzWJPcz6yf.png', 'Aksara angka digunakan untuk menulisakan bilangan dalam aksara jawa', '2021-10-19 03:27:39', '2021-10-19 03:27:39'),
(7, 5, 'Pasangan', 'pasangan', 'aksara-materi/1RIRiBvPf5MpVMln6mtEBixGzkzu8urpsAbMJQBx.png', 'aksara-contoh/UM7nFmtV4sXYWwK3F2x1w3ApI5RK1an9zpHfx4ap.png', 'Pasangan digunakan untuk ketika huruf mati yang berada di tengah maupun diakhir kata.', '2021-10-19 03:31:46', '2021-10-19 03:31:46'),
(8, 5, 'Sandhangan', 'sandhangan', 'aksara-materi/VF5LbzmWXiqpQVQD67A6TccaBG3swVufRROQ72FR.png', 'aksara-contoh/itNv67Us0vizFtHVfP3jfYtXdDhgQw0x9fmsZMsO.png', 'Sandhangan merupakan huruf vokal yang tidak berdiri sendiri dan digunakan pada tengah maupun akhir kata.', '2021-10-19 03:35:27', '2021-10-19 03:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gamelans`
--

CREATE TABLE `gamelans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `material_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gamelans`
--

INSERT INTO `gamelans` (`id`, `material_id`, `name`, `slug`, `image`, `credit`, `created_at`, `updated_at`) VALUES
(1, 4, 'Kempul', 'kempul', 'https://upload.wikimedia.org/wikipedia/commons/c/c6/Gamelan_Jawa_Indonesia_Gong_Kempul.jpg', 'Culturehistory, CC BY-SA 4.0 <https://creativecommons.org/licenses/by-sa/4.0>, via Wikimedia Commons', '2021-10-15 10:00:58', '2021-10-15 10:00:58'),
(2, 4, 'Gong', 'gong', 'https://upload.wikimedia.org/wikipedia/commons/0/0a/COLLECTIE_TROPENMUSEUM_Gong_%28gamelan_instrument%29_Kempul_TMnr_4423-2.jpg', 'Tropenmuseum, part of the National Museum of World Cultures, CC BY-SA 3.0 <https://creativecommons.org/licenses/by-sa/3.0>, via Wikimedia Commons', '2021-10-15 10:02:18', '2021-10-15 10:02:18'),
(3, 4, 'Kenong', 'kenong', 'https://upload.wikimedia.org/wikipedia/commons/1/1c/Gamelan_Jawa_-_Set_Kenong.jpg', 'Culturehistory, CC BY-SA 4.0 <https://creativecommons.org/licenses/by-sa/4.0>, via Wikimedia Commons', '2021-10-15 10:03:29', '2021-10-15 10:03:29'),
(4, 4, 'Bonang', 'bonang', 'https://upload.wikimedia.org/wikipedia/commons/8/80/Gamelan_Jawa_-_Set_Bonang01.jpg', 'Culturehistory, CC BY-SA 4.0 <https://creativecommons.org/licenses/by-sa/4.0>, via Wikimedia Commons', '2021-10-15 10:04:51', '2021-10-15 10:04:51'),
(5, 4, 'Demung', 'demung', 'https://upload.wikimedia.org/wikipedia/commons/c/c2/Gamelan_Jawa_Saron_Demung_Anyar.jpg', 'Culturehistory, CC BY-SA 4.0 <https://creativecommons.org/licenses/by-sa/4.0>, via Wikimedia Commons', '2021-10-15 10:05:46', '2021-10-15 10:05:46'),
(6, 4, 'Saron', 'saron', 'https://upload.wikimedia.org/wikipedia/commons/3/34/COLLECTIE_TROPENMUSEUM_Metallofoon_met_zes_toetsen_onderdeel_van_gamelan_Slendro_TMnr_500-11.jpg', 'Tropenmuseum, part of the National Museum of World Cultures, CC BY-SA 3.0 <https://creativecommons.org/licenses/by-sa/3.0>, via Wikimedia Commons', '2021-10-15 10:07:22', '2021-10-15 10:07:22'),
(7, 4, 'Peking', 'peking', 'https://upload.wikimedia.org/wikipedia/commons/d/d5/Gamelan_Jawa_-_Saron_Peking.jpg', 'Culturehistory, CC BY-SA 4.0 <https://creativecommons.org/licenses/by-sa/4.0>, via Wikimedia Commons', '2021-10-15 10:12:14', '2021-10-15 10:12:14'),
(8, 4, 'Gender', 'gender', 'https://upload.wikimedia.org/wikipedia/commons/3/35/COLLECTIE_TROPENMUSEUM_Metallofoon_met_veertien_toetsen_onderdeel_van_gamelan_Slendro_TMnr_500-4.jpg', 'Tropenmuseum, part of the National Museum of World Cultures, CC BY-SA 3.0 <https://creativecommons.org/licenses/by-sa/3.0>, via Wikimedia Commons', '2021-10-15 10:13:15', '2021-10-15 10:13:15'),
(9, 4, 'Slenthem', 'slenthem', 'https://upload.wikimedia.org/wikipedia/commons/7/7a/COLLECTIE_TROPENMUSEUM_Metallofoon_bestaande_uit_zeven_toetsen_en_een_onderstel_onderdeel_van_gamelan_Slendro_TMnr_500-1.jpg', 'Tropenmuseum, part of the National Museum of World Cultures, CC BY-SA 3.0 <https://creativecommons.org/licenses/by-sa/3.0>, via Wikimedia Commons', '2021-10-15 10:14:27', '2021-10-15 10:14:27'),
(10, 4, 'Kendang', 'kendang', 'https://upload.wikimedia.org/wikipedia/commons/e/e9/COLLECTIE_TROPENMUSEUM_Dubbelvellige_tonvormige_trom_onderdeel_van_gamelan_Slendro_TMnr_500-7.jpg', 'Tropenmuseum, part of the National Museum of World Cultures, CC BY-SA 3.0 <https://creativecommons.org/licenses/by-sa/3.0>, via Wikimedia Commons', '2021-10-15 10:15:38', '2021-10-15 10:15:38'),
(11, 4, 'Gambang', 'gambang', 'https://upload.wikimedia.org/wikipedia/commons/8/8c/COLLECTIE_TROPENMUSEUM_Xylofoon_met_twintig_toetsen_onderdeel_van_gamelan_Slendro_TMnr_500-9.jpg', 'Tropenmuseum, part of the National Museum of World Cultures, CC BY-SA 3.0 <https://creativecommons.org/licenses/by-sa/3.0>, via Wikimedia Commons', '2021-10-15 10:16:44', '2021-10-15 10:16:44'),
(12, 4, 'Siter', 'siter', 'https://upload.wikimedia.org/wikipedia/commons/b/b3/COLLECTIE_TROPENMUSEUM_Citer_met_26_snaren_onderdeel_van_gamelan_Slendro_TMnr_500-10.jpg', 'Tropenmuseum, part of the National Museum of World Cultures, CC BY-SA 3.0 <https://creativecommons.org/licenses/by-sa/3.0>, via Wikimedia Commons', '2021-10-15 10:18:43', '2021-10-15 10:18:43'),
(13, 4, 'Rebab', 'rebab', 'https://upload.wikimedia.org/wikipedia/commons/6/65/COLLECTIE_TROPENMUSEUM_Klankkast_van_langhalsluit_TMnr_5057-2a.jpg', 'Tropenmuseum, part of the National Museum of World Cultures, CC BY-SA 3.0 <https://creativecommons.org/licenses/by-sa/3.0>, via Wikimedia Commons', '2021-10-15 10:19:31', '2021-10-15 10:19:31'),
(14, 4, 'Suling', 'suling', 'https://upload.wikimedia.org/wikipedia/commons/6/65/COLLECTIE_TROPENMUSEUM_Bandfluit_van_bamboe_met_vier_vingergaten_TMnr_H-1783.jpg', 'Tropenmuseum, part of the National Museum of World Cultures, CC BY-SA 3.0 <https://creativecommons.org/licenses/by-sa/3.0>, via Wikimedia Commons', '2021-10-15 10:20:22', '2021-10-15 10:20:22'),
(15, 4, 'Kemanak', 'kemanak', 'https://upload.wikimedia.org/wikipedia/commons/5/5a/COLLECTIE_TROPENMUSEUM_Bekken_van_messing_TMnr_2711-1a.jpg', 'Tropenmuseum, part of the National Museum of World Cultures, CC BY-SA 3.0 <https://creativecommons.org/licenses/by-sa/3.0>, via Wikimedia Commons', '2021-10-15 10:21:16', '2021-10-15 10:21:16'),
(16, 4, 'Kethuk kempyang', 'kethuk-kempyang', 'https://upload.wikimedia.org/wikipedia/commons/7/7d/COLLECTIE_TROPENMUSEUM_Gong_hangend_in_frame_onderdeel_van_gamelan_Slendro_TMnr_500-21.jpg', 'Tropenmuseum, part of the National Museum of World Cultures, CC BY-SA 3.0 <https://creativecommons.org/licenses/by-sa/3.0>, via Wikimedia Commons', '2021-10-15 10:30:00', '2021-10-15 10:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `kramas`
--

CREATE TABLE `kramas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `material_id` bigint(20) UNSIGNED NOT NULL,
  `ngoko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `krama_madya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `krama_inggil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kramas`
--

INSERT INTO `kramas` (`id`, `material_id`, `ngoko`, `krama_madya`, `krama_inggil`, `created_at`, `updated_at`) VALUES
(1, 2, 'alis', 'alis', 'imba', '2021-10-17 06:37:04', '2021-10-17 06:37:04'),
(2, 2, 'ati', 'manah', 'penggalih', '2021-10-17 06:39:04', '2021-10-17 07:12:06'),
(4, 2, 'awak', 'badan', 'salira', '2021-10-17 07:20:12', '2021-10-17 07:20:12'),
(5, 2, 'bangkekan', 'bangkekan', 'pamekan', '2021-10-17 07:20:36', '2021-10-17 07:20:36'),
(6, 2, 'bathuk', 'bathuk', 'palarapan', '2021-10-17 07:21:08', '2021-10-17 07:21:08'),
(7, 2, 'bokong', 'bokong', 'bocong', '2021-10-17 07:21:22', '2021-10-17 07:21:22'),
(8, 2, 'brengos', 'brengos', 'gumbala', '2021-10-17 07:23:43', '2021-10-17 07:23:55'),
(9, 2, 'cangkem', 'cangkem', 'tutuk', '2021-10-17 07:24:13', '2021-10-17 07:24:13'),
(10, 2, 'cengel', 'cengel', 'griwa', '2021-10-17 07:24:36', '2021-10-17 07:24:36'),
(11, 2, 'dhadha', 'dhadha', 'jaja', '2021-10-17 07:24:56', '2021-10-17 07:24:56'),
(12, 2, 'dhengkul', 'dhengkul', 'jengkul', '2021-10-17 07:25:16', '2021-10-17 07:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `name`, `slug`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Pamasastra', 'pamasastra', NULL, NULL, NULL),
(2, 'Krama', 'krama', 'Silahkan masukkan tembung yang akan dicari', NULL, NULL),
(3, 'Wayang', 'wayang', 'Silahkan masukkan nama wayang yang akan dicari.', NULL, NULL),
(4, 'Gamelan', 'gamelan', 'Silahkan masukkan nama gaemaln yang akan dicari', NULL, NULL),
(5, 'Hanacaraka', 'hanacaraka', NULL, NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2014_10_12_000000_create_users_table', 3),
(8, '2021_10_15_140739_create_materis_table', 4),
(13, '2021_10_14_083803_create_gamelans_table', 6),
(15, '2021_10_15_144540_create_materials_table', 7),
(16, '2021_10_16_120428_create_kramas_table', 8),
(18, '2021_10_17_170032_create_aksaras_table', 9),
(20, '2021_10_18_083409_create_wayangs_table', 10),
(21, '2021_10_18_122945_create_pamasastras_table', 11),
(23, '2021_10_18_124633_create_pcategories_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `pamasastras`
--

CREATE TABLE `pamasastras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `material_id` bigint(20) UNSIGNED NOT NULL,
  `pcategory_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pamasastras`
--

INSERT INTO `pamasastras` (`id`, `material_id`, `pcategory_id`, `name`, `slug`, `materi`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 'Tembung tanggap dan tanduk', 'tembung-tanggap-dan-tanduk', 'pamasastra-materi/H74tReRU0ElPCXDm2V51qGTHHjUFyIdqCf4FAhXZ.png', '2021-10-19 04:51:41', '2021-10-19 04:51:41'),
(4, 1, 1, 'Tembung lingga', 'tembung-lingga', 'pamasastra-materi/06gnJMmenwYHsbtoU8o6zeObfKB93X2p8EFAOYKO.png', '2021-10-19 04:58:19', '2021-10-19 04:58:19'),
(5, 1, 1, 'Tembung Rangkap', 'tembung-rangkap', 'pamasastra-materi/GTE9UmdD72iCJr6CbN4T0kkRDSYZQ0QgBoJFIpbp.png', '2021-10-19 04:58:43', '2021-10-19 04:58:43'),
(6, 1, 3, 'Sil-silahing ukara', 'sil-silahing-ukara', 'pamasastra-materi/h658dD4xILHHMKQPDi20HsRnp1ib5MXaSN9EEhKm.png', '2021-10-19 05:02:11', '2021-10-19 05:27:13'),
(8, 1, 2, 'Sil-silahing tembung', 'sil-silahing-tembung', 'pamasastra-materi/k3UJqP9297ZsoIjk4pGujNEdCPRH5A2ikkFlMhTb.png', '2021-10-19 05:10:37', '2021-10-19 05:10:37');

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
-- Table structure for table `pcategories`
--

CREATE TABLE `pcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pcategories`
--

INSERT INTO `pcategories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Jenise tembung', '2021-10-18 06:39:16', '2021-10-18 06:39:16'),
(2, 'Sil-silahing tembung', '2021-10-18 06:39:34', '2021-10-18 06:39:34'),
(3, 'Sil-silahing ukara', '2021-10-18 06:40:40', '2021-10-18 06:40:40');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Santika', 'sandewi00@gmail.com', '$2y$10$JY4Gc1KVNH5lHI6ni4XC5e2hefztvEXHKhR5vi1XlX89wPTYQCxSS', NULL, '2021-10-07 02:38:29', '2021-10-07 02:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `wayangs`
--

CREATE TABLE `wayangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `material_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wayangs`
--

INSERT INTO `wayangs` (`id`, `material_id`, `name`, `slug`, `image`, `credit`, `created_at`, `updated_at`) VALUES
(1, 3, 'Duryudana', 'duryudana', 'https://klubanet.files.wordpress.com/2015/08/duryudana.jpg', 'klubanet.com', '2021-10-18 04:30:53', '2021-10-18 04:30:53'),
(2, 3, 'Durmagati', 'durmagati', 'https://klubanet.files.wordpress.com/2015/08/durmagati.jpg', 'klubanet.com', '2021-10-18 04:34:39', '2021-10-18 04:34:39'),
(4, 3, 'Citraksa', 'citraksa', 'https://klubanet.files.wordpress.com/2015/08/citraksa.jpg', 'klubanet.com', '2021-10-18 04:53:46', '2021-10-18 04:53:46'),
(5, 3, 'Dursilawati', 'dursilawati', 'https://klubanet.files.wordpress.com/2015/08/dursilawati.jpg', 'klubanet.com', '2021-10-18 05:08:35', '2021-10-18 05:08:35'),
(6, 3, 'Abimanyu', 'abimanyu', 'https://klubanet.files.wordpress.com/2016/04/abimanyu_solo.jpg', 'klubanet.com', '2021-10-18 05:15:39', '2021-10-18 05:15:39'),
(7, 3, 'Wisanggeni', 'wisanggeni', 'https://klubanet.files.wordpress.com/2016/04/wisanggeni-jangkah-lengkap.jpg', 'website klubanet.com', '2021-10-18 05:16:49', '2021-10-18 05:21:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aksaras`
--
ALTER TABLE `aksaras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gamelans`
--
ALTER TABLE `gamelans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kramas`
--
ALTER TABLE `kramas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pamasastras`
--
ALTER TABLE `pamasastras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pcategories`
--
ALTER TABLE `pcategories`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wayangs`
--
ALTER TABLE `wayangs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aksaras`
--
ALTER TABLE `aksaras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gamelans`
--
ALTER TABLE `gamelans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kramas`
--
ALTER TABLE `kramas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pamasastras`
--
ALTER TABLE `pamasastras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pcategories`
--
ALTER TABLE `pcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wayangs`
--
ALTER TABLE `wayangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
