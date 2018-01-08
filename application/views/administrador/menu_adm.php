<style>
  
  a.navbar-brand{
    padding-right: 0px;
  }
  
  .imagens{
    margin: 0px;
    padding-top: 5px;
  }

</style>


<nav class="navbar navbar-default">

  <div class="container-fluid">

    <div class="navbar-header">
      <img class="imagens" src="http://localhost/geoportal/imagens/icone.png">
    </div>

    <div class="navbar-header">
      <a class="navbar-brand">GeoPortal</a>
    </div>

    <div class="nav navbar-nav">
      <li><a href="<?= base_url('administrador/listar_avaliacao')?>"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Avaliar Coleção</a></li>
      <li><a href="<?= base_url('administrador/listar_colecoes')?>"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Escolher Coleção</a></li>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?= $this->session->userdata('nome') ?> <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?=base_url('administrador/sair')?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Sair</a></li>
        </ul>
      </li>
    </ul>

  </div>

</nav>