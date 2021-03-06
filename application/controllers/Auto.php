<?php

class Auto extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    function get_item()
    {
        $kode=$this->input->post('item_code');
        $this->db->from('items');
        $this->db->join('inventory', 'inventory.item_code = items.item_code');
        $this->db->where(['items.item_code' => $kode]);
        $data=$this->db->get()->result();
		echo json_encode($data);
    }

    function get_received()
    {
        $kode=$this->input->post('received_code');
        $data=$this->db->get_where('received', ['received_code' => $kode])->row_array();
		echo json_encode($data);
    }
    
    function get_WT()
    {
        $kode=$this->input->post('received_code');
        $data=$this->db->get_where('warehouse_transfer', ['wt_number' => $kode])->row_array();
		echo json_encode($data);
    }

    function get_Adjusment()
    {
        $kode=$this->input->post('received_code');
        $data=$this->db->get_where('received', ['received_code' => $kode])->row_array();
		echo json_encode($data);
    }

    function get_sender()
    {
        $kode=$this->input->post('sender_code');
        $data=$this->db->get_where('warehouse', ['warehouse_code' => $kode])->row_array();
		echo json_encode($data);
    }
}