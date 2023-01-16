<?php

namespace App\Models;

use CodeIgniter\Model;

class Instansi extends Model
{
    protected $table            = 'instansi';
    protected $primaryKey       = 'kode_Instansi';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['kode_Instansi','nama_Instansi','alamat'];

   
}
