-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 08:32 PM
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
-- Database: `web_sitem`
--

-- --------------------------------------------------------

--
-- Table structure for table `enstruman`
--

CREATE TABLE `enstruman` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `icerik` text NOT NULL,
  `resim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enstruman`
--

INSERT INTO `enstruman` (`id`, `url`, `baslik`, `icerik`, `resim`) VALUES
(6, 'piyano', 'Piyano', 'Açıklama: Piyano, telleri çekiçler aracılığıyla çarparak ses üreten büyük bir klavyeli müzik aletidir. Geniş bir ses aralığına sahiptir ve çok çeşitli müzik türlerinde kullanılır.', '1705431812_4885e02904f0c4022f19.png'),
(7, 'gitar', 'Gitar', ' Gitar, telleri çalmak için parmak veya plektrum kullanılan bir yaylı çalgıdır. Akustik ve elektrikli olmak üzere farklı türleri bulunmaktadır.', '1705431834_75175bcb4a5287583486.png'),
(8, 'keman', 'Keman', 'Keman, yay ile çalınan yaylı bir müzik aletidir. Orkestralarda, oditoryum gruplarında ve solo performanslarda yaygın olarak kullanılır.', '1705431848_1e805792e3ebe3e29989.png'),
(9, 'bateri', 'Bateri', 'Bateri, vurmalı bir enstrümandır ve genellikle bir dizi davul ve zil içerir. Ritim oluşturmak için farklı parçaların aynı anda çalınmasıyla kullanılır.', '1705431865_90d4e138b498ca8d770c.png'),
(10, 'saksafon', 'Saksafon', ' Saksafon, pirinçten yapılmış bir nefesli çalgıdır. Farklı boyutlarda ve türlerde mevcut olan saksafon, caz ve pop müzikte sıkça kullanılır.', '1705431881_92516afdd399d77f762a.png'),
(11, 'flüt', 'Flüt', ' Flüt, genellikle metal veya ahşap malzemeden yapılan, yan tarafında delikleri bulunan bir nefesli çalgıdır. Klasik, caz ve dünya müziğinde sıkça kullanılır.', '1705431896_c91c73e3bbf95c20a33b.png'),
(12, 'harmonika', 'Harmonika', 'Harmonika, genellikle iki akordiyon kutusunu içeren taşınabilir bir nefesli çalgıdır. Bir dizi tuşa basılarak ve ağızdan üfleyerek çalınır.', '1705431912_8b70ba28655687d2140c.png'),
(13, 'trompet', 'Trompet', 'Trompet, metal bir nefesli çalgıdır ve genellikle bir ağızlık kullanılarak çalınır. Orkestralarda, caz gruplarında ve solo performanslarda yer alır.', '1705431929_f03c046c39e0846f238f.png'),
(14, 'elektrikli_bas_gitar', 'Elektrikli Bas Gitar', 'Elektrikli bas gitar, telleri çalmak için parmak veya plektrum kullanılan bir yaylı çalgıdır. Düşük frekansta güçlü bas tonları üretir.', '1705431949_12753ffb933faa91308f.png'),
(15, 'harp', 'Harp', 'Harp, telleri parmak veya özel tırnaklar kullanılarak çalınan büyük bir yaylı çalgıdır. Klasik müzikten çağdaş müziğe kadar çeşitli türlerde kullanılır.', '1705431966_71998dd453b455df277e.png');

-- --------------------------------------------------------

--
-- Table structure for table `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kulad` varchar(10) NOT NULL,
  `sifre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kulad`, `sifre`) VALUES
(1, 'yonetici', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enstruman`
--
ALTER TABLE `enstruman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enstruman`
--
ALTER TABLE `enstruman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
