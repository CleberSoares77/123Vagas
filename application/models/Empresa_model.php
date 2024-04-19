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
		return $this->db->delete("cadastro_empresa");
    }

		// Método para validar usuário
		public function validar_empresa($email, $senha)
		{
			$query = $this->db->get_where('cadastro_empresa', array('email' => $email, 'senha' => $senha));
			return $query->row(); // Retorna o resultado da consulta (ou null se não houver resultado)
		}
	
		public function data() {  
	  
			$this->db->where('email', $this->input->post('email'));  
			$this->db->where('senha', $this->input->post('senha'));  
			$query = $this->db->get('cadastro_empresa');  
	  
			if ($query->num_rows() == 1)  
			{  
				return true;  
			} else {  
				return false;  
			} 
		}

}