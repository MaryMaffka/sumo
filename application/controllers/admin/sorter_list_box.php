<?php
include_once('preparation.php');
include_once('control_tournament.php');
/*
Класс Сортировки участников по рейтингу

*/
class sorter_list_box extends Preparation{
	protected $seed;                                 //число сеяных
	protected $champ;
	protected $list;
	function __construct(){
		parent::__construct();
		$this->champ = $this->reverse();

	}

	function createList($type) {
		if($this->getInfoMainStage($type) == "none"){
			$data['title'] = "Основной этап:".$type;
			$data['type'] =  $type;
			$data['countMember'] = $this->loadCountMember($type);
			$this->load_page('admin/main_stage/create',$data);
		}
		else{
			$tour = new control_tournament()	;
			$tour->tournament($type);			
		}
	}

	function formedList() {
	   $this->seed = $_POST['seed'];
	   $data['title'] = "Упорядоченный список";
	   $data['type'] = $_POST['type'];
	   $this->list = $this->getListMember($_POST['type']); //возвращает список участников
	   $data['range'] = range(1,count($this->list));
	 	$data['member'] = $this->titulSort();//сортировка по рейтингу
	 	$this->load_page('admin/competition/sorter',$data);
	 	return $data['member'];
	}

//Формирует список титулов по рейтингу
	function reverse() {
		$i=1;
		$arr = $this->base_model->get_all('titul');
		foreach($arr as $item){
			$new[$i] = $item['Titul'];	
			echo $new[$i];
			$i++;		
		}
		return array_flip($new);		
	}
//Получение номера рейтинга по номеру участника
	function getNumTitul($str) {
		return $this->champ[$str];
	}
//Сортировка по рейтингу
	function titulSort() {
		foreach($this->list as &$item){
			$item['num'] = $this->getNumTitul($item['Titul']);		
		}
		foreach($this->list as $key){
			$sort_cat[] = $key['num'];			 			
 		}
 		array_multisort($sort_cat, SORT_ASC, $this->list);	
		return $this->list;
	}




} 
