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
        $data['uom'] = $this->M_Received->getUoM()->result();
        $data['judul'] = 'Received';

        $this->load->view('template/header', $data);
        $this->load->view('received/index', $data);
    }

    public function addReceived()
    {
        $data = array(
            'received_code' => $this->input->post('received_code'),
            'arrival_date' => $this->input->post('arrival_date'),
            'po_number' => $this->input->post('po_number'),
            'vendor_name' => $this->input->post('vendor_name'),
            'item_code' => $this->input->post('item_code'),
            'qty' => $this->input->post('qty'),
            'uom' => $this->input->post('uom'),
            'location' => $this->input->post('location'),
        );

        $this->M_Received->add($data);
        redirect('received');

        // var_dump($data);die;
    }
}