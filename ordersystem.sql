-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 26 Jun 2021 pada 15.26
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ordersystem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_dish`
--

CREATE TABLE `category_dish` (
  `category` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `category_dish`
--

INSERT INTO `category_dish` (`category`, `category_name`, `active`) VALUES
(1, 'Foods', 1),
(2, 'Drinks', 1),
(3, 'Snacks', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_customer`
--

CREATE TABLE `master_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_customer`
--

INSERT INTO `master_customer` (`customer_id`, `customer_name`, `created_at`) VALUES
(1, 'test', '2021-06-11 14:29:10'),
(2, 'test', '2021-06-11 14:30:09'),
(3, 'Indah Aulia Andriani', '2021-06-11 17:04:30'),
(4, 'indah', '2021-06-12 14:20:50'),
(7, 'brian', '2021-06-26 19:37:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_dish`
--

CREATE TABLE `master_dish` (
  `dish_id` int(11) NOT NULL,
  `dish_name` varchar(50) NOT NULL,
  `category` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL DEFAULT 0,
  `img` text DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_dish`
--

INSERT INTO `master_dish` (`dish_id`, `dish_name`, `category`, `price`, `img`, `active`) VALUES
(1, 'Chicken Steak', 1, '25000', 'assets/product_img/chicken_steak.png', 1),
(2, 'Ice Tea', 2, '5000', 'assets/product_img/ice_tea.jpeg', 1),
(3, 'Chicken Cordon Blue', 1, '32000', 'assets/product_img/chicken_steak.png', 1),
(4, 'Fried Rice', 1, '20000', 'assets/product_img/nasi_goreng.jpeg', 1),
(5, 'Lemon Tea', 2, '7500', 'assets/product_img/ice_tea.jpeg', 1),
(6, 'Mineral Water', 2, '3000', 'assets/product_img/mineral_water.jpeg', 1),
(7, 'Orange Juice', 2, '7500', 'assets/product_img/orange_juice.jpeg', 1),
(8, 'French fries', 3, '10000', 'assets/product_img/french_fries.jpeg', 1),
(9, 'Crispy Mushroom', 3, '10000', 'assets/product_img/crispy_mushroom.jpeg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_price`
--

CREATE TABLE `master_price` (
  `price_id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `size` varchar(3) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_price`
--

INSERT INTO `master_price` (`price_id`, `dish_id`, `size`, `price`) VALUES
(1, 1, 'M', 25000),
(2, 2, 'S', 3000),
(3, 2, 'M', 5000),
(4, 3, 'M', 32000),
(5, 4, 'S', 15000),
(6, 4, 'M', 20000),
(7, 5, 'S', 5000),
(8, 5, 'M', 7500),
(9, 6, 'S', 1000),
(10, 6, 'S', 3000),
(11, 6, 'L', 5000),
(12, 7, 'M', 7500),
(13, 8, 'S', 7500),
(14, 8, 'M', 12000),
(15, 8, 'L', 15000),
(16, 9, 'M', 10000),
(17, 9, 'L', 15000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_transaction`
--

CREATE TABLE `order_transaction` (
  `order_id` int(11) NOT NULL,
  `no_queue` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` int(11) NOT NULL,
  `trx_date` datetime NOT NULL DEFAULT current_timestamp(),
  `dine_in` int(1) NOT NULL DEFAULT 1,
  `kitchen_progress` int(1) NOT NULL DEFAULT 0,
  `grand_total` decimal(16,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(16,2) NOT NULL DEFAULT 0.00,
  `paid_off` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_transaction_detail`
--

CREATE TABLE `order_transaction_detail` (
  `detail_order_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `disc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` text NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `last_login`, `active`) VALUES
(1, 'indahaulia', 'andrindah@gmail.com', '$2y$10$Z34LXzHrEfkAW1plV/Sr6.fhmsELyFKfb8Z7wXP8WYG48Tu06He5.', '2021-06-12 14:49:06', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category_dish`
--
ALTER TABLE `category_dish`
  ADD PRIMARY KEY (`category`);

--
-- Indeks untuk tabel `master_customer`
--
ALTER TABLE `master_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indeks untuk tabel `master_dish`
--
ALTER TABLE `master_dish`
  ADD PRIMARY KEY (`dish_id`);

--
-- Indeks untuk tabel `master_price`
--
ALTER TABLE `master_price`
  ADD PRIMARY KEY (`price_id`);

--
-- Indeks untuk tabel `order_transaction`
--
ALTER TABLE `order_transaction`
  ADD PRIMARY KEY (`order_id`);

--
-- Indeks untuk tabel `order_transaction_detail`
--
ALTER TABLE `order_transaction_detail`
  ADD PRIMARY KEY (`detail_order_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category_dish`
--
ALTER TABLE `category_dish`
  MODIFY `category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `master_customer`
--
ALTER TABLE `master_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `master_dish`
--
ALTER TABLE `master_dish`
  MODIFY `dish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `master_price`
--
ALTER TABLE `master_price`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `order_transaction`
--
ALTER TABLE `order_transaction`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `order_transaction_detail`
--
ALTER TABLE `order_transaction_detail`
  MODIFY `detail_order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
