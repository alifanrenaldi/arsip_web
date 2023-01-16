<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SuratKeluar;
use App\Models\Instansi;
use App\Models\Admin;

class SuratKeluarController extends BaseController
{
    public function index()
    {
        $keluarModel = new SuratKeluar();
        $keluar = $keluarModel->findAll();
        $instansiModel = new Instansi();
        $instansi = $instansiModel->findAll();
        $adminModel = new Admin();
        $admin = $adminModel->findAll();

        $data = [
            'title' => 'Surat Keluar',
            'keluar' => $keluar,
            'instansi' => $instansi,
            'admin' => $admin
        ];

        return view('keluar/list', $data);
    }

    public function create()
    {
        $keluarModel = new SuratKeluar();
        $keluar = $keluarModel->findAll();
        $instansiModel = new Instansi();
        $instansi = $instansiModel->findAll();
        $adminModel = new Admin();
        $admin = $adminModel->findAll();

        $data = [
            'title' => 'Create Surat keluar',
            'keluar' => $keluar,
            'instansi' => $instansi,
            'admin' => $admin
        ];

        return view('keluar/create', $data);
    }

    public function store()
    {
        if (!$this->validate([
            'tanggal_surat' => 'required',
            'perihal' => 'required',
            'file' => 'required',
            'kode_instansi' => 'required',
            'id_admin' => 'required',
        ])) {
            return redirect()->to('/create');
        };

        // $fileSurat = $this->request->getFile('file');
        // $fileSurat->move('/adminlte-v2/dist/img/');
        // $namaSurat = $fileSurat->getName();

        $keluarModel = new SuratKeluar();

        $data = [
            'tanggal_surat' => $this->request->getVar('tanggal_surat'),
            'perihal' => $this->request->getVar('perihal'),
            'file' => $this->request->getVar('file'),
            'kode_instansi' => $this->request->getVar('kode_instansi'),
            'id_admin' => $this->request->getVar('id_admin'),
        ];
        $keluarModel->save($data);
        return redirect()->to('/keluar');
    }


    public function delete($id)
    {
        $keluarModel = new SuratKeluar();
        $keluarModel->delete($id);
        return redirect()->to('/keluar');
    }

    public function edit($id)
    {
        $keluarModel = new SuratKeluar();

        $data = [
            'keluar' => $keluarModel->find($id),
            'title' => 'Edit surat keluar'
        ];
        return view('/keluar/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'tanggal_surat' => 'required',
            'perihal' => 'required',
            'file' => 'required',
            'kode_instansi' => 'required',
            'id_admin' => 'required',
            //     'rules' => 'uploaded[file_surat]|max_size[file_surat,10024|ext_in[file_surat,file.pdf]'
            // ],
        ])) {
            return redirect()->to('/edit' . $id);
        }

        // $fileSurat = $this->request->getFile('file_surat');
        // $fileSurat->move('/Assets/AdminLTE-3.2.0/dist/img/');
        // $namaSurat = $fileSurat->getName();

        $keluarModel = new SuratKeluar();
        $data = [
            'tanggal_surat' => $this->request->getVar('tanggal_surat'),
            'perihal' => $this->request->getVar('perihal'),
            'file' => $this->request->getVar('file'),
            'kode_instansi' => $this->request->getVar('kode_instansi'),
            'id_admin' => $this->request->getVar('id_admin'),

        ];
        $keluarModel->update($id, $data);
        return redirect()->to('/keluar');
    }
}
