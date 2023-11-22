<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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

	public function admin_main() {
		$data['page_data'] = array(
			'module' => 'Dashboard',
			'section' => 'Index',
			'footer_scripts_path' => array(
				'modules/dashboard/footer_admin_main'
			)
		);
		$this->load->view('layouts/dashboard/head', $data);
		$this->load->view('modules/dashboard/admin_main', $data);
		$this->load->view('layouts/dashboard/foot', $data);
	}

	public function student_main() {
		$data['page_data'] = array(
			'module' => 'Dashboard',
			'section' => 'Index',
			'footer_scripts_path' => array(
				'modules/dashboard/footer_student_main'
			)
		);
		$this->load->view('layouts/dashboard/head', $data);
		$this->load->view('modules/dashboard/student_main', $data);
		$this->load->view('layouts/dashboard/foot', $data);
	}
}
