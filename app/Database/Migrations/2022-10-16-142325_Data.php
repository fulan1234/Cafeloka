<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Data extends Migration
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
            'nama_cafe' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'keterangan' => [
                'type' => 'TEXT',
            ],
            'id_daerah' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_daerah', 'daerah', 'id_daerah' );
        $this->forge->createTable('data');
    }

    public function down()
    {
        //
    }
}
