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
		// Obtém as vagas do banco de dados
		$vagas = $this->Usuario_model->getVagas();

		// Verifique se $vagas não está vazio
		if ($vagas) {
			// Passa as vagas para a view
			$data['vagas'] = $vagas;
		} else {
			// Se não houver vagas, passamos um array vazio para evitar erros na view
			$data['vagas'] = [];
		}

		// Carrega a view com os dados
		$this->load->view('usuario/home_usuario', $data);

	}

	public function esqueceu_senha()
	{

		$this->load->view('esqueceu_senha');
	}

	public function recuperar_senha()
    {
    $this->load->library('form_validation');

    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

    if ($this->form_validation->run()) {
        $email = $this->input->post('email');
        
        // Consulta o banco de dados para verificar se o e-mail existe
        $usuario = $this->db->get_where('cadastro_usuario', ['email' => $email])->row();

        if ($usuario) {
            // Salva o e-mail na sessão antes de redirecionar
            $this->session->set_flashdata('email', $email);
            redirect('usuario/alterar_senha'); 
            return;
        } else {
            // Exibe erro se o e-mail não for encontrado
			$this->template->load('template', 'error');
        }
    }

    // Recarrega a view caso a validação falhe
    $this->load->view('recuperar_senha');
    }

	public function alterar_senha()
	{
		// Tenta recuperar o e-mail armazenado na sessão
		$email = $this->session->flashdata('email');
	
		// Se o e-mail não estiver na sessão, evita o redirecionamento em excesso
		if (!$email) {
			$this->session->set_flashdata('error', 'Acesso inválido. Tente novamente.');
			redirect('usuario/recuperar_senha'); 
			return;
		}
	
		// Carrega a view e envia o e-mail como variável
		$this->load->view('alterar_senha', ['email' => $email]);
	}

	public function cadastro()
    {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = [
            'nome'      => $this->input->post('nome'),
            'sobrenome' => $this->input->post('sobrenome'),
            'contato'   => $this->input->post('contato'),
            'email'     => $this->input->post('email'),
            'dataNasc'  => $this->input->post('dataNasc'),
            'genero'    => $this->input->post('genero'),
            'senha'     => $this->input->post('senha')
        ];

        // Efetua o cadastro e valida se foi cadastrado
        if ($this->Usuario_model->cadastrar($data)) {

            // Exemplo de link para ativação ou acesso
            $link = base_url('usuario/login');

            // Configurar os cabeçalhos para email HTML
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: seu-email@exemplo.com" . "\r\n";

            // Mensagem HTML com o link
            $message = "
            <html>
            <head>
              <title>Bem-vindo ao nosso sistema</title>
            </head>
            <body>
              <p>Olá " . $data['nome'] . ",</p>
              <p>Seu cadastro foi realizado com sucesso!</p>
              <p>Para efetuar o login e acessar sua conta, clique no link abaixo:</p>
              <p><a href='" . $link . "'>Acessar Conta</a></p>
              <br>
              <p>Atenciosamente,<br>Equipe do Sistema</p>
            </body>
            </html>
            ";

            // Envio do email
            $to = $data['email'];
            $subject = "Bem-vindo ao nosso sistema";
            $result = mail($to, $subject, $message, $headers);

            // Verifica se o email foi enviado com sucesso
            if ($result) {
                echo 'Seu cadastro foi realizado com sucesso, efetue o login e acesse sua conta!';
            } else {
                echo 'Cadastrou, mas ocorreu um erro ao enviar o email';
            }
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

	public function nova_senha($id)
	{
		$_SERVER['REQUEST_METHOD'] == 'POST';

		$data['usuario'] = $this->Usuario_model->nova_senha($id);


		$this->template->load('template', 'usuario', $data);
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

	public function data()
	{
		// Carrega a view 'home_usuario'
		$this->load->view('usuario/home_usuario');
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
				'home_usuario' => 1
			);
			$data['email'] = $this->Usuario_model->data($data);
			redirect('usuario/index_Home');
		} else {
			$this->template->load('template', 'error');
		}
	}

	public function validation()
	{
		$this->load->model('Usuario_model');

		if ($this->Usuario_model->data()) {

			return true;
		} else {
			return false;
		}
	}


	public function index_Home()
	{
		$this->load->view('usuario/index_Home');
	}

	public function redSenha($id)
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$data['usuario'] = $this->Usuario_model->redSenha($id);
	
			$this->template->load('template', 'usuario', $data);
		} else {
			show_error('Método inválido!', 405);
		}
	}

	public function atualizar_senha()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $this->input->post('email');
        $novaSenha = $this->input->post('novaSenha');
        $confirmarSenha = $this->input->post('confirmarSenha');
		

        if ($novaSenha === $confirmarSenha) {
            // 🔹 Certifique-se de que está passando os argumentos corretamente
            $resultado = $this->Usuario_model->redSenha($email, $novaSenha);

            if ($resultado === "Senha atualizada com sucesso!") {
                $this->session->set_flashdata('success', $resultado);
                redirect('usuario/login');
            } else {
                $this->session->set_flashdata('error', $resultado);
                redirect('usuario/alterar_senha');
            }
        } else {
            $this->session->set_flashdata('error', 'As senhas não coincidem.');
            redirect('usuario/alterar_senha');
        }
    } else {
        show_error('Método inválido!', 405);
    }
}


	
	
}
