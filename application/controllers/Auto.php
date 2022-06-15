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
        $data=$this->db->get_where('items', ['item_code' => $kode])->row_array();
		echo json_encode($data);
    }

    function get_received()
    {
        $kode=$this->input->post('received_code');
        $data=$this->db->get_where('received', ['received_code' => $kode])->row_array();
		echo json_encode($data);
    }
}