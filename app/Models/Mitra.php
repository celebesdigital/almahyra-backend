<?php

namespace App\Models;

use CodeIgniter\Model;

class Mitra extends Model
{
    protected $table            = 'mitra';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'ktp', 'nomor', 'provinsi', 'kabupaten', 'kecamatan', 'alamat', 'stok', 'email', 'username', 'password'];

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

	public function addMitra($data)
	{
		$data['password'] = hash("sha256", $data['password']);
		$this->insert($data);
	} 

	public function getValid($id) {
		return ($this->select('valid')
		->where('id', $id)
		->first())->valid;
	}

	public function getId($data) {
		return $this->select('id')
		->where('username', $data['username'])
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
}
