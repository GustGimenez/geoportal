<style>
div.busca{
	margin-bottom: 15px;
	margin-top: 15px;
	text-align: center;
}

#busca_col_nome{
	height: 34px;
	width: 190px;
}
</style>

<div class="busca">
	<form method="post" action="<?= base_url('administrador/listar_colecoes_com_filtro') ?>">
		<input type="text" name="busca_col_nome" id="busca_col_nome" placeholder="Busca por Nome"><br><br>
		<button type="submit" class="btn btn-info">Buscar</button>
		<a href="<?= base_url('administrador/listar_colecoes') ?>" class="btn btn-info">Remover Filtro</a>
	</form>
</div>

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
			echo "<td>".str_replace('_', ' ', $col->col_nome)."</td>";
			echo "<td>".$col->col_descricao."</td>";
			if($col->col_senha != null) {echo "<td>".anchor(base_url("administrador/marcacoes_privadas/".$col->col_id),"Visualizar",array('class'=>'btn btn-info')).
				"</td>"."</tr>";}
			else {echo "<td>".anchor(base_url("administrador/exibir_marcacoes/".$col->col_id),"Visualizar",array('class'=>'btn btn-info')).
				"</td>"."</tr>";}
		}
		?>
	</tbody>
</table>