<?php
//definingo variáveis de conexão

	$servidor = "faccon-0359";
	//$servidor = "localhost";
	$usuario = "root";
	$senha = "faccon";
	//$senha = "";
	$banco = "monitorderedes";

//criar conexão

	$connect = new mysqli ($servidor, $usuario, $senha, $banco);
	
//checar conexão

//	if($connect->connect_error) {
//		
//			die("conexão falhou: ".$connect->connect_error);
//	} else {
//		
//		echo "conexão realizada com sucesso!";
//	}

?>