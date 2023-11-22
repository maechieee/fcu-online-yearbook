<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staffs extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('user')) {
			redirect('auth/login');
			return;
		}

		$this->load->model(array(
			'Users_model' => 'M_users'
		));

		$this->_create_additional = array(
			'created_by' => isset($_SESSION['user']) ? $this->session->userdata('user')['id'] : DEFAULT_ADMIN_ID,
			'created_at' => NOW
		);

		$this->_update_additional = array(
			'updated_by' => isset($_SESSION['user']) ? $this->session->userdata('user')['id'] : DEFAULT_ADMIN_ID,
			'updated_at' => NOW
		);

		$this->_delete_additional = array(
			'deleted_by' => isset($_SESSION['user']) ? $this->session->userdata('user')['id'] : DEFAULT_ADMIN_ID,
			'deleted_at' => NOW
		);
	}


	public function index()
	{
		$data['items'] = $this->M_users->get_all_by_role_id(ROLE_ADMINISTRATOR);
		$data['page_data'] = array(
			'module' => 'Staffs',
			'section' => 'Index',
			'footer_scripts_path' => array(
				'modules/staffs/footer_index'
			)
		);
		$this->load->view('layouts/dashboard/head', $data);
		$this->load->view('modules/staffs/index', $data);
		$this->load->view('layouts/dashboard/foot', $data);
	}

	public function form($id = null)
	{
		if ($post_data = $this->input->post()) {
			if (!empty($id)) {
				$staff_data = array(
						'email_address' => $post_data['email_address'],
						'is_activated' => $post_data['is_activated'],
						'first_name' => $post_data['first_name'],
						'middle_name' => $post_data['middle_name'],
						'last_name' => $post_data['last_name'],
						'dob' => $post_data['dob'],
						'gender' => $post_data['gender'],
						'address' => $post_data['address'],
						'contact_no' => $post_data['contact_no']
					) + $this->_update_additional;
				$this->M_users->update($staff_data, $id);
				exit(json_encode(array(
					'status' => RESULT_SUCCESS,
					'message' => 'Staff has been successfully updated.'
				)));
			}
			$staff_data = array(
					'id_number' => $post_data['id_number'],
					'username' => $post_data['username'],
					'email_address' => $post_data['email_address'],
					'password' => password_hash($post_data['password'], PASSWORD_DEFAULT),
					'role_id' => ROLE_ADMINISTRATOR,
					'is_activated' => $post_data['is_activated'],
					'first_name' => $post_data['first_name'],
					'middle_name' => $post_data['middle_name'],
					'last_name' => $post_data['last_name'],
					'dob' => $post_data['dob'],
					'gender' => $post_data['gender'],
					'address' => $post_data['address'],
					'contact_no' => $post_data['contact_no']
				) + $this->_create_additional;
			$this->M_users->insert($staff_data);
			exit(json_encode(array(
				'status' => RESULT_SUCCESS,
				'message' => 'Staff has been successfully created.'
			)));
		}
		if (!empty($id)) {
			$data['info'] = $info = $this->M_users->get($id);

			if (empty($info)) {
				show_404();
				die();
			}

		}

		$data['page_data'] = array(
			'module' => 'Staffs',
			'section' => !empty($id) ? 'Update Staff' : 'Add Staff',
			'footer_scripts_path' => array(
				'modules/staffs/footer_form'
			)
		);
		$this->load->view('layouts/dashboard/head', $data);
		$this->load->view('modules/staffs/form', $data);
		$this->load->view('layouts/dashboard/foot', $data);
	}

	public function delete()
	{
		if ($post_data = $this->input->post()) {
			$this->M_users->delete($this->_delete_additional, $post_data['id']);
			exit(json_encode(array(
				'status' => RESULT_SUCCESS,
				'message' => 'Staff has been successfully deleted.'
			)));
		}

		show_404();
		die();
	}
}
