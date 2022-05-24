<?php

class Barang_Keluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        //$this->load->model('M_Stock');
    }

    public function index()
    {
        // $data['jumlahWarehouse'] = $this->M_Dashboard->countRowsWarehouse();
        // $data['warehouse'] = $this->M_Dashboard->getDataWarehouse()->result();
        $data['judul'] = 'Barang_Keluar';

        $this->load->view('template/header', $data);
        $this->load->view('barang_keluar/index', $data);
    }
}
