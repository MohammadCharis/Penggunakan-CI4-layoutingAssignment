<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table = 'dosen';

    protected $primaryKey = 'nidn';

    protected $allowedFields = [
        'nidn',
        'nama',
        'prodi'
    ];

    protected $returnType = 'array';

    protected $useTimestamps = false;

    public function getAll()
    {
        return $this->findAll();
    }
}
