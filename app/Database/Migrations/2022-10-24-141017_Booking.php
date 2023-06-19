<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Booking extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_booking' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'kontak' => [
                'type' => 'TEXT',
            ],
            'nama_cafe' => [
                'type' => 'TEXT',
            ],
            'deskripsi' => [
                'type' => 'TEXT',
            ],
            'id_data' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
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
        $this->forge->addKey('id_booking', true);
        $this->forge->addForeignKey('id_data', 'data', 'id' );
        $this->forge->createTable('booking');
    }

    public function down()
    {
        //
    }
}
