<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

<?php 

		// Verificando a existência de uma mensagem de erro via session.
		//A vantagem de se usar a flashdata é que a session é "temporaria". Após seu uso ela é descartada da memória.
		if ($this->session->flashdata('sucesso')) { ?>
		<div class="alert alert-success"> <?= $this->session->flashdata('sucesso') ?> </div>
		<?php } 
		if ($this->session->flashdata('erro')) { ?>
		<div class="alert alert-danger"> <?= $this->session->flashdata('erro') ?> </div>
	<?php 
	} 
?>



<style>
	body{ /afeta tudo o que está inline no body/
		text-align: center;	
		background-image: url(../assets/imagens/back.png);
		padding-top: 0px;
	}

	.icone{
		color:white;
	}

	.container {
		padding-top: 100px;
		padding-bottom: 100px;
        width: 100%;
        display: flex;
	    flex-direction: row;
	    justify-content: center;
        align-items: center;
	}
    
    .box {
      z-index: 1;
      padding-top: 10px;
      padding-left: 10px;
      padding-right: 10px;
      padding-bottom: 10px;
      width: 60%;
      height: 100%;
      background: white;
      border-top-width: 2px;
      border-top-style: solid;
      border-bottom-style: solid;
      border-left-style: solid;
      border-right-style: solid;
      border-left-width: 2px;
      border-right-width: 2px;
      border-bottom-width: 2px;
      border-radius: 8px;
      border-color: saddlebrown;
      font-weight: bold;
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

	.homebody{
		display: none;
	}

 	h1{
 		text-align: center;
 		font-weight: bold;
		color: dimgray;
 	}
</style>

	<!-- Formulário simples, normal, como qualquer formulário PHP, exceto que a action dele redireciona para pessoa/cadastrar, que é a função no controlador responsavel por recuperar os dados do formulário e realizar o processamento. -->
<br><br><br>
<body>
<div class="col-md-12">
	<form method="POST" class="formcadastro" action="<?php echo base_url('Pessoa/cadastrar'); ?>">
		<div class="container">
			<div class="box">
				<h1>Cadastrar Usuário</h1>					
					<div class="col-sm-12 form-group">
					<input type="text"  class="form-control" placeholder="Nome" name="nome" id="nome" />
				</div>
					<div class="col-sm-12 form-group">
					<input type="text" class="form-control" placeholder="CPF" name="cpf" id="cpf" />
				</div>
			
				<div class="col-sm-12 form-group">
					<input type="email" class="form-control" name="email" placeholder="Email" id="email"/>
				</div>
		
				<div class="col-sm-6 form-group">
					<input type="password" class="form-control" name="senha" placeholder="Senha" id="senha"/>
				</div>
		
				<div class="col-sm-6 form-group">
					<input type="password" class="form-control" name="csenha" placeholder="Confirmar" id="csenha"/>
				</div>
			
				<div class="col-sm-12 form-group">
					<input type="submit" class="botao" value="Cadastrar">
				</div>
			</div>
		</div>
	</form>
</div>
</body>