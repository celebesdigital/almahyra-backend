<?php

namespace App\Controllers\Backend;

use App\Controllers\Backend\BackendController;

class MitraList extends BackendController
{
    public function index()
    {
        $data = [];
        return view('backend/mitra-list', $data);
    }

    public function registrasiAo()
    {
        return view('backend/registrasi-ao');
    }
}
