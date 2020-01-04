-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 04 Jan 2020 pada 14.59
-- Versi Server: 10.1.43-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arkademyCoffe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `TB_Cashier`
--

CREATE TABLE `TB_Cashier` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `TB_Cashier`
--

INSERT INTO `TB_Cashier` (`id`, `name`) VALUES
(1, 'Pevita Pearce'),
(2, 'Raisa Andriana'),
(3, 'afwani shofiyulloh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `TB_Category`
--

CREATE TABLE `TB_Category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `TB_Category`
--

INSERT INTO `TB_Category` (`id`, `name`) VALUES
(1, 'food'),
(2, 'drink');

-- --------------------------------------------------------

--
-- Struktur dari tabel `TB_Product`
--

CREATE TABLE `TB_Product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `kategoriId` int(11) NOT NULL,
  `cashireId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `TB_Product`
--

INSERT INTO `TB_Product` (`id`, `name`, `price`, `kategoriId`, `cashireId`) VALUES
(1, 'Latte', 10000, 2, 1),
(2, 'Cake', 20000, 1, 2),
(3, 'Tahu Telor ', 9000, 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `TB_Cashier`
--
ALTER TABLE `TB_Cashier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `TB_Category`
--
ALTER TABLE `TB_Category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `TB_Product`
--
ALTER TABLE `TB_Product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategoriId` (`kategoriId`),
  ADD KEY `cashireId` (`cashireId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `TB_Cashier`
--
ALTER TABLE `TB_Cashier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `TB_Category`
--
ALTER TABLE `TB_Category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `TB_Product`
--
ALTER TABLE `TB_Product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `TB_Product`
--
ALTER TABLE `TB_Product`
  ADD CONSTRAINT `TB_Product_ibfk_1` FOREIGN KEY (`cashireId`) REFERENCES `TB_Cashier` (`id`),
  ADD CONSTRAINT `TB_Product_ibfk_2` FOREIGN KEY (`kategoriId`) REFERENCES `TB_Category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
