<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function tes()
    {
        return view('home');
    }
    public function surat_masuk()
    {
        return view('surat_masuk');
    }
    public function suratkeluar()
    {
        return view('keluar');
    }
}
