<?php
class Test extends CI_Controller{ 
	
	function __construct() 
	{
		parent::__construct();
		$this->load->model('base_model');
		$this->load->library('pagination');
	} 
	
	function index() 
	{
		$arr = array('В.И.','Чемпион мира 2013','Чемпион Европы 2013');
		$this->db->select('*');
		$this->db->from('athlete');
		$this->db->where_in('Titul',$arr);
		$query = $this->db->get();
		var_dump($query->result_array());
		
	}
	//Нумирация страниц
	function page($id) {
		$config['base_url'] = 'http://localhost/sumo/index.php/test/page/';
		$config['total_rows'] = $this->db->count_all('user');
		$config['per_page'] = '6'; 

	 $this->pagination->initialize($config);
	
 		$data['user'] = $this->base_model->get_member('user',$config['per_page'],$this->uri->segment(3));
		$this->load->view('test',$data);
	}
}
?>