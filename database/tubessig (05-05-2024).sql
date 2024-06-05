-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Bulan Mei 2024 pada 21.48
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubessig`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bio`
--

CREATE TABLE `bio` (
  `no` int(11) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bio`
--

INSERT INTO `bio` (`no`, `isi`) VALUES
(1, 'Peta Persebaran Layanan Kesehatan Provinsi Lampung merupakan sebuah website yang memberikan informasi mengenai Nama, Jenis, Kelas, dan Lokasi Rumah Sakit yang ada di Provinsi Lampung. Website ini bertujuan untuk memudahkan masyarakat dalam mencari rumah sakit terdekat dan mengakses daftar rumah sakit yang ada.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_rumah_sakit`
--

CREATE TABLE `data_rumah_sakit` (
  `no` int(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `kabko` varchar(50) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_rumah_sakit`
--

INSERT INTO `data_rumah_sakit` (`no`, `jenis`, `nama`, `kelas`, `kabko`, `detail`, `latitude`, `longitude`) VALUES
(1, 'RS', 'RS Immanuel Way Halim', 'B', 'Bandar Lampung', 'Jalan Soekarno–Hatta №1, Way Dadi, Kec. Sukarame, Kota Bandar Lampung, Lampung 35133', '-5.38547070592638', '105.287829635322'),
(2, 'RS', 'RS Urip Sumoharjo', 'B', 'Bandar Lampung', 'Jalan Urip Sumoharjo №200, Gunung Sulah, Kec. Way Halim, Kota Bandar Lampung, Lampung 35132', '-5.392072541245369', '105.27631114164808'),
(3, 'RS', 'RS Bumi Waras', 'C', 'Bandar Lampung', 'Jalan Wolter Monginsidi №235, Talang, Kec. Teluk Betung Selatan, Kota Bandar Lampung, Lampung 35121', '-5.425223', '105.2511062'),
(4, 'RS', 'RS Bhayangkara Lampung', 'C', 'Bandar Lampung', 'Jalan Pramuka No 88, Rajabasa, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35144', '-5.374343', '105.2242348'),
(5, 'RS', 'RS Graha Husada', 'C', 'Bandar Lampung', 'Jalan Gajah Mada No 6, Tanjung Agung Raya, Kec. Kedamaian, Kota Bandar Lampung, Lampung 35128', '-5.4132909', '105.2677711'),
(6, 'RS', 'RS Advent Bandar Lampung', 'C', 'Bandar Lampung', 'Jalan Teuku Umar №48, Sidodadi, Kec. Kedaton, Kota Bandar Lampung, Lampung 35148', '-5.3921265', '105.2622423'),
(7, 'RS', 'RS Pertamina Bintang Amin', 'C', 'Bandar Lampung', 'Jalan Pramuka №27, Kemiling Permai, Kec. Kemiling, Kota Bandar Lampung, Lampung 35151', '-5.378913', '105.2196429'),
(8, 'RS', 'RS Tingkat IV Lampung', 'C', 'Bandar Lampung', 'Jalan Dr. Rivai №7, Penengahan, Kec. Kedaton, Kota Bandar Lampung, Lampung 35121', '-5.4015023', '105.2583308'),
(9, 'RSUD', 'RSUD Dr. A. Dadi Tjokrodipo', 'B', 'Bandar Lampung', 'Jalan Basuki Rahmat №73, Sumur Putri, Kec. Teluk Betung Selatan, Kota Bandar Lampung, Lampung 35211', '-5.436275', '105.253205'),
(10, 'RSUD', 'RSUD Dr. H. Abdul Moeloek', 'A', 'Bandar Lampung', 'Jalan Dr. Rivai №6, Penengahan, Kec. Kedaton, Kota Bandar Lampung, Lampung 35112', '-5.4030392', '105.2584345'),
(11, 'RS Mata', 'RS Lampung Eye Center', 'C', 'Bandar Lampung', 'Jalan Sultan Agung №15, Kedaton, Kec. Kedaton, Kota Bandar Lampung, Lampung 35132', '-5.3829619', '105.2773523'),
(12, 'RS Mata', 'RS Permana Sari', 'C', 'Bandar Lampung', 'Jalan Bougenville №1, Rawa Laut, Kec. Enggal, Kota Bandar Lampung, Lampung 35213', '-5.4218904', '105.2629561'),
(13, 'RSIA', 'RSIA Anugerah Medika', 'C', 'Bandar Lampung', 'Jalan Tulang Bawang №21, Enggal, Kec. Enggal, Kota Bandar Lampung, Lampung 35213', '-5.4176723', '105.2608744'),
(14, 'RSIA', 'RSIA Belleza Kedaton', 'C', 'Bandar Lampung', 'Jalan Sultan Haji №17, Labuhan Ratu, Kec. Labuhan Ratu, Kota Bandar Lampung, Lampung 35132', '-5.3806886', '105.2584508'),
(15, 'RSIA', 'RSIA Bunda Asy-Syifa', 'C', 'Bandar Lampung', 'Jalan Dr. Susilo №54, Pahoman, Kec. Enggal, Kota Bandar Lampung, Lampung 35212', '-5.4299891', '105.2711323'),
(16, 'RSIA', 'RSIA Mutiara Putri', 'C', 'Bandar Lampung', 'Jalan HOS. Cokroaminoto №96, Tanjung Karang, Kec. Enggal, Kota Bandar Lampung, Lampung 35213', '-5.4229376', '105.2624577'),
(17, 'RSIA', 'RSIA Puri Betik Hati', 'C', 'Bandar Lampung', 'Jalan Pajajaran №109, Jagabaya II, Kec. Way Halim, Kota Bandar Lampung, Lampung 35132', '-5.3941442', '105.266066'),
(18, 'RSIA', 'RSIA Restu Bunda', 'C', 'Bandar Lampung', 'Jalan KH. Hasyim Ashari №73, Gedong Pakuon, Kec. Teluk Betung Selatan, Kota Bandar Lampung, Lampung 35221', '-5.4476421', '105.2561884'),
(19, 'RSIA', 'RSIA Santa Anna', 'C', 'Bandar Lampung', 'Jalan Sultan Hasanudin №27, Gunung Mas, Kec. Teluk Betung Selatan, Kota Bandar Lampung, Lampung 35221', '-5.4426492', '105.2676499'),
(20, 'RSIA', 'RSIA Sinta', 'C', 'Bandar Lampung', 'Jalan Imam Bonjol №512, Langkapura, Kec. Langkapura, Kota Bandar Lampung, Lampung 35118', '-5.392378', '105.226458'),
(30, 'RSU', 'RS Natar Medika', 'C', 'Lampung Selatan', 'Jl. Raya Natar No.4, Muara Putih, Kec. Natar, Kabupaten Lampung Selatan, Lampung 35362', '-5.3122346', '105.1874038'),
(33, 'RSU', 'RS Airan Raya', 'C', 'Lampung Selatan', 'Jl. Airan Raya No.99, Way Huwi, Kec. Jati Agung, Kabupaten Lampung Selatan, Lampung 35131', '5.3508155', '105.295364'),
(34, 'RSU', 'RS Umum Daerah Bandar Negara Husada', 'C', 'Lampung Selatan', 'PC24+X99, Komplek Pemerintahan Provinsi Lampung, Kota Baru, Jati Agung, Margorejo, Kec. Jati Agung, Kabupaten Lampung Selatan, Lampung 35365', '-5.2975095', '105.4037762'),
(35, 'RSIA', 'RS Ibu Anak Hidayah Ibu', 'C', 'Lampung Selatan', 'JL. Kusuma Bangsa, No. 128, Wayurang, Kalianda, Kec. Kalianda, Kabupaten Lampung Selatan, Lampung 35551', '-5.7299625', '105.586207'),
(36, 'RSU', 'RS Umum Daerah Dr. H. Bob Bazar, SKM', 'C', 'Lampung Selatan', 'Jl. Lettu Rohani No. 14 B, Desa Kedaton, Kecamatan Kalianda, Kabupaten Lampung Selatan, Provinsi Lampung', '-5.7275827', '105.5939368'),
(37, 'RSU', 'RS Airan Raya', 'C', 'Lampung Selatan', 'Jl. Airan Raya No.99, Way Huwi, Kec. Jati Agung, Kabupaten Lampung Selatan, Lampung 35131', '5.3508155', '105.295364'),
(38, 'RSU', 'RS Umum Daerah Bandar Negara Husada', 'C', 'Lampung Selatan', 'PC24+X99, Komplek Pemerintahan Provinsi Lampung, Kota Baru, Jati Agung, Margorejo, Kec. Jati Agung, Kabupaten Lampung Selatan, Lampung 35365', '-5.2975095', '105.4037762'),
(39, 'RSIA', 'RS Ibu Anak Hidayah Ibu', 'C', 'Lampung Selatan', 'JL. Kusuma Bangsa, No. 128, Wayurang, Kalianda, Kec. Kalianda, Kabupaten Lampung Selatan, Lampung 35551', '-5.7299625', '105.586207'),
(40, 'RSU', 'RS Umum Daerah Dr. H. Bob Bazar, SKM', 'C', 'Lampung Selatan', 'Jl. Lettu Rohani No. 14 B, Desa Kedaton, Kecamatan Kalianda, Kabupaten Lampung Selatan, Provinsi Lampung', '-5.7275827', '105.5939368');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bio`
--
ALTER TABLE `bio`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `data_rumah_sakit`
--
ALTER TABLE `data_rumah_sakit`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bio`
--
ALTER TABLE `bio`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_rumah_sakit`
--
ALTER TABLE `data_rumah_sakit`
  MODIFY `no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
