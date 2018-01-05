<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/estilo-logar.css') ?>">
<div class="main-content">


	<form class="form-login" method="post" action="<?= base_url('administrador/logar')?>">

		<div class="form-log-in-with-email">

			<div class="form-white-background">

				<div class="form-title-row">
					<h1>Login</h1>
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
					<button type="submit">Entrar</button>
				</div>

			</div>

			<a href="#" class="form-forgotten-password">Esqueceu sua senha? &middot;</a>
			<a href="<?= base_url('administrador/novo_adm')?>" class="form-create-an-account">Crie uma conta &rarr;</a>

		</div>

	</form>

</div>