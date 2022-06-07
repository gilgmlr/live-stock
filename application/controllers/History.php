<?php

class History extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_CRUD');
    }

    public function index()
    {
        // $data['jumlahWarehouse'] = $this->M_Dashboard->countRowsWarehouse();
        $data['history'] = $this->M_CRUD->get_data_sort('history', 'id', 'desc')->result();
        $data['judul'] = 'History';

        $this->load->view('template/header', $data);
        $this->load->view('history/index', $data);
    }
}
