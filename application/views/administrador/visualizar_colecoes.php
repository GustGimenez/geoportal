<table class="table table-bordered">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Descrição</th>
			<th>Ação</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach($colecoes as $col){
			echo "<tr>";
			echo "<td>".$col->col_id."</td>";
			echo "<td>".$col->col_nome."</td>";
			echo "<td>".$col->col_descricao."</td>";
			echo "<td>".
			anchor(base_url("administrador/exibir_marcacoes/".$col->col_id),"Visualizar",array('class'=>'btn btn-info')).
				"</td>"."</tr>";
		}
		?>
	</tbody>
</table>