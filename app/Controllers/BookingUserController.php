<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Booking;
use App\Models\Data;
use App\Models\Meja;
use CodeIgniter\Entity\Cast\IntegerCast;

class BookingUserController extends BaseController
{

        function __construct()
        {
            $this->booking = new Booking();
            $this->data = new Data();
            $this->meja = new Meja();
        }
    
        public function index()
        {
            // $dataModel = new Booking();
            // $data = $dataModel->getAll();
    
            // $_data = [
            //     'dbooking' => $this->booking->findAll()
            // ];
            // dd($this->booking->getAll());
            return view('booking/booking');
        }
    
        public function createBooking()
        {
            $_data = [
                'data' => $this->data->findAll(),
                'meja' => $this->meja->findAll(),
            ];
            return view('booking/create', $_data);
        }
    
        public function storeBooking()
        {
            if (!$this->validate([
                'nama' => 'required',
                'alamat' => 'required',
                'kontak' => 'required',
                'deskripsi' => 'required',
                'id_data' => 'required'
            ])) {
                return redirect()->to('/createBooking');
            }

            $meja = $this->meja;


            // $dataModel =  $this->booking;
            // $_data = [
            //     'nama' => $this->request->getPost('nama'),
            //     'alamat' => $this->request->getPost('alamat'),
            //     'kontak' => $this->request->getPost('kontak'),
            //     'id_data' => $this->request->getPost('id_data'),
            //     'id_meja' => $this->request->getPost('id_meja'),
            //     'deskripsi' => $this->request->getPost('deskripsi'),
            //     'username' => $this->request->getPost('username'),
            // ];

            // $dataKursi = $this->request->getPost('id_data');
            // $dataMeja = $this->request->getPost('id_meja');
            // $this->decreaseBook($dataKursi, $dataMeja);

            // $builder = $this->meja->select('SELECT SUM(meja.jumlah_kursi) as kursi 
            // FROM meja 
            // INNER JOIN booking ON booking.id_meja=meja.id_meja');

            $builder = $this->meja;
            $builder->selectSum("meja.jumlah_kursi_pesanan")->join("booking", "booking.id_meja = meja.id_meja");
            $query =  $builder->get();

            $dataCafe = $this->data->where('id', $this->request->getPost('id_data'))->first();
            // $_data = [
            //     'jumlah_kursi' =>  $dataCafe->jumlah_kursi - 1
            // ];
        

    
            $data = $this->request->getPost();
            $this->booking->insert($data);
            // $this->data->update($_data);
            // $dataModel->insert($_data);
    
            return redirect()->to('booking');
        }

        // public function decreaseBook($idBuku, $buku)
        // {
        //     $modelBuku = new modelBuku();
    
        //     $data = [
        //         'jumlah' => $buku['jumlah'] - 1
        //     ];
    
        //     $modelBuku->update($idBuku, $data);
        // }
        
    
        public function view()
        {
            $_data = [
                'dbooking' => $this->booking->getAll()
            ];
            // dd($this->booking->getAll());
            return view('booking/booking', $_data);
        }
    
        public function deleteBooking($id)
        {
            $dataModel = new Booking();
            $dataModel->delete($id);
    
            return redirect()->to('/booking');
        }
    
        public function editBooking($id)
        {
            // $dataModel = new Booking();
            // $data = $dataModel->find($id);
    
            // $_data = [
            //     'data' => $data
            // ];
            $booking = $this->booking->find($id);
    
            $data['booking'] = $booking;
            $data['data'] = $this->data->findAll();
    
            return view('booking/edit', $data);
        }
    
        public function updateBooking($id)
        {
    
            if (!$this->validate([
                'nama' => 'required',
                'alamat' => 'required',
                'kontak' => 'required',
                'deskripsi' => 'required',
            ])) {
                return redirect()->to('booking/edit/' . $id);
            }
            // $dataModel = new Booking();
            // $_data = [
            //     'nama' => $this->request->getPost('nama'),
            //     'alamat' => $this->request->getPost('alamat'),
            //     'kontak' => $this->request->getPost('kontak'),
            //     'deskripsi' => $this->request->getPost('deskripsi'),
            // ]; 
    
            $_data = $this->request->getPost();
            $this->booking->update($id, $_data);
            return redirect()->to('/booking');
        }

}