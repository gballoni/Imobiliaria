-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Dez-2020 às 00:50
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `imobiliaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `type` enum('A','C') NOT NULL,
  `property_owner` varchar(15) NOT NULL,
  `CEP` varchar(10) NOT NULL,
  `city` varchar(15) NOT NULL,
  `UF` char(2) NOT NULL,
  `neighborhood` varchar(15) NOT NULL,
  `room` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `garage` int(11) NOT NULL,
  `price` decimal(19,4) NOT NULL,
  `announcement` varchar(100) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `property`
--

INSERT INTO `property` (`id`, `type`, `property_owner`, `CEP`, `city`, `UF`, `neighborhood`, `room`, `bathroom`, `garage`, `price`, `announcement`, `creation_date`) VALUES
(133, 'A', 'gballoni', '12131341', 'Limeira', 'AC', 'centro', 4, 1, 1, '1000.0000', 'eqeq', '2020-12-13 18:59:16'),
(140, 'A', 'Alexandre', '131313', 'Limeira', 'AC', 'Cidade', 1, 1, 1, '100000.0000', 'Apartamento ', '2020-12-13 20:24:54'),
(142, 'A', 'Alexandre', '133131', 'Limeira', 'AC', 'centro', 8, 2, 1, '4000.0000', 'adda', '2020-12-13 20:26:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `creation_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `email`, `creation_date`) VALUES
(1, 'Guilherme Balloni', 'gballoni', '123456', 'teste@gmail.com', '2020-12-02 14:11:52'),
(2, 'João teste', 'joão', '654321', 'joao@gmail.com', '2020-12-10 16:37:57'),
(4, '', '', '', '', '2020-12-13 17:56:38'),
(5, 'Feliz', 'feliz123', '123456', 'teste7@gmail.com', '2020-12-13 20:04:51'),
(6, 'Alexandre', 'Alexandre', '123456', 'alexande@gmail.com', '2020-12-13 20:23:54'),
(7, 'Leonardo', 'leonardo', '123456', 'leonardo@gmail.com', '2020-12-13 20:39:12'),
(8, 'Rafael', 'rafael', '123456', 'rafael@gmail.com', '2020-12-13 20:45:25');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
