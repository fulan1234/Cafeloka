<?php

use CodeIgniter\Entity\Cast\IntegerCast;

    function countData($id, $jumlah_kursi){
        $db = \Config\Database::connect();
        // $coba = $db->table('meja')->selectSum('jumlah_kursi_paket');
        // return $coba;
        return $db->table('meja')->select("jumlah_kursi_paket")->where('id',1);
        // return $db->table('meja')->selectSum('jumlah_kursi_paket')->where("data.id" , $id);

        $meja = $db->table('meja');
        $data = $db->table('data');
        $booking = $db->table('booking');

        $kursiDipakai = 0;

        // foreach ($meja as $key => $value) {
        //     "<p value= '.$booking->id_booking.'>
        //     if($booking->id_meja == $meja->id_meja){
        //         '.$kursiDipakai += .'
        //     // }
        //     </p>";
        //}

        // foreach ($booking as $key => $value_booking) {
        //     foreach ($meja as $key => $value_meja) {
        //         if($value_meja->id_meja == $value_booking->id_meja){
        //             $kursiDipakai += $value_meja->jumlah_kursi;
        //         }
        //     }
        // }

        foreach ($booking as $key => $value_booking) {
            if($id == $value_booking->id_data){
                foreach ($meja as $key => $value_meja) {
                    if($booking->id_meja == $meja->id_meja){
                        $kursiDipakai += $value_meja->jumlah_kursi;
                    }
                }
            }
        }

        $data->jumlah_kursi = $data->jumlah_kursi - $kursiDipakai;

        return $kursiDipakai->get()->result();

    }
?>