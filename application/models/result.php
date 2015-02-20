<?php
class Result extends CI_Model {
	
	function insert_result($data){
		$this->db->insert('results',$data);
		return $this->db->insert_id();
	}

	function check_if_tested($code){
		$where = array(
			'code'=> $code);
		$this->db->select()->from('results')->where($where);
		$query = $this->db->get();
		if($query->first_row('array'))
		{
			return 1;
		}else{
			return 0;
		}
	}
}