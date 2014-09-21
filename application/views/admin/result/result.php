<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/admin.css">
<?php
	include_once("/var/www/sumo/application/controllers/admin/control_tournament.php");
	$sd = new control_tournament();//echo "<pre>";print_r($data);echo "</pre>";
?>
 <input type="hidden"  class="tableInfo" value="athlete">
 <?php if(!empty($result)){?>
<table class="table" id="tabAthlete">
	<thead>
   	<tr> 
			<th></th>
			<th>Место</th>
			<th>ФИО</th>
			<th>Возрастная категория</th>
			<th>Вeсовая категория</th>
			<th>Страна/Город</th>
	   </tr>
   </thead>

   <tbody>
              
<?php	foreach($result as $key => $item):?>
<?php    $out=$sd->members_data($item,1);?>

		<tr>
			<td align="center"><a class="linkModalWindow" title="<?=$out['id']?>"><img src='<?=base_url()?>img/edit.png' id='edit' width='20' height='20'></a></td>
			<td style="color:red;"><?=$key?></td>
			<td><?=$out['Name']."  ".$out['Lastname']?></td>
			<td><?=$out['Age']?></td>
			<td><?=$out['Weight']?></td>
			<td><?=$out['Country']?></td>
		</tr>
 <?php endforeach; ?>
		</tbody>
</table>  
<?php }else{
 echo '<br><h3>Турнир не окончен!!</h3>';} ?>	

<?php include('modalWindow.php');?>