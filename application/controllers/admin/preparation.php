<?php
include_once('base_control.php');

class Preparation extends Base_control{
	protected $type;					//информация о возрасте и поле
	protected $arrayCategory,$size;      //массив категорий веса	

	
	function __construct(){
		parent::__construct();
		$this->load->model('base_model');
	}
	
	function index(){
		$data['title'] = 'WELCOME';
		$this->load_page('admin/render_page/welcome',$data);
	}
	
	function loadArrayCategory(){
		$this->type = $_POST['type'];
		$this->arrayCategory = $_POST['case'];
		$data['type'] = $this->type;
		$data['overall'] = $this->loadCountArray($this->arrayCategory,$this->type);   //определение количества участников в каждой категории веса
		$data['main_stage'] = 'block';
		$this->load->view('admin/competition/weight_category',$data);               //Загрузка таблицы с категориями веса и возраста
	}
 //определение количества участников в каждой категории веса
	function loadCountArray($array = array(),$type) {
			foreach($array as $item)
			{
				$count[$item] =array($this->loadCountMember($item."_".$type),$this->getInfoMainStage($item."_".$type));
			}
		return $count;
	}
//Показать участников определенной категории
	function showMember($type) {
		$data['title'] = "Категория:".$type;
		
		$data['member'] = $this->getListMember($type);
		$this->load_page('admin/category_table/athlete',$data);
	}

	function getListMember($type) {														//Возвращает список участников
		$infoArr =explode('_',$type);
		return $this->base_model->get_where_all('athlete',array('Age' => $infoArr[2],'Gender' =>$infoArr[1],'Weight' => $infoArr[0]));	
	}
//подсчет количества участников в определенной категории
	function loadCountMember($type) {
		$infoArr = explode('_',$type);
		return $this->base_model->get_count('athlete',array('Age' => $infoArr[2],'Gender' =>$infoArr[1],'Weight' => $infoArr[0]));
	}
//Определение базы сетки 8,16,32,64
   function analysisCountMember($length) {
   	global $out;
   	$GLOBALS['out'] = $length;
		$this->size = $length;
		$knownBrackets = array(8,16,32,64);
		if(!in_array($length,$knownBrackets)) {  												
			$num = array_filter($knownBrackets,function ($item) {   //определить диапазон попадания в сетку 
				if($item > $GLOBALS['out'] ) return true;		
			});	
			$base = array_shift($num);
		}else $base = $length;		
		return $base;
	}
//создан ли Основной этап
	function getInfoMainStage($type) {
		
		$res=$this->base_model->get_define_field('tournament','Round1',array('type'=>$type));
		if(array_key_exists(0,$res)) {
			if($res[0]['Round1']==0) {return "none";}
			return "block";
		}
		return "none";
	}

	function getBase($type) {
		return $this->analysisCountMember($this->loadCountMember($type));
	}
	function getCountRound($base) {
		return  log($base, 2)+4;
	}
}
