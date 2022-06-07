<?php

class Received extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Received');
        $this->load->model('M_History');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $data['jumlahWarehouse'] = $this->M_Dashboard->countRowsWarehouse();
        $data['judul'] = 'Received';

        $this->load->view('template/header', $data);
        $this->load->view('received/index', $data);
    }

    private function addHistory($data) {
        $history = array(
            'date' => date("Y-m-d"),
            'doc_num' => $this->input->post('received_code'),
            'description' => $this->input->post('desc'),
        );
    }

    public function addReceived()
    {
        $this->form_validation->set_rules('received_code', 'Received_Code', 'required');
        $this->form_validation->set_rules('arrival_date', 'Arrival_Date', 'required');
        $this->form_validation->set_rules('po_number', 'PO_Number', 'required');
        $this->form_validation->set_rules('vendor_name', 'Vendor_Name', 'required');
        $this->form_validation->set_rules('item_code', 'Item_Code', 'required');
        $this->form_validation->set_rules('qty', 'Qty', 'required');
        $this->form_validation->set_rules('uom', 'UoM', 'required');
        $this->form_validation->set_rules('warehouse_code', 'Warehouse_Code', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');
        // $this->form_validation->set_rules('desc', 'Desc', 'required');

        if($this->form_validation->run() == false) {
			redirect('dashboard');
		} else {
            $data = array(
                'received_code' => $this->input->post('received_code'),
                'arrival_date' => $this->input->post('arrival_date'),
                'po_number' => $this->input->post('po_number'),
                'vendor_name' => $this->input->post('vendor_name'),
                'item_code' => $this->input->post('item_code'),
                'qty' => $this->input->post('qty'),
                'uom' => $this->input->post('uom'),
                'warehouse_code' => $this->input->post('warehouse_code'),
                'location' => $this->input->post('location'),
            );

            $history = array(
                'date' => date("Y-m-d"),
                'doc_num' => $this->input->post('received_code'),
                'description' => $this->input->post('desc'),
            );
    
            $this->M_Received->add($data);
            $this->M_History->add($history);

            // if ($this->input->post('desc') == "Lending") {
            //     $lending = array(
            //         'lending_code' => $this->input->post('received_code'),
            //         'item_code' => $this->input->post('item_code'),
            //         'dept_code' => $this->input->post('dept_code'),
            //         'lending_date' => $this->input->post('lending_date'),
            //         'return_date' => "",
            //         'status' => "close"
            //     );
            //     $this->M_Lending->add($lending);
            // }


            redirect('received');
        } // var_dump($data);die;
    }

    public function view_good_received()
    {
        $data['judul'] = 'Received/GR';
        $data['uom'] = $this->M_Received->getUoM()->result();
        $data['items'] = $this->M_Received->getItems()->result();
        $data['warehouse'] = $this->M_Received->getWarehouse()->result();

        $this->load->view('template/header', $data);
        $this->load->view('received/good_received');
    }

    public function view_warehouse_transfer_in()
    {
        $data['judul'] = 'Received/WT';
        $data['uom'] = $this->M_Received->getUoM()->result();
        $data['items'] = $this->M_Received->getItems()->result();
        $data['warehouse'] = $this->M_Received->getWarehouse()->result();

        $this->load->view('template/header', $data);
        $this->load->view('received/warehouse_transfer_in');
    }

    public function view_adjusment()
    {
        $data['judul'] = 'Received/Adjusment';
        $data['uom'] = $this->M_Received->getUoM()->result();
        $data['items'] = $this->M_Received->getItems()->result();
        $data['warehouse'] = $this->M_Received->getWarehouse()->result();

        $this->load->view('template/header', $data);
        $this->load->view('received/adjusment');
    }

    public function view_lending()
    {
        $data['judul'] = 'Received/Lending';
        $data['uom'] = $this->M_Received->getUoM()->result();
        $data['items'] = $this->M_Received->getItems()->result();
        $data['warehouse'] = $this->M_Received->getWarehouse()->result();

        $this->load->view('template/header', $data);
        $this->load->view('received/lending');
    }


}