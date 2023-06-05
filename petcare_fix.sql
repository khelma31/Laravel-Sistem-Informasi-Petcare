-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 05, 2023 at 12:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petcare_fix`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_distributor` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `nama`, `harga`, `jenis`, `id_distributor`, `created_at`, `updated_at`) VALUES
(1, 'VaksinFlu', '80000', 'Vaksin', 1, '2023-06-03 04:46:01', '2023-06-03 04:46:01'),
(2, 'SampoAntiKutu', '35000', 'Sampo', 2, '2023-06-03 04:46:14', '2023-06-04 06:42:43'),
(3, 'SabunWangi', '40000', 'Sabun', 3, '2023-06-03 04:46:36', '2023-06-03 04:46:36');

-- --------------------------------------------------------

--
-- Table structure for table `distributors`
--

CREATE TABLE `distributors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distributors`
--

INSERT INTO `distributors` (`id`, `nama`, `email`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'VaksinCorp', 'vaksincorp01@gmail.com', 'Jl. Perusahaan Raya No. 30', '2023-06-03 04:45:27', '2023-06-03 04:45:27'),
(2, 'ShampooCo', 'shampoo.co@gmail.com', 'Jl. Perusahaan Raya No. 10', '2023-06-03 04:45:34', '2023-06-03 04:45:34'),
(3, 'Soap.Inc', 'sabuninc.007@gmail.com', 'Jl. Mahameru No. 12', '2023-06-03 04:45:46', '2023-06-03 04:45:46');

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
-- Table structure for table `hewans`
--

CREATE TABLE `hewans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_hewan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Jantan','Betina') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hewans`
--

INSERT INTO `hewans` (`id`, `nama`, `jenis_hewan`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(1, 'Pompom', 'Kucing', 'Betina', '2023-06-03 04:47:51', '2023-06-03 04:47:51'),
(2, 'Pumpkin', 'Kucing', 'Jantan', '2023-06-03 04:48:26', '2023-06-03 04:48:26'),
(3, 'Bleko', 'Anjing', 'Jantan', '2023-06-03 04:48:34', '2023-06-03 04:48:34'),
(4, 'Pempem', 'Kucing', 'Betina', '2023-06-04 03:27:58', '2023-06-04 03:27:58'),
(5, 'Cemot', 'Kucing', 'Betina', '2023-06-04 06:14:18', '2023-06-04 06:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `konsumens`
--

CREATE TABLE `konsumens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telpon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pengguna` bigint(20) UNSIGNED NOT NULL,
  `id_hewan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konsumens`
--

INSERT INTO `konsumens` (`id`, `nama`, `email`, `alamat`, `no_telpon`, `id_pengguna`, `id_hewan`, `created_at`, `updated_at`) VALUES
(1, 'Mikhaellll', 'elmikha99@gmail.com', 'Jl. Tjilik Riwut Km 5,5', '0895615866711', 1, 1, '2023-06-03 04:50:43', '2023-06-04 06:36:32'),
(2, 'Misel', 'misell.ell31@gmail.com', 'Jl. Bulutangkis No. 06', '081236591411', 3, 5, '2023-06-04 06:36:16', '2023-06-04 06:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `layanans`
--

CREATE TABLE `layanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_layanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layanans`
--

INSERT INTO `layanans` (`id`, `jenis_layanan`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Grooming', 65000, '2023-06-03 04:46:48', '2023-06-03 04:46:48'),
(2, 'Vaksinasi', 90000, '2023-06-03 04:47:01', '2023-06-04 06:44:13');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_29_084842_create_distributors_table', 1),
(6, '2023_05_30_055734_create_hewans_table', 1),
(7, '2023_05_30_061644_create_layanans_table', 1),
(8, '2023_05_30_070324_create_pegawais_table', 1),
(9, '2023_05_30_092950_create_penggunas_table', 1),
(10, '2023_05_30_141442_create_barangs_table', 1),
(11, '2023_06_01_035404_create_konsumens_table', 1),
(12, '2023_06_01_044722_create_pelanggans_table', 1),
(13, '2023_06_01_065223_create_sarans_table', 1),
(14, '2023_06_01_081714_create_tpelanggans_table', 1),
(15, '2023_06_02_132724_create_poins_table', 1),
(16, '2023_06_01_081421_create_penukarans_table', 2),
(17, '2023_06_01_075755_create_tkonsumens_table', 3);

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
-- Table structure for table `pegawais`
--

CREATE TABLE `pegawais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telpon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawais`
--

INSERT INTO `pegawais` (`id`, `nama`, `email`, `alamat`, `no_telpon`, `created_at`, `updated_at`) VALUES
(1, 'Suan', 'suant@gmail.com', 'Jl. Paus No. 10', '089575412111', '2023-06-03 04:49:10', '2023-06-03 04:49:10'),
(2, 'Fernando', 'fernando1221@rocketmail.com', 'Jl. Bandeng No. 55', '082155478562', '2023-06-03 04:49:37', '2023-06-03 04:49:37'),
(3, 'Tarigan', 't.arigan@gmail.com', 'Jl. Kalui No. 1', '081255636454', '2023-06-03 04:50:03', '2023-06-03 04:50:03'),
(4, 'Celo', 'celo112233@rocketmail.com', 'Jl. Kalui No. 07', '081255267331', '2023-06-04 03:28:42', '2023-06-04 03:28:42'),
(5, 'Gabriel', 'gabriel19@gmail.com', 'Jl. Badak No. 11', '081255656474', '2023-06-04 06:14:58', '2023-06-04 06:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telpon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pengguna` bigint(20) UNSIGNED NOT NULL,
  `id_hewan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `nama`, `email`, `alamat`, `no_telpon`, `id_pengguna`, `id_hewan`, `created_at`, `updated_at`) VALUES
(1, 'Christian', 'christianmikhael31@gmail.com', 'Jl. Bulutangkis No. 16', '0895615866721', 2, 2, '2023-06-03 04:50:25', '2023-06-03 04:50:25'),
(2, 'Ariadnaaa', 'ariadna.ari@gmail.com', 'Jl. Tjilik Riwut No. 90', '08122896355', 4, 4, '2023-06-04 06:34:55', '2023-06-04 06:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `penggunas`
--

CREATE TABLE `penggunas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penggunas`
--

INSERT INTO `penggunas` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'user1', 'password1', '2023-06-03 04:47:39', '2023-06-03 04:47:39'),
(2, 'user2', 'password2', '2023-06-03 04:47:43', '2023-06-03 04:47:43'),
(3, 'user3', 'password3', '2023-06-04 03:27:25', '2023-06-04 03:27:25'),
(4, 'user4', 'password4', '2023-06-04 06:13:52', '2023-06-04 06:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `penukarans`
--

CREATE TABLE `penukarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_poin` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penukarans`
--

INSERT INTO `penukarans` (`id`, `created_at`, `updated_at`, `id_poin`) VALUES
(1, '2023-06-03 04:47:25', '2023-06-03 04:47:25', 1),
(2, '2023-06-03 04:47:28', '2023-06-04 06:47:10', 4);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poins`
--

CREATE TABLE `poins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `poin` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poins`
--

INSERT INTO `poins` (`id`, `poin`, `created_at`, `updated_at`) VALUES
(1, 5000, '2023-06-03 04:47:13', '2023-06-03 04:47:13'),
(2, 9000, '2023-06-03 04:47:19', '2023-06-04 06:45:22'),
(4, 2500, '2023-06-04 06:46:07', '2023-06-04 06:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `sarans`
--

CREATE TABLE `sarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pengguna` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sarans`
--

INSERT INTO `sarans` (`id`, `nama`, `email`, `pesan`, `id_pengguna`, `created_at`, `updated_at`) VALUES
(1, 'Mikhael', 'christianmikhael31@gmail.com', 'Halo Bang!', 1, '2023-06-03 05:17:18', '2023-06-03 05:17:18'),
(2, 'Christian', 'christianmikhael31@gmail.com', 'Halo Bang!!!', 2, '2023-06-04 03:31:50', '2023-06-04 03:31:50');

-- --------------------------------------------------------

--
-- Table structure for table `tkonsumens`
--

CREATE TABLE `tkonsumens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_transaksi` enum('Tunai','Non-Tunai','Kredit') COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_konsumen` bigint(20) UNSIGNED NOT NULL,
  `id_pegawai` bigint(20) UNSIGNED NOT NULL,
  `id_layanan` bigint(20) UNSIGNED NOT NULL,
  `id_barang` bigint(20) UNSIGNED NOT NULL,
  `id_penukaran` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tkonsumens`
--

INSERT INTO `tkonsumens` (`id`, `jenis_transaksi`, `total`, `tanggal`, `created_at`, `updated_at`, `id_konsumen`, `id_pegawai`, `id_layanan`, `id_barang`, `id_penukaran`) VALUES
(1, 'Non-Tunai', 95000, '2023-05-30', '2023-06-03 04:51:42', '2023-06-04 06:53:24', 1, 4, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tpelanggans`
--

CREATE TABLE `tpelanggans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_transaksi` enum('Tunai','Non-Tunai','Kredit') COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_pelanggan` bigint(20) UNSIGNED NOT NULL,
  `id_pegawai` bigint(20) UNSIGNED NOT NULL,
  `id_layanan` bigint(20) UNSIGNED NOT NULL,
  `id_barang` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tpelanggans`
--

INSERT INTO `tpelanggans` (`id`, `jenis_transaksi`, `total`, `tanggal`, `created_at`, `updated_at`, `id_pelanggan`, `id_pegawai`, `id_layanan`, `id_barang`) VALUES
(1, 'Tunai', 65000, '2023-06-01', '2023-06-03 04:51:12', '2023-06-03 04:51:12', 1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangs_id_distributor_foreign` (`id_distributor`);

--
-- Indexes for table `distributors`
--
ALTER TABLE `distributors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hewans`
--
ALTER TABLE `hewans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsumens`
--
ALTER TABLE `konsumens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `konsumens_id_pengguna_foreign` (`id_pengguna`),
  ADD KEY `konsumens_id_hewan_foreign` (`id_hewan`);

--
-- Indexes for table `layanans`
--
ALTER TABLE `layanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelanggans_id_pengguna_foreign` (`id_pengguna`),
  ADD KEY `pelanggans_id_hewan_foreign` (`id_hewan`);

--
-- Indexes for table `penggunas`
--
ALTER TABLE `penggunas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penukarans`
--
ALTER TABLE `penukarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penukarans_id_poin_foreign` (`id_poin`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `poins`
--
ALTER TABLE `poins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarans`
--
ALTER TABLE `sarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sarans_id_pengguna_foreign` (`id_pengguna`);

--
-- Indexes for table `tkonsumens`
--
ALTER TABLE `tkonsumens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tkonsumens_id_konsumen_foreign` (`id_konsumen`),
  ADD KEY `tkonsumens_id_pegawai_foreign` (`id_pegawai`),
  ADD KEY `tkonsumens_id_layanan_foreign` (`id_layanan`),
  ADD KEY `tkonsumens_id_barang_foreign` (`id_barang`),
  ADD KEY `tkonsumens_id_penukaran_foreign` (`id_penukaran`);

--
-- Indexes for table `tpelanggans`
--
ALTER TABLE `tpelanggans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tpelanggans_id_pelanggan_foreign` (`id_pelanggan`),
  ADD KEY `tpelanggans_id_pegawai_foreign` (`id_pegawai`),
  ADD KEY `tpelanggans_id_layanan_foreign` (`id_layanan`),
  ADD KEY `tpelanggans_id_barang_foreign` (`id_barang`);

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
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `distributors`
--
ALTER TABLE `distributors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hewans`
--
ALTER TABLE `hewans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `konsumens`
--
ALTER TABLE `konsumens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `layanans`
--
ALTER TABLE `layanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penggunas`
--
ALTER TABLE `penggunas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penukarans`
--
ALTER TABLE `penukarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poins`
--
ALTER TABLE `poins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sarans`
--
ALTER TABLE `sarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tkonsumens`
--
ALTER TABLE `tkonsumens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tpelanggans`
--
ALTER TABLE `tpelanggans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangs`
--
ALTER TABLE `barangs`
  ADD CONSTRAINT `barangs_id_distributor_foreign` FOREIGN KEY (`id_distributor`) REFERENCES `distributors` (`id`);

--
-- Constraints for table `konsumens`
--
ALTER TABLE `konsumens`
  ADD CONSTRAINT `konsumens_id_hewan_foreign` FOREIGN KEY (`id_hewan`) REFERENCES `hewans` (`id`),
  ADD CONSTRAINT `konsumens_id_pengguna_foreign` FOREIGN KEY (`id_pengguna`) REFERENCES `penggunas` (`id`);

--
-- Constraints for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD CONSTRAINT `pelanggans_id_hewan_foreign` FOREIGN KEY (`id_hewan`) REFERENCES `hewans` (`id`),
  ADD CONSTRAINT `pelanggans_id_pengguna_foreign` FOREIGN KEY (`id_pengguna`) REFERENCES `penggunas` (`id`);

--
-- Constraints for table `penukarans`
--
ALTER TABLE `penukarans`
  ADD CONSTRAINT `penukarans_id_poin_foreign` FOREIGN KEY (`id_poin`) REFERENCES `poins` (`id`);

--
-- Constraints for table `sarans`
--
ALTER TABLE `sarans`
  ADD CONSTRAINT `sarans_id_pengguna_foreign` FOREIGN KEY (`id_pengguna`) REFERENCES `penggunas` (`id`);

--
-- Constraints for table `tkonsumens`
--
ALTER TABLE `tkonsumens`
  ADD CONSTRAINT `tkonsumens_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`),
  ADD CONSTRAINT `tkonsumens_id_konsumen_foreign` FOREIGN KEY (`id_konsumen`) REFERENCES `konsumens` (`id`),
  ADD CONSTRAINT `tkonsumens_id_layanan_foreign` FOREIGN KEY (`id_layanan`) REFERENCES `layanans` (`id`),
  ADD CONSTRAINT `tkonsumens_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawais` (`id`),
  ADD CONSTRAINT `tkonsumens_id_penukaran_foreign` FOREIGN KEY (`id_penukaran`) REFERENCES `penukarans` (`id`);

--
-- Constraints for table `tpelanggans`
--
ALTER TABLE `tpelanggans`
  ADD CONSTRAINT `tpelanggans_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`),
  ADD CONSTRAINT `tpelanggans_id_layanan_foreign` FOREIGN KEY (`id_layanan`) REFERENCES `layanans` (`id`),
  ADD CONSTRAINT `tpelanggans_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawais` (`id`),
  ADD CONSTRAINT `tpelanggans_id_pelanggan_foreign` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggans` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
