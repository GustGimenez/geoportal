<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

<style>
  body{
    text-align: center;
    background-image: url(../assets/imagens/back.png);
  }
  .glyphicon-th-list:before {
    content: "\e012";
    color: white;
  }
  
  .homebody.espaco-vertical.alinhado-centro{
    color: white;
    position: absolute;
    bottom: 0px;
    width: 100%;
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
      border-top-width: : 2px;
      border-top-style: solid;
      border-bottom-style: solid;
      border-left-style: solid;
      border-right-style: solid;
      border-left-width: 2px;
      border-right-width: 2px;
      border-bottom-width: 2px;
      border-radius: 8px;
      border-color: brown;
      font-weight: bold;
  }

  .fonteformulario{
    font-family: Arial;
    font-weight: bold;
    font-size: 50px;
  }

  .botao{
    width: 100px;
    height: 35px;
    border-radius: 10px 0px 10px 0px;
    padding: 5px;
    border: 0;
    display: inline-block;
    background-color: gray;
    color: white;
    font-weight: bold;
  }

  .botao:hover{
    color: white;
    background-color: limegreen;
    border-radius: 10px 0px 10px 0px;
  }

  input[type=file] {
    display: inline-block;
}


</style>

<div class="container">
  <div class="box">
    <form  method="post" action="<?= base_url()?>Evento/adicionar">          
    <div><span class="fonteformulario">Criar Evento</span></div>
    <div class="col-md-20">
      <div class="row">
        <div class="col-sm-12 form-group">
          <input class="form-control" id="eventonome" name="eventonome" placeholder="Nome do Evento" type="text" required>
        </div>
      </div>
      <div class="row">
          <div class="col-sm-12 form-group">
            <input class="form-control" id="eventoendereco" name="eventoendereco" placeholder="Endereco" type="text" required>
          </div>
      </div> 
      <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="eventocidade" name="eventocidade" placeholder="Cidade" type="text" required>
          </div>
          <div class="col-sm-2 form-group">
            <input class="form-control" id="eventoestado" name="eventoestado" placeholder="Estado" type="text" required>
          </div>
          <div class="col-sm-4 form-group">
            <input class="form-control" id="eventopais" name="eventopais" placeholder="Pais" type="text" required>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-3 form-group">
          <input class="form-control" id="eventoinicio" name="eventoinicio" placeholder="Data de Inicio" type="date" required>
        </div>
        <div class="col-sm-3 form-group">
          <input class="form-control" id="eventohini" name="eventohini" placeholder="Horário de Início" type="time" required>
        </div>
        <div class="col-sm-3 form-group">
          <input class="form-control" id="eventofim" name="eventofim" placeholder="Data de Fim" type="date" required>
        </div>  
        <div class="col-sm-3 form-group">
          <input class="form-control" id="eventohfim" name="eventohfim" placeholder="Horário de Término" type="time" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="nmax" min="0" name="nmax" placeholder="Nº Máximo de Participantes" type="number" required>
        </div>
        <div class="col-sm-6"><input class="form-control" id="valor" min="0" name="valor" placeholder="Valor Ingresso" type="number" step="0.01" required>
        </div>  
      </div>
      <div class="row">
        <div class="col-sm-12 form-group">
          <textarea class="form-control" rows = "5" id= "descricao" placeholder="Descrição"></textarea>
        </div>  
      </div>
      <div class="row">
        <span class="glyphicon glyphicon-camera"></span> Inserir Imagens
        <input id="input-b5" align="center" name="input-b5[]" type="file" multiple>
      </div>
      <br>
      <div class="row">
          <button class="botao" type="submit">Criar Evento</button>
      </div>
      </div>
    </div>
  </form>
</div>