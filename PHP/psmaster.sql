-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2014 �?08 ??14 ??17:29
-- 伺服器版本: 5.6.16
-- PHP 版本： 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `psmaster`
--

-- --------------------------------------------------------

--
-- 資料表結構 `puser`
--

CREATE TABLE IF NOT EXISTS `puser` (
  `Fir_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Las_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `E_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Pwd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Pkey` int(255) NOT NULL AUTO_INCREMENT,
  `Reg_date` date NOT NULL,
  PRIMARY KEY (`Pkey`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user_table' AUTO_INCREMENT=7 ;

--
-- 資料表的匯出資料 `puser`
--

INSERT INTO `puser` (`Fir_name`, `Las_name`, `E_mail`, `Pwd`, `Pkey`, `Reg_date`) VALUES
('jack', 'lee', 'a1234@gmail.com', 'qwer', 5, '2014-08-14'),
('ted', 'chang', 'a4343102@gmail.com', 'asd', 6, '2014-08-14');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
