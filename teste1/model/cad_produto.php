<?php 
	include '../include/conecta.php';
	
	$nome_produto = $_POST['nome_produto'];
	$preco_produto = str_replace("R$","",$_POST['preco_produto']);
	$preco_produto = str_replace(".","",$preco_produto);
	$preco_produto = str_replace(",",".",$preco_produto);

	$des_produto = $_POST['des_produto'];
	
	$i_produto = "INSERT INTO cad_produtos (nome_produto, preco_produto, des_produto) values ('".$nome_produto."','".$preco_produto."','".$des_produto."')";
	$r_produto = $mysqli->query($i_produto);
	
	if($r_produto)
	{
		// echo 1;
	}
	else
	{
		var_dump($i_produto);
	}
?>