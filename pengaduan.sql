-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 15 Jul 2019 pada 22.27
-- Versi Server: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adminku', 'admin@mail.com', '$2y$10$maByq0schejRhSX9ZSsFxORB6oco1zlsouJ4Psd4zvuHcvoQNEQKW', NULL, '2019-07-09 06:09:45', '2019-07-09 06:09:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aduans`
--

CREATE TABLE `aduans` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aduans`
--

INSERT INTO `aduans` (`id`, `user_id`, `kategori_id`, `judul`, `isi`, `image`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'imagesAduan/tVlA9OWirpDyMa3SIWh0vjSsaiwuiegxfajwDxJY.png', 1, '2019-07-09 06:11:29', '2019-07-09 06:11:29'),
(2, 1, 2, 'Hari Bersih Nasional', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'imagesAduan/Mq9cLrLR5WpCWqUSRCmreFUjqltqlPXSNWAgp7e7.png', 1, '2019-07-09 06:11:59', '2019-07-09 06:11:59'),
(3, 1, 1, 'Hari Bersih Nasional', 'ASHDjshabLkjnslacnZKN clksndlak,mnzskncklznlckskdmalmjbfklds nc;nmc;almdj;lKL,', 'imagesAduan/Dsk1nsliru9LYQvbSISHlGGJgTMbDN0WVcu3Zw9c.png', 1, '2019-07-10 09:09:24', '2019-07-10 09:09:24'),
(4, 2, 1, 'Bismillah Coba Posting', 'lorem ipsum lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', 'imagesAduan/TKItX6V1t7pwwGINqQNyBax0XhQrCNaBHkX1MqLO.png', 1, '2019-07-14 07:51:49', '2019-07-14 07:51:49'),
(5, 1, 2, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu', 'imagesAduan/EERLdeNThossjxNB4IwHxq608jw8PIZTHKHxLlMh.png', 1, '2019-07-15 05:44:50', '2019-07-15 05:44:50'),
(6, 1, 2, 'What is Lorem Ipsum?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'imagesAduan/y7yE2jqbGxtiMgQ22D90NmSQ1EAwGnOlh6f0T0Uh.png', 1, '2019-07-15 05:48:02', '2019-07-15 05:48:02'),
(7, 1, 1, 'Hari Bersih Nasional', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'imagesAduan/tFbocjeNVdGACboZVVvg1D1fHMSA4lwUEyCHgKDW.png', 1, '2019-07-15 05:48:36', '2019-07-15 05:48:36'),
(8, 1, 2, 'Bismillah', '<div class=\"col s12 m6 l6\">', 'imagesAduan/IFirmCSAhZInRxx4WMhwIVvcCcj50o3xfX0a1OTO.png', 1, '2019-07-15 05:55:06', '2019-07-15 05:55:06'),
(9, 1, 1, 'Bismillah', '<div class=\"col s12 m6 l6\">', 'imagesAduan/rUEdeFxDNwv17Op0P0mC4V9mO59blMCOsgJ7o5fk.png', 1, '2019-07-15 05:56:01', '2019-07-15 05:56:01'),
(10, 1, 1, 'Bismillah', '<div class=\"col s12 m12 l6\">\r\n                            @if ($message = Session::get(\'danger\'))\r\n                            <div class=\"card-alert card red lighten-5\">\r\n                                <div class=\"card-content red-text\">\r\n                                    <p>Berhasil Dihapus.</p>\r\n                                </div>\r\n                                <button type=\"button\" class=\"close red-text\" data-dismiss=\"alert\" aria-label=\"Close\">\r\n                                    <span aria-hidden=\"true\">×</span>\r\n                                </button>\r\n                            </div>\r\n                            @endif\r\n                        </div>', 'imagesAduan/NL2zOMUqycV7mmOLecBsEezaEMKoK7wsJBvvSVM0.png', 1, '2019-07-15 05:56:59', '2019-07-15 05:56:59'),
(11, 1, 1, 'Hari Bersih Nasional', '<div class=\"col s12 m12 l6\">\r\n                            @if ($message = Session::get(\'danger\'))\r\n                            <div class=\"card-alert card red lighten-5\">\r\n                                <div class=\"card-content red-text\">\r\n                                    <p>Berhasil Dihapus.</p>\r\n                                </div>\r\n                                <button type=\"button\" class=\"close red-text\" data-dismiss=\"alert\" aria-label=\"Close\">\r\n                                    <span aria-hidden=\"true\">×</span>\r\n                                </button>\r\n                            </div>\r\n                            @endif\r\n                        </div>', 'imagesAduan/cbwYt5u3FjeIU9BR104ftkSKSmkIDeHf552brGOA.png', 1, '2019-07-15 05:57:43', '2019-07-15 05:57:43'),
(12, 1, 2, 'Hari Bersih Nasional', '/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas/var/www/html/gouas', 'imagesAduan/pRIgxjGVkFxZKQhs4YHgDH2vQB2MnNDVxAhadI7t.png', 0, '2019-07-15 08:25:24', '2019-07-15 08:25:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `name`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'Isi Ulang Galon', 0, '2019-07-09 06:10:38', '2019-07-09 06:10:38'),
(2, 'Isi Ulang Syrup', 0, '2019-07-09 06:10:53', '2019-07-09 06:10:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logs`
--

CREATE TABLE `logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `aktivitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `aktivitas`, `created_at`, `updated_at`) VALUES
(1, 1, 'Menambahkan Pengaduan Baru', '2019-07-10 09:09:24', '2019-07-10 09:09:24'),
(2, 1, 'Melihat detail aduan dari ', '2019-07-10 10:06:04', '2019-07-10 10:06:04'),
(3, 1, 'Melihat detail aduan {{name}}', '2019-07-10 10:07:48', '2019-07-10 10:07:48'),
(4, 1, 'Melihat detail aduan ', '2019-07-10 10:14:29', '2019-07-10 10:14:29'),
(5, 1, 'Melihat detail aduan What is Lorem Ipsum?', '2019-07-10 10:15:04', '2019-07-10 10:15:04'),
(6, 1, 'Melihat detail aduan What is Lorem Ipsum?', '2019-07-10 10:15:09', '2019-07-10 10:15:09'),
(7, 2, 'Menambahkan Pengaduan Baru', '2019-07-14 07:51:49', '2019-07-14 07:51:49'),
(8, 2, 'Melihat detail aduan What is Lorem Ipsum?', '2019-07-14 07:52:05', '2019-07-14 07:52:05'),
(9, 2, 'Melihat detail aduan Hari Bersih Nasional', '2019-07-14 07:52:39', '2019-07-14 07:52:39'),
(10, 1, 'menghapus pengaduannya yang berjudul  ', '2019-07-15 05:38:26', '2019-07-15 05:38:26'),
(11, 1, 'Menambahkan Pengaduan Baru', '2019-07-15 05:44:50', '2019-07-15 05:44:50'),
(12, 1, 'menghapus pengaduannya yang berjudul  ', '2019-07-15 05:44:56', '2019-07-15 05:44:56'),
(13, 1, 'Menambahkan Pengaduan Baru', '2019-07-15 05:48:02', '2019-07-15 05:48:02'),
(14, 1, 'Menambahkan Pengaduan Baru', '2019-07-15 05:48:36', '2019-07-15 05:48:36'),
(15, 1, 'menghapus pengaduannya yang berjudul  ', '2019-07-15 05:52:37', '2019-07-15 05:52:37'),
(16, 1, 'menghapus pengaduannya yang berjudul  ', '2019-07-15 05:53:57', '2019-07-15 05:53:57'),
(17, 1, 'Menambahkan Pengaduan Baru', '2019-07-15 05:55:06', '2019-07-15 05:55:06'),
(18, 1, 'menghapus pengaduannya yang berjudul  ', '2019-07-15 05:55:11', '2019-07-15 05:55:11'),
(19, 1, 'Menambahkan Pengaduan Baru', '2019-07-15 05:56:01', '2019-07-15 05:56:01'),
(20, 1, 'menghapus pengaduannya yang berjudul  ', '2019-07-15 05:56:06', '2019-07-15 05:56:06'),
(21, 1, 'Menambahkan Pengaduan Baru', '2019-07-15 05:56:59', '2019-07-15 05:56:59'),
(22, 1, 'menghapus pengaduannya yang berjudul  ', '2019-07-15 05:57:02', '2019-07-15 05:57:02'),
(23, 1, 'Menambahkan Pengaduan Baru', '2019-07-15 05:57:43', '2019-07-15 05:57:43'),
(24, 1, 'menghapus pengaduannya yang berjudul  ', '2019-07-15 05:57:46', '2019-07-15 05:57:46'),
(25, 1, 'Menambahkan Pengaduan Baru', '2019-07-15 08:25:24', '2019-07-15 08:25:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_01_125134_create_admins_table', 1),
(4, '2019_05_18_163730_create_kategoris_table', 1),
(5, '2019_06_19_040909_create_tanggapans_table', 1),
(6, '2019_06_19_041735_create_aduans_table', 1),
(7, '2019_07_09_130339_create_logs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapans`
--

CREATE TABLE `tanggapans` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_aduan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tanggapan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notelp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `alamat`, `notelp`, `kelamin`, `image`, `status`, `password`, `email_verified_at`, `deleted`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hisyam Maulana', 'hisyammaulana2015@gmail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$9bztnMejDl/GFW/eJ/R7l.ljm6YF1uoqi5cFmjPLkEKN.NblQFh7q', NULL, 0, NULL, '2019-07-09 06:07:26', '2019-07-09 06:07:26'),
(2, 'Abdullah', 'abdullah@mail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$pzt29kmQlgei6fUQUypEYOpjqHl3Ty.svN0mf1hnQDA3byxomkulm', NULL, 0, NULL, '2019-07-14 07:50:54', '2019-07-14 07:50:54');

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
-- Indexes for table `aduans`
--
ALTER TABLE `aduans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aduans_user_id_foreign` (`user_id`),
  ADD KEY `aduans_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logs_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tanggapans`
--
ALTER TABLE `tanggapans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `aduans`
--
ALTER TABLE `aduans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tanggapans`
--
ALTER TABLE `tanggapans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aduans`
--
ALTER TABLE `aduans`
  ADD CONSTRAINT `aduans_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `aduans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
