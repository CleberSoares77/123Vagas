<?php
defined('BASEPATH') or exit('No direct script access allowed');

class System extends CI_Controller
{
	public function index()
	{
		$this->template->load('template', 'index');
	}

	public function login()
	{
		$this->template->load('template', 'login');
	}

	public function home()
	{
		$this->load->view('home');
	}

	public function cadastro_empresa()
	{
		$this->template->load('template', 'cadastro-empresa');
	}

	public function cadastro_usuario()
	{
		// Conexão com o banco de dados
		$conecta = mysqli_connect("localhost", "root", "", "tcc");

		// Checar conexão
		if (!$conecta) {
			echo "NÃO CONECTADO!";
			return;
		}

		// Variáveis do formulário
		$nome = $this->input->post('nome');
		$sobrenome = $this->input->post('sobrenome');
		$contato = $this->input->post('contato');
		$email = $this->input->post('email');
		$dataNasc = $this->input->post('dataNasc');
		$genero = $this->input->post('genero');
		$senha = $this->input->post('senha');
		$confirmaSenha = $this->input->post('confirmaSenha');

		// Escapar caracteres especiais
		$nome = mysqli_real_escape_string($conecta, $nome);
		$sobrenome = mysqli_real_escape_string($conecta, $sobrenome);
		$contato = mysqli_real_escape_string($conecta, $contato);
		$email = mysqli_real_escape_string($conecta, $email);
		$dataNasc = mysqli_real_escape_string($conecta, $dataNasc);
		$genero = mysqli_real_escape_string($conecta, $genero);
		$senha = mysqli_real_escape_string($conecta, $senha);
		$confirmaSenha = mysqli_real_escape_string($conecta, $confirmaSenha);

		// Verificar se o email já está cadastrado
		$sql_check = "SELECT email FROM tcc.cadastro_usuario WHERE email='$email'";
		$result_check = mysqli_query($conecta, $sql_check);

		if (!$result_check) {
			echo "ERRO AO EXECUTAR A CONSULTA: " . mysqli_error($conecta);
			mysqli_close($conecta);
			return;
		}

		// Verificar se o email já existe
		if (mysqli_num_rows($result_check) > 0) {
			echo "EMAIL JÁ CADASTRADO!<br>";
			mysqli_close($conecta);
			return;
		}

		// Inserir usuário no banco de dados
		$sql_insert = "INSERT INTO tcc.cadastro_usuario('nome', 'sobrenome', 'contato', 'email', 'dataNasc', 'genero', 'senha', 'confirmaSenha') 
    VALUES ($nome, $sobrenome, $contato, $email, $dataNasc, $genero, $senha, $confirmaSenha)";

		$result_insert = mysqli_query($conecta, $sql_insert);

		if ($result_insert) {
			echo "USUÁRIO CADASTRADO COM SUCESSO!";
		} else {
			echo "ERRO AO CADASTRAR USUÁRIO: " . mysqli_error($conecta);
		}

		// Fechar conexão
		mysqli_close($conecta);
	}
}
