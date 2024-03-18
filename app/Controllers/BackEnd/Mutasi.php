<?php

namespace App\Controllers\BackEnd;
use App\Controllers\Backend\BackendController;

class Mutasi extends BackendController
{
	public function index()
	{
		return view('backend/mutasi');
	}

	public function order()
	{
		if ( $this->request->getPost() )
		{
			return redirect()->to('/backend/mutasi');
		}

		return view('backend/order');
	}

	public function jual()
	{
		if ( $this->request->getPost() )
		{
			redirect()->to('/backend/mutasi/jual');
		}

		return view('/backend/jual');
	}
}