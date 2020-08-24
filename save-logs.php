<?php
/*
Plugin Name: SaveLogsBD
Plugin URI: 
Description: Desafio 
Version: 3.0
Author: Gabriel Madeira
Author URI: https://github.com/Madeiira

*/
//Security
if(!defined('ABSPATH')){
    exit("Acesso Negado");
}

//DEFINIÇÃO DE CONSTANTE DE DIRETORIO ABOSULUTO
define('SAVL_DIRETORIO_ABSOLUTO_DO_PLUGIN',plugin_dir_path(__FILE__));

// INCLUDES

require_once(SAVL_DIRETORIO_ABSOLUTO_DO_PLUGIN.'/includes/conexao.php');
require_once(SAVL_DIRETORIO_ABSOLUTO_DO_PLUGIN.'/includes/indexx.php');
//require_once(SAVL_DIRETORIO_ABSOLUTO_DO_PLUGIN.'/includes/processa.php');

?>