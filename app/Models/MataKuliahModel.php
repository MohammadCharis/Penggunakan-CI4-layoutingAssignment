<?php

namespace App\Models;

use CodeIgniter\Model;

class MataKuliahModel extends Model
{
    protected $table = 'matakuliah';

    protected $primaryKey = 'kode';

    protected $allowedFields = [
        'kode',
        'nama',
        'sks'
    ];

    protected $returnType = 'array';

    protected $useTimestamps = false;

    public function getAll()
    {
        return $this->findAll();
    }
}
