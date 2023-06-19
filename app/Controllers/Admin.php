<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Data;
use App\Models\Daerah;
use App\Models\Booking;
use App\Models\UsersModel;

class Admin extends BaseController
{
    function __construct()
    {
        $this->daerah = new Daerah();
        $this->data = new Data();
        $this->booking = new Booking();
        $this->user = new UsersModel();
    }
    public function index()
    {
        $jumlah_booking = $this->booking->countAllResults();
        $jumlah_kafe = $this->data->countAllResults();
        $jumlah_daerah = $this->daerah->countAllResults();
        $jumlah_user = $this->user->countAllResults();        

        $_daerah = [
            'jumlahBooking' => $jumlah_booking,
            'jumlahCafe' => $jumlah_kafe,
            'jumlahDaerah' => $jumlah_daerah,
            'jumlahUser' => $jumlah_user,
            'daerah' => $this->daerah->findAll(),
            'data' => $this->booking->getAll()
        ];
        return view('layout/header')
		. view('admin/admin', $_daerah)
		. view('layout/footer');
    }

    public function create()
    {
        $_daerah = [
            'daerah' => $this->daerah->findAll()
        ];
        return view('layout/header')
		. view('admin/daerahAdmin', $_daerah)
		. view('layout/footer');
    }
}
