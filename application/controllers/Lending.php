<?php

class Lending extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_CRUD');
    }

    public function index()
    {
        // $data['jumlahWarehouse'] = $this->M_Dashboard->countRowsWarehouse();
        $data['lending'] = $this->M_CRUD->get_data('lending')->result();
        $data['judul'] = 'Lending';

        $this->load->view('template/header', $data);
        $this->load->view('lending/index', $data);
    }
}