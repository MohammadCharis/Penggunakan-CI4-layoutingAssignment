<?php

namespace App\Controllers;

use App\Models\DosenModel;

class Dosen extends BaseController
{
    public function index()
    {
        $model = new DosenModel();

        return view('dosen/index', [
            'title' => 'Data Dosen',
            'dosen' => $model->getAll()
        ]);
    }
}
