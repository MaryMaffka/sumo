
<?php
            $attributes = array('autocomplete' => 'off');
             echo form_open_multipart('auth/login',$attributes);?>
             Username:<br>
              <input type="text"   name="username" required  value=""> *
              Password:<br>
               <input type="text"   name="password" required  value=""> *
               <br>
               <button type="submit" name="submit"class="btn">Авторизация</button> 
               
       <?php form_close(); ?>