<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'id_barang';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_barang', 'id_kategori', 'nama_barang', 'merk', 'harga_beli', 'harga_jual', 'satuan_barang', 'stok'];


    public function getBarang($idB = false)
    {
        if ($idB == false) {
            return $this->findAll();
        }

        return $this->where(['id_barang' => $idB])->first();
    }
}
