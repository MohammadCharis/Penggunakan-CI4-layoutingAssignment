<?php

namespace App\Controllers;

use App\Models\DosenModel;
use App\Models\MataKuliahModel;

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
        $model = new DosenModel();

        return view('dosen/index', [
            'title' => 'Data Dosen',
            'dosen' => $model->getAll()
        ]);
    }

    public function matakuliah()
    {
        $model = new MataKuliahModel();

        return view('matakuliah/index', [
            'title' => 'Data Mata Kuliah',
            'matakuliah' => $model->getAll()
        ]);
    }

    public function tentang()
    {
        return view('tentang', ['title' => 'Tentang Aplikasi']);
    }
}
