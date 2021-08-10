<?php

namespace App\Controllers;

use App\Models\BarangModel;
use CodeIgniter\Database\Query;
use CodeIgniter\HTTP\Request;

class Barang extends BaseController
{
    protected $barangModel;
    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }

    public function index()
    {
        // Connect db dgn model
        // $barangModel = new \App\Models\BarangModel();
        // $barang = $this->barangModel->findAll();
        // dd($barang);

        $data = [
            'title' => 'Barang | Sistem Informasi Supermarket',
            'barang' => $this->barangModel->getBarang()
        ];

        // echo view('layout/header', $data);
        // echo view('motor');
        // echo view('layout/footer');

        // Connect db tanpa model
        // $db = \Config\Database::connect();
        // $barang = $db->query("SELECT * FROM barang");
        // foreach ($barang->getResultArray() as $row) {
        //     d($row);
        // }

        return view('barang', $data);
    }

    public function detail($idB)
    {

        $data = [
            'title' => 'Detail Barang',
            'barang' => $this->barangModel->getBarang($idB)
        ];

        // Jika komik tidak ada di tabel
        if (empty($data['barang'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Barang ' . $idB . ' tidak ditemukan.');
        }

        return view('Views/detailBarang', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data'
        ];
        return view('Views/create', $data);
    }

    public function save()
    {
        // dd($this->request->getVar());
        $this->barangModel->insert($this->request->getVar());
        // 'id_barang' => $this->request->getVar('id_barang'),
        // 'id_kategori' => $this->request->getVar('kategori'),
        // 'nama_barang' => $this->request->getVar('nama_barang'),
        // 'merk' => $this->request->getVar('merk'),
        // 'harga_beli' => $this->request->getVar('harga_beli'),
        // 'harga_jual' => $this->request->getVar('harga_jual'),
        // 'satuan_barang' => $this->request->getVar('satuan_barang'),
        // 'stok' => $this->request->getVar('stok')


        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/barang');
    }


    public function delete($id)
    {
        $this->barangModel->delete($id);
        session()->setFlashdata('pesan2', 'Data Berhasil Dihapus');

        return redirect()->to('/barang');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Data',
            'barang' => $this->barangModel->getBarang($id)
        ];
        return view('Views/edit', $data);
    }

    public function update($id)
    {
        // dd($this->request->getVar());
        $this->barangModel->save([
            'id_barang' => $id,
            'id_kategori' => $this->request->getVar('id_kategori'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'merk' => $this->request->getVar('merk'),
            'harga_beli' => $this->request->getVar('harga_beli'),
            'harga_jual' => $this->request->getVar('harga_jual'),
            'satuan_barang' => $this->request->getVar('satuan_barang'),
            'stok' => $this->request->getVar('stok')
        ]);


        session()->setFlashdata('pesan3', 'Data Berhasil di Update');

        return redirect()->to('/barang');
    }
}
