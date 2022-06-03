<?php

class Settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Settings');
		$this->load->library('form_validation');
    }

    public function index()
    {
        // $data['jumlahWarehouse'] = $this->M_Dashboard->countRowsWarehouse();
        // $data['warehouse'] = $this->M_Dashboard->getDataWarehouse()->result();
        $data['judul'] = 'Settings';

        $this->load->view('template/header', $data);
        $this->load->view('settings/index', $data);
    }

    public function add_item()
    {
        $this->form_validation->set_rules('item_code', 'Item_Code', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('spec', 'Spec', 'required');

        $image = $this->input->post('image');

        if ($image == "") {
            $image = "default.jpg";
        }

        if($this->form_validation->run() == false) {
			redirect('settings/view_add_items');
		} else {
            $data = array(
                'item_code' => $this->input->post('item_code'),
                'name' => $this->input->post('name'),
                'specification' => $this->input->post('spec'),
                'image' => $image,
            );
    
            $this->M_Settings->add_item($data);
            redirect('settings/view_add_items');

            // var_dump($data);die;
        }
    }

    public function view_add_items()
    {
        $data['judul'] = 'Settings/add_items';

        $this->load->view('template/header', $data);
        $this->load->view('settings/add_items');
    }

    public function view_add_account()
    {
        $data['judul'] = 'Settings/add_account';

        $this->load->view('template/header', $data);
        $this->load->view('settings/add_account');
    }

    public function view_import_data()
    {
        $data['judul'] = 'Settings/import_data';

        $this->load->view('template/header', $data);
        $this->load->view('settings/import_data');
    }

    public function add_account()
    {
        $this->form_validation->set_rules('nip', 'Nip', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');

        $default_password = password_hash($this->input->post('nip'), PASSWORD_DEFAULT);

        if($this->form_validation->run() == false) {
			redirect('settings/add_account');
		} else {
            $data = array(
                'nip' => $this->input->post('nip'),
                'name' => $this->input->post('name'),
                'password' => $default_password,
                'role' => $this->input->post('role'),
            );
    
            $this->M_Settings->add_user($data);
            redirect('settings/view_add_account');

            // var_dump($data);die;
        }
    }
}