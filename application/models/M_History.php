<?php

class M_History extends CI_Model
{
	public function add($data)
	{
		return $this->db->insert('history', $data);
	}

	public function getHistory()
	{
		$this->db->select('*');
		$this->db->from('history');
		$this->db->order_by('id', 'desc');

		$query = $this->db->get();
		return $query;
	}
}