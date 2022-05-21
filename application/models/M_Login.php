<?php

class M_Login extends CI_Model
{
	public function getByNIP($nip)
	{
		$this->db->where('nip', $nip);
		return $this->db->get('user');
	}
}
?>