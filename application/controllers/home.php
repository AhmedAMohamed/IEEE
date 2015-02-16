<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('applicant');
	}
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('header');
		if ($_POST) {
			$this->load->library("form_validation");
			$this->form_validation->set_rules("full_name","Full Name:","required");
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
				$data = array(
				'full_name'=>$_POST['full_name'],
				'university'=>$_POST['University'],
				'email'=>$_POST['mail'],
				'faculty'=>$_POST['Faculty'],
				'department'=>$_POST['Department'],
				'year'=>$_POST['Year'],
				'grade'=>$_POST['grade'],
				'IEEEstudent'=>$_POST['did'],
				'extracurricularActivities'=>$_POST['extr'],
				'relatedCourses'=>$_POST['course'],
				'Nid'=>$_POST['na_id'],
				'cv'=>$_POST['CV'],
				'comment'=>$_POST['comm'],
				'code'=>$_POST['code']);
				$this->applicant->insert_user($data);
				$data["message"]= "The Form Was submitted successfully";
				$this->load->view("submitted",$data);	
			}
		}else{
					$this->form();

		}
	}
public function form()
{
	$data["message"]="";
	$this->load->view("ieee_form",$data);
}
public function submit_form()
{
	$this->load->library("form_validation");
	$this->form_validation->set_rules("full_name","Full Name:","required");
	$this->form_validation->set_rules("grade","Grade","required");
	$this->form_validation->set_rules("na_id","National ID number","required");
	$this->form_validation->set_rules("mail","Enter your email","required");
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
				$this->load->model("applicant");
				$data['error'] = 0;

		if ($_POST) {
			$data['error'] = 0;
			$email = $this->input->post('email',true);
			$code = $this->input->post('code',true);
			$user=$this->applicant->enter_exam($email,$code);
			
			if($user){
				//redirect("") #to redirect to exam url
			}{
				$this->load->view('header');
				$this->load->view('enter-exam',$data);
			}

		}
		$this->load->view('header');
		$this->load->view('enter-exam',$data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
