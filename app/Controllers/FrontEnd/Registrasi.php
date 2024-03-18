<?php
namespace App\Controllers\Frontend;

class Registrasi extends FrontendController
{
	public function login()
	{
		return view('frontend/login');
	}

	public function registrasi()
	{
		return view('frontend/registrasi');
	}
}