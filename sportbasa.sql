-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 09 2014 г., 00:01
-- Версия сервера: 5.5.34-0ubuntu0.13.04.1
-- Версия PHP: 5.4.9-4ubuntu2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `sportbasa`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `log` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `log`, `pass`) VALUES
(1, 'admin', 'qwerty');

-- --------------------------------------------------------

--
-- Структура таблицы `athlete`
--

CREATE TABLE IF NOT EXISTS `athlete` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Age` int(100) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Weight` int(100) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Titul` varchar(55) NOT NULL,
  `img` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Login` varchar(255) NOT NULL,
  `Round1` int(10) NOT NULL,
  `Round2` int(10) NOT NULL,
  `Round3` int(10) NOT NULL,
  `Round4` int(10) NOT NULL,
  `Round5` int(10) NOT NULL,
  `Round6` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Дамп данных таблицы `athlete`
--

INSERT INTO `athlete` (`id`, `Name`, `Lastname`, `Age`, `Date`, `Weight`, `Country`, `Status`, `Titul`, `img`, `Gender`, `Login`, `Round1`, `Round2`, `Round3`, `Round4`, `Round5`, `Round6`) VALUES
(1, 'SPORTMEN', 'SPORTMEN', 14, '1.1.2014', 60, 'Belgium(BEL)', 'ATHLETE', 'нет', 'avatars/1389703501.jpg', 'W', 'SPORTMEN', 0, 0, 0, 0, 0, 0),
(2, 'Bob', 'Smits', 14, '07.05.1979', 60, 'Belgium(BEL)', 'ATHLETE', 'Чемпион Европы 2013', 'avatars/1389737016.jpg', 'W', 'somer', 0, 0, 0, 0, 0, 0),
(3, 'dawer', 'dawer', 12, '16.12.2014', 60, 'Poland(POL)', 'ATHLETE', 'нет', 'avatars/1389786896.jpg', 'W', 'dawer', 0, 0, 0, 0, 0, 0),
(4, 'Oleg', 'Polivaiko', 21, '19.12.1993', 92, 'Ukraine(UKR)', 'ATHLETE', 'нет', 'avatars/1391178146.jpg', 'M', 'mygik', 0, 0, 0, 0, 0, 0),
(5, 'Mikael', 'Turov', 18, '20.12.1997', 90, 'Belgium(BEL)', 'ATHLETE', 'нет', 'avatars/1391183493.jpg', 'M', 'kolom', 0, 0, 0, 0, 0, 0),
(6, 'Marlin', 'Maffka', 21, '19.12.1995', 92, 'Belgium(BEL)', 'ATHLETE', 'нет', 'avatars/1391184370.jpg', 'M', 'bober', 0, 0, 0, 0, 0, 0),
(7, 'Vijgar', 'Ragimov', 18, '20.02.1995', 70, 'Belgium(BEL)', 'ATHLETE', 'Чемпион Европы 2013', 'avatars/1391253255.jpg', 'M', 'faceoff', 0, 0, 0, 0, 0, 0),
(8, 'Konstantin', 'Belickii', 18, '20.11.1995', 70, 'Poland(POL)', 'ATHLETE', 'нет', 'avatars/1391253318.jpg', 'M', 'fast', 0, 0, 0, 0, 0, 0),
(9, 'Armen', 'Vardanijan', 18, '17.12.1995', 70, 'Russia(RUS)', 'ATHLETE', 'нет', 'avatars/1391253384.jpg', 'M', 'fanny', 0, 0, 0, 0, 0, 0),
(10, 'Vladimir', 'Shackih', 18, '20.09.1995', 70, 'Poland(POL)', 'ATHLETE', 'М.Т.', 'avatars/1391253451.jpg', 'M', 'faust', 0, 0, 0, 0, 0, 0),
(11, 'Vasilyi', 'Rachiba', 18, '23.10.1995', 70, 'Ukraine(UKR)', 'ATHLETE', 'нет', 'avatars/1391253523.jpg', 'M', 'fibi', 0, 0, 0, 0, 0, 0),
(12, 'Dmitryi', 'Timchenko', 18, '20.11.1995', 70, 'Poland(POL)', 'ATHLETE', 'В.И.', 'avatars/1391253600.jpg', 'M', 'orange', 0, 0, 0, 0, 0, 0),
(13, 'Igor', 'Didik', 18, '16.02.1996', 70, 'Belgium(BEL)', 'ATHLETE', 'Чемпион мира 2013', 'avatars/1391253728.jpg', 'M', 'force', 0, 0, 0, 0, 0, 0),
(14, 'Atanov', 'Dmitryi', 18, '16.11.1995', 70, 'Russia(RUS)', 'ATHLETE', 'нет', 'avatars/1391253892.jpg', 'M', 'flame', 0, 0, 0, 0, 0, 0),
(15, 'Vasily', 'Koshmar', 16, '01.01.2014', 75, 'Belgium(BEL)', 'ATHLETE', 'нет', 'avatars/1391290590.jpg', 'M', 'dfhdh', 16, 27, 22, 0, 0, 0),
(16, 'Bob', 'Marly', 16, '17.12.1996', 75, 'Ukraine(UKR)', 'ATHLETE', 'В.И.', 'avatars/1391291172.jpg', 'M', 'login', 21, 11, 25, 0, 0, 0),
(17, 'Oleg', 'Ljagko', 14, '11.12.2013', 65, 'Belgium(BEL)', 'ATHLETE', 'Чемпион мира 2013', 'avatars/1391296046.jpg', 'M', 'forge', 0, 0, 0, 0, 0, 0),
(18, 'Ben', 'Justin', 16, '20.10.2004', 75, 'Belgium(BEL)', 'ATHLETE', 'Чемпион мира 2013', 'avatars/1391361879.jpg', 'M', 'doma', 14, 8, 24, 13, 6, 3),
(19, 'Masd', 'Myr', 16, '18.11.1997', 75, 'Russia(RUS)', 'ATHLETE', 'Чемпион Европы 2013', 'avatars/1392234748.jpg', 'M', 'mail', 17, 9, 4, 0, 7, 3),
(20, 'Luis', 'Vahtang', 16, '18.11.1996', 75, 'Poland(POL)', 'ATHLETE', 'нет', 'avatars/1392234870.jpg', 'M', 'lofin', 19, 10, 5, 2, 1, 1),
(21, 'Mosha', 'Lisda', 16, '13.12.1999', 75, 'Poland(POL)', 'ATHLETE', 'М.Т.', 'avatars/1392316974.jpg', 'M', 'vove', 18, 28, 23, 12, 0, 0),
(22, 'Homa', 'Gogre', 18, '31.12.2006', 70, 'Ukraine(UKR)', 'ATHLETE', 'нет', 'avatars/1392317586.jpg', 'M', 'sport', 0, 0, 0, 0, 0, 0),
(23, 'slava', 'slava', 23, '14.07.1997', 115, 'Ukraine(UKR)', 'ATHLETE', 'М.Т', 'avatars/1395144986.jpg', 'M', 'slava', 0, 0, 0, 0, 0, 0),
(24, 'sewr', 'sewr', 18, '17.11.1996', 60, 'Ukraine(UKR)', 'ATHLETE', 'В.И.', 'avatars/1396524362.jpg', 'M', 'sewr', 21, 11, 0, 0, 0, 0),
(25, 'qwertvg', 'qwertvg', 18, '19.01.2014', 60, 'Poland(POL)', 'ATHLETE', 'нет', 'avatars/1396524414.jpg', 'M', 'qwertvg', 17, 0, 0, 0, 0, 0),
(26, 'sdeft', 'sdeft', 18, '19.11.1997', 60, 'Poland(POL)', 'ATHLETE', 'Чемпион мира 2013', 'avatars/1396524459.jpg', 'M', 'sdeft', 14, 8, 0, 0, 0, 0),
(27, 'qweghj', 'qweghj', 18, '19.10.1997', 60, 'Belgium(BEL)', 'ATHLETE', 'Чемпион Европы 2013', 'avatars/1396524500.jpg', 'M', 'qweghj', 18, 10, 0, 0, 0, 0),
(28, 'asdgd', 'asdgd', 18, '19.12.1996', 60, 'Russia(RUS)', 'ATHLETE', 'нет', 'avatars/1396524671.jpg', 'M', 'asdgd', 16, 0, 0, 0, 0, 0),
(29, 'qasdfg', 'qasdfg', 21, '25.02.1998', 70, 'Ukraine(UKR)', 'ATHLETE', 'Чемпион мира 2013', 'avatars/1396727048.jpg', 'M', 'qasdfg', 0, 0, 0, 0, 0, 0),
(30, 'fsetewtw', 'fsetewtw', 21, '20.11.1998', 70, 'Poland(POL)', 'ATHLETE', 'М.Т', 'avatars/1396727078.jpg', 'M', 'fsetewtw', 0, 0, 0, 0, 0, 0),
(31, 'sgsgr', 'sgsgr', 21, '19.12.1999', 70, 'Russia(RUS)', 'ATHLETE', 'нет', 'avatars/1396727391.jpg', 'M', 'sgsgr', 0, 0, 0, 0, 0, 0),
(32, 'qasdfgy', 'qasdfgy', 21, '01.01.2014', 70, 'Russia(RUS)', 'ATHLETE', 'Чемпион Европы 2013', 'avatars/1396727575.jpg', 'M', 'qasdfgy', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `base_8`
--

CREATE TABLE IF NOT EXISTS `base_8` (
  `tour_id` int(11) NOT NULL AUTO_INCREMENT,
  `tournament_id` int(11) NOT NULL,
  `tour_left` int(11) NOT NULL,
  `tour_right` int(11) NOT NULL,
  `tour_level` int(11) NOT NULL,
  `tour_name` varchar(2) NOT NULL,
  `consolation` int(25) NOT NULL,
  PRIMARY KEY (`tour_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Дамп данных таблицы `base_8`
--

INSERT INTO `base_8` (`tour_id`, `tournament_id`, `tour_left`, `tour_right`, `tour_level`, `tour_name`, `consolation`) VALUES
(1, 0, 1, 58, 0, '', 0),
(2, 0, 2, 31, 1, 'A', 2),
(3, 0, 32, 57, 1, 'B', 2),
(4, 0, 3, 16, 2, 'W', 7),
(5, 0, 17, 30, 2, 'X', 7),
(6, 0, 33, 54, 2, 'Y', 3),
(7, 0, 55, 56, 2, 'Z', 3),
(8, 0, 4, 9, 3, 'Q', 24),
(9, 0, 10, 15, 3, 'R', 24),
(10, 0, 18, 23, 3, 'S', 25),
(11, 0, 24, 29, 3, 'T', 25),
(12, 0, 34, 47, 3, 'U', 0),
(13, 0, 48, 53, 3, 'V', 0),
(14, 0, 5, 6, 4, 'I', 26),
(15, 0, 7, 8, 4, 'Z', 26),
(16, 0, 11, 12, 4, '', 27),
(17, 0, 13, 14, 4, '', 27),
(18, 0, 19, 20, 4, '', 28),
(19, 0, 21, 22, 4, '', 28),
(20, 0, 25, 26, 4, '', 29),
(21, 0, 27, 28, 4, '', 29),
(22, 0, 35, 40, 4, '', 0),
(23, 0, 41, 46, 4, '', 0),
(24, 0, 49, 50, 4, '', 0),
(25, 0, 51, 52, 4, '', 0),
(26, 0, 36, 37, 5, '', 0),
(27, 0, 38, 39, 5, '', 0),
(28, 0, 42, 43, 5, '', 0),
(29, 0, 44, 45, 5, '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `BASE_8_SEQ`
--

CREATE TABLE IF NOT EXISTS `BASE_8_SEQ` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `base_16`
--

CREATE TABLE IF NOT EXISTS `base_16` (
  `tour_id` int(11) NOT NULL AUTO_INCREMENT,
  `tournament_id` int(11) NOT NULL,
  `tour_left` int(11) NOT NULL,
  `tour_right` int(11) NOT NULL,
  `tour_level` int(11) NOT NULL,
  `tour_name` varchar(255) NOT NULL,
  PRIMARY KEY (`tour_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Дамп данных таблицы `base_16`
--

INSERT INTO `base_16` (`tour_id`, `tournament_id`, `tour_left`, `tour_right`, `tour_level`, `tour_name`) VALUES
(1, 0, 1, 62, 0, 'D'),
(2, 0, 2, 31, 1, 'A'),
(3, 0, 32, 61, 1, 'B'),
(4, 0, 3, 16, 2, 'W'),
(5, 0, 17, 30, 2, 'X'),
(6, 0, 33, 46, 2, 'Y'),
(7, 0, 47, 60, 2, 'Z'),
(8, 0, 4, 9, 3, 'Q'),
(9, 0, 10, 15, 3, 'R'),
(10, 0, 18, 23, 3, 'S'),
(11, 0, 24, 29, 3, 'T'),
(12, 0, 34, 39, 3, 'U'),
(13, 0, 40, 45, 3, 'V'),
(14, 0, 48, 53, 3, 'I'),
(15, 0, 54, 59, 3, 'Z'),
(16, 0, 5, 6, 4, 'A'),
(17, 0, 7, 8, 4, 'B'),
(18, 0, 11, 12, 4, 'C'),
(19, 0, 13, 14, 4, 'D'),
(20, 0, 19, 20, 4, 'E'),
(21, 0, 21, 22, 4, 'F'),
(22, 0, 25, 26, 4, 'G'),
(23, 0, 27, 28, 4, 'H'),
(24, 0, 35, 36, 4, 'I'),
(25, 0, 37, 38, 4, 'J'),
(26, 0, 41, 42, 4, 'K'),
(27, 0, 43, 44, 4, 'L'),
(28, 0, 49, 50, 4, 'M'),
(29, 0, 51, 52, 4, 'N'),
(30, 0, 55, 56, 4, 'O'),
(31, 0, 57, 58, 4, 'P');

-- --------------------------------------------------------

--
-- Структура таблицы `BASE_16_SEQ`
--

CREATE TABLE IF NOT EXISTS `BASE_16_SEQ` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `base_32`
--

CREATE TABLE IF NOT EXISTS `base_32` (
  `tour_id` int(11) NOT NULL AUTO_INCREMENT,
  `tournament_id` int(11) NOT NULL,
  `tour_left` int(11) NOT NULL,
  `tour_right` int(11) NOT NULL,
  `tour_level` int(11) NOT NULL,
  `tour_name` varchar(200) NOT NULL,
  PRIMARY KEY (`tour_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Дамп данных таблицы `base_32`
--

INSERT INTO `base_32` (`tour_id`, `tournament_id`, `tour_left`, `tour_right`, `tour_level`, `tour_name`) VALUES
(1, 0, 1, 74, 0, ''),
(2, 0, 2, 35, 1, 'Round1'),
(3, 0, 36, 53, 1, 'Round2'),
(4, 0, 54, 63, 1, 'Round3'),
(5, 0, 64, 69, 1, 'Round4'),
(6, 0, 70, 73, 1, 'Round5'),
(7, 0, 3, 4, 2, 'A'),
(8, 0, 5, 6, 2, 'B'),
(9, 0, 7, 8, 2, 'C'),
(10, 0, 9, 10, 2, 'D'),
(11, 0, 11, 12, 2, 'E'),
(12, 0, 13, 14, 2, 'F'),
(13, 0, 15, 16, 2, 'G'),
(14, 0, 17, 18, 2, 'H'),
(15, 0, 19, 20, 2, 'I'),
(16, 0, 21, 22, 2, 'J'),
(17, 0, 23, 24, 2, 'K'),
(18, 0, 25, 26, 2, 'L'),
(19, 0, 27, 28, 2, 'M'),
(20, 0, 29, 30, 2, 'N'),
(21, 0, 31, 32, 2, 'O'),
(22, 0, 33, 34, 2, 'P'),
(23, 0, 37, 38, 2, 'Q'),
(24, 0, 39, 40, 2, 'R'),
(25, 0, 41, 42, 2, 'S'),
(26, 0, 43, 44, 2, 'T'),
(27, 0, 45, 46, 2, 'U'),
(28, 0, 47, 48, 2, 'V'),
(29, 0, 49, 50, 2, 'W'),
(30, 0, 51, 52, 2, 'X'),
(31, 0, 55, 56, 2, 'Y'),
(32, 0, 57, 58, 2, 'Z'),
(33, 0, 59, 60, 2, 'A'),
(34, 0, 61, 62, 2, 'B'),
(35, 0, 65, 66, 2, 'C'),
(36, 0, 67, 68, 2, 'D'),
(37, 0, 71, 72, 2, 'E');

-- --------------------------------------------------------

--
-- Структура таблицы `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Abbreviation` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`id`, `Name`, `Abbreviation`) VALUES
(1, 'Belgium', 'BEL'),
(2, 'Poland', 'POL'),
(3, 'Russia', 'RUS'),
(4, 'Ukraine', 'UKR');

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Структура таблицы `info_tournament`
--

CREATE TABLE IF NOT EXISTS `info_tournament` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Count` int(100) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Round1` varchar(25) NOT NULL,
  `Round2` varchar(25) NOT NULL,
  `Round3` varchar(25) NOT NULL,
  `Round4` varchar(25) NOT NULL,
  `Round5` varchar(25) NOT NULL,
  `Round6` varchar(25) NOT NULL,
  `Winner` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `info_tournament`
--

INSERT INTO `info_tournament` (`id`, `Count`, `Type`, `Round1`, `Round2`, `Round3`, `Round4`, `Round5`, `Round6`, `Winner`) VALUES
(2, 6, '75_M_16', '26;27;', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `maintab`
--

CREATE TABLE IF NOT EXISTS `maintab` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `Login` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Дамп данных таблицы `maintab`
--

INSERT INTO `maintab` (`id`, `Name`, `Lastname`, `Country`, `Date`, `Status`, `img`, `Login`) VALUES
(1, '', '0', 'Ukraine(UKR)', '29.8.1993', 'REFFERE', 'avatars/1389474009.jpg', 'milana'),
(2, '', '0', 'Poland(POL)', '19.9.1988', 'COACH', 'avatars/1389474145.jpg', 'Radius'),
(3, '', '0', 'Poland(POL)', '1.1.2014', 'OFFICIAL', 'avatars/1389474188.jpg', 'dasha'),
(4, '', '0', 'Poland(POL)', '1.1.2014', 'OFFICIAL', 'avatars/1389474597.jpg', 'dasha'),
(5, '', '0', 'Poland(POL)', '1.1.2014', 'OFFICIAL', 'avatars/1389474602.jpg', 'dasha'),
(6, 'Mary', 'Poljakova', 'Belgium(BEL)', '19.8.1997', 'OFFICIAL', 'avatars/1389481550.jpg', 'mary'),
(7, 'Milania', 'Popova', 'Poland(POL)', '07.03.1996', 'COACH', 'avatars/1389803751.jpg', 'diametr'),
(8, 'Ivan', 'Popov', 'Poland(POL)', '1.12.1996', 'REFFERE', 'avatars/1389702284.jpg', 'ivan'),
(9, 'Ivan', 'Popov', 'Poland(POL)', '1.12.1996', 'REFFERE', 'avatars/1389702353.jpg', 'ivan'),
(10, 'Ivan', 'Popov', 'Poland(POL)', '1.12.1996', 'REFFERE', 'avatars/1389702403.jpg', 'ivan'),
(11, 'Gosha', 'Verttyn', 'Belgium(BEL)', '19.10.1995', 'REFFERE', 'avatars/1389702810.jpg', 'gosha'),
(12, 'Vlad', 'Lukhanin', 'Ukraine(UKR)', '4.2.1991', 'ATHLETE', 'avatars/1389703059.jpg', 'while'),
(13, 'Vlad', 'Lukhanin', 'Ukraine(UKR)', '4.2.1991', 'ATHLETE', 'avatars/1389703219.jpg', 'while'),
(14, 'myrzik', 'myrzik', 'Belgium(BEL)', '1.1.2014', 'ATHLETE', 'avatars/1389703273.jpg', 'myrzik'),
(15, 'SPORTMEN', 'SPORTMEN', 'Belgium(BEL)', '1.1.2014', 'ATHLETE', 'avatars/1389703501.jpg', 'SPORTMEN'),
(16, 'Bob', 'Smits', 'Belgium(BEL)', '07.05.1979', 'ATHLETE', 'avatars/1389737016.jpg', 'somer'),
(17, 'kursk', 'kursk', 'Ukraine(UKR)', '18.06.1998', 'REFFERE', 'avatars/1389737793.jpg', 'kursk'),
(18, 'sader', 'sader', 'Poland(POL)', '15.12.1998', '', '', 'sader'),
(19, 'dawer', 'dawer', 'Poland(POL)', '16.12.2014', 'ATHLETE', 'avatars/1389786896.jpg', 'dawer'),
(20, 'Oleg', 'Polivaiko', 'Ukraine(UKR)', '19.12.1993', 'ATHLETE', 'avatars/1391178146.jpg', 'mygik'),
(21, 'Mikael', 'Turov', 'Belgium(BEL)', '20.12.1997', 'ATHLETE', 'avatars/1391183493.jpg', 'kolom'),
(22, 'Marlin', 'Maffka', 'Belgium(BEL)', '19.12.1995', 'ATHLETE', 'avatars/1391184370.jpg', 'bober'),
(23, 'Vijgar', 'Ragimov', 'Belgium(BEL)', '20.02.1995', 'ATHLETE', 'avatars/1391253255.jpg', 'faceoff'),
(24, 'Konstantin', 'Belickii', 'Poland(POL)', '20.11.1995', 'ATHLETE', 'avatars/1391253318.jpg', 'fast'),
(25, 'Armen', 'Vardanijan', 'Russia(RUS)', '17.12.1995', 'ATHLETE', 'avatars/1391253384.jpg', 'fanny'),
(26, 'Vladimir', 'Shackih', 'Poland(POL)', '20.09.1995', 'ATHLETE', 'avatars/1391253451.jpg', 'faust'),
(27, 'Vasilyi', 'Rachiba', 'Ukraine(UKR)', '23.10.1995', 'ATHLETE', 'avatars/1391253523.jpg', 'fibi'),
(28, 'Dmitryi', 'Timchenko', 'Poland(POL)', '20.11.1995', 'ATHLETE', 'avatars/1391253600.jpg', 'orange'),
(29, 'Igor', 'Didik', 'Belgium(BEL)', '16.02.1996', 'ATHLETE', 'avatars/1391253728.jpg', 'force'),
(30, 'Atanov', 'Dmitryi', 'Russia(RUS)', '16.11.1995', 'ATHLETE', 'avatars/1391253892.jpg', 'flame'),
(31, 'dfhdh', 'dfhdh', 'Belgium(BEL)', '01.01.2014', 'ATHLETE', 'avatars/1391290590.jpg', 'dfhdh'),
(32, 'Bob', 'Marly', 'Ukraine(UKR)', '17.12.1996', 'ATHLETE', 'avatars/1391291172.jpg', 'login'),
(33, 'Oleg', 'Ljagko', 'Belgium(BEL)', '11.12.2013', 'ATHLETE', 'avatars/1391296046.jpg', 'forge'),
(34, 'Ben', 'Justin', 'Belgium(BEL)', '20.10.2004', 'ATHLETE', 'avatars/1391361879.jpg', 'doma'),
(35, 'Masd', 'Myr', 'Russia(RUS)', '18.11.1997', 'ATHLETE', 'avatars/1392234748.jpg', 'mail'),
(36, 'Luis', 'Vahtang', 'Poland(POL)', '18.11.1996', 'ATHLETE', 'avatars/1392234870.jpg', 'lofin'),
(37, 'Luis', 'Vahtang', 'Poland(POL)', '18.11.1996', 'ATHLETE', 'avatars/1392237211.jpg', 'lofin'),
(38, 'Mosha', 'Lisda', 'Poland(POL)', '13.12.1999', 'ATHLETE', 'avatars/1392316974.jpg', 'vove'),
(39, 'Homa', 'Gogre', 'Ukraine(UKR)', '31.12.2006', 'ATHLETE', 'avatars/1392317586.jpg', 'sport'),
(40, 'slava', 'slava', 'Ukraine(UKR)', '14.07.1997', 'ATHLETE', 'avatars/1395144986.jpg', 'slava'),
(41, 'sewr', 'sewr', 'Ukraine(UKR)', '17.11.1996', 'ATHLETE', 'avatars/1396524362.jpg', 'sewr'),
(42, 'qwertvg', 'qwertvg', 'Poland(POL)', '19.01.2014', 'ATHLETE', 'avatars/1396524414.jpg', 'qwertvg'),
(43, 'sdeft', 'sdeft', 'Poland(POL)', '19.11.1997', 'ATHLETE', 'avatars/1396524459.jpg', 'sdeft'),
(44, 'qweghj', 'qweghj', 'Belgium(BEL)', '19.10.1997', 'ATHLETE', 'avatars/1396524500.jpg', 'qweghj'),
(45, 'asdgd', 'asdgd', 'Russia(RUS)', '19.12.1996', 'ATHLETE', 'avatars/1396524671.jpg', 'asdgd'),
(46, 'qasdfg', 'qasdfg', 'Ukraine(UKR)', '25.02.1998', 'ATHLETE', 'avatars/1396727048.jpg', 'qasdfg'),
(47, 'fsetewtw', 'fsetewtw', 'Poland(POL)', '20.11.1998', 'ATHLETE', 'avatars/1396727078.jpg', 'fsetewtw'),
(48, 'sgsgr', 'sgsgr', 'Russia(RUS)', '19.12.1999', 'ATHLETE', 'avatars/1396727391.jpg', 'sgsgr'),
(49, 'qasdfgy', 'qasdfgy', 'Russia(RUS)', '01.01.2014', 'ATHLETE', 'avatars/1396727575.jpg', 'qasdfgy');

-- --------------------------------------------------------

--
-- Структура таблицы `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Country` varchar(32) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Login` varchar(64) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `person`
--

INSERT INTO `person` (`id`, `Name`, `Lastname`, `Date`, `Country`, `Status`, `Login`, `img`) VALUES
(1, '', '', '29.8.1993', 'Ukraine(UKR)', 'REFFERE', 'milana', 'avatars/1389474009.jpg'),
(2, '', '', '19.9.1988', 'Poland(POL)', 'COACH', 'Radius', 'avatars/1389474145.jpg'),
(3, '', '', '1.1.2014', 'Poland(POL)', 'OFFICIAL', 'dasha', 'avatars/1389474188.jpg'),
(4, '', '', '1.1.2014', 'Poland(POL)', 'OFFICIAL', 'dasha', 'avatars/1389474597.jpg'),
(5, '', '', '1.1.2014', 'Poland(POL)', 'OFFICIAL', 'dasha', 'avatars/1389474602.jpg'),
(6, 'Mary', 'Poljakova', '19.8.1997', 'Belgium(BEL)', 'OFFICIAL', 'mary', 'avatars/1389481550.jpg'),
(7, 'Milania', 'Popova', '07.03.1996', 'Poland(POL)', 'COACH', 'diametr', 'avatars/1389803751.jpg'),
(8, 'Ivan', 'Popov', '1.12.1996', 'Poland(POL)', 'REFFERE', 'ivan', 'avatars/1389702284.jpg'),
(9, 'Ivan', 'Popov', '1.12.1996', 'Poland(POL)', 'REFFERE', 'ivan', 'avatars/1389702353.jpg'),
(10, 'Ivan', 'Popov', '1.12.1996', 'Poland(POL)', 'REFFERE', 'ivan', 'avatars/1389702403.jpg'),
(11, 'Gosha', 'Verttyn', '19.10.1995', 'Belgium(BEL)', 'REFFERE', 'gosha', 'avatars/1389702810.jpg'),
(12, 'Vlad', 'Lukhanin', '4.2.1991', 'Ukraine(UKR)', 'ATHLETE', 'while', 'avatars/1389703059.jpg'),
(13, 'Vlad', 'Lukhanin', '4.2.1991', 'Ukraine(UKR)', 'ATHLETE', 'while', 'avatars/1389703219.jpg'),
(14, 'myrzik', 'myrzik', '1.1.2014', 'Belgium(BEL)', 'ATHLETE', 'myrzik', 'avatars/1389703273.jpg'),
(15, 'kursk', 'kursk', '18.06.1998', 'Ukraine(UKR)', 'REFFERE', 'kursk', 'avatars/1389737793.jpg'),
(16, 'sader', 'sader', '15.12.1998', 'Poland(POL)', '', 'sader', '');

-- --------------------------------------------------------

--
-- Структура таблицы `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `start_num` int(64) NOT NULL,
  `end_num` int(64) NOT NULL,
  `base_num` int(64) NOT NULL,
  `free_place` varchar(255) NOT NULL,
  `sort_list` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `rating`
--

INSERT INTO `rating` (`start_num`, `end_num`, `base_num`, `free_place`, `sort_list`) VALUES
(33, 64, 64, '2,63,34,31,18,47,50,15,10,55,42,23,26,39,58,7,5,59,38,27,22,43,54,11,14,51,46,19,30,35,62', ''),
(17, 32, 32, '2,31,18,15,10,23,26,7,6,27,22,11,14,19,30', '1,32,17,16,9,24,25,8,5,28,21,12,13,20,29,4,3,30,19,14,11,22,27,6'),
(9, 16, 16, '16,15,14,13,12,11,10', '1,16,9,8,5,12,13,4,3,14,6,11,7,10,15,2'),
(5, 8, 8, '8,7,6', '1,8,5,4,3,6,7,2');

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `parent_id` int(200) NOT NULL,
  `name` varchar(111) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id`, `parent_id`, `name`) VALUES
(1, 0, 'Node_1'),
(2, 1, 'Node_2'),
(3, 1, 'Node_3');

-- --------------------------------------------------------

--
-- Структура таблицы `titul`
--

CREATE TABLE IF NOT EXISTS `titul` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Titul` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `titul`
--

INSERT INTO `titul` (`id`, `Titul`) VALUES
(1, 'Чемпион мира 2013'),
(2, 'В.И.'),
(3, 'М.Т.'),
(4, 'Чемпион Европы 2013'),
(5, 'нет');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Login` varchar(50) NOT NULL,
  `Password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `Login`, `Password`) VALUES
(1, 'milana', 'masha123'),
(2, 'Radius', 'masha123'),
(3, 'dasha', 'dasha'),
(4, 'dasha', 'dasha'),
(5, 'dasha', 'dasha'),
(6, 'mary', 'masha123'),
(7, 'diametr', 'masha123'),
(8, 'ivan', 'masha123'),
(9, 'ivan', 'masha123'),
(10, 'ivan', 'masha123'),
(11, 'gosha', 'masha123'),
(12, 'while', 'masha123'),
(13, 'while', 'masha123'),
(14, 'myrzik', 'myrzik'),
(15, 'SPORTMEN', 'SPORTMEN'),
(16, 'somer', 'somer'),
(17, 'kursk', 'kursk'),
(18, 'sader', 'sader'),
(19, 'dawer', 'dawer'),
(20, 'mygik', 'qwerty'),
(21, 'kolom', 'qwerty'),
(22, 'bober', 'qwerty'),
(23, 'faceoff', 'faceoff'),
(24, 'fast', 'fast'),
(25, 'fanny', 'fanny'),
(26, 'faust', 'faust'),
(27, 'fibi', 'fibi'),
(28, 'orange', 'orange'),
(29, 'force', 'force'),
(30, 'flame', 'flame'),
(31, 'dfhdh', 'dfhdh'),
(32, 'login', 'login'),
(33, 'forge', 'forge'),
(34, 'doma', 'qwerty'),
(35, 'mail', 'mail'),
(36, 'lofin', 'lofin'),
(37, 'lofin', 'lofin'),
(38, 'vove', 'vove'),
(39, 'sport', 'sport'),
(40, 'slava', 'slava'),
(41, 'sewr', 'sewr'),
(42, 'qwertvg', 'qwertvg'),
(43, 'sdeft', 'sdeft'),
(44, 'qweghj', 'qweghj'),
(45, 'asdgd', 'asdgd'),
(46, 'qasdfg', 'qasdfg'),
(47, 'fsetewtw', 'fsetewtw'),
(48, 'sgsgr', 'sgsgr'),
(49, 'qasdfgy', 'qasdfgy');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '\0\0', 'administrator', '59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4', '9462e8eee0', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '\0\0', 'admin', '310836ddd912d3924ebb3ac3416abe799dc2550b', NULL, 'admin', NULL, NULL, NULL, '611c8cbc8445c8c23511fab9f120315a76d6ab2a', 1389896070, 1396975189, 1, 'Mary', 'Maffka', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
