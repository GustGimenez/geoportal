<!-- Esse é o menu, nós sempre utilizamos esse menu, mas nada te impede de utilizar outro. Cada <a> do menu cria os href utilizando a função base_url('caminho'). Essa função aponta a pasta raiz do projeto e depois voce monta o caminho, lembrando da regra pasta_raiz/nome_do_controller/funcao/parametros(opcional) -->
<!-- Pensando bem, na realidade o menu oficial nao é esse, pois eu tirei a importação do fonte awesome do projeto e o menu ficou feio, mas o negócio é fazer com a certa. Quando for desenvolver algo, peça o menu para alguem. -->
<style>
  .nav-side-menu{
    width: 150px;
    height: 100%;
  }

  <style>
body{
  margin: 0px;
  padding: 0px;
  background-size: auto;
}


#check{
  display: none;
}

#check:checked ~ .barra{
  -webkit-transform: translate(300px);
  -moz-transform: translate(300px);
  -ms-transform: translate(300px);
  -o-transform: translate(300px);
  transform: translate(300px);
}

#check:checked ~ .icone{
  color: #f0ffff;
}

.icone{
  font-size: 20px;
  position: fixed;
  z-index: 3;
  cursor: pointer;
  padding-left: 10px;
  padding-top: 10px;
  color:black;
  display: block;
}

.fontemenu{
  font-weight: bold;
  color: white;
  font: 400 20px/1.8 Lato, sans-serif;
  letter-spacing: 2px;
}

.barra{
  width: 250px;
  height: 100%;
  z-index: 2;
  text-align: center;
  position: fixed;
  background-color: #000080/*#4169E1*/;
  padding-top: 50px;
  left: -300px;
  -webkit-transition: all .25s linear;
  -moz-transition: all .25s linear;
  -ms-transition: all .25s linear;
  -o-transition: all .25s linear;
  transition: all .25s linear;
} 
</style>

<input type="checkbox" id="check">
<label class="icone" for="check"><i class="glyphicon glyphicon-th-list" aria-hidden="true"></i></label>

  <div class="barra">
    <nav>
      <div><a class="fontemenu" href="<?= base_url() ?>"> <span class="glyphicon glyphicon-home"><span class="fontemenu"> HOME</span></span></a></div>
      <br>
      <div><a class="fontemenu" href="<?= base_url('Home/login') ?>"> <span class="glyphicon glyphicon-user"><span class="fontemenu"> LOGIN</span></span></a></div>
      <div class="">
      <div><a class="fontemenu" href="<?= base_url('Pessoa/cadastro') ?>"> <span class="glyphicon glyphicon-plus"><span class="fontemenu"> CRIAR CONTA</span></span></a></div>
      <div><a class="fontemenu" href="<?= base_url('Home/login') ?>"> <span class="glyphicon glyphicon-off"><span class="fontemenu"> LOGOUT</span></span></a></div>
    </nav>
  </div>
<script src="https://use.fontawesome.com/5dc6c19131.js"></script>