<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PencairanReward extends Migration
{
	public function up()
	{
		$this->forge->addField('id');
		$this->forge->addForeignKey('id_mitra', 'mitra', 'id');
		$this->forge->addForeignKey('id_reward', 'reward', 'id');
		$this->forge->addField([
			'point' => [
				'type' => 'INT',
				'unsigned' => true,
			],
			'jenis' => [
				'type' => 'ENUM',
				'constraint' => ['tunai', 'barang'],
			],
		]);
		$this->forge->createTable('pencairan_reward');
	}
	
	public function down()
	{
		$this->forge->dropTable('pencairan_reward');
	}
}
