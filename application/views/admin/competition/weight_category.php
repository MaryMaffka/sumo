<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<style>
#embossment div {

		background-color:#f6fafe;
		border-radius: 7px;
		height: 170px;
		width: 170px;
		padding: 1px;
		box-shadow: 0 2px 4px rgba(0, 0, 0, .2);
		
	}
	#embossment div table span{
		font-family: georgia,serif;
		// font-style: italic;
		font-size: 45px;
		color: #505050;	
	}
	.first-main{
		padding-bottom: 20px;
	}
	#main-content-table td{
		border-spacing: 40px;
		border-collapse: separate;
	}
	#bloks{
		margin-right:120px;
	}
	#content-table{
		font-size:14px;
	}
	
</style>
<?php
 $arr = array('30','33','40','45','50','60','','','');
?>
<table align="center" width=""   id="main-content-table">
	<tr>
	<?php
		$td = 0;
		foreach($overall as $weight => $count){
		$td++;
	?> 
		<td>
		<table id="bloks">
			<tr>
				<td>
					<div class="canvas" id="embossment">
						<div>
							<table align = "center"   id="content-table">
								<tr>
									<td align="center" class="first-main"><span><?=$weight?></span></td>
								</tr>
								<tr>
										<td align="center"><a id="participant" href="<?=base_url()?>preparation/showMember/<?=$weight.'_'.$type?>">Участники(<?=$count[0]?>)</a></td>
								</tr>	
								<tr>
									<td><a href="<?=base_url()?>sorter_list_box/createList/<?=$weight.'_'.$type?>">Основной этап</a><img src="<?=base_url()?>img/check_1.png" style="width:16px; display:<?=$count[1]?>;" alt="" ></td>
								</tr>	
								<tr>
									<td><a href="<?=base_url()?>analysis_result/index/<?=$weight.'_'.$type?>">Результаты</a></td>
								</tr>
							</table>
						</div>
					</div>
				</td>
			</tr>
		</table>
		</td>
	  
<?php if($td ==3){
		print('</tr><tr>');
		$td = 0;
		}
	}
?>
	</tr>
</table>

