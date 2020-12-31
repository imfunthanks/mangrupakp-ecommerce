-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 30, 2020 at 01:09 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elektronika`
--

-- --------------------------------------------------------

--
-- Table structure for table `elektronikas`
--

CREATE TABLE `elektronikas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `elektronikas`
--

INSERT INTO `elektronikas` (`id`, `nama`, `kategori`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Aksesoris', 'Aksesoris', 'oontz.jpg', NULL, NULL),
(2, 'Handphone', 'Handphone', 'realme-c11.png', NULL, NULL),
(3, 'Laptop', 'Laptop', 'zyrex.jpg', NULL, NULL),
(4, 'Monitor', 'Monitor', 'philips-24inch.jpg', NULL, NULL);

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
(4, '2020_11_25_093003_create_elektronikas_table', 1),
(5, '2020_11_25_094243_create_products_table', 1),
(7, '2020_11_25_094323_create_pesanan_details_table', 1),
(8, '2020_11_25_094308_create_pesanans_table', 2);

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
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_pemesanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total_harga` int(11) NOT NULL,
  `kode_unik` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id`, `kode_pemesanan`, `status`, `total_harga`, `kode_unik`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 'ET-6', '1', 135000, 667, 1, '2020-11-30 12:22:27', '2020-11-30 12:22:31'),
(7, 'ET-7', '1', 100000, 914, 1, '2020-11-30 12:22:50', '2020-11-30 12:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_details`
--

CREATE TABLE `pesanan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanan_details`
--

INSERT INTO `pesanan_details` (`id`, `jumlah_pesanan`, `total_harga`, `product_id`, `pesanan_id`, `created_at`, `updated_at`) VALUES
(9, 1, 135000, 11, 6, '2020-11-30 12:22:27', '2020-11-30 12:22:27'),
(10, 2, 100000, 5, 7, '2020-11-30 12:22:50', '2020-11-30 12:22:50');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL DEFAULT '100000',
  `elektronika_id` int(11) NOT NULL,
  `is_ready` tinyint(1) NOT NULL DEFAULT '1',
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Barang Baru',
  `berat` double(8,2) NOT NULL DEFAULT '1.00',
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nama`, `harga`, `elektronika_id`, `is_ready`, `jenis`, `berat`, `gambar`, `created_at`, `updated_at`) VALUES
(1, '1More Piston Fit In-Ear Earphones', 69000, 1, 0, 'Barang Baru', 1.00, '1more-earphone.png', NULL, NULL),
(2, 'dbE DJ80 Foldable DJ Headphone with Detachable Microphone', 199000, 1, 1, 'Barang Baru', 1.00, 'dbe-dj80.jpg', NULL, NULL),
(3, 'Dualshock 4 / DS4 / Stick PS4 Wireless LED Light Bar', 599000, 1, 1, 'Barang Baru', 1.00, 'ds4.jpg', NULL, NULL),
(4, 'HP s1000 Mouse Wireless USB Optical 1600DPI', 55000, 1, 1, 'Barang Baru', 1.00, 'hp-s1000.jpg', NULL, NULL),
(5, 'Keyboard Flexible', 50000, 1, 1, 'Barang Baru', 1.00, 'keyboard-flexi.jpeg', NULL, NULL),
(6, 'Rexus Mousepad Gaming Kclar T5', 35000, 1, 1, 'Barang Baru', 1.00, 'mousepad-kvlar.jpg', NULL, NULL),
(7, 'OontZ Angle Ultra 3 Portable Wireless Bluetooth Speaker', 849000, 1, 1, 'Barang Baru', 1.00, 'oontz.jpg', NULL, NULL),
(8, 'USB Hub 3.0', 57000, 1, 1, 'Barang Baru', 1.00, 'usb-hub.jpg', NULL, NULL),
(9, 'Infinix Hot 9 Play 4/64 GB', 1540000, 2, 1, 'Barang Baru', 1.00, 'infinix-hot9.jpg', NULL, NULL),
(10, 'Inone Official Smartphone Lava R3 Note 3GB RAM 16GB ROM 13MP Camera', 1599000, 2, 1, 'Barang Baru', 1.00, 'inone-lava.jpg', NULL, NULL),
(11, 'Nokia 105 Mobile Phone Dual Sim', 135000, 2, 1, 'Barang Baru', 1.00, 'nokia-105.jpg', NULL, NULL),
(12, 'Nokia E90 Communicator', 370000, 2, 1, 'Barang Baru', 1.00, 'nokia-communicator.jpg', NULL, NULL),
(13, 'Realme C11 3/32 GB', 1699000, 2, 1, 'Barang Baru', 1.00, 'realme-c11.png', NULL, NULL),
(14, 'Redmi 3S 2/16 GB', 749000, 2, 1, 'Barang Baru', 1.00, 'redmi-3s.jpg', NULL, NULL),
(15, 'Samsung A11 3/32 GB', 1750000, 2, 1, 'Barang Baru', 1.00, 'samsung-a11.jpg', NULL, NULL),
(16, 'Samsung Lipat GT-E1272 Dual Sim', 160000, 2, 1, 'Barang Baru', 1.00, 'samsung-lipat.jpg', NULL, NULL),
(17, 'Acer Aspire 3 A314-32 N4000 4GB 1TB WIN10 14inch HD', 5199000, 3, 1, 'Barang Baru', 4.00, 'acer-aspire-3.jpg', NULL, NULL),
(18, 'Acer Aspire 5 A514-53 - i3-1005G1 4GB 512GB SSD 14\" W10 OFFICE', 7499000, 3, 1, 'Barang Baru', 4.00, 'acer-aspire-5.jpg', NULL, NULL),
(19, 'Acer Swift 3 SF314-57-39WL With Intel Gen 10th And SSD 256GB', 7799000, 3, 1, 'Barang Baru', 4.00, 'acer-swift-3.jpg', NULL, NULL),
(20, 'ASUS X441NA WIN 10 - INTEL N3350/4GB/500GB/14inch', 4599000, 3, 1, 'Barang Baru', 4.00, 'asus-x441na.jpg', NULL, NULL),
(21, 'Lenovo Ideapad 320 Core i3-6006U RAM 4GB HDD 1TB Win10', 5950000, 3, 1, 'Barang Baru', 4.00, 'lenovo-ideapad.jpg', NULL, NULL),
(22, 'Lenovo Thinkpad T440 Core i5 Gen 4 RAM 4GB HDD 500GB', 5950000, 3, 1, 'Barang Second', 4.00, 'thinkpad-t440.jpg', NULL, NULL),
(23, 'Toshiba Dynabook R732 CORE i5 3340M RAM 4GB HDD 320GB', 2450000, 3, 1, 'Barang Second', 4.00, 'toshiba-dynabook.jpg', NULL, NULL),
(24, 'Zyrex Sky 360 2in1 Touchscreen N3350 4GB 256SSD W10 11.6FHD', 4199000, 3, 1, 'Barang Baru', 3.50, 'zyrex.jpg', NULL, NULL),
(25, 'AOC Monitor 24 inch 24V2Q', 1575000, 4, 1, 'Barang Baru', 10.00, 'aoc-24inch.jpg', NULL, NULL),
(26, ' ASUS LED Gaming TUF VG249Q - Wide Screen Full HD 24 inch', 3480000, 4, 1, 'Barang Baru', 8.00, 'asus-24inch.jpg', NULL, NULL),
(27, 'DELL P2419H Monitor', 2679000, 4, 1, 'Barang Baru', 8.00, 'dell-24inch.jpg', NULL, NULL),
(28, 'LG 24MP59G 24\" Inch 21:9 IPS Gaming Monitor FULL HD AMD FreeSync 75Hz', 1900000, 4, 1, 'Barang Baru', 8.00, 'lg-24inch.jpg', NULL, NULL),
(29, 'MSI Optix G241VC 24 Inch Curved Gaming Monitor - 1080p FHD 75Hz 1ms', 2175000, 4, 1, 'Barang Baru', 8.00, 'msi-curved-24inch.jpg', NULL, NULL),
(30, 'LED MONITOR PHILIPS 24 INCH IPS HDMI FRAMELESS 243V7Q-2437QDSB', 1425000, 4, 1, 'Barang Baru', 8.00, 'philips-24inch.jpg', NULL, NULL),
(31, 'SAMSUNG Monitor LED Curved 24\" LC24F390FHE', 1515000, 4, 1, 'Barang Baru', 8.00, 'samsung-curved-24-inch.png', NULL, NULL),
(32, 'Monitor VIEWSONIC 24 INCH VA2465SH', 1450000, 4, 1, 'Barang Baru', 8.00, 'viewsonic-24inch.jpg', NULL, NULL);

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
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` bigint(13) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `alamat`, `no_hp`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tes123', 'tes123@gmail.com', NULL, '$2y$10$0InO67pSrNJCftimGP6HQODKgZpqniudM7OD3SZUnPe/mfE8g0T0a', 'Jl. Bandung No. 999', 123456789, NULL, '2020-11-25 04:53:20', '2020-11-30 04:48:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elektronikas`
--
ALTER TABLE `elektronikas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan_details`
--
ALTER TABLE `pesanan_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `elektronikas`
--
ALTER TABLE `elektronikas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pesanan_details`
--
ALTER TABLE `pesanan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
