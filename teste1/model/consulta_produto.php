<?php
include '../include/conecta.php';

$s_produto = "SELECT * FROM cad_produtos";
$r_produto = $mysqli->query($s_produto);

$result = '<div class="portlet">
	<div class="portlet-header">
		<h3><i class="fa fa-table"></i>Consulta Produto</h3>
	</div>
	<div class="portlet-content">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover table-highlight table-checkable" data-provide="datatable" data-display-rows="10" data-info="true" data-search="true" data-length-change="true" data-paginate="true">
				<thead>
					<tr>
						<th data-filterable="true" data-sortable="true" data-direction="desc">ID Produto</th>
						<th data-filterable="true" data-sortable="true" data-direction="asc">Nome Produto</th>
						<th data-filterable="true" data-sortable="true" data-direction="asc">Preço Produto</th>
						<th data-filterable="true" data-sortable="false">Descrição</th>
					</tr>
				</thead>
				<tbody>';
				
while($c_produto = $r_produto->fetch_object())
{
	$result .='
	<tr>
		<td>'.$c_produto->id_produto.'</td>
		<td>'.$c_produto->nome_produto.'</td>
		<td>R$ '.number_format($c_produto->preco_produto,2,',','.').'</td>
		<td>'.$c_produto->des_produto.'</td>
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