<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$token = '6175792496:AAEqBGs15ExHpZ8_uRGklhRu-B0UEj9RXno';
$chat_id = -633684826;

$arr = array(
  'User Name ' => $name, 
  'Phone ' => $phone,
  'Email ' => $email,
  'Message' => $msg,
)

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

// $sendToTelegram2 = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($sendToTelegram) {
  // header('Location: Thanks.html');

} else {
  echo "Error";
}
?>