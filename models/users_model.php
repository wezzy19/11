<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users_model extends CI_Model {

    public function __construct() {
        parent:: __construct();
    }

        function authenticate($email , $password){
            $query = $this->db->query("SELECT *  FROM `admintable` where email='$email' AND password = '$password' ");
            if ($query->num_rows() > 0) {
                return $query->result();
            }
                return 0;

        }
        public function getResidentCount()
{
    $this->db->from('resident');
    $count = $this->db->count_all_results();
    return $count;
}

public function getBlotterCount()
{
    $this->db->from('blotter');
    $count = $this->db->count_all_results();
    return $count;
}
        function fetch_all($table){
            $query = $this->db->query("SELECT * FROM $table ");
            return $query->result();

        }
        public function getResidents()
        {
            $query = $this->db->get('resident');
            return ($query->num_rows() > 0) ? $query->result() : array();
        }
        public function getBlotter()
        {
            $query = $this->db->get('blotter');
            return ($query->num_rows() > 0) ? $query->result() : array();
        }
        public function get_resident_data_by_id($resident_id) {
            return $this->db->get_where('resident', array('resident_id' => $resident_id))->row();
        }
    
        function fetch_info() {
            $query = $this->db->query("SELECT * FROM `users` ");
            return $query->result();

        }
        public function get_all_officials()
        {
            // Fetch all records from the "official" table
            $query = $this->db->get('brgyofficial');
    
            // Return the result as an array of objects
            return $query->result();
        }
        public function getAddofficial()
        {
            return $this->db->get('addofficial')->result();
        }
        public function getAddofficialInfo($addofficialId)
        {
            return $this->db->get_where('addofficial', array('addofficial_id' => $addofficialId))->row();
        }
     

        function fetch_webinfo() {
            $query = $this->db->query("SELECT * FROM `whegy` ");
            return $query->result();

        }

        function insert_data($data) {
            $this->db->insert('users', $data);
            if ($this->db->affected_rows() > 0) {
                return TRUE;
            } else {
                $error = $this->db->error();
                error_log('Database Error: ' . $error['message']);
                return FALSE;
            }
        }
        
        function insert_webdata($data) {
            $this->db->insert('cath', $data);
            if ($this->db->affected_rows() > 0) {
                return TRUE;
            } else {
                $error = $this->db->error();
                error_log('Database Error: ' . $error['message']);
                return FALSE;
            }
        }

    
    
        public function get_list()
        {
            $search_query = $this->input->get('search_query');
            $this->db->select('*');
            $this->db->from('users');
            
            if (!empty($search_query)) {
                $this->db->like('field_name', $search_query);
                // Add other relevant search conditions
            }
            
            $query = $this->db->get();
            $list = $query->result();
            
            return $list;
        }
    
		                                               
        public function getSettings() {
            $query = $this->db->get_where('users', array('resident_id' => 1));
            return $query->row_array();
        }
       
        public function count_male_residents() {
            $this->db->where('sex', 'Male');
            $query = $this->db->get('resident');
            return $query->num_rows();
        }
        public function count_female_residents() {
            $this->db->where('sex', 'Female');
            $query = $this->db->get('resident');
            return $query->num_rows();
        }
    
        // Count senior residents (assuming you have a column for age)
        public function count_senior_residents() {
            $this->db->where('birth_date <=', date('Y-m-d', strtotime('-60 years')));
            $query = $this->db->get('resident');
            return $query->num_rows();
        }
}

?>