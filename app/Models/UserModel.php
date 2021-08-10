<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'login';
    protected $primaryKey = 'id_login';
    protected $useTimestamps = true;
    protected $allowedFields = ['user', 'pass', 'merk', 'id_member'];


    public function getUser($idU = false)
    {
        if ($idU == false) {
            return $this->findAll();
        }

        return $this->where(['id_login' => $idU])->first();
    }
}
