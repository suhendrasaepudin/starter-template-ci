/*
 Navicat Premium Dump SQL

 Source Server         : Playground
 Source Server Type    : MySQL
 Source Server Version : 50744 (5.7.44)
 Source Host           : localhost:3305
 Source Schema         : template

 Target Server Type    : MySQL
 Target Server Version : 50744 (5.7.44)
 File Encoding         : 65001

 Date: 15/10/2025 21:56:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `grup`;
CREATE TABLE `grup` (
  `id` varchar(75) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for login_attempts
-- ----------------------------
DROP TABLE IF EXISTS `upaya_login`;
CREATE TABLE `upaya_login` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `alamat_ip` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `waktu` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE `pengguna` (
  `id` varchar(75) NOT NULL,
  `alamat_ip` varchar(45) NOT NULL,
  `nama_pengguna` varchar(100) DEFAULT NULL,
  `kata_sandi` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `selector_aktivasi` varchar(255) DEFAULT NULL,
  `kode_aktivasi` varchar(255) DEFAULT NULL,
  `selector_lupa_sandi` varchar(255) DEFAULT NULL,
  `kode_lupa_sandi` varchar(255) DEFAULT NULL,
  `waktu_lupa_sandi` int(11) unsigned DEFAULT NULL,
  `selector_ingat` varchar(255) DEFAULT NULL,
  `kode_ingat` varchar(255) DEFAULT NULL,
  `dibuat_pada` int(11) unsigned NOT NULL,
  `login_terakhir` int(11) unsigned DEFAULT NULL,
  `aktif` tinyint(1) unsigned DEFAULT NULL,
  `nama_depan` varchar(50) DEFAULT NULL,
  `nama_belakang` varchar(50) DEFAULT NULL,
  `perusahaan` varchar(100) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_email` (`email`),
  UNIQUE KEY `uc_selector_aktivasi` (`selector_aktivasi`),
  UNIQUE KEY `uc_selector_lupa_sandi` (`selector_lupa_sandi`),
  UNIQUE KEY `uc_selector_ingat` (`selector_ingat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for users_groups
-- ----------------------------
DROP TABLE IF EXISTS `pengguna_grup`;
CREATE TABLE `pengguna_grup` (
  `id` varchar(75) NOT NULL,
  `pengguna_id` varchar(75) NOT NULL,
  `grup_id` varchar(75) NOT NULL,
  PRIMARY KEY (`id`,`pengguna_id`,`grup_id`) USING BTREE,
  UNIQUE KEY `uc_pengguna_grup` (`pengguna_id`,`grup_id`),
  KEY `fk_pengguna_grup_pengguna_idx` (`pengguna_id`),
  KEY `fk_pengguna_grup_grup_idx` (`grup_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- ----------------------------
-- Dummy data: grup, pengguna, pengguna_grup
-- NOTE: Gantilah nilai pada kolom `kata_sandi` dengan hash bcrypt yang valid
-- jika Anda ingin login bekerja langsung setelah import. Contoh cara membuat hash
-- di mesin Anda: php -r "echo password_hash('P@ssw0rd', PASSWORD_BCRYPT);"

INSERT INTO `grup` (`id`, `nama`, `deskripsi`) VALUES
('a3f1c2d4-7b6e-4f3a-9f2b-1d5e6a7b8c9d', 'root', 'Super user dengan akses penuh'),
('b4e2d3c5-8c7f-5a4b-0e3c-2f6a7b8c9d0e', 'admin', 'Administrator sistem'),
('c5d3e4f6-9d8a-6b5c-1f4d-3b7e8c9d0e1f', 'pengguna', 'Pengguna biasa');

INSERT INTO `pengguna` (
  `id`, `alamat_ip`, `nama_pengguna`, `kata_sandi`, `email`, `selector_aktivasi`, `kode_aktivasi`,
  `selector_lupa_sandi`, `kode_lupa_sandi`, `waktu_lupa_sandi`, `selector_ingat`, `kode_ingat`,
  `dibuat_pada`, `login_terakhir`, `aktif`, `nama_depan`, `nama_belakang`, `perusahaan`, `telepon`
 ) VALUES (
  'd6e4f5a7-0b1c-4d2e-8f3b-4a5c6d7e8f90',
  '127.0.0.1',
  'root',
  '$2y$10$REPLACE_WITH_VALID_BCRYPT_HASH__________',
  'root@example.com',
  NULL, NULL,
  NULL, NULL, NULL, NULL, NULL,
  UNIX_TIMESTAMP(), NULL, 1,
  'Root', 'User', 'Company', '081234567890'
);

-- Relasikan pengguna root dengan grup root dan admin
INSERT INTO `pengguna_grup` (`id`, `pengguna_id`, `grup_id`) VALUES
('e7f5a6b8-1c2d-4e3f-9a4b-5c6d7e8f9012', 'd6e4f5a7-0b1c-4d2e-8f3b-4a5c6d7e8f90', 'a3f1c2d4-7b6e-4f3a-9f2b-1d5e6a7b8c9d'),
('f8a6b7c9-2d3e-5f4a-0b5c-6d7e8f901234', 'd6e4f5a7-0b1c-4d2e-8f3b-4a5c6d7e8f90', 'b4e2d3c5-8c7f-5a4b-0e3c-2f6a7b8c9d0e');

-- Foreign key constraints removed from dump to avoid import errors (1215).
-- Jika Anda ingin menambahkan FK, jalankan secara manual setelah import:
ALTER TABLE `pengguna_grup` ADD CONSTRAINT `pengguna_grup_ibfk_1` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `pengguna_grup` ADD CONSTRAINT `pengguna_grup_ibfk_2` FOREIGN KEY (`grup_id`) REFERENCES `grup` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

SET FOREIGN_KEY_CHECKS = 1;
