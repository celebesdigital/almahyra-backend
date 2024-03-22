<?php

namespace App\Controllers\BackEnd;

use App\Models\Mitra;


class Stok extends BackEndController
{
    public function index()
    {
		$mitraModel = new Mitra();
		$data = [
			"stok" => $mitraModel->getStock()->stok
		];

        return view('backend/stok', $data);
    }
}
