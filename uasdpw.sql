-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2011 at 10:05 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugaslab01`
--

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE IF NOT EXISTS `posting` (
  `gambar` varchar(20) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `tglpost` date NOT NULL,
  `isisingkat` varchar(500) NOT NULL,
  `isipanjang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`gambar`, `judul`, `tglpost`, `isisingkat`, `isipanjang`) VALUES
('losari', 'Pesona Losari', '2011-09-22', 'Pesona alam setiap daerah tentu saja berbeda. Karena di sinilah salah satu daya tarik dan daya pikat suatu tempat itu muncul. Pantai Losari dan lokasi wisata alam lain di Makassar adalah salah satu bukti daya pikat pesona alam itu', 'Pesona alam setiap daerah tentu saja berbeda. Karena di sinilah salah satu daya tarik dan daya pikat suatu tempat itu muncul. Pantai Losari dan lokasi wisata alam lain di Makassar adalah salah satu bukti daya pikat pesona alam itu begitu berkesan di hati siapa saja yang pernah mengunjunginya. \r\n\r\n<p> Percaya atau tidak, silahkan saja buktikan sendiri.  Pantai Losari, adalah salah satu daya tarik kota yang jauh dari macet dan sudah punya tol ini. Pantai yang terletak di bagian utara Kota Makassar ini memiliki panjang garis pantai lebih dari satu kilometer. Meski hamparan pasir putihnya tidak seperti pantai-pantai umumnya, tapi Losari punya daya tarik tersendiri bagi setiap pengunjungnya.</p>'),
('bahari', 'Festival Bahari', '2011-09-22', 'Hiruk-pikuk Visit Makassar sepanjang 2011, nyaris tak pernah berhenti. Event demi event kepariwisataan yang digelar di kota Anging Mammiri ini, baik oleh Dinas Kebudayaan dan Pariwisata Kota Makassar, maupun sejumlah kegiatan yang digelar oleh berbagai instansi atau lembaga lainnya.', 'Hiruk-pikuk Visit Makassar sepanjang 2011, nyaris tak pernah berhenti. Event demi event kepariwisataan yang digelar di kota Anging Mammiri ini, baik oleh Dinas Kebudayaan dan Pariwisata Kota Makassar, maupun sejumlah kegiatan yang digelar oleh berbagai instansi atau lembaga lainnya.\r\n\r\n<p>Termasuk pula kegiatan yang dihelat oleh kelompok-kelompok masyarakat, telah memberi dampak positif atas jumlah kunjungan wisatawan manca negara ke Makassar. Fakta yang terjadi di lapangan, kalangan penerbangan internasional mengakui bahwa, dengan digelarnya Visit Makassar 2011 dengan segudang event yang memikat, telah mendongkrak tajam jumlah penumpang pesawat udara yang datang ke Makassar melalui Bandarara Internasional Sultan Hasanuddin.</p>\r\n\r\n<p>Demikian pula dari kalangan usaha perhotelan, mereka memberi pengakuan berdasarkan tingkat hunian kamar hotel yang meningkat tajam, sejak berbagai event yang digelar dalam rangka Visit Makassar 2011.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

