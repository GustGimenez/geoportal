<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/estilo-modal.css') ?>">

<div id='modalColecao' class='modal'>
    <form class="modal-content animate" method="post" action="<?= base_url('colecao/adicionar')?>">
        <div id="container1">
            <div class="titulo">
                <h2>Criar Coleção</h2>
            </div>
            <label class="fonte"><b>Nome</b></label><br>
            <input class="atributosColacao" type="text" name="nome" id="nome" required></br>
            <label class="fonte"><b>Descrição</b></label></br>
            <input class="atributosColacao" type="text" name="descricao" id="descricao" required><br>
            <div class="checkbox">
                <label style="margin-left: 10px; font-size: 15px">
                    <input type="checkbox" name="privada" id="privada" onchange="mudar_senha(this)"> Privada
                </label>
            </div>
            <label class="fonte"><b>Senha</b></label></br>
            <input class="atributosColacao" type="password" name="senha" id="senha" disabled="true">
        </div>

        <div class="botoes">
            <button class="criar" type="submit">Criar</button>
            <button class="cancelar" type="button" onclick="document.getElementById('modalColecao').style.display='none'" 
            class="cancelbtn">Cancelar</button>
        </div>
    </form>
</div>
<script>
    function mudar_senha(checkbox){
        if(checkbox.checked) document.getElementById("senha").disabled = false;
        else document.getElementById("senha").disabled = true;
    }
</script>