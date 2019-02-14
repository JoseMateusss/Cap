<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Lista_estudos_model extends CI_model{
	public $id;
	public $nome;
	public $icone;

	public function __construct()
	{
		parent:: __construct();
	}

	public function inserir()
	{
		$dados = array("nome" =>$this->nome, "icone" =>$this->icone);
		return $this->db->insert("disciplinas", $dados);
	}

	public function recuperar()
	{
		$this->db->order_by('nome', 'asc');
		$query = $this->db->get('disciplinas');
		return $query->result();
	}

	public function deletar($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('disciplinas');
	}
}