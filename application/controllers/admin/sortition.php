<?php
include_once("preparation.php");
include_once("sorter_list_box.php");
/*
Жеребьевка
*/
class sortition extends Preparation{
	protected $type,$size,$base,$empty;
	public $tree;
	function __construct(){
		parent::__construct();
		$this->load->model('tournament_model');
	}
	
	public function preparToSort() {
		$this->type = $_POST['type'];
		
		$objList = new sorter_list_box(); 
		$orderList = $objList->formedList();//список упорядочен по рейтингу

		$this->size	= count($orderList);
	   $this->base = $this->analysisCountMember($this->size);
	   $this->tree = $this->tournament_model->includeTree($this->base);	
      $tossData = $this->getBaseData($this->base);
      $data = $this->toss($tossData,$orderList);
      $this->registDataOfTournament($data,$this->type,$this->base);
	}


//Получение данных из БД расположение мест в турнирной сетки
	private function getBaseData($base) {
		return $this->base_model->get_where_all('rating',array('base_num' => $base));
	}
//Жеребьевка
	private function toss($tossData,$member) {		
		$numbering = range(1, $this->base);//от 1 до base
		if(count($member) < $this->base) 
		{
			$member = $this->defEmptyMember($member);//определение пустых участников	 			
		} 
		  		
		$toss_list = explode(",",$tossData[0]['sort_list']);	//print_r($arr);					// отсортированный список мест жеребьевки
		for($i = 0;$i<$this->base;$i++) {	
			$toss_list[$i] = $member[$toss_list[$i]-1];	                           //присваивание отсортированному списку - список участников
		}     
		return $toss_list;
    }
	
//Определение пустых  участников
	private function defEmptyMember($list) {
		$this->empty = $this->base - $this->size;  						//сколько участников не хватает
		$data = $this->getBaseData($this->base);
		$free_place = array_slice(explode(',',$data[0]['free_place']),0,$this->empty); 				//определение пустых мест
		array_multisort($free_place,SORT_ASC);  														 //пустые места по возрастанию

		for($i = 0;$i<count($free_place);$i++) 
		{
		 	array_splice($list,$free_place[$i]-1,0, "x");    										//добавить пустых участников к списку
		}
		return $list;
	}
//Регистрация турнира в таблице
   private function registDataOfTournament($list,$type,$base) {
   	
		global $out; 
		$out =array();  	
   	$level = log($base, 2)+1;//Уровень
   	echo "level".$level."<br>";
   	$table = "base_".$base;   	
   	$this->tree->Branch(2,array('tour_id'),array('and'=>array("tour_level='$level'")));
		$i=0;echo mysql_error();
		while($row = $this->tree->NextRow()){
			$out[$i] = $row['tour_id'];
			$i++;	
		}
		var_dump($out);
	   for($t=0;$t<count($list);$t++)
	   {
	   	if($list[$t]!='x')
	   	{
	   		$id = $list[$t]['id'];
	   		echo $id;
	   		$this->base_model->insertData('tournament',array('type'=>$type,'id'=>$id,'Round1'=>$out[$t]));				
			}   
	   }  	
   }


}
	


?>