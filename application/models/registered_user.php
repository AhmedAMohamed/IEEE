<?php
class RegisteredUser extends CI_Model {
	

	function enter_exam($email,$code){
		$where = array(
			'email' => $email,
			'code'=> $code);
		$this->db->select()->from('users')->where($where);
		$query = $this->db->get();
		return $query->first_row('array');
	}
}