<?php

class M_CRUD extends CI_Model
{
	function get_data($table){
		return $this->db->get($table);
	}

	function get_data_limit($table, $limit, $start, $keyword = null)
	{
		if ($keyword) {
			$this->db->like('name', $keyword)->or_like('item_code', $keyword)->or_like('specification', $keyword);
		}
		return $this->db->get($table, $limit, $start);
	}

	function get_data_where($table, $where, $orderby = null, $sortKeys = null){		
		if ($orderby) {
			$this->db->order_by($orderby, $sortKeys);
		}
		return $this->db->get_where($table, $where);
	}

	function get_data_orwhere($table, $col1, $cond1, $col2, $cond2){		
		$this->db->where($col1, $cond1)->or_where($col2, $cond2);
		return $this->db->get($table);
	}

	function get_or_like($table, $col1, $col2, $match){
		$this->db->select('*');
		$this->db->from('items');
		$this->db->like('item_code','0100-');
		$query = $this->db->get();
	}

	public function get_join($table, $join, $matching)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join($join, $matching);
		$query = $this->db->get();

		return $query;
	}

	public function get_join2($table, $join1, $matching1, $join2, $matching2)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join($join1, $matching1);
		$this->db->join($join2, $matching2);
		$query = $this->db->get();

		return $query;
	}

	public function get_join3($table, $join1, $matching1, $join2, $matching2, $join3, $matching3)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join($join1, $matching1);
		$this->db->join($join2, $matching2);
		$this->db->join($join3, $matching3);
		$query = $this->db->get();

		return $query;
	}

	function get_data_sort($table, $orderby, $sortKeys){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->order_by($orderby, $sortKeys);

		$query = $this->db->get();
		return $query;
	}
 
	function input_data($table, $data){
		$this->db->insert($table, $data);
	}
 
	function delete_data($table, $where){
		$this->db->where($where);
		$this->db->delete($table);
	}
 
	function update_data($table, $data, $where){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function count_row($table) {
		return $this->db->get($table)->num_rows();
	}
}