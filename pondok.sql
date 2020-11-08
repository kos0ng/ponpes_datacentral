-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 08 Nov 2020 pada 01.56
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pondok`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `id_lembaga` int(11) NOT NULL,
  `hadir` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `izin` int(11) NOT NULL,
  `alpa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya`
--

CREATE TABLE `biaya` (
  `id_biaya` int(11) NOT NULL,
  `id_lembaga` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `sub_kategori` tinyint(4) NOT NULL DEFAULT '0',
  `sb_psb` int(11) NOT NULL,
  `sb_paket1` int(11) NOT NULL,
  `sb_paket2` int(11) NOT NULL,
  `sb_paket3` int(11) NOT NULL,
  `sl_du` int(11) NOT NULL,
  `sl_paket1` int(11) NOT NULL,
  `sl_paket2` int(11) NOT NULL,
  `sl_paket3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_santri`
--

CREATE TABLE `data_santri` (
  `id_santri` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_masuk` date NOT NULL DEFAULT '0000-00-00',
  `tgl_keluar` date NOT NULL DEFAULT '0000-00-00',
  `nama_ayah` varchar(50) NOT NULL,
  `alamat_ayah` text NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `alamat_ibu` text NOT NULL,
  `telp_1` varchar(13) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `madrasah`
--

CREATE TABLE `madrasah` (
  `id` int(11) NOT NULL,
  `id_madrasah` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `id_biaya` int(11) NOT NULL,
  `sb` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pondok`
--

CREATE TABLE `pondok` (
  `id` int(11) NOT NULL,
  `id_pondok` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `id_biaya` int(11) NOT NULL,
  `sb` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit_lembaga`
--

CREATE TABLE `unit_lembaga` (
  `induk_lembaga` int(11) NOT NULL,
  `nama_lembaga` varchar(50) NOT NULL,
  `hari_efektif` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unit_lembaga`
--

INSERT INTO `unit_lembaga` (`induk_lembaga`, `nama_lembaga`, `hari_efektif`) VALUES
(10, '------------------------------------', 0),
(11, 'Pondok A', 0),
(50, '------------------------------------', 0),
(51, 'Madrasah A', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$pirvM3mA.HbEZdOLn0XHKe5hgANyrsuWTiSy130IzAg9extLgU/SC', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `biaya`
--
ALTER TABLE `biaya`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indexes for table `data_santri`
--
ALTER TABLE `data_santri`
  ADD PRIMARY KEY (`id_santri`);

--
-- Indexes for table `madrasah`
--
ALTER TABLE `madrasah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pondok`
--
ALTER TABLE `pondok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_lembaga`
--
ALTER TABLE `unit_lembaga`
  ADD PRIMARY KEY (`induk_lembaga`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `biaya`
--
ALTER TABLE `biaya`
  MODIFY `id_biaya` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_santri`
--
ALTER TABLE `data_santri`
  MODIFY `id_santri` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `madrasah`
--
ALTER TABLE `madrasah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pondok`
--
ALTER TABLE `pondok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
