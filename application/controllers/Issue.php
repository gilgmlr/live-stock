<?php

class Issue extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Issue');
    }

    public function index()
    {
        // $data['jumlahWarehouse'] = $this->M_Dashboard->countRowsWarehouse();
        // $data['warehouse'] = $this->M_Dashboard->getDataWarehouse()->result();
        $data['judul'] = 'Issue';

        $this->load->view('template/header', $data);
        $this->load->view('Issue/index', $data);
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

        $this->M_Issue->tambahData($data);
    }
    public function view_material_issue()
    {
        $data['judul'] = 'Issue/MI';

        $this->load->view('template/header', $data);
        $this->load->view('Issue/material_issue');
    }
    public function view_warehouse_transfer_out()
    {
        $data['judul'] = 'Issue/WT out';

        $this->load->view('template/header', $data);
        $this->load->view('Issue/warehouse_transfer_out');
    }
    public function view_work_order()
    {
        $data['judul'] = 'Issue/WO';

        $this->load->view('template/header', $data);
        $this->load->view('Issue/work_order');
    }

    public function view_lending()
    {
        $data['judul'] = 'Issue/Lending';

        $this->load->view('template/header', $data);
        $this->load->view('Issue/lending');
    }
}