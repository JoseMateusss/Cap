<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Comentario_model extends CI_model{
	public $id;
	public $comentario;
    public $fk_usuario;
    public $fk_forum;

	public function __construct(){
		parent:: __construct();
	}

	public function salvarResposta($pergunta, $resposta)
	{
		$dados = array("comentario"=>$resposta, "fk_usuario"=>$this->session->userdata("usuario")->id_usuario, "fk_forum"=>$pergunta);
		$this->db->insert("comentarios", $dados);
    }
    public function recuperarRespostas($id)
    {
		$this->db->join("usuarios", "fk_usuario=id_usuario","inner");
		$this->db->join("foruns", "fk_forum=id","inner");
		$this->db->where("fk_forum", $id);
		$query = $this->db->get("comentarios");
		return $query->result();
	}

	
}