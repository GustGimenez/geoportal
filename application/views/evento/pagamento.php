<style type="text/css">
	
	#pagamento{
		margin: 100px;
	}


</style>


<div class="container">
	<div id="pag" class="row">
	 <h2 style="text-align: center"> Escolha seu metodo de pagamento </h2>
	</div>


<div id="pagamento" class="btn-group btn-group-justified">
  <a href="<?= base_url('Evento/pagamentoBoleto/'.$id_evento)?>" class="btn btn-primary">Pagamento Boleto</a>
  <a href="<?= base_url('Evento/pagamentoCartao/'.$id_evento)?>" class="btn btn-primary">Pagamento Cartão</a>
</div>


</div>