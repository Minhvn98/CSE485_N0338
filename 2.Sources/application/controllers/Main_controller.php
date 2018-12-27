<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('Course_model');
	}
	// List all your items
	public function index( $offset = 0 )
	{	
		$data = $this->Course_model->get_all_course();
		$this->load->view('admin', $data);
		
		
	}

	public function show_all_course()
	{
		$data = $this->Course_model->get_all_course();
		$this->load->view('all_course', $data);
	}

	public function show_detailt_course($id)
	{
		$data4 = $this->Course_model->get_title_course($id);
		$data1 = $this->Course_model->get_lesson($id);
		$data2 = $this->Course_model->get_code_example($id);
		$data3 = $this->Course_model->get_documents($id);
		$data = array($data1, $data2, $data3, $data4);
		$data = array("data_detail_course" => $data);
		$this->load->view('detail_course', $data);
	}

	public function show_login()
	{
		$this->load->view('login.html');
	}


	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file Main_controller.php */
/* Location: ./application/controllers/Main_controller.php */
