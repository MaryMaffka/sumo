<?php
	foreach($user as $item)
	{
		echo "<br>";
		echo $item['id']." ".$item['Login'];
		
			
	}

?>
<p><?=$this->pagination->create_links();?></p>
