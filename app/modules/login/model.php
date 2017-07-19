<?php

class LoginModel
{

	// метод выборки данных
	public function get_data($array)
	{
		$params = array("type" => "login", "active" => "Y");
		$sort = array("sort", "asc");
		$array = DBConnect::init()->getFeilds($params, $sort);
		return $array;
	}
	public function login_user($page=null, $array, $post=null)
	{
		if(isset($post['login'])){
			
			if(isset($post['login']['main']['login'])){
				$key = "login";
				$val = $post['login']['main']['login'];
			} else if(isset($post['login']['main']['email'])){
				$key = "email";
				$val = $post['login']['main']['email'];
			} else if(isset($post['login']['main']['phone'])){
				$key = "phone";
				$val = $post['login']['main']['phone'];
			}
			
			//Запрос в БД с параметрами
			$params = array($key => $val, "active" => "Y");
			$array = DBConnect::init()->get_user(array(), $params, array());
			/*
			$filter = array("element_id" => $array[0]['id'], "code" => "exe_cat");
			$exe_res = Element::SelectAll('field_value', $filter, $page, null);
			$array[0]['exe_cat'] = $exe_res[0];
			*/
			if($array[0][$key] == $val && $array[0]['password'] == md5($post['login']['main']['password'])){
				User::login($array[0]);
				//сделать проверку на существование сессии с таким же пользователем и делать сброс
				$array['mess'] = "Успешная авторизация";
				
			} else {
				$params = array("type" => "login", "active" => "Y");
				$sort = array("sort", "asc");
				$array['form'] = DBConnect::init()->getFeilds($params, $sort);
				$array['mess'] = "Ошибка при авторизации";
				$array['error'] = "Вы ввели неправильное сочетание логина и пароля!";
			}
			return $array;
			
		}
		
	}
	
	public function logout_user(){
		User::logout();
		$array = "Выход";
		return $array;
	}

}