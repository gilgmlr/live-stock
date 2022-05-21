<?php

class Login extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Login');
    }

	public function index()
	{
		$this->load->view('login/index');
	}

	public function login(){
		$nip = $this->input->post('nip');
		$password = $this->input->post('password');
		
		$query = $this->M_Login->getByNIP($nip);
		$user = $query->row();

		// if (!$user) return FALSE;
		// if (!password_verify($password, $user->password)) return FALSE;

		// $userdata = array(
		// 	'nip' => $user->nip,
		// 	'name' => $user->name,
		// 	'status' => 'login',
		// );

		if ($nip == $user->nip && $password == $user->password) {
			redirect('dashboard');
		} else {
			redirect('login');
		}

		
	}

	public function logout()
	{
        // /$this->session->sess_destroy();
        redirect('login');
	}
}