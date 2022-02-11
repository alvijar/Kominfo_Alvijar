-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2022 pada 10.36
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
-- Struktur dari tabel `data_keluarga`
--

CREATE TABLE `data_keluarga` (
  `KTP` int(30) NOT NULL,
  `Kartu_Keluarga` int(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `identiitas_pribadi`
--

CREATE TABLE `identiitas_pribadi` (
  `No_Urut` int(11) NOT NULL,
  `Nama_Lengkap` varchar(30) NOT NULL,
  `Status_Kawin` varchar(30) NOT NULL,
  `Agama` enum('Islam','Kristen','Khatolik','Hindu','Budha','Kong Hu Cu') NOT NULL,
  `Tempat` varchar(30) NOT NULL,
  `Tgl_Lahir` date NOT NULL,
  `J_Kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `Kewarganegaraan` varchar(20) NOT NULL,
  `Pendidikan_Terakhir` varchar(20) NOT NULL,
  `Kartu_Keluarga` int(30) NOT NULL,
  `ID_Kemampuan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `identiitas_pribadi`
--

INSERT INTO `identiitas_pribadi` (`No_Urut`, `Nama_Lengkap`, `Status_Kawin`, `Agama`, `Tempat`, `Tgl_Lahir`, `J_Kelamin`, `Kewarganegaraan`, `Pendidikan_Terakhir`, `Kartu_Keluarga`, `ID_Kemampuan`) VALUES
(1, 'Alvijar Akbar Pahlevi', 'Belum Kawin', 'Islam', 'Bandar Lampung', '1998-03-11', 'Laki-laki', 'Indonesia', 'S1', 12345678, 1);

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
-- Indeks untuk tabel `data_keluarga`
--
ALTER TABLE `data_keluarga`
  ADD PRIMARY KEY (`KTP`);

--
-- Indeks untuk tabel `identiitas_pribadi`
--
ALTER TABLE `identiitas_pribadi`
  ADD PRIMARY KEY (`No_Urut`),
  ADD KEY `ID_Kemampuan` (`ID_Kemampuan`),
  ADD KEY `Kartu_Keluarga` (`Kartu_Keluarga`);

--
-- Indeks untuk tabel `kemampuan`
--
ALTER TABLE `kemampuan`
  ADD PRIMARY KEY (`ID_Kemampuan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `identiitas_pribadi`
--
ALTER TABLE `identiitas_pribadi`
  MODIFY `No_Urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
