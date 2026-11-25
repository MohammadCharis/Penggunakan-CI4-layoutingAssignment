<?php

namespace App\Controllers;

use App\Models\MataKuliahModel;

class MataKuliah extends BaseController
{
    protected $mataKuliahModel;

    public function __construct()
    {
        $this->mataKuliahModel = new MataKuliahModel();
    }

    public function index()
    {
        return view('matakuliah/index', [
            'title' => 'Data Mata Kuliah',
            'matakuliah' => $this->mataKuliahModel->getAll()
        ]);
    }

    public function create()
    {
        helper('form');

        return view('matakuliah/create', [
            'title' => 'Tambah Mata Kuliah'
        ]);
    }

    public function store()
    {
        $data = [
            'kode' => trim($this->request->getPost('kode') ?? ''),
            'nama' => trim($this->request->getPost('nama') ?? ''),
            'sks' => trim($this->request->getPost('sks') ?? '')
        ];

        if (
            $data['kode'] === '' ||
            $data['nama'] === '' ||
            $data['sks'] === ''
        ) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Semua kolom wajib diisi.');
        }

        $this->mataKuliahModel->insert($data);

        return redirect()->to('/mata-kuliah')
            ->with('success', 'Data mata kuliah berhasil ditambahkan.');
    }

    public function edit($id)
    {
        helper('form');

        $mk = $this->mataKuliahModel->find($id);

        if (!$mk) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                'Data mata kuliah tidak ditemukan.'
            );
        }

        return view('matakuliah/edit', [
            'title' => 'Edit Mata Kuliah',
            'mk' => $mk
        ]);
    }

    public function update($id)
    {
        $mk = $this->mataKuliahModel->find($id);

        if (!$mk) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                'Data mata kuliah tidak ditemukan.'
            );
        }

        $data = [
            'kode' => trim($this->request->getPost('kode') ?? ''),
            'nama' => trim($this->request->getPost('nama') ?? ''),
            'sks' => trim($this->request->getPost('sks') ?? '')
        ];

        if (
            $data['kode'] === '' ||
            $data['nama'] === '' ||
            $data['sks'] === ''
        ) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Semua kolom wajib diisi.');
        }

        $this->mataKuliahModel->update($id, $data);

        return redirect()->to('/mata-kuliah')
            ->with('success', 'Data mata kuliah berhasil diperbarui.');
    }

    public function delete($id)
    {
        $mk = $this->mataKuliahModel->find($id);

        if (!$mk) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                'Data mata kuliah tidak ditemukan.'
            );
        }

        $this->mataKuliahModel->delete($id);

        return redirect()->to('/mata-kuliah')
            ->with('success', 'Data mata kuliah berhasil dihapus.');
    }
}
