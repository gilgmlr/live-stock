<?php

class M_Catalog extends CI_Model
{
	public function getDataItems()
	{
		$this->db->select('*');
		$this->db->from('items');

		$query = $this->db->get();
		return $query;
	}
}