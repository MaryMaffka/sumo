
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/checkForm.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/inputFile.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/radioEv.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/ctg.js"></script>



<div class="container">  
  <div class="row">
        <div class="well test span8 offset1">
           <legend>Регистрация</legend>
           <?php
            $attributes = array('class' => 'form-horizontal','autocomplete' => 'off');
             echo form_open_multipart('index.php/regist/processData',$attributes);?>
				   <div class="control-group">
                <label  class="control-label">Логин:</label>
                <div class="controls" id="email" s="<?=base_url();?>" >
                <input type="text"  id="mail" name="mail" required class="input-medium" value=""> *
                </div>
              </div>
               <div class="control-group">
                <label  class="control-label">Пароль:</label> 
                <div class="controls" id="pass">
                <input type="password" name="paswd" id="pswd" required class="input-medium"> *             
                </div>
                </div>
                 <div class="control-group">
                <label  class="control-label">Повторите пароль:</label> 
                <div class="controls" id="r_pass">
                <input type="password" name="r_paswd" id="r_pswd" required class="input-medium"> *
                </div>
              </div>
                <div class="control-group">
                <label  class="control-label">Имя:</label>
                <div class="controls" id="name">
                <input type="text" name="name"  required class="input-medium"> *
                </div>
              </div>
                <div class="control-group">
                <label  class="control-label">Фамилия:</label>
                <div class="controls" id="lastname">
                <input type="text" name="lastname" required class="input-medium"> * 
                </div>
              </div>
              <div class='control-group'>
              		<label class="control-label">Страна:</label>
              		<div class="controls">
              			<select name="country" class="country" required="">
								<option class="comment" selected  value="">Select the country:</option>
								<?php 
									foreach($data['Country'] as $item)
									{
										printf("<option>%s(%s)</option>",$item['Name'],$item['Abbreviation']);									
									}
								?>              			
              			</select> *
              		</div>
              </div>
              <div class="control-group">
                <label  class="control-label">Дата рождения:</label>
                <div class="controls">
                    <select name="day" class="date">     
				        <?php
				            for($i=1;$i<=31;$i++)
				             {
					             printf("<option value='%s'>%s</option>", $i, str_pad($i, 2,   "0", STR_PAD_LEFT));
				             }
				          ?>               
                     </select>
                     <select name="month" class="date" class="required">  
				         <?php
				            for($i=1;$i<=12;$i++)
				            {
					            printf("<option value='%s'>%s</option>", $i, str_pad($i, 2,   "0", STR_PAD_LEFT));
				            }
				         ?>  
				    </select>  
				    <select name="year" id="year" required>
				    <?php
				         for($i=date("Y");$i>=date("Y")-70;$i--)
				         {  
				           	printf("<option value='%s'>%s</option>", $i,$i);
				         }
				    ?>
				    </select> *		  
                </div>
              </div>
                <div class="control-group">                
                 
                 <div class="fileload">
	                 <label  class="control-label">Фото(jpg,png,bmp):</label>
	                 <div class="controls" id="fileTest">
	                     <div class="file-load-block">
		                     <input type="file" value="" id="file" name="img" required/>
		                        <div class="fileLoad">
		                        	<input type="text" value="Select file" required/>		                      
			                            <button class="btn selFile">Select file</button>
		                        </div>
	                     </div>
	                   </div>
                  </div>
               </div>
             <div class="control-group" id="status">
                <label  class="control-label">Статус:</label>
                <div class="controls" id="category">
                <label class="radio inline">             
                	<input type="radio" name="status" id="optionsRadios1" value="COACH" ><strong>  COACH
                </label>
                <label class="radio inline">             
                	<input type="radio" name="status" id="optionsRadios2" value="REFFERE"><strong>  REFFERE
                </label>
                <label class="radio inline">             
                	<input type="radio" name="status" id="optionsRadios3" value="OFFICIAL"> <strong> OFFICIAL
                </label>
                <label class="radio inline">             
                	<input type="radio" name="status" id="optionsRadios4" value="ATHLETE"><strong>  ATHLETE
                </label>                                                                        
                </div>
            </div>    
            <div class="athlete"> 
				   <div class="control-group">
                    <label  class="control-label">Возрастная категория:</label>
                    <div class="controls">
            				<select id="age" name="age">
            					<option value="">Age:</option>
                				<option>12</option>
               				<option>14</option>
                				<option>16</option>
                				<option>18</option>
                				<option>21</option>
                				<option>23</option>
               			   <option>23+</option>            	            	
            				</select>
             		</div>                            
               </div>
					<div class="control-group" id="sex">
          	     <label  class="control-label">Пол:</label>
          		  <div class="controls">
          			<label class="radio inline">
          			  <input type="radio" name="sex" id="optionsRadios6" value="M"><strong>  Men&nbsp 
          			</label>
          			<label class="radio inline">
          			  <input type="radio" name="sex" id="optionsRadios7" value="W"><strong>  Women
          			</label> 
          			</div>
          		</div>
					<div class="control-group">
              	  <label  class="control-label">Вес:</label>
          	     <div class="controls" id="weightId">
          	  		<select id="weightl" name="weight"> *
					</select> 
          	     </div>
              </div>
         <div class="control-group" id="titul">
                <label  class="control-label">Достижения:</label>
                <div class="controls">
                <label class="radio">             
                	<input type="radio" name="titul" id="optionsRadio1" value="Чемпион мира 2013" ><strong>  Чемпион мира 2013<br>
                </label>
                <label class="radio">             
                	<input type="radio" name="titul" id="optionsRadio2" value="В.И."><strong>  В.И.
                </label>
                <label class="radio">             
                	<input type="radio" name="titul" id="optionsRadio3" value="М.Т."> <strong> М.Т.
                </label>
                <label class="radio">             
                	<input type="radio" name="titul" id="optionsRadio4" value="Чемпион Европы 2013"><strong>  Чемпион Европы 2013
                </label>    
                <label class="radio">             
                	<input type="radio" name="titul" id="optionsRadio5" selected value="нет"><strong>  Нет
                </label>                                                                 
                </div>
            </div>
          </div>   
            <div class="control-group">
                <div class="controls">
                <button type="submit" name="submit"class="btn">Регистрация</button> 
                </div>
              </div>
           
           <?php form_close(); ?>
        </div>
  </div>
</div>
