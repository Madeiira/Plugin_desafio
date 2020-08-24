<?php

//Incluir a conexao com BD
include_once("conexao.php");

//Receber os dados do formulário
//$arquivo = $_FILES['arquivo'];
//var_dump($arquivo);
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];

//ler todo o arquivo para um array
$dados = file($arquivo_tmp);
//var_dump($dados);

foreach($dados as $lines){
	$lines = trim($lines);
	$valor = explode(',', $lines);
	var_dump($valor);
	
	$datas = $valor[0];
	$messagem = $valor[1];


	
	$result_usuario = "INSERT INTO dbo (datas, messagem) VALUES ('$datas', '$messagem')";
	
	$resultado_usuario = mysqli_query($conn, $result_usuario);	
}
$_SESSION['msg'] = "<p style='color: green;'>Importação dos dados com sucesso!</p>";
header("Location: indexx.php");



