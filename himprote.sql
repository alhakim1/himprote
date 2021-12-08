-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2021 pada 13.03
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himprote`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adminweb`
--

CREATE TABLE `adminweb` (
  `nim` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `adminweb`
--

INSERT INTO `adminweb` (`nim`, `email`, `password`) VALUES
('5302420020', 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_hima`
--

CREATE TABLE `anggota_hima` (
  `nama_anggota` varchar(100) NOT NULL,
  `nim_anggota` varchar(100) NOT NULL,
  `prodi_anggota` varchar(100) NOT NULL,
  `angkatan_anggota` varchar(5) NOT NULL,
  `email_anggota` varchar(100) NOT NULL,
  `password_anggota` varchar(100) NOT NULL,
  `re_pass_anggota` varchar(100) NOT NULL,
  `divisi_anggota` enum('Sekretaris','Bendahara','Divisi A','Divisi B','Divisi C','Divisi D','Divisi E','Divisi F') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota_hima`
--

INSERT INTO `anggota_hima` (`nama_anggota`, `nim_anggota`, `prodi_anggota`, `angkatan_anggota`, `email_anggota`, `password_anggota`, `re_pass_anggota`, `divisi_anggota`) VALUES
('', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', ''),
('aa', '11', 'aa', '', 'a@gmail.com', '11', '11', ''),
('asa', '121', 'ptik', '2020', 'ba@gmail.com', '1234', '1234', 'Sekretaris'),
('Rahmattullah Al Hakim', '5302420020', 'PTIK', '2020', 'rahmat@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'Divisi A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_a`
--

CREATE TABLE `arsip_a` (
  `nomor` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tanggal` varchar(45) NOT NULL,
  `proposal` varchar(255) NOT NULL,
  `lpjspj` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `arsip_a`
--

INSERT INTO `arsip_a` (`nomor`, `nama`, `tanggal`, `proposal`, `lpjspj`) VALUES
(4, 'PILMAPRES 2022', '29 APRIL 2021', '638-Proposal PILMAPRES 2022.docx', '638-LPJSPJ PILMAPRES 2022.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_b`
--

CREATE TABLE `arsip_b` (
  `nomor` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tanggal` varchar(45) NOT NULL,
  `proposal` varchar(225) NOT NULL,
  `lpjspj` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `arsip_b`
--

INSERT INTO `arsip_b` (`nomor`, `nama`, `tanggal`, `proposal`, `lpjspj`) VALUES
(124, 'PORSAKLAS 2021', '29 OKTOBER 2021', '65-Proposal.docx', '65-LPJSPJ.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_c`
--

CREATE TABLE `arsip_c` (
  `nomor` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tanggal` varchar(45) NOT NULL,
  `proposal` varchar(255) NOT NULL,
  `lpjspj` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `arsip_c`
--

INSERT INTO `arsip_c` (`nomor`, `nama`, `tanggal`, `proposal`, `lpjspj`) VALUES
(1, 'STUDI BANDING 2021', '27 FEBRUARI 2021', '274-Proposal.docx', '274-LPJSPJ.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_d`
--

CREATE TABLE `arsip_d` (
  `nomor` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tanggal` varchar(45) NOT NULL,
  `proposal` varchar(255) NOT NULL,
  `lpjspj` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `arsip_d`
--

INSERT INTO `arsip_d` (`nomor`, `nama`, `tanggal`, `proposal`, `lpjspj`) VALUES
(1, 'DIALOG JURUSAN 2021', '15 SEPTEMBER 2021', '132-Proposal.docx', '132-LPJSPJ.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_e`
--

CREATE TABLE `arsip_e` (
  `nomor` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tanggal` varchar(45) NOT NULL,
  `proposal` varchar(255) NOT NULL,
  `lpjspj` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `arsip_e`
--

INSERT INTO `arsip_e` (`nomor`, `nama`, `tanggal`, `proposal`, `lpjspj`) VALUES
(1, 'STUDIUM GENERAL', '7 NOVEMBER 2021', '764-Proposal.docx', '764-LPJSPJ.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_f`
--

CREATE TABLE `arsip_f` (
  `nomor` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tanggal` varchar(45) NOT NULL,
  `proposal` varchar(255) NOT NULL,
  `lpjspj` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `arsip_f`
--

INSERT INTO `arsip_f` (`nomor`, `nama`, `tanggal`, `proposal`, `lpjspj`) VALUES
(1, 'PELATIHAN DESAIN GRAFIS', '2 MEI 2021', '177-Proposal.docx', '177-LPJSPJ.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_ph`
--

CREATE TABLE `arsip_ph` (
  `nomor` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tanggal` varchar(45) NOT NULL,
  `proposal` varchar(255) NOT NULL,
  `lpjspj` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `arsip_ph`
--

INSERT INTO `arsip_ph` (`nomor`, `nama`, `tanggal`, `proposal`, `lpjspj`) VALUES
(1, 'KAJIAN ROHANI', '1 APRIL 2021', '872-Proposal Webinar.docx', '872-LPJSPJ Webinar.docx');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adminweb`
--
ALTER TABLE `adminweb`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `anggota_hima`
--
ALTER TABLE `anggota_hima`
  ADD PRIMARY KEY (`nim_anggota`);

--
-- Indeks untuk tabel `arsip_a`
--
ALTER TABLE `arsip_a`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `arsip_b`
--
ALTER TABLE `arsip_b`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `arsip_c`
--
ALTER TABLE `arsip_c`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `arsip_d`
--
ALTER TABLE `arsip_d`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `arsip_e`
--
ALTER TABLE `arsip_e`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `arsip_f`
--
ALTER TABLE `arsip_f`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `arsip_ph`
--
ALTER TABLE `arsip_ph`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `arsip_a`
--
ALTER TABLE `arsip_a`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `arsip_b`
--
ALTER TABLE `arsip_b`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT untuk tabel `arsip_c`
--
ALTER TABLE `arsip_c`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `arsip_d`
--
ALTER TABLE `arsip_d`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `arsip_e`
--
ALTER TABLE `arsip_e`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `arsip_f`
--
ALTER TABLE `arsip_f`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `arsip_ph`
--
ALTER TABLE `arsip_ph`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
