<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
	public $id_usuario;
	public $nome;
	public $email;
	public $senha;
	public $tipo;
	public function __construct()
	{
		parent:: __construct();
	}

	public function Novo($dados)
	{
		$this->db->insert("usuarios", $dados);
	}
	
	public function Autenticar($email, $senha)
	{
		$this->db->where("email", $email);
		$this->db->where("senha", $senha);
		$usuario = $this->db->get("usuarios")->row_array();
		return $usuario;
	}

	public function recuperaUm()
	{

	}

	public function atualizar()
	{

	}

	public function remover($id)
	{
		$this->db->where("id_usuario", $id);
		$this->db->remove("Usuario");
	}
}