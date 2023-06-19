<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Data extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_cafe' => '2017051076',
                'keterangan'    => 'Pecinta kuliner di Lampung kini tidak sulit untuk mencari makanan kelas bintang lima. Lieps Cafe menjawab itu semua dengan menyediakan berbagai macam makanan dari seluruh dunia. ditempat ini pecinta kuliner akan dimanjakan dengan berbagai makanan khas barat hingga makanan negara-negara timur.
                ',
                'created_at'    => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'nama_cafe' => '2017051057',
                'keterangan'    => 'The Magnolia Floral Café adalah kafe sekaligus toko bunga artificial. Karena itu ruang dalam kafe dipenuhi oleh bermacam bunga. Seperti memasuki ruang resepsi pernikahan, dekorasi bunga di mana-mana. Sebuah kafe yang cantik, segar dan berseri-seri. Sangat menyenangkan untuk dipandang lama-lama.',
                'created_at'    => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'nama_cafe' => '2017051099',
                'keterangan'    => 'Janji Jiwa menyajikan pilihan kopi lokal Indonesia dengan citra rasa klasik yang mengutamakan kualitas. Dengan value “A Cup for the Farmers, A Cup for the Partners, and A Cup for the People.',
                'created_at'    => Time::now(),
                'updated_at' => Time::now()
            ]
        ];

        // // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        foreach($data as $_data){
            $this->db->table('data')->insert($_data);
        }
    }
}
