<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

	function __construct (){
		parent::__construct();
		$user = $this->session->userdata("usuario");
		$this->load->model('Forum_model');
		if (empty($user)){
			redirect('Usuario/login');
		}
	}
	public function index()
	{
		$dados['ultimas'] = $this->Forum_model->recuperar();
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('forum', $dados);
		$this->load->view('template/footer');
		
	}
	public function pergunta(){
		$this->load->model('Disciplinas_model');
		$dados['disciplinas'] = $this->Disciplinas_model->recuperar();
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('topico',$dados);
		$this->load->view('template/footer');
	}
	public function minhas_perguntas(){
		$user = $this->session->userdata("usuario");
		$id = $user->id_usuario;
		$dados['topicos'] = $this->Forum_model->recuperar_minhas($id);
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('minhas_perguntas', $dados);
		$this->load->view('template/footer');
	}
	public function acessar_pergunta($id){
		$dados['Pergunta'] = $this->Forum_model->acessar($id);
		$this->load->model('Comentario_model');
		$dados['Respostas'] = $this->Comentario_model->recuperarRespostas($id);
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('pergunta', $dados);
		$this->load->view('template/footer');
	}
	/*programação*/

	public function do_upload()
	{
		$titulo = $_POST['titulo'];
		$topico = $_POST['topico'];
		$fk_disciplina = $_POST['disciplinna'];
		$user = $this->session->userdata("usuario");
		$fk_disciplina = $_POST['disciplinna'];
		if (empty($_FILES['userfile']['name']))
		{
			
			$user = $this->session->userdata("usuario");
			$fk_usuario = $user->id_usuario;
			$this->Forum_model->titulo = $titulo;
			$this->Forum_model->topico = $topico;
			$this->Forum_model->fk_disciplina = $fk_disciplina;
			$this->Forum_model->fk_usuario = $fk_usuario;
			$this->Forum_model->novoTopico();
			redirect('forum');
		}else
		{
		
			$config['upload_path'] = './uploads/';
			$config['allowed_types']= 'gif|jpg|png';
			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload('userfile'))
			{
				$error = $this->upload->display_errors();
				$this->load->model('Disciplinas_model');
				$dados['disciplinas'] = $this->Disciplinas_model->recuperar();
				$dados['error'] = $error;
				$this->load->view('template/header');
				$this->load->view('template/nav');
				$this->load->view('topico',$dados);
				$this->load->view('template/footer');
		
			}else
				{
					$data = $this->upload->data();
					$nome_arquivo = $data["file_name"];
					$fk_usuario = $user->id_usuario;
					$this->Forum_model->titulo = $titulo;
					$this->Forum_model->topico = $topico;
					$this->Forum_model->fk_disciplina = $fk_disciplina;
					$this->Forum_model->fk_usuario = $fk_usuario;
					$this->Forum_model->arquivo = $nome_arquivo;
					$this->Forum_model->novoTopico();
					redirect('forum');
					
			}
		
		}	
		}
        
		
	


	public function excluir($id){
		$this->Forum_model->alterarStatus($id);
		redirect('forum');
	}
	public function excluir_minha($id){
		$this->Forum_model->alterarStatus($id);
		redirect('forum/minhas_perguntas');
	}


	public function salvarResposta($pergunta){
		$this->load->model('Comentario_model');

		$resposta = $this->input->post('resposta');

		$this->Comentario_model->salvarResposta($pergunta, $resposta);

		redirect("Forum/acessar_pergunta/".$pergunta);
	}

}