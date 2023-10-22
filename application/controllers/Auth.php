<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

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
		if ($post_data = $this->input->post()) {
			$role = $post_data['role'];
			switch ($role) {
				case ROLE_ADMINISTRATOR:
					$user = $this->M_users->login($post_data['admin_username'], $post_data['admin_password'], $role);
					$redirect_url = site_url('dashboard/admin_main');
					break;
				case ROLE_STUDENT:
					$user = $this->M_users->login($post_data['student_username'], $post_data['student_password'], $role);
					$redirect_url = site_url('dashboard/student_main');
					break;
				default:
					$user = null;
					$redirect_url = '';
					break;
			}

			if (empty($user)) {
				exit(json_encode(
					array(
						'status' => RESULT_FAILED,
						'message' => 'Account details not found.'
					)
				));
			}

			$this->session->set_userdata('user', $user);
			exit(json_encode(
				array(
					'status' => RESULT_SUCCESS,
					'message' => 'Login successfully!',
					'redirect_url' => $redirect_url
				)
			));
		}
		$data['page_data'] = array(
			'module' => 'Auth',
			'section' => 'Index',
			'footer_scripts_path' => array(
				'modules/auth/footer_index'
			)
		);
		$this->load->view('layouts/auth/head', $data);
		$this->load->view('modules/auth/index', $data);
		$this->load->view('layouts/auth/foot', $data);
	}
}
