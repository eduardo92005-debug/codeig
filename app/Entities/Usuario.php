<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Usuario extends Entity
{
    protected $attributes = [
        'USUARIO_ID' => null,
        'LOGIN' => null,
        'SENHA' => null,
        'ATIVO' => null,
        'NOME_COMPLETO' => null,
    ];
}
