<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Empresa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Empresa_model'); // Carrega o model da vaga
        $this->load->helper(array('form', 'url'));
        $this->load->library('session'); // Carrega a biblioteca de sessão
	}


	public function index()
	{
		$data['empresas'] = $this->Empresa_model->listar_empresa();

		$this->template->load('template', 'empresa/index', $data);
	}

	public function home_empresa()
	{

		$this->load->view('empresa/home_empresa');
	}

	public function vagas()
	{

		$this->load->view('empresa/vagas');
	}


	public function cadastro_empresa()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$data = [
				'nome' => $this->input->post('nome'),
				'cnpj' => $this->input->post('cnpj'),
				'contato' => $this->input->post('contato'),
				'email' => $this->input->post('email'),
				'senha' => $this->input->post('senha')
			];

			// Efetua o cadastro e valida se foi cadastrado
			if ($this->Empresa_model->cadastrar_empresa($data)) {
				echo 'Cadastrou';
			} else {
				echo 'Ocorreu um erro ao cadastrar';
			}
		}

		$this->template->load('template', 'empresa/cadastro_empresa');
	}

	public function editar_empresa($id)
	{
		$_SERVER['REQUEST_METHOD'] == 'POST';

		$data['empresa'] = $this->Empresa_model->edit_empresa($id);

		$this->template->load('template', 'empresa/cadastro_empresa', $data);
	}

	public function update_empresa($id = null)
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
				'cnpj' => $this->input->post('cnpj'),
				'contato' => $this->input->post('contato'),
				'email' => $this->input->post('email'),
				'senha' => $this->input->post('senha')
			];

			// Chame o método update do Usuario_model com dados e ID
			$this->Empresa_model->update_empresa($id, $data);

			// Redirecione após a atualização bem-sucedida
			redirect("empresa");
		} else {
			// Lógica para lidar com solicitações não POST (opcional)
			echo "Método de solicitação inválido.";
			return;
		}
	}



	public function excluir_empresa($id)
	{
		$this->Empresa_model->delete_empresa($id);
		echo "Deletou";
	}

	public function data()
	{
		// Carrega a view
		$this->load->view('empresa/home_empresa');
	}


	public function login_action()
	{
		$this->load->helper('security');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email:', 'required|trim|xss_clean|callback_validation');
		$this->form_validation->set_rules('senha', 'Senha:', 'required|trim');

		if ($this->form_validation->run()) {
			$data = array(
				'email' => $this->input->post('email'),
				'home_empresa' => 1
			);
			$data['email'] = $this->Empresa_model->data($data);
			redirect('Empresa/data');
		} else {
			$this->template->load('template', 'error');
		}
	}

	public function validation()
	{
		$this->load->model('Empresa_model');

		if ($this->Empresa_model->data()) {

			return true;
		} else {
			return false;
		}
	}

	

	public function cadastrarVaga()
	{
		// Suponha que você tenha um modelo 'Empresa_model' para salvar as informações
		$this->load->model('Empresa_model');
		
		// Pegue os dados do formulário
		$nome = $this->input->post('nome');
		$descricao = $this->input->post('descricao');
		//$imagem = $this->uploadImagem(); // Suponha que você tenha um método para upload de imagem
	
		// Verifique se os dados foram recebidos corretamente
		if ($nome && $descricao) {
			// Salve os dados no banco de dados
			$dados = [
				'nome' => $nome,
				'descricao' => $descricao,
				
			];
	
			if ($this->Empresa_model->salvarVaga($dados)) {
				// Mensagem de sucesso
				$this->session->set_flashdata('success', 'Vaga cadastrada com sucesso!');
			} else {
				// Mensagem de erro ao salvar
				$this->session->set_flashdata('error', 'Erro ao cadastrar a vaga.');
			}
		} else {
			// Caso algum dado não tenha sido enviado
			$this->session->set_flashdata('error', 'Por favor, preencha todos os campos.');
		}
	
		// Redirecione para a página de cadastro
		redirect('empresa/cadastrarVaga');
	}
	
}
