<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Reward extends Migration
{
	public function up()
	{
		$this->forge->addField('id');
		$this->forge->addField([
			'name' => [
				'type' => 'VARCHAR',
			],
			'point' => [
				'type' => 'INT',
				'unsigned' => true,
			],
		]);
		$this->forge->createTable('reward');
	}

	public function down()
	{
		$this->forge->dropTable('reward');
	}
}
