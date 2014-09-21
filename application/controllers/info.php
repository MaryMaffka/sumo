<?php

 class info extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('base_model');
	}
	
	function getInfoOnId($id,$table){
		$arr = $this->base_model->get_one($table,array('id' => $id));
		echo json_encode($arr);
	}
 }
 ?>