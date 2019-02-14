<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Conteudos_model extends CI_model{
	public $id;
	public $nome;
	public $serie;
	public $descricao;
	public $fk_disciplina;

	public function __construct(){
		parent:: __construct();
	}

	public function inserir(){
		$dados = array("nome" =>$this->nome, "serie" =>$this->serie, "descricao" =>$this->descricao, "id_disciplina"=>$this->id_disciplina);
		return $this->db->insert("conteudos", $dados);
	}

	public function recuperar($id_disciplina){
		$this->db->where('fk_disciplina', $id_disciplina);
		$query = $this->db->get('conteudos');
		return $query->result();
	}

	public function deletar($id){
		$this->db->where('id', $id);
		$this->db->delete('conteudos');
	}

	public function pesquisar($termo){
		$this->db->select('*');
		$this->db->like('nome',$termo);
		$query = $this->db->get('conteudos');
		return $query->result();
	}
}