<?php

class Base_control extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('base_model');
	}
	
	function render_page($view, $data=array())
	{
		$data['view'] = $view;
		$this->load->view('admin/render_page/index',array('data' => $data));
	}
	
	function load_page($view, $data=array())
	{
		$data['view'] = $view;
		$this->load->view('admin/competition/index',array('data' => $data));
	}
}
?>