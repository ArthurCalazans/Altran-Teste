<?php
include '../include/conecta.php';

$s_cliente = "SELECT * FROM cad_cliente";
$r_cliente = $mysqli->query($s_cliente);

$result = '<div class="portlet">
	<div class="portlet-header">
		<h3><i class="fa fa-table"></i>Consulta Cliente</h3>
	</div>
	<div class="portlet-content">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover table-highlight table-checkable" data-provide="datatable" data-display-rows="10" data-info="true" data-search="true" data-length-change="true" data-paginate="true">
				<thead>
					<tr>
						<th data-filterable="true" data-sortable="true" data-direction="desc">ID Cliente</th>
						<th data-filterable="true" data-sortable="true" data-direction="asc">Nome Cliente</th>
						<th data-filterable="true" data-sortable="true" data-direction="asc">E-mail Cliente</th>
						<th data-filterable="true" data-sortable="false">Telefone Cliente</th>
					</tr>
				</thead>
				<tbody>';
				
while($c_cliente = $r_cliente->fetch_object())
{
	$result .='
	<tr>
		<td>'.$c_cliente->id_cliente.'</td>
		<td>'.$c_cliente->nome_cliente.'</td>
		<td>'.$c_cliente->email_cliente.'</td>
		<td>'.$c_cliente->tel_cliente.'</td>
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