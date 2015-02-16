<?php
class Applicant extends CI_Model {
	
	function insert_user($data){
		$this->db->insert('applicants',$data);
		return $this->db->insert_id();
	}

	function enter_exam($email,$code){
		$where = array(
			'email' => $email,
			'code'=> $code);
		$this->db->select()->from('applicants')->where($where);
		$query = $this->db->get();
		return $query->first_row('array');
	}
}