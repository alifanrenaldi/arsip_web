<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratKeluar extends Model
{
    protected $table            = 'surat_keluar';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id','tanggal_surat','perihal','file','kode_instansi','id_admin'];

    // Dates
    protected $dateFormat    = 'datetime';
    
    
}
