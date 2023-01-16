<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Surat_masuk;

class SuratMasukController extends BaseController
{
    public function index(){
        $mahasiswaModel = new Surat_masuk();
        $mahasiswa = $mahasiswaModel->findAll();

        $data = [
        'title'=>'Mahasiswa',
        'mahasiswa' => $mahasiswa
        ];

        return view('masuk/surat_masuk', $data);
    }

    public function create(){
        $data = [
            'title'=>'Create Mahasiswa'
        ];

        return view('surat_masuk_create', $data);
    }

    public function store(){
        if (!$this->validate([
            'nomor_surat' => 'required|string',
            'tanggal_surat' => 'required',
            'tanggal_terima' => 'required',
            'asal_surat' => 'required|string',
            'perihal' => 'required',
            'file_surat' => 'required',
            'penerima' => 'required|string',
        ])) {
            return redirect()-> to('/create');
        };

        $fileSurat = $this->request->getFile('file_surat');
        $fileSurat -> move('/Assets/AdminLTE-3.2.0/dist/img/');
        $namaSurat = $fileSurat -> getName();
        
        $mahasiswaModel = new Surat_masuk();
        
        $data = [
            'nomor_surat' => $this->request->getPost('nomor_surat'),
            'tanggal_surat' => $this->request->getPost('tanggal_surat'),
            'tanggal_terima' => $this->request->getPost('tanggal_terima'),
            'asal_surat' => $this->request->getPost('asal_surat'),
            'perihal' => $this->request->getPost('perihal'),
            'file_surat' => $namaSurat,
            'penerima' => $this->request->getPost('penerima'),
        ];
        $mahasiswaModel->save($data);
        return redirect()->to('/mahasiswa');
    }
    
    public function delete($id)
    {
        $mahasiswaModel = new Surat_masuk();
        $mahasiswaModel->delete($id);
        return redirect()->to('/mahasiswa');
    }
    
    public function edit($id)
    {
        $mahasiswaModel = new Surat_masuk();
        
        $data = [
            'mahasiswa' => $mahasiswaModel->find($id),
            'title' => 'Edit Mahasiswa'
        ];
        return view('/mahasiswa/edit', $data);
    }

    public function update($id){
        if (!$this->validate([
            'nomor_surat' => 'required',
            'tanggal_surat' => 'required',
            'tanggal_terima' => 'required',
            'asal_surat' => 'required|string',
            'perihal' => 'required',
            'file_surat' => 'required',
            //     'rules' => 'uploaded[file_surat]|max_size[file_surat,10024|ext_in[file_surat,file.pdf]'
            // ],
            'penerima' => 'required|string',
        ])) {
            return redirect()-> to('/edit/'.$id);
        }
        
        $fileSurat = $this->request->getFile('file_surat');
        $fileSurat -> move('/Assets/AdminLTE-3.2.0/dist/img/');
        $namaSurat = $fileSurat -> getName();

        $mahasiswaModel = new Surat_masuk();
        $data = [
            'nomor_surat' => $this->request->getVar('nomor_surat'),
            'tanggal_surat' => $this->request->getVar('tanggal_surat'),
            'tanggal_terima' => $this->request->getVar('tanggal_terima'),
            'asal_surat' => $this->request->getVar('asal_surat'),
            'perihal' => $this->request->getVar('perihal'),
            'file_surat' => $namaSurat,
            'penerima' => $this->request->getVar('penerima'),

        ];
        $mahasiswaModel->update($id,$data);
        return redirect()->to('/mahasiswa');
    }
}
