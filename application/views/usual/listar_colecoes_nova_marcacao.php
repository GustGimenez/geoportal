<table class="table table-bordered">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Descrição</th>
			<th>Visualizar</th>
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
			anchor(base_url("usual/criar_marcacao/".$col->col_id),"Definir",array('class'=>'btn btn-info')).
				"</td>"."</tr>";
		}
		?>
	</tbody>
</table>