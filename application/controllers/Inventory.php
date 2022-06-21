<?php

class Inventory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // hapus session keyword
        if ($this->input->get('reset')) {
            $this->session->unset_userdata('keyword_inventory');
        }

        // Ambil data keyword search
        if ($this->input->post('search')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword_inventory', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword_inventory');;
        }

        // config
        $config['base_url'] = base_url().'inventory/index';
        $this->db->select('*');
        $this->db->from('inventory');
        $this->db->join('items', 'inventory.item_code = items.item_code');
        $this->db->join('warehouse', 'inventory.warehouse_code = warehouse.warehouse_code');
        $this->db->like('inventory.item_code', $data['keyword'])->or_like('warehouse.warehouse_code', $data['keyword'])->or_like('items.name', $data['keyword'])->or_like('items.specification', $data['keyword'])
        ->or_like('items.uom', $data['keyword'])->or_like('inventory.location', $data['keyword'])->or_like('inventory.equipment', $data['keyword']);

        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 10;

        // Initialize
        $this->pagination->initialize($config);

        $data['judul'] = 'Inventory';
        $data['start'] = $this->uri->segment(3);

        $this->db->select('*');
        $this->db->from('inventory');
        $this->db->join('items', 'inventory.item_code = items.item_code');
        $this->db->join('warehouse', 'inventory.warehouse_code = warehouse.warehouse_code');
        $this->db->like('inventory.item_code', $data['keyword'])->or_like('warehouse.warehouse_code', $data['keyword'])->or_like('items.name', $data['keyword'])->or_like('items.specification', $data['keyword'])
        ->or_like('items.uom', $data['keyword'])->or_like('inventory.location', $data['keyword'])->or_like('inventory.equipment', $data['keyword']);
        $this->db->limit($config['per_page'], $data['start']);
        $data['stock'] = $this->db->get()->result();

        $this->load->view('template/header', $data);
        $this->load->view('inventory/index', $data); 

        // var_dump($data['stock']);die;
    }
    
    public function UpdateInventory() 
    {
        $this->form_validation->set_rules('item_code', 'Item_Code', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('spec', 'Spec', 'required');
        $this->form_validation->set_rules('stocks', 'Stocks', 'required');
        $this->form_validation->set_rules('warehouse_code', 'Warehouse_Code', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');

        if($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash', 'Failed Update!');
			redirect('inventory');
		} else {
            $res_inven = $this->db->get_where('inventory', ['id' => $this->input->post('id')])->row_array();
            $res_item = $this->db->get_where('items', ['item_code' => $this->input->post('item_code')])->row_array();
            
            $inventory = array(
                'item_code' => $res_inven['item_code'],
                'location' => $this->input->post('location'),
                'stocks' => $res_inven['stocks'],
                'warehouse_code' => $res_inven['warehouse_code'],
                'equipment' => $this->input->post('equipment'),
                'status' => $this->input->post('status'),
            );
            $this->M_CRUD->update_data('inventory', $inventory, ['item_code' => $res_inven['item_code'], 'warehouse_code' => $res_inven['warehouse_code']]);

            $item = array(
                'item_code' => $res_item['item_code'],
                'name' => $this->input->post('name'),
                'specification' => $this->input->post('spec'),
                'uom' => $res_item['uom'],
                'image' => $res_item['image'],
            );
            $this->M_CRUD->update_data('items', $item, ['item_code' => $res_item['item_code']]);

            $this->session->set_flashdata('flash', 'Data Updated!');
            redirect('inventory');

            // var_dump($data);die;
        }
    }
}