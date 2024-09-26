<?php

class Harga extends CI_Controller

{

    public function index()
    {

        $data['Harga'] = 'Daftar Harga';
        $this->load->view('templates/header', $data);
        $this->load->view('harga/index', $data);
        $this->load->view('templates/footer');
    }

}