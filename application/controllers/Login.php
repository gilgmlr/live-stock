<?php

class Login extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        // $this->load->model('M_Login');
		$this->load->library('form_validation');
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
				//  if(password_verify($password, $user['password'])) {
				// 	 $data = [
				// 		 'name' => $user['name']
				// 	 ];
				// 	 $this->session->set_userdata($data);

				// 	 redirect('dashboard');
				//  }
				
				if ($user['password'] == $password) {
					$data = [
						'name' => $user['name']
					];
					$this->session->set_userdata($data);
					redirect('dashboard');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Not Corrected!</div>');
					redirect('login');
				}
				
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NIP is not registered!</div>');
				redirect('login');
			}
		}
	}

	public function logout()
	{
        // /$this->session->sess_destroy();
        redirect('login');
	}
}