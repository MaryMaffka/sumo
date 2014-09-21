<?php
include_once('base_control.php');
class Auth extends Base_control{

	function __construct()
	{
	   parent::__construct();
		$this->load->library('ion_auth'); 
	}

	function index() 
	{
		if(!$this->ion_auth->logged_in())
		{
			$this->load->view('admin/login');
		}
		else {
			$data['title'] = 'WELCOME';
			 $this->render_page('admin/render_page/welcome',$data);
		}
	}

	function login()
	{
		if($this->ion_auth->login($_POST['username'],$_POST['password'],TRUE))
		{
		 $this->render_page('admin/render_page/welcome',array('title' => 'WELCOME'));
			redirect('admin', 'refresh');
		}
		else 
		{
			 show_error('Invalid username or password');
		    $this->load->view('admin/login');
		}
	}
}
?>