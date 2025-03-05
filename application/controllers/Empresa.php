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

			// Chame o método update do Empresa_model com dados e ID
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
        // Verifica se o formulário foi enviado
        if ($this->input->post()) {
            // Chama o método de upload da imagem
            $imagem = $this->uploadImagem();

            if ($imagem) {
                // Recebe os dados do formulário
                $nome = $this->input->post('nome');
                $descricao = $this->input->post('descricao');

                // Prepara os dados para inserir no banco
                $dados = [
                    'nome' => $nome,
                    'descricao' => $descricao,
                    'imagem' => 'uploads/' . $imagem, // Caminho da imagem
                ];

                // Salva os dados no banco
                if ($this->Empresa_model->salvarVaga($dados)) {
                    $this->session->set_flashdata('success', 'Vaga cadastrada com sucesso!');
                } else {
                    $this->session->set_flashdata('error', 'Erro ao cadastrar a vaga.');
                }
            } else {
                $this->session->set_flashdata('error', 'Erro no upload da imagem.');
            }

            // Redireciona para a página de cadastro
            redirect('empresa/cadastrarVaga');
        }

        // Carrega a view
        $this->load->view('Empresa/cadastrarVaga');
    }

    public function uploadImagem()
    {
        // Configurações para o upload da imagem
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048;
        $config['file_name'] = time() . '_' . $_FILES['imagem']['name'];

        // Carrega a biblioteca de upload
        $this->load->library('upload', $config);

        // Verifica se o upload foi bem-sucedido
        if ($this->upload->do_upload('imagem')) {
            return $this->upload->data('file_name');
        } else {
            return false;
        }
    }
	public function esqueceu_senha()
	{
		$this->load->view('empresa/esqueceu_senha');
	}

	public function lista_vagas() {
		$data['vagas'] = $this->Empresa_model->get_vagas();  // Certifique-se de que o método retorna as vagas
		$this->load->view('empresa/lista_vagas', $data);    // Nome da view criada
	}

	public function excluir_vaga($id) {
		// Carregue o model se necessário
		if ($this->Empresa_model->excluir($id)) {
			$this->session->set_flashdata('success', 'Vaga excluída com sucesso.');
		} else {
			$this->session->set_flashdata('error', 'Erro ao excluir a vaga.');
		}
		redirect('empresa/lista_vagas'); // Redireciona para a lista de vagas
	}

	 // Método para exibir o formulário de edição de uma vaga
	 public function editar_vaga($id = null) {
        if ($id === null) {
            show_error('ID da vaga não foi fornecido.');
            return;
        }
        
        $vaga = $this->Empresa_model->get_vaga_by_id($id);
        if (!$vaga) {
            $this->session->set_flashdata('error', 'Vaga não encontrada.');
            redirect('empresa/lista_vagas');
            return;
        }
        
        $data['vaga'] = $vaga;
        $this->load->view('empresa/editar_vaga', $data);
    }

    // Método para atualizar os dados da vaga
    public function update_vaga($id) {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            // Recebe os dados do formulário
            $data = array(
                'nome'      => $this->input->post('nome'),
                'descricao' => $this->input->post('descricao')
            );
            
            // Se houver um novo arquivo enviado, processa o upload
            if (!empty($_FILES['imagem']['name'])) {
                $config['upload_path']   = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size']      = 2048;
                $config['file_name']     = time() . '_' . $_FILES['imagem']['name'];
                
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('imagem')) {
                    $upload_data = $this->upload->data();
                    $data['imagem'] = 'uploads/' . $upload_data['file_name'];
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('empresa/editar_vaga/'.$id);
                    return;
                }
            }
            
            // Atualiza a vaga no banco de dados
            if ($this->Empresa_model->update_vaga($id, $data)) {
                $this->session->set_flashdata('success', 'Vaga atualizada com sucesso!');
                redirect('empresa/lista_vagas');
            } else {
                $this->session->set_flashdata('error', 'Erro ao atualizar a vaga.');
                redirect('empresa/editar_vaga/'.$id);
            }
        } else {
            redirect('empresa/editar_vaga/'.$id);
        }
    }

	public function redSenhaEmpresa($id)
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$data['empresa'] = $this->Empresa_model->redSenhaEmpresa($id);
	
			$this->template->load('template', 'empresa', $data);
		} else {
			show_error('Método inválido!', 405);
		}
	}

	public function atualizar_senha_empresa()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$email = $this->input->post('email');
			$novaSenha = $this->input->post('novaSenha');
	
			// Chama o model para atualizar a senha
			$resultado = $this->Empresa_model->redSenhaEmpresa($email, $novaSenha);
	
			if ($resultado === true) {
				$this->session->set_flashdata('success', 'Senha alterada com sucesso! Faça login novamente.');
				redirect('/'); // Redireciona para a página de login
			} else {
				$this->session->set_flashdata('error', 'Erro: Usuário não encontrado.');
				redirect('empresa/alterar_senha_empresa');
			}
		}
	}

	public function recuperar_senha_empresa()
    {
    $this->load->library('form_validation');

    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

    if ($this->form_validation->run()) {
        $email = $this->input->post('email');
        
        // Consulta o banco de dados para verificar se o e-mail existe
        $usuario = $this->db->get_where('cadastro_empresa', ['email' => $email])->row();

        if ($usuario) {
            // Salva o e-mail na sessão antes de redirecionar
            $this->session->set_flashdata('email', $email);
            redirect('usuario/alterar_senha_empresa'); 
            return;
        } else {
            // Exibe erro se o e-mail não for encontrado
			$this->template->load('template', 'error');
        }
    }

    // Recarrega a view caso a validação falhe
    $this->load->view('recuperar_senha_empresa');
    }

}
