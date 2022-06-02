<?php

class Settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Settings');
    }

    public function index()
    {
        // $data['jumlahWarehouse'] = $this->M_Dashboard->countRowsWarehouse();
        // $data['warehouse'] = $this->M_Dashboard->getDataWarehouse()->result();
        $data['judul'] = 'Settings';

        $this->load->view('template/header', $data);
        $this->load->view('settings/index', $data);
    }

    public function addItem()
    {
        $data = array(
            'item_code' => $this->input->post('item_code'),
            'name' => $this->input->post('name'),
            'specification' => $this->input->post('spec'),
        );

        $this->M_Settings->add($data);
        redirect('settings');

        // var_dump($data);die;
    }

    public function view_add_items()
    {
        $this->load->view('template/header');
        $this->load->view('settings/index');
    }
}