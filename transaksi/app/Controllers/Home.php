<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function simpan() {

        $db=db_connect();
        $data = $this->request->getPost();
        $db->table('transaksi')->insert($data);
        return redirect()->to('home/tampil');
    }

    public function tampil() {

        $db=db_connect();
        $query=$db->query("SELECT * FROM transaksi");
        $data ['lat'] =$query->getResultArray();
        return view('cetak',$data);
    }
}
