-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2023 pada 04.47
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cyber_movie`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `otentikasi`
--

CREATE TABLE `otentikasi` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `otentikasi`
--

INSERT INTO `otentikasi` (`id`, `email`, `password`) VALUES
(4, 'raihan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_movie`
--

CREATE TABLE `tbl_movie` (
  `id_movie` int(11) NOT NULL,
  `judul_movie` varchar(100) NOT NULL,
  `gambar_movie` varchar(100) NOT NULL,
  `detail_movie` varchar(255) NOT NULL,
  `type_movie` enum('Avengers','Anime','Romansa','Korea') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_movie`
--

INSERT INTO `tbl_movie` (`id_movie`, `judul_movie`, `gambar_movie`, `detail_movie`, `type_movie`) VALUES
(1, 'Wonder Woman', 'wonder-woman.jpg', 'Wonder Woman adalah salah satu karakter super hero yang ada di avengers. Wonder Woman merupakan wanita yang tangguh membasmi para penjahat yang ada.', 'Avengers'),
(4, 'Venom', 'venom.jpg', 'Venom salah satu tokoh antagonis yang ada di avengers bentuk venom menyerupai Spiderman. Venom terlahir dari sel jahat.', 'Avengers'),
(5, 'Jujutsu No Kaizen', 'jujutzu kaizen.jpg', 'Jujutzu Kaizen anime satu ini salah satu terfavorite untuk saat ini.', 'Anime'),
(6, 'Kimino No Hawa', 'kimino no hawa.jpg', 'Kimino No Hawa anime yang sangat fastastis Kiminino No Hawa sendiri merupakan anime yang populer untuk saat ini.', 'Anime'),
(7, 'Kimetsu No Yaiba', 'kimetsu no yaiba.jpg', 'Kimetsu No Yaiba anime yang menceritakan seorang pendekar pedang yang melawan iblis jahat. Anime ini menjadi top tier untuk beberapa tahun.', 'Anime'),
(17, 'Spiderman', 'spiderman.jpg', 'Spiderman merupakan salah satu superhero yang ada di Marvel. Spiderman ialah superhero yang memiliki pergerakan yang sangat flexibel.', 'Avengers');

-- --------------------------------------------------------

--
-- Struktur dari tabel `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `token`
--

INSERT INTO `token` (`id`, `token`) VALUES
(1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InJhaWhhbkBnbWFpbC5jb20iLCJpYXQiOjE2NzQ2OTk5MDUsImV4cCI6MTY3NDcwMzUwNX0.Qb-wV2ZQgk6OYA4GuD4AEo4k-VFGi47QUy6tBvngx-E');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `otentikasi`
--
ALTER TABLE `otentikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_movie`
--
ALTER TABLE `tbl_movie`
  ADD PRIMARY KEY (`id_movie`);

--
-- Indeks untuk tabel `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `otentikasi`
--
ALTER TABLE `otentikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_movie`
--
ALTER TABLE `tbl_movie`
  MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
