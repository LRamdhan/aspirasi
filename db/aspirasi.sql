-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 05:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aspirasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('samsul', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `aspirasi`
--

CREATE TABLE `aspirasi` (
  `id` int(11) NOT NULL,
  `npm` varchar(12) NOT NULL,
  `judul` varchar(35) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('terkirim','diproses','selesai','') NOT NULL DEFAULT 'terkirim',
  `gambar` varchar(40) NOT NULL,
  `pesan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aspirasi`
--

INSERT INTO `aspirasi` (`id`, `npm`, `judul`, `deskripsi`, `tanggal`, `waktu`, `status`, `gambar`, `pesan`) VALUES
(1, '220660121042', 'mati listrik', 'listrik di lab terkadang mati', '2023-04-12', '2023-04-12 19:43:42', 'selesai', '6436a77e1b41c.jpg', 'oke siap'),
(2, '220660121042', 'proyektor jelek', 'proyektor selalu bergaris', '2023-04-12', '2023-04-12 19:45:35', 'terkirim', '6436a7ef69d68.jpg', ''),
(3, '220660121042', 'proyektor jelek', 'proyektor selalu bergaris', '2023-04-12', '2023-04-12 19:45:40', 'diproses', '6436a7f4a6dad.jpg', 'oke akan segera kami proses'),
(4, '220660121042', 'apa aja', 'fsdfe', '2023-04-12', '2023-04-12 19:46:43', 'selesai', '', 'sing jelas ath'),
(5, '220660121042', 'coba', 'check', '2023-04-12', '2023-04-12 19:46:59', 'terkirim', '', ''),
(6, '220660121042', 'lagi', 'jfiefa', '2023-04-12', '2023-04-12 19:47:05', 'terkirim', '', ''),
(7, '220660121045', 'feji', 'jife', '2023-04-12', '2023-04-12 20:03:15', 'terkirim', '', ''),
(8, '220660121045', 'fge', 'fsafe', '2023-04-12', '2023-04-12 20:03:20', 'terkirim', '', ''),
(9, '220660121045', 'ge', 'erwr', '2023-04-12', '2023-04-12 20:03:24', 'terkirim', '', ''),
(10, '220660121045', 'gew', 'fse', '2023-04-12', '2023-04-12 20:03:29', 'terkirim', '', ''),
(11, '220660121045', 'fsafe', 'gegew', '2023-04-12', '2023-04-12 20:03:39', 'terkirim', '', ''),
(12, '220660121045', 'gesfgea', 'few', '2023-04-12', '2023-04-12 20:06:04', 'terkirim', '', ''),
(13, '220660121045', 'gew', 'fsfef', '2023-04-12', '2023-04-12 20:06:10', 'terkirim', '', ''),
(14, '220660121045', 'geew', 'gewese', '2023-04-12', '2023-04-12 20:06:18', 'terkirim', '', ''),
(15, '220660121045', 'gew', 'ffewfw', '2023-04-12', '2023-04-12 20:06:25', 'terkirim', '', ''),
(16, '220660121045', 'gewg', 'fesfe', '2023-04-12', '2023-04-12 20:06:32', 'terkirim', '', ''),
(17, '220660121045', 'gewgw', 'gwfw', '2023-04-12', '2023-04-12 20:06:37', 'terkirim', '', ''),
(18, '220660121045', 'apa aja', 'seperti biasa', '2023-04-12', '2023-04-12 22:16:59', 'terkirim', '6436cb6b3505b.jpg', ''),
(19, '220660121045', 'baru', 'yang baru lagi', '2023-04-12', '2023-04-12 22:20:37', 'terkirim', 'aspirasi_6436cc4589a59.jpg', ''),
(20, '220660121045', 'sudah malam', 'coba cehck', '2023-04-13', '2023-04-13 01:55:22', 'terkirim', '', ''),
(21, '220660121045', 'nani', 'fsafe', '2023-04-13', '2023-04-13 01:55:45', 'terkirim', 'aspirasi_6436feb1e9820.jpg', ''),
(22, '220660121045', 'oke', 'fsafea', '2023-04-13', '2023-04-13 02:01:25', 'terkirim', '', ''),
(23, '220660121045', 'oke jadi ', 'yaa begitulah', '2023-04-13', '2023-04-13 06:54:14', 'terkirim', '', ''),
(24, '220660121045', 'ffsfe', 'gsda', '2023-04-13', '2023-04-13 07:26:49', 'terkirim', 'aspirasi_64374c491b895.svg', '');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` varchar(12) NOT NULL,
  `password` varchar(80) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(12) NOT NULL,
  `fakultas` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `password`, `nama`, `kelas`, `fakultas`) VALUES
('220660121001', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'M. Reksa Aji Winangun', 'TI-IIA', 'FTI'),
('220660121002', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Reza Nurramadhan Suparman', 'TI-IIB', 'FTI'),
('220660121003', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Tito Purwana Sasmita', 'TI-IIC', 'FTI'),
('220660121005', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'M. Reno Hidayat', 'TI-IID', 'FTI'),
('220660121006', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Nurul Hadi', 'TI-IIE', 'FTI'),
('220660121007', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhammad Hilman Firmansyah', 'TI-IIA', 'FTI'),
('220660121008', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhammad Fakhri Husaini', 'TI-IIB', 'FTI'),
('220660121009', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Argyan Mochamad Rizky Hiday', 'TI-IIC', 'FTI'),
('220660121010', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Rais Mughni Salam', 'TI-IID', 'FTI'),
('220660121011', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Luthfi Irham Zulafa', 'TI-IIE', 'FTI'),
('220660121013', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'M Arif Firmansyah', 'TI-IIA', 'FTI'),
('220660121014', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Rangga Putra Adityo Al Nagri', 'TI-IIB', 'FTI'),
('220660121016', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Anisa Pebriyani Huslan', 'TI-IIB', 'FTI'),
('220660121017', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Meta Dewi Anggraeni', 'TI-IIC', 'FTI'),
('220660121018', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Rifqi Rahmatullah', 'TI-IIC', 'FTI'),
('220660121019', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Rifky Septiana Rizki', 'TI-IID', 'FTI'),
('220660121020', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'A Arrizki Hidayatulloh', 'TI-IIE', 'FTI'),
('220660121021', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Ferdi Ilham', 'TI-IIA', 'FTI'),
('220660121022', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Syauqi Zainun Nauval', 'TI-IIB', 'FTI'),
('220660121023', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Daud Ramdani', 'TI-IIC', 'FTI'),
('220660121024', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Anjelina Mentari Rustandi', 'TI-IID', 'FTI'),
('220660121025', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Erlan Nurhaditia', 'TI-IID', 'FTI'),
('220660121027', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Agi Raihan Faturoman', 'TI-IIE', 'FTI'),
('220660121028', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Dede Ahmad Rosid', 'TI-IIA', 'FTI'),
('220660121029', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Luthfi Delvian', 'TI-IIB', 'FTI'),
('220660121030', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Regani Awalludin', 'TI-IIC', 'FTI'),
('220660121031', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Nida Shofwatunnisa', 'TI-IIE', 'FTI'),
('220660121032', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Moh. Eri Ramadhan Ghifari', 'TI-IID', 'FTI'),
('220660121033', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Rifan Warosy Sirojudin', 'TI-IIE', 'FTI'),
('220660121034', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Rani Siti Nabila', 'TI-IIA', 'FTI'),
('220660121035', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Naufal Siddiq Ramadhan', 'TI-IIA', 'FTI'),
('220660121036', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhammad Fajar Lutfiana', 'TI-IIB', 'FTI'),
('220660121037', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Ismi Indah Aryani', 'TI-IIB', 'FTI'),
('220660121038', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhamad Agustin Aditiya', 'TI-IIC', 'FTI'),
('220660121039', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Reyhan Dwika Putra', 'TI-IID', 'FTI'),
('220660121040', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhamad Rizki Lazuardi', 'TI-IIE', 'FTI'),
('220660121041', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Kemal Pramayuda', 'TI-IIA', 'FTI'),
('220660121042', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Luji Ramdhan', 'TI-IIB', 'FTI'),
('220660121044', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Deni Andayani', 'TI-IIC', 'FTI'),
('220660121045', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhammad Iman Aditiya Sudraj', 'TI-IIC', 'FTI'),
('220660121046', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Osewa Pallyama Sultan Khadir', 'TI-IID', 'FTI'),
('220660121047', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Fauzi Septiana Pamungkas', 'TI-IIE', 'FTI'),
('220660121048', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Ridwan Hanafi', 'TI-IIA', 'FTI'),
('220660121049', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Putra Reikhan Rifaldi', 'TI-IIB', 'FTI'),
('220660121050', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhammad Irsan', 'TI-IIC', 'FTI'),
('220660121051', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Ruspandi', 'TI-IID', 'FTI'),
('220660121052', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Asri Ayuni', 'TI-IID', 'FTI'),
('220660121053', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Ilham Budi Kristiawan', 'TI-IIE', 'FTI'),
('220660121054', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Virzan Pasa Nugraha', 'TI-IIA', 'FTI'),
('220660121055', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Silmi Ainun Ashafani', 'TI-IIE', 'FTI'),
('220660121056', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhamad Taufik Abdurrahman', 'TI-IIB', 'FTI'),
('220660121057', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Syahal Muhamad Indra', 'TI-IIC', 'FTI'),
('220660121058', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhammad Ghianza Al Ghifari', 'TI-IID', 'FTI'),
('220660121059', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhamad Fadlan Asmawi', 'TI-IIE', 'FTI'),
('220660121060', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Luthfi Rahmat Lukmanul Hakim', 'TI-IIA', 'FTI'),
('220660121061', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Putra Dinnur Rohman', 'TI-IIB', 'FTI'),
('220660121062', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Agin Gustiana', 'TI-IIC', 'FTI'),
('220660121063', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Reza Dzikri Rabbani', 'TI-IID', 'FTI'),
('220660121064', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Egina Fitrah Budiana', 'TI-IIE', 'FTI'),
('220660121065', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'M. Azhar', 'TI-IIA', 'FTI'),
('220660121066', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Siti Rachmania Putri', 'TI-IIA', 'FTI'),
('220660121067', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhammad Rizal Daffa Khoiru', 'TI-IIB', 'FTI'),
('220660121068', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhamad Deni Ramdani', 'TI-IIC', 'FTI'),
('220660121069', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Fadhil Ahmad Fathoni', 'TI-IID', 'FTI'),
('220660121070', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Tio Alga Grahayudha Agung P', 'TI-IIE', 'FTI'),
('220660121071', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Fajar Agusti Hamid', 'TI-IIA', 'FTI'),
('220660121072', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Gyna Sonia Mawaridhatul Zan', 'TI-IIB', 'FTI'),
('220660121073', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Refandihaz Awaludin', 'TI-IIB', 'FTI'),
('220660121074', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhammad Ues', 'TI-IIC', 'FTI'),
('220660121075', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Anggara Gustika', 'TI-IID', 'FTI'),
('220660121076', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Vanya Alifia Azzahra', 'TI-IIC', 'FTI'),
('220660121077', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Herdianto Sukmana', 'TI-IIE', 'FTI'),
('220660121078', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Alip Rizky Firdaus', 'TI-IIA', 'FTI'),
('220660121079', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Mirza Fazli Alifa', 'TI-IIB', 'FTI'),
('220660121080', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Engkus Kusnadi', 'TI-IIC', 'FTI'),
('220660121081', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Harry Zulkifli', 'TI-IID', 'FTI'),
('220660121082', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhammad Farid Abdillah', 'TI-IIE', 'FTI'),
('220660121083', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Amanda Listiana Puspanagara', 'TI-IID', 'FTI'),
('220660121084', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Lusi Sugiarti Lestari', 'TI-IIE', 'FTI'),
('220660121085', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Farida Zahra Arindra', 'TI-IIA', 'FTI'),
('220660121086', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Agung Febrian', 'TI-IIA', 'FTI'),
('220660121087', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Andika Bangkit Pratama', 'TI-IIB', 'FTI'),
('220660121088', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhammad Iksan Mutaqien', 'TI-IIC', 'FTI'),
('220660121089', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Hikmawati Nurul Insani', 'TI-IIB', 'FTI'),
('220660121090', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Syifa Khairunnisa', 'TI-IIC', 'FTI'),
('220660121092', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Hendra Hermawan', 'TI-IID', 'FTI'),
('220660121093', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Jiad Dzikri Ramadia', 'TI-IIE', 'FTI'),
('220660121094', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Aura Rahayu Aksa Radiana', 'TI-IID', 'FTI'),
('220660121095', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Kikih Isman Iskandar', 'TI-IIA', 'FTI'),
('220660121096', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Raka Rey Ferdian', 'TI-IIB', 'FTI'),
('220660121097', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Ilham Ahmad Pauzan', 'TI-IIC', 'FTI'),
('220660121098', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Zio Wikago', 'TI-IID', 'FTI'),
('220660121099', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Desi Siti Rahmawati', 'TI-IIE', 'FTI'),
('220660121100', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhamad Rafi Agil Ramadhan', 'TI-IIE', 'FTI'),
('220660121101', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhammad Ferdi Sirojuddin', 'TI-IIA', 'FTI'),
('220660121102', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Radhi Rabbani', 'TI-IIB', 'FTI'),
('220660121103', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Luthfi Firmansyah', 'TI-IIC', 'FTI'),
('220660121104', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Virgy Septiana', 'TI-IID', 'FTI'),
('220660121105', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Alwaliya Maajid Sabur', 'TI-IIE', 'FTI'),
('220660121106', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Hilma Nurun Naziah', 'TI-IIA', 'FTI'),
('220660121107', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Nadeya Ladia Tantri', 'TI-IIB', 'FTI'),
('220660121108', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Listia Silviani', 'TI-IIC', 'FTI'),
('220660121109', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Firli Alhafiz Sauqilah', 'TI-IID', 'FTI'),
('220660121110', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhammad Yusuf Zulfikar', 'TI-IIA', 'FTI'),
('220660121111', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhammad Taqiyuddin Ali', 'TI-IIB', 'FTI'),
('220660121112', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Kaka Kalam Djati Permana', 'TI-IIC', 'FTI'),
('220660121113', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Arya Mahendrata Diningrat', 'TI-IID', 'FTI'),
('220660121114', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Faris Muslim', 'TI-IIE', 'FTI'),
('220660121115', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Kemal Hapidz Prastiawan', 'TI-IIA', 'FTI'),
('220660121116', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhamad Rafi Rendhani', 'TI-IIB', 'FTI'),
('220660121117', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Reyto Yogastiana', 'TI-IIC', 'FTI'),
('220660121118', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhammad Raihan Abdul Mugh', 'TI-IID', 'FTI'),
('220660121119', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Herman Sanjaya', 'TI-IIE', 'FTI'),
('220660121120', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Dimas Muhamad Fathu Rizkilla', 'TI-IIA', 'FTI'),
('220660121121', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Nayaka Sahasika', 'TI-IIE', 'FTI'),
('220660121123', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Pahrijal Saban Mubarok', 'TI-IIB', 'FTI'),
('220660121124', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Kamal Nurfalah', 'TI-IIC', 'FTI'),
('220660121125', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Wildan Hidayatulloh', 'TI-IID', 'FTI'),
('220660121126', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Rayhan Darrion Wiraatmaja', 'TI-IIE', 'FTI'),
('220660121127', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Aditiya Achmad Fauzi', 'TI-IID', 'FTI'),
('220660121128', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Wildan Taufik Dermawan', 'TI-IIB', 'FTI'),
('220660121129', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Satria Kamal Fikhriyadi', 'TI-IIC', 'FTI'),
('220660121130', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Reni Kartika Suwandi', 'TI-IIA', 'FTI'),
('220660121131', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Ferdy Rafi Fauzy', 'TI-IID', 'FTI'),
('220660121132', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Suci Sulastri', 'TI-IIB', 'FTI'),
('220660121133', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Wishal Al Faridz', 'TI-IIE', 'FTI'),
('220660121134', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Rival Fakhri Amrullah', 'TI-IIA', 'FTI'),
('220660121135', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Rio Irlandy Pusan', 'TI-IIB', 'FTI'),
('220660121136', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhammad Aditya Maulana', 'TI-IIC', 'FTI'),
('220660121137', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Egi Rangga Maulana', 'TI-IID', 'FTI'),
('220660121138', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Zakya Nur Bayanti', 'TI-IIC', 'FTI'),
('220660121139', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Rizky Fauzan Pratama', 'TI-IIE', 'FTI'),
('220660121140', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Samsul Prastio', 'TI-IIA', 'FTI'),
('220660121141', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Obi Bagas Dirgantara', 'TI-IIB', 'FTI'),
('220660121142', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Albani Akbar', 'TI-IIC', 'FTI'),
('220660121143', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Khairil Sidik', 'TI-IID', 'FTI'),
('220660121144', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Abdah Syakiroh Gustian', 'TI-IID', 'FTI'),
('220660121145', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Dewanda Camilla Zahra', 'TI-IIE', 'FTI'),
('220660121146', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Melisa Sri Rahayu', 'TI-IIA', 'FTI'),
('220660121147', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Iqbal Hakim Nugraha', 'TI-IIE', 'FTI'),
('220660121148', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Alif Nur Huda Feriawan', 'TI-IIA', 'FTI'),
('220660121149', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhamad Fariz Marzuqi', 'TI-IIB', 'FTI'),
('220660121150', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'M. Shandy Agustian', 'TI-IIC', 'FTI'),
('220660121151', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Fauzi Faturohman', 'TI-IID', 'FTI'),
('220660121152', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Fadly Rizaldy Alfareza', 'TI-IIE', 'FTI'),
('220660121153', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhamad Ryan Maulana', 'TI-IIA', 'FTI'),
('220660121154', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Naval Maulana Bahari', 'TI-IIB', 'FTI'),
('220660121155', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Fikri Ilham Amanuloh', 'TI-IIC', 'FTI'),
('220660121156', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhammad Arifin Ilham', 'TI-IID', 'FTI'),
('220660121157', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Hendra Kusnadran', 'TI-IIE', 'FTI'),
('220660121158', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Deden Adi Mardian Lesmana', 'TI-IIA', 'FTI'),
('220660121159', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Iwan Darmawan', 'TI-IIB', 'FTI'),
('220660121160', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhammad Irfan', 'TI-IIC', 'FTI'),
('220660121161', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Alif Gumelar Syah Moeslim', 'TI-IID', 'FTI'),
('220660121162', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Fauzan Musa Margana', 'TI-IIE', 'FTI'),
('220660121163', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Devi Cahyati', 'TI-IIB', 'FTI'),
('220660121164', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhammad Arsyad Fathan Suc', 'TI-IIA', 'FTI'),
('220660121165', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Fadhilah Muhammad Shodiq', 'TI-IIB', 'FTI'),
('220660121166', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Deden Hidayat', 'TI-IIC', 'FTI'),
('220660121167', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Naufal Fauzan Hisyam', 'TI-IID', 'FTI'),
('220660121168', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Caesha Davala Setiana', 'TI-IIE', 'FTI'),
('220660121169', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Sigit Pangestu', 'TI-IIA', 'FTI'),
('220660121170', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Hilmi Ulun', 'TI-IIB', 'FTI'),
('220660121171', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhammad Anwar', 'TI-IIC', 'FTI'),
('220660121172', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Nina Kristina', 'TI-IIC', 'FTI'),
('220660121173', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Daffa Putra Emeral', 'TI-IID', 'FTI'),
('220660121174', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Naufal Fadhiil Nasrullah', 'TI-IIE', 'FTI'),
('220660121175', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Riva Ihsanul Amal', 'TI-IIA', 'FTI'),
('220660121176', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Aura Agrariana Fitriani', 'TI-IID', 'FTI'),
('220660121177', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Fina Nur Aeni', 'TI-IIE', 'FTI'),
('220660121178', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Muhammad Septiadi', 'TI-IIB', 'FTI'),
('220660121179', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Dede Yayan Suciana', 'TI-IIA', 'FTI'),
('220660121180', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Rizki Pangestu', 'TI-IIC', 'FTI'),
('220660121181', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Siti Sarah Nabila', 'TI-IIB', 'FTI'),
('220660121182', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Raihan Aqimulael', 'TI-IID', 'FTI'),
('220660121183', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Alif Setiawan', 'TI-IIE', 'FTI'),
('220660121184', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Irman Zulfikar Yahdin Suhart', 'TI-IIA', 'FTI'),
('220660121185', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Warlina', 'TI-IIC', 'FTI'),
('220660121186', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Ahmad Bahrudin Rifqi', 'TI-IIB', 'FTI'),
('220660121187', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Kelvin Kapila', 'TI-IIC', 'FTI'),
('220660121188', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Fanny Ismayanti', 'TI-IID', 'FTI'),
('220660121189', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Fadillah', 'TI-IID', 'FTI'),
('220660121190', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Lutfi Ditya Nugraha', 'TI-IIE', 'FTI'),
('220660121191', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Kusmayanti Perwanti', 'TI-IIE', 'FTI'),
('220660121192', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Sigit Riyana', 'TI-IIA', 'FTI'),
('220660121193', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Fadlah Ridlwan', 'TI-IIB', 'FTI'),
('220660121194', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Rivaldi Setia Zaeni', 'TI-IIC', 'FTI'),
('220660121195', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Yogi Cahya Yogaswara', 'TI-IID', 'FTI'),
('220660121196', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Dio Aditya Firmansyah', 'TI-IIE', 'FTI'),
('220660121197', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Raka Sukma Apriobi', 'TI-IIA', 'FTI'),
('220660121198', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Mikail Dafi Fadgham', 'TI-IIB', 'FTI'),
('220660121200', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Usep Suherman', 'TI-IIC', 'FTI'),
('220660121201', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Feriyadi Akbar Siregar', 'TI-IID', 'FTI'),
('220660121202', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Haifan Ghani Raihan Santos', 'TI-IIE', 'FTI'),
('220660121205', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Elga Satrio Putra Riyanto', 'TI-IIA', 'FTI'),
('220660121206', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Chaerull Raflie', 'TI-IIB', 'FTI'),
('220660121207', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Rafie Sukma Hauzan', 'TI-IIC', 'FTI'),
('220660121208', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Akmal Muhammad Poetra', 'TI-IIA', 'FTI'),
('220660121209', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Syahnur Fauzi', 'TI-IID', 'FTI'),
('220660122203', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Riswan Nuryaman Sudrajat', 'TI-IIB', 'FTI'),
('220660122204', '$2y$10$aAtvA.KE0nYmibz8IP20He6L.1z8g85aO9L8DSMfq/8GN3zKCNM7i', 'Dede Wulan Rahayu', 'TI-IIA', 'FTI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aspirasi`
--
ALTER TABLE `aspirasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
