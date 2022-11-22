-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 08:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `alamat`, `fakultas`) VALUES
(20, 'H071211079', 'Dhiyaa Unnisa', 'Maros', 'Fakultas Matematika dan Ilmu Pengetahuan Alam'),
(22, 'H071211070', 'Wd. Ananda Lesmono', 'Antang', 'Fakultas Matematika dan Ilmu Pengetahuan Alam'),
(27, 'H071211067', 'Syifa Ur Rahmi', 'Ramsis', 'Fakultas Matematika dan Ilmu Pengetahuan Alam');

-- --------------------------------------------------------

--
-- Table structure for table `oop_users`
--

CREATE TABLE `oop_users` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oop_users`
--

INSERT INTO `oop_users` (`id`, `nama`, `user_name`, `email`, `password`, `date`) VALUES
(1, 'Dhiyaa Unnisa', 'dhiyaaunnisa_', 'unnisadhiyaa25@gmail.com', '123456', '2022-11-15 08:38:08'),
(2, 'dhya unnisa', 'dhyalogue', 'carbonara00@gmail.com', 'dhiyaaunnisa', '2022-11-15 09:03:59'),
(3, 'nanda', 'nandalesmono', 'fjdsakl@gmail.comm', 'nanda123', '2022-11-15 09:06:39'),
(4, 'chiko', 'chiciko_', 'chiciko12@gmail.com', 'asdfghjkl', '2022-11-16 07:00:57'),
(5, 'uhs', 'jennie', 'jennie@gmail.com', '1234567', '2022-11-18 04:38:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Nim` (`nim`);

--
-- Indexes for table `oop_users`
--
ALTER TABLE `oop_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `oop_users`
--
ALTER TABLE `oop_users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
