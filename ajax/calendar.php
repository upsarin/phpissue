<?

session_start();
require_once ("/home3/autobrot/public_html/app/classes/User.php");
require_once ("/home3/autobrot/public_html/app/classes/Main_classes.php");
require_once ("/home3/autobrot/public_html/app/core/dbo.php");

if($_POST){
    /* получатели */
    $to= $_POST['email'] . ", " ; //обратите внимание на запятую
    $to .= "mvlad91@mail.ru";

    /* тема/subject */
    $subject = "Онлайн брониование с сайта carbrat.ru";

    /* сообщение */
    $message = '
<html>
<head>
 <title>Поступила заявка на бронирование с сайта carbrat.ru</title>

</head>
<body>

<p>Имя: '. $_POST["name"] .'</p>
<p>Телефон: '. $_POST["phone"] .'</p>
<p>Дата: '. $_POST["date"] .'</p>
<p>Время: '. $_POST["timeHour"] .':'. $_POST["timeMin"] .'</p>
<p>Заявка на адрес: '. $_POST["adress"] .'</p>
<p>Заявка для: '. $_POST["comName"] .'</p>

</body>
</html>
';

    /* Для отправки HTML-почты вы можете установить шапку Content-type. */
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    /* дополнительные шапки */
    $headers .= "From:  info@carbrat.ru \r\n";
//$headers .= "Cc: birthdayarchive@example.com\r\n";
//$headers .= "Bcc: birthdaycheck@example.com\r\n";

    /* и теперь отправим из */
    mail($to, $subject, $message, $headers);


    echo "Ваша заявка отправлена.";
}
?>