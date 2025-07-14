-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jul-2025 às 03:45
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `doacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacao`
--

CREATE TABLE `doacao` (
  `iddoacao` int(10) UNSIGNED NOT NULL,
  `iddoador` int(10) UNSIGNED NOT NULL,
  `idtipo` int(10) UNSIGNED NOT NULL,
  `data_dacao` date DEFAULT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `doacao`
--

INSERT INTO `doacao` (`iddoacao`, `iddoador`, `idtipo`, `data_dacao`, `descricao`) VALUES
(1, 1, 2, '2025-07-31', 'Aniversário do Anderson'),
(2, 6, 2, '2025-07-31', 'Aniversário do Anderson'),
(3, 4, 1, '2025-07-31', 'Aniversário do Anderson'),
(4, 1, 3, '2025-07-31', 'Aniversário do Anderson'),
(5, 1, 4, '2025-07-31', 'Aniversário do Anderson'),
(6, 1, 4, '2025-07-31', 'Aniversário do Anderson');

-- --------------------------------------------------------

--
-- Estrutura da tabela `doador`
--

CREATE TABLE `doador` (
  `iddoador` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `celular` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `doador`
--

INSERT INTO `doador` (`iddoador`, `nome`, `email`, `celular`) VALUES
(1, 'Anderson Rosa', 'eu@gmail.com', '123456789'),
(2, 'Milena Aguiar', 'mi@gmail.com', '987456321'),
(3, 'Vanderlei Rosca', 'vro@gmail.com', '123456789'),
(4, 'Josicleide França', 'jf@gmail.com', '987456321'),
(5, 'Margarida Leoncio', 'ma@gmail.com', '987456321'),
(6, 'Giovana Perola', 'gi@gmail.com', '987456321'),
(7, 'Madalena Moura', 'ma@gmail.com', '987456321'),
(8, 'Vanessa Miller', 'va@gmail.com', '987456321');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `idtipo` int(10) UNSIGNED NOT NULL,
  `descritivo` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`idtipo`, `descritivo`) VALUES
(1, 'cobertor'),
(2, 'blusa'),
(3, 'capus'),
(4, 'meia'),
(5, 'calça');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `doacao`
--
ALTER TABLE `doacao`
  ADD PRIMARY KEY (`iddoacao`),
  ADD KEY `doacao_FKIndex1` (`idtipo`),
  ADD KEY `doacao_FKIndex2` (`iddoador`);

--
-- Índices para tabela `doador`
--
ALTER TABLE `doador`
  ADD PRIMARY KEY (`iddoador`);

--
-- Índices para tabela `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idtipo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `doacao`
--
ALTER TABLE `doacao`
  MODIFY `iddoacao` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `doador`
--
ALTER TABLE `doador`
  MODIFY `iddoador` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idtipo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `doacao`
--
ALTER TABLE `doacao`
  ADD CONSTRAINT `doacao_ibfk_1` FOREIGN KEY (`idtipo`) REFERENCES `tipo` (`idtipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `doacao_ibfk_2` FOREIGN KEY (`iddoador`) REFERENCES `doador` (`iddoador`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
