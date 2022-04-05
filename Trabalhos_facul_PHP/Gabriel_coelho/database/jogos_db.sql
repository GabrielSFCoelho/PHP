-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Dez-2021 às 21:58
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jogos_db`
--
CREATE DATABASE IF NOT EXISTS `jogos_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `jogos_db`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos_tb`
--

CREATE TABLE `jogos_tb` (
  `id_jogo` int(11) NOT NULL,
  `titulo_jogo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa_do_jogo` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero_do_jogo` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `jogos_tb`
--

INSERT INTO `jogos_tb` (`id_jogo`, `titulo_jogo`, `empresa_do_jogo`, `genero_do_jogo`) VALUES
(14, 'Meu jogo', 'Coelhitos.io  ', 'MMORPG. ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_tb`
--

CREATE TABLE `usuarios_tb` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha_usuario` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios_tb`
--

INSERT INTO `usuarios_tb` (`id_usuario`, `nome_usuario`, `senha_usuario`) VALUES
(1, 'admin', 'admin123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `jogos_tb`
--
ALTER TABLE `jogos_tb`
  ADD PRIMARY KEY (`id_jogo`);

--
-- Índices para tabela `usuarios_tb`
--
ALTER TABLE `usuarios_tb`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `jogos_tb`
--
ALTER TABLE `jogos_tb`
  MODIFY `id_jogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usuarios_tb`
--
ALTER TABLE `usuarios_tb`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
