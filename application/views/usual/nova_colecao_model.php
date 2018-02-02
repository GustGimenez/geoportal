<style>
    
    .atributosColacao{
        height: 30px;
        width: 5px;
    }

    .criar{
        margin-left: 18%;
        width: 100px;
        height: 40px;
        border-radius: 20px 20px 20px 20px;
        padding: 5px;
        border: 0;
        display: inline-block;
        background-color: limegreen;
        color: white;
    }

    .criar:hover{
        background-color: lime;
    }

    .cancelar{
        padding-left: 2%;
        width: 100px;
        height: 40px;
        border-radius: 20px 20px 20px 20px;
        padding: 5px;
        border: 0;
        display: inline-block;
        background-color: red;
        color: white;
    }

    .cancelar:hover{
        background-color: #FF0007;
    }

    .fonteTitulo{
        font-size: 35px;
        text-align: center;
    }

    .fonteDiversa{
        font-size: 25px;
        padding-top: 25px;
    }

    .fonteDiversaSenha{
        font-size: 25px;
        padding-top: 0px;
    }

    #nome{
        border-style: none;
        border-bottom-style: solid;
        border-color: black;
        background-color: azure;
        margin-top: 0px;
        width: 50%;
    }

    #descricao{
        border-style: none;
        border-bottom-style: solid;
        border-color: black;
        background-color: azure;
        margin-top: 0px;
        width: 50%;
    }

    #senha{
        border-style: none;
        border-bottom-style: solid;
        border-color: black;
        background-color: azure;
        margin-top: 0px;
        width: 50%;
        padding-top: 0px;
    }

    .privada{
        font-size: 16px;
        padding-bottom: 0px;
    }

</style>

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/estilo-modal.css') ?>">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">

<div id='modalColecao' class='modal'>
   <form class="modal-content animate" method="post" action="<?= base_url('colecao/adicionar')?>">

    <div class="container">
        <label class="fonteTitulo"><b>Nome da Coleção</b></label></br>
        <input class="atributosColacao" type="text" name="nome" id="nome" required></br>
        <label class="fonteDiversa"><b>Descrição</b></label></br>
        <input class="atributosColacao" type="text" name="descricao" id="descricao" required>
        <br>
        <br>
        <div class="checkbox">
            <input type="checkbox" name="privada" id="privada" onchange="mudar_senha(this)"> Privada
        </div>
        <label class="fonteDiversaSenha"><b>Senha</b></label></br>
        <input class="atributosColacao" type="password" name="senha" id="senha" disabled="true">
    </div>

    <div class="container">
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