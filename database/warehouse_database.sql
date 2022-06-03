-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2022 pada 04.51
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
-- Struktur dari tabel `department`
--

CREATE TABLE `department` (
  `dept_code` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventory`
--

CREATE TABLE `inventory` (
  `item_code` varchar(50) NOT NULL,
  `location` varchar(200) NOT NULL,
  `stocks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `issued`
--

CREATE TABLE `issued` (
  `issued_code` varchar(50) NOT NULL,
  `item_code` varchar(50) NOT NULL,
  `dept_code` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `items`
--

CREATE TABLE `items` (
  `item_code` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `specification` varchar(200) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `items`
--

INSERT INTO `items` (`item_code`, `name`, `specification`, `image`) VALUES
('0102-000302', 'PALLET WOODEN', 'Pallet 110 X 120 CM', 'default.jpg'),
('0103-000721', 'OIL BECHEM', 'BECHEM BERUSYNTH EP 1000', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lending`
--

CREATE TABLE `lending` (
  `lending_code` varchar(50) NOT NULL,
  `item_code` varchar(50) NOT NULL,
  `dept_code` varchar(50) NOT NULL,
  `lending_date` date NOT NULL,
  `return_date` date NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `received`
--

CREATE TABLE `received` (
  `received_code` varchar(50) NOT NULL,
  `arrival_date` date NOT NULL,
  `po_number` varchar(100) NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `item_code` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `uom` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `received`
--

INSERT INTO `received` (`received_code`, `arrival_date`, `po_number`, `vendor_name`, `item_code`, `qty`, `uom`, `location`) VALUES
('123', '2022-06-02', '1212', 'name', '0102-000302', 100, 'PC', 'bjhf6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uom`
--

CREATE TABLE `uom` (
  `uom_code` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `uom`
--

INSERT INTO `uom` (`uom_code`, `name`) VALUES
('PC', 'Piece'),
('PK', 'Pack');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nip` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nip`, `name`, `password`, `role`) VALUES
('1302190002', 'Rizal Maidan', '$2y$10$yItqT1TsXY1VQeo6iWeraOUyo5BXo3TYxjmiZJec4Ai.Vd8G/f3vu', '1'),
('1302194089', 'Gilang Gumelar', '$2y$10$kfXCTmWJ7s53dxou/APi4epAgmTarh9sB1Qp/WtHJj0ndqCwDQ1Xi', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_code`);

--
-- Indeks untuk tabel `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`item_code`);

--
-- Indeks untuk tabel `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_code`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
