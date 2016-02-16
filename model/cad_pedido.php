<?php 
	include '../include/conecta.php';
	
	$id_produto = $_POST['id_produto'];
	$id_cliente = $_POST['id_cliente'];
	
	$i_pedido = "INSERT INTO rel_pedido (id_produto, id_cliente) values ('".$id_produto."','".$id_cliente."')";
	$r_pedido = $mysqli->query($i_pedido);
	
	if($r_pedido)
	{
		echo 1;
	}
	else
	{
		echo 2;
	}
?>