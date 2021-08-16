<?php

namespace App\Controllers;

use App\Models\LaporanModel;

class Laporan extends BaseController
{
    protected $laporanModel;
    public function __construct()
    {
        $this->laporanModel = new LaporanModel();
    }


    public function index()
    {

        $data = [
            'title' => 'Laporan Penjualan | Sistem Informasi Supermarket',
            'nota' => $this->laporanModel->getNota()
            // 'pemasukan' => $this->laporanModel->getPemasukan()
        ];

        // echo view('layout/header', $data);
        // echo view('motor');
        // echo view('layout/footer');
        return view('laporan', $data);
    }
}
