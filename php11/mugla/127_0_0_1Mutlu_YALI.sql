-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Ara 2017, 16:21:07
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `mugla_sitesi_vt`
--
CREATE DATABASE IF NOT EXISTS `mugla_sitesi_vt` DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci;
USE `mugla_sitesi_vt`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `login_tablosu`
--

CREATE TABLE IF NOT EXISTS `login_tablosu` (
  `username` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_turkish_ci NOT NULL,
  `soru` varchar(35) COLLATE utf8_turkish_ci NOT NULL,
  `cevap` varchar(128) COLLATE utf8_turkish_ci NOT NULL,
  `eposta` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `login_tablosu`
--

INSERT INTO `login_tablosu` (`username`, `password`, `soru`, `cevap`, `eposta`) VALUES
('bip', '39076b374bf74adab05cef73ec754346', 'sana ne?', 'd4f917633649a3c47c7ab917fa990146', 'bip@posta.mu.edu.tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar_tablosu`
--

CREATE TABLE IF NOT EXISTS `sayfalar_tablosu` (
  `sayfa_no` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sayfa_basligi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_linki` varchar(210) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_icerigi` mediumtext COLLATE utf8_turkish_ci NOT NULL,
  `olusturma_tarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `degistirme_tarihi` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `dil` varchar(3) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'TR',
  PRIMARY KEY (`sayfa_no`),
  UNIQUE KEY `sayfa_no` (`sayfa_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `sayfalar_tablosu`
--

INSERT INTO `sayfalar_tablosu` (`sayfa_no`, `sayfa_basligi`, `sayfa_linki`, `sayfa_icerigi`, `olusturma_tarihi`, `degistirme_tarihi`, `dil`) VALUES
(1, 'Muğla tarihçe', 'mugla-tarihce', 'Muğla eski medeniyetlere ev sahipliği yapmış bir ilimizdir.', '2017-11-21 15:13:23', '2017-11-20 22:00:00', 'TR');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
