-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Mar 2018 pada 05.52
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kos_kontrakan`
--
CREATE DATABASE IF NOT EXISTS `kos_kontrakan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kos_kontrakan`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--
-- Pembuatan: 15 Des 2017 pada 04.15
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `ci_sessions`:
--

--
-- Truncate table before insert `ci_sessions`
--

TRUNCATE TABLE `ci_sessions`;
--
-- Dumping data untuk tabel `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('faef78e789c2d821cd79f5c0d1c343ff867353dd', '::1', 1518070231, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383037303232383b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b),
('b11b4f18989747b5f81004c9e0c6358f2bbcacfa', '::1', 1518071104, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383037303930313b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b6c6f675f757365726e616d657c733a31333a2261646d696e6973747261746f72223b6c6f675f70726576696c6167657c733a31333a2241646d696e6973747261746f72223b726573756c745f6164647c733a32333a224461746120626572686173696c20646973696d70616e2e223b5f5f63695f766172737c613a313a7b733a31303a22726573756c745f616464223b733a333a226f6c64223b7d),
('64c79accffb187f57a710bffd89c40d1a9649a12', '::1', 1518071833, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383037313538333b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b6c6f675f757365726e616d657c733a31333a2261646d696e6973747261746f72223b6c6f675f70726576696c6167657c733a31333a2241646d696e6973747261746f72223b726573756c745f6164647c733a32333a224461746120626572686173696c20646973696d70616e2e223b5f5f63695f766172737c613a313a7b733a31303a22726573756c745f616464223b733a333a226f6c64223b7d),
('90a71b08e66078d2207421615c412f83fb57e915', '::1', 1518072052, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383037313839323b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b6c6f675f757365726e616d657c733a31333a2261646d696e6973747261746f72223b6c6f675f70726576696c6167657c733a31333a2241646d696e6973747261746f72223b),
('884b65b61329bae98dcd88d16543cb331c3c9694', '::1', 1518073294, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383037333031363b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b6c6f675f757365726e616d657c733a31333a2261646d696e6973747261746f72223b6c6f675f70726576696c6167657c733a31333a2241646d696e6973747261746f72223b),
('e2931a79ae6d80f089288f5cb37b7f1bb02b25c3', '::1', 1518073634, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383037333333383b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b6c6f675f757365726e616d657c733a31333a2261646d696e6973747261746f72223b6c6f675f70726576696c6167657c733a31333a2241646d696e6973747261746f72223b),
('3baa179b77e8798768f151ab918c4b7d957c4281', '::1', 1518073844, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383037333638303b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b6c6f675f757365726e616d657c733a31333a2261646d696e6973747261746f72223b6c6f675f70726576696c6167657c733a31333a2241646d696e6973747261746f72223b),
('c55d218581b55e8c95e7fb77adf1310d9302c167', '::1', 1518073992, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383037333938373b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b6c6f675f757365726e616d657c733a31333a2261646d696e6973747261746f72223b6c6f675f70726576696c6167657c733a31333a2241646d696e6973747261746f72223b),
('fccc44bf30f171596618520b3a40684fdd4b65d4', '::1', 1518074752, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383037343537373b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b6c6f675f757365726e616d657c733a31333a2261646d696e6973747261746f72223b6c6f675f70726576696c6167657c733a31333a2241646d696e6973747261746f72223b),
('090d5db36504b882435f97980c00a91d401d3e60', '::1', 1518075341, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383037353134323b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b6c6f675f757365726e616d657c733a31333a2261646d696e6973747261746f72223b6c6f675f70726576696c6167657c733a31333a2241646d696e6973747261746f72223b),
('f4a2a206b5e0ae4b6880287baa81c65b292556fe', '::1', 1518075870, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383037353633383b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b6c6f675f757365726e616d657c733a31333a2261646d696e6973747261746f72223b6c6f675f70726576696c6167657c733a31333a2241646d696e6973747261746f72223b),
('7084d7197a932fc03d8f1f8403f34271951667d4', '::1', 1518076062, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383037353938353b6c6f675f757365727c733a31363a22726f6265727440676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b),
('2b4f14dd5d14be8cf6f3ca9a44ee6bf8e79079e6', '::1', 1518076963, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383037363636373b),
('98a62b408ef56d1589ed2d61d1b4ffa596479dbf', '::1', 1518077191, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383037363938383b),
('456cd4959435e990213e8bd0ac6c9a56bf049887', '::1', 1518077437, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383037373432393b),
('e4431eb825627c7c5570a4a4f01e346db3b00b5a', '::1', 1518078270, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383037373937333b),
('b944ab188bf7bc69205b7042ce64ca3334223279', '::1', 1518078288, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383037383238313b),
('61124d22e468add040312ce109c35af9eddae8d4', '::1', 1518082481, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383038323331383b6c6f675f757365727c733a31343a226162646940676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b),
('bf5d88d99e54c623f79f17d813d81f33469336eb', '::1', 1518083725, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383038333434303b6c6f675f757365727c733a31343a226162646940676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b),
('3ca88ebd5de8f61c12e785070738273527408217', '::1', 1518083990, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383038333734333b6c6f675f757365727c733a31343a226162646940676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b),
('cdd54999ab72e82daac46815a35d5af840034f25', '::1', 1518084346, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383038343034373b6c6f675f757365727c733a31343a226162646940676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b),
('f88a0a8ff76de30555cd97faad25f207268df89b', '::1', 1518084440, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383038343334383b6c6f675f757365727c733a31343a226162646940676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b),
('9fe76931f8bd6bef5cfe7c49fbe03d472dd37050', '::1', 1518085625, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383038353530393b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b),
('bea5d41b4d769e568cbff39e95b7b13dfbb6bf35', '::1', 1518085839, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383038353833393b),
('a8a6ac3e992cc6c9a014df7a6143b5b77cf80d4f', '::1', 1518086163, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383038363136333b),
('3e214ce4cd8cbfa132f7c493fe23a726356e4fc9', '::1', 1518086621, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383038363632313b),
('699345daec68bbf20f38a81b50e40d7fbc12ba55', '::1', 1518087423, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383038373133333b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b),
('11a264756aa2aeaf36460b39bf2685e8f6da95dd', '::1', 1518087588, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383038373538363b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b),
('698cdc517423c91202b48c8305cf5503aedd3655', '::1', 1518149721, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383134393433333b),
('20cc121957b876a75315d0c60fbabfc6cc959fa1', '::1', 1518150160, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383135303132343b),
('b7b1a3dda1de405b0f81dc044c6a84bbb4818ea9', '::1', 1518164424, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383136343432343b),
('987a225c27341b04b2838493d8b1ae21691f147f', '::1', 1518165144, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383136353134343b),
('839d446c215bfb0bf3a5b2f96e1c36fafaa43982', '::1', 1518169797, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383136393739373b),
('a2d4ffc156309c39a62ce04c75afbdf6edf1b1df', '::1', 1518170753, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383137303735333b),
('a9437654b1ef4bb7d8a460304f3b75635a77ecc7', '::1', 1518171521, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383137313530383b),
('3b9880cfcecfa51bd4bf1d13dba13de5c46e3982', '::1', 1518172220, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383137323231353b),
('51282624c9399865e835eeb053570e4b9f8c896f', '::1', 1518172909, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383137323930393b),
('240b4ec77a84c6c9d4f03ce926cc580adedc8ef9', '::1', 1518173367, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383137333336373b),
('be8d1c9a591b679472e51fe45abac6e5cf4e0f94', '::1', 1518174055, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383137333737303b6c6f675f757365727c733a31383a226b686f64696a616840676d61696c2e636f6d223b70726576696c6167657c733a343a2255736572223b6c6f676765645f696e7c623a313b),
('2487d5bc8e924de354cf8dca597452a7c3dc5c40', '::1', 1518243320, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383234333032393b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b),
('d9adb62ec41e82acea054d42d3af01e1f821230e', '::1', 1518244209, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383234343230393b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b),
('3797dc8582e14bc6061d8d8e298d0f20ff9fc823', '::1', 1518246065, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383234363036353b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b6c6f675f757365726e616d657c733a31333a2261646d696e6973747261746f72223b6c6f675f70726576696c6167657c733a31333a2241646d696e6973747261746f72223b),
('37e0b66b480f3ef8876e1c78df5ce078a0b49b0a', '::1', 1518247137, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383234363834313b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b6c6f675f757365726e616d657c733a31333a2261646d696e6973747261746f72223b6c6f675f70726576696c6167657c733a31333a2241646d696e6973747261746f72223b),
('b3557d62d892e961a2b86b0ccd431f1fa90bf26b', '::1', 1518247687, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383234373636343b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b6c6f675f757365726e616d657c733a31333a2261646d696e6973747261746f72223b6c6f675f70726576696c6167657c733a31333a2241646d696e6973747261746f72223b),
('e44d2673978ac07786fbc0de42e6a01780cd8ce5', '::1', 1518248703, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383234383439373b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b6c6f675f757365726e616d657c733a31333a2261646d696e6973747261746f72223b6c6f675f70726576696c6167657c733a31333a2241646d696e6973747261746f72223b),
('1250652219080792f9113c71ba5eb5332717fc80', '::1', 1518249163, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383234383837333b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b6c6f675f757365726e616d657c733a31333a2261646d696e6973747261746f72223b6c6f675f70726576696c6167657c733a31333a2241646d696e6973747261746f72223b),
('f475cb9ea2a226c3f83c1faf8349747ced93080e', '::1', 1518417016, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383431363938383b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b),
('7d8575b8cefa8e4791dc8392313fd8d94d85ea05', '::1', 1518418738, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383431383733383b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b),
('ece9808a9b57659e3953b15ee3a428a573a65693', '::1', 1518418924, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383431383733383b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b),
('a46ed13b2edfb5ece9a54daf12f332686a691e6c', '::1', 1518419449, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383431393434393b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b),
('6f6a2173a9febf3e4b68a742e112460691c88b29', '::1', 1518428668, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383432383633353b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b),
('325a0e49a92141c104f45b72cb8ed2b77fbcdd89', '::1', 1519372736, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531393337323730383b6c6f675f757365727c733a32303a226669726d616e7379616840676d61696c2e636f6d223b70726576696c6167657c733a393a2250656e67656c6f6c61223b6c6f676765645f696e7c623a313b);

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--
-- Pembuatan: 08 Jan 2018 pada 08.13
--

DROP TABLE IF EXISTS `desa`;
CREATE TABLE `desa` (
  `id_desa` int(11) NOT NULL,
  `nama_desa` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kota` text NOT NULL,
  `provinsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `desa`:
--

--
-- Truncate table before insert `desa`
--

TRUNCATE TABLE `desa`;
--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id_desa`, `nama_desa`, `kecamatan`, `kota`, `provinsi`) VALUES
(1, 'Bukit Duri', 'Tebet', 'Jakarta Selatan', 'DKI Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--
-- Pembuatan: 08 Jan 2018 pada 08.13
--

DROP TABLE IF EXISTS `fasilitas`;
CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` text NOT NULL,
  `value_fasilitas` int(1) NOT NULL,
  `icon_fasilitas` text NOT NULL,
  `kategori_fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `fasilitas`:
--

--
-- Truncate table before insert `fasilitas`
--

TRUNCATE TABLE `fasilitas`;
--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `value_fasilitas`, `icon_fasilitas`, `kategori_fasilitas`) VALUES
(1, 'Pasutri', 1, 'pasutri.png', 'Fasilitas Ruang'),
(2, 'Bed', 1, 'bed.png', 'Fasilitas Ruang'),
(3, 'Ruang AC', 1, 'ac.png', 'Fasilitas Ruang'),
(4, 'Almari Pakaian', 1, 'almari.png', 'Fasilitas Ruang'),
(6, 'TV', 1, 'tv.png', 'Fasilitas Ruang'),
(8, 'Meja Belajar ', 1, 'meja_belajar.png', 'Fasilitas Ruang'),
(9, 'Meja Rias', 1, 'meja_rias.png', 'Fasilitas Ruang'),
(10, 'Kursi Belajar', 1, 'kursi_belajar.png', 'Fasilitas Ruang'),
(11, 'Wifi', 1, 'wifi.png', 'Fasilitas Umum'),
(12, 'Cleaning Service', 1, 'cleaning_service.png', 'Fasilitas Umum'),
(13, 'Ruang Dapur', 1, 'r_dapur.png', 'Fasilitas Umum'),
(14, 'Ruang Jemur', 1, 'r_jemur.png', 'Fasilitas Umum'),
(15, 'Ruang Cuci', 1, 'r_cuci.png', 'Fasilitas Umum'),
(16, 'Ruang Tamu', 1, 'r_tamu.png', 'Fasilitas Ruang'),
(17, 'Ruang Keluarga', 1, 'r_keluarga.png', 'Fasilitas Ruang'),
(18, 'Ruang Santai', 1, 'r_santai.png', 'Fasilitas Ruang'),
(19, 'Scurity', 1, 'scurity.png', 'Fasilitas Umum'),
(20, 'Shower', 1, 'shower.png', 'Fasilitas MCK'),
(21, 'Taman', 1, 'taman.png', 'Fasilitas Umum'),
(22, 'Warung Makan/Restoran', 1, 'warmak.png', 'Fasilitas Lingkungan'),
(23, 'Wastafel', 1, 'wastafel.png', 'Fasilitas MCK'),
(24, 'Puskesmas/Apotik', 1, 'tv.png', 'Fasilitas Lingkungan'),
(25, 'Minimarket/Toko Klontong', 1, 'minimarket.png', 'Fasilitas Lingkungan'),
(26, 'Parkir Mobil', 1, 'park_mobil.png', 'Fasilitas Parkir'),
(27, 'Parkir Motor', 1, 'park_motor.png', 'Fasilitas Parkir'),
(28, 'Parkir Sepeda', 1, 'park_sepeda.png', 'Fasilitas Parkir'),
(29, 'Mall', 1, 'mall.png', 'Fasilitas Linmgkungan'),
(30, 'Masjid/Musholla', 1, 'masjid.png', 'Fasilitas Lingkungan'),
(31, 'ATM', 1, 'atm.png', 'Fasilitas Lingkungan'),
(32, 'Kampus/Sekolah', 1, 'kampus.png', 'Fasilitas Lingkungan'),
(33, 'Halte/Stasiun', 1, 'halte.png', 'Fasilitas Lingkungan'),
(34, 'Akses 24 Jam', 1, 'akses24j.png', 'Fasilitas Umum'),
(35, 'Dispenser', 1, 'dispenser.png', 'Fasilitas Ruang'),
(36, 'Kulkas', 1, 'kulkas.png', 'Fasilitas Ruang'),
(37, 'Balcon', 1, 'balcon.png', 'Fasilitas Umum'),
(38, 'CCTV', 1, 'cctv.png', 'Fasilitas Umum'),
(39, 'Air Panas', 1, 'air_panas.png', 'Fasilitas MCK'),
(40, 'Bak Mandi', 1, 'bak_mandi.png', 'Fasilitas MCK'),
(41, 'Kamar Mandi Dalam', 1, 'Kamar_mandi_dalam.png', 'Fasilitas MCK'),
(42, 'Kamar Mandi Luar', 1, 'kamar_mandi_luar.png', 'Fasilitas MCK'),
(43, 'Kloset Duduk', 1, 'Kloset_duduk.png', 'Fasilitas MCK'),
(44, 'Kloset Jongkok', 1, 'kloset_jongkok.png', 'Fasilitas MCK'),
(45, 'Listrik', 1, 'listrik.png', 'Fasilitas Umum'),
(46, 'Kipas Angin', 1, 'kipas_angin.png', 'Fasilitas Ruang'),
(47, 'Sekamar Berdua', 1, 'sekamar_berdua.png', 'Fasilitas Ruang'),
(48, 'Sekamar Bertiga', 1, 'sekamar_bertiga.png', 'Fasilitas Ruang'),
(49, 'Laundry', 1, 'laundry.png', 'Fasilitas Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `header_background`
--
-- Pembuatan: 08 Jan 2018 pada 08.13
--

DROP TABLE IF EXISTS `header_background`;
CREATE TABLE `header_background` (
  `id_background` int(3) NOT NULL,
  `background` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `header_background`:
--

--
-- Truncate table before insert `header_background`
--

TRUNCATE TABLE `header_background`;
--
-- Dumping data untuk tabel `header_background`
--

INSERT INTO `header_background` (`id_background`, `background`, `status`) VALUES
(1, 'Rumah-Kos1.jpg', 'active'),
(2, 'Rumah-Kos2.jpg', ''),
(3, 'Rumah-Kos3.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--
-- Pembuatan: 08 Jan 2018 pada 08.13
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE `invoice` (
  `id_invoice` int(11) NOT NULL,
  `id_sewa` int(11) NOT NULL,
  `metode_pembayaran` text NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `status_invoice` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `invoice`:
--

--
-- Truncate table before insert `invoice`
--

TRUNCATE TABLE `invoice`;
-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar_kos`
--
-- Pembuatan: 08 Jan 2018 pada 08.13
--

DROP TABLE IF EXISTS `kamar_kos`;
CREATE TABLE `kamar_kos` (
  `id_kamar_kos` int(11) NOT NULL,
  `id_rumah` int(11) NOT NULL,
  `no_kamar` int(4) NOT NULL,
  `status_kamar` int(1) NOT NULL COMMENT '1=ada penghuni',
  `status_aktif_kamar` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `kamar_kos`:
--

--
-- Truncate table before insert `kamar_kos`
--

TRUNCATE TABLE `kamar_kos`;
--
-- Dumping data untuk tabel `kamar_kos`
--

INSERT INTO `kamar_kos` (`id_kamar_kos`, `id_rumah`, `no_kamar`, `status_kamar`, `status_aktif_kamar`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 2, 1, 1),
(3, 1, 3, 1, 1),
(4, 1, 4, 1, 1),
(5, 1, 5, 0, 1),
(6, 2, 1, 1, 1),
(7, 2, 2, 0, 1),
(8, 2, 3, 0, 1),
(9, 2, 4, 1, 1),
(10, 2, 5, 0, 1),
(11, 2, 6, 0, 1),
(12, 2, 7, 0, 1),
(13, 2, 8, 0, 1),
(14, 2, 9, 0, 1),
(15, 2, 10, 0, 1),
(16, 4, 1, 0, 1),
(17, 5, 1, 0, 1),
(18, 5, 2, 0, 1),
(19, 5, 3, 0, 1),
(20, 5, 4, 0, 1),
(21, 5, 5, 0, 1),
(22, 5, 6, 0, 1),
(23, 5, 7, 0, 1),
(24, 5, 8, 0, 1),
(25, 5, 9, 0, 1),
(26, 5, 10, 0, 1),
(27, 5, 11, 0, 1),
(28, 5, 12, 0, 1),
(29, 8, 1, 0, 1),
(30, 8, 2, 0, 1),
(31, 8, 3, 0, 1),
(32, 8, 4, 0, 1),
(33, 8, 5, 0, 1),
(34, 8, 6, 0, 1),
(35, 8, 7, 0, 1),
(36, 8, 8, 0, 1),
(37, 8, 9, 0, 1),
(38, 8, 10, 0, 1),
(39, 8, 11, 0, 1),
(40, 8, 12, 0, 1),
(41, 8, 13, 0, 1),
(42, 8, 14, 0, 1),
(43, 8, 15, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketua_rt`
--
-- Pembuatan: 07 Feb 2018 pada 09.25
--

DROP TABLE IF EXISTS `ketua_rt`;
CREATE TABLE `ketua_rt` (
  `id_ketua_rt` int(11) NOT NULL,
  `id_rt` int(11) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tlp_user` varchar(13) NOT NULL,
  `alamat_user` text NOT NULL,
  `email_user` text NOT NULL,
  `jk_user` varchar(10) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `foto_user` text NOT NULL,
  `status_rt` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `ketua_rt`:
--

--
-- Truncate table before insert `ketua_rt`
--

TRUNCATE TABLE `ketua_rt`;
--
-- Dumping data untuk tabel `ketua_rt`
--

INSERT INTO `ketua_rt` (`id_ketua_rt`, `id_rt`, `nama_user`, `tempat_lahir`, `tgl_lahir`, `tlp_user`, `alamat_user`, `email_user`, `jk_user`, `username`, `password`, `foto_user`, `status_rt`) VALUES
(1, 1, 'Abdul Rozak', 'Jakarta', '1978-02-08', '0218787888', 'Jakarta', 'abdul_rozak@gmail.com', 'Laki-Laki', '123456', 'e10adc3949ba59abbe56e057f20f883e', '', 1),
(2, 2, 'Ahmad Zunkarnaen', 'Jakarta', '1970-02-07', '', '', '', '', '123457', 'f1887d3f9e6ee7a32fe5e76f4ab80d63', '', 0),
(3, 2, 'Hadi', 'Jakarta', '1969-01-30', '', '', '', '', '1234568', 'fe743d8d97aa7dfc6c93ccdc2e749513', '', 1),
(4, 3, 'Arya, S.H', 'Jakarta', '1980-02-07', '', '', '', '', '123459', '51f6f8fe03a390d3de50ad49913d4b66', '', 1),
(5, 4, 'Hamdal', 'Jakarta', '1978-08-15', '', '', '', '', '123460', '2a4580ee18f163a2458a87bba7d9d743', '', 1),
(6, 5, 'Abdul Boim', 'Jakarta', '1978-10-10', '', '', '', '', '123461', '3ad3eb6695d1443bdd674db109b5866f', '', 1),
(7, 6, 'Ardiansyah', 'Jakarta', '1976-11-13', '', '', '', '', '123462', '85668a5d527f9c145b940c26310f7270', '', 1),
(8, 7, 'Baehaki, S.pd', 'Jakarta', '1981-05-16', '', '', '', '', '1233456', '8017d0408f41b75489701e3fb1c3e773', '', 1),
(9, 8, 'Hardiansyah, S.pd', 'Jakarta', '1989-04-04', '', '', '', '', '1234520', 'bac0b68854f1d018249bf05b07f4fbd6', '', 1),
(10, 9, 'Abdul Hamid', 'Jakarta', '1985-01-10', '', '', '', '', '12344521', 'cc03818718ac2f06c6605f39b6d79f9d', '', 1),
(11, 10, 'Rudi Hardiansyah', 'Jakarta', '1973-05-09', '', '', '', '', '1234522', 'f2e2bebac59ea3c4376ecc05dbc73e7a', '', 1),
(12, 11, 'Benyamin bin Suaeb', 'Jakarta', '1970-01-29', '', '', '', '', '123490', '8b2bce38439e607a1a75f6fc439a4655', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--
-- Pembuatan: 15 Jan 2018 pada 06.15
--

DROP TABLE IF EXISTS `komentar`;
CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `descript` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `komentar`:
--

--
-- Truncate table before insert `komentar`
--

TRUNCATE TABLE `komentar`;
--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `full_name`, `phone`, `email`, `descript`) VALUES
(1, 'a', '0', 'a', 'Mohon fiture chat diadakan di web ini. Terima kasih'),
(2, 'Agus Fahrurroji', '081542219834', 'agusfahrurroji@gmail.com', 'Mohon fiture chat diadakan di web ini. Terima kasih.'),
(3, 'Agus Fahrurroji', '081542219834', 'agusfahrurroji@gmail.com', 'HELLO'),
(4, 'Agus Fahrurroji', '081542219834', 'agusfahrurroji@gmail.com', 'HELLO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--
-- Pembuatan: 08 Jan 2018 pada 08.13
--

DROP TABLE IF EXISTS `laporan`;
CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_rumah` int(11) NOT NULL,
  `isi_laporan` text NOT NULL,
  `tgl_laporan` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `laporan`:
--

--
-- Truncate table before insert `laporan`
--

TRUNCATE TABLE `laporan`;
-- --------------------------------------------------------

--
-- Struktur dari tabel `pelaporan`
--
-- Pembuatan: 10 Jan 2018 pada 06.46
--

DROP TABLE IF EXISTS `pelaporan`;
CREATE TABLE `pelaporan` (
  `id_laporan` int(11) NOT NULL,
  `id_rumah` int(11) NOT NULL,
  `foto_unmatch` int(1) DEFAULT NULL,
  `alamat_unmatch` int(1) DEFAULT NULL,
  `tlp_unmatch` int(1) DEFAULT NULL,
  `harga_unmatch` int(1) DEFAULT NULL,
  `fasilitas_unmatch` int(1) DEFAULT NULL,
  `isi_laporan` text,
  `tgl_laporan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `pelaporan`:
--

--
-- Truncate table before insert `pelaporan`
--

TRUNCATE TABLE `pelaporan`;
--
-- Dumping data untuk tabel `pelaporan`
--

INSERT INTO `pelaporan` (`id_laporan`, `id_rumah`, `foto_unmatch`, `alamat_unmatch`, `tlp_unmatch`, `harga_unmatch`, `fasilitas_unmatch`, `isi_laporan`, `tgl_laporan`, `id_user`) VALUES
(4, 2, 1, 0, 0, 0, 0, '', '2018-02-06 08:22:08', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik`
--
-- Pembuatan: 08 Jan 2018 pada 08.13
--

DROP TABLE IF EXISTS `pemilik`;
CREATE TABLE `pemilik` (
  `id_pemilik` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_rumah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `pemilik`:
--

--
-- Truncate table before insert `pemilik`
--

TRUNCATE TABLE `pemilik`;
--
-- Dumping data untuk tabel `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `id_user`, `id_rumah`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 8, 6),
(7, 7, 7),
(8, 7, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghuni_kamar`
--
-- Pembuatan: 08 Jan 2018 pada 08.13
--

DROP TABLE IF EXISTS `penghuni_kamar`;
CREATE TABLE `penghuni_kamar` (
  `id_penghuni_kamar` int(11) NOT NULL,
  `id_sewa_kamar` int(11) NOT NULL,
  `id_kamar_kos` int(11) NOT NULL,
  `nama_penghuni_lain` varchar(25) NOT NULL,
  `ktp_penghuni_lain` varchar(16) NOT NULL,
  `alamat_penghuni_lain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `penghuni_kamar`:
--

--
-- Truncate table before insert `penghuni_kamar`
--

TRUNCATE TABLE `penghuni_kamar`;
--
-- Dumping data untuk tabel `penghuni_kamar`
--

INSERT INTO `penghuni_kamar` (`id_penghuni_kamar`, `id_sewa_kamar`, `id_kamar_kos`, `nama_penghuni_lain`, `ktp_penghuni_lain`, `alamat_penghuni_lain`) VALUES
(1, 3, 2, 'Lastri', '333212312444', 'Jakarta');

--
-- Trigger `penghuni_kamar`
--
DROP TRIGGER IF EXISTS `del_penghuni_kamar`;
DELIMITER $$
CREATE TRIGGER `del_penghuni_kamar` BEFORE DELETE ON `penghuni_kamar` FOR EACH ROW UPDATE sewa_kamar set jml_penghuni=jml_penghuni-1 WHERE id_sewa_kamar=old.id_sewa_kamar and id_kamar_kos=old.id_kamar_kos
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `insert_penghuni_kamar`;
DELIMITER $$
CREATE TRIGGER `insert_penghuni_kamar` BEFORE INSERT ON `penghuni_kamar` FOR EACH ROW UPDATE sewa_kamar set jml_penghuni=jml_penghuni+1 WHERE id_sewa_kamar=new.id_sewa_kamar and id_kamar_kos=new.id_kamar_kos
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghuni_kontrakan`
--
-- Pembuatan: 08 Jan 2018 pada 08.13
--

DROP TABLE IF EXISTS `penghuni_kontrakan`;
CREATE TABLE `penghuni_kontrakan` (
  `id_penghuni_kontrakan` int(11) NOT NULL,
  `id_sewa_kontrakan` int(11) NOT NULL,
  `id_rumah_kontrakan` int(11) NOT NULL,
  `nama_penghuni_lain` varchar(25) NOT NULL,
  `ktp_penghuni_lain` text NOT NULL,
  `alamat_penghuni_lain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `penghuni_kontrakan`:
--

--
-- Truncate table before insert `penghuni_kontrakan`
--

TRUNCATE TABLE `penghuni_kontrakan`;
--
-- Trigger `penghuni_kontrakan`
--
DROP TRIGGER IF EXISTS `del_penghuni_kontrakan`;
DELIMITER $$
CREATE TRIGGER `del_penghuni_kontrakan` BEFORE DELETE ON `penghuni_kontrakan` FOR EACH ROW UPDATE sewa_kontrakan set jml_penghuni=jml_penghuni-1 WHERE id_sewa_kontrakan=old.id_sewa_kontrakan and id_rumah_kontrakan=old.id_rumah_kontrakan
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `insert_penghuni_kontrakan`;
DELIMITER $$
CREATE TRIGGER `insert_penghuni_kontrakan` BEFORE INSERT ON `penghuni_kontrakan` FOR EACH ROW UPDATE sewa_kontrakan set jml_penghuni=jml_penghuni+1 WHERE id_sewa_kontrakan=new.id_sewa_kontrakan and id_rumah_kontrakan=new.id_rumah_kontrakan
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `penyewa_kontrakan`
--
DROP VIEW IF EXISTS `penyewa_kontrakan`;
CREATE TABLE `penyewa_kontrakan` (
`id_rumah_kontrakan` int(11)
,`status_sewa` int(1)
,`id_sewa_kontrakan` int(11)
,`jml_penghuni` int(2)
,`cek_in` datetime
,`cek_out` datetime
,`keterangan_penghuni` text
,`id_user` int(11)
,`nama_user` varchar(25)
,`tlp_user` varchar(13)
,`alamat_user` text
,`kartu_identitas` text
,`ktp_user` text
,`kitas_user` text
,`paspor_user` text
,`no_kk_user` varchar(16)
,`username` varchar(50)
,`password` text
,`jk_user` varchar(10)
,`foto_user` text
,`email_user` text
,`previlage_user` text
,`no_rumah` int(3)
,`id_rumah` int(11)
,`nama_rumah` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `penyewa_kos`
--
DROP VIEW IF EXISTS `penyewa_kos`;
CREATE TABLE `penyewa_kos` (
`id_kamar_kos` int(11)
,`status_sewa` int(1)
,`id_sewa_kamar` int(11)
,`jml_penghuni` int(2)
,`cek_in` datetime
,`cek_out` datetime
,`keterangan_penghuni` text
,`id_user` int(11)
,`nama_user` varchar(25)
,`tlp_user` varchar(13)
,`alamat_user` text
,`kartu_identitas` text
,`ktp_user` text
,`kitas_user` text
,`paspor_user` text
,`no_kk_user` varchar(16)
,`username` varchar(50)
,`password` text
,`jk_user` varchar(10)
,`foto_user` text
,`email_user` text
,`previlage_user` text
,`no_kamar` int(4)
,`id_rumah` int(11)
,`nama_rumah` varchar(25)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi_fasilitas`
--
-- Pembuatan: 08 Jan 2018 pada 08.13
--

DROP TABLE IF EXISTS `relasi_fasilitas`;
CREATE TABLE `relasi_fasilitas` (
  `id_relasi` int(11) NOT NULL,
  `id_rumah` int(11) NOT NULL,
  `id_fasilitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `relasi_fasilitas`:
--

--
-- Truncate table before insert `relasi_fasilitas`
--

TRUNCATE TABLE `relasi_fasilitas`;
--
-- Dumping data untuk tabel `relasi_fasilitas`
--

INSERT INTO `relasi_fasilitas` (`id_relasi`, `id_rumah`, `id_fasilitas`) VALUES
(3, 2, 3),
(4, 2, 4),
(5, 2, 1),
(6, 2, 2),
(7, 3, 1),
(8, 3, 2),
(9, 3, 3),
(10, 3, 4),
(11, 3, 6),
(12, 3, 8),
(13, 3, 9),
(14, 3, 10),
(15, 3, 13),
(16, 3, 14),
(17, 3, 26),
(18, 3, 22),
(19, 3, 40),
(20, 3, 41),
(21, 3, 44),
(42, 4, 11),
(43, 4, 13),
(44, 4, 14),
(45, 4, 34),
(46, 4, 49),
(47, 4, 1),
(48, 4, 2),
(49, 4, 3),
(50, 4, 4),
(51, 4, 8),
(52, 4, 47),
(53, 4, 40),
(54, 4, 41),
(55, 4, 44),
(56, 4, 27),
(57, 4, 24),
(58, 4, 25),
(59, 4, 30),
(60, 4, 31),
(61, 1, 11),
(62, 1, 14),
(63, 1, 34),
(64, 1, 37),
(65, 1, 38),
(66, 1, 1),
(67, 1, 2),
(68, 1, 3),
(69, 1, 8),
(70, 1, 10),
(71, 1, 20),
(72, 1, 40),
(73, 1, 43),
(74, 1, 26),
(75, 1, 27),
(76, 1, 22),
(77, 1, 25),
(78, 1, 30),
(79, 1, 31),
(80, 2, 14),
(81, 2, 34),
(82, 2, 45),
(83, 2, 40),
(84, 2, 41),
(85, 2, 44),
(88, 2, 26),
(89, 2, 27),
(90, 2, 28),
(91, 2, 24),
(92, 2, 25),
(93, 2, 30),
(94, 2, 31),
(95, 5, 14),
(96, 5, 34),
(97, 5, 37),
(98, 5, 38),
(99, 5, 45),
(100, 5, 2),
(101, 5, 3),
(102, 5, 4),
(103, 5, 8),
(104, 5, 10),
(105, 5, 47),
(110, 5, 26),
(111, 5, 27),
(112, 5, 33),
(113, 5, 40),
(114, 5, 41),
(115, 5, 44),
(116, 6, 13),
(117, 6, 14),
(118, 6, 15),
(119, 6, 21),
(120, 6, 34),
(121, 6, 37),
(122, 6, 1),
(123, 6, 2),
(124, 6, 3),
(125, 6, 4),
(126, 6, 6),
(127, 6, 8),
(128, 6, 9),
(129, 6, 10),
(130, 6, 16),
(131, 6, 17),
(132, 6, 18),
(133, 6, 35),
(134, 6, 36),
(135, 6, 20),
(136, 6, 23),
(137, 6, 40),
(138, 6, 41),
(139, 6, 43),
(140, 6, 26),
(141, 6, 27),
(142, 6, 33),
(143, 7, 13),
(144, 7, 14),
(145, 7, 15),
(146, 7, 21),
(147, 7, 37),
(148, 7, 1),
(149, 7, 2),
(150, 7, 3),
(151, 7, 4),
(152, 7, 6),
(153, 7, 8),
(154, 7, 9),
(155, 7, 10),
(156, 7, 17),
(157, 7, 18),
(158, 7, 35),
(159, 7, 48),
(160, 7, 20),
(161, 7, 23),
(162, 7, 40),
(163, 7, 41),
(164, 7, 43),
(165, 7, 26),
(166, 7, 27),
(167, 7, 31),
(168, 8, 11),
(169, 8, 14),
(170, 8, 21),
(171, 8, 34),
(172, 8, 37),
(173, 8, 38),
(174, 8, 45),
(175, 8, 2),
(176, 8, 3),
(177, 8, 4),
(178, 8, 6),
(179, 8, 8),
(180, 8, 9),
(181, 8, 10),
(182, 8, 18),
(183, 8, 35),
(184, 8, 20),
(185, 8, 23),
(186, 8, 40),
(187, 8, 41),
(188, 8, 43),
(189, 8, 26),
(190, 8, 27),
(191, 8, 33);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt`
--
-- Pembuatan: 07 Feb 2018 pada 09.24
--

DROP TABLE IF EXISTS `rt`;
CREATE TABLE `rt` (
  `id_rt` int(11) NOT NULL,
  `rt` int(3) NOT NULL,
  `rw` int(3) NOT NULL,
  `id_desa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `rt`:
--

--
-- Truncate table before insert `rt`
--

TRUNCATE TABLE `rt`;
--
-- Dumping data untuk tabel `rt`
--

INSERT INTO `rt` (`id_rt`, `rt`, `rw`, `id_desa`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 1),
(3, 3, 1, 1),
(4, 4, 1, 1),
(5, 5, 1, 1),
(6, 6, 1, 1),
(7, 7, 1, 1),
(8, 8, 1, 1),
(9, 1, 2, 1),
(10, 2, 2, 1),
(11, 3, 2, 1),
(12, 4, 2, 1),
(13, 5, 2, 1),
(14, 6, 2, 1),
(15, 1, 3, 1),
(16, 2, 3, 1),
(17, 3, 3, 1),
(18, 4, 3, 1),
(19, 5, 3, 1),
(20, 6, 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah_kontrakan`
--
-- Pembuatan: 08 Jan 2018 pada 08.13
--

DROP TABLE IF EXISTS `rumah_kontrakan`;
CREATE TABLE `rumah_kontrakan` (
  `id_rumah_kontrakan` int(11) NOT NULL,
  `no_rumah` int(3) NOT NULL,
  `id_rumah` int(11) NOT NULL,
  `jml_kamar` int(1) NOT NULL,
  `status_kontrakan` int(1) NOT NULL COMMENT '1=ada penghuni',
  `status_aktif_kontrakan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `rumah_kontrakan`:
--

--
-- Truncate table before insert `rumah_kontrakan`
--

TRUNCATE TABLE `rumah_kontrakan`;
--
-- Dumping data untuk tabel `rumah_kontrakan`
--

INSERT INTO `rumah_kontrakan` (`id_rumah_kontrakan`, `no_rumah`, `id_rumah`, `jml_kamar`, `status_kontrakan`, `status_aktif_kontrakan`) VALUES
(1, 1, 3, 2, 1, 1),
(2, 1, 6, 2, 0, 1),
(3, 1, 7, 2, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah_sewa`
--
-- Pembuatan: 31 Jan 2018 pada 03.07
--

DROP TABLE IF EXISTS `rumah_sewa`;
CREATE TABLE `rumah_sewa` (
  `id_rumah` int(11) NOT NULL,
  `nama_rumah` varchar(25) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `tlp_rumah` varchar(13) NOT NULL,
  `no_whatsapp` varchar(13) NOT NULL,
  `id_rt` int(11) NOT NULL,
  `imb_rumah` text NOT NULL,
  `kategori_rumah` text NOT NULL,
  `foto_1` text NOT NULL,
  `foto_2` text NOT NULL,
  `foto_3` text NOT NULL,
  `foto_4` text NOT NULL,
  `harga_perhari` int(9) NOT NULL,
  `harga_perbulan` int(9) NOT NULL,
  `harga_pertahun` int(9) NOT NULL,
  `listrik` int(1) NOT NULL,
  `deskripsi_rumah` text NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status_rumah` int(1) NOT NULL,
  `tgl_publish` date NOT NULL,
  `status_delete_rumah` int(1) NOT NULL,
  `tgl_delete` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `rumah_sewa`:
--

--
-- Truncate table before insert `rumah_sewa`
--

TRUNCATE TABLE `rumah_sewa`;
--
-- Dumping data untuk tabel `rumah_sewa`
--

INSERT INTO `rumah_sewa` (`id_rumah`, `nama_rumah`, `alamat_rumah`, `tlp_rumah`, `no_whatsapp`, `id_rt`, `imb_rumah`, `kategori_rumah`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `harga_perhari`, `harga_perbulan`, `harga_pertahun`, `listrik`, `deskripsi_rumah`, `tgl_update`, `status_rumah`, `tgl_publish`, `status_delete_rumah`, `tgl_delete`) VALUES
(1, 'Kost Asmiarti', 'Jl. Lapangan Ros 1                            ', '0217684456', '081544343487', 1, '6640/IMB/e/2015', 'Rumah_Kos', 'Rumah_Kos_id_1_part_12.jpg', 'Rumah_Kos_id_1_part_21.jpg', 'Rumah_Kos_id_1_part_31.jpg', 'Rumah_Kos_id_1_part_41.jpg', 0, 800000, 9300000, 1, '', '2018-02-08 04:26:44', 1, '0000-00-00', 0, '0000-00-00'),
(2, 'Le Green Suite', 'Jl. Tebet timur dalam II                            ', '0217686767', '081544343487', 2, '5431/IMB/e/2016', 'Rumah_Kos', 'Rumah_Kos_id_2_part_11.jpg', 'Rumah_Kos_id_2_part_2.jpg', 'Rumah_Kos_id_2_part_3.jpg', 'Rumah_Kos_id_2_part_4.jpg', 100000, 1500000, 16000000, 0, '', '2018-02-08 04:58:50', 1, '0000-00-00', 0, '0000-00-00'),
(3, 'Kontrakan', 'Jl Lapangan Ros 3 No.8, RT/RW 01/01, Bukit duri, Tebet, Jakarta Selatan                              ', '0217689854', '081544343487', 1, '5433/IMB/e/2014', 'Kontrakan', 'Kontrakan_id_3_part_1.jpg', 'Kontrakan_id_3_part_2.jpg', 'Kontrakan_id_3_part_3.jpg', 'Kontrakan_id_3_part_4.jpg', 0, 3000000, 33000000, 0, 'Lokasi tidak jauh dari taman kota', '2018-01-31 03:07:57', 1, '0000-00-00', 0, '0000-00-00'),
(4, 'Imanuel Kos', 'Jl. Rose 1, RT.02/Rw.01, Bukit duri, Jakarta Selatan                                                        ', '0217689851', '081544343487', 2, '3432/IMB/e/2013', 'Rumah_Kos', 'Rumah_Kos_id_4_part_1.jpg', 'Rumah_Kos_id_4_part_2.jpg', 'Rumah_Kos_id_4_part_3.jpg', 'Rumah_Kos_id_4_part_4.jpg', 0, 1500000, 0, 0, 'Luas kamar 4x6m2<br>', '2018-01-31 03:08:16', 1, '0000-00-00', 1, '2017-12-24'),
(5, 'Kost H. Amin', 'Jl. Tebet dalam II                                                                                    ', '0218787876', '081521137683', 2, '4440/IMB/e/2015', 'Rumah_Kos', 'Rumah_Kos_id_5_part_1.jpg', 'Rumah_Kos_id_5_part_2.jpg', 'Rumah_Kos_id_5_part_3.jpeg', 'Rumah_Kos_id_5_part_4.jpg', 0, 1500000, 0, 1, '', '2018-02-08 07:35:40', 1, '2018-02-08', 0, '0000-00-00'),
(6, 'Kontrakan H. Bambang', 'Jalan Saawo Kecik 5', '0218787654', '081548876539', 5, '6756/IMB/e/2013', 'Kontrakan', 'Kontrakan_id_6_part_1.jpg', 'Kontrakan_id_6_part_2.jpg', 'Kontrakan_id_6_part_3.jpg', 'Kontrakan_id_6_part_4.jpg', 0, 0, 20000000, 0, '', '2018-02-08 07:56:14', 1, '2018-02-08', 0, '0000-00-00'),
(7, 'Abdi Kontrakan', 'Jalan Bukit Duri Timur', '0218787987', '0819877635767', 11, '7784/IMB/e/2013', 'Kontrakan', 'Kontrakan_id_7_part_1.jpg', 'Kontrakan_id_7_part_2.jpg', 'Kontrakan_id_7_part_3.jpg', 'Kontrakan_id_7_part_4.jpg', 0, 0, 21000000, 0, '', '2018-02-08 09:55:22', 1, '2018-02-08', 0, '0000-00-00'),
(8, 'Abdi Kos', 'Jalan Buklit Duri Timur', '0218787878', '081548878775', 5, '6563/IMB/e/2012', 'Rumah_Kos', 'Rumah_Kos_id_8_part_1.jpg', 'Rumah_Kos_id_8_part_2.jpg', 'Rumah_Kos_id_8_part_3.jpg', 'Rumah_Kos_id_8_part_4.jpg', 0, 1500000, 0, 1, '', '2018-02-08 10:06:14', 1, '2018-02-08', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa_kamar`
--
-- Pembuatan: 23 Jan 2018 pada 07.16
--

DROP TABLE IF EXISTS `sewa_kamar`;
CREATE TABLE `sewa_kamar` (
  `id_sewa_kamar` int(11) NOT NULL,
  `id_kamar_kos` int(11) NOT NULL,
  `cek_in` datetime NOT NULL,
  `cek_out` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis_sewa` varchar(10) NOT NULL,
  `jml_penghuni` int(2) NOT NULL,
  `keterangan_penghuni` text NOT NULL,
  `status_sewa` int(1) NOT NULL COMMENT '1=sewa aktif; 0=Sewa Tidak Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `sewa_kamar`:
--

--
-- Truncate table before insert `sewa_kamar`
--

TRUNCATE TABLE `sewa_kamar`;
--
-- Dumping data untuk tabel `sewa_kamar`
--

INSERT INTO `sewa_kamar` (`id_sewa_kamar`, `id_kamar_kos`, `cek_in`, `cek_out`, `id_user`, `jenis_sewa`, `jml_penghuni`, `keterangan_penghuni`, `status_sewa`) VALUES
(1, 1, '2017-12-28 00:00:00', '2017-12-29 00:00:00', 3, 'Bulanan', 1, '', 1),
(2, 2, '2018-01-04 00:00:00', '2018-02-04 00:00:00', 3, 'Bulanan', 1, '', 0),
(3, 2, '2018-01-05 00:00:00', '2018-02-05 00:00:00', 3, 'Bulanan', 2, '', 1),
(4, 3, '2018-01-06 00:00:00', '2018-02-06 00:00:00', 3, 'Bulanan', 1, '', 1),
(5, 4, '2018-02-01 00:00:00', '2018-03-01 00:00:00', 3, 'Bulanan', 1, '', 1),
(6, 6, '2018-01-01 00:00:00', '2018-02-01 00:00:00', 3, 'Bulanan', 1, '', 1),
(7, 9, '2018-02-01 00:00:00', '2018-03-01 00:00:00', 3, 'Bulanan', 1, '<i></i>', 1),
(8, 7, '2018-01-23 00:00:00', '2018-02-23 00:00:00', 4, 'Bulanan', 0, '', 0);

--
-- Trigger `sewa_kamar`
--
DROP TRIGGER IF EXISTS `sewa_kos`;
DELIMITER $$
CREATE TRIGGER `sewa_kos` BEFORE INSERT ON `sewa_kamar` FOR EACH ROW UPDATE kamar_kos set status_kamar=new.status_sewa WHERE id_kamar_kos=new.id_kamar_kos
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `un_sewa_kos`;
DELIMITER $$
CREATE TRIGGER `un_sewa_kos` BEFORE UPDATE ON `sewa_kamar` FOR EACH ROW UPDATE kamar_kos SET status_kamar=new.status_sewa WHERE id_kamar_kos=old.id_kamar_kos
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa_kontrakan`
--
-- Pembuatan: 23 Jan 2018 pada 07.24
--

DROP TABLE IF EXISTS `sewa_kontrakan`;
CREATE TABLE `sewa_kontrakan` (
  `id_sewa_kontrakan` int(11) NOT NULL,
  `id_rumah_kontrakan` int(11) NOT NULL,
  `cek_in` datetime NOT NULL,
  `cek_out` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis_sewa` varchar(10) NOT NULL,
  `jml_penghuni` int(2) NOT NULL,
  `keterangan_penghuni` text NOT NULL,
  `status_sewa` int(1) NOT NULL COMMENT '1=sewa aktif; 0=Sewa Tidak Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `sewa_kontrakan`:
--

--
-- Truncate table before insert `sewa_kontrakan`
--

TRUNCATE TABLE `sewa_kontrakan`;
--
-- Dumping data untuk tabel `sewa_kontrakan`
--

INSERT INTO `sewa_kontrakan` (`id_sewa_kontrakan`, `id_rumah_kontrakan`, `cek_in`, `cek_out`, `id_user`, `jenis_sewa`, `jml_penghuni`, `keterangan_penghuni`, `status_sewa`) VALUES
(1, 1, '2018-01-04 09:00:00', '2018-02-04 09:00:00', 3, 'Tahunan', 1, '', 0),
(2, 1, '2018-01-06 00:00:00', '2018-02-06 00:00:00', 3, 'Tahunan', 1, '', 1);

--
-- Trigger `sewa_kontrakan`
--
DROP TRIGGER IF EXISTS `sewa_kontrakan`;
DELIMITER $$
CREATE TRIGGER `sewa_kontrakan` BEFORE INSERT ON `sewa_kontrakan` FOR EACH ROW UPDATE rumah_kontrakan SET status_kontrakan=new.status_sewa WHERE id_rumah_kontrakan=new.id_rumah_kontrakan
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `un_sewa_kontrakan`;
DELIMITER $$
CREATE TRIGGER `un_sewa_kontrakan` BEFORE UPDATE ON `sewa_kontrakan` FOR EACH ROW UPDATE rumah_kontrakan SET status_kontrakan=new.status_sewa WHERE id_rumah_kontrakan=old.id_rumah_kontrakan
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `survei`
--
-- Pembuatan: 06 Feb 2018 pada 09.58
--

DROP TABLE IF EXISTS `survei`;
CREATE TABLE `survei` (
  `id_survei` int(11) NOT NULL,
  `id_rumah` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_survei` date NOT NULL,
  `jam_survei` time NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `survei`:
--

--
-- Truncate table before insert `survei`
--

TRUNCATE TABLE `survei`;
--
-- Dumping data untuk tabel `survei`
--

INSERT INTO `survei` (`id_survei`, `id_rumah`, `id_user`, `tgl_survei`, `jam_survei`, `pesan`) VALUES
(1, 1, 3, '2018-03-01', '17:30:00', 'Aku ingin lihat kos an nya dulu yah...');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--
-- Pembuatan: 31 Jan 2018 pada 03.07
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `tlp_user` varchar(13) NOT NULL,
  `alamat_user` text NOT NULL,
  `kartu_identitas` text NOT NULL,
  `ktp_user` text NOT NULL,
  `kitas_user` text NOT NULL,
  `paspor_user` text NOT NULL,
  `no_kk_user` varchar(16) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `jk_user` varchar(10) NOT NULL,
  `foto_user` text NOT NULL,
  `email_user` text NOT NULL,
  `previlage_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELASI UNTUK TABEL `user`:
--

--
-- Truncate table before insert `user`
--

TRUNCATE TABLE `user`;
--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `tlp_user`, `alamat_user`, `kartu_identitas`, `ktp_user`, `kitas_user`, `paspor_user`, `no_kk_user`, `username`, `password`, `jk_user`, `foto_user`, `email_user`, `previlage_user`) VALUES
(1, 'Firmansyah', '081544343487', 'Jakarta', '', '', '', '', '', 'firmansyah@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Laki-Laki', 'user_1.jpg', 'firmansyah@gmail.com', 'Pengelola'),
(3, 'Khodijah', '081564353569', 'Jakarta', 'KTP', '33020398392898', '', '', '', 'khodijah@gmail.com', '202cb962ac59075b964b07152d234b70', 'Perempuan', '', 'khodijah@gmail.com', 'User'),
(4, 'Lukman Hakim', '0218787895', 'Jakarta', 'KTP', '12213321312', '-', '-', '13443412312', 'lukman@gmail.com', '202cb962ac59075b964b07152d234b70', 'Laki-Laki', '', 'lukman@gmail.com', 'User'),
(5, 'Administrator', '0218787895', 'Jakarta', '', '', '', '', '', 'administrator', '21232f297a57a5a743894a0e4a801fc3', 'Perempuan', 'user_5.jpg', 'admin@rb.com', 'Administrator'),
(6, 'Andre', '0218787895', 'Jakarta', '', '33343234234234', '', '', '33343234234230', 'andre@gmail.com', '202cb962ac59075b964b07152d234b70', 'Laki-Laki', '', 'andre@gmail.com', 'Pengelola'),
(7, 'abdi', '081544343434', 'Jakarta', '', '303455646575695', '', '', '303455646575690', 'abdi@gmail.com', '202cb962ac59075b964b07152d234b70', 'Laki-Laki', '', 'abdi@gmail.com', 'Pengelola'),
(8, 'robert', '081544343467', 'Jakarta', '', '3034556465756', '', '', '3034556465748', 'robert@gmail.com', '202cb962ac59075b964b07152d234b70', 'Laki-Laki', '', 'robert@gmail.com', 'Pengelola');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_fasilitas`
--
DROP VIEW IF EXISTS `view_fasilitas`;
CREATE TABLE `view_fasilitas` (
`id_fasilitas` int(11)
,`nama_fasilitas` text
,`value_fasilitas` int(1)
,`icon_fasilitas` text
,`kategori_fasilitas` text
,`id_rumah` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_kontrakan`
--
DROP VIEW IF EXISTS `view_kontrakan`;
CREATE TABLE `view_kontrakan` (
`id_rumah` int(11)
,`nama_rumah` varchar(25)
,`alamat_rumah` text
,`id_rt` int(11)
,`rt` int(3)
,`rw` int(3)
,`id_desa` int(11)
,`nama_desa` text
,`kecamatan` text
,`kota` text
,`provinsi` text
,`id_ketua_rt` int(11)
,`ketua_rt` varchar(25)
,`username` text
,`password` text
,`foto` text
,`imb_rumah` text
,`kategori_rumah` text
,`foto_1` text
,`foto_2` text
,`foto_3` text
,`foto_4` text
,`status_rumah` int(1)
,`harga_perhari` int(9)
,`harga_perbulan` int(9)
,`harga_pertahun` int(9)
,`listrik` int(1)
,`tlp_rumah` varchar(13)
,`no_whatsapp` varchar(13)
,`deskripsi_rumah` text
,`status_delete_rumah` int(1)
,`tgl_delete` date
,`tgl_update` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_kos`
--
DROP VIEW IF EXISTS `view_kos`;
CREATE TABLE `view_kos` (
`id_rumah` int(11)
,`nama_rumah` varchar(25)
,`alamat_rumah` text
,`status_rumah` int(1)
,`id_rt` int(11)
,`rt` int(3)
,`rw` int(3)
,`id_desa` int(11)
,`nama_desa` text
,`kecamatan` text
,`kota` text
,`provinsi` text
,`id_ketua_rt` int(11)
,`ketua_rt` varchar(25)
,`username` text
,`password` text
,`foto` text
,`imb_rumah` text
,`kategori_rumah` text
,`foto_1` text
,`foto_2` text
,`foto_3` text
,`foto_4` text
,`harga_perhari` int(9)
,`harga_perbulan` int(9)
,`harga_pertahun` int(9)
,`listrik` int(1)
,`tlp_rumah` varchar(13)
,`no_whatsapp` varchar(13)
,`deskripsi_rumah` text
,`status_delete_rumah` int(1)
,`tgl_delete` date
,`tgl_update` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pemilik`
--
DROP VIEW IF EXISTS `view_pemilik`;
CREATE TABLE `view_pemilik` (
`id_user` int(11)
,`nama_user` varchar(25)
,`tlp_user` varchar(13)
,`alamat_user` text
,`kartu_identitas` text
,`ktp_user` text
,`kitas_user` text
,`paspor_user` text
,`no_kk_user` varchar(16)
,`username` varchar(50)
,`password` text
,`jk_user` varchar(10)
,`foto_user` text
,`email_user` text
,`previlage_user` text
,`id_rumah` int(11)
,`nama_rumah` varchar(25)
,`alamat_rumah` text
,`tlp_rumah` varchar(13)
,`id_rt` int(11)
,`imb_rumah` text
,`kategori_rumah` text
,`foto_1` text
,`foto_2` text
,`foto_3` text
,`foto_4` text
,`harga_perhari` int(9)
,`harga_perbulan` int(9)
,`harga_pertahun` int(9)
,`listrik` int(1)
,`tgl_update` timestamp
,`status_rumah` int(1)
,`status_delete_rumah` int(1)
,`tgl_delete` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `wilayah`
--
DROP VIEW IF EXISTS `wilayah`;
CREATE TABLE `wilayah` (
`id_rt` int(11)
,`rt` int(3)
,`rw` int(3)
,`id_desa` int(11)
,`nama_desa` text
,`kecamatan` text
,`kota` text
,`provinsi` text
,`id_ketua_rt` int(11)
,`ketua_rt` varchar(25)
,`username` text
,`password` text
,`foto` text
,`tempat_lahir` varchar(30)
,`tgl_lahir` date
,`status_rt` int(1)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `penyewa_kontrakan`
--
DROP TABLE IF EXISTS `penyewa_kontrakan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `penyewa_kontrakan`  AS  select `m1`.`id_rumah_kontrakan` AS `id_rumah_kontrakan`,`m1`.`status_sewa` AS `status_sewa`,`m1`.`id_sewa_kontrakan` AS `id_sewa_kontrakan`,`m1`.`jml_penghuni` AS `jml_penghuni`,`m1`.`cek_in` AS `cek_in`,`m1`.`cek_out` AS `cek_out`,`m1`.`keterangan_penghuni` AS `keterangan_penghuni`,`m2`.`id_user` AS `id_user`,`m2`.`nama_user` AS `nama_user`,`m2`.`tlp_user` AS `tlp_user`,`m2`.`alamat_user` AS `alamat_user`,`m2`.`kartu_identitas` AS `kartu_identitas`,`m2`.`ktp_user` AS `ktp_user`,`m2`.`kitas_user` AS `kitas_user`,`m2`.`paspor_user` AS `paspor_user`,`m2`.`no_kk_user` AS `no_kk_user`,`m2`.`username` AS `username`,`m2`.`password` AS `password`,`m2`.`jk_user` AS `jk_user`,`m2`.`foto_user` AS `foto_user`,`m2`.`email_user` AS `email_user`,`m2`.`previlage_user` AS `previlage_user`,`m3`.`no_rumah` AS `no_rumah`,`m3`.`id_rumah` AS `id_rumah`,`m4`.`nama_rumah` AS `nama_rumah` from (((`sewa_kontrakan` `m1` join `user` `m2` on((`m2`.`id_user` = `m1`.`id_user`))) join `rumah_kontrakan` `m3` on((`m3`.`id_rumah_kontrakan` = `m1`.`id_rumah_kontrakan`))) join `rumah_sewa` `m4` on((`m4`.`id_rumah` = `m3`.`id_rumah`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `penyewa_kos`
--
DROP TABLE IF EXISTS `penyewa_kos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `penyewa_kos`  AS  select `m1`.`id_kamar_kos` AS `id_kamar_kos`,`m1`.`status_sewa` AS `status_sewa`,`m1`.`id_sewa_kamar` AS `id_sewa_kamar`,`m1`.`jml_penghuni` AS `jml_penghuni`,`m1`.`cek_in` AS `cek_in`,`m1`.`cek_out` AS `cek_out`,`m1`.`keterangan_penghuni` AS `keterangan_penghuni`,`m2`.`id_user` AS `id_user`,`m2`.`nama_user` AS `nama_user`,`m2`.`tlp_user` AS `tlp_user`,`m2`.`alamat_user` AS `alamat_user`,`m2`.`kartu_identitas` AS `kartu_identitas`,`m2`.`ktp_user` AS `ktp_user`,`m2`.`kitas_user` AS `kitas_user`,`m2`.`paspor_user` AS `paspor_user`,`m2`.`no_kk_user` AS `no_kk_user`,`m2`.`username` AS `username`,`m2`.`password` AS `password`,`m2`.`jk_user` AS `jk_user`,`m2`.`foto_user` AS `foto_user`,`m2`.`email_user` AS `email_user`,`m2`.`previlage_user` AS `previlage_user`,`m3`.`no_kamar` AS `no_kamar`,`m3`.`id_rumah` AS `id_rumah`,`m4`.`nama_rumah` AS `nama_rumah` from (((`sewa_kamar` `m1` join `user` `m2` on((`m2`.`id_user` = `m1`.`id_user`))) join `kamar_kos` `m3` on((`m3`.`id_kamar_kos` = `m1`.`id_kamar_kos`))) join `rumah_sewa` `m4` on((`m4`.`id_rumah` = `m3`.`id_rumah`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_fasilitas`
--
DROP TABLE IF EXISTS `view_fasilitas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_fasilitas`  AS  select `m2`.`id_fasilitas` AS `id_fasilitas`,`m2`.`nama_fasilitas` AS `nama_fasilitas`,`m2`.`value_fasilitas` AS `value_fasilitas`,`m2`.`icon_fasilitas` AS `icon_fasilitas`,`m2`.`kategori_fasilitas` AS `kategori_fasilitas`,`m3`.`id_rumah` AS `id_rumah` from ((`relasi_fasilitas` `m1` join `fasilitas` `m2` on((`m2`.`id_fasilitas` = `m1`.`id_fasilitas`))) join `rumah_sewa` `m3` on((`m3`.`id_rumah` = `m1`.`id_rumah`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_kontrakan`
--
DROP TABLE IF EXISTS `view_kontrakan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_kontrakan`  AS  select `m1`.`id_rumah` AS `id_rumah`,`m1`.`nama_rumah` AS `nama_rumah`,`m1`.`alamat_rumah` AS `alamat_rumah`,`m2`.`id_rt` AS `id_rt`,`m2`.`rt` AS `rt`,`m2`.`rw` AS `rw`,`m2`.`id_desa` AS `id_desa`,`m2`.`nama_desa` AS `nama_desa`,`m2`.`kecamatan` AS `kecamatan`,`m2`.`kota` AS `kota`,`m2`.`provinsi` AS `provinsi`,`m2`.`id_ketua_rt` AS `id_ketua_rt`,`m2`.`ketua_rt` AS `ketua_rt`,`m2`.`username` AS `username`,`m2`.`password` AS `password`,`m2`.`foto` AS `foto`,`m1`.`imb_rumah` AS `imb_rumah`,`m1`.`kategori_rumah` AS `kategori_rumah`,`m1`.`foto_1` AS `foto_1`,`m1`.`foto_2` AS `foto_2`,`m1`.`foto_3` AS `foto_3`,`m1`.`foto_4` AS `foto_4`,`m1`.`status_rumah` AS `status_rumah`,`m1`.`harga_perhari` AS `harga_perhari`,`m1`.`harga_perbulan` AS `harga_perbulan`,`m1`.`harga_pertahun` AS `harga_pertahun`,`m1`.`listrik` AS `listrik`,`m1`.`tlp_rumah` AS `tlp_rumah`,`m1`.`no_whatsapp` AS `no_whatsapp`,`m1`.`deskripsi_rumah` AS `deskripsi_rumah`,`m1`.`status_delete_rumah` AS `status_delete_rumah`,`m1`.`tgl_delete` AS `tgl_delete`,`m1`.`tgl_update` AS `tgl_update` from (`rumah_sewa` `m1` join `wilayah` `m2` on((`m2`.`id_rt` = `m1`.`id_rt`))) where (`m1`.`kategori_rumah` = 'Kontrakan') ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_kos`
--
DROP TABLE IF EXISTS `view_kos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_kos`  AS  select `m1`.`id_rumah` AS `id_rumah`,`m1`.`nama_rumah` AS `nama_rumah`,`m1`.`alamat_rumah` AS `alamat_rumah`,`m1`.`status_rumah` AS `status_rumah`,`m2`.`id_rt` AS `id_rt`,`m2`.`rt` AS `rt`,`m2`.`rw` AS `rw`,`m2`.`id_desa` AS `id_desa`,`m2`.`nama_desa` AS `nama_desa`,`m2`.`kecamatan` AS `kecamatan`,`m2`.`kota` AS `kota`,`m2`.`provinsi` AS `provinsi`,`m2`.`id_ketua_rt` AS `id_ketua_rt`,`m2`.`ketua_rt` AS `ketua_rt`,`m2`.`username` AS `username`,`m2`.`password` AS `password`,`m2`.`foto` AS `foto`,`m1`.`imb_rumah` AS `imb_rumah`,`m1`.`kategori_rumah` AS `kategori_rumah`,`m1`.`foto_1` AS `foto_1`,`m1`.`foto_2` AS `foto_2`,`m1`.`foto_3` AS `foto_3`,`m1`.`foto_4` AS `foto_4`,`m1`.`harga_perhari` AS `harga_perhari`,`m1`.`harga_perbulan` AS `harga_perbulan`,`m1`.`harga_pertahun` AS `harga_pertahun`,`m1`.`listrik` AS `listrik`,`m1`.`tlp_rumah` AS `tlp_rumah`,`m1`.`no_whatsapp` AS `no_whatsapp`,`m1`.`deskripsi_rumah` AS `deskripsi_rumah`,`m1`.`status_delete_rumah` AS `status_delete_rumah`,`m1`.`tgl_delete` AS `tgl_delete`,`m1`.`tgl_update` AS `tgl_update` from (`rumah_sewa` `m1` join `wilayah` `m2` on((`m2`.`id_rt` = `m1`.`id_rt`))) where (`m1`.`kategori_rumah` = 'Rumah_Kos') ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_pemilik`
--
DROP TABLE IF EXISTS `view_pemilik`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pemilik`  AS  select `m1`.`id_user` AS `id_user`,`m1`.`nama_user` AS `nama_user`,`m1`.`tlp_user` AS `tlp_user`,`m1`.`alamat_user` AS `alamat_user`,`m1`.`kartu_identitas` AS `kartu_identitas`,`m1`.`ktp_user` AS `ktp_user`,`m1`.`kitas_user` AS `kitas_user`,`m1`.`paspor_user` AS `paspor_user`,`m1`.`no_kk_user` AS `no_kk_user`,`m1`.`username` AS `username`,`m1`.`password` AS `password`,`m1`.`jk_user` AS `jk_user`,`m1`.`foto_user` AS `foto_user`,`m1`.`email_user` AS `email_user`,`m1`.`previlage_user` AS `previlage_user`,`m3`.`id_rumah` AS `id_rumah`,`m3`.`nama_rumah` AS `nama_rumah`,`m3`.`alamat_rumah` AS `alamat_rumah`,`m3`.`tlp_rumah` AS `tlp_rumah`,`m3`.`id_rt` AS `id_rt`,`m3`.`imb_rumah` AS `imb_rumah`,`m3`.`kategori_rumah` AS `kategori_rumah`,`m3`.`foto_1` AS `foto_1`,`m3`.`foto_2` AS `foto_2`,`m3`.`foto_3` AS `foto_3`,`m3`.`foto_4` AS `foto_4`,`m3`.`harga_perhari` AS `harga_perhari`,`m3`.`harga_perbulan` AS `harga_perbulan`,`m3`.`harga_pertahun` AS `harga_pertahun`,`m3`.`listrik` AS `listrik`,`m3`.`tgl_update` AS `tgl_update`,`m3`.`status_rumah` AS `status_rumah`,`m3`.`status_delete_rumah` AS `status_delete_rumah`,`m3`.`tgl_delete` AS `tgl_delete` from ((`user` `m1` join `pemilik` `m2` on((`m2`.`id_user` = `m1`.`id_user`))) join `rumah_sewa` `m3` on((`m3`.`id_rumah` = `m2`.`id_rumah`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `wilayah`
--
DROP TABLE IF EXISTS `wilayah`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `wilayah`  AS  select `m1`.`id_rt` AS `id_rt`,`m1`.`rt` AS `rt`,`m1`.`rw` AS `rw`,`m2`.`id_desa` AS `id_desa`,`m2`.`nama_desa` AS `nama_desa`,`m2`.`kecamatan` AS `kecamatan`,`m2`.`kota` AS `kota`,`m2`.`provinsi` AS `provinsi`,`m3`.`id_ketua_rt` AS `id_ketua_rt`,`m3`.`nama_user` AS `ketua_rt`,`m3`.`username` AS `username`,`m3`.`password` AS `password`,`m3`.`foto_user` AS `foto`,`m3`.`tempat_lahir` AS `tempat_lahir`,`m3`.`tgl_lahir` AS `tgl_lahir`,`m3`.`status_rt` AS `status_rt` from ((`rt` `m1` join `desa` `m2` on((`m2`.`id_desa` = `m1`.`id_desa`))) join `ketua_rt` `m3` on((`m3`.`id_rt` = `m1`.`id_rt`))) where (`m3`.`status_rt` = '1') ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `header_background`
--
ALTER TABLE `header_background`
  ADD PRIMARY KEY (`id_background`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`),
  ADD KEY `id_sewa` (`id_sewa`);

--
-- Indexes for table `kamar_kos`
--
ALTER TABLE `kamar_kos`
  ADD PRIMARY KEY (`id_kamar_kos`),
  ADD KEY `id_rumah` (`id_rumah`);

--
-- Indexes for table `ketua_rt`
--
ALTER TABLE `ketua_rt`
  ADD PRIMARY KEY (`id_ketua_rt`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `id_rumah` (`id_rumah`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pelaporan`
--
ALTER TABLE `pelaporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `id_rumah` (`id_rumah`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`),
  ADD KEY `id_rumah` (`id_rumah`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `penghuni_kamar`
--
ALTER TABLE `penghuni_kamar`
  ADD PRIMARY KEY (`id_penghuni_kamar`),
  ADD KEY `id_sewa` (`id_sewa_kamar`),
  ADD KEY `id_rumah_kontrakan` (`id_kamar_kos`);

--
-- Indexes for table `penghuni_kontrakan`
--
ALTER TABLE `penghuni_kontrakan`
  ADD PRIMARY KEY (`id_penghuni_kontrakan`),
  ADD KEY `id_sewa` (`id_sewa_kontrakan`),
  ADD KEY `id_rumah_kontrakan` (`id_rumah_kontrakan`);

--
-- Indexes for table `relasi_fasilitas`
--
ALTER TABLE `relasi_fasilitas`
  ADD PRIMARY KEY (`id_relasi`),
  ADD KEY `id_rumah` (`id_rumah`),
  ADD KEY `id_fasilitas` (`id_fasilitas`);

--
-- Indexes for table `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`id_rt`),
  ADD KEY `id_desa` (`id_desa`);

--
-- Indexes for table `rumah_kontrakan`
--
ALTER TABLE `rumah_kontrakan`
  ADD PRIMARY KEY (`id_rumah_kontrakan`),
  ADD KEY `id_rumah` (`id_rumah`);

--
-- Indexes for table `rumah_sewa`
--
ALTER TABLE `rumah_sewa`
  ADD PRIMARY KEY (`id_rumah`),
  ADD KEY `id_rt` (`id_rt`);

--
-- Indexes for table `sewa_kamar`
--
ALTER TABLE `sewa_kamar`
  ADD PRIMARY KEY (`id_sewa_kamar`),
  ADD KEY `id_penyewa` (`id_user`),
  ADD KEY `id_rumah_kontrakan` (`id_kamar_kos`);

--
-- Indexes for table `sewa_kontrakan`
--
ALTER TABLE `sewa_kontrakan`
  ADD PRIMARY KEY (`id_sewa_kontrakan`),
  ADD KEY `id_penyewa` (`id_user`),
  ADD KEY `id_rumah_kontrakan` (`id_rumah_kontrakan`);

--
-- Indexes for table `survei`
--
ALTER TABLE `survei`
  ADD PRIMARY KEY (`id_survei`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `header_background`
--
ALTER TABLE `header_background`
  MODIFY `id_background` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kamar_kos`
--
ALTER TABLE `kamar_kos`
  MODIFY `id_kamar_kos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `ketua_rt`
--
ALTER TABLE `ketua_rt`
  MODIFY `id_ketua_rt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelaporan`
--
ALTER TABLE `pelaporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id_pemilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `penghuni_kamar`
--
ALTER TABLE `penghuni_kamar`
  MODIFY `id_penghuni_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penghuni_kontrakan`
--
ALTER TABLE `penghuni_kontrakan`
  MODIFY `id_penghuni_kontrakan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `relasi_fasilitas`
--
ALTER TABLE `relasi_fasilitas`
  MODIFY `id_relasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;
--
-- AUTO_INCREMENT for table `rt`
--
ALTER TABLE `rt`
  MODIFY `id_rt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `rumah_kontrakan`
--
ALTER TABLE `rumah_kontrakan`
  MODIFY `id_rumah_kontrakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rumah_sewa`
--
ALTER TABLE `rumah_sewa`
  MODIFY `id_rumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sewa_kamar`
--
ALTER TABLE `sewa_kamar`
  MODIFY `id_sewa_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sewa_kontrakan`
--
ALTER TABLE `sewa_kontrakan`
  MODIFY `id_sewa_kontrakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `survei`
--
ALTER TABLE `survei`
  MODIFY `id_survei` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
