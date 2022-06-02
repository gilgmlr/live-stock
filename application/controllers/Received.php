<?php

class Received extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Received');
    }

    public function index()
    {
        // $data['jumlahWarehouse'] = $this->M_Dashboard->countRowsWarehouse();
        // $data['warehouse'] = $this->M_Dashboard->getDataWarehouse()->result();
        $data['judul'] = 'Received';

        $this->load->view('template/header', $data);
        $this->load->view('received/index', $data);
    }

    public function addItems()
    {
        $data = array(
            'item_code' => $this->input->post('item_code'),
            'name' => $this->input->post('name'),
            'qty' => $this->input->post('qty'),
        );

        $this->M_Received->add($data);
        redirect('received');
    }
}