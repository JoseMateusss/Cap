<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Materiais_model extends CI_model{
	public $id;
	public $nome;
	public $tipo;
	public $link;
	public $arquivo;
	public $fk_conteudo;

	public function __construct(){
		parent:: __construct();
	}

	public function inserir()
	{
		$dados = array("nome" =>$this->nome, "tipo" =>$this->tipo, "link"=>$this->link, "arquivo"=>$this->arquivo, "fk_conteudo"=>$this->fk_conteudo);
		return $this->db->insert("materiais", $dados);
	}

	public function recuperar($id)
	{
		$this->db->where('fk_conteudo', $id);
		$this->db->order_by('tipo', 'asc');
		$query = $this->db->get('materiais');
		return $query->result();
	}

	public function deletar($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('materiais');
	}
}