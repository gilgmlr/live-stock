<?php

class Inventory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Inventory');
    }

    public function index()
    {
        $data['jumlahstock'] = $this->M_Inventory->countRowsStock();
        $data['stock'] = $this->M_Inventory->getDataStock()->result();
        $data['judul'] = 'Inventory';

        $this->load->view('template/header', $data);
        $this->load->view('inventory/index', $data);
    }
}