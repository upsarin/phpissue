<?

class Model
{


	// метод выборки данных
	public function get_data($array)
	{

            User::check_city($array);
		    if(isset($_POST['action'])){
				if($_POST['action'] == 'activate'){

					foreach($_POST['id'] as $key => $id){
						$where = array('id' => $id);
						$what = array('active' => "Y");
						if($array['name'] == "buys"){
							$table = $array['name'];
						} else {
							$table = $array['model'];
						}
						Element::Update($where, $what, $table);
					}
				} else if($_POST['action'] == 'deactivate'){

					foreach($_POST['id'] as $key => $id){
						$where = array('id' => $id);
						$what = array('active' => "N");
						if($array['name'] == "buys"){
							$table = $array['name'];
						} else {
							$table = $array['model'];
						}

						Element::Update($where, $what, $table);
					}
				} else if($_POST['action'] == 'del'){

					foreach($_POST['id'] as $key => $id){
						$where = array('id' => $id);
						if($array['model'] == 'administrator'){
							$table = $array['name'];
						} else {
							$table = $array['model'];
						}
						if(($table != 'users' && $id != '7') || ($table != 'pages' && $id != '1')){
							Element::Delete($where, $table);
						}
					}
				}
			}
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		$routes_from = explode('/', $_SERVER['HTTP_REFERER']);

        if((substr($routes[2], 0, 1) == "?")){
            foreach($_GET as $key => $val){

            }
        }
		if($routes[1] == 'administrator'){
			if($routes[2] != $routes_from[4]){
				unset($_SESSION['user']['filter']);
				unset($_REQUEST['filter']);
			}
		} else {
			if($routes[1] != $routes_from[3]){
				unset($_SESSION['user']['filter']);
				unset($_REQUEST['filter']);
			}
		}

		$array['filter'] = NULL;
		if($_REQUEST['filter']['cancel'] == "сброс" || $_REQUEST['filter'] == "N"){
			unset($_SESSION['user']['filter']);
			unset($_REQUEST['filter']);
            unset($_SESSION['user']['cat_alias']);
		} else {
			unset($_REQUEST['filter']['submit']);
		}

		if((($_GET['c'] == 0 || !$_GET['c'])) || ($array['model'] == "administrator" && $array['name'] != "content")) {
			unset($_SESSION['user']['filter']['cat']);
		}
		//пользовательская настройка по быстрому
		if(($_GET['c'] != 0 && !empty($_SESSION['user']['filter']['name'])) && $array['model'] != "administrator"){
			unset($_SESSION['user']['filter']['name']);
		}
		//
		if(isset($_GET['c']) && (!empty($_GET['c']))){
			$_REQUEST['filter']['cat'] = $_GET['c'];
			$_SESSION['user']['filter']['cat'] = $_REQUEST['c'];

		}
		if($routes[1] == "menu"){
            $cat_id = Element::SelectAll($table = "cats", $filter = array("alias" => $routes[2]));
            unset($_SESSION['user']['cat_alias']);
		    if(count($cat_id) > 0) {
                $_REQUEST['filter']['cat'] = $cat_id[0]['id'];
                $_SESSION['user']['cat_alias'] = $cat_id[0]['alias'];
                $_SESSION['user']['filter']['cat'] = $cat_id[0]['id'];
            } else {
                $_REQUEST['filter']['cat'] = "9";
                $_SESSION['user']['cat_alias'] = "rolls";
                $_SESSION['user']['filter']['cat'] = "9";
            }
        }


		if(isset($_REQUEST['name']) && (!empty($_REQUEST['name']))){
			$_REQUEST['filter']['name'] = $_REQUEST['name'];
			$_REQUEST['p'] = 1;
		}
		if((($_REQUEST['filter']) && !empty($_REQUEST['filter'])) || ($_SESSION['user']['filter'] && count($_SESSION['user']['filter']) > 0)){

			if(isset($_REQUEST['filter']) && !empty($_REQUEST['filter'])){
				if($_REQUEST['filter']['name'] && !empty($_REQUEST['filter']['name'])){

					$name = "%";
					$name.= $_REQUEST['filter']['name'];
					$name .= "%";
					$_REQUEST['filter']['name'] = $name;

				} else if(!empty($_SESSION['user']['filter']['name'])){
					$name = "%";
					$name.= Element::search($_SESSION['user']['filter']['name']);
					$name .= "%";
					$_REQUEST['filter']['name'] = $name;

				}
				$filter = $_REQUEST['filter'];
				$_SESSION['user']['filter'] = $_REQUEST['filter'];
			} else if(isset($_SESSION['user']['filter']) && !empty($_SESSION['user']['filter'])){

				$filter = $_SESSION['user']['filter'];
			}
            if (!empty($filter)) {
                if($filter['cat'] && $filter['cat'] != ""){
                    $filter_cats = array("active" => "Y", "parent" => $filter['cat']	);
                    $cats_child = Element::SelectAll('cats', $filter_cats, null, null);

                    if(count($cats_child) > 0){
                        $filter['cat'] = array(0 => $filter['cat']);

                        foreach($cats_child as $child_count => $child_cat){
                            $filter['cat'][] = $child_cat['id'];

                            $filter_cats = array("active" => "Y", "parent" => $child_cat['id']);
                            $cats_child = Element::SelectAll('cats', $filter_cats, null, null);
                            foreach($cats_child as $child_count2 => $child_cat2){
                                $filter['cat'][] = $child_cat2['id'];
                            }
                        }
                    }
                }
            }


            if (!empty($filter)) {
                $array['filter'] = $filter;
            }
		}
		if($array['list_limit'] != '0'){
			$limit = $array['list_limit'];
			$array['pagination']['list_limit'] = $limit;
		} else {
			$limit = null;
			$array['pagination']['list_limit'] = $limit;
		}
		if($_REQUEST['p']){
			$array['pagination']['page_num'] = $_REQUEST['p'];
		} else {
			$array['pagination']['page_num'] = 1;
		}



		if($array['model'] == 'administrator'){
			$array['pages'] = Element::SelectAll('pages', $filter, null);
			$array['cats'] = Element::SelectAll('pages', $filter, null);
			if($array['name'] == 'pages'){
				$array['content']['pages'] = Element::SelectAll('pages', $filter, $limit);
				if($limit != null){
					$max_pages = Element::SelectAll('pages', $filter);
					$array['pagination']['max_pages'] = count($max_pages) / $limit;
				}
			}
			if($array['name'] == 'cats'){
				$array['content']['cats'] = Element::SelectAll('cats', $filter, $limit);
				if($limit != null){
					$max_pages = Element::SelectAll('cats', $filter);
					$array['pagination']['max_pages'] = count($max_pages) / $limit;
				}
			}
			if($array['name'] == 'content'){
				$array['content']['content'] = Element::SelectAll('content', $filter, $limit);
				if($limit != null){
					$max_pages = Element::SelectAll('content', $filter);
					$array['pagination']['max_pages'] = (count($max_pages)) / $limit;

				}
			}
			if($array['name'] == 'users'){
				$array['content']['users'] = Element::SelectAll('users', $filter, $limit);
				if($limit != null){
					$max_pages = Element::SelectAll('users', $filter);
					$array['pagination']['max_pages'] = count($max_pages) / $limit;
				}
			}
			if($array['name'] == 'buys'){
				$array['content']['buys'] = Element::SelectAll('buys', $filter, $limit);
				if($limit != null){
					$max_pages = Element::SelectAll('buys', $filter);
					$array['pagination']['max_pages'] = count($max_pages) / $limit;
				}
			}
		} else {
			if((isset($array['content_type'])) && ($array['content_type'] != "N")){
				if($array['template_type'] == 'personal'){
					$array['filter']['user'] = $_SESSION['user']['id'];
				}
				if($array['content_type'] == "list"){
					$array['content']['content'] = Element::GetList($array, $array['filter'], $limit);
					if($limit != null){
						$max_pages = Element::GetList($array, $array['filter']);
						$array['pagination']['max_pages'] = count($max_pages) / $limit;
					}
				} else if($array['content_type'] == "element" || $array['content_type'] == "detail"){
					$array['content']['content'] = Element::GetList($array, $array['filter'], $limit);
					if($limit != null){
						$max_pages = Element::GetList($array, $array['filter']);
						$array['pagination']['max_pages'] = count($max_pages) / $limit;
					}
				} else if($array['content_type'] == "cat"){
					$array['content']['content'] = Element::GetCatList($array, $array['filter'], $limit);
					if($limit != null){
						$max_pages = Element::GetCatList($array, $array['filter'], $limit);
						$array['pagination']['max_pages'] = count($max_pages) / $limit;
					}
				} else {
					$array['content']['content'] = Element::$array['content_type']($array, $array['filter'], $limit);
					if($limit != null){
						$max_pages = Element::$array['content_type']($array, $array['filter'], $limit);
						$array['pagination']['max_pages'] = count($max_pages) / $limit;
					}
				}
			}
		}






		return $array;
	}

	public function get_category($array){

        $filter = array("alias" => $array['alias']);
        $cat = Element::SelectAll('cats', $filter, null, null);


        $array["name"] = "cat";
        $array["seotitle"] = $cat[0]['seotitle'];
        $array["id"] = $cat[0]['id'];
        $array["cat_name"] = $cat[0]['name'];
        $array["cat_desc"] = $cat[0]['desc'];
        $array["cat_preview_desc"] = $cat[0]['preview_desc'];
        $array["cat_parent"] = $cat[0]['parent'];
        $array["model"] = "cat";
        $array["temp"] = "cat";
        $array["temp_folder"] = "default";
        $array["template_type"] = "default";
        $array["permission"] = 11;
        $array["content_type"] = "N";
        $array["content_temp"] = "default";
        $array["list_limit"] = 10;
        $array["action"] = "cat";

        $params = array('element_id' => $cat[0]['id'], "iblock" => "cats");
        $table_child = 'field_value';
        $fields = DBConnect::init()->getFeildsValues($params, null, $table_child);
        foreach($fields as $field => $value){
            $array[$value['code']] = $value['value'];
        }

        $filter_childs = array("parent" => $array["id"]);
        $array['content']['child_cats'] = Element::SelectAll('cats', $filter_childs, null, null);
        foreach($array['content']['child_cats'] as $key_child => $val_child) {
            $params = array('element_id' => $val_child['id'], "iblock" => "cats");
            $table_child = 'field_value';
            $fields = DBConnect::init()->getFeildsValues($params, null, $table_child);
            foreach ($fields as $field => $value) {
                $array['content']['child_cats'][$key_child][$value['code']] = $value['value'];
            }
        }
        return $array;
    }
	public function get_data_one($array)
	{

		$array['content'] = Element::GetOne($array['content']['alias']);
		//брать по id
		// Element::GetOne(NULL, array("id" => $id))

		$array['title'] = $array['content'][0]['title'];
		$array['metakeys'] = $array['content'][0]['metakeys'];
		$array['keywords'] = $array['content'][0]['keywords'];
		if(isset($array['content'][0]['parent_temp']) && !empty($array['content'][0]['parent_temp'])){
			$array['temp'] = $array['content'][0]['parent_temp'];
		}
		if(isset($array['content'][0]['child_temp']) && !empty($array['content'][0]['child_temp'])){
			$array['content_temp'] = $array['content'][0]['child_temp'];
		}
		if(isset($array['content'][0]['temp_folder']) && !empty($array['content'][0]['temp_folder'])){
			$array['temp_folder'] = $array['content'][0]['temp_folder'];
		}
		return $array;
	}


	public function create($array)
	{
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		if($routes[1] == 'administrator'){
			$array['pages'] = DBConnect::init()->selectAll('pages', null);
			$array['cats'] = DBConnect::init()->selectAll('cats', null);

		}
		return $array;
	}

	public function settings($array)
	{
		return $array;
	}
	public function edit($array)
	{
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		if($routes[1] == 'administrator'){
			$array['pages'] = DBConnect::init()->selectAll('pages', null);
			$array['cats'] = DBConnect::init()->selectAll('cats', null);

		}
		return $array;
	}

	public function login(){

	}

	public function logout(){

	}

    /**
     * @return mixed
     */
    public function deactivate(){
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		if($routes[1] == 'administrator'){
			$page = $routes[2];
			$action = $routes[3];
			$id = $routes[4];
		} else {
			$page = $routes[1];
			$action = $routes[2];
			$id = $routes[3];
		}
		if($page == 'pages') {
			$table = $page;
		} else if($page == 'cats'){
			$table = $page;
		} else if($page == 'modules'){
			$table = $page;
		} else if($page == 'users'){
			$table = $page;
		} else if($page == 'buys'){
			$table = $page;
		} else {
			$table = 'content';
		}

		$where = array('id' => $id);
		$what = array('active' => "N");
		if(!empty($id) && isset($id) && $action == 'deactivate'){
			$mess = Element::Update($where, $what, $table);
		}
		if(!empty($mess)) {
            return $mess;
        }
	}
	public function activate(){
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		if($routes[1] == 'administrator'){
			$page = $routes[2];
			$action = $routes[3];
			$id = $routes[4];
		} else {
			$page = $routes[1];
			$action = $routes[2];
			$id = $routes[3];
		}
		if($page == 'pages') {
			$table = $page;
		} else if($page == 'cats'){
			$table = $page;
		} else if($page == 'modules'){
			$table = $page;
		} else if($page == 'users'){
			$table = $page;
		} else if($page == 'buys'){
			$table = $page;
		} else {
			$table = 'content';
		}

		$where = array('id' => $id);
		$what = array('active' => "Y");
		if(isset($id) && !empty($id) && $action == 'activate'){
			$mess = Element::Update($where, $what, $table);
		}
		if(!empty($mess)) {
            return $mess;
        }
    }
}