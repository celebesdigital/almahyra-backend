<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\HTTP\RequestInterface;

class MutasiModel extends Model
{
    protected $table            = 'mutasi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_penerima', 'id_pengirim', 'jumlah', 'jenis_mutasi', 'catatan', 'status', 'nomor_mutasi', 'tgl_order', 'tgl_proses', 'tgl_kirim'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    protected $request = '';

    public function newMutasi()
    {
        $row = new \stdClass();
        $row->id_mutasi = null;
        $row->id_pengirim = '';
        $row->id_penerima = '';
        $row->jenis_mutasi = '';
        $row->jumlah = '';
        $row->catatan = '';
        $row->status = '';
        $row->nomor_mutasi = '';
        $row->tgl_order = '';
        $row->tgl_proses = '';
        $row->tgl_kirim = '';
        $row->tujuan = '';
        return $row;
    }

    public function tambahOrder($data = [])
	{
        $this->request = \Config\Services::request();
        $dataToProcess = [];

		if ( $data )
		{
			foreach ( $data as $row)
			{
				$dataToProcess[$row] = $this->request->getPost($row);
			}

            dd($dataToProcess);
		}

		return $this->builder()->insert($dataToProcess);
	}
}
