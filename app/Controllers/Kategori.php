<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class Kategori extends BaseController
{

    protected $kategoriModel;
    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
    }

    public function index()
    {

        // $kategori = $this->kategoriModel->findAll();

        $data = [
            'title' => 'Kategori | Sistem Informasi Supermarket',
            'kategori' => $this->kategoriModel->getKategori()
        ];

        // echo view('layout/header', $data);
        // echo view('mobil');
        // echo view('layout/footer');
        return view('kategori', $data);
    }


    public function save()
    {
        // dd($this->request->getVar());
        $this->kategoriModel->save([
            'nama_kategori' => $this->request->getVar('kategori')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/kategori');
    }

    public function delete($id)
    {
        $this->kategoriModel->delete($id);
        session()->setFlashdata('pesan2', 'Data Berhasil Dihapus');

        return redirect()->to('/kategori');
    }
}
