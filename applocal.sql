-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2021 pada 03.15
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `applocal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ikm`
--

CREATE TABLE `data_ikm` (
  `id_ikm` int(3) UNSIGNED NOT NULL,
  `alternatif` varchar(50) NOT NULL,
  `usaha` varchar(30) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `produk` varchar(20) NOT NULL,
  `sdm` varchar(20) NOT NULL,
  `bahan_baku` varchar(20) NOT NULL,
  `produktivitas` varchar(20) NOT NULL,
  `penjualan` varchar(20) NOT NULL,
  `lokasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `data_ikm`
--

INSERT INTO `data_ikm` (`id_ikm`, `alternatif`, `usaha`, `jenis`, `kecamatan`, `produk`, `sdm`, `bahan_baku`, `produktivitas`, `penjualan`, `lokasi`) VALUES
(1, 'a', 'aa', 'Catering', 'S', 'cukup', 'buruk', 'buruk', 'buruk', 'baik', 'sangat baik'),
(2, 'b', 'b', 'Kue', 'S', 'cukup', 'buruk', 'baik', 'baik', 'sangat baik', 'sangat baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriabahan`
--

CREATE TABLE `kriteriabahan` (
  `id_bahan` int(11) NOT NULL,
  `bilangan` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `nilai` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteriabahan`
--

INSERT INTO `kriteriabahan` (`id_bahan`, `bilangan`, `keterangan`, `nilai`) VALUES
(1, 'sangat baik', 'Penggunaan Bahan Lokal 71% Keatas', '50'),
(2, 'baik', 'Penggunaan Bahan Lokal 56-70%', '40'),
(3, 'cukup', 'Penggunaan Bahan Lokal 26-55%', '30'),
(4, 'buruk', 'Penggunaan Bahan Lokal 10-25%', '20'),
(5, 'sangat buruk', 'Penggunaan Bahan Lokal 1-9%', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriterialokasi`
--

CREATE TABLE `kriterialokasi` (
  `id_lokasi` int(11) NOT NULL,
  `bilangan` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `nilai` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriterialokasi`
--

INSERT INTO `kriterialokasi` (`id_lokasi`, `bilangan`, `keterangan`, `nilai`) VALUES
(1, 'sangat baik', 'sintang', '10'),
(2, 'baik', 'sepauk - kelam permai - sungai teblian - dedai', '20'),
(3, 'cukup', 'ketungau tengah - kayan hilir', '30'),
(4, 'buruk', 'ketungau hulu - serawai', '40'),
(5, 'sangat buruk', '-', '50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriapenjualan`
--

CREATE TABLE `kriteriapenjualan` (
  `id_penjualan` int(11) NOT NULL,
  `bilangan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kriteriapenjualan`
--

INSERT INTO `kriteriapenjualan` (`id_penjualan`, `bilangan`, `keterangan`, `nilai`) VALUES
(1, 'sangat baik', '300,000 Rp Keatas', '50'),
(2, 'baik', '200,000 - 299,999 Rp', '40'),
(3, 'cukup', '150,000 - 199,999 Rp', '30'),
(4, 'buruk', '100,000 - 149,999 Rp', '20'),
(5, 'sangat buruk', '0 - 99,999 Rp', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriaproduk`
--

CREATE TABLE `kriteriaproduk` (
  `id_produk` int(11) NOT NULL,
  `bilangan` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kriteriaproduk`
--

INSERT INTO `kriteriaproduk` (`id_produk`, `bilangan`, `keterangan`, `nilai`) VALUES
(1, 'sangat baik', 'Kualitas Produk Sangat Baik ', '50'),
(2, 'baik', 'Kualitas Produk Baik ', '40'),
(3, 'cukup', 'Kualitas Produk Cukup', '30'),
(4, 'buruk', 'Kualitas Produk Buruk', '20'),
(5, 'sangat buruk', 'Kualitas Produk Sangat Buruk', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriaproduktivitas`
--

CREATE TABLE `kriteriaproduktivitas` (
  `id_produktivitas` int(11) NOT NULL,
  `bilangan` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kriteriaproduktivitas`
--

INSERT INTO `kriteriaproduktivitas` (`id_produktivitas`, `bilangan`, `keterangan`, `nilai`) VALUES
(1, 'sangat baik', '200,000 Keatas', '50'),
(2, 'baik', '100,000 - 199,999', '40'),
(3, 'cukup', '16,000 - 99,999', '30'),
(4, 'buruk', '10,000 - 15,999', '20'),
(5, 'sangat buruk', '0 - 9,999', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriasdm`
--

CREATE TABLE `kriteriasdm` (
  `id_sdm` int(11) NOT NULL,
  `bilangan` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kriteriasdm`
--

INSERT INTO `kriteriasdm` (`id_sdm`, `bilangan`, `keterangan`, `nilai`) VALUES
(1, 'sangat baik', 'Memiliki SDM 7 Orang Keatas', '50'),
(2, 'baik', 'Memiliki SDM 5-6 Orang', '40'),
(3, 'cukup', 'Memiliki SDM 3-4 Orang', '30'),
(4, 'buruk', 'Memiliki SDM 2 Orang', '20'),
(5, 'sangat buruk', 'Memiliki SDM 1 Orang', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_admin`
--

CREATE TABLE `log_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_admin`
--

INSERT INTO `log_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `moo_kriteria`
--

CREATE TABLE `moo_kriteria` (
  `id_kriteria` int(3) UNSIGNED NOT NULL,
  `kriteria` varchar(100) NOT NULL,
  `type` set('Benefit','Cost') NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `moo_kriteria`
--

INSERT INTO `moo_kriteria` (`id_kriteria`, `kriteria`, `type`, `bobot`) VALUES
(1, 'Produk', 'Benefit', 0.25),
(2, 'SDM', 'Benefit', 0.15),
(3, 'Bahan Baku', 'Benefit', 0.2),
(4, 'Nilai Produksi', 'Benefit', 0.15),
(5, 'Investasi', 'Benefit', 0.1),
(6, 'Lokasi', 'Cost', 0.15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `moo_nilai`
--

CREATE TABLE `moo_nilai` (
  `id_ikm` int(3) UNSIGNED DEFAULT NULL,
  `id_kriteria` int(3) UNSIGNED DEFAULT NULL,
  `nilai` int(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `moo_nilai`
--

INSERT INTO `moo_nilai` (`id_ikm`, `id_kriteria`, `nilai`) VALUES
(1, 1, 30),
(1, 2, 20),
(1, 3, 20),
(1, 4, 20),
(1, 5, 40),
(1, 6, 10),
(2, 1, 30),
(2, 2, 20),
(2, 3, 40),
(2, 4, 40),
(2, 5, 50),
(2, 6, 10);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_ikm`
--
ALTER TABLE `data_ikm`
  ADD PRIMARY KEY (`id_ikm`);

--
-- Indeks untuk tabel `kriteriabahan`
--
ALTER TABLE `kriteriabahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indeks untuk tabel `kriterialokasi`
--
ALTER TABLE `kriterialokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `kriteriapenjualan`
--
ALTER TABLE `kriteriapenjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indeks untuk tabel `kriteriaproduk`
--
ALTER TABLE `kriteriaproduk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `kriteriaproduktivitas`
--
ALTER TABLE `kriteriaproduktivitas`
  ADD PRIMARY KEY (`id_produktivitas`);

--
-- Indeks untuk tabel `kriteriasdm`
--
ALTER TABLE `kriteriasdm`
  ADD PRIMARY KEY (`id_sdm`);

--
-- Indeks untuk tabel `log_admin`
--
ALTER TABLE `log_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `moo_kriteria`
--
ALTER TABLE `moo_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kriteriabahan`
--
ALTER TABLE `kriteriabahan`
  MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kriterialokasi`
--
ALTER TABLE `kriterialokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kriteriapenjualan`
--
ALTER TABLE `kriteriapenjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kriteriaproduk`
--
ALTER TABLE `kriteriaproduk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kriteriaproduktivitas`
--
ALTER TABLE `kriteriaproduktivitas`
  MODIFY `id_produktivitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kriteriasdm`
--
ALTER TABLE `kriteriasdm`
  MODIFY `id_sdm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `log_admin`
--
ALTER TABLE `log_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `moo_kriteria`
--
ALTER TABLE `moo_kriteria`
  MODIFY `id_kriteria` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
