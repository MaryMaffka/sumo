$(document).ready(function () {
	$('#file').change(function(){
	   var fileResult = $(this).val().split("\\").pop();
		$(this).parent().find('.fileLoad').find('input').val(fileResult);
   });
   
   $('#file').hover(function(){
     $(this).parent().find('button').addClass('button-hover');
   }, function(){
      $(this).parent().find('button').removeClass('button-hover');});
	
});