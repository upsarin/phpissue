<?
//�������� � ����� ��������, � ��������
function parse_excel_file( $filename ){
	// ���������� ����������
	

	$result = array();

	// �������� ��� ����� (xls, xlsx), ����� ��������� ��� ����������
	$file_type = PHPExcel_IOFactory::identify( $filename );
	// ������� ������ ��� ������
	$objReader = PHPExcel_IOFactory::createReader( $file_type );
	$objPHPExcel = $objReader->load( $filename ); // ��������� ������ ����� � ������
	$result = $objPHPExcel->getActiveSheet()->toArray(); // ��������� ������ �� ������� � ������

	return $result;
}

$res = parse_excel_file( '/home/m/mvlad91/funornot/public_html/file.xls' );

foreach($res as $key => $val){
	
	$array_parse[0]['main']['name'] = $val[0];
	$array_parse[0]['main']['cat'] = $val[3];
	$array_parse[0]['main']['title'] = $val[0];
	$array_parse[0]['main']['user'] = "7";
	$array_parse[0]['main']['alias'] = strtolower(Element::Translit_rus($val[0]));
	$array_parse[0]['main']['fav'] = null;
	$array_parse[0]['main']['page_id'] = "21";
	$array_parse[0]['main']['active'] = "Y";
	$array_parse[0]['main']['fields'] = "Y";
	$array_parse[0]['main']['parent_temp'] = "default";
	$array_parse[0]['main']['child_temp'] = "default";
	$array_parse[0]['main']['temp_folder'] = "default";
	
	$val[1] = round(($val[1] / 100) * 110);
	
	$array_parse[0]['alter']['price'] = $val[1];
	$array_parse[0]['alter']['edate'] = $val[2];
	DBConnect::init()->saveElements($array_parse);
	
	sleep(rand(3,5));
}

?>