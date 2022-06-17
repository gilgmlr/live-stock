<?php

class Settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('download');
		$this->load->library(array('form_validation', 'upload', 'excel'));
    }

    public function index()
    {
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
        $data['warehouse'] = $this->M_CRUD->get_data('warehouse')->result();

        $this->load->view('template/header', $data);
        $this->load->view('settings/add_account', $data);
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
    public function view_all_items() 
    {
        // Ambil data keyword search
        if ($this->input->post('search')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword_item', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword_item');;
        }

        // config
        $config['base_url'] = base_url().'settings/view_all_items';
        $this->db->like('item_code', $data['keyword'])->or_like('name', $data['keyword'])->or_like('specification', $data['keyword'])->or_like('uom', $data['keyword']);
        $this->db->from('items');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 10;

        // Initialize
        $this->pagination->initialize($config);

        $data['judul'] = 'Settings/view_all_items';
        $data['start'] = $this->uri->segment(3);
        $data['items'] = $this->M_CRUD->get_data_limit('items', $config['per_page'], $data['start'], $data['keyword'], 'item_code', 'name', 'specification', 'uom')->result();
        // $item['item'] = $this->M_CRUD->get_data('items')->result();

        $this->load->view('template/header', $data);
        $this->load->view('settings/all_items', $data);
    }

    public function add_account()
    {
        $this->form_validation->set_rules('nip', 'Nip', 'required|numeric|is_unique[user.nip]');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');

        $default_password = password_hash($this->input->post('nip'), PASSWORD_DEFAULT);

        if($this->form_validation->run() == false) { 
            $this->session->set_flashdata('flash', 'Add Account Failed, Please Try Again!');
			$this->view_add_account();
		} else {
            $data = array(
                'nip' => $this->input->post('nip'),
                'name' => $this->input->post('name'),
                'password' => $default_password,
                'warehouse_code' => $this->input->post('warehouse_code'),
                'role' => $this->input->post('role'),
            );
    
            $this->M_CRUD->input_data('user', $data);
            $this->session->set_flashdata('flash', 'Add Account ' . $this->input->post('nip') . ' Success!');
            redirect('settings/view_add_account');

            // var_dump($data);die;
        }
    }

    public function add_item()
    {
        $this->form_validation->set_rules('item_code', 'Item_Code', 'required|is_unique[items.item_code]');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('spec', 'Spec', 'required');
        $this->form_validation->set_rules('uom', 'Uom', 'required');

        if($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash', 'Add Item Failed, Please Try Again!');
			$this->view_add_items();
		} else {
            $config = $this->upload->initialize(array(
				"upload_path" => './assets/catalog/',
				"allowed_types" => 'jpg|jpeg|png',
				"remove_spaces" => TRUE,
				"file_name" => $this->input->post('item_code')
			));

            $data = $this->upload->data();
            if (pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION) == 'jpg' || pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION) == 'png' || pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION) == 'jpeg' || pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION) == '') {
			    $this->load->library('upload', $config);
                $this->upload->do_upload('image');

                if (pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION) == '') {
                    $image = $data['file_name'] . '.jpg';
                } else {
                    $image = $data['file_name'] . '.' . pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
                }
    
                $data = array(
                    'item_code' => $this->input->post('item_code'),
                    'name' => $this->input->post('name'),
                    'specification' => $this->input->post('spec'),
                    'uom' => $this->input->post('uom'),
                    'remarks' => $this->input->post('remarks'),
                    'image' => $image,
                );
                // var_dump($config);die;
    
                $this->M_CRUD->input_data('items', $data);
                $this->session->set_flashdata('flash', 'Add item ' . $this->input->post('name') . ' Success!');
                redirect('settings/view_add_items');
            } else {
                $this->session->set_flashdata('flash', 'Type Image ' . $this->input->post('name') . ' Invalid!');
                redirect('settings/view_add_items');
            }
        }
    }
    
    public function import()
    {
        date_default_timezone_set('Asia/Jakarta');
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
                                'password' => password_hash($worksheet->getCellByColumnAndRow(0, $row)->getValue(), PASSWORD_DEFAULT),
                                'warehouse_code' => $worksheet->getCellByColumnAndRow(2, $row)->getValue(),
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
                            //$item = $this->db->get_where('items', ['item_code' => $worksheet->getCellByColumnAndRow(0, $row)->getValue()])->row_array();
                            //if ($item == null) {
                                $data[] = array(
                                    'item_code' => $worksheet->getCellByColumnAndRow(0, $row)->getValue(),
                                    'name' => $worksheet->getCellByColumnAndRow(1, $row)->getValue(),
                                    'specification' => $worksheet->getCellByColumnAndRow(2, $row)->getValue(),
                                    'uom' => $worksheet->getCellByColumnAndRow(3, $row)->getValue(),
                                    'image' => $worksheet->getCellByColumnAndRow(0, $row)->getValue().'.jpg',
                                );                            
                        } else if ($table == 'history_transaction') {
                            $data[] = array(
                                'doc_date' => date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(0, $row)->getValue())),
                                'system_date' => date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(1, $row)->getValue())),
                                'source_doc' => $worksheet->getCellByColumnAndRow(2, $row)->getValue(),
                                'destination_doc' => $worksheet->getCellByColumnAndRow(3, $row)->getValue(),
                                'item_code' => $worksheet->getCellByColumnAndRow(4, $row)->getValue(),
                                'qty' => $worksheet->getCellByColumnAndRow(5, $row)->getValue(),
                                'warehouse_code' => $worksheet->getCellByColumnAndRow(6, $row)->getValue(),
                            );   

                            // if (substr($worksheet->getCellByColumnAndRow(2, $row)->getValue(),0,1) == "MI") {
                            //     $mi = array(
                            //         'doc_no' => $worksheet->getCellByColumnAndRow(2, $row)->getValue(),
                            //         'entri_date' => date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(0, $row)->getValue())),
                            //         'posting_date' => date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(1, $row)->getValue())),
                            //         'dept_no' => '',
                            //         'project_no' => '',
                            //         'item_code' => $worksheet->getCellByColumnAndRow(4, $row)->getValue(),
                            //         'warehouse_code' => $worksheet->getCellByColumnAndRow(6, $row)->getValue(),
                            //         'transaction_qty' => $worksheet->getCellByColumnAndRow(5, $row)->getValue(),
                            //         'reference' => '',
                            //         'reason_code' => '',
                            //         'description' => '',
                            //         'created_by' => "Import Data",
                            //     );

                            //     $this->M_CRUD->input_data('material_issue', $mi);
                            // }
                        }
                    }
                } 
            }
 
            $this->db->insert_batch($table, $data);
            // $this->db->insert_batch("material_issue", $mi);
            $this->session->set_flashdata('flash', 'Import File Excel Saved in database ' . $table);
            redirect('settings/view_import_data');
        } else {
            $this->session->set_flashdata('flash', 'Import File is Failed, Please Try Again!');
            redirect('settings/view_import_data');
        }
    }

    public function import_history()
    {
        date_default_timezone_set('Asia/Jakarta');
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
                        $doc_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(0, $row)->getValue()));
                        $system_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(1, $row)->getValue()));
                        $source_doc = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                        $dest = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                        $item_code = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                        $qty = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                        $warehouse = $worksheet->getCellByColumnAndRow(6, $row)->getValue();

                        $data[] = array(
                            'doc_date' => $doc_date,
                            'system_date' => $system_date,
                            'source_doc' => $source_doc,
                            'destination_doc' => $dest,
                            'item_code' => $item_code,
                            'qty' => $qty,
                            'warehouse_code' => $warehouse,
                        ); 

                        if (substr($source_doc, 0,1) == "MI") {
                            $mi[] = array(
                                'doc_no' => $worksheet->getCellByColumnAndRow(2, $row)->getValue(),
                                'entri_date' => date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(0, $row)->getValue())),
                                'posting_date' => date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(1, $row)->getValue())),
                                'dept_no' => '',
                                'project_no' => '',
                                'item_code' => $worksheet->getCellByColumnAndRow(4, $row)->getValue(),
                                'warehouse_code' => $worksheet->getCellByColumnAndRow(6, $row)->getValue(),
                                'transaction_qty' => $worksheet->getCellByColumnAndRow(5, $row)->getValue(),
                                'reference' => '',
                                'reason_code' => '',
                                'description' => '',
                                'created_by' => "Import Data",
                            );
                        }
                    }
                } 
            }
 
            $this->db->insert_batch($table, $data);
            $this->db->insert_batch("material_issue", $mi);
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

    public function update_item()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('spec', 'Spec', 'required');
        $this->form_validation->set_rules('uom', 'uom', 'required');
        
        if($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash', 'Change item '. $this->input->post('item_code') . ' Failed!');
			redirect('settings/view_all_items');
		} else {
            $item = $this->db->get_where('items', ['item_code' => $this->input->post('item_code')])->row_array();
                $data = array(
                    'item_code' => $item['item_code'],
                    'name' => $this->input->post('name'),
                    'specification' => $this->input->post('spec'),
                    'uom' => $this->input->post('uom'),
                    'remarks' => $this->input->post('remarks'),
                    'image' => $this->input->post('image'),
                );

                $this->M_CRUD->update_data('items', $data, ['item_code' => $this->input->post('item_code')]);
                $this->session->set_flashdata('flash', 'Change item '.$item['item_code'] . ' Success!');
                redirect('settings/view_all_items');
        }
    }

    public function reset_password()
    {
        $nip = $this->input->get('nip');

        $user = $this->db->get_where('user', ['nip' => $nip])->row_array();
        
        $data = array(
            'nip' => $nip,
            'name' => $user['name'],
            'password' => password_hash($nip, PASSWORD_DEFAULT),
            'warehouse_code' => $user['warehouse_code'],
            'role' => $user['role']
        );

		$this->M_CRUD->update_data('user', $data, ['nip' => $nip]);
        $this->session->set_flashdata('flash', 'Password Account ' . $nip . ' Reset Successs!');
		redirect('settings/view_table_user');
    }

    public function delete_account()
    {
        $nip = $this->input->get('nip');

		$this->M_CRUD->delete_data('user', ['nip' => $nip]);
        $this->session->set_flashdata('flash', 'Account ' . $nip . ' Deleted!');
		redirect('settings/view_table_user');
    }

    public function delete_item()
    {
        $item_code = $this->input->get('item_code');

		$this->M_CRUD->delete_data('items', ['item_code' => $item_code]);
        $this->session->set_flashdata('flash', 'Item ' . $item_code . ' Deleted!');
		redirect('settings/view_all_items');
    }
    
    public function download()
    {	
        $name = $this->input->get('name');
		force_download('assets/excel/'. $name . '.xlsx',NULL);
	}	

    // create xlsx
    public function generateXls() 
    {
        // create file name
        $fileName = 'data-'.time().'.xlsx';  
        // load excel library
        $listInfo = $this->M_CRUD->get_data('history_transaction')->result();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Document Date');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'System Date');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Source Doc');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Destination Doc');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Item Code');       
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'QTY Transaction');       
        $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Warehouse Code');       
        // set Row
        $rowCount = 2;
        foreach ($listInfo as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->doc_date);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->system_date);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->source_doc);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->destination_doc);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->item_code);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $list->qty);
            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $list->warehouse_code);
            $rowCount++;
        }
        $filename = "Export History ". date("Y-m-d-H-i-s").".csv";
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');  
        $objWriter->save('php://output'); 
 
    }

}