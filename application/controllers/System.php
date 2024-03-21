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

	public function home()
	{
		$this->template->load('template', 'home');
	}

	public function cadastro_empresa()
	{
		$this->template->load('template', 'cadastro-empresa');
	}

	public function cadastro_usuario()
	{
		$this->template->load('template', 'cadastro-usuario');
	}

	public function esqueceu_senha()
	{
		$this->template->load('template', 'esqueceu-senha');
	}
}
