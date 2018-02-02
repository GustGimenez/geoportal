<style>
body{
	background-image: url(../imagens/google-maps.jpg);
	text-align: center;
}

.form-white-background{
	z-index: 1;
	padding-top: 20px;
	padding-left: 10px;
	padding-right: 10px;
	padding-bottom: 20px;
	width: 30%;
	height: 100%;
	background: white;
	font-weight: bold;
	border-color: silver;
	border-style: solid;
	border-width: 2px;
}

.form-register{
	padding-bottom: 5px;
	padding-top: 5%;
	width: 200%;
	height: 125%;
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-items: right;
}

.form-login{
	padding-bottom: 5px;
	padding-top: 150px;
	width: 200%;
	height: 125%;
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-items: center;
}

.botao{
	width: 75px;
	height: 35px;
	border-radius: 10px 0px 10px 0px;
	padding: 5px;
	border: 0;
	display: inline-block;
	background-color: limegreen;
	color: white;
}

.botao:hover{
	color: white;
	background-color: lime;
	border-radius: 10px 0px 10px 0px;
}

input{ 	
	border: thin solid red; /* borda tracejada*/
	border-radius: 5px;
	font-weight: lighter;
}

input:focus{
	background: antiquewhite/*#FFC*/;
	outline: 0 none;
}

.main-content{
	height: 45%;	
}

a{
	color:black;
}

a:hover{
	color: red;
	text-decoration-color: red;
}
</style>

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/estilo-logar.css') ?>">

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