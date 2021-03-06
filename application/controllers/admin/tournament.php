<?php

class Tournament extends CI_Controller{
	protected $type,$base,$tree,$count_round,$winner;
	
	function __construct($type,$base) {
		parent::__construct();		
		$this->type =$type; 
		$this->base = $base;
		$this->count_round = $this->get_count_round($this->base);
    	$this->winner = $this->count_round+3; 
		$this->load->model('base_model');
		$this->load->model('tournament_model');
		
		$this->tree = $this->tournament_model->includeTree($this->base);		
	}

	function createTournament() {
      $main = new MainStage($this->type,$this->base);
      $exchange = new ExchangeStage($this->type,$this->base);
      
      $data1 = $main->fill_stage();
      $data2 = $exchange->fill_stage();
     return $data1+$data2;   		
	}
	

	function get_tree($base,$level) {		
		$res = $this->base_model->get_define_field('base_'.$base,'tour_id',array('tour_level'=>$level));
		for($i=0;$i<count($res);$i++) {
			$out[$i] = $res[$i]['tour_id'];
		}
		return $out;
	}

	function get_data($pos,$round) {
		return $this->base_model->get_define_field('tournament','id',array('Round'.$round=>$pos,'type'=>$this->type));
	}
   function checkTour($data = array(),$level,$stage,$round) {
   	//echo "current_data:".print_r($data)."<br>";
		$this->tree->Branch($stage,array('tour_id'),array('and'=>array("tour_level='$level'")));
		$n=0;$round="Round".$round;
		
		while($row = $this->tree->NextRow()) {
			$out[$n] = $row['tour_id'];$n++; 	
		}
	//echo "out=".print_r($out).";level=".$level.";stage=".$stage.";round=".$round."<br>";
		for($i=0;$i<$n-1;$i=$i+2) {
			//echo "i=".$out[$i].";i+1=".$out[$i+1].";data[i]=".$data[$out[$i]].";data[i+1]=".$data[$out[$i+1]]."<br>";
			if($data[$out[$i]] != "x") {
				if($data[$out[$i+1]]=="x"){
					$id = $data[$out[$i]];
					$parent = $this->tree->GetParentInfo($out[$i]);
					$parent = $parent['tour_id'];
					$query = mysql_query("Select consolation From base_8 WHERE tour_id=$out[$i]"); //echo mysql_error();
					if($place = mysql_fetch_row($query)) $data[$place[0]] ="x";
					mysql_query("UPDATE tournament SET $round=$parent WHERE id='$id'");									
				 }
			}
			if($data[$out[$i]]=='x') {
				$id = $data[$out[$i+1]];
				$parent = $this->tree->GetParentInfo($out[$i+1]);
				$parent = $parent['tour_id'];
				$query = mysql_query("Select consolation From base_8 WHERE tour_id=$out[$i]"); echo mysql_error();
				if($place = mysql_fetch_row($query)) $data[$place[0]] ="x";
				mysql_query("UPDATE tournament SET $round='$parent' WHERE id='$id'");	
				}
			}
		return $data;		
	}
	function get_count_round($base) {
		return log($base, 2)+1;
	}		
}



class MainStage extends Tournament{

    
    function fill_stage() {
    	for($i=1,$t=$this->count_round;$i<$this->count_round+1,$t>=0;$i++,$t--)
		{
			$this->tree->Branch(2,array('tour_id'),array('and'=>array("tour_level='$t'")));
				while($row = $this->tree->NextRow()) {
					$res = $this->get_data($row['tour_id'],$i);
					if(!empty($res))  $data[$row['tour_id']] = $res[0]['id'];
					else $data[$row['tour_id']] = $i==1 ? "x":"";		    	
				}
			if($i==1) $data = $this->checkTour($data,4,2,2);
		}
		$this->tree->Branch(1,array('tour_id'),array('and'=>array("tour_level='0'")));
		$row = $this->tree->NextRow();
		$res = $this->get_data($row['tour_id'],$this->winner);
		if(!empty($res))  $data[1] = $res[0]['id'];
		else	 $data[1] =""; 
			 
	  return $data;
    }
}

class ExchangeStage extends Tournament{
    
    function fill_stage() {
      //echo $this->count_round;
    	for($i=2,$t=$this->count_round+1;$i<$this->count_round+3;$i++,$t--)
		{
			$this->tree->Branch(3,array('tour_id'),array('and'=>array("tour_level='$t'")));
				while($row = $this->tree->NextRow()) {
					$res = $this->get_data($row['tour_id'],$i);
					if(!empty($res))  
					$data[$row['tour_id']] = $res[0]['id'];
					else $data[$row['tour_id']] ="";
				}
				if($i==2) $data = $this->checkTours($data,5,3,3);		    	
		}
	//ветка победителей
 		$this->tree->Branch(8,array('tour_id'),array('and'=>array("tour_level='3'")));
		while($row = $this->tree->NextRow()) {
			$res = $this->get_data($row['tour_id'],$this->winner);
			if(!empty($res))	$data[$row['tour_id']] = $res[0]['id'];
			else $data[$row['tour_id']] = "";
		}	    		
	  return $data;
    }
	function checkTours($data = array(),$level,$stage,$round) {
		//print_r($data);
		$this->tree->Branch($stage,array('tour_id'),array('and'=>array("tour_level='$level'")));
		$n=0;$round="Round".$round;
		while($row = $this->tree->NextRow()) {
			$out[$n] = $row['tour_id'];$n++; 
		}
	//print_r($out);echo $n;
		for($i=0;$i<$n-1;$i=$i+2) {
			//echo $data[$out[$i]]."<br>"; 
			if($data[$out[$i]] != "x") {
				if($data[$out[$i+1]]=="x"){
					$id = $data[$out[$i]];
					$parent = $this->tree->GetParentInfo($out[$i]);
					$parent = $parent['tour_id'];
					mysql_query("UPDATE tournament SET $round=$parent WHERE id='$id'"); 
					}
			}
			if($data[$out[$i]]=='x') {
				//echo "zjdj"."<br>";
				$id = $data[$out[$i+1]];
				$parent = $this->tree->GetParentInfo($out[$i+1]);
				$parent = $parent['tour_id'];
				mysql_query("UPDATE tournament SET $round='$parent' WHERE id='$id'"); 
			}
		}
	//print_r($data);
		return $data;	
	}
 }
?>