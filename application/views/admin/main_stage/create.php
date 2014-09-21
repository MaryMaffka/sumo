

<p>Всего участников :<b> <?=$countMember?></b></p><br>
<p>Укажите число сеянных участников для упорядоченного спиcка :</p><br>
<?php
 $attributes = array('class' => 'form-inline','autocomplete' => 'off','id' => 'form_seed');
 echo form_open_multipart('index.php/sortition/preparToSort',$attributes);
?>
<div class="control">
 <div id="seed_f">
	 <input type="text"  name="seed" class="span2"  id="seed" placeholder="Введите число" required>
	 <input type="hidden"  name="type" value="<?=$type?>">
  	 <button class="btn btn-success" id="seed_submit" type="submit" >Далее</button>
  </div> 
</div>
<?php form_close(); ?>
