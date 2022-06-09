<?php

class Inventory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_CRUD');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['stock'] = $this->M_CRUD->get_join3('inventory', 'items', 'items.item_code = inventory.item_code',
        'uom', 'uom.uom_code = inventory.uom_code', 'warehouse', 'warehouse.warehouse_code = inventory.warehouse_code')->result();
        $data['judul'] = 'Inventory';

        $this->load->view('template/header', $data);
        $this->load->view('inventory/index', $data);

        // var_dump($data['stock']);die;
    }
    
    public function UpdateInventory()
    {
        $this->form_validation->set_rules('item_code', 'Item_Code', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('spec', 'Spec', 'required');
        $this->form_validation->set_rules('uom_name', 'Uom_Name', 'required');
        $this->form_validation->set_rules('stocks', 'Stocks', 'required');
        $this->form_validation->set_rules('warehouse_code', 'Warehouse_Code', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');

        if($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash', 'Failed Update!');
			redirect('inventory');
		} else {
            $res_inven = $this->db->get_where('inventory', ['item_code' => $this->input->post('item_code'), 'warehouse_code' => $this->input->post('warehouse_code')])->row_array();
            $res_item = $this->db->get_where('items', ['item_code' => $this->input->post('item_code')])->row_array();
            $res_uom = $this->db->get_where('uom', ['uom_name' => $this->input->post('uom_name')])->row_array();
            
            $inventory = array(
                'item_code' => $res_inven['item_code'],
                'location' => $this->input->post('location'),
                'stocks' => $res_inven['stocks'],
                'uom_code' => $res_uom['uom_code'],
                'warehouse_code' => $res_inven['warehouse_code'],
            );
            $this->M_CRUD->update_data('inventory', $inventory, ['item_code' => $res_inven['item_code'], 'warehouse_code' => $res_inven['warehouse_code']]);

            $item = array(
                'item_code' => $res_item['item_code'],
                'name' => $this->input->post('name'),
                'specification' => $this->input->post('spec'),
                'image' => $res_item['image'],
            );
            $this->M_CRUD->update_data('items', $item, ['item_code' => $res_item['item_code']]);

            $this->session->set_flashdata('flash', 'Data Updated!');
            redirect('inventory');

            // var_dump($data);die;
        }
    }
}