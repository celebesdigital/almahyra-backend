<?php
namespace App\Controllers\BackEnd;
use App\Controllers\Backend\BackendController;

class Profile extends BackendController
{
	public function index()
	{
		$data = [];
		return view('backend/profile', $data);
	}
}