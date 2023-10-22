<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Students extends CI_Controller
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
			'Strands_model' => 'M_strands',
			'Grade_levels_model' => 'M_grade_levels'
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
		$data['info'] = $info = $this->M_students->get($id);
		if (empty($info)) {
			show_404();
			die();
		}

		$data['page_data'] = array(
			'module' => 'Students',
			'section' => 'View Student',
			'scripts_path' => array(
				'modules/students/view'
			)
		);
		$this->load->view('layouts/dashboard_head', $data);
		$this->load->view('modules/students/view', $data);
		$this->load->view('layouts/dashboard_foot', $data);
	}

	public function index()
	{
		$data['items'] = $items = $this->M_users->get_all_by_role_id(ROLE_STUDENT);
		$data['page_data'] = array(
			'module' => 'Students',
			'section' => 'Index',
			'footer_scripts_path' => array(
				'modules/students/footer_index'
			)
		);
		$this->load->view('layouts/dashboard/head', $data);
		$this->load->view('modules/students/index', $data);
		$this->load->view('layouts/dashboard/foot', $data);
	}

	public function form($id = null)
	{
		if ($post_data = $this->input->post()) {
			$student_data = array(
					'id_number' => $post_data['id_number'],
					'username' => $post_data['id_number'],
					'password' => password_hash($post_data['id_number'], PASSWORD_DEFAULT),
					'email_address' => $post_data['email_address'],
					'first_name' => $post_data['first_name'],
					'middle_name' => $post_data['middle_name'],
					'last_name' => $post_data['last_name'],
					'gender' => $post_data['gender'],
					'dob' => $post_data['dob'],
					'contact_no' => $post_data['contact_no'],
					'address' => $post_data['address'],
					'strand_id' => $post_data['strand_id'],
					'grade_level_id' => $post_data['grade_level_id'],
					'role_id' => ROLE_STUDENT,
					'is_activated' => $post_data['is_activated']
				) + $this->_create_additional;

			$this->M_users->insert($student_data);
			exit(json_encode(array(
				'status' => RESULT_SUCCESS,
				'message' => 'Student has been successfully created.'
			)));
		}

		if (!empty($id)) {
			$data['info'] = $info = $this->M_users->get($id);
			if (empty($info)) {
				show_404();
				die();
			}
		}
		$data['strands'] = $strands = $this->M_strands->get_all();
		$data['grade_levels'] = $grade_levels = $this->M_grade_levels->get_all();
		$data['page_data'] = array(
			'module' => 'Students',
			'section' => !empty($id) ? 'Update Student' : 'Add Student',
			'footer_scripts_path' => array(
				'modules/students/footer_form'
			)
		);
		$this->load->view('layouts/dashboard/head', $data);
		$this->load->view('modules/students/form', $data);
		$this->load->view('layouts/dashboard/foot', $data);
	}
}
