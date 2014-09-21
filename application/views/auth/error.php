    <div class='container'>
           <div class='row'>
              <div class='well span4 offset4' id="auth1">
                 <legend>Авторизация</legend>
                  <div class='alert alert-error'>
                     <a class='close' data-dismiss='alert' href=''>x</a>Неверный логин или пароль!
                  </div>
                  <form action="<?=base_url('index.php/auth/processData');?>" method="POST">
                    <input type='text'  name='login' placeholder='Login' class='span4' autocomplete='off'>                 
                    <input type='password' name='pswd' placeholder='Password' class='span4' autocomplete='off'> 
                    <button type='submit' class='btn btn-block '>Logined</button>           
                 </form>             
              </div>
           </div>        
        
        </div>   
