<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

	}

	public function ad_detailt_course($id)
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
		$this->load->view('admin_detail_course', $data);
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

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
