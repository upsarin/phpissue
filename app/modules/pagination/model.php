<?php

class PaginationModel
{

	// ����� ������� ������
	public function pagination($array, $page, $settings)
	{
		$array['settings'] = $settings;
		return $array;
	}
}