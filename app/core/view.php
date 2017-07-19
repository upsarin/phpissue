<?php

class View
{
	
	
	function generate($content_view, $template_view = null, $array = null, $page)
	{



		$dir = "app/templates/". $array['temp_folder'] ."/". $array['name'];
		if(is_dir($dir)){
			$dir = $dir;
		} else {
			@mkdir($dir, "0777");
			chmod($dir, "0777");  
			$dir = $dir;
		}

		$content = $dir ."/". $content_view;
		if(file_exists($content)){
			if(isset($array['content'])) {
				$html_temp = "app/templates/" . $array['temp_folder'] ."/html/". $array['content_type'] ."/". $array['content_temp'] .".php";
				if(!file_exists($html_temp)){
					$html_temp = "app/templates/html/". $array['content_type'] ."/". $array['content_temp'] .".php";
				}
		
			}
		} else {
			$fp = @fopen($content, "w+"); 
			fwrite($fp, '
			<div class="sicky-wrapper-free-space"></div>
				<div class="container main-block" id="joinOurTeamFull" style="margin-bottom:0">
					<h2><?=$array["title"]?></h2>

					<?if(isset($array["content"]) && !empty($array["content"])) {
						include $html_temp;
					} else if($array["action"] == "create") { ?>
						<div class="add_form">
							<?=minc::pos("form", $array["name"])?>
						</div>	
					<? } ?>
				</div>
			'
			);
			fclose ($fp);
			
		}
		
		
		
		if((isset($_REQUEST['ajax'])) && ($_REQUEST['ajax'] == "Y")) {
			minc::pos($_REQUEST['module'], $array['id']);
		} else {
			
			$parent_temp = 'app/templates/' . $array['temp_folder'] ."/". $template_view;
			if(!file_exists($parent_temp)){
				$fp = @fopen($parent_temp, "w+"); 
				fwrite($fp, "Шаблон не существует");
				fclose ($fp);
				include $parent_temp;
			} else {
				include $parent_temp;
			}
		}
		
	}
}
