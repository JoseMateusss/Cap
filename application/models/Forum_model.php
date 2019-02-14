<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum_model extends CI_Model 
{
	public $id_forum;
	public $data;
	public $topico;
	public $titulo;
	public $fk_usuario;
	public $fk_conteudo;
	public $arquivo;

	
	public function __construct()
	{
		parent:: __construct();
	}

	public function NovoTopico()
	{
		$dados = array("titulo"=>$this->titulo, "topico"=>$this->topico, "fk_disciplina"=>$this->fk_disciplina, "fk_usuario"=>$this->fk_usuario, "arquivo"=>$this->arquivo);
		return $this->db->insert('foruns', $dados);
	}

	public function recuperar()
	{
		$this->db->join("usuarios", "fk_usuario=id_usuario","inner");
		$this->db->join("disciplinas", "fk_disciplina=id_disciplina","inner");
		$this->db->order_by('data', 'desc');
		$query = $this->db->get('foruns');
		return $query->result();
	}

	public function recuperar_minhas($id)
	{
		$this->db->order_by('data', 'desc');
		$this->db->where('fk_usuario', $id);
		$this->db->join("usuarios", "fk_usuario=id_usuario","inner");
		$this->db->join("disciplinas", "fk_disciplina=id_disciplina","inner");
		$this->db->order_by('data', 'desc');
		$query = $this->db->get('foruns');
		return $query->result();
	}

	public function acessar($id)
	{
		$this->db->join("usuarios", "fk_usuario=id_usuario","inner");
		$this->db->join("disciplinas", "fk_disciplina=id_disciplina","inner");
		$this->db->where("id", $id);
		$query = $this->db->get("foruns")->row();
		return $query;

	}

	public function alterarStatus($id)
	{
		$status= 0;
		$this->db->where('id', $id);
		$this->db->set('status', $status);
		$this->db->update('foruns');
		
	}

	

}