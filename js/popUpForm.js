//админ скрипт
$( document ).ready(function() {

	$('.main').each(function () {
	       $('td img#edit') .mouseover(function () {
	       	
               $(this).css({opacity: 1});
                                                         
            }).mouseout(function () {
            	            
               $(this).css({opacity: 0.3});
               
             }).click(function (event) {
             	             	
             	var i = $(this).offset();  //координаты текушего элемента
             	event.preventDefault();
             	var id = $(this).next().attr('title');
             	id = id.substring(id.indexOf('id')).split('=');
             	id = id[1];
             	
               $.post("info.php",{id:id},function (data) {
               var data = JSON.parse(data);
               var img ="../"+data.img;
               var ledit ='form3.php?id='+id;

               $('#page img#img').attr('src',img).attr('src');
               $('#page span').text(data.FIO);
               $('#date').text(data.Date);
               $('#city').text(data.City);
               $('#weight').text(data.Weight);
               $('#ledit').attr('href',ledit)
               $('#page').css({
							top: i.top-23,
							left:i.left -250,
							display: 'block'                
                });             	
             
             });
             	
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
  });
});
  