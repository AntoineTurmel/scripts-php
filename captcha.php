<?php
// how to generate a small captcha using GD

session_start();
$chars = 'abcdefghijklmnopqrstuvwxyz123456789';
$size = 4; // can be change
$captcha = '';

// generate a random string with chars
for ($i=0; $i<=4; $i++) {
  $captcha .= $chars[rand(0, strlen($chars)-1)];
}

$_SESSION['captcha'] = $captcha;
?>
