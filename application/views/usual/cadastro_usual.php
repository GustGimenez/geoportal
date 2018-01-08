<style>	
	body{
		text-align: center;
		background-image: url(../imagens/logo2.png);
		background-position: 10px 5px;
	}

	.form-register{
		padding-bottom: 5px;
		padding-top: 11%;
	    width: 200%;
    	height: 125%;
	    display: flex;
    	flex-direction: row;
    	justify-content: center;
    	align-items: right;
	}

	.caixinha{
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
		background-color:  lime;
	}

	.personal{
		border: thin dashed dimgray; /* borda tracejada*/
		border-radius: 5px;
		font-weight: lighter;
		width: 175px;
	}	

	.personal:focus{
		background: #FFC;
		outline: 0 none;
	}

	h2{
		text-align: right;
		font-size: 50px;
		color: gray;
	}

	a{
		color: gray;
	}

	a:hover{
		color: red;
		text-decoration-color: red;
	}
</style>


<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/estilo-registro.css') ?>">
<div class="main-content">
	<!-- <h2>Crie.<br>Edite.<br>Localize.</h2> -->
	<form class="form-register" method="post" action="<?= base_url('usual/cadastrar')?>">
		<div class="caixinha">
			<div class="form-white-background">
				<div class="form-title-row">
					<h1>Criar conta</h1>
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
