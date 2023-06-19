<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Daerah extends Migration
{
    public function up()
    {
            $this->forge->addField([
                'id_daerah' => [
                    'type'           => 'INT',
                    'constraint'     => 5,
                    'unsigned'       => true,
                    'auto_increment' => true,
                ],
                'nama_daerah' => [
                    'type'       => 'VARCHAR',
                    'constraint' => '30',
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
            $this->forge->addKey('id_daerah', true);
            $this->forge->createTable('daerah');
    }

    public function down()
    {
        //
    }
}
