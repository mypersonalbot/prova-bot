<?php

$botToken = "370687464:AAEgW1lkgT5Z0TawbrbbZblKcCbKA31e2X0";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getUpdates");
$update_array = json_decode($update, TRUE);
$text = $update_array["result"][0]["message"]["text"];

print_r($text);

?>
