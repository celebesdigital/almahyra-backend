<?php
namespace App\Controllers\BackEnd;

use App\Controllers\BackEnd\BackEndController;

class Home extends BackEndController
{
	public function index()
	{
		return view('backend/home');
	}
}