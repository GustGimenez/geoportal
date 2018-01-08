<style>
	body{
		background-image: url(../imagens/mapa-antigo.jpg);
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

	.form-login{
		padding-bottom: 5px;
	    padding-top: 150px;
    	width: 200%;
    	height: 150%;
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
		background-color: chocolate;
		color: white;
	}

	.botao:hover{
		color: white;
		background-color: peru;
		border-radius: 10px 0px 10px 0px;
	}

	input{ 	
		border: solid thin brown; /* borda tracejada*/
		border-radius: 5px;
		font-weight: lighter;
		width: thin;
	}

	input:focus{
		background: #FFC;
		outline: 0 none;
	}

	.main-content{
		height: 45%;	
	}

	a{
		color: steelblue;
	}

	a:hover{
		color: red;
		text-decoration-color: red;
	}

	hr{
		margin-top: 0px;
		border-color: black;
	}

</style>

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/estilo-logar.css') ?>">

<div class="main-content">
	<form class="form-login" method="post" action="<?= base_url('administrador/logar')?>">
			<div class="form-white-background">
				<div class="form-title-row">
					<h1>Login Adm</h1>
					<hr><br><br>
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