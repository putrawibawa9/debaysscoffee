-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 06:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `binatang`
--

CREATE TABLE `binatang` (
  `id_binatang` int(11) NOT NULL,
  `nama_binatang` varchar(50) NOT NULL,
  `keterangan_binatang` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binatang`
--

INSERT INTO `binatang` (`id_binatang`, `nama_binatang`, `keterangan_binatang`, `gambar`, `id_kategori`) VALUES
(3, 'Espresso', 'Espresso sendiri berasal dari ekstraksi biji kopi yang sudah digiling kemudian ditambahkan dengan air panas di bawah tekanan suhu yang tinggi. \r\nEspresso bisa diminum tanpa campuran apapun dan bisa juga digunakan sebagai campuran minuman kopi lain dengan tambahan bahan susu, krim susu, dan air panas.\r\n', '65adf49abf515.jpg', 3),
(4, 'Teh', 'Banyak kedai kopi memiliki menu teh yang beragam, termasuk teh hitam, teh hijau, teh herbal, dan campuran khusus. Pelanggan dapat memilih dari varian klasik seperti English Breakfast atau Earl Grey hingga opsi yang lebih eksotis seperti teh kamomil atau teh buah.', '65adf68622b7e.jpg', 4),
(5, 'Latte', 'Latte memiliki banyak penggemar karena minuman ini merupakan campuran antara kopi espresso dan susu dengan sedikit busa di atasnya.\r\nlatte sangat cocok bagi Anda yang tidak terlalu suka dengan rasa kopi yang terlalu pahit. Jenis kopi ini juga terkenal dengan latte art atau seni menggambar bentuk dan pola di atas busanya.\r\n', '65adf6b90b794.jpg', 3),
(6, 'Americano', 'Americano diracik dengan satu hingga dua shot espresso lalu ditambahkan dengan air panas atau bisa juga ditambahkan dengan es batu sehingga teksturnya lebih encer. \r\nSama seperti espresso, americano merupakan jenis kopi yang menjadi basis minuman kopi lainnya.\r\n', '65adf6cf6e287.jpg', 3),
(7, 'Cappucino', 'Cappuccino merupakan kopi yang terbuat dari campuran espresso, susu berbuih, dan susu yang sudah diuapkan. Kopi khas Italia ini menjadi salah satu menu favorit di coffee shop.\r\n', '65adf6ef8f986.jpg', 3),
(8, 'Mochaccino', 'Mochaccino merupakan kopi yang berasal dari perpaduan espresso, susu steamed, dan coklat. Mochaccino dibuat dengan komposisi ⅕ susu, ⅖ espresso, dan ⅖ coklat. \r\nJadi, mochaccino memiliki aroma dan rasa yang cenderung lebih manis dan cocok untuk pelanggan yang senang dengan rasa kopi manis.\r\n', '65adf7a389970.jpg', 3),
(9, 'Robusta', 'Kopi robusta memiliki rasa yang sangat kuat, dengan rasa yang lebih pahit jika dibandingkan dengan kopi arabika. Rasa kopi robusta yang pahit ini menunjukan ia memiliki kandungan gula yang lebih sedikit \r\n', '65adf7b666feb.jpg', 3),
(10, 'Arabika', 'arabika, kopi ini cenderung terasa manis dan ringan. Beberapa jenis arabika bisa memiliki aftertaste yang manis dengan aroma lebih lembut serta sedikit asam.', '65adf7c8c09bc.jpg', 3),
(11, 'Cokelat Panas', 'Pilihan non-kopi yang populer, cokelat panas adalah minuman yang nyaman dan manis yang terbuat dari susu dan cokelat. Beberapa kedai kopi juga menawarkan varian seperti cokelat panas putih atau opsi beraroma seperti peppermint atau karamel.', '65adf83d8bb80.jpg', 4),
(12, 'Smoothie', 'Kedai kopi seringkali memiliki menu smoothie buah yang terbuat dari campuran buah segar atau beku, yogurt, dan terkadang tambahan penguat seperti bubuk protein atau sayuran hijau. Rasa umumnya mencakup smoothie buah beri, tropis, dan hijau.', '65adf85084803.jpg', 4),
(13, 'Chai Latte', 'Chai latte terbuat dari campuran teh bumbu yang dicampur dengan susu panas. Mereka menawarkan pilihan yang kaya rasa dan aromatik bagi mereka yang menyukai kombinasi rempah seperti kayu manis, kapulaga, dan jahe.', '65adf86ff0efc.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(3, 'Coffee'),
(4, 'Non Coffee');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binatang`
--
ALTER TABLE `binatang`
  ADD PRIMARY KEY (`id_binatang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binatang`
--
ALTER TABLE `binatang`
  MODIFY `id_binatang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
