-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Nov-2022 às 02:00
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_exemplo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_clientes`
--

CREATE TABLE `tab_clientes` (
  `cli_id` int(11) NOT NULL,
  `cli_nome` varchar(20) NOT NULL,
  `cli_sobrenome` varchar(30) NOT NULL,
  `cli_fone` varchar(10) DEFAULT NULL,
  `cli_data_nasc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tab_clientes`
--

INSERT INTO `tab_clientes` (`cli_id`, `cli_nome`, `cli_sobrenome`, `cli_fone`, `cli_data_nasc`) VALUES
(1, 'Marina', 'Soares da Silva', '94513-3145', '2012-10-24'),
(2, 'Jasmine', 'Souza', '95392-4578', '2002-01-14'),
(3, 'Joana', 'Pinheiro', '97845-4578', '2003-04-20');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tab_clientes`
--
ALTER TABLE `tab_clientes`
  ADD PRIMARY KEY (`cli_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tab_clientes`
--
ALTER TABLE `tab_clientes`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
