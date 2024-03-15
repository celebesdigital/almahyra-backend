<?php

namespace App\Controllers\BackEnd;

use App\Controllers\BackEnd\BackEndController;

class Stok extends BackEndController
{
    public function index()
    {
        return view('backend/stok');
    }
}
