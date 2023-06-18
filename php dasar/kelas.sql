-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2023 pada 17.14
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
-- Database: `kelas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `projectscrum`
--

CREATE TABLE `projectscrum` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `projectscrum`
--

INSERT INTO `projectscrum` (`id`, `name`, `email`, `address`, `role`) VALUES
(1, 'pramudya', 'pramudyap333@gmail.com', 'kediri', 'front-end web developer'),
(4, 'aldi taher', 'mudybrembs321@knowledgemd.com', 'mojokerto', 'tukang las'),
(16, 'hai', 'emaildoangcoy@gmail.com', 'sekartaji', 'software engineer'),
(17, 'just a test dont take it seriously', 'example@email.com', 'kediri', 'idk im so confused rn'),
(26, 'testname', 'emailsampel@gmail.com', 'mojokerto', 'dev-ops'),
(27, 'mahendra', 'mahennekers@gmail.com', 'kertosono', 'mobile dev'),
(28, 'padil', 'padildoang@gmail.com', 'nganjuk', 'backend-dev'),
(29, 'hohoho', 'geysemailnih@gmail.com', 'balaraja', 'suka ngejokes tapi garing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `kelas`) VALUES
(1, 'amirzan', 'A'),
(2, 'fadil nugik', 'A'),
(3, 'erdi', 'A'),
(4, 'baihaqi', 'C'),
(5, 'pramudya', 'C'),
(6, 'bos reja', 'B'),
(7, 'sugeng', 'B'),
(8, 'afrizal', 'C'),
(9, 'wd mahen', 'C');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `projectscrum`
--
ALTER TABLE `projectscrum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `projectscrum`
--
ALTER TABLE `projectscrum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
