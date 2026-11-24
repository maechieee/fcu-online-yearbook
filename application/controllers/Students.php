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

	public function update_profile_as_student()
	{
		if ($post_data = $this->input->post()) {
			$photo_1_file = null;
			$config['upload_path'] = 'assets/uploads/photo/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['encrypt_name'] = true;
			$config['max_size'] = '10000000000'; // max_size in kb

			if (!empty($_FILES['photo_1']['name'])) {
				$config['file_name'] = $_FILES['photo_1']['name'];
				$this->load->library('upload', $config);

				// File upload
				if ($this->upload->do_upload('photo_1')) {
					if (!is_dir('assets/uploads/photo')) {
						mkdir('assets/uploads/photo', 0755);
					}
					// Get data about the file
					$upload_data = $this->upload->data();
					$photo_1_file = $upload_data['file_name'];
				} else {
					exit(json_encode(
						array(
							'status' => RESULT_FAILED,
							'message' => 'Failed to upload photo.'
						)
					));
				}
			}

			$user_data = array(
					'student_no' => $post_data['student_no'],
					'first_name' => $post_data['first_name'],
					'middle_name' => $post_data['middle_name'],
					'last_name' => $post_data['last_name'],
					'gender' => $post_data['gender'],
					'dob' => $post_data['dob'],
					'contact_no' => $post_data['contact_no'],
					'email_address' => $post_data['email_address'],
					'address' => $post_data['address'],
					'department_id' => $post_data['department_id'],
					'achievements' => $post_data['achievements'],
					'notes' => $post_data['notes']
				) + $this->_update_additional;

			if (!empty($photo_1_file)) {
				$user_data['picture_1'] = $photo_1_file;
			}

			$this->M_users->update($user_data, $this->session->userdata('user')['id']);
			exit(json_encode(array(
				'status' => RESULT_SUCCESS,
				'message' => 'Your profile has been successfully updated.'
			)));
		}

		$data['info'] = $info = $this->M_users->get($this->session->userdata('user')['id']);
		if (empty($info)) {
			show_404();
			die();
		}

		$data['departments'] = $departments = $this->M_departments->get_all();
		$data['page_data'] = array(
			'module' => 'Students',
			'section' => 'Update Profile as Student',
			'footer_scripts_path' => array(
				'modules/students/footer_update_profile_as_student'
			)
		);
		$this->load->view('layouts/dashboard/head', $data);
		$this->load->view('modules/students/update_profile_as_student', $data);
		$this->load->view('layouts/dashboard/foot', $data);
	}

	public function view($id)
	{
		$data['info'] = $info = $this->M_users->get($id);
		if (empty($info)) {
			show_404();
			die();
		}

		$data['page_data'] = array(
			'module' => 'Students',
			'section' => 'View Student',
			'scripts_path' => array(
				'modules/students/footer_view'
			)
		);
		$this->load->view('layouts/dashboard/head', $data);
		$this->load->view('modules/students/view', $data);
		$this->load->view('layouts/dashboard/foot', $data);
	}

	public function delete($id)
	{
		if ($post_data = $this->input->post()) {
			$this->M_users->delete($this->_delete_additional, $post_data['id']);
			exit(json_encode(array(
				'status' => RESULT_SUCCESS,
				'message' => 'Student has been successfully deleted.'
			)));
		}

		show_404();
		die();
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
			$photo_1_file = null;
			$config['upload_path'] = 'assets/uploads/photo/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['encrypt_name'] = true;
			$config['max_size'] = '10000000000'; // max_size in kb

			if (!empty($_FILES['photo_1']['name'])) {
				$config['file_name'] = $_FILES['photo_1']['name'];
				$this->load->library('upload', $config);

				// File upload
				if ($this->upload->do_upload('photo_1')) {
					if (!is_dir('assets/uploads/photo')) {
						mkdir('assets/uploads/photo', 0755);
					}
					// Get data about the file
					$upload_data = $this->upload->data();
					$photo_1_file = $upload_data['file_name'];
				} else {
					exit(json_encode(
						array(
							'status' => RESULT_FAILED,
							'message' => 'Failed to upload photo.'
						)
					));
				}
			}

			if (!empty($id)) {
				$student_data = array(
						'student_no' => $post_data['student_no'],
						'email_address' => $post_data['email_address'],
						'first_name' => $post_data['first_name'],
						'middle_name' => $post_data['middle_name'],
						'last_name' => $post_data['last_name'],
						'gender' => $post_data['gender'],
						'dob' => $post_data['dob'],
						'contact_no' => $post_data['contact_no'],
						'address' => $post_data['address'],
						'department_id' => $post_data['department_id'],
						'notes' => $post_data['notes'],
						'achievements' => $post_data['achievements'],
						'is_activated' => $post_data['is_activated'],
						'honor' => $post_data['honor']
					) + $this->_update_additional;

				if (!empty($photo_1_file)) {
					$student_data['picture_1'] = $photo_1_file;
				}

				$this->M_users->update($student_data, $post_data['id']);
				exit(json_encode(array(
					'status' => RESULT_SUCCESS,
					'message' => 'Student has been successfully updated.'
				)));
			}
			$student_data = array(
					'id_number' => $post_data['id_number'],
					'student_no' => $post_data['student_no'],
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
					'department_id' => $post_data['department_id'],
					'notes' => $post_data['notes'],
					'achievements' => $post_data['achievements'],
					'role_id' => ROLE_STUDENT,
					'is_activated' => $post_data['is_activated'],
					'honor' => $post_data['honor']
				) + $this->_create_additional;

			if (!empty($photo_1_file)) {
				$student_data['picture_1'] = $photo_1_file;
			}

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
		$data['departments'] = $departments = $this->M_departments->get_all();
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
