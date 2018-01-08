

<div id="homebody">
<!-- Uma table padrão. Acustume-se, sempre usamos table para listar dados e é sempre assim -->
	<table id="eventos" class="table table-hover">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Descricao</th>
				<th>local</th>
				<th>cidade</th>
				<th>Data Inicio</th>
				<th>Data Fim</th>
				<th>Hora Inicio</th>
				<th>Hora Fim</th>
				<th>Valor</th>
				<th>Participantes</th>
				<th>Mais</th>
			</tr>
		</thead>
		<tbody>
		<!-- Aquele foreach basico para percorrer o array de eventos e preencher cada linha da tabela -->
			<?php
			foreach($eventos as $evento){
				echo "<tr>";
				echo "<td>".$evento->nome."</td>";
				echo "<td>".$evento->descricao."</td>";
				echo "<td>".$evento->endereco."</td>";
				echo "<td>".$evento->cidade."</td>";
				echo "<td>".$evento->data_ini."</td>";
				echo "<td>".$evento->data_fim."</td>";
				echo "<td>".$evento->hora_ini."</td>";
				echo "<td>".$evento->hora_fim."</td>";
				echo "<td>".$evento->valor."</td>";
				echo "<td><a  href='".base_url('evento/buscarParticipantes/'.$evento->id_evento)."' class='btn btn-info btn-sm'>Ver Participantes</a></td>";
				if( $evento->id_criador == intval($this->session->id) ){
				
				echo "<td><a  href='".base_url('evento/excluirEvento/'.$evento->id_evento)."' class='btn btn-danger btn-sm'>Remover</a></td>";
				}else{
					echo "<td><a  href='".base_url('evento/realizarPagamento/'.$evento->id_evento)."' class='btn btn-success btn-sm'>Participar</a></td>";
				}
			}
			?>
		</tbody>
	</table>


	<div class="row">
		<form  method="post" action="<?= base_url()?>evento/index">
			<div class="col-sm-12">
				<button class="btn btn-primary pull-left" type="submit"> Criar Evento</button>
			</div>
		</form>
	</div>




</div>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/r-2.2.1/datatables.min.js"></script>

<script>

$('#eventos tbody tr').on("click", "#participar", function(){
	$.post("<?= base_url('evento/realizarPagamento') ?>", { idEvento: $(this).attr("idEvento") }, function(data){
		console.log(data);

	}, "json");
});



$(document).ready(function() {
    $('#eventos').DataTable();
} );

</script>
