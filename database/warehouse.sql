-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2022 pada 17.54
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
-- Database: `warehouse_database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `warehouse`
--

CREATE TABLE `warehouse` (
  `warehouse_code` varchar(100) NOT NULL,
  `warehouse_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warehouse`
--

INSERT INTO `warehouse` (`warehouse_code`, `warehouse_name`) VALUES
('BYP0-3-01', 'MAIN WAREHOUSE'),
('BYP0-3-02', 'LUBRICANT'),
('BYP0-3-03', 'BATU BRICK / CASTABLE'),
('BYP0-3-04', 'QUALITY CONTROL WHS'),
('BYP0-3-05', 'SHE WHS'),
('BYP0-3-06', 'HRGA WHS'),
('BYP0-3-07', 'POWER PLANT HOUSE'),
('BYP0-3-08', 'QUARY WAREHOUSE'),
('BYP0-3-09', 'PROJECT WAREHOUSE'),
('BYP0-3-10', 'CEMENT MILL CHEMICAL WH'),
('BYP0-3-11', 'EX PROJECT WH');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`warehouse_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
