<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

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
		$data['page_data'] = array(
			'module' => 'Home',
			'section' => 'Index',
			'footer_scripts_path' => array(
				'modules/home/footer_index'
			)
		);
		$this->load->view('layouts/home/head', $data);
		$this->load->view('modules/home/index', $data);
		$this->load->view('layouts/home/foot', $data);
	}
}
