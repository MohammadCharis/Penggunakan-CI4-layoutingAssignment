<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home', ['title' => 'Beranda']);
    }

    public function coba()
    {
        echo "ini halaman mahasiswa";
    }

    public function mahasiswa()
    {
        return view('mahasiswa/index', ['title' => 'Data Mahasiswa']);
    }

    public function dosen()
    {
        return view('dosen/index', ['title' => 'Data Dosen']);
    }

    public function matakuliah()
    {
        return view('matakuliah/index', ['title' => 'Data Mata Kuliah']);
    }

    public function tentang()
    {
        return view('tentang', ['title' => 'Tentang Aplikasi']);
    }
}
