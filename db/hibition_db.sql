-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 08:43 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hibition_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_karyawan` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `gambar` varchar(32) NOT NULL,
  `prioritas` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_karyawan`, `nama`, `password`, `gambar`, `prioritas`) VALUES
('M0123456', 'Admin', '202cb962ac59075b964b07152d234b70', 'person_1.jpg', 0),
('M0516036', 'Farhan Ichlasulamal', '202cb962ac59075b964b07152d234b70', 'person_1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id_ads` int(1) NOT NULL,
  `prioritas` int(1) NOT NULL,
  `gambar_ads` varchar(32) NOT NULL,
  `link_ads` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id_ads`, `prioritas`, `gambar_ads`, `link_ads`) VALUES
(1, 1, 'iklan_1.jpg', 'https://mcdonalds.co.id/'),
(2, 2, 'iklan_3.jpg', 'https://mcdonalds.co.id/'),
(3, 3, 'iklan_8.png', 'https://mcdonalds.co.id/'),
(4, 4, 'iklan_7.png', 'https://mcdonalds.co.id/'),
(5, 5, 'iklan_6.gif', 'https://www.coffeereview.com');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(15) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `ringkasan_artikel` text NOT NULL,
  `tanggal_artikel` date NOT NULL,
  `waktu_artikel` time NOT NULL,
  `gambar_artikel` varchar(32) NOT NULL,
  `id_penulis` varchar(10) NOT NULL,
  `id_kategori_artikel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `ringkasan_artikel`, `tanggal_artikel`, `waktu_artikel`, `gambar_artikel`, `id_penulis`, `id_kategori_artikel`) VALUES
(1, '4 Cara Terbaik Membuat Kopi Tubruk yang Benar', 'Kopi tubruk telah menjadi ciri khas budaya kopi di Indonesia. Istilah tubruk berasal dari Bahasa Jawa yang berarti tabrak atau berbenturan. Untuk membuat kopi tubruk yang benar ada cara-cara yang harus lo perhatikan!', '2019-12-02', '10:25:14', 'Kopi_1.jpeg', 'M0516036', 1),
(2, 'Taste a Better Life in 5 Ways', 'Membuat hidup lo lebih baik itu bisa lo lakukan dengan mudah dan tidak mesti harus dengan perubahan yang besar-besaran. Berikut ini 5 langkah yang bisa buat hidup lo lebih baik!', '2019-12-02', '11:11:12', 'relax_1.jpg', 'M0516036', 1),
(3, '5 Inspirasi Gadget yang Mesti Lo Punya', 'Hidup udah sulit, jangan ditambah sulit lagi, Bro! Nah, sekarang udah banyak teknologi bisa membuat hidup lo lebih mudah. Ini dia beberapa inspirasi gadget yang bisa memudahkan lo dalam beraktivitas.', '2019-12-04', '05:06:12', 'gadget_1.jpg', 'M0516036', 1),
(4, 'Rawat Gitar Lo dengan Tips dari Nikita Dompas!', 'Jangan sampai gitar kesayangan lo performa-nya berkurang karena perawatan yang kurang baik, Urbaners! Seperti Nikita Dompas, ia selalu melakukan hal-hal kecil seperti ini untuk mempertahankan kualitas suara gitar.', '2019-12-05', '21:17:25', 'guitar_1.jpg', 'M0516036', 2),
(5, 'Tips Memilih dan Merawat Kaos Kaki dengan Tepat', 'Jangan anggap remeh kaos kaki! Berikut padu padan nan kece dengan kaos kaki.', '2019-12-06', '10:23:06', 'sock_1.jpg', 'M0516036', 1),
(6, '5 Tips Improve Your Creative Thinking', 'Ada banyak cara buat menambah skill kreatif lo. Selain berguna untuk melihat sesuatu dari kacamata dan perspektif yang berbeda, berpikir kreatif untuk menangkap kesempatan-kesempatan yang tidak biasa untuk mendapatkan keuntungan.', '2019-12-07', '10:25:14', 'think_1.jpg', 'M0516036', 1),
(7, 'Outdoor Activity: Apparel Tips From Visval Bags', 'Pastikan kalau perlengkapan outdoor activity lo mendukung ya, Urbaners! Jangan karena kurang informasi, bukannya membantu malah jadi merepotkan. Apalagi kalau lo akan melakukan aktivitas di cuaca ekstrem. Berikut ini tips dari Visval Bags agar lo bisa menemukan apparel yang tepat untuk aktivitas outdoor.', '2019-12-08', '07:20:21', 'outdoor_activity_1.jpg', 'M0516036', 1),
(8, 'Cara Mudah Memotret Mainan Favorit Lo!', 'Lo seorang kolektor action figure? Pastinya hobi banget mengabadikan koleksi lo tersebut. Nah, kalau gitu lo harus tau bagaimana teknik dasar toy photography. Hal ini bukan hal yang sulit kok, Urbaners. Anggota komunitas Behind The Scene Toys Photography (@BTSTP_ID) yakni Gibran Risnutama dan Mohammad Adji sharing tentang basic step kalau lo mau memotret mainan, Urbaners. Check this out!', '2019-12-09', '11:11:12', 'toys_photography.jpg', 'M0516036', 3),
(9, 'Top 5 Playlist Poppie Efek Rumah Kaca', 'Buat lo yang lagi mencari playlist terbaru dalam bermusik, nggak harus lagu-lagu baru, terkadang nostalgia dengan lagu-lagu lama juga akan membuat lo fresh. Nah, lo bisa nyontek playlist seru dari Poppie personel Efek Rumah Kaca ini. Musik dari berbagai dekade ada disini!', '2019-12-10', '21:15:12', 'efek_rumah_kaca_1.jpg', 'M0516036', 2),
(10, 'Memilih Sepatu Hiking Sekaligus Buat Gaya', 'Perlengkapan terpenting hiking adalah keamanan dan kualitasnya, tetapi sekarang tidak hanya itu lho, Urbaners! Banyak sepatu hiking dengan model yang fashionable. Nah, untuk mendukung itu semua, ada beberapa hal yang harus lo perhatikan terlebih dahulu nih, Urbaners!', '2019-12-11', '23:11:11', 'hiking_1.jpg', 'M0516036', 4);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL,
  `gambar_kategori` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `gambar_kategori`) VALUES
(1, 'Lifestyle', 'lifestyle.jpg'),
(2, 'Music', 'music.jpg'),
(3, 'Photography', 'photography.jpg'),
(4, 'Sneaker', 'Sneaker.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `step`
--

CREATE TABLE `step` (
  `id_step` int(10) NOT NULL,
  `nomor_urut` int(3) NOT NULL,
  `judul_step` varchar(255) NOT NULL,
  `isi_step` text NOT NULL,
  `gambar_step` varchar(32) NOT NULL,
  `id_artikel_step` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `step`
--

INSERT INTO `step` (`id_step`, `nomor_urut`, `judul_step`, `isi_step`, `gambar_step`, `id_artikel_step`) VALUES
(1, 1, 'Berat dan Gilingan', 'Berat jumlah kopi dan jenis gilingan akan mempengaruhi rasa kopi yang lo buat.', 'Kopi_2.jpg', 1),
(2, 2, 'Material Menentukan', 'Jangan gunakan air yang mendidih untuk menyeduh dan gunakan cangkir dari kaca atau keramik untuk menjaga aroma dan suhu kopi.', 'Kopi_3.jpg', 1),
(3, 3, 'Jangan Langsung Diminum', 'Setelah diseduh, diamkan kopi selama beberapa saat agar kopi dapat mencapai rasa dan aroma terbaiknya.', 'Kopi_4.jpg', 1),
(4, 4, 'Kopi Murni', 'Dalam membeli kopi, belilah biji kopi asli atau bubuk kopi asli.', 'Kopi_5.jpg', 1),
(5, 1, 'Deal with it', 'Kalau bertemu masalah, hadapi saja dan jangan menghindar.', 'relax_2.jpg', 2),
(6, 2, 'Don\'t waste your time', 'Waktu nggak bisa terulang lagi, jangan dihabiskan buat yang nggak penting.', 'relax_3.jpg', 2),
(7, 3, 'Keep trying', 'Kalau hidup lagi \'Di Bawah\', terus berusaha dan jangan menyerah!', 'relax_4.jpg', 2),
(8, 4, 'Open minded', 'Punya wawasan luas bisa bantu menghadapi tekanan dan masalah.', 'relax_5.jpeg', 2),
(9, 5, 'Seek for balance', 'Kembalikan semangat dengan \'Berhenti\' dan rehat sejenak.', 'relax_6.jpg', 2),
(10, 1, 'Wind & Water Resistant', 'Pilih jaket berbahan polyester atau gore-tex agar terlindung dari berbagai cuaca.', 'outdoor_activity_2.jpg', 7),
(11, 1, 'Bahan dan Model', 'Agar bisa digunakan untuk gaya lo sehari-hari, pilihlah sepatu hiking dengan bahan dan model yang sesuai dengan karakter lo, Urbaners!', 'hiking_2.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `id_tips` int(10) NOT NULL,
  `nama_pakar` varchar(32) NOT NULL,
  `profesi_pakar` varchar(32) NOT NULL,
  `isi_tips` text NOT NULL,
  `id_step_tips` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`id_tips`, `nama_pakar`, `profesi_pakar`, `isi_tips`, `id_step_tips`) VALUES
(1, 'Jessi Lane Adams', 'Barista', 'Coffee smells like freshly ground heaven.', 3),
(2, 'Debasish Mridha', 'Philosopher', 'Greatness is not a flower that grows in an easy life, it grows in the adversity of life.', 9),
(3, 'Sir Ranulph Fiennes', 'English Explorer', 'There is no such thing as bad weather, only inappropriate clothing', 10),
(4, 'Rachel Zoe', 'American Fashion Designer', 'Style is a way to say who you are, without having to speak.', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id_ads`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_penulis` (`id_penulis`),
  ADD KEY `id_kategori_artikel` (`id_kategori_artikel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `step`
--
ALTER TABLE `step`
  ADD PRIMARY KEY (`id_step`),
  ADD KEY `id_artikel_step` (`id_artikel_step`);

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`id_tips`),
  ADD KEY `id_step_tips` (`id_step_tips`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id_ads` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `step`
--
ALTER TABLE `step`
  MODIFY `id_step` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `id_tips` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_kategori_artikel`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `artikel_ibfk_2` FOREIGN KEY (`id_penulis`) REFERENCES `account` (`id_karyawan`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `step`
--
ALTER TABLE `step`
  ADD CONSTRAINT `step_ibfk_1` FOREIGN KEY (`id_artikel_step`) REFERENCES `artikel` (`id_artikel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tips`
--
ALTER TABLE `tips`
  ADD CONSTRAINT `tips_ibfk_1` FOREIGN KEY (`id_step_tips`) REFERENCES `step` (`id_step`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
