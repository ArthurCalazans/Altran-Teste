<?php 
	include '../include/conecta.php';
	
	$nome_cliente = $_POST['nome_cliente'];
	$email_cliente = $_POST['email_cliente'];
	$tel_cliente = $_POST['tel_cliente'];
	
	$i_cliente = "INSERT INTO cad_cliente (nome_cliente, email_cliente, tel_cliente) values ('".$nome_cliente."','".$email_cliente."','".$tel_cliente."')";
	$r_cliente = $mysqli->query($i_cliente);
	
	if($r_cliente)
	{
		echo 1;
	}
	else
	{
		var_dump($i_cliente);
	}
?>