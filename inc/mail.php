<?php

function handle_contact_form_submission()
{
  if(isset($_POST['subscribe'])) {
    die();
  }  
  
  if ( empty($_POST) ){
    header( 'Location: /' );
  }
  // Проверка nonce
  if (
    !isset($_POST['contact_form_nonce_field']) || 
    !wp_verify_nonce($_POST['contact_form_nonce_field'], 'send_contact_form_nonce')) {
    exit(json_encode(array('answer' => 'error', 'message' => 'Security error. FUCK YOU!!!')));
  }

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

  $email_from = 'send@poverka.perm.ru';
  $name_from = 'Центр метрологии';
  date_default_timezone_set('Asia/Yekaterinburg');
  $now = date("Y-m-d H:i:s");
  $subject = 'Заявка с сайта';

  // $admin_email = 'diywebdev@yandex.ru';
  $admin_email = 'odn@geosr.ru';
  $odn = true;

  if(isset($_POST['type']) && !empty($_POST['type'])){
    if($_POST['type'] == 'poverka'){
      $admin_email = 'Poverka@geosr.ru';
      $odn = false;
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
    if ( $value != "" && $key != 'agree' && $key != 'type' && $key != 'action' && $key != 'contact_form_nonce_field' && $key != '_wp_http_referer') {
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

  require_once('phpmailer/PHPMailerAutoload.php');

  $mail = new PHPMailer;
  $mail->CharSet = 'utf-8';


  $mail->isSMTP();
  $mail->Host = 'mail.hosting.reg.ru';
  // $mail->Host = get_field('smtp_host', 'option');
  $mail->SMTPAuth = true;
  $mail->Username = $email_from;
  $mail->Password = 'yC7hS2yI4xeF7xU6';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;
  $mail->setFrom($email_from, $name_from);
  $mail->addAddress($admin_email);
  $mail->addBCC('diywebdev@yandex.ru');
  if($odn){
    $mail->addBCC('sar4486@yandex.ru');
    // $mail->addBCC('newstreetpunk@yandex.ru');
  }
  $mail->isHTML(true);
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
}

add_action('admin_post_send_contact_form', 'handle_contact_form_submission');
add_action('admin_post_nopriv_send_contact_form', 'handle_contact_form_submission');
