<?php defined('BASEPATH') or exit('No direct script access allowed');

class System extends CI_Controller
{

	public function index()
	{
		//$this->load->view('index'); // Carrega uma visualização diretamente
		$this->template->load('template', 'index'); // Carrega uma visualização usando um template específico
	}

	public function login()
	{
		$this->template->load('template', 'login');
	}

	public function cadastro_empresa()
	{
		$this->template->load('template', 'cadastro-empresa');
	}

	public function cadastro_usuario()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$usuario = $this->input->post('usuario');

			echo "Nome do usuário é " . $usuario;
		}

		$this->template->load('template', 'cadastro-usuario');
	}
}
