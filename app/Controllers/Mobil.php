<?php

namespace App\Controllers;

class Mobil extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        // echo "Ini adalah method index pada controler produk";
        // echo "<br><br> <a href=' " . route_to('detailProduk') . " '> Go To detailProduk</a>";
        // return view('mobil');
        $data = [
            'title' => 'Mobil | Catalog Mobil Motor'
        ];

        // echo view('layout/header', $data);
        // echo view('mobil');
        // echo view('layout/footer');
        return view('mobil', $data);
    }
    public function detail_merek($param1 = '')
    {
        echo "Ini adalah method detail pada controler produk merek $param1";
    }
    public function detail_model($param1 = '', $param2 = '')
    {
        echo "Ini adalah method detail pada controler produk merek $param1 model $param2";
    }
}
