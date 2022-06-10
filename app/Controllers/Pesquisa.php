<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Usuario;
use App\Services\Auth;

class Pesquisa extends BaseController
{
    private $usuarioModel;
    private $auth;

    public function __construct()
    {
        $this->usuarioModel = new Usuario();
        $this->auth = new Auth();
    }

    public function index()
    {

        //Caso esteja logado,  obtem os usuarios do banco, usando paginacao
        if ($this->auth->is_usuario_logged()) {
            $fetchUsuarios = $this->usuarioModel->paginate(3);
            return view(
                'pages/pesquisa_usuarios.php',
                [
                    'usuarios' => $fetchUsuarios,
                    'pager' => $this->usuarioModel->pager
                ]
            );
        }
        return redirect()->to(base_url('/login'));
    }

    public function delete($id)
    {
        //Caso esteja logado, deleta o usuario do banco
        if($this->auth->is_usuario_logged()){
            if ($this->usuarioModel->find($id)) {
                $this->usuarioModel->delete($id);
                return view('messages/sucess.php');
            } else {
                session()->setFlashdata('error', 'Usuário não encontrado');
                session()->setFlashdata('alert-class', 'alert-danger');
                return view('messages/fail.php');
            }
        }
        return redirect()->to(base_url('/login'));
    }

    /*
    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        return view('pages/' . $page);

    }*/
}
