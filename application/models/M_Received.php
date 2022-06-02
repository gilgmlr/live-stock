<?php

class M_Received extends CI_Model
{
	public function add($item)
	{
		return $this->db->insert('dummy', $item);
	}
}