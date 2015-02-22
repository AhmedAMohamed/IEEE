<?php
class Admin_model extends CI_Model {
	
	function get_data(){
		$query = $this->db->query('SELECT full_name, university, faculty, department FROM applicants');
		return $query->result();
	}
}


/*
full name
university
faculty
department
*/