-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2022 pada 10.31
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aboutus`
--

CREATE TABLE `aboutus` (
  `number` int(255) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `konten_text` varchar(500) NOT NULL,
  `konten_gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `aboutus`
--

INSERT INTO `aboutus` (`number`, `judul`, `konten_text`, `konten_gambar`) VALUES
(2, 'Pengenalan', 'PT. MetaVision Inovasi Indonesia adalah start up asal Bandung yang bergerak dalam penyediaan solusi teknologi berbasis computer vision, electronic, dan digital signal processing knowledge.', ''),
(3, 'Visi', 'Lorem Ipsum iyaaaa', ''),
(4, 'Misi', 'Dolor Sit Amet', ''),
(5, 'Struktur Perusahaan', '', 'struktur2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `number` int(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`number`, `username`, `password`, `email`) VALUES
(1, 'metavision', 'd606757a9c50dedc85e3cc90949b10ae', 'maharusdi@gmail.com'),
(2, 'kholiq@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'kholiq@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `number` int(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `judul` varchar(200) NOT NULL,
  `img1` varchar(500) NOT NULL,
  `img2` varchar(500) NOT NULL,
  `img3` varchar(500) NOT NULL,
  `capt1` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`number`, `tanggal`, `judul`, `img1`, `img2`, `img3`, `capt1`) VALUES
(9, '2021-08-26 16:06:36', 'hayooo', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `number` int(50) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `pesan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`number`, `tanggal`, `nama`, `email`, `subject`, `pesan`) VALUES
(2, '2021-08-24', 'Angga P', 'dakeb58599@eyeremind.com', 'hallo', 'hallooo'),
(3, '2021-08-24', 'Syahrul', 'grab@gmail.com', 'test', 'hallooo'),
(9, '2021-08-24', 'Riyan', 'fomjcoplclchfrwxuj@wqcefp.com', 'test', 'hayuu'),
(10, '2021-08-26', 'Angga P', 'metanovasi@gmail.com', 'test', 'test'),
(11, '2021-08-26', 'Kholiq Amrulloh', 'kholiqamrulloh24@gmail.com', 'test', 'test');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`number`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`number`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`number`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`number`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `number` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `number` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `number` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `number` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
