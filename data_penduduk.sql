-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Feb 2022 pada 05.56
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_penduduk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat`
--

CREATE TABLE `alamat` (
  `ID_Alamat` int(5) NOT NULL,
  `Provinsi` varchar(30) NOT NULL,
  `Kabupaten` varchar(30) NOT NULL,
  `Desa` varchar(30) NOT NULL,
  `Jalan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `identiitas_pribadi`
--

CREATE TABLE `identiitas_pribadi` (
  `NIK` int(20) NOT NULL,
  `Nama_Lengkap` int(5) NOT NULL,
  `Status_Kawin` varchar(30) NOT NULL,
  `Agama` enum('Islam','Kristen','Khatolik','Hindu','Budha','Kong Hu Cu') NOT NULL,
  `Tempat` varchar(30) NOT NULL,
  `Tgl_Lahir` date NOT NULL,
  `J_Kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `Kewarganegaraan` varchar(20) NOT NULL,
  `Pendidikan_Terakhir` varchar(20) NOT NULL,
  `ID_Kemampuan` int(5) NOT NULL,
  `ID_Alamat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kemampuan`
--

CREATE TABLE `kemampuan` (
  `ID_Kemampuan` int(5) NOT NULL,
  `Dapat_Baca_Huruf` enum('Dapat','Tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`ID_Alamat`);

--
-- Indeks untuk tabel `identiitas_pribadi`
--
ALTER TABLE `identiitas_pribadi`
  ADD PRIMARY KEY (`NIK`),
  ADD KEY `ID_Kemampuan` (`ID_Kemampuan`),
  ADD KEY `ID_Alamat` (`ID_Alamat`);

--
-- Indeks untuk tabel `kemampuan`
--
ALTER TABLE `kemampuan`
  ADD PRIMARY KEY (`ID_Kemampuan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
