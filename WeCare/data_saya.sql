-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2023 pada 05.44
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_saya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form_user`
--

CREATE TABLE `form_user` (
  `id_owner` int(5) NOT NULL,
  `nama_anda` varchar(100) NOT NULL,
  `nama_hewanpeliharaan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_hewanpeliharaan` varchar(50) NOT NULL,
  `ras_hewanpeliharaan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `form_user`
--

INSERT INTO `form_user` (`id_owner`, `nama_anda`, `nama_hewanpeliharaan`, `email`, `jenis_hewanpeliharaan`, `ras_hewanpeliharaan`, `keterangan`) VALUES
(1025, 'adasdaas', 'dasdasd', 'asda', 'sdsadsa', 'sdasdadasd', 'sad'),
(1026, '', '', 'ha@gmail.com', '', '', ''),
(1027, '', '', 'ha@gmail.com', '', '', ''),
(1028, '', '', 'rere@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `grooming`
--

CREATE TABLE `grooming` (
  `id_owner` int(5) NOT NULL,
  `nama_anda` varchar(100) NOT NULL,
  `nama_hewanpeliharaan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_hewanpeliharaan` varchar(50) NOT NULL,
  `ras_hewanpeliharaan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `grooming`
--

INSERT INTO `grooming` (`id_owner`, `nama_anda`, `nama_hewanpeliharaan`, `email`, `jenis_hewanpeliharaan`, `ras_hewanpeliharaan`, `keterangan`) VALUES
(0, '', '', 's@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `medical_checkup`
--

CREATE TABLE `medical_checkup` (
  `id_owner` int(5) NOT NULL,
  `nama_anda` varchar(100) NOT NULL,
  `nama_hewanpeliharaan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_hewanpeliharaan` varchar(50) NOT NULL,
  `ras_hewanpeliharaan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `medical_checkup`
--

INSERT INTO `medical_checkup` (`id_owner`, `nama_anda`, `nama_hewanpeliharaan`, `email`, `jenis_hewanpeliharaan`, `ras_hewanpeliharaan`, `keterangan`) VALUES
(0, '', '', 'haha@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(14, 'rereku', 'rereku@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(16, 'jimi', 'jimi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(17, 'tio', 'tio@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `form_user`
--
ALTER TABLE `form_user`
  ADD PRIMARY KEY (`id_owner`);

--
-- Indeks untuk tabel `medical_checkup`
--
ALTER TABLE `medical_checkup`
  ADD PRIMARY KEY (`id_owner`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `form_user`
--
ALTER TABLE `form_user`
  MODIFY `id_owner` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1032;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
