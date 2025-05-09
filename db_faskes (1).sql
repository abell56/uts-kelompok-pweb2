-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2025 at 10:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_faskes`
--

-- --------------------------------------------------------

--
-- Table structure for table `faskes`
--

CREATE TABLE `faskes` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_pengelola` varchar(45) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `website` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `rating` int(11) NOT NULL,
  `Kabkota_id` int(11) NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `jenis_faskes_id` int(11) NOT NULL,
  `kategori_id1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faskes`
--

INSERT INTO `faskes` (`id`, `nama`, `nama_pengelola`, `alamat`, `website`, `email`, `rating`, `Kabkota_id`, `longitude`, `latitude`, `jenis_faskes_id`, `kategori_id1`) VALUES
(1, 'marvee clinic', 'kimia farma', ' Jl.ir.H juanda no.30', ':kimia farma.web', 'kimiafarmacare@kimiafarma.co.id', 4, 1, 106.8083, 6.6219, 2, 3),
(2, 'Bogor selatan', 'dr. Maria Yuliana', 'Jl.Batutulis No 82 kel Batutulis kec.Bogor Selatan', 'https://pkmbogorselatan.kotabogor.go.id/', 'pkmbogorselatan@kotabogor.go.id', 4, 1, 106.8083, 6.6219, 1, 1),
(3, 'Hermina Bekasi', 'PT Medika Loka Manajemen', 'Jl. Kemakmuran No. 39, Margajaya, Bekasi, Jawa Barat', 'herminahospitals.com', 'marketing.bekasi@herminahospitals.com', 4, 4, 106.9918, -6.2386, 3, 2),
(4, 'Puskesmas Harapan Baru', 'Dinas Kesehatan Kota Bekasi', 'Boulevard Raya Jln Prima Harapan Regency RT 015 RW 009, Bekasi Utara, Kota Bekasi', 'puskesmas-harapanbaru.bekasikota.go.id', 'pkmharba@gmail.com', 4, 4, 106.9833, -6.2, 1, 1),
(5, 'Rumah sakit sentra medika ', 'Sentra Medika Group. Direktur Utama Sentra Me', 'Jl. Raya Mayor Oking Jaya Atmaja No.9, Cibinong, Kec. Cibinong, Kabupaten Bogor, Jawa Barat 16911', ' https://sentramedikahospitals.com/hospital/s', 'sentramedika@gmail.com ', 5, 1, 106.8647, 6.4804, 3, 2),
(6, 'Relof Clinic', 'Relof Clinic', 'Jl. Permata Hijau Permai No.1, Kaliabang Tengah, Kec. Bekasi Utara, Kota Bekasi, Jawa Barat 17125', 'relofclinic.com', 'info@relofclinic.com', 4, 4, 106.9876, -6.2205, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_faskes`
--

CREATE TABLE `jenis_faskes` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_faskes`
--

INSERT INTO `jenis_faskes` (`id`, `nama`) VALUES
(1, 'Puskesmas'),
(2, 'Klinik'),
(3, 'Rumah Sakit');

-- --------------------------------------------------------

--
-- Table structure for table `kabkota`
--

CREATE TABLE `kabkota` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `provinsi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kabkota`
--

INSERT INTO `kabkota` (`id`, `nama`, `latitude`, `longitude`, `provinsi_id`) VALUES
(1, 'Bogor', 6.5971, 106.806, 1),
(2, 'Semarang', 6.9838, 110.41, 2),
(3, 'Surabaya', 7.2575, 112.7521, 3),
(4, 'Bekasi', 6.2734, 106.9831, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Tingkat 1'),
(2, 'Tingkat 2'),
(3, 'Tingkat 3');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `ibukota` varchar(45) NOT NULL,
  `lati tude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama`, `ibukota`, `lati tude`, `longitude`) VALUES
(1, 'Jawa Barat ', 'Jakarta', 7.0909, 107.6689),
(2, 'Jawa Tengah', 'Semarang', 7.151, 110.1403),
(3, 'Jawa Timur', 'Surabaya', 7.5361, 112.2384),
(4, 'Jawa Barat ', 'Jakarta', 7.0909, 107.6689),
(5, 'Jawa Tengah', 'Semarang', 7.151, 110.1403),
(6, 'Jawa Timur', 'Surabaya', 7.5361, 112.2384);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faskes`
--
ALTER TABLE `faskes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id1` (`kategori_id1`),
  ADD KEY `jenis_faskes_id` (`jenis_faskes_id`),
  ADD KEY `Kabkota_id` (`Kabkota_id`);

--
-- Indexes for table `jenis_faskes`
--
ALTER TABLE `jenis_faskes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabkota`
--
ALTER TABLE `kabkota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provinsi_id` (`provinsi_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faskes`
--
ALTER TABLE `faskes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jenis_faskes`
--
ALTER TABLE `jenis_faskes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kabkota`
--
ALTER TABLE `kabkota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faskes`
--
ALTER TABLE `faskes`
  ADD CONSTRAINT `faskes_ibfk_2` FOREIGN KEY (`kategori_id1`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `faskes_ibfk_3` FOREIGN KEY (`jenis_faskes_id`) REFERENCES `jenis_faskes` (`id`),
  ADD CONSTRAINT `faskes_ibfk_4` FOREIGN KEY (`Kabkota_id`) REFERENCES `kabkota` (`id`);

--
-- Constraints for table `kabkota`
--
ALTER TABLE `kabkota`
  ADD CONSTRAINT `kabkota_ibfk_1` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
