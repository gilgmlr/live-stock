<?php

class Issue extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_CRUD');
    }

    public function index()
    {
        // $data['jumlahWarehouse'] = $this->M_Dashboard->countRowsWarehouse();
        // $data['warehouse'] = $this->M_Dashboard->getDataWarehouse()->result();
        $data['judul'] = 'Issue';

        $this->load->view('template/header', $data);
        $this->load->view('Issue/index', $data);
    }

    public function addMiCode()
    {
        $data = array(
            'doc_no' => $this->input->post('mi_code')
        );

        $this->M_CRUD->input_data('mi_no', $data);
        $this->session->set_flashdata('flash', 'Number '.$this->input->post('mi_code').' Saved!');
        redirect("issue/view_material_issue");
    }

    public function addMI()
    {
        $data = array(
            'doc_no' => $this->input->post('mi_code'),
            'entri_date' => $this->input->post('entri_date'),
            'posting_date' => $this->input->post('post_date'),
            'applicant' => $this->input->post('applicant'),
            'dept_no' => $this->input->post('dept_no'),
            'project_no' => $this->input->post('project_no'),
            'memo' => $this->input->post('memo'),
            'item_code' => $this->input->post('item_code'),
            'warehouse_code' => $this->input->post('warehouse_code'),
            'uom_code' => $this->input->post('uom_code'),
            'transaction_qty' => $this->input->post('transaction_qty'),
            'reference' => $this->input->post('reference'),
            'reason_code' => $this->input->post('reason_code'),
            'description' => $this->input->post('description'),
            'created_by' => $this->input->post('create_by'),
        );

        $this->M_CRUD->input_data('material_issue', $data);


        //cari items
        $item_code = $this->db->get_where('items', ['item_code' => $this->input->post('item_code')])->result_array();

        $this->session->set_flashdata('flash', 'Data Material Issue Saved!');

        // var_dump($item_code); die;
        redirect("issue");
    }

    public function view_material_issue()
    {
        $data['judul'] = 'Issue/MI';
        $data['mi_code'] = $this->M_CRUD->get_data('mi_no')->result();
        $data['items'] = $this->M_CRUD->get_data('items')->result();
        $data['warehouse'] = $this->M_CRUD->get_data('warehouse')->result();
        $data['uom'] = $this->M_CRUD->get_data('uom')->result();

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