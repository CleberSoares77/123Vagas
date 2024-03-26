<?php defined('BASEPATH') or exit('No direct script access allowed'); 

namespace App\Models;

use CodeIgniter\Model;

class CadastroUserModel extends Model {
    protected $tabela = 'tcc';
    protected $primaryKey = 'id';
    protected $alloweFields = ['nome','sobrenome','contato','email','dataNasc','genero','senha','confirmaSenha'];
    protected $returnType = 'object';
}

?>