<?php

class Participants extends CI_Controller{
   private $mode;
   
  function  __construct($mode =NULL)
  {
  	   parent:: __construct();
  	   $this->load->model('base_model');
  		$this->mode = $mode;
  }

	function getParticipants() 
	{
		switch($this->mode) 
		{
			case ('ATHLETE'):
				return new Athlete();
			default: return new Person();
		}
	}

	function register($arrayDataOfForm = array()) 
	{
	} 
}
 
class Athlete extends Participants{
	
	public $table = 'athlete';
	
	function __construct() {
		parent:: __construct();
	}
	
	function register($arrayDataOfForm = array()) 
	{
		$DataByAthlete = array(
			'Name' => $arrayDataOfForm['Name'],
			'Lastname' => $arrayDataOfForm['Lastname'],
			'Age' => $_POST['age'],
			'Date' => $arrayDataOfForm['Date'],
			'Country' =>$arrayDataOfForm['Country'],
			'Weight' => $_POST['weight'],
			'img' =>$arrayDataOfForm['img'],
			'Gender' =>$_POST['sex'],
			'Login' => $arrayDataOfForm['Login'],
			'Status' => $arrayDataOfForm['Status'],				      
			'Titul' => $_POST['titul']				      
      	);
      	
      	$this->base_model->insertData('athlete',$DataByAthlete);
      	$this->base_model->insertData('maintab',$arrayDataOfForm); 
		 	$this->base_model->insertData('user',array('Login'=>$arrayDataOfForm['Login'],'Password'=>$_POST['paswd']));   	  
	}

	function getInfoAboutMember($where = array()) 
	{
		return $this->base_model->get_one($this->table,$where);
	}


}

class Person extends Participants{

	public $table = 'person';
	
	function __construct() {
		parent:: __construct();
		
	}
	
	function register($arrayDataOfForm = array()) 
	{
		 $this->base_model->insertData($this->table,$arrayDataOfForm);
		 $this->base_model->insertData('maintab',$arrayDataOfForm); 
		 $this->base_model->insertData('user',array('Login'=>$arrayDataOfForm['Login'],'Password'=>$_POST['paswd']));   	  
	}

	
	function getInfoAboutMember($where = array()) 
	{
		return $this->base_model->get_one($this->table,$where);
	}

   function editInfoAboutMember($arrayDataOfForm)
   {
   	 $where = array('Login' => $arrayDataOfForm['Login']);
		 $this->base_model->update_one($this->table,$arrayDataOfForm,$where);
		 $this->base_model->update_one('maintab',$arrayDataOfForm,$where); 
   }
}
?>