<?php
include_once('preparation.php');

class analysis_result extends Preparation{
	protected $base,$type;	
	
	function index($type){
		$this->type = $type;
		$this->base =$this->getBase($this->type);
		$data['result'] = $this->get_result();
		$data['title'] = "Результаты:";
		
		$this->load_page("admin/result/result",$data);
	}
	function get_result() {
		$table = "base_".$this->base;
		$data = array();
		$round = "Round".$this->getCountRound($this->base);
		$res =$this->base_model->get_define_field('tournament','id', array($round=>1,'type'=>$this->type)); echo mysql_error();
		if(!empty($res)) {
			$query = mysql_query("Select * FROM tournament WHERE type='$this->type'"); echo mysql_error();
			while($row=mysql_fetch_row($query)){
				for($i=count($row)-1;$i>=1;$i--){
					if($row[$i] != 0) {
						$id = $row[$i];
						break;				
					}	
				}
				$res = mysql_query("SELECT tournament_id FROM $table WHERE tour_id=$id"); echo mysql_error();
				$place = mysql_fetch_row($res);
				$data[$place[0]] = $row[0];
			}
		}
		if(!empty($data)) ksort($data);	
	return $data;
	}	
}
?>
