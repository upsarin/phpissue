<?php

class BreadcrumbsModel
{

	// ����� ������� ������
	public function breadcrumbs($array, $page, $settings)
	{
		$array['settings'] = $settings;
		return $array;
	}
}