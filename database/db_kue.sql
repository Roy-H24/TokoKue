-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2024 pada 07.27
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kue`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(12) NOT NULL,
  `nm_produk` varchar(25) NOT NULL,
  `harga` int(15) NOT NULL,
  `image` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nm_produk`, `harga`, `image`) VALUES
(1, 'cromboloni', 250000, 'cromboloni.jpg'),
(2, 'Black forest cerry', 160000, 'blackForest.jpg'),
(3, 'brownies', 15000, 'brownies.jpg'),
(4, 'Slice Cake Rainbow', 15000, 'sliceCakeRainbow.jpg'),
(5, 'mile crepes', 25000, 'mileCrepes.jpg'),
(6, 'Donat', 9000, 'donat.jpg'),
(7, 'Donat Tower', 245000, 'donatower.jpeg'),
(8, 'Strawberry Cheese cake', 25000, 'strawberryCheeseCake.jpg'),
(9, 'Birthday cake', 280000, 'birthdayCake.jpg'),
(10, 'Tiramisu Cake', 850000, 'tiramisu.jpg'),
(11, 'Cup Cake', 130000, 'cupcake.jpg'),
(12, 'Macaroon', 130000, 'macaroon.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
