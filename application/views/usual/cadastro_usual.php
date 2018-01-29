<link rel="stylesheet" type="text/css" 
href="<?= base_url('assets/css/estilo-cadastro-usual.css') ?>">

<style>
body{
	text-align: center;
	background-image: url(../imagens/img_cadastro_usual.png);
	background-position: center;
}
</style>

<div class="main-content">
	
	<form class="form-register" method="post" action="<?= base_url('usual/cadastrar')?>">
		<div class="caixinha">
			<div class="form-white-background">
				<div class="form-title-row">
					<h1>Criar conta</h1>
					<div class="alinhado-centro borda-base espaco-vertical">
						<?php 
						if($this->session->flashdata('sucesso')){ ?>
						<div class="alert alert-success">
							<?= $this->session->flashdata('sucesso') ?>
						</div>
						<?php }  
						if($this->session->flashdata('fracasso')){ ?>
						<dir class="alert alert-danger">
							<?= $this->session->flashdata('fracasso') ?>
						</dir>
						<?php } ?>	

					</div>
				</div>
				<div class="form-row">
					<label>
						<span>Nome</span>
						<input class="personal" " type="text" name="nome" id="nome">
					</label>
				</div>
				<div class="form-row">
					<label>
						<span>Email</span>
						<input class="personal" type="email" name="email" id="email">
					</label>
				</div>
				<div class="form-row">
					<label>
						<span>Senha</span>
						<input class="personal" type="password" name="senha" id="senha">
					</label>
				</div>
				<div class="form-row">
					<br>
					<label class="form-checkbox">
						<br>
						<input type="checkbox" name="checkbox">
						<span>Eu aceito os <a href="#">termos e condições</a></span>
					</label>
				</div>
				<div class="form-row">
					<button class="botao" type="submit">Cadastrar</button>
				</div>
			</div>
		</div>
	</form>
	<a href="<?=base_url('usual/login_area')?>" class="form-log-in-with-existing">Já é um usuário? Faça login aqui</a>
</div>
</div>
