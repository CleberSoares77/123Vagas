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
			$this->template->load('template', 'empresa/cadastro_empresa');
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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Configuração para upload da imagem
            $config['upload_path']   = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size']      = 2048; // 2MB

            $this->load->library('upload', $config);

            // Verifica se a imagem foi enviada
            if (!$this->upload->do_upload('imagem')) {
                echo 'Erro ao fazer upload da imagem: ' . $this->upload->display_errors();
                return;
            } else {
                $uploadData = $this->upload->data();
                $imagemPath = 'uploads/' . $uploadData['file_name']; // Caminho salvo no banco
            }

            // Dados do formulário
            $data = [
                'nome'      => $this->input->post('nome'),
                'descricao' => $this->input->post('descricao'),
                'imagem'    => $imagemPath
            ];

            // Insere no banco
            if ($this->Empresa_model->cadastrar($data)) {
                echo 'Vaga cadastrada com sucesso!';
            } else {
                echo 'Erro ao cadastrar vaga!';
            }
			$this->load->view('empresa/cadastrarVaga');
		}
	}
}
