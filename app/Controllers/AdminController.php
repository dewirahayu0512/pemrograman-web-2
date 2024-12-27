<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }
    public function koleksiproduk()
    {
        $modelProduk = model('ProdukModel');
        $data['products'] = $modelProduk->findAll();

        return view('admin/koleksi-produk', $data);
    }
    public function koleksiprodukTambah()
    {
        return view('admin/koleksi-produk-tambah');
    }
    public function createProduk(){
        $data = $this->request->getPost();
        $file = $this->request->getFile('katalog');

        if(!$file->hasMoved()){
            $path = $file->store();
            $data['katalog'] = $path;
        }

        $produkModel = model('produkModel');

        if($produkModel->insert($data, false)){
            return redirect()->to('admin/koleksi-produk')->with('sukses', 'data berhasil disimpan');
        }else{
            return redirect()->to('admin/koleksi-produk')->with('eror', 'data gagal disimpan');
        }

        $produkModel->save($data);
    }
     // Fungsi untuk menampilkan halaman edit produk
     public function edit($id_produk)
     {
         // Load model
         $produkModel = new \App\Models\ProdukModel();
     
         // Ambil data produk berdasarkan ID
         $data['products'] = $produkModel->find($id_produk);
     
         // Jika data tidak ditemukan
         if (!$data['products']) {
             return redirect()->to('/admin/koleksi-produk')->with('error', 'Produk tidak ditemukan');
         }
     
         // Tampilkan form edit
         return view('admin/koleksi-produk-edit', $data);
     }
     public function update($id_produk)
    {
        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama_barang' => 'required',
            'brand'       => 'required',
            'kategori'    => 'required',
            'harga'       => 'required',
            'gambar'      => 'is_images[gambar]|mime_in[gambar,images/jpg,images/jpeg,images/png]'
        ]);
    
        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('error', $validation->listErrors());
        }
         // Load model
         $produkModel = new \App\Models\ProdukModel();
    
         // Data untuk di-update
         $data = [
             'nama_produk' => $this->request->getPost('nama_produk'),
             'brand'       => $this->request->getPost('brand'),
             'kategori'    => $this->request->getPost('kategori'),
             'harga'       => $this->request->getPost('harga'),
         ];
     
         // Jika ada gambar baru yang diunggah
         $fileKatalog = $this->request->getFile('katalog');
         if ($fileKatalog && $fileKatalog->isValid()) {
             $fileName = $fileKatalog->getRandomName();
             $fileKatalog->move('file-images', $fileName);
             $data['katalog'] = $fileName;
         }
          // Update data
        if ($produkModel->update($id_produk, $data)) {
            return redirect()->to('/admin/koleksi-produk')->with('sukses', 'Data berhasil diperbarui');
        } else {
            return redirect()->to('/admin/koleksi-produk')->with('error', 'Data gagal diperbarui');
        }
    }

    // Fungsi untuk menghapus produk
    public function hapus($id_produk)
{
    // Load model
    $produkModel = new \App\Models\ProdukModel();

    // Cek apakah data dengan ID tersebut ada
    $products = $produkModel->find($id_produk);

    if (!$products) {
        return redirect()->to('/admin/koleksi-produk')->with('error', 'Data tidak ditemukan');
    }

    // Hapus gambar dari folder (jika ada)
    if ($products['katalog'] && file_exists('file-images/' . $products['katalog'])) {
        unlink('file-images/' . $products['katalog']);
    }

    // Hapus data dari database
    if ($produkModel->delete($id_produk)) {
        return redirect()->to('/admin/koleksi-produk')->with('sukses', 'Data berhasil dihapus');
    } else {
        return redirect()->to('/admin/koleksi-produk')->with('error', 'Data gagal dihapus');
    }
}



    public function transaksi()
    {
        return view('admin/transaksi');
    }
    public function transaksiUbahStatus()
    {
        return view('admin/transaksi-ubah-status');
    }
    public function transaksiHapus()
    {
        return view('admin/transaksi-hapus');
    }
    public function pelanggan()
    {
        return view('admin/pelanggan');
    }
    public function pelangganHapus()
    {
        return view('admin/pelanggan-hapus');
    }

    public function images($folder, $file){
        return $this->response->download(WRITEPATH . 'uploads/' . $folder . '/' . $file, null);
    }
}