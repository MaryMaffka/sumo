<?php

abstract class Form_controller extends CI_Controller{

	function __construct() {
		parent::__construct();
	}	
	function layout($view,$data = array()) 
	{
		$data['view'] = $view;
		$this->load->view('layout/main',array('data' => $data));
		
	}

	function checkForm() 
	{
		if(isset($_POST['mail']) && isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year'])  && isset($_POST['country']))
		{
			$day = str_pad($_POST['day'], 2, '0', STR_PAD_LEFT);
			$month = str_pad($_POST['month'], 2, '0', STR_PAD_LEFT);
			return $data = array(
				'Login' => $_POST['mail'],
				'Name'  => $_POST['name'],
				'Lastname'  => $_POST['lastname'],
				'Date' => $day.".".$month.".".$_POST['year'],
				'Country' => $_POST['country']			
			);					
		}
	  return array();
   }
   
   function processFilename() {      
   	$config['upload_path'] = './avatars/';
		$config['allowed_types'] = 'jpg|png';
		
		$this->load->library('upload', $config);
	
		if (!$this->upload->do_upload('img'))
		{
			$error = array('error' => $this->upload->display_errors());
			
			foreach($error as $i){echo $i;}
			return;
		}
	   else
	   {
	   	$arr = $this->upload->data();
	   	$w    = 140; $h = 160;
	      $w_src = $arr['image_width'];
	      $h_src = $arr['image_height'];
	      
	   	if(preg_match('/[.](PNG)|(png)$/',$arr['file_name'])) 
			{
		  		$im = imagecreatefrompng($arr['full_path']) ;//если    оригинал был в формате png, то создаем изображение в этом же формате.    Необходимо для последующего сжатия
			}
			  
			if(preg_match('/[.](JPG)|(jpg)|(jpeg)|(JPEG)$/',$arr['file_name'])) 
			{
		  		$im = imagecreatefromjpeg($arr['full_path']); //если оригинал был в формате jpg, то создаем изображение в этом же    формате. Необходимо для последующего сжатия
			}
	
      	$dest = imagecreatetruecolor($w,$h);          
    
     	   if($w_src>$h_src) 
      	{  imagecopyresampled($dest, $im, 0, 0,round((max($w_src,$h_src)-min($w_src,$h_src))/2),0,$w, $h,min($w_src,$h_src), min($w_src,$h_src));}           
  
      	if($w_src<$h_src) 
      	{imagecopyresampled($dest, $im, 0, 0,    0, 0, $w, $h,min($w_src,$h_src),min($w_src,$h_src));}           

      	if($w_src==$h_src) 
      	{ imagecopyresampled($dest,$im, 0, 0, 0, 0, $w, $h, $w_src, $w_src);}    
			    
	   	$date=time();    //вычисляем время в настоящий момент.
	    	imagejpeg($dest,$arr['file_path'].$date.".jpg");//сохраняем    изображение формата jpg в нужную папку, именем будет текущее время. Сделано,    чтобы у аватаров не было одинаковых имен.          
	      
	      $avatar = 'avatars/'.$date.".jpg";//заносим в переменную путь до аватара.      
	
	      $delfull = $arr['full_path']; 
	      unlink($delfull);
	      return $avatar;
	   }
   }
   //Прикрепление данных к выпадающему списку
 function attachDataToSelect () {
	return $this->base_model->get_all('country');
 }	
	abstract  function processData();
}