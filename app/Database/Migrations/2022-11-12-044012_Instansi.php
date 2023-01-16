<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Instansi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode_instansi' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_instansi' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'alamat' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ]
        ]);
        $this->forge->addKey('kode_instansi', true);
        $this->forge->createTable('instansi', true);
    }

    public function down()
    {
        $this->forge->dropTable('instansi');
    }
}

