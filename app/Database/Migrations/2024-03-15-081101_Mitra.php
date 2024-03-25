<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mitra extends Migration
{
	public function up()
	{
		$this->forge->addField('id');
		$this->forge->addField([
			'id_upline' => [
				'type' => 'INT',
				'unsigned' => true,
				'null'=> true,
			],
			'nomor_id'=> [
				'type'=> 'VARCHAR',
				'constraint' => 255,
			],
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => 30,
			],
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'ktp' => [
				'type' => 'BIGINT',
				'constraint' => 16,
				'unsigned' => true,
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'facebook' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'instagram' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'tiktok' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'nomor' => [
				'type' => 'MEDIUMINT',
				'constraint' => 13,
				'unsigned' => true,
			],
			'alamat' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'provinsi' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'kabupaten' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'kecamatan' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'kode_referal' => [
				'type' => 'INT',
				'constraint' => 15,
				'null' => true,
				'unsigned' => true,
			],
			'point' => [
				'type' => 'INT',
				'default' => 0,
				'unsigned' => true,
			],
			'stok' => [
				'type' => 'INT',
				'default' => 6,
				'unsigned' => true,
			],
			'level' => [
				'type' => 'ENUM',
				'constraint' => ['kantor', 'ao', 'stokis', 'distributor', 'agen', 'reseller'],
			],
			'status' => [
				'type' => 'ENUM',
				'constraint' => ['tidak valid', 'valid'],
				'default' => 'tidak valid',
			],
		]);

		$this->forge->createTable('mitra');
	}

	public function down()
	{
		$this->forge->dropTable('mitra');

	}
}
