<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListaEstudos extends CI_Controller {

	function __construct (){
		parent::__construct();
		$user = $this->session->userdata("usuario");
		if (empty($user)){
			redirect('Usuario/login');
		}
	}
	
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('lista_estudos');
		$this->load->view('template/footer');
	}

}