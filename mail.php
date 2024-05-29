<?php

if (array_key_exists('HTTP_ORIGIN', $_SERVER)) {
	$http_origin = $_SERVER['HTTP_ORIGIN'];
} else if (array_key_exists('HTTP_REFERER', $_SERVER)) {
	$http_origin = $_SERVER['HTTP_REFERER'];
} else {
	$http_origin = $_SERVER['REMOTE_ADDR'];
}

if (in_array($http_origin, [
		"https://metrology-11aa4.web.app/",
		"http://metrology-11aa4.web.app/",
		"http://poverkaperm.ru/",
		"http://poverkaperm.ru",
		"https://poverkaperm.ru/",
		"https://poverkaperm.ru",
		"http://localhost",
		"http://localhost:3000",
		"localhost:3000",
		"http://localhost:3002",
		"localhost:3002"
	]))
{
	header("Access-Control-Allow-Origin: $http_origin");
	header('Vary: Origin');
}

if(isset($_POST['subscribe'])) {
	die();
}


if ( empty($_POST) ){
	header( 'Location: /' );
}

// $email_from = 'send@diywebdev.ru';
$email_from = 'send@poverka.perm.ru';
$name_from = 'Центр метрологии';
date_default_timezone_set('Asia/Yekaterinburg');
$now = date("Y-m-d H:i:s");
$subject = 'Заявка с сайта';

// $admin_email = 'diywebdev@yandex.ru';
$admin_email = 'odn@geosr.ru';
$true = true;

if(isset($_POST['type']) && !empty($_POST['type'])){
	if($_POST['type'] == 'poverka'){
		$admin_email = 'Poverka@geosr.ru';
		$true = false;
		// $admin_email = 'newstreetpunk@yandex.ru';
	}
}

// line color for script foreach
$c = true;

$message = '';

$message .= "
		" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Дата и время заявки</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>$now</td>
		</tr>
		";

if(!isset($_POST['phone']) || $_POST['phone'] == '') {
	$res = ['answer' => 'required', 'field' => '#phone', 'message' => 'Вы не указали телефон для связи'];
	exit(json_encode($res));
}

if(!preg_match('/^\+7 [0-9]{3} [0-9]{3}-[0-9]{2}-[0-9]{2}$/', $_POST['phone'])) {
	$res = ['answer' => 'required', 'field' => '#phone', 'message' => 'Некорректный номер телефона'];
	exit(json_encode($res));
}

if(!isset($_POST['agree']) || $_POST['agree'] != 'on') {
	$res = ['answer' => 'required', 'field' => '#agree', 'message' => 'Чтобы продолжить, установите этот флажок'];
	exit(json_encode($res));
}

foreach ( $_POST as $key => $value ) {
	switch ($key) {
		case 'name':
		case 'Name':
			$keyRu = 'Имя';
			break;
		case 'phone':
		case 'Phone':
		case 'tel':
		case 'Tel':
			$keyRu = 'Телефон';
			break;
		case 'form':
			$keyRu = 'Форма';
			break;
		case 'page':
			$keyRu = 'Страница';
			break;
		case 'page_url':
			$keyRu = 'Страница';
			break;
		case 'email':
			$keyRu = 'Email';
			break;
		case 'address':
			$keyRu = 'Адрес';
			break;
		case 'message':
			$keyRu = 'Сообщение';
			break;
		default:
			$keyRu = $key;
			break;
	}
	if ( $value != "" && $key != 'agree' && $key != 'type') {
		if ($keyRu == 'Телефон') {
			$phone = preg_replace("#[^\d]#", "", $_POST[$key]);
			$phone = substr($phone, 1);
			$phone = preg_replace('/^(\d{3})(\d{3})(\d{2})(\d{2})$/iu', '+7$1$2$3$4', $phone);
			$value = '<a href="tel:'. $phone .'">'.$_POST[$key].'</a>';
		}
		if ($keyRu == 'Email') {
			$value = '<a href="mailto:'.$value.'">'.$value.'</a>';
		}

		$message .= "
		" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$keyRu</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
		</tr>
		";
	}
}

$message = "<table style='width: 100%;'>$message</table>";

require_once($_SERVER['DOCUMENT_ROOT'].'/inc/phpmailer/PHPMailerAutoload.php');

$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$mail->isSMTP();                                    // Set mailer to use SMTP
$mail->Host = 'mail.hosting.reg.ru';  					// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                             // Enable SMTP authentication
$mail->Username = $email_from; // Ваш логин от почты с которой будут отправляться письма
//$mail->Password = 'Xthtgfbyf1959*';
$mail->Password = 'yC7hS2yI4xeF7xU6'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров
$mail->setFrom($email_from, $name_from); // от кого будет уходить письмо?
$mail->addAddress($admin_email);     // Кому будет уходить письмо
$mail->addBCC('diywebdev@yandex.ru');
if($true){
	$mail->addBCC('sar4486@yandex.ru');
	// $mail->addBCC('newstreetpunk@yandex.ru');
}
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = $subject;
$mail->Body    = $message;
$mail->AltBody = '';

if(!$mail->send()) {
	$res = ['answer' => 'error', 'error' => 'Error: ' . $mail->ErrorInfo];
	exit(json_encode($res));
} else {
	$res = ['answer' => 'OK'];
	exit(json_encode($res));
}