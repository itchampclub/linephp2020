<?php
require_once __DIR__ . '/lineBot.php';

$bot = new Linebot();
$text = $bot->getMessageText();
$bot->reply($text);

$filename = 'text.txt';
if (file_exists($filename)) {
  $myfile = fopen('text.txt', "w+") or die("Unable to open file!");
  fwrite($myfile, $text);
  fclose($myfile);
} else {
  $myfile = fopen('text.txt', "x+") or die("Unable to open file!");
  fwrite($myfile, $text);
  fclose($myfile);
}

?>
