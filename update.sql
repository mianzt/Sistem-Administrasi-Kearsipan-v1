-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 01:28 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshanmp1_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `arsip_id` int(11) NOT NULL,
  `konsumen_id` int(11) DEFAULT NULL,
  `kategori_arsip` varchar(100) DEFAULT NULL,
  `ktp` varchar(100) NOT NULL,
  `kk` varchar(100) DEFAULT NULL,
  `akta_nikah` varchar(100) DEFAULT NULL,
  `npwp` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `slipgaji` varchar(100) DEFAULT '-',
  `siup` varchar(100) DEFAULT NULL,
  `sku` varchar(100) DEFAULT NULL,
  `neraca` varchar(100) DEFAULT NULL,
  `k_pegawai` varchar(100) DEFAULT NULL,
  `skpertama` varchar(100) DEFAULT NULL,
  `skbekerja` varchar(100) DEFAULT NULL,
  `ket_desa` varchar(100) DEFAULT NULL,
  `rek_koran` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`arsip_id`, `konsumen_id`, `kategori_arsip`, `ktp`, `kk`, `akta_nikah`, `npwp`, `foto`, `slipgaji`, `siup`, `sku`, `neraca`, `k_pegawai`, `skpertama`, `skbekerja`, `ket_desa`, `rek_koran`) VALUES
(2, 2, 'PNS', '59766.jpg', 'avatar2.png', 'asu.JPG', 'contoh_header.png', 'avatar04.png', 'quotes.jpeg', NULL, NULL, NULL, 'del.jpg', 'SMP_KAHURIPAN.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `denda_id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kavling` varchar(20) DEFAULT NULL,
  `alasan` int(11) DEFAULT NULL,
  `uang_booking` int(11) DEFAULT NULL,
  `uangmuka` int(11) DEFAULT NULL,
  `jml_denda` int(11) DEFAULT NULL,
  `tgl_denda` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `denda`
--

INSERT INTO `denda` (`denda_id`, `nama`, `kavling`, `alasan`, `uang_booking`, `uangmuka`, `jml_denda`, `tgl_denda`) VALUES
(3, 'Haruka', 'A-03', 1, 1000000, 7000000, 0, '2019-07-26'),
(4, 'Hiruka', 'A-05', 1, 1000000, 7000000, 0, '2019-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `konsumen_id` int(3) NOT NULL,
  `transaksi_id` int(11) DEFAULT NULL,
  `uang_muka` int(10) DEFAULT NULL,
  `no_ktp` varchar(16) DEFAULT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `no_ktp_p` varchar(16) DEFAULT NULL,
  `nama_p` varchar(20) NOT NULL,
  `tempat_lahir_p` varchar(20) NOT NULL,
  `tgl_lahir_p` date NOT NULL,
  `alamat_p` text NOT NULL,
  `pekerjaan_p` varchar(15) NOT NULL,
  `no_telpon_p` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`konsumen_id`, `transaksi_id`, `uang_muka`, `no_ktp`, `nama_pemesan`, `tempat_lahir`, `tgl_lahir`, `alamat`, `pekerjaan`, `no_telpon`, `no_ktp_p`, `nama_p`, `tempat_lahir_p`, `tgl_lahir_p`, `alamat_p`, `pekerjaan_p`, `no_telpon_p`, `tanggal`) VALUES
(2, 20, NULL, '32749499938338', 'Ibnu Hiban', 'garut', '1997-07-09', 'Kp.Taneuh bereum', 'Wiraswasta', '0878273456', '327889900070', 'Aisyah1', 'Bandung', '1996-07-08', 'ajsgja', 'ibu rumah tangg', '0896663456', '2019-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE `pemesan` (
  `pemesan_id` int(11) NOT NULL,
  `no_booking` varchar(100) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `no_ktp` varchar(16) DEFAULT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `booking` int(11) DEFAULT '0',
  `deadline` varchar(100) DEFAULT '-',
  `bayar` int(11) NOT NULL,
  `status` int(2) DEFAULT NULL,
  `tanggal_booking` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesan`
--

INSERT INTO `pemesan` (`pemesan_id`, `no_booking`, `unit_id`, `no_ktp`, `nama_pemesan`, `alamat`, `booking`, `deadline`, `bayar`, `status`, `tanggal_booking`) VALUES
(9, 'BK-001', 15, '32749499938338', 'Ibnu Hiban', 'Kp.Taneuh bereum', 1255040, '2019-07-31', 2, 1, '2019-07-15'),
(10, 'BK-010', 19, '3274949993833899', 'Hiruka', 'Bandung', 1000000, '2019-07-31', 2, 1, '2019-07-24'),
(11, 'BK-011', 17, '3274949993833888', 'Haruka', 'Kp.Bandung', 1000000, '2019-08-01', 2, 1, '2019-07-25'),
(12, 'BK-012', 16, '3334877777887777', 'Asep', 'Bandung', 1000000, '2019-08-02', 2, 1, '2019-07-26'),
(13, 'BK-013', 18, '2633728888888888', 'farhan', 'bandung', 1000000, '2019-07-17', 2, 1, '2019-07-27'),
(14, 'BK-014', 22, '2222222222222225', 'Ibnu Hiban', 'hahdjad', 1000000, '2019-07-25', 2, 1, '2019-07-27');

--
-- Triggers `pemesan`
--
DELIMITER $$
CREATE TRIGGER `update` AFTER INSERT ON `pemesan` FOR EACH ROW BEGIN  
	UPDATE  unit SET status = NEW.status 
    WHERE unit_id =NEW.unit_id ;
    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_delete` AFTER DELETE ON `pemesan` FOR EACH ROW BEGIN  
	UPDATE  unit SET unit.status = unit.status - old.status  
    WHERE unit_id = old.unit_id ;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `no_transaksi` varchar(20) DEFAULT NULL,
  `pemesan_id` int(11) DEFAULT NULL,
  `no_ktp` varchar(16) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `uang_muka` int(11) DEFAULT NULL,
  `tanggal_pelunasan` date DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `totalbayar` int(11) DEFAULT NULL,
  `jml_bayar` int(11) DEFAULT NULL,
  `pembayaran` int(2) DEFAULT NULL COMMENT '1:Cash 2:KPR',
  `angsuran` int(2) DEFAULT '0',
  `tanggal_transaksi` date NOT NULL,
  `lebihtanah` int(11) DEFAULT NULL,
  `h_lebihtanah` int(11) DEFAULT NULL,
  `lebihbangunan` int(11) DEFAULT NULL,
  `h_lebihbangunan` int(11) DEFAULT NULL,
  `status_bayar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `unit_id`, `no_transaksi`, `pemesan_id`, `no_ktp`, `nama`, `alamat`, `harga`, `uang_muka`, `tanggal_pelunasan`, `keterangan`, `totalbayar`, `jml_bayar`, `pembayaran`, `angsuran`, `tanggal_transaksi`, `lebihtanah`, `h_lebihtanah`, `lebihbangunan`, `h_lebihbangunan`, `status_bayar`) VALUES
(20, 15, 'TRNS-240719001', 9, '32749499938338', 'Ibnu Hiban', 'Kp.Taneuh bereum', 134000000, 7000000, NULL, NULL, 0, 9000000, 1, 0, '2019-07-24', 2, 2000000, 4, 7000000, 2),
(34, 28, 'TRNS-290719021', 11, '2633728888888888', 'Ibnu Hiban', 'nasma', 130000000, 30000000, '2019-08-09', NULL, 97500000, 8000000, 1, 0, '2019-07-29', 2, 2000000, 2, 3500000, 1),
(36, 20, 'TRNS-050819035', NULL, '3274949993833888', 'Harukaz', 'bandung', 134000000, 80000000, '2019-08-23', NULL, 59500000, 80000000, 1, 0, '2019-08-05', 2, 2000000, 2, 3500000, 1),
(37, 19, 'TRNS-200819037', 10, '3274949993833899', 'Hiruka', 'Bandung', 134000000, 7000000, NULL, NULL, 132500000, NULL, 2, 10, '2019-08-20', 2, 2000000, 2, 3500000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(3) NOT NULL,
  `nama_unit` varchar(10) NOT NULL,
  `tipe` int(2) NOT NULL,
  `luas_tanah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `booking` int(10) NOT NULL,
  `uangmuka` int(10) DEFAULT '0',
  `bantuan` int(10) NOT NULL,
  `plafon_k` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(2) DEFAULT '0',
  `totalunit` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `nama_unit`, `tipe`, `luas_tanah`, `harga`, `booking`, `uangmuka`, `bantuan`, `plafon_k`, `tanggal`, `status`, `totalunit`) VALUES
(15, 'A-01', 36, 60, 127000000, 1000000, 7000000, 0, 0, '2019-07-24', 1, 134000000),
(16, 'A-02', 36, 60, 127000000, 1000000, 7000000, 0, 0, '2019-07-24', 1, 134000000),
(17, 'A-03', 36, 60, 127000000, 1000000, 7000000, 0, 0, '2019-07-24', 1, 134000000),
(18, 'A-04', 36, 60, 127000000, 1000000, 7000000, 0, 0, '2019-07-24', 1, 134000000),
(19, 'A-05', 36, 60, 127000000, 1000000, 7000000, 0, 0, '2019-07-24', 1, 134000000),
(20, 'A-06', 36, 60, 127000000, 1000000, 7000000, 0, 0, '2019-07-24', 0, 134000000),
(21, 'A-07', 36, 60, 127000000, 1000000, 7000000, 0, 0, '2019-07-24', 0, 134000000),
(22, 'A-08', 36, 60, 127000000, 1000000, 7000000, 0, 0, '2019-07-24', 1, 134000000),
(23, 'A-09', 36, 60, 127000000, 1000000, 7000000, 0, 0, '2019-07-24', 0, 134000000),
(24, 'A-10', 36, 60, 127000000, 1000000, 7000000, 0, 0, '2019-07-24', 0, 134000000),
(25, 'A-11', 36, 60, 127000000, 1000000, 7000000, 0, 0, '2019-07-24', 0, 134000000),
(26, 'A-12', 36, 60, 127000000, 1000000, 7000000, 0, 0, '2019-07-24', 0, 134000000),
(27, 'B-01', 36, 60, 123000000, 1000000, 7000000, 0, 0, '2019-07-24', 0, 130000000),
(28, 'B-02', 36, 60, 123000000, 1000000, 7000000, 0, 0, '2019-07-24', 0, 130000000),
(29, 'B-03', 36, 60, 123000000, 1000000, 7000000, 0, 0, '2019-07-24', 0, 130000000),
(30, 'C-01', 36, 60, 123000000, 1000000, 7000000, 0, 0, '2019-07-24', 0, 130000000),
(31, 'C-02', 36, 60, 123000000, 1000000, 7000000, 0, 0, '2019-07-24', 0, 130000000),
(32, 'C-03', 36, 60, 123000000, 1000000, 7000000, 0, 0, '2019-07-24', 0, 130000000),
(33, 'C-04', 36, 60, 123000000, 1000000, 7000000, 0, 0, '2019-07-24', 0, 130000000),
(34, 'C-05', 36, 60, 123000000, 1000000, 7000000, 0, 0, '2019-07-24', 0, 130000000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `level`) VALUES
(7, 'farhan', 'd1bbb2af69fd350b6d6bd88655757b47', 'Farhan Fauzi A', 1),
(8, 'marketing', 'c769c2bd15500dd906102d9be97fdceb', 'Muhammad Rizky', 2),
(9, 'administrasi', '15ff3c0a0310a2e3de3e95c8aeb328d0', 'Wahid Hasyim', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`arsip_id`),
  ADD KEY `konsumen_id` (`konsumen_id`);

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`denda_id`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`konsumen_id`),
  ADD KEY `transaksi_id` (`transaksi_id`);

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`pemesan_id`),
  ADD UNIQUE KEY `unit_id` (`unit_id`),
  ADD UNIQUE KEY `no_ktp` (`no_ktp`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `unit_id` (`unit_id`),
  ADD KEY `pemesan_id` (`pemesan_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `arsip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `denda`
--
ALTER TABLE `denda`
  MODIFY `denda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `konsumen_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemesan`
--
ALTER TABLE `pemesan`
  MODIFY `pemesan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `arsip`
--
ALTER TABLE `arsip`
  ADD CONSTRAINT `arsip_ibfk_1` FOREIGN KEY (`konsumen_id`) REFERENCES `konsumen` (`konsumen_id`);

--
-- Constraints for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD CONSTRAINT `konsumen_ibfk_2` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksi` (`transaksi_id`);

--
-- Constraints for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD CONSTRAINT `pemesan_ibfk_1` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`unit_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`unit_id`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`pemesan_id`) REFERENCES `pemesan` (`pemesan_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
