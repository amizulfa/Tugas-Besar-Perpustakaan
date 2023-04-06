/*
Navicat MySQL Data Transfer

Source Server         : LATIHAN
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : perpus

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-06-15 19:02:40
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `anggota`
-- ----------------------------
DROP TABLE IF EXISTS `anggota`;
CREATE TABLE `anggota` (
  `id_anggota` varchar(10) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of anggota
-- ----------------------------
INSERT INTO `anggota` VALUES ('AG001', 'Azzahra Siti ha', 'Perempuan', 'Sukabumi', '085798466088');
INSERT INTO `anggota` VALUES ('AG003', 'Anandita K', 'Perempuan', 'Pasir Halang', '0897654321888');
INSERT INTO `anggota` VALUES ('AG004', 'Amida Zulfa', 'Perempuan', 'Sukabumi', '098765432123');

-- ----------------------------
-- Table structure for `buku`
-- ----------------------------
DROP TABLE IF EXISTS `buku`;
CREATE TABLE `buku` (
  `id_buku` varchar(10) NOT NULL,
  `id_pengarang` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `tahun_terbit` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of buku
-- ----------------------------
INSERT INTO `buku` VALUES ('BK004', '2', '3', 'langit ', '2004', '7');
INSERT INTO `buku` VALUES ('BK005', '1', '3', 'hello', '2003', '1');
INSERT INTO `buku` VALUES ('BK006', '2', '3', 'fake love', '2022', '0');
INSERT INTO `buku` VALUES ('BK007', '4', '4', 'Geez and Ann', '2019', '12');

-- ----------------------------
-- Table structure for `login`
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('1', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator');

-- ----------------------------
-- Table structure for `peminjaman`
-- ----------------------------
DROP TABLE IF EXISTS `peminjaman`;
CREATE TABLE `peminjaman` (
  `id_pm` varchar(10) NOT NULL,
  `id_anggota` varchar(10) DEFAULT NULL,
  `id_buku` varchar(10) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  PRIMARY KEY (`id_pm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of peminjaman
-- ----------------------------
INSERT INTO `peminjaman` VALUES ('PM003', 'AG004', 'BK004', '2022-06-13', '2022-06-20');
INSERT INTO `peminjaman` VALUES ('PM004', 'AG001', 'BK005', '2022-06-14', '2022-06-21');

-- ----------------------------
-- Table structure for `penerbit`
-- ----------------------------
DROP TABLE IF EXISTS `penerbit`;
CREATE TABLE `penerbit` (
  `id_penerbit` int(11) NOT NULL AUTO_INCREMENT,
  `nama_penerbit` varchar(50) NOT NULL,
  PRIMARY KEY (`id_penerbit`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of penerbit
-- ----------------------------
INSERT INTO `penerbit` VALUES ('3', 'upi');
INSERT INTO `penerbit` VALUES ('4', 'Gramedia');

-- ----------------------------
-- Table structure for `pengarang`
-- ----------------------------
DROP TABLE IF EXISTS `pengarang`;
CREATE TABLE `pengarang` (
  `id_pengarang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengarang` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pengarang`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of pengarang
-- ----------------------------
INSERT INTO `pengarang` VALUES ('1', 'ara');
INSERT INTO `pengarang` VALUES ('2', 'amida');
INSERT INTO `pengarang` VALUES ('4', 'Rintik Sedu');

-- ----------------------------
-- Table structure for `pengembalian`
-- ----------------------------
DROP TABLE IF EXISTS `pengembalian`;
CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota` varchar(20) DEFAULT NULL,
  `id_buku` varchar(20) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `tgl_kembalikan` date DEFAULT NULL,
  PRIMARY KEY (`id_pengembalian`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of pengembalian
-- ----------------------------
INSERT INTO `pengembalian` VALUES ('1', 'AG001', 'BK004', '2022-06-13', '2022-06-20', '2022-06-13');
INSERT INTO `pengembalian` VALUES ('2', 'AG003', 'BK004', '2022-06-13', '2022-06-20', '2022-06-14');
DELIMITER ;;
CREATE TRIGGER `jml_after_pinjam` AFTER INSERT ON `peminjaman` FOR EACH ROW UPDATE buku SET buku.jumlah = buku.jumlah - 1 WHERE buku.id_buku = new.id_buku
;;
DELIMITER ;
DELIMITER ;;
CREATE TRIGGER `jml_after_kembali` AFTER INSERT ON `pengembalian` FOR EACH ROW UPDATE buku SET buku.jumlah = buku.jumlah +1 WHERE buku.id_buku = new.id_buku
;;
DELIMITER ;
