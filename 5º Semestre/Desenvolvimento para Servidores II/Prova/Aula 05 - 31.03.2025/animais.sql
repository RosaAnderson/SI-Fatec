-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/04/2025 às 00:21
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `animais`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `animais`
--

CREATE TABLE `animais` (
  `idanimais` int(10) UNSIGNED NOT NULL,
  `idproprietario` int(10) UNSIGNED NOT NULL,
  `raca` varchar(80) DEFAULT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `cor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `animais`
--

INSERT INTO `animais` (`idanimais`, `idproprietario`, `raca`, `nome`, `idade`, `cor`) VALUES
(1, 1, 'SRD', 'Malu', 1, 'Preta/Caramelo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `proprietario`
--

CREATE TABLE `proprietario` (
  `idproprietario` int(10) UNSIGNED NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `proprietario`
--

INSERT INTO `proprietario` (`idproprietario`, `nome`, `celular`) VALUES
(1, 'Vânia Teixeira', '(14)999999999');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vacinas`
--

CREATE TABLE `vacinas` (
  `idvacinas` int(10) UNSIGNED NOT NULL,
  `descritivo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `vacinas`
--

INSERT INTO `vacinas` (`idvacinas`, `descritivo`) VALUES
(1, 'Raiva'),
(2, 'V10');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vacinas_animais`
--

CREATE TABLE `vacinas_animais` (
  `idvacinas_animais` int(10) NOT NULL,
  `data_vacina` date NOT NULL,
  `idanimais` int(10) UNSIGNED NOT NULL,
  `idvacinas` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `vacinas_animais`
--

INSERT INTO `vacinas_animais` (`idvacinas_animais`, `data_vacina`, `idanimais`, `idvacinas`) VALUES
(1, '2025-03-01', 1, 1),
(2, '2025-03-19', 1, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `animais`
--
ALTER TABLE `animais`
  ADD PRIMARY KEY (`idanimais`),
  ADD KEY `animais_FKIndex1` (`idproprietario`);

--
-- Índices de tabela `proprietario`
--
ALTER TABLE `proprietario`
  ADD PRIMARY KEY (`idproprietario`);

--
-- Índices de tabela `vacinas`
--
ALTER TABLE `vacinas`
  ADD PRIMARY KEY (`idvacinas`);

--
-- Índices de tabela `vacinas_animais`
--
ALTER TABLE `vacinas_animais`
  ADD PRIMARY KEY (`idvacinas_animais`),
  ADD KEY `idanimais` (`idanimais`),
  ADD KEY `idvacinas` (`idvacinas`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animais`
--
ALTER TABLE `animais`
  MODIFY `idanimais` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `proprietario`
--
ALTER TABLE `proprietario`
  MODIFY `idproprietario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `vacinas`
--
ALTER TABLE `vacinas`
  MODIFY `idvacinas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `vacinas_animais`
--
ALTER TABLE `vacinas_animais`
  MODIFY `idvacinas_animais` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `animais`
--
ALTER TABLE `animais`
  ADD CONSTRAINT `animais_ibfk_1` FOREIGN KEY (`idproprietario`) REFERENCES `proprietario` (`idproprietario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `vacinas_animais`
--
ALTER TABLE `vacinas_animais`
  ADD CONSTRAINT `vacinas_animais_ibfk_1` FOREIGN KEY (`idvacinas`) REFERENCES `vacinas` (`idvacinas`),
  ADD CONSTRAINT `vacinas_animais_ibfk_2` FOREIGN KEY (`idanimais`) REFERENCES `animais` (`idanimais`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
