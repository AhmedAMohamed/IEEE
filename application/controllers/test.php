<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->load->view("header");
		//timer in seconds in $i
		$i = 15*60;
		$sec = "900";
		header("Refresh: $sec; url=".base_url()."index.php/test/finish"); 
		function timer($li){
			session_start();
			$timeleft = 0;
			if (!isset($_SESSION['start'])) {
				$_SESSION['start'] = time();
			}elseif (isset($_SESSION['start'])) {
				$timeleft = time() - $_SESSION['start'];
			}
			if ($timeleft>=$li) {
				$timeleft = $li;
			}
			return $timeleft;
		}
		if (timer($i) >= $i) {
			redirect( base_url()."index.php/test/finish?error=1");
		}
		$time_now = timer($i);
		$data['submit_time'] = $i - $time_now ;
		$this->load->view("test_form",$data);
	}
	public function finish(){
		$this->load->view("header");
		if (isset($_GET['error'])) {
			$this->load->view("no_back_test");
		}else{
			if ($_POST) {
				//POST here solutions
				
				$this->load->view("thanks",$data);
			}
			else{
				$this->load->view("no_back_test");
			}
		
		}
	}
	public function dead(){
		//To Kill Timer
		session_start();	
		$_SESSION = array();
		
		if(isset($_COOKIE[session_name()])) {
			setcookie(session_name(), '', time()-42000, '/');
		}
		session_destroy();
	}

}

