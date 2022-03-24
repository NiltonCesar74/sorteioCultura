-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 16/07/2019 às 17:20
-- Versão do servidor: 5.7.26-0ubuntu0.18.04.1
-- Versão do PHP: 7.2.20-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sorteio_imperatriz`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_danca`
--

CREATE TABLE `tb_danca` (
  `id` int(11) NOT NULL,
  `numeros` int(11) DEFAULT NULL,
  `sorteado` int(2) DEFAULT '0',
  `data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `tb_danca`
--

INSERT INTO `tb_danca` (`id`, `numeros`, `sorteado`, `data`) VALUES
(54, 1, 1, '2019-07-16 17:05:23'),
(55, 2, 1, '2019-07-16 17:05:03'),
(56, 3, 1, '2019-07-16 17:04:56'),
(57, 4, 1, '2019-07-16 17:05:29'),
(58, 5, 1, '2019-07-16 17:04:50'),
(59, 6, 1, '2019-07-16 17:05:18');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_grupo_folclorico`
--

CREATE TABLE `tb_grupo_folclorico` (
  `id` int(11) NOT NULL,
  `numeros` int(11) DEFAULT NULL,
  `sorteado` int(2) DEFAULT '0',
  `data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_shows`
--

CREATE TABLE `tb_shows` (
  `id` int(11) NOT NULL,
  `numeros` int(11) DEFAULT NULL,
  `sorteado` int(2) DEFAULT '0',
  `data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `tb_shows`
--

INSERT INTO `tb_shows` (`id`, `numeros`, `sorteado`, `data`) VALUES
(1, 1, 1, '2019-07-16 16:57:57'),
(2, 2, 1, '2019-07-16 16:58:06'),
(3, 3, 1, '2019-07-16 16:58:21'),
(4, 4, 1, '2019-07-16 16:58:12'),
(5, 5, 1, '2019-07-16 16:57:43'),
(6, 6, 1, '2019-07-16 16:57:49'),
(7, 7, 1, '2019-07-16 16:58:27');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `tb_danca`
--
ALTER TABLE `tb_danca`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_grupo_folclorico`
--
ALTER TABLE `tb_grupo_folclorico`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_shows`
--
ALTER TABLE `tb_shows`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `tb_danca`
--
ALTER TABLE `tb_danca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de tabela `tb_grupo_folclorico`
--
ALTER TABLE `tb_grupo_folclorico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_shows`
--
ALTER TABLE `tb_shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
