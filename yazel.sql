-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Şub 2026, 05:59:37
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yazel`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kisiler`
--

CREATE TABLE `kisiler` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `telefon` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `uzmanlik_alani` varchar(100) DEFAULT NULL,
  `deneyim_suresi` int(3) DEFAULT NULL,
  `ulke` varchar(50) DEFAULT NULL,
  `dogum_tarihi` date DEFAULT NULL,
  `dil` varchar(50) DEFAULT NULL,
  `resim` varchar(255) DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kisiler`
--

INSERT INTO `kisiler` (`id`, `ad`, `soyad`, `telefon`, `email`, `uzmanlik_alani`, `deneyim_suresi`, `ulke`, `dogum_tarihi`, `dil`, `resim`) VALUES
(1, 'Yazel', 'Yüce', '05551234578', 'yazelyuce@gmail.com', 'Bilişim Sistemleri', 2, 'Türkiye', '2004-08-11', 'Türkçe', 'default.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `id` int(11) NOT NULL,
  `ziyaretci_ad` varchar(100) DEFAULT NULL,
  `ziyaretci_email` varchar(100) DEFAULT NULL,
  `telefon` varchar(20) DEFAULT NULL,
  `konu` varchar(255) DEFAULT NULL,
  `mesaj_icerik` text DEFAULT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`id`, `ziyaretci_ad`, `ziyaretci_email`, `telefon`, `konu`, `mesaj_icerik`, `tarih`) VALUES
(1, 'Yazel', 'yazelyuce@gmail.com', '123456', 'konu', 'mesaj', '2026-02-27 04:40:01');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kisiler`
--
ALTER TABLE `kisiler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kisiler`
--
ALTER TABLE `kisiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
