<?php

class Base_model extends CI_Model{

   function insertData($table,$data=array()) {
   	
   	return $this->db->insert($table,$data);   	
   	
   }

   function get_one($table,$where)
   {
      return $this->db
                    ->get_where($table,$this->db->escape($where))
                    ->row_array();
  }
  
  function get_all($table)
  {
		return $this->db->get($table)->result_array();  
  }
  
   function get_where_all($table,$where)
  {
		return $this->db->get_where($table,$this->db->escape($where))->result_array();  
  }
  
  function get_define_field($table,$field,$where)
  {
  		$this->db->select($field);
  		$this->db->where($where);
		return $this->db->get($table)->result_array();  
  }
 //Update
	function update_one($table,$data,$where) 
	{
		$this->db->update($table,$data,$where);
	}

	function get_member($table,$num, $offset)
	{
    $this->db->order_by('id','asc');
    $query = $this->db->get($table,$num, $offset);
    return $query->result_array();
  }
  
  	function get_athlete($where = array(),$num,$offset)
   {
		return $this->db->get_where('athlete',$where, $num, $offset)->result_array();
   }
   
   function get_count($table,$where){
		$temp = $this->db->get_where($table,$where)->result_array();
		return count($temp);
   }
   
   function get_where_in($table,$field,$where_in) {
   	$this->db->select('*');
		$this->db->from($table);
		$this->db->where_in($field,$where_in);
		return $this->db->get()->result_array();
   }
   
  
   
	
}


?>