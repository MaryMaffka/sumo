<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once('form_controller.php');
include_once 'participants.php';

class auth extends Form_controller{

	function __construct() {
		parent::__construct();
		$this->load->model('base_model');
	}
	
	function index()
	{
		$this->layout('auth/form2');
	}

	function processData() 
	{
			$authData = array('Login' => $_POST['login'],'Password' => $_POST['pswd']);
			$ok = $this->base_model->get_one('user',$authData);
        
			if(!empty($ok))
	  		{
				$tmp =  $this->base_model->get_define_field('maintab','Status',array('Login' =>$authData['Login']));
				$authData['Status'] = $tmp[0]['Status'];
         	$tmp =  $this->base_model->get_define_field('maintab','img',array('Login' =>$authData['Login']));
         	$authData['img'] = $tmp[0]['img']; 
				$this->session->set_userdata($authData);
				$this->loadPersPage();
	  		}
			else 
			{			
				$this->layout('auth/error');
			}	 				
	}
 function loadPersPage() 
 {
 	$userData = $this->session->all_userdata();	
 	if(!empty($userData))
 	{	
		$p = new Participants($userData['Status']);
		$s = $p->getParticipants();
		$userData['table'] = $s->table;
	   $this->session->set_userdata($userData); 
	   $dataPersPage = $s->getInfoAboutMember(array('Login' =>$userData['Login']));
 		$this->load->view('pers_page/main',$dataPersPage);
 		return;
 	}
   $this->layout('auth/errorSession'); 
 }
 
 function quitUser() 
 {
 	$this->session->sess_destroy();
 	$this->layout('auth/form2');
 }
}
?>