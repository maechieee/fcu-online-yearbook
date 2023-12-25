<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Strands extends CI_Controller
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
			'Strands_model' => 'M_strands'
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
		$data['info'] = $info = $this->M_strands->get($id);
		if (empty($info)) {
			show_404();
			die();
		}

		$data['page_data'] = array(
			'module' => 'Strands',
			'section' => 'View Strand',
			'scripts_path' => array(
				'modules/strands/view'
			)
		);
		$this->load->view('layouts/dashboard/head', $data);
		$this->load->view('modules/strands/view', $data);
		$this->load->view('layouts/dashboard/foot', $data);
	}

	public function index()
	{
		$data['items'] = $items = $this->M_strands->get_all();
		$data['page_data'] = array(
			'module' => 'Strands',
			'section' => 'Index Strands',
			'footer_scripts_path' => array(
				'modules/strands/footer_index'
			)
		);
		$this->load->view('layouts/dashboard/head', $data);
		$this->load->view('modules/strands/index', $data);
		$this->load->view('layouts/dashboard/foot', $data);
	}

	public function form($id = null)
	{
		if ($post_data = $this->input->post()) {
			if (!empty($id))
			{
				$strand_data = array(
						'name' => $post_data['name']
					) + $this->_update_additional;

				$this->M_strands->update($strand_data, $post_data['id']);
				exit(json_encode(array(
					'status' => RESULT_SUCCESS,
					'message' => 'Data has been successfully updated.'
				)));
			}
			$strand_data = array(
					'name' => $post_data['name']
				) + $this->_create_additional;

			$this->M_strands->insert($strand_data);
			exit(json_encode(array(
				'status' => RESULT_SUCCESS,
				'message' => 'Data has been successfully created.'
			)));
		}

		if (!empty($id)) {
			$data['info'] = $info = $this->M_strands->get($id);
			if (empty($info)) {
				show_404();
				die();
			}
		}
		$data['page_data'] = array(
			'module' => 'Strands',
			'section' => !empty($id) ? 'Update Strand' : 'Add Strand',
			'footer_scripts_path' => array(
				'modules/strands/footer_form'
			)
		);
		$this->load->view('layouts/dashboard/head', $data);
		$this->load->view('modules/strands/form', $data);
		$this->load->view('layouts/dashboard/foot', $data);
	}
}
