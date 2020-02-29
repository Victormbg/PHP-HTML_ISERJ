-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Ago-2019 às 23:27
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lojadepto`
--

create database lojadepto;
use lojadepto;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `codCli` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `login` varchar(25) DEFAULT NULL,
  `senha` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`codCli`, `nome`, `email`, `login`, `senha`) VALUES
(1, 'Octacilio alvarenga filho', 'scsdse7@gmail.com', 'octa', '7723');

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

CREATE TABLE `item` (
  `idVenda` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `codprod` int(11) DEFAULT NULL,
  `quant` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `item`
--

INSERT INTO `item` (`idVenda`, `item`, `codprod`, `quant`) VALUES
(1, 2, 1, 1),
(1, 3, 2, 1),
(1, 4, 3, 1),
(1, 5, 4, 1),
(2, 1, 1, 1),
(3, 1, 5, 1),
(3, 2, 5, 1),
(4, 1, 3, 1),
(4, 2, 1, 1),
(4, 3, 2, 1),
(5, 1, 1, 1),
(6, 1, 1, 1),
(7, 15, 5, 4),
(7, 16, 7, 3),
(7, 17, 7, 3),
(7, 18, 2, 2),
(7, 19, 8, 7),
(8, 1, 2, 1),
(8, 3, 1, 2),
(9, 1, 1, 2),
(10, 1, 3, 2),
(11, 1, 8, 1),
(11, 2, 6, 3),
(12, 1, 7, 1),
(12, 2, 2, 2),
(13, 1, 2, 1),
(14, 1, 3, 2),
(14, 2, 1, 1),
(14, 3, 4, 3),
(15, 1, 3, 2),
(16, 1, 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `imagem` varchar(120) DEFAULT NULL,
  `quant` int(11) DEFAULT NULL,
  `preco` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `imagem`, `quant`, `preco`) VALUES
(1, 'Mochila', 'mochila.jpg', 12, 120),
(2, 'Cadeira', 'cadeira.jpg', 15, 210),
(3, 'Caneca', 'caneca.jpg', 15, 9),
(4, 'Pipoqueira', 'Pipoqueira.jpg', 15, 290),
(5, 'Sardinha', 'sardinha.png', 18, 9),
(6, 'Leite condensado', 'leite condensado.jpg', 18, 6),
(7, 'Perfex', 'perfex.png', 18, 10),
(8, 'Catchup', 'catchup.png', 28, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `idVenda` int(11) NOT NULL,
  `codCli` int(11) DEFAULT NULL,
  `datav` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`idVenda`, `codCli`, `datav`) VALUES
(1, 1, ''),
(2, 1, ''),
(3, 1, ''),
(4, 1, ''),
(5, 1, ''),
(6, 1, ''),
(7, 1, ''),
(8, 1, ''),
(9, 1, ''),
(10, 1, ''),
(11, 1, ''),
(12, 1, ''),
(13, 1, ''),
(14, 1, ''),
(15, 1, ''),
(16, 1, ''),
(17, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codCli`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`idVenda`,`item`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`idVenda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codCli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
