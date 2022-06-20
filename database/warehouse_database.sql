-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2022 pada 06.16
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
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `doc_num` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`id`, `date`, `doc_num`, `description`) VALUES
(1, '2022-06-14 09:06:28', 'GR02-C022206', 'Good Receive'),
(2, '2022-06-14 01:06:45', 'LEN-C022206', 'Lending'),
(3, '2022-06-15 09:06:51', 'GR02-C0222060001', 'Good Receive'),
(4, '2022-06-15 09:06:14', 'GR02-C022206', 'Good Receive'),
(5, '2022-06-15 09:39:45', 'GR02-C022206', 'Good Receive'),
(6, '2022-06-15 11:52:22', 'GR02-C022206', 'Good Receive'),
(7, '2022-06-15 01:06:26', 'LEN-C02220609', 'Lending'),
(8, '2022-06-15 01:38:43', 'GR02-C022206', 'Good Receive'),
(9, '2022-06-15 01:56:08', 'GR02-C022206', 'Good Receive'),
(10, '2022-06-15 03:23:56', 'GR02-C022206', 'Good Receive'),
(11, '2022-06-15 03:27:09', 'GR02-C022206', 'Good Receive'),
(12, '2022-06-15 09:32:53', 'GR02-C022206', 'Good Receive'),
(13, '2022-06-16 08:26:51', 'GR02-C02220601', 'Good Receive'),
(14, '2022-06-16 02:06:15', 'LEN-C022206', 'Lending'),
(15, '2022-06-16 03:06:42', 'LEN-C022206', 'Lending'),
(16, '2022-06-20 10:06:00', 'LEN-C022206', 'Lending');

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
(1, '2022-06-20', '2022-06-20 09:01:33', 'WT01-C022206', 'WT01-C022206', '123', 100, 'BYP0-3-01'),
(2, '2022-06-20', '2022-06-20 09:01:33', 'WT01-C022206', 'WT01-C022206', '123', 1, 'BYP0-3-01'),
(3, '2022-09-20', '2022-06-20 09:14:23', 'AD02-C022206', 'AD02-C022206', '123', 1, 'BYP0-3-01'),
(4, '2022-09-20', '2022-06-20 09:14:23', 'AD02-C022206', 'AD02-C022206', '123', 2, 'BYP0-3-01'),
(5, '2022-06-20', '2022-06-20 10:58:31', 'LEN-C022206', 'LEN-C022206', '123', -2, 'BYP0-3-01'),
(6, '2022-06-20', '2022-06-20 10:59:01', 'GR02-C022206', 'GR02-C022206', '123', 1001, 'BYP0-3-01'),
(7, '2022-06-20', '2022-06-20 11:00:04', 'LEN-C022206', 'LEN-C022206', '123', -100, 'BYP0-3-01'),
(8, '2022-06-20', '2022-06-20 11:00:04', 'LEN-C022206', 'LEN-C022206', '123', -3, 'BYP0-3-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventory`
--

CREATE TABLE `inventory` (
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

INSERT INTO `inventory` (`item_code`, `location`, `stocks`, `warehouse_code`, `equipment`, `status`) VALUES
('123', '0', 900, 'BYP0-3-01', '', '1');

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
  `uom` varchar(50) NOT NULL,
  `remarks` text DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `items`
--

INSERT INTO `items` (`item_code`, `name`, `specification`, `uom`, `remarks`, `image`) VALUES
('0101-0101010101', 'Sendal', 'Swallow size 40', 'PCS', '', '0101-0101010101.png'),
('0103-000788', 'OIL ', 'AX7 10W-40, 1 LITER, SHELL ADVANCED', 'CAN', 'MOQ : BOX 12 CAN \r\nPEMBELIAN HARUS KE KOPERASI', '0103-000788.jpeg'),
('0209-000305', 'PAINT BRUSH', '3 INCH', 'PCS', NULL, '0209-000305.jpeg'),
('0209-000318', 'ABRASIVE CUT-OFF WHEEL', 'DIA. 4 INCH, THICKNESS: 1.2 MM', 'PCS', NULL, '0209-000318.jpeg'),
('0210-000029', 'CONTACT CLEANER ANTI CORROSION', 'WD-40; @333 ML', 'TUBE', NULL, '0210-000029.jpeg'),
('123', 'Sendal Sebelah', 'Kanan', 'PCS', '', '123.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lending`
--

CREATE TABLE `lending` (
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
  `entered_nip` varchar(50) NOT NULL,
  `warehouse_code` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lending`
--

INSERT INTO `lending` (`lending_no`, `lending_date`, `item_code`, `lending_qty`, `borrower_name`, `dept_code`, `lending_note`, `return_note`, `return_qty`, `return_date`, `entered_nip`, `warehouse_code`, `status`) VALUES
('LEN-C022206', '2022-06-20', '123', 0, 'GG', '01', '2022-06-20', '', 2, '2022-06-20', '', 'BYP0-3-01', 'close'),
('LEN-C022206', '2022-06-20', '123', 100, 'Gilang', '090', '', '', 0, '0000-00-00', '1302194089', 'BYP0-3-01', 'open'),
('LEN-C022206', '2022-06-20', '123', 3, 'Gilang', '090', '', '', 0, '0000-00-00', '1302194089', 'BYP0-3-01', 'open');

-- --------------------------------------------------------

--
-- Struktur dari tabel `material_issue`
--

CREATE TABLE `material_issue` (
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
  `created_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `material_issue`
--

INSERT INTO `material_issue` (`doc_no`, `entri_date`, `posting_date`, `dept_no`, `project_no`, `item_code`, `warehouse_code`, `transaction_qty`, `reference`, `reason_code`, `description`, `created_by`) VALUES
('MI01-C022206', '2022-06-17', '2022-06-17', '0', 0, '123', 'BYP0-3-01', 1, '0', '0', '0', '1302194089');

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
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `received`
--

INSERT INTO `received` (`received_code`, `arrival_date`, `po_number`, `vendor_name`, `item_code`, `qty`, `warehouse_code`, `location`) VALUES
('AD02-C022206', '2022-09-20', '09', '99', '123', 1, 'BYP0-3-01', '9'),
('AD02-C022206', '2022-09-20', '09', '99', '123', 2, 'BYP0-3-01', '09'),
('GR02-C022206', '2022-06-20', '00', '00', '123', 1001, 'BYP0-3-01', '-');

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
  `arrival_date` date NOT NULL,
  `sender_code` varchar(50) NOT NULL,
  `item_code` varchar(50) NOT NULL,
  `equipment` text DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `warehouse_code` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `entered` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warehouse_transfer`
--

INSERT INTO `warehouse_transfer` (`wt_number`, `arrival_date`, `sender_code`, `item_code`, `equipment`, `qty`, `warehouse_code`, `location`, `entered`) VALUES
('WT01-C022206', '2022-06-20', 'BYP0-3-03', '123', NULL, 100, 'BYP0-3-01', '0', '1302194089'),
('WT01-C022206', '2022-06-20', 'BYP0-3-03', '123', NULL, 1, 'BYP0-3-01', '0', '1302194089');

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
-- Indeks untuk tabel `history_transaction`
--
ALTER TABLE `history_transaction`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `history_transaction`
--
ALTER TABLE `history_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
