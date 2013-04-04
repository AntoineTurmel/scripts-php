<?php
session_start();
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
