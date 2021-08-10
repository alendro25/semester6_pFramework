<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        // return view('home');
        $data = [
            'title' => 'Users | Sistem Informasi Supermarket'
        ];

        // echo view('layout/header', $data);
        // echo view('home');
        // echo view('layout/footer');
        // return view('home', $data);
        return view('users', $data);
    }
}
