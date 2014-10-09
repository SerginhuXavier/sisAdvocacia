-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Out-2014 às 06:21
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `advocacia`
--
CREATE DATABASE IF NOT EXISTS `advocacia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `advocacia`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `andamento`
--

DROP TABLE IF EXISTS `andamento`;
CREATE TABLE IF NOT EXISTS `andamento` (
`idAndamento` int(11) NOT NULL,
  `data` date NOT NULL,
  `idProcesso` int(11) NOT NULL,
  `observacao` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
`idCliente` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `profissao` varchar(25) DEFAULT NULL,
  `rg` varchar(22) NOT NULL,
  `cpf` varchar(18) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `complemento` varchar(20) DEFAULT NULL,
  `tel1` varchar(14) NOT NULL,
  `tel2` varchar(14) DEFAULT NULL,
  `cel` varchar(14) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `observacao` text,
  `datacadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `nacionalidade` varchar(40) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comarca`
--

DROP TABLE IF EXISTS `comarca`;
CREATE TABLE IF NOT EXISTS `comarca` (
`idComarca` int(11) NOT NULL,
  `descricao` varchar(30) CHARACTER SET latin1 NOT NULL,
  `idVara` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel`
--

DROP TABLE IF EXISTS `nivel`;
CREATE TABLE IF NOT EXISTS `nivel` (
`idNivel` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissao`
--

DROP TABLE IF EXISTS `permissao`;
CREATE TABLE IF NOT EXISTS `permissao` (
`idPermissao` int(11) NOT NULL,
  `menuCliente` varchar(1) CHARACTER SET latin1 NOT NULL,
  `menuProcesso` varchar(1) CHARACTER SET latin1 NOT NULL,
  `menuAdm` varchar(1) CHARACTER SET latin1 NOT NULL,
  `idNivel` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `processo`
--

DROP TABLE IF EXISTS `processo`;
CREATE TABLE IF NOT EXISTS `processo` (
`idProcesso` int(11) NOT NULL,
  `nprocesso` varchar(10) CHARACTER SET latin1 NOT NULL,
  `idCliente` int(11) NOT NULL,
  `parte_contraria` varchar(40) CHARACTER SET latin1 NOT NULL,
  `idTribunal` int(11) NOT NULL,
  `data` date NOT NULL,
  `formaPagamento` varchar(10) CHARACTER SET latin1 NOT NULL,
  `valorFixo` decimal(10,2) NOT NULL,
  `nParcelas` int(20) NOT NULL,
  `valorAcao` decimal(10,2) DEFAULT NULL,
  `status` varchar(1) CHARACTER SET latin1 DEFAULT 'A'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tribunal`
--

DROP TABLE IF EXISTS `tribunal`;
CREATE TABLE IF NOT EXISTS `tribunal` (
`idTribunal` int(11) NOT NULL,
  `descricao` varchar(30) CHARACTER SET latin1 NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
`idUsuario` int(11) NOT NULL,
  `nome` varchar(30) CHARACTER SET latin1 NOT NULL,
  `login` varchar(10) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(10) CHARACTER SET latin1 NOT NULL,
  `menuAdm` int(11) NOT NULL,
  `menuProcesso` int(11) NOT NULL,
  `menuCliente` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vara`
--

DROP TABLE IF EXISTS `vara`;
CREATE TABLE IF NOT EXISTS `vara` (
`idVara` int(11) NOT NULL,
  `descricao` varchar(30) CHARACTER SET latin1 NOT NULL,
  `idTribunal` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `andamento`
--
ALTER TABLE `andamento`
 ADD PRIMARY KEY (`idAndamento`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`idCliente`);

--
-- Indexes for table `comarca`
--
ALTER TABLE `comarca`
 ADD PRIMARY KEY (`idComarca`);

--
-- Indexes for table `nivel`
--
ALTER TABLE `nivel`
 ADD PRIMARY KEY (`idNivel`);

--
-- Indexes for table `permissao`
--
ALTER TABLE `permissao`
 ADD PRIMARY KEY (`idPermissao`);

--
-- Indexes for table `processo`
--
ALTER TABLE `processo`
 ADD PRIMARY KEY (`idProcesso`,`nprocesso`,`idCliente`,`parte_contraria`,`idTribunal`,`data`,`formaPagamento`);

--
-- Indexes for table `tribunal`
--
ALTER TABLE `tribunal`
 ADD PRIMARY KEY (`idTribunal`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`idUsuario`);

--
-- Indexes for table `vara`
--
ALTER TABLE `vara`
 ADD PRIMARY KEY (`idVara`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `andamento`
--
ALTER TABLE `andamento`
MODIFY `idAndamento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comarca`
--
ALTER TABLE `comarca`
MODIFY `idComarca` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `nivel`
--
ALTER TABLE `nivel`
MODIFY `idNivel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissao`
--
ALTER TABLE `permissao`
MODIFY `idPermissao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `processo`
--
ALTER TABLE `processo`
MODIFY `idProcesso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tribunal`
--
ALTER TABLE `tribunal`
MODIFY `idTribunal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vara`
--
ALTER TABLE `vara`
MODIFY `idVara` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `login`, `senha`, `menuAdm`, `menuProcesso`, `menuCliente`, `status`) VALUES
(1, 'Master', 'master', 'master', 1, 1, 1, 1),
(2, 'Clientes', 'cliente', 'cliente', 0, 0, 1, 1),
(3, 'adm', 'adm', 'adm', 1, 0, 0, 1),
(4, 'processo', 'processo', 'processo', 0, 1, 0, 1);