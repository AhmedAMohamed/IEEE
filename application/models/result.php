<?php
class Result extends CI_Model {
	function insert_result($data){
		$this->db->insert('results',$data);
		return $this->db->insert_id();
	}

	function eval_user($data) {
		$ans_arr = array(
		  "Q1" => "b",
		  "Q2" => "a",
		  "Q3" => "a",
		  "Q4" => "a",
		  "Q5" => "a",
		  "Q6" => "a",
		  "Q7" => "c",
		  "Q8" => "b",
		  "Q9" => "a",
		  "Q10" => "b",
		  "Q11" => "a",
		  "Q12" => "d",
		  "Q13" => "b",
		  "Q14" => "a",
		  "Q15" => "b",
		  "Q16" => "b",
		  "Q17" => "c",
		  "Q18" => "c",
		  "Q19" => "a",
		  "Q20" => "c"
		);
		$result = 0;
		foreach ($ans_arr as $key => $value) {
			if ($data[$key] == $value) {
				$result = $result+ 1;
			}
		}
		$final = array('email' => $data['email'], 'result' => $result);
		$this->db->insert('results', $final);
	}

	function check_if_tested($email){
		$where = array(
			'email'=> $email);
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