	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/admin.css">
<?php 
include_once("/var/www/sumo/application/controllers/admin/control_tournament.php");
$sd = new control_tournament();
?>
<input type="hidden"  class="tableInfo" value="athlete">

<div id="mw-content-text" lang="ru" dir="ltr" class="mw-content-ltr">
	<table border="0" cellpadding="0" cellspacing="0" style="font-size: 90%; margin:1em 2em 1em 1em;">
		<tr>
			<td>&#160;</td>
			<td align="center" colspan="3" style="border:1px solid #aaa;" bgcolor="#F2F2F2">Четвертьфиналы</td>
			<td colspan="2"></td>
			<td align="center" colspan="3" style="border:1px solid #aaa;" bgcolor="#F2F2F2">Полуфиналы</td>
			<td colspan="2"></td>
			<td align="center" colspan="3" style="border:1px solid #aaa;" bgcolor="#F2F2F2">Финал</td>
		</tr>
		<tr>
			<td>&#160;</td>	
			<td style="width:2em;">&#160;</td>
			<td style="width:11em;">&#160;</td>
			<td style="width:2em;">&#160;</td>
			<td style="width:1em;">&#160;</td>
			<td style="width:1em;">&#160;</td>
			<td style="width:2em;">&#160;</td>
			<td style="width:11em;">&#160;</td>
			<td style="width:2em;">&#160;</td>
			<td style="width:1em;">&#160;</td>
			<td style="width:1em;">&#160;</td>
			<td style="width:2em;">&#160;</td>
			<td style="width:11em;">&#160;</td>
			<td style="width:2em;">&#160;</td>
		</tr>
		<tr>
			<td height="14">&#160;</td>
			<td align="center" bgcolor="#F2F2F2" style="border-width:1px 1px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;">1</td>
			<td style="border-width:1px 0px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[8]?>"><?=$sd->members_data($data[8])?></a></td>
			<td align="center" style="border-width: 1px 1px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/2/4/<?=$data[8]?>/<?=$data['title']?>" >+</a></td>
			<td style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
		</tr>
		<tr>
			<td height="7"></td>
			<td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">8</td>.
			<td rowspan="2" style="border-width:1px 0px 1px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[9]?>"><?=$sd->members_data($data[9])?></a></td>
			<td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/2/4/<?=$data[9]?>/<?=$data['title']?>" >+</a></td>
			<td rowspan="6" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
		</tr>
		<tr>
			<td height="7"></td>
			<td rowspan="2" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
			<td rowspan="2" align="center" bgcolor="#F2F2F2" style="border-width:1px 1px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;">&#160;</td>
			<td rowspan="2" style="border-width:1px 0px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;<a class="linkModalWindow" title="<?=$data[4]?>"><?=$sd->members_data($data[4])?></a></td>
			<td rowspan="2" align="center" style="border-width: 1px 1px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/3/2/<?=$data[4]?>/<?=$data['title']?>" >+</a></td>
			<td rowspan="2" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
		</tr>
		<tr>
			<td height="7"></td>
			<td colspan="3" rowspan="2" align="center"></td>
		</tr>
		<tr>
			<td height="7"></td>
			<td rowspan="2" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
			<td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">&#160;</td>
			<td rowspan="2" style="border-width:1px 0px 1px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;<a class="linkModalWindow" title="<?=$data[5]?>"><?=$sd->members_data($data[5])?></a></td>
			<td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/2/4/<?=$data[8]?>/<?=$data['title']?>" >+</a></td>
			<td rowspan="10" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</	td>
		</tr>
		<tr>
			<td height="7"></td>
			<td rowspan="2" align="center" bgcolor="#F2F2F2" style="border-width:1px 1px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;">4</td>
			<td rowspan="2" style="border-width:1px 0px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[10]?>"><?=$sd->members_data($data[10])?></a></td>
			<td rowspan="2" align="center" style="border-width: 1px 1px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/2/5/<?=$data[10]?>/<?=$data['title']?>" >+</a></td>
		</tr>
		<tr>
			<td height="7"></td>
		</tr>
		<tr>
			<td height="14">&#160;</td>
			<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">5</td>
			<td style="border-width:1px 0px 1px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[11]?>/<?=$data['title']?>"><?=$sd->members_data($data[11])?></a></td>
			<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/2/5/<?=$data[11]?>" >+</a></td>
			<td style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
		</tr>
		<tr>
			<td height="14" colspan="2"></td>
			<td colspan="8" rowspan="2">&#160;</td>
			<td style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
			<td align="center" bgcolor="#F2F2F2" style="border-width:1px 1px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;">&#160;</td>
			<td style="border-width:1px 0px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[2]?>"><?=$sd->members_data($data[2])?></a></td>
			<td align="center" style="border-width: 1px 1px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/2/1/<?=$data[2]?>/<?=$data['title']?>" >+</a></td>
		</tr>
		<tr>
			<td height="14" colspan="2"></td>
			<td style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
			<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">&#160;</td>
			<td style="border-width:1px 0px 1px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[3]?>"><?=$sd->members_data($data[3])?></a></td>
			<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/2/4/<?=$data[8]?>/<?=$data['title']?>" >+</a></td>
		</tr>
		<tr>
			<td height="14">&#160;</td>
			<td align="center" bgcolor="#F2F2F2" style="border-width:1px 1px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;">3</td>
			<td style="border-width:1px 0px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[12]?>"><?=$sd->members_data($data[12])?></a></td>
			<td align="center" style="border-width: 1px 1px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/2/6/<?=$data[12]?>/<?=$data['title']?>" >+</a></td>
			<td style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
		</tr>
		<tr>
			<td height="7"></td>
			<td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">6</td>
			<td rowspan="2" style="border-width:1px 0px 1px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[13]?>"><?=$sd->members_data($data[13])?></a></td>
			<td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/2/6/<?=$data[13]?>/<?=$data['title']?>" >+</a></td>
			<td rowspan="6" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;</td>
		</tr>
		<tr>
			<td height="7"></td>
			<td rowspan="2" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;</td>
			<td rowspan="2" align="center" bgcolor="#F2F2F2" style="border-width:1px 1px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;">&#160;</td>
			<td rowspan="2" style="border-width:1px 0px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[6]?>"><?=$sd->members_data($data[6])?></a></td>
			<td rowspan="2" align="center" style="border-width: 1px 1px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/3/3/<?=$data[6]?>/<?=$data['title']?>" >+</a></td>
		</tr>
		<tr>
			<td height="7"></td>
			<td colspan="3" rowspan="2" align="center"></td>
		</tr>
		<tr>
			<td height="7"></td>
			<td rowspan="2" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
			<td rowspan="2" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">&#160;</td>
			<td rowspan="2" style="border-width:1px 0px 1px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[7]?>"><?=$sd->members_data($data[7])?></a></td>
			<td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/3/3/<?=$data[7]?>/<?=$data['title']?>" >+</a></td>
			<td rowspan="2" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
		</tr>
		<tr>
			<td height="7"></td>
			<td rowspan="2" align="center" bgcolor="#F2F2F2" style="border-width:1px 1px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;">2</td>
			<td rowspan="2" style="border-width:1px 0px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[14]?>"><?=$sd->members_data($data[14])?></a></td>
			<td rowspan="2" align="center" style="border-width: 1px 1px 0px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/2/7/<?=$data[14]?>/<?=$data['title']?>" >+</a></td>
			<td height="7">&#160;</td>
			<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;"></td>
			<td style="border-width:1px 0px 1px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[13]?>"><?=$sd->members_data($data[13])?></a></td>
			<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;</td>
		</tr>
		<tr>
			<td height="7"></td>
		</tr>
		<tr>
			<td height="14">&#160;</td>
			<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">7</td>
			<td style="border-width:1px 0px 1px 1px; border-style:solid; border-color:#aaa #aaa #aaa #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[15]?>"><?=$sd->members_data($data[15])?></a></td>
			<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/2/7/<?=$data[15]?>/<?=$data['title']?>" >+</a></td>
			<td style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
		</tr>
</table> 
 
<?php include('modalWindow.php');?>
