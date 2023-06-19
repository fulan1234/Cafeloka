<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Data;
use App\Models\Daerah;
use App\Models\Booking;
use App\Models\UsersModel;

class DataController extends BaseController
{

    // protected $helpers = ['custom'];

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
        $_data = [
            'jumlahBooking' => $jumlah_booking,
            'jumlahCafe' => $jumlah_kafe,
            'jumlahDaerah' => $jumlah_daerah,
            'jumlahUser' => $jumlah_user,
            'data' => $this->booking->getAll()
        ];

        return view('vw_home', $_data);
    }

    public function create()
    {
        $_data = [
            'data' => $this->daerah->findAll()
        ];
        return view('data/create',$_data);
    }

    public function store()
    {

        if (!$this->validate([
            'nama_cafe' => 'required',
            'manager' => 'required',
            'keterangan' => 'required',
            'alamat' => 'required',
            'id_daerah' => 'required'
        ])) {
            return redirect()->to('/create');
        }
        // $data = $this->request->getPost();
        // $this->data->insert($data);
        // // $dataModel->save($_data);

        // return redirect()->to('/data');

        $dataBerkas = $this->request->getFile('foto');
		$fileName = $dataBerkas->getRandomName();
		$this->data->insert([
            'nama_cafe' => $this->request->getPost('nama_cafe'),
            'manager' => $this->request->getPost('manager'),
            'keterangan' => $this->request->getPost('keterangan'),
			'foto' => $fileName,
			'alamat' => $this->request->getPost('alamat'),
            'id_daerah' => $this->request->getPost('id_daerah')
		]);
		$dataBerkas->move('gambarCafe/', $fileName);
        return redirect()->to('/data');
    }

    public function view()
    {
        $jumlah_booking = $this->booking->countAllResults();
        $jumlah_kafe = $this->data->countAllResults();
        $jumlah_daerah = $this->daerah->countAllResults();
        $jumlah_user = $this->user->countAllResults();        
        $_data = [
            'data' => $this->data->getAll(),
        ];
        return view('Data/data', $_data);
    }

    public function delete($id)
    {
        $dataModel = new Data();
        $dataModel->delete($id);

        return redirect()->to('/data');
    }

    public function edit($id)
    {
        $data = $this->data->find($id);

        if(is_object($data)){
            $_data['data'] = $data;
            $_data['daerah'] = $this->daerah->findAll();
            return view('data/edit',$_data);
        }
    }

    public function update($id)
    {
        // $_data = $this->request->getPost();
        // $this->data->update($id, $_data);

        $dataBerkas = $this->request->getFile('foto');

        if($dataBerkas->getError() == 4){
            $fileName = $this->request->getPost('gambarLama');
        }else{
            $fileName = $dataBerkas->getRandomName();

            $dataBerkas->move(WRITEPATH . '../public/gambarCafe/', $fileName);

            unlink(WRITEPATH . '../public/gambarCafe/'.$this->request->getPost('gambarLama'));
        }
        
		$this->data->update($id,[
            'nama_cafe' => $this->request->getPost('fakhri'),
            'manager' => $this->request->getPost('manager'),
            'keterangan' => $this->request->getPost('keterangan'),
			'foto' => $fileName,
			'alamat' => $this->request->getPost('alamat'),
            'id_daerah' => $this->request->getPost('id_daerah')
		]);

            // $dataModel = new Booking();
            // $_data = [
            //     'nama' => $this->request->getPost('nama'),
            //     'alamat' => $this->request->getPost('alamat'),
            //     'kontak' => $this->request->getPost('kontak'),
            //     'deskripsi' => $this->request->getPost('deskripsi'),
            // ]; 
    
        return redirect()->to('/data');
    }

    public function cabang()
    {
        $_data = [
            'daerah' => $this->daerah->findAll()
        ];
        return view('/Data/cabang', $_data);
    }
}
