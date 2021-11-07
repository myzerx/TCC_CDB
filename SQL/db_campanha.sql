-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Nov-2021 às 03:21
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_campanha`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacao`
--

CREATE TABLE `doacao` (
  `doacao_ID` int(11) NOT NULL,
  `doacao_usuario_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `doacao`
--

INSERT INTO `doacao` (`doacao_ID`, `doacao_usuario_ID`) VALUES
(1, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `pedido_ID` int(11) NOT NULL,
  `pedido_usuario_ID` int(11) NOT NULL,
  `pedido_rua` varchar(80) NOT NULL,
  `pedido_bairro` varchar(50) NOT NULL,
  `pedido_cidade` varchar(20) NOT NULL,
  `pedido_status` int(1) NOT NULL DEFAULT 0,
  `pedido_desc` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`pedido_ID`, `pedido_usuario_ID`, `pedido_rua`, `pedido_bairro`, `pedido_cidade`, `pedido_status`, `pedido_desc`) VALUES
(1, 3, 'Rua josé maria de carvalho', 'Jardim portal do itavuvu', 'Sorocaba', 1, 'eu sou de perto da escola etec e estou enfrentado poblemas.'),
(2, 4, 'Rua atras de tras', 'vitoria', 'Sorocaba', 0, 'eu sou de perto da escola etec e estou enfrentado tambem.'),
(3, 3, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaa', 0, NULL),
(4, 3, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaa', 0, 'aaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_ID` int(11) NOT NULL,
  `usuario_nome` varchar(50) NOT NULL,
  `usuario_senha` varchar(16) NOT NULL,
  `usuario_email` varchar(254) NOT NULL,
  `usuario_telefone` varchar(11) NOT NULL,
  `adm_usuario` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_ID`, `usuario_nome`, `usuario_senha`, `usuario_email`, `usuario_telefone`, `adm_usuario`) VALUES
(1, 'Guilherme', '2469', 'teste@teste.com', '15996147557', 1),
(3, 'Guilherme', '000', 'teste@teste.com.br', '15996147557', 0),
(4, 'guilherme', '0101', '', '000000000', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `doacao`
--
ALTER TABLE `doacao`
  ADD PRIMARY KEY (`doacao_ID`),
  ADD KEY `Doacao_usuario_ID` (`doacao_usuario_ID`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`pedido_ID`),
  ADD KEY `pedido_usuario_ID` (`pedido_usuario_ID`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_ID`),
  ADD UNIQUE KEY `email` (`usuario_email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `doacao`
--
ALTER TABLE `doacao`
  MODIFY `doacao_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `pedido_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `doacao`
--
ALTER TABLE `doacao`
  ADD CONSTRAINT `Doacao_usuario_ID` FOREIGN KEY (`doacao_usuario_ID`) REFERENCES `usuario` (`usuario_ID`);

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_usuario_ID` FOREIGN KEY (`pedido_usuario_ID`) REFERENCES `usuario` (`usuario_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
