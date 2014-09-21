<head>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/admin.css">
	</head>
	<?php if(!empty($member)){?>
 <table class="table" id="tabAthlete">
 <input type="hidden"  class="tableInfo" value="athlete">
 	 <thead>
       <tr>      
			 <th>№</th>
			 <th>#</th>
          <th>id</th>
          <th>Name</th>
          <th>Lastname</th>
          <th>Age</th>
          <th>Date</th>
          <th>Weight</th>
          <th>Country</th>
          <th>Status</th>
          <th>Gender</th>
          <th>Username</th>
          <th>Titul</th>
        </tr>
    </thead>
      <tbody>
              
<?php	foreach($member as $key => $item):?>
		<tr>
		  <td> <?=$key+1?></td>	
		  <td><a class="linkModalWindow" title="<?=$item['id']?>"><img src='<?=base_url()?>img/edit.png' id='edit' width='20' height='20'></a></td>
        <td><?=$item['id']?></a></td>
        <td><?=$item['Name']?></td>
        <td><?=$item['Lastname']?></td>
        <td><?=$item['Age']?></td>
        <td><?=$item['Date']?></td>
        <td><?=$item['Weight']?></td>
        <td><?=$item['Country']?></td>
        <td><?=$item['Status']?></td>
        <td><?=$item['Gender']?></td>
        <td><?=$item['Login']?></td>
        <td><?=$item['Titul']?></td>
      </tr>

<?php endforeach; ?>
		</tbody>
</table>
	<p align="center"><?php echo $this->pagination->create_links();?></p>
<?php include('modalWindow.php');?>
<?php }else{
 echo '<br><h3>Do not have Participants!</h3>';} ?>	
