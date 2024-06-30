-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Nov-2023 às 20:49
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `controle`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_check_in`
--

CREATE TABLE `cad_check_in` (
  `Id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `fone` varchar(11) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `cep` varchar(11) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `uf` varchar(5) DEFAULT NULL,
  `data_in` varchar(11) DEFAULT NULL,
  `data_out` varchar(11) DEFAULT NULL,
  `acompanhantes` varchar(200) DEFAULT NULL,
  `ap` varchar(10) DEFAULT NULL,
  `situacao` varchar(20) DEFAULT NULL,
  `pago` varchar(11) DEFAULT NULL,
  `horas` varchar(11) DEFAULT NULL,
  `dia` varchar(11) DEFAULT NULL,
  `soma` varchar(1) DEFAULT NULL,
  `valor` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_cliente`
--

CREATE TABLE `cad_cliente` (
  `Id` int(11) NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `fone` varchar(15) DEFAULT NULL,
  `cidade` varchar(200) DEFAULT NULL,
  `uf` varchar(100) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `cpf` varchar(12) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_funcionario`
--

CREATE TABLE `cad_funcionario` (
  `Id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `senha` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cad_funcionario`
--

INSERT INTO `cad_funcionario` (`Id`, `nome`, `senha`) VALUES
(1, 'admin', '12345');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cad_check_in`
--
ALTER TABLE `cad_check_in`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `cad_cliente`
--
ALTER TABLE `cad_cliente`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `cad_funcionario`
--
ALTER TABLE `cad_funcionario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad_check_in`
--
ALTER TABLE `cad_check_in`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cad_cliente`
--
ALTER TABLE `cad_cliente`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cad_funcionario`
--
ALTER TABLE `cad_funcionario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
