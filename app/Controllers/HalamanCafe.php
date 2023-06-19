<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Data;
use App\Models\Daerah;

class HalamanCafe extends BaseController
{
    function __construct()
    {
        $this->data = new Data();
        $this->daerah = new Daerah();
    }
    public function index($id)
    {
        $data = $this->data->find($id);

        $_data['data'] = $data;
        $_data['daerah'] = $this->daerah->findAll();

        return view('data/halaman', $_data);
        
    }
}
