<?php

$name = $_POST['name'];
$msg = $_POST['msg'];
$token = "1899659761:AAHtWZq4QLI2EPVdi9bpQR0PVAi7k19gZDU";
$chat_id = "-1001526205108";
$arr = array(
  'Псевдоним: ' => $name,
  'Сообщение:' => $msg
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thanks.html');
} else {
  echo "Error";
}
?>