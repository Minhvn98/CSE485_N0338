<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course_model extends CI_Model {


    public function __construct()
    {
        parent::__construct();
        
    }

    public function get_new_course()
    {
        $this->db->select('*');
        $this->db->order_by('date_upload', 'asc');
        $query  = $this->db->get('course', 3);
        $result = $query->result_array();
        $result = array("data_course" => $result);
        return $result;
    }

    public function get_all_course()
    {
        $this->db->select('*');
        $this->db->order_by('date_upload', 'asc');
        $query  = $this->db->get('course');
        $result = $query->result_array();
        $result = array("data_course" => $result);
        return $result;
    }

    public function get_title_course($id)
    {
        $this->db->select('title');
        $this->db->where('id_course', $id);
        $query = $this->db->get('course');
        return $query->result_array();
    }

    public function get_lesson($id)
    {
        $this->db->select('*');
        $this->db->where('id_course', $id);
        $query = $this->db->get('lesson');
        $result = $query->result_array();
        $result = array("data_lesson" => $result);
        return $result;
        
    }

    public function get_code_example($id)
    {   
        $this->db->select('*');
        $this->db->where('id_course', $id);
        $query = $this->db->get('code_example');
        $result = $query->result_array();
        $result = array("data_code_example" => $result);
        return $result;
        
    }

    public function get_documents($id)
    {
        $this->db->select('*');
        $this->db->where('id_course', $id);
        $query = $this->db->get('documents');
        $result = $query->result_array();
        $result = array("data_documents" => $result);
        return $result;
        
    }

    public function insert_course()
    {
        
    }

}

/* End of file Course_model.php */
/* Location: ./application/models/Course_model.php */