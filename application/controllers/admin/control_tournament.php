<?php
include_once('sorter_list_box.php');
include_once('sortition.php');
include_once('preparation.php');
include_once('tournament.php');

class control_tournament extends Preparation{
	protected $type,$tree;
	function __construct(){
		parent::__construct();
		$this->load->model('tournament_model');	
	}	
	function tournament($type) {
		$this->type = $type;
		
		$list = $this->getListMember($type);
		$base = $this->analysisCountMember(count($list));
		$tour = new Tournament($type,$base);
		$data = $tour->createTournament(); 		
		$data['title'] = $this->type;
		
		//echo "<pre>";print_r($data);echo "</pre>";
		$this->load_page("admin/main_stage/base_".$base,$data);
		
	}
	function members_data($id,$flag = NULL) {
		if($id == "x" || $id =="") return $id;
		$result = $this->base_model->get_one('athlete',array('id' =>$id));
		if($flag == NULL) {
			$fio = $result['Name']." ".$result['Lastname'];
			return $fio;
		}
		if($flag == 1){
			return $result;
		}
	}

	function regist_winner($round,$node,$id,$type) {
		$round_num = "Round".$round;
		
		$tree = $this->tournament_model->includeTree($this->getBase($type));
		list($place) = $tree->GetParentInfo($node);
		//перемещения на один раунд вперед победителя
		mysql_query("UPDATE tournament SET $round_num = '$place' WHERE id='$id'");
		
		//проигравший в утешительный этап
		$this->regist_looser($node,$round,$type);
		
		header("Location:http://localhost/sumo/index.php/control_tournament/tournament/$type"); 
	}
	
	function regist_looser($node,$round,$type) {
		echo $round."<br>";
		//$round = $round - 1;
		//info about looser
		echo "id_win:".$node."<br>";
		$id_looser = $this->get_neighbor_node($node);echo "id_tree:".$id_looser."<br>";
		$round1 = $id_looser==2 ? $round-3:$round-1;
		$place = $this->base_model->get_define_field('base_8','consolation',array('tour_id'=>$id_looser));echo "place looser:".$place[0]['consolation']."<br>";
		$id = $this->base_model->get_define_field('tournament','id',array('Round'.$round1=>$id_looser,'type'=>$type));
		 echo "id_looser".$id[0]['id']."<br>";
		$id = $id[0]['id'];
		$place=$place[0]['consolation'];
		$round = $place==7 || $place==6 || $place ==16 ? $round+1:$round;
		
			
		$round = "Round".$round;echo "Round:".$round;
		
		mysql_query("UPDATE tournament SET $round = '$place' WHERE id='$id'");echo mysql_error();
	}
   	
   function checkTour($data = array(),$level,$stage) {
		$this->tree->Branch($stage,array('tour_id'),array('and'=>array("tour_level='$level'")));
		$n=0;
		while($row = $this->tree->NextRow()) {
			$out[$n] = $row['tour_id'];$n++; 	
		}
		for($i=0;$i<count($out);$i=$i+2) {
			if($data[$out[$i]] != "x") {
				if($data[$out[$i+1]]=="x"){
					$id = $data[$out[$i]];
					$parent = $this->tree->GetParentInfo($out[$i]);
					$parent = $parent['tour_id'];
					mysql_query("UPDATE tournament SET Round2=$parent WHERE id='$id'");						
				}
			 }
			if($data[$out[$i]]=='x') {
				$id = $data[$out[$i+1]];
				$parent = $this->tree->GetParentInfo($out[$i+1]);
				$parent = $parent['tour_id'];
				mysql_query("UPDATE tournament SET Round2='$parent' WHERE id='$id'");	
				}
			}

		}
	
	function get_neighbor_node($id) {
		$tree = $this->tournament_model->includeTree(8);
		$node_info  = $tree->GetParentInfo($id);
		list(,,$left,$right,$level) = $node_info;
		echo "left:".$right."<br>";$level = $level+1;
		$query = mysql_query("SELECT tour_id FROM `base_8` WHERE `tour_left` > '$left' AND `tour_right` < '$right' AND `tour_level`=$level ORDER BY `tour_left`");
		while($arr = mysql_fetch_row($query)){
			if($arr[0] != $id) return $arr[0];
		}
	}				

 }

