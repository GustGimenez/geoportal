<style>
  .imagem{
    margin: 0px;
    padding-top: 5px;
  }
</style>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">  
      <img class="imagem" src="../imagens/icone.png">
    </div>
    <div class="navbar-header">  
      <a class="navbar-brand">GeoPortal</a>
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="<?= base_url()?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</a></li>
      <li class=""><a href="<?= base_url('colecao/listar_colecoes')?>"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Escolher Coleção</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?=base_url('usual/novo_usual')?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Cadastrar</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?=base_url('usual/login_area')?>">Usual</a></li>
          <li><a href="<?=base_url('administrador/login_area')?>">Administrador</a></li>
        </ul>
      </li>
      <li><a href="<?=base_url('administrador/novo_adm')?>"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Seja um Administrador</a></li>
    </ul>
  </div>
</nav>