-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Jun-2019 às 08:15
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testesenior`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `documento`
--

CREATE TABLE `documento` (
  `id` int(11) UNSIGNED NOT NULL,
  `cod_venda` int(11) NOT NULL,
  `total_venda` float NOT NULL,
  `status_venda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `documento`
--

INSERT INTO `documento` (`id`, `cod_venda`, `total_venda`, `status_venda`) VALUES
(1, 1, 200.2, 1),
(2, 2, 125.2, 1),
(3, 3, 100.2, 1),
(4, 4, 100.2, 1),
(5, 5, 125.2, 1),
(6, 100, 0, 1),
(7, 100, 0, 1),
(8, 8, 2003.8, 1),
(9, 9, 100.2, 1),
(10, 10, 41.3, 1),
(11, 11, 22.5, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `id_documento` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `item`
--

INSERT INTO `item` (`id`, `id_documento`, `id_produto`) VALUES
(1, 1, 6),
(2, 1, 6),
(3, 1, 6),
(4, 1, 6),
(5, 1, 11),
(6, 2, 11),
(7, 2, 6),
(8, 3, 11),
(9, 4, 11),
(10, 5, 6),
(11, 5, 11),
(12, 100, 11),
(13, 100, 11),
(14, 8, 11),
(15, 8, 11),
(16, 8, 11),
(17, 8, 11),
(18, 8, 11),
(19, 8, 11),
(20, 8, 11),
(21, 8, 11),
(22, 8, 11),
(23, 8, 11),
(24, 8, 11),
(25, 8, 11),
(26, 8, 11),
(27, 8, 11),
(28, 8, 11),
(29, 8, 11),
(30, 8, 11),
(31, 8, 6),
(32, 8, 6),
(33, 8, 6),
(34, 8, 6),
(35, 8, 11),
(36, 8, 11),
(37, 9, 11),
(38, 10, 12),
(39, 10, 13),
(40, 11, 12),
(41, 12, 11),
(42, 12, 11),
(43, 12, 11),
(44, 12, 11),
(45, 12, 11),
(46, 12, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) UNSIGNED NOT NULL,
  `codigo` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `codigo`, `descricao`, `preco`) VALUES
(5, '2147483647', 'Produto de Teste', 12),
(6, '32121', 'produto de teste 2', 25),
(7, '988798654', 'produto de teste 3', 32),
(8, '98789564', 'produto de teste 4', 99.3),
(9, '98789565', 'produto de teste 4', 99.3),
(10, '789136232546548', 'Produto de Teste 5', 95.3),
(11, '789', 'mesa', 100.2),
(12, '1', 'Uramaki Sushi', 22.5),
(13, '2', 'Temaki Salmao', 18.8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documento`
--
ALTER TABLE `documento`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
