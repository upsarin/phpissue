<?if(isset($array['content'])){?>
	
	<div class="elementsNews">
	<?foreach($array['content']['content'] as $element){?>
		
		<?
		$filter = array("content_id" => $element['id']);
		$images = Element::SelectAll('files', $filter, null, null);
		?>
		
		<div class="elementNews">
			<h4><a href="/<?=$array['alias']?>/detail/<?=$element['alias']?>/"><?=$element['title']?></a></h4> 
			<div class="elementImage">
				<a href="/<?=$array['alias']?>/detail/<?=$element['alias']?>/">
					<img src="<?=(count($images) > 0) ? '/'. $images[0]['path'] : ''?>" />
				</a>
			</div>
			
			<div class="element_content">
			��������: <?=$element['preview_desc']?> <br />
			����: <?=$element['price']?> ���. <br />
			���: <?=$element['cod']?> <br />
			������: <?=$element['consist']?> <br />
			���� ��������: <?=$element['edate']?> <br />
			�����: <?=$element['taste']?> <br />
			</div>
		</div>
	<? } ?>
	</div>
<? } ?>