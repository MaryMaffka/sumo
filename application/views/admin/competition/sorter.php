<?php 
	$this->load->view("admin/category_table/athlete.php",$data);
	$type = $data['type'];
 echo form_open_multipart('index.php/control_tournament/tournament/'.$type);
?> 


<button type="submit" class="btn btn-success" style="align:left;">Жеребьевка</button>
<?php
	echo form_close();
?>