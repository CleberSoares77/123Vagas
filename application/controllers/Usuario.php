<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usuario_model');
	}


	public function index()
	{
		$data['usuarios'] = $this->Usuario_model->listar();

		$this->template->load('template', 'usuario/index', $data);
	}


	public function cadastro()
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
			if($this->Usuario_model->cadastrar($data))
			{
				echo 'Cadastrou';
			}
			else
			{
				echo 'Ocorreu um erro ao cadastrar';
			}
		}

		$this->template->load('template', 'usuario/cadastro');
	}


	public function editar()
	{
		$this->template->load('template', 'usuario/editar');
	}


	public function deletar()
	{
		echo "Deletou";
	}
}
