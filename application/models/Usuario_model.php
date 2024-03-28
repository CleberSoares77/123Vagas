<?php
class Usuario_model extends CI_Model {
    
    public function cadastrar($data)
	{
		return $this->db->insert('cadastro_usuario', $data);
	}

	public function listar()
	{
		$query = $this->db->get('cadastro_usuario');
		return $query->result();
	}

}