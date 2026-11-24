<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Yearbook extends CI_Controller
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

	public function index() {
		$category = $_GET['category'];
		if ($category == 'students') {
			$data['items'] = $items = $this->M_users->get_all_by_role_id(ROLE_STUDENT);
		} else if ($category == 'honor_students') {
			$data['items'] = $items = $this->M_users->get_all_honor_students();
		} else if ($category == 'staffs') {
			$data['items'] = $items = $this->M_users->get_all_by_role_id(ROLE_ADMINISTRATOR);
		}

		$data['page_data'] = array(
			'module' => 'Yearbook',
			'section' => 'Index',
			'footer_scripts_path' => array(
				'modules/yearbook/footer_index'
			)
		);
		$this->load->view('layouts/dashboard/head', $data);
		$this->load->view('modules/yearbook/index', $data);
		$this->load->view('layouts/dashboard/foot', $data);
	}
}
