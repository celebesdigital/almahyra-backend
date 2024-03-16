<?php
namespace App\Controllers\Frontend;

class Home extends FrontendController
{
	public function index()
	{
		return view('frontend/home');
	}
}