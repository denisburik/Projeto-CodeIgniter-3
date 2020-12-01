<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_users_table extends CI_Migration {

	public function up(){
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => FAlSE,
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => 75,
				'null' => FAlSE,
			),
			'password' => array(
				'type' => 'CHAR',
				'constraint' => '32',
				'null' => FALSE,
			),
			'created_at' => array(
				'type' => 'datetime',
				'null' => FALSE,
			),
			'upadated_at' => array(
				'type' => 'datetime',
				'null' => TRUE,
			),
			'deleted_at' => array(
				'type' => 'datetime',
				'null' => TRUE
			),

		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('users');

		$this->db->query("ALTER TABLE users ADD UNIQUE (email)");
	}

	public function down()
	{
		$this->dbforge->drop_table('users');
	}
}