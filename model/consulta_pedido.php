<?php
include '../include/conecta.php';

$s_pedido = "SELECT * FROM rel_pedido cpe INNER JOIN cad_produtos cpr ON (cpr.id_produto = cpe.id_produto) INNER JOIN cad_cliente ccl ON (ccl.id_cliente=cpe.id_cliente)";
$r_pedido = $mysqli->query($s_pedido);

$result = '<div class="portlet">
	<div class="portlet-header">
		<h3><i class="fa fa-table"></i>Consulta Pedido</h3>
	</div>
	<div class="portlet-content">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover table-highlight table-checkable" data-provide="datatable" data-display-rows="10" data-info="true" data-search="true" data-length-change="true" data-paginate="true">
				<thead>
					<tr>
						<th data-filterable="true" data-sortable="true" data-direction="desc">ID Pedido</th>
						<th data-filterable="true" data-sortable="true" data-direction="asc">Nome Cliente</th>
						<th data-filterable="true" data-sortable="true" data-direction="asc">E-mail Cliente</th>
						<th data-filterable="true" data-sortable="false">Telefone Cliente</th>
						<th data-filterable="true" data-sortable="true" data-direction="desc">Nome do Produto</th>
						<th data-filterable="true" data-sortable="true" data-direction="asc">Preço do Produto</th>
						<th data-filterable="false" data-sortable="false">Descrição</th>
					</tr>
				</thead>
				<tbody>';
				
while($c_pedido = $r_pedido->fetch_object())
{
	$result .='
	<tr>
		<td>'.$c_pedido->id_pedido.'</td>
		<td>'.$c_pedido->nome_cliente.'</td>
		<td>'.$c_pedido->email_cliente.'</td>
		<td>'.$c_pedido->tel_cliente.'</td>
		<td>'.$c_pedido->nome_produto.'</td>
		<td>'.$c_pedido->preco_produto.'</td>
		<td>'.$c_pedido->des_produto.'</td>
	</tr>';	
}	
	$result .='
	</tbody>
			</table>
		</div>
	</div>
</div>';
echo $result;
?>