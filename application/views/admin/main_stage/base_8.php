<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/admin.css">
<?php 
	include_once("/var/www/sumo/application/controllers/admin/control_tournament.php");
	$sd = new control_tournament();//echo "<pre>";print_r($data);echo "</pre>";
?>
<style type="text/css">
	td{
			
	}
</style>
<input type="hidden"  class="tableInfo" value="athlete">
<div id="mw-content-text" lang="ru" dir="ltr" class="mw-content-ltr"><table border="0" cellpadding="0" cellspacing="0" style="font-size: 90%; margin:1em 2em 1em 1em;" style="border-collapse:separate">
<tr>
<td>&#160;</td>
<td align="center" colspan="3" style="border:1px solid #aaa;" bgcolor="#F2F2F2">1-й раунд</td>
<td>&#160;</td>
<td>&#160;</td>
<td align="center" colspan="3" style="border:1px solid #aaa;" bgcolor="#F2F2F2">2-й раунд</td>
<td>&#160;</td>
<td>&#160;</td>
<td align="center" colspan="3" style="border:1px solid #aaa;" bgcolor="#F2F2F2">3-й раунд</td>
<td>&#160;</td>
<td>&#160;</td>
<td align="center" colspan="3"></td>
<td>&#160;</td>
<td>&#160;</td>
<td align="center" colspan="4" style="border:1px solid #aaa;" bgcolor="#F2F2F2">Финал</td>
</tr>
<tr>
<td width="1">&#160;</td>
<td width="25">&#160;</td>
<td width="125">&#160;</td>
<td width="25">&#160;</td>
<td width="5">&#160;</td>
<td width="5">&#160;</td>
<td width="25">&#160;</td>
<td width="125">&#160;</td>
<td width="25">&#160;</td>
<td width="5">&#160;</td>
<td width="5">&#160;</td>
<td width="25">&#160;</td>
<td width="125">&#160;</td>
<td width="25">&#160;</td>
<td width="5">&#160;</td>
<td width="5">&#160;</td>
<td width="25">&#160;</td>
<td width="125">&#160;</td>
<td width="25">&#160;</td>
<td width="5">&#160;</td>
<td width="5">&#160;</td>
<td width="25">&#160;</td>
<td width="125">&#160;Финалисты:</td>
<td width="25">&#160;</td>
<td width="25">&#160;</td>
</tr>
<tr>
<td>&#160;</td>
<td colspan="3" align="center">Главная</td>
<td colspan="17" align="center">&#160;&#160;</td>
</tr>
<tr>
<td>&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">1</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[17]?>"><?=$sd->members_data($data[17])?></a></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/2/17/<?=$data[17]?>/<?=$data['title']?>" >+</a></td>
<td style="border-width:0 0 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td colspan="16" align="center">&#160;&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;"><span style ="color:red;">1</span></td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[1]?>"><?=$sd->members_data($data[1])?></a></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;</td>
</tr>
<tr>
<td>&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">&#160;8</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[18]?>"><?=$sd->members_data($data[18])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/2/18/<?=$data[18]?>/<?=$data['title']?>" >+</a></td>
<td style="border-width:1px 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
<td colspan="15" align="center">&#160;&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;"><span style ="color:red;">2</span></td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[15]?>"><?=$sd->members_data($data[15])?></a></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;</td>
</tr>
<tr>
<td colspan="4">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 1px 1px; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">&#160;9</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[9]?>"><?=$sd->members_data($data[9])?></a></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/3/9/<?=$data[9]?>/<?=$data['title']?>" >+</a></td>
<td style="border-width:0 0 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td colspan="11" align="center">&#160;&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;"><span style ="color:red;">3</span></td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[16]?>"><?=$sd->members_data($data[16])?></a></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;</td>
</tr>
<tr>
<td colspan="4">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:1px 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">&#160;10</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[10]?>"><?=$sd->members_data($data[10])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/3/10/<?=$data[10]?>/<?=$data['title']?>" >+</a></td>
<td style="border-width:1px 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td>&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">5</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[19]?>"><?=$sd->members_data($data[19])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/2/19/<?=$data[19]?>/<?=$data['title']?>" >+</a></td>
<td style="border-width:0 1px 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
<td colspan="3">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td>&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">4</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[20]?>"><?=$sd->members_data($data[20])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/2/20/<?=$data[20]?>/<?=$data['title']?>" >+</a></td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td colspan="4">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="9">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 1px 1px; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">4&#160;</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[4]?>"><?=$sd->members_data($data[4])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/4/4/<?=$data[4]?>/<?=$data['title']?>" >+</a></td>
<td style="border-width:0 0 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 1px 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="9">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:1px 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">&#160;5</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[5]?>"><?=$sd->members_data($data[5])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/4/5/<?=$data[5]?>/<?=$data['title']?>" >+</a></td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:1px 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td>&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">3</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[21]?>"><?=$sd->members_data($data[21])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/2/21/<?=$data[21]?>/<?=$data['title']?>" >+</a></td>
<td style="border-width:0 0 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td colspan="4">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
<td colspan="8">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td>&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">&#160;6</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[22]?>"><?=$sd->members_data($data[22])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/2/22/<?=$data[22]?>/<?=$data['title']?>" >+</a></td>
<td style="border-width:1px 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
<td colspan="3">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
<td colspan="8">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="4">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 1px 1px; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">&#160;11</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[11]?>"><?=$sd->members_data($data[11])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/3/11/<?=$data[11]?>/<?=$data['title']?>" >+</a></td>
<td style="border-width:0 1px 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
<td colspan="8">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td colspan="4">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:1px 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">&#160;12</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[12]?>"><?=$sd->members_data($data[12])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/3/12/<?=$data[12]?>/<?=$data['title']?>" >+</a></td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td colspan="9">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td>&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">7</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[23]?>"><?=$sd->members_data($data[23])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/2/23/<?=$data[23]?>/<?=$data['title']?>" >+</a></td>
<td style="border-width:0 1px 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
<td colspan="13">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td>&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">2</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[24]?>"><?=$sd->members_data($data[24])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/2/24/<?=$data[24]?>/<?=$data['title']?>" >+</a></td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td colspan="14">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 1px 1px; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">2</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[2]?>"><?=$sd->members_data($data[2])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/7/2/<?=$data[2]?>/<?=$data['title']?>" >+</a></td>
</tr>
<tr>
<td colspan="19">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:1px 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">3</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[3]?>"><?=$sd->members_data($data[3])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/7/3/<?=$data[3]?>/<?=$data['title']?>" >+</a></td>
</tr>
<tr>
<td>&#160;</td>
<td colspan="3" align="center">Утешение</td>
<td colspan="15">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td>&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">&#160;29</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[29]?>"><?=$sd->members_data($data[29])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/3/29/<?=$data[29]?>/<?=$data['title']?>" >+</a></td>
<td style="border-width:0 0 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td colspan="14">&#160;</td>
<td style="border-width:0 1px 0px 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td>&#160;</td>
  <td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">&#160;30</td>
  <td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[30]?>"><?=$sd->members_data($data[30])?></td>
  <td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/3/30/<?=$data[30]?>/<?=$data['title']?>" >+</a></td>
   <td style="border-width:0 1px 0px 0; border-style:solid;border-color:black;">&#160;</td>  
  <td colspan="14">&#160;</td>
  <td style="border-width:0 1px 0px 0; border-style:solid;border-color:black;">&#160;</td>
</tr> 
<tr>
<td>&#160;</td>
<td colspan="4">&#160;</td>
<td style="border-width:0px 0px 0 1px; border-style:solid;border-color:black;">&#160;</td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F2F2F2">&#160;&#160;25</td>
<td align="center" bgcolor="#F9F9F9" style="border:1px solid #aaa;"><a class="linkModalWindow" title="<?=$data[25]?>"><?=$sd->members_data($data[25])?></td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a href="<?=base_url()?>control_tournament/regist_winner/4/25/<?=$data[25]?>/<?=$data['title']?>" >+</a></td></td>
<td style="border-width:0px 0px 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0px 0; border-style:solid;border-color:black;">&#160;</td>
<td colspan="8">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td>&#160;</td>
<td colspan="4">&#160;</td>
<td style="border-width:1px 0 0px 1px; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">&#160;26</td>
<td  align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[26]?>"><?=$sd->members_data($data[26])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/4/26/<?=$data[26]?>/<?=$data['title']?>" >+</a></td></td>
<td style="border-width:1px 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
<td colspan="8">&#160;</td>
<td style="border-width:0 1px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td>&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">&#160;31</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[31]?>"><?=$sd->members_data($data[31])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/3/31/<?=$data[31]?>/<?=$data['title']?>" >+</a></td>
  <td style="border-width:1px 1px 1px 1px; border-style:solid;border-color:black;">&#160;</td>
  <td colspan="4">&#160;</td>
  <td style="border-width:0px 1px 0px 0px; border-style:solid;border-color:black;">&#160;</td>
  <td style="border-width:0px 0px 1px 0px; border-style:solid;border-color:black;">&#160;</td>
 <!-- -->
   <td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">&#160;13</td>
  <td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[13]?>"><?=$sd->members_data($data[13])?></td>
  <td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/5/13/<?=$data[13]?>/<?=$data['title']?>" >+</a></td>
  <td style="border-width:0px 0px 0px 0px; border-style:solid;border-color:black;">&#160;</td>
  <td style="border-width:0px 0px 0px 0px; border-style:solid;border-color:black;">&#160;</td>
   <td colspan="1" align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">&#160;6</td>
  <td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[6]?>"><?=$sd->members_data($data[6])?></td>
  <td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/6/6/<?=$data[6]?>/<?=$data['title']?>" >+</a></td>
<td style="border-width:0px 1px 0px 0px; border-style:solid;border-color:black;">&#160;&#160;</td>
</tr>
<tr>
<td>&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">&#160;32</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[32]?>"><?=$sd->members_data($data[32])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/3/32/<?=$data[32]?>/<?=$data['title']?>" >+</a></td>
<td style="border-width:0px 0px 0px 0px; border-style:solid;border-color:black;">&#160;</td>
<td colspan="4">&#160;</td>
<td style="border-width:0px 1px 0px 0px; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0px 0px 0px 0px; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">&#160;14</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[14]?>"><?=$sd->members_data($data[14])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/5/14/<?=$data[14]?>/<?=$data['title']?>" >+</a></td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td colspan="1" border=0 align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">&#160;7</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[7]?>"><?=$sd->members_data($data[7])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/6/7/<?=$data[7]?>/<?=$data['title']?>" >+</a></td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;&#160;</td>
</tr>
<tr>
<td>&#160;</td>
<td colspan="3">&#160;</td>
<td style="border-width:0px 0px 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0px 0px; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">27</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[27]?>"><?=$sd->members_data($data[27])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/4/27/<?=$data[27]?>/<?=$data['title']?>" >+</a></td></td>
<td style="border-width:0 1px 1px 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 1px; border-style:solid;border-color:black;">&#160;</td>
<td colspan="4">&#160;</td>
<td style="border-width:0px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td colspan="3">&#160;</td>
<td style="border-width:0px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
<tr>
<td>&#160;</td>
<td colspan="4">&#160;</td>
<td style="border-width:0 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td align="center" bgcolor="#F2F2F2" style="border:1px solid #aaa;">&#160;28</td>
<td style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;&#160;<a class="linkModalWindow" title="<?=$data[28]?>"><?=$sd->members_data($data[28])?></td>
<td align="center" style="border:1px solid #aaa;" bgcolor="#F9F9F9">&#160;<a href="<?=base_url()?>control_tournament/regist_winner/4/28/<?=$data[28]?>/<?=$data['title']?>" >+</a></td></td>
<td style="border-width:1px 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td style="border-width:0 0 0 0; border-style:solid;border-color:black;">&#160;</td>
<td colspan="8">&#160;</td>
<td style="border-width:0 0 0 0; border-style:solid;border-color:black;">&#160;</td>
</tr>
</table>
<?php include('modalWindow.php');?>
<p><br /></p>
<hr /></div>