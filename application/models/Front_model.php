<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Front_model
*/
class Front_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function add_new_employee($value)
	{
		return $this->db->insert('employee', $value);
	}

	public function employees()
	{
		return $this->db->get('employee')->result_array();
	}

	public function single_employee($id)
	{
		return $this->db->get_where('employee', ['id'=>$id])->row_array();
	}

	public function update_employee($id, $value)
	{
		return $this->db->where('id', $id)->update('employee', $value);
	}

	public function delete_employee($id)
	{
		return $this->db->where('id', $id)->delete('employee');
	}

	public function find_employee($pass)
	{
		return $this->db->get_where('employee', ['password'=>$pass])->row_array();
	}

	public function time_in($value)
	{
		return $this->db->insert('attendance', $value);
	}
}