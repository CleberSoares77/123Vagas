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

		public function __construct()
		{
			parent::__construct();
		}

		public function salvarVaga($dados)
		{
			// Insere os dados na tabela de vagas
			return $this->db->insert('vagas', $dados);
		}
		public function excluir($id) {
			return $this->db->delete('vagas', array('id' => $id));
		}

		public function get_vagas() {
			$query = $this->db->get('vagas');
			return $query->result();
		}
		// Retorna uma vaga pelo ID
		public function get_vaga_by_id($id) {
			$this->db->where('id', $id);
			$query = $this->db->get('vagas');
			return $query->row(); // Retorna um único objeto
		}
	
		// Atualiza a vaga com os dados fornecidos
		public function update_vaga($id, $data) {
			$this->db->where('id', $id);
			return $this->db->update('vagas', $data);
		}

		public function buscar_por_email($email)
		{
			return $this->db->where('email', $email)->get('cadastro_empresa')->row();
		}
		
		public function redSenhaEmpresa($email, $senhaNova)
		{
			$this->db->where('email', $email);
			$query = $this->db->get('cadastro_empresa');
		
			if ($query->num_rows() > 0) {
				$data = ['senha' => $senhaNova]; // Remove a criptografia da senha
				$this->db->where('email', $email);
				$this->db->update('cadastro_empresa', $data);
				return true; // Senha alterada com sucesso
			} else {
				return false; // Usuário não encontrado
			}
		}

}