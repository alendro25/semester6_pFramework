<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        // return view('home');
        $data = [
            'title' => 'Login | Sistem Informasi Supermarket'
        ];

        // echo view('layout/header', $data);
        // echo view('home');
        // echo view('layout/footer');
        // return view('home', $data);
        return view('login', $data);
    }

    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $user = $this->request->getVar('user');
        $password = $this->request->getVar('pass');
        // dd($_POST);
        $data = $model->where('user', $user)->first();
        // $data = $model->where(['user' => $user])->first();
        // dd($data);

        if ($data) {
            $pass = $data['pass'];
            // $verify_pass = password_verify($password, $pass);
            $verify_pass = $password;

            if ($verify_pass === $pass) {
                $ses_data = [
                    'id_login' => $data['id_login'],
                    'user' => $data['user'],
                    'logged_in' => TRUE,
                ];
                $session->set($ses_data);
                return redirect()->to('/home');
            } else {
                $session->setFlashdata('msg', 'Password Anda Salah!');
                return redirect()->to('/');
            }
        } else {
            $session->setFlashdata('msg', "Username Tidak Ditemukan");
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
