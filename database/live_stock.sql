-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2022 pada 03.20
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `live_stock`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `item_code` varchar(20) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `item_specification` varchar(200) NOT NULL,
  `uom` int(11) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`item_code`, `item_name`, `item_specification`, `uom`, `location`) VALUES
('012-2087-287', 'Thinner TCI', 'Thinner Specification Here', 120, '01-933-485-3'),
('012-2087-287', 'Thinner TCI', 'Thinner Specification Here', 120, '01-933-485-3'),
('012-2087-287', 'Thinner TCI', 'Thinner Specification Here', 120, '01-933-485-3'),
('012-2987-2834', 'ABB DC Drivers', 'ABB DC Specification Here', 394, '02-465-483-1'),
('012-2987-2834', 'ABB DC Drivers', 'ABB DC Specification Here', 394, '02-465-483-1'),
('012-2987-2834', 'ABB DC Drivers', 'ABB DC Specification Here', 394, '02-465-483-1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nip` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nip`, `name`, `username`, `password`) VALUES
('1302194089', 'Gilang', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warehouse`
--

CREATE TABLE `warehouse` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `total_items` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warehouse`
--

INSERT INTO `warehouse` (`id`, `name`, `address`, `total_items`) VALUES
('01', 'Warehouse Center', 'Jalan kenangan nomor 5 bayah', 3016),
('02', 'Warehouse Quary', 'Jalan kenangan nomor 5 bayah', 2123);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
