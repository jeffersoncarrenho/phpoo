-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31-Ago-2015 às 23:04
-- Versão do servidor: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpoobd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `login`, `senha`) VALUES
(4, 'Jefferson Lima', 'jefferson@teste.com.br', 'jeff', '12345555'),
(5, 'Jefferson Lima', 'jefferson@teste.com.br', 'jeff', '12345555'),
(6, 'Jao silva', 'jao', 'jao@teste.com.br', '7894613'),
(7, 'Jefferson Lima', 'jefferson@teste.com.br', 'jeff', '12345555'),
(8, 'Jefferson Lima', 'jefferson@teste.com.br', 'jeff', '12345555'),
(15, 'Jefferson Lima', 'jefferson@teste.com.br', 'jeff', '12345555'),
(18, 'Jefferson Lima', 'jefferson@teste.com.br', 'jeff', '12345555'),
(19, 'Jefferson Lima', 'jefferson@teste.com.br', 'jeff', '12345555'),
(20, 'Jefferson Lima', 'jefferson@teste.com.br', 'jeff', '12345555'),
(21, 'Jefferson Lima', 'jefferson@teste.com.br', 'jeff', '12345555'),
(22, 'Jefferson Lima', 'jefferson@teste.com.br', 'jeff', '12345555'),
(24, 'Jefferson Lima', 'jeff', 'jefferson@teste.com.br', '12345555'),
(25, 'Jefferson Lima', 'jeff', 'jefferson@teste.com.br', '12345555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
