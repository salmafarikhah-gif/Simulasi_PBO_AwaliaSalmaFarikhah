-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2026 at 02:50 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simulasi_pbo_ti1c_awaliasalmafarikhah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pendaftaran`
--

CREATE TABLE `tabel_pendaftaran` (
  `id_pendaftaran` varchar(50) NOT NULL,
  `nama_calon` varchar(150) NOT NULL,
  `asal_sekolah` varchar(150) NOT NULL,
  `nilai_ujian` decimal(5,2) NOT NULL,
  `biaya_pendaftaran_dasar` decimal(12,2) NOT NULL,
  `jalur_pendaftaran` enum('Reguler','Prestasi','Kedinasan') NOT NULL,
  `pilihan_prodi` varchar(100) DEFAULT NULL,
  `lokasi_kampus` varchar(100) DEFAULT NULL,
  `jenis_prestasi` varchar(100) DEFAULT NULL,
  `tingkat_prestasi` varchar(50) DEFAULT NULL,
  `sk_ikatan_dinas` varchar(100) DEFAULT NULL,
  `instansi_sponsor` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_pendaftaran`
--

INSERT INTO `tabel_pendaftaran` (`id_pendaftaran`, `nama_calon`, `asal_sekolah`, `nilai_ujian`, `biaya_pendaftaran_dasar`, `jalur_pendaftaran`, `pilihan_prodi`, `lokasi_kampus`, `jenis_prestasi`, `tingkat_prestasi`, `sk_ikatan_dinas`, `instansi_sponsor`) VALUES
('KDN-001', 'Oki Setiawan', 'SMA Negeri 1 Purwodadi', '84.50', '300000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DIS-2026-01', 'Dinas Kominfo'),
('KDN-002', 'Putri Rahayu', 'SMA Negeri 9 Semarang', '88.70', '300000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DIS-2026-02', 'Dinas Perhubungan'),
('KDN-003', 'Rian Hidayat', 'SMK Negeri 4 Semarang', '81.20', '300000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DIS-2026-03', 'Bappeda Provinsi'),
('KDN-004', 'Siti Aminah', 'SMA Negeri 10 Semarang', '86.90', '300000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DIS-2026-04', 'Dinas Pendidikan'),
('KDN-005', 'Taufik Hidayat', 'SMA Sedes Sapientiae', '90.00', '300000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DIS-2026-05', 'Kementerian Agama'),
('KDN-006', 'Utari Handayani', 'SMA Negeri 1 Boyolali', '83.40', '300000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DIS-2026-06', 'Dinas Kesehatan'),
('KDN-007', 'Vicky Nitinegoro', 'SMK Penerbangan', '85.00', '300000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DIS-2026-07', 'Disperindag'),
('PRS-001', 'Hendra Wijaya', 'SMA Negeri 1 Salatiga', '92.00', '200000.00', 'Prestasi', NULL, NULL, 'Olimpiade Matematika', 'Nasional', NULL, NULL),
('PRS-002', 'Indah Permata', 'SMA Don Bosko', '89.50', '200000.00', 'Prestasi', NULL, NULL, 'Futsal Putri', 'Provinsi', NULL, NULL),
('PRS-003', 'Joko Tingkir', 'SMK Negeri 1 Kendal', '86.00', '200000.00', 'Prestasi', NULL, NULL, 'Lomba Kompetensi Siswa', 'Nasional', NULL, NULL),
('PRS-004', 'Kurniawati', 'SMA Negeri 5 Semarang', '94.00', '200000.00', 'Prestasi', NULL, NULL, 'Karya Ilmiah Remaja', 'Internasional', NULL, NULL),
('PRS-005', 'Luthfi Hakim', 'MAN 2 Semarang', '87.30', '200000.00', 'Prestasi', NULL, NULL, 'Tahfidz 10 Juz', 'Provinsi', NULL, NULL),
('PRS-006', 'Mega Utami', 'SMA Negeri 1 Ungaran', '91.20', '200000.00', 'Prestasi', NULL, NULL, 'Pencak Silat', 'Nasional', NULL, NULL),
('PRS-007', 'Naufal Abdi', 'SMA Muhammadiyah 1', '85.80', '200000.00', 'Prestasi', NULL, NULL, 'Desain Grafis', 'Kota', NULL, NULL),
('REG-001', 'Ahmad Fauzi', 'SMA Negeri 1 Semarang', '85.50', '250000.00', 'Reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
('REG-002', 'Budi Santoso', 'SMA Negeri 3 Semarang', '78.00', '250000.00', 'Reguler', 'Sistem Informasi', 'Kampus Utama', NULL, NULL, NULL, NULL),
('REG-003', 'Citra Lestari', 'MAN 1 Semarang', '90.25', '250000.00', 'Reguler', 'Teknik Elektro', 'Kampus 2', NULL, NULL, NULL, NULL),
('REG-004', 'Dewi Sartika', 'SMA Negeri 2 Kudus', '82.40', '250000.00', 'Reguler', 'Manajemen Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
('REG-005', 'Eko Prasetyo', 'SMK Negeri 2 Semarang', '75.60', '250000.00', 'Reguler', 'Teknik Informatika', 'Kampus 2', NULL, NULL, NULL, NULL),
('REG-006', 'Fitriani', 'SMA Negeri 1 Demak', '88.00', '250000.00', 'Reguler', 'Sistem Informasi', 'Kampus Utama', NULL, NULL, NULL, NULL),
('REG-007', 'Gilang Ramadhan', 'SMA Kartika Semarang', '80.10', '250000.00', 'Reguler', 'Teknik Elektro', 'Kampus 2', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
