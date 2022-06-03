<?php

class M_Settings extends CI_Model
{
	public function add_item($item)
	{
		return $this->db->insert('items', $item);
	}

	public function add_user($user)
	{
		return $this->db->insert('user', $user);
	}
}