<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mutasi extends Migration
{
	public function up()
	{
		$this->forge->addField('id');
		$this->forge->addField([
			'id_pengirim' => [
				'type' => 'INT',
				'unsigned' => true,
			],
			'id_pengerima' => [
				'type' => 'INT',
				'unsigned' => true,
				'null' => true,
			],
			'jumlah' => [
				'type' => 'INT',
				'unsigned' => true,
			],
			'jenis_mutasi' => [
				'type' => 'ENUM',
				'constraint' => ['pusat ke ao', 'mitra ke mitra', 'mitra ke seller']
			],
			'status' => [
				'type' => 'ENUM',
				'constraint' => ['order', 'proses', 'kirim', 'terima'],
				'default' => 'order',
			],
			'keterangan' => [
				'type' => 'VARCHAR',
				'null' => true,
				'constraint' => 255,
			],
			'tanggal_order' => [
				'type' => 'DATETIME',
				'default' => date('Y-m-d H:i:s'),
			],
			'tanggal_kirim' => [
				'type' => 'DATETIME',
				'null' => true,
			],
			'tanggal_terima' => [
				'type' => 'DATETIME',
				'null' => true,
			],
		]);
		$this->forge->createTable('mutasi');
	}
	
	public function down()
	{
		$this->forge->dropTable('mutasi');
	}
}
