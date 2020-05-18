-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2020 pada 13.25
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040095`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Ukuran` varchar(10) NOT NULL,
  `Warna` varchar(100) NOT NULL,
  `Stok` varchar(100) NOT NULL,
  `Harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pakaian`
--

INSERT INTO `pakaian` (`id`, `No`, `Foto`, `Nama`, `Ukuran`, `Warna`, `Stok`, `Harga`) VALUES
(1, 1, 'Blezer.jfif', 'Blezer', 'All Size', 'Dusty Pink, Army, Lightblue', '321', 230000),
(2, 2, 'blues.jfif', 'Blues', 'S, M, L, X', 'Dusty Pink, Grey, Lightblue', '441', 130000),
(3, 3, 'Celana Kulot.png', 'Kulot', 'All Size', 'Lightblue-grey', '150', 95000),
(4, 4, 'Dress Casual.jfif', 'Dress Casual', 'All size', 'Moca, Coklat-Susu, Milo', '200', 120000),
(5, 5, 'kemeja.jfif', 'Kemeja-Serut', 'All Size', 'White, Black, Maroon, Milo', '544', 90000),
(6, 6, 'Midi Dress.jfif', 'Midi Dress', 'M, L', 'Yellow, Pink, Choco', '250', 110000),
(7, 7, 'Rok.jfif', 'Rok Prisket', 'All size', 'Choco, Milo, Cream', '542', 75000),
(8, 8, 'Sweater.jfif', 'Sweater', 'All size ', 'Brown, Maroon, Navy', '300', 90000),
(9, 9, 'Tunik Blue.jfif', 'Tunik Blue', 'All size ', 'Lightblue', '200', 150000),
(10, 10, 'Tunik Vintage.jfif', 'Tunik Vintage', 'All Size ', 'Milo, Dark-blue, Dark-grey', '250', 160000),
(11, 11, 'hoodie.jfif', 'Hoodie', 'All size ', 'Milo, Cream, Black', '350', 250000),
(12, 12, 'jogger.jfif', 'Celana Jogger', 'All Size ', 'Black, Cream', '233', 165000),
(13, 13, 'Pants.jfif', 'Celana Pants', 'All size ', 'Black, Army, Maroon', '432', 200000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
