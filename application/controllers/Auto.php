<?php

class Auto extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_CRUD');
    }

    function get_item()
    {
        $kode=$this->input->post('item_code');
        $data=$this->db->get_where('items', ['item_code' => $kode])->row_array();
		echo json_encode($data);
    }
}