-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2021 at 10:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alirsyad`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('Admin', 1, 1611542234),
('Guru', 3, 1611302648),
('Guru', 6, 1612970567),
('Guru', 7, 1613039657),
('Kepala Sekolah', 2, 1611302659),
('Siswa', 4, 1611302634),
('Siswa', 9, 1613137288),
('Siswa', 11, 1613137333),
('Siswa', 12, 1613137324);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `group_code` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES
('/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//controller', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//crud', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//extension', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//form', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//model', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//module', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/asset/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/asset/compress', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/asset/template', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/cache/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/cache/flush', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/cache/flush-all', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/cache/flush-schema', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/cache/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/fixture/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/fixture/load', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/fixture/unload', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/action', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/diff', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/preview', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/hello/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/hello/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/help/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/help/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/message/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/message/config', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/message/extract', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/down', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/history', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/mark', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/new', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/redo', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/to', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/up', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/captcha', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/change-own-password', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/confirm-email', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/confirm-email-receive', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/confirm-registration-email', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/login', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/logout', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/password-recovery', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/password-recovery-receive', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/registration', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/refresh-routes', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/set-child-permissions', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/set-child-routes', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/set-child-permissions', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/set-child-roles', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-permission/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-permission/set', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-permission/set-roles', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/change-password', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('Admin', 1, 'Admin', NULL, NULL, 1426062189, 1426062189, NULL),
('assignRolesToUsers', 2, 'Assign roles to users', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('bindUserToIp', 2, 'Bind user to IP', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('changeOwnPassword', 2, 'Change own password', NULL, NULL, 1426062189, 1426062189, 'userCommonPermissions'),
('changeUserPassword', 2, 'Change user password', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('commonPermission', 2, 'Common permission', NULL, NULL, 1426062188, 1426062188, NULL),
('createUsers', 2, 'Create users', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('deleteUsers', 2, 'Delete users', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('editUserEmail', 2, 'Edit user email', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('editUsers', 2, 'Edit users', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('Guru', 1, 'Guru', NULL, NULL, 1611302491, 1611302491, NULL),
('Kepala Sekolah', 1, 'Kepala Sekolah', NULL, NULL, 1611302352, 1611302352, NULL),
('Siswa', 1, 'Siswa', NULL, NULL, 1611302521, 1611302521, NULL),
('viewRegistrationIp', 2, 'View registration IP', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('viewUserEmail', 2, 'View user email', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('viewUserRoles', 2, 'View user roles', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('viewUsers', 2, 'View users', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('viewVisitLog', 2, 'View visit log', NULL, NULL, 1426062189, 1426062189, 'userManagement');

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Admin', 'assignRolesToUsers'),
('Admin', 'changeOwnPassword'),
('Admin', 'changeUserPassword'),
('Admin', 'createUsers'),
('Admin', 'deleteUsers'),
('Admin', 'editUsers'),
('Admin', 'viewUsers'),
('assignRolesToUsers', '/user-management/user-permission/set'),
('assignRolesToUsers', '/user-management/user-permission/set-roles'),
('assignRolesToUsers', 'viewUserRoles'),
('assignRolesToUsers', 'viewUsers'),
('changeOwnPassword', '/user-management/auth/change-own-password'),
('changeUserPassword', '/user-management/user/change-password'),
('changeUserPassword', 'viewUsers'),
('createUsers', '/user-management/user/create'),
('createUsers', 'viewUsers'),
('deleteUsers', '/user-management/user/bulk-delete'),
('deleteUsers', '/user-management/user/delete'),
('deleteUsers', 'viewUsers'),
('editUserEmail', 'viewUserEmail'),
('editUsers', '/user-management/user/bulk-activate'),
('editUsers', '/user-management/user/bulk-deactivate'),
('editUsers', '/user-management/user/update'),
('editUsers', 'viewUsers'),
('Guru', 'editUserEmail'),
('Guru', 'editUsers'),
('Guru', 'viewRegistrationIp'),
('Guru', 'viewUserEmail'),
('Guru', 'viewUserRoles'),
('Guru', 'viewUsers'),
('Guru', 'viewVisitLog'),
('Kepala Sekolah', 'changeOwnPassword'),
('Kepala Sekolah', 'changeUserPassword'),
('Kepala Sekolah', 'createUsers'),
('Kepala Sekolah', 'deleteUsers'),
('Kepala Sekolah', 'editUserEmail'),
('Kepala Sekolah', 'editUsers'),
('Kepala Sekolah', 'viewRegistrationIp'),
('Kepala Sekolah', 'viewUserEmail'),
('Kepala Sekolah', 'viewUserRoles'),
('Kepala Sekolah', 'viewUsers'),
('Kepala Sekolah', 'viewVisitLog'),
('Siswa', 'viewRegistrationIp'),
('Siswa', 'viewUserEmail'),
('Siswa', 'viewUserRoles'),
('Siswa', 'viewUsers'),
('Siswa', 'viewVisitLog'),
('viewUsers', '/user-management/user/grid-page-size'),
('viewUsers', '/user-management/user/index'),
('viewUsers', '/user-management/user/view'),
('viewVisitLog', '/user-management/user-visit-log/grid-page-size'),
('viewVisitLog', '/user-management/user-visit-log/index'),
('viewVisitLog', '/user-management/user-visit-log/view');

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_group`
--

CREATE TABLE `auth_item_group` (
  `code` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item_group`
--

INSERT INTO `auth_item_group` (`code`, `name`, `created_at`, `updated_at`) VALUES
('userCommonPermissions', 'User common permission', 1426062189, 1426062189),
('userManagement', 'User management', 1426062189, 1426062189);

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `datadukung_kg`
--

CREATE TABLE `datadukung_kg` (
  `datadukung_id` bigint(20) UNSIGNED NOT NULL,
  `kgdetail_id` varchar(20) NOT NULL,
  `nama_file` blob NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groupuser`
--

CREATE TABLE `groupuser` (
  `groupuser_id` int(11) NOT NULL,
  `namagroup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupuser`
--

INSERT INTO `groupuser` (`groupuser_id`, `namagroup`) VALUES
(1, 'groupkepalasekolah'),
(2, 'groupguru'),
(3, 'groupsiswa');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(20) CHARACTER SET latin1 NOT NULL,
  `instansi_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `nama_guru` varchar(30) NOT NULL,
  `nuptk` varchar(20) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `tmt` date NOT NULL,
  `masa_kerja` varchar(20) NOT NULL,
  `jn_kelamin` varchar(10) NOT NULL,
  `pend_terakhir` varchar(20) NOT NULL,
  `bidang` varchar(20) NOT NULL,
  `siswa_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `instansi_id`, `nama_guru`, `nuptk`, `tempat`, `tgl_lahir`, `jabatan`, `tmt`, `masa_kerja`, `jn_kelamin`, `pend_terakhir`, `bidang`, `siswa_id`) VALUES
('12345', '11111', 'Guru Contoh', '12345', 'Asal ', '0000-00-00', 'Guru', '2020-11-30', '2 Tahun', 'Laki-laki', 'S3', 'matematika', ''),
('54321', '11111', 'Rizqie', '54321', 'Misal', '2002-06-12', 'Guru Kelas', '2021-01-01', '5 tahun', 'Laki-laki', 'S3', 'agama islam', ''),
('99999', '11111', 'Apaja', '99999', 'Manaaja', '1990-02-24', 'Guru', '2021-02-23', '2 Tahun', 'Laki-laki', 'S3', 'agama islam', '');

-- --------------------------------------------------------

--
-- Table structure for table `guru_kelas`
--

CREATE TABLE `guru_kelas` (
  `gk_id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` varchar(10) NOT NULL,
  `nip` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru_kelas`
--

INSERT INTO `guru_kelas` (`gk_id`, `kelas_id`, `nip`) VALUES
(1, '11IPS03', '12345'),
(2, '11IPS03', '54321'),
(3, '12IPA02', '12345'),
(4, '12IPA02', '54321');

-- --------------------------------------------------------

--
-- Table structure for table `indikator`
--

CREATE TABLE `indikator` (
  `indikator_id` varchar(15) NOT NULL,
  `kompetensi_id` int(20) NOT NULL,
  `nama_indikator` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indikator`
--

INSERT INTO `indikator` (`indikator_id`, `kompetensi_id`, `nama_indikator`) VALUES
('0101', 1, 'Guru dapat mengidentifikasi karakteristik belajar setiap peserta didik di kelasnya.'),
('0102', 1, 'Guru memastikan bahwa semua peserta didik mendapatkan kesempatan yang sama untuk berpartisipasi aktif dalam kegiatan pembelajaran.'),
('0103', 1, 'Guru dapat mengatur kelas untuk memberikan kesempatan belajar yang sama pada semua peserta didik dengan kelainan fisik dan kemampuan belajar yang berbeda.'),
('0104', 1, 'Guru mencoba mengetahui penyebab penyimpangan perilaku peserta didik untuk mencegah agar perilaku tersebut tidak merugikan peserta didik lainnya.'),
('0105', 1, 'Guru membantu mengembangkan potensi dan mengatasi kekurangan peserta didik.'),
('0106', 1, 'Guru memperhatikan peserta didik dengan kelemahan fisik tertentu agar dapat mengikuti aktivitas pembelajaran, sehingga peserta didik tersebut tidak termarginalkan (tersisihkan, diolok- olok, minder,dsb.).'),
('0201', 2, 'Guru memberi kesempatan kepada peserta didik untuk menguasai materi pembelajaran sesuai usia dan kemampuan belajarnya melalui pengaturan proses pembelajaran dan aktivitas yang bervariasi.'),
('0202', 2, 'Guru selalu memastikan tingkat pemahaman peserta didik terhadap materi pembelajaran tertentu dan menyesuaikan aktivitas pembelajaran berikutnya berdasarkan tingkat pemahamantersebut.'),
('0203', 2, 'Guru dapat menjelaskan alasan pelaksanaan kegiatan / aktivitas yang dilakukannya, baik yang sesuai maupun yang berbeda dengan rencana, terkait keberhasilan pembelajaran.'),
('0204', 2, 'Guru menggunakan berbagai teknik untuk memotivasi kemauan belajar peserta didik.'),
('0205', 2, 'Guru merencanakan kegiatan pembelajaran yang saling terkait satu sama lain, dengan memperhatikan tujuan pembelajaran maupun proses belajar peserta didik.'),
('0206', 2, 'Guru memperhatikan respon peserta didik yang belum / kurang memahami materi pembelajaran yang diajarkan dan menggunakannya untuk memperbaiki rancangan pembelajaran berikutnya.'),
('0301', 3, 'Guru dapat menyusun / menggunakan silabus yang sesuai dengan kurikulum.'),
('0302', 3, 'Guru merancang rencana pembelajaran yang sesuai dengan silabus.'),
('0303', 3, 'Guru mengembangkan materi pembelajaran untuk mencapai kompetensi dasar.'),
('0304', 3, 'Guru mengikuti urutan materi pembelajaran dengan memperhatikan tujuan pembelajaran.'),
('0305', 3, 'Guru memilih materi pembelajaran yang: a) sesuai dengan tujuan pembelajaran, b) tepat dan mutakhir, c) sesuai dengan usia dan tingkat kemampuan belajar peserta didik, dan d) dapat dilaksanakan di kelas, e) sesuai dengan konteks kehidupan sehari-hari peserta didik.'),
('0401', 4, 'Guru melaksanakan aktivitas pembelajaran sesuai dengan rancangan yang telah disusun secara lengkap dan pelaksanaan aktivitas tersebut mengindikasikan bahwa guru mengerti tentang tujuannya.'),
('0402', 4, 'Guru melaksanakan aktivitas pembelajaran yang bertujuan untuk membantu proses belajar peserta didik, bukan untuk menguji sehingga membuat peserta didik merasa tertekan.'),
('0403', 4, 'Guru mengkomunikasikan informasi baru (misalnya materi tambahan) sesuai dengan usia dan tingkat kemampuan belajar peserta didik.'),
('0404', 4, 'Guru menyikapi kesalahan yang dilakukan peserta didik sebagai tahapan proses pembelajaran, bukan semata-mata kesalahan yang harus dikoreksi. Misalnya: dengan mengetahui terlebih dahulu peserta didik lain yang setuju atau tidak setuju dengan jawaban tersebut, sebelum memberikan penjelasan tentang jawaban yang benar.'),
('0405', 4, 'Guru melaksanakan kegiatan pembelajaran sesuai isi kurikulum dan mengkaitkannya dengan konteks kehidupan sehari-hari peserta didik.'),
('0406', 4, 'Guru melakukan aktivitas pembelajaran secara bervariasi dengan waktu yang cukup untuk kegiatan pembelajaran yang sesuai dengan usia dan tingkat kemampuan belajar dan mempertahankan perhatian peserta didik.'),
('0407', 4, 'Guru mengelola kelas dengan efektif tanpa mendominasi atau sibuk dengan kegiatannya sendiri agar semua waktu peserta dapat dimanfaatkan secara produktif.'),
('0408', 4, 'Guru mampu menyesuaikan aktivitas pembelajaran yang dirancang dengan kondisi kelas.'),
('0409', 4, 'Guru memberikan banyak kesempatan kepada peserta didik untuk bertanya, mempraktikkan dan berinteraksi dengan peserta didik lain.'),
('0410', 4, 'Guru mengatur pelaksanaan aktivitas pembelajaran secara sistematis untuk membantu proses belajar peserta didik. Sebagai contoh: guru menambah informasi baru setelah mengevaluasi pemahaman peserta didik terhadap materi sebelumnya.'),
('0411', 4, 'Guru menggunakan alat bantu mengajar, dan / atau audio visual (termasuk TIK) untuk meningkatkan motivasi belajar peserta didik dalam mencapai tujuan pembelajaran.'),
('0501', 5, 'Guru menganalisis hasil belajar berdasarkan segala bentuk penilaian terhadap setiap peserta didik untuk mengetahui tingkat kemajuan masing-masing.'),
('0502', 5, 'Guru merancang dan melaksanakan aktivitas pembelajaran yang mendorong peserta didik untuk belajar sesuai dengan kecakapan dan pola belajar masing-masing.'),
('0503', 5, 'Guru merancang dan melaksanakan aktivitas pembelajaran untuk memunculkan daya kreativitas dan kemampuan berfikir kritis peserta didik.'),
('0504', 5, 'Guru secara aktif membantu peserta didik dalam proses pembelajaran dengan memberikan perhatian kepada setiap individu.'),
('0505', 5, 'Guru dapat mengidentifikasi dengan benar tentang bakat, minat, potensi, dan kesulitan belajar masing-masing pesertadidik.'),
('0506', 5, 'Guru memberikan kesempatan belajar kepada peserta didik sesuai dengan cara belajarnya masing-masing.'),
('0507', 5, 'Guru memusatkan perhatian pada interaksi dengan peserta didik dan mendorongnya untuk memahami dan menggunakan informasi yangdisampaikan.'),
('0601', 6, 'Guru menggunakan pertanyaan untuk mengetahui pemahaman dan menjaga partisipasi peserta didik, termasuk memberikan pertanyaan terbuka yang menuntut peserta didik untuk menjawab dengan ide dan pengetahuan mereka.'),
('0602', 6, 'Guru memberikan perhatian dan mendengarkan semua pertanyaan dan tanggapan peserta didik, tanpa menginterupsi, kecuali jika diperlukan untuk membantu atau mengklarifikasi pertanyaan / tanggapan tersebut.'),
('0603', 6, 'Guru menanggapi pertanyaan peserta didik secara tepat, benar, dan mutakhir, sesuai tujuan pembelajaran dan isi kurikulum, tanpa mempermalukannya.'),
('0604', 6, 'Guru menyajikan kegiatan pembelajaran yang dapat menumbuhkan kerja sama yang baik antar peserta didik.'),
('0605', 6, 'Guru mendengarkan dan memberikan perhatian terhadap semua jawaban peserta didik baik yang benar maupun yang dianggap salah untuk mengukur tingkat pemahaman peserta didik.'),
('0606', 6, 'Guru memberikan perhatian terhadap pertanyaan peserta didik dan meresponnya secara lengkap dan relevan untuk menghilangkan kebingungan pada peserta didik.'),
('0701', 7, 'Guru menyusun alat penilaian yang sesuai dengan tujuan pembelajaran untuk mencapai kompetensi tertentu seperti yang tertulis dalam RPP.'),
('0702', 7, 'Guru melaksanakan penilaian dengan berbagai teknik dan jenis penilaian, selain penilaian formal yang dilaksanakan sekolah, dan mengumumkan hasil serta implikasinya kepada peserta didik, tentang tingkat pemahaman terhadap materi pembelajaran yang telah dan akan dipelajari.'),
('0703', 7, 'Guru menganalisis hasil penilaian untuk mengidentifikasi topik / kompetensi dasar yang sulit sehingga diketahui kekuatan dan kelemahan masing-masing peserta didik untuk keperluan remedial dan pengayaan.'),
('0704', 7, 'Guru memanfaatkan masukan dari peserta didik dan merefleksikannya untuk meningkatkan pembelajaran selanjutnya, dan dapat membuktikannya melalui catatan, jurnal pembelajaran, rancangan pembelajaran, materi tambahan, dan sebagainya.'),
('0705', 7, 'Guru memanfatkan hasil penilaian sebagai bahan penyusunan rancangan pembelajaran yang akan dilakukan selanjutnya.'),
('0801', 8, 'Guru menghargai dan mempromosikan prinsip-prinsip Pancasila sebagai dasar ideologi dan etika bagi semua warga Indonesia.'),
('0802', 8, 'Guru mengembangkan kerja sama dan membina kebersamaan dengan teman sejawat tanpa memperhatikan perbedaan yang ada (misalnya: suku, agama, dan gender).'),
('0803', 8, 'Guru saling menghormati dan menghargai teman sejawat sesuai dengan kondisi dan keberadaan masing- masing.'),
('0804', 8, 'Guru memiliki rasa persatuan dan kesatuan sebagai bangsa Indonesia.'),
('0805', 8, 'Guru mempunyai pandangan yang luas tentang keberagaman bangsa Indonesia (misalnya: budaya, suku, agama).'),
('0901', 9, 'Guru bertingkah laku santun dalam berbicara, berpenampilan sopan, terhadap semua peserta didik, orang tua, dan teman sejawat.'),
('0902', 9, 'Guru mau membagi pengalamannya dengan kolega, termasuk mengundang mereka untuk mengobservasi cara mengajarnya dan memberikan masukan.'),
('0903', 9, 'Guru mampu mengelola pembelajaran yang membuktikan bahwa guru dihormati oleh peserta didik, sehingga semua peserta didik selalu memperhatikan guru dan berpartisipasi aktif dalam proses pembelajaran.'),
('0904', 9, 'Guru bersikap dewasa dalam menerima masukan dari peserta didik.'),
('0905', 9, 'Guru berperilaku baik untuk mencitrakan nama baik sekolah.'),
('1001', 10, 'Guru mengawali dan mengakhiri pembelajaran dengan tepat waktu.'),
('1002', 10, 'Jika guru harus meninggalkan kelas, guru mengaktifkan peserta didik dengan melakukan hal-hal produktif terkait dengan mata pelajaran, dan meminta guru piket atau guru lain untuk mengawasi kelas.'),
('1003', 10, 'Guru memenuhi jam mengajar dan dapat melakukan semua kegiatan lain di luar jam mengajar berdasarkan ijin dan persetujuan pengelola sekolah.'),
('1004', 10, 'Guru meminta ijin dan memberitahu lebih awal, dengan memberikan alasan dan bukti yang sah jika tidak menghadiri kegiatan yang telah direncanakan, termasuk proses pembelajaran di kelas.'),
('1005', 10, 'Guru menyelesaikan semua tugas administratif dan non-pembelajaran dengan tepat waktu sesuai standar yang ditetapkan.'),
('1006', 10, 'Guru memanfaatkan waktu luang selain mengajar untuk kegiatan yang produktif terkait dengan tugasnya.'),
('1007', 10, 'Guru memberikan kontribusi terhadap pengembangan sekolah dan mempunyai prestasi yang berdampak positif terhadap nama baik sekolah.'),
('1008', 10, 'Guru merasa bangga dengan profesinya.'),
('1101', 11, 'Guru memperlakukan semua peserta didik secara adil, memberikan perhatian dan bantuan sesuai kebutuhan masing-masing, tanpa memperdulikan faktor personal.'),
('1102', 11, 'Guru menjaga hubungan baik dan peduli dengan teman sejawat (bersifat inklusif), serta berkontribusi positif terhadap semua diskusi formal dan informal terkait dengan pekerjaannya.'),
('1103', 11, 'Guru sering berinteraksi dengan peserta didik dan tidak membatasi perhatiannya hanya pada kelompok tertentu (misalnya: peserta didik yang pandai, kaya, berasal dari daerah yang sama dengan guru).'),
('1201', 12, 'Guru menyampaikan informasi tentang kemajuan, kesulitan, dan potensi peserta didik kepada orang tuanya, baik dalam pertemuan formal maupun tidak formal antara guru dan orang tua, teman sejawat, dan dapat menunjukkan buktinya.'),
('1202', 12, 'Guru ikut berperan aktif dalam kegiatan di luar pembelajaran yang diselenggarakan oleh sekolah dan masyarakat dan dapat memberikan bukti keikutsertaannya.'),
('1203', 12, 'Guru memperhatikan sekolah sebagai bagian dari masyarakat, berkomunikasi dengan masyarakat sekitar, serta berperan dalam kegiatan sosial di masyarakat.'),
('1301', 13, 'Guru melakukan pemetaan standar kompetensi / kompetensi inti dan kompetensi dasar untuk mata pelajaran yang diampunya, untuk mengidentifikasi materi pembelajaran yang dianggap sulit, melakukan perencanaan dan pelaksanaan pembelajaran, dan memperkirakan alokasi waktu yang diperlukan.'),
('1302', 13, 'Guru menyertakan informasi yang tepat dan mutakhir di dalam perencanaan dan pelaksanaan pembelajaran.'),
('1303', 13, 'Guru menyusun materi, perencanaan dan pelaksanaan pembelajaran yang berisi informasi yang tepat, mutakhir, dan yang membantu peserta didik untuk memahami konsep materi pembelajaran.'),
('1401', 14, 'Guru melakukan evaluasi diri secara spesifik, lengkap, dan didukung dengan contoh pengalaman dirisendiri.'),
('1402', 14, 'Guru memiliki jurnal pembelajaran, catatan masukan dari kolega atau hasil penilaian proses pembelajaran sebagai bukti yang menggambarkan kinerjanya.'),
('1403', 14, 'Guru memanfaatkan bukti gambaran kinerjanya untuk mengembangkan perencanaan dan pelaksanaan pembelajaran selanjutnya dalam program PKB.'),
('1404', 14, 'Guru dapat mengaplikasikan pengalaman pengembangan keprofesian berkelanjutan dalam perencanaan, pelaksanaan, penilaian pembelajaran dan tindak lanjutnya.'),
('1405', 14, 'Guru melakukan penelitian, mengembangkan karya inovasi, mengikuti kegiatan ilmiah (misalnya seminar, konferensi), dan aktif dalam melaksanakan PKB.'),
('1406', 14, 'Guru dapat memanfaatkan TIK dalam berkomunikasi dan pelaksanaan PKB.');

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `instansi_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `nama_instansi` varchar(20) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `kepala_sekolah` varchar(20) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`instansi_id`, `nama_instansi`, `telp`, `kepala_sekolah`, `kelurahan`, `kecamatan`, `kota`, `provinsi`) VALUES
('11111', 'Instansi Contoh', '08123456789', 'Kepala Sekolah', 'Asal', 'Asal', 'Asal', 'Asal'),
('22222', 'Instansi Misal', '08987654321', 'Kepala Sekolah Misal', 'Misal', 'Misal', 'Misal', 'Misal');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kelas_id` varchar(10) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kelas_id`, `nama_kelas`) VALUES
('11IPS03', 'XI IPS 3'),
('12IPA02', 'XII IPA 2');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok_kompetensi`
--

CREATE TABLE `kelompok_kompetensi` (
  `kk_id` varchar(1) NOT NULL,
  `nama_kk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelompok_kompetensi`
--

INSERT INTO `kelompok_kompetensi` (`kk_id`, `nama_kk`) VALUES
('A', 'Pedagogik'),
('B', 'Kepribadian'),
('C', 'Sosial'),
('D', 'Profesional');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok_komponen`
--

CREATE TABLE `kelompok_komponen` (
  `kelkompo_id` varchar(1) NOT NULL,
  `nama_kelkompo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelompok_komponen`
--

INSERT INTO `kelompok_komponen` (`kelkompo_id`, `nama_kelkompo`) VALUES
('1', 'Responden Guru Teman Sejawat'),
('2', 'Responden Peserta Didik');

-- --------------------------------------------------------

--
-- Table structure for table `kg_detail`
--

CREATE TABLE `kg_detail` (
  `kgdetail_id` varchar(20) NOT NULL,
  `kgmaster_id` varchar(20) NOT NULL,
  `indikator_id` varchar(15) NOT NULL,
  `skor_id` varchar(10) NOT NULL,
  `tgl_nilai` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `penilai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kg_detail`
--

INSERT INTO `kg_detail` (`kgdetail_id`, `kgmaster_id`, `indikator_id`, `skor_id`, `tgl_nilai`, `penilai`) VALUES
('60252939a0386', '6025293993bc0', '0101', '03', '2021-02-13 03:54:47', ''),
('60252939a0c7b', '6025293993bc0', '0102', '01', '2021-02-13 03:54:40', ''),
('60252939a18d9', '6025293993bc0', '0103', '02', '2021-02-13 03:43:55', ''),
('60252939a2b68', '6025293993bc0', '0104', '01', '2021-02-13 03:54:40', ''),
('60252939a339c', '6025293993bc0', '0105', '03', '2021-02-13 03:47:20', ''),
('60252939a3ae0', '6025293993bc0', '0106', '03', '2021-02-13 03:47:20', ''),
('60252939a434f', '6025293993bc0', '0201', '01', '2021-02-11 13:00:36', ''),
('60252939a4ad5', '6025293993bc0', '0202', '02', '2021-02-11 13:00:36', ''),
('60252939a52b8', '6025293993bc0', '0203', '02', '2021-02-11 13:00:36', ''),
('60252939a5c53', '6025293993bc0', '0204', '02', '2021-02-11 13:00:36', ''),
('60252939a63c2', '6025293993bc0', '0205', '03', '2021-02-11 13:00:36', ''),
('60252939a6b1a', '6025293993bc0', '0206', '02', '2021-02-11 13:00:36', ''),
('60252939a7298', '6025293993bc0', '0301', '03', '2021-02-11 13:22:33', ''),
('60252939a79d2', '6025293993bc0', '0302', '01', '2021-02-11 13:22:33', ''),
('60252939a81cd', '6025293993bc0', '0303', '02', '2021-02-11 13:22:25', ''),
('60252939a891c', '6025293993bc0', '0304', '02', '2021-02-11 13:22:33', ''),
('60252939a90c7', '6025293993bc0', '0305', '01', '2021-02-11 13:22:25', ''),
('60252939a99f3', '6025293993bc0', '0401', '00', '2021-02-11 12:55:21', ''),
('60252939aa2a1', '6025293993bc0', '0402', '00', '2021-02-11 12:55:21', ''),
('60252939aab3b', '6025293993bc0', '0403', '00', '2021-02-11 12:55:21', ''),
('60252939ab52e', '6025293993bc0', '0404', '00', '2021-02-11 12:55:21', ''),
('60252939abfd0', '6025293993bc0', '0405', '00', '2021-02-11 12:55:21', ''),
('60252939aca4c', '6025293993bc0', '0406', '00', '2021-02-11 12:55:21', ''),
('60252939ad4e8', '6025293993bc0', '0407', '00', '2021-02-11 12:55:21', ''),
('60252939adeaa', '6025293993bc0', '0408', '00', '2021-02-11 12:55:21', ''),
('60252939ae843', '6025293993bc0', '0409', '00', '2021-02-11 12:55:21', ''),
('60252939af140', '6025293993bc0', '0410', '00', '2021-02-11 12:55:21', ''),
('60252939af994', '6025293993bc0', '0411', '00', '2021-02-11 12:55:21', ''),
('60252939b00ce', '6025293993bc0', '0501', '00', '2021-02-11 12:55:21', ''),
('60252939b0656', '6025293993bc0', '0502', '00', '2021-02-11 12:55:21', ''),
('60252939b0c30', '6025293993bc0', '0503', '00', '2021-02-11 12:55:21', ''),
('60252939b12cf', '6025293993bc0', '0504', '00', '2021-02-11 12:55:21', ''),
('60252939b185b', '6025293993bc0', '0505', '00', '2021-02-11 12:55:21', ''),
('60252939b1e43', '6025293993bc0', '0506', '00', '2021-02-11 12:55:21', ''),
('60252939b2505', '6025293993bc0', '0507', '00', '2021-02-11 12:55:21', ''),
('60252939b2ace', '6025293993bc0', '0601', '00', '2021-02-11 12:55:21', ''),
('60252939b307b', '6025293993bc0', '0602', '00', '2021-02-11 12:55:21', ''),
('60252939b3606', '6025293993bc0', '0603', '00', '2021-02-11 12:55:21', ''),
('60252939b3b09', '6025293993bc0', '0604', '00', '2021-02-11 12:55:21', ''),
('60252939b4065', '6025293993bc0', '0605', '00', '2021-02-11 12:55:21', ''),
('60252939b4529', '6025293993bc0', '0606', '00', '2021-02-11 12:55:21', ''),
('60252939b4a16', '6025293993bc0', '0701', '00', '2021-02-11 12:55:21', ''),
('60252939b4fcd', '6025293993bc0', '0702', '00', '2021-02-11 12:55:21', ''),
('60252939b5501', '6025293993bc0', '0703', '00', '2021-02-11 12:55:21', ''),
('60252939b5a17', '6025293993bc0', '0704', '00', '2021-02-11 12:55:21', ''),
('60252939b60e6', '6025293993bc0', '0705', '00', '2021-02-11 12:55:21', ''),
('60252939b6637', '6025293993bc0', '0801', '00', '2021-02-11 12:55:21', ''),
('60252939b6cfd', '6025293993bc0', '0802', '00', '2021-02-11 12:55:21', ''),
('60252939b7248', '6025293993bc0', '0803', '00', '2021-02-11 12:55:21', ''),
('60252939b7770', '6025293993bc0', '0804', '00', '2021-02-11 12:55:21', ''),
('60252939b7d6b', '6025293993bc0', '0805', '00', '2021-02-11 12:55:21', ''),
('60252939b837e', '6025293993bc0', '0901', '00', '2021-02-11 12:55:21', ''),
('60252939b8905', '6025293993bc0', '0902', '00', '2021-02-11 12:55:21', ''),
('60252939b8fb9', '6025293993bc0', '0903', '00', '2021-02-11 12:55:21', ''),
('60252939b95db', '6025293993bc0', '0904', '00', '2021-02-11 12:55:21', ''),
('60252939b9b83', '6025293993bc0', '0905', '00', '2021-02-11 12:55:21', ''),
('60252939ba210', '6025293993bc0', '1001', '00', '2021-02-11 12:55:21', ''),
('60252939ba7b9', '6025293993bc0', '1002', '00', '2021-02-11 12:55:21', ''),
('60252939bad70', '6025293993bc0', '1003', '00', '2021-02-11 12:55:21', ''),
('60252939bb2ae', '6025293993bc0', '1004', '00', '2021-02-11 12:55:21', ''),
('60252939bb872', '6025293993bc0', '1005', '00', '2021-02-11 12:55:21', ''),
('60252939bbe2f', '6025293993bc0', '1006', '00', '2021-02-11 12:55:21', ''),
('60252939bc370', '6025293993bc0', '1007', '00', '2021-02-11 12:55:21', ''),
('60252939bc8c2', '6025293993bc0', '1008', '00', '2021-02-11 12:55:21', ''),
('60252939bce72', '6025293993bc0', '1101', '00', '2021-02-11 12:55:21', ''),
('60252939bd357', '6025293993bc0', '1102', '00', '2021-02-11 12:55:21', ''),
('60252939bd8cf', '6025293993bc0', '1103', '00', '2021-02-11 12:55:21', ''),
('60252939bde43', '6025293993bc0', '1201', '00', '2021-02-11 12:55:21', ''),
('60252939be430', '6025293993bc0', '1202', '00', '2021-02-11 12:55:21', ''),
('60252939bea1d', '6025293993bc0', '1203', '00', '2021-02-11 12:55:21', ''),
('60252939bef56', '6025293993bc0', '1301', '00', '2021-02-11 12:55:21', ''),
('60252939bf580', '6025293993bc0', '1302', '00', '2021-02-11 12:55:21', ''),
('60252939bfb37', '6025293993bc0', '1303', '00', '2021-02-11 12:55:21', ''),
('60252939c0090', '6025293993bc0', '1401', '00', '2021-02-11 12:55:21', ''),
('60252939c0727', '6025293993bc0', '1402', '00', '2021-02-11 12:55:21', ''),
('60252939c0d0d', '6025293993bc0', '1403', '00', '2021-02-11 12:55:21', ''),
('60252939c1286', '6025293993bc0', '1404', '00', '2021-02-11 12:55:21', ''),
('60252939c1825', '6025293993bc0', '1405', '00', '2021-02-11 12:55:21', ''),
('60252939c1db9', '6025293993bc0', '1406', '00', '2021-02-11 12:55:21', ''),
('60252fc8bb140', '60252fc8ae641', '0101', '03', '2021-02-13 14:38:40', ''),
('60252fc8bb77c', '60252fc8ae641', '0102', '03', '2021-02-13 14:38:40', ''),
('60252fc8bbd29', '60252fc8ae641', '0103', '03', '2021-02-13 14:38:40', ''),
('60252fc8bca2b', '60252fc8ae641', '0104', '03', '2021-02-13 14:38:40', ''),
('60252fc8bcf06', '60252fc8ae641', '0105', '03', '2021-02-13 14:38:40', ''),
('60252fc8bd6cb', '60252fc8ae641', '0106', '03', '2021-02-13 14:38:40', ''),
('60252fc8bdd77', '60252fc8ae641', '0201', '03', '2021-02-11 13:24:00', ''),
('60252fc8be2cb', '60252fc8ae641', '0202', '03', '2021-02-11 13:24:00', ''),
('60252fc8be82c', '60252fc8ae641', '0203', '03', '2021-02-11 13:24:00', ''),
('60252fc8bed73', '60252fc8ae641', '0204', '03', '2021-02-11 13:24:00', ''),
('60252fc8bf264', '60252fc8ae641', '0205', '03', '2021-02-11 13:24:00', ''),
('60252fc8bf86b', '60252fc8ae641', '0206', '03', '2021-02-11 13:24:00', ''),
('60252fc8bfdbb', '60252fc8ae641', '0301', '02', '2021-02-11 13:24:58', ''),
('60252fc8c02a8', '60252fc8ae641', '0302', '02', '2021-02-11 13:24:58', ''),
('60252fc8c0788', '60252fc8ae641', '0303', '01', '2021-02-11 13:24:58', ''),
('60252fc8c0c75', '60252fc8ae641', '0304', '02', '2021-02-11 13:24:58', ''),
('60252fc8c11c8', '60252fc8ae641', '0305', '03', '2021-02-11 13:24:58', ''),
('60252fc8c18fc', '60252fc8ae641', '0401', '00', '2021-02-11 13:23:20', ''),
('60252fc8c1ed4', '60252fc8ae641', '0402', '00', '2021-02-11 13:23:20', ''),
('60252fc8c2482', '60252fc8ae641', '0403', '00', '2021-02-11 13:23:20', ''),
('60252fc8c29ff', '60252fc8ae641', '0404', '00', '2021-02-11 13:23:20', ''),
('60252fc8c312d', '60252fc8ae641', '0405', '00', '2021-02-11 13:23:20', ''),
('60252fc8c36c8', '60252fc8ae641', '0406', '00', '2021-02-11 13:23:20', ''),
('60252fc8c3c1d', '60252fc8ae641', '0407', '00', '2021-02-11 13:23:20', ''),
('60252fc8c40fb', '60252fc8ae641', '0408', '00', '2021-02-11 13:23:20', ''),
('60252fc8c45f4', '60252fc8ae641', '0409', '00', '2021-02-11 13:23:20', ''),
('60252fc8c4aec', '60252fc8ae641', '0410', '00', '2021-02-11 13:23:20', ''),
('60252fc8c5059', '60252fc8ae641', '0411', '00', '2021-02-11 13:23:20', ''),
('60252fc8c5b66', '60252fc8ae641', '0501', '00', '2021-02-11 13:23:20', ''),
('60252fc8c6163', '60252fc8ae641', '0502', '00', '2021-02-11 13:23:20', ''),
('60252fc8c6730', '60252fc8ae641', '0503', '00', '2021-02-11 13:23:20', ''),
('60252fc8c6ed6', '60252fc8ae641', '0504', '00', '2021-02-11 13:23:20', ''),
('60252fc8c7481', '60252fc8ae641', '0505', '00', '2021-02-11 13:23:20', ''),
('60252fc8c799e', '60252fc8ae641', '0506', '00', '2021-02-11 13:23:20', ''),
('60252fc8c7e66', '60252fc8ae641', '0507', '00', '2021-02-11 13:23:20', ''),
('60252fc8c844b', '60252fc8ae641', '0601', '00', '2021-02-11 13:23:20', ''),
('60252fc8c8994', '60252fc8ae641', '0602', '00', '2021-02-11 13:23:20', ''),
('60252fc8c8e7f', '60252fc8ae641', '0603', '00', '2021-02-11 13:23:20', ''),
('60252fc8c93b4', '60252fc8ae641', '0604', '00', '2021-02-11 13:23:20', ''),
('60252fc8c9b99', '60252fc8ae641', '0605', '00', '2021-02-11 13:23:20', ''),
('60252fc8ca34d', '60252fc8ae641', '0606', '00', '2021-02-11 13:23:20', ''),
('60252fc8caae4', '60252fc8ae641', '0701', '00', '2021-02-11 13:23:20', ''),
('60252fc8cb1d5', '60252fc8ae641', '0702', '00', '2021-02-11 13:23:20', ''),
('60252fc8cb873', '60252fc8ae641', '0703', '00', '2021-02-11 13:23:20', ''),
('60252fc8cbee1', '60252fc8ae641', '0704', '00', '2021-02-11 13:23:20', ''),
('60252fc8cc5b2', '60252fc8ae641', '0705', '00', '2021-02-11 13:23:20', ''),
('60252fc8ccba4', '60252fc8ae641', '0801', '00', '2021-02-11 13:23:20', ''),
('60252fc8cd444', '60252fc8ae641', '0802', '00', '2021-02-11 13:23:20', ''),
('60252fc8cda97', '60252fc8ae641', '0803', '00', '2021-02-11 13:23:20', ''),
('60252fc8ce147', '60252fc8ae641', '0804', '00', '2021-02-11 13:23:20', ''),
('60252fc8ce805', '60252fc8ae641', '0805', '00', '2021-02-11 13:23:20', ''),
('60252fc8cee6c', '60252fc8ae641', '0901', '00', '2021-02-11 13:23:20', ''),
('60252fc8cf46c', '60252fc8ae641', '0902', '00', '2021-02-11 13:23:20', ''),
('60252fc8cfbaa', '60252fc8ae641', '0903', '00', '2021-02-11 13:23:20', ''),
('60252fc8d0357', '60252fc8ae641', '0904', '00', '2021-02-11 13:23:20', ''),
('60252fc8d0a11', '60252fc8ae641', '0905', '00', '2021-02-11 13:23:20', ''),
('60252fc8d0f9a', '60252fc8ae641', '1001', '00', '2021-02-11 13:23:20', ''),
('60252fc8d152c', '60252fc8ae641', '1002', '00', '2021-02-11 13:23:20', ''),
('60252fc8d1c47', '60252fc8ae641', '1003', '00', '2021-02-11 13:23:20', ''),
('60252fc8d2892', '60252fc8ae641', '1004', '00', '2021-02-11 13:23:20', ''),
('60252fc8d2eb6', '60252fc8ae641', '1005', '00', '2021-02-11 13:23:20', ''),
('60252fc8d354e', '60252fc8ae641', '1006', '00', '2021-02-11 13:23:20', ''),
('60252fc8d3c4b', '60252fc8ae641', '1007', '00', '2021-02-11 13:23:20', ''),
('60252fc8d43ae', '60252fc8ae641', '1008', '00', '2021-02-11 13:23:20', ''),
('60252fc8d49bc', '60252fc8ae641', '1101', '00', '2021-02-11 13:23:20', ''),
('60252fc8d4f14', '60252fc8ae641', '1102', '00', '2021-02-11 13:23:20', ''),
('60252fc8d5406', '60252fc8ae641', '1103', '00', '2021-02-11 13:23:20', ''),
('60252fc8d599b', '60252fc8ae641', '1201', '00', '2021-02-11 13:23:20', ''),
('60252fc8d6187', '60252fc8ae641', '1202', '00', '2021-02-11 13:23:20', ''),
('60252fc8d67b7', '60252fc8ae641', '1203', '00', '2021-02-11 13:23:20', ''),
('60252fc8d6dff', '60252fc8ae641', '1301', '00', '2021-02-11 13:23:20', ''),
('60252fc8d74ec', '60252fc8ae641', '1302', '00', '2021-02-11 13:23:20', ''),
('60252fc8d7d44', '60252fc8ae641', '1303', '00', '2021-02-11 13:23:20', ''),
('60252fc8d8528', '60252fc8ae641', '1401', '02', '2021-02-11 13:24:16', ''),
('60252fc8d8a37', '60252fc8ae641', '1402', '01', '2021-02-11 13:24:16', ''),
('60252fc8d93b9', '60252fc8ae641', '1403', '02', '2021-02-11 13:24:16', ''),
('60252fc8d9da0', '60252fc8ae641', '1404', '02', '2021-02-11 13:24:16', ''),
('60252fc8da627', '60252fc8ae641', '1405', '02', '2021-02-11 13:24:16', ''),
('60252fc8dab89', '60252fc8ae641', '1406', '01', '2021-02-11 13:24:16', ''),
('6025f62c7931b', '6025f62c6a584', '0101', '03', '2021-02-14 01:12:30', ''),
('6025f62c79dfb', '6025f62c6a584', '0102', '03', '2021-02-14 01:12:30', ''),
('6025f62c7a3d6', '6025f62c6a584', '0103', '03', '2021-02-14 01:12:30', ''),
('6025f62c7a94f', '6025f62c6a584', '0104', '03', '2021-02-14 01:12:30', ''),
('6025f62c7aeed', '6025f62c6a584', '0105', '03', '2021-02-14 01:12:30', ''),
('6025f62c7b445', '6025f62c6a584', '0106', '03', '2021-02-14 01:12:30', ''),
('6025f62c7b969', '6025f62c6a584', '0201', '03', '2021-02-14 01:13:05', ''),
('6025f62c7c1dd', '6025f62c6a584', '0202', '03', '2021-02-14 01:13:05', ''),
('6025f62c7c6df', '6025f62c6a584', '0203', '03', '2021-02-14 01:13:05', ''),
('6025f62c7cc4c', '6025f62c6a584', '0204', '03', '2021-02-14 01:13:05', ''),
('6025f62c7d122', '6025f62c6a584', '0205', '03', '2021-02-14 01:13:05', ''),
('6025f62c7d6b2', '6025f62c6a584', '0206', '03', '2021-02-14 01:13:05', ''),
('6025f62c7dbb2', '6025f62c6a584', '0301', '00', '2021-02-12 03:29:48', ''),
('6025f62c7e11a', '6025f62c6a584', '0302', '00', '2021-02-12 03:29:48', ''),
('6025f62c7e635', '6025f62c6a584', '0303', '00', '2021-02-12 03:29:48', ''),
('6025f62c7eb4f', '6025f62c6a584', '0304', '00', '2021-02-12 03:29:48', ''),
('6025f62c7f081', '6025f62c6a584', '0305', '00', '2021-02-12 03:29:48', ''),
('6025f62c7f587', '6025f62c6a584', '0401', '00', '2021-02-12 03:29:48', ''),
('6025f62c7fabe', '6025f62c6a584', '0402', '00', '2021-02-12 03:29:48', ''),
('6025f62c8010a', '6025f62c6a584', '0403', '00', '2021-02-12 03:29:48', ''),
('6025f62c80def', '6025f62c6a584', '0404', '00', '2021-02-12 03:29:48', ''),
('6025f62c81341', '6025f62c6a584', '0405', '00', '2021-02-12 03:29:48', ''),
('6025f62c818d5', '6025f62c6a584', '0406', '00', '2021-02-12 03:29:48', ''),
('6025f62c81e6a', '6025f62c6a584', '0407', '00', '2021-02-12 03:29:48', ''),
('6025f62c82540', '6025f62c6a584', '0408', '00', '2021-02-12 03:29:48', ''),
('6025f62c82a60', '6025f62c6a584', '0409', '00', '2021-02-12 03:29:48', ''),
('6025f62c82f68', '6025f62c6a584', '0410', '00', '2021-02-12 03:29:48', ''),
('6025f62c83434', '6025f62c6a584', '0411', '00', '2021-02-12 03:29:48', ''),
('6025f62c83929', '6025f62c6a584', '0501', '00', '2021-02-12 03:29:48', ''),
('6025f62c83eb0', '6025f62c6a584', '0502', '00', '2021-02-12 03:29:48', ''),
('6025f62c8442f', '6025f62c6a584', '0503', '00', '2021-02-12 03:29:48', ''),
('6025f62c848ec', '6025f62c6a584', '0504', '00', '2021-02-12 03:29:48', ''),
('6025f62c84e33', '6025f62c6a584', '0505', '00', '2021-02-12 03:29:48', ''),
('6025f62c85332', '6025f62c6a584', '0506', '00', '2021-02-12 03:29:48', ''),
('6025f62c85839', '6025f62c6a584', '0507', '00', '2021-02-12 03:29:48', ''),
('6025f62c85d71', '6025f62c6a584', '0601', '00', '2021-02-12 03:29:48', ''),
('6025f62c86273', '6025f62c6a584', '0602', '00', '2021-02-12 03:29:48', ''),
('6025f62c867be', '6025f62c6a584', '0603', '00', '2021-02-12 03:29:48', ''),
('6025f62c86c93', '6025f62c6a584', '0604', '00', '2021-02-12 03:29:48', ''),
('6025f62c871cd', '6025f62c6a584', '0605', '00', '2021-02-12 03:29:48', ''),
('6025f62c876e6', '6025f62c6a584', '0606', '00', '2021-02-12 03:29:48', ''),
('6025f62c87c5f', '6025f62c6a584', '0701', '00', '2021-02-12 03:29:48', ''),
('6025f62c881f3', '6025f62c6a584', '0702', '00', '2021-02-12 03:29:48', ''),
('6025f62c886e2', '6025f62c6a584', '0703', '00', '2021-02-12 03:29:48', ''),
('6025f62c88c4e', '6025f62c6a584', '0704', '00', '2021-02-12 03:29:48', ''),
('6025f62c89191', '6025f62c6a584', '0705', '00', '2021-02-12 03:29:48', ''),
('6025f62c895f2', '6025f62c6a584', '0801', '00', '2021-02-12 03:29:48', ''),
('6025f62c89c67', '6025f62c6a584', '0802', '00', '2021-02-12 03:29:48', ''),
('6025f62c8a2ab', '6025f62c6a584', '0803', '00', '2021-02-12 03:29:48', ''),
('6025f62c8a7ae', '6025f62c6a584', '0804', '00', '2021-02-12 03:29:48', ''),
('6025f62c8acfd', '6025f62c6a584', '0805', '00', '2021-02-12 03:29:48', ''),
('6025f62c8b3d8', '6025f62c6a584', '0901', '00', '2021-02-12 03:29:48', ''),
('6025f62c8b8eb', '6025f62c6a584', '0902', '00', '2021-02-12 03:29:48', ''),
('6025f62c8be1d', '6025f62c6a584', '0903', '00', '2021-02-12 03:29:48', ''),
('6025f62c8c36e', '6025f62c6a584', '0904', '00', '2021-02-12 03:29:48', ''),
('6025f62c8c901', '6025f62c6a584', '0905', '00', '2021-02-12 03:29:48', ''),
('6025f62c8cdf2', '6025f62c6a584', '1001', '00', '2021-02-12 03:29:48', ''),
('6025f62c8d4c3', '6025f62c6a584', '1002', '00', '2021-02-12 03:29:48', ''),
('6025f62c8dad3', '6025f62c6a584', '1003', '00', '2021-02-12 03:29:48', ''),
('6025f62c8e059', '6025f62c6a584', '1004', '00', '2021-02-12 03:29:48', ''),
('6025f62c8e535', '6025f62c6a584', '1005', '00', '2021-02-12 03:29:48', ''),
('6025f62c8ea86', '6025f62c6a584', '1006', '00', '2021-02-12 03:29:48', ''),
('6025f62c8f00d', '6025f62c6a584', '1007', '00', '2021-02-12 03:29:48', ''),
('6025f62c8f547', '6025f62c6a584', '1008', '00', '2021-02-12 03:29:48', ''),
('6025f62c8fab3', '6025f62c6a584', '1101', '00', '2021-02-12 03:29:48', ''),
('6025f62c9000d', '6025f62c6a584', '1102', '00', '2021-02-12 03:29:48', ''),
('6025f62c905dc', '6025f62c6a584', '1103', '00', '2021-02-12 03:29:48', ''),
('6025f62c90af5', '6025f62c6a584', '1201', '00', '2021-02-12 03:29:48', ''),
('6025f62c90ff6', '6025f62c6a584', '1202', '00', '2021-02-12 03:29:48', ''),
('6025f62c91512', '6025f62c6a584', '1203', '00', '2021-02-12 03:29:48', ''),
('6025f62c91b70', '6025f62c6a584', '1301', '00', '2021-02-12 03:29:48', ''),
('6025f62c92184', '6025f62c6a584', '1302', '00', '2021-02-12 03:29:48', ''),
('6025f62c9273e', '6025f62c6a584', '1303', '00', '2021-02-12 03:29:48', ''),
('6025f62c92ca8', '6025f62c6a584', '1401', '00', '2021-02-12 03:29:48', ''),
('6025f62c931c4', '6025f62c6a584', '1402', '00', '2021-02-12 03:29:48', ''),
('6025f62c93745', '6025f62c6a584', '1403', '00', '2021-02-12 03:29:48', ''),
('6025f62c93d39', '6025f62c6a584', '1404', '00', '2021-02-12 03:29:48', ''),
('6025f62c9425f', '6025f62c6a584', '1405', '00', '2021-02-12 03:29:48', ''),
('6025f62c9475e', '6025f62c6a584', '1406', '00', '2021-02-12 03:29:48', '');

-- --------------------------------------------------------

--
-- Table structure for table `kg_master`
--

CREATE TABLE `kg_master` (
  `kgmaster_id` varchar(20) NOT NULL,
  `nip` varchar(20) CHARACTER SET latin1 NOT NULL,
  `periode_id` varchar(20) NOT NULL,
  `tgl_penilaian` date NOT NULL,
  `jml_tdkhadir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kg_master`
--

INSERT INTO `kg_master` (`kgmaster_id`, `nip`, `periode_id`, `tgl_penilaian`, `jml_tdkhadir`) VALUES
('6025293993bc0', '99999', '01', '0000-00-00', 0),
('60252fc8ae641', '54321', '01', '0000-00-00', 0),
('6025f62c6a584', '12345', '01', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi`
--

CREATE TABLE `kompetensi` (
  `kompetensi_id` int(20) NOT NULL,
  `kk_id` varchar(1) NOT NULL,
  `nama_kompetensi` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kompetensi`
--

INSERT INTO `kompetensi` (`kompetensi_id`, `kk_id`, `nama_kompetensi`) VALUES
(1, 'A', 'Mengenal karakteristik peserta didik'),
(2, 'A', 'Menguasai teori belajar dan prinsip-prinsip'),
(3, 'A', 'Pengembangan kurikulum'),
(4, 'A', 'Kegiatan pembelajaran yang mendidik'),
(5, 'A', 'Pengembangan potensi peserta didik'),
(6, 'A', 'Komunikasi dengan peserta didik'),
(7, 'A', 'Penilaian dan evaluasi'),
(8, 'B', 'Bertindak sesuai dengan norma agama, hukum, sosial dan kebudayaan nasional'),
(9, 'B', 'Menunjukkan pribadi yang dewasa dan teladan'),
(10, 'B', 'Etos kerja, tanggung jawab yang tinggi, rasa bangga menjadi guru'),
(11, 'C', 'Bersikap inklusif, bertindak obyektif, serta tidak diskriminatif'),
(12, 'C', 'Komunikasi dengan sesama guru, tenaga kependidikan, orang tua, peserta didik, dan masyarakat'),
(13, 'D', 'Penguasaan materi, struktur, konsep dan pola pikir keilmuan yang mendukung mata pelajaran yang diampu'),
(14, 'D', 'Mengembangkan keprofesian melalui tindakan reflektif');

-- --------------------------------------------------------

--
-- Table structure for table `komponen`
--

CREATE TABLE `komponen` (
  `komponen_id` varchar(5) NOT NULL,
  `kelkompo_id` varchar(1) NOT NULL,
  `nama_komponen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komponen`
--

INSERT INTO `komponen` (`komponen_id`, `kelkompo_id`, `nama_komponen`) VALUES
('11', '1', 'Perilaku Guru sehari-hari'),
('12', '1', 'Hubungan Guru dengan Teman Sejawat'),
('13', '1', 'Perilaku Profesional Guru'),
('21', '2', 'Penguasaan Materi'),
('22', '2', 'Kemahiran dalam Mengajar'),
('23', '2', 'Perilaku Guru Sehari-hari'),
('24', '2', 'Hubungan Sosial dengan Peserta Didik');

-- --------------------------------------------------------

--
-- Table structure for table `kuisdetail`
--

CREATE TABLE `kuisdetail` (
  `kuisdetail_id` varchar(20) NOT NULL,
  `kuismaster_id` varchar(50) NOT NULL,
  `pernyataan_id` varchar(5) NOT NULL,
  `nilai_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kuismaster`
--

CREATE TABLE `kuismaster` (
  `kuismaster_id` varchar(50) NOT NULL,
  `kgmaster_id` varchar(20) NOT NULL,
  `nip` varchar(10) CHARACTER SET latin1 NOT NULL,
  `siswa_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `jenis` enum('sejawat','siswa') NOT NULL,
  `tgl_pengisian` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `nilai_id` varchar(10) NOT NULL,
  `nama_nilai` varchar(20) NOT NULL,
  `bobot_nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`nilai_id`, `nama_nilai`, `bobot_nilai`) VALUES
('00', 'belum diisi', 0),
('01', 'Tidak Pernah', 0),
('02', 'Kadang - kadang', 1),
('03', 'Sering', 2);

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `periode_id` varchar(10) NOT NULL,
  `nama_periode` varchar(50) NOT NULL,
  `is_aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`periode_id`, `nama_periode`, `is_aktif`) VALUES
('01', 'Periode pertama', 1),
('02', 'Periode kedua', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pernyataan`
--

CREATE TABLE `pernyataan` (
  `pernyataan_id` varchar(5) NOT NULL,
  `komponen_id` varchar(5) NOT NULL,
  `nama_pernyataan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pernyataan`
--

INSERT INTO `pernyataan` (`pernyataan_id`, `komponen_id`, `nama_pernyataan`) VALUES
('1101', '11', 'Guru mentaati peraturan yang berlaku di sekolah.'),
('1102', '11', 'Guru bekerja sesuai jadwal yang ditetapkan.'),
('1103', '11', 'Guru berpakaian rapi dan / atau sopan.'),
('1104', '11', 'Guru rajin mengikuti upacara bendera.'),
('1105', '11', 'Guru berperilaku baik terhadap saya dan guru lain.'),
('1106', '11', 'Guru bersedia menerima kritik dan saran dari saya atau guru lain.'),
('1107', '11', 'Guru dapat menjadi teladan bagi saya dan teman-teman.'),
('1108', '11', 'Guru pandai mengendalikan diri.'),
('1109', '11', 'Guru ikut aktif menjaga lingkungan sekolah bebas dari asap rokok.'),
('1110', '11', 'Guru berpartisipasi aktif dalam kegiatan ekstrakurikuler.'),
('1111', '11', 'Guru berpartisispasi aktif dalam kegiatan peningkatan prestasi sekolah.'),
('1201', '12', 'Guru bersikap ramah kepada saya atau orang lain.'),
('1202', '12', 'Guru berbahasa santun kepada saya atau orang lain.'),
('1203', '12', 'Guru memberi motivasi kepada saya atau teman-teman guru lain.'),
('1204', '12', 'Guru pandai berkomunikasi secara lisan atau tertulis.'),
('1205', '12', 'Guru memotivasi diri dan rekan sejawat secara aktif dan kreatif dalam melaksanakan proses pendidikan.'),
('1206', '12', 'Guru menciptakan suasana kekeluargaan di dalam dan luar sekolah.'),
('1207', '12', 'Guru mudah bekerja sama dengan saya atau guru lainnya.'),
('1208', '12', 'Guru bersedia diajak berdikusi tentang segala hal terkait kepentingan peserta didik dan sekolah.'),
('1209', '12', 'Guru bersedia membantumenyelesaikan masalah saya dan guru lainnya.'),
('1210', '12', 'Guru menghargai kemampuan saya dan guru lainnya.'),
('1301', '13', 'Guru memiliki kretivitas dalam pembelajaran'),
('1302', '13', 'Guru memiliki pengetahuan dan keterampilan Teknologi Informasi (TI) yang memadai.'),
('1303', '13', 'Guru memiliki perangkat pembelajaran yang lengkap.'),
('1304', '13', 'Guru ada di sekolah meskipun tidak mengajar di kelas.'),
('1305', '13', 'Guru memulai pembelajaran tepat waktu.'),
('1306', '13', 'Guru mengakhiri pembelajaran tepat waktu.'),
('1307', '13', 'Guru memberikan tugas kepada peserta didik apa bila berhalangan hadir untuk mengajar.'),
('1308', '13', 'Guru memberi informasi kepada saya atau guru lain jika berhalangan hadir untuk mengajar.'),
('1309', '13', 'Guru memperlakukan peserta didik dengan penuh kasih sayang.'),
('2101', '21', 'Guru menyampaikan materi pelajaran dengan contoh dalam kehidupan sehari-hari.'),
('2102', '21', 'Guru menjelaskan materi pelajaran dari buku paket dan sumber belajar lainnya.'),
('2103', '21', 'Guru memberikan contoh atau permasalahan yang berhubungan dengan keadaan saat ini.'),
('2104', '21', 'Guru menjawab pertanyaan dengan jelas.'),
('2105', '21', 'Guru menjawab pertanyaan dengan benar.'),
('2106', '21', 'Guru mengajar sesuai dengan materi pelajaran.'),
('2201', '22', 'Guru menyampaikan kegiatan yang akan dilakukan selama pembelajaran.'),
('2202', '22', 'Guru memberikan motivasi kepada saya dan teman-teman.'),
('2203', '22', 'Guru menyampaikan materi pelajaran dengan mudah dimengerti.'),
('2204', '22', 'Guru mengajar dengan cara yang bervariasi misalnya diskusi, demonstrasi, tanya jawab, ceramah, dll.'),
('2205', '22', 'Guru berbicara dengan jelas ketika menyampaikan materi pelajaran.'),
('2206', '22', 'Guru meminta belajar secara berkelompok'),
('2207', '22', 'Guru mengajar dengan cara yang menyenangkan dan menarik.'),
('2208', '22', 'Guru terampil menggunakan alat bantu saat mengajar.'),
('2209', '22', 'Guru membimbing saya dan teman-teman ketika mengalamikesulitan.'),
('2210', '22', 'Guru membuat suasana nyaman saat melaksanakan pembelajaran.'),
('2211', '22', 'Guru memberi kesempatan kepada saya dan teman-teman untuk bertanya atau menjawab.'),
('2212', '22', 'Guru menghargai kemampuan saya dan teman-teman.'),
('2213', '22', 'Guru memberitahukan nilai hasil belajar.'),
('2214', '22', 'Guru memberikan tugas dalam pembelajaran.'),
('2301', '23', 'Guru mengajak saya dan teman-teman untuk berperilaku baik.'),
('2302', '23', 'Guru memberi contoh perilaku yang sesuai aturan.'),
('2303', '23', 'Guru menjalankan ibadah sesuai dengan ajaran agamanya.'),
('2304', '23', 'Guru berpakaian rapi sesuai aturan sekolah.'),
('2305', '23', 'Guru menghargai perbedaan asal, suku, ras dan agama.'),
('2306', '23', 'Guru berpakaian sopan.'),
('2307', '23', 'Guru berbicara dengan santun.'),
('2308', '23', 'Guru ramah.'),
('2309', '23', 'Guru sabar.'),
('2310', '23', 'Guru memulai pembelajaran tepat waktu.'),
('2311', '23', 'Guru mengakhiri pembelajaran tepat waktu.'),
('2312', '23', 'Guru memberikan tugas apabila berhalangan hadir.'),
('2313', '23', 'Guru menjaga lingkungan sekolah tanpa asap rokok.'),
('2314', '23', 'Guru menjaga kebersihan lingkungan sekolah.'),
('2315', '23', 'Guru memulai dan mengakhiri pembelajaran dengan berdoa bersama.'),
('2401', '24', 'Guru memperhatikan kebutuhan belajar saya dan teman-teman.'),
('2402', '24', 'Guru menyebutkan nama saya dan teman-teman selama kegiatan pembelajaran atau kegiatan lainnya).'),
('2403', '24', 'Guru memberi perhatian kepada saya dan teman-teman.'),
('2404', '24', 'Guru memilihara komunikasi yang baik dengan semua peserta didik.'),
('2405', '24', 'Guru mudah dihubungi pada saat diperlukan untuk diskusi.'),
('2406', '24', 'Guru akrab dengan saya dan teman-teman.'),
('2407', '24', 'Guru ikut serta dalam berbagai macam kegiatan sekolah (upacara, kegiatan keagamaan, senam bersama).');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `siswa_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `kelas_id` varchar(10) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`siswa_id`, `kelas_id`, `nama_siswa`) VALUES
('11012004', '11IPS03', 'Siswa Contoh'),
('11012005', '11IPS03', 'Salvian'),
('12122003', '12IPA02', 'Misal SIswa');

-- --------------------------------------------------------

--
-- Table structure for table `skor`
--

CREATE TABLE `skor` (
  `skor_id` varchar(10) NOT NULL,
  `nama_skor` varchar(50) NOT NULL,
  `bobot_skor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skor`
--

INSERT INTO `skor` (`skor_id`, `nama_skor`, `bobot_skor`) VALUES
('00', 'belum dinilai', 0),
('01', 'Tidak ada bukti (Tidak  terpenuhi)', 0),
('02', 'Terpenuhi sebagian', 1),
('03', 'Seluruhnya terpenuhi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `superadmin` smallint(1) DEFAULT 0,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `registration_ip` varchar(15) DEFAULT NULL,
  `bind_to_ip` varchar(255) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `email_confirmed` smallint(1) NOT NULL DEFAULT 0,
  `nip` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `siswa_id` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `instansi_id` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `confirmation_token`, `status`, `superadmin`, `created_at`, `updated_at`, `registration_ip`, `bind_to_ip`, `email`, `email_confirmed`, `nip`, `siswa_id`, `instansi_id`) VALUES
(1, 'superadmin', 'kz2px152FAWlkHbkZoCiXgBAd-S8SSjF', '$2y$13$MhlYe12xkGFnSeK0sO2up.Y9kAD9Ct6JS1i9VLP7YAqd1dFsSylz2', NULL, 1, 1, 1426062188, 1426062188, NULL, NULL, NULL, 0, NULL, NULL, ''),
(2, 'kepalasekolah', 'mEXN9Puhv6llFwKX4AoWg5JKjh9iucNA', '$2y$13$PPXQh1JEeZaiH8DeECBg0.MeLH0naSRaudjaa0rH3IEtVFZeq3.iu', NULL, 1, 0, 1611302577, 1611302577, '::1', '', '', 0, NULL, NULL, ''),
(3, 'guru', '043qIc5Yux9GlBSSpIcHaHOmsqL5lHI9', '$2y$13$79TWug28dOKK9ChYOHxIIenzhPNsZdGXSKEYx2op9c9r2XCYWnUQu', NULL, 1, 0, 1611302598, 1611302598, '::1', '', '', 0, NULL, NULL, ''),
(4, 'siswa', 'ADf-G_rVIiloN8OtuThrec9w5tWPL2Zk', '$2y$13$SpypV7pWyqgPdz8VHq3w/OsL3.kZzynSQxSQojpbLW6EBsbNl/8gW', NULL, 1, 0, 1611302611, 1611302611, '::1', '', '', 0, NULL, NULL, ''),
(6, '12345', 'FfxeDeWe08UTdaE2IzYIfAs0_CyNzT9r', '$2y$13$edgn3aTbeuaBLQ9AZJYDSOnQfjO3vlWI8S0EQH8s/.Cl2slKRQ/3a', NULL, 1, 0, 1612969534, 1612970020, '::1', '', '', 0, '12345', NULL, ''),
(7, '54321', 'bPP93SyrJpRMO9aWGT7uInHLUGIk_CQ9', '$2y$13$hC94pQrJv2p1UmDNpR.axO15yDfBWCNdR8ULP8hm2JuYQu5f2/fDi', NULL, 1, 0, 1613039651, 1613039651, '::1', '', '', 0, '54321', NULL, ''),
(9, '12122003', 'uqkk0QJBB_7aGaIznLcNyJ1KaYwc5CEu', '$2y$13$FHsc72buv4gauuaRgMSy/OkeUaxle29tokbGVikxU364V3NG1m2aC', NULL, 1, 0, 1613104255, 1613104255, '::1', '', '', 0, NULL, '12122003', ''),
(11, '11012004', 'tDPVFvSgeKqlql2fzOOrSpUkDWDzV92P', '$2y$13$ZcGdKGrp1DOZKPhGw6dk2.o9D4A7A0707bAOz8SW07P4H.QUDMou.', NULL, 1, 0, 1613132415, 1613132415, '::1', '', '', 0, NULL, '11012004', ''),
(12, '11012005', '88SxEFJbpnJzhtkJUhmw34tkvO0IQoE1', '$2y$13$7s67oMF7BF8oJMip0RYLmO3CPbbGeWOpRrgeqRnjNRs.6X7W7Grz6', NULL, 1, 0, 1613132559, 1613132559, '::1', '', '', 0, '12345', '11012004', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_visit_log`
--

CREATE TABLE `user_visit_log` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `language` char(2) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `visit_time` int(11) NOT NULL,
  `browser` varchar(30) DEFAULT NULL,
  `os` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_visit_log`
--

INSERT INTO `user_visit_log` (`id`, `token`, `ip`, `language`, `user_agent`, `user_id`, `visit_time`, `browser`, `os`) VALUES
(1, '600a7e6ae8790', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 1, 1611300458, 'Chrome', 'Windows'),
(2, '600a7eb42af6a', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 1, 1611300532, 'Chrome', 'Windows'),
(3, '600a7eca2f20a', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 1, 1611300554, 'Chrome', 'Windows'),
(4, '600a7ff3b07e4', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 1, 1611300851, 'Chrome', 'Windows'),
(5, '600a823813a6b', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 1, 1611301432, 'Chrome', 'Windows'),
(6, '600a84e3504a7', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 1, 1611302115, 'Chrome', 'Windows'),
(7, '600a8549b0eee', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 1, 1611302217, 'Chrome', 'Windows'),
(8, '600a873584185', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 4, 1611302709, 'Chrome', 'Windows'),
(9, '600b85cc80de3', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 1, 1611367884, 'Chrome', 'Windows'),
(10, '600e2a5ac051b', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 1, 1611541082, 'Chrome', 'Windows'),
(11, '600e49a3dd68f', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 2, 1611549091, 'Chrome', 'Windows'),
(12, '600e4a8f78e30', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 1, 1611549327, 'Chrome', 'Windows'),
(13, '600f7a7381513', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 1, 1611627123, 'Chrome', 'Windows'),
(14, '6010caba9bc14', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 1, 1611713210, 'Chrome', 'Windows'),
(15, '60121e0c79c19', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 1, 1611800076, 'Chrome', 'Windows'),
(16, '60125f468f9cf', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 1, 1611816774, 'Chrome', 'Windows'),
(17, '60125f536c217', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 3, 1611816787, 'Chrome', 'Windows'),
(18, '60136ff1de64d', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 1, 1611886577, 'Chrome', 'Windows'),
(19, '6014bb78af100', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 1, 1611971448, 'Chrome', 'Windows'),
(20, '6014dabf95f06', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 3, 1611979455, 'Chrome', 'Windows'),
(21, '6014db106ec72', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 3, 1611979536, 'Chrome', 'Windows'),
(22, '6014db38c841d', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 1, 1611979576, 'Chrome', 'Windows'),
(23, '6014db6eb0e1e', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 3, 1611979630, 'Chrome', 'Windows'),
(24, '6014dd78699c5', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 4, 1611980152, 'Chrome', 'Windows'),
(25, '6014dddd99678', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 2, 1611980253, 'Chrome', 'Windows'),
(26, '6014f54121739', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 1, 1611986241, 'Chrome', 'Windows'),
(27, '6014f72650676', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 3, 1611986726, 'Chrome', 'Windows'),
(28, '60150696100cf', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 3, 1611990678, 'Chrome', 'Windows'),
(29, '6015261968a6b', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 3, 1611998745, 'Chrome', 'Windows'),
(30, '60152631b0196', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 2, 1611998769, 'Chrome', 'Windows'),
(31, '6015297a9098c', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 1, 1611999610, 'Chrome', 'Windows'),
(32, '6016ab5d4a889', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 1, 1612098397, 'Chrome', 'Windows'),
(33, '601b55819e3af', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 1, 1612404097, 'Chrome', 'Windows'),
(34, '601b794f53b4c', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 1, 1612413263, 'Chrome', 'Windows'),
(35, '601b795999216', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 3, 1612413273, 'Chrome', 'Windows'),
(36, '601b93703db4c', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36', 1, 1612419952, 'Chrome', 'Windows'),
(37, '601bca7d03377', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.146 Safari/537.36', 1, 1612434045, 'Chrome', 'Windows'),
(38, '601ca72612a6e', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1612490534, 'Chrome', 'Windows'),
(39, '601ded13646d6', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1612573971, 'Chrome', 'Windows'),
(40, '601fbdd46a9ac', '127.0.0.1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1612692948, 'Chrome', 'Windows'),
(41, '6020a1e014410', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1612751328, 'Chrome', 'Windows'),
(42, '6020a7ff90245', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 3, 1612752895, 'Chrome', 'Windows'),
(43, '6020b24e28f5e', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1612755534, 'Chrome', 'Windows'),
(44, '6021ee008ed54', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1612836352, 'Chrome', 'Windows'),
(45, '60223ca344cb8', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1612856483, 'Chrome', 'Windows'),
(46, '6023436fbab41', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1612923759, 'Chrome', 'Windows'),
(47, '60235405497cb', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1612928005, 'Chrome', 'Windows'),
(48, '6023e3e57b062', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1612964837, 'Chrome', 'Windows'),
(49, '6023f51e06ec5', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1612969246, 'Chrome', 'Windows'),
(50, '60246b18d9aa8', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1612999448, 'Chrome', 'Windows'),
(51, '60246b199e922', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1612999449, 'Chrome', 'Windows'),
(52, '60246b1a8f19b', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1612999450, 'Chrome', 'Windows'),
(53, '60246f49275ea', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 6, 1613000521, 'Chrome', 'Windows'),
(54, '602471b4bbc22', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613001140, 'Chrome', 'Windows'),
(55, '6024799bc60ce', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 6, 1613003163, 'Chrome', 'Windows'),
(56, '602479cb2cb89', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 4, 1613003211, 'Chrome', 'Windows'),
(57, '602479d99f322', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 3, 1613003225, 'Chrome', 'Windows'),
(58, '60247a051cdd3', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 3, 1613003269, 'Chrome', 'Windows'),
(59, '60247a1300125', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613003283, 'Chrome', 'Windows'),
(60, '6024927acbb06', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613009530, 'Chrome', 'Windows'),
(61, '6024d3e514084', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613026277, 'Chrome', 'Windows'),
(62, '6024d3ee9b928', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 3, 1613026286, 'Chrome', 'Windows'),
(63, '6024d443a5a9b', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613026371, 'Chrome', 'Windows'),
(64, '6024d50090274', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 3, 1613026560, 'Chrome', 'Windows'),
(65, '6024d59600943', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 3, 1613026710, 'Chrome', 'Windows'),
(66, '6024d73e2e2b1', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613027134, 'Chrome', 'Windows'),
(67, '6025054ee906a', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613038926, 'Chrome', 'Windows'),
(68, '6025055f715c7', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 6, 1613038943, 'Chrome', 'Windows'),
(69, '602505eb61398', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613039083, 'Chrome', 'Windows'),
(70, '6025061635537', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 6, 1613039126, 'Chrome', 'Windows'),
(71, '6025070902edc', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613039369, 'Chrome', 'Windows'),
(72, '602507211d382', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 6, 1613039393, 'Chrome', 'Windows'),
(73, '60250808a8cfd', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613039624, 'Chrome', 'Windows'),
(74, '60250834409f2', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 7, 1613039668, 'Chrome', 'Windows'),
(75, '6025f5a5a5d65', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613100453, 'Chrome', 'Windows'),
(76, '6025f5cbc2686', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 3, 1613100491, 'Chrome', 'Windows'),
(77, '6025f5e8863d7', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613100520, 'Chrome', 'Windows'),
(78, '6025f7dd2dcc8', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 6, 1613101021, 'Chrome', 'Windows'),
(79, '6025f7fa6ca12', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613101050, 'Chrome', 'Windows'),
(80, '6025fb06c230e', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 6, 1613101830, 'Chrome', 'Windows'),
(81, '602601d4300db', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 6, 1613103572, 'Chrome', 'Windows'),
(82, '6026025a3b2d0', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613103706, 'Chrome', 'Windows'),
(83, '60266d43c5768', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613131075, 'Chrome', 'Windows'),
(84, '6026802871d9f', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 6, 1613135912, 'Chrome', 'Windows'),
(85, '60268565ca375', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 9, 1613137253, 'Chrome', 'Windows'),
(86, '6026857456dd7', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613137268, 'Chrome', 'Windows'),
(87, '602685bcd1403', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 9, 1613137340, 'Chrome', 'Windows'),
(88, '6026880caa2c2', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 9, 1613137932, 'Chrome', 'Windows'),
(89, '60268ab7df15f', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 6, 1613138615, 'Chrome', 'Windows'),
(90, '60268b0ba0749', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 9, 1613138699, 'Chrome', 'Windows'),
(91, '60268cb5638a2', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613139125, 'Chrome', 'Windows'),
(92, '60268dae29c01', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 6, 1613139374, 'Chrome', 'Windows'),
(93, '602691d042bd9', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613140432, 'Chrome', 'Windows'),
(94, '602697d6cdffa', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 6, 1613141974, 'Chrome', 'Windows'),
(95, '6026980b3c317', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613142027, 'Chrome', 'Windows'),
(96, '6026a91aabc36', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613146394, 'Chrome', 'Windows'),
(97, '6026aa11c1c58', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613146641, 'Chrome', 'Windows'),
(98, '60270bcbe13c3', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613171659, 'Chrome', 'Windows'),
(99, '60270c8690f3a', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 6, 1613171846, 'Chrome', 'Windows'),
(100, '60273426568c8', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613181990, 'Chrome', 'Windows'),
(101, '6027650501509', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613194501, 'Chrome', 'Windows'),
(102, '6027b1741315a', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 6, 1613214068, 'Chrome', 'Windows'),
(103, '6027b310c098c', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613214480, 'Chrome', 'Windows'),
(104, '6027d72fc3102', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613223727, 'Chrome', 'Windows'),
(105, '602872b9da318', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613263545, 'Chrome', 'Windows'),
(106, '6028d4612275c', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 1, 1613288545, 'Chrome', 'Windows');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`),
  ADD KEY `fk_auth_item_group_code` (`group_code`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_item_group`
--
ALTER TABLE `auth_item_group`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `datadukung_kg`
--
ALTER TABLE `datadukung_kg`
  ADD PRIMARY KEY (`datadukung_id`),
  ADD UNIQUE KEY `datadukung_id` (`datadukung_id`),
  ADD KEY `kgdetail_id` (`kgdetail_id`);

--
-- Indexes for table `groupuser`
--
ALTER TABLE `groupuser`
  ADD PRIMARY KEY (`groupuser_id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `instansi_id` (`instansi_id`);

--
-- Indexes for table `guru_kelas`
--
ALTER TABLE `guru_kelas`
  ADD PRIMARY KEY (`gk_id`),
  ADD UNIQUE KEY `gk_id` (`gk_id`),
  ADD KEY `kelas_id2` (`kelas_id`),
  ADD KEY `nip2` (`nip`);

--
-- Indexes for table `indikator`
--
ALTER TABLE `indikator`
  ADD PRIMARY KEY (`indikator_id`),
  ADD KEY `kompetensi_id` (`kompetensi_id`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`instansi_id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kelas_id`);

--
-- Indexes for table `kelompok_kompetensi`
--
ALTER TABLE `kelompok_kompetensi`
  ADD PRIMARY KEY (`kk_id`);

--
-- Indexes for table `kelompok_komponen`
--
ALTER TABLE `kelompok_komponen`
  ADD PRIMARY KEY (`kelkompo_id`);

--
-- Indexes for table `kg_detail`
--
ALTER TABLE `kg_detail`
  ADD PRIMARY KEY (`kgdetail_id`),
  ADD KEY `indikator_id` (`indikator_id`),
  ADD KEY `skor_id` (`skor_id`),
  ADD KEY `kgmaster_id` (`kgmaster_id`);

--
-- Indexes for table `kg_master`
--
ALTER TABLE `kg_master`
  ADD PRIMARY KEY (`kgmaster_id`),
  ADD KEY `periode_id` (`periode_id`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `kompetensi`
--
ALTER TABLE `kompetensi`
  ADD PRIMARY KEY (`kompetensi_id`),
  ADD KEY `kk_id` (`kk_id`);

--
-- Indexes for table `komponen`
--
ALTER TABLE `komponen`
  ADD PRIMARY KEY (`komponen_id`),
  ADD KEY `kelkompo_id` (`kelkompo_id`);

--
-- Indexes for table `kuisdetail`
--
ALTER TABLE `kuisdetail`
  ADD PRIMARY KEY (`kuisdetail_id`),
  ADD KEY `kuismaster_id` (`kuismaster_id`),
  ADD KEY `pernyataan_id` (`pernyataan_id`),
  ADD KEY `nilai_id` (`nilai_id`);

--
-- Indexes for table `kuismaster`
--
ALTER TABLE `kuismaster`
  ADD PRIMARY KEY (`kuismaster_id`),
  ADD KEY `kgmaster_id2` (`kgmaster_id`),
  ADD KEY `nip3` (`nip`),
  ADD KEY `siswa_id` (`siswa_id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`nilai_id`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`periode_id`);

--
-- Indexes for table `pernyataan`
--
ALTER TABLE `pernyataan`
  ADD PRIMARY KEY (`pernyataan_id`),
  ADD KEY `komponen_id` (`komponen_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`siswa_id`),
  ADD KEY `kelas_id` (`kelas_id`);

--
-- Indexes for table `skor`
--
ALTER TABLE `skor`
  ADD PRIMARY KEY (`skor_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_user_guru` (`nip`),
  ADD KEY `FK_user_siswa` (`siswa_id`);

--
-- Indexes for table `user_visit_log`
--
ALTER TABLE `user_visit_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datadukung_kg`
--
ALTER TABLE `datadukung_kg`
  MODIFY `datadukung_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru_kelas`
--
ALTER TABLE `guru_kelas`
  MODIFY `gk_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kompetensi`
--
ALTER TABLE `kompetensi`
  MODIFY `kompetensi_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_visit_log`
--
ALTER TABLE `user_visit_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_assignment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_auth_item_group_code` FOREIGN KEY (`group_code`) REFERENCES `auth_item_group` (`code`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `datadukung_kg`
--
ALTER TABLE `datadukung_kg`
  ADD CONSTRAINT `kgdetail_id` FOREIGN KEY (`kgdetail_id`) REFERENCES `kg_detail` (`kgdetail_id`);

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `instansi_id` FOREIGN KEY (`instansi_id`) REFERENCES `instansi` (`instansi_id`);

--
-- Constraints for table `guru_kelas`
--
ALTER TABLE `guru_kelas`
  ADD CONSTRAINT `kelas_id2` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`kelas_id`),
  ADD CONSTRAINT `nip2` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`);

--
-- Constraints for table `indikator`
--
ALTER TABLE `indikator`
  ADD CONSTRAINT `kompetensi_id` FOREIGN KEY (`kompetensi_id`) REFERENCES `kompetensi` (`kompetensi_id`);

--
-- Constraints for table `kg_detail`
--
ALTER TABLE `kg_detail`
  ADD CONSTRAINT `indikator_id` FOREIGN KEY (`indikator_id`) REFERENCES `indikator` (`indikator_id`),
  ADD CONSTRAINT `kgmaster_id` FOREIGN KEY (`kgmaster_id`) REFERENCES `kg_master` (`kgmaster_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `skor_id` FOREIGN KEY (`skor_id`) REFERENCES `skor` (`skor_id`);

--
-- Constraints for table `kg_master`
--
ALTER TABLE `kg_master`
  ADD CONSTRAINT `nip` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`),
  ADD CONSTRAINT `periode_id` FOREIGN KEY (`periode_id`) REFERENCES `periode` (`periode_id`);

--
-- Constraints for table `kompetensi`
--
ALTER TABLE `kompetensi`
  ADD CONSTRAINT `kk_id` FOREIGN KEY (`kk_id`) REFERENCES `kelompok_kompetensi` (`kk_id`);

--
-- Constraints for table `komponen`
--
ALTER TABLE `komponen`
  ADD CONSTRAINT `kelkompo_id` FOREIGN KEY (`kelkompo_id`) REFERENCES `kelompok_komponen` (`kelkompo_id`);

--
-- Constraints for table `kuisdetail`
--
ALTER TABLE `kuisdetail`
  ADD CONSTRAINT `kuismaster_id` FOREIGN KEY (`kuismaster_id`) REFERENCES `kuismaster` (`kuismaster_id`),
  ADD CONSTRAINT `nilai_id` FOREIGN KEY (`nilai_id`) REFERENCES `nilai` (`nilai_id`),
  ADD CONSTRAINT `pernyataan_id` FOREIGN KEY (`pernyataan_id`) REFERENCES `pernyataan` (`pernyataan_id`);

--
-- Constraints for table `kuismaster`
--
ALTER TABLE `kuismaster`
  ADD CONSTRAINT `kgmaster_id2` FOREIGN KEY (`kgmaster_id`) REFERENCES `kg_master` (`kgmaster_id`),
  ADD CONSTRAINT `nip3` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`),
  ADD CONSTRAINT `siswa_id` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`siswa_id`);

--
-- Constraints for table `pernyataan`
--
ALTER TABLE `pernyataan`
  ADD CONSTRAINT `komponen_id` FOREIGN KEY (`komponen_id`) REFERENCES `komponen` (`komponen_id`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `kelas_id` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`kelas_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_user_guru` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`),
  ADD CONSTRAINT `FK_user_siswa` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`siswa_id`);

--
-- Constraints for table `user_visit_log`
--
ALTER TABLE `user_visit_log`
  ADD CONSTRAINT `user_visit_log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
