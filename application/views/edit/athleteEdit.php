<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/checkForm.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/inputFile.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/radioEv.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/ctg.js"></script>


<div class="container">  
  <div class="row">
        <div class="well test span8 offset1">
           <legend>Редактирование</legend>
           <?php
            $attributes = array('class' => 'form-horizontal');
           echo form_open_multipart('index.php/edit/processData',$attributes);?>
				   <div class="control-group">
                <label  class="control-label">Логин:</label>
                <div class="controls" id="email" s="<?=base_url();?>" >
                <input type="text"  id="mail" name="mail" readonly="" class="input-medium" value="<?=$Login?>"> 
                </div>
              </div>
                <div class="control-group">
                <label  class="control-label">Имя:</label>
                <div class="controls">
                <input type="text" name="name" required class="input-medium" value="<?=$Name?>">
                </div>
              </div>
                <div class="control-group">
                <label  class="control-label">Фамилия:</label>
                <div class="controls">
                <input type="text" name="lastname" required class="input-medium" value="<?=$Lastname?>">  
                </div>
              </div>
              <div class='control-group'>
              		<label class="control-label">Страна:</label>
              		<div class="controls">
              			<input type="text" name='country' required class="input-medium" value="<?=$Country?>"> 
              		</div>
              </div>
              <div class="control-group">
                <label  class="control-label">Дата рождения:</label>
                <div class="controls">
                    <select name="day" class="date">  
                    	<option selected=""><?=$day?></option>   
				        <?php
				            for($i=1;$i<=31;$i++)
				             {
					             printf("<option value='%s'>%s</option>", $i, str_pad($i, 2,   "0", STR_PAD_LEFT));
				             }
				          ?>               
                     </select>
                     <select name="month" class="date">  
                     	<option selected=""><?=$month?></option>
				         <?php
				            for($i=1;$i<=12;$i++)
				            {
					            printf("<option value='%s'>%s</option>", $i, str_pad($i, 2,   "0", STR_PAD_LEFT));
				            }
				         ?>  
				    </select>  
				    <select name="year" id="year">
				    	<option><?=$year?></option>
				    <?php
				         for($i=date("Y");$i>=date("Y")-70;$i--)
				         {  
				           	printf("<option value='%s'>%s</option>", $i,$i);
				         }
				    ?>
				    </select>		  
                </div>
              </div>
                <div class="control-group">                
                 
                 <div class="fileload">
	                 <label  class="control-label">Фото(jpg,png,bmp):</label>
	                 <div class="controls" id="fileTest">
	                     <div class="file-load-block">
		                     <input type="file" value="<?=$img?>" id="file" name="img"/>
		                        <div class="fileLoad">
		                        	<input type="text" value="Select file" />		                      
			                            <button class="btn selFile">Select file</button>
		                        </div>
	                     </div>
	                   </div>
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
          	  		<select id="weight" name="weight"> *
            		<option value="">Weight:</option>
                  </select> 
          	     </div>
              </div>
            </div>   
            <div class="control-group">
                <div class="controls">
                <button type="submit" name="submit"class="btn">Редактировать</button> 
                </div>
              </div>
           
           <?php form_close() ?>
        </div>
  </div>
</div>


 
