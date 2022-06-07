<?php

class M_Lending extends CI_Model
{
	public function add($data)
	{
		return $this->db->insert('lending', $data);
	}

	public function getLending()
	{
		$this->db->select('*');
		$this->db->from('lending');
		$this->db->order_by('date', 'desc');

		$query = $this->db->get();
		return $query;
	}
}