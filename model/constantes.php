<?php


define('CON_ADVOCACIA_HOST','localhost');
define("CON_ADVOCACIA_USER","root");
define("CON_ADVOCACIA_PASS","mysql");
define("CON_ADVOCACIA_BASE","advocacia");

//Constantes de banco
define("DB_ADVOCACIA"," advocacia.");

//Constantes prefixo sistema
define("TBL_ADVOCACIA","");

//Constantes de Tabela
//Tabelas ADVOCACIA
define("TBL_ANDAMENTOS",DB_ADVOCACIA.TBL_ADVOCACIA."andamento");
define("TBL_CLIENTES",DB_ADVOCACIA.TBL_ADVOCACIA."clientes");
define("TBL_COMARCAS",DB_ADVOCACIA.TBL_ADVOCACIA."comarca");
define("TBL_PROCESSOS",DB_ADVOCACIA.TBL_ADVOCACIA."processo");
define("TBL_TRIBUNAIS",DB_ADVOCACIA.TBL_ADVOCACIA."tribunal");
define("TBL_USUARIOS",DB_ADVOCACIA.TBL_ADVOCACIA."usuario ");
define("TBL_VARAS",DB_ADVOCACIA.TBL_ADVOCACIA."vara");


//Constante da Paginaзгo das listas com 5 por pбgina
define("LISTA","5");

//Constantes Relatуrios PDF
define("PAGINACAO_RELATORIO","48");
define("FONTE","Arial");
define("FONTE_FILTRO","10");
define("FONTE_TITULO","10");
define("FONTE_TITULO_DADOS","8");

define("ALTURA","5");


?>