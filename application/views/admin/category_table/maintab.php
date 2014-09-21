
 <table class="table">
 	 <thead>
       <tr>
         <th>id</th>
          <th>Name</th>
          <th>Lastname</th>
          <th>Date</th>
          <th>Country</th>
          <th>Status</th>
          <th>Username</th>
        </tr>
    </thead>
      <tbody>
              
<?php foreach($member as $item):?>
		<tr>
        <td><?=$item['id']?></td>
        <td><?=$item['Name']?></td>
        <td><?=$item['Lastname']?></td>
        <td><?=$item['Date']?></td>
        <td><?=$item['Country']?></td>
        <td><?=$item['Status']?></td>
        <td><?=$item['Login']?></td>
      </tr>
<?php endforeach; ?>


		</tbody>
</table>
	<div class="pagination"><p align="center" <?php echo $this->pagination->create_links();?></p></div>