-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 05:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cinema_iix`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_customers`
--

CREATE TABLE `t_customers` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_customers`
--

INSERT INTO `t_customers` (`id_pengguna`, `nama_pengguna`, `no_telp`, `email`, `username`, `password`) VALUES
(1, 'Dimas Rovi Saputra', '1231231231', 'dimasgege@gmail.com', 'dimas', 'dimas');

-- --------------------------------------------------------

--
-- Table structure for table `t_lokasi_theater`
--

CREATE TABLE `t_lokasi_theater` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `id_theater` int(11) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_lokasi_theater`
--

INSERT INTO `t_lokasi_theater` (`id`, `lokasi`, `id_theater`, `harga`) VALUES
(1, 'Transmart MX Mall', 3, 35000),
(3, 'Araya', 3, 35000),
(4, 'Mandala', 3, 35000),
(5, 'Dieng', 3, 35000),
(6, 'Malang Town Square', 4, 30000),
(7, 'Lippo Plaza Batu', 4, 30000),
(8, 'Sarinah Malang', 5, 25000),
(9, 'Dinoyo City', 5, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `t_now_playing`
--

CREATE TABLE `t_now_playing` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `durasi` varchar(255) NOT NULL,
  `sinopsis` text NOT NULL,
  `lokasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_now_playing`
--

INSERT INTO `t_now_playing` (`id`, `gambar`, `judul`, `genre`, `durasi`, `sinopsis`, `lokasi`) VALUES
(2, 'Inside Out 2 - paper poster.jpg', 'INSIDE OUT 2', 'Animation', '96 Minutes', 'Petualangan kali ini akan membawa ke dunia emosi yang rumit. Riley telah tumbuh menjadi remaja berusia 13 tahun, seiring dengan itu tumbuh pula emosi baru yang harus dia hadapi.Bersama dengan emosi Joy, Sadness, Anger, Fear, dan Disgust, Riley sekarang juga menghadapi Anxiety, sebuah emosi baru dengan warna oranye. Kehadiran Anxiety di markas besar Riley menambah drama dalam ruang kontrol emosi.', 1),
(3, 'SENGKOLO MALAM SATU SURO.jpg', 'SENGKOLO MALAM SATU SURO', 'Horror', '100 Minutes', 'Ibrahim (Donny Alamsyah), seorang pemandi jenazah yang kehilangan keluarganya dalam kejadian mengerikan, berhenti dari pekerjaannya. Ketika keluarga kaya di kampungnya mati misterius, warga percaya itu ilmu hitam. Tidak ada pemandi yang mau memandikan mereka, hingga Pak Kades (Fauzan Nasrul) meminta bantuan Ibrahim. Meskipun enggan, Ibrahim akhirnya setuju. Setelah setahun, dia menemukan petunjuk tentang kematian keluarganya dan menghadapi kejahatan yang menunggunya di rumah terkutuk itu. Akankah dia bisa melawan iblis dengan imannya yang hilang?', 6),
(4, 'Chief of Station (2024) - CinemaTV.jpg', 'CHIEF OF STATION', 'Action, Thriller', '97 Minutes', 'Setelah mengetahui istrinya Farrah (Laetitia Eido) tewas bukan karena kecelakaan, mantan kepala stasiun CIA Benjamin Malloy (Aaron Eckhart) mulai mencari tahu dan melakukan penyelidikan. Ia terpaksa kembali ke dunia spionase, dan bekerja sama dengan musuh untuk mengungkap konspirasi.', 9);

-- --------------------------------------------------------

--
-- Table structure for table `t_pembelian`
--

CREATE TABLE `t_pembelian` (
  `id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_pembelian`
--

INSERT INTO `t_pembelian` (`id`, `id_customer`, `id_film`) VALUES
(1, 1, 2),
(7, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `t_theater`
--

CREATE TABLE `t_theater` (
  `id` int(11) NOT NULL,
  `nama_theater` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_theater`
--

INSERT INTO `t_theater` (`id`, `nama_theater`) VALUES
(3, 'Cinema IIX'),
(4, 'Cinépolis'),
(5, 'Movimax');

-- --------------------------------------------------------

--
-- Table structure for table `t_up_coming`
--

CREATE TABLE `t_up_coming` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `durasi` varchar(255) NOT NULL,
  `sinopsis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_up_coming`
--

INSERT INTO `t_up_coming` (`id`, `gambar`, `judul`, `genre`, `durasi`, `sinopsis`) VALUES
(1, 'DESPICABLE ME 4 (2024).jpg', 'DESPICABLE ME 4', 'Animation, Comedy', '94 Minutes', 'Gru, Lucy, Margo, Edith, dan Agnes siap menyambut anggota baru di keluarga. Di tengah kebahagiaan, Gru harus menghadapi penjahat bernama Maxime Le Mal yang berniat membalas dendam kepada Gru. Apakah Gru bisa menyelamatkan keluarga kecilnya?');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','owner') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(5, 'owner', 'owner', 'owner', 'owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_customers`
--
ALTER TABLE `t_customers`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `t_lokasi_theater`
--
ALTER TABLE `t_lokasi_theater`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_theater` (`id_theater`);

--
-- Indexes for table `t_now_playing`
--
ALTER TABLE `t_now_playing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lokasi` (`lokasi`);

--
-- Indexes for table `t_pembelian`
--
ALTER TABLE `t_pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_customer`,`id_film`),
  ADD KEY `id_film` (`id_film`);

--
-- Indexes for table `t_theater`
--
ALTER TABLE `t_theater`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_up_coming`
--
ALTER TABLE `t_up_coming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_customers`
--
ALTER TABLE `t_customers`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_lokasi_theater`
--
ALTER TABLE `t_lokasi_theater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `t_now_playing`
--
ALTER TABLE `t_now_playing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_pembelian`
--
ALTER TABLE `t_pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_theater`
--
ALTER TABLE `t_theater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_up_coming`
--
ALTER TABLE `t_up_coming`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_lokasi_theater`
--
ALTER TABLE `t_lokasi_theater`
  ADD CONSTRAINT `t_lokasi_theater_ibfk_1` FOREIGN KEY (`id_theater`) REFERENCES `t_theater` (`id`);

--
-- Constraints for table `t_now_playing`
--
ALTER TABLE `t_now_playing`
  ADD CONSTRAINT `t_now_playing_ibfk_1` FOREIGN KEY (`lokasi`) REFERENCES `t_lokasi_theater` (`id`);

--
-- Constraints for table `t_pembelian`
--
ALTER TABLE `t_pembelian`
  ADD CONSTRAINT `t_pembelian_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `t_customers` (`id_pengguna`),
  ADD CONSTRAINT `t_pembelian_ibfk_2` FOREIGN KEY (`id_film`) REFERENCES `t_now_playing` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
