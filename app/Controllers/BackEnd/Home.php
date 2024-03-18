<?php
namespace App\Controllers\BackEnd;

class Home extends BackendController
{
	public function index()
	{
		return view('backend/home');
	}
}