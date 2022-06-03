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
        //$data['total_items'] = $this->M_Dashboard->get_total_items()->row_array();
        $data['judul'] = 'Dashboard';

        $this->load->view('template/header', $data);
        $this->load->view('dashboard/index', $data);
        // var_dump($data);die;
    }
}
