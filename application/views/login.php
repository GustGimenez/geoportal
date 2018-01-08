<style>
	body{
		text-align: center;
	/*	background-image: url(../assets/imagens/back-calen.jpg);*/
	background-image: url(../assets/imagens/back-calen.jpg);
	}

	.espaco-vertical{
		padding-top: 50px;
		background-color: #000080;
		color:white;
	}

	h2{
		color:white;
		font-weight: bold;
		font-size: 50px;
	}

	.botao{
		width: 75px;
		height: 35px;
		border-radius: 10px 0px 10px 0px;
		padding: 5px;
		border: 0;
		display: inline-block;
		background-color: #191970;
		color: white;
		font-weight: bold;
	}
	.botao:hover{
		background-color: #6495ED;
	}
	.container {
	    padding-bottom: 5px;
	    padding-top: 100px;
    	width: 100%;
    	height: 100%;
	    display: flex;
    	flex-direction: row;
    	justify-content: center;
    	align-items: center;
  	}

  	a{
  		font-weight: bold;
  	}

  	.icone{
  		color:white;
  		padding-left: 30px;
  		padding-top: 15px;
  	}

  	 .box {
      z-index: 1;
      padding-top: 20px;
      padding-left: 10px;
      padding-right: 10px;
      padding-bottom: 20px;
      width: 25%;
      height: 75%;
      background: white;
      font-weight: bold;
      border-top-style: solid;
      border-top-color: #696969;
      border-left-style: solid;
      border-left-color: #696969;
      border-right-style: solid;
      border-right-color: #696969;
      border-bottom-style: solid;
      border-bottom-color: #696969;
      border-width: 4px;
  	}

	
	/*background-image: url(../assets/imagens/back-calen.jpg);*/
	
</style>

	<div class="alinhado-centro borda-base espaco-vertical">
		<h2> Login </h2>
	</div>	
	<form method="POST" action="<?= base_url()?>Pessoa/logar">
		<div class="container">
			<div class="box">
			<div class="row">
				<div class="col-sm-12 form-group">
					<input class="form-control" type="text" name="email" placeholder="Email">
				</div>
				
			</div>
			<div class="row">
				<div class="col-sm-12 form-group">
					<input class="form-control" type="password" name="senha" placeholder="Senha">
				</div>
			</div>
			<br>
			<div class="row">
				<div>
					<button type="submit" class="botao">Entrar</button>
				</div>
			</div>
			</div>
		</div>
	</form>

	<div>
		Ainda não é inscrito?
		<a href="../Pessoa/index">Inscreva-se</a>
	</div>	