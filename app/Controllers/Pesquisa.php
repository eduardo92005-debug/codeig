<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Usuario;

class Pesquisa extends BaseController
{
    public function index()
    {
        return view('pages/pesquisa_usuarios.php');
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
