<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_posts_table extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'title' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'null' => FALSE
                        ),
                        'post' => array(
                                'type' => 'TEXT',
                                'null' => FALSE,
                        ),
                        'cover' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '255',
                        ),
                        'created_at' => array(
                            'type' => 'DATETIME',
                            'null' => FALSE,
                        ),
                        'updated_at' => array(
                            'type' => 'DATETIME',
                            'null' => TRUE,
                        ),
                        'deleted_at' => array(
                            'type' => 'DATETIME',
                            'null' => TRUE,
                        ),

                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('posts');
        }

        public function down()
        {
                $this->dbforge->drop_table('posts');
        }
}
