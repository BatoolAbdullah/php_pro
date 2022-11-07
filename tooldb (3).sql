-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 نوفمبر 2022 الساعة 08:42
-- إصدار الخادم: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tooldb`
--

-- --------------------------------------------------------

--
-- بنية الجدول `about_us`
--

CREATE TABLE `about_us` (
  `Id_About` int(11) NOT NULL,
  `Text_About` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `about_us`
--

INSERT INTO `about_us` (`Id_About`, `Text_About`) VALUES
(1, 'مرحبا بكم في موقعنا'),
(2, 'tttoorroepeeppeeeee'),
(3, ''),
(4, ''),
(5, ''),
(6, 'mmmm'),
(7, 'batool'),
(8, 'ff;d;d;sssss'),
(9, 'flflflflflflflflflflf'),
(10, 'flflflflflflflflflflf'),
(11, 'flflflflflflflflflflf'),
(12, 'flflflflflflflflflflf'),
(13, 'flflflflflflflflflflf'),
(14, 'ppppppppppppppppppppppppppppppppppp'),
(15, 'xxxxxxxxx'),
(16, 'xxxxxxxxx'),
(17, 'wwwww');

-- --------------------------------------------------------

--
-- بنية الجدول `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(255) NOT NULL,
  `password` int(255) NOT NULL,
  `id_admin` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `admin`
--

INSERT INTO `admin` (`Username`, `password`, `id_admin`, `email`) VALUES
('batool', 1234, 1, ''),
('batool', 1234567, 2, 'batool1234567@gamil.com'),
(' ', 0, 3, ' '),
(' ', 0, 4, ' '),
(' ', 0, 5, ' '),
(' ', 0, 6, ' '),
(' ', 0, 7, ' ');

-- --------------------------------------------------------

--
-- بنية الجدول `basket`
--

CREATE TABLE `basket` (
  `Basket_Id` int(255) NOT NULL,
  `Id_User` int(255) NOT NULL,
  `Id_heels` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `contct`
--

CREATE TABLE `contct` (
  `Id` int(255) NOT NULL,
  `User_name` varchar(255) NOT NULL,
  `User_email` varchar(255) NOT NULL,
  `Textcoment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `contct`
--

INSERT INTO `contct` (`Id`, `User_name`, `User_email`, `Textcoment`) VALUES
(1, 'BATOL@GFKF.COM', '', ''),
(2, 'cccc', 'BATOL@GFKF.COM', ''),
(3, 'Batol', 'BATOL@GFKF.COM', 'ffrrttt'),
(4, 'rana', 'rana@gmail.com', 'rewqasxdcfv'),
(5, 'tyuii', 'ddddd2@ddd.com', 'defrgtyhjjuillllllllll'),
(6, 'toto', 'toto@gmail.com', 'happpy'),
(7, 'Batol', 'rana@gmail.com', ',uaaa!!!!'),
(8, '', 'ddddd2@ddd.com', 'yyyyy'),
(9, 'gggg', '', 'ttttttttttt'),
(10, 'rana', 'rawa@gmail.com', 'yhuvl,');

-- --------------------------------------------------------

--
-- بنية الجدول `heels`
--

CREATE TABLE `heels` (
  `Id_heels` int(255) NOT NULL,
  `Name_heels` varchar(255) NOT NULL,
  `Heels_preic` float NOT NULL,
  `Heels_imag` varchar(255) NOT NULL,
  `Heels_size` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `heels`
--

INSERT INTO `heels` (`Id_heels`, `Name_heels`, `Heels_preic`, `Heels_imag`, `Heels_size`) VALUES
(12, 'ssss', 1233, '', 78),
(14, 'black', 222, 'Hbf9e09264038420f9ce2d42db2b7d602c.jpg', 39),
(17, 'qw', 150, '1651179626-transparent-heeled-sandal-zara-1651179618.jpg', 37),
(19, 'ooo', 99, '1654536464-amina-muaddi-gilda-crystal-pointed-pedestal-mules-1654536455.jpg', 89),
(20, 'oo', 99, '11.ModernBride-AminaMuaddi-d254acfa196b41afb467bcfe08815b02.png', 8),
(22, 'iuyy', 67, '10941320.jpg', 78),
(26, 'humi', 120, 'Screen Shot 2022-03-31 at 2.25.05 PM.png', 39),
(28, 'wqas', 199, 'designer-shoes-spring-2022-298769-1648071398133-main.700x0c.jpg', 37);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `Id_User` int(255) NOT NULL,
  `Name_User` varchar(255) NOT NULL,
  `Pass_User` varchar(255) NOT NULL,
  `Email_User` varchar(255) NOT NULL,
  `Phone_User` int(10) NOT NULL,
  `User_Taype` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`Id_User`, `Name_User`, `Pass_User`, `Email_User`, `Phone_User`, `User_Taype`) VALUES
(1, 'Batol', '827ccb0eea8a706c4c34a16891f84e7b', 'batol@gmail.com', 123049523, 1),
(2, 'rana', '30cb66a1c6f7127c8faafc51329d011b', 'rana@gmail.com', 254367897, 1),
(3, 'batoool', '7c75d66c6cdd272e847d465a73af39ff', 'batoool@gmail.com', 45666655, 0),
(36, 'ola', '', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`Id_About`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`Basket_Id`),
  ADD KEY `Id_User` (`Id_User`),
  ADD KEY `Id_heels` (`Id_heels`);

--
-- Indexes for table `contct`
--
ALTER TABLE `contct`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `heels`
--
ALTER TABLE `heels`
  ADD PRIMARY KEY (`Id_heels`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id_User`),
  ADD UNIQUE KEY `Email_User` (`Email_User`),
  ADD KEY `Id_User` (`Id_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `Id_About` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `Basket_Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contct`
--
ALTER TABLE `contct`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `heels`
--
ALTER TABLE `heels`
  MODIFY `Id_heels` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id_User` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`Id_User`) REFERENCES `users` (`Id_User`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `basket_ibfk_2` FOREIGN KEY (`Id_heels`) REFERENCES `heels` (`Id_heels`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
