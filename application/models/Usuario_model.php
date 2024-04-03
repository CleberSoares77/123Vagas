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

	public function edit($id) {
        return $this->db->get_where('cadastro_usuario', array(
		"id" => $id)
		)->row_array();
    }

	public function update($id, $usuario)
	{
		$this->db->where("id", $id);
		return $this->db->update("cadastro_usuario", $usuario);
		
	}

	public function delete($id) {
		$this->db->where("id", $id);
		return $this->db->delete("cadastro_usuario");
    }


}