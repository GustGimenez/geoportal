<style>
body{
	background-image: url(../imagens/google-maps.jpg);
	text-align: center;
}
</style>

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/estilo-login-usual.css') ?>">

<div class="main-content">
	<form class="form-login" method="post" action="<?= base_url('usual/logar')?>">
		<div class="form-white-background">
			<div class="form-title-row">
				<h1>Login</h1>
				<div class="alinhado-centro borda-base espaco-vertical">
					<?php 
					if($this->session->flashdata('fracasso')){?>
					<div class="alert alert-danger">
						<?= $this->session->flashdata('fracasso') ?>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="form-row">
				<label>
					<span>E-mail</span>
					<input type="email" name="email" id="email">
				</label>
			</div>
			<div class="form-row">
				<label>
					<span>Senha</span>
					<input type="password" name="senha" id="senha">
				</label>
			</div>
			<br><br>
			<div class="form-row">
				<button class="botao" type="submit">Entrar</button>
			</div>
		</div>
	</form>
	<a href="#" class="form-forgotten-password"><strong>Esqueceu sua senha?</strong>&middot;</a>
	<a href="<?= base_url('usual/novo_usual')?>" class="form-create-an-account"><b>Crie uma conta</b></a>
</div>