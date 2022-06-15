<?php

class Received extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // $this->load->model('M_Received');
        // $this->load->model('M_History');
        $this->load->model('M_CRUD');
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
            $this->session->set_flashdata('flash', 'Data Input Not Valid in ' . $this->input->post('desc'));
			redirect('received');
		} else {
            $received = array(
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

            date_default_timezone_set('Asia/Jakarta');
            $history = array(
                'date' => date("Y-m-d h:m:s A"),
                'doc_num' => $this->input->post('received_code'),
                'description' => $this->input->post('desc'),
            );
    
            $this->M_CRUD->input_data('received', $received);
            $this->M_CRUD->input_data('history', $history);

            $item = $this->db->get_where('inventory', ['item_code' => $this->input->post('item_code'), 'warehouse_code' => $this->input->post('warehouse_code')])->row_array();
            // $wh = $this->db->get_where('inventory', ['warehouse_code' => $this->input->post('warehouse_code')])->row_array();

            if ($item != null){ //jika sudah ada di inventory
                $data = array(
                    'item_code' => $item['item_code'],
                    'location' => $item['location'],
                    'stocks' => $item['stocks'] + $this->input->post('qty'),
                    'uom_code' => $item['uom_code'],
                    'warehouse_code' => $item['warehouse_code'],
                    'equipment' => $this->input->post('equipment'),
                    'status' => $this->input->post('status'),
                );
                $this->M_CRUD->update_data('inventory', $data, ['item_code' => $item['item_code'], 'warehouse_code' => $item['warehouse_code']]);
            } else {
                $inventory = array(
                    'item_code' => $this->input->post('item_code'),
                    'location' => $this->input->post('location'),
                    'stocks' => $this->input->post('qty'),
                    'uom_code' => $this->input->post('uom'),
                    'warehouse_code' => $this->input->post('warehouse_code'),
                    'equipment' => $this->input->post('equipment'),
                    'status' => $this->input->post('status'),
                );
                $this->M_CRUD->input_data('inventory', $inventory);
            }


            $this->session->set_flashdata('flash', 'Data ' . $this->input->post('desc') . ' Saved!');
            redirect('received');
        } // var_dump($data);die;
    }

    public function view_good_received()
    {
        $data['judul'] = 'Received/GR';
        $data['uom'] = $this->M_CRUD->get_data('uom')->result();
        $data['items'] = $this->M_CRUD->get_data('items')->result();
        $data['warehouse'] = $this->M_CRUD->get_data('warehouse')->result();

        $this->load->view('template/header', $data);
        $this->load->view('received/good_received');
    }

    public function view_warehouse_transfer_in()
    {
        $data['judul'] = 'Received/WT';
        $data['uom'] = $this->M_CRUD->get_data('uom')->result();
        $data['items'] = $this->M_CRUD->get_data('items')->result();
        $data['warehouse'] = $this->M_CRUD->get_data('warehouse')->result();

        $this->load->view('template/header', $data);
        $this->load->view('received/warehouse_transfer_in');
    }

    public function view_adjusment()
    {
        $data['judul'] = 'Received/Adjusment';
        $data['uom'] = $this->M_CRUD->get_data('uom')->result();
        $data['items'] = $this->M_CRUD->get_data('items')->result();
        $data['warehouse'] = $this->M_CRUD->get_data('warehouse')->result();

        $this->load->view('template/header', $data);
        $this->load->view('received/adjusment');
    }

    public function view_lending()
    {
        $lending_no = $this->input->get('lending_no');
        
        //cari lending
        $data['lending'] = $this->db->get_where('lending', ['lending_no' => $lending_no])->row_array();

        $data['judul'] = 'Received/Lending';
        $data['uom'] = $this->M_CRUD->get_data('uom')->result();
        $data['items'] = $this->M_CRUD->get_data('items')->result();
        $data['warehouse'] = $this->M_CRUD->get_data('warehouse')->result();

        $this->load->view('template/header', $data);
        $this->load->view('received/lending');
    }

    public function returnLending()
    {        
        $lending = array(
            'lending_no' => $this->input->post('lending_no'),
            'lending_date' => $this->input->post('lending_date'),
            'item_code' => $this->input->post('item_code'),
            'lending_qty' => $this->input->post('lending_qty') - $this->input->post('return_qty'),
            'uom_code' => $this->input->post('uom_code'),
            'borrower_name' => $this->input->post('borrower_name'),
            'dept_code' => $this->input->post('dept_code'),
            'lending_note' => $this->input->post('lending_date'),
            'return_note' => $this->input->post('return_note'),
            'return_qty' => $this->input->post('return_qty'),
            'return_date' => $this->input->post('return_date'),
            'entered_nip' => $this->input->post('entered_nip'),
            'warehouse_code' => $this->input->post('warehouse_code'),
            'status' => $this->input->post('status'),
        );

        $this->M_CRUD->update_data('lending', $lending, ['lending_no' => $this->input->post('lending_no')]);

        //update inventory
        $item = $this->db->get_where('inventory', ['item_code' => $this->input->post('item_code'), 'warehouse_code' => $this->input->post('warehouse_code')])->row_array();
        $data = array(
            'item_code' => $item['item_code'],
            'location' => $item['location'],
            'stocks' => $item['stocks'] + $this->input->post('return_qty'),
            'uom_code' => $item['uom_code'],
            'warehouse_code' => $item['warehouse_code'],
            'equipment' => $item['equipment'],
            'status' => $item['status'],
        );
        $this->M_CRUD->update_data('inventory', $data, ['item_code' => $item['item_code'], 'warehouse_code' => $item['warehouse_code']]);
        
        redirect('lending');
    }

    function get_item()
    {
        $kode=$this->input->post('item_code');
		// $data=$this->m_pos->get_data_barang_bykode($kode);
        $data=$this->db->get_where('items', ['item_code' => $kode])->row_array();
		echo json_encode($data);
    }

    function get_barang(){
		$kode=$this->input->post('kode');
		// $data=$this->m_pos->get_data_barang_bykode($kode);
        $data=$this->db->get_where('barang', ['kode' => $kode])->row_array();
		echo json_encode($data);
	}

}