<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/estilo-modal.css') ?>">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
<div id='modalColecao' class='modal'>
 <form class="modal-content animate" method="post" action="<?= base_url('colecao/adicionar')?>">

  <div class="container">
    <label><b>Nome da Coleção</b></label></br>
    <input type="text" name="nome" id="nome" required></br>
    <label><b>Descrição</b></label></br>
    <input type="text" name="descricao" id="descricao" required>
    <div class="checkbox">
        <input type="checkbox" id="checkbox">
        <label for="checkbox">Privada</label>
    </div>
    <label><b>Senha</b></label></br>
    <input type="password" name="senha" id="senha">

</div>
<div class="container">
    <button type="submit">Criar</button>
    <button type="button" onclick="document.getElementById('modalColecao').style.display='none'" 
    class="cancelbtn">Cancelar</button>
</div>

</div>
</form>
</div>