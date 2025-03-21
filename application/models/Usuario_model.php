<?php 
class Usuario_model extends CI_Model
{

	public function cadastrar($data)
	{
		return $this->db->insert('cadastro_usuario', $data);
	}

	public function listar()
	{
		$query = $this->db->get('cadastro_usuario');
		return $query->result();
	}

	public function edit($id)
	{
		return $this->db->get_where(
			'cadastro_usuario',
			array(
				"id" => $id
			)
		)->row_array();
	}

	public function nova_senha($id)
	{
		return $this->db->get_where(
			'cadastro_usuario',
			array(
				"id" => $id
			)
		)->row_array();
	}

	public function update($id, $usuario)
	{
		$this->db->where("id", $id);
		return $this->db->update("cadastro_usuario", $usuario);
	}

	public function delete($id)
	{
		$this->db->where("id", $id);
		return $this->db->delete("cadastro_usuario");
	}

	// Método para validar usuário
	public function validar_usuario($email, $senha)
	{
		$query = $this->db->get_where('cadastro_usuario', array('email' => $email, 'senha' => $senha));
		return $query->row(); // Retorna o resultado da consulta (ou null se não houver resultado)
	}

	public function data() {  
  
        $this->db->where('email', $this->input->post('email'));  
        $this->db->where('senha', $this->input->post('senha'));  
        $query = $this->db->get('cadastro_usuario');  
  
        if ($query->num_rows() == 1)  
        {  
            return true;  
        } else {  
            return false;  
        }  
  
    }
	
	// Método para atualizar a senha do usuário
    public function atualizarSenha($email, $novaSenha)
    {
        // Verificar se o usuário com o email fornecido existe
        $this->db->where('email', $email);
        $query = $this->db->get('cadastro_usuario');

        if ($query->num_rows() > 0) {
            // Atualizar a senha do usuário
            $data = array(
                'senha' => password_hash($novaSenha, PASSWORD_DEFAULT) // Use password_hash para criptografar a nova senha
            );
            $this->db->where('email', $email);
            $this->db->update('cadastro_usuario', $data);

            return true; // Indica que a senha foi atualizada com sucesso
        } else {
            return false; // Indica que o usuário não foi encontrado
        }
    }

	public function salvarTokenRedefinicaoSenha($email, $token)
    {
        $data = array(
            'token_redefinicao_senha' => $token,
            'data_expiracao_token' => date('Y-m-d H:i:s', strtotime('+1 hour')) // Exemplo: token expira em 1 hora
        );
        $this->db->where('email', $email);
        $this->db->update('cadastro_usuario', $data);
    }
	public function getVagas()
	{
		return $this->db->get('vagas')->result();
	}
	
	public function buscar_por_email($email)
{
    return $this->db->where('email', $email)->get('cadastro_usuario')->row();
}

public function redSenha($email, $senhaNova)
{
    $this->db->where('email', $email);
    $query = $this->db->get('cadastro_usuario');

    if ($query->num_rows() > 0) {
        $data = ['senha' => $senhaNova]; // Remove a criptografia da senha
        $this->db->where('email', $email);
        $this->db->update('cadastro_usuario', $data);
        return true; // Senha alterada com sucesso
    } else {
        return false; // Usuário não encontrado
    }
}




  
}
