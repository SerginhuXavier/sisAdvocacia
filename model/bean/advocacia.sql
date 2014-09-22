-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Ago 08, 2009 as 03:34 PM
-- Versão do Servidor: 5.1.30
-- Versão do PHP: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `advocacia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `andamento`
--

CREATE TABLE IF NOT EXISTS `andamento` (
  `idAndamento` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `data` datetime NOT NULL,
  `idTribunal` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  PRIMARY KEY (`idAndamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `andamento`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) CHARACTER SET utf8 NOT NULL,
  `estado_civil` varchar(20) CHARACTER SET utf8 NOT NULL,
  `profissao` varchar(25) CHARACTER SET utf8 NOT NULL,
  `rg` varchar(22) CHARACTER SET utf8 NOT NULL,
  `cpf` varchar(18) CHARACTER SET utf8 NOT NULL,
  `endereco` varchar(100) CHARACTER SET utf8 NOT NULL,
  `complemento` varchar(20) CHARACTER SET utf8 NOT NULL,
  `tel1` varchar(9) CHARACTER SET utf8 NOT NULL,
  `tel2` varchar(9) CHARACTER SET utf8 NOT NULL,
  `cel` varchar(9) CHARACTER SET utf8 NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 NOT NULL,
  `observacao` text CHARACTER SET utf8 NOT NULL,
  `datacadastro` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nome`, `estado_civil`, `profissao`, `rg`, `cpf`, `endereco`, `complemento`, `tel1`, `tel2`, `cel`, `email`, `observacao`, `datacadastro`) VALUES
(1, 'Thiago Dantas dos Santos', 'casado', '', '5677084', '09943489758', 'Travessa Carlos Xavier', 'casa 6', '30115796', '78776873', '', 'thiago_dantas83@hotmail.com', 'Observações do Sistema de gerenciamento de clientes', NULL),
(2, 'José Carlos Francisco dos Santos', 'casado', '', '261425', '09923289765', 'Rua das Dálias', '355', '2681-6939', '', '7877-9876', 'jotakarlus@hotmail.com', 'Novamente Testando as Observações do sistema.', NULL),
(4, 'Paulo Sérgio', 'solteiro', '', '76544893', '11820165701', 'Rua Jacinto Alcides', '601 casa 3', '3936-5976', '', '', 'paulinhu_serginhu@hotmail.com', 'O Paulo está querendo entrar com uma ação contra a Telemar.', NULL),
(5, 'Matheus Dantas', 'solteiro', '', '1234556', '123334445', 'Travessa Carlos', 'casa6', '89008876', '', '', 'matheus_dantas08@hotmail.com', 'Matheus Dantas.', NULL),
(6, 'Keila Silva', 'casado', '', '12344556', '11122233345', 'Rua Abcde', 'casa 2', '30115674', '', '', 'kila@hotmal.com', 'teste no sistema.', NULL),
(7, 'Heric de Honkis Mãjáõ', 'casado', '', '12344536', '3476589', 'Rua A', 'casa 6', '45678909', '12834567', '123456567', 'thiago_dantas83@hotmail.com', 'Testando as Observações.', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comarca`
--

CREATE TABLE IF NOT EXISTS `comarca` (
  `idComarca` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) NOT NULL,
  `idVara` int(11) NOT NULL,
  PRIMARY KEY (`idComarca`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `comarca`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel`
--

CREATE TABLE IF NOT EXISTS `nivel` (
  `idNivel` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) NOT NULL,
  PRIMARY KEY (`idNivel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `nivel`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `permissao`
--

CREATE TABLE IF NOT EXISTS `permissao` (
  `idPermissao` int(11) NOT NULL AUTO_INCREMENT,
  `menuCliente` varchar(1) NOT NULL,
  `menuProcesso` varchar(1) NOT NULL,
  `menuAdm` varchar(1) NOT NULL,
  `idNivel` int(11) NOT NULL,
  PRIMARY KEY (`idPermissao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `permissao`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `processo`
--

CREATE TABLE IF NOT EXISTS `processo` (
  `idProcesso` int(11) NOT NULL AUTO_INCREMENT,
  `nprocesso` varchar(10) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `parte_contraria` varchar(40) NOT NULL,
  `idTribunal` int(11) NOT NULL,
  `data` date NOT NULL,
  `formaPagamento` varchar(10) NOT NULL,
  `valorFixo` decimal(10,2) NOT NULL,
  `nParcelas` int(20) NOT NULL,
  `valorAcao` decimal(10,2) DEFAULT NULL,
  `status` varchar(1) DEFAULT 'A',
  PRIMARY KEY (`idProcesso`,`nprocesso`,`idCliente`,`parte_contraria`,`idTribunal`,`data`,`formaPagamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `processo`
--

INSERT INTO `processo` (`idProcesso`, `nprocesso`, `idCliente`, `parte_contraria`, `idTribunal`, `data`, `formaPagamento`, `valorFixo`, `nParcelas`, `valorAcao`, `status`) VALUES
(1, '2009.98.09', 1, 'Microcamp', 2, '0000-00-00', 'vista', '1200.00', 0, '1233.00', 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tribunal`
--

CREATE TABLE IF NOT EXISTS `tribunal` (
  `idTribunal` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) NOT NULL,
  PRIMARY KEY (`idTribunal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tribunal`
--

INSERT INTO `tribunal` (`idTribunal`, `descricao`) VALUES
(1, 'Tribunal Regional'),
(2, 'Tribunal Regional Eleitoral'),
(3, 'Tribunal V Região'),
(4, 'Tribunal VI Região');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `login` varchar(10) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `idNivel` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `login`, `senha`, `idNivel`) VALUES
(1, 'Master', 'master', 'master', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vara`
--

CREATE TABLE IF NOT EXISTS `vara` (
  `idVara` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) NOT NULL,
  `idTribunal` int(11) NOT NULL,
  PRIMARY KEY (`idVara`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `vara`
--

