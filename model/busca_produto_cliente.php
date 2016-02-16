<?php

include_once 'include/conecta.php';

$s_cliente = "SELECT * FROM cad_cliente";
$r_cleinte = $mysqli->query($s_cliente);

echo '
<div class="form-group">
	<label class="col-md-2">Cliente</label>
	<div class="col-md-10">
		<select name="id_cliente" class="form-control">
			<option value="0" selected>Selecione um Cliente</option>';
			while($c_cliente = $r_cleinte->fetch_object())
			{
				echo '<option value="'.$c_cliente->id_cliente.'">'.$c_cliente->nome_cliente.'</option>';				
			}
echo '
		</select>
	</div>
</div>';

$s_produtos = "SELECT * FROM cad_produtos";
$r_produtos = $mysqli->query($s_produtos);

echo '
<div class="form-group">
	<label class="col-md-2">Produto</label>
	<div class="col-md-10">
		<select name="id_produto" class="form-control">
			<option value="0" selected>Selecione um Produto</option>';
			while($c_produtos = $r_produtos->fetch_object())
			{
				echo '<option value="'.$c_produtos->id_produto.'">'.$c_produtos->nome_produto.' - '.$c_produtos->preco_produto.'</option>';				
			}
echo '
		</select>
	</div>
</div>';

?>