<?php
namespace App\Controllers\Frontend;

class Registrasi extends FrontendController
{
	public function login()
	{
		return view('frontend/login');
	}

	public function login2()
	{
		return view('frontend/login2');
	}

	public function registrasi()
	{
		return view('frontend/registrasi');
	}
}