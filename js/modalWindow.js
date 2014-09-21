$(document).ready(function() {
	var table = $('.tableInfo').val();																			//какая таблица используется
	var base_url = "http://localhost/sumo/";

	$('.linkModalWindow').click(function (event) {
		event.preventDefault();
		
		var id = $(this).attr('title');
		var cordinate = $(this).offset();						//current position
		
		  $.post(base_url+"info/getInfoOnId/"+id+"/"+table,function (data) {
		    var data = JSON.parse(data);
			var img = base_url+data.img;
			
			 $('#page img#img').attr('src',img).attr('src');
			  $('#page span').text(data.Name +" "+data.Lastname);
              $('#page #date').text(data.Age);
              $('#country').text(data.Country);
              $('#weight').text(data.Weight);
         
				  $('#page').css({
							top: cordinate.top-20,
							left: cordinate.left -190,
							display: 'block'                
                });             
		  })
		
	});
	 $('#close').mouseover(function () {
	       	
               $(this).css({opacity: 1});
                                                         
            }).mouseout(function () {
            	            
               $(this).css({opacity: 0.3});
               
             }).click(function () {
	             
	             $('#page').css({display:'none'});
    });
	 $('#pen').mouseover(function () {
	       	
               $(this).css({opacity: 1});
                                                         
            }).mouseout(function () {
            	            
               $(this).css({opacity: 0.3});
               
             })
   $('#print').mouseover(function () {
	       	
               $(this).css({opacity: 1});
                                                         
            }).mouseout(function () {
            	            
               $(this).css({opacity: 0.3});
               
             });          
	$('td img#edit') .mouseover(function () {
	       	
               $(this).css({opacity: 1});
                                                         
            }).mouseout(function () {
            	            
               $(this).css({opacity: 0.3});
               
             });
	
});	