<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class r_list extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('valid_access_view');
	}
	public function validate()
	{
		$name = $this->input->post('name');
		$password = md5($this->input->post('password'));
		if($name == "Sudo user" && $password == md5("123456789")){
			
			$user_data = array(
                   'user'  => 'sudo_user',
                   'logged_in' => TRUE
            );
			$this->session->set_userdata($user_data);
			redirect("http://ieeeasusb.com/portal/index.php/register_list");
		}
		else{
			$this->load->view('header');
			$this->load->view('valid_access_view');
		}
	}
	
}