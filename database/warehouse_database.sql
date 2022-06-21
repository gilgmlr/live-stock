-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2022 pada 13.56
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

--
-- Dumping data untuk tabel `department`
--

INSERT INTO `department` (`dept_code`, `name`) VALUES
('DPT-1', 'Department 1'),
('DPT-2', 'Department 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_transaction`
--

CREATE TABLE `history_transaction` (
  `id` int(11) NOT NULL,
  `doc_date` date NOT NULL,
  `system_date` datetime NOT NULL,
  `source_doc` varchar(50) NOT NULL,
  `destination_doc` varchar(50) NOT NULL,
  `item_code` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `warehouse_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `history_transaction`
--

INSERT INTO `history_transaction` (`id`, `doc_date`, `system_date`, `source_doc`, `destination_doc`, `item_code`, `qty`, `warehouse_code`) VALUES
(1, '2022-01-21', '2022-06-21 02:00:24', 'EQWO-C022206', 'EQWO-C022206', '123', -10, 'BYP0-3-01'),
(2, '0012-12-21', '2022-06-21 02:06:25', 'MI01-C022206', 'MI01-C022206', '123', -1, 'BYP0-3-01'),
(3, '2022-06-21', '2022-06-21 02:09:02', 'EQWO-C022206', 'EQWO-C022206', '123', -2, 'BYP0-3-01'),
(4, '2022-06-21', '2022-06-21 03:37:11', 'MI01-C022206', 'MI01-C022206', '123', -2, 'BYP0-3-01'),
(5, '2022-06-21', '2022-06-21 04:01:11', 'GR02-C022206', 'GR02-C022206', '0103-000788', 10, 'BYP0-3-01'),
(6, '2022-01-21', '2022-06-21 04:01:38', 'GR02-C022206', 'GR02-C022206', '0103-000788', 20, 'BYP0-3-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `item_code` varchar(50) NOT NULL,
  `location` varchar(200) NOT NULL,
  `stocks` int(11) NOT NULL,
  `warehouse_code` varchar(50) NOT NULL,
  `equipment` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inventory`
--

INSERT INTO `inventory` (`id`, `item_code`, `location`, `stocks`, `warehouse_code`, `equipment`, `status`) VALUES
(1, '123', '1', 14, 'BYP0-3-01', '', '1'),
(2, '0101-010101', '1', 113, 'BYP0-3-01', '', '1'),
(3, '0103-000788', 'R012', 10, 'BYP0-3-01', '', '1'),
(4, '0103-000788', '-', 20, 'BYP0-3-08', '', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `issued`
--

CREATE TABLE `issued` (
  `doc_no` varchar(50) NOT NULL,
  `entri_date` date NOT NULL,
  `posting_date` date NOT NULL,
  `dept_no` varchar(50) NOT NULL,
  `project_no` int(11) NOT NULL,
  `item_code` varchar(50) NOT NULL,
  `warehouse_code` varchar(50) NOT NULL,
  `transaction_qty` int(11) NOT NULL,
  `reference` varchar(200) DEFAULT NULL,
  `reason_code` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `entered` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `issued`
--

INSERT INTO `issued` (`doc_no`, `entri_date`, `posting_date`, `dept_no`, `project_no`, `item_code`, `warehouse_code`, `transaction_qty`, `reference`, `reason_code`, `description`, `entered`) VALUES
('EQWO-C022206', '2022-01-21', '2022-06-21', '12', 12, '123', 'BYP0-3-01', 10, '12', '12', '12', '1302194089'),
('MI01-C022206', '0012-12-21', '2022-06-21', '12', 12, '123', 'BYP0-3-01', 1, '12', '12', '12', '1302194089'),
('EQWO-C022206', '2022-06-21', '2022-06-21', '12', 12, '123', 'BYP0-3-01', 2, '12', '12', '12', '1302194089'),
('EQWO-C022206', '2022-06-21', '2022-06-21', '12', 1, '123', 'BYP0-3-01', 2, '12', '12', '12', '1302194089'),
('EQWO-C022206', '2022-06-21', '2022-06-21', '12', 1, '123', 'BYP0-3-01', 2, '12', '12', '12', '1302194089'),
('MI01-C022206', '2022-06-21', '2022-06-21', '012', 0, '123', 'BYP0-3-01', 2, '12', '12', '12', '1302194089');

-- --------------------------------------------------------

--
-- Struktur dari tabel `items`
--

CREATE TABLE `items` (
  `item_code` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `specification` varchar(200) NOT NULL,
  `uom` varchar(50) NOT NULL,
  `remarks` text DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `items`
--

INSERT INTO `items` (`item_code`, `name`, `specification`, `uom`, `remarks`, `image`) VALUES
('0101-010101', 'Sendal', 'Swallow size 38', 'PCS', '', '0101-010101.png'),
('0103-000788', 'OIL ', 'AX7 10W-40, 1 LITER, SHELL ADVANCED', 'CAN', 'MOQ : BOX 12 CAN \r\nPEMBELIAN HARUS KE KOPERASI', '0103-000788.jpeg'),
('0202-020202', 'Contoh', 'contoh', 'PCS', '', '0202-020202.jpeg'),
('0209-000305', 'PAINT BRUSH', '3 INCH', 'PCS', '', '0209-000305.jpeg'),
('0209-000318', 'ABRASIVE CUT-OFF WHEEL', 'DIA. 4 INCH, THICKNESS: 1.2 MM', 'PCS', '', '0209-000318.jpeg'),
('0210-000029', 'CONTACT CLEANER ANTI CORROSION', 'WD-40; @333 ML', 'TUBE', '', '0210-000029.jpeg'),
('123', 'Sendal Sebelah', 'Kanan', 'PCS', '', '123.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lending`
--

CREATE TABLE `lending` (
  `id` int(11) NOT NULL,
  `lending_no` varchar(50) NOT NULL,
  `lending_date` date NOT NULL,
  `item_code` varchar(50) NOT NULL,
  `lending_qty` int(11) NOT NULL,
  `borrower_name` varchar(200) NOT NULL,
  `dept_code` varchar(50) NOT NULL,
  `lending_note` text DEFAULT NULL,
  `return_note` text DEFAULT NULL,
  `return_qty` int(11) DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `entered` varchar(50) DEFAULT NULL,
  `warehouse_code` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lending`
--

INSERT INTO `lending` (`id`, `lending_no`, `lending_date`, `item_code`, `lending_qty`, `borrower_name`, `dept_code`, `lending_note`, `return_note`, `return_qty`, `return_date`, `entered`, `warehouse_code`, `status`) VALUES
(1, 'LEN-C022206', '2022-06-21', '123', 0, '0', '0', '2022-06-21', '', 1, '2022-06-21', NULL, 'BYP0-3-01', 'close');

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `project_no` varchar(50) NOT NULL
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
  `warehouse_code` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `entered` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `received`
--

INSERT INTO `received` (`received_code`, `arrival_date`, `po_number`, `vendor_name`, `item_code`, `qty`, `warehouse_code`, `location`, `entered`) VALUES
('GR02-C022206', '2022-12-03', '123', 'ty', '123', 10, 'BYP0-3-01', '10', '1302194089'),
('GR02-C022206', '2022-12-03', '123', 'ty', '123', 10, 'BYP0-3-01', '0', '1302194089'),
('GR02-C022206', '2022-12-03', '123', 'ty', '123', 10, 'BYP0-3-01', '0', '1302194089'),
('GR02-C022206', '2022-06-20', '0', '0', '123', 10, 'BYP0-3-02', '0', '1302194089'),
('GR02-C022206', '2022-06-20', '0', '0', '123', 10, 'BYP0-3-03', '0', '1302194089'),
('GR02-C022206', '2022-06-20', 'Y1837', 'Zaza', '0209-000318', 100, 'BYP0-3-01', 'By02', '1302190002'),
('GR02-C022206', '2022-06-21', '298298', 'nbj', '0209-000305', 10, 'BYP0-3-01', '0', '1302194089'),
('GR02-C022206', '2022-06-21', '298298', 'nbj', '0209-000318', 100, 'BYP0-3-02', '0', '1302194089'),
('GR02-C022206', '2022-06-21', '298298', 'nbj', '0209-000318', 100, 'BYP0-3-01', 'x', '1302194089'),
('GR02-C022206', '2022-06-21', '298298', 'nbj', '0209-000318', 207, 'BYP0-3-03', 'h', '1302194089'),
('GR02-C022206', '2022-06-21', '298298', 'nbj', '0209-000318', 1, 'BYP0-3-08', 's', '1302194089'),
('GR02-C022206', '2022-06-21', '28u', 'y8', '0101-010101', 20, 'BYP0-3-01', '1', '1302194089'),
('GR02-C022206', '2022-06-21', '28u', 'y8', '0101-010101', 100, 'BYP0-3-07', '0', '1302194089'),
('GR02-C022206', '2022-06-21', '28u', 'y8', '0101-010101', 21, 'BYP0-3-05', '0', '1302194089'),
('GR02-C022206', '2022-06-21', '00', '0', '123', 200, 'BYP0-3-01', '0', '1302194089'),
('GR02-C022206', '2022-01-21', '000', '0', '123', 200, 'BYP0-3-01', '0', '1302194089'),
('GR02-C022206', '2022-06-21', '0', '0', '123', 100, 'BYP0-3-01', '1', '1302194089'),
('GR02-C022206', '2022-06-21', '0', '0', '0101-010101', 101, 'BYP0-3-01', '1', '1302194089'),
('GR02-C022206', '2022-09-07', '097', '889', '123', 23, 'BYP0-3-01', '0', '1302194089'),
('GR02-C022206', '2022-06-21', '0', '0', '0103-000788', 10, 'BYP0-3-01', '-', '1302194089'),
('GR02-C022206', '2022-01-21', '0', '0', '0103-000788', 20, 'BYP0-3-08', '-', '1302194089');

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
  `warehouse_code` varchar(50) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nip`, `name`, `password`, `warehouse_code`, `role`) VALUES
('000', 'Super User', '$2y$10$rlrYynrU.WcckX9qXQEbd.sLFMyOgfb1wf91rcppxFaR4Kne/2ZDa', 'BYP0-3-01', '1'),
('123', 'Role 2', '$2y$10$HF1RjXdlUVok.ONbrZTZPO23QxxIFmXsh3I2RWZ1xsGmlO7awFTju', 'BYP0-3-01', '2'),
('1302190002', 'Rizal Maidan', '$2y$10$yItqT1TsXY1VQeo6iWeraOUyo5BXo3TYxjmiZJec4Ai.Vd8G/f3vu', 'BYP0-3-01', '1'),
('1302194089', 'Gilang Gumelar', '$2y$10$c9yjX6Pz3fHv/BD8gWRK3OYKqdsMu2Q22UVyCZW66xDsXYO4qvnNm', 'BYP0-3-01', '1'),
('456', 'Role 3', '$2y$10$QQbl/Iv.j26ytz8YVH4eL.ZpOfFCTAFbe6Bu57cBhy9fYzuOwUWHe', 'BYP0-3-01', '3');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `warehouse_transfer`
--

CREATE TABLE `warehouse_transfer` (
  `wt_number` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `sender_code` varchar(50) NOT NULL,
  `item_code` varchar(50) NOT NULL,
  `equipment` text DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `warehouse_code` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `entered` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_code`);

--
-- Indeks untuk tabel `history_transaction`
--
ALTER TABLE `history_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_code`);

--
-- Indeks untuk tabel `lending`
--
ALTER TABLE `lending`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `history_transaction`
--
ALTER TABLE `history_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `lending`
--
ALTER TABLE `lending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
