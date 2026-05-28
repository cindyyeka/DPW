-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2026 pada 10.59
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tabel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_dosen`
--

CREATE TABLE `t_dosen` (
  `idDosen` int(11) NOT NULL,
  `namaDosen` varchar(50) NOT NULL,
  `noHP` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_dosen`
--

INSERT INTO `t_dosen` (`idDosen`, `namaDosen`, `noHP`) VALUES
(10, 'Rahmat Dwi Prasetyo', '08123456787'),
(11, 'HARRY S. KOM', '0856383033');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_login`
--

CREATE TABLE `t_login` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tgl_registrasi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_mahasiswa`
--

CREATE TABLE `t_mahasiswa` (
  `npm` int(11) NOT NULL,
  `namaMhs` varchar(50) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `noHP` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_mahasiswa`
--

INSERT INTO `t_mahasiswa` (`npm`, `namaMhs`, `prodi`, `alamat`, `noHP`) VALUES
(253307032, 'Cindy Eka Ramadani', 'Teknologi Informasi', 'Magetan', '083637383647');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_matakuliah`
--

CREATE TABLE `t_matakuliah` (
  `kodeMK` int(11) NOT NULL,
  `namaMK` varchar(70) NOT NULL,
  `sks` int(11) NOT NULL,
  `jam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_matakuliah`
--

INSERT INTO `t_matakuliah` (`kodeMK`, `namaMK`, `sks`, `jam`) VALUES
(101, 'Desain Pemograman Web', 3, 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_dosen`
--
ALTER TABLE `t_dosen`
  ADD PRIMARY KEY (`idDosen`);

--
-- Indeks untuk tabel `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indeks untuk tabel `t_matakuliah`
--
ALTER TABLE `t_matakuliah`
  ADD PRIMARY KEY (`kodeMK`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_dosen`
--
ALTER TABLE `t_dosen`
  MODIFY `idDosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
