
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 03/10/2014 às 19:14:18
-- Versão do Servidor: 5.1.69
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u424779720_advoc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `andamento`
--

CREATE TABLE IF NOT EXISTS `andamento` (
  `idAndamento` int(11) NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL,
  `idProcesso` int(11) NOT NULL,
  `observacao` text NOT NULL,
  PRIMARY KEY (`idAndamento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `profissao` varchar(25) NOT NULL,
  `rg` varchar(22) NOT NULL,
  `cpf` varchar(18) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `complemento` varchar(20) NOT NULL,
  `tel1` varchar(9) NOT NULL,
  `tel2` varchar(9) NOT NULL,
  `cel` varchar(9) NOT NULL,
  `email` varchar(40) NOT NULL,
  `observacao` text NOT NULL,
  `datacadastro` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `nacionalidade` varchar(40) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comarca`
--

CREATE TABLE IF NOT EXISTS `comarca` (
  `idComarca` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) CHARACTER SET latin1 NOT NULL,
  `idVara` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idComarca`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel`
--

CREATE TABLE IF NOT EXISTS `nivel` (
  `idNivel` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) NOT NULL,
  PRIMARY KEY (`idNivel`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissao`
--

CREATE TABLE IF NOT EXISTS `permissao` (
  `idPermissao` int(11) NOT NULL AUTO_INCREMENT,
  `menuCliente` varchar(1) CHARACTER SET latin1 NOT NULL,
  `menuProcesso` varchar(1) CHARACTER SET latin1 NOT NULL,
  `menuAdm` varchar(1) CHARACTER SET latin1 NOT NULL,
  `idNivel` int(11) NOT NULL,
  PRIMARY KEY (`idPermissao`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `processo`
--

CREATE TABLE IF NOT EXISTS `processo` (
  `idProcesso` int(11) NOT NULL AUTO_INCREMENT,
  `nprocesso` varchar(10) CHARACTER SET latin1 NOT NULL,
  `idCliente` int(11) NOT NULL,
  `parte_contraria` varchar(40) CHARACTER SET latin1 NOT NULL,
  `idTribunal` int(11) NOT NULL,
  `data` date NOT NULL,
  `formaPagamento` varchar(10) CHARACTER SET latin1 NOT NULL,
  `valorFixo` decimal(10,2) NOT NULL,
  `nParcelas` int(20) NOT NULL,
  `valorAcao` decimal(10,2) DEFAULT NULL,
  `status` varchar(1) CHARACTER SET latin1 DEFAULT 'A',
  PRIMARY KEY (`idProcesso`,`nprocesso`,`idCliente`,`parte_contraria`,`idTribunal`,`data`,`formaPagamento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tribunal`
--

CREATE TABLE IF NOT EXISTS `tribunal` (
  `idTribunal` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) CHARACTER SET latin1 NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idTribunal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) CHARACTER SET latin1 NOT NULL,
  `login` varchar(10) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(10) CHARACTER SET latin1 NOT NULL,
  `menuAdm` int(11) NOT NULL,
  `menuProcesso` int(11) NOT NULL,
  `menuCliente` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idUsuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `login`, `senha`, `menuAdm`, `menuProcesso`, `menuCliente`, `status`) VALUES
(1, 'Master', 'master', 'master', 1, 1, 1, 1),
(2, 'Clientes', 'cliente', 'cliente', 0, 0, 1, 1),
(3, 'adm', 'adm', 'adm', 1, 0, 0, 1),
(4, 'processo', 'processo', 'processo', 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vara`
--

CREATE TABLE IF NOT EXISTS `vara` (
  `idVara` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) CHARACTER SET latin1 NOT NULL,
  `idTribunal` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idVara`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
