<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disciplinas extends CI_Controller {

	function __construct (){
		parent::__construct();
		$user = $this->session->userdata("usuario");
		if (empty($user)){
			redirect('Usuario/login');
		}
	}
	public function index()
	{
		$this->load->model('Disciplinas_model');
		$dados['disciplinas'] = $this->Disciplinas_model->recuperar();
		$dados['icones'] = $this->Disciplinas_model->recuperarIcones();
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('disciplinas', $dados);
		$this->load->view('template/footer');
	}

	/*Programação*/
	public function cadastrar(){
		$this->load->model('Disciplinas_model');
		$nome = $_POST["nome"];
		$icones = $_POST["icone"];
		$this->Disciplinas_model->nome = $nome;
		$this->Disciplinas_model->icone = $icones;
		$this->Disciplinas_model->inserir();
		redirect('disciplinas');
	}

	public function excluir($id){
		$this->load->model('Disciplinas_model');
		$id = $this->uri->segment(3);
		$this->Disciplinas_model->deletar($id);
		redirect('disciplinas');
	}
	
}