<?php
namespace App\Controllers\Frontend;

use App\Models\Mitra;

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
		$session = session();
		$data = $this->request->getPost();

		if ($this->request->is('post')) {
			if (!$this->validasi()) {
				return redirect()->back()->withInput();
			}
			$mitraModel = new Mitra;
			$mitraModel->addMitra($data);
			$mitraModel->getValid($data);
			$session->start();
			session()->set(['akun'=> $mitraModel->getValid($data), 'user'=> $mitraModel->getId($data)]);
		}


		return view('frontend/registrasi');
	}

	private function validasi()
	{
		$userInput = $this->request->getPost();
		$validation = \Config\Services::validation();

		$validation->setRules([
			'nama' => [
				'label' => 'Nama',
				'rules' => 'required|alpha_space',
				'errors' => [
					'required' => '{field} butuh di isi',
					'alpha_space' => '{field} hanya dapat berisi bisa huruf dan spasi'
				]
			],
			'username' => [
				'label' => 'Username',
				'rules' => 'required|alpha_numeric|is_unique[mitra.username]',
				'errors' => [
					'required' => '{field} butuh di isi',
					'alpha_space' => '{field} hanya dapat berisi bisa huruf dan angka',
					'is_unique' => '{field} sudah terdaftar di database'
				]
			],
			'password' => [
				'label' => 'Password',
				'rules' => 'required|alpha_numeric_punct',
				'errors' => [
					'required' => '{field} butuh di isi',
					'alpha_numeric_punct' => '{field} hanya dapat berisi bisa huruf, angka, dan tanda baca'
				]
			],
			'ktp' => [
				'label' => 'KTP',
				'rules' => 'required|exact_length[16]|numeric|is_unique[mitra.ktp]',
				'errors' => [
					'required' => '{field} butuh di isi',
					'exact_length' => '{field} harus {param} digit angka',
					'numeric' => '{field} cuma bisa angka',
					'is_unique' => '{label} sudah terdaftar di database'
				]
			],
			'email' => [
				'label' => 'Email',
				'rules' => 'required|valid_email|is_unique[mitra.email]',
				'errors' => [
					'required' => '{field} butuh di isi',
					'valid_email' => '{field} tidak valid',
					'is_unique' => '{field} sudah terdaftar di database'
				]
			],
			'nomor' => [
				'label' => 'Nomor',
				'rules' => 'required|numeric|is_unique[mitra.nomor]',
				'errors' => [
					'required' => '{field} butuh di isi',
					'numeric' => '{field} cuma bisa angka',
					'is_unique' => '{field} sudah terdaftar di database'
				]
			],
			'alamat' => [
				'label' => 'Alamat',
				'rules' => 'required|alpha_numeric_punct',
				'errors' => [
					'required' => '{field} butuh di isi',
					'alpha_numeric_punct' => '{field} hanya dapat berisi huruf, angka, dan tanda baca'
				]
			],
			'provinsi' => [
				'label' => 'Provinsi',
				'rules' => 'numeric',
				'errors' => [
					'numeric' => '{field} hanya bisa berisi angka'
				]
			],
			'kabupaten' => [
				'label' => 'Kabupaten',
				'rules' => 'numeric',
				'errors' => [
					'numeric' => '{field} hanya bisa berisi angka'
				]
			],
			'kecamatan' => [
				'label' => 'Kecamatan',
				'rules' => 'numeric',
				'errors' => [
					'numeric' => '{field} hanya bisa berisi angka'
				]
			],
			'referal' => [
				'label' => 'Referal',
				'rules' => 'numeric',
				'errors' => [
					'numeric' => '{field} hanya bisa berisi angka'
				]
			]
		]);

		if ($validation->run($userInput)) {
			return true;
		}
		return false;
	}
}