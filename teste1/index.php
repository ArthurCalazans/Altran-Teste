<?php 

setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

include 'include/conecta.php';

include 'view/header.html';
include 'view/menu.html';

if(empty($_GET['p']))
{
	include 'controller/home.php';
}elseif($_GET['p']==1)
{
	include 'controller/cad_produto.php';
}elseif($_GET['p']==2)
{
	include 'controller/cad_cliente.php';
}elseif($_GET['p']==3)
{
	include 'controller/cad_pedido.php';
}

include 'view/footer.html';

?>
