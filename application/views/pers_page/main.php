<!DOCTYPE html>
<html>
<head>
<meta name="Description" content="..." />
<meta name="Keywords" content="..." />
<meta name="robots" content="all,follow" />
<meta name="author" content="root" />
<meta name="copyright" content="Mantis-a [http://www.mantisa.cz/]" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="<?=base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="<?=base_url();?>bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" href="<?=base_url();?>css/pers_page.css" type="text/css" />
<style type="text/css">
		button{
			width:197px;
			padding: 0;
			margin: 0;	
		}
		#pers_table table{
			background:#fff;
			border-radius:10px;								
		}
		.table td{
			padding:30px; 	
		}
		.table th{
			padding: 30px;
			padding-left:70px;
		}
		#fio{
			padding-top:100px; 		
		}
		#pers_table{
			height: 450px;
			width: 400px;
			position:relative; 
			top:60px;
			left:490px;
			right:300px;
			margin-bottom: 0;			
		}
	
	body{
		background:#C7E2C8;	
	}
</style>
</head>

<body >
	<div align="center" id="pers_table">
	<table  width="400" height='390' align="center" class="table">
		<tr>
		   <td align="center"><img src="<?=base_url($img);?>"></td>
         <td align="center"id="fio"><b><?=$Name." ".$Lastname?></b></td>		
		</tr>
		<tr>
         <th>Country:</th>
         <td align="center"><?=$Country?></td>		
		 </tr>
		 <tr>
         <th>Date:</th>
         <td align="center"><?=$Date?></td>		
		</tr>
		<tr>
         <th>Status:</th>
         <td align="center"><?=$Status?></td>		
		 </tr>
	</table>
	
	<button><a href="<?=base_url('index.php/edit/');?>">Edit</a></button>
	<button><a href="<?=base_url('index.php/auth/quitUser');?>">Quit</a></button>
	</div>
</body>
</html>