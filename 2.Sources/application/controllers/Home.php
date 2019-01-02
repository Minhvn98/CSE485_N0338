<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('Course');
		$this->load->model('Lesson');
		$this->load->model('Documents');
		$this->load->model('Code_example');
	}
	// List all your items
	public function index( $offset = 0 )
	{	
		$data = $this->Course->get_new_course();
		$this->load->view('index', $data);
		
	}

	public function show_all_course()
	{
		$data = $this->Course->get_all_course();
		$this->load->view('all_course', $data);
	}

	public function detailt_course($id)
	{
		$where = array('id_course' => $id);

		$data4 = $this->Course->get_title_course($id);
		$data1 = $this->Lesson->get($where);
		$data2 = $this->Code_example->get($where);
		$data3 = $this->Documents->get($where);

		$data = array($data1, $data2, $data3, $data4);
		$data = array("data_detail_course" => $data);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		$this->load->view('detail_course', $data);
	}

	public function login()
	{
		$this->load->view('login.html');
	}

	public function check_login1()
	{
		$admin_name = $this->input->post('admin_name');
		$password = $this->input->post('password');
		$this->load->model('Account');
		$check = $this->Account->check_login($admin_name, $password);
		if ($check == 1) {
			redirect(base_url().'Admin','refresh');
		} else {
			redirect(base_url().'Home/login','refresh');
		}
	}

	
	
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
