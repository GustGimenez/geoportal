<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa extends CI_Controller {


	// Construtor da classe. Como essa classe extends CI_Controller, ela herda as caracteristicas da classe CI_Controller com a funcao parent::__construct() (CodeIgniter_Controller). a CI_Controller é a classe que faz a mágica funcionar. Sempre será assim.
	// Aproveitamos para carregar o Model de pessoas no construtor tambem, uma vez que ele será usado na maioria das funções dessa classe. Com o model carregado no construtor, podemos acessar suas funções usando $this->modelpessoa->NOME_DA_FUNCAO(PARAMETROS)
	public function __construct(){
		parent::__construct();
		$this->load->model('Pessoa_model');
	}

	public function logar(){
		$dados['email'] = $this->input->post('email');
		$dados['senha'] = $this->input->post('senha');

		$this->load->model('Pessoa_model');
		$result = $this->Pessoa_model->logar($dados);

		if(count($result) == 0){
			echo "<script>alert('Usuário ou senha inválido')</script>";
			redirect('home');
		}
		else{

			$this->load->library('session');

			$userdados  =  array( 
        			'id'   =>  $result['id'] , 
        			'email'      =>  $result['email'] , 
        			'nome'  =>  $result['nome'] 
			);

			$this->session->set_userdata($userdados);


			redirect(base_url('Pessoa/area'));
		}

	}

	public function area(){
		$this->load->model('Evento_model');
		$dados['eventos'] = $this->Evento_model->listAll();

		$this->load->view('html-header');
		$this->load->view('header');
		$this->load->view('pessoa/area',$dados);
		$this->load->view('footer');
		$this->load->view('html-footer');
	}



	public function cadastro(){

		$this->load->view('html-header');
		$this->load->view('header');
		$this->load->view('cadastrar');
		$this->load->view('footer');
		$this->load->view('html-footer');

	}


	// Nesse método apenas carregamos as views responsaveis pelo cadastro de uma nova pessoa. Quando o botão cadastrar é pressionado a função cadastrar() é chamada. Também criamos uma view para listar as pessoas que ja foram cadastradas e recuperamos essas informações através do Model de pessoas utilizando a funcao listar(). Entre em models/Pessoa_model para ver a funcao.
	//Fique atento a forma que passamos esses dados para view. Temos que colocar as informações em um array, FODA-SE o nome do array, o importante é você lembrar o nome do indice $ARRAY['indice']. Pois o indice que é utilizado dentro da view para referenciar a variavel.

	// public function nova_pessoa(){
	// 	$dados_listar['pessoas'] = $this->Pessoa_model->listar();

	// 	$this->load->view('html-header');
	// 	$this->load->view('header');
	// 	$this->load->view('cadastrar');
	// 	$this->load->view('listar',$dados_listar);
	// 	$this->load->view('footer');
	// 	$this->load->view('html-footer');
	// }



    // Esse é o método responsável pelo cadastro.
    // Em $this->load->library('form_validation') estamos carregando uma biblioteca nativa do codeigniter responsavel por validar formulários de forma rápida. Basta saber que ela existe e sempre que voce precisar utiliza-la, é só dar uma olhada nesse projeto e "copiar" o jeito de fazer. No geral, nós declaramos algumas regras de formulário para ela e depois executamos com a funcao run. Ela verifica se as regras foram cumpridas pelo usuário na hora de preencher o form e retorna verdadeiro em caso de sucesso ou falso se algo estiver errado.
    // Salvamos a mensagem de erro na session utilizando $this->session->set_flashdata('nome_da_session','conteudo'); para exibirmos na view.
	public function cadastrar(){


			$dados['nome'] = $this->input->post('nome');
			$dados['cpf'] = $this->input->post('cpf');
			$dados['email'] = $this->input->post('email');
			$dados['senha'] = $this->input->post('senha');

			$this->load->model('Pessoa_model');
			if($this->Pessoa_model->inserir($dados)){
				redirect($_SERVER['REQUEST_URI'], 'refresh'); 
			}
			else{ 
				redirect(base_url());
				
			}

	}


	// Esse método recebe um $id por GET (na URL vai ficar projeto_base/pessoa/editar_pessoa/1 por exemplo). Supondo que o $id seja um, faremos uma busca no banco de dados procurando "quem é essa pessoa que o $id é um" e trazemos os dados dela, salvando em $dados_pessoa['pessoa']. Depois carregamos as views e justo na editar.php passamos os dados da pessoa. Mas porquê na editar, Pietro? Vai na view editar pra você ver, é lá que temos os campos para preencher. Então na view editar, vamos colocar no value de cada input os dados dessa pessoa. Repare que usei o foreach antes do formulário para fazer isso.

	// public function editar_pessoa($id){
	// 	$dados_pessoa['pessoa'] = $this->Pessoa_model->ver($id);

	// 	$this->load->view('html-header');
	// 	$this->load->view('header');
	// 	$this->load->view('editar',$dados_pessoa);
	// 	$this->load->view('footer');
	// 	$this->load->view('html-footer');
	// }


	// Depois que o utilizador do sistema seleciona alguem para editar, e edita os dados da pessoa na view, ele vai precisar salvar esses dados. Para isso criamos essa função aqui. Agora você deve comparar ela com a função cadastrar() que ta ali em cima. Repara que é praticamente a mesma coisa, exceto que ao invés de uma inserção, realizaremos uma alteração nos dados. Podemos perceber também que essa função recebe um $id, que é utilizado para saber qual pessoa do banco deve ser editada. Para receber esse $id, é necessário que o botão lá na view editar.php seja dinâmico, ou sejá, se você olhar lá verá que o href="base_url('pessoa/editar/'.$p->id)". Repare na concatenação utilizada dentro da função base_url, se essa concatenação não for feita, a URL sempre enviará $p->id como string e não como o valor contido na variavel. É simples, se não entendeu leia denovo.
	
	// public function editar($id){
	// 	$this->load->library('form_validation');
	// 	$this->form_validation->set_rules('nome','Nome','required|min_length[4]');
	// 	$this->form_validation->set_rules('cpf','Cpf','required|min_length[11]');

	// 	if($this->form_validation->run()){
	// 		$dados['nome'] = $this->input->post('nome');
	// 		$dados['cpf'] = $this->input->post('cpf');

	// 		if($this->modelpessoa->alterar($id,$dados)){
	// 			$mensagem = $nome." Alterado com sucesso!";
	// 			$this->session->set_flashdata('sucesso', $mensagem);
	// 		}
	// 		else{ 
	// 			$mensagem = "Houve um erro ao alterar seu cadastro!";
	// 			$this->session->set_flashdata('erro', $mensagem);
	// 		}

	// 	}else{
	// 		$mensagem = "Houve um erro ao validar sua edição!";
	// 		$this->session->set_flashdata('erro', $mensagem);
	// 	}

	// 	redirect(base_url('pessoa/editar_pessoa/'.$id));
	// }



	// Partindo do mesmo principio da função editar, temos a ver, que busca uma pessoa no banco, envia dos dados para ver.php e exibe, da uma olhada lá.
	
	// public function ver($id){
	// 	$dados_pessoa['pessoa'] = $this->Pessoa_model->ver($id);

	// 	$this->load->view('html-header');
	// 	$this->load->view('header');
	// 	$this->load->view('ver',$dados_pessoa);
	// 	$this->load->view('footer');
	// 	$this->load->view('html-footer');
	// }

	// Função responsavel por apagar a pessoa do banco de dados. Isso nao é recomendado pois o dado é apagado para sempre e não tem volta. Veja o funcionamento dela no botão apagar, que está na view de cadastro. É bem parecido com a ideia do editar() e do ver()
	
	// public function apagar($id){
	// 	$this->Pessoa_model->apagar($id);
	// 	redirect(base_url('cadastrar_usuario'));
	// }

	public function logout(){
		session_destroy();

		redirect(base_url());
	}



}
