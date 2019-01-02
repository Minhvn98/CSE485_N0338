<?php 
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Course extends CI_Model {
	
	    /**
	     * @name string TABLE_NAME Holds the name of the table in use by this model
	     */
	    const TABLE_NAME = 'course';
	
	    /**
	     * @name string PRI_INDEX Holds the name of the tables' primary index used in this model
	     */
	    const PRI_INDEX = 'id_course';
	
	    /**
	     * Retrieves record(s) from the database
	     *
	     * @param mixed $where Optional. Retrieves only the records matching given criteria, or all records if not given.
	     *                      If associative array is given, it should fit field_name=>value pattern.
	     *                      If string, value will be used to match against PRI_INDEX
	     * @return mixed Single record if ID is given, or array of results
	     */



		public function get_new_course()
	    {
	        $this->db->select('*');
	        $this->db->order_by('date_upload', 'desc');
	        $query  = $this->db->get('course', 3);
	        $result = $query->result_array();
	        $result = array("data_course" => $result);
	        return $result;
	    }

	    public function get_all_course()
	    {
	        $this->db->select('*');
	        $this->db->order_by('date_upload', 'desc');
	        $query  = $this->db->get('course');
	        $result = $query->result_array();
	        $result = array("data_course" => $result);
	        return $result;
	    }

	    public function get_title_course($id)
	    {
	        $this->db->select('id_course, title');
	        $this->db->where('id_course', $id);
	        $query = $this->db->get('course');
	        return $query->result_array();
	    }
		
	    /**
	     * Inserts new data into database
	     *
	     * @param Array $data Associative array with field_name=>value pattern to be inserted into database
	     * @return mixed Inserted row ID, or false if error occured
	     */
	    public function insert(Array $data) {
	        if ($this->db->insert(self::TABLE_NAME, $data)) {
	            return $this->db->insert_id();
	        } else {
	            return false;
	        }
	    }
	
	    /**
	     * Updates selected record in the database
	     *
	     * @param Array $data Associative array field_name=>value to be updated
	     * @param Array $where Optional. Associative array field_name=>value, for where condition. If specified, $id is not used
	     * @return int Number of affected rows by the update query
	     */
	    public function update(Array $data, $where = array()) {
	            if (!is_array($where)) {
	                $where = array(self::PRI_INDEX => $where);
	            }
	        $this->db->update(self::TABLE_NAME, $data, $where);
	        return $this->db->affected_rows();
	    }
	
	    /**
	     * Deletes specified record from the database
	     *
	     * @param Array $where Optional. Associative array field_name=>value, for where condition. If specified, $id is not used
	     * @return int Number of rows affected by the delete query
	     */

	    public function delete($where = array()) {
          if (!is_array($where)) {
              $where = array(self::PRI_INDEX => $where);
          }
          $this->db->delete(self::TABLE_NAME, $where);
          return $this->db->affected_rows();
      }
	}	        
 ?>