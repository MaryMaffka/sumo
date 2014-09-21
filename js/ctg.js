
var sex='';
var age='';
var base_url = "http://localhost/sumo/";

var M_12 = {'1':'30','2':'35','3':'40','4':'45','5':'50','6':'55','7':'60','8':'65','9':'65+'};
var W_12 = ['30','33','36','40','45','50','55','60','60+'];

var M_14 = ['35','40','45','50','55','60','65','70','70+'];
var W_14 = ['33','36','40','45','50','55','60','65','65+'];

var M_16 = ['55','65','75','85','95','95+'];
var W_16 = ['45','50','55','60','65','65+'];

var M_18 = ['60','70','80','90','100','100+'];
var W_18 = ['50','55','60','65','70','70+'];

var M_21 = ['60','70','85','92','100','115','115+'];
var W_21 = ['55','60','65','70','75','80','80+'];

var M_23 = ['60','70','85','92','100','115','115+'];
var W_23 = ['55','60','65','70','75','80','80+'];

var M_23p = ['70','85','92','100','115','115+'];
var W_23p = ['55','65','73','80','95','95+'];


$(document).ready(function () 
{
	var base_url = "http://localhost/sumo/";
	$('#age').change(function () {
		age = $(this).val();
	});
	$('#sex :radio').change(function () {
		sex = $(this).val();

	});	
   
   $('#weightl').mousedown(function () {
   	if (sex!='' && age!='') {
   		$('#weightId .error').remove();	
		var sel = document.getElementById('weightl');
		sel.innerHTML = "";
			var type = sex+'_'+age;
          var typeCategory = defineCategory(type);
          var listWeight = fillSelect(typeCategory);
         $(this).append(listWeight);
   	}
      else {
   			    	 
      	 $('#weightId').prepend("<div class='error'>Возраст и Вес должны быть выбраны</div>");
      }

   })
//Отображение основной информации по категориям   
  $('#men-menu li a').click(function(event){
  	  event.preventDefault();
	var type = $(this).attr('title');			//значение title
	var arrayOfCategory = defineCategory(type);      //получаем массив категорий веса
	var data = {case:arrayOfCategory,type:type};
	$('#tablewidget').load(base_url+'index.php/preparation/loadArrayCategory/',data);  //данные контроллеру	
	});
	
//Кнопка создания Основного Этапа	   
}); 



function defineCategory(type) {

 switch(type) {
 	case 'W_12':
    return W_12; 	
 	 break;
  	case 'M_12':  
  	 return M_12;
  	 break;
  	case 'W_14':
    return W_14; 	
 	 break;
  	case 'M_14':  
  	 return M_14;
  	 break;
  	case 'W_16':
    return W_16; 	
 	 break;
  	case 'M_16':  
  	 return M_16;
  	 break; 	
  	case 'W_18':
    return W_18; 	
 	 break;
  	case 'M_18':  
  	 return M_18;
  	 break;
	 case 'W_21':  
  	 return W_21;
  	 break;
	 case 'M_21':  
  	 return M_21;
  	 break;
	 case 'W_23':  
  	 return W_23;
  	 break;
	 case 'M_23':  
  	 return M_23;
  	 break;
	  case 'W_23p':  
  	 return W_23p;
  	 break;
	 case 'M_23p':  
  	 return M_23p;
  	 break;
	 
 	default:alert('Все фигня');
 }	
	
	return;
	
}

function fillSelect (mass) {

var tester = "";
	for (var i in mass) {		
		tester =tester+'<option>'+mass[i]+'</option>';
	}
return tester;

}