<?php

namespace App\Models;

use CodeIgniter\Model;

class Daerah extends Model
{
    protected $table            = 'daerah';
    protected $primaryKey       = 'id_daerah';
    protected $allowedFields    = ['nama_daerah','gambar'];
    protected $returnType       = 'object';
    protected $useTimestamps    = true;
    protected $useSoftDeletes   = false;

    //     // Dates
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
}
