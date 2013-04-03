<?php

/*
 * obtain exif datas of a picture with PHP
 * official documentation : http://php.net/manual/en/book.exif.php
 */

$pic = 'your-picture.jpg';
$exif = exif_read_data($pic, 'IFD0', 0);
?>
