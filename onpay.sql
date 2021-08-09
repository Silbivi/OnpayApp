-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Mei 2020 pada 11.38
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onpay`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kodetransaksi` varchar(20) NOT NULL,
  `kodebayar` varchar(20) NOT NULL,
  `nominal` int(20) NOT NULL,
  `metodebayar` varchar(20) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`kodetransaksi`, `kodebayar`, `nominal`, `metodebayar`, `status`) VALUES
('G001', '2CGzoHgIfVsidrDy', 50000, 'Mandiri', 1),
('P001', '4sqg3CaumR8Tf5EG', 17000, 'pulsa', 2),
('V002', '52EA7JmaQqI4WRng', 100000, 'BCA', 2),
('K002', '5uK6waJDpoSx7b3i', 30000, 'Cash', 2),
('G002', '79HZfoqB8cAerxM1', 20000, 'Cash', 2),
('P003', 'bE9q3n8uMvPXZay0', 2000, 'Cash', 0),
('V001', 'BohrJ3pWKLGq8c6x', 300000, 'Cash', 1),
('D002', 'CVGfSUi8rbHj3QFI', 150000, 'BCA', 0),
('V003', 'dtUMpw1XYD4cfE9V', 50000, 'BRI', 1),
('P005', 'Jf4SsXNRC9PBpL1x', 52000, 'Cash', 0),
('D001', 'lK2FoGjXi5mauxEy', 100000, 'Cash', 0),
('P002', 'TcVPoQNDtz5JXR8j', 12000, 'Cash', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` int(20) NOT NULL,
  `bagian` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`nama`, `email`, `nohp`, `bagian`, `username`, `password`) VALUES
('Silvia Amanda', 'silviavia216@gmail.com', 30906693, 'Admin', 'silvia', 'silbivi25'),
('Lalisa Manoban', 'lalalalisa27@gmail.com', 76893212, 'Customer', 'lisa', 'lalisa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `kodetrans` varchar(20) NOT NULL,
  `jenistrans` varchar(20) NOT NULL,
  `nominaltrans` int(20) NOT NULL,
  `statuss` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`kodetrans`, `jenistrans`, `nominaltrans`, `statuss`) VALUES
('D001', 'DANA', 100000, 1),
('D002', 'DANA', 150000, 1),
('G001', 'GoPay', 50000, 1),
('G002', 'GoPay', 20000, 1),
('K001', 'Kuota', 60000, 1),
('K002', 'Kuota', 30000, 1),
('P001', 'Pulsa', 17000, 1),
('P002', 'Pulsa', 12000, 1),
('P003', 'Pulsa', 2000, 1),
('P005', 'Pulsa', 52000, 1),
('V001', 'OVO', 300000, 1),
('V002', 'OVO', 100000, 1),
('V003', 'OVO', 50000, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kodebayar`),
  ADD UNIQUE KEY `kodetransaksi` (`kodetransaksi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kodetrans`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`kodetransaksi`) REFERENCES `transaksi` (`kodetrans`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
