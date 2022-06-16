<?php

class Issue extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = 'Issue';

        $this->load->view('template/header', $data);
        $this->load->view('Issue/index', $data);
    }

    public function addMI()
    {
        $data = array(
            'doc_no' => $this->input->post('mi_code'),
            'entri_date' => $this->input->post('entri_date'),
            'posting_date' => $this->input->post('post_date'),
            'dept_no' => $this->input->post('dept_no'),
            'project_no' => $this->input->post('project_no'),
            'item_code' => $this->input->post('item_code'),
            'warehouse_code' => $this->input->post('warehouse_code'),
            'transaction_qty' => $this->input->post('transaction_qty'),
            'reference' => $this->input->post('reference'),
            'reason_code' => $this->input->post('reason_code'),
            'description' => $this->input->post('desc'),
            'created_by' => $this->input->post('created_by'),
        );

        $this->M_CRUD->input_data('material_issue', $data);


        //cari items
        $item = $this->db->get_where('inventory', ['item_code' => $this->input->post('item_code'), 'warehouse_code' => $this->input->post('warehouse_code')])->row_array();
        $data = array(
            'item_code' => $item['item_code'],
            'location' => $item['location'],
            'stocks' => $item['stocks'] - $this->input->post('transaction_qty'),
            'warehouse_code' => $item['warehouse_code'],
        );
        $this->M_CRUD->update_data('inventory', $data, ['item_code' => $item['item_code'], 'warehouse_code' => $item['warehouse_code']]);

        $history = array(
            'doc_date' => $this->input->post('entri_date'),
            'system_date' => $this->input->post('post_date'),
            'source_doc' => $this->input->post('mi_code'),
            'destination_doc' => $this->input->post('mi_code'),
            'item_code' => $this->input->post('item_code'),
            'qty' => $this->input->post('transaction_qty')*-1,
            'warehouse_code' => $this->input->post('warehouse_code'),
        );
        $this->M_CRUD->input_data('history_transaction', $history);

        $this->session->set_flashdata('flash', 'Data Material Issue Saved!');

        // var_dump($item); die;
        redirect("issue");
    }

    public function view_material_issue()
    {
        $data['judul'] = 'Issue/MI';
        $data['items'] = $this->M_CRUD->get_join('inventory', 'items', 'items.item_code = inventory.item_code')->result();
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
        $data['items'] = $this->M_CRUD->get_join('inventory', 'items', 'items.item_code = inventory.item_code')->result();
        $data['uom'] = $this->M_CRUD->get_data('uom')->result();

        $this->load->view('template/header', $data);
        $this->load->view('Issue/lending');
    }

    public function addLending()
    {
        $data = array(
            'lending_no' => $this->input->post('lending_no'),
            'lending_date' => $this->input->post('lending_date'),
            'item_code' => $this->input->post('item_code'),
            'lending_qty' => $this->input->post('lending_qty'),
            'borrower_name' => $this->input->post('borrower_name'),
            'dept_code' => $this->input->post('dept_code'),
            'lending_note' => $this->input->post('lending_date'),
            'return_note' => "",
            'return_qty' => "",
            'return_date' => "",
            'entered_nip' => $this->input->post('entered_nip'),
            'warehouse_code' => $this->input->post('warehouse_code'),
            'status' => 'open',
            
        );

        $this->M_CRUD->input_data('lending', $data);


        //cari items
        $item = $this->db->get_where('inventory', ['item_code' => $this->input->post('item_code'), 'warehouse_code' => $this->input->post('warehouse_code')])->row_array();
        $data = array(
            'item_code' => $item['item_code'],
            'location' => $item['location'],
            'stocks' => $item['stocks'] - $this->input->post('lending_qty'),
            'warehouse_code' => $item['warehouse_code'],
            'equipment' => $item['equipment'],
            'status' => $item['status'],
        );
        $this->M_CRUD->update_data('inventory', $data, ['item_code' => $item['item_code'], 'warehouse_code' => $item['warehouse_code']]);

        //add history
        date_default_timezone_set('Asia/Jakarta');
        $history = array(
            'date' => date("Y-m-d h:m:s A"),
            'doc_num' => $this->input->post('lending_no'),
            'description' => $this->input->post('desc'),
        );

        $this->M_CRUD->input_data('history', $history);

        $this->session->set_flashdata('flash', 'Data Lending Saved!');

        // var_dump($item); die;
        redirect("issue");
    }
}