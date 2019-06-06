<?php
//Faz o link com a página conxão  
require_once 'db_connect.php';
if($_POST) {
	
	$nomecomputador = $_POST ['nomecomputador'];
	$ip 			= $_POST['ip'];
	
	$sql = "insert into computadores (nome, IP) values ('$nomecomputador', '$ip')";
	
	//verificando se deu tudo certo
	
	if($connect->query($sql) === true) {
		
		echo "Dados inseridos com sucesso!";
	} else {
		  echo "Erro: ".$sql.$connect->connect_error;
	  }
	
	
		$connect->close();
		header("location:../index.php");
}

?>