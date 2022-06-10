<?php

namespace App\Services;

use App\Models\Usuario;
use CodeIgniter\Config\BaseService;

class Auth extends BaseService
{

    private $usuarioModel;
    private $session;

    public function __construct()
    {
        $this->usuarioModel = new Usuario();
        $this->session = \Config\Services::session();
    }

    public function is_usuario_logged()
    {
        if(!$this->session->has('usuario_logado')){
            return false;
        }
        return true;
    }
}
