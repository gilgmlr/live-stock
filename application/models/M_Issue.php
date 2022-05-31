<?php

class M_Issue extends CI_Model
{
	public function tambahData($data)
	{
		return $this->db->insert('barang_keluar', $data);
	}
}