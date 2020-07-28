-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.1.28-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win32
-- HeidiSQL Versi:               9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Membuang struktur basisdata untuk pemilu
CREATE DATABASE IF NOT EXISTS `pemilu` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pemilu`;

-- membuang struktur untuk table pemilu.absen
CREATE TABLE IF NOT EXISTS `absen` (
  `id_absen` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_absen`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.
-- membuang struktur untuk table pemilu.calon
CREATE TABLE IF NOT EXISTS `calon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_urut` int(11) NOT NULL,
  `sbg_calon` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `id_pm` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `qrcode` varchar(50) DEFAULT NULL,
  `rand` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rand` (`rand`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.
-- membuang struktur untuk table pemilu.pendaftaran
CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `id_user` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nik` (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.
-- membuang struktur untuk table pemilu.petugas
CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_petugas` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `job` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.
-- membuang struktur untuk table pemilu.pilihan
CREATE TABLE IF NOT EXISTS `pilihan` (
  `id_pilihan` int(11) NOT NULL AUTO_INCREMENT,
  `id_calon` int(11) NOT NULL,
  `id_pemilihan` int(11) NOT NULL,
  `pilihan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_pilihan`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.
-- membuang struktur untuk table pemilu.sandi_kota
CREATE TABLE IF NOT EXISTS `sandi_kota` (
  `id_kota` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `sandi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.
-- membuang struktur untuk table pemilu.sandi_lokasi
CREATE TABLE IF NOT EXISTS `sandi_lokasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provinsi` varchar(50) DEFAULT NULL,
  `kab/kota` varchar(50) DEFAULT NULL,
  `nama_kota` varchar(50) DEFAULT NULL,
  `kec` varchar(50) DEFAULT NULL,
  `desa/kelurahan` varchar(50) DEFAULT NULL,
  `kode_pos` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.
-- membuang struktur untuk table pemilu.sandi_tps
CREATE TABLE IF NOT EXISTS `sandi_tps` (
  `id_tps` int(11) NOT NULL,
  `nama_tps` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tps`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.
-- membuang struktur untuk table pemilu.tbl_admin
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `no_tps` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `no_tps` (`no_tps`,`desa`,`kota`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.
-- membuang struktur untuk table pemilu.tbl_pemilihan
CREATE TABLE IF NOT EXISTS `tbl_pemilihan` (
  `id_pm` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_pm` varchar(50) DEFAULT NULL,
  `desk_pm` varchar(50) DEFAULT NULL,
  `tanggal_pm` date DEFAULT NULL,
  `lokasi_pm` varchar(50) DEFAULT NULL,
  `tps_pm` varchar(50) DEFAULT NULL,
  `desa_pm` varchar(50) DEFAULT NULL,
  `dpt_pm` varchar(50) DEFAULT NULL,
  `id_user` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pm`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.
-- membuang struktur untuk table pemilu.tbl_tokens
CREATE TABLE IF NOT EXISTS `tbl_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
