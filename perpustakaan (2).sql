-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 03:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggotas`
--

CREATE TABLE `anggotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_anggota` varchar(255) NOT NULL,
  `nm_anggota` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `tp_lahir` varchar(255) NOT NULL,
  `tg_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `jns_anggota` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `jml_pjm` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggotas`
--

INSERT INTO `anggotas` (`id`, `kd_anggota`, `nm_anggota`, `jk`, `tp_lahir`, `tg_lahir`, `alamat`, `no_hp`, `jns_anggota`, `status`, `jml_pjm`, `created_at`, `updated_at`) VALUES
(1, 'KA001', 'Dede', 'L', 'Tasikmalaya', '2018-01-02', 'Kp.hahsj', '081234567890', 'anggota', 'active', NULL, '2024-02-29 11:56:31', '2024-02-29 11:56:31'),
(2, 'KA002', 'Anwar', 'L', 'Bandung', '2024-03-05', 'Kp Cibaduyut', '098319848137', 'anggota', 'active', NULL, '2024-02-29 11:57:04', '2024-02-29 11:57:04'),
(3, 'KA003', 'Risma', 'P', 'Banjarmasin', '2024-03-05', 'Pangkalan', '089111231332', 'anggota', 'active', NULL, '2024-02-29 11:57:23', '2024-02-29 11:57:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `koleksis`
--

CREATE TABLE `koleksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_koleksi` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jns_bhn_pustaka` varchar(255) NOT NULL,
  `jns_koleksi` varchar(255) NOT NULL,
  `jns_media` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `cetakan` varchar(255) NOT NULL,
  `edisi` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `koleksis`
--

INSERT INTO `koleksis` (`id`, `kd_koleksi`, `judul`, `jns_bhn_pustaka`, `jns_koleksi`, `jns_media`, `pengarang`, `penerbit`, `tahun`, `cetakan`, `edisi`, `status`, `created_at`, `updated_at`) VALUES
(1, 'KK001', 'Java - Dede Munawar Risman', 'ASK', 'Program Java', 'media', 'Pulan', 'EPKD', '2011', '119', 'IX', 'Dipinjam', '2024-02-29 11:58:30', '2024-02-29 11:58:43'),
(3, 'KK002', 'Web Programmin 1', 'WFH', 'Program Web', 'Karya', 'Somad', 'XYZ', '2001', '087', 'IV', 'Dipinjam', '2024-02-29 12:08:46', '2024-02-29 12:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_24_030851_create_anggotas_table', 1),
(6, '2024_02_24_030906_create_koleksis_table', 1),
(7, '2024_02_24_031930_create_transaksi_pinjams_table', 1),
(8, '2024_02_24_031938_create_transaksi_pinjam_details_table', 1),
(9, '2024_02_24_031955_create_transaksi_kembalis_table', 1),
(10, '2024_02_24_032001_create_transaksi_kembali_details_table', 1),
(11, '2024_02_29_183109_trigger_update_koleksi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'API_TOKEN', '38f887cc060fdf0952d7baf036db03f49e7b0d26ead57153d25a8eb251135034', '[\"*\"]', NULL, NULL, '2024-02-29 11:52:30', '2024-02-29 11:52:30'),
(2, 'App\\Models\\User', 1, 'API_TOKEN', '17db73c93a2cd412dcebc2f34d158f16c9ca5424b839fbbee3d70abf61801f12', '[\"*\"]', NULL, NULL, '2024-02-29 17:10:14', '2024-02-29 17:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_kembalis`
--

CREATE TABLE `transaksi_kembalis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_transaksi_pinjam` varchar(255) NOT NULL,
  `no_transaksi_kembali` varchar(255) NOT NULL,
  `kd_anggota` varchar(255) NOT NULL,
  `tg_pinjam` date NOT NULL,
  `tg_kembali` date NOT NULL,
  `kd_koleksi` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jns_bhn_pustaka` varchar(255) NOT NULL,
  `jns_koleksi` varchar(255) NOT NULL,
  `jns_media` varchar(255) NOT NULL,
  `denda` int(11) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `id_pengguna` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_kembali_details`
--

CREATE TABLE `transaksi_kembali_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pinjams`
--

CREATE TABLE `transaksi_pinjams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_transaksi_pinjam` varchar(255) NOT NULL,
  `kd_anggota` varchar(255) NOT NULL,
  `nm_anggota` varchar(255) NOT NULL,
  `tg_pinjam` date NOT NULL,
  `tg_bts_kembali` date NOT NULL,
  `kd_koleksi` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jns_bhn_pustaka` varchar(255) NOT NULL,
  `jns_koleksi` varchar(255) NOT NULL,
  `jns_media` varchar(255) NOT NULL,
  `id_pengguna` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi_pinjams`
--

INSERT INTO `transaksi_pinjams` (`id`, `no_transaksi_pinjam`, `kd_anggota`, `nm_anggota`, `tg_pinjam`, `tg_bts_kembali`, `kd_koleksi`, `judul`, `jns_bhn_pustaka`, `jns_koleksi`, `jns_media`, `id_pengguna`, `created_at`, `updated_at`) VALUES
(1, 'TRP001', 'KA002', 'Anwar', '2024-02-01', '2024-03-20', 'KK001', 'Java - Dede Munawar Risman', 'ASK', 'Program Java', 'media', NULL, '2024-02-29 12:03:35', '2024-02-29 12:03:59'),
(2, 'TRP002', 'KA002', 'Anwar', '2024-02-27', '2024-03-01', 'KK002', 'Web Programmin 1', 'WFH', 'Program Web', 'Karya', NULL, '2024-02-29 12:09:10', '2024-02-29 12:09:10');

--
-- Triggers `transaksi_pinjams`
--
DELIMITER $$
CREATE TRIGGER `update_koleksi_status` AFTER INSERT ON `transaksi_pinjams` FOR EACH ROW BEGIN
            UPDATE koleksis 
            SET status = 'Dipinjam'
            WHERE kd_koleksi = NEW.kd_koleksi;
        END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pinjam_details`
--

CREATE TABLE `transaksi_pinjam_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trigger_update_koleksi_status`
--

CREATE TABLE `trigger_update_koleksi_status` (
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nm_pengguna` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `hak_akses` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nm_pengguna`, `email`, `email_verified_at`, `password`, `remember_token`, `hak_akses`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dede Munawar Risman', 'dede@gmail.com', NULL, '$2y$12$SgpDwHm0iHRTgrLWhVoC9u90Xt5.O.nv.uWl0pDGdPqpsqMWXkzCC', NULL, 'anggota', 'active', '2024-02-29 11:48:01', '2024-02-29 11:48:01'),
(2, 'Risman aja', 'random@gmail.com', NULL, '$2y$12$iQMRxBeaIUWnRprMFhvSTe6GpUMK/L50XZceRrDTW8.twXTVRAgFS', NULL, 'anggota', 'active', '2024-02-29 11:48:54', '2024-02-29 11:48:54'),
(3, 'Risman Dede Munawar', 'manager@gmail.com', NULL, '$2y$12$NqM./8AQlY5VBF4CE55tJe5nJYxVo8G8tb6HOOgOB6j6YSOe1wO..', NULL, 'admin', 'active', '2024-02-29 11:52:57', '2024-02-29 11:53:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `koleksis`
--
ALTER TABLE `koleksis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transaksi_kembalis`
--
ALTER TABLE `transaksi_kembalis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_kembali_details`
--
ALTER TABLE `transaksi_kembali_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_pinjams`
--
ALTER TABLE `transaksi_pinjams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_pinjam_details`
--
ALTER TABLE `transaksi_pinjam_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trigger_update_koleksi_status`
--
ALTER TABLE `trigger_update_koleksi_status`
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
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `koleksis`
--
ALTER TABLE `koleksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi_kembalis`
--
ALTER TABLE `transaksi_kembalis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_kembali_details`
--
ALTER TABLE `transaksi_kembali_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_pinjams`
--
ALTER TABLE `transaksi_pinjams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi_pinjam_details`
--
ALTER TABLE `transaksi_pinjam_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trigger_update_koleksi_status`
--
ALTER TABLE `trigger_update_koleksi_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
