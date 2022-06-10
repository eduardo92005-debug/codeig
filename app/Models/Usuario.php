<?php

namespace App\Models;

use CodeIgniter\Model;
use LDAP\Result;

class Usuario extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'usuarios';
    protected $primaryKey       = 'usuario_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['USUARIO_ID','LOGIN','SENHA', 'ATIVO', 'NOME_COMPLETO'];


    public function treatNull($resultArray){
        $cleanArray = [];
        foreach($resultArray as $keyArr => $valueArr){
            foreach($valueArr as $key => $value) {
                if($value == null){
                    $valueArr[$key] = "NULO";
                    $cleanArray = $valueArr;
                }
            }
        }

        return $cleanArray;
    }

    public function getAllUsuarios(){
        $result = $this->orderBy('USUARIO_ID', 'DESC')->findAll();
        return $result;
    }

    public function getUsuarioById($id){
        $result = $this->find($id);
        return $result;
    }
}
