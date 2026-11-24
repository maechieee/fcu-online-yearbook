<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('get_person_name')) {
	function get_person_name($user_id)
	{
		$ci = &get_instance();
		$ci->load->model('Users_model', 'M_users');
		$user = $ci->M_users->get($user_id);

		if (empty($user))
			return 'N/A';

		if (empty($user['last_name']))
			return $user['first_name'];



		return $user['last_name'] . ', ' . $user['first_name'];
	}
}

if (!function_exists('count_all')) {
	function count_all($table_name)
	{
		$ci = &get_instance();
		return $ci->db->where('deleted_at', null)
			->get($table_name)
			->num_rows();
	}
}

if (!function_exists('count_all_students')) {
	function count_all_students()
	{
		$ci = &get_instance();
		return $ci->db->where('role_id', ROLE_STUDENT)
			->where('deleted_at', null)
			->get('users')
			->num_rows();
	}
}

if (!function_exists('count_all_honor_students')) {
	function count_all_honor_students()
	{
		$ci = &get_instance();
		return $ci->db->where('role_id', ROLE_STUDENT)
			->where('honor !=', null)
			->where('deleted_at', null)
			->get('users')
			->num_rows();
	}
}

if (!function_exists('get_name_by_id')) {
	function get_name_by_id($id, $table_name)
	{
		$CI = &get_instance();
		$data = $CI->db->where('id', $id)
			->where('deleted_at', null)
			->get($table_name)
			->row_array();

		if (empty($data)) return null;

		return $data['name'];
	}
}
