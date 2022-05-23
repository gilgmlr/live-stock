<?php

class Stock extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Stock');
    }

    public function index()
    {
        $data['jumlahstock'] = $this->M_Stock->countRowsStock();
        $data['stock'] = $this->M_Stock->getDataStock()->result();
        $data['judul'] = 'Stock';

        $this->load->view('template/header');
        $this->load->view('stock/index', $data);
    }
}
