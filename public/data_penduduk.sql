-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Mar 2022 pada 10.02
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.15

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
  `KTP` varchar(30) NOT NULL,
  `Kartu_Keluarga` int(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_keluarga`
--

INSERT INTO `data_keluarga` (`KTP`, `Kartu_Keluarga`, `Alamat`) VALUES
('12345678', 5672891, 'Prasejarah'),
('187100001', 72777777, 'Jalan tol'),
('18711781', 19022091, 'Jalan Nalaj'),
('2147483647', 2147483647, 'Jalani Dulu Aja Yuk Ber 02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas_pribadi`
--

CREATE TABLE `identitas_pribadi` (
  `No_Urut` int(11) NOT NULL,
  `Nama_Lengkap` varchar(30) NOT NULL,
  `Status_Kawin` varchar(30) NOT NULL,
  `Agama` enum('Islam','Kristen','Khatolik','Hindu','Budha','Kong Hu Cu') NOT NULL,
  `Tempat` varchar(30) NOT NULL,
  `Tgl_Lahir` date NOT NULL,
  `J_Kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `Kewarganegaraan` varchar(20) NOT NULL,
  `Pendidikan_Terakhir` varchar(20) NOT NULL,
  `KTP` varchar(30) NOT NULL,
  `ID_Kemampuan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `identitas_pribadi`
--

INSERT INTO `identitas_pribadi` (`No_Urut`, `Nama_Lengkap`, `Status_Kawin`, `Agama`, `Tempat`, `Tgl_Lahir`, `J_Kelamin`, `Kewarganegaraan`, `Pendidikan_Terakhir`, `KTP`, `ID_Kemampuan`) VALUES
(1, 'Alvijar Akbar Pahlevi', 'Belum Kawin', 'Islam', 'Bandar Lampung', '1998-03-11', 'Laki-laki', 'Indonesia', 'S1', '12345678', 1),
(2, 'Lili', 'Belum Kawin', 'Islam', 'Bandar Lampung', '2003-10-29', 'Perempuan', 'Indonesia', 'S3', '187100001', 2),
(3, 'Samuel', 'Lajang', 'Hindu', 'Krimea', '1980-03-11', 'Laki-laki', 'Ukraina', 'S4', '2147483647', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kemampuan`
--

CREATE TABLE `kemampuan` (
  `ID_Kemampuan` int(5) NOT NULL,
  `Dapat_Baca_Huruf` enum('Dapat','Tidak') NOT NULL,
  `KTP` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kemampuan`
--

INSERT INTO `kemampuan` (`ID_Kemampuan`, `Dapat_Baca_Huruf`, `KTP`) VALUES
(1, 'Dapat', ''),
(2, 'Dapat', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_keluarga`
--
ALTER TABLE `data_keluarga`
  ADD PRIMARY KEY (`KTP`);

--
-- Indeks untuk tabel `identitas_pribadi`
--
ALTER TABLE `identitas_pribadi`
  ADD PRIMARY KEY (`No_Urut`),
  ADD KEY `ID_Kemampuan` (`ID_Kemampuan`),
  ADD KEY `Kartu_Keluarga` (`KTP`);

--
-- Indeks untuk tabel `kemampuan`
--
ALTER TABLE `kemampuan`
  ADD PRIMARY KEY (`ID_Kemampuan`),
  ADD KEY `KTP` (`KTP`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `identitas_pribadi`
--
ALTER TABLE `identitas_pribadi`
  MODIFY `No_Urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
