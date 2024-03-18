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
			],
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => 30,
			],
			'ktp' => [
				'type' => 'INT',
				'constraint' => 16,
			],
			'nomor' => [
				'type' => 'INT',
				'constraint' => 13,
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
			'alamat' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'kode_referal' => [
				'type' => 'INT',
				'constraint' => 15,
				'null' => true,
			],
			'point' => [
				'type' => 'INT',
				'default' => 0,
			],
			'stok' => [
				'type' => 'INT',
				'default'=> 6,
			],
			'status' => [
				'type' => 'ENUM',
				'constraint' => ['ao', 'stokis', 'distributor', 'agen', 'reseller'],
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			]
		]);

		$this->forge->createTable('mitra');
	}

	public function down()
	{
		$this->forge->dropTable('mitra');

	}
}
