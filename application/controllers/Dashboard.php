<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Dashboard');
    }

    public function index()
    {
        $data['jumlahWarehouse'] = $this->M_Dashboard->countRowsWarehouse();
        $data['warehouse'] = $this->M_Dashboard->getDataWarehouse()->result();
        $data['judul'] = 'Dashboard';

        $this->load->view('dashboard/index', $data);
    }
}
