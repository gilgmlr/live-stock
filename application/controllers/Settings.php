<?php

class Settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_CRUD');
		$this->load->library(array('form_validation', 'upload', 'excel'));
    }

    public function index()
    {
        // $data['jumlahWarehouse'] = $this->M_Dashboard->countRowsWarehouse();
        // $data['warehouse'] = $this->M_Dashboard->getDataWarehouse()->result();
        $data['judul'] = 'Settings';

        $this->load->view('template/header', $data);
        $this->load->view('settings/index', $data);
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
    public function view_table_user()
    {
        $data['judul'] = 'Settings/view_table_user';
        $data['users'] = $this->M_CRUD->get_data('user')->result();

        $this->load->view('template/header', $data);
        $this->load->view('settings/table_user');
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
    
            $this->M_CRUD->input_data('user', $data);
            redirect('settings/view_add_account');

            // var_dump($data);die;
        }
    }

    public function add_item()
    {
        $this->form_validation->set_rules('item_code', 'Item_Code', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('spec', 'Spec', 'required');

        if($this->form_validation->run() == false) {
			redirect('settings/view_add_itemss');
		} else {
            $config = $this->upload->initialize(array(
				"upload_path" => './assets/catalog/',
				"allowed_types" => 'gif|jpg|jpeg|png',
				"remove_spaces" => TRUE,
				"file_name" => $this->input->post('item_code')
			));

			$this->load->library('upload', $config);
            
            if (!$this->upload->do_upload('image')) {
                redirect('settings/view_add_items');
            } else {
                $data = $this->upload->data();

                $image = $data['file_name'];
    
                $data = array(
                    'item_code' => $this->input->post('item_code'),
                    'name' => $this->input->post('name'),
                    'specification' => $this->input->post('spec'),
                    'image' => $image,
                );
                // var_dump($config);die;
    
                $this->M_CRUD->input_data('items', $data);
                redirect('settings/view_add_items');
            }
        }
    }
    
    public function import()
    {
        $table = $this->input->post('table_name');
        if(isset($_FILES["file"]["name"])){
              // upload
            $file_tmp = $_FILES['file']['tmp_name'];
            $file_name = $_FILES['file']['name'];
            $file_size =$_FILES['file']['size'];
            $file_type=$_FILES['file']['type'];
            // move_uploaded_file($file_tmp,"uploads/".$file_name); // simpan filenya di folder uploads
              
            $object = PHPExcel_IOFactory::load($file_tmp);            
        
            foreach($object->getWorksheetIterator() as $worksheet){
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
        
                for($row=3; $row<=$highestRow; $row++){
                    if ($worksheet->getCellByColumnAndRow(0, $row)->getValue() != null) {
                        if ($table == 'warehouse') {
                            $data[] = array(
                                'warehouse_code' => $worksheet->getCellByColumnAndRow(0, $row)->getValue(),
                                'warehouse_name' => $worksheet->getCellByColumnAndRow(1, $row)->getValue(),
                            );
                        } else if ($table == 'user') {
                            $data[] = array(
                                'nip' => $worksheet->getCellByColumnAndRow(0, $row)->getValue(),
                                'name' => $worksheet->getCellByColumnAndRow(1, $row)->getValue(),
                                'password' => password_hash($worksheet->getCellByColumnAndRow(2, $row)->getValue(), PASSWORD_DEFAULT),
                                'role' => $worksheet->getCellByColumnAndRow(3, $row)->getValue(),
                            );
                        } else if ($table == 'uom') {
                            $data[] = array(
                                'uom_code' => $worksheet->getCellByColumnAndRow(0, $row)->getValue(),
                                'uom_name' => $worksheet->getCellByColumnAndRow(1, $row)->getValue(),
                            );
                        } else if ($table == 'department') {
                            $data[] = array(
                                'dept_code' => $worksheet->getCellByColumnAndRow(0, $row)->getValue(),
                                'name' => $worksheet->getCellByColumnAndRow(1, $row)->getValue(),
                            );
                        } else if ($table == 'items') {
                            $data[] = array(
                                'item_code' => $worksheet->getCellByColumnAndRow(0, $row)->getValue(),
                                'name' => $worksheet->getCellByColumnAndRow(1, $row)->getValue(),
                                'specification' => $worksheet->getCellByColumnAndRow(1, $row)->getValue(),
                                'image' => $worksheet->getCellByColumnAndRow(1, $row)->getValue(),
                            );
                        }
                    }
                } 
            }
 
            $this->db->insert_batch($table, $data);
            $this->session->set_flashdata('flash', 'Import File Excel Saved in database ' . $table);
            redirect('settings/view_import_data');
        } else {
            $this->session->set_flashdata('flash', 'Import File is Failed, Please Try Again!');
            redirect('settings/view_import_data');
        }
    }

    public function change_password()
    {
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('newpassword', 'Newpassword', 'required');

        $nip = $this->session->userdata('nip');
        $password = $this->input->post('password');
        $new_password = password_hash($this->input->post('newpassword'), PASSWORD_DEFAULT);

        $user = $this->db->get_where('user', ['nip' => $nip])->row_array();

        if($this->form_validation->run() == false) {
			redirect('settings');
		} else {
            if(password_verify($password, $user['password'])) {
                $data = array(
                    'nip' => $nip,
                    'name' => $this->session->userdata('name'),
                    'password' => $new_password,
                    'role' => $this->session->userdata('role'),
                );

                $this->M_CRUD->update_data('user', $data, ['nip' => $nip]);
                $this->session->set_flashdata('flash', 'Change Password Success!');
                redirect('settings');
            } else {
                $this->session->set_flashdata('flash', 'Password Now Incorrect, Please Try Again!');
                redirect('settings');
            }
        }
    }

    public function delete_account()
    {
        $nip = $this->input->get('nip');

		$this->M_CRUD->delete_data('user', ['nip' => $nip]);
        $this->session->set_flashdata('flash', 'Account ' . $nip . ' Deleted!');
		redirect('settings/view_table_user');
    }
}