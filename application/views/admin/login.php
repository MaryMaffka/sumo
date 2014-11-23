<link rel="stylesheet" href="<?=base_url();?>css/formCss.css" type="text/css" />

<?php
	$attributes = array('autocomplete' => 'off');
   echo form_open_multipart('index.php/admin/auth/login',$attributes);?>
   <div id="admin_login_form">
   	Username:<br>
      <input type="text" name="username" required  value=""> *<br>
      Password:<br>
      <input type="password" name="password" required  value=""> *
      <input type="password" name="password" required  value=""> *
      <br>
      <input type="submit" name="submit">
   </div>          
   <?php form_close(); ?>