-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2023 pada 10.44
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistempenyewaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komplain`
--

CREATE TABLE `komplain` (
  `id_komplain` varchar(10) NOT NULL,
  `id_pegawai` varchar(10) NOT NULL,
  `id_member` varchar(10) NOT NULL,
  `tanggal_komplain` date NOT NULL,
  `konten` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komplain`
--

INSERT INTO `komplain` (`id_komplain`, `id_pegawai`, `id_member`, `tanggal_komplain`, `konten`) VALUES
('K30183', 'ICA34', 'ALEX001', '2023-02-28', 'mobil tidak terawat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` varchar(10) NOT NULL,
  `nama_member` varchar(30) NOT NULL,
  `no_ktp` varchar(10) NOT NULL,
  `alamat_member` varchar(50) NOT NULL,
  `kontak_member` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `no_ktp`, `alamat_member`, `kontak_member`) VALUES
('ALEX001', 'alexhai', '2014012984', 'jl.as', 88888),
('edi008', 'edi', '948434', 'jl.manggis', 989977765);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian_mobil`
--

CREATE TABLE `pengembalian_mobil` (
  `id_pengembalian_m` varchar(10) NOT NULL,
  `id_pegawai` varchar(10) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `id_member` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengembalian_mobil`
--

INSERT INTO `pengembalian_mobil` (`id_pengembalian_m`, `id_pegawai`, `tgl_kembali`, `kondisi`, `id_member`) VALUES
('BALIK11', 'ICA34', '2023-02-21', 'ancur', 'ALEX001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewaan`
--

CREATE TABLE `penyewaan` (
  `id_sewa` varchar(10) NOT NULL,
  `id_member` varchar(10) NOT NULL,
  `id_detil_mobil` varchar(10) NOT NULL,
  `id_supir` varchar(10) NOT NULL,
  `lama_sewa` int(10) NOT NULL,
  `id_pegawai` varchar(10) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `total_harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyewaan`
--

INSERT INTO `penyewaan` (`id_sewa`, `id_member`, `id_detil_mobil`, `id_supir`, `lama_sewa`, `id_pegawai`, `tgl_sewa`, `tgl_kembali`, `total_harga`) VALUES
('P9821', 'ALEX001', 'M098', 'BUDI65', 3, 'ICA34', '2023-02-13', '2023-02-16', 1200000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `pengembalian_mobil`
--
ALTER TABLE `pengembalian_mobil`
  ADD PRIMARY KEY (`id_pengembalian_m`);

--
-- Indeks untuk tabel `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD PRIMARY KEY (`id_sewa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
