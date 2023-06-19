<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Daerah;

class DaerahController extends BaseController
{
    function __construct()
    {
        $this->daerah = new Daerah();
    }

    // public function index()
    // {
    //     $daerah = $this->daerah->findAll();

    //     $_daerah = [
    //         'daerah' => $daerah
    //     ];

    //     return view('vw_home', $_daerah);
    // }

    public function create()
    {
        $_daerah = [
            'daerah' => $this->daerah->findAll()
        ];
        return view('admin/tambahdaerahAdmin',$_daerah);
    }

    public function store()
    {

        if (!$this->validate([
            'nama_daerah' => 'required',
        ])) {
            return redirect()->to('/create');
        }
        // $daerah = $this->request->getPost();
        // $this->daerah->insert($daerah);
        // // $daerahModel->save($_daerah);

        // return redirect()->to('/daerah');

        $daerahBerkas = $this->request->getFile('gambar');
		$fileName = $daerahBerkas->getRandomName();
		$this->daerah->insert([
            'nama_daerah' => $this->request->getPost('nama_daerah'),
			'gambar' => $fileName,
		]);
		$daerahBerkas->move('gambarDaerah/', $fileName);
        
        return redirect()->to('/bookingAdmin');
    }

    public function view()
    {
        $_daerah = [
            'daerah' => $this->daerah->findAll()
        ];
        return view('daerah/daerah', $_daerah);
    }

    public function delete($id)
    {
        $daerahModel = new daerah();
        $daerahModel->delete($id);

        return redirect()->to('admin');
    }

    public function edit($id)
    {
        $daerah = $this->daerah->find($id);

        if(is_object($daerah)){
            $_daerah['daerah'] = $daerah;
            // $_daerah['daerah'] = $this->daerah->findAll();
            return view('admin/editdaerahAdmin',$_daerah);
        }
    }

    public function update($id)
    {
        // $_daerah = $this->request->getPost();
        // $this->daerah->update($id, $_daerah);

        $dataBerkas = $this->request->getFile('gambar');

        if($dataBerkas->getError() == 4){
            $fileName = $this->request->getPost('gambarLama');
        }else{
            $fileName = $dataBerkas->getRandomName();

            $dataBerkas->move(WRITEPATH . '../public/gambarDaerah/', $fileName);

            unlink(WRITEPATH . '../public/gambarDaerah/'.$this->request->getPost('gambarLama'));
        }
        
		$this->daerah->update($id,[
            'nama_daerah' => $this->request->getPost('nama_daerah'),
			'gambar' => $fileName,
		]);
        return redirect()->to('/admin');
    }
}
