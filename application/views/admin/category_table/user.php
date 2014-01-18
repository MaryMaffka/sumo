 <table class="table">
 	 <thead>
       <tr>
         <th>id</th>
          <th>Username</th>
        </tr>
    </thead>
      <tbody>
              
<?php foreach($member as $item):?>
		<tr>
        <td><?=$item['id']?></td>
        <td><?=$item['Login']?></td>
      </tr>
<?php endforeach; ?>


		</tbody>
</table>
	<p align="center"><?php echo $this->pagination->create_links();?></p> 
