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
		$username = $this->input->post('user');
		$password = $this->input->post('password');
		
		$query = $this->M_Login->login($username, $password);
		$user = $query->row();

		if (($username == $user->username || $username == $user->nip) && $password == $user->password) {
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