-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2020 às 13:53
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tarefas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `descricao` text DEFAULT NULL,
  `prazo` date DEFAULT NULL,
  `prioridade` int(1) DEFAULT NULL,
  `concluida` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tarefas`
--

INSERT INTO `tarefas` (`id`, `nome`, `descricao`, `prazo`, `prioridade`, `concluida`) VALUES
(1, 'estudar php', 'continuar meus estudos de php e mySQL', NULL, 1, NULL),
(2, '2', '2', '0000-00-00', 2, 2),
(3, 'comprar leite', 'desnatado', NULL, 3, NULL),
(83, 'fdsgfdgdfs', '', '0000-00-00', 1, NULL),
(84, 'testasdo data', 'util', '0000-00-00', 3, NULL),
(85, 'data 2', 'ohhhhh', '0000-00-00', 1, NULL),
(86, 'data 2', 'ohhhhh', '0000-00-00', 1, NULL),
(87, 'hehehehe', 'jhgkhg', '0000-00-00', 1, NULL),
(88, 'testasdo data', '', '0000-00-00', 1, NULL),
(90, 'hehehehe', 'agora fela da pouta', '0000-00-00', 3, 1),
(91, 'hehehehe', '', '0000-00-00', 1, NULL),
(92, 'hehehehe', '', '0000-00-00', 1, NULL),
(93, 'hehehehe', '', '0000-00-00', 1, NULL),
(124, 'testasdo data', 'jhgf', '2020-10-05', 1, NULL),
(125, 'testasdo data', 'jfghjghjgf', '1995-08-07', 3, NULL),
(127, 'testando de novo', 'aaaaaaaaaaaah merda', '2020-11-15', 1, NULL),
(128, 'testando de novo', 'aaaaaaaaaaaah merda', '2020-11-15', 1, NULL),
(130, 'calisthenic', 'hjkhj', '1212-12-11', 1, NULL),
(131, 'calisthenic', 'hjkhj', '1212-12-11', 1, NULL),
(132, 'calisthenic', 'hjkhj', '1212-12-11', 1, NULL),
(210, 'cesar', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj441564154185 kiçop         jjjjjjjjjj', '0000-00-00', 1, 1),
(216, 'calisto', '', '0000-00-00', 1, NULL),
(217, 'julio', 'coder br', '2011-07-09', 3, 1),
(218, 'calisto ddd', '', '0000-00-00', 1, NULL),
(219, 'calisto ddd', '', '0000-00-00', 1, NULL),
(220, 'calisto ddd 11', '', '0000-00-00', 1, NULL),
(221, 'estudar phpkkkkkkkkk', '', '0000-00-00', 1, NULL),
(222, 'calisto ddd 11hhhhhh', 'ola mundo ', '2020-10-05', 3, 1),
(227, 'não sei ', 'sasasas 41541541', '2018-07-09', 2, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
