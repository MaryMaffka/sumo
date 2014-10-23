<?php
include_once 'form_controller.php';
include_once 'participants.php';

class Regist extends Form_controller{

	function __construct() {
		parent:: __construct();
    // i love you more!
	   $this->load->model('base_model');
	}

	function index () 
	{
		$data['Country'] = $this->attachDataToSelect();  
		$this->layout('regist/forma1',$data);	 
	}
  	
//ппроверка данных
  function processData()
  {     
    $arrayDataOfForm = $this->checkForm();
    $filename = $this->processFilename();		
    $arrayDataOfForm['img'] = $filename;
    $arrayDataOfForm['Status'] = $_POST['status'];
    
  	 if(!empty($arrayDataOfForm) ) 
    {  	   
      	 $p = new Participants($arrayDataOfForm['Status']);
      	 $s = $p->getParticipants();
      	 $s->register($arrayDataOfForm);
		
	   	 $this->layout('regist/successRegist');
  	}
  	else { $this->layout('regist/errorRegist');}
 }
}

?>