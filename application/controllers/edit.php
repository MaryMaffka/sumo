 
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once('form_controller.php');
include_once 'participants.php';

class Edit extends Form_controller{
	protected $sessionData;
    
	function __construct() 
	{
		parent::__construct();
		$this->sessionData = $this->session->all_userdata();
		$this->load->model('base_model');
	}
	
	function index()
	{
		$this->loadData();		
	}

	function loadDataMember() 
	{
				
      return $this->base_model->get_one($this->sessionData['table'],array('Login' => $this->sessionData['Login']));
	}

	function processData() 
	{
		$dataForUpdateTab = $this->checkForm();
		$dataForUpdateTab['Status'] = $this->sessionData['Status'];

		
		
		if(!empty($_FILES['img']['name'])) 
		{
			$dataForUpdateTab['img'] = $this->processFilename();
			$this->sessionData['img'] = $dataForUpdateTab['img']; 
			$this->session->set_userdata($this->sessionData);
		}else {$dataForUpdateTab['img'] = $this->sessionData['img'];}

		$p = new Participants($dataForUpdateTab['Status']);
		$s = $p->getParticipants();
		$s->editInfoAboutMember($dataForUpdateTab);
		$arr = $this->loadDataMember();
		$this->load->view('pers_page/main',$arr);
	}
	
	function loadData() 
	{
		$persData= $this->loadDataMember();
		$dateArray = explode(".",$persData['Date'],3);
		$persData['day'] = $dateArray[0];
		$persData['month'] = $dateArray[1];
		$persData['year'] = $dateArray[2];
		$persData['country'] = $this->attachDataToSelect();
		if($persData['Status'] == 'ATHLETE')
		{
			$this->layout('edit/athleteEdit',$persData);
		}				
		else $this->layout('edit/personEdit',$persData);
	}
}