<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{
	private $_table_name = 'users';

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all()
	{
		return $this->db->where('deleted_at', null)
			->get($this->_table_name)
			->result_array();
	}

	public function get_all_by_role_id($role_id)
	{
		return $this->db->select('a.*, b.name department_name')
			->from($this->_table_name . ' a')
			->join('departments b', 'a.department_id = b.id', 'left')
			->where('a.role_id', $role_id)
			->where('a.deleted_at', null)
			->get()
			->result_array();
	}

	public function get_all_honor_students()
	{
		return $this->db->select('a.*, b.name department_name')
			->from($this->_table_name . ' a')
			->join('departments b', 'a.department_id = b.id', 'left')
			->where('a.role_id', ROLE_STUDENT)
			->where('a.honor !=', null)
			->where('a.deleted_at', null)
			->get()
			->result_array();
	}


	public function update($data, $id)
	{
		$this->db->where('id', $id)
			->update($this->_table_name, $data);

		return $id;
	}

	public function delete($data, $id)
	{
		$this->db->where('id', $id)
			->update($this->_table_name, $data);

		return $id;
	}

	public function login($username, $password, $role_id) {
		$user = $this->db->where('LOWER(username)', strtolower($username))
			->where('role_id', $role_id)
			->where('is_activated', BOOL_YES)
			->where('deleted_at', null)
			->get($this->_table_name)
			->row_array();

		if ($user != null) {
			if (password_verify($password, $user['password'])) return $user;

			return null;
		}

		return null;
	}

	public function insert($data)
	{
		$this->db->insert($this->_table_name, $data);
		return $this->db->insert_id();
	}

	public function get($id)
	{
		return $this->db->select('a.*, b.name department_name')
			->from($this->_table_name . ' a')
			->join('departments b', 'a.department_id = b.id', 'left')
			->where('a.id', $id)
			->where('a.deleted_at', null)
			->get()
			->row_array();
	}
}

