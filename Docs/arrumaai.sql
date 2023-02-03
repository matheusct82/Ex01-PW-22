-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Fev-2023 às 23:51
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `arrumaai`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_servico`
--

CREATE TABLE `imagem_servico` (
  `imagem_id` int(11) NOT NULL,
  `servico_id` int(11) DEFAULT NULL,
  `filename` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `servico_id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`servico_id`, `usuario_id`, `nome`, `endereco`, `telefone`, `descricao`) VALUES
(1, NULL, '', '', '', ''),
(2, NULL, 'lol', 'lol', 'lol', '22'),
(3, NULL, 'Serviço 1', 'Endereço 1', 'Telefone 1', 'Descrição 1'),
(4, NULL, 'Serviço 2', 'Endereço 2', 'Telefone 2', 'Descrição 2'),
(5, NULL, 'Serviço 3', 'Endereço 3', 'Telefone 3', 'Descrição 3'),
(6, NULL, 'Serviço 4', 'Endereço 4', 'Telefone 4', 'Descrição 4'),
(7, NULL, 'Serviço 5', 'Endereço 5', 'Telefone 5', 'Descrição 5'),
(8, NULL, 'Serviço 6', 'Endereço 6', 'Telefone 6', 'Descrição 6'),
(9, NULL, 'Serviço 7', 'Endereço 7', 'Telefone 7', 'Descrição 7'),
(10, NULL, 'Serviço 8', 'Endereço 8', 'Telefone 8', 'Descrição 8'),
(11, NULL, 'Serviço 9', 'Endereço 9', 'Telefone 9', 'Descrição 9'),
(12, NULL, 'Serviço 10', 'Endereço 10', 'Telefone 10', 'Descrição 10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`) VALUES
(8, 'qqq', 'b2ca678b4c936f905fb82f2733f5297f'),
(9, 'sos', '310dcbbf4cce62f762a2aaa148d556bd'),
(10, 'matheus.couto', '202cb962ac59075b964b07152d234b70'),
(11, 'teste', '698dc19d489c4e4db73e28a713eab07b'),
(12, 'allan', 'b993e4526238d62f6b1b90e605532ff8'),
(13, '123', '202cb962ac59075b964b07152d234b70'),
(14, 'jessica', '202cb962ac59075b964b07152d234b70'),
(15, 'mat', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `imagem_servico`
--
ALTER TABLE `imagem_servico`
  ADD PRIMARY KEY (`imagem_id`),
  ADD KEY `servico_id` (`servico_id`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`servico_id`),
  ADD KEY `profissional_id` (`usuario_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `servico_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `imagem_servico`
--
ALTER TABLE `imagem_servico`
  ADD CONSTRAINT `imagem_servico_ibfk_1` FOREIGN KEY (`servico_id`) REFERENCES `servico` (`servico_id`);

--
-- Limitadores para a tabela `servico`
--
ALTER TABLE `servico`
  ADD CONSTRAINT `servico_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
