    <div class="container">
           <div class="row">
              <div class="well  span4 offset4 " id="auth1">
                 <legend>Авторизация</legend>
                  <form action="<?=base_url('index.php/auth/processData');?>" method="POST">
                    <input type="text"  name="login" placeholder="Login" class="span4" autocomplete="off" required>                 
                    <input type="password" name="pswd" placeholder="Password" class="span4" autocomplete="off"required> 
                    <button type="submit" class="btn btn-block ">Logined</button>           
                 </form>             
              </div>
           </div>                
        </div>              
  