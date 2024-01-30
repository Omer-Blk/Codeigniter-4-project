-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 24 Oca 2024, 14:58:11
-- Sunucu sürümü: 8.0.31
-- PHP Sürümü: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mutfak_projem`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kulad` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sifre` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mutfaklar`
--

DROP TABLE IF EXISTS `mutfaklar`;
CREATE TABLE IF NOT EXISTS `mutfaklar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `url` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `baslik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `icerik` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `resim` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `mutfaklar`
--

INSERT INTO `mutfaklar` (`id`, `url`, `baslik`, `icerik`, `resim`) VALUES
(2, 'meksika_mutfağıtaco', 'Meksika(Taco)', 'Meksikan mutfağının en sevilen lezzetleri arasında yer alan taco, tortilla ekmeği ile hazırlanır. İç kısmında tavuk, kırmızı et ve sebze kullanılır. Avrupa ve Amerika\'da da tüketilen bu besin, garnitürle birlikte servis edilir. Genellikle çedar, mozzarella veya kaşar peyniri kullanılır. Hazırsanız Meksikan usulü taco nasıl yapılır görelim.', 'tacos_meksika_mutfagi-dc7ec63b-e1df-4acf-bdcc-96c7a609e85b.png'),
(3, 'italyan_mutfagi', 'İtalyan(Pelmeni)', 'İtalya\'da ravioli, Uzakdoğu mutfağında gyoza olarak bilinen mantının Rus mutfağındaki karşılığı ise pelmenidir. Tatlı olarak ayrılan pelmeni, tatlı olarak sunulacaksa meyveli sos ve şekerle birlikte hazırlanır. Tuzlusu ise sade, kıymalı veya peynirli çeşitleri ile sunulur. Kayseri mantısının mutfağımızdaki yeri farklı olsa da, Rus mutfağına özgü pelmeniyi de mutlaka denemenizi öneriyoruz.', 'pelmeni_rus_mutfagi-c6af7b0d-e9da-4748-ac79-3305e49308ec.png'),
(4, 'uzak_dogu_mutfagi', 'Uzak Doğu(Siyah Pirinç)', 'Kısıtlı miktarda üretimi yapılan siyah pirincin ana vatanı Çin\'dir. Kas ve sinir dokularını düzenlemesiyle bilinen bu besin, son zamanlarda Edirne\'de de üretilmeye başlamıştır. Mineral bakımından zengin olmasının yanı sıra kalp sağlığını da olumlu yönde etkiler. Vücudun bağışıklık sistemini güçlendirdiği için özellikle kış aylarında tüketilmesi önerilir.', 'siyah_pirinc_pilavi_uzakdogu_mutfagi-a793d2d5-a57e-4103-a742-508b8d547950.png'),
(5, 'japonya_mutfagi', 'Japonya(Tempura)', 'Japon mutfağından çok sevilen mısır tempura ', 'tempura-380322-221bcd98-396e-4148-b15c-0658f3bf1812.png'),
(6, 'hindistan_mutfagi', 'Hindistan(Selanik Tatlısı)', 'Selanik ile özdeşleştirilen bu tatlı, göçmen ülkelerinde oldukça önemli bir yere sahiptir. Türkiye\'de ise en çok Trakya\'da tüketilir. İçeriğinde bulunan hindistan cevizi sayesinde, mide sorunlarına iyi gelmesiyle bilinir. Ana malzemeleri un ve hindistan cevizi olan Selanik tatlısı, farklı çeşitlerle de sunulabilir. Şeker ve karbonhidrat değeri yüksek olduğu için ölçülü bir şekilde tüketilmesi önerilir\r\n', 'hindistan-cevizli-selanik-tatlisi-4865ca8f-5a58-4249-baad-af1cfda061d0.png'),
(7, 'fransız_mutfagi', 'Fransız(Ratatuy)', 'Bu yemek ile ilk kez bir animasyon filminde tanıştık. Yemek yapmayı bir aşk olarak gören, kalbi yemek yapma aşkı ile yanıp tutuşan minik bir farenin, zorlu bir yemek eleştirmeninin kalbini fethetmesini sağlayan yemekti ratatouille.\r\n', 'ratatuy.png'),
(8, 'kore_mutfagi', 'Kore(Kimchi)', 'Kış aylarına çok az bir zaman kala, annelerimiz mutfakta kışa hazırlık yapmaya başlarlar. Yaz meyvelerinden reçeller, domateslerden kışlık konserveler ve lezzetiyle ağız sulandıran turşular mutfaklarda yerini almaya başlar.\r\n', '1_1_11zon-735.png'),
(9, 'kore', 'Kore(Tteokbokki)', 'Son dönemlerde hayatımızda oldukça yer edinen ve popülerliği gün geçtikçe artan Kore yemekleri, damaklarımızda birbirinden lezzetli, birbirinden farklı tatlar bırakmaktadır.\r\nGenellikle sokak lezzetleriyle ön plana çıkan Kore yemekleri arasında, yıldızı en çok parlayan ve lezzeti dilden dile dolaşan hiç kuşkusuz tteokbokki tarifi oldu diyebiliriz.\r\n', '2_2_11zon-221.png'),
(10, 'amerikan_mutfagi', 'Amerika(Turta)', 'Elmalı turta, bir Amerikan tarifi olmasına rağmen dünyadaki en popüler tatlılardandır. Orijinal elmalı turta yapımı için elmalı harç ve tart hamuru yeterlidir ama üzerine krema ya da dondurma ile servis edildiğinde de harika olur.', '23_23_11zon.png'),
(11, 'kuzey_i̇talyaravioli', 'Kuzey İtalya(Ravioli)', 'Ravioli et, ricotta peyniri ve sebze gibi çeşitli malzemelerle doldurulabilen mantı benzeri bir makarna çeşididir. Ravioli, özellikle kuzey İtalya mutfak kültürünün bir parçasıdır. Çok ince, neredeyse şeffaf bir yaprak makarna, oklava ile veya bir makarna makinesi kullanılarak elle açılır ve ardından doldurulur. Ravioli tipik olarak karedir, ancak dairesel veya yarı dairesel ( mezzelune ) olmak üzere başka formlarda da hazırlanır.', 'ykvagustos21_knorrmakarnasosvevittea_peynirsosluravioli.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
