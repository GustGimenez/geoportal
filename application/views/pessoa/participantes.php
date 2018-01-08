<div id="homebody">
<!-- Uma table padrão. Acustume-se, sempre usamos table para listar dados e é sempre assim -->
	<div class="container">
		<table id="participantes" class="table table-hover">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Email</th>

				</tr>
			</thead>
			<tbody>
			<!-- Aquele foreach basico para percorrer o array de eventos e preencher cada linha da tabela -->
				<?php
				foreach($participantes as $participante){
					echo "<tr>";
					echo "<td>".$participante->nome_participante."</td>";
					echo "<td>".$participante->email_participante."</td>";
				}
				?>
			</tbody>
		</table>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<a class="btn btn-primary pull-right"  href="<?=base_url('Pessoa/area') ?>">Voltar</a>
			</div>
		</div>
	</div>

</div>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/r-2.2.1/datatables.min.js"></script>
<script>
	
$(document).ready(function() {
    $('#participantes').DataTable();
} );


</script>