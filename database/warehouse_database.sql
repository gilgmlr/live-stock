-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2022 pada 04.59
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
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `doc_num` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`id`, `date`, `doc_num`, `description`) VALUES
(1, '2022-06-04', 'WT01', 'Warehouse Transfer'),
(2, '2022-06-04', 'AD02', 'Adjustment');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventory`
--

CREATE TABLE `inventory` (
  `item_code` varchar(50) NOT NULL,
  `location` varchar(200) NOT NULL,
  `stocks` int(11) NOT NULL,
  `uom_code` varchar(100) NOT NULL,
  `warehouse_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inventory`
--

INSERT INTO `inventory` (`item_code`, `location`, `stocks`, `uom_code`, `warehouse_code`) VALUES
('0102-000302', '01-01-01', 100, 'PC', 'BYP0-3-01'),
('0103-000721', '01-02-02', 225, 'PK', 'BYP0-3-01');

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
('0100-000060', 'BRICK REFRATECHNIK TOPMAG A1 P B425', 'DENSE HIGHLY BURNT MAGNESIA SPINEL BRICK (CHROME ORE FREE), ELASTIC, WITH PRE-ATTACHED CARDBOARD SPACER', 'default'),
('0100-000061', 'BRICK REFRATECHNIK TOPMAG A1 P B825', 'DENSE HIGHLY BURNT MAGNESIA SPINEL BRICK (CHROME ORE FREE), ELASTIC, WITH PRE-ATTACHED CARDBOARD SPACER', 'default'),
('0100-000062', 'BRICK REFRATECHNIK TOPMAG A1 P BP25', 'DENSE HIGHLY BURNT MAGNESIA SPINEL BRICK (CHROME ORE FREE), ELASTIC, WITH PRE-ATTACHED CARDBOARD SPACER', 'default'),
('0100-000063', 'BRICK REFRATECHNIK TOPMAG A1 P BP+25', 'DENSE HIGHLY BURNT MAGNESIA SPINEL BRICK (CHROME ORE FREE), ELASTIC, WITH PRE-ATTACHED CARDBOARD SPACER', 'default'),
('0100-000064', 'MORTAR BRICK REFRATECHNIK AGRS60', 'DENSE HIGHLY BURNT MAGNESIA SPINEL BRICK (CHROME ORE FREE), ELASTIC, WITH PRE-ATTACHED CARDBOARD SPACER', 'default'),
('0100-000065', 'BRICK REFRATECHNIK TOPMAG A1 B425 (K17)', 'DENSE HIGHLY BURNT MAGNESIA SPINEL BRICK (CHROME ORE FREE), ELASTIC', 'default'),
('0102-000302', 'PALLET WOODEN', 'Pallet 110 X 120 CM', '0102-000302.jpg'),
('0103-000721', 'OIL BECHEM', 'BECHEM BERUSYNTH EP 1000', 'default'),
('0103-000753', 'GREASE', 'GADUS S5 V100 2; PAIL @18 KG; SHELL', 'default'),
('0103-000923', 'ADAPTER UNION', '66883, 1/2 INCH NPSM(F) SWIVEL X 1/2 INCH NPT(M); LINCOLN OR EQUAL', 'default'),
('0103-000924', 'BUTTON HEAD GREASE COUPLER', 'DIA. 16 MM', 'default'),
('0103-000927', 'NIPPLES MODEL THREAD', '10198, 1/4 INCH NPT(M) X 1/2 INCH - 27(M); LINCOLN OR EQUAL', 'default'),
('0103-000931', 'REDUCING BUSHINGS', '10200, 1/8 INCH NPT (F) X 1/2 INCH - 27(M); LINCOLN OR EQUAL', 'default'),
('0103-000937', 'SWIVELS', '81728, STRAIGHT 1/2 INCH NPT(M) X 3/8 INCH NPT(M); LINCOLN OR EQUAL', 'default'),
('0103-000938', 'OIL TRANSFORMER', 'DIALA S4 ZX; SHELL OR EQUAL', 'default'),
('0105-000293', 'NIST', '114Q', 'default'),
('0105-000294', 'PLASTIC CLIP', 'SIZE 5 X 8 CM, CLEAR', 'default'),
('0105-000380', 'BENZOIC ACID', 'GBW (E) 130035, E 26460 J/G', 'default'),
('0105-000418', 'STANDAR COAL HGI', 'ACIRS-H5-2016', 'default'),
('0105-000421', 'POTASSIUM CHROMATE', 'CAT. NO. 1.04952.0250; MERCK', 'default'),
('0105-000463', 'STANDARD SAMPLE', 'RAW V02A, FLUXANA RAW CALIBRATION STANDARD', 'default'),
('0105-000509', 'ANHYDRONE', '501-171-HAZ; LECO', 'default'),
('1213131314', 'jldwfkd', 'hvkvh', '1213131314.jpg'),
('212456', '2', '2', '212456-Header_HMRPL.png'),
('4', '4', '4', '4-my_face.jpg'),
('Fufuf', 'Fuf', 'Ududh', 'Fufuf-IMG-20220605-WA0002.jpg'),
('l', 'j', 'j', 'l-WhatsApp_Image_2022-06-06_at_06_35_10.jpeg'),
('s', 'A', 'A', 's'),
('test', 'k', 'k', 'test-PAS_FOTO_-_MERAH.jpg');

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
  `warehouse_code` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `received`
--

INSERT INTO `received` (`received_code`, `arrival_date`, `po_number`, `vendor_name`, `item_code`, `qty`, `uom`, `warehouse_code`, `location`) VALUES
('AD02', '2022-06-30', '1356', 'dsdfgh', '-- Select --', 1213, 'PC', 'BYP0-3-02', '0101010101'),
('WT01', '2022-06-07', '1356', 'Ven Nam', '0100-000064', 1213, 'PC', 'BYP0-3-04', '05-05-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uom`
--

CREATE TABLE `uom` (
  `uom_code` varchar(50) NOT NULL,
  `uom_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `uom`
--

INSERT INTO `uom` (`uom_code`, `uom_name`) VALUES
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
('BYP0-3-03', 'BATU BRICK / CASTABLE\r\n'),
('BYP0-3-04', 'QUALITY CONTROL WHS\r\n'),
('BYP0-3-05', 'SHE WHS\r\n'),
('BYP0-3-06', 'HRGA WHS\r\n'),
('BYP0-3-07', 'POWER PLANT WHOUSE\r\n'),
('BYP0-3-08', 'QUARY WAREHOUSE\r\n'),
('BYP0-3-09', 'PROJECT WAREHOUSE\r\n'),
('BYP0-3-10', 'CEMENT MILL CHEMICAL WH\r\n'),
('BYP0-3-11', 'EX PROJECT WH\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_code`);

--
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`item_code`);

--
-- Indeks untuk tabel `issued`
--
ALTER TABLE `issued`
  ADD PRIMARY KEY (`issued_code`);

--
-- Indeks untuk tabel `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_code`);

--
-- Indeks untuk tabel `lending`
--
ALTER TABLE `lending`
  ADD PRIMARY KEY (`lending_code`);

--
-- Indeks untuk tabel `received`
--
ALTER TABLE `received`
  ADD PRIMARY KEY (`received_code`);

--
-- Indeks untuk tabel `uom`
--
ALTER TABLE `uom`
  ADD PRIMARY KEY (`uom_code`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`warehouse_code`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
