 
$(document).ready(function() {
var error = false;
	//Login 
var url = $('#email').attr('s');
$('#mail').blur(function () {
   var reg = /[A-Za-z]/;
   var reg1 = /[A-Za-zа-яА-яёЁ]{4,}/;
   if ($(this).val() != '') {
   	
      if(reg.test($(this).val()))
      {
          $.post(url+"/js/checkLog.php",{user:$(this).val() },function (data,textStatus) {        
          if (data == 'yes') { 
           error = false;
           $('#email').append("<div class='error'>Такой логин уже есть!</div>");}
     	    });
       }else {
       		error = false;
          	$('#email').append("<div class='error'>Логин должен быть латинскими буквами!</div>");
             }
         
      if(!reg1.test($(this).val()))
      {
			  error = false;
          $('#email').append("<div class='error'>Не менее 4-х символов!</div>");
      }  
      
   }
   else {
   	error = false;
     $('#email').append("<div class='error'>Поле не должно быть пустым!</div>");   	
   }
}).focus(function () {
	error = true;
	$('#email .error').remove();
});
//Password

 
 $('#r_pswd').blur(function () { 

   if ($('#pswd').val() != $(this).val()) {
   	error = false;
   	 $('#r_pass').append("<div class='error'>Пароли не совпадают</div>");}
   }).focus( function () {
   	error = true;
   	$('#r_pass .error').remove();
   });
 
 
//For Image 
$('#file').change(function(){

 	var reg = /[.](JPG)|(jpg)|(png)|(PNG)$/;
 	if(!reg.test($(this).val()))
 	{  
 	   error = false;
      $('#fileTest').append("<div class='error'>Только jpg,png</div>");  	
 	}
   else {error = true;$('#fileTest .error').remove();} 	
 });
 $('.form-horizontal').submit(function (event) {
   if($('.error').length>0)
   {
	   event.preventDefault();
      apprise("Исправьте ошибки");
   } 
    	
   });
   //FIO
   $('#name :input').blur(function () {  	
   	var regExp = /[A-Za-z]/;
   	 if(!regExp.test($(this).val()))
   	 {
   	 	 error = false;
   	 	$('div #name').append("<div class='error'>Только латинскими буквами!</div>");
   	 }
   }).focus(function () {
		 $('#name .error').remove();  
   });
  
   $('#lastname :input').blur(function () {  	
   	var reg = /[A-Za-z]/;
   	if(!reg.test($(this).val()))
   	{ 
   	   error = false;
   		$('#lastname').append("<div class='error'>Только латинскими буквами!</div>");
   	}
   }).focus(function () {
   	error = true;
		$('#lastname .error').remove();  
   });

   $('#form_seed').submit(function (event) {    	
   	var reg = /[0-9]/;
   	if(!reg.test($('#seed').val()))
   	{
   		event.preventDefault(); 
   	   error = false;
   		$(this).append("<div class='error' style='color:red'>Только цифры!</div>");
   	}
   });
   $('#seed').focus(function () {
   	error = true;
		$('.error').remove();  
   });
 
 });

