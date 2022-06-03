<?php

class Received extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Received');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $data['jumlahWarehouse'] = $this->M_Dashboard->countRowsWarehouse();
        $data['judul'] = 'Received';

        $this->load->view('template/header', $data);
        $this->load->view('received/index', $data);
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
        $this->form_validation->set_rules('location', 'Location', 'required');

        if($this->form_validation->run() == false) {
			redirect('received');
		} else {
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
        } // var_dump($data);die;
    }

    public function view_good_received()
    {
        $data['judul'] = 'Received/GR';
        $data['uom'] = $this->M_Received->getUoM()->result();
        $data['items'] = $this->M_Received->getItems()->result();

        $this->load->view('template/header', $data);
        $this->load->view('received/good_received');
    }
    public function view_warehouse_transfer_in()
    {
        $data['judul'] = 'Received/WT';
        $data['uom'] = $this->M_Received->getUoM()->result();
        $data['items'] = $this->M_Received->getItems()->result();

        $this->load->view('template/header', $data);
        $this->load->view('received/warehouse_transfer_in');
    }
    public function view_adjusment()
    {
        $data['judul'] = 'Received/Adjusment';
        $data['uom'] = $this->M_Received->getUoM()->result();
        $data['items'] = $this->M_Received->getItems()->result();

        $this->load->view('template/header', $data);
        $this->load->view('received/adjusment');
    }




}