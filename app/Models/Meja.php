<?php

namespace App\Models;

use CodeIgniter\Model;

class Meja extends Model
{
    protected $table            = 'meja';
    protected $primaryKey       = 'id_meja';
    protected $allowedFields    = ['jenis_meja','jumlah_kursi'];
    protected $returnType       = 'object';
    protected $useTimestamps    = true;
    protected $useSoftDeletes   = false;

    //     // Dates
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
}
