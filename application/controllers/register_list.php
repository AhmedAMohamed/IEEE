<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register_list extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('user') == "sudo_user" && $this->session->userdata('logged_in') == True)
		{
			//echo "valid";
			$this->get_registered_data();
		}
		else{
			redirect('http://ieeeasusb.com/portal/index.php/r_list/');
		}
	}
	
	public function get_registered_data()
	{
		$this->load->model('admin_model');
		$all = $this->admin_model->get_data();
		$data = new StdClass();
		//$all = array('a'=>"ahmeed",'b'=>"mohamed");
		$data->all = $all;
		$this->load->view('list_view',$data);
	}
	
	
}