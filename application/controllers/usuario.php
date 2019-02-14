<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	/*views*/
	public function index()
	{
		$user = $this->session->userdata("usuario");
		if (empty($user)){
			redirect('Usuario/login');
		}
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('pagina_inicial');
		$this->load->view('template/footer');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function cadastrar()
	{
		$this->load->view('cadastrar');
	}

	public function recuperar_senha()
	{
		$this->load->view('recuperar_senha');
	}

	public function perfil()
	{
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('perfil');
		$this->load->view('template/footer');
	}

	public function excluir_conta()
	{
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('confirmacao_senha_excluir');
		$this->load->view('template/footer');
	}

	public function editar()
	{
		
	}

	public function sobre()
	{
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('sobre');
		$this->load->view('template/footer');
	}

	/*programação*/
	public function novoUsuario()
	{
		$dados = array("nome"=> $this->input->post("nome"),"email"=> $this->input->post("login"),"senha"=> md5($this->input->post("senha")));
		$this->load->model("Usuario_model");
		$this->Usuario_model->Novo($dados);
		redirect("Usuario/login");
	}
	public function autenticacao()
	{
		$data = array('email' => $this->input->post('email'),'senha' => $this->input->post("senha"));
		$senha = md5($data["senha"]);
		$this->db->where('email', $data["email"]);
		$this->db->where('senha', $senha);
		$query = $this->db->get('usuarios')->row();
		
		if (count($query) == 1) {
			$this->session->set_userdata("usuario", $query);
			redirect('disciplinas');
		}
		else{
			$this->session->set_flashdata('danger', "E-mail ou senha incorreto!");
			redirect('Usuario/login');
		}
		

	}
	
	public function logout()
	{
		$this->session->sess_destroy();
        redirect('Usuario/login');
	}

	public function remover($id)
	{
		$this->load->model('Usuario_model');
		$id = $this->uri->segment(3);
		$this->Usuario_model->remover($id);
		redirect("logout");
	}
}
