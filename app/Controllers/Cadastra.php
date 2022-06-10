<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Usuario;
use App\Services\Auth;

class Cadastra extends BaseController
{

    private $usuarioModel;
    private $auth;

    public function __construct()
    {
        $this->usuarioModel = new Usuario();
        $this->auth = new Auth(); //Servico para autenticar usuario
    }

    public function index()
    {
        //Verifica se usuario esta autenticado, caso esteja, redireciona para pagina de cadastro
        if($this->auth->is_usuario_logged()){ 
            return view('pages/cadastro_usuarios.php');
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
    
    public function store(){
        //Caso esteja logado, obtem atraves de CURLRequests os dados do formulario
        //E insere no banco de dados
        if($this->auth->is_usuario_logged()){
            $data = [
                'LOGIN' => $this->request->getPost('login'),
                'SENHA' => $this->request->getPost('senha'),
                'NOME_COMPLETO' => $this->request->getPost('nome'),
                'ATIVO' => $this->request->getPost('ativo')
            ];
            $this->usuarioModel->insert($data);
            return view('messages/sucess.php');
        } else {
            return redirect()->to(base_url('/login'));
        }
    }

}
