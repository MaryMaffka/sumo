
 <table class="table">
 	 <thead>
       <tr>
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
        </tr>
    </thead>
      <tbody>
              
<?php foreach($member as $item):?>
		<tr>
        <td><?=$item['id']?></td>
        <td><?=$item['Name']?></td>
        <td><?=$item['Lastname']?></td>
        <td><?=$item['Age']?></td>
        <td><?=$item['Date']?></td>
        <td><?=$item['Weight']?></td>
        <td><?=$item['Country']?></td>
        <td><?=$item['Status']?></td>
        <td><?=$item['Gender']?></td>
        <td><?=$item['Login']?></td>
      </tr>
<?php endforeach; ?>


		</tbody>
</table>
	<p align="center"><?php echo $this->pagination->create_links();?></p>