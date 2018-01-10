<table class="table table-bordered">
	<thead>
		<tr>
			<th>Privada</th>
			<th>Nome</th>
			<th>Descrição</th>
			<th>Ação</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach($colecoes as $col){
			echo "<tr>";
			if($col->col_senha != null) echo "<td>Sim</td>";
			else echo "<td>Não</td>";
			echo "<td>".$col->col_nome."</td>";
			echo "<td>".$col->col_descricao."</td>";
			if($col->col_senha != null) {echo "<td>".anchor(base_url("usual/marcacoes_privadas_nova_marcacao/".$col->col_id),"Sugerir",array('class'=>'btn btn-info')).
				"</td>"."</tr>";}
			else {echo "<td>".anchor(base_url("usual/criar_marcacao/".$col->col_id),"Sugerir",array('class'=>'btn btn-info')).
				"</td>"."</tr>";}
		}
		?>
	</tbody>
</table>