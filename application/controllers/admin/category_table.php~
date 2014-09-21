<?php
include_once('base_control.php');
class category_table extends Base_control{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('base_model');
		$this->load->library('pagination');
	}

	function index()
	{
		
	}
	
	function dataFromTab($table)
   {
   	$data['title'] = $this->get_title($table);
   	$view = "admin/category_table/".$table;
   	
   	$config['base_url'] = base_url().'admin/category_table/dataFromTab/'.$table;
		$config['total_rows'] = $this->db->count_all($table);
		$config['per_page'] = '10';
		$config['uri_segment'] = 5;
			
		$this->pagination->initialize($config); 
   	$data['member'] = $this->base_model->get_member($table,$config['per_page'],$this->uri->segment(5));
   	$this->render_page($view,$data);
   }
   
   function athlete_category($weight,$age,$gender)
   {
   	$view = 'admin/category_table/'.$gender;
   	$arr = array(
			'Weight' => $weight,
			'Age' => $age,
			'Gender' =>$gender
   	);
	$data['title'] = $gender."_".$age."_".$weight;
   	$data['member'] = $this->base_model->get_athlete($arr,10,$this->uri->segment(7));
   	$this->render_page($view,$data);
   }

   function get_gender($gender)
   {
		$data['title'] = $this->get_title($gender);
		$view = 'admin/category_table/'.$gender;
		$data['member'] = $this->base_model->get_where_all('athlete',array('Gender' => $gender));
		$this->render_page($view,$data);
   }
   
   function get_title($item)
   {
		$arr = array(
			'W' =>'Women',
			'M' =>'Men',
			'maintab' => 'ВСЕ УЧАСТНИКИ',
   			'athlete' => 'Спортсмены',
   			'person' => 'Официальные лица',
   			'user' => 'Users'
		);
		return $arr[$item];
   }
}
