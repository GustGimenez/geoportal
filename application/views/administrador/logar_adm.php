<style>
body{
	background-image: url(../imagens/mapa-antigo.jpg);
	text-align: center;
}
</style>

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/estilo-login-adm.css') ?>">

<div class="main-content">
	<form class="form-register" method="post" action="<?= base_url('administrador/logar')?>">
		<div class="form-white-background">
			<div class="form-title-row">
				<h1>Login Adm</h1>
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
	<a href="#" class="form-forgotten-password"><b>Esqueceu sua senha?</b></a>
</div>