-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Fev 16, 2010 as 12:09 
-- Versão do Servidor: 5.0.51
-- Versão do PHP: 5.3.1

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
  `idAndamento` int(11) NOT NULL auto_increment,
  `data` datetime NOT NULL,
  `idProcesso` int(11) NOT NULL,
  `observacao` text NOT NULL,
  PRIMARY KEY  (`idAndamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `andamento`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `idCliente` int(11) NOT NULL auto_increment,
  `nome` varchar(60) character set utf8 NOT NULL,
  `estado_civil` varchar(20) character set utf8 NOT NULL,
  `profissao` varchar(25) character set utf8 NOT NULL,
  `rg` varchar(22) character set utf8 NOT NULL,
  `cpf` varchar(18) character set utf8 NOT NULL,
  `endereco` varchar(100) character set utf8 NOT NULL,
  `complemento` varchar(20) character set utf8 NOT NULL,
  `tel1` varchar(9) character set utf8 NOT NULL,
  `tel2` varchar(9) character set utf8 NOT NULL,
  `cel` varchar(9) character set utf8 NOT NULL,
  `email` varchar(40) character set utf8 NOT NULL,
  `observacao` text character set utf8 NOT NULL,
  `datacadastro` timestamp NULL default NULL,
  `status` int(11) NOT NULL default '1',
  `nacionalidade` varchar(40) character set utf8 NOT NULL,
  PRIMARY KEY  (`idCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nome`, `estado_civil`, `profissao`, `rg`, `cpf`, `endereco`, `complemento`, `tel1`, `tel2`, `cel`, `email`, `observacao`, `datacadastro`, `status`, `nacionalidade`) VALUES
(1, 'Thiago Dantas dos Santos', 'casado', '', '5677084', '09943489758', 'Travessa Carlos Xavier', 'casa 6', '30115796', '78776873', '', 'thiago_dantas83@hotmail.com', 'Observações do Sistema de gerenciamento de clientes', NULL, 1, ''),
(2, 'José Carlos Francisco dos Santos', 'casado', '', '261425', '09923289765', 'Rua das Dálias', '355', '2681-6939', '', '7877-9876', 'jotakarlus@hotmail.com', 'Novamente Testando as Observações do sistema.', NULL, 1, ''),
(4, 'Paulo Sï¿½rgio', 'solteiro', '', '76544893', '11820165701', 'Rua Jacinto Alcides', '601 casa 3', '3936-5976', '3936-2201', '94931334', 'paulinhu_serginhu@hotmail.com', 'O Paulo estï¿½ querendo entrar com uma aï¿½ï¿½o contra a Telemar.', '2010-01-20 13:36:11', 1, 'Brasileiro'),
(5, 'Matheus Dantas', 'solteiro', '', '1234556', '123334445', 'Travessa Carlos', 'casa6', '89008876', '', '', 'matheus_dantas08@hotmail.com', 'Matheus Dantas.', NULL, 1, ''),
(6, 'Keila Silva', 'casado', '', '12344556', '11122233345', 'Rua Abcde', 'casa 2', '30115674', '', '', 'kila@hotmal.com', 'teste no sistema.', NULL, 1, ''),
(7, 'Heric de Honkis Mï¿½jï¿½ï¿½', 'casado', 'vagabundo', '12344536', '3476589', 'Rua A', 'casa 6', '45678909', '12834567', '123456567', 'thiago_dantas83@hotmail.com', 'Testando as Observaï¿½ï¿½es.', '2010-01-21 01:54:18', 1, 'italiano');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comarca`
--

CREATE TABLE IF NOT EXISTS `comarca` (
  `idComarca` int(11) NOT NULL auto_increment,
  `descricao` varchar(30) NOT NULL,
  `idVara` int(11) NOT NULL,
  `status` int(11) NOT NULL default '1',
  PRIMARY KEY  (`idComarca`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `comarca`
--

INSERT INTO `comarca` (`idComarca`, `descricao`, `idVara`, `status`) VALUES
(1, 'forum de bangu', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel`
--

CREATE TABLE IF NOT EXISTS `nivel` (
  `idNivel` int(11) NOT NULL auto_increment,
  `descricao` varchar(30) NOT NULL,
  PRIMARY KEY  (`idNivel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `nivel`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `permissao`
--

CREATE TABLE IF NOT EXISTS `permissao` (
  `idPermissao` int(11) NOT NULL auto_increment,
  `menuCliente` varchar(1) NOT NULL,
  `menuProcesso` varchar(1) NOT NULL,
  `menuAdm` varchar(1) NOT NULL,
  `idNivel` int(11) NOT NULL,
  PRIMARY KEY  (`idPermissao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `permissao`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `processo`
--

CREATE TABLE IF NOT EXISTS `processo` (
  `idProcesso` int(11) NOT NULL auto_increment,
  `nprocesso` varchar(10) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `parte_contraria` varchar(40) NOT NULL,
  `idTribunal` int(11) NOT NULL,
  `data` date NOT NULL,
  `formaPagamento` varchar(10) NOT NULL,
  `valorFixo` decimal(10,2) NOT NULL,
  `nParcelas` int(20) NOT NULL,
  `valorAcao` decimal(10,2) default NULL,
  `status` varchar(1) default 'A',
  PRIMARY KEY  (`idProcesso`,`nprocesso`,`idCliente`,`parte_contraria`,`idTribunal`,`data`,`formaPagamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `processo`
--

INSERT INTO `processo` (`idProcesso`, `nprocesso`, `idCliente`, `parte_contraria`, `idTribunal`, `data`, `formaPagamento`, `valorFixo`, `nParcelas`, `valorAcao`, `status`) VALUES
(1, '2009.98.09', 1, 'Microcamp', 2, '0000-00-00', 'vista', '1200.00', 0, '1233.00', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tribunal`
--

CREATE TABLE IF NOT EXISTS `tribunal` (
  `idTribunal` int(11) NOT NULL auto_increment,
  `descricao` varchar(30) NOT NULL,
  `status` int(11) NOT NULL default '1',
  PRIMARY KEY  (`idTribunal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tribunal`
--

INSERT INTO `tribunal` (`idTribunal`, `descricao`, `status`) VALUES
(1, 'Tribunal Regional', 1),
(2, 'Tribunal Regional Eleitoral', 1),
(3, 'Tribunal V Região', 1),
(4, 'Tribunal VI Região', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL auto_increment,
  `nome` varchar(30) NOT NULL,
  `login` varchar(10) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `menuAdm` int(11) NOT NULL,
  `menuProcesso` int(11) NOT NULL,
  `menuCliente` int(11) NOT NULL,
  `status` int(11) NOT NULL default '1',
  PRIMARY KEY  (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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
  `idVara` int(11) NOT NULL auto_increment,
  `descricao` varchar(30) NOT NULL,
  `idTribunal` int(11) NOT NULL,
  `status` int(11) NOT NULL default '1',
  PRIMARY KEY  (`idVara`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `vara`
--

INSERT INTO `vara` (`idVara`, `descricao`, `idTribunal`, `status`) VALUES
(1, 'vara de famÃ­lia', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
