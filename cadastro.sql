-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2022 at 06:20 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Table structure for table `pessoas`
--

CREATE TABLE `pessoas` (
  `id_pessoas` int(2) NOT NULL,
  `nome_pessoas` varchar(50) DEFAULT NULL,
  `idade_pessoas` int(3) DEFAULT NULL,
  `genero_pessoas` varchar(15) DEFAULT NULL,
  `cor_pessoas` varchar(10) DEFAULT NULL,
  `altura_pessoas` double DEFAULT NULL,
  `peso_pessoas` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pessoas`
--

INSERT INTO `pessoas` (`id_pessoas`, `nome_pessoas`, `idade_pessoas`, `genero_pessoas`, `cor_pessoas`, `altura_pessoas`, `peso_pessoas`) VALUES
(1, 'Mariah', 15, 'Feminino', 'Preto', 1.66, 65),
(2, 'Rafaela', 21, 'Feminino', 'Preto', 1.73, 85),
(3, 'Junior', 31, 'Masculino', 'Branco', 1.73, 80),
(4, 'Dom', 20, 'Masculino', 'Branco', 1.7, 65),
(5, 'Jocasta', 28, 'Feminino', 'Pardo', 1.68, 62),
(6, 'Bruno', 26, 'Masculino', 'Pardo', 1.78, 82),
(7, 'Ravi', 17, 'Masculino', 'Amarelo', 1.75, 70),
(8, 'Laura', 15, 'Feminino', 'Amarelo', 1.68, 55),
(10, 'Raul', 54, 'Masculino', 'Preto', 1.88, 86),
(11, 'Matilda', 66, 'Feminino', 'Branco', 1.58, 72);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id_pessoas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id_pessoas` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
