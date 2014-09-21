<?php
include_once("dbtree.class.php");
include_once("db_mysql.class.php");
define('DB_CACHE', FALSE);
class Tournament_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->db = new db('localhost','root','iloveyou','sportbasa');
	}

	function includeTree($base) {
		return new dbtree('base_'.$base,'tour',$this->db);
	}

} 
