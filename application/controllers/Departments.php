<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Departments extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('user')) {
			redirect('auth/login');
			return;
		}

		$this->load->model(array(
			'Users_model' => 'M_users',
			'Departments_model' => 'M_departments'
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

	public function view($id)
	{
		$data['info'] = $info = $this->M_departments->get($id);
		if (empty($info)) {
			show_404();
			die();
		}

		$data['page_data'] = array(
			'module' => 'Departments',
			'section' => 'View Department',
			'scripts_path' => array(
				'modules/departments/view'
			)
		);
		$this->load->view('layouts/dashboard/head', $data);
		$this->load->view('modules/departments/view', $data);
		$this->load->view('layouts/dashboard/foot', $data);
	}

	public function index()
	{
		$data['items'] = $items = $this->M_departments->get_all();
		$data['page_data'] = array(
			'module' => 'Departments',
			'section' => 'Index Departments',
			'footer_scripts_path' => array(
				'modules/departments/footer_index'
			)
		);
		$this->load->view('layouts/dashboard/head', $data);
		$this->load->view('modules/departments/index', $data);
		$this->load->view('layouts/dashboard/foot', $data);
	}

	public function form($id = null)
	{
		if ($post_data = $this->input->post()) {
			if (!empty($id))
			{
				$department_data = array(
						'name' => $post_data['name'],
						'description' => $post_data['description']
					) + $this->_update_additional;

				$this->M_departments->update($department_data, $post_data['id']);
				exit(json_encode(array(
					'status' => RESULT_SUCCESS,
					'message' => 'Data has been successfully updated.'
				)));
			}
			$department_data = array(
					'name' => $post_data['name'],
					'description' => $post_data['description']
				) + $this->_create_additional;

			$this->M_departments->insert($department_data);
			exit(json_encode(array(
				'status' => RESULT_SUCCESS,
				'message' => 'Data has been successfully created.'
			)));
		}

		if (!empty($id)) {
			$data['info'] = $info = $this->M_departments->get($id);
			if (empty($info)) {
				show_404();
				die();
			}
		}
		$data['page_data'] = array(
			'module' => 'Strands',
			'section' => !empty($id) ? 'Update Department' : 'Add Department',
			'footer_scripts_path' => array(
				'modules/departments/footer_form'
			)
		);
		$this->load->view('layouts/dashboard/head', $data);
		$this->load->view('modules/departments/form', $data);
		$this->load->view('layouts/dashboard/foot', $data);
	}
}
