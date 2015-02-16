<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('header');
		$this->form();
	}
public function form()
{
	$data["message"]="";
	$this->load->view("ieee_form",$data);
}
public function submit_form()
{
	$this->load->library("form_validation");
	$this->form_validation->set_rules("full_name","Full Name:","required|alpha");
	$this->form_validation->set_rules("grade","Grade","required");
	$this->form_validation->set_rules("na_id","National ID number","required");
	//$this->form_validation->set_rules("CV","CV","required");

	if($this->form_validation->run() == false)
	{
		$data["message"]="";
		$this->load->view("ieee_form",$data);
	}
	else
	{
		$data["message"]= "The Form Was submitted successfully";
		$this->load->view("header");
		$this->load->view("submitted",$data);	
	}


}
	public function enter_exam(){
				$this->load->model("registered_user");
		if ($_POST) {
			$data['error'] = 0;
			$email = $this->input->post('email',true);
			$code = $this->input->post('code',true);
			$user=$this->registered_user->login($email,$code);
			//redirect("") #to redirect to exam url
			if(!$user){
				$data['error']=1;
			}

		}
		$this->load->view('header');
		$this->load->view('enter-exam',$data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
