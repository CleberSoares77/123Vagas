<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Empresa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Empresa_model');
	}


	public function index()
	{
		$data['empresa'] = $this->Empresa_model->listar();

		$this->template->load('template', 'empresa/index', $data);
	}


	public function cadastro_empresa()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$data = [
				'nome' => $this->input->post('nome'),
				'sobrenome' => $this->input->post('sobrenome'),
				'contato' => $this->input->post('contato'),
				'email' => $this->input->post('email'),
				'dataNasc' => $this->input->post('dataNasc'),
				'genero' => $this->input->post('genero'),
				'senha' => $this->input->post('senha')
			];
			
			// Efetua o cadastro e valida se foi cadastrado
			if($this->Empresa_model->cadastrar_empresa($data))
			{
				echo 'Cadastrou';
			}
			else
			{
				echo 'Ocorreu um erro ao cadastrar';
			}
		}

		$this->template->load('template', 'empresa/cadastro');
	}

	public function editar($id)
	{
		$_SERVER['REQUEST_METHOD'] == 'POST';

		$data['empresa'] = $this->Empresa_model->edit($id);


		$this->template->load('template', 'empresa/cadastro', $data);

		/*print "<pre>";
		print_r($data);
		print "</pre>";
		exit();*/
		
	}

	public function update($id = null)
	{
		// Verifique se o ID foi fornecido
		if ($id === null) {
			// Lógica para lidar com a falta de ID (opcional)
			echo "ID não fornecido.";
			return;
		}
	
		// Verifique se o método de solicitação é POST
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			// Assumindo que você tem dados do formulário em $_POST, recupere-os
			$data = [
				'nome' => $this->input->post('nome'),
				'sobrenome' => $this->input->post('sobrenome'),
				'contato' => $this->input->post('contato'),
				'email' => $this->input->post('email'),
				'dataNasc' => $this->input->post('dataNasc'),
				'genero' => $this->input->post('genero'),
				'senha' => $this->input->post('senha')
			];
	
			// Chame o método update do Usuario_model com dados e ID
			$this->Empresa_model->update($id, $data);
	
			// Redirecione após a atualização bem-sucedida
			redirect("empresa");
		} else {
			// Lógica para lidar com solicitações não POST (opcional)
			echo "Método de solicitação inválido.";
			return;
		}
	}
	
	

	public function excluir($id)
	{
		$this->Usuario_model->delete($id);
		echo "Deletou";
	}
}
