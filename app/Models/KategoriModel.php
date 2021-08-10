<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table      = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $useTimestamps = true;

    protected $allowedFields = ['nama_kategori', 'tgl_input'];


    public function getKategori($idK = false)
    {
        if ($idK == false) {
            return $this->findAll();
        }

        return $this->where(['id_kategori' => $idK])->first();
    }
}
