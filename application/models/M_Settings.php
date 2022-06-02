<?php

class M_Settings extends CI_Model
{
	public function add($item)
	{
		return $this->db->insert('items', $item);
	}
}