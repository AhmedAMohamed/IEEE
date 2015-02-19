<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->load->view("header");
		//timer in seconds in $i
		$i = 30;
		$sec = "30";
		header("Refresh: $sec; url=".base_url()."index.php/test/finish"); 
		//header("Refresh:30;url=".base_url()."index.php/test/finish");
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
				$kk = $_POST['kk'];
				$data['kk'] = $kk;
				$this->load->view("thanks",$data);
			}
			else{
				$this->load->view("no_back_test");
			}
		
		}
	}
	public function dead(){
		session_start();	
		// 2. Unset all the session variables
		$_SESSION = array();
		
		// 3. Destroy the session cookie
		if(isset($_COOKIE[session_name()])) {
			setcookie(session_name(), '', time()-42000, '/');
		}
		// 4. Destroy the session
		session_destroy();
	}

}

