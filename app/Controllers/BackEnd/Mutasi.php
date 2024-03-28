<?php

namespace App\Controllers\BackEnd;
use App\Controllers\Backend\BackendController;

class Mutasi extends BackendController
{
	public function index()
	{
		return view('backend/mutasi');
	}

	public function order(Int $id_mutasi = null)
	{
		$MutasiModel = new \App\Models\MutasiModel();
		$MitraModel = new \App\Models\MitraModel();

		$mutasi =  $id_mutasi ? $MutasiModel->find($id_mutasi) : $MutasiModel->newMutasi();
		$idUpline = $MitraModel->where('id_upline', 1)->first()->id_upline;
		$id_downline = $MitraModel->where('id_upline', 2)->findAll();

		$optionJenisMutasi = ['mitra_ke_mitra' => 'Antar Mitra'];

		if ( $MitraModel->find(2)->status === 'ao' )
		{
			$optionJenisMutasi['pusat_ke_ao'] = 'AO ke Kantor Pusat';
		}

		$tesMutasi['mutasi'] = $mutasi;
		$tesMutasi['id_upline'] = $idUpline;
		$tesMutasi['id_downline'] = $id_downline;
		$tesMutasi['optionMutasi'] = form_dropdown('jenis_mutasi', $optionJenisMutasi, '', 'class="form-select" readonly');

		if ( $this->request->getPost() )
		{
			$dataMutasi = ['id_penerima', 'id_pengirim', 'jumlah', 'catatan', 'jenis_mutasi', 'status', 'nomor_mutasi', 'tgl_order', 'tujuan'];

			$mutasi = $MutasiModel->tambahOrder($dataMutasi);
		}

		return view('/backend/order', $tesMutasi);
	}

	public function detail(int $idMutasi)
	{
		return view('/backend/detail-order');
	}

	public function jual()
	{
		if ( $this->request->getPost() )
		{
			return redirect()->to('/backend/mutasi/jual');
		}

		return view('/backend/jual');
	}
}