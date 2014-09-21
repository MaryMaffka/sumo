<!DOCTYPE html>
<html>
<head>
<meta name="Description" content="..." />
<meta name="Keywords" content="..." />
<meta name="robots" content="all,follow" />
<meta name="author" content="root" />
<meta name="copyright" content="Mantis-a [http://www.mantisa.cz/]" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">	
	  table #rel{
		min-width:323px;
		max-height: 361px;
		border-collapse: collapse;

	}
	  #rel td{
		border-color:white;	
		padding:0.5px;
	}
 	#main table{
		border-spacing:4px;
		page-break-inside: avoid;	
	}

</style>


<table align="center" id="main" width="646">
<tr>
<?php
$td = 0;
	foreach($badge as $i){
	$td = $td +1;
	$e = explode('(',$i['Country']);
	$i['abr'] = trim($e[1],')');
?> 
	 <td>
		<table border="" frame="border" align="center" id="rel">
			<tr>
				<td align="center" ><img src="<?=base_url().$i['img']?>" alt="" ></td>	
	   	        <td align="center"> <img  width="95px" height="95px" src="<?=base_url()?>img/emblema.bmp" alt="" align="center">
				<h1><b><?=$i['abr']?></b></h1></td>
			</tr>	
			<tr align="center">
				<td align="center" colspan="2"><h3><b>The Juniors, Cadets, Children European Sumo ChampionshipsJune, 1-4, 2013 Lutsk, Ukraine</b></h3></td>
			</tr>
			<tr>
				<td align="center" colspan="2" ><h3><?=$i['Name']." ".$i['Lastname']?></h3></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><h2><b><?=$i['Status']?></b></h2></td>
			</tr>
		</table>
	  </td>
	  
<?php if($td ==2){
		print('</tr><tr>');
		$td = 0;
		}
	} ?>
</tr>
</table>
	
<a href="javascript:(print());">Print</a>
