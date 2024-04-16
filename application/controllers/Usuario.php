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

	public function home_usuario()
	{

		$this->load->view('usuario/home_usuario');
	}

	public function esqueceu_senha()
	{

		$this->load->view('esqueceu_senha');
	}

	public function cadastro()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
			if ($this->Usuario_model->cadastrar($data)) {
				echo 'Cadastrou';
			} else {
				echo 'Ocorreu um erro ao cadastrar';
			}
		}

		$this->template->load('template', 'usuario/cadastro');
	}

	public function editar($id)
	{
		$_SERVER['REQUEST_METHOD'] == 'POST';

		$data['usuario'] = $this->Usuario_model->edit($id);


		$this->template->load('template', 'usuario/cadastro', $data);

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
			$this->Usuario_model->update($id, $data);

			// Redirecione após a atualização bem-sucedida
			redirect("usuario");
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

	public function autentica_usuario()
	{
		// Verificar se o formulário foi enviado
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Receber dados do formulário
			$email = $_POST["email"];
			$senha = $_POST["senha"];
	
			// Chamar o método validar_usuario
			$usuario = $this->Usuario_model->validar_usuario($email, $senha);
	
			// Verificar se o usuário foi encontrado
			if ($usuario) {
				// Usuário autenticado com sucesso
				// Redirecionar o usuário para a página inicial ou qualquer outra página de sua escolha
				header("/tcc/home_usuario");
				exit(); // É importante sair após o redirecionamento para evitar que o código continue sendo executado
			} else {
				// Usuário não encontrado ou senha incorreta
				// Redirecionar o usuário de volta para a página de login com uma mensagem de erro
				header("Location: pagina_login.php?erro=1");
				exit();
			}
		}
	}
	
}
