<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materiais extends CI_Controller {

	function __construct (){
		parent::__construct();
		$user = $this->session->userdata("usuario");
		if (empty($user)){
			redirect('Usuario/login');
		}
	}
	
	public function acessar($id)
	{
		$this->load->model('Materiais_model');
		
		$dados['material'] = $this->Materiais_model->recuperar($id);
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('materiais', $dados);
		$this->load->view('template/footer');
	}

	public function cadastrar(){
		$this->load->model('Materiais_model');

		$tipo 			= $_POST['tipo'];
		$fk_conteudo 	= $_POST['fk_conteudo'];

		$this->Materiais_model->tipo 		= $tipo;
		$this->Materiais_model->fk_conteudo = $fk_conteudo;

		if(empty($_FILES['arquivo']['name'])){
			$nome = $_POST['nome2'];
			$arquivo = $_POST['arquivo2'];

			$this->Materiais_model->arquivo = $arquivo;
			$this->Materiais_model->nome = $nome;

			$this->Materiais_model->inserir();
			redirect('Materiais/acessar/' . $fk_conteudo );

		}else{
			$config['upload_path'] = './uploads/';
			$config['allowed_types']= 'gif|jpg|png|pdf';
			$config['max_size'] = 1024;
			$this->upload->initialize($config);

            $field_name = "arquivo";
            if (!$this->upload->do_upload($field_name)){
            	echo "deu erro";
            	$error = array('error' => $this->upload->display_errors());
            	var_dump($error);
            }else{
            	$nome = $_POST['nome'];
				$this->upload->do_upload('arquivo');
				$nome_arquivo = $this->upload->data('file_name');

				$this->Materiais_model->arquivo = $nome_arquivo;
				$this->Materiais_model->nome = $nome;

				$this->Materiais_model->inserir();
				redirect('Materiais/acessar/' . $fk_conteudo );
			}
		}
	}

	public function excluir(){
		$id = $_GET['excluir'];
		$conteudo = $_GET['conteudo'];
		$this->load->model('Materiais_model');
		$this->Materiais_model->deletar($id);
		redirect('Materiais/acessar/' . $conteudo );
	}
}

