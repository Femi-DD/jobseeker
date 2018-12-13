<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Users extends CI_Migration {

   public function up() {
      $this->dbforge->add_field([
         'id' => [
            'type' => 'INT',
            'auto_increment' => true
         ],
         'name' => [
            'type' => 'VARCHAR',
            'constraint' => 100
         ],
         'email' => [
            'type' => 'VARCHAR',
            'constraint' => 100
			],
			'dob' => [
            'type' => 'datetime',
         ],
         'phone' => [
            'type' => 'VARCHAR',
            'constraint' => 20
         ],
         'state' => [
            'type' => 'VARCHAR',
            'constraint' => 50
         ],
         'church' => [
            'type' => 'VARCHAR',
            'constraint' => 100
         ],
         'gender' => [
            'type' => 'VARCHAR',
            'constraint' => 100
         ],
         'created_at' => [
            'type' => 'timestamp'
         ]
      ]);

      $this->dbforge->add_key('id', TRUE);
      $this->dbforge->create_table('users');
   }

   public function down() {
      $this->dbforge->drop_table('users');
   }
}
