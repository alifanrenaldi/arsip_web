<?php

namespace App\Models;

use CodeIgniter\Model;

class Surat_masuk extends Model
{
    
    // public function all_data(){
        
    //     return $this->db->table('surat_masuk')
    //         ->join('instansi','instansi.kode_Instansi=surat_masuk=kode_instansi','left')
    //         ->join('admin','admin.id_admin=surat_masuk=id_pengguna','left')
    //         ->orderBy('id','file')
    //         ->get()
    //         ->getResultArray();
    // }

    protected $table            = 'surat_masuk';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nomor_surat','tanggal_surat','tanggal_diterima','asal_surat','perihal','file','kode_instansi','id_pengguna'];

    // // Dates
    protected $dateFormat    = 'datetime';
}
