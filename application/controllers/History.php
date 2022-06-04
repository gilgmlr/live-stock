<?php

class History extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_History');
    }

    public function index()
    {
        // $data['jumlahWarehouse'] = $this->M_Dashboard->countRowsWarehouse();
        $data['history'] = $this->M_History->getHistory()->result();
        $data['judul'] = 'History';

        $this->load->view('template/header', $data);
        $this->load->view('history/index', $data);
    }
}
