<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		//$this->load->view('index'); // Carrega uma visualização diretamente
		$this->template->load('template', 'index'); // Carrega uma visualização usando um template específico
	}

	public function form()
	{
		$this->load->view('form'); // Carrega a visualização para a página de criar conta
	}

	public function home()
	{
		$this->load->view('home'); // Carrega a visualização para a página de criar conta
	}

	public function esqueceuSenha()
	{
		$this->load->view('esqueceuSenha'); // Carrega a visualização para a página de criar conta
	}
}
