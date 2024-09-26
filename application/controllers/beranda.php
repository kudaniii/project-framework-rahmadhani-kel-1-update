<?php

class Beranda extends CI_Controller
{

public function index()
{
    $data['judul'] ='Halaman Beranda';
    $this->load->view('templates/header', $data); // Panggil header terlebih dahulu
    $this->load->view('Beranda/index', $data); // Kemudian panggil konten utama
    $this->load->view('templates/footer'); // Terakhir, panggil footer
}



}

?>