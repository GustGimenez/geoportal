<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/estilo-login-adm.css') ?>">

<div class="main-content">
	<form class="form-register" method="post" action="<?= base_url('usual/criar_marcacao_privada')?>">
		<div class="form-white-background">
			<div class="form-title-row">
				<h1>Inserir Senha</h1>
				<div class="alinhado-centro borda-base espaco-vertical">
					<?php 
					if($this->session->flashdata('fracasso')){ ?>
					<dir class="alert alert-danger">
						<?= $this->session->flashdata('fracasso') ?>
					</dir>
					<?php } ?>	
				</div>
			</div>
			<div class="form_row">
				<label>
					<span>Senha</span>
					<input type="password" name="senha_col">
				</label>
			</div>
			<div class="form_row">
				<button class="botao" type="submit">Avançar</button>
			</div>
		</div>
		<input type="hidden" name="colecao" id="colecao">
	</form>
</div>

<script>
	$(document).ready(function(){
		var colecao  = JSON.parse('<?=json_encode($colecao)?>');
		document.getElementById("colecao").value  = colecao;
	});
</script>