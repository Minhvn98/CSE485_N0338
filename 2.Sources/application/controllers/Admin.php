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
	public function index()
	{
		$data = $this->Course->get_all_course();
		$this->load->view('admin', $data);
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
		// die();
		$this->load->view('admin_detail_course', $data);
	}

	// Add a new item
	public function add_lesson($id)
	{
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = '*';
        $config['max_size']             = '10000000';

        $this->load->library('upload', $config);
        $this->upload->do_upload('file-lesson');
        $file = $this->upload->data();
        $file = $file['file_name'];
        

		$title_lesson = $this->input->post('title-lesson');


		 if ($title_lesson == NULL OR $file == NULL) {
        	$this->load->view('fail');
        } else {
        	$file = base_url() . 'uploads/' . $file;
        	$data = array(
        	'id_course' => $id,
        	'title_lesson' => $title_lesson,
        	'link_dowload' => $file
        );
	        if ($this->Lesson->insert($data)) 
	        {
	        	$url = base_url() . 'Admin/ad_detailt_course/' . $id;
	        	redirect($url, 'refresh');
	        }
        }
	}

	public function add_code_example($id)
	{
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = '*';
        $config['max_size']             = '10000000';

        $this->load->library('upload', $config);
        $this->upload->do_upload('file-code');
        $file = $this->upload->data();
        $file = $file['file_name'];

		$title_code = $this->input->post('title-code');

		 if ($title_code == NULL OR $file == NULL) {
        	$this->load->view('fail');
        } else {
        	$file = base_url() . 'uploads/' . $file;
        	$data = array(
        	'id_course' => $id,
        	'title_code_example' => $title_code,
        	'link_dowload' => $file
        );
	        if ($this->Code_example->insert($data)) 
	        {
	        	$url = base_url() . 'Admin/ad_detailt_course/' . $id;
	        	redirect($url, 'refresh');
	        }
        }
	}

	public function add_documents($id)
	{
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = '*';
        $config['max_size']             = '10000000';

        $this->load->library('upload', $config);
        $this->upload->do_upload('file-documents');
        $file = $this->upload->data();
        $file = $file['file_name'];
        

		$title_docments = $this->input->post('title-docments');


		 if ($title_docments == NULL OR $file == NULL) {
        	$this->load->view('add_course_fail');
        } else {
        	$file = base_url() . 'uploads/' . $file;
        	$data = array(
        	'id_course' => $id,
        	'title_documents' => $title_docments,
        	'link_dowload' => $file
        );
	        if ($this->Documents->insert($data)) 
	        {
	        	$url = base_url() . 'Admin/ad_detailt_course/' . $id;
	        	redirect($url, 'refresh');
	        }
        }
	}

	//Update one item
	public function update($id)
	{
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = '10000000';

        $this->load->library('upload', $config);
        $this->upload->do_upload('file-upload');
        $file = $this->upload->data();
        $file = $file['file_name'];

        if($file == NULL){
        	$file = $this->input->post('file-upload2');
        } else {
        	$file = base_url() . 'uploads/' . $file;
        }

		$id_edit = $this->input->post('id-edit');
		$type = $this->input->post('type');
		$title_edit = $this->input->post('title-edit');

		$id_course = $this->Documents->get_id_course($id);
		$id_course = $id_course[0]['id_course'];
		$url = base_url() . 'Admin/ad_detailt_course/' . $id_course;
		switch ($type) {
			case 1: //update for lesson
				$data = array(
					'title_lesson' => $title_edit,
					'link_dowload' => $file
				);
				$this->Lesson->update($data, $id_edit);				
	    		redirect($url,'refresh');
				break;


			case 2: //update for code_example
				$data = array(
					'title_code_example' => $title_edit,
					'link_dowload' => $file
				);
				$this->Code_example->update($data, $id_edit);				
	    		redirect($url,'refresh');
				break;

			case 3: //update for documents
				$data = array(
					'title_documents' => $title_edit,
					'link_dowload' => $file
				);
				$this->Documents->update($data, $id_edit);				
	    		redirect($url,'refresh');
				break;

		}
	}

	//Delete one item
	public function delete_lesson( $id )
	{
		$id_course = $this->Lesson->get_id_course($id);
		$id_course = $id_course[0]['id_course'];
		
		$this->Lesson->delete($id);
		
		$url = base_url() . 'Admin/ad_detailt_course/' . $id_course;
	    redirect($url,'refresh');
	}

	public function delete_documents( $id )
	{
		$id_course = $this->Documents->get_id_course($id);
		$id_course = $id_course[0]['id_course'];
		
		$this->Documents->delete($id);
		
		$url = base_url() . 'Admin/ad_detailt_course/' . $id_course;
	    redirect($url,'refresh');
	}

	public function delete_code( $id )
	{
		$id_course = $this->Code_example->get_id_course($id);
		$id_course = $id_course[0]['id_course'];	
			
		$this->Code_example->delete($id);
		
		$url = base_url() . 'Admin/ad_detailt_course/' . $id_course;
	    redirect($url,'refresh');
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
        	$this->load->view('fail');
        } else {
        	$data = array(
        	'title' => $title,
        	'image' => $image
        );
	        if ($this->Course->insert($data)) 
	        {
	        	redirect(base_url() . 'Admin','refresh');
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
        	redirect(base_url() . 'Admin','refresh');
        } else {
			$this->load->view('fail');
		}
        
	}

	//Delete one item
	public function delete_course( $id )
	{
		$where = $id;
		$this->load->model('Course');
		if ($this->Course->delete($where)) {
			//$this->load->view('add_course_success');
			redirect(base_url() . 'Admin','refresh');
		} else {
			//$this->load->view('add_course_fail');
		}
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
