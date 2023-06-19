<?php

namespace App\Models;

use CodeIgniter\Model;

class Data extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'data';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_cafe','alamat','manager','id_daerah','keterangan','foto'];
    protected $returnType       = 'object';

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    function getAll(){
        $builder = $this->db->table('data');
        $builder->join('daerah','daerah.id_daerah = data.id_daerah');
        $query = $builder->get();
        return $query->getResult();
    }

}
