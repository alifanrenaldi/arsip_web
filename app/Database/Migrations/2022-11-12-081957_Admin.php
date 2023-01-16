<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
public function up()
    {
        $this->forge->addField([
            'id_admin' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username_admin' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'password_admin' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'Nama_admin' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ]
        ]);
        $this->forge->addKey('id_admin', true);
        $this->forge->createTable('admin', true);
    }

    public function down()
    {
        $this->forge->dropTable('admin');
    }

}   