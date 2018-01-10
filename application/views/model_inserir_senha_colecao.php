<style>
.center {
	margin-top:50px;   
}

.modal-header {
	padding-bottom: 5px;
}

.modal-footer {
	padding: 0;
}

.modal-footer .btn-group button {
	height:40px;
	border-top-left-radius : 0;
	border-top-right-radius : 0;
	border: none;
	border-right: 1px solid #ddd;
}

.modal-footer .btn-group:last-child > button {
	border-right: 0;
}
</style>

<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">

				<form method="post" action="<?= base_url('marcacao/exibir_marcacoes_privadas')?>">
					<div class="form-group">
						<label for="exampleInputPassword1">Senha da Coleção</label>
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
					</div>
					<input type="hidden" name="colecao" id="colecao" value="<?=($colecao)?>">
					<button type="submit" class="btn btn-default">Visualizar</button>
				</form>

			</div>
		</div>
	</div>
</div>
