<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<!-- Formatacao de ES -->

<style>
    .my_button_plus{
        background-color: white;
        display: inline-block;
        border-radius: 8px;
        border: 2px solid #e7e7e7;
        height: 32px;
    }
    .my_button_minus{
        background-color: white;
        display: inline-block;
        border-radius: 8px;
        border: 2px solid #e7e7e7;
        height: 32px;
    }

    h1{
        text-align: center;
        size: 20px;
    }

</style>



<div>
    <h1> Escolha os Atributos </h1>
</div>

<form id="atributosFomr" method="post" action="<?= base_url('atributo/adicionar_atributos')?>">

    <div class="form-group">
        <div class="col-md-6">
            <input type="text" class="form-control" name="nome1" id="nome1" placeholder="Nome"/>
        </div>

        <div class="col-xs-3">
            <select class="form-control" id="tipo" name="tipo1" id="tipo1">
                <option>INT</option>
                <option>VARCHAR[ ]</option>
                <option>BOOLEAN</option>
                <option>FLOAT</option>
                <option>BLOB</option>
            </select>
        </div>

        <div class="col-xs-2">
            <input type="number" class="form-control" min="0" name="tamanho1" id="tamanho1" placeholder="Tamanho" />
        </div>


        <!-- <div class="form-group">
            <div class="col-xs-5 col-xs-offset-1"></div>
        </div> -->

        <div>
            <button type="button" class="my_button_plus"><i class="glyphicon glyphicon-plus"></i></button>
            <button type="button" class="my_button_minus"><i class="glyphicon glyphicon-minus"></i></button>
            
            
        </div>
        
    </div>
    
    <div>
        <div class="col-md-5"><button type="submit" class="btn btn-default">Submit</button></div>
    </div>    
    
    <input type="hidden" name="contador" id="contador" value="1">
</form>

<script>
    $(document).ready(function() {
        var div_nome = $(".col-md-6");
        var div_tipo = $(".col-xs-3");
        var div_tamanho = $(".col-xs-2");
        var add_button = $(".my_button_plus");
        var remove_btn = $(".my_button_minus");
        var cont = 2;

        $(add_button).click(function(e){
            e.preventDefault();
            $(div_nome).append('<br><input type="text" class="form-control" name="nome'+cont+'" id="nome'+cont+'"  placeholder="Nome"/>');

            $(div_tipo).append('<br><select class="form-control" id="tipo" name="tipo'+cont+'" id="tipo'+cont+'"><option>INT</option><option>VARCHAR[ ]</option><option>BOOLEAN</option><option>FLOAT</option><option>BLOB</option>');

            $(div_tamanho).append('<br><input type="number" class="form-control" name="tamanho'+cont+'" id="tamanho'+cont+'" placeholder="Tamanho"/>');
            document.getElementById("contador").value = cont;
            $contador = cont;
            cont++;
        });

       /* $(remove_btn).click(function(e){
            if(cont > 2){   
                cont--;
                var nome = document.getElementById("nome"+cont);
                var tipo = document.getElementById("tipo"+cont);
                var tamanho = document.getElementById("tamanho"+cont);

                tipo.parentNode.removeChild(tipo);
                nome.parentNode.removeChild(nome);
                tamanho.parentNode.removeChild(tamanho);
            }
        });*/
    });
</script>