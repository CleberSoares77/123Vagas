<?php defined('BASEPATH') or exit('No direct script access allowed'); 

namespace App\Controllers;


class CadastroUserController extends BaseController {
    public function index(){

    }
    public function cadastrar(){

        $data['mensagem'] = '';

        if($this->request->getMethod()==='POST'){
            $CadastroUserModel = new \App\Models\CadastroUserModel();
            $CadastroUserModel->set('nome', $this->request->getPost('nome'));
            $CadastroUserModel->set('sobrenome', $this->request->getPost('sobrenome'));
            $CadastroUserModel->set('contato', $this->request->getPost('contato'));
            $CadastroUserModel->set('email', $this->request->getPost('email'));
            $CadastroUserModel->set('dataNasc', $this->request->getPost('dataNasc'));
            $CadastroUserModel->set('senha', $this->request->getPost('senha'));
            $CadastroUserModel->set('confirmaSenha', $this->request->getPost('confirmaSenha'));

            if($CadastroUserModel->insert()){
                echo 'Usuario cadastrado com sucesso!';
            }
            else{
                echo 'Erro ao cadastrar usuario!';
            }
        }

        echo view('cadastro-usuario');
    }
}

?>