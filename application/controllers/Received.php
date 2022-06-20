<?php

class Received extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
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

    public function add_Received()
    {
        $this->form_validation->set_rules('received_code', 'Received_Code', 'required');
        $this->form_validation->set_rules('arrival_date', 'Arrival_Date', 'required|date');
        $this->form_validation->set_rules('po_number', 'PO_Number', 'required');
        $this->form_validation->set_rules('vendor_name', 'Vendor_Name', 'required');
        $this->form_validation->set_rules('item_code[]', 'Item_Code', 'required');
        $this->form_validation->set_rules('qty[]', 'Qty', 'required|integer|greater_than[0]');
        $this->form_validation->set_rules('warehouse_code[]', 'Warehouse_Code', 'required');
        $this->form_validation->set_rules('location[]', 'Location', 'required');

        date_default_timezone_set('Asia/Jakarta');
        $jumlah = count($this->input->post('item_code'));
        // print_r($jumlah);die();

        if($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash', 'Data Input Not Valid in ' . $this->input->post('desc'));
		} else {
            for($i=0;$i<$jumlah;$i++){
                $received = array(
                    'received_code' => $this->input->post('received_code'),
                    'arrival_date' => $this->input->post('arrival_date'),
                    'po_number' => $this->input->post('po_number'),
                    'vendor_name' => $this->input->post('vendor_name'),
                    'item_code' => $this->input->post('item_code')[$i],
                    'qty' => $this->input->post('qty')[$i],
                    'warehouse_code' => $this->input->post('warehouse_code')[$i],
                    'location' => $this->input->post('location')[$i],
                    'entered' => $this->input->post('entered'),
                );
                
                $history = array(
                    'doc_date' => $this->input->post('arrival_date'),
                    'system_date' => date("Y-m-d h:i:s A"),
                    'source_doc' => $this->input->post('received_code'),
                    'destination_doc' => $this->input->post('received_code'),
                    'item_code' => $this->input->post('item_code')[$i],
                    'qty' => $this->input->post('qty')[$i],
                    'warehouse_code' => $this->input->post('warehouse_code')[$i],
                );
        
                $this->M_CRUD->input_data('received', $received);
                $this->M_CRUD->input_data('history_transaction', $history);

                $item = $this->db->get_where('inventory', ['item_code' => $this->input->post('item_code')[$i], 'warehouse_code' => $this->input->post('warehouse_code')[$i]])->row_array();

                if ($item != null){ //jika sudah ada di inventory
                    $data = array(
                        'item_code' => $item['item_code'],
                        'location' => $item['location'],
                        'stocks' => $item['stocks'] + $this->input->post('qty')[$i],
                        'warehouse_code' => $item['warehouse_code'],
                        'equipment' => $this->input->post('equipment')[$i],
                        'status' => '1',
                    );
                    $this->M_CRUD->update_data('inventory', $data, ['item_code' => $item['item_code'], 'warehouse_code' => $item['warehouse_code']]);
                } else {
                    $inventory = array(
                        'item_code' => $this->input->post('item_code')[$i],
                        'location' => $this->input->post('location')[$i],
                        'stocks' => $this->input->post('qty')[$i],
                        'warehouse_code' => $this->input->post('warehouse_code')[$i],
                        'equipment' => $this->input->post('equipment')[$i],
                        'status' => '1',
                    );
                    $this->M_CRUD->input_data('inventory', $inventory);
                }

                $this->session->set_flashdata('flash', 'Data ' . $this->input->post('desc') . ' Saved!');
            }    
        }
        $this->view_good_received();
    }  

    public function addWT()
    {
        $this->form_validation->set_rules('wt_number', 'WT_Number', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required|date');
        $this->form_validation->set_rules('sender_code', 'Sender_Code', 'required');
        $this->form_validation->set_rules('item_code[]', 'Item_Code', 'required');
        $this->form_validation->set_rules('qty[]', 'Qty', 'required|integer|greater_than[0]');
        $this->form_validation->set_rules('warehouse_code[]', 'Warehouse_Code', 'required');
        $this->form_validation->set_rules('location[]', 'Location', 'required');

        date_default_timezone_set('Asia/Jakarta');
        $jumlah = count($this->input->post('item_code'));

        if($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash', 'Data Input Not Valid in ' . $this->input->post('desc'));
		} else {
            for($i=0;$i<$jumlah;$i++){
                $received = array(
                    'wt_number' => $this->input->post('wt_number'),
                    'date' => $this->input->post('date'),
                    'sender_code' => $this->input->post('sender_code'),
                    'item_code' => $this->input->post('item_code')[$i],
                    'qty' => $this->input->post('qty')[$i],
                    'warehouse_code' => $this->input->post('warehouse_code')[$i],
                    'location' => $this->input->post('location')[$i],
                    'entered' => $this->input->post('entered'),
                );

                $history = array(
                    'doc_date' => $this->input->post('date'),
                    'system_date' => date("Y-m-d h:i:s A"),
                    'source_doc' => $this->input->post('wt_number'),
                    'destination_doc' => $this->input->post('wt_number'),
                    'item_code' => $this->input->post('item_code')[$i],
                    'qty' => $this->input->post('qty')[$i],
                    'warehouse_code' => $this->input->post('warehouse_code')[$i],
                );
        
                $this->M_CRUD->input_data('warehouse_transfer', $received);
                $this->M_CRUD->input_data('history_transaction', $history);

                $item = $this->db->get_where('inventory', ['item_code' => $this->input->post('item_code')[$i], 'warehouse_code' => $this->input->post('warehouse_code')[$i]])->row_array();

                if ($item != null){ //jika sudah ada di inventory
                    $data = array(
                        'item_code' => $item['item_code'],
                        'location' => $item['location'],
                        'stocks' => $item['stocks'] + $this->input->post('qty')[$i],
                        'warehouse_code' => $item['warehouse_code'],
                        'equipment' => $this->input->post('equipment')[$i],
                        'status' => '1',
                    );
                    $this->M_CRUD->update_data('inventory', $data, ['item_code' => $item['item_code'], 'warehouse_code' => $item['warehouse_code']]);
                } else {
                    $inventory = array(
                        'item_code' => $this->input->post('item_code')[$i],
                        'location' => $this->input->post('location')[$i],
                        'stocks' => $this->input->post('qty')[$i],
                        'warehouse_code' => $this->input->post('warehouse_code')[$i],
                        'equipment' => $this->input->post('equipment')[$i],
                        'status' => '1',
                    );
                    $this->M_CRUD->input_data('inventory', $inventory);
                }

                $this->session->set_flashdata('flash', 'Data ' . $this->input->post('desc') . ' Saved!');
            }
        } 
        
        $this->view_warehouse_transfer_in();
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
        $info = explode(';', $this->input->get('info'));
        $lending_date = $info[0];
        $lending_no = $info[1];
        $item_code = $info[2];
        
        //cari lending
        $data['lending'] = $this->db->get_where('lending', ['lending_date' => $lending_date, 'lending_no' => $lending_no, 'item_code' => $item_code])->row_array();

        $data['judul'] = 'Received/Lending';
        $data['uom'] = $this->M_CRUD->get_data('uom')->result();
        $data['items'] = $this->M_CRUD->get_data('items')->result();
        $data['warehouse'] = $this->M_CRUD->get_data('warehouse')->result();

        $this->load->view('template/header', $data);
        $this->load->view('received/lending');
    }

    public function returnLending()
    {        
        $this->form_validation->set_rules('return_qty', 'Return_Qty', 'required|integer|greater_than_equal_to[0]|less_than_equal_to['.$this->input->post("lending_qty").']');

        if($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash', 'Data Input Not Valid, Return QTY must lest than equal to '.$this->input->post('lending_qty'));
            redirect(base_url().'received/view_lending?info='.$this->input->post('lending_date').';'.$this->input->post('lending_no').';'.$this->input->post('item_code'));
		} else {
            $lending = array(
                'lending_no' => $this->input->post('lending_no'),
                'lending_date' => $this->input->post('lending_date'),
                'item_code' => $this->input->post('item_code'),
                'lending_qty' => $this->input->post('lending_qty') - $this->input->post('return_qty'),
                'borrower_name' => $this->input->post('borrower_name'),
                'dept_code' => $this->input->post('dept_code'),
                'lending_note' => $this->input->post('lending_date'),
                'return_note' => $this->input->post('return_note'),
                'return_qty' => $this->input->post('return_qty'),
                'return_date' => $this->input->post('return_date'),
                'entered' => $this->input->post('entered_nip'),
                'warehouse_code' => $this->input->post('warehouse_code'),
                'status' => $this->input->post('status'),
            );

            $this->M_CRUD->update_data('lending', $lending, ['lending_date' => $this->input->post('lending_date'), 'lending_no' => $this->input->post('lending_no'), 'item_code' => $this->input->post('item_code')]);

            //update inventory
            $item = $this->db->get_where('inventory', ['item_code' => $this->input->post('item_code'), 'warehouse_code' => $this->input->post('warehouse_code')])->row_array();
            $data = array(
                'item_code' => $item['item_code'],
                'location' => $item['location'],
                'stocks' => $item['stocks'] + $this->input->post('return_qty'),
                'warehouse_code' => $item['warehouse_code'],
                'equipment' => $item['equipment'],
                'status' => $item['status'],
            );
            $this->M_CRUD->update_data('inventory', $data, ['item_code' => $item['item_code'], 'warehouse_code' => $item['warehouse_code']]);

            $history = array(
                'doc_date' => $this->input->post('return_date'),
                'system_date' => date("Y-m-d h:i:s A"),
                'source_doc' => $this->input->post('lending_no'),
                'destination_doc' => $this->input->post('lending_no'),
                'item_code' => $this->input->post('item_code'),
                'qty' => $this->input->post('return_qty'),
                'warehouse_code' => $this->input->post('warehouse_code'),
            );
            $this->M_CRUD->input_data('history_transaction', $history);
        }
        redirect('lending');
    }
}