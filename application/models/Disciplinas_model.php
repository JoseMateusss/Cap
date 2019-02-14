<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Disciplinas_model extends CI_model{
	public $id_disciplina;
	public $nome_disciplina;
	public $icone;

	public function __construct(){
		parent:: __construct();
	}

	public function inserir()
	{
		$dados = array("nome_disciplina" =>$this->nome, "icone" =>$this->icone);
		return $this->db->insert("disciplinas", $dados);
	}

	public function recuperar()
	{
		$this->db->join("icones","icone=id","inner");
		$this->db->order_by('nome_disciplina', 'asc');
		$query = $this->db->get('disciplinas');
		return $query->result();
	}

	public function deletar($id)
	{
		$this->db->where('id_disciplina', $id);
		$this->db->delete('disciplinas');
	}

	public function recuperarIcones()
	{
		$this->db->order_by('arquivo', 'asc');
		$query = $this->db->get('icones');
		return $query->result();
	}
}