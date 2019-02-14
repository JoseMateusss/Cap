<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conteudos extends CI_Controller {

	function __construct (){
		parent::__construct();
		$user = $this->session->userdata("usuario");
		if (empty($user)){
			redirect('Usuario/login');
		}
	}
	public function acessar($id)
	{

		$this->load->model('Conteudos_model');
		
		$dados['conteudo'] = $this->Conteudos_model->recuperar($id);
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('conteudos', $dados);
		$this->load->view('template/footer');
	}

	/*Programação*/
	public function cadastrar(){
		$this->load->model('Conteudos_model');
		$nome = $_POST["nome"];
		$serie = $_POST["serie"];
		$descricao = $_POST["descricao"];
		$id_disciplina = $_POST["id_disciplina"];
		$this->Conteudos_model->nome = $nome;
		$this->Conteudos_model->serie = $serie;
		$this->Conteudos_model->descricao = $descricao;
		$this->Conteudos_model->id_disciplina = $id_disciplina;
		$this->Conteudos_model->inserir();
		redirect('conteudos');
	}

	public function excluir($id){
		$this->load->model('Conteudos_model');
		$id = $this->uri->segment(3);
		$this->Conteudos_model->deletar($id);
		redirect('conteudos');
	}

	public function pesquisa()
	{
		$pesquisa = $this->input->get('pesquisa');

		if($pesquisa==null){
			$dados['resultado'] = 'false';
			$dados['pesquisa'] = $pesquisa;

			$this->load->view('template/header');
			$this->load->view('template/nav');
			$this->load->view('pesquisa', $dados);
			$this->load->view('template/footer');
		}else{
			$this->load->model('Conteudos_model');

			$dados['resultado'] = $this->Conteudos_model->pesquisar($pesquisa);
			$dados['pesquisa'] = $pesquisa;

			$this->load->view('template/header');
			$this->load->view('template/nav');
			$this->load->view('pesquisa', $dados);
			$this->load->view('template/footer');
		}
		
	}
}