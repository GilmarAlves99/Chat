<?php 

// BANCO DE DADOS SERVIDOR LOCAL XAMPP
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "chat";  


//BANCO DE DADOS HOSPEDAGEM UMBLER
/*$servidor = "mysql552.umbler.com";
$usuario = "hugochat";
$password = "senhaChat";
$bd = "chat_bd";*/

$conexao = new mysqli($servidor,$usuario,$password,$bd);

function formatarData($data){
	return date('H:i:s', strtotime($data));

}


 ?>