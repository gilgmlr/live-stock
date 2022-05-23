<?php

class M_Login extends CI_Model
{
	public function login($username, $password) 
	{
		$this->db->where('username', $username)->or_where('nip', $username);
		return $this->db->get('user');
	}
}
?>