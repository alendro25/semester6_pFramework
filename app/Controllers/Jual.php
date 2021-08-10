<?php

namespace App\Controllers;

class Jual extends BaseController
{
    public function index()
    {
        // return view('home');
        $data = [
            'title' => 'Transaksi Jual | Sistem Informasi Supermarket'
        ];

        // echo view('layout/header', $data);
        // echo view('home');
        // echo view('layout/footer');
        // return view('home', $data);
        return view('jual', $data);
    }
}
