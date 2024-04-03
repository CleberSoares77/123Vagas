<?php
class Empresa_model extends CI_Model {
    
    public function cadastrar_empresa($data)
	{
		return $this->db->insert('cadastro_empresa', $data);
	}

	public function listar_empresa()
	{
		$query = $this->db->get('cadastro_empresa');
		return $query->result();
	}	

	public function edit_empresa($id) {
        return $this->db->get_where('cadastro_empresa', array(
		"id" => $id)
		)->row_array();
    }

	public function update_empresa($id, $empresa)
	{
		$this->db->where("id", $id);
		return $this->db->update("cadastro_empresa", $empresa);
		
	}

	public function delete_empresa($id) {
		$this->db->where("id", $id);
		return $this->db->delete("cadastro_usuario");
    }


}