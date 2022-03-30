-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 23-Mar-2022 às 16:36
-- Versão do servidor: 5.7.33
-- versão do PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(22) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nome_completo` varchar(255) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `formacao` varchar(255) DEFAULT NULL,
  `experiencia` varchar(255) DEFAULT NULL,
  `competencia` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `cpf`, `senha`, `email`, `nome_completo`, `data_nascimento`, `endereco`, `formacao`, `experiencia`, `competencia`, `linkedin`) VALUES
(19, '11111111111', '12345678', '5555555555', '55555555555', '2022-03-17', '55555555555', '55555555555555', '555555555555', '55555555555', '555555555555'),
(20, '22222222222', '12345678', 'dsadsa', '31232131', '2022-03-17', 'dsadas', '321321', 'dsadas', 'dsadsa', 'dsadas'),
(21, '33333333333', '12345678', 'jaderoliveirasouza@gmail.com', 'dsadsa', '2022-03-24', '321321', '321321', '321321', 'dsadsa', 'dsadas'),
(22, '44444444444', '12345678', 'mail', 'dsadsa', '2022-03-26', 'dsadsa', '321321', 'dsadas', 'teste', 'dsadas'),
(24, '88888888888', '12345678', 'eaaaaaaaaaaaaaaaaaaaaaaa@gmail.com', 'teste', '2022-03-24', 'teste', 'teste', 'teste', 'teste', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

CREATE TABLE `vaga` (
  `vaga_id` int(32) NOT NULL,
  `nome_vaga` varchar(255) NOT NULL,
  `faixa_salarial` varchar(255) NOT NULL,
  `nivel_hierarquico` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vaga`
--

INSERT INTO `vaga` (`vaga_id`, `nome_vaga`, `faixa_salarial`, `nivel_hierarquico`, `cidade`, `descricao`) VALUES
(2, 'Dev', 'R$1600', 'Senior', 'Florianopolis', 'Atuar como fullstack'),
(4, 'php', 'php', 'php', 'php', 'php');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Índices para tabela `vaga`
--
ALTER TABLE `vaga`
  ADD PRIMARY KEY (`vaga_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `vaga`
--
ALTER TABLE `vaga`
  MODIFY `vaga_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
