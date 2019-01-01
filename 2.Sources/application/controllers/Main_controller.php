<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('Course_model');
		$this->load->model('Course');
	}
	// List all your items
	public function index( $offset = 0 )
	{	
		//$data = $this->Course->get_all_course();
		//$this->load->view('admin', $data);
		//$this->load->view('add_course_success', $data);
		$this->load->model('Documents');
		$where = array(
			'id_course' => 2
		);
		$data = $this->Documents->get($where);
		
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}

	public function show_all_course()
	{
		$data = $this->Course->get_all_course();
		$this->load->view('all_course', $data);
	}

	public function show_detailt_course($id)
	{
		$data4 = $this->Course->get_title_course($id);
		$data1 = $this->Course_model->get_lesson($id);
		$data2 = $this->Course_model->get_code_example($id);
		$data3 = $this->Course_model->get_documents($id);
		$data = array($data1, $data2, $data3, $data4);
		$data = array("data_detail_course" => $data);
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		//$this->load->view('detail_course', $data);
	}

	public function login()
	{
		$this->load->view('login.html');
	}


	// Add a new item
	public function add_course()
	{
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = '10000000';

        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
        $path_image = $this->upload->data();
        $path_image = $path_image['file_name'];
        $path_image = base_url() . 'uploads/' . $path_image;


        $title = $this->input->post('title');
        $image = $path_image;

        if ($title == NULL OR $image == NULL) {
        	$this->load->view('add_course_fail');
        } else {
        	$data = array(
        	'title' => $title,
        	'image' => $image
        );
	        if ($this->Course->insert($data)) 
	        {
	        	$this->load->view('add_course_success');
	        }
        }
        
	}

	//Update one item
	public function update_course()
	{
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = '10000000';

        $this->load->library('upload', $config);
        $this->upload->do_upload('image-edit');
        $image = $this->upload->data();
        $image = $image['file_name'];

        if($image == NULL){
        	$image = $this->input->post('image-course');
        } else {
        	$image = base_url() . 'uploads/' . $image;
        }
        $title = $this->input->post('title-edit');
        $id = $this->input->post('id-edit');
        

        $data = array(
        	'title' => $title,
        	'image' => $image
        );

        $this->load->model('Course');
        if ($this->Course->update($data, $id)) {
        	$this->load->view('add_course_success');
        } else {
			$this->load->view('add_course_fail');
		}
        
	}

	//Delete one item
	public function delete_course( $id )
	{
		$where = $id;
		$this->load->model('Course');
		if ($this->Course->delete($where)) {
			$this->load->view('add_course_success');
		} else {
			$this->load->view('add_course_fail');
		}
	}

	
}

/* End of file Main_controller.php */
/* Location: ./application/controllers/Main_controller.php */
