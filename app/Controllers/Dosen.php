<?php

namespace App\Controllers;

use App\Models\DosenModel;

class Dosen extends BaseController
{
    protected $dosenModel;

    public function __construct(DosenModel $dosenModel)
    {
        $this->dosenModel = $dosenModel;
    }
    public function index()
    {
        return view('dosen/index', [
            'title' => 'Data Dosen',
            'dosen' => $this->dosenModel->getAll()
        ]);
    }

        public function create()
    {
        helper('form');

        return view('dosen/create', [
            'title' => 'Tambah Dosen'
        ]);
    }

    public function store()
    {
        $data = [
            'nim' => trim($this->request->getPost('nim') ?? ''),
            'nama' => trim($this->request->getPost('nama') ?? ''),
            'prodi' => trim($this->request->getPost('prodi') ?? '')
        ];

        if ($data['nim'] === '' || $data['nama'] === '' || $data['prodi'] === '') {
            return redirect()->back()->withInput()->with('error', 'Semua kolom wajib diisi.');
        }

        $this->dosenModel->insert($data);

        return redirect()->to('/dosen')->with('success', 'Data dosen berhasil ditambahkan.');
    }

    public function edit($id)
    {
        helper('form');
        $mhs = $this->dosenModel->find($id);

        if (!$mhs) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data mahasiswa tidak ditemukan.');
        }

        return view('dosen/edit', [
            'title' => 'Edit Dosen',
            'mhs' => $mhs
        ]);
    }

    public function update($id)
    {
        if (!$this->dosenModel->find($id)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data dosen tidak ditemukan.');
        }

        $data = [
            'nim' => trim($this->request->getPost('nim') ?? ''),
            'nama' => trim($this->request->getPost('nama') ?? ''),
            'prodi' => trim($this->request->getPost('prodi') ?? '')
        ];

        if ($data['nim'] === '' || $data['nama'] === '' || $data['prodi'] === '') {
            return redirect()->back()->withInput()->with('error', 'Semua kolom wajib diisi.');
        }

        $this->dosenModel->update($id, $data);

        return redirect()->to('/dosen')->with('success', 'Data dosen berhasil diperbarui.');
    }

    public function delete($id)
    {
        if (!$this->dosenModel->find($id)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data dosen tidak ditemukan.');
        }

        $this->dosenModel->delete($id);

        return redirect()->to('/dosen')->with('success', 'Data dosen berhasil dihapus.');
    }
}
