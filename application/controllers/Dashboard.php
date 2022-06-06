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
        $data['warehouse'] = $this->M_Dashboard->getDataWarehouse()->result();
        $data['total_items'] = $this->M_Dashboard->get_total_items();
        $data['total_received'] = $this->M_Dashboard->get_total_received();
        $data['total_issue'] = $this->M_Dashboard->get_total_issue();
        $data['total_lending'] = $this->M_Dashboard->get_total_lending();
        $data['judul'] = 'Dashboard';

        $this->load->view('template/header', $data);
        $this->load->view('dashboard/index', $data);
        // var_dump($data);die;
    }
}
