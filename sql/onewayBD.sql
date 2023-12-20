-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 30-Ago-2023 às 22:26
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `onewaybd`
--
CREATE DATABASE IF NOT EXISTS `onewaybd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `onewaybd`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `IDADM` int(10) NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(100) NOT NULL,
  `SENHA` varchar(100) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  PRIMARY KEY (`IDADM`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`IDADM`, `EMAIL`, `SENHA`, `NOME`) VALUES
(2, 'pedrobotelhoprof@gmail.com', 'essaeminhaconta', 'Pedro Henrique Botelho de Souza'),
(3, 'lucas.rgrecco@gmail.com', '12223243343', 'Lucas Rodrigues Grecco');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinhoprod`
--

CREATE TABLE IF NOT EXISTS `carrinhoprod` (
  `IDVenda` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) NOT NULL,
  `NOME` varchar(255) NOT NULL,
  `CLASSE` varchar(50) NOT NULL,
  `VALOR` double NOT NULL,
  PRIMARY KEY (`IDVenda`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `IDPROD` varchar(6) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `CLASSE` varchar(100) NOT NULL,
  `TAMANHO` varchar(3) NOT NULL,
  `PRECO` float NOT NULL,
  `INCART` int(11) NOT NULL,
  `QUANTIDADE` int(11) NOT NULL,
  PRIMARY KEY (`IDPROD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`IDPROD`, `NOME`, `CLASSE`, `TAMANHO`, `PRECO`, `INCART`, `QUANTIDADE`) VALUES
('7Ve0', 'Classic Bracelet 2', 'Acessorios', 'UNI', 39.99, 0, 8),
('dIk6', 'Grafitti Bear Print T-Shirt 1', 'Superiores', 'G', 99.99, 2, 6),
('gtlM', 'Silver Ring', 'Acessorios', 'UNI', 29.99, 0, 17),
('guS2', 'Classic Male Necklace 2', 'Acessorios', 'UNI', 38.99, 1, 6),
('h7Po', 'Classic Bracelet 1', 'Acessorios', 'UNI', 39.99, 0, 2),
('IZa5', 'Hoodie New Grafitti White 2', 'Superiores', 'G', 139.99, 3, 9),
('o95i', 'Hoodie New Grafitti White 1', 'Superiores', 'G', 149.99, 0, 8),
('ozjd', 'Puffer OW Logo 1', 'Superiores', 'G', 289.99, 1, 4),
('qP1O', 'Classic Male Necklace 1', 'Acessorios', 'UNI', 38.99, 0, 10),
('rDJ4', 'Basic Shorts OW Logo 1', 'Inferiores', 'G', 39.99, 0, 14),
('sSvc', 'Black Astro Cropped 1', 'Superiores', 'G', 39.99, 0, 13),
('wD2P\n', 'Grafitti Bear Print T-Shirt 2', 'Superiores', 'G', 99.99, 0, 15),
('xCsC', 'Black Basic Oneway Cap', 'Acessórios', 'UNI', 59.99, 0, 13),
('zIZb', 'Basic Sweatpants OW Logo 1', 'Inferiores', 'G', 189.99, 0, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `IDADE` int(11) NOT NULL,
  `SENHA` varchar(255) NOT NULL,
  `RECEBER` tinyint(1) NOT NULL,
  `TERMOS` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID`, `NOME`, `EMAIL`, `IDADE`, `SENHA`, `RECEBER`, `TERMOS`) VALUES
(1, 'Pedro Henrique Botelho de Souza', 'pedrobotelhosouza@gmail.com', 17, 'helloworld124', 1, 1),
(2, 'Jorge Antonio Massa', 'jorginmassa@gmail.com', 16, '123456', 0, 1),
(3, 'Pedro', 'p@gmail.com', 17, '147258', 1, 1),
(4, 'Lucas', 'lucas.rgrecco@gmail.com', 18, 'huebrhuebr', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
