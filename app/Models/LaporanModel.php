<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table      = 'nota';
    protected $primaryKey = 'id_nota';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_nota', 'id_barang', 'id_member', 'jumlah', 'total'];


    public function getNota($idN = false)
    {
        if ($idN == false) {
            return $this->findAll();
        }

        return $this->where(['id_nota' => $idN])->first();
    }

    public function getPemasukan()
    {
        $db      = \Config\Database::connect();
        $builder3 = $db->table('nota');
        $hitungTotal = $builder3->selectSum('total');
        $hitungTotal = $builder3->get();
        $totalUang = $hitungTotal->getResult();
        $hasil = $totalUang[0]->total;

        return $this->$hasil;
    }
}
