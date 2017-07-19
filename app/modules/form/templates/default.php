<?
//data - содержит данные
//array - содержит инфо модуля
//page - содержит id текущей страницы (полезно для менюх)
?>

<?
$page_id = Element::Page($page);
?>

					<?if(isset($_GET['phrase']) && !empty($_GET['phrase'])){?>
						<h3><?=$_GET['phrase']?></h3>
					<?}?>
					
					<form action="" method="POST" class="form" enctype=multipart/form-data>
						
						<table>
						
						<? foreach($data['FIELDS'] as $key => $val){ ?>
							<? if($val['siteview'] == "N"){
								$data['FIELDS'][$key]['input_type'] = 'hidden';
								$val['input_type'] = 'hidden';
							} 
							$val['code'] = $val['field_type'] .'['. $val['code'] .']';
							?>
							
							<tr>
								<?if($val['input_type'] != 'hidden'){ ?>
								<td>
									<?=$val['name']?>
								</td>
								<? } ?>
								<td>
									<?=Element::inputShow($val)?>
								</td>
							</tr>
						<? } ?>
						</table>
						
						<input type="hidden" name="action" value="<?=$data['action']?>" />
						<input type="hidden" name="module" value="form" /> 
						<input type="hidden" name="main[page_id]" value="<?=$page_id['id']?>" />
						<div class="submit">
							<input class="section-btn send" type="submit" name="send" value="Сохранить"/> 
						</div>
                    </form>
