<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SuratKeluar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [

                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tanggal_surat' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'perihal' => [
                'type' => 'TEXT',
            ],
            'file' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            
            'kode_instansi' => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'id_admin' => [
                'type'       => 'INT',
                'constraint' => '11',
            ],

            'created_at' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'update_at' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('keluar');
    }

    public function down()
    {
        $this->forge->dropTable('keluar');
    }
}
