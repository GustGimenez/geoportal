<style>
body{
	text-align: center;
	background-image: url(../imagens/img_cadastro.png);
	background-position: center; 
}
</style>

<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/estilo-cadastro-adm.css') ?>">

<div class="main-content">
	<form class="form-register" method="post" action="<?=base_url('administrador/cadastrar')?>">
		<div class="form-white-background">
			<div class="form-title-row">
				<h1>Tornar-se <b>Administrador</b></h1>
				<div class="alinhado-centro borda-base espaco-vertical">
					<?php 
					if($this->session->flashdata('sucesso')){?>
					<div class="alert alert-success">
						<?= $this->session->flashdata('sucesso') ?>
					</div>
					<?php } 
					if($this->session->flashdata('fracasso')){?>
					<div class="alert alert-danger">
						<?= $this->session->flashdata('fracasso') ?>
					</div>
					<?php } ?>	
				</div>
			</div>
			<div class="form-row">
				<label>
					<span>Nome</span>
					<input class="personal" type="text" name="nome" id="nome">
				</label>
			</div>
			<div class="form-row">
				<label>
					<span>E-mail</span>
					<input class="personal" type="email" name="email" id="email">
				</label>
			</div>
			<div class="form-row">
				<label>
					<span>Senha</span>
					<input class="personal" type="password" name="senha" id="senha">
				</label>
			</div>
			<br>
			<div class="form-row">
				<label class="form-checkbox">
					<input type="checkbox" name="checkbox" id="checkbox">
					<span>Eu aceito os <a href="#">termos e condições</a></span>
				</label>
			</div>
			<div class="form-row">
				<button class="botao" type="submit">Cadastrar</button>
			</div>
		</div>
	</form>
	<a href="<?=base_url('administrador/login_area')?>" class="form-log-in-with-existing">Já é administrador? Faça login aqui</a>
</div>
</div>