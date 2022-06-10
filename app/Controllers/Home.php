<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Usuario;
class Home extends BaseController
{
    private $usuarioModel;
    private $session;

    public function __construct()
    {
        $this->usuarioModel = new Usuario();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        return view('pages/index.php');
    }

    public function auth(){
        $usuario = $this->usuarioModel
                ->where('LOGIN', $this->request->getPost('usuario'))
                ->first();
        if($usuario){
            if($usuario["SENHA"] == $this->request->getPost('senha')){
                $this->session->set('usuario_logado', $usuario);
                return redirect()->to('/pesquisa_usuarios');
            }
        }
        return redirect()->to(base_url('/login'));
    }
}
