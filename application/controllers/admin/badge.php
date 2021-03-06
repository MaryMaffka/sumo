<?php
include_once('base_control.php');

class Badge extends Base_control{
	function __construct(){
		parent::__construct();
		$this->load->model('base_model');
	}
	
	function build_badge($table)
	{
		$data['count'] = $this->db->count_all($table);
		$data['badge'] = $this->base_model->get_all($table);
		
		$this->load->view('admin/badge/main',$data);
	}

}
?>