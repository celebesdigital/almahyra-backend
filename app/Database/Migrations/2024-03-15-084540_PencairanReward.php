<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PencairanReward extends Migration
{
	public function up()
	{
		$this->forge->addField('id');
		$this->forge->addField([
			'id_mitra' => [
				'type' => 'INT',
				'unsigned' => true,
			],
			'id_reward' => [
				'type' => 'INT',
				'unsigned' => true,
			],
			'point' => [
				'type' => 'INT',
				'unsigned' => true,
			],
			'jenis' => [
				'type' => 'ENUM',
				'constraint' => ['tunai', 'barang'],
			],
			'jumlah_tunai' => [
				'type'=> 'INT',
				'null' => true,
			]
		]);
		$this->forge->createTable('pencairan_reward');
	}

	public function down()
	{
		$this->forge->dropTable('pencairan_reward');
	}
}
