<?php

/* 
 * CAPTCHA.PHP
 * contain the generator of the captcha
 */ 
 
session_start();
$chars = 'abcdefghijklmnopqrstuvwxyz123456789';
$size = 4; // can be change
$captcha = '';

// generate a random string with chars
for ($i=0; $i<=4; $i++) {
  $captcha .= $chars[rand(0, strlen($chars)-1)];
}

// store the generate string in session
$_SESSION['captcha'] = $captcha;

// generate an image (70x30), you will need to change the size of the image if you change the size of the captcha
$img = imagecreatetrue(70, 30);
$fill_color = imagecolorallocate($img, 255, 255, 255);
imagefilledrectangle($img, 0, 0, 70, 30, $fill_color);

// allocate color to the text and define the font (http://www.dafont.com)
$txt_color = imagecolorallocate($img, 10, 10, 10);
$font = 'yourfont.ttf';
imagettftext($img, 23, 0, 5, 30), $txt_color, $font, $_SESSION['captcha'];

// print the image
header("Content-type: image/jpeg");
imagejpeg($img);
imagedestroy($img);
?>

<?php
/* 
 * FORM.PHP
 * contain the form witch the captcha to valid
 */
if (isset($_POST['checkcaptcha'])) {
  if ($_POST['captcha'] == $_SESSION['captcha']) {
    echo 'okay';
  } else {
    echo 'error';
  }
}
?>

<form action="" method="post">
  <img src="captcha.php" alt="the captcha" />
  <input type="text" name="captcha" />
  <input type="submit" value="Check captcha" name="checkcaptcha" />
</form>
