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

	public function recuperar_senha()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Lógica para recuperar a senha e obter o email do usuário
        $email = $this->input->post('email'); // Supondo que o email foi recuperado
        
        // Verifique se o email está correto e envie o email de recuperação
        if ($email != '') {
            // Gerar um token único para o usuário
            $token = bin2hex(random_bytes(16)); // Gera um token de 32 caracteres
            
            // Salvar o token no banco de dados junto com o email e a data de expiração (opcional)
            $this->Usuario_model->salvarTokenRedefinicaoSenha($email, $token);

            // Construir o link de redefinição de senha
            $linkRedefinicao = base_url('usuario/recuperar_senha') . '?email=' . urlencode($email) . '&token=' . urlencode($token);

            // Construir o email
            $to = $email;
            $subject = "Recuperação de Senha";
            $message = "Olá,<br><br>Você solicitou a recuperação de senha. Clique no link abaixo para redefinir sua senha:<br><br><a href=\"$linkRedefinicao\">Redefinir Senha</a><br><br>Atenciosamente,<br>Equipe do Sistema";

            // Cabeçalho do email
            $header = "From: clebersoares749@gmail.com \r\n";
            $header .= "Content-Type: text/html; charset=UTF-8\r\n"; // Definindo o tipo de conteúdo como HTML
            
            // Envio do email de recuperação de senha
            $result = mail($to, $subject, $message, $header);
            
            // Verifica se o email foi enviado com sucesso
            if ($result) {
                echo 'Email de recuperação de senha enviado com sucesso';
            } else {
                echo 'Ocorreu um erro ao enviar o email de recuperação de senha';
            }
        } else {
            echo 'Email não fornecido para recuperação de senha';
        }
    }

    $this->load->view('recuperar_senha');
}

public function atualizarSenha()
{
    // Verifique se o email e o token estão presentes na URL
    $email = $this->input->get('email');
    $token = $this->input->get('token');

    if (!empty($email) && !empty($token)) {
        // Verifique se o token é válido (exemplo simplificado)
        $tokenValido = $this->Usuario_model->verificarTokenRedefinicaoSenha($email, $token);

        if ($tokenValido) {
            // Token válido, exiba a página de alteração de senha
            $this->load->view('alterar_senha');
        } else {
            // Token inválido, redirecione para uma página de erro ou mensagem
            redirect('usuario/token_invalido');
        }
    } else {
        // Email ou token não fornecidos, redirecione para uma página de erro ou mensagem
        redirect('usuario/token_invalido');
    }
}


public function alterarSenhaProcessar()
{
    
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
				// Envio do email após o cadastro
				$to = $data['email'];
				$subject = "Bem-vindo ao nosso sistema";
				$message = "Olá " . $data['nome'] . ",\r\n\r\nSeu cadastro foi realizado com sucesso!\r\n\r\nAtenciosamente,\r\nEquipe do Sistema";
				$header = "From: seu-email@exemplo.com \r\n";
				
				// Envio do email
				$result = mail($to, $subject, $message, $header);
				
				// Verifica se o email foi enviado com sucesso
				if ($result) {
					echo 'Cadastrou e enviou email de boas-vindas';
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
			redirect('Usuario/data');
		} else {
			$this->template->load('template', 'usuario/cadastro');
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

	
}
