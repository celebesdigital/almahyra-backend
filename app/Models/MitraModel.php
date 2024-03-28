<?php

namespace App\Models;

use CodeIgniter\Model;

class MitraModel extends Model
{
    protected $table            = 'mitra';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'ktp', 'nomor', 'provinsi', 'kabupaten', 'kecamatan', 'alamat', 'stok', 'email', 'username', 'password', 'id_upline'];

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

	// public function addMitra($data)
	// {
	// 	$data['password'] = hash("sha256", $data['password']);
	// 	$data ['id_upline'] = $this->addUpline($data['referal']);
	// 	$this->insert($data);
	// }

	public function getValid($id) {
		return isset(($this->select('valid')
		->where('id', $id)
		->first())->valid)
		? $this->select('valid')
		->where('id', $id)
		->first()->valid
		: null;
	}

	public function getId($data) {
		return $this->select('id')
		->where('username', $data['username'])
		->first();
	}

	public function getStock() {
		return $this->select('stok')
		->where('id', session('user')->id)
		->first();
	}

	public function tryLogin($data) {
		$database = $this->select('password')
		->where('username', $data['username'])
		->first();
		if (isset($database->password) && $database->password === hash('sha256', $data['password'])) {
			return true;
		}
		return false;
	}

	private function addUpline($kode_referal) {
		return $this->select('id')
		->where('kode_referal', $kode_referal)
		->first()->id;
	}
}
