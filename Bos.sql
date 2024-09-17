-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 30 Ağu 2023, 16:07:37
-- Sunucu sürümü: 10.2.44-MariaDB
-- PHP Sürümü: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `V2`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Ajanda`
--

CREATE TABLE `Ajanda` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` varchar(555) COLLATE utf8_turkish_ci NOT NULL,
  `islemtarihi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `yapilacaktarih` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `kid` int(11) NOT NULL,
  `onem` varchar(55) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `AlFatBag`
--

CREATE TABLE `AlFatBag` (
  `id` int(11) UNSIGNED NOT NULL,
  `faturaid` int(11) NOT NULL,
  `bilgiid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `AlFatBag`
--

INSERT INTO `AlFatBag` (`id`, `faturaid`, `bilgiid`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `AlFatBilgi`
--

CREATE TABLE `AlFatBilgi` (
  `id` int(11) UNSIGNED NOT NULL,
  `cariadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `faturatarihi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `faturaseri` text COLLATE utf8_turkish_ci NOT NULL,
  `faturanumarasi` int(50) NOT NULL,
  `odemetipi` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `odeme` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `depo` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `aratoplam` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `geneltoplam` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `kdvtoplam` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `ekleyen` int(11) NOT NULL,
  `parabirimi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `AlFatBilgi`
--

INSERT INTO `AlFatBilgi` (`id`, `cariadi`, `faturatarihi`, `tarih`, `faturaseri`, `faturanumarasi`, `odemetipi`, `odeme`, `depo`, `aratoplam`, `geneltoplam`, `kdvtoplam`, `ekleyen`, `parabirimi`) VALUES
(1, '2', '2023-08-12 21:29', '2023-08-12', 'JH', 122471, 'alis', '', '1', '4000.00', '4800.00', '800.00', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `AlisFaturasi`
--

CREATE TABLE `AlisFaturasi` (
  `id` int(11) UNSIGNED NOT NULL,
  `urunadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `adet` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kdvsiztoplam` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kdvoran` int(11) NOT NULL,
  `kdvtutar` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kdvlitoplam` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `depo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `AlisFaturasi`
--

INSERT INTO `AlisFaturasi` (`id`, `urunadi`, `adet`, `fiyat`, `kdvsiztoplam`, `kdvoran`, `kdvtutar`, `kdvlitoplam`, `depo`) VALUES
(1, '1', '100', '20', '2000.00', 20, '400.00', '2400.00', 1),
(2, '2', '10', '200', '2000.00', 20, '400.00', '2400.00', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Ayarlar`
--

CREATE TABLE `Ayarlar` (
  `siteadi` varchar(255) NOT NULL,
  `siteadresi` varchar(255) NOT NULL,
  `siteslogan` varchar(500) NOT NULL,
  `sitemail` varchar(255) NOT NULL,
  `sitewhatsapp` varchar(255) NOT NULL,
  `sitefacebook` varchar(255) NOT NULL,
  `sitetwitter` varchar(255) NOT NULL,
  `siteinstagram` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `Ayarlar`
--

INSERT INTO `Ayarlar` (`siteadi`, `siteadresi`, `siteslogan`, `sitemail`, `sitewhatsapp`, `sitefacebook`, `sitetwitter`, `siteinstagram`, `id`) VALUES
('Almila', 'http://almila.com', 'Online Muhasebe Sistemleri', 'almila@almila.com', '05000000000', 'almila', 'almila', 'almila', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `BankaGiris`
--

CREATE TABLE `BankaGiris` (
  `id` int(11) UNSIGNED NOT NULL,
  `bankaadi` text COLLATE utf8_turkish_ci NOT NULL,
  `odemesekli` text COLLATE utf8_turkish_ci NOT NULL,
  `islemtarihi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `unvan` text COLLATE utf8_turkish_ci NOT NULL,
  `evraknumarasi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `tutar` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `islem` text COLLATE utf8_turkish_ci NOT NULL,
  `ekleyen` int(11) NOT NULL,
  `parabirimi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Bankalar`
--

CREATE TABLE `Bankalar` (
  `id` int(11) UNSIGNED NOT NULL,
  `bankaadi` text COLLATE utf8_turkish_ci NOT NULL,
  `subeadi` text COLLATE utf8_turkish_ci NOT NULL,
  `subenumarasi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hesapnumarasi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ibannumarasi` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Bankalar`
--

INSERT INTO `Bankalar` (`id`, `bankaadi`, `subeadi`, `subenumarasi`, `hesapnumarasi`, `ibannumarasi`) VALUES
(1, 'DENEME', 'DENEME', '357', '123', 'TR00 0000 0000 0000 0000 0000 00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Birim`
--

CREATE TABLE `Birim` (
  `id` int(11) UNSIGNED NOT NULL,
  `birimadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kisaltma` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Birim`
--

INSERT INTO `Birim` (`id`, `birimadi`, `kisaltma`) VALUES
(1, 'ADET', 'AD'),
(2, 'Kilogram', 'Kg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `CariGruplar`
--

CREATE TABLE `CariGruplar` (
  `id` int(11) UNSIGNED NOT NULL,
  `carigrupadi` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `CariGruplar`
--

INSERT INTO `CariGruplar` (`id`, `carigrupadi`) VALUES
(1, 'MÜŞTERİ'),
(2, 'TOPTANCI');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `CariIslem`
--

CREATE TABLE `CariIslem` (
  `id` int(11) UNSIGNED NOT NULL,
  `aciklama` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ekleyen` int(11) NOT NULL,
  `islem` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `islemtarihi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `tutar` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `unvan` int(11) NOT NULL,
  `parabirimi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Cariler`
--

CREATE TABLE `Cariler` (
  `id` int(11) UNSIGNED NOT NULL,
  `unvani` text COLLATE utf8_turkish_ci NOT NULL,
  `yadi` text COLLATE utf8_turkish_ci NOT NULL,
  `ysoyadi` text COLLATE utf8_turkish_ci NOT NULL,
  `dairesi` text COLLATE utf8_turkish_ci NOT NULL,
  `verginumarasi` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `tel` text COLLATE utf8_turkish_ci NOT NULL,
  `cep` text COLLATE utf8_turkish_ci NOT NULL,
  `fax` text COLLATE utf8_turkish_ci NOT NULL,
  `mail` text COLLATE utf8_turkish_ci NOT NULL,
  `adres` text COLLATE utf8_turkish_ci NOT NULL,
  `ilce` text COLLATE utf8_turkish_ci NOT NULL,
  `il` text COLLATE utf8_turkish_ci NOT NULL,
  `caritipi` text COLLATE utf8_turkish_ci NOT NULL,
  `risklimiti` text COLLATE utf8_turkish_ci NOT NULL,
  `parabirimi` text COLLATE utf8_turkish_ci NOT NULL,
  `cariiskonto` text COLLATE utf8_turkish_ci NOT NULL,
  `nott` text COLLATE utf8_turkish_ci NOT NULL,
  `ekleyen` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Cariler`
--

INSERT INTO `Cariler` (`id`, `unvani`, `yadi`, `ysoyadi`, `dairesi`, `verginumarasi`, `tel`, `cep`, `fax`, `mail`, `adres`, `ilce`, `il`, `caritipi`, `risklimiti`, `parabirimi`, `cariiskonto`, `nott`, `ekleyen`) VALUES
(1, 'DENEME FİRMA', '-', '-', '-', '0', '-', '-', '-', '-', '                        \r\n-', '-', '-', '1', '1000', '1', '', '												', 1),
(2, 'DENEME  TOPTANCI  FİRMA', '0', '0', '0', '0', '0', '0', '0', 'deneme@deneme.com', '                        \r\n0', '0', '0', '2', '100000', '1', '0', '\r\n												', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `CekSenet`
--

CREATE TABLE `CekSenet` (
  `id` int(11) UNSIGNED NOT NULL,
  `ceknumarasi` int(11) NOT NULL,
  `islemtarihi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `vadetarihi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `tutar` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `bankaadi` text COLLATE utf8_turkish_ci NOT NULL,
  `bankasubesi` text COLLATE utf8_turkish_ci NOT NULL,
  `hesapnumarasi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `unvan` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `evrakturu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `cekturu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ceksenet` text COLLATE utf8_turkish_ci NOT NULL,
  `islem` text COLLATE utf8_turkish_ci NOT NULL,
  `ekleyen` int(11) NOT NULL,
  `parabirimi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Depolar`
--

CREATE TABLE `Depolar` (
  `id` int(11) UNSIGNED NOT NULL,
  `depoadi` text COLLATE utf8_turkish_ci NOT NULL,
  `acilistarihi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Depolar`
--

INSERT INTO `Depolar` (`id`, `depoadi`, `acilistarihi`, `aciklama`) VALUES
(1, 'DEPO', '2023-08-12 21:28', 'DEPO');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `DepoTransfer`
--

CREATE TABLE `DepoTransfer` (
  `id` int(11) NOT NULL,
  `cikandepo` varchar(11) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `girendepo` varchar(11) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `miktar` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `urun` int(11) NOT NULL,
  `islemtarihi` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `KasaGiris`
--

CREATE TABLE `KasaGiris` (
  `id` int(11) UNSIGNED NOT NULL,
  `unvan` text COLLATE utf8_turkish_ci NOT NULL,
  `islemtarihi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `evraknumarasi` int(20) NOT NULL,
  `tutar` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kasaadi` int(11) NOT NULL,
  `islem` text COLLATE utf8_turkish_ci NOT NULL,
  `ekleyen` int(11) NOT NULL,
  `parabirimi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `KasaGiris`
--

INSERT INTO `KasaGiris` (`id`, `unvan`, `islemtarihi`, `aciklama`, `evraknumarasi`, `tutar`, `kasaadi`, `islem`, `ekleyen`, `parabirimi`) VALUES
(1, '1', '2023-08-17 18:34', 'ferntn', 563270, '10000', 1, 'kasagirdi', 1, 1),
(2, '2', '2023-08-17 18:34', 'efgrhtjyu', 436783, '5000', 1, 'kasacikti', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Kasalar`
--

CREATE TABLE `Kasalar` (
  `id` int(11) UNSIGNED NOT NULL,
  `kasaadi` text COLLATE utf8_turkish_ci NOT NULL,
  `acilistarihi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Kasalar`
--

INSERT INTO `Kasalar` (`id`, `kasaadi`, `acilistarihi`, `aciklama`) VALUES
(1, 'MERKEZ KASA', '2023-08-12 21:27', 'MERKEZ KASA				');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Kdvler`
--

CREATE TABLE `Kdvler` (
  `id` int(11) UNSIGNED NOT NULL,
  `kdvorani` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Kdvler`
--

INSERT INTO `Kdvler` (`id`, `kdvorani`) VALUES
(1, 0),
(2, 1),
(3, 10),
(4, 20);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Kullanicilar`
--

CREATE TABLE `Kullanicilar` (
  `id` int(11) UNSIGNED NOT NULL,
  `ad` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `kullaniciadi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `yetki` int(11) NOT NULL,
  `cariekle` int(11) NOT NULL,
  `cariduzenle` int(11) NOT NULL,
  `carisil` int(11) NOT NULL,
  `stokekle` int(11) NOT NULL,
  `stokduzenle` int(11) NOT NULL,
  `stoksil` int(11) NOT NULL,
  `alisfaturaekle` int(11) NOT NULL,
  `alisfaturaduzenle` int(11) NOT NULL,
  `alisfaturasil` int(11) NOT NULL,
  `satisfaturaekle` int(11) NOT NULL,
  `satisfaturaduzenle` int(11) NOT NULL,
  `satisfaturasil` int(11) NOT NULL,
  `verilencekekle` int(11) NOT NULL,
  `verilencekduzenle` int(11) NOT NULL,
  `verilenceksil` int(11) NOT NULL,
  `verilensenetekle` int(11) NOT NULL,
  `verilensenetduzenle` int(11) NOT NULL,
  `verilensenetsil` int(11) NOT NULL,
  `alinancekekle` int(11) NOT NULL,
  `alinancekduzenle` int(11) NOT NULL,
  `alinanceksil` int(11) NOT NULL,
  `alinansenetekle` int(11) NOT NULL,
  `alinansenetduzenle` int(11) NOT NULL,
  `alinansenetsil` int(11) NOT NULL,
  `kasaekle` int(11) NOT NULL,
  `kasaduzenle` int(11) NOT NULL,
  `kasasil` int(11) NOT NULL,
  `kasagirisekle` int(11) NOT NULL,
  `kasagirisduzenle` int(11) NOT NULL,
  `kasagirissil` int(11) NOT NULL,
  `kasacikisekle` int(11) NOT NULL,
  `kasacikisduzenle` int(11) NOT NULL,
  `kasacikissil` int(11) NOT NULL,
  `bankaekle` int(11) NOT NULL,
  `bankaduzenle` int(11) NOT NULL,
  `bankasil` int(11) NOT NULL,
  `bankagirisekle` int(11) NOT NULL,
  `bankagirisduzenle` int(11) NOT NULL,
  `bankagirissil` int(11) NOT NULL,
  `bankacikisekle` int(11) NOT NULL,
  `bankacikisduzenle` int(11) NOT NULL,
  `bankacikissil` int(11) NOT NULL,
  `depoekle` int(11) NOT NULL,
  `depoduzenle` int(11) NOT NULL,
  `deposil` int(11) NOT NULL,
  `stokgrupekle` int(11) NOT NULL,
  `stokgrupduzenle` int(11) NOT NULL,
  `stokgrupsil` int(11) NOT NULL,
  `birimekle` int(11) NOT NULL,
  `birimduzenle` int(11) NOT NULL,
  `birimsil` int(11) NOT NULL,
  `markaekle` int(11) NOT NULL,
  `markaduzenle` int(11) NOT NULL,
  `markasil` int(11) NOT NULL,
  `modelekle` int(11) NOT NULL,
  `modelduzenle` int(11) NOT NULL,
  `modelsil` int(11) NOT NULL,
  `kdvekle` int(11) NOT NULL,
  `kdvduzenle` int(11) NOT NULL,
  `kdvsil` int(11) NOT NULL,
  `otvekle` int(11) NOT NULL,
  `otvduzenle` int(11) NOT NULL,
  `otvsil` int(11) NOT NULL,
  `carigrupekle` int(11) NOT NULL,
  `carigrupduzenle` int(11) NOT NULL,
  `carigrupsil` int(11) NOT NULL,
  `parabirimiekle` int(11) NOT NULL,
  `parabirimiduzenle` int(11) NOT NULL,
  `parabirimisil` int(11) NOT NULL,
  `carialacaklandir` int(11) NOT NULL,
  `carialacaklandirduzenle` int(11) NOT NULL,
  `carialacaklandirsil` int(11) NOT NULL,
  `cariborclandir` int(11) NOT NULL,
  `cariborclandirduzenle` int(11) NOT NULL,
  `cariborclandirsil` int(11) NOT NULL,
  `mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `gizlisoru` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `gizlicevap` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `depotransferekle` int(11) NOT NULL,
  `depotransferduzenle` int(11) NOT NULL,
  `depotransfersil` int(11) NOT NULL,
  `personelekle` int(11) NOT NULL,
  `personelduzenle` int(11) NOT NULL,
  `personelsil` int(11) NOT NULL,
  `personelmesaiekle` int(11) NOT NULL,
  `personelmesaiduzenle` int(11) NOT NULL,
  `personelmesaisil` int(11) NOT NULL,
  `personelizinekle` int(11) NOT NULL,
  `personelizinduzenle` int(11) NOT NULL,
  `personelizinsil` int(11) NOT NULL,
  `personelmaasekle` int(11) NOT NULL,
  `personelmaasduzenle` int(11) NOT NULL,
  `personelmaassil` int(11) NOT NULL,
  `personelodemeekle` int(11) NOT NULL,
  `personelodemeduzenle` int(11) NOT NULL,
  `personelodemesil` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Kullanicilar`
--

INSERT INTO `Kullanicilar` (`id`, `ad`, `soyad`, `kullaniciadi`, `sifre`, `yetki`, `cariekle`, `cariduzenle`, `carisil`, `stokekle`, `stokduzenle`, `stoksil`, `alisfaturaekle`, `alisfaturaduzenle`, `alisfaturasil`, `satisfaturaekle`, `satisfaturaduzenle`, `satisfaturasil`, `verilencekekle`, `verilencekduzenle`, `verilenceksil`, `verilensenetekle`, `verilensenetduzenle`, `verilensenetsil`, `alinancekekle`, `alinancekduzenle`, `alinanceksil`, `alinansenetekle`, `alinansenetduzenle`, `alinansenetsil`, `kasaekle`, `kasaduzenle`, `kasasil`, `kasagirisekle`, `kasagirisduzenle`, `kasagirissil`, `kasacikisekle`, `kasacikisduzenle`, `kasacikissil`, `bankaekle`, `bankaduzenle`, `bankasil`, `bankagirisekle`, `bankagirisduzenle`, `bankagirissil`, `bankacikisekle`, `bankacikisduzenle`, `bankacikissil`, `depoekle`, `depoduzenle`, `deposil`, `stokgrupekle`, `stokgrupduzenle`, `stokgrupsil`, `birimekle`, `birimduzenle`, `birimsil`, `markaekle`, `markaduzenle`, `markasil`, `modelekle`, `modelduzenle`, `modelsil`, `kdvekle`, `kdvduzenle`, `kdvsil`, `otvekle`, `otvduzenle`, `otvsil`, `carigrupekle`, `carigrupduzenle`, `carigrupsil`, `parabirimiekle`, `parabirimiduzenle`, `parabirimisil`, `carialacaklandir`, `carialacaklandirduzenle`, `carialacaklandirsil`, `cariborclandir`, `cariborclandirduzenle`, `cariborclandirsil`, `mail`, `gizlisoru`, `gizlicevap`, `depotransferekle`, `depotransferduzenle`, `depotransfersil`, `personelekle`, `personelduzenle`, `personelsil`, `personelmesaiekle`, `personelmesaiduzenle`, `personelmesaisil`, `personelizinekle`, `personelizinduzenle`, `personelizinsil`, `personelmaasekle`, `personelmaasduzenle`, `personelmaassil`, `personelodemeekle`, `personelodemeduzenle`, `personelodemesil`) VALUES
(1, 'OSMAN', 'GÖKÖZ', 'osman', '814887a62c072dd1243f658e1d096a8ec73abb26', 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'deneme@deneme.com', 'deneme', 'deneme', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 'demo', 'demo', 'demo', 'a69681bcf334ae130217fea4505fd3c994f5683f', 3, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 0, 1, 1, 0, 1, 1, 0, 1, 1, 0, 0, 0, 0, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, '', '', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Markalar`
--

CREATE TABLE `Markalar` (
  `id` int(11) UNSIGNED NOT NULL,
  `markaadi` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Markalar`
--

INSERT INTO `Markalar` (`id`, `markaadi`) VALUES
(1, 'DENEME');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Mesajlar`
--

CREATE TABLE `Mesajlar` (
  `id` int(11) NOT NULL,
  `kimden` int(11) NOT NULL,
  `kime` int(11) NOT NULL,
  `mesajtarihi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` varchar(555) COLLATE utf8_turkish_ci NOT NULL,
  `okunma` int(11) NOT NULL,
  `gonderenpasif` int(11) NOT NULL,
  `alanpasif` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Modeller`
--

CREATE TABLE `Modeller` (
  `id` int(11) UNSIGNED NOT NULL,
  `modeladi` text COLLATE utf8_turkish_ci NOT NULL,
  `markadi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Modeller`
--

INSERT INTO `Modeller` (`id`, `modeladi`, `markadi`) VALUES
(1, 'DENEME MODEL', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ParaBirimleri`
--

CREATE TABLE `ParaBirimleri` (
  `id` int(11) UNSIGNED NOT NULL,
  `parabirimadi` text COLLATE utf8_turkish_ci NOT NULL,
  `kur` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `kisaltma` varchar(55) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ParaBirimleri`
--

INSERT INTO `ParaBirimleri` (`id`, `parabirimadi`, `kur`, `kisaltma`) VALUES
(1, 'TÜRK LİRASI', 'TL', 'TL');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `PersonelIzin`
--

CREATE TABLE `PersonelIzin` (
  `id` int(11) NOT NULL,
  `izinsayisi` int(11) NOT NULL,
  `izincikis` date NOT NULL,
  `izindonus` date NOT NULL,
  `izinturu` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `personelid` int(11) NOT NULL,
  `aciklama` text NOT NULL,
  `ekleyen` int(11) NOT NULL,
  `ucret` varchar(55) NOT NULL,
  `islemtarihi` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Personeller`
--

CREATE TABLE `Personeller` (
  `id` int(11) NOT NULL,
  `ad` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `soyad` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tckn` varchar(15) NOT NULL,
  `dogumtarihi` date NOT NULL,
  `isegiristarihi` date NOT NULL,
  `medenidurumu` varchar(55) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `cocuksayisi` int(11) NOT NULL,
  `maas` varchar(55) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `agi` varchar(55) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `mesaiucret` varchar(55) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ekleyen` int(11) NOT NULL,
  `yillikizinsayisi` int(11) NOT NULL,
  `gorevi` varchar(255) NOT NULL,
  `dogumyeri` varchar(255) NOT NULL,
  `tel` varchar(55) NOT NULL,
  `askerlik` varchar(55) NOT NULL,
  `ikamet` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `PersonelMaas`
--

CREATE TABLE `PersonelMaas` (
  `id` int(11) NOT NULL,
  `maas` varchar(55) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `agi` varchar(55) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `agilimaas` varchar(55) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(55) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ekleyen` int(11) NOT NULL,
  `islemtarihi` varchar(55) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `personelid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `PersonelMesai`
--

CREATE TABLE `PersonelMesai` (
  `idim` int(11) NOT NULL,
  `sure` varchar(55) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `personelid` int(11) NOT NULL,
  `mesaitutar` varchar(11) NOT NULL,
  `mesaitarih` varchar(55) NOT NULL,
  `ekleyen` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `mesaiucret` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `PersonelOdeme`
--

CREATE TABLE `PersonelOdeme` (
  `id` int(11) NOT NULL,
  `ekleyen` int(11) NOT NULL,
  `personelid` int(11) NOT NULL,
  `islemtarihi` varchar(55) NOT NULL,
  `odemeturu` varchar(55) NOT NULL,
  `odeme` varchar(55) NOT NULL,
  `aciklama` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `SatFatBag`
--

CREATE TABLE `SatFatBag` (
  `bilgiid` int(11) NOT NULL,
  `faturaid` int(11) NOT NULL,
  `id` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `SatFatBag`
--

INSERT INTO `SatFatBag` (`bilgiid`, `faturaid`, `id`) VALUES
(1, 1, 1),
(1, 2, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `SatFatBilgi`
--

CREATE TABLE `SatFatBilgi` (
  `id` int(11) UNSIGNED NOT NULL,
  `cariadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `faturatarihi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `faturaseri` text COLLATE utf8_turkish_ci NOT NULL,
  `faturanumarasi` int(50) NOT NULL,
  `odemetipi` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `depo` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `odeme` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `aratoplam` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kdvtoplam` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `geneltoplam` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ekleyen` int(11) NOT NULL,
  `parabirimi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `SatFatBilgi`
--

INSERT INTO `SatFatBilgi` (`id`, `cariadi`, `faturatarihi`, `tarih`, `faturaseri`, `faturanumarasi`, `odemetipi`, `depo`, `odeme`, `aratoplam`, `kdvtoplam`, `geneltoplam`, `ekleyen`, `parabirimi`) VALUES
(1, '1', '2023-08-12 21:29', '2023-08-12', 'ZC', 866347, 'satis', '1', '', '1000.00', '200.00', '1200.00', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `SatisFaturasi`
--

CREATE TABLE `SatisFaturasi` (
  `id` int(11) UNSIGNED NOT NULL,
  `urunadi` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `adet` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `kdvsiztoplam` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `kdvoran` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `kdvtutar` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `kdvlitoplam` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `depo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `SatisFaturasi`
--

INSERT INTO `SatisFaturasi` (`id`, `urunadi`, `adet`, `fiyat`, `kdvsiztoplam`, `kdvoran`, `kdvtutar`, `kdvlitoplam`, `depo`) VALUES
(1, '1', '20', '20', '400.00', '20', '80.00', '480.00', 1),
(2, '2', '3', '200', '600.00', '20', '120.00', '720.00', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `StokGruplar`
--

CREATE TABLE `StokGruplar` (
  `id` int(11) UNSIGNED NOT NULL,
  `stokgrupadi` text COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `StokGruplar`
--

INSERT INTO `StokGruplar` (`id`, `stokgrupadi`, `resim`) VALUES
(1, 'ELEKTRİK', ''),
(2, 'HIRDAVAT', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Tema`
--

CREATE TABLE `Tema` (
  `logoarka` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `logorenk` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `logoyazi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ustmenuarka` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `yanmenuarka` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `arkaplan` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `sloganrenk` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `tablorenk` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `id` int(11) NOT NULL,
  `logoboyut` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sloganyazi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sloganboyut` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `animasyon` varchar(55) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Tema`
--

INSERT INTO `Tema` (`logoarka`, `logorenk`, `logoyazi`, `ustmenuarka`, `yanmenuarka`, `arkaplan`, `sloganrenk`, `tablorenk`, `id`, `logoboyut`, `sloganyazi`, `sloganboyut`, `animasyon`) VALUES
('dark', 'yazirenk-beyaz', 'ornamental', 'dark', 'dark', 'dark', 'yazirenk-beyaz', 'primary', 1, 'yazi40', 'alyslight', 'yazi38', 'bounceIn');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Urunler`
--

CREATE TABLE `Urunler` (
  `id` int(11) UNSIGNED NOT NULL,
  `urunadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urunkodu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urunbarkodu` int(13) NOT NULL,
  `alisfiyati` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `satisfiyati` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kdvorani` int(11) NOT NULL,
  `stokgrubu` text COLLATE utf8_turkish_ci NOT NULL,
  `markasi` varchar(70) COLLATE utf8_turkish_ci NOT NULL,
  `modeli` varchar(70) COLLATE utf8_turkish_ci NOT NULL,
  `resmi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `uyarilimiti` int(11) NOT NULL,
  `otvoran` int(11) NOT NULL,
  `kdvsizalisfiyati` int(11) NOT NULL,
  `kdvsizsatisfiyati` int(11) NOT NULL,
  `birimadi` int(11) NOT NULL,
  `ozellikler` text COLLATE utf8_turkish_ci NOT NULL,
  `ekleyen` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Urunler`
--

INSERT INTO `Urunler` (`id`, `urunadi`, `urunkodu`, `urunbarkodu`, `alisfiyati`, `satisfiyati`, `kdvorani`, `stokgrubu`, `markasi`, `modeli`, `resmi`, `uyarilimiti`, `otvoran`, `kdvsizalisfiyati`, `kdvsizsatisfiyati`, `birimadi`, `ozellikler`, `ekleyen`) VALUES
(1, 'DENEME ÜRÜN', '49189', 2147483647, '12', '24', 20, '1', '1', '1', 'UrunResimleri/16918648231687245825pngegg.png', 100, 0, 10, 20, 1, '', 1),
(2, 'DENEME ÜRÜN 2', '195358', 2147483647, '120', '240', 20, '2', '1', '1', 'UrunResimleri/16918648531687246121646f755fbe039_pngegg-(7).png', 10, 0, 100, 200, 1, '', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `Ajanda`
--
ALTER TABLE `Ajanda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `AlFatBag`
--
ALTER TABLE `AlFatBag`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `AlFatBilgi`
--
ALTER TABLE `AlFatBilgi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `AlisFaturasi`
--
ALTER TABLE `AlisFaturasi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Ayarlar`
--
ALTER TABLE `Ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `BankaGiris`
--
ALTER TABLE `BankaGiris`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Bankalar`
--
ALTER TABLE `Bankalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Birim`
--
ALTER TABLE `Birim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `CariGruplar`
--
ALTER TABLE `CariGruplar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `CariIslem`
--
ALTER TABLE `CariIslem`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Cariler`
--
ALTER TABLE `Cariler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `CekSenet`
--
ALTER TABLE `CekSenet`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Depolar`
--
ALTER TABLE `Depolar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `DepoTransfer`
--
ALTER TABLE `DepoTransfer`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `KasaGiris`
--
ALTER TABLE `KasaGiris`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Kasalar`
--
ALTER TABLE `Kasalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Kdvler`
--
ALTER TABLE `Kdvler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Kullanicilar`
--
ALTER TABLE `Kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Markalar`
--
ALTER TABLE `Markalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Mesajlar`
--
ALTER TABLE `Mesajlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Modeller`
--
ALTER TABLE `Modeller`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ParaBirimleri`
--
ALTER TABLE `ParaBirimleri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `PersonelIzin`
--
ALTER TABLE `PersonelIzin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Personeller`
--
ALTER TABLE `Personeller`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `PersonelMaas`
--
ALTER TABLE `PersonelMaas`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `PersonelMesai`
--
ALTER TABLE `PersonelMesai`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `PersonelOdeme`
--
ALTER TABLE `PersonelOdeme`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `SatFatBag`
--
ALTER TABLE `SatFatBag`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `SatFatBilgi`
--
ALTER TABLE `SatFatBilgi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `SatisFaturasi`
--
ALTER TABLE `SatisFaturasi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `StokGruplar`
--
ALTER TABLE `StokGruplar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Tema`
--
ALTER TABLE `Tema`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Urunler`
--
ALTER TABLE `Urunler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `Ajanda`
--
ALTER TABLE `Ajanda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `AlFatBag`
--
ALTER TABLE `AlFatBag`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `AlFatBilgi`
--
ALTER TABLE `AlFatBilgi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `AlisFaturasi`
--
ALTER TABLE `AlisFaturasi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `Ayarlar`
--
ALTER TABLE `Ayarlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `BankaGiris`
--
ALTER TABLE `BankaGiris`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `Bankalar`
--
ALTER TABLE `Bankalar`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `Birim`
--
ALTER TABLE `Birim`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `CariGruplar`
--
ALTER TABLE `CariGruplar`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `CariIslem`
--
ALTER TABLE `CariIslem`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `Cariler`
--
ALTER TABLE `Cariler`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `CekSenet`
--
ALTER TABLE `CekSenet`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `Depolar`
--
ALTER TABLE `Depolar`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `DepoTransfer`
--
ALTER TABLE `DepoTransfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `KasaGiris`
--
ALTER TABLE `KasaGiris`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `Kasalar`
--
ALTER TABLE `Kasalar`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `Kdvler`
--
ALTER TABLE `Kdvler`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `Kullanicilar`
--
ALTER TABLE `Kullanicilar`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `Markalar`
--
ALTER TABLE `Markalar`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `Mesajlar`
--
ALTER TABLE `Mesajlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `Modeller`
--
ALTER TABLE `Modeller`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `ParaBirimleri`
--
ALTER TABLE `ParaBirimleri`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `PersonelIzin`
--
ALTER TABLE `PersonelIzin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `Personeller`
--
ALTER TABLE `Personeller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `PersonelMaas`
--
ALTER TABLE `PersonelMaas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `PersonelMesai`
--
ALTER TABLE `PersonelMesai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `PersonelOdeme`
--
ALTER TABLE `PersonelOdeme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `SatFatBag`
--
ALTER TABLE `SatFatBag`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `SatFatBilgi`
--
ALTER TABLE `SatFatBilgi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `SatisFaturasi`
--
ALTER TABLE `SatisFaturasi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `StokGruplar`
--
ALTER TABLE `StokGruplar`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `Tema`
--
ALTER TABLE `Tema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `Urunler`
--
ALTER TABLE `Urunler`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
