<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/estilo-registro.css') ?>">
<div class="main-content">


	<form class="form-register" method="post" action="<?=base_url('administrador/cadastrar')?>">

		<div class="form-register-with-email">

			<div class="form-white-background">

				<div class="form-title-row">
					<h1>Criar uma conta</h1>
				</div>

				<div class="form-row">
					<label>
						<span>Nome</span>
						<input type="text" name="nome" id="nome">
					</label>
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

				<div class="form-row">
					<label class="form-checkbox">
						<input type="checkbox" name="checkbox">
						<span>Eu aceito os <a href="#">termos e condições</a></span>
					</label>
				</div>

				<div class="form-row">
					<button type="submit">Cadastrar</button>
				</div>

			</div>

			<a href="<?=base_url('administrador/login_area')?>" class="form-log-in-with-existing">Já possui uma conta? Faça login aqui &rarr;</a>
		</div>


	</form>

</div>


</div>
