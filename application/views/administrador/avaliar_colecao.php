<div>
	<h3>Atributos da Coleção</h3>
</div>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Tipo</th>
			<th>Tamanho</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach($atributos as $atri){
			echo "<tr>";
			echo "<td>".$atri->atri_nome."</td>";
			switch ($atri->atri_tipo) {
				case 0:
				echo "<td>"."INT"."</td>";
				break;

				case 1:
				echo "<td>"."VARCHAR[ ]"."</td>";
				break;

				case 2:
				echo "<td>"."BOOLEAN"."</td>";
				break;

				case 3:
				echo "<td>"."FLOAT"."</td>";
				break;

				case 4:
				echo "<td>"."BLOB"."</td>";
				break;
			}
			echo "<td>".$atri->atri_tamanho."</td>";
		}
		?>
	</tbody>
</table>

<div align="center">
	<button onclick="location.href='<?php echo base_url('administrador/aprovar_colecao');?>'" type="button" class="btn btn-info" id="validar">Validar</button>
	<button onclick="location.href='<?php echo base_url('administrador/invalidar_colecao');?>'" type="button" class="btn btn-danger" id="invalidar">Invalidar</button>
</div>