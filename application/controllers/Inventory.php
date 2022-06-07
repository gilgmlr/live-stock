<?php

class Inventory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_CRUD');
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
}