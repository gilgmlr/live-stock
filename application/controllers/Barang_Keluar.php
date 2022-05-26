<?php

class Barang_Keluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Keluar');
    }

    public function index()
    {
        // $data['jumlahWarehouse'] = $this->M_Dashboard->countRowsWarehouse();
        // $data['warehouse'] = $this->M_Dashboard->getDataWarehouse()->result();
        $data['judul'] = 'Barang Keluar';

        $this->load->view('template/header', $data);
        $this->load->view('barang_keluar/index', $data);
    }

    public function tambahBarangKeluar()
    {
        $data = array(
            'item_code' => $this->input->post('item_code'),
            'name' => $this->input->post('item_desc'),
            'date' => $this->input->post('date'),
            'requestor' => $this->input->post('requestor'),
            'dept_requestor' => $this->input->post('dept_requestor'),
            'section_requestor' => $this->input->post('section_requestor'),
            'activities_desc' => $this->input->post('activities_desc'),
            'request_qty' => $this->input->post('request_qty'),
            'issued_qty' => $this->input->post('issued_qty'),
            'uom' => $this->input->post('uom'),
            'reason_code' => $this->input->post('reason_code'),
            'cost_center' => $this->input->post('cost_center'),
            'request_by' => $this->input->post('request_by'),
            'approved_by' => $this->input->post('approved_by'),
            'issued_by' => $this->input->post('issued_by'),
            'received_by' => $this->input->post('receive_by'),
        );

        $this->M_Keluar->tambahData($data);
    }
}
