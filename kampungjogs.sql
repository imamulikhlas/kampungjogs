-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 03:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampungjogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `kampung`
--

CREATE TABLE `kampung` (
  `ID` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `kriteria` enum('persawahan','pertanian','perbatikan','penenunan','edukasi','pertanian') NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(50) NOT NULL DEFAULT '.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kampung`
--

INSERT INTO `kampung` (`ID`, `nama`, `lokasi`, `kriteria`, `deskripsi`, `gambar`) VALUES
(1, 'Dlingo', 'Bantul', 'persawahan', 'Dlingo adalah sebuah kecamatan di Kabupaten Bantul, Provinsi Daerah Istimewa Yogyakarta, Indonesia. Secara geografis Dlingo terletak di Kabupaten Bantul paling timur, berbatasan dengan kabupaten Gunungkidul dan wilayahnya berbukit-bukit. potensi yang ada di Kecamatan Dlingo adalah pada sektor industri kayu, anyaman, dan potensi wisata bentang alam berupa pegunungan. Diantaranya adalah air terjun, bentangan alam persawahan,hutan pinus, dan kebun buah.', '5f0353e9d65f5.jpg'),
(2, 'Gerbosari', 'Kulon Progo', 'pertanian', 'Gerbosari (bahasa Jawa: Gerbasari) adalah desa di kecamatan Samigaluh, Kulon Progo, Daerah Istimewa Yogyakarta, Indonesia. Bagian utara Desa ini berbatasan langsung dengan Provinsi Jawa Tengah. Desa Gerbosari terdiri dari 19 pedukuhan/dusun, 38 RW (Rukun Warga) dan 75 RT (Rukun Tetangga). Desa yang terletak pada dataran tinggi Pegunungan Menoreh ini memiliki suhu udara rata-rata 23-34 derajat celsius.', '5f0354674e67d.jpg'),
(3, 'Wonokerto', 'Sleman', 'penenunan', 'Desa Wonokerto yang terletak di kaki Gunung Merapi terkenal dengan tanaman salaknya. Sebagian warga desa tersebut menggantungkan hidup dari salak pondoh. Desa ini juga merupakan desa yang selalu terancam oleh aktivitas erupsi gunung Merapi. Desa Wonokerto memiliki otensi wisata yakni Panorama Merapi, hutan konservasi dengan aneka floranya dan ratusan jenis burung serta satwa lainya. Terdapat pula wobyek wisata ritual yaitu Gua Semar, Kedung Cuwo, Sendang Pancuran, Pring Wali, dan Batu Tunggang.', '5f03550c3651d.jpg'),
(4, 'Jogotirto', 'Sleman', '', 'Desa ini merupakan penggabungan 3 Kelurahan Lama yaitu: Kelurahan Jragung, Bulu dan Jogomangsan. Berdasarkan Maklumat Pemerintah Daerah Istimewa Yogyakarta yang diterbitkan tahun 1946 mengenai Pemerintahan Kelurahan, maka tiga bekas Kelurahan tersebut kemudian digabung menjadi satu desa yang otonom dengan nama Desa Jogotirto yang ditetapkan berdasarkan Maklumat Pemerintah Provinsi Daerah Istimewa Yogyakarta Nomor 5 Tahun 1948 tentang Perubahan Daerah-daerah Kelurahan. Pusat pemerintahan berada di Karongan, Jogotirto, Berbah, Sleman, terletak pada koordinat 07o 48\' 56” LS, 110o 27\' 49” BT, dengan luas wilayah 5,84 Km2. Desa Jogotirto menyimpan beberapa potensi wisata yang menarik untuk dikunjungi, yalni; Candi Abang yang terletak di Padukuhan Krasaan, Lava Bantal di Dusun Watuadeg, Goa Jepang yang terletak di padukuhan Blambangan, dan Goa Sentono di Sentonoharjo.', '5f03cea8d7d92.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `role` enum('user','admin','owner') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama_user`, `role`) VALUES
(1, 'owner', 'owner', 'Zachary Purschell', 'owner'),
(2, 'user', 'user', 'Brayden Paxton', 'user'),
(3, 'admin', 'admin', 'Kimberley Knox', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `namadepan` varchar(50) NOT NULL,
  `namabelakang` varchar(50) NOT NULL,
  `namakampung` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `namadepan`, `namabelakang`, `namakampung`, `harga`) VALUES
(1, 'Zachary', 'Johnson', 'Gerbosari', 516000),
(2, 'Adrian', 'Jordyn', 'Jogotirto', 630000),
(3, 'Racquelle', 'Wellington', 'Dlingo', 408000),
(4, 'Michael', 'Biggs', 'Wonokerto', 461000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kampung`
--
ALTER TABLE `kampung`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kampung`
--
ALTER TABLE `kampung`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
