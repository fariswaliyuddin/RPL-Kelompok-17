-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 02:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `id_dailytips` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publised` datetime NOT NULL,
  `isi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmi_calculator`
--

CREATE TABLE `bmi_calculator` (
  `id` int(11) NOT NULL,
  `idUSER` int(11) NOT NULL,
  `berat badan` int(11) NOT NULL,
  `tinggi badan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daily_tips`
--

CREATE TABLE `daily_tips` (
  `id` int(11) NOT NULL,
  `idUSER` int(11) NOT NULL,
  `tips` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `komentar_article`
--

CREATE TABLE `komentar_article` (
  `id` int(11) NOT NULL,
  `idUSER` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `komentar_news`
--

CREATE TABLE `komentar_news` (
  `id` int(11) NOT NULL,
  `idUSER` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `id_dailytips` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publised` datetime NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nuf`
--

CREATE TABLE `nuf` (
  `id` int(11) NOT NULL,
  `food` varchar(255) NOT NULL,
  `nutrition` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_bmi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `email`, `id_bmi`) VALUES
(1, 'ihsan_fadhila', '$2y$10$mjel77xCwVBmETAPqaTqbOimPuGPVzrRQkfD7lDfwUSmeeJ.YU.wi', 'ihsan fadhila', 0),
(2, 'ihsan_fadhila', '$2y$10$EkUrHnidC6QClFk920cegeDvc2tcLGYp/mpBEDxWIj8lNwr5WYopy', 'ddwdadad', 0),
(3, 'ihsan_fadhila', '$2y$10$gVr0qqTeKN.nwwoPhN2dw.5WfRevP.IeYMQMTvN1wtnn/TzbbUr3m', 'ihsan_fadhila@apps.ipb.ac.id', 0),
(4, 'ihsan_fadhila', '$2y$10$0cBwdCict.jzwqh.sOJa3uauD508uVPysDqQYfqEaFxOWZ0iZhMYC', 'wdwd', 0),
(5, 'ihsan_fadhila', '$2y$10$3SfVAbQ5HHeiBeTEq/twTuy4U.hBmf2HTHxjJljAfYrAzug9YfyJ2', 'ihsan_fadhila@apps.ipb.ac.id', 0),
(6, 'ihsan_fadhila', '$2y$10$krnmoR5s5..l18vhUdNlP.dTXNV8wmn/BtaxkmXSQmC1xMQwuS7ra', '', 0),
(7, 'ihsan_fadhila', '$2y$10$nh4QfnQdzIG2zLpJT60D1u4iJn/BdsNomGY1Kib983GMMHuMw8H1W', 'ihsan_fadhila@apps.ipb.ac.id', 0),
(8, 'ihsan_fadhila', '$2y$10$Z.oW4TJCwjQSKQ2z/IVXpudDEx7YC7nJNPNn2G835RHGr4zioYvoK', 'ihsan_fadhila@apps.ipb.ac.id', 0),
(9, 'ihsan_fadhila', '$2y$10$xZFUW0wlynGLG2t0m9f8p.qtqmvTpGASl9ySE63CLs8W3odz4ywFm', 'ihsan_fadhila@apps.ipb.ac.id', 0),
(10, 'ihsan_fadhila', '$2y$10$XLa4g5cfiOvjwvDWxSfweuNXpVh2Evp.QzHMov1U7p937KCDzf8JK', 'ihsan_fadhila@apps.ipb.ac.id', 0),
(11, 'ihsan_fadhila', '$2y$10$fY1kvxV5qJaon6LoNMRQcey08xVD6DvdL2Q4dCj2RfaZfa4mnQ6tO', 'ihsan_fadhila@apps.ipb.ac.id', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dailytips` (`id_dailytips`);

--
-- Indexes for table `bmi_calculator`
--
ALTER TABLE `bmi_calculator`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUSER` (`idUSER`);

--
-- Indexes for table `daily_tips`
--
ALTER TABLE `daily_tips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUSER` (`idUSER`);

--
-- Indexes for table `komentar_article`
--
ALTER TABLE `komentar_article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUSER` (`idUSER`),
  ADD KEY `id_article` (`id_article`);

--
-- Indexes for table `komentar_news`
--
ALTER TABLE `komentar_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUSER` (`idUSER`),
  ADD KEY `id_news` (`id_news`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dailytips` (`id_dailytips`);

--
-- Indexes for table `nuf`
--
ALTER TABLE `nuf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bmi` (`id_bmi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmi_calculator`
--
ALTER TABLE `bmi_calculator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daily_tips`
--
ALTER TABLE `daily_tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentar_article`
--
ALTER TABLE `komentar_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentar_news`
--
ALTER TABLE `komentar_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nuf`
--
ALTER TABLE `nuf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_dailytips`) REFERENCES `daily_tips` (`id`);

--
-- Constraints for table `bmi_calculator`
--
ALTER TABLE `bmi_calculator`
  ADD CONSTRAINT `bmi_calculator_ibfk_1` FOREIGN KEY (`idUSER`) REFERENCES `tb_user` (`id`);

--
-- Constraints for table `daily_tips`
--
ALTER TABLE `daily_tips`
  ADD CONSTRAINT `daily_tips_ibfk_1` FOREIGN KEY (`idUSER`) REFERENCES `tb_user` (`id`);

--
-- Constraints for table `komentar_article`
--
ALTER TABLE `komentar_article`
  ADD CONSTRAINT `komentar_article_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `komentar_article_ibfk_2` FOREIGN KEY (`idUSER`) REFERENCES `tb_user` (`id`);

--
-- Constraints for table `komentar_news`
--
ALTER TABLE `komentar_news`
  ADD CONSTRAINT `komentar_news_ibfk_1` FOREIGN KEY (`idUSER`) REFERENCES `tb_user` (`id`),
  ADD CONSTRAINT `komentar_news_ibfk_2` FOREIGN KEY (`id_news`) REFERENCES `news` (`id`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_dailytips`) REFERENCES `daily_tips` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
