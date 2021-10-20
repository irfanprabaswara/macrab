-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 20, 2021 at 10:51 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `macrabdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `distribusi`
--

CREATE TABLE `distribusi` (
  `idDistribusi` int(5) UNSIGNED NOT NULL,
  `idOdc` int(5) UNSIGNED NOT NULL,
  `idFeeder` int(5) UNSIGNED NOT NULL,
  `idFtmOa` int(5) UNSIGNED NOT NULL,
  `idFtmEa` int(5) UNSIGNED NOT NULL,
  `idGpon` int(5) UNSIGNED NOT NULL,
  `idSto` int(5) UNSIGNED NOT NULL,
  `idWitel` int(5) UNSIGNED NOT NULL,
  `idRegional` int(5) UNSIGNED NOT NULL,
  `dis` varchar(3) DEFAULT NULL,
  `idStatusCore` int(1) UNSIGNED NOT NULL,
  `core` int(2) UNSIGNED DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `distribusitemp`
--

CREATE TABLE `distribusitemp` (
  `idDistribusiTemp` int(5) UNSIGNED NOT NULL,
  `idStatusCore` int(1) UNSIGNED DEFAULT NULL,
  `dis` varchar(3) DEFAULT NULL,
  `core` int(2) UNSIGNED DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feeder`
--

CREATE TABLE `feeder` (
  `idFeeder` int(5) UNSIGNED NOT NULL,
  `idFtmOa` int(5) UNSIGNED NOT NULL,
  `idFtmEa` int(5) UNSIGNED NOT NULL,
  `idGpon` int(5) UNSIGNED NOT NULL,
  `idSto` int(5) UNSIGNED NOT NULL,
  `idWitel` int(5) UNSIGNED NOT NULL,
  `idRegional` int(5) UNSIGNED NOT NULL,
  `idStatusCore` int(1) UNSIGNED NOT NULL,
  `lat1` float DEFAULT NULL,
  `long1` float DEFAULT NULL,
  `lat2` float DEFAULT NULL,
  `long2` float DEFAULT NULL,
  `lat3` float DEFAULT NULL,
  `long3` float DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedertemp`
--

CREATE TABLE `feedertemp` (
  `idFeederTemp` int(5) UNSIGNED NOT NULL,
  `lat1` float DEFAULT NULL,
  `long1` float DEFAULT NULL,
  `lat2` float DEFAULT NULL,
  `long2` float DEFAULT NULL,
  `lat3` float DEFAULT NULL,
  `long3` float DEFAULT NULL,
  `idStatusCore` int(1) DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ftmea`
--

CREATE TABLE `ftmea` (
  `idFtmEa` int(5) UNSIGNED NOT NULL,
  `idGpon` int(5) UNSIGNED NOT NULL,
  `idSto` int(5) UNSIGNED NOT NULL,
  `idWitel` int(5) UNSIGNED NOT NULL,
  `idRegional` int(5) UNSIGNED NOT NULL,
  `rak` int(1) UNSIGNED DEFAULT NULL,
  `panel` int(2) UNSIGNED DEFAULT NULL,
  `slot` int(2) UNSIGNED DEFAULT NULL,
  `port` int(2) UNSIGNED DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ftmeatemp`
--

CREATE TABLE `ftmeatemp` (
  `idFtmEaTemp` int(5) UNSIGNED DEFAULT NULL,
  `rak` int(1) UNSIGNED DEFAULT NULL,
  `panel` int(2) UNSIGNED DEFAULT NULL,
  `slot` int(2) UNSIGNED DEFAULT NULL,
  `port` int(2) UNSIGNED DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ftmoa`
--

CREATE TABLE `ftmoa` (
  `idFtmOa` int(5) UNSIGNED NOT NULL,
  `idFtmEa` int(5) UNSIGNED NOT NULL,
  `idGpon` int(5) UNSIGNED NOT NULL,
  `idSto` int(5) UNSIGNED NOT NULL,
  `idWitel` int(5) UNSIGNED NOT NULL,
  `idRegional` int(5) UNSIGNED NOT NULL,
  `rak` int(1) UNSIGNED DEFAULT NULL,
  `panel` int(2) UNSIGNED DEFAULT NULL,
  `slot` int(2) UNSIGNED DEFAULT NULL,
  `core` int(2) UNSIGNED DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ftmoatemp`
--

CREATE TABLE `ftmoatemp` (
  `idFtmOaTemp` int(5) UNSIGNED NOT NULL,
  `rak` int(1) UNSIGNED DEFAULT NULL,
  `panel` int(2) UNSIGNED DEFAULT NULL,
  `slot` int(2) UNSIGNED DEFAULT NULL,
  `core` int(2) UNSIGNED DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gpon`
--

CREATE TABLE `gpon` (
  `idGpon` int(5) UNSIGNED NOT NULL,
  `idSto` int(5) UNSIGNED NOT NULL,
  `idWitel` int(5) UNSIGNED NOT NULL,
  `idRegional` int(5) UNSIGNED NOT NULL,
  `ipGpon` varchar(15) DEFAULT NULL,
  `panel` int(1) UNSIGNED DEFAULT NULL,
  `slot` int(2) UNSIGNED DEFAULT NULL,
  `port` int(2) UNSIGNED DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gpontemp`
--

CREATE TABLE `gpontemp` (
  `idGponTemp` int(5) UNSIGNED NOT NULL,
  `ipGpon` varchar(15) DEFAULT NULL,
  `panel` int(1) UNSIGNED DEFAULT NULL,
  `slot` int(2) UNSIGNED DEFAULT NULL,
  `port` int(2) UNSIGNED DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenisodp`
--

CREATE TABLE `jenisodp` (
  `idJenisOdp` int(1) UNSIGNED NOT NULL,
  `codeJenisOdp` varchar(2) DEFAULT NULL,
  `jenisOdp` varchar(45) NOT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `odc`
--

CREATE TABLE `odc` (
  `idOdc` int(5) UNSIGNED NOT NULL,
  `idFeeder` int(5) UNSIGNED NOT NULL,
  `idFtmOa` int(5) UNSIGNED NOT NULL,
  `idFtmEa` int(5) UNSIGNED NOT NULL,
  `idGpon` int(5) UNSIGNED NOT NULL,
  `idSto` int(5) UNSIGNED NOT NULL,
  `idWitel` int(5) UNSIGNED NOT NULL,
  `idRegional` int(5) UNSIGNED NOT NULL,
  `inPanel` int(2) UNSIGNED DEFAULT NULL,
  `portIn` int(2) UNSIGNED DEFAULT NULL,
  `outPsKe` int(2) UNSIGNED DEFAULT NULL,
  `outPanel` int(2) UNSIGNED DEFAULT NULL,
  `portOut` int(2) UNSIGNED DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `odctemp`
--

CREATE TABLE `odctemp` (
  `idOdcTemp` int(5) UNSIGNED NOT NULL,
  `inPanel` int(2) UNSIGNED DEFAULT NULL,
  `portIn` int(2) UNSIGNED DEFAULT NULL,
  `outPsKe` int(2) UNSIGNED DEFAULT NULL,
  `outPanel` int(2) UNSIGNED DEFAULT NULL,
  `portOut` int(2) UNSIGNED DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `odp`
--

CREATE TABLE `odp` (
  `idOdp` int(5) UNSIGNED NOT NULL,
  `idDistribusi` int(5) UNSIGNED NOT NULL,
  `idOdc` int(5) UNSIGNED NOT NULL,
  `idFeeder` int(5) UNSIGNED NOT NULL,
  `idFtmOa` int(5) UNSIGNED NOT NULL,
  `idFtmEa` int(5) UNSIGNED NOT NULL,
  `idGpon` int(5) UNSIGNED NOT NULL,
  `idSto` int(5) UNSIGNED NOT NULL,
  `idJenisOdp` int(1) UNSIGNED NOT NULL,
  `idWitel` int(5) UNSIGNED NOT NULL,
  `idStatusData` int(1) UNSIGNED NOT NULL,
  `idRegional` int(5) UNSIGNED NOT NULL,
  `codeOdp` varchar(45) DEFAULT NULL,
  `alamatOdp` varchar(45) DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `odptemp`
--

CREATE TABLE `odptemp` (
  `idOdpTemp` int(5) UNSIGNED NOT NULL,
  `codeOdp` varchar(45) DEFAULT NULL,
  `alamatOdp` varchar(45) DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `idJenisOdp` int(1) UNSIGNED DEFAULT NULL,
  `idStatusData` int(1) UNSIGNED DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idPengguna` int(5) UNSIGNED NOT NULL,
  `idPrevilage` int(5) UNSIGNED NOT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `previlage`
--

CREATE TABLE `previlage` (
  `idPrevilage` int(5) UNSIGNED NOT NULL,
  `jenisPrevilage` varchar(20) DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `regional`
--

CREATE TABLE `regional` (
  `idRegional` int(5) UNSIGNED NOT NULL,
  `namaRegional` varchar(20) DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `statuscore`
--

CREATE TABLE `statuscore` (
  `idStatusCore` int(1) NOT NULL,
  `statusCore` varchar(20) DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `statusdata`
--

CREATE TABLE `statusdata` (
  `idStatusData` int(1) UNSIGNED NOT NULL,
  `statusData` varchar(20) DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `statustiket`
--

CREATE TABLE `statustiket` (
  `idStatusTiket` int(5) UNSIGNED NOT NULL,
  `deskripsiStatus` varchar(20) DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sto`
--

CREATE TABLE `sto` (
  `idSto` int(5) UNSIGNED NOT NULL,
  `idWitel` int(5) UNSIGNED NOT NULL,
  `idRegional` int(5) UNSIGNED NOT NULL,
  `codeSto` varchar(3) DEFAULT NULL,
  `namaSto` varchar(20) DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `idTiket` int(5) UNSIGNED NOT NULL,
  `idStatusTiket` int(5) UNSIGNED NOT NULL,
  `idGpon` int(5) UNSIGNED DEFAULT NULL,
  `idFtmEa` int(5) UNSIGNED DEFAULT NULL,
  `idFtmOa` int(5) UNSIGNED DEFAULT NULL,
  `idFeeder` int(5) UNSIGNED DEFAULT NULL,
  `idOdc` int(5) UNSIGNED DEFAULT NULL,
  `idDist` int(5) UNSIGNED DEFAULT NULL,
  `idOdp` int(5) UNSIGNED DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `witel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mitra` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nik`, `email`, `address`, `contact`, `regional`, `witel`, `mitra`, `photo`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'faiz', '980078', '980078@telkom.co.id', 'Jl. Dimana Saja', '082174497752', 'Regional 6', 'Kalimantan Selatan', 'PT. Maju Terus', NULL, 0, NULL, '$2y$10$Y.lw9DkkDtJ95Bqa753RxeEarhG5OPl4CSzLTOM3me2fAvgbxEyNO', NULL, NULL, NULL),
(2, 'konsolodon', '980077', '980077@telkom.co.id', 'jl dimana ini', '23456789032454', NULL, 'witel_kalsel', 'mitra_kalsel', 'masih kosong', 1, NULL, '$2y$10$FQzElUOOb0HMdtwajDpxheF.bb8Ge9iDcLUaw0dHrvNxXU3Fvt7qq', NULL, '2021-10-20 20:46:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `witel`
--

CREATE TABLE `witel` (
  `idWitel` int(5) UNSIGNED NOT NULL,
  `idRegional` int(5) UNSIGNED NOT NULL,
  `namaWitel` varchar(30) DEFAULT NULL,
  `createdBy` varchar(20) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `modifiedBy` varchar(20) DEFAULT NULL,
  `modifiedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distribusi`
--
ALTER TABLE `distribusi`
  ADD PRIMARY KEY (`idDistribusi`,`idOdc`,`idFeeder`,`idFtmOa`,`idFtmEa`,`idGpon`,`idSto`,`idWitel`,`idRegional`,`idStatusCore`),
  ADD KEY `Distribusi_FKIndex1` (`idOdc`,`idFeeder`,`idFtmOa`,`idFtmEa`,`idGpon`,`idSto`,`idWitel`,`idRegional`),
  ADD KEY `Distribusi_FKIndex2` (`idStatusCore`);

--
-- Indexes for table `distribusitemp`
--
ALTER TABLE `distribusitemp`
  ADD PRIMARY KEY (`idDistribusiTemp`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feeder`
--
ALTER TABLE `feeder`
  ADD PRIMARY KEY (`idFeeder`,`idFtmOa`,`idFtmEa`,`idGpon`,`idSto`,`idWitel`,`idRegional`,`idStatusCore`),
  ADD KEY `Feeder_FKIndex1` (`idFtmOa`,`idFtmEa`,`idGpon`,`idSto`,`idWitel`,`idRegional`),
  ADD KEY `Feeder_FKIndex2` (`idStatusCore`);

--
-- Indexes for table `ftmea`
--
ALTER TABLE `ftmea`
  ADD PRIMARY KEY (`idFtmEa`,`idGpon`,`idSto`,`idWitel`,`idRegional`),
  ADD KEY `FtmEa_FKIndex1` (`idGpon`,`idSto`,`idWitel`,`idRegional`);

--
-- Indexes for table `ftmoa`
--
ALTER TABLE `ftmoa`
  ADD PRIMARY KEY (`idFtmOa`,`idFtmEa`,`idGpon`,`idSto`,`idWitel`,`idRegional`),
  ADD KEY `FtmOa_FKIndex1` (`idFtmEa`,`idGpon`,`idSto`,`idWitel`,`idRegional`);

--
-- Indexes for table `gpon`
--
ALTER TABLE `gpon`
  ADD PRIMARY KEY (`idGpon`,`idSto`,`idWitel`,`idRegional`),
  ADD KEY `Gpon_FKIndex1` (`idSto`,`idWitel`,`idRegional`);

--
-- Indexes for table `gpontemp`
--
ALTER TABLE `gpontemp`
  ADD PRIMARY KEY (`idGponTemp`);

--
-- Indexes for table `jenisodp`
--
ALTER TABLE `jenisodp`
  ADD PRIMARY KEY (`idJenisOdp`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `odc`
--
ALTER TABLE `odc`
  ADD PRIMARY KEY (`idOdc`,`idFeeder`,`idFtmOa`,`idFtmEa`,`idGpon`,`idSto`,`idWitel`,`idRegional`),
  ADD KEY `Odc_FKIndex1` (`idFeeder`,`idFtmOa`,`idFtmEa`,`idGpon`,`idSto`,`idWitel`,`idRegional`);

--
-- Indexes for table `odctemp`
--
ALTER TABLE `odctemp`
  ADD PRIMARY KEY (`idOdcTemp`);

--
-- Indexes for table `odp`
--
ALTER TABLE `odp`
  ADD PRIMARY KEY (`idOdp`,`idDistribusi`,`idOdc`,`idFeeder`,`idFtmOa`,`idFtmEa`,`idGpon`,`idSto`,`idJenisOdp`,`idWitel`,`idStatusData`,`idRegional`),
  ADD KEY `Odp_FKIndex1` (`idDistribusi`,`idOdc`,`idFeeder`,`idFtmOa`,`idFtmEa`,`idGpon`,`idSto`,`idWitel`,`idRegional`),
  ADD KEY `Odp_FKIndex2` (`idJenisOdp`),
  ADD KEY `Odp_FKIndex3` (`idStatusData`);

--
-- Indexes for table `odptemp`
--
ALTER TABLE `odptemp`
  ADD PRIMARY KEY (`idOdpTemp`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idPengguna`,`idPrevilage`),
  ADD KEY `Pengguna_FKIndex1` (`idPrevilage`);

--
-- Indexes for table `previlage`
--
ALTER TABLE `previlage`
  ADD PRIMARY KEY (`idPrevilage`);

--
-- Indexes for table `regional`
--
ALTER TABLE `regional`
  ADD PRIMARY KEY (`idRegional`);

--
-- Indexes for table `statuscore`
--
ALTER TABLE `statuscore`
  ADD PRIMARY KEY (`idStatusCore`);

--
-- Indexes for table `statusdata`
--
ALTER TABLE `statusdata`
  ADD PRIMARY KEY (`idStatusData`);

--
-- Indexes for table `statustiket`
--
ALTER TABLE `statustiket`
  ADD PRIMARY KEY (`idStatusTiket`);

--
-- Indexes for table `sto`
--
ALTER TABLE `sto`
  ADD PRIMARY KEY (`idSto`,`idWitel`,`idRegional`),
  ADD KEY `Sto_FKIndex1` (`idWitel`,`idRegional`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`idTiket`,`idStatusTiket`),
  ADD KEY `Tiket_FKIndex1` (`idStatusTiket`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nik_unique` (`nik`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `witel`
--
ALTER TABLE `witel`
  ADD PRIMARY KEY (`idWitel`,`idRegional`),
  ADD KEY `Witel_FKIndex1` (`idRegional`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distribusi`
--
ALTER TABLE `distribusi`
  MODIFY `idDistribusi` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `distribusitemp`
--
ALTER TABLE `distribusitemp`
  MODIFY `idDistribusiTemp` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gpontemp`
--
ALTER TABLE `gpontemp`
  MODIFY `idGponTemp` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenisodp`
--
ALTER TABLE `jenisodp`
  MODIFY `idJenisOdp` int(1) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `odc`
--
ALTER TABLE `odc`
  MODIFY `idOdc` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `odctemp`
--
ALTER TABLE `odctemp`
  MODIFY `idOdcTemp` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `odp`
--
ALTER TABLE `odp`
  MODIFY `idOdp` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `odptemp`
--
ALTER TABLE `odptemp`
  MODIFY `idOdpTemp` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `idPengguna` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `previlage`
--
ALTER TABLE `previlage`
  MODIFY `idPrevilage` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regional`
--
ALTER TABLE `regional`
  MODIFY `idRegional` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuscore`
--
ALTER TABLE `statuscore`
  MODIFY `idStatusCore` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statusdata`
--
ALTER TABLE `statusdata`
  MODIFY `idStatusData` int(1) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statustiket`
--
ALTER TABLE `statustiket`
  MODIFY `idStatusTiket` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `idTiket` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
