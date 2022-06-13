<?php

class Login extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->library(array('form_validation', 'session'));
		$this->load->model('M_CRUD');
    }

	public function index()
	{
		$this->load->view('login/index');
	}

	public function login()
	{
		$this->form_validation->set_rules('nip', 'NIP', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if($this->form_validation->run() == false) {
			redirect('login');
		} else {
			$nip = $this->input->post('nip');
			$password = $this->input->post('password');

			$user = $this->db->get_where('user', ['nip' => $nip])->row_array();
			
			// jika user ada
			if ($user) {
				    // cek password yang terenkripsi
				if(password_verify($password, $user['password'])) {
					$data = array (
						'nip' => $user['nip'],
						'name' => $user['name'],
						'warehouse' => $user['warehouse_code'],
						'role' => $user['role']
					);
					$this->session->set_userdata($data);

					$this->session->set_userdata('login', true);
					$this->session->set_flashdata('flash', 'Welcome ' . $user['name']);
					redirect('dashboard');
				} else {
					$this->session->set_flashdata('flash', 'NIP or Password not correct!');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('flash', 'NIP not registered!');
				redirect('login');
			}
		}
	}

	public function logout()
	{
        $this->session->sess_destroy();
        redirect('login');
	}

	public function preview() {
		$this->load->view('preview/gi_form');
	}
}